<?php

/* TopxiaAdminBundle:App:layout.html.twig */
class __TwigTemplate_8c082bb072c02166c6242765a46f0772 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaAdminBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'sidebar' => array($this, 'block_sidebar'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["nav"] = "app";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "  <div class=\"col-md-2\">
    ";
        // line 7
        $this->displayBlock('sidebar', $context, $blocks);
        // line 22
        echo "  </div>
  <div class=\"col-md-10\">
      ";
        // line 24
        $this->displayBlock('main', $context, $blocks);
        // line 25
        echo "  </div>
";
    }

    // line 7
    public function block_sidebar($context, array $blocks = array())
    {
        // line 8
        echo "
      <div class=\"panel panel-default\">
        <div class=\"panel-heading\">应用管理</div>
        <div class=\"list-group\">
          <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("admin_app_center");
        echo "\" class=\"list-group-item ";
        if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
        if (($_menu_ == "center")) {
            echo "active";
        }
        echo "\">应用中心</a>
          <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("admin_app_installed");
        echo "\" class=\"list-group-item ";
        if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
        if (($_menu_ == "installed")) {
            echo "active";
        }
        echo "\">已安装应用</a>
          <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("admin_app_upgrades");
        echo "\" class=\"list-group-item ";
        if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
        if (($_menu_ == "upgrades")) {
            echo "active";
        }
        echo "\">检查应用更新</a>
          <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("admin_app_logs");
        echo "\" class=\"list-group-item ";
        if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
        if (($_menu_ == "logs")) {
            echo "active";
        }
        echo "\">应用更新日志</a>
        </div>

      </div>


    ";
    }

    // line 24
    public function block_main($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:App:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 15,  78 => 14,  69 => 13,  54 => 8,  46 => 25,  44 => 24,  38 => 7,  35 => 6,  32 => 5,  27 => 3,  147 => 49,  142 => 46,  125 => 42,  117 => 38,  111 => 36,  103 => 24,  94 => 30,  80 => 29,  76 => 27,  71 => 26,  60 => 12,  57 => 16,  51 => 7,  48 => 13,  43 => 10,  40 => 22,  33 => 3,  28 => 7,  26 => 5,);
    }
}
