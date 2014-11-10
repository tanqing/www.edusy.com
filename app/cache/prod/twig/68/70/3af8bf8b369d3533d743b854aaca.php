<?php

/* TopxiaWebBundle:CourseLessonManage:list-item.html.twig */
class __TwigTemplate_68703af8bf8b369d3533d743b854aaca extends Twig_Template
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
        echo "<li class=\"item-lesson clearfix\" id=\"lesson-";
        if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_lesson_, "id"), "html", null, true);
        echo "\"style=\"word-break: break-all;\" >
\t<div class=\"item-line\"></div>
\t<div class=\"item-content\">
\t  ";
        // line 4
        if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
        $context["mediaStatus"] = (($this->getAttribute($_lesson_, "mediaStatus", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_lesson_, "mediaStatus"), null)) : (null));
        // line 5
        echo "\t\t
\t\t";
        // line 6
        if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
        if (twig_in_filter($this->getAttribute($_lesson_, "type"), array(0 => "video", 1 => "live"))) {
            // line 7
            echo "\t\t  ";
            if (isset($context["mediaStatus"])) { $_mediaStatus_ = $context["mediaStatus"]; } else { $_mediaStatus_ = null; }
            if (($_mediaStatus_ == "waiting")) {
                // line 8
                echo "\t\t\t<span class=\"glyphicon glyphicon-facetime-video text-warning\"></span>
\t\t  ";
            } elseif (($_mediaStatus_ == "doing")) {
                // line 10
                echo "\t\t\t<span class=\"glyphicon glyphicon-facetime-video text-info\"></span>
\t\t  ";
            } elseif (($_mediaStatus_ == "error")) {
                // line 12
                echo "\t\t\t<span class=\"glyphicon glyphicon-facetime-video text-danger\"></span>
\t\t  ";
            } else {
                // line 14
                echo "\t\t\t<span class=\"glyphicon glyphicon-facetime-video text-success\"></span>
\t\t  ";
            }
            // line 16
            echo "\t\t";
        } elseif (($this->getAttribute($_lesson_, "type") == "audio")) {
            // line 17
            echo "\t\t  <span class=\"glyphicon glyphicon-volume-up text-success\"></span>
\t\t";
        } elseif (($this->getAttribute($_lesson_, "type") == "testpaper")) {
            // line 19
            echo "\t\t  <span class=\"glyphicon glyphicon-check text-success\"></span>
\t\t";
        } else {
            // line 21
            echo "\t\t\t<span class=\"glyphicon glyphicon-file text-success\"></span>
\t\t";
        }
        // line 23
        echo "
\t\t课时 <span class=\"number\">";
        // line 24
        if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_lesson_, "number"), "html", null, true);
        echo "</span>：";
        if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
        if (($this->getAttribute($_lesson_, "free") == 1)) {
            echo "<span class=\"label label-danger\">免费</span>";
        }
        echo " ";
        if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_lesson_, "title"), "html", null, true);
        echo "

\t\t";
        // line 26
        if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
        if (twig_in_filter($this->getAttribute($_lesson_, "type"), array(0 => "video", 1 => "audio"))) {
            // line 27
            echo "\t\t  <span class=\"text-muted\">";
            if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->durationFilter($this->getAttribute($_lesson_, "length")), "html", null, true);
            echo "</span>
\t\t";
        }
        // line 29
        echo "
\t\t";
        // line 30
        if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
        if (twig_in_filter($this->getAttribute($_lesson_, "type"), array(0 => "live"))) {
            // line 31
            echo "\t\t  <span class=\"text-muted\">";
            if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->dataformatFilter($this->getAttribute($_lesson_, "startTime")), "html", null, true);
            echo "</span>
\t\t";
        }
        // line 33
        echo "
\t\t";
        // line 34
        if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
        if (($this->getAttribute($_lesson_, "giveCredit") > 0)) {
            // line 35
            echo "\t\t  <small class=\"text-muted\">(";
            if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_lesson_, "giveCredit"), "html", null, true);
            echo "学分)</small>
