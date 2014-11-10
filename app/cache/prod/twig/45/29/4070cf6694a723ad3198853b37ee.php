<?php

/* TopxiaAdminBundle:System:share.html.twig */
class __TwigTemplate_45294070cf6694a723ad3198853b37ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaAdminBundle:System:operation.layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'maincontent' => array($this, 'block_maincontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle:System:operation.layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["submenu"] = "share";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "分享设置 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_maincontent($context, array $blocks = array())
    {
        // line 6
        echo "<meta http-equiv=\"pragma\" content=\"no-cache\" />
  ";
        // line 7
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "flash_messages", array(), "method"), "html", null, true);
        echo "

  <div class=\"page-header\"><h1>分享设置</h1></div>

  ";
        // line 11
        $this->env->loadTemplate("TopxiaAdminBundle:System:default-share-content.html.twig")->display($context);
        // line 12
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:share.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 12,  52 => 11,  44 => 7,  41 => 6,  38 => 5,  31 => 2,  26 => 3,);
    }
}
