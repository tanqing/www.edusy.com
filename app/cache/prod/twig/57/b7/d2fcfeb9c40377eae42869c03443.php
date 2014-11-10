<?php

/* TopxiaWebBundle::bootstrap-modal-layout.html.twig */
class __TwigTemplate_57b7d2fcfeb9c40377eae42869c03443 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["web_macro"] = $this->env->loadTemplate("TopxiaWebBundle::macro.html.twig");
        // line 2
        echo "<div class=\"modal-dialog ";
        if (isset($context["modal_class"])) { $_modal_class_ = $context["modal_class"]; } else { $_modal_class_ = null; }
        if (((array_key_exists("modal_class", $context)) ? (_twig_default_filter($_modal_class_, "")) : (""))) {
            echo " ";
            if (isset($context["modal_class"])) { $_modal_class_ = $context["modal_class"]; } else { $_modal_class_ = null; }
            echo twig_escape_filter($this->env, $_modal_class_, "html", null, true);
        }
        echo "\">
  <div class=\"modal-content\">
    <div class=\"modal-header\">
      <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
      <h4 class=\"modal-title\">";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</h4>
    </div>
    <div class=\"modal-body\">";
        // line 8
        $this->displayBlock('body', $context, $blocks);
        echo "</div>
    ";
        // line 9
        if (isset($context["hide_footer"])) { $_hide_footer_ = $context["hide_footer"]; } else { $_hide_footer_ = null; }
        if ((!((array_key_exists("hide_footer", $context)) ? (_twig_default_filter($_hide_footer_, false)) : (false)))) {
            // line 10
            echo "      <div class=\"modal-footer\">";
            $this->displayBlock('footer', $context, $blocks);
            echo "</div>
    ";
        }
        // line 12
        echo "  </div>
</div>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
    }

    // line 10
    public function block_footer($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle::bootstrap-modal-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 10,  65 => 8,  60 => 6,  49 => 10,  46 => 9,  42 => 8,  24 => 2,  22 => 1,  293 => 125,  290 => 124,  287 => 123,  273 => 113,  270 => 112,  261 => 107,  256 => 104,  253 => 103,  244 => 98,  239 => 97,  219 => 83,  210 => 79,  208 => 78,  197 => 73,  189 => 69,  186 => 68,  176 => 62,  173 => 61,  157 => 49,  149 => 47,  136 => 40,  128 => 36,  117 => 31,  108 => 26,  98 => 22,  94 => 20,  87 => 18,  76 => 16,  73 => 15,  68 => 14,  58 => 13,  55 => 12,  52 => 11,  40 => 8,  37 => 6,  32 => 128,  29 => 4,  27 => 3,);
    }
}
