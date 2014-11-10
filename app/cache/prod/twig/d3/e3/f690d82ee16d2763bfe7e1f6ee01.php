<?php

/* TopxiaWebBundle:Settings:password.html.twig */
class __TwigTemplate_d3e3f690d82ee16d2763bfe7e1f6ee01 extends Twig_Template
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
        // line 5
        $context["script_controller"] = "settings/password";
        // line 6
        $context["side_nav"] = "password";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "密码修改 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        // line 9
        echo "  ";
        $this->env->loadTemplate("TopxiaWebBundle:Settings:password.html.twig", "1308442563")->display(array_merge($context, array("class" => "panel-col")));
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Settings:password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 9,  40 => 8,  33 => 3,  28 => 6,  26 => 5,);
    }
}


/* TopxiaWebBundle:Settings:password.html.twig */
class __TwigTemplate_d3e3f690d82ee16d2763bfe7e1f6ee01_1308442563 extends Twig_Template
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

    // line 10
    public function block_heading($context, array $blocks = array())
    {
        echo "密码修改";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "      ";
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if ((!$this->getAttribute($this->getAttribute($_app_, "user"), "password"))) {
            // line 13
            echo "        <div class=\"alert alert-warning\">
          <p>当前帐号从第三方帐号直接登录时创建，尚未设置密码。</p>
          <p>为了帐号的安全，请通过邮箱找回密码的方式，重设密码！</p>
          <p><a href=\"";
            // line 16
            echo $this->env->getExtension('routing')->getPath("password_reset");
            echo "\" class=\"btn btn-primary\">现在就去重设密码！</a></p>
        </div>
      ";
        }
        // line 19
        echo "
      <form id=\"settings-password-form\" class=\"form-horizontal\" method=\"post\" ";
        // line 20
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if ((!$this->getAttribute($this->getAttribute($_app_, "user"), "password"))) {
            echo " style=\"display:none;\"";
        }
        echo ">

        ";
        // line 22
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "flash_messages", array(), "method"), "html", null, true);
        echo "
        
        <div class=\"form-group\">
          <div class=\"col-md-2 control-label\">";
        // line 25
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "currentPassword"), 'label', array("label" => "当前密码"));
        echo "</div>
          <div class=\"controls col-md-8 controls\">
            ";
        // line 27
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "currentPassword"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          </div>
        </div>

        <div class=\"form-group\">
          <div class=\"col-md-2 control-label\">";
        // line 32
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "newPassword"), 'label', array("label" => "新密码"));
        echo "</div>
          <div class=\"controls col-md-8 controls\">
            ";
        // line 34
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "newPassword"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          </div>
        </div>

        <div class=\"form-group\">
          <div class=\"col-md-2 control-label\">";
        // line 39
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "confirmPassword"), 'label', array("label" => "确认密码"));
        echo "</div>
          <div class=\"controls col-md-8 controls\">
            ";
        // line 41
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "confirmPassword"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          </div>
        </div>

        <div class=\"form-group\">
          <div class=\"col-md-2 control-label\"></div>
          <div class=\"controls col-md-8 controls\">
            ";
        // line 48
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'rest');
        echo "
            <button id=\"password-save-btn\" data-submiting-text=\"正在保存\" type=\"submit\" class=\"btn btn-primary\">提交</button>
          </div>
        </div>

        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->renderCsrfToken("site"), "html", null, true);
        echo "\">

      </form>
    ";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Settings:password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 53,  179 => 48,  168 => 41,  162 => 39,  153 => 34,  147 => 32,  138 => 27,  132 => 25,  125 => 22,  117 => 20,  114 => 19,  108 => 16,  103 => 13,  99 => 12,  96 => 11,  90 => 10,  43 => 9,  40 => 8,  33 => 3,  28 => 6,  26 => 5,);
    }
}
