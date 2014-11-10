<?php

namespace Topxia\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\File\File;

use Topxia\Service\Util\LiveClientFactory;
use Topxia\Common\ArrayToolkit;
use Topxia\Common\FileToolkit;
use Topxia\Common\Paginator;
use Topxia\Service\Util\PluginUtil;
use Topxia\Service\Util\CloudClientFactory;

use Imagine\Gd\Imagine;
use Imagine\Image\Box;
use Imagine\Image\Point;
use Imagine\Image\ImageInterface;

class SettingController extends BaseController
{
    public function siteAction(Request $request)
    {
        $site = $this->getSettingService()->get('site', array());

        $default = array(
            'name'=>'',
            'slogan'=>'',
            'url'=>'',
            'logo'=>'',
            'seo_keywords'=>'',
            'seo_description'=>'',
            'master_email'=>'',
            'icp'=>'',
            'analytics'=>'',
            'status'=>'open',
            'closed_note'=>'',
            'favicon'=>'',
            'copyright'=>''
        );

        $site = array_merge($default, $site);

        if ($request->getMethod() == 'POST') {
            $site = $request->request->all();
            $this->getSettingService()->set('site', $site);
            $this->getLogService()->info('system', 'update_settings', "更新站点设置", $site);
            $this->setFlashMessage('success', '站点信息设置已保存！');
        }

        return $this->render('TopxiaAdminBundle:System:site.html.twig', array(
            'site'=>$site
        ));
    }

    public function mobileAction(Request $request)
    {
        $mobile = $this->getSettingService()->get('mobile', array());

        $default = array(
            'enabled'=> 0,   // 网校状态
            'about'=>'',     // 网校简介
            'logo' => '',    // 网校Logo
            'splash1' => '', // 启动图1
            'splash2' => '', // 启动图2
            'splash3' => '', // 启动图3
            'splash4' => '', // 启动图4
            'splash5' => '', // 启动图5
        );

        $mobile = array_merge($default, $mobile);

        if ($request->getMethod() == 'POST') {
            $mobile = $request->request->all();
            $this->getSettingService()->set('mobile', $mobile);
            $this->getLogService()->info('system', 'update_settings', "更新移动客户端设置", $mobile);
            $this->setFlashMessage('success', '移动客户端设置已保存！');
        }

        return $this->render('TopxiaAdminBundle:System:mobile.html.twig', array(
            'mobile'=>$mobile
        ));
    }

    public function mobilePictureUploadAction(Request $request, $type)
    {
        $file = $request->files->get($type);
        if (!FileToolkit::isImageFile($file)) {
            throw $this->createAccessDeniedException('图片格式不正确！');
        }

        $filename = 'mobile_picture' . time() . '.' . $file->getClientOriginalExtension();
        $directory = "{$this->container->getParameter('topxia.upload.public_directory')}/system";
        $file = $file->move($directory, $filename);

        $mobile = $this->getSettingService()->get('mobile', array()); 
        $mobile[$type] = "{$this->container->getParameter('topxia.upload.public_url_path')}/system/{$filename}";
        $mobile[$type] = ltrim($mobile[$type], '/');

        $this->getSettingService()->set('mobile', $mobile);

        $this->getLogService()->info('system', 'update_settings', "更新网校{$type}图片", array($type => $mobile[$type]));

        $response = array(
            'path' => $mobile[$type],
            'url' =>  $this->container->get('templating.helper.assets')->getUrl($mobile[$type]),
        );

        return new Response(json_encode($response));
    }

    public function mobilePictureRemoveAction(Request $request, $type)
    {
        $setting = $this->getSettingService()->get("mobile");
        $setting[$type] = '';

        $this->getSettingService()->set('mobile', $setting);

        $this->getLogService()->info('system', 'update_settings', "移除网校{$type}图片");

        return $this->createJsonResponse(true);
    }

