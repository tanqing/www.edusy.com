<?php

/* TopxiaAdminBundle:Default:operation-analysis-dashbord.html.twig */
class __TwigTemplate_ba0479c99f8527df32ea299bb5157c44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<table class=\"table table-condensed table-bordered table-striped table-hover\">
        <thead>
          <tr>
            <th width=\"35%\"></th>
            <th width=\"20%\">今日</th>
            <th width=\"20%\" >昨日</th>
\t\t";
        // line 8
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 9
            echo "            <th width=\"40%\">历史</th>
\t\t";
        }
        // line 11
        echo "          </tr>
        </thead>
        <tbody>
\t\t\t<tr>
\t\t\t\t<td>新注册用户数</td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 16
        if (isset($context["todayRegisterNum"])) { $_todayRegisterNum_ = $context["todayRegisterNum"]; } else { $_todayRegisterNum_ = null; }
        echo twig_escape_filter($this->env, $_todayRegisterNum_, "html", null, true);
        echo "</span></td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 17
        if (isset($context["yesterdayRegisterNum"])) { $_yesterdayRegisterNum_ = $context["yesterdayRegisterNum"]; } else { $_yesterdayRegisterNum_ = null; }
        echo twig_escape_filter($this->env, $_yesterdayRegisterNum_, "html", null, true);
        echo "</span></td>
\t\t\t";
        // line 18
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 19
            echo "\t\t\t\t<td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_register", array("tab" => "trend", "analysisDateType" => "register")), "html", null, true);
            echo "\">趋势</a> <span class=\"text-muted\">|</span> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_register", array("tab" => "detail", "analysisDateType" => "register")), "html", null, true);
            echo "\">详情</a></td>
\t\t\t\t";
        }
        // line 21
        echo "\t\t\t</tr>

\t\t\t<tr>
\t\t\t\t<td>用户登录数<small>（不含重复登录）</small></td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 25
        if (isset($context["todayLoginNum"])) { $_todayLoginNum_ = $context["todayLoginNum"]; } else { $_todayLoginNum_ = null; }
        echo twig_escape_filter($this->env, $_todayLoginNum_, "html", null, true);
        echo "</span></td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 26
        if (isset($context["yesterdayLoginNum"])) { $_yesterdayLoginNum_ = $context["yesterdayLoginNum"]; } else { $_yesterdayLoginNum_ = null; }
        echo twig_escape_filter($this->env, $_yesterdayLoginNum_, "html", null, true);
        echo "</span></td>
\t\t\t";
        // line 27
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 28
            echo "\t\t\t\t<td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_login", array("tab" => "trend", "analysisDateType" => "login")), "html", null, true);
            echo "\">趋势</a> <span class=\"text-muted\">|</span> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_login", array("tab" => "detail", "analysisDateType" => "login")), "html", null, true);
            echo "\">详情</a></td>
\t\t\t";
        }
        // line 29
        echo "\t
\t\t\t</tr>

\t\t\t<tr>
\t\t\t\t<td>新增课程数</td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 34
        if (isset($context["todayCourseNum"])) { $_todayCourseNum_ = $context["todayCourseNum"]; } else { $_todayCourseNum_ = null; }
        echo twig_escape_filter($this->env, $_todayCourseNum_, "html", null, true);
        echo "</span></td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 35
        if (isset($context["yesterdayCourseNum"])) { $_yesterdayCourseNum_ = $context["yesterdayCourseNum"]; } else { $_yesterdayCourseNum_ = null; }
        echo twig_escape_filter($this->env, $_yesterdayCourseNum_, "html", null, true);
        echo "</span></td>
\t\t\t";
        // line 36
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 37
            echo "\t\t\t\t<td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_course", array("tab" => "trend", "analysisDateType" => "course")), "html", null, true);
            echo "\">趋势</a> <span class=\"text-muted\">|</span> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_course", array("tab" => "detail", "analysisDateType" => "course")), "html", null, true);
            echo "\">详情</a></td>
\t\t\t";
        }
        // line 38
        echo "\t
\t\t\t</tr>

