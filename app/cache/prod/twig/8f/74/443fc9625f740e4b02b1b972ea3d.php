<?php

/* TopxiaWebBundle:Article:nav.html.twig */
class __TwigTemplate_8f74443fc9625f740e4b02b1b972ea3d extends Twig_Template
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
        if (isset($context["categoryCode"])) { $_categoryCode_ = $context["categoryCode"]; } else { $_categoryCode_ = null; }
        $context["currentNavCategory"] = ((array_key_exists("categoryCode", $context)) ? (_twig_default_filter($_categoryCode_, null)) : (null));
        // line 2
        if (isset($context["rootCategory"])) { $_rootCategory_ = $context["rootCategory"]; } else { $_rootCategory_ = null; }
        $context["rootCategory"] = (($this->getAttribute($_rootCategory_, "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_rootCategory_, "code"), null)) : (null));
        // line 3
        echo "<ul class=\"nav nav-pills article-nav\">
  <li ";
        // line 4
        if (isset($context["currentNavCategory"])) { $_currentNavCategory_ = $context["currentNavCategory"]; } else { $_currentNavCategory_ = null; }
        if ((!$_currentNavCategory_)) {
            echo " class=\"active\" ";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("article_show");
        echo "\">";
        if (isset($context["setting"])) { $_setting_ = $context["setting"]; } else { $_setting_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_setting_, "name"), "html", null, true);
        echo "</a></li>
  ";
        // line 5
        if (isset($context["categoryTree"])) { $_categoryTree_ = $context["categoryTree"]; } else { $_categoryTree_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_categoryTree_);
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 6
            echo "    ";
            if (isset($context["cat"])) { $_cat_ = $context["cat"]; } else { $_cat_ = null; }
            if ((($this->getAttribute($_cat_, "parentId") == 0) && ($this->getAttribute($_cat_, "published") == 1))) {
                // line 7
                echo "       <li class=\"";
                if (isset($context["rootCategory"])) { $_rootCategory_ = $context["rootCategory"]; } else { $_rootCategory_ = null; }
                if (isset($context["cat"])) { $_cat_ = $context["cat"]; } else { $_cat_ = null; }
                if (($_rootCategory_ == $this->getAttribute($_cat_, "code"))) {
                    echo "active";
                }
                echo "\"><a href=\"";
                if (isset($context["cat"])) { $_cat_ = $context["cat"]; } else { $_cat_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_category", array("categoryCode" => $this->getAttribute($_cat_, "code"))), "html", null, true);
                echo "\">";
                if (isset($context["cat"])) { $_cat_ = $context["cat"]; } else { $_cat_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_cat_, "name"), "html", null, true);
                echo "</a></li>
    ";
            }
            // line 9
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Article:nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 10,  65 => 9,  45 => 6,  40 => 5,  28 => 4,  25 => 3,  22 => 2,  19 => 1,  115 => 33,  110 => 29,  107 => 28,  98 => 21,  94 => 19,  91 => 18,  83 => 34,  81 => 33,  77 => 31,  75 => 28,  70 => 25,  68 => 18,  63 => 15,  60 => 14,  54 => 7,  49 => 7,  46 => 5,  37 => 3,  30 => 10,  209 => 56,  204 => 55,  201 => 54,  191 => 50,  187 => 48,  183 => 46,  172 => 42,  164 => 41,  161 => 40,  154 => 37,  148 => 36,  145 => 35,  139 => 33,  136 => 32,  130 => 31,  119 => 28,  114 => 27,  109 => 26,  104 => 23,  99 => 22,  96 => 21,  93 => 20,  90 => 19,  86 => 17,  64 => 15,  59 => 14,  53 => 12,  50 => 11,  47 => 10,  41 => 8,  38 => 7,  35 => 6,  32 => 12,  29 => 4,);
    }
}
