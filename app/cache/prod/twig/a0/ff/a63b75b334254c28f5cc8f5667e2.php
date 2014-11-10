<?php

/* TopxiaAdminBundle:LiveCourse:tab.html.twig */
class __TwigTemplate_a0ffa63b75b334254c28f5cc8f5667e2 extends Twig_Template
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
<div data-role=\"navigation\">
  <ul class=\"nav nav-tabs\">
    <li 
    ";
        // line 5
        if (isset($context["status"])) { $_status_ = $context["status"]; } else { $_status_ = null; }
        if (($_status_ == "underway")) {
            // line 6
            echo "    class=\"active\"
    ";
        }
        // line 8
        echo "    ><a href=\"";
        echo $this->env->getExtension('routing')->getUrl("admin_live_course", array("status" => "underway"));
        echo "\">当前进行中</a></li>
    <li
    ";
        // line 10
        if (isset($context["status"])) { $_status_ = $context["status"]; } else { $_status_ = null; }
        if (($_status_ == "coming")) {
            // line 11
            echo "    class=\"active\"
    ";
        }
        // line 13
        echo "    ><a href=\" ";
        echo $this->env->getExtension('routing')->getUrl("admin_live_course", array("status" => "coming"));
        echo "\">即将开始的</a></li>
    <li
    ";
        // line 15
        if (isset($context["status"])) { $_status_ = $context["status"]; } else { $_status_ = null; }
        if (($_status_ == "end")) {
            // line 16
            echo "    class=\"active\"
    ";
        }
        // line 18
        echo "    ><a href=\" ";
        echo $this->env->getExtension('routing')->getUrl("admin_live_course", array("status" => "end"));
        echo "\">已结束的</a></li>
  </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:LiveCourse:tab.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 18,  54 => 16,  51 => 15,  45 => 13,  32 => 8,  28 => 6,  25 => 5,  19 => 1,  119 => 34,  114 => 31,  107 => 29,  94 => 28,  91 => 27,  86 => 26,  67 => 25,  59 => 21,  49 => 13,  47 => 12,  41 => 11,  38 => 10,  31 => 3,  26 => 5,);
    }
}
