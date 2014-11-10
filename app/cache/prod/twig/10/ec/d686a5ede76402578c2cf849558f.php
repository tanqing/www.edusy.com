<?php

/* TopxiaWebBundle:Course:explore.html.twig */
class __TwigTemplate_10ecd686a5ede76402578c2cf849558f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaWebBundle:Default:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Default:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["siteNav"] = "course/explore";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
        if ((!$this->getAttribute($_category_, "id"))) {
            echo "全部课程";
        } else {
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_category_, "name"), "html", null, true);
            echo " 课程";
        }
        echo " 第";
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "request"), "get", array(0 => "page", 1 => 1), "method"), "html", null, true);
        echo "页- ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_keywords($context, array $blocks = array())
    {
        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
        if ($this->getAttribute($_category_, "id")) {
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_category_, "name"), "html", null, true);
        }
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.name"), "html", null, true);
    }

    // line 8
    public function block_description($context, array $blocks = array())
    {
        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
        if ($this->getAttribute($_category_, "id")) {
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_category_, "name"), "html", null, true);
            echo "的";
        }
        echo "课程列表，第";
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "request"), "get", array(0 => "page", 1 => 1), "method"), "html", null, true);
        echo "页。";
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "
<div class=\"es-row-wrap container-gap\">
  <div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"page-header\"><h1>课程</h1></div>
    </div>
  </div>

  <div class=\"row row-3-9\">
    <div class=\"col-md-3\">
      <ul class=\"nav nav-pills nav-stacked\">
        <li ";
        // line 22
        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
        if ((!$this->getAttribute($_category_, "id"))) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("course_explore");
        echo "\">全部</a></li>
        ";
        // line 23
        if (isset($context["categories"])) { $_categories_ = $context["categories"]; } else { $_categories_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_categories_);
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 24
            echo "          <li ";
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            if (isset($context["cat"])) { $_cat_ = $context["cat"]; } else { $_cat_ = null; }
            if (($this->getAttribute($_category_, "id") == $this->getAttribute($_cat_, "id"))) {
                echo "class=\"active\"";
            }
            echo ">
            <a href=\"";
            // line 25
            if (isset($context["cat"])) { $_cat_ = $context["cat"]; } else { $_cat_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_explore", array("category" => (($this->getAttribute($_cat_, "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_cat_, "code"), $this->getAttribute($_cat_, "id"))) : ($this->getAttribute($_cat_, "id"))))), "html", null, true);
            echo "\">
            ";
            // line 26
            if (isset($context["cat"])) { $_cat_ = $context["cat"]; } else { $_cat_ = null; }
            if (($this->getAttribute($_cat_, "depth") > 1)) {
                // line 27
                echo "              ";
                if (isset($context["cat"])) { $_cat_ = $context["cat"]; } else { $_cat_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(range(0, ($this->getAttribute($_cat_, "depth") - 1)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    echo "&nbsp;&nbsp;";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 28
                echo "            ";
            }
            // line 29
            echo "            ";
            if (isset($context["cat"])) { $_cat_ = $context["cat"]; } else { $_cat_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_cat_, "name"), "html", null, true);
            echo "</a>
          </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "      </ul>
    </div>
    <div class=\"col-md-9\">
      ";
        // line 35
        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
        if ((($this->getAttribute($_category_, "id") != null) && ($this->getAttribute($_category_, "description") != null))) {
            // line 36
            echo "        <div class=\"page\">
          ";
            // line 37
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_category_, "description"), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 40
        echo "      <div class=\"category-filters\">
        <a href=\"";
        // line 41
        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_explore", array("category" => (($this->getAttribute($_category_, "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_category_, "code"), $this->getAttribute($_category_, "id"))) : ($this->getAttribute($_category_, "id"))), "sort" => "latest")), "html", null, true);
        echo "\" ";
        if (isset($context["sort"])) { $_sort_ = $context["sort"]; } else { $_sort_ = null; }
        if (($_sort_ == "latest")) {
            echo "class=\"selected\"";
        }
        echo ">最新</a>        
        <a href=\"";
        // line 42
        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_explore", array("category" => (($this->getAttribute($_category_, "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_category_, "code"), $this->getAttribute($_category_, "id"))) : ($this->getAttribute($_category_, "id"))), "sort" => "popular")), "html", null, true);
        echo "\" ";
        if (isset($context["sort"])) { $_sort_ = $context["sort"]; } else { $_sort_ = null; }
        if (($_sort_ == "popular")) {
            echo "class=\"selected\"";
        }
        echo ">热门</a>
        <a href=\"";
        // line 43
        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_explore", array("category" => (($this->getAttribute($_category_, "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_category_, "code"), $this->getAttribute($_category_, "id"))) : ($this->getAttribute($_category_, "id"))), "sort" => "recommendedSeq")), "html", null, true);
        echo "\" ";
        if (isset($context["sort"])) { $_sort_ = $context["sort"]; } else { $_sort_ = null; }
        if (($_sort_ == "recommendedSeq")) {
            echo "class=\"selected\"";
        }
        echo ">推荐</a>
      </div>

      ";
        // line 46
        if (isset($context["courses"])) { $_courses_ = $context["courses"]; } else { $_courses_ = null; }
        if ($_courses_) {
            // line 47
            echo "        ";
            if (isset($context["courses"])) { $_courses_ = $context["courses"]; } else { $_courses_ = null; }
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Course:coursesBlock", array("courses" => $_courses_, "view" => "list")));
            echo "
        ";
            // line 48
            if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
            if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "paginator", array(0 => $_paginator_), "method"), "html", null, true);
            echo " 
      ";
        } else {
            // line 50
            echo "        <div class=\"empty\">该分类下无课程</div>
      ";
        }
        // line 52
        echo "    </div>
  </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:explore.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 52,  219 => 50,  212 => 48,  206 => 47,  203 => 46,  191 => 43,  181 => 42,  171 => 41,  168 => 40,  161 => 37,  158 => 36,  155 => 35,  150 => 32,  139 => 29,  136 => 28,  125 => 27,  122 => 26,  117 => 25,  108 => 24,  103 => 23,  94 => 22,  81 => 11,  78 => 10,  63 => 8,  51 => 7,  33 => 5,  28 => 3,);
    }
}
