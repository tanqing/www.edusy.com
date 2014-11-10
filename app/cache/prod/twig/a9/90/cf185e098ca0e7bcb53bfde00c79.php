<?php

/* TopxiaWebBundle:Search:index.html.twig */
class __TwigTemplate_a990cf185e098ca0e7bcb53bfde00c79 extends Twig_Template
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
        echo "搜索：";
        if (isset($context["keywords"])) { $_keywords_ = $context["keywords"]; } else { $_keywords_ = null; }
        echo twig_escape_filter($this->env, $_keywords_, "html", null, true);
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
      <div class=\"page-header\"><h1>搜索</h1></div>
    </div>
  </div>

  <div class=\"row row-3-9\">
    <div class=\"col-md-9\" style=\"min-height:300px;\">

      ";
        // line 33
        echo "      <form class=\"well well-sm\" action=\"";
        echo $this->env->getExtension('routing')->getPath("search");
        echo "\">
      <div class=\"input-group input-group-lg\">
           <input type=\"text\" class=\"form-control\" name=\"q\" value=\"";
        // line 35
        if (isset($context["keywords"])) { $_keywords_ = $context["keywords"]; } else { $_keywords_ = null; }
        echo twig_escape_filter($this->env, $_keywords_, "html", null, true);
        echo "\">
             <span class=\"input-group-btn\">
             <button class=\"btn btn-primary\" type=\"submit\">搜索</button>
      </span>
      </div>
      </form>
";
        // line 42
        echo "

      ";
        // line 44
        if (isset($context["keywords"])) { $_keywords_ = $context["keywords"]; } else { $_keywords_ = null; }
        if ($_keywords_) {
            // line 45
            echo "        ";
            if (isset($context["courses"])) { $_courses_ = $context["courses"]; } else { $_courses_ = null; }
            if ($_courses_) {
                // line 46
                echo "          ";
                if (isset($context["courses"])) { $_courses_ = $context["courses"]; } else { $_courses_ = null; }
                echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Course:coursesBlock", array("courses" => $_courses_, "view" => "list")));
                echo "
          ";
                // line 47
                if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
                if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "paginator", array(0 => $_paginator_), "method"), "html", null, true);
                echo " 
        ";
            } else {
                // line 49
                echo "          <div class=\"empty\">没有搜到相关课程，请换个关键词试试！</div>
        ";
            }
            // line 51
            echo "      ";
        } else {
            // line 52
            echo "        <div class=\"empty\">请输入搜索关键词！</div>
      ";
        }
        // line 54
        echo "    </div>
    <div class=\"col-md-3\">

    </div>
  </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Search:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 54,  102 => 52,  99 => 51,  95 => 49,  88 => 47,  82 => 46,  78 => 45,  75 => 44,  71 => 42,  61 => 35,  55 => 33,  42 => 6,  39 => 5,  29 => 3,);
    }
}