\t\t\t<tr>
\t\t\t\t<td>新增课时数</td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 43
        if (isset($context["todayLessonNum"])) { $_todayLessonNum_ = $context["todayLessonNum"]; } else { $_todayLessonNum_ = null; }
        echo twig_escape_filter($this->env, $_todayLessonNum_, "html", null, true);
        echo "</span></td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 44
        if (isset($context["yesterdayLessonNum"])) { $_yesterdayLessonNum_ = $context["yesterdayLessonNum"]; } else { $_yesterdayLessonNum_ = null; }
        echo twig_escape_filter($this->env, $_yesterdayLessonNum_, "html", null, true);
        echo "</span></td>
\t\t\t";
        // line 45
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 46
            echo "\t\t\t\t<td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_lesson", array("tab" => "trend", "analysisDateType" => "lesson")), "html", null, true);
            echo "\">趋势</a> <span class=\"text-muted\">|</span> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_lesson", array("tab" => "detail", "analysisDateType" => "lesson")), "html", null, true);
            echo "\">详情</a></td>
\t\t\t";
        }
        // line 47
        echo "\t
\t\t\t</tr>

\t\t\t<tr>
\t\t\t\t<td>加入学习数</td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 52
        if (isset($context["todayJoinLessonNum"])) { $_todayJoinLessonNum_ = $context["todayJoinLessonNum"]; } else { $_todayJoinLessonNum_ = null; }
        echo twig_escape_filter($this->env, $_todayJoinLessonNum_, "html", null, true);
        echo "</span></td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 53
        if (isset($context["yesterdayJoinLessonNum"])) { $_yesterdayJoinLessonNum_ = $context["yesterdayJoinLessonNum"]; } else { $_yesterdayJoinLessonNum_ = null; }
        echo twig_escape_filter($this->env, $_yesterdayJoinLessonNum_, "html", null, true);
        echo "</span></td>
\t\t\t";
        // line 54
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 55
            echo "\t\t\t\t<td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_lesson_join", array("tab" => "trend", "analysisDateType" => "joinLesson")), "html", null, true);
            echo "\">趋势</a> <span class=\"text-muted\">|</span> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_lesson_join", array("tab" => "detail", "analysisDateType" => "joinLesson")), "html", null, true);
            echo "\">详情</a></td>
\t\t\t";
        }
        // line 56
        echo "\t
\t\t\t</tr>

\t\t\t<tr>
\t\t\t\t<td>购买课程数</td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 61
        if (isset($context["todayBuyLessonNum"])) { $_todayBuyLessonNum_ = $context["todayBuyLessonNum"]; } else { $_todayBuyLessonNum_ = null; }
        echo twig_escape_filter($this->env, $_todayBuyLessonNum_, "html", null, true);
        echo "</span></td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 62
        if (isset($context["yesterdayBuyLessonNum"])) { $_yesterdayBuyLessonNum_ = $context["yesterdayBuyLessonNum"]; } else { $_yesterdayBuyLessonNum_ = null; }
        echo twig_escape_filter($this->env, $_yesterdayBuyLessonNum_, "html", null, true);
        echo "</span></td>
\t\t\t";
        // line 63
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 64
            echo "\t\t\t\t<td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_lesson_paid", array("tab" => "trend", "analysisDateType" => "paidLesson")), "html", null, true);
            echo "\">趋势</a> <span class=\"text-muted\">|</span> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_lesson_paid", array("tab" => "detail", "analysisDateType" => "paidLesson")), "html", null, true);
            echo "\">详情</a></td>
\t\t\t";
        }
        // line 65
        echo "\t
\t\t\t</tr>

\t\t\t<tr>
\t\t\t\t<td>完成课时学习数</td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 70
        if (isset($context["todayFinishedLessonNum"])) { $_todayFinishedLessonNum_ = $context["todayFinishedLessonNum"]; } else { $_todayFinishedLessonNum_ = null; }
        echo twig_escape_filter($this->env, $_todayFinishedLessonNum_, "html", null, true);
        echo "</span></td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 71
        if (isset($context["yesterdayFinishedLessonNum"])) { $_yesterdayFinishedLessonNum_ = $context["yesterdayFinishedLessonNum"]; } else { $_yesterdayFinishedLessonNum_ = null; }
        echo twig_escape_filter($this->env, $_yesterdayFinishedLessonNum_, "html", null, true);
        echo "</span></td>