\t\t";
        }
        // line 37
        echo "
    ";
        // line 38
        if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
        if (($this->getAttribute($_lesson_, "requireCredit") > 0)) {
            // line 39
            echo "      <small class=\"text-muted\">(需";
            if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_lesson_, "requireCredit"), "html", null, true);
            echo "学分)</small>
    ";
        }
        // line 41
        echo "
\t\t";
        // line 42
        if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
        if (($this->getAttribute($_lesson_, "type") != "testpaper")) {
            // line 43
            echo "\t\t\t";
            if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
            $context["mediaTypeName"] = ((($this->getAttribute($_lesson_, "type") == "video")) ? ("视频") : (((($this->getAttribute($_lesson_, "type") == "audio")) ? ("音频") : ("文件"))));
            // line 44
            echo "\t\t\t";
            if (isset($context["mediaStatus"])) { $_mediaStatus_ = $context["mediaStatus"]; } else { $_mediaStatus_ = null; }
            if (($_mediaStatus_ == "waiting")) {
                // line 45
                echo "\t\t\t  <span class=\"text-warning\">(正在等待";
                if (isset($context["mediaTypeName"])) { $_mediaTypeName_ = $context["mediaTypeName"]; } else { $_mediaTypeName_ = null; }
                echo twig_escape_filter($this->env, $_mediaTypeName_, "html", null, true);
                echo "格式转换)</span>
\t\t\t";
            } elseif (($_mediaStatus_ == "doing")) {
                // line 47
                echo "\t\t\t  <span class=\"text-info\">(正在转换";
                if (isset($context["mediaTypeName"])) { $_mediaTypeName_ = $context["mediaTypeName"]; } else { $_mediaTypeName_ = null; }
                echo twig_escape_filter($this->env, $_mediaTypeName_, "html", null, true);
                echo "格式)</span>
\t\t\t";
            } elseif (($_mediaStatus_ == "error")) {
                // line 49
                echo "\t\t\t  <span class=\"text-danger\">(";
                if (isset($context["mediaTypeName"])) { $_mediaTypeName_ = $context["mediaTypeName"]; } else { $_mediaTypeName_ = null; }
                echo twig_escape_filter($this->env, $_mediaTypeName_, "html", null, true);
                echo "格式转换失败)</span>
\t\t\t";
            }
            // line 51
            echo "\t\t";
        }
        // line 52
        echo "
\t\t";
        // line 53
        if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
        if (($this->getAttribute($_lesson_, "status") == "unpublished")) {
            // line 54
            echo "\t\t  <span class=\"text-warning\">(未发布)</span>
\t\t";
        }
        // line 56
        echo "
\t</div>

\t<div class=\"item-actions prs\">
\t  ";
        // line 60
        if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
        if (($this->getAttribute($_lesson_, "type") != "testpaper")) {
            // line 61
            echo "\t\t<button class=\"btn btn-link\" title=\"添加资料\" data-toggle=\"modal\"  data-target=\"#modal\" data-url=\"";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_material", array("courseId" => $this->getAttribute($_course_, "id"), "lessonId" => $this->getAttribute($_lesson_, "id"))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-paperclip\"></span>
\t\t</button>
\t  ";
        }
        // line 64
        echo "\t  ";
        if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
        if (($this->getAttribute($_lesson_, "type") == "testpaper")) {
            // line 65
            echo "\t\t\t<a class=\"btn btn-link\" title=\"预览\" href=\"";
            if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_preview_test", array("testId" => $this->getAttribute($_lesson_, "mediaId"))), "html", null, true);
            echo "\" target=\"_blank\"><span class=\"glyphicon glyphicon-eye-open\"></span></a>
\t  ";
        } else {
            // line 67
            echo "\t\t\t<a class=\"btn btn-link\" title=\"预览\" href=\"";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_learn", array("id" => $this->getAttribute($_course_, "id"), "preview" => 1)), "html", null, true);
            echo "#lesson/";
            if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_lesson_, "id"), "html", null, true);
            echo "\" target=\"_blank\"><span class=\"glyphicon glyphicon-eye-open\"></span></a>
