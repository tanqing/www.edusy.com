<?php

/* TopxiaAdminBundle:System:user-fields.html.twig */
class __TwigTemplate_6175bf06232ab9f726aea15965baca16 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaAdminBundle:System:user_set.layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'maincontent' => array($this, 'block_maincontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle:System:user_set.layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["script_controller"] = "system/user-fields";
        // line 7
        $context["submenu"] = "user_fields";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "用户字段自定义 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_maincontent($context, array $blocks = array())
    {
        // line 10
        echo "<button type=\"button\" class=\"btn btn-primary btn-sm pull-right\" data-toggle=\"modal\" data-target=\"#myModal\">添加字段</button>
<div class=\"page-header\"><br><h1>用户字段自定义</h1></div>
\t<table class=\"table table-striped table-hover\" id=\"course-table\">
\t\t<thead>
\t\t<tr>
\t\t\t<th>字段名称</th>
\t\t\t<th>类型</th>
\t\t\t<th>是否显示</th>
\t\t\t<th>显示序号</th>
\t\t\t<th>创建时间</th>
\t\t\t<th>操作</th>
\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 24
        $this->env->loadTemplate("TopxiaAdminBundle:System:user-fields.table.tr.html.twig")->display($context);
        // line 25
        echo "\t\t</tbody>
\t</table>

";
        // line 28
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "flash_messages", array(), "method"), "html", null, true);
        echo "
";
        // line 29
        $this->env->loadTemplate("TopxiaAdminBundle:System:user-fields.modal.html.twig")->display($context);
        // line 30
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:user-fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 30,  71 => 29,  66 => 28,  61 => 25,  59 => 24,  43 => 10,  40 => 9,  33 => 3,  28 => 7,  26 => 5,);
    }
}
