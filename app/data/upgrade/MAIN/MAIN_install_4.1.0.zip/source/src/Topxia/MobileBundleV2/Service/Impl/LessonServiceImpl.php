<?php
namespace Topxia\MobileBundleV2\Service\Impl;

use Topxia\MobileBundleV2\Service\BaseService;
use Topxia\MobileBundleV2\Service\LessonService;
use Topxia\Common\ArrayToolkit;
use Topxia\Service\Util\CloudClientFactory;

class LessonServiceImpl extends BaseService implements LessonService
{

	public function getLessonMaterial()
	{
		$lessonId = $this->getParam("lessonId");
		$start = (int) $this->getParam("start", 0);
		$limit = (int) $this->getParam("limit", 10);
		$lessonMaterials = $this->controller->getMaterialService()->findLessonMaterials($lessonId, $start, 1000);
		$files = $this->controller->getUploadFileService()->findFilesByIds(ArrayToolkit::column($lessonMaterials, 'fileId'));
		
		return array(
			"start"=>$start,
			"limit"=>$limit,
			"total"=>1000,
			"data"=>$this->filterMaterial($lessonMaterials, $files)
			);
	}

	private function filterMaterial($lessonMaterials, $files)
	{
		$newFiles = array();
		foreach ($files as $key => $file) {
			$newFiles[$file['id']] = $file;
		}

		return array_map(function($lessonMaterial) use ($newFiles){
			$lessonMaterial['createdTime'] = date('c', $lessonMaterial['createdTime']);
			$field = $lessonMaterial['fileId'];
			$lessonMaterial['fileMime'] = $newFiles[$field]['type'];
			return $lessonMaterial;
		}, $lessonMaterials);
	}

	public function downMaterial()
	{
		$courseId = $this->request->get("courseId");
		$materialId = $this->request->get("materialId");
                        $user = $this->controller->getUserByToken($this->request);
                        if (!$user->isLogin()) {
                            return $this->createErrorResponse('not_login', "您尚未登录！");
                        }
		list($course, $member) = $this->controller->getCourseService()->tryTakeCourse($courseId);

        		if ($member && !$this->controller->getCourseService()->isMemberNonExpired($course, $member)) {
            		return "course_materials";
        		}

        		if ($member && $member['levelId'] > 0) {
            		if ($this->controller->getVipService()->checkUserInMemberLevel($member['userId'], $course['vipLevelId']) != 'ok') {
                				return "course_show";
            		}
        		}

        		$material = $this->controller->getMaterialService()->getMaterial($courseId, $materialId);
        		if (empty($material)) {
            		throw "createNotFoundException";
        		}		

        		$file = $this->controller->getUploadFileService()->getFile($material['fileId']);
        		if (empty($file)) {
            		throw "createNotFoundException";
        		}

        		if ($file['storage'] == 'cloud') {
            		$factory = new CloudClientFactory();
            		$client = $factory->createClient();
            		$client->download($client->getBucket(), $file['hashId'], 3600, $file['filename']);
        		} else {
            		return $this->createPrivateFileDownloadResponse($request, $file);
        		}
	}

	private function createPrivateFileDownloadResponse(Request $request, $file)
    	{

        		$response = BinaryFileResponse::create($file['fullpath'], 200, array(), false);
        		$response->trustXSendfileTypeHeader();

        		$file['filename'] = urlencode($file['filename']);
        		if (preg_match("/MSIE/i", $request->headers->get('User-Agent'))) {
            		$response->headers->set('Content-Disposition', 'attachment; filename="'.$file['filename'].'"');
        		} else {
            		$response->headers->set('Content-Disposition', "attachment; filename*=UTF-8''".$file['filename']);
        		}

        		$mimeType = FileToolkit::getMimeTypeByExtension($file['ext']);
        		if ($mimeType) {
            		$response->headers->set('Content-Type', $mimeType);
        		}

        		return $response;
    	}	