    public function logoUploadAction(Request $request)
    {
        $file = $request->files->get('logo');
        if (!FileToolkit::isImageFile($file)) {
            throw $this->createAccessDeniedException('图片格式不正确！');
        }

        $filename = 'logo_' . time() . '.' . $file->getClientOriginalExtension();
        
        $directory = "{$this->container->getParameter('topxia.upload.public_directory')}/system";
        $file = $file->move($directory, $filename);

        $site = $this->getSettingService()->get('site', array());

        $site['logo'] = "{$this->container->getParameter('topxia.upload.public_url_path')}/system/{$filename}";
        $site['logo'] = ltrim($site['logo'], '/');

        $this->getSettingService()->set('site', $site);

        $this->getLogService()->info('system', 'update_settings', "更新站点LOGO", array('logo' => $site['logo']));

        $response = array(
            'path' => $site['logo'],
            'url' =>  $this->container->get('templating.helper.assets')->getUrl($site['logo']),
        );

        return new Response(json_encode($response));

    }

    public function logoRemoveAction(Request $request)
    {
        $setting = $this->getSettingService()->get("site");
        $setting['logo'] = '';

        $this->getSettingService()->set('site', $setting);

        $this->getLogService()->info('system', 'update_settings', "移除站点LOGO");

        return $this->createJsonResponse(true);
    }

    public function faviconUploadAction(Request $request)
    {
        $file = $request->files->get('favicon');
        if (!FileToolkit::isIcoFile($file)) {
            throw $this->createAccessDeniedException('图标格式不正确！');
        }
        $filename = 'favicon_' . time() . '.' . $file->getClientOriginalExtension();
        
        $directory = "{$this->container->getParameter('topxia.upload.public_directory')}/system";
        $file = $file->move($directory, $filename);

        $site = $this->getSettingService()->get('site', array());

        $site['favicon'] = "{$this->container->getParameter('topxia.upload.public_url_path')}/system/{$filename}";
        $site['favicon'] = ltrim($site['favicon'], '/');

        $this->getSettingService()->set('site', $site);

        $this->getLogService()->info('system', 'update_settings', "更新浏览器图标", array('favicon' => $site['favicon']));

        $response = array(
            'path' => $site['favicon'],
            'url' =>  $this->container->get('templating.helper.assets')->getUrl($site['favicon']),
        );

        return new Response(json_encode($response));
    }

    public function faviconRemoveAction(Request $request)
    {
        $setting = $this->getSettingService()->get("site");
        $setting['favicon'] = '';

        $this->getSettingService()->set('site', $setting);

        $this->getLogService()->info('system', 'update_settings', "移除站点浏览器图标");

        return $this->createJsonResponse(true);
    }

    public function authAction(Request $request)
    {
        $auth = $this->getSettingService()->get('auth', array());

        $default = array(
            'register_mode'=>'closed',
            'email_activation_title' => '',
            'email_activation_body' => '',
            'welcome_enabled' => 'closed',
            'welcome_sender' => '',
            'welcome_methods' => array(),
            'welcome_title' => '',
            'welcome_body' => '',
            'user_terms' => 'closed',
            'user_terms_body' => '',
            'registerFieldNameArray'=>array(),
            'registerSort'=>array(0=>"email",1=>"nickname",2=>"password"),
        );

        $auth = array_merge($default, $auth);
        if ($request->getMethod() == 'POST') {
            $auth = $request->request->all();
       
            if (empty($auth['welcome_methods'])) {
                $auth['welcome_methods'] = array();
            }

            $this->getSettingService()->set('auth', $auth);

            $this->getLogService()->info('system', 'update_settings', "更新注册设置", $auth);
            $this->setFlashMessage('success','注册设置已保存！');
        }

        $userFields=$this->getUserFieldService()->getAllFieldsOrderBySeqAndEnabled();

        if($auth['registerFieldNameArray']){
            foreach ($userFields as $key => $fieldValue) {
                if(!in_array($fieldValue['fieldName'], $auth['registerFieldNameArray'])){
                    $auth['registerFieldNameArray'][]=$fieldValue['fieldName'];
                }
            }
         
        }

        return $this->render('TopxiaAdminBundle:System:auth.html.twig', array(
            'auth' => $auth,
            'userFields'=>$userFields,
        ));
    }

