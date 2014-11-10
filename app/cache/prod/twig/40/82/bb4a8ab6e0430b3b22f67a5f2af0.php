<?php

/* TopxiaWebBundle:Course:archiveCourse.html.twig */
class __TwigTemplate_4082bb4a8ab6e0430b3b22f67a5f2af0 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_course_, "title"), "html", null, true);
        echo " -";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 4
    public function block_keywords($context, array $blocks = array())
    {
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_course_, "title"), "html", null, true);
    }

    // line 5
    public function block_description($context, array $blocks = array())
    {
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_course_, "about"), "html", null, true);
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
<div class=\"es-row-wrap container-gap\">
\t<div class=\"row\">
\t    <div class=\"col-md-12\">
\t      <div class=\"page-header\"><h1>";
        // line 12
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_course_, "title"), "html", null, true);
        echo "</h1></div>
\t    </div>
\t</div>

  \t<div class=\"row article-row\">
\t  \t<div class=\"col-md-8 mbl\">
\t  \t\t<dl class=\"course-infos\">
    <dt class=\"thread-title\">简介</dt>
    <dd class=\"thread-body\">";
        // line 20
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo $this->getAttribute($_course_, "about");
        echo "</dd>

    ";
        // line 22
        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
        if ($_category_) {
            // line 23
            echo "    <dt>分类</dt>
    <dd class=\"mbm\">
      <a href=\"";
            // line 25
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_explore", array("category" => (($this->getAttribute($_category_, "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_category_, "code"), $this->getAttribute($_category_, "id"))) : ($this->getAttribute($_category_, "id"))))), "html", null, true);
            echo "\" target=\"_blank\">";
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_category_, "name"), "html", null, true);
            echo "</a>
    </dd>
    ";
        }
        // line 28
        echo "
    ";
        // line 29
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if ($this->getAttribute($_course_, "goals")) {
            // line 30
            echo "      <dt>课程目标</dt>
      <dd>
        <ul>
          ";
            // line 33
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_course_, "goals"));
            foreach ($context['_seq'] as $context["_key"] => $context["goal"]) {
                // line 34
                echo "            <li>";
                if (isset($context["goal"])) { $_goal_ = $context["goal"]; } else { $_goal_ = null; }
                echo twig_escape_filter($this->env, $_goal_, "html", null, true);
                echo "</li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['goal'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "        </ul>
      </dd>
    ";
        }
        // line 39
        echo "
    ";
        // line 40
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if ($this->getAttribute($_course_, "audiences")) {
            // line 41
            echo "      <dt>适合人群</dt>
      <dd>
        <ul>
          ";
            // line 44
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_course_, "audiences"));
            foreach ($context['_seq'] as $context["_key"] => $context["audience"]) {
                // line 45
                echo "            <li>";
                if (isset($context["audience"])) { $_audience_ = $context["audience"]; } else { $_audience_ = null; }
                echo twig_escape_filter($this->env, $_audience_, "html", null, true);
                echo "</li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['audience'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "        </ul>
      </dd>
    ";
        }
        // line 50
        echo "  </dl>
\t\t  \t\t";
        // line 51
        if (isset($context["tags"])) { $_tags_ = $context["tags"]; } else { $_tags_ = null; }
        if ($_tags_) {
            // line 52
            echo "\t\t  \t\t<div class=\"mtm\">课程标签：
\t\t  \t\t\t";
            // line 53
            if (isset($context["tags"])) { $_tags_ = $context["tags"]; } else { $_tags_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_tags_);
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 54
                echo "\t\t  \t\t\t<a href=\"";
                if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tag_show", array("name" => $this->getAttribute($_tag_, "name"))), "html", null, true);
                echo "\" class=\"mrs\"><span class=\"label label-info\">";
                if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_tag_, "name"), "html", null, true);
                echo "</span></a>
\t\t  \t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "\t\t  \t\t</div>
\t\t  \t\t";
        }
        // line 58
        echo "\t  \t\t<a class=\"btn btn-primary mtl nav-btn\" href=\"";
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-play\"></span> 查看课程</a>
\t\t</div>
\t  \t<div class=\"col-md-4\">
\t  \t\t<div class=\"panel panel-default\">
\t\t\t    <div class=\"panel-heading\">
\t\t\t      <h3 class=\"panel-title\">课时列表</h3>
\t\t\t    </div>
\t\t    <div class=\"panel-body\">
\t\t    \t";
        // line 66
        if (isset($context["lessons"])) { $_lessons_ = $context["lessons"]; } else { $_lessons_ = null; }
        if ($_lessons_) {
            // line 67
            echo "\t\t        <ul class=\"media-list\">
\t\t    \t";
            // line 68
            if (isset($context["lessons"])) { $_lessons_ = $context["lessons"]; } else { $_lessons_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_lessons_);
            foreach ($context['_seq'] as $context["_key"] => $context["lesson"]) {
                // line 69
                echo "\t\t            <li class=\"media\">
\t\t              <div class=\"media-body\"><a href=\"";
                // line 70
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_archive_lesson", array("id" => $this->getAttribute($_course_, "id"), "lessonId" => $this->getAttribute($_lesson_, "id"))), "html", null, true);
                echo "\">第";
                if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_lesson_, "number"), "html", null, true);
                echo "课时： ";
                if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_lesson_, "title"), "html", null, true);
                echo "</a></div>
\t\t            </li>
\t\t        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lesson'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "\t\t        </ul>
\t\t        ";
        } else {
            // line 75
            echo "\t\t        <div class=\"empty\">课程暂无相关课时</div>
\t\t        ";
        }
        // line 77
        echo "\t\t    </div>
\t\t  </div>
\t  \t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:archiveCourse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 77,  239 => 75,  235 => 73,  218 => 70,  215 => 69,  210 => 68,  207 => 67,  204 => 66,  191 => 58,  187 => 56,  174 => 54,  169 => 53,  166 => 52,  163 => 51,  160 => 50,  155 => 47,  145 => 45,  140 => 44,  135 => 41,  132 => 40,  129 => 39,  124 => 36,  114 => 34,  109 => 33,  104 => 30,  101 => 29,  98 => 28,  88 => 25,  84 => 23,  81 => 22,  75 => 20,  63 => 12,  57 => 8,  54 => 7,  47 => 5,  40 => 4,  31 => 3,);
    }
}
