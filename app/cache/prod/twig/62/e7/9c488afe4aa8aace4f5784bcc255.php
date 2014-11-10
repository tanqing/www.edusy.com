<?php

/* TopxiaWebBundle:Content:page-show.html.twig */
class __TwigTemplate_62e79c488afe4aa8aace4f5784bcc255 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaWebBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 7
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        $context["siteNav"] = ("page/" . (($this->getAttribute($_content_, "alias", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_content_, "alias"), $this->getAttribute($_content_, "id"))) : ($this->getAttribute($_content_, "id"))));
        // line 9
        $context["bodyClass"] = "contentpage";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_content_, "title"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 4
    public function block_keywords($context, array $blocks = array())
    {
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_content_, "title"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.name"), "html", null, true);
    }

    // line 5
    public function block_description($context, array $blocks = array())
    {
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($_content_, "body"), 100);
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "<div class=\"es-row-wrap container-gap\">
  <div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"page-header\"><h1>";
        // line 14
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_content_, "title"), "html", null, true);
        echo "</h1></div>
    </div>
  </div>

  <div class=\"row\">
    <div class=\"col-md-12\">
      ";
        // line 20
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        if ($this->getAttribute($_content_, "body")) {
            // line 21
            echo "      \t";
            if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
            echo $this->getAttribute($_content_, "body");
            echo "
      ";
        } else {
            // line 23
            echo "        <div class=\"empty\">当前页面尚未编辑内容，请在管理后台编辑。</div>
      ";
        }
        // line 25
        echo "    </div>
  </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Content:page-show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 25,  89 => 23,  82 => 21,  79 => 20,  69 => 14,  64 => 11,  61 => 10,  54 => 5,  45 => 4,  36 => 3,  31 => 9,  28 => 7,);
    }
}
