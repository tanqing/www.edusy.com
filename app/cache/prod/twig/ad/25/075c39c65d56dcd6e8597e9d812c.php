<?php

/* TopxiaWebBundle:CourseLessonManage:lesson-modal.html.twig */
class __TwigTemplate_ad25075c39c65d56dcd6e8597e9d812c extends Twig_Template
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
        // line 4
        if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
        $context["lesson"] = ((array_key_exists("lesson", $context)) ? (_twig_default_filter($_lesson_, null)) : (null));
        // line 128
        $context["hideFooter"] = true;
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        // line 8
        echo "  ";
        if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
        if ($_lesson_) {
            echo "编辑课时";
            if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_lesson_, "number"), "html", null, true);
        } else {
            echo "添加课时";
        }
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "
<form id=\"course-lesson-form\" data-course-id=\"";
        // line 13
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_course_, "id"), "html", null, true);
        echo "\" class=\"form-horizontal lesson-form\" method=\"post\" ";
        if (array_key_exists("parentId", $context)) {
            echo "data-parentId=\"";
            if (isset($context["parentId"])) { $_parentId_ = $context["parentId"]; } else { $_parentId_ = null; }
            echo twig_escape_filter($this->env, $_parentId_, "html", null, true);
            echo "\" ";
        }
        // line 14
        echo "  data-create-draft-url=\"";
        echo $this->env->getExtension('routing')->getPath("course_draft_create");
        echo "\"
  ";
        // line 15
        if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
        if ($_lesson_) {
            // line 16
            echo "    action=\"";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_edit", array("courseId" => $this->getAttribute($_course_, "id"), "lessonId" => $this->getAttribute($_lesson_, "id"))), "html", null, true);
            echo "\" data-lesson-id=\"";
            if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_lesson_, "id"), "html", null, true);
            echo "\"
  ";
        } else {
            // line 18
            echo "    action=\"";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_create", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
            echo "\"
  ";
        }
        // line 20
        echo "  >

  <div class=\"form-group\" ";
        // line 22
        if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
        if ($_lesson_) {
            echo "style=\"display:none;\"";
        }
        echo ">
    <div class=\"col-md-2 control-label\"><label>类型</label></div>
    <div class=\"col-md-9 controls\">
      <div class=\"radios\">
        ";
        // line 26
        if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->radios("type", $this->env->getExtension('topxia_web_twig')->getDict("lessonType"), _twig_default_filter($this->env->getExtension('topxia_html_twig')->fieldValue($_lesson_, "type"), "video"));
        echo "
      </div>
    </div>
  </div>

  <div class=\"form-group for-text-type for-video-type for-audio-type ";
        // line 31
        if (isset($context["storageSetting"])) { $_storageSetting_ = $context["storageSetting"]; } else { $_storageSetting_ = null; }
        if (($this->getAttribute($_storageSetting_, "upload_mode") == "cloud")) {
            echo "for-ppt-type";
        }
        echo "\" >
    <div class=\"col-md-2 control-label\"><label for=\"lesson-title-field\">标题</label></div>
    <div class=\"col-md-9 controls\">
      <div class=\"row\">
        <div class=\"col-md-10\">
          <input id=\"lesson-title-field\" class=\"form-control\" type=\"text\" name=\"title\" value=\"";
        // line 36
        if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->fieldValue($_lesson_, "title");
        echo "\" >
        </div>
        <div class=\"col-md-2\">
          <div class=\"checkbox\">
            <label><input type=\"checkbox\" name=\"free\" value=\"1\" ";
        // line 40
        if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
        if ($this->env->getExtension('topxia_html_twig')->fieldValue($_lesson_, "free")) {
            echo " checked=\"checked\" ";
        }
        echo "> 免费课时</label>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class=\"form-group for-text-type for-video-type for-audio-type ";
        // line 47
        if (isset($context["storageSetting"])) { $_storageSetting_ = $context["storageSetting"]; } else { $_storageSetting_ = null; }
        if (($this->getAttribute($_storageSetting_, "upload_mode") == "cloud")) {
            echo "for-ppt-type";
        }
        echo "\">
    <div class=\"col-md-2 control-label\"><label for=\"lesson-summary-field\">摘要</label></div>
    <div class=\"col-md-9 controls\"><textarea class=\"form-control\" id=\"lesson-summary-field\" name=\"summary\" >";
        // line 49
        if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->fieldValue($_lesson_, "summary");
        echo "</textarea>

    </div>
  </div>

  <div class=\"form-group for-text-type\">



    <div class=\"col-md-2 control-label\"><label for=\"lesson-content-field\" class=\"style1\">内容</label></div>
    <div class=\"col-md-9 controls\">
      
      ";
        // line 61
        if (isset($context["draft"])) { $_draft_ = $context["draft"]; } else { $_draft_ = null; }
        if (((array_key_exists("draft", $context)) ? (_twig_default_filter($_draft_, false)) : (false))) {
            // line 62
            echo "      <a id =\"see-draft-btn\" class=\"btn btn-link\" data-url=\"";
            echo $this->env->getExtension('routing')->getPath("course_draft_view");
            echo "\" >
        <small>
        您有一段自动保存内容，继续编辑请点击
        </small>
      </a>
      ";
        }
        // line 68
        echo "
      <textarea class=\"form-control\" id=\"lesson-content-field\" name=\"content\"  >";
        // line 69
        if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->fieldValue($_lesson_, "content");
        echo "</textarea>
    </div>
  </div>

  <div class=\"form-group for-video-type for-audio-type ";
        // line 73
        if (isset($context["storageSetting"])) { $_storageSetting_ = $context["storageSetting"]; } else { $_storageSetting_ = null; }
        if (($this->getAttribute($_storageSetting_, "upload_mode") == "cloud")) {
            echo "for-ppt-type";
        }
        echo "\">
    <div class=\"col-md-2 control-label for-video-type\"><label>视频</label></div>
    <div class=\"col-md-2 control-label for-audio-type\"><label>音频</label></div>
    <div class=\"col-md-2 control-label for-ppt-type\"><label>PPT</label></div>
    <div class=\"col-md-9 controls\">
      ";
        // line 78
        $this->env->loadTemplate("TopxiaWebBundle:CourseLessonManage:media-choose.html.twig")->display($context);
        // line 79
        echo "      <input id=\"lesson-media-field\" type=\"hidden\" name=\"media\" value=\"";
        if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->env->getExtension('topxia_html_twig')->fieldValue($_lesson_, "media")), "html", null, true);
        echo "\">
    </div>
  </div>

  <div class=\"form-group for-none-type ";
        // line 83
        if (isset($context["storageSetting"])) { $_storageSetting_ = $context["storageSetting"]; } else { $_storageSetting_ = null; }
        if (($this->getAttribute($_storageSetting_, "upload_mode") != "cloud")) {
            echo "for-ppt-type";
        }
        echo "\">
    <div class=\"col-md-offset-2 col-md-9\">
      <div class=\"alert alert-info\">
        <p>PPT文档需要EduSoho云转换后才能在浏览器中显示，请先开启EduSoho云。</p>
        <p>如尚未购买EduSoho云服务，请联系<a href=\"http://www.edusoho.com/service\" target=\"_blank\"><strong>EduSoho官方</strong></a>购买。</p>
        </div>
    </div>
  </div>

  <div class=\"form-group for-video-type for-audio-type\" id=\"lesson-length-form-group\">
      <div class=\"col-md-2 control-label for-video-type\"><label>视频时长</label></div>
      <div class=\"hide\"><label for=\"lesson-length-field\">视频时长或</label></div>
      <div class=\"col-md-2 control-label for-audio-type\"><label for=\"lesson-length-field\">音频时长</label></div>
    <div class=\"col-md-9 controls\">
      <input class=\"form-control width-input width-input-small\" id=\"lesson-minute-field\" type=\"text\" name=\"minute\" value=\"";
        // line 97
        if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->fieldValue($_lesson_, "minute");
        echo "\">分
      <input class=\"form-control width-input width-input-small\" id=\"lesson-second-field\" type=\"text\" name=\"second\" value=\"";
        // line 98
        if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->fieldValue($_lesson_, "second");
        echo "\">秒
      <div class=\"help-block\">时长必须为整数。</div>
    </div>
  </div>

  ";
        // line 103
        if (isset($context["features"])) { $_features_ = $context["features"]; } else { $_features_ = null; }
        if (twig_in_filter("lesson_credit", $_features_)) {
            // line 104
            echo "  <div class=\"form-group for-text-type for-video-type for-audio-type for-ppt-type\">
    <div class=\"col-md-2 control-label\"><label for=\"lesson-give-credit-field\">学分</label></div>
    <div class=\"col-md-9 controls\">
      <input class=\"form-control width-input width-input-small\" id=\"lesson-give-credit-field\" type=\"text\" name=\"giveCredit\" value=\"";
            // line 107
            if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
            echo twig_escape_filter($this->env, (($this->getAttribute($_lesson_, "giveCredit", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_lesson_, "giveCredit"), 0)) : (0)), "html", null, true);
            echo "\"> 分
      <div class=\"help-block\">学完此课时，可获得的学分</div>
    </div>
  </div>
  ";
        }
        // line 112
        echo "
  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->renderCsrfToken("site"), "html", null, true);
        echo "\">


