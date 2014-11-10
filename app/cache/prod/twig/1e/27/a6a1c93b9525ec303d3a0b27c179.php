<?php

/* TopxiaWebBundle:Settings:layout.html.twig */
class __TwigTemplate_1e27a6a1c93b9525ec303d3a0b27c179 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaWebBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'side' => array($this, 'block_side'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "帐号设置 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"row\">
  <div class=\"col-md-3\">
    ";
        // line 8
        $this->displayBlock('side', $context, $blocks);
        // line 36
        echo "  </div>
  <div class=\"col-md-9\">
    ";
        // line 38
        $this->displayBlock('main', $context, $blocks);
        // line 39
        echo "  </div>
</div>
";
    }

    // line 8
    public function block_side($context, array $blocks = array())
    {
        // line 9
        echo "      <div class=\"panel panel-default\">
        <div class=\"panel-body\">
          <div class=\"list-group-block\">
            <div class=\"list-group-panel\">
              <div class=\"list-group-heading\">帐号设置</div>
            <ul class=\"list-group\">
              ";
        // line 15
        if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
        $context["side_nav"] = ((array_key_exists("side_nav", $context)) ? (_twig_default_filter($_side_nav_, null)) : (null));
        // line 16
        echo "              
              <a class=\"list-group-item ";
        // line 17
        if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
        if (($_side_nav_ == "profile")) {
            echo "active";
        }
        echo "\" href=\"";
        echo $this->env->getExtension('routing')->getPath("settings");
        echo "\"><i class=\"glyphicon glyphicon-user\"></i> 基础信息</a>
              
              <a class=\"list-group-item ";
        // line 19
        if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
        if (($_side_nav_ == "avatar")) {
            echo "active";
        }
        echo "\" href=\"";
        echo $this->env->getExtension('routing')->getPath("settings_avatar");
        echo "\"><i class=\"glyphicon glyphicon-picture\"></i> 头像设置</a>
              
              <a class=\"list-group-item ";
        // line 21
        if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
        if (($_side_nav_ == "password")) {
            echo "active";
        }
        echo "\" href=\"";
        echo $this->env->getExtension('routing')->getPath("settings_password");
        echo "\"><i class=\"glyphicon glyphicon-lock\"></i> 密码修改</a>
              
              <a class=\"list-group-item ";
        // line 23
        if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
        if (($_side_nav_ == "email")) {
            echo "active";
        }
        echo "\" href=\"";
        echo $this->env->getExtension('routing')->getPath("settings_email");
        echo "\"><i class=\"glyphicon glyphicon-envelope\"></i> 邮箱设置</a>

              ";
        // line 25
        if ((($this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("login_bind", array()), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("login_bind", array()), "enabled"), false)) : (false))) {
            // line 26
            echo "                <a class=\"list-group-item ";
            if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
            if (($_side_nav_ == "binds")) {
                echo "active";
            }
            echo "\" href=\"";
            echo $this->env->getExtension('routing')->getPath("settings_binds");
            echo "\"><i class=\"glyphicon glyphicon-circle-arrow-right\"></i> 第三方登录</a>
              ";
        }
        // line 28
        echo "
            </ul>
            </div>
          </div><!-- /list-group-block -->
        </div>

      </div>
    ";
    }

    // line 38
    public function block_main($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Settings:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 38,  129 => 28,  118 => 26,  116 => 25,  106 => 23,  96 => 21,  86 => 19,  76 => 17,  73 => 16,  70 => 15,  62 => 9,  59 => 8,  53 => 39,  51 => 38,  47 => 36,  45 => 8,  41 => 6,  38 => 5,  31 => 3,  546 => 243,  537 => 236,  534 => 235,  528 => 234,  512 => 229,  503 => 227,  500 => 226,  477 => 221,  468 => 219,  465 => 218,  446 => 213,  437 => 211,  434 => 210,  415 => 205,  406 => 203,  403 => 202,  384 => 197,  375 => 195,  372 => 194,  368 => 193,  363 => 192,  360 => 191,  357 => 190,  346 => 183,  334 => 175,  322 => 167,  308 => 157,  297 => 150,  285 => 142,  273 => 134,  261 => 126,  249 => 118,  243 => 114,  234 => 94,  222 => 86,  207 => 77,  199 => 75,  191 => 69,  184 => 65,  181 => 64,  174 => 60,  171 => 59,  165 => 55,  159 => 51,  156 => 50,  145 => 43,  139 => 39,  125 => 25,  115 => 19,  111 => 17,  107 => 15,  104 => 14,  101 => 13,  98 => 12,  92 => 11,  46 => 10,  43 => 9,  40 => 8,  33 => 3,  28 => 6,  26 => 5,);
    }
}
