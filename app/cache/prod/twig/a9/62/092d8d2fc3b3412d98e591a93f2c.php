<?php

/* TopxiaAdminBundle:CloudSetting:key-update.html.twig */
class __TwigTemplate_a962092d8d2fc3b3412d98e591a93f2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaAdminBundle:CloudSetting:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'maincontent' => array($this, 'block_maincontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle:CloudSetting:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["submenu"] = "key";
        // line 6
        $context["script_controller"] = "setting/cloud-key-update";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "云平台设置 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 8
    public function block_maincontent($context, array $blocks = array())
    {
        // line 9
        echo "
";
        // line 10
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "flash_messages", array(), "method"), "html", null, true);
        echo "

<form class=\"form-horizontal\" id=\"key-update-form\" method=\"post\" novalidate>

  <div class=\"form-group\">
    <label class=\"col-md-3 control-label\" for=\"access-key-field\">AccessKey</label>
    <div class=\"col-md-6 controls\">
      <input id=\"access-key-field\" class=\"form-control\" type=\"text\" name=\"accessKey\" value=\"";
        // line 17
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request", array(), "any", false, true), "request", array(), "any", false, true), "get", array(0 => "accessKey"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request", array(), "any", false, true), "request", array(), "any", false, true), "get", array(0 => "accessKey"), "method"), $this->env->getExtension('topxia_web_twig')->getSetting("storage.cloud_access_key", ""))) : ($this->env->getExtension('topxia_web_twig')->getSetting("storage.cloud_access_key", ""))), "html", null, true);
        echo "\">
      <p class=\"help-block\">在线升级EduSoho系统、购买EduSoho应用、使用EduSoho云服务，都需使用此Key。</p>
    </div>
  </div>

  <div class=\"form-group\">
    <label class=\"col-md-3 control-label\" for=\"secret-key-field\">SecretKey</label>
    <div class=\"col-md-6 controls\">
      <input id=\"secret-key-field\" class=\"form-control\" type=\"text\" name=\"secretKey\" value=\"";
        // line 25
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request", array(), "any", false, true), "request", array(), "any", false, true), "get", array(0 => "secretKey"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request", array(), "any", false, true), "request", array(), "any", false, true), "get", array(0 => "secretKey"), "method"), $this->env->getExtension('topxia_web_twig')->getSetting("storage.cloud_secret_key", ""))) : ($this->env->getExtension('topxia_web_twig')->getSetting("storage.cloud_secret_key", ""))), "html", null, true);
        echo "\">
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\"></div>
    <div class=\"controls col-md-6\">
      <button type=\"submit\" class=\"btn btn-primary save-btn\" data-loading-text=\"正在保存，请稍等...\">保存</button>

      ";
        // line 34
        if ((!$this->env->getExtension('topxia_web_twig')->getSetting("storage.cloud_key_applied"))) {
            // line 35
            echo "        <span class=\"pull-right\"><span class=\"text-info\">还没有授权码?</span> <a href=\"javascript:;\" id=\"key-apply-btn\" class=\"btn btn-sm btn-warning\" data-url=\"";
            echo $this->env->getExtension('routing')->getPath("admin_setting_cloud_key_apply");
            echo "\" data-goto-url=\"";
            echo $this->env->getExtension('routing')->getPath("admin_setting_cloud_key");
            echo "\"  data-loading-text=\"正在申请授权码，请稍等...\">申请授权码</a></span>
      ";
        }
        // line 37
        echo "
    </div>
  </div>

  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:CloudSetting:key-update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 41,  92 => 37,  84 => 35,  82 => 34,  69 => 25,  57 => 17,  46 => 10,  43 => 9,  40 => 8,  33 => 3,  28 => 6,  26 => 5,);
    }
}