    public function mailerAction(Request $request)
    {
        $mailer = $this->getSettingService()->get('mailer', array());
        $default = array(
            'enabled'=>0,
            'host'=>'',
            'port'=>'',
            'username'=>'',
            'password'=>'',
            'from'=>'',
            'name'=>'',
            );
        $mailer = array_merge($default, $mailer);
        if ($request->getMethod() == 'POST') {
            $mailer = $request->request->all();
            $this->getSettingService()->set('mailer', $mailer);
            $this->getLogService()->info('system', 'update_settings', "更新邮件服务器设置", $mailer);
            $this->setFlashMessage('success', '电子邮件设置已保存！');
        }

        return $this->render('TopxiaAdminBundle:System:mailer.html.twig', array(
            'mailer' => $mailer,
        ));
    }

    public function loginConnectAction(Request $request)
    {
        $loginConnect = $this->getSettingService()->get('login_bind', array());

        $default = array(
            'login_limit'=>0,
            'enabled'=>0,
            'weibo_enabled'=>0,
            'weibo_key'=>'',
            'weibo_secret'=>'',
            'weibo_set_fill_account'=>0,
            'qq_enabled'=>0,
            'qq_key'=>'',
            'qq_secret'=>'',
            'qq_set_fill_account'=>0,
            'renren_enabled'=>0,
            'renren_key'=>'',
            'renren_secret'=>'',
            'renren_set_fill_account'=>0,
            'verify_code' => '',
        );

        $loginConnect = array_merge($default, $loginConnect);
        if ($request->getMethod() == 'POST') {
            $loginConnect = $request->request->all();
            $this->getSettingService()->set('login_bind', $loginConnect);
            $this->getLogService()->info('system', 'update_settings', "更新登录设置", $loginConnect);
            $this->setFlashMessage('success','登录设置已保存！');
        }

        return $this->render('TopxiaAdminBundle:System:login-connect.html.twig', array(
            'loginConnect' => $loginConnect
        ));
    }

    public function paymentAction(Request $request)
    {
        $payment = $this->getSettingService()->get('payment', array());
        $default = array(
            'enabled'=>0,
            'disabled_message' => '尚未开启支付模块，无法购买课程。',
            'bank_gateway'=>'none',
            'alipay_enabled'=>0,
            'alipay_key'=>'',
            'alipay_secret' => '',
            'alipay_account' => '',
            'alipay_type' => 'direct',
            'tenpay_enabled'=>0,
            'tenpay_key'=>'',
            'tenpay_secret'=>''
        );

        $payment = array_merge($default, $payment);
        if ($request->getMethod() == 'POST') {
            $payment = $request->request->all();
            $payment['alipay_key'] = trim($payment['alipay_key']);
            $payment['alipay_secret'] = trim($payment['alipay_secret']);
            
            $this->getSettingService()->set('payment', $payment);
            $this->getLogService()->info('system', 'update_settings', "更支付方式设置", $payment);
            $this->setFlashMessage('success', '支付方式设置已保存！');
        }

        return $this->render('TopxiaAdminBundle:System:payment.html.twig', array(
            'payment' => $payment,
        ));
    }

    public function refundAction(Request $request)
    {
        $refundSetting = $this->getSettingService()->get('refund', array());
        $default = array(
            'maxRefundDays' => 0,
            'applyNotification' => '',
            'successNotification' => '',
            'failedNotification' => '',
        );

        $refundSetting = array_merge($default, $refundSetting);

        if ($request->getMethod() == 'POST') {
            $refundSetting = $request->request->all();
            $this->getSettingService()->set('refund', $refundSetting);
            $this->getLogService()->info('system', 'update_settings', "更新退款设置", $refundSetting);
            $this->setFlashMessage('success', '退款设置已保存！');
        }

        return $this->render('TopxiaAdminBundle:System:refund.html.twig', array(
            'refundSetting' => $refundSetting,
        ));
    }