\t\t\t";
        // line 72
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 73
            echo "\t\t\t\t<td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_lesson_finished", array("tab" => "trend", "analysisDateType" => "finishedLesson")), "html", null, true);
            echo "\">趋势</a> <span class=\"text-muted\">|</span> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_lesson_finished", array("tab" => "detail", "analysisDateType" => "finishedLesson")), "html", null, true);
            echo "\">详情</a></td>
\t\t";
        }
        // line 74
        echo "\t
\t\t\t</tr>

\t\t\t<tr>
\t\t\t\t<td>视频观看数<small>（含重复打开）</small></td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 79
        if (isset($context["todayAllVideoViewedNum"])) { $_todayAllVideoViewedNum_ = $context["todayAllVideoViewedNum"]; } else { $_todayAllVideoViewedNum_ = null; }
        echo twig_escape_filter($this->env, $_todayAllVideoViewedNum_, "html", null, true);
        echo "</span></td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 80
        if (isset($context["yesterdayAllVideoViewedNum"])) { $_yesterdayAllVideoViewedNum_ = $context["yesterdayAllVideoViewedNum"]; } else { $_yesterdayAllVideoViewedNum_ = null; }
        echo twig_escape_filter($this->env, $_yesterdayAllVideoViewedNum_, "html", null, true);
        echo "</span></td>
\t\t";
        // line 81
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 82
            echo "\t\t\t\t<td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_video_viewed", array("tab" => "trend", "analysisDateType" => "videoViewed")), "html", null, true);
            echo "\">趋势</a> <span class=\"text-muted\">|</span> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_video_viewed", array("tab" => "detail", "analysisDateType" => "videoViewed")), "html", null, true);
            echo "\">详情</a></td>
\t\t";
        }
        // line 83
        echo "\t
\t\t\t</tr>

\t\t\t<tr>
\t\t\t\t<td>└─ 云视频观看数</td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 88
        if (isset($context["todayCloudVideoViewedNum"])) { $_todayCloudVideoViewedNum_ = $context["todayCloudVideoViewedNum"]; } else { $_todayCloudVideoViewedNum_ = null; }
        echo twig_escape_filter($this->env, $_todayCloudVideoViewedNum_, "html", null, true);
        echo "</span></td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 89
        if (isset($context["yesterdayCloudVideoViewedNum"])) { $_yesterdayCloudVideoViewedNum_ = $context["yesterdayCloudVideoViewedNum"]; } else { $_yesterdayCloudVideoViewedNum_ = null; }
        echo twig_escape_filter($this->env, $_yesterdayCloudVideoViewedNum_, "html", null, true);
        echo "</span></td>
\t\t";
        // line 90
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 91
            echo "\t\t\t\t<td>
\t\t\t\t";
            // line 92
            if (isset($context["keyCheckResult"])) { $_keyCheckResult_ = $context["keyCheckResult"]; } else { $_keyCheckResult_ = null; }
            if (((($this->getAttribute($_keyCheckResult_, "error", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_keyCheckResult_, "error"), null)) : (null)) == "error")) {
                // line 93
                echo "\t\t\t\t\t\t未开通或未开启云视频!
\t\t\t\t\t";
            } else {
                // line 95
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_video_cloud_viewed", array("tab" => "trend", "analysisDateType" => "cloudVideoViewed")), "html", null, true);
                echo "\">趋势</a> <span class=\"text-muted\">|</span> <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_video_cloud_viewed", array("tab" => "detail", "analysisDateType" => "cloudVideoViewed")), "html", null, true);
                echo "\">详情</a>
\t\t\t\t";
            }
            // line 97
            echo "\t\t\t\t</td>
\t\t";
        }
        // line 98
        echo "\t
\t\t\t</tr>

\t\t\t<tr>
\t\t\t\t<td>└─ 本地视频观看数</td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 103
        if (isset($context["todayLocalVideoViewedNum"])) { $_todayLocalVideoViewedNum_ = $context["todayLocalVideoViewedNum"]; } else { $_todayLocalVideoViewedNum_ = null; }
        echo twig_escape_filter($this->env, $_todayLocalVideoViewedNum_, "html", null, true);
        echo "</span></td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 104
        if (isset($context["yesterdayLocalVideoViewedNum"])) { $_yesterdayLocalVideoViewedNum_ = $context["yesterdayLocalVideoViewedNum"]; } else { $_yesterdayLocalVideoViewedNum_ = null; }
        echo twig_escape_filter($this->env, $_yesterdayLocalVideoViewedNum_, "html", null, true);
        echo "</span></td>
