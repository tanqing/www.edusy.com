<?php

/* TopxiaWebBundle:Course:dashboard.html.twig */
class __TwigTemplate_57480ecad4ea952c3f4ba904dee6ddd9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaWebBundle:Course:dashboard-layout.html.twig");

        $this->blocks = array(
            'dashboard_main' => array($this, 'block_dashboard_main'),
            'dashboard_relatedCoursesBlock' => array($this, 'block_dashboard_relatedCoursesBlock'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Course:dashboard-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["script_controller"] = "course/dashboard";
        // line 4
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        $context["script_arguments"] = array("course_uri" => $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($_course_, "id"))));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_dashboard_main($context, array $blocks = array())
    {
        // line 7
        echo "\t";
        $this->env->loadTemplate("TopxiaWebBundle:Course:dashboard-nav.html.twig")->display(array_merge($context, array("nav" => "lesson")));
        // line 8
        echo "
\t";
        // line 9
        if (isset($context["items"])) { $_items_ = $context["items"]; } else { $_items_ = null; }
        if (twig_test_empty($_items_)) {
            // line 10
            echo "\t\t<ul class=\"media-list\">
\t\t\t<li class=\"mvl tac text-muted\">课程暂无课时内容</li>
\t\t</ul>
\t";
        } else {
            // line 14
            echo "\t\t";
            $this->env->loadTemplate("TopxiaWebBundle:CourseLesson:item-list.html.twig")->display($context);
            // line 15
            echo "\t";
        }
        // line 16
        echo "
";
    }

    // line 19
    public function block_dashboard_relatedCoursesBlock($context, array $blocks = array())
    {
        // line 20
        echo "      ";
        if (($this->env->getExtension('topxia_web_twig')->getSetting("course.relatedCourses") == 1)) {
            // line 21
            echo "        ";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Course:relatedCoursesBlock", array("course" => $_course_)));
            echo "
      ";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 21,  66 => 20,  63 => 19,  58 => 16,  55 => 15,  52 => 14,  46 => 10,  43 => 9,  40 => 8,  37 => 7,  34 => 6,  28 => 4,  26 => 3,);
    }
}
