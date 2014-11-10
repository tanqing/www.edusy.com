<?php

/* TopxiaAdminBundle:System:user-center.html.twig */
class __TwigTemplate_38e9560f84812c5883fd07facbf17ce0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaAdminBundle:System:user_set.layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'maincontent' => array($this, 'block_maincontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle:System:user_set.layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["script_controller"] = "setting/user-center";
        // line 6
        $context["submenu"] = "user_center";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "用户中心设置 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 8
    public function block_maincontent($context, array $blocks = array())
    {
        // line 9
        echo "
<div class=\"page-header\">
  ";
        // line 11
        if (isset($context["setting"])) { $_setting_ = $context["setting"]; } else { $_setting_ = null; }
        if (($this->getAttribute($_setting_, "mode") != "default")) {
            echo "<a href=\"";
            echo $this->env->getExtension('routing')->getPath("admin_setting_admin_sync");
            echo "\" class=\"pull-right btn btn-link\">管理员帐号同步</a>";
        }
        // line 12
        echo "  <h1>用户中心设置</h1>
</div>

";
        // line 15
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "flash_messages", array(), "method"), "html", null, true);
        echo "

<form class=\"form-horizontal\" method=\"post\" novalidate>
  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\">
      <label >用户中心</label>
    </div>
    <div class=\"controls col-md-8 radios mode-radios\">
      ";
        // line 23
        if (isset($context["setting"])) { $_setting_ = $context["setting"]; } else { $_setting_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->radios("mode", array("default" => "无", "discuz" => "Discuz (Ucenter)", "phpwind" => "phpwind (WindID)"), $this->getAttribute($_setting_, "mode"));
        echo "
      <div class=\"help-block\">支持phpwind 9系列，Discuz X2.5/X3.0/X3.1的用户中心</div>
    </div>
  </div>

  <div class=\"row form-group with-discuz\" style=\"display:none;\">
    <div class=\"col-md-3 control-label\"><label>Ucenter配置</label></div>
    <div class=\"controls col-md-8\">
      <textarea class=\"form-control\" name=\"discuz_config\" rows=\"10\">";
        // line 31
        if (isset($context["discuzConfig"])) { $_discuzConfig_ = $context["discuzConfig"]; } else { $_discuzConfig_ = null; }
        echo twig_escape_filter($this->env, $_discuzConfig_, "html", null, true);
        echo "</textarea>
      <div class=\"help-block\">从Ucenter复制配置，粘帖到此处。注意：请不要去除头部的 &lt;?php。 <a href=\"http://demo.edusoho.com/course/125\" target=\"_blank\">如何配置？</a></div>
    </div>
  </div>

  <div class=\"row form-group with-phpwind\" style=\"display:none;\">
    <div class=\"col-md-3 control-label\"><label>WindId配置</label></div>
    <div class=\"controls col-md-8\">
      <textarea class=\"form-control\" name=\"phpwind_config\" rows=\"10\">";
        // line 39
        if (isset($context["phpwindConfig"])) { $_phpwindConfig_ = $context["phpwindConfig"]; } else { $_phpwindConfig_ = null; }
        echo twig_escape_filter($this->env, $_phpwindConfig_, "html", null, true);
        echo "</textarea>
      <div class=\"help-block\">如使用phpwind (WindID)的用户中心，请填写此项配置。<a href=\"http://demo.edusoho.com/course/125\" target=\"_blank\">如何配置？</a></div>
    </div>
  </div>

    <div class=\"form-group with-phpwind with-discuz\">
    <div class=\"col-md-3 control-label\">
      <label for=\"email_filter\">过滤邮箱地址清单</label>
    </div>
    <div class=\"controls col-md-8\">
      <textarea id=\"email_filter\" name=\"email_filter\" class=\"form-control\" rows=\"5\">";
        // line 49
        if (isset($context["setting"])) { $_setting_ = $context["setting"]; } else { $_setting_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_setting_, "email_filter"), "html", null, true);
        echo "</textarea>
      <div class=\"help-block\">
        ";
        // line 53
        echo "
        <div>每行输入一个邮箱地址。名单中的邮箱地址如果出现在第三方登录的过程中，则会给该用户随机生成一个邮箱</div>
        ";
        echo "
      </div>
    </div>
  </div>
  
  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label>用户修改昵称</label>
    </div>
    <div class=\"controls col-md-8 radios\">
      ";
        // line 63
        if (isset($context["setting"])) { $_setting_ = $context["setting"]; } else { $_setting_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->radios("nickname_enabled", array(1 => "开启", 0 => "关闭"), $this->getAttribute($_setting_, "nickname_enabled"));
        echo "
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label>头像设置提醒</label>
    </div>
    <div class=\"controls col-md-8 radios\">
      ";
        // line 72
        if (isset($context["setting"])) { $_setting_ = $context["setting"]; } else { $_setting_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->radios("avatar_alert", array("none" => "从不", "in_user_center" => "每次进入\"我的课程\"时", "when_join_course" => "加入免费课程时强制要求"), $this->getAttribute($_setting_, "avatar_alert"));
        echo "
    </div>
  </div>



  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\"></div>
    <div class=\"controls col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">提交</button>
    </div>
  </div>




  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:user-center.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 88,  143 => 72,  130 => 63,  115 => 53,  109 => 49,  95 => 39,  83 => 31,  71 => 23,  59 => 15,  54 => 12,  47 => 11,  43 => 9,  40 => 8,  33 => 3,  28 => 6,  26 => 5,);
    }
}
