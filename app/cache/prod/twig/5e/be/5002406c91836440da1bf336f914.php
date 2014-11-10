<?php

/* TopxiaAdminBundle:System:default.html.twig */
class __TwigTemplate_5ebe5002406c91836440da1bf336f914 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaAdminBundle:System:operation.layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'maincontent' => array($this, 'block_maincontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle:System:operation.layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["submenu"] = "default";
        // line 4
        $context["script_controller"] = "setting/default";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "系统默认设置 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 6
    public function block_maincontent($context, array $blocks = array())
    {
        // line 7
        echo "<meta http-equiv=\"pragma\" content=\"no-cache\" />
  ";
        // line 8
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "flash_messages", array(), "method"), "html", null, true);
        echo "

  <div class=\"page-header\"><h1>系统默认设置</h1></div>

  <fieldset>
    <legend>用户默认头像</legend>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\"></div>
      <div class=\"controls col-md-8 radios\" id=\"default-avatar\" >
        ";
        // line 17
        if (isset($context["defaultSetting"])) { $_defaultSetting_ = $context["defaultSetting"]; } else { $_defaultSetting_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->radios("avatar", array(1 => "自定义默认头像", 0 => "系统默认头像"), $this->getAttribute($_defaultSetting_, "defaultAvatar"));
        echo "
        <p>网校内未上传头像的用户，都会显示该默认头像。推荐尺寸（120*120）</p>    
        ";
        // line 19
        $this->env->loadTemplate("TopxiaAdminBundle:System:default-avatar.html.twig")->display($context);
        // line 20
        echo "      </div>
    </div>
  </fieldset>

  ";
        // line 24
        if ($this->env->getExtension('topxia_web_twig')->getSetting("copyright.owned")) {
            // line 25
            echo "  <fieldset>
    <legend>课程默认图片</legend>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\"></div>
      <div class=\"controls col-md-8 radios\" id=\"defaultCoursePicture\">
        ";
            // line 30
            if (isset($context["defaultSetting"])) { $_defaultSetting_ = $context["defaultSetting"]; } else { $_defaultSetting_ = null; }
            echo $this->env->getExtension('topxia_html_twig')->radios("coursePicture", array(1 => "自定义默认课程图片", 0 => "系统默认课程图片"), $this->getAttribute($_defaultSetting_, "defaultCoursePicture"));
            echo "
        <p>网校内未上传图片的课程，都会显示该图片。推荐尺寸（360*180）</p>
        ";
            // line 32
            $this->env->loadTemplate("TopxiaAdminBundle:System:default-course-picture.html.twig")->display($context);
            // line 33
            echo "      </div>
    </div>
  </fieldset>
  ";
        }
        // line 37
        echo "
  <div class=\"page-header\" style=\"display:none;\"><h1>分享内容</h1></div>
<legend></legend>
 <form class=\"form-horizontal\" id=\"cloud-setting-form\" method=\"post\" novalidate>
  <input type=\"hidden\" name=\"defaultAvatar\" value=\"";
        // line 41
        if (isset($context["defaultSetting"])) { $_defaultSetting_ = $context["defaultSetting"]; } else { $_defaultSetting_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_defaultSetting_, "defaultAvatar"), "html", null, true);
        echo "\">
  <input type=\"hidden\" name=\"defaultCoursePicture\" value=\"";
        // line 42
        if (isset($context["defaultSetting"])) { $_defaultSetting_ = $context["defaultSetting"]; } else { $_defaultSetting_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_defaultSetting_, "defaultCoursePicture"), "html", null, true);
        echo "\">
  <div class=\"form-group\">
    <div class=\"controls col-md-offset-3 col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">提交</button>
    </div>
  </div>
  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 48,  107 => 42,  102 => 41,  96 => 37,  90 => 33,  88 => 32,  82 => 30,  75 => 25,  73 => 24,  67 => 20,  65 => 19,  59 => 17,  46 => 8,  43 => 7,  40 => 6,  33 => 2,  28 => 4,  26 => 3,);
    }
}