\t  ";
        }
        // line 69
        echo "

  \t";
        // line 71
        if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
        if (($this->getAttribute($_lesson_, "status") == "unpublished")) {
            // line 72
            echo "\t  \t<button class=\"btn btn-link publish-lesson-btn\" title=\"发布\" data-url=\"";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_publish", array("courseId" => $this->getAttribute($_course_, "id"), "lessonId" => $this->getAttribute($_lesson_, "id"))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-ok-circle\"></span></button>
\t  ";
        } else {
            // line 74
            echo "\t  \t<button class=\"btn btn-link unpublish-lesson-btn\" title=\"取消发布\" data-url=\"";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_unpublish", array("courseId" => $this->getAttribute($_course_, "id"), "lessonId" => $this->getAttribute($_lesson_, "id"))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-remove-circle\"></span></button>
\t  ";
        }
        // line 76
        echo "
\t\t<button class=\"btn btn-link\" title=\"编辑\" data-toggle=\"modal\" data-target=\"#modal\" data-backdrop=\"static\" data-keyboard=\"false\"
\t\t  ";
        // line 78
        if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
        if (($this->getAttribute($_lesson_, "type") == "testpaper")) {
            // line 79
            echo "\t\t\t  data-url=\"";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_edit_testpaper", array("courseId" => $this->getAttribute($_course_, "id"), "lessonId" => $this->getAttribute($_lesson_, "id"))), "html", null, true);
            echo "\"
\t\t\t";
        } elseif (($this->getAttribute($_lesson_, "type") == "live")) {
            // line 81
            echo "\t\t\t  data-url=\"";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("live_course_manage_lesson_edit", array("courseId" => $this->getAttribute($_course_, "id"), "lessonId" => $this->getAttribute($_lesson_, "id"))), "html", null, true);
            echo "\"
\t\t\t";
        } else {
            // line 83
            echo "\t\t\t  data-url=\"";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_edit", array("courseId" => $this->getAttribute($_course_, "id"), "lessonId" => $this->getAttribute($_lesson_, "id"))), "html", null, true);
            echo "\"
\t\t\t";
        }
        // line 85
        echo "\t\t  ><i class=\"glyphicon glyphicon-edit\"></i></button>

\t  <button class=\"btn btn-link delete-lesson-btn\" title=\"删除\" data-url=\"";
        // line 87
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_delete", array("courseId" => $this->getAttribute($_course_, "id"), "lessonId" => $this->getAttribute($_lesson_, "id"))), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-trash\"></span></button>
\t 
\t</div>
</li>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseLessonManage:list-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 87,  278 => 85,  270 => 83,  262 => 81,  254 => 79,  251 => 78,  247 => 76,  239 => 74,  231 => 72,  228 => 71,  224 => 69,  214 => 67,  207 => 65,  203 => 64,  194 => 61,  191 => 60,  185 => 56,  181 => 54,  178 => 53,  175 => 52,  172 => 51,  165 => 49,  158 => 47,  151 => 45,  147 => 44,  143 => 43,  140 => 42,  137 => 41,  130 => 39,  124 => 37,  114 => 34,  104 => 31,  101 => 30,  98 => 29,  91 => 27,  74 => 24,  71 => 23,  67 => 21,  63 => 19,  59 => 17,  56 => 16,  52 => 14,  48 => 12,  44 => 10,  36 => 7,  30 => 5,  27 => 4,  19 => 1,  177 => 54,  163 => 53,  160 => 52,  156 => 51,  153 => 50,  149 => 49,  145 => 48,  127 => 38,  121 => 45,  117 => 35,  111 => 33,  108 => 38,  95 => 29,  88 => 26,  79 => 19,  72 => 17,  69 => 16,  50 => 14,  43 => 9,  40 => 8,  33 => 6,  28 => 6,  26 => 5,);
    }
}
