<?php

/* TopxiaWebBundle:User:group.html.twig */
class __TwigTemplate_97c637c30d22ba6bab96adebb4cc6576 extends Twig_Template
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
        $context["pageNav"] = "group";
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
        echo "      <div class=\"row\">
        <div class=\"col-md-12\"> 
          ";
        // line 10
        if (isset($context["adminGroups"])) { $_adminGroups_ = $context["adminGroups"]; } else { $_adminGroups_ = null; }
        if ($_adminGroups_) {
            // line 11
            echo "          <div class=\"page-header\">
            <h4> 管理的小组</h4>
          </div>
          ";
            // line 14
            if (isset($context["adminGroups"])) { $_adminGroups_ = $context["adminGroups"]; } else { $_adminGroups_ = null; }
            $this->env->loadTemplate("TopxiaWebBundle:Group:groups-ul.html.twig")->display(array_merge($context, array("groups" => $_adminGroups_)));
            // line 17
            echo "          ";
        }
        // line 18
        echo "        </div>
        <div class=\"col-md-12\">
          <div class=\"page-header\">
            <h4> 加入的小组</h4>
          </div>
          ";
        // line 23
        if (isset($context["groups"])) { $_groups_ = $context["groups"]; } else { $_groups_ = null; }
        $this->env->loadTemplate("TopxiaWebBundle:Group:groups-ul.html.twig")->display(array_merge($context, array("groups" => $_groups_)));
        // line 26
        echo "          
        </div>
        <div class=\"col-md-12 pull-left\">
          ";
        // line 29
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "paginator", array(0 => $_paginator_), "method"), "html", null, true);
        echo "
        </div>
      </div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:User:group.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 29,  72 => 26,  69 => 23,  62 => 18,  59 => 17,  56 => 14,  51 => 11,  48 => 10,  44 => 8,  41 => 7,  31 => 3,  26 => 5,);
    }
}
