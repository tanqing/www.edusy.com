<?php

/* TopxiaWebBundle:Article:index.html.twig */
class __TwigTemplate_c167e2ffe5b75ee8c74f29595ca1fd41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaWebBundle:Article:layout.html.twig");

        $this->blocks = array(
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

    // line 4
    public function block_article_main($context, array $blocks = array())
    {
        // line 5
        echo "  ";
        $this->env->loadTemplate("TopxiaWebBundle:Article:nav.html.twig")->display($context);
        // line 6
        echo "
  ";
        // line 7
        if (isset($context["featuredArticles"])) { $_featuredArticles_ = $context["featuredArticles"]; } else { $_featuredArticles_ = null; }
        if (((!$_featuredArticles_) && $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 8
            echo "    <div class=\"alert alert-warning\">头条大图轮播功能需先在后台资讯管理页面给正文上传图片以及添加头条属性<a href=\"";
            echo $this->env->getExtension('routing')->getPath("admin_article");
            echo "\">前往设置</a></div>
  ";
        }
        // line 10
        echo "  
  ";
        // line 11
        if (isset($context["featuredArticles"])) { $_featuredArticles_ = $context["featuredArticles"]; } else { $_featuredArticles_ = null; }
        if ($_featuredArticles_) {
            // line 12
            echo "    <div class=\"homepage-feature homepage-feature-slides mbl\" data-cycle-overlay-template='";
            echo "{{title}}";
            echo "'>
      <div class=\"cycle-overlay\"></div>
        ";
            // line 14
            if (isset($context["featuredArticles"])) { $_featuredArticles_ = $context["featuredArticles"]; } else { $_featuredArticles_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_featuredArticles_);
            foreach ($context['_seq'] as $context["_key"] => $context["featuredArticle"]) {
                // line 15
                echo "            <a href=\"";
                if (isset($context["featuredArticle"])) { $_featuredArticle_ = $context["featuredArticle"]; } else { $_featuredArticle_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_detail", array("id" => $this->getAttribute($_featuredArticle_, "id"))), "html", null, true);
                echo "\" data-cycle-title=\"<a href='";
                if (isset($context["featuredArticle"])) { $_featuredArticle_ = $context["featuredArticle"]; } else { $_featuredArticle_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_detail", array("id" => $this->getAttribute($_featuredArticle_, "id"))), "html", null, true);
                echo "'>";
                if (isset($context["featuredArticle"])) { $_featuredArticle_ = $context["featuredArticle"]; } else { $_featuredArticle_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_featuredArticle_, "title"), "html", null, true);
                echo "</a>\" ><img src=";
                if (isset($context["featuredArticle"])) { $_featuredArticle_ = $context["featuredArticle"]; } else { $_featuredArticle_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_featuredArticle_, "picture"), "html", null, true);
                echo " alt=\"";
                if (isset($context["featuredArticle"])) { $_featuredArticle_ = $context["featuredArticle"]; } else { $_featuredArticle_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_featuredArticle_, "title"), "html", null, true);
                echo "\" style=\"max-height:400px;\"></a>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['featuredArticle'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "    </div>
  ";
        }
        // line 19
        echo "
  ";
        // line 20
        if (isset($context["latestArticles"])) { $_latestArticles_ = $context["latestArticles"]; } else { $_latestArticles_ = null; }
        if ($_latestArticles_) {
            // line 21
            echo "    <ul class=\"article-wide-list\">
      ";
            // line 22
            if (isset($context["latestArticles"])) { $_latestArticles_ = $context["latestArticles"]; } else { $_latestArticles_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_latestArticles_);
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 23
                echo "        <li class=\"media article-item clearfix\">
          <div class=\"article-title text-muted\">
            <div class=\"pull-left\">
              ";
                // line 26
                if (isset($context["categories"])) { $_categories_ = $context["categories"]; } else { $_categories_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($_categories_);
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 27
                    echo "                ";
                    if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                    if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                    if (($this->getAttribute($_article_, "categoryId") == $this->getAttribute($_category_, "id"))) {
                        // line 28
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
                    // line 31
                    echo "              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 32
                echo "            </div>
            <div class=\"published-time\">";
                // line 33
                if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_article_, "publishedTime"), "Y-m-d H:i"), "html", null, true);
                echo "</div>
          </div>
          ";
                // line 35
                if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                if ($this->getAttribute($_article_, "thumb")) {
                    // line 36
                    echo "            <a class=\"pull-right article-picture-link hidden-xs\" href=\"";
                    if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_detail", array("id" => $this->getAttribute($_article_, "id"))), "html", null, true);
                    echo "\">
              <img class=\"article-picture\" src=\"";
                    // line 37
                    if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFileUrl($this->getAttribute($_article_, "thumb")), "html", null, true);
                    echo "\" alt=\"资讯缩略图\">
            </a>
          ";
                }
                // line 40
                echo "          <div class=\"media-body\">
            <h4 class=\"media-heading\"><a href=\"";
                // line 41
                if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_detail", array("id" => $this->getAttribute($_article_, "id"))), "html", null, true);
                echo "\" >";
                if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_article_, "title"), "html", null, true);
                echo "</a></h4>
            ";
                // line 42
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
            // line 46
            echo "    </ul>
  ";
        } else {
            // line 48
            echo "    <div class=\"empty tac text-muted mvl\">还没有任何资讯</div>
  ";
        }
        // line 50
        echo "  ";
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "paginator", array(0 => $_paginator_), "method"), "html", null, true);
        echo "

";
    }

    // line 54
    public function block_article_side($context, array $blocks = array())
    {
        // line 55
        echo "  ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Article:popularArticlesBlock"));
        echo "
  ";
        // line 56
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Article:recommendArticlesBlock"));
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Article:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 56,  204 => 55,  201 => 54,  191 => 50,  187 => 48,  183 => 46,  172 => 42,  164 => 41,  161 => 40,  154 => 37,  148 => 36,  145 => 35,  139 => 33,  136 => 32,  130 => 31,  119 => 28,  114 => 27,  109 => 26,  104 => 23,  99 => 22,  96 => 21,  93 => 20,  90 => 19,  86 => 17,  64 => 15,  59 => 14,  53 => 12,  50 => 11,  47 => 10,  41 => 8,  38 => 7,  35 => 6,  32 => 5,  29 => 4,);
    }
}
