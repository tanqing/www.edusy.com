<?php

/* TopxiaAdminBundle:Content:index.html.twig */
class __TwigTemplate_cb09a8a6c7860379ac5eb175dc029e9d extends Twig_Template
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
        $context["script_controller"] = "content/list";
        // line 7
        $context["menu"] = "content";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "内容管理 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_main($context, array $blocks = array())
    {
        // line 10
        echo "
";
        // line 11
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        $context["type"] = $this->getAttribute($this->getAttribute($_app_, "request"), "get", array(0 => "type"), "method");
        // line 12
        if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
        $context["typeName"] = $this->getAttribute($this->env->getExtension('topxia_web_twig')->getDict("contentType"), $_type_, array(), "array");
        // line 13
        echo "

<div class=\"page-header clearfix\">
  <button class=\"btn btn-info btn-sm pull-right\" id=\"content-add-btn\" type=\"button\" data-target=\"#modal\" data-toggle=\"modal\" data-url=\"";
        // line 16
        if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_content_create", array("type" => $_type_)), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-plus\"></span> 添加";
        if (isset($context["typeName"])) { $_typeName_ = $context["typeName"]; } else { $_typeName_ = null; }
        echo twig_escape_filter($this->env, $_typeName_, "html", null, true);
        echo "</button>
  <h1 class=\"pull-left\">";
        // line 17
        if (isset($context["typeName"])) { $_typeName_ = $context["typeName"]; } else { $_typeName_ = null; }
        echo twig_escape_filter($this->env, $_typeName_, "html", null, true);
        echo "管理</h1>
</div>

<form class=\"well well-sm form-inline\">
\t<div class=\"form-group\">
\t\t<select class=\"form-control\" name=\"status\">
\t\t  ";
        // line 23
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getDict("contentStatus"), $this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request"), "query"), "get", array(0 => "status"), "method"), "--所有状态--");
        echo "
\t\t</select>
\t</div>
\t<div class=\"form-group\">
\t\t<input class=\"form-control\" name=\"keywords\" type=\"text\" placeholder=\"关键词\" value=\"";
        // line 27
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request"), "query"), "get", array(0 => "keywords"), "method"), "html", null, true);
        echo "\">
\t</div>
\t\t<input type=\"hidden\" name=\"type\" value=\"";
        // line 29
        if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
        echo twig_escape_filter($this->env, $_type_, "html", null, true);
        echo "\">
\t<button class=\"btn btn-primary\" type=\"submit\">搜索</button>
</form>

<table class=\"table table-hover\" id=\"content-table\">
\t<thead>
\t\t<tr>
\t\t\t<th width=\"50%\">标题</th>
\t\t\t<th>类型</th>
\t\t\t<th>状态</th>
\t\t\t<th>发布时间/人</th>
\t\t\t<th>操作</th>
\t\t</tr>
\t</thead>
\t<tbody>
\t\t";
        // line 44
        if (isset($context["contents"])) { $_contents_ = $context["contents"]; } else { $_contents_ = null; }
        if ($_contents_) {
            // line 45
            echo "\t\t\t";
            if (isset($context["contents"])) { $_contents_ = $context["contents"]; } else { $_contents_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_contents_);
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
                // line 46
                echo "\t\t\t  ";
                if (isset($context["users"])) { $_users_ = $context["users"]; } else { $_users_ = null; }
                if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
                $context["user"] = $this->getAttribute($_users_, $this->getAttribute($_content_, "userId"), array(), "array");
                // line 47
                echo "\t\t\t  ";
                if (isset($context["categories"])) { $_categories_ = $context["categories"]; } else { $_categories_ = null; }
                if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
                $context["category"] = (($this->getAttribute($_categories_, $this->getAttribute($_content_, "categoryId"), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_categories_, $this->getAttribute($_content_, "categoryId"), array(), "array"), null)) : (null));
                // line 48
                echo "\t\t\t  ";
                $this->env->loadTemplate("TopxiaAdminBundle:Content:content-tr.html.twig")->display($context);
                // line 49
                echo "\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "\t\t";
        } else {
            // line 51
            echo "\t\t\t<tr><td colspan=\"20\"><div class=\"empty\">暂无页面记录</div></td></tr>
\t\t";
        }
        // line 53
        echo "\t</tbody>
</table>

";
        // line 56
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "paginator", array(0 => $_paginator_), "method"), "html", null, true);
        echo "

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Content:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 56,  164 => 53,  160 => 51,  157 => 50,  143 => 49,  140 => 48,  135 => 47,  130 => 46,  111 => 45,  108 => 44,  89 => 29,  83 => 27,  75 => 23,  65 => 17,  57 => 16,  52 => 13,  49 => 12,  46 => 11,  43 => 10,  40 => 9,  33 => 3,  28 => 7,  26 => 5,);
    }
}
