<?php

/* TopxiaAdminBundle:CourseQuestion:tab.html.twig */
class __TwigTemplate_aa97a0c7c26aab60d8feceecee174ca0 extends Twig_Template
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
        if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
        if (($_type_ == "unPosted")) {
            // line 6
            echo "    class=\"active\"
    ";
        }
        // line 8
        echo "    ><a href=\"";
        echo $this->env->getExtension('routing')->getUrl("admin_question", array("postStatus" => "unPosted"));
        echo "\">未回复</a></li>
    <li
    ";
        // line 10
        if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
        if (($_type_ == "all")) {
            // line 11
            echo "    class=\"active\"
    ";
        }
        // line 13
        echo "    ><a href=\" ";
        echo $this->env->getExtension('routing')->getUrl("admin_question", array("postStatus" => "all"));
        echo "\">所有</a></li>
  </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:CourseQuestion:tab.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 13,  41 => 11,  38 => 10,  32 => 8,  25 => 5,  19 => 1,  305 => 115,  298 => 111,  291 => 106,  284 => 104,  269 => 101,  267 => 100,  260 => 97,  252 => 94,  247 => 91,  237 => 89,  230 => 87,  227 => 86,  221 => 82,  218 => 81,  203 => 79,  200 => 78,  197 => 77,  188 => 76,  185 => 75,  177 => 71,  172 => 70,  162 => 67,  156 => 65,  153 => 64,  148 => 63,  143 => 62,  139 => 61,  136 => 60,  117 => 59,  109 => 53,  105 => 51,  101 => 49,  98 => 48,  80 => 34,  70 => 28,  61 => 23,  52 => 16,  50 => 15,  43 => 10,  40 => 9,  33 => 3,  28 => 6,  26 => 5,);
    }
}