    	public function learnLesson()
    	{
    		$courseId = $this->getParam("courseId");
		$lessonId = $this->getParam("lessonId");
    		$user = $this->controller->getuserByToken($this->request);
        		if (!$user->isLogin()) {
            		return $this->createErrorResponse('not_login', "您尚未登录！");
        		}

        		$this->controller->getCourseService()->finishLearnLesson($courseId, $lessonId);

        		return "finished";
    	}

            public function getLessonStatus()
            {
                        $user = $this->controller->getuserByToken($this->request);
                        $courseId = $this->getParam("courseId");
                        $lessonId = $this->getParam("lessonId");

                        if ($user->isLogin()) {
                            $learnStatus = $this->controller->getCourseService()->getUserLearnLessonStatus($user['id'], $courseId, $lessonId);
                            $lessonMaterials = $this->controller->getMaterialService()->findLessonMaterials($lessonId, 0, 1);
                                                return array(
                                                    "learnStatus"=>$learnStatus,
                                                    "hasMaterial"=> empty($lessonMaterials) ? false : true
                                                    );
                        } 

                        return array();
            }

    	public function getLearnStatus()
    	{
    		$user = $this->controller->getuserByToken($this->request);
		$courseId = $this->getParam("courseId");

		if ($user->isLogin()) {
			$learnStatuses = $this->controller->getCourseService()->getUserLearnLessonStatuses($user['id'], $courseId);
		} else {
			$learnStatuses = array();
		}

		return $learnStatuses;
    	}

    	public function unLearnLesson()
    	{
    		$courseId = $this->getParam("courseId");
		$lessonId = $this->getParam("lessonId");
    		$user = $this->controller->getuserByToken($this->request);
        		if (!$user->isLogin()) {
            		return $this->createErrorResponse('not_login', "您尚未登录！");
        		}

        		$this->controller->getCourseService()->cancelLearnLesson($courseId, $lessonId);

        		return "learning";
    	}

	public function getCourseLessons()
	{
		$token = $this->controller->getUserToken($this->request);
		$user = $this->controller->getUser();
		$courseId = $this->getParam("courseId");

		$lessons = $this->controller->getCourseService()->getCourseItems($courseId);
		$lessons = $this->controller->filterItems($lessons);
		if ($user->isLogin()) {
			$learnStatuses = $this->controller->getCourseService()->getUserLearnLessonStatuses($user['id'], $courseId);
		} else {
			$learnStatuses = array();
		}

		$lessons = $this->filterLessons($lessons);
		return array(
			"lessons"=>array_values($lessons),
			"learnStatuses"=>$learnStatuses
			);
	}

	public function getLesson()
	{
		$courseId = $this->getParam("courseId");
		$lessonId = $this->getParam("lessonId");
		if (empty($courseId)) {
			return $this->createErrorResponse('not_courseId', '课程信息不存在！');
		}

		$user = $this->controller->getuserByToken($this->request);
		$lesson = $this->controller->getCourseService()->getCourseLesson($courseId, $lessonId);
		if (empty($lesson)) {
			return $this->createErrorResponse('not_courseId', '课时信息不存在！');
		}

		if ($lesson['free'] == 1) {
                                    if ($user->isLogin()) {
                                        if ($this->controller->getCourseService()->isCourseStudent($courseId, $user['id'])) {
                                            $this->controller->getCourseService()->startLearnLesson($courseId, $lessonId);
                                        }
                                        
                                    }
			return $this->coverLesson($lesson);
		}

		if (!$user->isLogin()) {
			return $this->createErrorResponse('not_login', '您尚未登录，不能查看该课时');
		}

                        $this->controller->getCourseService()->startLearnLesson($courseId, $lessonId);
		$member = $this->controller->getCourseService()->getCourseMember($courseId, $user['id']);
		$member = $this->previewAsMember($member, $courseId, $user);
		if ($member && in_array($member['role'], array("teacher", "student"))) {
			return $this->coverLesson($lesson);;
		}
		return $this->createErrorResponse('not_student', '你不是该课程学员，请加入学习!');
	}

