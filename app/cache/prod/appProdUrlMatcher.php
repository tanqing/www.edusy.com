<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/l')) {
            // live_jump
            if ($pathinfo === '/live/jump') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\DefaultController::jumpAction',  '_route' => 'live_jump',);
            }

            if (0 === strpos($pathinfo, '/log')) {
                if (0 === strpos($pathinfo, '/login')) {
                    // login
                    if ($pathinfo === '/login') {
                        return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\LoginController::indexAction',  '_route' => 'login',);
                    }

                    // login_check
                    if ($pathinfo === '/login_check') {
                        return array('_route' => 'login_check');
                    }

                }

                // logout
                if ($pathinfo === '/logout') {
                    return array('_route' => 'logout');
                }

                if (0 === strpos($pathinfo, '/login')) {
                    // login_ajax
                    if ($pathinfo === '/login/ajax') {
                        return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\LoginController::ajaxAction',  '_route' => 'login_ajax',);
                    }

                    if (0 === strpos($pathinfo, '/login/bind')) {
                        // login_bind
                        if (preg_match('#^/login/bind/(?P<type>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'login_bind')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\LoginBindController::indexAction',));
                        }

                        // login_bind_callback
                        if (preg_match('#^/login/bind/(?P<type>[^/]++)/callback$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'login_bind_callback')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\LoginBindController::callbackAction',));
                        }

                        // login_bind_choose
                        if (preg_match('#^/login/bind/(?P<type>[^/]++)/choose$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'login_bind_choose')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\LoginBindController::chooseAction',));
                        }

                        // login_bind_new
                        if (preg_match('#^/login/bind/(?P<type>[^/]++)/new$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_login_bind_new;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'login_bind_new')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\LoginBindController::newAction',));
                        }
                        not_login_bind_new:

                        // login_bind_newset
                        if (preg_match('#^/login/bind/(?P<type>[^/]++)/newset$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_login_bind_newset;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'login_bind_newset')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\LoginBindController::newSetAction',));
                        }
                        not_login_bind_newset:

                        // login_bind_exist
                        if (preg_match('#^/login/bind/(?P<type>[^/]++)/exist$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_login_bind_exist;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'login_bind_exist')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\LoginBindController::existAction',));
                        }
                        not_login_bind_exist:

                    }

                    // login_check_email
                    if ($pathinfo === '/login/check/email') {
                        return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\LoginController::checkEmailAction',  '_route' => 'login_check_email',);
                    }

                }

            }

        }

        // user_terms
        if ($pathinfo === '/userterms') {
            return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\RegisterController::userTermsAction',  '_route' => 'user_terms',);
        }

        if (0 === strpos($pathinfo, '/register')) {
            // register
            if ($pathinfo === '/register') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\RegisterController::indexAction',  '_route' => 'register',);
            }

            // register_submited
            if (0 === strpos($pathinfo, '/register/submited') && preg_match('#^/register/submited/(?P<id>[^/]++)/(?P<hash>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'register_submited')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\RegisterController::submitedAction',));
            }

            if (0 === strpos($pathinfo, '/register/email')) {
                // register_email_send
                if (0 === strpos($pathinfo, '/register/email/send') && preg_match('#^/register/email/send/(?P<id>[^/]++)/(?P<hash>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_register_email_send;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'register_email_send')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\RegisterController::emailSendAction',));
                }
                not_register_email_send:

                // register_email_verify
                if (0 === strpos($pathinfo, '/register/email/verify') && preg_match('#^/register/email/verify/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'register_email_verify')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\RegisterController::emailVerifyAction',));
                }

                // register_email_check
                if ($pathinfo === '/register/email/check') {
                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\RegisterController::emailCheckAction',  '_route' => 'register_email_check',);
                }

            }

            // register_nickname_check
            if ($pathinfo === '/register/nickname/check') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\RegisterController::nicknameCheckAction',  '_route' => 'register_nickname_check',);
            }

            // register_analysis
            if ($pathinfo === '/register/analysis') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\RegisterController::analysisAction',  '_route' => 'register_analysis',);
            }

        }

        // file_upload
        if ($pathinfo === '/file/upload') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_file_upload;
            }

            return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\FileController::uploadAction',  '_route' => 'file_upload',);
        }
        not_file_upload:

        if (0 === strpos($pathinfo, '/uploadfile')) {
            // uploadfile_upload
            if ($pathinfo === '/uploadfile/upload') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_uploadfile_upload;
                }

                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\UploadFileController::uploadAction',  '_route' => 'uploadfile_upload',);
            }
            not_uploadfile_upload:

            // uploadfile_browser
            if ($pathinfo === '/uploadfile/browser') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\UploadFileController::browserAction',  '_route' => 'uploadfile_browser',);
            }

            // uploadfile_params
            if ($pathinfo === '/uploadfile/params') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\UploadFileController::paramsAction',  '_route' => 'uploadfile_params',);
            }

            if (0 === strpos($pathinfo, '/uploadfile/cloud_c')) {
                // uploadfile_cloud_callback
                if ($pathinfo === '/uploadfile/cloud_callback') {
                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\UploadFileController::cloudCallbackAction',  '_route' => 'uploadfile_cloud_callback',);
                }

                if (0 === strpos($pathinfo, '/uploadfile/cloud_convertcallback')) {
                    // uploadfile_cloud_convert_callback
                    if ($pathinfo === '/uploadfile/cloud_convertcallback') {
                        return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\UploadFileController::cloudConvertCallbackAction',  '_route' => 'uploadfile_cloud_convert_callback',);
                    }

                    // uploadfile_cloud_convert_callback2
                    if ($pathinfo === '/uploadfile/cloud_convertcallback2') {
                        return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\UploadFileController::cloudConvertCallback2Action',  '_route' => 'uploadfile_cloud_convert_callback2',);
                    }

                    // uploadfile_cloud_convert_callback3
                    if ($pathinfo === '/uploadfile/cloud_convertcallback3') {
                        return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\UploadFileController::cloudConvertCallback3Action',  '_route' => 'uploadfile_cloud_convert_callback3',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/uploadfile/get_')) {
                // uploadfile_cloud_get_media_info
                if (0 === strpos($pathinfo, '/uploadfile/get_media_info') && preg_match('#^/uploadfile/get_media_info/(?P<type>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'uploadfile_cloud_get_media_info')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\UploadFileController::getMediaInfoAction',));
                }

                // uploadfile_cloud_get_head_leader_hlskey
                if ($pathinfo === '/uploadfile/get_head_leader_hlsKey') {
                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\UploadFileController::getHeadLeaderHlsKeyAction',  '_route' => 'uploadfile_cloud_get_head_leader_hlskey',);
                }

            }

        }

        // kindeditor_upload
        if ($pathinfo === '/kindeditor/upload') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_kindeditor_upload;
            }

            return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\KindeditorController::uploadAction',  '_route' => 'kindeditor_upload',);
        }
        not_kindeditor_upload:

        if (0 === strpos($pathinfo, '/live')) {
            // live_auth
            if ($pathinfo === '/live/auth') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\LiveAuthController::indexAction',  '_route' => 'live_auth',);
            }

            // live_verify
            if ($pathinfo === '/live/verify') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\LiveCourseController::verifyAction',  '_route' => 'live_verify',);
            }

            // live_course_explore
            if ($pathinfo === '/live') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\LiveCourseController::exploreAction',  '_route' => 'live_course_explore',);
            }

        }

        // live_course_play
        if (0 === strpos($pathinfo, '/course') && preg_match('#^/course/(?P<courseId>[^/]++)/lesson/(?P<lessonId>[^/]++)/live_entry$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'live_course_play')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\LiveCourseController::entryAction',));
        }

        if (0 === strpos($pathinfo, '/live')) {
            // live_course_replay
            if (0 === strpos($pathinfo, '/live/replay/course') && preg_match('#^/live/replay/course/(?P<courseId>[^/]++)/lesson/(?P<lessonId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'live_course_replay')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\LiveCourseController::replayAction',));
            }

            // live_course_list
            if (0 === strpos($pathinfo, '/live/list') && preg_match('#^/live/list(?:/(?P<category>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'live_course_list')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\LiveCourseController::listAction',  'category' => '',));
            }

            // live_classroom_iframe
            if (0 === strpos($pathinfo, '/live/classroom/course') && preg_match('#^/live/classroom/course/(?P<courseId>[^/]++)/lesson/(?P<lessonId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'live_classroom_iframe')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\LiveCourseController::classroomIframeAction',));
            }

            if (0 === strpos($pathinfo, '/livecourse')) {
                // live_course_create
                if ($pathinfo === '/livecourse/create') {
                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\LiveCourseController::createAction',  '_route' => 'live_course_create',);
                }

                // live_course_manage_replay
                if (preg_match('#^/livecourse/(?P<id>[^/]++)/manage/replay$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'live_course_manage_replay')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\LiveCourseController::replayManageAction',));
                }

                // live_course_lesson_replay_create
                if (preg_match('#^/livecourse/(?P<courseId>[^/]++)/lesson/(?P<lessonId>[^/]++)/replay/create$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'live_course_lesson_replay_create')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\LiveCourseController::replayCreateAction',));
                }

                // live_course_lesson_replay_entry
                if (preg_match('#^/livecourse/(?P<courseId>[^/]++)/lesson/(?P<lessonId>[^/]++)/replay/(?P<courseLessonReplayId>[^/]++)/entry$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'live_course_lesson_replay_entry')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\LiveCourseController::entryReplayAction',));
                }

            }

        }

        // course_explore
        if (0 === strpos($pathinfo, '/course/explore') && preg_match('#^/course/explore(?:/(?P<category>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_explore')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseController::exploreAction',  'category' => '',));
        }

        if (0 === strpos($pathinfo, '/archive/course')) {
            // course_archive
            if ($pathinfo === '/archive/course') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseController::archiveAction',  '_route' => 'course_archive',);
            }

            // course_archive_show
            if (preg_match('#^/archive/course/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_archive_show')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseController::archiveCourseAction',));
            }

            // course_archive_lesson
            if (preg_match('#^/archive/course/(?P<id>[^/]++)/lesson(?:/(?P<lessonId>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_archive_lesson')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseController::archiveLessonAction',  'lessonId' => '',));
            }

        }

        if (0 === strpos($pathinfo, '/course')) {
            // course_create
            if ($pathinfo === '/course/create') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseController::createAction',  '_route' => 'course_create',);
            }

            // course_show
            if (preg_match('#^/course/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_show')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseController::showAction',));
            }

            // course_info
            if (preg_match('#^/course/(?P<id>[^/]++)/info$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_info')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseController::infoAction',));
            }

            // course_exit
            if (preg_match('#^/course/(?P<id>[^/]++)/exit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_exit')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseController::exitAction',));
            }

            // course_become_use_member
            if (preg_match('#^/course/(?P<id>[^/]++)/become_use_member$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_course_become_use_member;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_become_use_member')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseController::becomeUseMemberAction',));
            }
            not_course_become_use_member:

            // course_buy
            if (preg_match('#^/course/(?P<id>[^/]++)/buy$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_buy')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseOrderController::buyAction',));
            }

            // course_rebuy
            if (preg_match('#^/course/(?P<courseId>[^/]++)/course_rebuy$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_rebuy')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseController::rebuyAction',));
            }

        }

        // coupon_check
        if (preg_match('#^/(?P<type>[^/]++)/(?P<id>[^/]++)/coupon/check$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'coupon_check')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\OrderController::couponCheckAction',));
        }

        // order_result_notice
        if ($pathinfo === '/order/result/notice') {
            return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\OrderController::resultNoticeAction',  '_route' => 'order_result_notice',);
        }

        if (0 === strpos($pathinfo, '/course')) {
            if (0 === strpos($pathinfo, '/course/order/pay')) {
                // course_order_pay
                if ($pathinfo === '/course/order/pay') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_course_order_pay;
                    }

                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseOrderController::payAction',  '_route' => 'course_order_pay',);
                }
                not_course_order_pay:

                // course_order_pay_return
                if (preg_match('#^/course/order/pay/(?P<name>[^/]++)/return$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_order_pay_return')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseOrderController::payReturnAction',));
                }

                // course_order_pay_notify
                if (preg_match('#^/course/order/pay/(?P<name>[^/]++)/notify$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_order_pay_notify')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseOrderController::payNotifyAction',));
                }

            }

            // course_order_refund
            if (preg_match('#^/course/(?P<id>[^/]++)/order/refund$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_order_refund')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseOrderController::refundAction',));
            }

            // course_order_cancel_refund
            if (preg_match('#^/course/(?P<id>[^/]++)/order/cancel_refund$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_course_order_cancel_refund;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_order_cancel_refund')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseOrderController::cancelRefundAction',));
            }
            not_course_order_cancel_refund:

            // course_set_expiryday
            if (preg_match('#^/course/(?P<courseId>[^/]++)/set_expiryday/(?P<userId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_set_expiryday')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseController::addMemberExpiryDaysAction',));
            }

            // course_learn
            if (preg_match('#^/course/(?P<id>[^/]++)/learn$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_learn')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseController::learnAction',));
            }

            // course_learn_time
            if (preg_match('#^/course/(?P<lessonId>[^/]++)/learn/time/(?P<time>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_learn_time')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseController::recordLearningTimeAction',));
            }

            // course_watch_time
            if (preg_match('#^/course/(?P<lessonId>[^/]++)/watch/time/(?P<time>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_watch_time')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseController::recordWatchingTimeAction',));
            }

            // course_watch_play
            if (preg_match('#^/course/(?P<lessonId>[^/]++)/watch/play$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_watch_play')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseController::watchPlayAction',));
            }

            // course_detail_data
            if (0 === strpos($pathinfo, '/course/detail/data') && preg_match('#^/course/detail/data/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_detail_data')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseController::detailDataAction',));
            }

            // course_watch_paused
            if (preg_match('#^/course/(?P<lessonId>[^/]++)/watch/paused$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_watch_paused')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseController::watchPausedAction',));
            }

            // course_lesson_detail_data
            if (0 === strpos($pathinfo, '/course/lesson/detail/data') && preg_match('#^/course/lesson/detail/data/(?P<courseId>[^/]++)/(?P<lessonId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_lesson_detail_data')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseLessonController::detailDataAction',));
            }

            // course_lesson_show
            if (preg_match('#^/course/(?P<courseId>[^/]++)/lesson/(?P<lessonId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_lesson_show')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseLessonController::showAction',));
            }

            // course_lesson_preview
            if (preg_match('#^/course/(?P<courseId>[^/]++)/lesson/(?P<lessonId>[^/]++)/preview$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_lesson_preview')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseLessonController::previewAction',));
            }

            // course_lesson_media
            if (preg_match('#^/course/(?P<courseId>[^/]++)/lesson/(?P<lessonId>[^/]++)/media$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_lesson_media')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseLessonController::mediaAction',));
            }

            // course_lesson_media_download
            if (preg_match('#^/course/(?P<courseId>[^/]++)/lesson/(?P<lessonId>[^/]++)/media_download$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_lesson_media_download')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseLessonController::mediaDownloadAction',));
            }

            // course_lesson_ppt
            if (preg_match('#^/course/(?P<courseId>[^/]++)/lesson/(?P<lessonId>[^/]++)/ppt$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_lesson_ppt')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseLessonController::pptAction',));
            }

            // course_lesson_learn_status
            if (preg_match('#^/course/(?P<courseId>[^/]++)/lesson/(?P<lessonId>[^/]++)/learn/status$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_lesson_learn_status')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseLessonController::learnStatusAction',));
            }

            // course_lesson_learn_start
            if (preg_match('#^/course/(?P<courseId>[^/]++)/lesson/(?P<lessonId>[^/]++)/learn/start$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_course_lesson_learn_start;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_lesson_learn_start')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseLessonController::learnStartAction',));
            }
            not_course_lesson_learn_start:

            // course_lesson_learn_finish
            if (preg_match('#^/course/(?P<courseId>[^/]++)/lesson/(?P<lessonId>[^/]++)/learn/finish$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_course_lesson_learn_finish;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_lesson_learn_finish')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseLessonController::learnFinishAction',));
            }
            not_course_lesson_learn_finish:

            // course_lesson_learn_cancel
            if (preg_match('#^/course/(?P<courseId>[^/]++)/lesson/(?P<lessonId>[^/]++)/learn/cancel$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_course_lesson_learn_cancel;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_lesson_learn_cancel')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseLessonController::learnCancelAction',));
            }
            not_course_lesson_learn_cancel:

            // course_lesson_hlskeyurl
            if (preg_match('#^/course/(?P<courseId>[^/]++)/lesson/(?P<lessonId>[^/]++)/kan/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_lesson_hlskeyurl')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseLessonController::hlskeyurlAction',));
            }

        }

        if (0 === strpos($pathinfo, '/lessonplugin')) {
            // course_lesson_plugin_lesson_list
            if ($pathinfo === '/lessonplugin/lesson/list') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\LessonLessonPluginController::listAction',  '_route' => 'course_lesson_plugin_lesson_list',);
            }

            if (0 === strpos($pathinfo, '/lessonplugin/question')) {
                // course_lesson_plugin_question_init
                if ($pathinfo === '/lessonplugin/question/init') {
                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\LessonQuestionPluginController::initAction',  '_route' => 'course_lesson_plugin_question_init',);
                }

                // course_lesson_plugin_question_list
                if ($pathinfo === '/lessonplugin/question/list') {
                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\LessonQuestionPluginController::listAction',  '_route' => 'course_lesson_plugin_question_list',);
                }

                // course_lesson_plugin_question_show
                if ($pathinfo === '/lessonplugin/question/show') {
                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\LessonQuestionPluginController::showAction',  '_route' => 'course_lesson_plugin_question_show',);
                }

                // course_lesson_plugin_question_create
                if ($pathinfo === '/lessonplugin/question/create') {
                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\LessonQuestionPluginController::createAction',  '_route' => 'course_lesson_plugin_question_create',);
                }

                // course_lesson_plugin_question_answer
                if ($pathinfo === '/lessonplugin/question/answer') {
                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\LessonQuestionPluginController::answerAction',  '_route' => 'course_lesson_plugin_question_answer',);
                }

            }

            // course_lesson_plugin_material_init
            if ($pathinfo === '/lessonplugin/material/init') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\LessonMaterialPluginController::initAction',  '_route' => 'course_lesson_plugin_material_init',);
            }

            if (0 === strpos($pathinfo, '/lessonplugin/note')) {
                // course_lesson_plugin_note_init
                if ($pathinfo === '/lessonplugin/note/init') {
                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\LessonNotePluginController::initAction',  '_route' => 'course_lesson_plugin_note_init',);
                }

                // course_lesson_plugin_note_save
                if ($pathinfo === '/lessonplugin/note/save') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_course_lesson_plugin_note_save;
                    }

                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\LessonNotePluginController::saveAction',  '_route' => 'course_lesson_plugin_note_save',);
                }
                not_course_lesson_plugin_note_save:

            }

        }

        if (0 === strpos($pathinfo, '/course')) {
            // course_review_create
            if (preg_match('#^/course/(?P<id>[^/]++)/review/create$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_review_create')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseReviewController::createAction',));
            }

            // course_review_list
            if (preg_match('#^/course/(?P<id>[^/]++)/review/list$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_review_list')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseReviewController::listAction',));
            }

            // course_teacher_info
            if (preg_match('#^/course/(?P<courseId>[^/]++)/teacher/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_teacher_info')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseController::teacherInfoAction',));
            }

            // course_members
            if (preg_match('#^/course/(?P<id>[^/]++)/members$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_members')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseController::membersAction',));
            }

            // course_favorite
            if (preg_match('#^/course/(?P<id>[^/]++)/favorite$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_course_favorite;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_favorite')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseController::favoriteAction',));
            }
            not_course_favorite:

            // course_unfavorite
            if (preg_match('#^/course/(?P<id>[^/]++)/unfavorite$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_course_unfavorite;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_unfavorite')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseController::unfavoriteAction',));
            }
            not_course_unfavorite:

            // course_materials
            if (preg_match('#^/course/(?P<id>[^/]++)/material/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'course_materials');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_materials')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseMaterialController::indexAction',));
            }

            // course_material_download
            if (preg_match('#^/course/(?P<courseId>[^/]++)/material/(?P<materialId>[^/]++)/download$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_material_download')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseMaterialController::downloadAction',));
            }

            // course_material_delete
            if (preg_match('#^/course/(?P<id>[^/]++)/material/(?P<materialId>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_course_material_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_material_delete')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseMaterialController::deleteAction',));
            }
            not_course_material_delete:

            // course_threads
            if (preg_match('#^/course/(?P<id>[^/]++)/thread$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_threads')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseThreadController::indexAction',));
            }

            // course_thread_create
            if (preg_match('#^/course/(?P<id>[^/]++)/thread/create$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_thread_create')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseThreadController::createAction',));
            }

            // course_thread_show
            if (preg_match('#^/course/(?P<courseId>[^/]++)/thread/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_thread_show')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseThreadController::showAction',));
            }

            // course_thread_post
            if (preg_match('#^/course/(?P<courseId>[^/]++)/thread/(?P<id>[^/]++)/post$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_thread_post')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseThreadController::postAction',));
            }

            // course_thread_edit
            if (preg_match('#^/course/(?P<courseId>[^/]++)/thread/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_thread_edit')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseThreadController::editAction',));
            }

            // course_thread_post_delete
            if (preg_match('#^/course/(?P<courseId>[^/]++)/thread/(?P<threadId>[^/]++)/post/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_course_thread_post_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_thread_post_delete')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseThreadController::deletePostAction',));
            }
            not_course_thread_post_delete:

            // course_thread_post_edit
            if (preg_match('#^/course/(?P<courseId>[^/]++)/thread/(?P<threadId>[^/]++)/post/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_thread_post_edit')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseThreadController::editPostAction',));
            }

            // course_thread_stick
            if (preg_match('#^/course/(?P<courseId>[^/]++)/thread/(?P<id>[^/]++)/stick$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_course_thread_stick;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_thread_stick')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseThreadController::stickAction',));
            }
            not_course_thread_stick:

            // course_thread_unstick
            if (preg_match('#^/course/(?P<courseId>[^/]++)/thread/(?P<id>[^/]++)/unstick$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_course_thread_unstick;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_thread_unstick')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseThreadController::unstickAction',));
            }
            not_course_thread_unstick:

            // course_thread_elite
            if (preg_match('#^/course/(?P<courseId>[^/]++)/thread/(?P<id>[^/]++)/elite$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_course_thread_elite;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_thread_elite')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseThreadController::eliteAction',));
            }
            not_course_thread_elite:

            // course_thread_unelite
            if (preg_match('#^/course/(?P<courseId>[^/]++)/thread/(?P<id>[^/]++)/unelite$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_course_thread_unelite;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_thread_unelite')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseThreadController::uneliteAction',));
            }
            not_course_thread_unelite:

            // course_thread_delete
            if (preg_match('#^/course/(?P<courseId>[^/]++)/thread/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_course_thread_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_thread_delete')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseThreadController::deleteAction',));
            }
            not_course_thread_delete:

            // course_manage
            if (preg_match('#^/course/(?P<id>[^/]++)/manage$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseManageController::indexAction',));
            }

            // course_manage_base
            if (preg_match('#^/course/(?P<id>[^/]++)/manage/base$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_base')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseManageController::baseAction',));
            }

            // course_manage_detail
            if (preg_match('#^/course/(?P<id>[^/]++)/manage/detail$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_detail')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseManageController::detailAction',));
            }

            // course_manage_picture
            if (preg_match('#^/course/(?P<id>[^/]++)/manage/picture$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_picture')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseManageController::pictureAction',));
            }

            // course_manage_picture_crop
            if (preg_match('#^/course/(?P<id>[^/]++)/manage/picture/crop$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_picture_crop')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseManageController::pictureCropAction',));
            }

            // course_manage_price
            if (preg_match('#^/course/(?P<id>[^/]++)/manage/price$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_price')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseManageController::priceAction',));
            }

            // course_manage_teachers
            if (preg_match('#^/course/(?P<id>[^/]++)/manage/teachers$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_teachers')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseManageController::teachersAction',));
            }

            // course_manage_data
            if (preg_match('#^/course/(?P<id>[^/]++)/manage/data$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_data')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseManageController::dataAction',));
            }

            // course_manage_files
            if (preg_match('#^/course/(?P<id>[^/]++)/manage/files$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_files')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseFileManageController::indexAction',));
            }

            // course_manage_file_show
            if (preg_match('#^/course/(?P<id>[^/]++)/manage/file/(?P<fileId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_file_show')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseFileManageController::showAction',));
            }

            // course_manage_file_convert
            if (preg_match('#^/course/(?P<id>[^/]++)/manage/file/(?P<fileId>[^/]++)/convert$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_course_manage_file_convert;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_file_convert')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseFileManageController::convertAction',));
            }
            not_course_manage_file_convert:

            // course_manage_upload_course_delete_files
            if (preg_match('#^/course/(?P<id>[^/]++)/delete/files/(?P<type>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_course_manage_upload_course_delete_files;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_upload_course_delete_files')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseFileManageController::deleteCourseFilesAction',));
            }
            not_course_manage_upload_course_delete_files:

            // course_manage_upload_course_files
            if (preg_match('#^/course/(?P<id>[^/]++)/manage/upload/course/files/(?P<targetType>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_upload_course_files')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseFileManageController::uploadCourseFilesAction',));
            }

            // course_manage_batch_upload_course_files
            if (preg_match('#^/course/(?P<id>[^/]++)/manage/batch/upload/course/files/(?P<targetType>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_batch_upload_course_files')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseFileManageController::batchUploadCourseFilesAction',));
            }

            // course_manage_students
            if (preg_match('#^/course/(?P<id>[^/]++)/manage/students$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_students')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseStudentManageController::indexAction',));
            }

            // course_manage_students_show
            if (preg_match('#^/course/(?P<courseId>[^/]++)/manage/students/(?P<userId>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_students_show')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseStudentManageController::showAction',));
            }

            // course_manage_students_defined_show
            if (preg_match('#^/course/(?P<courseId>[^/]++)/manage/students/(?P<userId>[^/]++)/defined_show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_students_defined_show')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseStudentManageController::definedShowAction',));
            }

            // course_manage_student_create
            if (preg_match('#^/course/(?P<id>[^/]++)/manage/student/create$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_student_create')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseStudentManageController::createAction',));
            }

            // course_manage_student_export_csv
            if (preg_match('#^/course/(?P<id>[^/]++)/manage/student/export$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_student_export_csv')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseStudentManageController::exportCsvAction',));
            }

            // course_manage_student_remove
            if (preg_match('#^/course/(?P<courseId>[^/]++)/manage/student/(?P<userId>[^/]++)/remove$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_course_manage_student_remove;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_student_remove')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseStudentManageController::removeAction',));
            }
            not_course_manage_student_remove:

            // course_manage_student_remark
            if (preg_match('#^/course/(?P<courseId>[^/]++)/manage/student/(?P<userId>[^/]++)/remark$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_student_remark')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseStudentManageController::remarkAction',));
            }

            // course_manage_student_check_nickname
            if (preg_match('#^/course/(?P<id>[^/]++)/manage/nickname_check$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_student_check_nickname')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseStudentManageController::checkNicknameAction',));
            }

            // course_manage_teachers_match
            if (preg_match('#^/course/(?P<id>[^/]++)/manage/teachersMatch$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_teachers_match')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseManageController::teachersMatchAction',));
            }

            // course_manage_lesson
            if (preg_match('#^/course/(?P<id>[^/]++)/manage/lesson$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_lesson')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseLessonManageController::indexAction',));
            }

            // course_manage_lesson_create
            if (preg_match('#^/course/(?P<id>[^/]++)/manage/lesson/create$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_lesson_create')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseLessonManageController::createAction',));
            }

            if (0 === strpos($pathinfo, '/course/draft')) {
                // course_draft_create
                if ($pathinfo === '/course/draft/create') {
                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseLessonManageController::draftCreateAction',  '_route' => 'course_draft_create',);
                }

                // course_draft_view
                if ($pathinfo === '/course/draft/view') {
                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseLessonManageController::viewDraftAction',  '_route' => 'course_draft_view',);
                }

            }

            // live_course_manage_lesson_create
            if (preg_match('#^/course/(?P<id>[^/]++)/manage/live/lesson/create$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'live_course_manage_lesson_create')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\LiveCourseLessonManageController::createAction',));
            }

            // live_course_manage_lesson_edit
            if (preg_match('#^/course/(?P<courseId>[^/]++)/manage/live/lesson/(?P<lessonId>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'live_course_manage_lesson_edit')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\LiveCourseLessonManageController::editAction',));
            }

            // live_lesson_time_check
            if (preg_match('#^/course/(?P<id>[^/]++)/manage/live/lesson/time/check$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'live_lesson_time_check')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\LiveCourseLessonManageController::lessonTimeCheckAction',));
            }

            // live_lesson_calculate_left_capacity
            if (preg_match('#^/course/(?P<courseId>[^/]++)/manage/livelesson/calculateLeftCapacity$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'live_lesson_calculate_left_capacity')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\LiveCourseLessonManageController::calculateLeftCapacityAction',));
            }

            // course_manage_lesson_create_testpaper
            if (preg_match('#^/course/(?P<id>[^/]++)/manage/lesson/create/testpaper$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_lesson_create_testpaper')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseLessonManageController::createTestpaperAction',));
            }

            // course_manage_lesson_sort
            if (preg_match('#^/course/(?P<id>[^/]++)/manage/lesson/sort$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_course_manage_lesson_sort;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_lesson_sort')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseLessonManageController::sortAction',));
            }
            not_course_manage_lesson_sort:

            // course_manage_lesson_edit
            if (preg_match('#^/course/(?P<courseId>[^/]++)/manage/lesson/(?P<lessonId>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_lesson_edit')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseLessonManageController::editAction',));
            }

            // course_manage_lesson_edit_testpaper
            if (preg_match('#^/course/(?P<courseId>[^/]++)/manage/lesson/(?P<lessonId>[^/]++)/edit/testpaper$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_lesson_edit_testpaper')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseLessonManageController::editTestpaperAction',));
            }

            // course_manage_lesson_delete
            if (preg_match('#^/course/(?P<courseId>[^/]++)/manage/lesson/(?P<lessonId>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_course_manage_lesson_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_lesson_delete')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseLessonManageController::deleteAction',));
            }
            not_course_manage_lesson_delete:

            // course_manage_lesson_publish
            if (preg_match('#^/course/(?P<courseId>[^/]++)/manage/lesson/(?P<lessonId>[^/]++)/publish$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_course_manage_lesson_publish;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_lesson_publish')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseLessonManageController::publishAction',));
            }
            not_course_manage_lesson_publish:

            // course_manage_lesson_unpublish
            if (preg_match('#^/course/(?P<courseId>[^/]++)/manage/lesson/(?P<lessonId>[^/]++)/unpublish$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_course_manage_lesson_unpublish;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_lesson_unpublish')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseLessonManageController::unpublishAction',));
            }
            not_course_manage_lesson_unpublish:

        }

        // question_file_url
        if ($pathinfo === '/question_ajax/file_url') {
            return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\QuestionController::fileUrlAction',  '_route' => 'question_file_url',);
        }

        if (0 === strpos($pathinfo, '/course')) {
            // course_manage_question
            if (preg_match('#^/course/(?P<courseId>[^/]++)/manage/question$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_question')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseQuestionManageController::indexAction',));
            }

            // course_manage_question_create
            if (preg_match('#^/course/(?P<courseId>[^/]++)/manage/question/create/(?P<type>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_question_create')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseQuestionManageController::createAction',));
            }

            // course_manage_question_update
            if (preg_match('#^/course/(?P<courseId>[^/]++)/manage/question/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_question_update')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseQuestionManageController::updateAction',));
            }

            // course_manage_question_delete
            if (preg_match('#^/course/(?P<courseId>[^/]++)/manage/question/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_course_manage_question_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_question_delete')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseQuestionManageController::deleteAction',));
            }
            not_course_manage_question_delete:

            // course_manage_question_deletes
            if (preg_match('#^/course/(?P<courseId>[^/]++)/manage/question/deletes$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_course_manage_question_deletes;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_question_deletes')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseQuestionManageController::deletesAction',));
            }
            not_course_manage_question_deletes:

            // course_manage_question_preview
            if (preg_match('#^/course/(?P<courseId>[^/]++)/manage/question/(?P<id>[^/]++)/preview$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_question_preview')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseQuestionManageController::previewAction',));
            }

            // course_manage_question_upload
            if (preg_match('#^/course/(?P<courseId>[^/]++)/manage/question/uploadfile/(?P<type>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_course_manage_question_upload;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_question_upload')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseQuestionManageController::uploadFileAction',));
            }
            not_course_manage_question_upload:

            // course_manage_question_category
            if (preg_match('#^/course/(?P<courseId>[^/]++)/manage/question/category$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_question_category')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseQuestionCategoryManageController::indexAction',));
            }

            // course_manage_question_category_create
            if (preg_match('#^/course/(?P<courseId>[^/]++)/manage/question/category/create$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_question_category_create')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseQuestionCategoryManageController::createAction',));
            }

            // course_manage_question_category_update
            if (preg_match('#^/course/(?P<courseId>[^/]++)/manage/question/category/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_question_category_update')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseQuestionCategoryManageController::updateAction',));
            }

            // course_manage_question_category_delete
            if (preg_match('#^/course/(?P<courseId>[^/]++)/manage/question/category/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_course_manage_question_category_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_question_category_delete')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseQuestionCategoryManageController::deleteAction',));
            }
            not_course_manage_question_category_delete:

            // course_manage_question_category_sort
            if (preg_match('#^/course/(?P<courseId>[^/]++)/manage/question/category/sort$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_course_manage_question_category_sort;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_question_category_sort')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseQuestionCategoryManageController::sortAction',));
            }
            not_course_manage_question_category_sort:

        }

        if (0 === strpos($pathinfo, '/test')) {
            // course_manage_do_test
            if (preg_match('#^/test/(?P<testId>[^/]++)/do$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_do_test')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\TestpaperController::doTestpaperAction',));
            }

            // course_manage_redo_test
            if (preg_match('#^/test/(?P<testId>[^/]++)/redo$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_redo_test')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\TestpaperController::reDoTestpaperAction',));
            }

            // course_manage_show_test
            if (preg_match('#^/test/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_show_test')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\TestpaperController::showTestAction',));
            }

            // course_manage_preview_test
            if (preg_match('#^/test/(?P<testId>[^/]++)/preview$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_preview_test')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\TestpaperController::previewTestAction',));
            }

            // course_manage_do_test_pause
            if ($pathinfo === '/test/pause') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\TestpaperController::pauseTestAction',  '_route' => 'course_manage_do_test_pause',);
            }

            // course_manage_do_test_suspend
            if (preg_match('#^/test/(?P<id>[^/]++)/suspend$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_do_test_suspend')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\TestpaperController::testSuspendAction',));
            }

            // course_manage_submit_test
            if (preg_match('#^/test/(?P<id>[^/]++)/submit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_submit_test')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\TestpaperController::submitTestAction',));
            }

            // course_manage_finish_test
            if (preg_match('#^/test/(?P<id>[^/]++)/finish$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_finish_test')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\TestpaperController::finishTestAction',));
            }

            // course_manage_test_results
            if (preg_match('#^/test/(?P<id>[^/]++)/result$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_test_results')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\TestpaperController::testResultAction',));
            }

            // course_manage_test_teacher_check
            if (preg_match('#^/test/(?P<id>[^/]++)/teacher/check$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_test_teacher_check')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\TestpaperController::teacherCheckAction',));
            }

            // course_manage_test_teacher_finish_check
            if ($pathinfo === '/test/teacher/check/finish') {
                return array (  '_controller' => 'TopxiaWebBundle:DoTest:testFinishCheck',  '_route' => 'course_manage_test_teacher_finish_check',);
            }

        }

        if (0 === strpos($pathinfo, '/my/teacher')) {
            // course_manage_list_teacher_test_reviewing
            if ($pathinfo === '/my/teacher/reviewing/test/list') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\TestpaperController::listReviewingTestAction',  '_route' => 'course_manage_list_teacher_test_reviewing',);
            }

            // course_manage_list_teacher_test_finished
            if ($pathinfo === '/my/teacher/finished/test/list') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\TestpaperController::listFinishedTestAction',  '_route' => 'course_manage_list_teacher_test_finished',);
            }

        }

        if (0 === strpos($pathinfo, '/course')) {
            // course_manage_testpaper
            if (preg_match('#^/course/(?P<courseId>[^/]++)/manage/testpaper$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_testpaper')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseTestpaperManageController::indexAction',));
            }

            // course_manage_test_check
            if (0 === strpos($pathinfo, '/course/check') && preg_match('#^/course/check/(?P<id>[^/]++)/(?P<status>[^/]++)/list$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_test_check')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\TestpaperController::teacherCheckInCourseAction',));
            }

            // course_manage_testpaper_create
            if (preg_match('#^/course/(?P<courseId>[^/]++)/manage/testpaper/create$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_testpaper_create')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseTestpaperManageController::createAction',));
            }

            // course_manage_testpaper_build_check
            if (preg_match('#^/course/(?P<courseId>[^/]++)/manage/testpaper/build_check$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_testpaper_build_check')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseTestpaperManageController::buildCheckAction',));
            }

            // course_manage_testpaper_update
            if (preg_match('#^/course/(?P<courseId>[^/]++)/manage/testpaper/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_testpaper_update')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseTestpaperManageController::updateAction',));
            }

            // course_manage_testpaper_delete
            if (preg_match('#^/course/(?P<courseId>[^/]++)/manage/testpaper/(?P<testpaperId>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_testpaper_delete')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseTestpaperManageController::deleteAction',));
            }

            // course_manage_testpaper_deletes
            if (preg_match('#^/course/(?P<courseId>[^/]++)/manage/testpaper/deletes$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_testpaper_deletes')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseTestpaperManageController::deletesAction',));
            }

            // course_manage_testpaper_publish
            if (preg_match('#^/course/(?P<courseId>[^/]++)/manage/testpaper/(?P<id>[^/]++)/publish$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_testpaper_publish')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseTestpaperManageController::publishAction',));
            }

            // course_manage_testpaper_close
            if (preg_match('#^/course/(?P<courseId>[^/]++)/manage/testpaper/(?P<id>[^/]++)/close$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_testpaper_close')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseTestpaperManageController::closeAction',));
            }

            // course_manage_testpaper_items
            if (preg_match('#^/course/(?P<courseId>[^/]++)/manage/testpaper/(?P<testpaperId>[^/]++)/items$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_testpaper_items')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseTestpaperManageController::itemsAction',));
            }

            // course_manage_testpaper_items_reset
            if (preg_match('#^/course/(?P<courseId>[^/]++)/manage/testpaper/(?P<testpaperId>[^/]++)/items_reset$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_testpaper_items_reset')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseTestpaperManageController::itemsResetAction',));
            }

            // course_manage_testpaper_item_picker
            if (preg_match('#^/course/(?P<courseId>[^/]++)/manage/testpaper/(?P<testpaperId>[^/]++)/item_picker$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_testpaper_item_picker')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseTestpaperManageController::itemPickerAction',));
            }

            // course_manage_testpaper_item_picked
            if (preg_match('#^/course/(?P<courseId>[^/]++)/manage/testpaper/(?P<testpaperId>[^/]++)/item_picked$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_testpaper_item_picked')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseTestpaperManageController::itemPickedAction',));
            }

            // course_manage_chapter_create
            if (preg_match('#^/course/(?P<id>[^/]++)/manage/chapter/create$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_chapter_create')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseChapterManageController::createAction',));
            }

            // course_manage_chapter_edit
            if (preg_match('#^/course/(?P<courseId>[^/]++)/manage/chapter/(?P<chapterId>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_chapter_edit')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseChapterManageController::editAction',));
            }

            // course_manage_chapter_delete
            if (preg_match('#^/course/(?P<courseId>[^/]++)/manage/chapter/(?P<chapterId>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_course_manage_chapter_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_chapter_delete')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseChapterManageController::deleteAction',));
            }
            not_course_manage_chapter_delete:

            // course_manage_material
            if (preg_match('#^/course/(?P<courseId>[^/]++)/manage/lesson/(?P<lessonId>[^/]++)/material$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_material')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseMaterialManageController::indexAction',));
            }

            // course_manage_material_upload
            if (preg_match('#^/course/(?P<courseId>[^/]++)/manage/lesson/(?P<lessonId>[^/]++)/material/upload$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_course_manage_material_upload;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_material_upload')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseMaterialManageController::uploadAction',));
            }
            not_course_manage_material_upload:

            // course_manage_material_delete
            if (preg_match('#^/course/(?P<courseId>[^/]++)/manage/lesson/(?P<lessonId>[^/]++)/material/(?P<materialId>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_course_manage_material_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_material_delete')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseMaterialManageController::deleteAction',));
            }
            not_course_manage_material_delete:

            // course_manage_media_library
            if (preg_match('#^/course/(?P<id>[^/]++)/manage/media/library$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_media_library')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseMediaManageController::libraryAction',));
            }

            // course_manage_media_import
            if (preg_match('#^/course/(?P<id>[^/]++)/manage/media/import$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_media_import')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseMediaManageController::importAction',));
            }

            // course_manage_publish
            if (preg_match('#^/course/(?P<id>[^/]++)/manage/publish$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_course_manage_publish;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_manage_publish')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseManageController::publishAction',));
            }
            not_course_manage_publish:

            // course_announcement_show_all
            if (preg_match('#^/course/(?P<courseId>[^/]++)/announcement/all$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_announcement_show_all')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseAnnouncementController::showAllAction',));
            }

            // course_announcement_add
            if (preg_match('#^/course/(?P<courseId>[^/]++)/announcement/create$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_announcement_add')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseAnnouncementController::createAction',));
            }

            // course_announcement_show
            if (preg_match('#^/course/(?P<courseId>[^/]++)/announcement/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_announcement_show')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseAnnouncementController::showAction',));
            }

            // course_announcement_update
            if (preg_match('#^/course/(?P<courseId>[^/]++)/announcement/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_announcement_update')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseAnnouncementController::updateAction',));
            }

            // course_announcement_delete
            if (preg_match('#^/course/(?P<courseId>[^/]++)/announcement/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_course_announcement_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_announcement_delete')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CourseAnnouncementController::deleteAction',));
            }
            not_course_announcement_delete:

        }

        // testpaper_user_result_json
        if (0 === strpos($pathinfo, '/testpaper') && preg_match('#^/testpaper/(?P<id>[^/]++)/user_result/json$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'testpaper_user_result_json')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\TestpaperController::userResultJsonAction',));
        }

        // search
        if ($pathinfo === '/search') {
            return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\SearchController::indexAction',  '_route' => 'search',);
        }

        // note_show
        if (0 === strpos($pathinfo, '/note') && preg_match('#^/note/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'note_show')), array (  '_controller' => 'TopxiaWebBundle:CourseNote:index',));
        }

        if (0 === strpos($pathinfo, '/settings')) {
            // settings
            if (rtrim($pathinfo, '/') === '/settings') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'settings');
                }

                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\SettingsController::profileAction',  '_route' => 'settings',);
            }

            if (0 === strpos($pathinfo, '/settings/avatar')) {
                // settings_avatar
                if ($pathinfo === '/settings/avatar') {
                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\SettingsController::avatarAction',  '_route' => 'settings_avatar',);
                }

                // settings_avatar_crop
                if ($pathinfo === '/settings/avatar/crop') {
                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\SettingsController::avatarCropAction',  '_route' => 'settings_avatar_crop',);
                }

                // settings_avatar_fetch_partner
                if ($pathinfo === '/settings/avatar/fetch_partner') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_settings_avatar_fetch_partner;
                    }

                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\SettingsController::avatarFetchPartnerAction',  '_route' => 'settings_avatar_fetch_partner',);
                }
                not_settings_avatar_fetch_partner:

            }

            if (0 === strpos($pathinfo, '/settings/nickname')) {
                // setting_nickname
                if ($pathinfo === '/settings/nickname') {
                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\SettingsController::nicknameAction',  '_route' => 'setting_nickname',);
                }

                // update_nickname_check
                if ($pathinfo === '/settings/nickname/check') {
                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\SettingsController::nicknameCheckAction',  '_route' => 'update_nickname_check',);
                }

            }

            // settings_password
            if ($pathinfo === '/settings/password') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\SettingsController::passwordAction',  '_route' => 'settings_password',);
            }

            if (0 === strpos($pathinfo, '/settings/email')) {
                // settings_email
                if ($pathinfo === '/settings/email') {
                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\SettingsController::emailAction',  '_route' => 'settings_email',);
                }

                // settings_email_verify
                if ($pathinfo === '/settings/email/verify') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_settings_email_verify;
                    }

                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\SettingsController::emailVerifyAction',  '_route' => 'settings_email_verify',);
                }
                not_settings_email_verify:

            }

            // settings_binds
            if ($pathinfo === '/settings/binds') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\SettingsController::bindsAction',  '_route' => 'settings_binds',);
            }

            // settings_binds_unbind
            if (0 === strpos($pathinfo, '/settings/unbind') && preg_match('#^/settings/unbind/(?P<type>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'settings_binds_unbind')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\SettingsController::unBindAction',));
            }

            if (0 === strpos($pathinfo, '/settings/bind')) {
                // settings_binds_bind
                if (preg_match('#^/settings/bind/(?P<type>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'settings_binds_bind')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\SettingsController::bindAction',));
                }

                // settings_binds_bind_callback
                if (preg_match('#^/settings/bind/(?P<type>[^/]++)/callback$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'settings_binds_bind_callback')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\SettingsController::bindCallbackAction',));
                }

            }

            if (0 === strpos($pathinfo, '/settings/setup')) {
                // settings_setup
                if ($pathinfo === '/settings/setup') {
                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\SettingsController::setupAction',  '_route' => 'settings_setup',);
                }

                // settings_setup_check_nickname
                if ($pathinfo === '/settings/setup/check_nickname') {
                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\SettingsController::setupCheckNicknameAction',  '_route' => 'settings_setup_check_nickname',);
                }

            }

        }

        // auth_email_confirm
        if ($pathinfo === '/auth/email/confirm') {
            return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\AuthController::emailConfirmAction',  '_route' => 'auth_email_confirm',);
        }

        if (0 === strpos($pathinfo, '/password/reset')) {
            // password_reset
            if ($pathinfo === '/password/reset') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\PasswordResetController::indexAction',  '_route' => 'password_reset',);
            }

            // password_reset_update
            if ($pathinfo === '/password/reset/update') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\PasswordResetController::updateAction',  '_route' => 'password_reset_update',);
            }

        }

        // browser_upgrade
        if ($pathinfo === '/browser/upgrade') {
            return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\BrowserController::upgradeAction',  '_route' => 'browser_upgrade',);
        }

        // category_all
        if ($pathinfo === '/category/all') {
            return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CategoryController::allAction',  '_route' => 'category_all',);
        }

        // location_all
        if ($pathinfo === '/location/all') {
            return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\LocationController::allAction',  '_route' => 'location_all',);
        }

        if (0 === strpos($pathinfo, '/tag')) {
            // tag
            if ($pathinfo === '/tag') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\TagController::indexAction',  '_route' => 'tag',);
            }

            // tag_all
            if ($pathinfo === '/tag/all_jsonm') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\TagController::allAction',  '_route' => 'tag_all',);
            }

            // tag_match
            if ($pathinfo === '/tag/match_jsonp') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\TagController::matchAction',  '_route' => 'tag_match',);
            }

            // tag_show
            if (preg_match('#^/tag/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tag_show')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\TagController::showAction',));
            }

        }

        // following_match_bynickname
        if ($pathinfo === '/following/bynickname/match_jsonp') {
            return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\MessageController::matchAction',  '_route' => 'following_match_bynickname',);
        }

        if (0 === strpos($pathinfo, '/comment-widget')) {
            // comment_widget_init
            if ($pathinfo === '/comment-widget/init') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CommentWidgetController::initAction',  '_route' => 'comment_widget_init',);
            }

            // comment_widget_create
            if ($pathinfo === '/comment-widget/create') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CommentWidgetController::createAction',  '_route' => 'comment_widget_create',);
            }

            // comment_widget_delete
            if ($pathinfo === '/comment-widget/delete') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_comment_widget_delete;
                }

                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CommentWidgetController::deleteAction',  '_route' => 'comment_widget_delete',);
            }
            not_comment_widget_delete:

        }

        // notification
        if ($pathinfo === '/notification') {
            return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\NotificationController::indexAction',  '_route' => 'notification',);
        }

        if (0 === strpos($pathinfo, '/my')) {
            // my
            if ($pathinfo === '/my') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\MyCourseController::indexAction',  '_route' => 'my',);
            }

            if (0 === strpos($pathinfo, '/my/teaching')) {
                // my_teaching_courses
                if ($pathinfo === '/my/teaching/courses') {
                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\MyTeachingController::coursesAction',  '_route' => 'my_teaching_courses',);
                }

                // my_teaching_threads
                if (0 === strpos($pathinfo, '/my/teaching/threads') && preg_match('#^/my/teaching/threads/(?P<type>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'my_teaching_threads')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\MyTeachingController::threadsAction',));
                }

            }

            // my_live_courses_learning
            if ($pathinfo === '/my/livecourses/learing') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\MyLiveCourseController::indexAction',  '_route' => 'my_live_courses_learning',);
            }

            if (0 === strpos($pathinfo, '/my/courses')) {
                if (0 === strpos($pathinfo, '/my/courses/learn')) {
                    // my_courses_learning
                    if ($pathinfo === '/my/courses/learning') {
                        return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\MyCourseController::learningAction',  '_route' => 'my_courses_learning',);
                    }

                    // my_courses_learned
                    if ($pathinfo === '/my/courses/learned') {
                        return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\MyCourseController::learnedAction',  '_route' => 'my_courses_learned',);
                    }

                }

                // my_courses_favorited
                if ($pathinfo === '/my/courses/favorited') {
                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\MyCourseController::favoritedAction',  '_route' => 'my_courses_favorited',);
                }

            }

            // my_questions
            if ($pathinfo === '/my/questions') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\MyThreadController::questionsAction',  '_route' => 'my_questions',);
            }

            // my_discussions
            if ($pathinfo === '/my/discussions') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\MyThreadController::discussionsAction',  '_route' => 'my_discussions',);
            }

            if (0 === strpos($pathinfo, '/my/note')) {
                if (0 === strpos($pathinfo, '/my/notebook')) {
                    // my_notebooks
                    if ($pathinfo === '/my/notebooks') {
                        return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\MyNotebookController::indexAction',  '_route' => 'my_notebooks',);
                    }

                    // my_notebook_show
                    if (preg_match('#^/my/notebook/(?P<courseId>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'my_notebook_show')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\MyNotebookController::showAction',));
                    }

                }

                // my_note_delete
                if (preg_match('#^/my/note/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_my_note_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'my_note_delete')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\MyNotebookController::noteDeleteAction',));
                }
                not_my_note_delete:

            }

            if (0 === strpos($pathinfo, '/my/order')) {
                // my_orders
                if ($pathinfo === '/my/orders') {
                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\MyOrderController::indexAction',  '_route' => 'my_orders',);
                }

                // my_order_cancel_refund
                if (preg_match('#^/my/order/(?P<id>[^/]++)/cancel_refund$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_my_order_cancel_refund;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'my_order_cancel_refund')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\MyOrderController::cancelRefundAction',));
                }
                not_my_order_cancel_refund:

            }

            // my_refunds
            if ($pathinfo === '/my/refunds') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\MyOrderController::refundsAction',  '_route' => 'my_refunds',);
            }

            // income_records
            if ($pathinfo === '/my/income_records') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\MoneyRecordController::indexAction',  '_route' => 'income_records',);
            }

            // payout_records
            if ($pathinfo === '/my/payout_records') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\MoneyRecordController::payoutAction',  '_route' => 'payout_records',);
            }

            // my_quiz
            if ($pathinfo === '/my/quiz') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\TestpaperController::indexAction',  '_route' => 'my_quiz',);
            }

        }

        if (0 === strpos($pathinfo, '/question')) {
            // my_favorite_question
            if (preg_match('#^/question/(?P<id>[^/]++)/favorite$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'my_favorite_question')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\MyQuestionController::favoriteQuestionAction',));
            }

            // my_unfavorite_question
            if (preg_match('#^/question/(?P<id>[^/]++)/unfavorite$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'my_unfavorite_question')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\MyQuestionController::unFavoriteQuestionAction',));
            }

        }

        if (0 === strpos($pathinfo, '/my/favorite/question')) {
            // my_show_favorite_question
            if ($pathinfo === '/my/favorite/question/show') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\MyQuestionController::showFavoriteQuestionAction',  '_route' => 'my_show_favorite_question',);
            }

            // my_favorite_question_preview
            if (preg_match('#^/my/favorite/question/(?P<id>[^/]++)/preview$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'my_favorite_question_preview')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\MyQuestionController::previewAction',));
            }

        }

        if (0 === strpos($pathinfo, '/user')) {
            // user_show
            if (preg_match('#^/user/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_show')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\UserController::showAction',));
            }

            // user_teach
            if (preg_match('#^/user/(?P<id>[^/]++)/teach$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_teach')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\UserController::teachAction',));
            }

            // user_learn
            if (preg_match('#^/user/(?P<id>[^/]++)/learn$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_learn')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\UserController::learnAction',));
            }

            // user_favorited
            if (preg_match('#^/user/(?P<id>[^/]++)/favorited$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_favorited')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\UserController::favoritedAction',));
            }

            // user_friend
            if (preg_match('#^/user/(?P<id>[^/]++)/friend$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_friend')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\UserController::friendAction',));
            }

            // user_group
            if (preg_match('#^/user/(?P<id>[^/]++)/group$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_group')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\UserController::groupAction',));
            }

            // user_following
            if (preg_match('#^/user/(?P<id>[^/]++)/following$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_following')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\UserController::followingAction',));
            }

            // user_follower
            if (preg_match('#^/user/(?P<id>[^/]++)/follower$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_follower')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\UserController::followerAction',));
            }

            // user_follow
            if (preg_match('#^/user/(?P<id>[^/]++)/follow$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_user_follow;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_follow')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\UserController::followAction',));
            }
            not_user_follow:

            // user_unfollow
            if (preg_match('#^/user/(?P<id>[^/]++)/unfollow$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_user_unfollow;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_unfollow')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\UserController::unfollowAction',));
            }
            not_user_unfollow:

            // user_remind_counter
            if ($pathinfo === '/user_remind_counter') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\UserController::remindCounterAction',  '_route' => 'user_remind_counter',);
            }

        }

        if (0 === strpos($pathinfo, '/mes')) {
            // message_create
            if (0 === strpos($pathinfo, '/mesage/create') && preg_match('#^/mesage/create/(?P<toId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'message_create')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\MessageController::createAction',));
            }

            if (0 === strpos($pathinfo, '/message')) {
                // message
                if (rtrim($pathinfo, '/') === '/message') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'message');
                    }

                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\MessageController::indexAction',  '_route' => 'message',);
                }

                // message_check_receiver
                if ($pathinfo === '/message/check/receiver') {
                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\MessageController::checkReceiverAction',  '_route' => 'message_check_receiver',);
                }

                if (0 === strpos($pathinfo, '/message/send')) {
                    // message_send
                    if (rtrim($pathinfo, '/') === '/message/send') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'message_send');
                        }

                        return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\MessageController::sendAction',  '_route' => 'message_send',);
                    }

                    // message_send_to_receiver
                    if (preg_match('#^/message/send/(?P<receiverId>[^/]++)/to/receiver/?$#s', $pathinfo, $matches)) {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'message_send_to_receiver');
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'message_send_to_receiver')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\MessageController::sendToAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/message/conversation')) {
                    // message_conversation_show
                    if (preg_match('#^/message/conversation/(?P<conversationId>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'message_conversation_show')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\MessageController::showConversationAction',));
                    }

                    // message_conversation_delete
                    if (preg_match('#^/message/conversation/(?P<conversationId>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_message_conversation_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'message_conversation_delete')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\MessageController::deleteConversationAction',));
                    }
                    not_message_conversation_delete:

                    // message_delete
                    if (preg_match('#^/message/conversation/(?P<conversationId>[^/]++)/message/(?P<messageId>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_message_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'message_delete')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\MessageController::deleteConversationMessageAction',));
                    }
                    not_message_delete:

                }

            }

        }

        if (0 === strpos($pathinfo, '/carticle')) {
            // content_article_show
            if (preg_match('#^/carticle/(?P<alias>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'content_article_show')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\ContentController::articleShowAction',));
            }

            // content_article_list
            if ($pathinfo === '/carticle') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\ContentController::articleListAction',  '_route' => 'content_article_list',);
            }

        }

        if (0 === strpos($pathinfo, '/activity')) {
            // content_activity_show
            if (preg_match('#^/activity/(?P<alias>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'content_activity_show')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\ContentController::activityShowAction',));
            }

            // content_activity_list
            if ($pathinfo === '/activity') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\ContentController::activityListAction',  '_route' => 'content_activity_list',);
            }

        }

        if (0 === strpos($pathinfo, '/page')) {
            // content_page_show
            if (preg_match('#^/page/(?P<alias>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'content_page_show')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\ContentController::pageShowAction',));
            }

            // content_page_list
            if ($pathinfo === '/page') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\ContentController::pageListAction',  '_route' => 'content_page_list',);
            }

        }

        // teacher
        if ($pathinfo === '/teacher') {
            return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\TeacherController::indexAction',  '_route' => 'teacher',);
        }

        if (0 === strpos($pathinfo, '/partner')) {
            if (0 === strpos($pathinfo, '/partner/log')) {
                // partner_login
                if ($pathinfo === '/partner/login') {
                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\PartnerController::loginAction',  '_route' => 'partner_login',);
                }

                // partner_logout
                if ($pathinfo === '/partner/logout') {
                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\PartnerController::logoutAction',  '_route' => 'partner_logout',);
                }

            }

            // partner_discuz_notify
            if ($pathinfo === '/partner/discuz/api/notify') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\PartnerDiscuzController::notifyAction',  '_route' => 'partner_discuz_notify',);
            }

            // partner_phpwind_notify
            if ($pathinfo === '/partner/phpwind/api/notify') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\PartnerPhpwindController::notifyAction',  '_route' => 'partner_phpwind_notify',);
            }

        }

        if (0 === strpos($pathinfo, '/cloud')) {
            // cloud_set_server
            if ($pathinfo === '/cloud/set-server') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CloudController::setServerAction',  '_route' => 'cloud_set_server',);
            }

            // cloud_oldkeys
            if ($pathinfo === '/cloud/oldkeys') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CloudController::oldkeysAction',  '_route' => 'cloud_oldkeys',);
            }

            // cloud_reconvert_old_file
            if ($pathinfo === '/cloud/reconvert_old_file') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CloudController::reconvertOldFileAction',  '_route' => 'cloud_reconvert_old_file',);
            }

            // cloud_video_fingerprint
            if ($pathinfo === '/cloud/video_fingerprint') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\CloudController::videoFingerprintAction',  '_route' => 'cloud_video_fingerprint',);
            }

        }

        if (0 === strpos($pathinfo, '/s')) {
            // systeminfo
            if ($pathinfo === '/systeminfo') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\SysteminfoController::indexAction',  '_route' => 'systeminfo',);
            }

            // setting_approval_submit
            if ($pathinfo === '/settings/approval/submit') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\SettingsController::approvalSubmitAction',  '_route' => 'setting_approval_submit',);
            }

        }

        if (0 === strpos($pathinfo, '/article')) {
            // article_show
            if ($pathinfo === '/article') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\ArticleController::indexAction',  '_route' => 'article_show',);
            }

            // article_detail
            if (preg_match('#^/article/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_detail')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\ArticleController::detailAction',));
            }

            // article_category
            if (0 === strpos($pathinfo, '/article/category') && preg_match('#^/article/category/(?P<categoryCode>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_category')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\ArticleController::categoryAction',));
            }

        }

        if (0 === strpos($pathinfo, '/mobile')) {
            // mobile
            if (rtrim($pathinfo, '/') === '/mobile') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'mobile');
                }

                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\MobileController::indexAction',  '_route' => 'mobile',);
            }

            if (0 === strpos($pathinfo, '/mobile/download')) {
                // mobile_download_qrcode
                if ($pathinfo === '/mobile/downloadQrcode') {
                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\MobileController::downloadQrcodeAction',  '_route' => 'mobile_download_qrcode',);
                }

                // mobile_download
                if ($pathinfo === '/mobile/download') {
                    return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\MobileController::downloadAction',  '_route' => 'mobile_download',);
                }

            }

        }

        // test
        if (rtrim($pathinfo, '/') === '/test') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'test');
            }

            return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\TestController::indexAction',  '_route' => 'test',);
        }

        if (0 === strpos($pathinfo, '/group')) {
            // group
            if ($pathinfo === '/group') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\GroupController::indexAction',  '_route' => 'group',);
            }

            // group_search_group
            if ($pathinfo === '/group/search_group') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\GroupController::searchAction',  '_route' => 'group_search_group',);
            }

            // group_add
            if ($pathinfo === '/group/add') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\GroupController::addGroupAction',  '_route' => 'group_add',);
            }

        }

        if (0 === strpos($pathinfo, '/my/group')) {
            // group_member_center
            if ($pathinfo === '/my/group') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\GroupController::memberCenterAction',  '_route' => 'group_member_center',);
            }

            // group_member_join
            if ($pathinfo === '/my/group/join') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\GroupController::memberJoinAction',  '_route' => 'group_member_join',);
            }

            // group_member_threads
            if ($pathinfo === '/my/group/threads') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\GroupController::memberThreadsAction',  '_route' => 'group_member_threads',);
            }

            // group_member_posts
            if ($pathinfo === '/my/group/posts') {
                return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\GroupController::memberPostsAction',  '_route' => 'group_member_posts',);
            }

        }

        if (0 === strpos($pathinfo, '/group')) {
            // group_show
            if (preg_match('#^/group/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'group_show')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\GroupController::groupIndexAction',));
            }

            // group_join
            if (preg_match('#^/group/(?P<id>[^/]++)/join$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'group_join')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\GroupController::groupJoinAction',));
            }

            // group_exit
            if (preg_match('#^/group/(?P<id>[^/]++)/exit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'group_exit')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\GroupController::groupExitAction',));
            }

            if (0 === strpos($pathinfo, '/group/member')) {
                // group_member
                if (preg_match('#^/group/member/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'group_member')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\GroupController::groupMemberAction',));
                }

                // group_member_delete
                if (0 === strpos($pathinfo, '/group/member/delete') && preg_match('#^/group/member/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'group_member_delete')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\GroupController::deleteMembersAction',));
                }

            }

            // group_set_admin
            if (0 === strpos($pathinfo, '/group/set/admin') && preg_match('#^/group/set/admin/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'group_set_admin')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\GroupController::setAdminAction',));
            }

            // group_remove_admin
            if (0 === strpos($pathinfo, '/group/remove/admin') && preg_match('#^/group/remove/admin/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'group_remove_admin')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\GroupController::removeAdminAction',));
            }

            // group_set
            if (preg_match('#^/group/(?P<id>[^/]++)/setting/info$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'group_set')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\GroupController::groupSetAction',));
            }

            // group_transfer
            if (0 === strpos($pathinfo, '/group/transferGroup') && preg_match('#^/group/transferGroup/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'group_transfer')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\GroupController::transferGroupAction',));
            }

            // group_setLogoCrop
            if (0 === strpos($pathinfo, '/group/setting/logoCrop') && preg_match('#^/group/setting/logoCrop/(?P<file>[^/]++)/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'group_setLogoCrop')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\GroupController::groupSetLogoCropAction',));
            }

            // group_logo_set
            if (preg_match('#^/group/(?P<id>[^/]++)/setting/logo$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'group_logo_set')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\GroupController::setGrouplogoAction',));
            }

            // group_logo_crop_set
            if (0 === strpos($pathinfo, '/group/set/logo/crop') && preg_match('#^/group/set/logo/crop/(?P<file>[^/]++)/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'group_logo_crop_set')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\GroupController::setGrouplogo_cropAction',));
            }

            // group_edit
            if (0 === strpos($pathinfo, '/group/info/edit') && preg_match('#^/group/info/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'group_edit')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\GroupController::groupEditAction',));
            }

            // group_backgroundlogo_set
            if (0 === strpos($pathinfo, '/group/set/backgroundlogo') && preg_match('#^/group/set/backgroundlogo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'group_backgroundlogo_set')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\GroupController::setGroupBackgroundLogoAction',));
            }

            // group_search
            if (preg_match('#^/group/(?P<id>[^/]++)/serach$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'group_search')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\GroupThreadController::searchResultAction',));
            }

            // group_thread_post
            if (0 === strpos($pathinfo, '/group/thread') && preg_match('#^/group/thread/(?P<groupId>[^/]++)/(?P<threadId>[^/]++)/post$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'group_thread_post')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\GroupThreadController::postThreadAction',));
            }

            // group_thread_add
            if (preg_match('#^/group/(?P<id>[^/]++)/thread/create$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'group_thread_add')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\GroupThreadController::addThreadAction',));
            }

            // group_thread_update
            if (preg_match('#^/group/(?P<id>[^/]++)/thread/(?P<threadId>[^/]++)/update$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'group_thread_update')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\GroupThreadController::updateThreadAction',));
            }

        }

        // group_thread_check_user
        if ($pathinfo === '/mygroup/checkuser') {
            return array (  '_controller' => 'Topxia\\WebBundle\\Controller\\GroupThreadController::checkUserAction',  '_route' => 'group_thread_check_user',);
        }

        if (0 === strpos($pathinfo, '/group')) {
            // group_thread_show
            if (preg_match('#^/group/(?P<id>[^/]++)/thread/(?P<threadId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'group_thread_show')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\GroupThreadController::groupThreadIndexAction',));
            }

            if (0 === strpos($pathinfo, '/group/thread')) {
                // group_thread_setElite
                if (preg_match('#^/group/thread/(?P<threadId>[^/]++)/setElite$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'group_thread_setElite')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\GroupThreadController::setEliteAction',));
                }

                // group_thread_removeElite
                if (preg_match('#^/group/thread/(?P<threadId>[^/]++)/removeElite$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'group_thread_removeElite')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\GroupThreadController::removeEliteAction',));
                }

                // group_thread_setStick
                if (preg_match('#^/group/thread/(?P<threadId>[^/]++)/setStick$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'group_thread_setStick')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\GroupThreadController::setStickAction',));
                }

                // group_thread_removeStick
                if (preg_match('#^/group/thread/(?P<threadId>[^/]++)/removeStick$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'group_thread_removeStick')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\GroupThreadController::removeStickAction',));
                }

                // group_thread_closeThread
                if (preg_match('#^/group/thread/(?P<threadId>[^/]++)/closeThread/(?P<memberId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'group_thread_closeThread')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\GroupThreadController::closeThreadAction',));
                }

                // group_thread_deletePost
                if (0 === strpos($pathinfo, '/group/thread/deletePost') && preg_match('#^/group/thread/deletePost/(?P<postId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'group_thread_deletePost')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\GroupThreadController::deletePostAction',));
                }

            }

            // group_thread_post_reply
            if (0 === strpos($pathinfo, '/group/post') && preg_match('#^/group/post/(?P<postId>[^/]++)/reply$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'group_thread_post_reply')), array (  '_controller' => 'Topxia\\WebBundle\\Controller\\GroupThreadController::postReplyAction',));
            }

        }

        if (0 === strpos($pathinfo, '/vip')) {
            // vip
            if (rtrim($pathinfo, '/') === '/vip') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'vip');
                }

                return array('_route' => 'vip');
            }

            // vip_buy
            if ($pathinfo === '/vip/buy') {
                return array('_route' => 'vip_buy');
            }

            // vip_renew
            if ($pathinfo === '/vip/renew') {
                return array('_route' => 'vip_renew');
            }

            // vip_upgrade
            if ($pathinfo === '/vip/upgrade') {
                return array('_route' => 'vip_upgrade');
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // admin
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin');
                }

                return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\DefaultController::indexAction',  '_route' => 'admin',);
            }

            // admin_popular_courses
            if ($pathinfo === '/admin/popular_courses') {
                return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\DefaultController::popularCoursesAction',  '_route' => 'admin_popular_courses',);
            }

            // admin_question_remind_teachers
            if (0 === strpos($pathinfo, '/admin/course') && preg_match('#^/admin/course/(?P<courseId>[^/]++)/question/(?P<questionId>[^/]++)/remindTeachers$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_admin_question_remind_teachers;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_question_remind_teachers')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\DefaultController::questionRemindTeachersAction',));
            }
            not_admin_question_remind_teachers:

            if (0 === strpos($pathinfo, '/admin/o')) {
                // admin_operation_analysis
                if ($pathinfo === '/admin/operation/analysis') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\DefaultController::operationAnalysisDashbordBlockAction',  '_route' => 'admin_operation_analysis',);
                }

                // admin_online_count
                if ($pathinfo === '/admin/online/count') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\DefaultController::onlineCountAction',  '_route' => 'admin_online_count',);
                }

            }

            // admin_login_count
            if ($pathinfo === '/admin/login/count') {
                return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\DefaultController::loginCountAction',  '_route' => 'admin_login_count',);
            }

            // admin_dashboard
            if ($pathinfo === '/admin/dashboard') {
                return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\DefaultController::dashboardAction',  '_route' => 'admin_dashboard',);
            }

            if (0 === strpos($pathinfo, '/admin/content')) {
                // admin_content
                if ($pathinfo === '/admin/content') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\ContentController::indexAction',  '_route' => 'admin_content',);
                }

                // admin_content_create
                if (0 === strpos($pathinfo, '/admin/content/create') && preg_match('#^/admin/content/create/(?P<type>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_content_create')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\ContentController::createAction',));
                }

                // admin_content_edit
                if (preg_match('#^/admin/content/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_content_edit')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\ContentController::editAction',));
                }

                // admin_content_publish
                if (preg_match('#^/admin/content/(?P<id>[^/]++)/publish$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_content_publish;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_content_publish')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\ContentController::publishAction',));
                }
                not_admin_content_publish:

                // admin_content_trash
                if (preg_match('#^/admin/content/(?P<id>[^/]++)/trash$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_content_trash;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_content_trash')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\ContentController::trashAction',));
                }
                not_admin_content_trash:

                // admin_content_delete
                if (preg_match('#^/admin/content/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_content_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_content_delete')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\ContentController::deleteAction',));
                }
                not_admin_content_delete:

                // admin_content_alias_check
                if ($pathinfo === '/admin/content/alias/check') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\ContentController::aliasCheckAction',  '_route' => 'admin_content_alias_check',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/block')) {
                // admin_block
                if ($pathinfo === '/admin/block') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\BlockController::indexAction',  '_route' => 'admin_block',);
                }

                // admin_block_create
                if ($pathinfo === '/admin/block/create') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\BlockController::createAction',  '_route' => 'admin_block_create',);
                }

                // admin_block_delete
                if (preg_match('#^/admin/block/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_block_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_block_delete')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\BlockController::deleteAction',));
                }
                not_admin_block_delete:

                if (0 === strpos($pathinfo, '/admin/block/code')) {
                    // admin_block_code_check_forcreate
                    if ($pathinfo === '/admin/block/code/check/forcreate') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\BlockController::checkBlockCodeForCreateAction',  '_route' => 'admin_block_code_check_forcreate',);
                    }

                    // admin_block_code_check_foredit
                    if (preg_match('#^/admin/block/code/(?P<id>[^/]++)/check/foredit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_block_code_check_foredit')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\BlockController::checkBlockCodeForEditAction',));
                    }

                }

                // admin_block_update
                if (preg_match('#^/admin/block/(?P<block>[^/]++)/update$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_block_update')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\BlockController::updateAction',));
                }

                // admin_block_edit
                if (preg_match('#^/admin/block/(?P<block>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_block_edit')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\BlockController::editAction',));
                }

                // admin_blockhistory_preview
                if (0 === strpos($pathinfo, '/admin/blockhistory') && preg_match('#^/admin/blockhistory/(?P<id>[^/]++)/preview$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_blockhistory_preview')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\BlockController::previewAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/tag')) {
                // admin_tag
                if ($pathinfo === '/admin/tag') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\TagController::indexAction',  '_route' => 'admin_tag',);
                }

                if (0 === strpos($pathinfo, '/admin/tag/c')) {
                    // admin_tag_create
                    if ($pathinfo === '/admin/tag/create') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\TagController::createAction',  '_route' => 'admin_tag_create',);
                    }

                    // admin_tag_checkname
                    if ($pathinfo === '/admin/tag/checkname') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\TagController::checkNameAction',  '_route' => 'admin_tag_checkname',);
                    }

                }

                // admin_tag_update
                if (preg_match('#^/admin/tag/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_tag_update')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\TagController::updateAction',));
                }

                // admin_tag_delete
                if (preg_match('#^/admin/tag/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_tag_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_tag_delete')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\TagController::deleteAction',));
                }
                not_admin_tag_delete:

            }

            if (0 === strpos($pathinfo, '/admin/user')) {
                // admin_user
                if ($pathinfo === '/admin/user') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\UserController::indexAction',  '_route' => 'admin_user',);
                }

                if (0 === strpos($pathinfo, '/admin/user/create')) {
                    // admin_user_create
                    if ($pathinfo === '/admin/user/create') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\UserController::createAction',  '_route' => 'admin_user_create',);
                    }

                    // admin_user_create_email_check
                    if ($pathinfo === '/admin/user/create/email/check') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\UserController::emailCheckAction',  '_route' => 'admin_user_create_email_check',);
                    }

                    // admin_user_create_nickname_check
                    if ($pathinfo === '/admin/user/create/nickname/check') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\UserController::nicknameCheckAction',  '_route' => 'admin_user_create_nickname_check',);
                    }

                }

                // admin_user_show
                if (preg_match('#^/admin/user/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_show')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\UserController::showAction',));
                }

                // admin_user_edit
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_edit')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\UserController::editAction',));
                }

                // admin_user_lock
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/lock$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_user_lock;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_lock')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\UserController::lockAction',));
                }
                not_admin_user_lock:

                // admin_user_unlock
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/unlock$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_user_unlock;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_unlock')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\UserController::unlockAction',));
                }
                not_admin_user_unlock:

                // admin_user_roles
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/roles$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_roles')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\UserController::rolesAction',));
                }

                // admin_user_avatar
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/avatar$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_avatar')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\UserController::avatarAction',));
                }

                // admin_user_avatar_crop
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/avatar/crop$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_avatar_crop')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\UserController::avatarCropAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/teacher')) {
                // admin_teacher
                if ($pathinfo === '/admin/teacher') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\TeacherController::indexAction',  '_route' => 'admin_teacher',);
                }

                // admin_teacher_promote
                if (preg_match('#^/admin/teacher/(?P<id>[^/]++)/promote$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_teacher_promote;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_teacher_promote')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\TeacherController::promoteAction',));
                }
                not_admin_teacher_promote:

                // admin_teacher_promote_cancel
                if (preg_match('#^/admin/teacher/(?P<id>[^/]++)/promote/cancel$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_teacher_promote_cancel;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_teacher_promote_cancel')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\TeacherController::promoteCancelAction',));
                }
                not_admin_teacher_promote_cancel:

            }

            if (0 === strpos($pathinfo, '/admin/user')) {
                // admin_user_change_password
                if (preg_match('#^/admin/user/(?P<userId>[^/]++)/change/password$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_change_password')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\UserController::changePasswordAction',));
                }

                // admin_user_send_passwordreset_email
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/send_passwordreset_email$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_user_send_passwordreset_email;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_send_passwordreset_email')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\UserController::sendPasswordResetEmailAction',));
                }
                not_admin_user_send_passwordreset_email:

                // admin_user_send_emailverify_email
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/send_emailverify_email$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_user_send_emailverify_email;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_send_emailverify_email')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\UserController::sendEmailVerifyEmailAction',));
                }
                not_admin_user_send_emailverify_email:

            }

            if (0 === strpos($pathinfo, '/admin/comment')) {
                // admin_comment
                if ($pathinfo === '/admin/comment') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CommentController::indexAction',  '_route' => 'admin_comment',);
                }

                // admin_comment_delete
                if (preg_match('#^/admin/comment/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_comment_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_comment_delete')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CommentController::deleteAction',));
                }
                not_admin_comment_delete:

            }

            // admin_statistic
            if ($pathinfo === '/admin/statistic') {
                return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\StatisticController::indexAction',  '_route' => 'admin_statistic',);
            }

            if (0 === strpos($pathinfo, '/admin/navigation')) {
                // admin_navigation
                if ($pathinfo === '/admin/navigation') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\NavigationController::indexAction',  '_route' => 'admin_navigation',);
                }

                // admin_navigation_create
                if ($pathinfo === '/admin/navigation/create') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\NavigationController::createAction',  '_route' => 'admin_navigation_create',);
                }

                // admin_navigation_update
                if (preg_match('#^/admin/navigation/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_navigation_update')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\NavigationController::updateAction',));
                }

                // admin_navigation_delete
                if (preg_match('#^/admin/navigation/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_navigation_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_navigation_delete')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\NavigationController::deleteAction',));
                }
                not_admin_navigation_delete:

            }

            if (0 === strpos($pathinfo, '/admin/review')) {
                // admin_review
                if ($pathinfo === '/admin/review') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\ReviewController::indexAction',  '_route' => 'admin_review',);
                }

                // admin_review_delete
                if (preg_match('#^/admin/review/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_review_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_review_delete')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\ReviewController::deleteAction',));
                }
                not_admin_review_delete:

                // admin_review_batch_delete
                if ($pathinfo === '/admin/review/batch_delete') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_review_batch_delete;
                    }

                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\ReviewController::batchDeleteAction',  '_route' => 'admin_review_batch_delete',);
                }
                not_admin_review_batch_delete:

            }

            if (0 === strpos($pathinfo, '/admin/note')) {
                // admin_note
                if ($pathinfo === '/admin/note') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CourseNoteController::indexAction',  '_route' => 'admin_note',);
                }

                // admin_note_delete
                if (preg_match('#^/admin/note/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_note_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_note_delete')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CourseNoteController::deleteAction',));
                }
                not_admin_note_delete:

                // admin_note_batch_delete
                if ($pathinfo === '/admin/note/batch_delete') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_note_batch_delete;
                    }

                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CourseNoteController::batchDeleteAction',  '_route' => 'admin_note_batch_delete',);
                }
                not_admin_note_batch_delete:

            }

            if (0 === strpos($pathinfo, '/admin/course')) {
                // admin_course
                if ($pathinfo === '/admin/course') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CourseController::indexAction',  '_route' => 'admin_course',);
                }

                // admin_course_delete
                if (preg_match('#^/admin/course/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_course_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_course_delete')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CourseController::deleteAction',));
                }
                not_admin_course_delete:

                // admin_course_publish
                if (preg_match('#^/admin/course/(?P<id>[^/]++)/publish$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_course_publish;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_course_publish')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CourseController::publishAction',));
                }
                not_admin_course_publish:

                // admin_course_close
                if (preg_match('#^/admin/course/(?P<id>[^/]++)/close$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_course_close;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_course_close')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CourseController::closeAction',));
                }
                not_admin_course_close:

                // admin_course_recommend
                if (preg_match('#^/admin/course/(?P<id>[^/]++)/recommend$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_course_recommend')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CourseController::recommendAction',));
                }

                // admin_course_cancel_recommend
                if (preg_match('#^/admin/course/(?P<id>[^/]++)/recommend/cancel$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_course_cancel_recommend;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_course_cancel_recommend')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CourseController::cancelRecommendAction',));
                }
                not_admin_course_cancel_recommend:

                // admin_course_chooser
                if ($pathinfo === '/admin/course/chooser') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CourseController::chooserAction',  '_route' => 'admin_course_chooser',);
                }

                // admin_course_recommend_list
                if ($pathinfo === '/admin/course/recommend/list') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CourseController::recommendListAction',  '_route' => 'admin_course_recommend_list',);
                }

                // admin_course_category
                if ($pathinfo === '/admin/course/category') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CourseController::categoryAction',  '_route' => 'admin_course_category',);
                }

                // admin_course_data
                if ($pathinfo === '/admin/course/data') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CourseController::dataAction',  '_route' => 'admin_course_data',);
                }

                // admin_course_lesson_data
                if (0 === strpos($pathinfo, '/admin/course/lesson/data') && preg_match('#^/admin/course/lesson/data/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_course_lesson_data')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CourseController::lessonDataAction',));
                }

                // admin_course_disk
                if ($pathinfo === '/admin/course/disk') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CourseDiskController::indexAction',  '_route' => 'admin_course_disk',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/disk')) {
                // admin_course_disk_delete
                if (preg_match('#^/admin/disk/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_course_disk_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_course_disk_delete')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CourseDiskController::deleteAction',));
                }
                not_admin_course_disk_delete:

                // admin_course_disk_batch_delete
                if ($pathinfo === '/admin/disk/batch_delete') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_course_disk_batch_delete;
                    }

                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CourseDiskController::batchDeleteAction',  '_route' => 'admin_course_disk_batch_delete',);
                }
                not_admin_course_disk_batch_delete:

            }

            if (0 === strpos($pathinfo, '/admin/course')) {
                // admin_course_order_manage
                if ($pathinfo === '/admin/course/order/manage') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CourseOrderController::manageAction',  '_route' => 'admin_course_order_manage',);
                }

                // admin_course_search
                if ($pathinfo === '/admin/course/search') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CourseController::searchAction',  '_route' => 'admin_course_search',);
                }

            }

            // admin_live_course
            if (0 === strpos($pathinfo, '/admin/livecourse') && preg_match('#^/admin/livecourse/(?P<status>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_live_course')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\LiveCourseController::indexAction',));
            }

            if (0 === strpos($pathinfo, '/admin/order')) {
                // admin_order
                if ($pathinfo === '/admin/order') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\OrderController::indexAction',  '_route' => 'admin_order',);
                }

                // admin_order_detail
                if (preg_match('#^/admin/order/(?P<id>[^/]++)/detail$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_order_detail')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\OrderController::detailAction',));
                }

                // admin_order_refunds
                if ($pathinfo === '/admin/order/refunds') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CourseOrderController::refundsAction',  '_route' => 'admin_order_refunds',);
                }

                // admin_order_cancel_refund
                if (preg_match('#^/admin/order/(?P<id>[^/]++)/cancel_refund$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_order_cancel_refund;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_order_cancel_refund')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CourseOrderController::cancelRefundAction',));
                }
                not_admin_order_cancel_refund:

                // admin_order_audit_refund
                if (preg_match('#^/admin/order/(?P<id>[^/]++)/audit_refund$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_order_audit_refund')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CourseOrderController::auditRefundAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/setting')) {
                // admin_setting_site
                if ($pathinfo === '/admin/setting/site') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\SettingController::siteAction',  '_route' => 'admin_setting_site',);
                }

                if (0 === strpos($pathinfo, '/admin/setting/mobile')) {
                    // admin_setting_mobile
                    if ($pathinfo === '/admin/setting/mobile') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\SettingController::mobileAction',  '_route' => 'admin_setting_mobile',);
                    }

                    if (0 === strpos($pathinfo, '/admin/setting/mobile/picture')) {
                        // admin_setting_mobile_picture_upload
                        if (0 === strpos($pathinfo, '/admin/setting/mobile/picture/upload') && preg_match('#^/admin/setting/mobile/picture/upload/(?P<type>[^/]++)$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_admin_setting_mobile_picture_upload;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_setting_mobile_picture_upload')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\SettingController::mobilePictureUploadAction',));
                        }
                        not_admin_setting_mobile_picture_upload:

                        // admin_setting_mobile_picture_remove
                        if (0 === strpos($pathinfo, '/admin/setting/mobile/picture/remove') && preg_match('#^/admin/setting/mobile/picture/remove/(?P<type>[^/]++)$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_admin_setting_mobile_picture_remove;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_setting_mobile_picture_remove')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\SettingController::mobilePictureRemoveAction',));
                        }
                        not_admin_setting_mobile_picture_remove:

                    }

                }

                if (0 === strpos($pathinfo, '/admin/setting/logo')) {
                    // admin_setting_logo_upload
                    if ($pathinfo === '/admin/setting/logo/upload') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_setting_logo_upload;
                        }

                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\SettingController::logoUploadAction',  '_route' => 'admin_setting_logo_upload',);
                    }
                    not_admin_setting_logo_upload:

                    // admin_setting_logo_remove
                    if ($pathinfo === '/admin/setting/logo/remove') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_setting_logo_remove;
                        }

                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\SettingController::logoRemoveAction',  '_route' => 'admin_setting_logo_remove',);
                    }
                    not_admin_setting_logo_remove:

                }

                if (0 === strpos($pathinfo, '/admin/setting/favicon')) {
                    // admin_setting_favicon_upload
                    if ($pathinfo === '/admin/setting/favicon/upload') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_setting_favicon_upload;
                        }

                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\SettingController::faviconUploadAction',  '_route' => 'admin_setting_favicon_upload',);
                    }
                    not_admin_setting_favicon_upload:

                    // admin_setting_favicon_remove
                    if ($pathinfo === '/admin/setting/favicon/remove') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_setting_favicon_remove;
                        }

                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\SettingController::faviconRemoveAction',  '_route' => 'admin_setting_favicon_remove',);
                    }
                    not_admin_setting_favicon_remove:

                }

                // admin_setting_auth
                if ($pathinfo === '/admin/setting/auth') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\SettingController::authAction',  '_route' => 'admin_setting_auth',);
                }

                // admin_setting_mailer
                if ($pathinfo === '/admin/setting/mailer') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\SettingController::mailerAction',  '_route' => 'admin_setting_mailer',);
                }

                // admin_setting_login_bind
                if ($pathinfo === '/admin/setting/login-connect') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\SettingController::loginConnectAction',  '_route' => 'admin_setting_login_bind',);
                }

                // admin_setting_payment
                if ($pathinfo === '/admin/setting/payment') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\SettingController::paymentAction',  '_route' => 'admin_setting_payment',);
                }

                if (0 === strpos($pathinfo, '/admin/setting/cloud')) {
                    // admin_setting_cloud_video
                    if ($pathinfo === '/admin/setting/cloud/video') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CloudSettingController::videoAction',  '_route' => 'admin_setting_cloud_video',);
                    }

                    // admin_setting_cloud
                    if ($pathinfo === '/admin/setting/cloud') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CloudSettingController::keyAction',  '_route' => 'admin_setting_cloud',);
                    }

                    if (0 === strpos($pathinfo, '/admin/setting/cloud/key')) {
                        // admin_setting_cloud_key
                        if ($pathinfo === '/admin/setting/cloud/key') {
                            return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CloudSettingController::keyAction',  '_route' => 'admin_setting_cloud_key',);
                        }

                        // admin_setting_cloud_key_info
                        if ($pathinfo === '/admin/setting/cloud/key/info') {
                            return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CloudSettingController::keyInfoAction',  '_route' => 'admin_setting_cloud_key_info',);
                        }

                        // admin_setting_cloud_key_bind
                        if ($pathinfo === '/admin/setting/cloud/key/bind') {
                            return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CloudSettingController::keyBindAction',  '_route' => 'admin_setting_cloud_key_bind',);
                        }

                        // admin_setting_cloud_key_update
                        if ($pathinfo === '/admin/setting/cloud/key/update') {
                            return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CloudSettingController::keyUpdateAction',  '_route' => 'admin_setting_cloud_key_update',);
                        }

                        // admin_setting_cloud_key_apply
                        if ($pathinfo === '/admin/setting/cloud/key/apply') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_admin_setting_cloud_key_apply;
                            }

                            return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CloudSettingController::keyApplyAction',  '_route' => 'admin_setting_cloud_key_apply',);
                        }
                        not_admin_setting_cloud_key_apply:

                        // admin_setting_cloud_key_copyright
                        if ($pathinfo === '/admin/setting/cloud/key/copyright') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_admin_setting_cloud_key_copyright;
                            }

                            return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CloudSettingController::keyCopyrightAction',  '_route' => 'admin_setting_cloud_key_copyright',);
                        }
                        not_admin_setting_cloud_key_copyright:

                    }

                    if (0 === strpos($pathinfo, '/admin/setting/cloud/video_')) {
                        if (0 === strpos($pathinfo, '/admin/setting/cloud/video_watermark')) {
                            // admin_setting_cloud_video_watermark_upload
                            if ($pathinfo === '/admin/setting/cloud/video_watermark/upload') {
                                if ($this->context->getMethod() != 'POST') {
                                    $allow[] = 'POST';
                                    goto not_admin_setting_cloud_video_watermark_upload;
                                }

                                return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CloudSettingController::videoWatermarkUploadAction',  '_route' => 'admin_setting_cloud_video_watermark_upload',);
                            }
                            not_admin_setting_cloud_video_watermark_upload:

                            // admin_setting_cloud_video_watermark_remove
                            if ($pathinfo === '/admin/setting/cloud/video_watermark/remove') {
                                if ($this->context->getMethod() != 'POST') {
                                    $allow[] = 'POST';
                                    goto not_admin_setting_cloud_video_watermark_remove;
                                }

                                return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CloudSettingController::videoWatermarkRemoveAction',  '_route' => 'admin_setting_cloud_video_watermark_remove',);
                            }
                            not_admin_setting_cloud_video_watermark_remove:

                        }

                        if (0 === strpos($pathinfo, '/admin/setting/cloud/video_embed_watermark')) {
                            // admin_setting_cloud_video_embed_watermark_upload
                            if ($pathinfo === '/admin/setting/cloud/video_embed_watermark/upload') {
                                if ($this->context->getMethod() != 'POST') {
                                    $allow[] = 'POST';
                                    goto not_admin_setting_cloud_video_embed_watermark_upload;
                                }

                                return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CloudSettingController::videoEmbedWatermarkUploadAction',  '_route' => 'admin_setting_cloud_video_embed_watermark_upload',);
                            }
                            not_admin_setting_cloud_video_embed_watermark_upload:

                            // admin_setting_cloud_video_embed_watermark_remove
                            if ($pathinfo === '/admin/setting/cloud/video_embed_watermark/remove') {
                                if ($this->context->getMethod() != 'POST') {
                                    $allow[] = 'POST';
                                    goto not_admin_setting_cloud_video_embed_watermark_remove;
                                }

                                return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CloudSettingController::videoWatermarkRemoveAction',  '_route' => 'admin_setting_cloud_video_embed_watermark_remove',);
                            }
                            not_admin_setting_cloud_video_embed_watermark_remove:

                        }

                    }

                }

                // admin_setting_refund
                if ($pathinfo === '/admin/setting/refund') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\SettingController::refundAction',  '_route' => 'admin_setting_refund',);
                }

                // admin_setting_default
                if ($pathinfo === '/admin/setting/default') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\SettingController::defaultAction',  '_route' => 'admin_setting_default',);
                }

                // admin_setting_share
                if ($pathinfo === '/admin/setting/share') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\SettingController::shareAction',  '_route' => 'admin_setting_share',);
                }

                if (0 === strpos($pathinfo, '/admin/setting/default')) {
                    if (0 === strpos($pathinfo, '/admin/setting/default/avatar')) {
                        // admin_setting_default_avatar
                        if ($pathinfo === '/admin/setting/default/avatar') {
                            return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\SystemDefaultSettingController::defaultAvatarAction',  '_route' => 'admin_setting_default_avatar',);
                        }

                        // admin_setting_default_avatar_crop
                        if ($pathinfo === '/admin/setting/default/avatar/crop') {
                            return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\SystemDefaultSettingController::defaultAvatarCropAction',  '_route' => 'admin_setting_default_avatar_crop',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/setting/default/course/picture')) {
                        // admin_setting_default_course_picture
                        if ($pathinfo === '/admin/setting/default/course/picture') {
                            return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\SystemDefaultSettingController::defaultCoursePictureAction',  '_route' => 'admin_setting_default_course_picture',);
                        }

                        // admin_setting_default_course_picture_crop
                        if ($pathinfo === '/admin/setting/default/course/picture/crop') {
                            return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\SystemDefaultSettingController::defaultCoursePictureCropAction',  '_route' => 'admin_setting_default_course_picture_crop',);
                        }

                    }

                }

                // admin_setting_ip_blacklist
                if ($pathinfo === '/admin/setting/ip-blacklist') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\SettingController::ipBlacklistAction',  '_route' => 'admin_setting_ip_blacklist',);
                }

                if (0 === strpos($pathinfo, '/admin/setting/theme')) {
                    // admin_setting_theme
                    if ($pathinfo === '/admin/setting/theme') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\ThemeController::indexAction',  '_route' => 'admin_setting_theme',);
                    }

                    // admin_setting_theme_change
                    if ($pathinfo === '/admin/setting/theme/change') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_setting_theme_change;
                        }

                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\ThemeController::changeAction',  '_route' => 'admin_setting_theme_change',);
                    }
                    not_admin_setting_theme_change:

                }

                if (0 === strpos($pathinfo, '/admin/setting/user-')) {
                    // admin_setting_user_center
                    if ($pathinfo === '/admin/setting/user-center') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\SettingController::userCenterAction',  '_route' => 'admin_setting_user_center',);
                    }

                    // admin_setting_user_fields
                    if ($pathinfo === '/admin/setting/user-fields') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\SettingController::userFieldsAction',  '_route' => 'admin_setting_user_fields',);
                    }

                }

                // admin_setting_course_setting
                if ($pathinfo === '/admin/setting/course-setting') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\SettingController::courseSettingAction',  '_route' => 'admin_setting_course_setting',);
                }

                // admin_setting_questions_setting
                if ($pathinfo === '/admin/setting/questions-setting') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\SettingController::questionsSettingAction',  '_route' => 'admin_setting_questions_setting',);
                }

                if (0 === strpos($pathinfo, '/admin/setting/consult-')) {
                    // admin_setting_consult_setting
                    if ($pathinfo === '/admin/setting/consult-setting') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\SettingController::consultSettingAction',  '_route' => 'admin_setting_consult_setting',);
                    }

                    // admin_setting_consult_upload
                    if ($pathinfo === '/admin/setting/consult-upload') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\SettingController::consultUploadAction',  '_route' => 'admin_setting_consult_upload',);
                    }

                }

                // admin_setting_admin_sync
                if ($pathinfo === '/admin/setting/admin_sync') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\SettingController::adminSyncAction',  '_route' => 'admin_setting_admin_sync',);
                }

                if (0 === strpos($pathinfo, '/admin/setting/developer')) {
                    // admin_setting_developer_change_version
                    if ($pathinfo === '/admin/setting/developer/modifyVersion') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\SettingController::modifyVersionAction',  '_route' => 'admin_setting_developer_change_version',);
                    }

                    // admin_setting_developer
                    if ($pathinfo === '/admin/setting/developer') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\SettingController::developerAction',  '_route' => 'admin_setting_developer',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin/optimize')) {
                // admin_optimize
                if ($pathinfo === '/admin/optimize') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\OptimizeController::indexAction',  '_route' => 'admin_optimize',);
                }

                if (0 === strpos($pathinfo, '/admin/optimize/remove-')) {
                    // admin_optimize_remove_cache
                    if ($pathinfo === '/admin/optimize/remove-cache') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_optimize_remove_cache;
                        }

                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\OptimizeController::removeCacheAction',  '_route' => 'admin_optimize_remove_cache',);
                    }
                    not_admin_optimize_remove_cache:

                    // admin_optimize_remove_tmp
                    if ($pathinfo === '/admin/optimize/remove-tmp') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_optimize_remove_tmp;
                        }

                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\OptimizeController::removeTempAction',  '_route' => 'admin_optimize_remove_tmp',);
                    }
                    not_admin_optimize_remove_tmp:

                    // admin_optimize_remove_backup
                    if ($pathinfo === '/admin/optimize/remove-backup') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_optimize_remove_backup;
                        }

                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\OptimizeController::removeBackupAction',  '_route' => 'admin_optimize_remove_backup',);
                    }
                    not_admin_optimize_remove_backup:

                }

                // admin_optimize_backupdb
                if ($pathinfo === '/admin/optimize/backupdb') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_optimize_backupdb;
                    }

                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\OptimizeController::backupdbAction',  '_route' => 'admin_optimize_backupdb',);
                }
                not_admin_optimize_backupdb:

                // admin_optimize_remove_upload_files
                if ($pathinfo === '/admin/optimize/remove-unusedfiles') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_optimize_remove_upload_files;
                    }

                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\OptimizeController::removeUnusedFilesAction',  '_route' => 'admin_optimize_remove_upload_files',);
                }
                not_admin_optimize_remove_upload_files:

            }

            // admin_logs
            if ($pathinfo === '/admin/logs') {
                return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\LogController::indexAction',  '_route' => 'admin_logs',);
            }

            if (0 === strpos($pathinfo, '/admin/c')) {
                // admin_cloud_bill
                if ($pathinfo === '/admin/cloud/bill') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CloudController::billAction',  '_route' => 'admin_cloud_bill',);
                }

                // admin_customer_service
                if ($pathinfo === '/admin/customer/service') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\SettingController::customerServiceAction',  '_route' => 'admin_customer_service',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/app')) {
                // admin_app_center
                if ($pathinfo === '/admin/app/center') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\AppController::centerAction',  '_route' => 'admin_app_center',);
                }

                // admin_app_installed
                if ($pathinfo === '/admin/app/installed') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\AppController::installedAction',  '_route' => 'admin_app_installed',);
                }

                if (0 === strpos($pathinfo, '/admin/app/u')) {
                    // admin_app_uninstall
                    if ($pathinfo === '/admin/app/uninstall') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\AppController::uninstallAction',  '_route' => 'admin_app_uninstall',);
                    }

                    if (0 === strpos($pathinfo, '/admin/app/upgrades')) {
                        // admin_app_upgrades
                        if ($pathinfo === '/admin/app/upgrades') {
                            return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\AppController::upgradesAction',  '_route' => 'admin_app_upgrades',);
                        }

                        // admin_app_upgrades_count
                        if ($pathinfo === '/admin/app/upgrades_count') {
                            return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\AppController::upgradesCountAction',  '_route' => 'admin_app_upgrades_count',);
                        }

                    }

                }

            }

            // admin_oldUpgradeCheck
            if ($pathinfo === '/admin/upgrade/check') {
                return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\AppController::oldUpgradeCheckAction',  '_route' => 'admin_oldUpgradeCheck',);
            }

            if (0 === strpos($pathinfo, '/admin/app')) {
                // admin_app_logs
                if ($pathinfo === '/admin/app/logs') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\AppController::logsAction',  '_route' => 'admin_app_logs',);
                }

                if (0 === strpos($pathinfo, '/admin/app/package_update')) {
                    // admin_app_package_update_modal
                    if (preg_match('#^/admin/app/package_update/(?P<id>[^/]++)/modal$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_package_update_modal')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\AppPackageUpdateController::modalAction',));
                    }

                    // admin_app_package_update_check_environment
                    if (preg_match('#^/admin/app/package_update/(?P<id>[^/]++)/check_environment$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_app_package_update_check_environment;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_package_update_check_environment')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\AppPackageUpdateController::checkEnvironmentAction',));
                    }
                    not_admin_app_package_update_check_environment:

                    // admin_app_package_update_check_depends
                    if (preg_match('#^/admin/app/package_update/(?P<id>[^/]++)/check_depends$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_app_package_update_check_depends;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_package_update_check_depends')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\AppPackageUpdateController::checkDependsAction',));
                    }
                    not_admin_app_package_update_check_depends:

                    // admin_app_package_update_check_last_error
                    if (preg_match('#^/admin/app/package_update/(?P<id>[^/]++)/check_lasterror$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_app_package_update_check_last_error;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_package_update_check_last_error')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\AppPackageUpdateController::checklastErrorAction',));
                    }
                    not_admin_app_package_update_check_last_error:

                    // admin_app_package_update_backup_file
                    if (preg_match('#^/admin/app/package_update/(?P<id>[^/]++)/backup_file$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_app_package_update_backup_file;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_package_update_backup_file')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\AppPackageUpdateController::backupFileAction',));
                    }
                    not_admin_app_package_update_backup_file:

                    // admin_app_package_update_backup_db
                    if (preg_match('#^/admin/app/package_update/(?P<id>[^/]++)/backup_db$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_app_package_update_backup_db;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_package_update_backup_db')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\AppPackageUpdateController::backupDbAction',));
                    }
                    not_admin_app_package_update_backup_db:

                    // admin_app_package_update_download_and_extract
                    if (preg_match('#^/admin/app/package_update/(?P<id>[^/]++)/download_extract$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_app_package_update_download_and_extract;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_package_update_download_and_extract')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\AppPackageUpdateController::downloadAndExtractAction',));
                    }
                    not_admin_app_package_update_download_and_extract:

                    // admin_app_package_update_check_download_and_extract
                    if (preg_match('#^/admin/app/package_update/(?P<id>[^/]++)/check_download_extract$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_app_package_update_check_download_and_extract;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_package_update_check_download_and_extract')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\AppPackageUpdateController::checkDownloadAndExtractAction',));
                    }
                    not_admin_app_package_update_check_download_and_extract:

                    // admin_app_package_update_begin_upgrade
                    if (preg_match('#^/admin/app/package_update/(?P<id>[^/]++)/begin_upgrade$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_app_package_update_begin_upgrade;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_package_update_begin_upgrade')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\AppPackageUpdateController::beginUpgradeAction',));
                    }
                    not_admin_app_package_update_begin_upgrade:

                }

            }

            if (0 === strpos($pathinfo, '/admin/category')) {
                // admin_category
                if ($pathinfo === '/admin/category') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CategoryController::indexAction',  '_route' => 'admin_category',);
                }

                if (0 === strpos($pathinfo, '/admin/category/c')) {
                    // admin_category_create
                    if ($pathinfo === '/admin/category/create') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CategoryController::createAction',  '_route' => 'admin_category_create',);
                    }

                    // admin_category_checkcode
                    if ($pathinfo === '/admin/category/checkcode') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CategoryController::checkCodeAction',  '_route' => 'admin_category_checkcode',);
                    }

                }

                // admin_category_edit
                if (preg_match('#^/admin/category/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_category_edit')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CategoryController::editAction',));
                }

                // admin_category_delete
                if (preg_match('#^/admin/category/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_category_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_category_delete')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CategoryController::deleteAction',));
                }
                not_admin_category_delete:

                // admin_category_upload
                if ($pathinfo === '/admin/category/uploadfile') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_category_upload;
                    }

                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CategoryController::uploadFileAction',  '_route' => 'admin_category_upload',);
                }
                not_admin_category_upload:

            }

            if (0 === strpos($pathinfo, '/admin/file')) {
                // admin_file
                if ($pathinfo === '/admin/file') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\FileController::indexAction',  '_route' => 'admin_file',);
                }

                // admin_file_delete
                if (preg_match('#^/admin/file/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_file_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_file_delete')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\FileController::deleteAction',));
                }
                not_admin_file_delete:

            }

            // admin_message
            if ($pathinfo === '/admin/message') {
                return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\MessageController::indexAction',  '_route' => 'admin_message',);
            }

            // admin_message_delete_messages
            if ($pathinfo === '/admin/delete/choosed/messages') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_admin_message_delete_messages;
                }

                return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\MessageController::deleteChoosedMessagesAction',  '_route' => 'admin_message_delete_messages',);
            }
            not_admin_message_delete_messages:

            if (0 === strpos($pathinfo, '/admin/login_record')) {
                // admin_login_record
                if ($pathinfo === '/admin/login_record') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\LoginRecordController::indexAction',  '_route' => 'admin_login_record',);
                }

                // admin_login_record_details
                if (preg_match('#^/admin/login_record/(?P<id>[^/]++)/details$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_login_record_details')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\LoginRecordController::showUserLoginRecordAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/thread')) {
                // admin_thread
                if ($pathinfo === '/admin/thread') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CourseThreadController::indexAction',  '_route' => 'admin_thread',);
                }

                // admin_thread_delete
                if (preg_match('#^/admin/thread/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_thread_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_thread_delete')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CourseThreadController::deleteAction',));
                }
                not_admin_thread_delete:

                // admin_thread_batch_delete
                if ($pathinfo === '/admin/thread/batch_delete') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_thread_batch_delete;
                    }

                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CourseThreadController::batchDeleteAction',  '_route' => 'admin_thread_batch_delete',);
                }
                not_admin_thread_batch_delete:

            }

            if (0 === strpos($pathinfo, '/admin/money_card')) {
                // admin_money_card
                if ($pathinfo === '/admin/money_card') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\MoneyCardController::indexAction',  '_route' => 'admin_money_card',);
                }

                // admin_money_card_batch
                if ($pathinfo === '/admin/money_card/batch') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\MoneyCardController::indexBatchAction',  '_route' => 'admin_money_card_batch',);
                }

                // admin_money_card_get_password
                if (0 === strpos($pathinfo, '/admin/money_card/get_password') && preg_match('#^/admin/money_card/get_password/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_money_card_get_password')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\MoneyCardController::getPasswordAction',));
                }

                // admin_money_card_create
                if ($pathinfo === '/admin/money_card/create') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\MoneyCardController::createAction',  '_route' => 'admin_money_card_create',);
                }

                // admin_money_card_lock
                if (0 === strpos($pathinfo, '/admin/money_card/lock') && preg_match('#^/admin/money_card/lock/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_money_card_lock')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\MoneyCardController::lockAction',));
                }

                // admin_money_card_unlock
                if (0 === strpos($pathinfo, '/admin/money_card/unlock') && preg_match('#^/admin/money_card/unlock/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_money_card_unlock')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\MoneyCardController::unlockAction',));
                }

                // admin_money_card_delete
                if (0 === strpos($pathinfo, '/admin/money_card/delete') && preg_match('#^/admin/money_card/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_money_card_delete')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\MoneyCardController::deleteAction',));
                }

                if (0 === strpos($pathinfo, '/admin/money_card/batch')) {
                    // admin_money_card_lock_batch
                    if (0 === strpos($pathinfo, '/admin/money_card/batch/lock') && preg_match('#^/admin/money_card/batch/lock/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_money_card_lock_batch')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\MoneyCardController::lockBatchAction',));
                    }

                    // admin_money_card_unlock_batch
                    if (0 === strpos($pathinfo, '/admin/money_card/batch/unlock') && preg_match('#^/admin/money_card/batch/unlock/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_money_card_unlock_batch')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\MoneyCardController::unlockBatchAction',));
                    }

                    // admin_money_card_batch_delete
                    if (0 === strpos($pathinfo, '/admin/money_card/batch/delete') && preg_match('#^/admin/money_card/batch/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_money_card_batch_delete')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\MoneyCardController::deleteBatchAction',));
                    }

                }

                // admin_money_card_batch_card_prefix_check
                if ($pathinfo === '/admin/money_card/card_prefix/check') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\MoneyCardController::cardPrefixCheckAction',  '_route' => 'admin_money_card_batch_card_prefix_check',);
                }

                // admin_money_card_batch_export_csv
                if (0 === strpos($pathinfo, '/admin/money_card/batch/export/csv') && preg_match('#^/admin/money_card/batch/export/csv/(?P<batchId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_money_card_batch_export_csv')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\MoneyCardController::exportCsvAction',));
                }

            }

            // admin_question
            if (0 === strpos($pathinfo, '/admin/question') && preg_match('#^/admin/question/(?P<postStatus>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_question')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\CourseQuestionController::indexAction',));
            }

            if (0 === strpos($pathinfo, '/admin/a')) {
                if (0 === strpos($pathinfo, '/admin/approvals')) {
                    if (0 === strpos($pathinfo, '/admin/approvals/approv')) {
                        // admin_approval_approving
                        if ($pathinfo === '/admin/approvals/approving') {
                            return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\UserApprovalController::approvingAction',  '_route' => 'admin_approval_approving',);
                        }

                        // admin_approval_approved
                        if ($pathinfo === '/admin/approvals/approved') {
                            return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\UserApprovalController::approvedAction',  '_route' => 'admin_approval_approved',);
                        }

                    }

                    // admin_approval_approve
                    if (preg_match('#^/admin/approvals/(?P<id>[^/]++)/approve$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_approval_approve')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\UserApprovalController::approveAction',));
                    }

                    // admin_approval_cancel
                    if (preg_match('#^/admin/approvals/(?P<id>[^/]++)/cancel$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_approval_cancel;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_approval_cancel')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\UserApprovalController::cancelAction',));
                    }
                    not_admin_approval_cancel:

                    // show_idcard
                    if (0 === strpos($pathinfo, '/admin/approvals/idcard/show') && preg_match('#^/admin/approvals/idcard/show/(?P<userId>[^/]++)/(?P<type>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'show_idcard')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\UserApprovalController::showIdcardAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/admin/article')) {
                    if (0 === strpos($pathinfo, '/admin/article/category')) {
                        // admin_article_category
                        if ($pathinfo === '/admin/article/category') {
                            return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\ArticleCategoryController::indexAction',  '_route' => 'admin_article_category',);
                        }

                        if (0 === strpos($pathinfo, '/admin/article/category/c')) {
                            // admin_article_category_create
                            if ($pathinfo === '/admin/article/category/create') {
                                return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\ArticleCategoryController::createAction',  '_route' => 'admin_article_category_create',);
                            }

                            if (0 === strpos($pathinfo, '/admin/article/category/check')) {
                                // admin_article_category_checkparentid
                                if ($pathinfo === '/admin/article/category/checkparentid') {
                                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\ArticleCategoryController::checkParentIdAction',  '_route' => 'admin_article_category_checkparentid',);
                                }

                                // admin_article_category_checkcode
                                if ($pathinfo === '/admin/article/category/checkcode') {
                                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\ArticleCategoryController::checkCodeAction',  '_route' => 'admin_article_category_checkcode',);
                                }

                            }

                        }

                        // admin_article_category_edit
                        if (preg_match('#^/admin/article/category/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_article_category_edit')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\ArticleCategoryController::editAction',));
                        }

                        // admin_article_category_delete
                        if (preg_match('#^/admin/article/category/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_admin_article_category_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_article_category_delete')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\ArticleCategoryController::deleteAction',));
                        }
                        not_admin_article_category_delete:

                    }

                    // admin_article_setting
                    if ($pathinfo === '/admin/article/setting') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\ArticleController::settingAction',  '_route' => 'admin_article_setting',);
                    }

                    // admin_article
                    if ($pathinfo === '/admin/article') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\ArticleController::indexAction',  '_route' => 'admin_article',);
                    }

                    // admin_article_create
                    if ($pathinfo === '/admin/article/create') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\ArticleController::createAction',  '_route' => 'admin_article_create',);
                    }

                    // admin_article_picture_crop
                    if ($pathinfo === '/admin/article/picture/crop') {
                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\ArticleController::pictureCropAction',  '_route' => 'admin_article_picture_crop',);
                    }

                    if (0 === strpos($pathinfo, '/admin/article/s')) {
                        // admin_article_show_upload
                        if ($pathinfo === '/admin/article/show/upload') {
                            return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\ArticleController::showUploadAction',  '_route' => 'admin_article_show_upload',);
                        }

                        // admin_article_set_property
                        if (0 === strpos($pathinfo, '/admin/article/set/property') && preg_match('#^/admin/article/set/property/(?P<id>[^/]++)/(?P<property>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_article_set_property')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\ArticleController::setArticlePropertyAction',));
                        }

                    }

                    // admin_article_cancel_property
                    if (0 === strpos($pathinfo, '/admin/article/cancel/property') && preg_match('#^/admin/article/cancel/property/(?P<id>[^/]++)/(?P<property>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_article_cancel_property')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\ArticleController::cancelArticlePropertyAction',));
                    }

                    // admin_article_edit
                    if (preg_match('#^/admin/article/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_article_edit')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\ArticleController::editAction',));
                    }

                    // admin_article_publish
                    if (preg_match('#^/admin/article/(?P<id>[^/]++)/publish$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_article_publish;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_article_publish')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\ArticleController::publishAction',));
                    }
                    not_admin_article_publish:

                    // admin_article_unpublish
                    if (preg_match('#^/admin/article/(?P<id>[^/]++)/unpublish$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_article_unpublish;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_article_unpublish')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\ArticleController::unpublishAction',));
                    }
                    not_admin_article_unpublish:

                    // admin_article_thumb_remove
                    if (0 === strpos($pathinfo, '/admin/article/thumb') && preg_match('#^/admin/article/thumb/(?P<id>[^/]++)/remove$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_article_thumb_remove')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\ArticleController::thumbRemoveAction',));
                    }

                    // admin_article_trash
                    if (preg_match('#^/admin/article/(?P<id>[^/]++)/trash$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_article_trash;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_article_trash')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\ArticleController::trashAction',));
                    }
                    not_admin_article_trash:

                    // admin_article_delete
                    if ($pathinfo === '/admin/article/delete') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_article_delete;
                        }

                        return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\ArticleController::deleteAction',  '_route' => 'admin_article_delete',);
                    }
                    not_admin_article_delete:

                }

            }

            if (0 === strpos($pathinfo, '/admin/group')) {
                // admin_group
                if (rtrim($pathinfo, '/') === '/admin/group') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_group');
                    }

                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\GroupController::indexAction',  '_route' => 'admin_group',);
                }

                // admin_group_set
                if ($pathinfo === '/admin/group/set') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\GroupController::setAction',  '_route' => 'admin_group_set',);
                }

                // admin_groupThread
                if ($pathinfo === '/admin/group/thread') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\GroupController::threadAction',  '_route' => 'admin_groupThread',);
                }

                // admin_groupThread_batch_delete
                if ($pathinfo === '/admin/group/batchDeleteThread') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\GroupController::batchDeleteThreadAction',  '_route' => 'admin_groupThread_batch_delete',);
                }

                // admin_group_close
                if (preg_match('#^/admin/group/(?P<id>[^/]++)/close$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_group_close')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\GroupController::closeGroupAction',));
                }

                // admin_group_open
                if (preg_match('#^/admin/group/(?P<id>[^/]++)/open$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_group_open')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\GroupController::openGroupAction',));
                }

                if (0 === strpos($pathinfo, '/admin/group/t')) {
                    if (0 === strpos($pathinfo, '/admin/group/thread')) {
                        // admin_groupThread_removeElite
                        if (preg_match('#^/admin/group/thread/(?P<threadId>[^/]++)/removeElite$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_groupThread_removeElite')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\GroupController::removeEliteAction',));
                        }

                        // admin_groupThread_setElite
                        if (preg_match('#^/admin/group/thread/(?P<threadId>[^/]++)/setElite$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_groupThread_setElite')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\GroupController::setEliteAction',));
                        }

                        // admin_groupThread_removeStick
                        if (preg_match('#^/admin/group/thread/(?P<threadId>[^/]++)/removeStick$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_groupThread_removeStick')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\GroupController::removeStickAction',));
                        }

                        // admin_groupThread_setStick
                        if (preg_match('#^/admin/group/thread/(?P<threadId>[^/]++)/setStick$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_groupThread_setStick')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\GroupController::setStickAction',));
                        }

                        // admin_groupThread_close
                        if (preg_match('#^/admin/group/thread/(?P<threadId>[^/]++)/closeThread$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_groupThread_close')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\GroupController::closeThreadAction',));
                        }

                        // admin_groupThread_open
                        if (preg_match('#^/admin/group/thread/(?P<threadId>[^/]++)/openThread$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_groupThread_open')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\GroupController::openThreadAction',));
                        }

                        // admin_groupThread_delete
                        if (preg_match('#^/admin/group/thread/(?P<threadId>[^/]++)/deleteThread$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_groupThread_delete')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\GroupController::deleteThreadAction',));
                        }

                    }

                    // admin_group_transfer
                    if (0 === strpos($pathinfo, '/admin/group/transfer') && preg_match('#^/admin/group/transfer/(?P<groupId>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_group_transfer')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\GroupController::transferGroupAction',));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin/operation/analysis')) {
                // admin_operation_analysis_register
                if (0 === strpos($pathinfo, '/admin/operation/analysis/register') && preg_match('#^/admin/operation/analysis/register/(?P<tab>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_operation_analysis_register')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\AnalysisController::registerAction',));
                }

                // admin_operation_analysis_login
                if (0 === strpos($pathinfo, '/admin/operation/analysis/login') && preg_match('#^/admin/operation/analysis/login/(?P<tab>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_operation_analysis_login')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\AnalysisController::loginAction',));
                }

                // admin_operation_analysis_course
                if (0 === strpos($pathinfo, '/admin/operation/analysis/course') && preg_match('#^/admin/operation/analysis/course/(?P<tab>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_operation_analysis_course')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\AnalysisController::courseAction',));
                }

                if (0 === strpos($pathinfo, '/admin/operation/analysis/lesson')) {
                    // admin_operation_analysis_lesson
                    if (preg_match('#^/admin/operation/analysis/lesson/(?P<tab>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_operation_analysis_lesson')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\AnalysisController::lessonAction',));
                    }

                    // admin_operation_analysis_lesson_join
                    if (0 === strpos($pathinfo, '/admin/operation/analysis/lesson/join') && preg_match('#^/admin/operation/analysis/lesson/join/(?P<tab>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_operation_analysis_lesson_join')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\AnalysisController::joinLessonAction',));
                    }

                    // admin_operation_analysis_lesson_paid
                    if (0 === strpos($pathinfo, '/admin/operation/analysis/lesson/paid') && preg_match('#^/admin/operation/analysis/lesson/paid/(?P<tab>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_operation_analysis_lesson_paid')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\AnalysisController::paidLessonAction',));
                    }

                    // admin_operation_analysis_lesson_finished
                    if (0 === strpos($pathinfo, '/admin/operation/analysis/lesson/finished') && preg_match('#^/admin/operation/analysis/lesson/finished/(?P<tab>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_operation_analysis_lesson_finished')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\AnalysisController::finishedLessonAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/admin/operation/analysis/video')) {
                    // admin_operation_analysis_video_viewed
                    if (0 === strpos($pathinfo, '/admin/operation/analysis/video/viewed') && preg_match('#^/admin/operation/analysis/video/viewed/(?P<tab>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_operation_analysis_video_viewed')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\AnalysisController::videoViewedAction',));
                    }

                    // admin_operation_analysis_video_cloud_viewed
                    if (0 === strpos($pathinfo, '/admin/operation/analysis/video/cloud/viewed') && preg_match('#^/admin/operation/analysis/video/cloud/viewed/(?P<tab>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_operation_analysis_video_cloud_viewed')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\AnalysisController::cloudVideoViewedAction',));
                    }

                    // admin_operation_analysis_video_local_viewed
                    if (0 === strpos($pathinfo, '/admin/operation/analysis/video/local/viewed') && preg_match('#^/admin/operation/analysis/video/local/viewed/(?P<tab>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_operation_analysis_video_local_viewed')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\AnalysisController::localVideoViewedAction',));
                    }

                    // admin_operation_analysis_video_net_viewed
                    if (0 === strpos($pathinfo, '/admin/operation/analysis/video/net/viewed') && preg_match('#^/admin/operation/analysis/video/net/viewed/(?P<tab>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_operation_analysis_video_net_viewed')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\AnalysisController::netVideoViewedAction',));
                    }

                }

                // admin_operation_analysis_income
                if (0 === strpos($pathinfo, '/admin/operation/analysis/income') && preg_match('#^/admin/operation/analysis/income/(?P<tab>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_operation_analysis_income')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\AnalysisController::incomeAction',));
                }

                if (0 === strpos($pathinfo, '/admin/operation/analysis/course')) {
                    // admin_operation_analysis_course_income
                    if (0 === strpos($pathinfo, '/admin/operation/analysis/course/income') && preg_match('#^/admin/operation/analysis/course/income/(?P<tab>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_operation_analysis_course_income')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\AnalysisController::courseIncomeAction',));
                    }

                    // admin_operation_analysis_course_sum
                    if (0 === strpos($pathinfo, '/admin/operation/analysis/course/sum') && preg_match('#^/admin/operation/analysis/course/sum/(?P<tab>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_operation_analysis_course_sum')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\AnalysisController::courseSumAction',));
                    }

                }

                // admin_operation_analysis_user_sum
                if (0 === strpos($pathinfo, '/admin/operation/analysis/user/sum') && preg_match('#^/admin/operation/analysis/user/sum/(?P<tab>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_operation_analysis_user_sum')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\AnalysisController::userSumAction',));
                }

                // admin_operation_analysis_rount
                if (0 === strpos($pathinfo, '/admin/operation/analysis/rountByanalysisDateType') && preg_match('#^/admin/operation/analysis/rountByanalysisDateType/(?P<tab>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_operation_analysis_rount')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\AnalysisController::rountByanalysisDateTypeAction',));
                }

                // admin_operation_analysis_lesson_exit
                if (0 === strpos($pathinfo, '/admin/operation/analysis/lesson/exit') && preg_match('#^/admin/operation/analysis/lesson/exit/(?P<tab>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_operation_analysis_lesson_exit')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\AnalysisController::exitLessonAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/user_fields')) {
                // admin_user_fields_add
                if ($pathinfo === '/admin/user_fields/add') {
                    return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\SettingController::addUserFieldsAction',  '_route' => 'admin_user_fields_add',);
                }

                // admin_user_fields_edit
                if (0 === strpos($pathinfo, '/admin/user_fields/edit') && preg_match('#^/admin/user_fields/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_fields_edit')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\SettingController::editUserFieldsAction',));
                }

                // admin_user_fields_delete
                if (0 === strpos($pathinfo, '/admin/user_fields/delete') && preg_match('#^/admin/user_fields/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_fields_delete')), array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\SettingController::deleteUserFieldsAction',));
                }

            }

            // admin_system_status
            if ($pathinfo === '/admin/system/status') {
                return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\DefaultController::systemStatusAction',  '_route' => 'admin_system_status',);
            }

            // admin_official_messages
            if ($pathinfo === '/admin/official/messages') {
                return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\DefaultController::officialMessagesAction',  '_route' => 'admin_official_messages',);
            }

            // admin_uploadfile_head_leader_params
            if ($pathinfo === '/admin/uploadfile/video/head/leader/params') {
                return array (  '_controller' => 'Topxia\\AdminBundle\\Controller\\UploadFileController::headLeaderParamsAction',  '_route' => 'admin_uploadfile_head_leader_params',);
            }

        }

        if (0 === strpos($pathinfo, '/mapi_v')) {
            if (0 === strpos($pathinfo, '/mapi_v1')) {
                if (0 === strpos($pathinfo, '/mapi_v1/courses')) {
                    // mapi_course_pay
                    if (preg_match('#^/mapi_v1/courses/(?P<courseId>[^/]++)/pay$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapi_course_pay')), array (  '_controller' => 'Topxia\\MobileBundle\\Controller\\MobileOrderController::payCourseAction',));
                    }

                    // mapi_course_refund
                    if (preg_match('#^/mapi_v1/courses/(?P<courseId>[^/]++)/refund$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapi_course_refund')), array (  '_controller' => 'Topxia\\MobileBundle\\Controller\\MobileOrderController::refundCourseAction',));
                    }

                }

                // topxia_mobile_qrcode
                if ($pathinfo === '/mapi_v1/qrcode') {
                    return array (  '_controller' => 'Topxia\\MobileBundle\\Controller\\QrcodeController::indexAction',  '_route' => 'topxia_mobile_qrcode',);
                }

                // mapi_courses
                if ($pathinfo === '/mapi_v1/courses') {
                    return array (  '_controller' => 'Topxia\\MobileBundle\\Controller\\CourseController::coursesAction',  '_route' => 'mapi_courses',);
                }

                // mapi_about
                if ($pathinfo === '/mapi_v1/about') {
                    return array (  '_controller' => 'Topxia\\MobileBundle\\Controller\\UserController::getSchoolSiteAction',  '_route' => 'mapi_about',);
                }

                if (0 === strpos($pathinfo, '/mapi_v1/courses')) {
                    // mapi_course
                    if (preg_match('#^/mapi_v1/courses/(?P<courseId>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapi_course')), array (  '_controller' => 'Topxia\\MobileBundle\\Controller\\CourseController::courseAction',));
                    }

                    // mapi_course_items
                    if (preg_match('#^/mapi_v1/courses/(?P<courseId>[^/]++)/items$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapi_course_items')), array (  '_controller' => 'Topxia\\MobileBundle\\Controller\\CourseController::itemsAction',));
                    }

                    // mapi_course_lesson
                    if (preg_match('#^/mapi_v1/courses/(?P<courseId>[^/]++)/lessons/(?P<lessonId>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapi_course_lesson')), array (  '_controller' => 'Topxia\\MobileBundle\\Controller\\CourseController::lessonAction',));
                    }

                    // mapi_course_lesson_media
                    if (preg_match('#^/mapi_v1/courses/(?P<courseId>[^/]++)/lessons/(?P<lessonId>[^/]++)/media$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapi_course_lesson_media')), array (  '_controller' => 'Topxia\\MobileBundle\\Controller\\CourseController::lessonMediaAction',));
                    }

                    // mapi_course_reviews
                    if (preg_match('#^/mapi_v1/courses/(?P<courseId>[^/]++)/reviews$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_mapi_course_reviews;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapi_course_reviews')), array (  '_controller' => 'Topxia\\MobileBundle\\Controller\\CourseReviewController::reviewsAction',));
                    }
                    not_mapi_course_reviews:

                    // mapi_course_review_create
                    if (preg_match('#^/mapi_v1/courses/(?P<courseId>[^/]++)/reviews$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_mapi_course_review_create;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapi_course_review_create')), array (  '_controller' => 'Topxia\\MobileBundle\\Controller\\CourseReviewController::createAction',));
                    }
                    not_mapi_course_review_create:

                    // mapi_course_review_create_html5
                    if (preg_match('#^/mapi_v1/courses/(?P<courseId>[^/]++)/review_create$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapi_course_review_create_html5')), array (  '_controller' => 'Topxia\\MobileBundle\\Controller\\CourseReviewController::createAction',));
                    }

                    // mapi_course_review_get
                    if (preg_match('#^/mapi_v1/courses/(?P<courseId>[^/]++)/reviews/(?P<reviewId>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_mapi_course_review_get;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapi_course_review_get')), array (  '_controller' => 'Topxia\\MobileBundle\\Controller\\CourseReviewController::getAction',));
                    }
                    not_mapi_course_review_get:

                    // mapi_course_review_update
                    if (preg_match('#^/mapi_v1/courses/(?P<courseId>[^/]++)/reviews/(?P<reviewId>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_mapi_course_review_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapi_course_review_update')), array (  '_controller' => 'Topxia\\MobileBundle\\Controller\\CourseReviewController::updateAction',));
                    }
                    not_mapi_course_review_update:

                    // mapi_course_review_update_html5
                    if (preg_match('#^/mapi_v1/courses/(?P<courseId>[^/]++)/reviews/(?P<reviewId>[^/]++)/update$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapi_course_review_update_html5')), array (  '_controller' => 'Topxia\\MobileBundle\\Controller\\CourseReviewController::updateAction',));
                    }

                    // mapi_course_favorite
                    if (preg_match('#^/mapi_v1/courses/(?P<courseId>[^/]++)/favorite$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_mapi_course_favorite;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapi_course_favorite')), array (  '_controller' => 'Topxia\\MobileBundle\\Controller\\CourseController::favoriteAction',));
                    }
                    not_mapi_course_favorite:

                    // mapi_course_unfavorite
                    if (preg_match('#^/mapi_v1/courses/(?P<courseId>[^/]++)/unfavorite$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_mapi_course_unfavorite;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapi_course_unfavorite')), array (  '_controller' => 'Topxia\\MobileBundle\\Controller\\CourseController::unfavoriteAction',));
                    }
                    not_mapi_course_unfavorite:

                    // mapi_course_can_learn
                    if (preg_match('#^/mapi_v1/courses/(?P<courseId>[^/]++)/can_learn$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_mapi_course_can_learn;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapi_course_can_learn')), array (  '_controller' => 'Topxia\\MobileBundle\\Controller\\CourseController::canLearnAction',));
                    }
                    not_mapi_course_can_learn:

                    // mapi_course_lesson_learn
                    if (preg_match('#^/mapi_v1/courses/(?P<courseId>[^/]++)/lessons/(?P<lessonId>[^/]++)/learn$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_mapi_course_lesson_learn;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapi_course_lesson_learn')), array (  '_controller' => 'Topxia\\MobileBundle\\Controller\\CourseController::learnAction',));
                    }
                    not_mapi_course_lesson_learn:

                    // mapi_course_lesson_unlearn
                    if (preg_match('#^/mapi_v1/courses/(?P<courseId>[^/]++)/lessons/(?P<lessonId>[^/]++)/unlearn$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_mapi_course_lesson_unlearn;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapi_course_lesson_unlearn')), array (  '_controller' => 'Topxia\\MobileBundle\\Controller\\CourseController::unLearnAction',));
                    }
                    not_mapi_course_lesson_unlearn:

                    // mapi_course_lesson_learn_status
                    if (preg_match('#^/mapi_v1/courses/(?P<courseId>[^/]++)/lessons/(?P<lessonId>[^/]++)/learn_status$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapi_course_lesson_learn_status')), array (  '_controller' => 'Topxia\\MobileBundle\\Controller\\CourseController::learnStatusAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/mapi_v1/me')) {
                    // mapi_me_favorite_courses
                    if ($pathinfo === '/mapi_v1/me/favorite_courses') {
                        return array (  '_controller' => 'Topxia\\MobileBundle\\Controller\\CourseController::meFavoritesAction',  '_route' => 'mapi_me_favorite_courses',);
                    }

                    if (0 === strpos($pathinfo, '/mapi_v1/me/learn')) {
                        // mapi_me_learning_courses
                        if ($pathinfo === '/mapi_v1/me/learning_courses') {
                            return array (  '_controller' => 'Topxia\\MobileBundle\\Controller\\CourseController::meLearningsAction',  '_route' => 'mapi_me_learning_courses',);
                        }

                        // mapi_me_learned_courses
                        if ($pathinfo === '/mapi_v1/me/learned_courses') {
                            return array (  '_controller' => 'Topxia\\MobileBundle\\Controller\\CourseController::meLearnedsAction',  '_route' => 'mapi_me_learned_courses',);
                        }

                    }

                    // mapi_me_notifications
                    if ($pathinfo === '/mapi_v1/me/notifications') {
                        return array (  '_controller' => 'Topxia\\MobileBundle\\Controller\\UserController::notifiactionsAction',  '_route' => 'mapi_me_notifications',);
                    }

                }

                if (0 === strpos($pathinfo, '/mapi_v1/user')) {
                    if (0 === strpos($pathinfo, '/mapi_v1/users')) {
                        // mapi_user
                        if (preg_match('#^/mapi_v1/users/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapi_user')), array (  '_controller' => 'Topxia\\MobileBundle\\Controller\\UserController::userAction',));
                        }

                        // mapi_user_register
                        if ($pathinfo === '/mapi_v1/users') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_mapi_user_register;
                            }

                            return array (  '_controller' => 'Topxia\\MobileBundle\\Controller\\UserController::registerAction',  '_route' => 'mapi_user_register',);
                        }
                        not_mapi_user_register:

                    }

                    // mapi_user_register_html5
                    if ($pathinfo === '/mapi_v1/user_register') {
                        return array (  '_controller' => 'Topxia\\MobileBundle\\Controller\\UserController::registerAction',  '_route' => 'mapi_user_register_html5',);
                    }

                }

                if (0 === strpos($pathinfo, '/mapi_v1/log')) {
                    // mapi_user_login
                    if ($pathinfo === '/mapi_v1/login') {
                        return array (  '_controller' => 'Topxia\\MobileBundle\\Controller\\UserController::loginAction',  '_route' => 'mapi_user_login',);
                    }

                    // mapi_user_logout
                    if ($pathinfo === '/mapi_v1/logout') {
                        return array (  '_controller' => 'Topxia\\MobileBundle\\Controller\\UserController::logoutAction',  '_route' => 'mapi_user_logout',);
                    }

                    if (0 === strpos($pathinfo, '/mapi_v1/login_with_')) {
                        // mapi_user_login_with_token
                        if ($pathinfo === '/mapi_v1/login_with_token') {
                            return array (  '_controller' => 'Topxia\\MobileBundle\\Controller\\UserController::loginWithTokenAction',  '_route' => 'mapi_user_login_with_token',);
                        }

                        // mapi_user_login_with_site
                        if ($pathinfo === '/mapi_v1/login_with_site') {
                            return array (  '_controller' => 'Topxia\\MobileBundle\\Controller\\UserController::loginWithSiteAction',  '_route' => 'mapi_user_login_with_site',);
                        }

                    }

                }

                // mapi_mobile_version
                if ($pathinfo === '/mapi_v1/mobile_version') {
                    return array (  '_controller' => 'Topxia\\MobileBundle\\Controller\\MobileController::mobileVersionAction',  '_route' => 'mapi_mobile_version',);
                }

                // mapi_mobile_notify_version
                if ($pathinfo === '/mapi_v1/notify_mobile_version') {
                    return array (  '_controller' => 'Topxia\\MobileBundle\\Controller\\MobileController::notifyMobileVersionAction',  '_route' => 'mapi_mobile_notify_version',);
                }

                // mapi_mobile_regist_device
                if ($pathinfo === '/mapi_v1/regist_device') {
                    if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                        goto not_mapi_mobile_regist_device;
                    }

                    return array (  '_controller' => 'Topxia\\MobileBundle\\Controller\\MobileController::mobileDeviceRegistAction',  '_route' => 'mapi_mobile_regist_device',);
                }
                not_mapi_mobile_regist_device:

                // mapi_mobile_log
                if ($pathinfo === '/mapi_v1/mobile_school_login') {
                    if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                        goto not_mapi_mobile_log;
                    }

                    return array (  '_controller' => 'Topxia\\MobileBundle\\Controller\\MobileController::mobileSchoolLoginAction',  '_route' => 'mapi_mobile_log',);
                }
                not_mapi_mobile_log:

            }

            if (0 === strpos($pathinfo, '/mapi_v2')) {
                // mapi_mobile_api
                if (preg_match('#^/mapi_v2/(?P<service>[^/]++)/(?P<method>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_mapi_mobile_api;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapi_mobile_api')), array (  '_controller' => 'Topxia\\MobileBundleV2\\Controller\\MobileApiController::indexAction',));
                }
                not_mapi_mobile_api:

                // mapi_order_submit_pay_request
                if (0 === strpos($pathinfo, '/mapi_v2/order') && preg_match('#^/mapi_v2/order/(?P<id>[^/]++)/submit_pay_request$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_mapi_order_submit_pay_request;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapi_order_submit_pay_request')), array (  '_controller' => 'Topxia\\MobileBundleV2\\Controller\\MobileOrderController::submitPayRequestAction',));
                }
                not_mapi_order_submit_pay_request:

                // topxia_mobile_alipay_notify
                if (0 === strpos($pathinfo, '/mapi_v2/pay') && preg_match('#^/mapi_v2/pay/(?P<name>[^/]++)/alipay_notify$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'topxia_mobile_alipay_notify')), array (  '_controller' => 'Topxia\\MobileBundleV2\\Controller\\MobileAlipayController::payNotifyAction',));
                }

                // topxia_mobile_alipay_pay
                if ($pathinfo === '/mapi_v2/alipay_pay') {
                    return array (  '_controller' => 'Topxia\\MobileBundleV2\\Controller\\MobileAlipayController::payAction',  '_route' => 'topxia_mobile_alipay_pay',);
                }

                // topxia_mobile_alipay_callback
                if (0 === strpos($pathinfo, '/mapi_v2/pay') && preg_match('#^/mapi_v2/pay/(?P<name>[^/]++)/alipay_callback$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'topxia_mobile_alipay_callback')), array (  '_controller' => 'Topxia\\MobileBundleV2\\Controller\\MobileAlipayController::payCallBackAction',));
                }

            }

        }

        // custom_admin_homepage
        if (0 === strpos($pathinfo, '/admin/hello') && preg_match('#^/admin/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'custom_admin_homepage')), array (  '_controller' => 'Custom\\AdminBundle\\Controller\\DefaultController::indexAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
