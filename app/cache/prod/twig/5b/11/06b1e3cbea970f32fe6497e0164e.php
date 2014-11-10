<?php

/* TopxiaWebBundle:Settings:email.html.twig */
class __TwigTemplate_5b1106b1e3cbea970f32fe6497e0164e extends Twig_Template
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
        $context["script_controller"] = "settings/email";
        // line 7
        $context["side_nav"] = "email";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "邮箱设置 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_main($context, array $blocks = array())
    {
        // line 10
        echo "  ";
        $this->env->loadTemplate("TopxiaWebBundle:Settings:email.html.twig", "391438355")->display(array_merge($context, array("class" => "panel-col")));
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Settings:email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 10,  40 => 9,  33 => 3,  28 => 7,  26 => 5,);
    }
}


/* TopxiaWebBundle:Settings:email.html.twig */
class __TwigTemplate_5b1106b1e3cbea970f32fe6497e0164e_391438355 extends Twig_Template
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

    // line 11
    public function block_heading($context, array $blocks = array())
    {
        echo "邮箱设置";
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        if (isset($context["mailer"])) { $_mailer_ = $context["mailer"]; } else { $_mailer_ = null; }
        if (($this->getAttribute($_mailer_, "enabled") == 1)) {
            // line 14
            echo "      <form id=\"setting-email-form\" class=\"form-horizontal\" method=\"post\" >
        ";
            // line 15
            if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "flash_messages", array(), "method"), "html", null, true);
            echo "

        <div class=\"form-group\">
          <div class=\"col-md-2 control-label\"><label>当前登录邮箱</label></div>
          <div class=\"col-md-8 controls\">
            <span class=\"control-text\">
              ";
            // line 21
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "user"), "email"), "html", null, true);
            echo "
              ";
            // line 22
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            if ($this->getAttribute($this->getAttribute($_app_, "user"), "emailVerified")) {
                // line 23
                echo "                <span class=\"text-success\">(已验证)</span>
              ";
            } else {
                // line 25
                echo "                <p class=\"help-block mtm\">
                  邮箱地址尚未验证，
                  <a id=\"send-verify-email\" class=\"btn btn-info btn-sm\" href=\"javascript:;\" data-url=\"";
                // line 27
                echo $this->env->getExtension('routing')->getPath("settings_email_verify");
                echo "\">去验证</a>
                </p>
              ";
            }
            // line 30
            echo "            </span>
          </div>
        </div>

        <div class=\"form-group\">
          <div class=\"col-md-2 control-label\">";
            // line 35
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "password"), 'label', array("label" => "网站登录密码"));
            echo "</div>
          <div class=\"col-md-8 controls\">
            ";
            // line 37
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "password"), 'widget', array("attr" => array("class" => "form-control")));
            echo "
            <p class=\"help-block\">设置新的登录邮箱，需要校验当前的网站登录密码</p>
          </div>
        </div>

        <div class=\"form-group\">
          <div class=\"col-md-2 control-label\">";
            // line 43
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "email"), 'label', array("label" => "新登录邮箱"));
            echo "</div>
          <div class=\"col-md-8 controls\">
            ";
            // line 45
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "email"), 'widget', array("attr" => array("class" => "form-control")));
            echo "
          </div>
        </div>

        <div class=\"form-group\">
          <div class=\"col-md-2 control-label\"></div>
          <div class=\"col-md-8 controls\">
            ";
            // line 52
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'rest');
            echo "
            <button id=\"email-save-btn\" data-submiting-text=\"正在提交\" type=\"submit\" class=\"btn btn-primary\">提交</button>
          </div>
        </div>

        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->renderCsrfToken("site"), "html", null, true);
            echo "\">
      </form>
    ";
        } else {
            // line 60
            echo "      <div class=\"alert alert-danger\">管理员尚未设置邮件服务器，不能更改邮箱地址。</div>
    ";
        }
        // line 62
        echo "    ";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Settings:email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 62,  193 => 60,  187 => 57,  178 => 52,  167 => 45,  161 => 43,  151 => 37,  145 => 35,  138 => 30,  132 => 27,  128 => 25,  124 => 23,  121 => 22,  116 => 21,  106 => 15,  103 => 14,  99 => 13,  96 => 12,  90 => 11,  43 => 10,  40 => 9,  33 => 3,  28 => 7,  26 => 5,);
    }
}
