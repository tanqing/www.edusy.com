<?php

/* TopxiaAdminBundle:Block:index.html.twig */
class __TwigTemplate_efcc021851d5fb00c5cad153081b9e2d extends Twig_Template
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
        $context["menu"] = "admin_block";
        // line 6
        $context["script_controller"] = "block/list";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "编辑区管理 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"page-header\">
  ";
        // line 9
        if ($this->env->getExtension('topxia_web_twig')->getSetting("developer.debug")) {
            // line 10
            echo "    <button class=\"btn btn-info btn-sm pull-right\" id=\"add-block-btn\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
            echo $this->env->getExtension('routing')->getPath("admin_block_create");
            echo "\">新增编辑区</button>  
  ";
        }
        // line 12
        echo "  <h1>编辑区管理</h1>
</div>

<table id=\"block-table\" class=\"table table-striped\">
  <thead>
    <tr>
      <th width=\"50%\">标题</th>
      <th width=\"25%\">最近更新</th>
      <th width=\"25%\">操作</th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 24
        if (isset($context["blocks"])) { $_blocks_ = $context["blocks"]; } else { $_blocks_ = null; }
        if ($_blocks_) {
            // line 25
            echo "      ";
            if (isset($context["blocks"])) { $_blocks_ = $context["blocks"]; } else { $_blocks_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_blocks_);
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
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 26
                echo "        ";
                $this->env->loadTemplate("TopxiaAdminBundle:Block:list-tr.html.twig")->display($context);
                // line 27
                echo "      ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "  ";
        } else {
            // line 29
            echo "        <tr><td colspan=\"20\"><div class=\"empty\">暂无编辑区记录</div></td></tr>
  ";
        }
        // line 31
        echo "   </tbody>
</table>

 ";
        // line 34
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "paginator", array(0 => $_paginator_), "method"), "html", null, true);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Block:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 34,  114 => 31,  110 => 29,  107 => 28,  93 => 27,  90 => 26,  71 => 25,  68 => 24,  54 => 12,  48 => 10,  46 => 9,  43 => 8,  40 => 7,  33 => 3,  28 => 6,  26 => 5,);
    }
}
