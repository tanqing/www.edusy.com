<?php

/* TopxiaWebBundle:User:courses.html.twig */
class __TwigTemplate_456311f6ae7edcdc5f73083cdb0fa473 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaWebBundle:User:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:User:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
        $context["pageNav"] = $_type_;
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " ";
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_user_, "nickname"), "html", null, true);
        echo "的公共主页 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"row\">
  <div class=\"col-md-12\">
\t\t";
        // line 10
        if (isset($context["courses"])) { $_courses_ = $context["courses"]; } else { $_courses_ = null; }
        if ($_courses_) {
            // line 11
            echo "\t\t\t";
            if (isset($context["courses"])) { $_courses_ = $context["courses"]; } else { $_courses_ = null; }
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Course:coursesBlock", array("courses" => $_courses_, "view" => "list")));
            echo "
\t\t\t";
            // line 12
            if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
            if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "paginator", array(0 => $_paginator_), "method"), "html", null, true);
            echo " 
\t\t";
        } else {
            // line 14
            echo "\t\t  ";
            if (isset($context["pageNav"])) { $_pageNav_ = $context["pageNav"]; } else { $_pageNav_ = null; }
            if (($_pageNav_ == "teach")) {
                // line 15
                echo "\t\t\t  <div class=\"empty\">无在教的课程</div>
\t\t\t";
            } elseif (($_pageNav_ == "learn")) {
                // line 17
                echo "\t\t\t  <div class=\"empty\">无在学的课程</div>
\t\t\t";
            } elseif (($_pageNav_ == "favorited")) {
                // line 19
                echo "\t\t\t  <div class=\"empty\">无收藏的课程</div>
\t\t\t";
            }
            // line 21
            echo "\t  ";
        }
        // line 22
        echo "\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:User:courses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 22,  81 => 21,  77 => 19,  73 => 17,  69 => 15,  65 => 14,  58 => 12,  52 => 11,  49 => 10,  45 => 8,  42 => 7,  32 => 3,  26 => 5,);
    }
}
