<?php
namespace Topxia\WebBundle\Controller;

use Symfony\Component\HttpFoundation\Request;

use Topxia\Service\Util\CloudClientFactory;
use Topxia\Common\StringToolkit;
use Topxia\Common\FileToolkit;
use Topxia\Service\User\CurrentUser;

class UploadFileController extends BaseController
{

    public function uploadAction(Request $request)
    {
        $token = $request->request->get('token');
        $token = $this->getUserService()->getToken('fileupload', $token);
        if (empty($token)) {
            throw $this->createAccessDeniedException('上传TOKEN已过期或不存在。');
        }

        $user = $this->getUserService()->getUser($token['userId']);
        if (empty($user)) {
            throw $this->createAccessDeniedException('上传TOKEN非法。');
        }

        $currentUser = new CurrentUser();
        $this->getServiceKernel()->setCurrentUser($currentUser->fromArray($user));

        $targetType = $request->query->get('targetType');
        $targetId = $request->query->get('targetId');

        $originalFile = $this->get('request')->files->get('file');

        $file = $this->getUploadFileService()->addFile($targetType, $targetId, array(), 'local', $originalFile);
        return $this->createJsonResponse($file);
    }

    // @todo 权限验证
    public function browserAction(Request $request)
    {
        $user = $this->getCurrentUser();

        $conditions = $request->query->all();

        $files = $this->getUploadFileService()->searchFiles($conditions, 'latestUpdated', 0, 1000);
        
        return $this->createFilesJsonResponse($files);
    }

    public function paramsAction(Request $request)
    {
        $user = $this->getCurrentUser();
        if (!$user->isLogin()) {
            throw $this->createAccessDeniedException();
        }

        $targetType = $request->query->get('targetType');
        $targetId = $request->query->get('targetId');

        $params = array();

        $setting = $this->setting('storage');
        if ($setting['upload_mode'] == 'cloud') {
            $params['mode'] = 'cloud';

            $factory = new CloudClientFactory();
            $client = $factory->createClient();

            $convertor = $request->query->get('convertor');
            $commands = null;
            $twoStep = null;
            if ($convertor == 'video') {
                $commands = array_keys($client->getVideoConvertCommands());
            } elseif ($convertor == 'audio') {
                $commands = array_keys($client->getAudioConvertCommands());
            } elseif ($convertor == 'ppt') {
                $commands = array_keys($client->getPPTConvertCommands());
                $twoStep = '1';
            }

            //@todo refacor it. 
            $keySuffix = substr(base_convert(sha1(uniqid(mt_rand(), true)), 16, 36), 0, 16);
            $key = "{$targetType}-{$targetId}/{$keySuffix}";
            $convertKey = null;

            $clientParams = array();
            if ($commands) {
                $convertKey = $keySuffix;
                if ($twoStep) {
                    $notifyUrl = $this->generateUrl('uploadfile_cloud_convert_callback', array('key' => $convertKey, 'twoStep' => $twoStep), true);
                    $clientParams = array(
                        'convertCommands' => implode(';', $commands),
                        'convertNotifyUrl' => $notifyUrl,
                        'convertor' => 'document',
                    );
                } else {
                    $notifyUrl = $this->generateUrl('uploadfile_cloud_convert_callback', array('key' => $convertKey), true);
                    $clientParams = array(
                        'convertCommands' => implode(';', $commands),
                        'convertNotifyUrl' => $notifyUrl,
                    );
                }
            }

            $uploadToken = $client->generateUploadToken($client->getBucket(), $clientParams);
            if (!empty($uploadToken['error'])) {
                throw \RuntimeException('创建上传TOKEN失败！');
            }

            $params['url'] = $uploadToken['url'];

            $params['postParams'] = array(
                'token' => $uploadToken['token'],
                'key' => $key,
            );

            if ($convertKey) {
                $params['postParams']['x:convertKey'] = $convertKey;
            }

        } else {
            $params['mode'] = 'local';
            $params['url'] = $this->generateUrl('uploadfile_upload', array('targetType' => $targetType, 'targetId' => $targetId));
            $params['postParams'] = array(
                'token' => $this->getUserService()->makeToken('fileupload', $user['id'], strtotime('+ 2 hours')),
            );
        }

        return $this->createJsonResponse($params);
    }

