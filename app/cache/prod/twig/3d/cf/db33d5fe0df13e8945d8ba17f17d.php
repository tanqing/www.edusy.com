<?php

/* TopxiaWebBundle:CourseManage:learning-data.html.twig */
class __TwigTemplate_3dcfdb33d5fe0df13e8945d8ba17f17d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaWebBundle:CourseManage:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:CourseManage:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["side_nav"] = "course_manage_data";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "基本信息 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "
<div class=\"panel panel-default panel-col course-data\">
    <div class=\"panel-heading\">基本信息</div>
    <div class=\"panel-body\">
      <div class=\"table-responsive\">
        <table class=\"table table-bordered\" style=\"word-break:break-all;text-align:center;\">
          <tr class=\"active\">
            <td>课程名</td>
            <td>课程学习人数</td>
            <td>课程完成人数</td>
            <td>课程平均学习时长(分)</td>
            <td>课程提问总数</td>
            <td>课程笔记总数</td>
            <td>----</td>
          </tr>
          <tr>
            <td><a data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
        // line 24
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_detail_data", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
        echo "\" href=\"javascript:\">";
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_course_, "title"), "html", null, true);
        echo "</a></td>
            <td>";
        // line 25
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_course_, "studentNum"), "html", null, true);
        echo "</td>
            <td>";
        // line 26
        if (isset($context["isLearnedNum"])) { $_isLearnedNum_ = $context["isLearnedNum"]; } else { $_isLearnedNum_ = null; }
        echo twig_escape_filter($this->env, $_isLearnedNum_, "html", null, true);
        echo "</td>
            <td>";
        // line 27
        if (isset($context["learnTime"])) { $_learnTime_ = $context["learnTime"]; } else { $_learnTime_ = null; }
        echo twig_escape_filter($this->env, $_learnTime_, "html", null, true);
        echo "</td>
            <td>";
        // line 28
        if (isset($context["questionCount"])) { $_questionCount_ = $context["questionCount"]; } else { $_questionCount_ = null; }
        echo twig_escape_filter($this->env, $_questionCount_, "html", null, true);
        echo "</td>
            <td>";
        // line 29
        if (isset($context["noteCount"])) { $_noteCount_ = $context["noteCount"]; } else { $_noteCount_ = null; }
        echo twig_escape_filter($this->env, $_noteCount_, "html", null, true);
        echo "</td>
            <td>----</td>
          </tr>
          <tr class=\"active\">
            <td width=\"35%\">课时名</td>
            <td>课时学习人数</td>
            <td>课时完成人数</td>
            <td>课时平均学习时长(分)</td>
            <td>音视频时长(分)</td>
            <td>音视频平均观看时长(分)</td>
            <td>测试平均得分</td>
          </tr>
          ";
        // line 41
        if (isset($context["lessons"])) { $_lessons_ = $context["lessons"]; } else { $_lessons_ = null; }
        if ($_lessons_) {
            // line 42
            echo "            ";
            if (isset($context["lessons"])) { $_lessons_ = $context["lessons"]; } else { $_lessons_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_lessons_);
            foreach ($context['_seq'] as $context["_key"] => $context["lesson"]) {
                // line 43
                echo "              <tr>
                <td><a data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                // line 44
                if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_lesson_detail_data", array("courseId" => $this->getAttribute($_lesson_, "courseId"), "lessonId" => $this->getAttribute($_lesson_, "id"))), "html", null, true);
                echo "\" href=\"javascript:\">";
                if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_lesson_, "title"), "html", null, true);
                if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
                if (($this->getAttribute($_lesson_, "type") == "text")) {
                    echo "（图文）";
                } elseif (($this->getAttribute($_lesson_, "type") == "video")) {
                    echo "（视频）";
                } elseif (($this->getAttribute($_lesson_, "type") == "audio")) {
                    echo "（音频）";
                } elseif (($this->getAttribute($_lesson_, "type") == "testpaper")) {
                    echo "（试卷）";
                } elseif (($this->getAttribute($_lesson_, "type") == "ppt")) {
                    echo "（ppt）";
                }
                echo "</a></td></td>
                <td>";
                // line 45
                if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_lesson_, "LearnedNum"), "html", null, true);
                echo "</td>
                <td>";
                // line 46
                if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_lesson_, "finishedNum"), "html", null, true);
                echo "</td>
                <td>";
                // line 47
                if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_lesson_, "learnTime"), "html", null, true);
                echo "</td>
                <td>";
                // line 48
                if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
                if ((($this->getAttribute($_lesson_, "type") == "audio") || ($this->getAttribute($_lesson_, "type") == "video"))) {
                    if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_lesson_, "length"), "html", null, true);
                } else {
                    echo "----";
                }
                echo "</td>
                <td>";
                // line 49
                if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
                if ((($this->getAttribute($_lesson_, "mediaSource") != "self") && ($this->getAttribute($_lesson_, "type") == "video"))) {
                    echo "无";
                } elseif ((($this->getAttribute($_lesson_, "type") == "audio") || ($this->getAttribute($_lesson_, "type") == "video"))) {
                    if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_lesson_, "watchTime"), "html", null, true);
                } else {
                    echo "----";
                }
                echo "</td>
                <td>";
                // line 50
                if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
                if (($this->getAttribute($_lesson_, "type") == "testpaper")) {
                    if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_lesson_, "score"), "html", null, true);
                } else {
                    echo "----";
                }
                echo "</td>
              </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lesson'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "          ";
        }
        // line 54
        echo "        </table>
        <p class=\"text-info\">注：网络视频的观看时长无法获取</p>
      </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseManage:learning-data.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 54,  187 => 53,  172 => 50,  160 => 49,  150 => 48,  145 => 47,  140 => 46,  135 => 45,  115 => 44,  112 => 43,  106 => 42,  103 => 41,  87 => 29,  82 => 28,  77 => 27,  72 => 26,  67 => 25,  59 => 24,  41 => 8,  38 => 7,  31 => 3,  26 => 5,);
    }
}