            private function getTestpaperLesson($lesson)
            {
                        $user = $this->controller->getUser();
                        $id = $lesson['mediaId'];

                        $testpaper = $this->getTestpaperService()->getTestpaper($id);
                        if (empty($testpaper)) {
                            return $this->createErrorResponse('error', '试卷不存在!');
                        }

                        $testResult = $this->getTestpaperService()->findTestpaperResultByTestpaperIdAndUserIdAndActive( $id, $user['id']);
                        $lesson['content'] = array(
                            'status'=>empty($testResult) ? 'nodo' : $testResult['status'],
                            'resultId'=>empty($testResult) ? 0 : $testResult['id']
                            );

                        return $lesson;
            }
            
            public function getTestpaperInfo()
            {
                        $id = $this->getParam("testId");
                        $user = $this->controller->getUserByToken($this->request);
                        if (!$user->isLogin()) {
                            return $this->createErrorResponse('not_login', '您尚未登录，不能查看该课时');
                        }

                        $testpaper = $this->getTestpaperService()->getTestpaper($id);
                        if (empty($testpaper)) {
                            return $this->createErrorResponse('error', '试卷已删除，请联系管理员。!');
                        }

                        $items = $this->getTestpaperService()->getTestpaperItems($id);
                        return array(
                            'testpaper'=>$testpaper,
                            'items'=>$this->filterTestpaperItems($items)
                            );
            }

            private function filterTestpaperItems($items)
            {
                $itemArray = array();
                foreach ($items as $key => $item) {
                    $type = $item['questionType'];
                    if (isset($itemArray[$type])) {
                        $count = $itemArray[$type];
                        $itemArray[$type] = $count + 1;
                    } else {
                        $itemArray[$type] = 1;
                    }
                }

                return $itemArray;
            }

	private function coverLesson($lesson)
	{
		$lesson['createdTime'] = date('c', $lesson['createdTime']);

		switch ($lesson['type']) {
			case 'ppt':
				return $this->getPPTLesson($lesson);
                                    case 'audio':
                                                return $this->getVideoLesson($lesson);
			case 'video':
                                                return $this->getVideoLesson($lesson);
                                    case 'testpaper':
                                                return $this->getTestpaperLesson($lesson);
			default:
				$lesson['content'] = $this->wrapContent($lesson['content']);
		}
		
		return $lesson;
	}

	private function getVideoLesson($lesson)
	{
        $token = $this->controller->getUserToken($this->request);
        $mediaId = $lesson['mediaId'];
        $mediaSource= $lesson['mediaSource'];
        if ($lesson['length'] > 0) {
            $lesson['length'] =  $this->getContainer()->get('topxia.twig.web_extension')->durationFilter($lesson['length']);
        } else {
            $lesson['length'] = '';
        }

		if ($mediaSource == 'self') {
			$file = $this->controller->getUploadFileService()->getFile($lesson['mediaId']);
			if (!empty($file)) {
                if ($file['storage'] == 'cloud') {
                    $factory = new CloudClientFactory();
                    $client = $factory->createClient();

                    $lesson['mediaConvertStatus'] = $file['convertStatus'];

                    if (!empty($file['metas2']) && !empty($file['metas2']['sd']['key'])) {

                        if (isset($file['convertParams']['convertor']) && ($file['convertParams']['convertor'] == 'HLSEncryptedVideo')) {
                            $token = $this->getTokenService()->makeToken('hlsvideo.view', array('data' => $lesson['id'], 'times' => 1, 'duration' => 3600));
                            $hlsKeyUrl = $this->controller->generateUrl('course_lesson_hlskeyurl', array('courseId' => $lesson['courseId'], 'lessonId' => $lesson['id'], 'token' => $token['token']), true);
                            $headLeaderInfo = $this->getHeadLeaderInfo();
                            $url = $client->generateHLSEncryptedListUrl($file['convertParams'], $file['metas2'], $hlsKeyUrl, $headLeaderInfo['headLeaders'], $headLeaderInfo['headLeaderHlsKeyUrl'], 3600);
                        } else {
                            $url = $client->generateHLSQualitiyListUrl($file['metas2'], 3600);
                        }
                        $lesson['mediaUri'] = (isset($url) and is_array($url) and !empty($url['url'])) ? $url['url'] : '';
                    } else {
                        if (!empty($file['metas']) && !empty($file['metas']['hd']['key'])) {
                            $key = $file['metas']['hd']['key'];
                        } else {
                            if ($file['type'] == 'video') {
                                $key = null;
                            } else {
                                $key = $file['hashId'];
                            }
                        }

                        if ($key) {
                            $url = $client->generateFileUrl($client->getBucket(), $key, 3600);
                            $lesson['mediaUri'] = $url['url'];
                        } else {
                            $lesson['mediaUri'] = '';
                        }

                    }
                } else {
                    $lesson['mediaUri'] = $this->controller->generateUrl('mapi_course_lesson_media', array('courseId'=>$lesson['courseId'], 'lessonId' => $lesson['id'], 'token' => empty($token) ? '' : $token['token']), true);
                }
            } else {
                $lesson['mediaUri'] = '';
            }
        } else if ($mediaSource== 'youku') {
            $matched = preg_match('/\/sid\/(.*?)\/v\.swf/s', $lesson['mediaUri'], $matches);
            if ($matched) {
                $lesson['mediaUri'] = "http://player.youku.com/embed/{$matches[1]}";
            } else {
                $lesson['mediaUri'] = '';
            }
        } else if ($mediaSource == 'tudou') {
            $matched = preg_match('/\/v\/(.*?)\/v\.swf/s', $lesson['mediaUri'], $matches);
            if ($matched) {
                $lesson['mediaUri'] = "http://www.tudou.com/programs/view/html5embed.action?code={$matches[1]}";
            } else {
                $lesson['mediaUri'] = '';
            }
        } else {
            $lesson['mediaUri'] = $mediaUri;
        }
        return $lesson;
	}

