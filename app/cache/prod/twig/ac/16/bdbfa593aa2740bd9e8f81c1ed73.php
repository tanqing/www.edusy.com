<?php

/* TopxiaAdminBundle:CloudSetting:key.html.twig */
class __TwigTemplate_ac16bdbfa593aa2740bd9e8f81c1ed73 extends Twig_Template
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
        // line 7
        $context["script_controller"] = "setting/cloud-key";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "授权码设置 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_maincontent($context, array $blocks = array())
    {
        // line 10
        echo "
<div class=\"page-header\"><h1>授权码设置</h1></div>

";
        // line 13
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "flash_messages", array(), "method"), "html", null, true);
        echo "

<form class=\"form-horizontal\" id=\"cloud-setting-form\" method=\"post\" novalidate>

  <div class=\"form-group\">
    <label class=\"col-md-3 control-label\">AccessKey</label>
    <div class=\"col-md-6\">
      <p class=\"form-control-static\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("storage.cloud_access_key"), "html", null, true);
        echo "</p>
    </div>
  </div>

  <div class=\"form-group\">
    <label class=\"col-md-3 control-label\">SecretKey</label>
    <div class=\"col-md-6\">
      <p class=\"form-control-static\">
        ";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("storage.cloud_secret_key"), "html", null, true);
        echo "
      </p>
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-6 col-md-offset-3\">
      <a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("admin_setting_cloud_key_update");
        echo "\" class=\"btn btn-sm btn-default\">设置新的授权码</a>
      </div>
  </div>

  <div class=\"form-group\" id=\"loading-text\">
    <div class=\"col-md-6 col-md-offset-3\">
      <p class=\"text-warning\"><strong>正在读取授权信息，请稍等...</strong></p>
    </div>
  </div>

  <div id=\"key-license-info\" data-url=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("admin_setting_cloud_key_info");
        echo "\">
    
  </div>

  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:CloudSetting:key.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 49,  93 => 45,  80 => 35,  70 => 28,  59 => 20,  48 => 13,  43 => 10,  40 => 9,  33 => 3,  28 => 7,  26 => 5,);
    }
}
