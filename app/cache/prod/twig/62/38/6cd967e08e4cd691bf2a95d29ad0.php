<?php

/* TwigBundle:Exception:error404.html.twig */
class __TwigTemplate_62386cd967e08e4cd691bf2a95d29ad0 extends Twig_Template
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
        echo "页面找不到 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "\t<div class=\"container\">
\t\t<div class=\"content\">
\t\t\t<h1>页面找不到</h1>
\t\t\t<div class=\"message\">该页面已被删除，或地址错误。</div>
\t\t\t<div class=\"actions\">
\t\t\t\t<a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("homepage", array("ref" => 404));
        echo "\">返回首页</a>
\t\t\t</div>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 10,  39 => 5,  36 => 4,  29 => 2,);
    }
}