    public function cloudCallbackAction(Request $request)
    {
        $user = $this->getCurrentUser();
        if (!$user->isLogin()) {
            throw $this->createAccessDeniedException();
        }

        $targetType = $request->query->get('targetType');
        $targetId = $request->query->get('targetId');
        $fileInfo = $request->request->all();

        $file = $this->getUploadFileService()->addFile($targetType, $targetId, $fileInfo, 'cloud');
        return $this->createJsonResponse($file);
    }

    public function cloudFileinfoAction(Request $request)
    {
        $type = $request->query->get('type', '');
        $key = $request->query->get('key', '');

        if (empty($key)) {
            return $this->createNotFoundException();
        }

        $factory = new CloudClientFactory();
        $client = $factory->createClient();

        if ($type == 'video') {
            $info = $client->getVideoInfo($client->getBucket(), $key);
        } else if ($type == 'audio') {
            $info = $client->getAudioInfo($client->getBucket(), $key);
        } else {
            $info = array();
        }

        if (!empty($info['duration'])) {
            $info['duration'] = StringToolkit::secondsToText($info['duration']);
        }

        return $this->createJsonResponse($info);
    }

    public function cloudConvertCallbackAction(Request $request)
    {
        $data = $request->getContent();

        $this->getLogService()->info('uploadfile', 'cloud_convert_callback', "文件云处理回调", array('content' => $data));

        $key = $request->query->get('key');
        $fullKey = $request->query->get('fullKey');
        if (empty($key)) {
            throw new \RuntimeException('key不能为空');
        }

        $data = json_decode($data, true);

        if (empty($data['id'])) {
            throw new \RuntimeException('数据中id不能为空');
        }

        if ($fullKey) {
            $hash = $fullKey;
        } else {
            $hash = "{$data['id']}:{$key}";
        }

        $file = $this->getUploadFileService()->getFileByConvertHash($hash);
        if (empty($file)) {
            throw new \RuntimeException('文件不存在');
        }

        if ($data['code'] != 0) {
            $this->getUploadFileService()->convertFile($file['id'], 'error');
            throw new \RuntimeException('转换失败');
        }

        $items = (empty($data['items']) or !is_array($data['items'])) ? array() : $data['items'];

        $status = $request->query->get('twoStep', false) ? 'doing' : 'success';

        if ($status == 'doing') {
            $callback = $this->generateUrl('uploadfile_cloud_convert_callback', array('key' => $key, 'fullKey' => $hash), true);
            $file = $this->getUploadFileService()->convertFile($file['id'], $status, $data['items'], $callback);
        } else {
            $file = $this->getUploadFileService()->convertFile($file['id'], $status, $data['items']);
        }

        if (in_array($file['convertStatus'], array('success', 'error'))) {
            $this->getNotificationService()->notify($file['createdUserId'], 'cloud-file-converted', array(
                'file' => $file,
            ));
        }

        return $this->createJsonResponse($file['metas2']);
    }

    private function getUploadFileService()
    {
        return $this->getServiceKernel()->createService('File.UploadFileService');
    }

    protected function getCourseService()
    {
        return $this->getServiceKernel()->createService('Course.CourseService');
    }

    protected function getNotificationService()
    {
        return $this->getServiceKernel()->createService('User.NotificationService');
    }

    private function createFilesJsonResponse($files)
    {
        foreach ($files as &$file) {
            $file['updatedTime'] = date('Y-m-d H:i', $file['updatedTime']);
            $file['size'] = FileToolkit::formatFileSize($file['size']);
            unset($file);
        }
        return $this->createJsonResponse($files);
    }

}