\t\t";
        // line 105
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 106
            echo "\t\t\t\t<td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_video_local_viewed", array("tab" => "trend", "analysisDateType" => "localVideoViewed")), "html", null, true);
            echo "\">趋势</a> <span class=\"text-muted\">|</span> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_video_local_viewed", array("tab" => "detail", "analysisDateType" => "localVideoViewed")), "html", null, true);
            echo "\">详情</a></td>
\t\t";
        }
        // line 107
        echo "\t
\t\t\t</tr>

\t\t\t<tr>
\t\t\t\t<td>└─ 网络视频观看数</td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 112
        if (isset($context["todayNetVideoViewedNum"])) { $_todayNetVideoViewedNum_ = $context["todayNetVideoViewedNum"]; } else { $_todayNetVideoViewedNum_ = null; }
        echo twig_escape_filter($this->env, $_todayNetVideoViewedNum_, "html", null, true);
        echo "</span></td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 113
        if (isset($context["yesterdayNetVideoViewedNum"])) { $_yesterdayNetVideoViewedNum_ = $context["yesterdayNetVideoViewedNum"]; } else { $_yesterdayNetVideoViewedNum_ = null; }
        echo twig_escape_filter($this->env, $_yesterdayNetVideoViewedNum_, "html", null, true);
        echo "</span></td>
\t\t\t";
        // line 114
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 115
            echo "\t\t\t\t<td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_video_net_viewed", array("tab" => "trend", "analysisDateType" => "netVideoViewed")), "html", null, true);
            echo "\">趋势</a> <span class=\"text-muted\">|</span> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_video_net_viewed", array("tab" => "detail", "analysisDateType" => "netVideoViewed")), "html", null, true);
            echo "\">详情</a></td>
\t\t\t";
        }
        // line 116
        echo "\t
\t\t\t</tr>
\t\t\t";
        // line 118
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 119
            echo "\t\t\t<tr>
\t\t\t\t<td>营收额</td>
\t\t\t\t<td><span class=\"pull-right\">";
            // line 121
            if (isset($context["todayIncome"])) { $_todayIncome_ = $context["todayIncome"]; } else { $_todayIncome_ = null; }
            echo twig_escape_filter($this->env, $_todayIncome_, "html", null, true);
            echo "</span></td>
\t\t\t\t<td><span class=\"pull-right\">";
            // line 122
            if (isset($context["yesterdayIncome"])) { $_yesterdayIncome_ = $context["yesterdayIncome"]; } else { $_yesterdayIncome_ = null; }
            echo twig_escape_filter($this->env, $_yesterdayIncome_, "html", null, true);
            echo "</span></td>
\t\t\t\t<td><a href=\"";
            // line 123
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_income", array("tab" => "trend", "analysisDateType" => "income")), "html", null, true);
            echo "\">趋势</a> <span class=\"text-muted\">|</span> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_income", array("tab" => "detail", "analysisDateType" => "income")), "html", null, true);
            echo "\">详情</a></td>
\t\t\t</tr>

\t\t\t<tr>
\t\t\t\t<td>└─ 课程营收额</td>
\t\t\t\t<td><span class=\"pull-right\">";
            // line 128
            if (isset($context["todayCourseIncome"])) { $_todayCourseIncome_ = $context["todayCourseIncome"]; } else { $_todayCourseIncome_ = null; }
            echo twig_escape_filter($this->env, $_todayCourseIncome_, "html", null, true);
            echo "</span></td>
\t\t\t\t<td><span class=\"pull-right\">";
            // line 129
            if (isset($context["yesterdayCourseIncome"])) { $_yesterdayCourseIncome_ = $context["yesterdayCourseIncome"]; } else { $_yesterdayCourseIncome_ = null; }
            echo twig_escape_filter($this->env, $_yesterdayCourseIncome_, "html", null, true);
            echo "</span></td>
