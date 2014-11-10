<?php

/* TopxiaWebBundle:Article:layout.html.twig */
class __TwigTemplate_013ee2542a0570b68fb7ab9a8ef00847 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaWebBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'article_header' => array($this, 'block_article_header'),
            'article_main' => array($this, 'block_article_main'),
            'article_side' => array($this, 'block_article_side'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 10
        $context["bodyClass"] = "articlepage";
        // line 12
        $context["script_controller"] = "index";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        if (isset($context["setting"])) { $_setting_ = $context["setting"]; } else { $_setting_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_setting_, "name"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiaweb/css/article.css"), "html", null, true);
        echo "\" />
";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "
  <div class=\"es-row-wrap container-gap\">

    ";
        // line 18
        $this->displayBlock('article_header', $context, $blocks);
        // line 25
        echo "
    <div class=\"row article-row\">
      <div class=\"col-md-8\">
        ";
        // line 28
        $this->displayBlock('article_main', $context, $blocks);
        // line 31
        echo "      </div>
      <div class=\"col-md-4\">
        ";
        // line 33
        $this->displayBlock('article_side', $context, $blocks);
        // line 34
        echo "      </div>
    </div>
  </div>

";
    }

    // line 18
    public function block_article_header($context, array $blocks = array())
    {
        // line 19
        echo "      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"page-header\"><h1>";
        // line 21
        if (isset($context["setting"])) { $_setting_ = $context["setting"]; } else { $_setting_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_setting_, "name"), "html", null, true);
        echo "</h1></div>
        </div>
      </div>
    ";
    }

    // line 28
    public function block_article_main($context, array $blocks = array())
    {
        // line 29
        echo "          
        ";
    }

    // line 33
    public function block_article_side($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Article:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 33,  110 => 29,  107 => 28,  98 => 21,  94 => 19,  91 => 18,  83 => 34,  81 => 33,  77 => 31,  75 => 28,  70 => 25,  68 => 18,  63 => 15,  60 => 14,  54 => 7,  49 => 6,  46 => 5,  37 => 3,  30 => 10,  209 => 56,  204 => 55,  201 => 54,  191 => 50,  187 => 48,  183 => 46,  172 => 42,  164 => 41,  161 => 40,  154 => 37,  148 => 36,  145 => 35,  139 => 33,  136 => 32,  130 => 31,  119 => 28,  114 => 27,  109 => 26,  104 => 23,  99 => 22,  96 => 21,  93 => 20,  90 => 19,  86 => 17,  64 => 15,  59 => 14,  53 => 12,  50 => 11,  47 => 10,  41 => 8,  38 => 7,  35 => 6,  32 => 12,  29 => 4,);
    }
}
