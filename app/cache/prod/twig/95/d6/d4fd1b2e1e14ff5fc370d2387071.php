<?php

/* TopxiaAdminBundle:CloudSetting:layout.html.twig */
class __TwigTemplate_95d6d4fd1b2e1e14ff5fc370d2387071 extends Twig_Template
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
        $context["menu"] = "cloud";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "云平台设置 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "<ul class=\"nav nav-tabs mbl\">

  <li class=\"";
        // line 10
        if (isset($context["submenu"])) { $_submenu_ = $context["submenu"]; } else { $_submenu_ = null; }
        if (($_submenu_ == "key")) {
            echo "active";
        }
        echo "\">
    <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getUrl("admin_setting_cloud_key");
        echo "\">授权码设置
    </a>
  </li>

  <li class=\"";
        // line 15
        if (isset($context["submenu"])) { $_submenu_ = $context["submenu"]; } else { $_submenu_ = null; }
        if (($_submenu_ == "video")) {
            echo "active";
        }
        echo "\">
    <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getUrl("admin_setting_cloud_video");
        echo "\">云视频设置
    </a>
  </li>

</ul>

  ";
        // line 22
        $this->displayBlock('maincontent', $context, $blocks);
    }

    public function block_maincontent($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:CloudSetting:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 22,  67 => 16,  60 => 15,  53 => 11,  42 => 8,  39 => 7,  32 => 3,  27 => 5,  98 => 41,  92 => 37,  84 => 35,  82 => 34,  69 => 25,  57 => 17,  46 => 10,  43 => 9,  40 => 8,  33 => 3,  28 => 6,  26 => 5,);
    }
}