\t\t\t\t<td><a href=\"";
            // line 130
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_course_income", array("tab" => "trend", "analysisDateType" => "courseIncome")), "html", null, true);
            echo "\">趋势</a> <span class=\"text-muted\">|</span> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_course_income", array("tab" => "detail", "analysisDateType" => "courseIncome")), "html", null, true);
            echo "\">详情</a></td>
\t\t\t</tr>
\t\t\t";
        }
        // line 133
        echo "\t\t\t<tr>
\t\t\t\t<td>课程总数</td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 135
        if (isset($context["todayCourseSum"])) { $_todayCourseSum_ = $context["todayCourseSum"]; } else { $_todayCourseSum_ = null; }
        echo twig_escape_filter($this->env, $_todayCourseSum_, "html", null, true);
        echo "</span></td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 136
        if (isset($context["yesterdayCourseSum"])) { $_yesterdayCourseSum_ = $context["yesterdayCourseSum"]; } else { $_yesterdayCourseSum_ = null; }
        echo twig_escape_filter($this->env, $_yesterdayCourseSum_, "html", null, true);
        echo "</span></td>
\t\t\t";
        // line 137
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 138
            echo "\t\t\t\t<td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_course_sum", array("tab" => "trend", "analysisDateType" => "courseSum")), "html", null, true);
            echo "\">趋势</a> <span class=\"text-muted\">|</span> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_course_sum", array("tab" => "detail", "analysisDateType" => "courseSum")), "html", null, true);
            echo "\">详情</a></td>
\t\t\t\t";
        }
        // line 140
        echo "\t\t\t</tr>

\t\t\t<tr>
\t\t\t\t<td>用户总数</td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 144
        if (isset($context["todayUserSum"])) { $_todayUserSum_ = $context["todayUserSum"]; } else { $_todayUserSum_ = null; }
        echo twig_escape_filter($this->env, $_todayUserSum_, "html", null, true);
        echo "</span></td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 145
        if (isset($context["yesterdayUserSum"])) { $_yesterdayUserSum_ = $context["yesterdayUserSum"]; } else { $_yesterdayUserSum_ = null; }
        echo twig_escape_filter($this->env, $_yesterdayUserSum_, "html", null, true);
        echo "</span></td>
\t\t\t";
        // line 146
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 147
            echo "\t\t\t\t<td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_user_sum", array("tab" => "trend", "analysisDateType" => "userSum")), "html", null, true);
            echo "\">趋势</a> <span class=\"text-muted\">|</span> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_user_sum", array("tab" => "detail", "analysisDateType" => "userSum")), "html", null, true);
            echo "\">详情</a></td>
\t\t\t\t";
        }
        // line 149
        echo "\t\t\t</tr>
";
        // line 156
        echo "

        </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Default:operation-analysis-dashbord.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  445 => 156,  442 => 149,  434 => 147,  432 => 146,  427 => 145,  422 => 144,  416 => 140,  408 => 138,  406 => 137,  401 => 136,  396 => 135,  392 => 133,  384 => 130,  379 => 129,  374 => 128,  364 => 123,  359 => 122,  354 => 121,  350 => 119,  348 => 118,  344 => 116,  336 => 115,  334 => 114,  329 => 113,  324 => 112,  317 => 107,  309 => 106,  307 => 105,  302 => 104,  297 => 103,  290 => 98,  286 => 97,  278 => 95,  274 => 93,  271 => 92,  268 => 91,  266 => 90,  261 => 89,  256 => 88,  249 => 83,  241 => 82,  239 => 81,  234 => 80,  229 => 79,  222 => 74,  214 => 73,  212 => 72,  207 => 71,  202 => 70,  195 => 65,  187 => 64,  185 => 63,  180 => 62,  175 => 61,  168 => 56,  160 => 55,  158 => 54,  153 => 53,  148 => 52,  141 => 47,  133 => 46,  131 => 45,  126 => 44,  121 => 43,  114 => 38,  106 => 37,  104 => 36,  99 => 35,  94 => 34,  87 => 29,  79 => 28,  77 => 27,  72 => 26,  67 => 25,  61 => 21,  53 => 19,  51 => 18,  46 => 17,  41 => 16,  34 => 11,  30 => 9,  28 => 8,  19 => 1,);
    }
}
