<?php

/* TwigBundle:Exception:error.html.twig */
class __TwigTemplate_64d3cbf17a93224824c280fc4d6d96ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle:Exception:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle:Exception:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "出错啦 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "\t<div class=\"container\">
\t\t<div class=\"content\">
\t\t\t<h1>哇哦，有状况发生啦！</h1>
\t\t\t<div class=\"message\">服务器返回了\"";
        // line 8
        if (isset($context["status_code"])) { $_status_code_ = $context["status_code"]; } else { $_status_code_ = null; }
        echo twig_escape_filter($this->env, $_status_code_, "html", null, true);
        echo " ";
        if (isset($context["status_text"])) { $_status_text_ = $context["status_text"]; } else { $_status_text_ = null; }
        echo twig_escape_filter($this->env, $_status_text_, "html", null, true);
        echo "\"。
\t\t\t\t看起来是像出了点状况，请把该信息报告给管理员。我们会立即修复这个问题。真的非常抱歉！</div>
\t\t\t<div class=\"actions\">
\t\t\t\t<a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("homepage", array("ref" => 500));
        echo "\">返回首页</a>
\t\t\t</div>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 11,  44 => 8,  39 => 5,  36 => 4,  29 => 2,);
    }
}
