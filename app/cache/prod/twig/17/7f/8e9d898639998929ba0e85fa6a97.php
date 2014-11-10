<?php

/* TopxiaAdminBundle:ArticleCategory:index.html.twig */
class __TwigTemplate_177f8e9d898639998929ba0e85fa6a97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaAdminBundle:Content:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle:Content:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["menu"] = "category";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "栏目管理 - ";
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
        echo $this->env->getExtension('routing')->getPath("admin_article_category_create");
        echo "\">新建栏目</button>
  <h1 class=\"pull-left\">栏目管理</h1>
</div>

<table class=\"table table-hover\" id=\"category-table\">
  <thead>
    <tr>
      <th width=\"45%\">栏目名称</th>
      <th width=\"20%\">编码</th>
      <th width=\"10%\">显示序号</th>
      <th width=\"20%\">操作</th>
    </tr>
  </thead>
  ";
        // line 23
        $this->env->loadTemplate("TopxiaAdminBundle:ArticleCategory:tbody.html.twig")->display($context);
        // line 24
        echo "</table>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:ArticleCategory:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 24,  61 => 23,  45 => 10,  41 => 8,  38 => 7,  31 => 3,  26 => 5,);
    }
}
