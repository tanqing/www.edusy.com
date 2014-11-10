<?php

/* TopxiaAdminBundle:Article:index.html.twig */
class __TwigTemplate_bc80aa9d7fe1599c6971b98633cef1cb extends Twig_Template
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
        $context["script_controller"] = "article/list";
        // line 7
        $context["menu"] = "article";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "资讯管理 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_main($context, array $blocks = array())
    {
        // line 10
        echo "
<div class=\"page-header clearfix\">
  <a class=\"btn btn-info btn-sm pull-right\" id=\"article-add-btn\" type=\"button\" href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("admin_article_create");
        echo "\"><span class=\"glyphicon glyphicon-plus\"></span> 添加资讯</a>
  <h1 class=\"pull-left\">资讯管理</h1>
</div>

<form class=\"well well-sm form-inline\" action=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("admin_article");
        echo "\">
\t<div class=\"form-group\">
\t\t<select class=\"form-control\" name=\"categoryId\">
\t\t <option value=\"\">--所属栏目--</option>
\t\t   ";
        // line 20
        if (isset($context["categoryTree"])) { $_categoryTree_ = $context["categoryTree"]; } else { $_categoryTree_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_categoryTree_);
        foreach ($context['_seq'] as $context["_key"] => $context["tree"]) {
            // line 21
            echo "\t\t\t\t\t<option value=";
            if (isset($context["tree"])) { $_tree_ = $context["tree"]; } else { $_tree_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_tree_, "id"), "html", null, true);
            echo " ";
            if (isset($context["tree"])) { $_tree_ = $context["tree"]; } else { $_tree_ = null; }
            if (isset($context["categoryId"])) { $_categoryId_ = $context["categoryId"]; } else { $_categoryId_ = null; }
            if (($this->getAttribute($_tree_, "id") == $_categoryId_)) {
                echo "selected";
            }
            echo ">";
            if (isset($context["tree"])) { $_tree_ = $context["tree"]; } else { $_tree_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (($this->getAttribute($_tree_, "depth") - 1) * 2)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                echo "&nbsp;&nbsp;&nbsp;&nbsp;";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "└─ ";
            if (isset($context["tree"])) { $_tree_ = $context["tree"]; } else { $_tree_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_tree_, "name"), "html", null, true);
            echo "</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tree'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "\t\t</select>
\t</div>
\t<div class=\"form-group\">
\t\t<input class=\"form-control\" name=\"keywords\" type=\"text\" placeholder=\"标题关键词\" value=\"";
        // line 26
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request"), "query"), "get", array(0 => "keywords"), "method"), "html", null, true);
        echo "\">
\t</div>
\t<div class=\"form-group\">
\t\t<select class=\"form-control\" name=\"property\">
\t\t  ";
        // line 30
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getDict("articleProperty"), $this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request"), "query"), "get", array(0 => "property"), "method"), "--属性--");
        echo "
\t\t</select>
\t</div>
\t<div class=\"form-group\">
\t\t<select class=\"form-control\" name=\"status\">
\t\t  ";
        // line 35
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getDict("articleStatus"), $this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request"), "query"), "get", array(0 => "status"), "method"), "--发布状态--");
        echo "
\t\t</select>
\t</div>
\t<button class=\"btn btn-primary pull-right\" type=\"submit\">搜索</button>
</form>

<div id=\"aticle-table-container\">

<table class=\"table table-hover table-striped\" id=\"article-table\">
\t<thead>
\t\t<tr>
\t\t\t<th width=\"10%\"><input type=\"checkbox\"  data-role=\"batch-select\"> ID</th>
\t\t\t<th width=\"20%\">资讯标题</th>
\t\t\t<th width=\"15%\">栏目</th>
\t\t\t<th width=\"18%\">更新时间</th>
\t\t\t<th width=\"15%\">属性</th>
\t\t\t<th width=\"10%\">状态</th>
\t\t\t<th width=\"15%\">操作</th>
\t\t</tr>
\t</thead>
\t<tbody>
\t\t";
        // line 56
        if (isset($context["articles"])) { $_articles_ = $context["articles"]; } else { $_articles_ = null; }
        if ($_articles_) {
            // line 57
            echo "\t\t\t";
            if (isset($context["articles"])) { $_articles_ = $context["articles"]; } else { $_articles_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_articles_);
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
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 58
                echo "\t\t\t  ";
                if (isset($context["categories"])) { $_categories_ = $context["categories"]; } else { $_categories_ = null; }
                if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                $context["category"] = (($this->getAttribute($_categories_, $this->getAttribute($_article_, "categoryId"), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_categories_, $this->getAttribute($_article_, "categoryId"), array(), "array"), null)) : (null));
                // line 59
                echo "\t\t\t  ";
                $this->env->loadTemplate("TopxiaAdminBundle:Article:article-tr.html.twig")->display($context);
                // line 60
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "\t\t";
        } else {
            // line 62
            echo "\t\t\t<tr><td colspan=\"20\"><div class=\"empty\">暂无页面记录</div></td></tr>
\t\t";
        }
        // line 64
        echo "\t</tbody>
\t</table>
  <div>
    <label class=\"checkbox-inline\"><input type=\"checkbox\" data-role=\"batch-select\"> 全选</label>
    <button class=\"btn btn-default btn-sm mlm\" data-role=\"batch-delete\"  data-name=\"资讯\" data-url=\"";
        // line 68
        echo $this->env->getExtension('routing')->getPath("admin_article_delete");
        echo "\">删除</button>
  </div>
  </div>

";
        // line 72
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "paginator", array(0 => $_paginator_), "method"), "html", null, true);
        echo "

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Article:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 72,  199 => 68,  193 => 64,  189 => 62,  186 => 61,  172 => 60,  169 => 59,  164 => 58,  145 => 57,  142 => 56,  117 => 35,  108 => 30,  100 => 26,  95 => 23,  66 => 21,  61 => 20,  54 => 16,  47 => 12,  43 => 10,  40 => 9,  33 => 3,  28 => 7,  26 => 5,);
    }
}