    public function defaultAction(Request $request)
    {
        $defaultSetting = $this->getSettingService()->get('default', array());
        $path = $this->container->getParameter('kernel.root_dir').'/../web/assets/img/default/';

        $default = array(
            'defaultAvatar' => 0,
            'defaultCoursePicture' => 0,
            'defaultAvatarFileName' => 'avatar',
            'defaultCoursePictureFileName' => 'coursePicture',
            'articleShareContent' => '我正在看{{articletitle}}，关注{{sitename}}，分享知识，成就未来。',
            'courseShareContent' => '我正在学习{{course}}，收获巨大哦，一起来学习吧！',
            'groupShareContent' => '我在{{groupname}}小组,发表了{{threadname}},很不错哦,一起来看看吧!',
        );

        $defaultSetting = array_merge($default, $defaultSetting);

        if ($request->getMethod() == 'POST') {
            $defaultSetting = $request->request->all();
            $default = $this->getSettingService()->get('default', array());
            $defaultSetting = array_merge($default, $defaultSetting);

            $this->getSettingService()->set('default', $defaultSetting);
            $this->getLogService()->info('system', 'update_settings', "更新系统默认设置", $defaultSetting);
            $this->setFlashMessage('success', '系统默认设置已保存！');
        }

        $hasOwnCopyright = $this->getAppService()->checkOwnCopyrightUser($this->getCurrentUser()->id);
        
        return $this->render('TopxiaAdminBundle:System:default.html.twig', array(
            'defaultSetting' => $defaultSetting,
            'hasOwnCopyright' => $hasOwnCopyright,
        ));
    }

    public function ipBlacklistAction(Request $request)
    {
        $ips = $this->getSettingService()->get('blacklist_ip', array());

        if(!empty($ips)){
            $default['ips'] =  join("\n", $ips['ips']);
            $ips = array_merge($ips, $default);
        }

        if ($request->getMethod() == 'POST') {
            $data = $request->request->all();
            $ips['ips'] = array_filter(explode(' ', str_replace(array("\r\n", "\n", "\r")," ",$data['ips'])));
            $this->getSettingService()->set('blacklist_ip', $ips);
            $this->getLogService()->info('system', 'update_settings', "更新IP黑名单", $ips);

            $ips = $this->getSettingService()->get('blacklist_ip', array());
            $ips['ips'] =  join("\n", $ips['ips']);

            $this->setFlashMessage('success','保存成功！');
        }

        return $this->render('TopxiaAdminBundle:System:ip-blacklist.html.twig', array(
            'ips' => $ips
        ));
    }

    public function storageAction(Request $request)
    {
        $storageSetting = $this->getSettingService()->get('storage', array());

        $default = array(
            'upload_mode' => 'local',
            'cloud_access_key' => '',
            'cloud_secret_key' => '',
            'cloud_bucket' => '',
            'cloud_api_server' => '',
            'video_quality' => 'low',
            'video_audio_quality' => 'low',
            'video_watermark' => 0,
            'video_watermark_image' => '',
            'video_watermark_position' => 'topright',
            'video_fingerprint' => 0,
        );

        $storageSetting = array_merge($default, $storageSetting);
        if ($request->getMethod() == 'POST') {
            $storageSetting = $request->request->all();
            $this->getSettingService()->set('storage', $storageSetting);

            if (!empty($storageSetting['cloud_access_key']) or !empty($storageSetting['cloud_secret_key'])) {
                if (!empty($storageSetting['cloud_access_key']) and !empty($storageSetting['cloud_secret_key'])) {
                    $factory = new CloudClientFactory();
                    $client = $factory->createClient($storageSetting);
                    $keyCheckResult = $client->checkKey();
                } else {
                    $keyCheckResult = array('error' => 'error');
                }
            } else {
                $keyCheckResult = array('status' => 'ok');
            }

            $cop = $this->getAppService()->checkAppCop();
            if ($cop && isset($cop['cop']) && ($cop['cop'] == 1)) {
                $this->getSettingService()->set('_app_cop', 1);
            } else {
                $this->getSettingService()->set('_app_cop', 0);
            }
            PluginUtil::refresh();
            $this->getLogService()->info('system', 'update_settings', "更新云平台设置", $storageSetting);
            if (!empty($keyCheckResult['status']) && $keyCheckResult['status'] == 'ok') {
                $this->setFlashMessage('success', '云平台设置已保存！');
            } else {
                $this->setFlashMessage('danger', 'AccessKey或者SecretKey设置不正确，会影响到系统正常的运行，请修改设置。');
            }
        }

        return $this->render('TopxiaAdminBundle:System:storage.html.twig', array(
            'storageSetting'=>$storageSetting,
        ));
    }

