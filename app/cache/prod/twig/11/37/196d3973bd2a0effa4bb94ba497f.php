<?php

/* TopxiaWebBundle:CourseLesson:preview-modal.html.twig */
class __TwigTemplate_1137196d3973bd2a0effa4bb94ba497f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::bootstrap-modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["modal_class"] = "modal-lg";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "<span class=\"text-muted\">免费课时预览:</span> ";
        if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_lesson_, "title"), "html", null, true);
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "\t";
        if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
        if (($this->getAttribute($_lesson_, "status") == "published")) {
            // line 9
            echo "
\t  ";
            // line 10
            if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
            if (($this->getAttribute($_lesson_, "mediaSource") == "iframe")) {
                // line 11
                echo "      <div id=\"lesson-preview-iframe\" data-url=\"";
                if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_lesson_, "mediaUri"), "html", null, true);
                echo "\" style=\"display:none;\">
      </div>
\t\t";
            } elseif (($this->getAttribute($_lesson_, "type") == "video")) {
                // line 14
                echo "\t\t\t";
                if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
                if (($this->getAttribute($_lesson_, "mediaSource") == "self")) {
                    // line 15
                    echo "\t\t\t\t<div id=\"lesson-preview-video-player\" data-url=\"";
                    if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_lesson_media", array("courseId" => $this->getAttribute($_lesson_, "courseId"), "lessonId" => $this->getAttribute($_lesson_, "id"))), "html", null, true);
                    echo "\" data-hls-url=\"";
                    if (isset($context["hlsUrl"])) { $_hlsUrl_ = $context["hlsUrl"]; } else { $_hlsUrl_ = null; }
                    echo twig_escape_filter($this->env, $_hlsUrl_, "html", null, true);
                    echo "\"
                    ";
                    // line 16
                    if (($this->env->getExtension('topxia_web_twig')->getSetting("storage.video_watermark") && $this->env->getExtension('topxia_web_twig')->getSetting("storage.video_watermark_image"))) {
                        // line 17
                        echo "                        data-watermark=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFileUrl($this->env->getExtension('topxia_web_twig')->getSetting("storage.video_watermark_image"), null, true), "html", null, true);
                        echo "\"
                    ";
                    }
                    // line 19
                    echo "                    ";
                    if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                    if (($this->env->getExtension('topxia_web_twig')->getSetting("storage.video_fingerprint") && $this->getAttribute($_app_, "user"))) {
                        // line 20
                        echo "                        data-fingerprint=\"";
                        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("cloud_video_fingerprint", array("userId" => $this->getAttribute($this->getAttribute($_app_, "user"), "id"))), "html", null, true);
                        echo "\"
                    ";
                    }
                    // line 22
                    echo "
                ></div>
            ";
                } else {
                    // line 25
                    echo "                <div id=\"lesson-preview-swf-player\" data-url=\"";
                    if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_lesson_, "mediaUri"), "html", null, true);
                    echo "\"></div>
            ";
                }
                // line 27
                echo "        ";
            } elseif (($this->getAttribute($_lesson_, "type") == "audio")) {
                // line 28
                echo "            <audio id=\"lesson-preview-audio-player\" width=\"100%\" height=\"100%\">
                 <source src=\"";
                // line 29
                if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_lesson_media", array("courseId" => $this->getAttribute($_lesson_, "courseId"), "lessonId" => $this->getAttribute($_lesson_, "id"))), "html", null, true);
                echo "\" type='audio/mp3' />
            </audio>
        ";
            } elseif (($this->getAttribute($_lesson_, "type") == "ppt")) {
                // line 32
                echo "            <div id=\"lesson-preview-ppt-player\" data-url=\"";
                if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_lesson_ppt", array("courseId" => $this->getAttribute($_lesson_, "courseId"), "lessonId" => $this->getAttribute($_lesson_, "id"))), "html", null, true);
                echo "\"></div>

        ";
            } else {
                // line 35
                echo "            <div ";
                if ((_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("course.copy_enabled"), 0) > 0)) {
                    echo " oncopy=\"return false;\" oncut=\"return false;\" onselectstart=\"return false\" oncontextmenu=\"return false;\"";
                }
                echo ">
                ";
                // line 36
                if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
                echo $this->getAttribute($_lesson_, "content");
                echo "
            </div>
        ";
            }
            // line 39
            echo "    ";
        } else {
            // line 40
            echo "        <div class=\"empty\">课时尚未发布，无法预览！</div>
    ";
        }
        // line 42
        echo "        <script>app.load('course/lesson-preview')</script>
";
    }

    // line 45
    public function block_footer($context, array $blocks = array())
    {
        // line 46
        echo "    ";
        if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
        if (($this->getAttribute($_lesson_, "status") == "published")) {
            // line 47
            echo "        ";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if (($this->getAttribute($_course_, "price") == "0.00")) {
                // line 48
                echo "                <button id=\"buy-btn\" type=\"button\" class=\"btn btn-primary\" data-url=\"";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_buy", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
                echo "\">
                    ";
                // line 49
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                if ($this->getAttribute($_user_, "id")) {
                    echo "免费加入学习
                    ";
                } else {
                    // line 50
                    echo "登录后加入学习
                    ";
                }
                // line 52
                echo "                </button>
        ";
            } else {
                // line 54
                echo "                <button id=\"buy-btn\" type=\"button\" class=\"btn btn-primary\" data-url=\"";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_buy", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
                echo "\">
                    ";
                // line 55
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                if ($this->getAttribute($_user_, "id")) {
                    echo "觉得不错？点击购买此课程（";
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_course_, "price"), "html", null, true);
                    echo "元）
                    ";
                } else {
                    // line 56
                    echo "登录后购买学习完整的课程
                    ";
                }
                // line 58
                echo "                </button>
        ";
            }
            // line 60
            echo "    ";
        } else {
            // line 61
            echo "        <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">关闭</button>
    ";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseLesson:preview-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 61,  206 => 60,  202 => 58,  198 => 56,  189 => 55,  183 => 54,  179 => 52,  175 => 50,  169 => 49,  163 => 48,  159 => 47,  155 => 46,  152 => 45,  147 => 42,  143 => 40,  140 => 39,  133 => 36,  126 => 35,  118 => 32,  111 => 29,  108 => 28,  105 => 27,  98 => 25,  93 => 22,  86 => 20,  82 => 19,  76 => 17,  74 => 16,  65 => 15,  61 => 14,  53 => 11,  50 => 10,  47 => 9,  43 => 8,  40 => 7,  32 => 5,  27 => 3,);
    }
}
