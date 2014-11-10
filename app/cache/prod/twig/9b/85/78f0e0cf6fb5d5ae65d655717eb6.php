<?php

/* TopxiaWebBundle:Course:learn.html.twig */
class __TwigTemplate_9b8578f0e0cf6fb5d5ae65d655717eb6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaWebBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 10
        $context["hideSetupHint"] = true;
        // line 11
        $context["script_controller"] = "course/learn";
        // line 12
        $context["bodyClass"] = "lesson-dashboard-page";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_course_, "title"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "   ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
   <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/jquery-plugin/perfect-scrollbar/0.4.8/perfect-scrollbar.css"), "html", null, true);
        echo "\" />
";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "    <div class=\"container lesson-dashboard\" id=\"lesson-dashboard\"
         data-course-id=\"";
        // line 16
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_course_, "id"), "html", null, true);
        echo "\"
         data-course-uri=\"";
        // line 17
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
        echo "\"
         data-dashboard-uri=\"";
        // line 18
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_learn", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
        echo "\"
         data-hide-media-lesson-learn-btn=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->isFeatureEnabled("hide_media_lesson_learn_btn"), "html", null, true);
        echo "\">
      <div class=\"dashboard-content\">
         <a class=\"btn btn-primary  nav-btn back-course-btn\" href=\"";
        // line 21
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-chevron-left\" ></span> 返回课程</a>
         <a class=\"btn btn-primary  nav-btn prev-lesson-btn\" href=\"javascript:\" data-role=\"prev-lesson\" data-placement=\"right\" title=\"上一课时\"><span class=\"glyphicon glyphicon-chevron-up\" title=\"上一课时\"></span></a>
         <a class=\"btn btn-primary nav-btn next-lesson-btn\" href=\"javascript:\" data-role=\"next-lesson\" data-placement=\"right\" title=\"下一课时\"><span class=\"glyphicon glyphicon-chevron-down\"></span></a>

        <div class=\"dashboard-header\">
          <div class=\"pull-left title-group\">
            <span class=\"chapter-label\">第<span data-role=\"chapter-number\"></span>章</span>
            <span class=\"divider\">&raquo;</span>
            <span class=\"chapter-label\">第<span data-role=\"unit-number\"></span>节</span>
            <span class=\"divider\">&raquo;</span>
            <span class=\"item-label\">课时<span data-role=\"lesson-number\">正在加载...</span></span>
            <span class=\"item-title\" data-role=\"lesson-title\"></span>
          </div>
        </div>

        <div class=\"dashboard-body\">
          <div class=\"lesson-content\" id=\"lesson-video-content\" data-role=\"lesson-content\" style=\"display:none;\"
            ";
        // line 38
        if ((($this->env->getExtension('topxia_web_twig')->getSetting("storage.video_watermark") > 0) && $this->env->getExtension('topxia_web_twig')->getSetting("storage.video_watermark_image"))) {
            // line 39
            echo "              data-watermark=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFileUrl($this->env->getExtension('topxia_web_twig')->getSetting("storage.video_watermark_image"), null, true), "html", null, true);
            echo "\"
            ";
        }
        // line 41
        echo "            ";
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if (($this->env->getExtension('topxia_web_twig')->getSetting("storage.video_fingerprint") && $this->getAttribute($_app_, "user"))) {
            // line 42
            echo "              data-fingerprint=\"";
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("cloud_video_fingerprint", array("userId" => $this->getAttribute($this->getAttribute($_app_, "user"), "id"))), "html", null, true);
            echo "\"
            ";
        }
        // line 44
        echo "              data-user-id=\"";
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "user"), "id"), "html", null, true);
        echo "\"
          ></div>
          <div class=\"watermarkEmbedded\" ></div>
 
          <div class=\"lesson-content lesson-content-audio\" id=\"lesson-audio-content\" data-role=\"lesson-content\" style=\"display:none;\"></div>
          <div class=\"lesson-content\" id=\"lesson-swf-content\" data-role=\"lesson-content\" style=\"display:none;\"></div>
          <div class=\"lesson-content\" id=\"lesson-iframe-content\" data-role=\"lesson-content\" style=\"display:none;\"></div>
          <div class=\"lesson-content lesson-content-text\" id=\"lesson-text-content\" data-role=\"lesson-content\" style=\"display:none;\"
          ";
        // line 52
        if ((_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("course.copy_enabled"), 0) > 0)) {
            echo " oncopy=\"return false;\" oncut=\"return false;\" onselectstart=\"return false\" oncontextmenu=\"return false;\"";
        }
        echo ">
            <div class=\"lesson-content-text-body\"></div>
          </div>
          <div class=\"lesson-content lesson-content-text\" id=\"lesson-live-content\" data-role=\"lesson-content\" style=\"display:none;\">
            <div class=\"lesson-content-text-body\"></div>
          </div>
          <div class=\"lesson-content lesson-content-text\" id=\"lesson-unpublished-content\" data-role=\"lesson-content\" style=\"display:none;\">
            <div class=\"lesson-content-text-body\">当前课时正在编辑中，暂时无法观看。</div>
          </div>
          <div class=\"lesson-content lesson-content-text\" id=\"lesson-alert-content\" data-role=\"lesson-content\" style=\"display:none;\">
            <div class=\"lesson-content-text-body\"></div>
          </div>
          <div class=\"lesson-content lesson-content-text\" id=\"lesson-testpaper-content\" data-role=\"lesson-content\" style=\"display:none;\">
            <div class=\"lesson-content-text-body\"></div>
          </div>
          <div class=\"lesson-content lesson-content-text\" id=\"lesson-ppt-content\" data-role=\"lesson-content\" style=\"display:none;\">
            <div class=\"lesson-content-text-body\"></div>
          </div>

        </div>

        <div class=\"dashboard-footer clearfix\">

          <div class=\"pull-right\">
            <button class=\"btn btn-primary finish-btn\" data-role=\"finish-lesson\" style=\"display:none;\"><span class=\"glyphicon glyphicon-unchecked\"></span> 学过了</button>
          </div>

        </div>
      </div>

      <div class=\"toolbar toolbar-open\" id=\"lesson-dashboard-toolbar\">
        <div class=\"toolbar-nav\">

          <ul class=\"toolbar-nav-stacked\" id=\"lesson-toolbar-primary\"></ul>
          <ul class=\"toolbar-nav-stacked\" id=\"lesson-toolbar-secondary\">
            <li class=\"hide-pane\" style=\"display:none;\">
              <a href=\"javascript:\"><span class=\"glyphicon glyphicon-chevron-right\"></span></a>
            </li>
          </ul>

        </div>
        <div class=\"toolbar-pane-container\">
        </div>
      </div>

    </div>




<div class=\"modal\" id=\"course-learned-modal\" style=\"display:none;\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
        <h4 class=\"modal-title\">学习进度提示</h4>
      </div>
      <div class=\"modal-body\">
        <p class=\"text-success\">赞一个，这个课程你已经都学完啦，你可以再回顾一下或者去看看别的课程～～～</p>
      </div>
      <div class=\"modal-footer\">
        <a href=\"";
        // line 113
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
        echo "\" class=\"btn btn-primary\">回课程主页</a>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:learn.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 113,  138 => 52,  125 => 44,  118 => 42,  114 => 41,  108 => 39,  106 => 38,  85 => 21,  80 => 19,  75 => 18,  70 => 17,  65 => 16,  62 => 15,  59 => 14,  53 => 7,  48 => 6,  45 => 5,  36 => 3,  31 => 12,  29 => 11,  27 => 10,);
    }
}