	private function getPPTLesson($lesson)
	{
		$file = $this->controller->getUploadFileService()->getFile($lesson['mediaId']);
        		if (empty($file)) {
            		return $this->createErrorResponse('not_ppt', '获取ppt课时失败!');
        		}

        		if ($file['convertStatus'] != 'success') {
            		if ($file['convertStatus'] == 'error') {
                			$url = $this->controller->generateUrl('course_manage_files', array('id' => $courseId));
                			return $this->createErrorResponse('not_ppt', 'PPT文档转换失败，请到课程文件管理中，重新转换!');
            		} else {
            			return $this->createErrorResponse('not_ppt', 'PPT文档还在转换中，还不能查看，请稍等。!');
            		}
        		}

        		$factory = new CloudClientFactory();
        		$client = $factory->createClient();

        		$ppt = $client->pptImages($file['metas2']['imagePrefix'], $file['metas2']['length']. '');
        		$lesson['content'] = $ppt;

        		return $lesson;
	}

            private function getHeadLeaderInfo()
            {
                $storage = $this->getSettingService()->get("storage");
                if(!empty($storage) && array_key_exists("video_header", $storage) && $storage["video_header"]){

                    $headLeader = $this->controller->getUploadFileService()->getFileByTargetType('headLeader');
                    $headLeaderArray = json_decode($headLeader['metas2'],true);
                    $headLeaders = array();
                    foreach ($headLeaderArray as $key => $value) {
                        $headLeaders[$key] = $value['key'];
                    }
                    $headLeaderHlsKeyUrl = $this->controller->generateUrl('uploadfile_cloud_get_head_leader_hlskey', array(), true);
                    return array(
                        'headLeaders' => $headLeaders,
                        'headLeaderHlsKeyUrl' => $headLeaderHlsKeyUrl
                    );
                } else {
                    return array(
                        'headLeaders' => '',
                        'headLeaderHlsKeyUrl' => ''
                    );
                }
            }

	private function wrapContent($content)
	{
		$content= $this->controller->convertAbsoluteUrl($this->request, $content);

		$render = $this->controller->render('TopxiaMobileBundleV2:Content:index.html.twig', array(
            		'content' => $content
        		));

		return $render->getContent();
	}

	private function filterLessons($lessons)
	{
		return array_map(function($lesson) {
            		$lesson['content'] = "";
            		return $lesson;
        		}, $lessons);
	}
}