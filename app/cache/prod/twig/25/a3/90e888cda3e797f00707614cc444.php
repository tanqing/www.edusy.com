<?php

/* TopxiaAdminBundle:User:approval-header.html.twig */
class __TwigTemplate_25a390e888cda3e797f00707614cc444 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"page-header\"><h1>实名认证</h1>
</div>
<ul class=\"nav nav-tabs\">
  <li ";
        // line 4
        if (isset($context["submenu"])) { $_submenu_ = $context["submenu"]; } else { $_submenu_ = null; }
        if (($_submenu_ == "approving")) {
            echo " class=\"active\" ";
        }
        echo " >
    <a  href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("admin_approval_approving");
        echo "\">审核中</a>
  </li>
  <li ";
        // line 7
        if (isset($context["submenu"])) { $_submenu_ = $context["submenu"]; } else { $_submenu_ = null; }
        if (($_submenu_ == "approved")) {
            echo " class=\"active\" ";
        }
        echo " >
    <a  href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("admin_approval_approved");
        echo "\">审核成功</a>
  </li>
</ul>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:User:approval-header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 7,  31 => 5,  24 => 4,  19 => 1,  141 => 47,  137 => 45,  130 => 43,  125 => 40,  114 => 36,  108 => 34,  103 => 33,  97 => 32,  91 => 31,  85 => 30,  80 => 29,  74 => 28,  69 => 27,  54 => 14,  51 => 13,  48 => 12,  46 => 11,  43 => 8,  40 => 9,  33 => 3,  28 => 7,  26 => 5,);
    }
}
