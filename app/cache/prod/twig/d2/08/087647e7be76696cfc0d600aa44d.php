<?php

/* TopxiaWebBundle:Login:index.html.twig */
class __TwigTemplate_d208087647e7be76696cfc0d600aa44d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaWebBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $context["script_controller"] = "auth/login";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "登录 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "<div class=\"row row-6\">
  <div class=\"col-md-6 col-md-offset-3\">

    <div class=\"panel panel-default panel-page\">
      <div class=\"panel-heading\"><h2>登录</h2></div>

      <form id=\"login-form\" class=\"form-vertical\" method=\"post\" action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\">

        ";
        // line 15
        if (isset($context["error"])) { $_error_ = $context["error"]; } else { $_error_ = null; }
        if ($_error_) {
            // line 16
            echo "          <div class=\"alert alert-danger\">";
            if (isset($context["error"])) { $_error_ = $context["error"]; } else { $_error_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($_error_, "message")), "html", null, true);
            echo "</div>
        ";
        }
        // line 18
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "flash_messages", array(), "method"), "html", null, true);
        echo "
        <div class=\"form-group\">
          <label class=\"control-label\" for=\"login_username\">帐号</label>
          <div class=\"controls\">
            <input class=\"form-control\" id=\"login_username\" type=\"text\" name=\"_username\" value=\"";
        // line 22
        if (isset($context["last_username"])) { $_last_username_ = $context["last_username"]; } else { $_last_username_ = null; }
        echo twig_escape_filter($this->env, $_last_username_, "html", null, true);
        echo "\" required />
            <div class=\"help-block\">请输入Email地址 / 用户昵称</div>
          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"control-label\" for=\"login_password\">密码</label>
          <div class=\"controls\">
            <input class=\"form-control\" id=\"login_password\" type=\"password\" name=\"_password\" required />
          </div>
        </div>

        <div class=\"form-group\">
          <div class=\"controls\">
            <span class=\"checkbox mtm pull-right\">
              <label> <input type=\"checkbox\" name=\"_remember_me\" checked=\"checked\"> 记住密码 </label>
            </span>
            <button type=\"submit\" class=\"btn btn-fat btn-primary btn-large\">登录</button>
          </div>
        </div>
        <input type=\"hidden\" name=\"_target_path\" value=\"";
        // line 41
        if (isset($context["_target_path"])) { $__target_path_ = $context["_target_path"]; } else { $__target_path_ = null; }
        echo twig_escape_filter($this->env, $__target_path_, "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->renderCsrfToken("site"), "html", null, true);
        echo "\">
      </form>

      <div class=\"ptl\">
          <a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("password_reset");
        echo "\">找回密码</a>
          <span class=\"text-muted mhs\">|</span>
          <span class=\"text-muted\">还没有注册帐号？</span>
          <a href=\"";
        // line 49
        if (isset($context["_target_path"])) { $__target_path_ = $context["_target_path"]; } else { $__target_path_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("register", array("goto" => $__target_path_)), "html", null, true);
        echo "\">立即注册</a>
      </div>

      ";
        // line 52
        $this->env->loadTemplate("TopxiaWebBundle:Login:social-logins-block.html.twig")->display($context);
        // line 53
        echo "    </div>

  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Login:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 53,  120 => 52,  113 => 49,  107 => 46,  100 => 42,  95 => 41,  72 => 22,  64 => 18,  57 => 16,  54 => 15,  49 => 13,  41 => 7,  38 => 6,  31 => 3,  26 => 4,);
    }
}