    public function cloudVideoWatermarkUploadAction(Request $request)
    {
        $file = $request->files->get('watermark');
        if (!FileToolkit::isImageFile($file)) {
            throw $this->createAccessDeniedException('图片格式不正确！');
        }

        $filename = 'watermark_' . time() . '.' . $file->getClientOriginalExtension();
        
        $directory = "{$this->container->getParameter('topxia.upload.public_directory')}/system";
        $file = $file->move($directory, $filename);
        $path = "system/{$filename}";

        $response = array(
            'path' => $path,
            'url' =>  $this->get('topxia.twig.web_extension')->getFileUrl($path),
        );

        return new Response(json_encode($response));
    }

    public function cloudVideoWatermarkRemoveAction(Request $request)
    {
        return $this->createJsonResponse(true);
    }

    public function customerServiceAction(Request $request)
    {
        $customerServiceSetting = $this->getSettingService()->get('customerService', array());

        $default = array(
            'customer_service_mode' => 'closed',
            'customer_of_qq' => '',
            'customer_of_mail' => '',
            'customer_of_phone' => ''
        );

        $customerServiceSetting = array_merge($default, $customerServiceSetting);

        if ($request->getMethod() == 'POST') {
            $customerServiceSetting = $request->request->all();
            $this->getSettingService()->set('customerService', $customerServiceSetting);
            $this->getLogService()->info('system', 'customerServiceSetting', "客服管理设置", $customerServiceSetting);
            $this->setFlashMessage('success', '客服管理设置已保存！');
        }

        return $this->render('TopxiaAdminBundle:System:customer-service.html.twig', array(
            'customerServiceSetting'=>$customerServiceSetting
        ));
    }

    public function userCenterAction(Request $request)
    {
        $setting = $this->getSettingService()->get('user_partner', array());

        $default = array(
            'mode' => 'default',
            'nickname_enabled' => 0,
            'avatar_alert' => 'none',
            'email_filter' => ''
        );
        
        $setting = array_merge($default, $setting);

        $configDirectory = $this->getServiceKernel()->getParameter('kernel.root_dir') . '/config/';
        $discuzConfigPath = $configDirectory . 'uc_client_config.php';
        $phpwindConfigPath = $configDirectory . 'windid_client_config.php';

        if ($request->getMethod() == 'POST') {
            $data = $request->request->all();
            $data['email_filter'] = trim(str_replace(array("\n\r", "\r\n", "\r"), "\n", $data['email_filter']));
            $setting = array('mode' => $data['mode'],
                            'nickname_enabled' => $data['nickname_enabled'],
                            'avatar_alert' => $data['avatar_alert'],
                            'email_filter' => $data['email_filter']
            );
            $this->getSettingService()->set('user_partner', $setting);

            $discuzConfig = $data['discuz_config'];
            $phpwindConfig = $data['phpwind_config'];

            if ($setting['mode'] == 'discuz') {
                if (!file_exists($discuzConfigPath) or !is_writeable($discuzConfigPath)) {
                    $this->setFlashMessage('danger', "配置文件{$discuzConfigPath}不可写，请打开此文件，复制Ucenter配置的内容，覆盖原文件的配置。");
                    goto response;
                }
                file_put_contents($discuzConfigPath, $discuzConfig);
            } elseif ($setting['mode'] == 'phpwind') {
                if (!file_exists($phpwindConfigPath) or !is_writeable($phpwindConfigPath)) {
                    $this->setFlashMessage('danger', "配置文件{$phpwindConfigPath}不可写，请打开此文件，复制WindID配置的内容，覆盖原文件的配置。");
                    goto response;
                }
                file_put_contents($phpwindConfigPath, $phpwindConfig);
            }

            $this->getLogService()->info('system', 'setting', "用户中心设置", $setting);
            $this->setFlashMessage('success', '用户中心设置已保存！');
        }

        if (file_exists($discuzConfigPath)) {
            $discuzConfig = file_get_contents($discuzConfigPath);
        } else {
            $discuzConfig = '';
        }

        if (file_exists($phpwindConfigPath)) {
            $phpwindConfig = file_get_contents($phpwindConfigPath);
        } else {
            $phpwindConfig = '';
        }

        response:
        return $this->render('TopxiaAdminBundle:System:user-center.html.twig', array(
            'setting' => $setting,
            'discuzConfig' => $discuzConfig,
            'phpwindConfig' => $phpwindConfig,
        ));
    }

