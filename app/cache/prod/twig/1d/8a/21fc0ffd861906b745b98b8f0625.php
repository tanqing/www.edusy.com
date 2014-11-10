<?php

/* TopxiaWebBundle:Article:detail.html.twig */
class __TwigTemplate_1d8a21fc0ffd861906b745b98b8f0625 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaWebBundle:Article:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
            'article_main' => array($this, 'block_article_main'),
            'article_side' => array($this, 'block_article_side'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Article:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_article_, "title"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_keywords($context, array $blocks = array())
    {
        if (isset($context["seoKeyword"])) { $_seoKeyword_ = $context["seoKeyword"]; } else { $_seoKeyword_ = null; }
        echo twig_escape_filter($this->env, $_seoKeyword_, "html", null, true);
    }

    // line 7
    public function block_description($context, array $blocks = array())
    {
        if (isset($context["seoDesc"])) { $_seoDesc_ = $context["seoDesc"]; } else { $_seoDesc_ = null; }
        echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($_seoDesc_, 100);
    }

    // line 9
    public function block_article_main($context, array $blocks = array())
    {
        // line 10
        echo "
  <ul class=\"breadcrumb\">
      <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("article_show");
        echo "\">";
        if (isset($context["setting"])) { $_setting_ = $context["setting"]; } else { $_setting_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_setting_, "name"), "html", null, true);
        echo "</a></li>
      ";
        // line 13
        if (isset($context["breadcrumbs"])) { $_breadcrumbs_ = $context["breadcrumbs"]; } else { $_breadcrumbs_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_breadcrumbs_);
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 14
            echo "        <li><a href=\"";
            if (isset($context["breadcrumb"])) { $_breadcrumb_ = $context["breadcrumb"]; } else { $_breadcrumb_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_category", array("categoryCode" => $this->getAttribute($_breadcrumb_, "code"))), "html", null, true);
            echo "\">";
            if (isset($context["breadcrumb"])) { $_breadcrumb_ = $context["breadcrumb"]; } else { $_breadcrumb_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_breadcrumb_, "name"), "html", null, true);
            echo "</a></li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "      <li class=\"active\">正文</li>
  </ul>

  <h2 class=\"thread-title\">";
        // line 19
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_article_, "title"), "html", null, true);
        echo "</h2>
     <div class=\"published-time pull-left\">";
        // line 20
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_article_, "publishedTime"), "Y-m-d H:i:s"), "html", null, true);
        echo "</div>
     <p><br></p>
  <div class=\"thread-body\">";
        // line 22
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        echo $this->getAttribute($_article_, "body");
        echo "</div>
  ";
        // line 23
        if (isset($context["tags"])) { $_tags_ = $context["tags"]; } else { $_tags_ = null; }
        if ($_tags_) {
            // line 24
            echo "     标签:
    ";
            // line 25
            if (isset($context["tags"])) { $_tags_ = $context["tags"]; } else { $_tags_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_tags_);
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 26
                echo "         <span class=\"label label-info\">";
                if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_tag_, "name"), "html", null, true);
                echo "</span>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "  ";
        }
        // line 29
        echo "  ";
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        if ($this->getAttribute($_article_, "source")) {
            // line 30
            echo "     <span class=\"pull-right\">本文来源: &nbsp;
     ";
            // line 31
            if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
            if ($this->getAttribute($_article_, "sourceUrl")) {
                // line 32
                echo "       <a href=\"";
                if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_article_, "sourceUrl"), "html", null, true);
                echo "\" target=\"_blank\">";
                if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_article_, "source"), "html", null, true);
                echo "</a>
     ";
            } else {
                // line 34
                echo "       ";
                if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_article_, "source"), "html", null, true);
                echo "
     ";
            }
            // line 36
            echo "     </span>
  ";
        }
        // line 38
        echo "  <p><br></p>
  <ul class=\"pager\">
    ";
        // line 40
        if (isset($context["articlePrevious"])) { $_articlePrevious_ = $context["articlePrevious"]; } else { $_articlePrevious_ = null; }
        if ($_articlePrevious_) {
            // line 41
            echo "      <li class=\"previous\"><a href=\"";
            if (isset($context["articlePrevious"])) { $_articlePrevious_ = $context["articlePrevious"]; } else { $_articlePrevious_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_detail", array("id" => $this->getAttribute($_articlePrevious_, "id"))), "html", null, true);
            echo "\">&larr; 上一篇</a></li>
    ";
        } else {
            // line 43
            echo "      <li class=\"previous disabled\"><a href=\"javascript:;\">&larr; 上一篇</a></li>
    ";
        }
        // line 45
        echo "
      ";
        // line 46
        if (isset($context["articleNext"])) { $_articleNext_ = $context["articleNext"]; } else { $_articleNext_ = null; }
        if ($_articleNext_) {
            // line 47
            echo "      <li class=\"next\"><a href=\"";
            if (isset($context["articleNext"])) { $_articleNext_ = $context["articleNext"]; } else { $_articleNext_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_detail", array("id" => $this->getAttribute($_articleNext_, "id"))), "html", null, true);
            echo "\"> 下一篇 &rarr;</a></li>
    ";
        } else {
            // line 49
            echo "      <li class=\"next disabled\"><a href=\"javascript:;\"> 下一篇 &rarr;</a></li>
    ";
        }
        // line 51
        echo "  </ul>
<div class=\"share pull-right\" data-bdText=\"";
        // line 52
        if (isset($context["articleShareContent"])) { $_articleShareContent_ = $context["articleShareContent"]; } else { $_articleShareContent_ = null; }
        echo twig_escape_filter($this->env, ((array_key_exists("articleShareContent", $context)) ? (_twig_default_filter($_articleShareContent_, "")) : ("")), "html", null, true);
        echo "\"></div>
";
    }

    // line 55
    public function block_article_side($context, array $blocks = array())
    {
        // line 56
        echo "  ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Article:popularArticlesBlock"));
        echo "
  ";
        // line 57
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Article:recommendArticlesBlock"));
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Article:detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 57,  211 => 56,  208 => 55,  201 => 52,  198 => 51,  194 => 49,  187 => 47,  184 => 46,  181 => 45,  177 => 43,  170 => 41,  167 => 40,  163 => 38,  159 => 36,  152 => 34,  142 => 32,  139 => 31,  136 => 30,  132 => 29,  129 => 28,  119 => 26,  114 => 25,  111 => 24,  108 => 23,  103 => 22,  97 => 20,  92 => 19,  87 => 16,  74 => 14,  69 => 13,  62 => 12,  58 => 10,  55 => 9,  48 => 7,  41 => 5,  32 => 3,);
    }
}
