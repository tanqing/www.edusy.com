<?php

/* TopxiaAdminBundle:Category:embed.html.twig */
class __TwigTemplate_b4931ad2463e07a94fa90161afe9397f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getContext($context, "layout"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["menu"] = "category";
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_group_, "name"), "html", null, true);
        echo "管理 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "
<div class=\"page-header clearfix\">
  <button class=\"btn btn-sm btn-info pull-right add-category\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
        // line 10
        if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_category_create", array("groupId" => $this->getAttribute($_group_, "id"))), "html", null, true);
        echo "\">添加分类</button>
  <h1 class=\"pull-left\">";
        // line 11
        if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_group_, "name"), "html", null, true);
        echo "管理</h1>
</div>

<table class=\"table table-hover\" id=\"category-table\">
  <thead>
    <tr>
      <th width=\"50%\">名称</th>
      <th width=\"15%\">编码</th>
      <th width=\"15%\">显示序号</th>
      <th width=\"20%\">操作</th>
    </tr>
  </thead>
  ";
        // line 23
        $this->env->loadTemplate("TopxiaAdminBundle:Category:tbody.html.twig")->display($context);
        // line 24
        echo "</table>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Category:embed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 24,  66 => 23,  50 => 11,  45 => 10,  41 => 8,  38 => 7,  29 => 3,  24 => 5,);
    }
}
