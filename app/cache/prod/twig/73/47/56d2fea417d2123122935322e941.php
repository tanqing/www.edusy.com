<?php

/* TwigBundle:Exception:error403.html.twig */
class __TwigTemplate_734756d2fea417d2123122935322e941 extends Twig_Template
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
        echo "访问被拒绝 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "  <div class=\"container\">
    <div class=\"content\">
      <h1>访问被拒绝</h1>
      <div class=\"message\">
        ";
        // line 9
        if (isset($context["exception"])) { $_exception_ = $context["exception"]; } else { $_exception_ = null; }
        if ($this->getAttribute($_exception_, "message")) {
            // line 10
            echo "          ";
            if (isset($context["exception"])) { $_exception_ = $context["exception"]; } else { $_exception_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_exception_, "message"), "html", null, true);
            echo "
        ";
        } else {
            // line 12
            echo "           你没有权限访问该页面！
        ";
        }
        // line 14
        echo "      </div>
      <div class=\"actions\">
        <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("homepage", array("ref" => 403));
        echo "\">返回首页</a>
      </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error403.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 16,  59 => 14,  55 => 12,  48 => 10,  45 => 9,  39 => 5,  36 => 4,  29 => 2,);
    }
}
