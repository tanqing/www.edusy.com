<?php

namespace Topxia\MobileBundleV2\Processor;

use Topxia\MobileBundleV2\Controller\MobileBaseController;

class BaseProcessor {
    public $formData;
    public $controller;
    public $request;
    protected $delegator;
    private function __construct($controller) {
        $this->controller = $controller;
        $this->request = $controller->request;
        $this->formData = $controller->formData;
    }
    public static function getInstance($class, $controller) {
        $instance = new $class($controller);
        $processorDelegator = new ProcessorDelegator($instance);
        $instance->setDelegator($processorDelegator);
        return $processorDelegator;
    }
    protected function getParam($name, $default = null) {
        $result = $this->request->request->get($name, $default);
        return $result;
    }

    protected function log($action, $message, $data)
    {
        $this->controller->getLogService()->info(MobileBaseController::MOBILE_MODULE, $action, $message,  
                $data
        );
    }

    protected function setParam($name, $value)
    {
        $this->request->request->set($name, $value);
    }

    public function setDelegator($processorDelegator) {
        $this->delegator = $processorDelegator;
    }
    public function getDelegator() {
        return $this->delegator;
    }
    public function after() {
    }
    public function before() {
    }

    protected function getContainer()
    {
        return $this->controller->getContainer();
    }

    protected function getBlockService()
    {
        return $this->controller->getService('Content.BlockService');
    }

    protected function getCouponService()
    {
        return $this->controller->getService('Coupon:Coupon.CouponService');
    }
    
    protected function getQuestionService ()
    {
        return $this->controller->getService('Question.QuestionService');
    }

    protected function getNotificationService()
    {
        return $this->controller->getService('User.NotificationService');
    }

    protected function getTokenService()
    {
        return $this->controller->getService('User.TokenService');
    }

    protected function getCourseOrderService()
    {
        return $this->controller->getService('Course.CourseOrderService');
    }

    protected function getMobileDeviceService()
    {
        return $this->controller->getService('Util.MobileDeviceService');
    }

    protected function getOrderService()
    {
        return $this->controller->getService('Order.OrderService');
    }

    protected function getFileService()
    {
        return $this->controller->getService('Content.FileService');
    }  

    protected function getSettingService()
    {
        return $this->controller->getService('System.SettingService');
    }

    protected function getCourseService()
    {
        return $this->controller->getService('Course.CourseService');
    }

    protected function getTestpaperService()
    {
        return $this->controller->getService('Testpaper.TestpaperService');
    }

    public function createErrorResponse($name, $message) {
        $error = array(
            'error' => array(
                'name' => $name,
                'message' => $message
            )
        );
        return $error;
    }
    protected function previewAsMember($member, $courseId, $user) {
        if (empty($member)) {
            return null;
        }

        if ($this->controller->get('security.context')->isGranted('ROLE_ADMIN')) {
            return array(
                'id' => 0,
                'courseId' => $courseId,
                'userId' => $user['id'],
                'levelId' => 0,
                'learnedNum' => 0,
                'isLearned' => 0,
                'seq' => 0,
                'isVisible' => 0,
                'role' => 'teacher',
                'locked' => 0,
                'createdTime' => time() ,
                'deadline' => 0
            );
        }
    
        $userIsTeacher = $this->controller->getCourseService()->isCourseTeacher($courseId, $user['id']);
        if ($userIsTeacher) {
            $member['role'] = 'teacher';
        } else {
            $userIsStudent = $this->controller->getCourseService()->isCourseStudent($courseId, $user['id']);
            $member['role'] = $userIsStudent ? "student" : null;
        }
        
        return $member;
    }
    public function array2Map($learnCourses) {
        $mapCourses = array();
        if (empty($learnCourses)) {
            return $mapCourses;
        }
        foreach ($learnCourses as $key => $learnCourse) {
            $mapCourses[$learnCourse['id']] = $learnCourse;
        }
        return $mapCourses;
    }
    protected function getSiteInfo($request, $version) {
        $site = $this->controller->getSettingService()->get('site', array());
        $mobile = $this->controller->getSettingService()->get('mobile', array());
        if (!empty($mobile['logo'])) {
            $logo = $request->getSchemeAndHttpHost() . '/' . $mobile['logo'];
        } else {
            $logo = '';
        }
        $splashs = array();
        for ($i = 1; $i < 5; $i++) {
            if (!empty($mobile['splash' . $i])) {
                $splashs[] = $request->getSchemeAndHttpHost() . '/' . $mobile['splash' . $i];
            }
        }
        return array(
            'name' => $site['name'],
            'url' => $request->getSchemeAndHttpHost() . '/mapi_v' . $version,
            'host' => $request->getSchemeAndHttpHost() ,
            'logo' => $logo,
            'splashs' => $splashs,
            'apiVersionRange' => array(
                "min" => "1.0.0",
                "max" => "2.0.1"
            ) ,
        );
    }

    protected function curlRequest($method, $url, $params = array())
    {
        $curl = curl_init();

        curl_setopt($curl, CURLOPT_USERAGENT, "video request");

        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 10);
        curl_setopt($curl, CURLOPT_TIMEOUT, 20);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_HEADER, 0);

        if (strtoupper($method) == 'POST') {
            curl_setopt($curl, CURLOPT_POST, 1);
            $params = http_build_query($params);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $params);
        } else {
            if (!empty($params)) {
                $url = $url . (strpos($url, '?') ? '&' : '?') . http_build_query($params);
            }
        }

        curl_setopt($curl, CURLOPT_URL, $url );

        $response = curl_exec($curl);
        curl_close($curl);

        return $response;
    }
}

