<?php

/* TopxiaWebBundle:MyQuiz:list-course-test-paper.html.twig */
class __TwigTemplate_695ed16b020a5be2fc89f64ed67a53ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaWebBundle:CourseManage:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:CourseManage:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["macro"] = $this->env->loadTemplate("TopxiaWebBundle::macro.html.twig");
        // line 6
        $context["side_nav"] = "testCheck";
        // line 7
        if (isset($context["parentId"])) { $_parentId_ = $context["parentId"]; } else { $_parentId_ = null; }
        $context["parentId"] = ((array_key_exists("parentId", $context)) ? (_twig_default_filter($_parentId_, null)) : (null));
        // line 8
        $context["script_controller"] = "test-paper/index";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "试卷批阅 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 10
    public function block_main($context, array $blocks = array())
    {
        // line 11
        echo "
<div class=\"panel panel-default panel-col\">

  <div class=\"panel-heading\">
    试卷批阅
  </div>
  <div class=\"panel-body\">
    <ul class=\"nav nav-tabs\">
      <li class=\"";
        // line 19
        if (isset($context["status"])) { $_status_ = $context["status"]; } else { $_status_ = null; }
        if (($_status_ == "reviewing")) {
            echo "active";
        }
        echo "\"><a href=\"";
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_test_check", array("id" => $this->getAttribute($_course_, "id"), "status" => "reviewing")), "html", null, true);
        echo "\">未批阅</a></li>
      <li class=\"";
        // line 20
        if (isset($context["status"])) { $_status_ = $context["status"]; } else { $_status_ = null; }
        if (($_status_ == "finished")) {
            echo "active";
        }
        echo "\"><a href=\"";
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_test_check", array("id" => $this->getAttribute($_course_, "id"), "status" => "finished")), "html", null, true);
        echo "\">已批阅</a></li>
    </ul>
    <br>
    ";
        // line 23
        $this->env->loadTemplate("TopxiaWebBundle:MyQuiz:list-teacher-test.html.twig")->display($context);
        // line 24
        echo "    
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:MyQuiz:list-course-test-paper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 24,  80 => 23,  68 => 20,  58 => 19,  48 => 11,  45 => 10,  38 => 4,  33 => 8,  30 => 7,  28 => 6,  26 => 2,);
    }
}
