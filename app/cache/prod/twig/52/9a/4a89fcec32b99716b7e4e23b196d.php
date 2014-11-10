<?php

/* TopxiaAdminBundle:Tag:index.html.twig */
class __TwigTemplate_529a4a89fcec32b99716b7e4e23b196d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaAdminBundle:Course:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle:Course:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["menu"] = "tag";
        // line 6
        $context["script_controller"] = "tag/list";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "标签管理 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "
<div class=\"page-header clearfix\">
  <button class=\"btn btn-info btn-sm pull-right\" id=\"add-tag-btn\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("admin_tag_create");
        echo "\">新增标签</button>    
  <h1 class=\"pull-left\">标签管理</h1>
</div>

<table id=\"tag-table\" class=\"table table-striped\">
    <thead>
        <th width=\"10%\">ID</th>
        <th width=\"60%\">名称</th>
        <th width=\"20%\">添加时间</th>
        <th width=\"10%\">操作</th>
    </thead>
    <tbody>
      ";
        // line 22
        if (isset($context["tags"])) { $_tags_ = $context["tags"]; } else { $_tags_ = null; }
        if ($_tags_) {
            // line 23
            echo "        ";
            if (isset($context["tags"])) { $_tags_ = $context["tags"]; } else { $_tags_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_tags_);
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
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 24
                echo "          ";
                $this->env->loadTemplate("TopxiaAdminBundle:Tag:list-tr.html.twig")->display($context);
                // line 25
                echo "        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "      ";
        } else {
            // line 27
            echo "       <tr><td colspan=\"20\"><div class=\"empty\">暂无标签记录</div></td></tr>
      ";
        }
        // line 29
        echo "
    </tbody>
</table>

";
        // line 33
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "paginator", array(0 => $_paginator_), "method"), "html", null, true);
        echo "


";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Tag:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 33,  108 => 29,  104 => 27,  101 => 26,  87 => 25,  84 => 24,  65 => 23,  62 => 22,  47 => 10,  43 => 8,  40 => 7,  33 => 3,  28 => 6,  26 => 5,);
    }
}
