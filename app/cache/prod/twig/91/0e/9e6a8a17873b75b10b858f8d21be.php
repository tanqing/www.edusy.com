<?php

/* TopxiaWebBundle:MyQuiz:list-teacher-test.html.twig */
class __TwigTemplate_910e9e6a8a17873b75b10b858f8d21be extends Twig_Template
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
        echo "
";
        // line 2
        if (isset($context["paperResults"])) { $_paperResults_ = $context["paperResults"]; } else { $_paperResults_ = null; }
        if ($_paperResults_) {
            // line 3
            echo "
<table class=\"table table-striped table-hover\">
\t<tbody>
\t\t";
            // line 6
            if (isset($context["paperResults"])) { $_paperResults_ = $context["paperResults"]; } else { $_paperResults_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_paperResults_);
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["paperResult"]) {
                // line 7
                echo "\t\t\t";
                if (isset($context["testpapers"])) { $_testpapers_ = $context["testpapers"]; } else { $_testpapers_ = null; }
                if (isset($context["paperResult"])) { $_paperResult_ = $context["paperResult"]; } else { $_paperResult_ = null; }
                $context["testpaper"] = $this->getAttribute($_testpapers_, $this->getAttribute($_paperResult_, "testId"), array(), "array");
                // line 8
                echo "\t\t\t";
                if (isset($context["users"])) { $_users_ = $context["users"]; } else { $_users_ = null; }
                if (isset($context["paperResult"])) { $_paperResult_ = $context["paperResult"]; } else { $_paperResult_ = null; }
                $context["student"] = $this->getAttribute($_users_, $this->getAttribute($_paperResult_, "userId"), array(), "array");
                // line 9
                echo "\t\t\t";
                if (isset($context["courses"])) { $_courses_ = $context["courses"]; } else { $_courses_ = null; }
                if (((array_key_exists("courses", $context)) ? (_twig_default_filter($_courses_, null)) : (null))) {
                    // line 10
                    echo "\t\t\t\t";
                    if (isset($context["courses"])) { $_courses_ = $context["courses"]; } else { $_courses_ = null; }
                    if (isset($context["testpaper"])) { $_testpaper_ = $context["testpaper"]; } else { $_testpaper_ = null; }
                    $context["course"] = $this->getAttribute($_courses_, $this->env->getExtension('topxia_web_twig')->getCourseidFilter($this->getAttribute($_testpaper_, "target")), array(), "array");
                    // line 11
                    echo "\t\t\t";
                }
                // line 12
                echo "\t\t\t";
                if (isset($context["teachers"])) { $_teachers_ = $context["teachers"]; } else { $_teachers_ = null; }
                if (((array_key_exists("teachers", $context)) ? (_twig_default_filter($_teachers_, null)) : (null))) {
                    // line 13
                    echo "\t\t\t\t";
                    if (isset($context["teachers"])) { $_teachers_ = $context["teachers"]; } else { $_teachers_ = null; }
                    if (isset($context["paperResult"])) { $_paperResult_ = $context["paperResult"]; } else { $_paperResult_ = null; }
                    $context["teacher"] = (($this->getAttribute($_teachers_, $this->getAttribute($_paperResult_, "checkTeacherId"), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_teachers_, $this->getAttribute($_paperResult_, "checkTeacherId"), array(), "array"), null)) : (null));
                    // line 14
                    echo "\t\t\t";
                }
                // line 15
                echo "\t\t\t\t";
                $this->env->loadTemplate("TopxiaWebBundle:MyQuiz:list-teacher-test-tr.html.twig")->display($context);
                // line 16
                echo "
\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paperResult'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "\t</tbody>
</table>
";
            // line 20
            if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
            if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "paginator", array(0 => $_paginator_), "method"), "html", null, true);
            echo "

";
        } else {
            // line 23
            echo "  ";
            if (isset($context["status"])) { $_status_ = $context["status"]; } else { $_status_ = null; }
            if (($_status_ == "reviewing")) {
                // line 24
                echo "    <div class=\"empty\">还没有等待批阅的试卷</div>
  ";
            } elseif (($_status_ == "finished")) {
                // line 26
                echo "    <div class=\"empty\">还没有已经批阅的试卷</div>
  ";
            }
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:MyQuiz:list-teacher-test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 26,  116 => 24,  112 => 23,  104 => 20,  100 => 18,  85 => 16,  79 => 14,  74 => 13,  70 => 12,  67 => 11,  62 => 10,  53 => 8,  25 => 3,  22 => 2,  19 => 1,  82 => 15,  80 => 23,  68 => 20,  58 => 9,  48 => 7,  45 => 10,  38 => 4,  33 => 8,  30 => 6,  28 => 6,  26 => 2,);
    }
}
