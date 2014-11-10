<?php

/* TopxiaAdminBundle:System:login-connect.html.twig */
class __TwigTemplate_3012c70b665f9e307f08a998b051779e extends Twig_Template
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
        $context["script_controller"] = "system/login_bind";
        // line 7
        $context["submenu"] = "login_bind";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "登录设置 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_maincontent($context, array $blocks = array())
    {
        // line 10
        echo "<div class=\"page-header\"><h1>登录设置</h1></div>

";
        // line 12
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "flash_messages", array(), "method"), "html", null, true);
        echo "

<form class=\"form-horizontal\" method=\"post\" id=\"login_bind-form\" novalidate>

  <fieldset>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >用户登录限制</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 22
        if (isset($context["loginConnect"])) { $_loginConnect_ = $context["loginConnect"]; } else { $_loginConnect_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->radios("login_limit", array(1 => "开启", 0 => "关闭"), $this->getAttribute($_loginConnect_, "login_limit"));
        echo "
      <p class=\"help-block\">开启后同一帐号只能在一处登录</p>
      </div>
    </div>
  </fieldset>
<br>

  <fieldset>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >第三方登录</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 35
        if (isset($context["loginConnect"])) { $_loginConnect_ = $context["loginConnect"]; } else { $_loginConnect_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->radios("enabled", array(1 => "开启", 0 => "关闭"), $this->getAttribute($_loginConnect_, "enabled"));
        echo "
      </div>
    </div>
  </fieldset>
<br>

  <fieldset>
    <legend>微博登录</legend>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
          <label >微博登录</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 48
        if (isset($context["loginConnect"])) { $_loginConnect_ = $context["loginConnect"]; } else { $_loginConnect_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->radios("weibo_enabled", array(1 => "开启", 0 => "关闭"), $this->getAttribute($_loginConnect_, "weibo_enabled"));
        echo "
        <div class=\"help-block\"><a href=\"http://open.weibo.com/authentication/\" target=\"_blank\">申请微博登录</a></div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"weibo_key\" >App Key</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"weibo_key\" name=\"weibo_key\" class=\"form-control\" value=\"";
        // line 58
        if (isset($context["loginConnect"])) { $_loginConnect_ = $context["loginConnect"]; } else { $_loginConnect_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_loginConnect_, "weibo_key"), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"weibo_secret\" >App Secret</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"weibo_secret\" name=\"weibo_secret\" class=\"form-control\" value=\"";
        // line 67
        if (isset($context["loginConnect"])) { $_loginConnect_ = $context["loginConnect"]; } else { $_loginConnect_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_loginConnect_, "weibo_secret"), "html", null, true);
        echo "\">
      </div>
    </div>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"\">登录时必须设置帐号和邮箱</label>
      </div>
        <div class=\"controls col-md-8 radios\">    
        ";
        // line 75
        if (isset($context["loginConnect"])) { $_loginConnect_ = $context["loginConnect"]; } else { $_loginConnect_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->radios("weibo_set_fill_account", array(1 => "开启", 0 => "关闭"), $this->getAttribute($_loginConnect_, "weibo_set_fill_account"));
        echo "
              <p class=\"help-block\">在微博官方审核通过您的接入申请以前，请不要开启此选项，否则审核将无法通过</p>
        </div>
    </div>
  </fieldset>

  <fieldset>
    <legend>QQ登录</legend>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >QQ登录</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 88
        if (isset($context["loginConnect"])) { $_loginConnect_ = $context["loginConnect"]; } else { $_loginConnect_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->radios("qq_enabled", array(1 => "开启", 0 => "关闭"), $this->getAttribute($_loginConnect_, "qq_enabled"));
        echo "
        <div class=\"help-block\"><a href=\"http://wiki.open.qq.com/wiki/%E3%80%90QQ%E7%99%BB%E5%BD%95%E3%80%91%E7%BD%91%E7%AB%99%E6%8E%A5%E5%85%A5#2._QQ.E7.99.BB.E5.BD.95\" target=\"_blank\">申请QQ登录</a></div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"qq_key\" >App ID</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"qq_key\" name=\"qq_key\" class=\"form-control\" value=\"";
        // line 98
        if (isset($context["loginConnect"])) { $_loginConnect_ = $context["loginConnect"]; } else { $_loginConnect_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_loginConnect_, "qq_key"), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"qq_secret\" >App Secret</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"qq_secret\" name=\"qq_secret\" class=\"form-control\" value=\"";
        // line 107
        if (isset($context["loginConnect"])) { $_loginConnect_ = $context["loginConnect"]; } else { $_loginConnect_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_loginConnect_, "qq_secret"), "html", null, true);
        echo "\">
      </div>
    </div>

     <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"\">登录时必须设置帐号和邮箱</label>
      </div>
        <div class=\"controls col-md-8 radios\">    
        ";
        // line 116
        if (isset($context["loginConnect"])) { $_loginConnect_ = $context["loginConnect"]; } else { $_loginConnect_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->radios("qq_set_fill_account", array(1 => "开启", 0 => "关闭"), $this->getAttribute($_loginConnect_, "qq_set_fill_account"));
        echo "
              <p class=\"help-block\">在QQ官方审核通过您的接入申请以前，请不要开启此选项，否则审核将无法通过</p>
        </div>
    </div>

  </fieldset>

  <fieldset>
    <legend>人人连接</legend>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >人人连接</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 130
        if (isset($context["loginConnect"])) { $_loginConnect_ = $context["loginConnect"]; } else { $_loginConnect_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->radios("renren_enabled", array(1 => "开启", 0 => "关闭"), $this->getAttribute($_loginConnect_, "renren_enabled"));
        echo "
        <div class=\"help-block\"><a href=\"http://wiki.dev.renren.com/wiki/WEB%E7%BD%91%E7%AB%99%E5%B8%90%E5%8F%B7%E7%99%BB%E5%BD%95%E5%85%A5%E9%97%A8%E6%95%99%E7%A8%8B\" target=\"_blank\">申请人人连接</a></div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"renren_key\" >App Key</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"renren_key\" name=\"renren_key\" class=\"form-control\" value=\"";
        // line 140
        if (isset($context["loginConnect"])) { $_loginConnect_ = $context["loginConnect"]; } else { $_loginConnect_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_loginConnect_, "renren_key"), "html", null, true);
        echo "\">
      </div>
    </div>
  
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"renren_secret\" >App Secret</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"renren_secret\" name=\"renren_secret\" class=\"form-control\" value=\"";
        // line 149
        if (isset($context["loginConnect"])) { $_loginConnect_ = $context["loginConnect"]; } else { $_loginConnect_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_loginConnect_, "renren_secret"), "html", null, true);
        echo "\">
      </div>
    </div>

     <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"\">登录时必须设置帐号和邮箱</label>
      </div>
        <div class=\"controls col-md-8 radios\">    
        ";
        // line 158
        if (isset($context["loginConnect"])) { $_loginConnect_ = $context["loginConnect"]; } else { $_loginConnect_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->radios("renren_set_fill_account", array(1 => "开启", 0 => "关闭"), $this->getAttribute($_loginConnect_, "renren_set_fill_account"));
        echo "
              <p class=\"help-block\">在人人官方审核通过您的接入申请以前，请不要开启此选项，否则审核将无法通过</p>
        </div>
    </div>

  </fieldset>

  <fieldset>
    <legend>登录接口验证代码</legend>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"verify_code\" >验证代码</label>
      </div>
      <div class=\"controls col-md-8\">
        <textarea id=\"verify_code\" name=\"verify_code\" class=\"form-control\" rows=\"5\">";
        // line 172
        if (isset($context["loginConnect"])) { $_loginConnect_ = $context["loginConnect"]; } else { $_loginConnect_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_loginConnect_, "verify_code"), "html", null, true);
        echo "</textarea>
        <div class=\"help-block\">在申请QQ登录等接口时，会要求验证您的网站域名。请把相关验证代码粘到此处，然后提交保存。</div>
      </div>
    </div>
  </fieldset>

  <div class=\"form-group\">
    <div class=\"controls col-md-offset-3 col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">提交</button>
    </div>
  </div>
  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:login-connect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 183,  267 => 172,  249 => 158,  236 => 149,  223 => 140,  209 => 130,  191 => 116,  178 => 107,  165 => 98,  151 => 88,  134 => 75,  122 => 67,  109 => 58,  95 => 48,  78 => 35,  61 => 22,  47 => 12,  43 => 10,  40 => 9,  33 => 3,  28 => 7,  26 => 5,);
    }
}
