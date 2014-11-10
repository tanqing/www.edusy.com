<?php

/* TopxiaAdminBundle:System:payment.html.twig */
class __TwigTemplate_92cf4e523634c878fb6e2ef9572227f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaAdminBundle:System:payment-set.layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'maincontent' => array($this, 'block_maincontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle:System:payment-set.layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["script_controller"] = "system/payment";
        // line 7
        $context["submenu"] = "payment";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "支付方式 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_maincontent($context, array $blocks = array())
    {
        // line 10
        echo "
<div class=\"page-header\"><h1>支付方式</h1></div>

";
        // line 13
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "flash_messages", array(), "method"), "html", null, true);
        echo "

<form class=\"form-horizontal\" method=\"post\" id=\"payment-form\" novalidate >
  
  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label >支付功能</label>
    </div>
    <div class=\"controls col-md-8 radios\">
      ";
        // line 22
        if (isset($context["payment"])) { $_payment_ = $context["payment"]; } else { $_payment_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->radios("enabled", array(1 => "开启", 0 => "关闭"), $this->getAttribute($_payment_, "enabled"));
        echo "
    </div>
  </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"disabled_message\">支付关闭时的提示信息</label>
      </div>
      <div class=\"controls col-md-8\">
        <textarea id=\"disabled_message\" name=\"disabled_message\" class=\"form-control\">";
        // line 31
        if (isset($context["payment"])) { $_payment_ = $context["payment"]; } else { $_payment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_payment_, "disabled_message"), "html", null, true);
        echo "</textarea>
        <div class=\"help-block\">提示信息支持HTML标签。</div>
      </div>
    </div>


  <fieldset>
    <legend>支付宝</legend>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label>接口状态</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 44
        if (isset($context["payment"])) { $_payment_ = $context["payment"]; } else { $_payment_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->radios("alipay_enabled", array(1 => "开启", 0 => "关闭"), $this->getAttribute($_payment_, "alipay_enabled"));
        echo "
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"alipay_key\">接口类型</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 53
        if (isset($context["payment"])) { $_payment_ = $context["payment"]; } else { $_payment_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->radios("alipay_type", array("direct" => "立即到账接口", "dualfun" => "标准双接口"), $this->getAttribute($_payment_, "alipay_type"));
        echo "
        <div class=\"help-block\">
          由于支付宝政策限制，\"立即到账接口\"只能以企业的名义申请，个人用户请申请“标准双接口”。
          <a href=\"http://www.edusoho.com/intro/96#payment\" target=\"_blank\">如何申请？</a>
          <br>
          \"立即到账接口\"如需在移动客户端使用，还需开通<a href=\"https://b.alipay.com/order/productDetail.htm?productId=2013080604609688\" target=\"blank\">手机网站支付</a>


        </div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"alipay_key\">PID</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"alipay_key\" name=\"alipay_key\" class=\"form-control\" value=\"";
        // line 70
        if (isset($context["payment"])) { $_payment_ = $context["payment"]; } else { $_payment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_payment_, "alipay_key"), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"alipay_key\">Key</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"alipay_secret\" name=\"alipay_secret\" class=\"form-control\" value=\"";
        // line 79
        if (isset($context["payment"])) { $_payment_ = $context["payment"]; } else { $_payment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_payment_, "alipay_secret"), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"alipay_key\">支付宝账户</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"alipay_account\" name=\"alipay_account\" class=\"form-control\" value=\"";
        // line 88
        if (isset($context["payment"])) { $_payment_ = $context["payment"]; } else { $_payment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_payment_, "alipay_account"), "html", null, true);
        echo "\">
        <div class=\"help-block\">如需开启移动客户端支付，需填写支付宝账户。</div>
      </div>
    </div>

  </fieldset>

  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\"></div>
    <div class=\"controls col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">提交</button>
    </div>
  </div>


  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:payment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 103,  151 => 88,  138 => 79,  125 => 70,  104 => 53,  91 => 44,  74 => 31,  61 => 22,  48 => 13,  43 => 10,  40 => 9,  33 => 3,  28 => 7,  26 => 5,);
    }
}
