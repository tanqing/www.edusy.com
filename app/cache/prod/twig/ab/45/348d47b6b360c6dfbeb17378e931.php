<?php

/* TopxiaAdminBundle:System:user_set.layout.html.twig */
class __TwigTemplate_ab45348d47b6b360c6dfbeb17378e931 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaAdminBundle:System:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
            'maincontent' => array($this, 'block_maincontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle:System:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["menu"] = "user_set";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "全局设置 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "<ul class=\"nav nav-tabs mbl\">
  <li class=\"";
        // line 9
        if (isset($context["submenu"])) { $_submenu_ = $context["submenu"]; } else { $_submenu_ = null; }
        if (($_submenu_ == "auth")) {
            echo "active";
        }
        echo "\">
  \t<a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getUrl("admin_setting_auth");
        echo "\">注册设置
  \t</a>
  </li>\t
  <li class=\"";
        // line 13
        if (isset($context["submenu"])) { $_submenu_ = $context["submenu"]; } else { $_submenu_ = null; }
        if (($_submenu_ == "login_bind")) {
            echo "active";
        }
        echo "\">
  \t<a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getUrl("admin_setting_login_bind");
        echo "\">登录设置
  \t</a>
  </li>
  <li class=\"";
        // line 17
        if (isset($context["submenu"])) { $_submenu_ = $context["submenu"]; } else { $_submenu_ = null; }
        if (($_submenu_ == "user_center")) {
            echo "active";
        }
        echo "\">
    <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getUrl("admin_setting_user_center");
        echo "\">用户中心设置
    </a>
  </li>
  <li class=\"";
        // line 21
        if (isset($context["submenu"])) { $_submenu_ = $context["submenu"]; } else { $_submenu_ = null; }
        if (($_submenu_ == "user_fields")) {
            echo "active";
        }
        echo "\">
    <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getUrl("admin_setting_user_fields");
        echo "\">字段自定义
    </a>
  </li>

</ul>


  ";
        // line 29
        $this->displayBlock('maincontent', $context, $blocks);
    }

    public function block_maincontent($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:user_set.layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 29,  91 => 22,  84 => 21,  78 => 18,  71 => 17,  65 => 14,  58 => 13,  52 => 10,  45 => 9,  42 => 8,  39 => 7,  32 => 3,  27 => 5,  704 => 320,  688 => 308,  674 => 298,  650 => 285,  644 => 275,  631 => 266,  617 => 256,  603 => 246,  589 => 236,  571 => 220,  568 => 219,  565 => 218,  549 => 215,  545 => 213,  539 => 212,  536 => 211,  498 => 175,  495 => 174,  489 => 173,  486 => 172,  480 => 171,  453 => 168,  449 => 166,  444 => 165,  438 => 164,  434 => 163,  417 => 160,  413 => 158,  409 => 157,  392 => 154,  388 => 152,  384 => 151,  367 => 148,  363 => 146,  359 => 145,  342 => 142,  338 => 140,  334 => 139,  317 => 136,  313 => 134,  309 => 133,  292 => 130,  288 => 128,  284 => 127,  277 => 122,  273 => 121,  266 => 116,  262 => 115,  254 => 109,  250 => 108,  244 => 107,  241 => 106,  232 => 99,  226 => 98,  223 => 97,  217 => 96,  210 => 94,  205 => 93,  199 => 92,  195 => 91,  191 => 89,  187 => 88,  183 => 86,  179 => 85,  175 => 83,  171 => 82,  167 => 80,  163 => 79,  159 => 77,  155 => 76,  151 => 74,  147 => 73,  143 => 71,  139 => 70,  135 => 68,  131 => 67,  127 => 65,  123 => 64,  118 => 63,  95 => 51,  89 => 41,  76 => 32,  60 => 20,  48 => 12,  43 => 9,  40 => 8,  33 => 3,  28 => 6,  26 => 5,);
    }
}