</form>
 

<script>app.load('course-manage/lesson-modal')</script>


";
    }

    // line 123
    public function block_footer($context, array $blocks = array())
    {
        // line 124
        echo "    <button type=\"button\" class=\"btn btn-link\" data-dismiss=\"modal\" id=\"cancel-btn\">取消</button>
    <button id=\"course-lesson-btn\" data-submiting-text=\"正在提交\" type=\"submit\" class=\"btn btn-primary\" data-toggle=\"form-submit\" data-target=\"#course-lesson-form\">";
        // line 125
        if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
        if ($_lesson_) {
            echo "保存";
        } else {
            echo "添加";
        }
        echo "</button>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseLessonManage:lesson-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 125,  290 => 124,  287 => 123,  273 => 113,  270 => 112,  261 => 107,  256 => 104,  253 => 103,  244 => 98,  239 => 97,  219 => 83,  210 => 79,  208 => 78,  197 => 73,  189 => 69,  186 => 68,  176 => 62,  173 => 61,  157 => 49,  149 => 47,  136 => 40,  128 => 36,  117 => 31,  108 => 26,  98 => 22,  94 => 20,  87 => 18,  76 => 16,  73 => 15,  68 => 14,  58 => 13,  55 => 12,  52 => 11,  40 => 8,  37 => 7,  32 => 128,  29 => 4,  27 => 3,);
    }
}