    public function courseSettingAction(Request $request)
    {
        $courseSetting = $this->getSettingService()->get('course', array());
        
        $client = LiveClientFactory::createClient();
        $capacity = $client->getCapacity();

        $default = array(
            'welcome_message_enabled' => '0',
            'welcome_message_body' => '{{nickname}},欢迎加入课程{{course}}',
            'buy_fill_userinfo' => '0',
            'teacher_modify_price' => '1',
            'teacher_manage_student' => '0',
            'teacher_export_student'=>'0',
            'student_download_media' => '0',
            'free_course_nologin_view' => '1',
            'relatedCourses' => '0',
            'allowAnonymousPreview' => '1',
            'live_course_enabled' => '0',
            'userinfoFields'=>array(),
            "userinfoFieldNameArray"=>array(),
        );

        $this->getSettingService()->set('course', $courseSetting);
        $courseSetting = array_merge($default, $courseSetting);

        if ($request->getMethod() == 'POST') {
            $courseSetting = $request->request->all();

            if(!isset($courseSetting['userinfoFields']))$courseSetting['userinfoFields']=array();
            if(!isset($courseSetting['userinfoFieldNameArray']))$courseSetting['userinfoFieldNameArray']=array();

            $courseSetting['live_student_capacity'] = empty($capacity['capacity']) ? 0 : $capacity['capacity'];

            $this->getSettingService()->set('course', $courseSetting);
            $this->getLogService()->info('system', 'update_settings', "更新课程设置", $courseSetting);
            $this->setFlashMessage('success','课程设置已保存！');
        }

        $courseSetting['live_student_capacity'] = empty($capacity['capacity']) ? 0 : $capacity['capacity'];
        
        $userFields=$this->getUserFieldService()->getAllFieldsOrderBySeqAndEnabled();

        if($courseSetting['userinfoFieldNameArray']){
            foreach ($userFields as $key => $fieldValue) {
                if(!in_array($fieldValue['fieldName'], $courseSetting['userinfoFieldNameArray'])){
                    $courseSetting['userinfoFieldNameArray'][]=$fieldValue['fieldName'];
                }
            }
         
        }

        return $this->render('TopxiaAdminBundle:System:course-setting.html.twig', array(
            'courseSetting' => $courseSetting,
            'userFields'=>$userFields,
        ));
    }

    public function adminSyncAction(Request $request)
    {
        $currentUser = $this->getCurrentUser();
        $setting = $this->getSettingService()->get('user_partner', array());
        if (empty($setting['mode']) or !in_array($setting['mode'], array('phpwind', 'discuz'))) {
            return $this->createMessageResponse('info', '未开启用户中心，不能同步管理员帐号！');
        }

        $bind = $this->getUserService()->getUserBindByTypeAndUserId($setting['mode'], $currentUser['id']);
        if ($bind) {
            goto response;
        } else {
            $bind = null;
        }

        if ($request->getMethod() == 'POST') {
            $data = $request->request->all();
            $partnerUser = $this->getAuthService()->checkPartnerLoginByNickname($data['nickname'], $data['password']);
            if (empty($partnerUser)) {
                $this->setFlashMessage('danger', '用户名或密码不正确。');
                goto response;
            } else {
                $this->getUserService()->changeEmail($currentUser['id'], $partnerUser['email']);
                $this->getUserService()->changeNickname($currentUser['id'], $partnerUser['nickname']);
                $this->getUserService()->changePassword($currentUser['id'], $data['password']);
                $this->getUserService()->bindUser($setting['mode'], $partnerUser['id'], $currentUser['id'], null);
                $user = $this->getUserService()->getUser($currentUser['id']);
                $this->authenticateUser($user);

                $this->setFlashMessage('success', '管理员帐号同步成功。');

                return $this->redirect($this->generateUrl('admin_setting_user_center'));
            }
        }

        response:
        return $this->render('TopxiaAdminBundle:System:admin-sync.html.twig', array(
            'mode' => $setting['mode'],
            'bind' => $bind,
        ));
    }

