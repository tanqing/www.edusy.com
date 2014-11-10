<?php

/* TopxiaWebBundle:Article:list.html.twig */
class __TwigTemplate_afbe95557e143c15e803483630617c3f extends Twig_Template
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
        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
        if ($this->getAttribute($_category_, "seoTitle")) {
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_category_, "seoTitle"), "html", null, true);
        } else {
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_category_, "name"), "html", null, true);
        }
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_keywords($context, array $blocks = array())
    {
        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_category_, "seoKeyword"), "html", null, true);
    }

    // line 7
    public function block_description($context, array $blocks = array())
    {
        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_category_, "seoDesc"), "html", null, true);
    }

    // line 9
    public function block_article_main($context, array $blocks = array())
    {
        // line 10
        echo "
  ";
        // line 11
        $this->env->loadTemplate("TopxiaWebBundle:Article:nav.html.twig")->display($context);
        // line 12
        echo "  ";
        if (isset($context["articles"])) { $_articles_ = $context["articles"]; } else { $_articles_ = null; }
        if ($_articles_) {
            // line 13
            echo "    <ul class=\"article-wide-list\">
      ";
            // line 14
            if (isset($context["articles"])) { $_articles_ = $context["articles"]; } else { $_articles_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_articles_);
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 15
                echo "        <li class=\"media article-item clearfix\">
          <div class=\"article-title text-muted\">
            <div class=\"pull-left\">
              ";
                // line 18
                if (isset($context["categories"])) { $_categories_ = $context["categories"]; } else { $_categories_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($_categories_);
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 19
                    echo "                ";
                    if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                    if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                    if (($this->getAttribute($_article_, "categoryId") == $this->getAttribute($_category_, "id"))) {
                        // line 20
                        echo "                  <span><a href=\"";
                        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_category", array("categoryCode" => $this->getAttribute($_category_, "code"))), "html", null, true);
                        echo "\">";
                        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_category_, "name"), "html", null, true);
                        echo " </a>
                  </span>
                ";
                    }
                    // line 23
                    echo "              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 24
                echo "            </div>
            <div class=\"published-time\">";
                // line 25
                if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_article_, "publishedTime"), "Y-m-d H:i"), "html", null, true);
                echo "</div>
          </div>
          ";
                // line 27
                if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                if ($this->getAttribute($_article_, "thumb")) {
                    // line 28
                    echo "            <a class=\"hidden-xs pull-right article-picture-link\" href=\"";
                    if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_detail", array("id" => $this->getAttribute($_article_, "id"))), "html", null, true);
                    echo "\">
              <img class=\"article-picture\" src=\"";
                    // line 29
                    if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFileUrl($this->getAttribute($_article_, "thumb")), "html", null, true);
                    echo "\" alt=\"资讯缩略图\">
            </a>
          ";
                }
                // line 32
                echo "          <div class=\"media-body\">
            <h4 class=\"media-heading\"><a href=\"";
                // line 33
                if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_detail", array("id" => $this->getAttribute($_article_, "id"))), "html", null, true);
                echo "\" >";
                if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_article_, "title"), "html", null, true);
                echo "</a></h4>
            ";
                // line 34
                if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($_article_, "body"), 150);
                echo "
          </div>
        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "    </ul>
  ";
        } else {
            // line 40
            echo "    <div class=\"empty tac text-muted mvl\">还没有任何资讯</div>
  ";
        }
        // line 42
        echo "  ";
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "paginator", array(0 => $_paginator_), "method"), "html", null, true);
        echo "

";
    }

    // line 46
    public function block_article_side($context, array $blocks = array())
    {
        // line 47
        echo "
\t<ul class=\"nav nav-pills nav-stacked article-sub\">
\t\t";
        // line 49
        if (isset($context["subCategories"])) { $_subCategories_ = $context["subCategories"]; } else { $_subCategories_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_subCategories_);
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 50
            echo "      ";
            if (isset($context["cat"])) { $_cat_ = $context["cat"]; } else { $_cat_ = null; }
            if (($this->getAttribute($_cat_, "published") == 1)) {
                // line 51
                echo "  \t\t  <li ";
                if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                if (isset($context["cat"])) { $_cat_ = $context["cat"]; } else { $_cat_ = null; }
                if (($this->getAttribute($_category_, "id") == $this->getAttribute($_cat_, "id"))) {
                    echo "class=\"active\"";
                }
                echo ">
  \t\t    <a href=\"";
                // line 52
                if (isset($context["cat"])) { $_cat_ = $context["cat"]; } else { $_cat_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_category", array("categoryCode" => $this->getAttribute($_cat_, "code"))), "html", null, true);
                echo "\">
  \t\t    ";
                // line 53
                if (isset($context["cat"])) { $_cat_ = $context["cat"]; } else { $_cat_ = null; }
                if (($this->getAttribute($_cat_, "depth") > 1)) {
                    // line 54
                    echo "  \t\t      ";
                    if (isset($context["cat"])) { $_cat_ = $context["cat"]; } else { $_cat_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable(range(0, ($this->getAttribute($_cat_, "depth") - 1)));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        echo "&nbsp;&nbsp;";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 55
                    echo "  \t\t    ";
                }
                // line 56
                echo "  \t\t    ";
                if (isset($context["cat"])) { $_cat_ = $context["cat"]; } else { $_cat_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_cat_, "name"), "html", null, true);
                echo "</a>
  \t\t  </li>
      ";
            }
            // line 59
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "\t</ul>

  ";
        // line 62
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Article:popularArticlesBlock"));
        echo "
  ";
        // line 63
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Article:recommendArticlesBlock"));
        echo "

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Article:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 63,  243 => 62,  239 => 60,  233 => 59,  225 => 56,  222 => 55,  211 => 54,  208 => 53,  203 => 52,  194 => 51,  190 => 50,  185 => 49,  181 => 47,  178 => 46,  168 => 42,  164 => 40,  160 => 38,  149 => 34,  141 => 33,  138 => 32,  131 => 29,  125 => 28,  122 => 27,  116 => 25,  113 => 24,  107 => 23,  96 => 20,  91 => 19,  86 => 18,  81 => 15,  76 => 14,  73 => 13,  69 => 12,  67 => 11,  64 => 10,  61 => 9,  54 => 7,  47 => 5,  32 => 3,);
    }
}
