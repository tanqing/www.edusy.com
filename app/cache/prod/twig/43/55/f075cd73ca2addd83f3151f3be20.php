<?php

/* TopxiaWebBundle:Tag:show.html.twig */
class __TwigTemplate_4355f075cd73ca2addd83f3151f3be20 extends Twig_Template
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
        echo "标签";
        if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
        if ($_tag_) {
            echo ":";
            if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_tag_, "name"), "html", null, true);
        }
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
<div class=\"es-row-wrap container-gap\">
  <div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"page-header\"><h1>标签";
        // line 10
        if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
        if ($_tag_) {
            echo ":";
            if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_tag_, "name"), "html", null, true);
        }
        echo "</h1></div>
    </div>
  </div>

  <div class=\"row\" style=\"min-height:300px;\">
    <div class=\"col-md-9\">
      ";
        // line 16
        if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
        if ($_tag_) {
            // line 17
            echo "        ";
            if (isset($context["courses"])) { $_courses_ = $context["courses"]; } else { $_courses_ = null; }
            if ($_courses_) {
                // line 18
                echo "          ";
                if (isset($context["courses"])) { $_courses_ = $context["courses"]; } else { $_courses_ = null; }
                echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Course:coursesBlock", array("courses" => $_courses_, "view" => "list")));
                echo "
          ";
                // line 19
                if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
                if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "paginator", array(0 => $_paginator_), "method"), "html", null, true);
                echo " 
        ";
            } else {
                // line 21
                echo "          <div class=\"empty\">没有搜到相关课程，请换个标签试试！</div>
        ";
            }
            // line 23
            echo "      ";
        } else {
            // line 24
            echo "        <div class=\"empty\">标签不存在，请重新输入！</div>
      ";
        }
        // line 26
        echo "    </div>
    <div class=\"col-md-3\">
      <a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("tag");
        echo "\">&raquo; 查看所有标签</a>
    </div>
  </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Tag:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 28,  97 => 26,  93 => 24,  90 => 23,  86 => 21,  79 => 19,  73 => 18,  69 => 17,  66 => 16,  52 => 10,  46 => 6,  43 => 5,  29 => 3,);
    }
}
