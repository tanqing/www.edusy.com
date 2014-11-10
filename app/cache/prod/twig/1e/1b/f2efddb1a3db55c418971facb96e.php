<?php

/* TopxiaWebBundle:Course:dashboard-layout.html.twig */
class __TwigTemplate_1e1bf2efddb1a3db55c418971facb96e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaWebBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'dashboard_main' => array($this, 'block_dashboard_main'),
            'dashboard_relatedCoursesBlock' => array($this, 'block_dashboard_relatedCoursesBlock'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["bodyClass"] = "course-dashboard-page";
        // line 7
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        $context["script_arguments"] = array("course_uri" => $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($_course_, "id"))));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_course_, "title"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "
<div class=\"container-gap course-dashboard-container\">

  ";
        // line 13
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Course:header", array("course" => $_course_)));
        echo "

  <div class=\"row row-8-4\">
    <div class=\"col-md-8 course-dashboard-main\">
      <div class=\"panel panel-default\">
        <div class=\"panel-body\">
          ";
        // line 19
        $this->displayBlock('dashboard_main', $context, $blocks);
        // line 20
        echo "        </div>
      </div>
      <div>
        ";
        // line 23
        $this->displayBlock('dashboard_relatedCoursesBlock', $context, $blocks);
        // line 24
        echo "      </div>
    </div>
    <div class=\"col-md-4 course-dashboard-side\">
      ";
        // line 27
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Course:progressBlock", array("course" => $_course_)));
        echo "
      ";
        // line 28
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:CourseAnnouncement:block", array("course" => $_course_)));
        echo "
      ";
        // line 29
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:CourseThread:questionBlock", array("course" => $_course_)));
        echo "
    </div>
  </div>

</div>

";
    }

    // line 19
    public function block_dashboard_main($context, array $blocks = array())
    {
    }

    // line 23
    public function block_dashboard_relatedCoursesBlock($context, array $blocks = array())
    {
    }

    // line 37
    public function block_bottom($context, array $blocks = array())
    {
        // line 38
        echo "  <div id=\"course-modal\" class=\"modal\"></div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:dashboard-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 38,  110 => 37,  105 => 23,  100 => 19,  88 => 29,  83 => 28,  78 => 27,  73 => 24,  71 => 23,  64 => 19,  54 => 13,  49 => 10,  31 => 7,  29 => 5,  69 => 21,  66 => 20,  63 => 19,  58 => 16,  55 => 15,  52 => 14,  46 => 9,  43 => 9,  40 => 8,  37 => 3,  34 => 6,  28 => 4,  26 => 3,);
    }
}
