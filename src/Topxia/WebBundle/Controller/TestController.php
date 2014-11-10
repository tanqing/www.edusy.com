<?php
namespace Topxia\WebBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Filesystem\Filesystem;

class TestController extends BaseController
{
    public function indexAction(Request $request)
    {
        $a = array('key1' => null);

        
        var_dump(empty($a));

        // var_dump(array_key_exists('key1', $a));

        exit();


        return $this->render('TopxiaWebBundle:Test:test.html.twig');


    }
    private function getCourseService()
    {
        return $this->getServiceKernel()->createService('Course.CourseService');
    }
    
}