    public function developerAction(Request $request)
    {
        $developerSetting = $this->getSettingService()->get('developer', array());

        $default = array(
            'debug' => '0',
            'app_api_url' => '',
            'hls_encrypted' => '1'
        );

        $developerSetting = array_merge($default, $developerSetting);

        if ($request->getMethod() == 'POST') {
            $developerSetting = $request->request->all();
            $this->getSettingService()->set('developer', $developerSetting);
            $this->getLogService()->info('system', 'update_settings', "更新开发者设置", $developerSetting);
            $this->setFlashMessage('success','开发者已保存！');
        }

        return $this->render('TopxiaAdminBundle:System:developer-setting.html.twig', array(
            'developerSetting' => $developerSetting
        ));
    }

    public function modifyVersionAction(Request $request)
    {
        $fromVersion = $request->query->get('fromVersion');
        $version = $request->query->get('version');
        $code = $request->query->get('code');

        if (empty($fromVersion) || empty($version) || empty($code)) {
            exit('注意参数为:<br><br>code<br>fromVersion<br>version<br><br>全填，不能为空！');
        }

        $appCount = $this->getAppservice()->findAppCount();
        $apps = $this->getAppservice()->findApps(0,$appCount);
        $appsCodes = ArrayToolkit::column($apps,'code');

        if (!in_array($code, $appsCodes)) {
           exit('code 填写有问题！请检查!');
        }

        $fromVersionArray['fromVersion'] = $fromVersion;
        $versionArray['version'] = $version;
        $this->getAppservice()->updateAppVersion($code,$fromVersionArray,$versionArray);

        return $this->redirect($this->generateUrl('admin_app_upgrades'));
    }

    public function userFieldsAction()
    {   

       $textCount=$this->getUserFieldService()->searchFieldCount(array('fieldName'=>'textField'));
       $intCount=$this->getUserFieldService()->searchFieldCount(array('fieldName'=>'intField'));
       $floatCount=$this->getUserFieldService()->searchFieldCount(array('fieldName'=>'floatField'));
       $dateCount=$this->getUserFieldService()->searchFieldCount(array('fieldName'=>'dateField'));
       $varcharCount=$this->getUserFieldService()->searchFieldCount(array('fieldName'=>'varcharField'));

       $fields=$this->getUserFieldService()->getAllFieldsOrderBySeq();
       for($i=0;$i<count($fields);$i++){
           if(strstr($fields[$i]['fieldName'], "textField")) $fields[$i]['fieldName']="多行文本";
           if(strstr($fields[$i]['fieldName'], "varcharField")) $fields[$i]['fieldName']="文本";
           if(strstr($fields[$i]['fieldName'], "intField")) $fields[$i]['fieldName']="整数";
           if(strstr($fields[$i]['fieldName'], "floatField")) $fields[$i]['fieldName']="小数";
           if(strstr($fields[$i]['fieldName'], "dateField")) $fields[$i]['fieldName']="日期";
       }

       return $this->render('TopxiaAdminBundle:System:user-fields.html.twig',array(
            'textCount'=>$textCount,
            'intCount'=>$intCount,
            'floatCount'=>$floatCount,
            'dateCount'=>$dateCount,
            'varcharCount'=>$varcharCount,
            'fields'=>$fields,
        )); 
    }

    public function editUserFieldsAction(Request $request, $id)
    {
        $field = $this->getUserFieldService()->getField($id);

        if (empty($field)) {
            throw $this->createNotFoundException();
        }

        if(strstr($field['fieldName'], "textField")) $field['fieldName']="多行文本";
        if(strstr($field['fieldName'], "varcharField")) $field['fieldName']="文本";
        if(strstr($field['fieldName'], "intField")) $field['fieldName']="整数";
        if(strstr($field['fieldName'], "floatField")) $field['fieldName']="小数";
        if(strstr($field['fieldName'], "dateField")) $field['fieldName']="日期";

        if ($request->getMethod() == 'POST') {
            $fields=$request->request->all();

            if(isset($fields['enabled'])){
                $fields['enabled']=1;
            }else{
                $fields['enabled']=0;
            }
            
            $field = $this->getUserFieldService()->updateField($id, $fields);
            
            return $this->redirect($this->generateUrl('admin_setting_user_fields'));
        }

        return $this->render('TopxiaAdminBundle:System:user-fields.modal.edit.html.twig', array(
            'field' => $field,
        ));
    }

