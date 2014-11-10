<?php

/* TopxiaAdminBundle:System:payment-set.layout.html.twig */
class __TwigTemplate_68cd7fce3a0327f1595021ef5c78d576 extends Twig_Template
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
        $context["menu"] = "paymentGlobal";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "支付设置 - ";
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
        if (($_submenu_ == "payment")) {
            echo "active";
        }
        echo "\">
  \t<a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getUrl("admin_setting_payment");
        echo "\">支付方式
  \t</a>
  </li>
  <li class=\"";
        // line 13
        if (isset($context["submenu"])) { $_submenu_ = $context["submenu"]; } else { $_submenu_ = null; }
        if (($_submenu_ == "refund")) {
            echo "active";
        }
        echo "\">
    <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getUrl("admin_setting_refund");
        echo "\">退款设置
    </a>
  </li>

</ul>


  ";
        // line 21
        $this->displayBlock('maincontent', $context, $blocks);
    }

    public function block_maincontent($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:payment-set.layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 21,  65 => 14,  58 => 13,  52 => 10,  45 => 9,  42 => 8,  39 => 7,  32 => 3,  27 => 5,  170 => 103,  151 => 88,  138 => 79,  125 => 70,  104 => 53,  91 => 44,  74 => 31,  61 => 22,  48 => 13,  43 => 10,  40 => 9,  33 => 3,  28 => 7,  26 => 5,);
    }
}
