<?php

/* TopxiaWebBundle:Login:ajax.html.twig */
class __TwigTemplate_369d670bbe7c18bba52b86a0eb549f9d extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "登录";
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.name"), "html", null, true);
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
<form id=\"login-ajax-form\" class=\"form-vertical form-vertical-small\" method=\"post\" action=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\">

  <div class=\"alert alert-danger\" style=\"display:none;\"></div>

  <div class=\"form-group\">
    <div class=\"controls\">
      <input class=\"form-control\" type=\"text\" name=\"_username\" placeholder=\"Email地址 / 用户昵称\" data-display=\"Email地址 / 用户昵称\" />
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"controls\">
      <input class=\"form-control\" type=\"password\" name=\"_password\" placeholder=\"密码\" data-display=\"密码\" />
    </div>
  </div>

  <div class=\"clearfix\">
    <span class=\"checkbox mtm pull-right\">
      <label> <input type=\"checkbox\" name=\"_remember_me\" checked=\"checked\"> 记住密码 </label>
    </span>
    <button type=\"submit\" class=\"btn btn-primary btn-fat pull-left\">登录</button>
  </div>

  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->renderCsrfToken("site"), "html", null, true);
        echo "\">

</form>
<script>
\tapp.load('auth/login-ajax');
</script>

";
    }

    // line 39
    public function block_footer($context, array $blocks = array())
    {
        // line 40
        echo "<div class=\"tal fsn\">
  <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("password_reset");
        echo "\">找回密码</a>
  <span class=\"text-muted mhs\">|</span>
  <span class=\"text-muted\">还没有注册帐号？</span>
  <a href=\"";
        // line 44
        if (isset($context["_target_path"])) { $__target_path_ = $context["_target_path"]; } else { $__target_path_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("register", array("goto" => $__target_path_)), "html", null, true);
        echo "\">立即注册</a>
</div>

 ";
        // line 47
        $this->env->loadTemplate("TopxiaWebBundle:Login:social-logins-block.html.twig")->display($context);
        // line 48
        echo " 
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Login:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 48,  100 => 47,  93 => 44,  87 => 41,  84 => 40,  81 => 39,  69 => 30,  43 => 7,  40 => 6,  37 => 5,  30 => 3,);
    }
}