    public function deleteUserFieldsAction(Request $request, $id)
    {
        $field = $this->getUserFieldService()->getField($id);

        if (empty($field)) {
            throw $this->createNotFoundException();
        }

        if ($request->getMethod() == 'POST') {

            $auth = $this->getSettingService()->get('auth', array());

            $courseSetting = $this->getSettingService()->get('course', array());

            if(isset($auth['registerFieldNameArray'])){
                foreach ($auth['registerFieldNameArray'] as $key => $value) {
                if($value==$field['fieldName']) unset( $auth['registerFieldNameArray'][$key]);
                }
            }
            if(isset($courseSetting['userinfoFieldNameArray'])){
                foreach ($courseSetting['userinfoFieldNameArray'] as $key => $value) {
                if($value==$field['fieldName']) unset( $courseSetting['userinfoFieldNameArray'][$key]);
                }
            }
            $this->getSettingService()->set('auth', $auth);

            $this->getSettingService()->set('course', $courseSetting);

            $this->getUserFieldService()->dropField($id);

            return $this->redirect($this->generateUrl('admin_setting_user_fields'));
        }

        return $this->render('TopxiaAdminBundle:System:user-fields.modal.delete.html.twig', array(
            'field' => $field,
        ));
    }

    public function addUserFieldsAction(Request $request)
    {
        $field=$request->request->all();

        $field=$this->getUserFieldService()->addUserField($field);

        if($field==false){
           $this->setFlashMessage('danger', '已经没有可以添加的字段了!'); 
        }

        return $this->redirect($this->generateUrl('admin_setting_user_fields')); 
    }

    public function consultSettingAction(Request $request)
    { 
        $consult = $this->getSettingService()->get('consult', array());
        $default = array(
            'enabled' => 0,
            'worktime' => '9:00 - 17:00',
            'qq' => array(
                array('name' => '','number' => ''),
                ),
            'qqgroup' => array(
                array('name' => '','number' => ''),
                ),
            'phone' => array(
                array('name' => '','number' => ''),
                ),
            'webchatURI' => '',
            'email' => '',
            'color' => 'default',
            );

        $consult = array_merge($default, $consult);
        if ($request->getMethod() == 'POST') {
            $consult = $request->request->all();
            ksort($consult['qq']);
            ksort($consult['qqgroup']);
            ksort($consult['phone']);
            $this->getSettingService()->set('consult', $consult);
            $this->getLogService()->info('system', 'update_settings', "更新QQ客服设置", $consult);
            $this->setFlashMessage('success', 'QQ客服设置已保存！');
        }
        return $this->render('TopxiaAdminBundle:System:consult-setting.html.twig', array(
            'consult' => $consult,
        ));
    }

    public function consultUploadAction(Request $request)
    {
        $file = $request->files->get('consult');
        if (!FileToolkit::isImageFile($file)) {
            throw $this->createAccessDeniedException('图片格式不正确！');
        }

        $filename = 'webchat.' . $file->getClientOriginalExtension();
        
        $directory = "{$this->container->getParameter('topxia.upload.public_directory')}/system";
        $file = $file->move($directory, $filename);

        $consult = $this->getSettingService()->get('consult', array());

        $consult['webchatURI'] = "{$this->container->getParameter('topxia.upload.public_url_path')}/system/{$filename}";
        $consult['webchatURI'] = ltrim($consult['webchatURI'], '/');

        $this->getSettingService()->set('consult', $consult);

        $this->getLogService()->info('system', 'update_settings', "更新微信二维码", array('webchatURI' => $consult['webchatURI']));

        $response = array(
            'path' => $consult['webchatURI'],
            'url' =>  $this->container->get('templating.helper.assets')->getUrl($consult['webchatURI']),
        );

        return new Response(json_encode($response));

    }
    
    protected function getAppService()
    {
        return $this->getServiceKernel()->createService('CloudPlatform.AppService');
    }

    protected function getSettingService()
    {
        return $this->getServiceKernel()->createService('System.SettingService');
    }

    protected function getUserFieldService()
    {
        return $this->getServiceKernel()->createService('User.UserFieldService');
    }

    protected function getAuthService()
    {
        return $this->getServiceKernel()->createService('User.AuthService');
    }
}