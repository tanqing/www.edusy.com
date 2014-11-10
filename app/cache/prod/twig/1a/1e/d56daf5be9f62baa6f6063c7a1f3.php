<?php

/* TopxiaWebBundle:Course:archive.html.twig */
class __TwigTemplate_1a1ed56daf5be9f62baa6f6063c7a1f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaWebBundle:Default:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        echo "课程存档 -";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
<div class=\"es-row-wrap container-gap\">
\t<div class=\"row\">
\t    <div class=\"col-md-12\">
\t      <div class=\"page-header\"><h1>课程存档</h1></div>
\t    </div>

\t    <div class=\"col-md-12\">
\t    \t";
        // line 14
        if (isset($context["courses"])) { $_courses_ = $context["courses"]; } else { $_courses_ = null; }
        if ($_courses_) {
            // line 15
            echo "\t    \t<ul class=\"media-list\">
\t    \t\t";
            // line 16
            if (isset($context["courses"])) { $_courses_ = $context["courses"]; } else { $_courses_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_courses_);
            foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                // line 17
                echo "\t    \t\t";
                if (isset($context["users"])) { $_users_ = $context["users"]; } else { $_users_ = null; }
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                $context["teacher"] = (($this->getAttribute($_users_, twig_first($this->env, $this->getAttribute($_course_, "teacherIds")), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_users_, twig_first($this->env, $this->getAttribute($_course_, "teacherIds")), array(), "array"), null)) : (null));
                // line 18
                echo "\t    \t\t";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                $context["tags"] = $this->getAttribute($_course_, "tags");
                // line 19
                echo "\t\t        <li class=\"media\">
\t\t        \t<h4><a href=\"";
                // line 20
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_archive_show", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
                echo "\">";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_course_, "title"), "html", null, true);
                echo "</a></h4>
              <div class=\"fsn text-muted\">
\t\t        \t";
                // line 22
                if (isset($context["teacher"])) { $_teacher_ = $context["teacher"]; } else { $_teacher_ = null; }
                if ($_teacher_) {
                    // line 23
                    echo "  \t\t        \t教师： <a class=\"teacher-nickname mrl\" href=\"";
                    if (isset($context["teacher"])) { $_teacher_ = $context["teacher"]; } else { $_teacher_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($_teacher_, "id"))), "html", null, true);
                    echo "\">";
                    if (isset($context["teacher"])) { $_teacher_ = $context["teacher"]; } else { $_teacher_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_teacher_, "nickname"), "html", null, true);
                    echo "</a>
\t\t        \t";
                }
                // line 25
                echo "\t\t        \t";
                if (isset($context["tags"])) { $_tags_ = $context["tags"]; } else { $_tags_ = null; }
                if ($_tags_) {
                    // line 26
                    echo "\t\t\t        \t<span class=\"text-muted\">标签：</span>
                ";
                    // line 27
                    if (isset($context["tags"])) { $_tags_ = $context["tags"]; } else { $_tags_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($_tags_);
                    foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                        // line 28
                        echo "\t                <a href=\"";
                        if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tag_show", array("name" => $this->getAttribute($_tag_, "name"))), "html", null, true);
                        echo "\" class=\"mrs\">";
                        if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_tag_, "name"), "html", null, true);
                        echo "</a>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 30
                    echo "\t\t        \t";
                }
                // line 31
                echo "\t\t\t        </div>
\t\t\t    </li>
\t\t        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "\t\t    </ul> 
\t\t    ";
        } else {
            // line 36
            echo "\t\t    \t<div class=\"empty\">目前暂时无课程</div>
\t\t    ";
        }
        // line 38
        echo "\t\t    ";
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "paginator", array(0 => $_paginator_), "method"), "html", null, true);
        echo "
\t    </div>
\t</div>

</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:archive.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 38,  134 => 36,  130 => 34,  122 => 31,  119 => 30,  106 => 28,  101 => 27,  98 => 26,  94 => 25,  84 => 23,  81 => 22,  72 => 20,  69 => 19,  65 => 18,  60 => 17,  55 => 16,  52 => 15,  49 => 14,  39 => 6,  36 => 5,  29 => 3,);
    }
}
