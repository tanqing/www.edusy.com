<?php

/* TopxiaWebBundle:Settings:avatar.html.twig */
class __TwigTemplate_43e9a1e0deab4ff80a2d3bf250e6f612 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaWebBundle:Settings:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Settings:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $context["side_nav"] = "avatar";
        // line 5
        $context["script_controller"] = "settings/avatar";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "头像 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "  ";
        $this->env->loadTemplate("TopxiaWebBundle:Settings:avatar.html.twig", "931274175")->display(array_merge($context, array("class" => "panel-col")));
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Settings:avatar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 8,  40 => 7,  33 => 3,  28 => 5,  26 => 4,);
    }
}


/* TopxiaWebBundle:Settings:avatar.html.twig */
class __TwigTemplate_43e9a1e0deab4ff80a2d3bf250e6f612_931274175 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaWebBundle:Bootstrap:panel.html.twig");

        $this->blocks = array(
            'heading' => array($this, 'block_heading'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Bootstrap:panel.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_heading($context, array $blocks = array())
    {
        echo "头像";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "      
      ";
        // line 12
        if (isset($context["fromCourse"])) { $_fromCourse_ = $context["fromCourse"]; } else { $_fromCourse_ = null; }
        if ($_fromCourse_) {
            // line 13
            echo "      <div class=\"alert alert-info\">请设置自定义头像。</div>
      ";
        }
        // line 15
        echo "
      <form id=\"settings-avatar-form\" class=\"form-horizontal\" method=\"post\" enctype=\"multipart/form-data\">

        ";
        // line 18
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "flash_messages", array(), "method"), "html", null, true);
        echo "

        <div class=\"form-group\">
          <div class=\"col-md-2 control-label\"><b>当前头像</b></div>
          <div class=\"controls col-md-8 controls\">
          \t<img src=\"";
        // line 23
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getDefaultPath("avatar", $this->getAttribute($_user_, "largeAvatar"), ""), "html", null, true);
        echo "\">
          </div>
        </div>

        <div class=\"form-group\">
          <div class=\"col-md-2 control-label\">
          ";
        // line 29
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "avatar"), 'label', array("label" => "新头像"));
        echo "
          </div>
          <div class=\"controls col-md-8 controls\">
            ";
        // line 32
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "avatar"), 'widget', array("attr" => array("accept" => "image/gif,image/jpeg,image/png")));
        echo "
            <p class=\"help-block\">你可以上传JPG、GIF或PNG格式的文件，文件大小不能超过<strong>";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getUploadMaxFilesize(), "html", null, true);
        echo "</strong>。</p>
          </div>
        </div>

        <div class=\"form-group\">
          <div class=\"col-md-2 control-label\"></div>
          <div class=\"controls col-md-8 controls\">
            ";
        // line 40
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'rest');
        echo "
            <button type=\"submit\" class=\"btn btn-primary\">上传</button>
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->renderCsrfToken("site"), "html", null, true);
        echo "\">
          </div>
        </div>

        ";
        // line 46
        if (isset($context["partnerAvatar"])) { $_partnerAvatar_ = $context["partnerAvatar"]; } else { $_partnerAvatar_ = null; }
        if ($_partnerAvatar_) {
            // line 47
            echo "          <div class=\"form-group\">
            <div class=\"col-md-2 control-label\"><b>论坛头像</b></div>
            <div class=\"controls col-md-8 controls\">
              <img src=\"";
            // line 50
            if (isset($context["partnerAvatar"])) { $_partnerAvatar_ = $context["partnerAvatar"]; } else { $_partnerAvatar_ = null; }
            echo twig_escape_filter($this->env, $_partnerAvatar_, "html", null, true);
            echo "\" class=\"mrm\">
              <button class=\"btn btn-default use-partner-avatar\" type=\"button\" data-url=\"";
            // line 51
            echo $this->env->getExtension('routing')->getPath("settings_avatar_fetch_partner");
            echo "\" data-goto=\"";
            echo $this->env->getExtension('routing')->getPath("settings_avatar");
            echo "\">使用该头像</button>
            </div>
          </div>
        ";
        }
        // line 55
        echo "
      </form>

















    ";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Settings:avatar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 55,  181 => 51,  176 => 50,  171 => 47,  168 => 46,  161 => 42,  155 => 40,  145 => 33,  140 => 32,  133 => 29,  123 => 23,  114 => 18,  109 => 15,  105 => 13,  102 => 12,  99 => 11,  96 => 10,  90 => 9,  43 => 8,  40 => 7,  33 => 3,  28 => 5,  26 => 4,);
    }
}
