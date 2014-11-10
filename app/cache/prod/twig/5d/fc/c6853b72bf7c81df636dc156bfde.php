<?php

/* TopxiaAdminBundle:OperationAnalysis:register.html.twig */
class __TwigTemplate_5dfcc6853b72bf7c81df636dc156bfde extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaAdminBundle:OperationAnalysis:analysis-base-layout.html.twig");

        $this->blocks = array(
            'analysisBody' => array($this, 'block_analysisBody'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle:OperationAnalysis:analysis-base-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["script_controller"] = "analysis/register";
        // line 3
        $context["href"] = "admin_operation_analysis_register";
        // line 4
        $context["menu"] = "register";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_analysisBody($context, array $blocks = array())
    {
        // line 6
        echo "  <div class=\"col-md-12\">  
              ";
        // line 7
        if (isset($context["tab"])) { $_tab_ = $context["tab"]; } else { $_tab_ = null; }
        if (($_tab_ == "trend")) {
            // line 8
            echo "\t <div id=\"line-data\"></div>
\t           <input id=\"data\"  type=\"hidden\" value='";
            // line 9
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            if ($_data_) {
                if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                echo twig_escape_filter($this->env, $_data_, "html", null, true);
            }
            echo "'>  
\t          </input>
\t          <input id=\"registerStartDate\"  type=\"hidden\" value='";
            // line 11
            if (isset($context["registerStartDate"])) { $_registerStartDate_ = $context["registerStartDate"]; } else { $_registerStartDate_ = null; }
            if ($_registerStartDate_) {
                if (isset($context["registerStartDate"])) { $_registerStartDate_ = $context["registerStartDate"]; } else { $_registerStartDate_ = null; }
                echo twig_escape_filter($this->env, $_registerStartDate_, "html", null, true);
            }
            echo "'>  
\t          </input>
              ";
        } elseif (($_tab_ == "detail")) {
            // line 14
            echo "                    ";
            $this->env->loadTemplate("TopxiaAdminBundle:OperationAnalysis:register.table.html.twig")->display($context);
            // line 15
            echo "              ";
        }
        // line 16
        echo "  </div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:OperationAnalysis:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 16,  68 => 15,  65 => 14,  55 => 11,  46 => 9,  43 => 8,  40 => 7,  37 => 6,  34 => 5,  29 => 4,  27 => 3,  25 => 2,);
    }
}
