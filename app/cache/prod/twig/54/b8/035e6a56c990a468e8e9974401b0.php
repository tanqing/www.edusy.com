<?php

/* TopxiaAdminBundle:Order:manage.html.twig */
class __TwigTemplate_54b8035e6a56c990a468e8e9974401b0 extends Twig_Template
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
        // line 9
        $context["menu"] = "order";
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
        echo $this->env->getExtension('topxia_web_twig')->getDictText("targetName", $_type_);
        echo "订单管理 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 11
    public function block_main($context, array $blocks = array())
    {
        // line 12
        echo "
  <div class=\"page-header clearfix\">
    <h1>";
        // line 14
        if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
        echo $this->env->getExtension('topxia_web_twig')->getDictText("targetName", $_type_);
        echo "订单管理</h1>
  </div>

  <form id=\"user-search-form\" class=\"form-inline well well-sm\" action=\"\" method=\"get\" novalidate>
    <div class=\"form-group\">
      <select class=\"form-control\" name=\"status\">
        ";
        // line 20
        if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getDict("orderStatus"), $this->getAttribute($_request_, "get", array(0 => "status"), "method"), "订单状态");
        echo "
      </select>
    </div>

    <div class=\"form-group\">
      <select class=\"form-control\" name=\"payment\">
        ";
        // line 26
        if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getDict("payment"), $this->getAttribute($_request_, "get", array(0 => "payment"), "method"), "支付方式");
        echo "
      </select>
    </div>

    <div class=\"form-group\" style=\"display:none;\">
      <input class=\"form-control\" type=\"text\" name=\"paidTimeRange\", placeholder=\"付款时间段\">
    </div>

    <span class=\"divider\"></span>

    <div class=\"form-group\">
      <select class=\"form-control\" name=\"keywordType\">
        ";
        // line 38
        if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
        $context["options"] = array("sn" => "订单号", "buyer" => "购买者用户名", "targetId" => ($this->env->getExtension('topxia_web_twig')->getDictText("targetName", $_type_) . "编号"));
        // line 39
        echo "        ";
        if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
        if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->selectOptions($_options_, $this->getAttribute($_request_, "get", array(0 => "keywordType"), "method"));
        echo "
      </select>
    </div>

    <div class=\"form-group\">
      <input class=\"form-control\" type=\"text\" name=\"keyword\" value=\"";
        // line 44
        if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_request_, "get", array(0 => "keyword"), "method"), "html", null, true);
        echo "\" placeholder=\"关键词\">
    </div>

    <button class=\"btn btn-primary\">搜索</button>

  </form>
      
  <table class=\"table table-striped table-hover\" id=\"order-table\">
    <thead>
      <tr>
        <th width=\"50%\">名称</th>
        <th>状态</th>
        <th>价格(元)</th>
        <th>购买者</th>
        <th>付款方式</th>
        <th>操作</th>
      </tr>
    </thead>
    <tbody>
      ";
        // line 63
        if (isset($context["orders"])) { $_orders_ = $context["orders"]; } else { $_orders_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_orders_);
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 64
            echo "        ";
            if (isset($context["users"])) { $_users_ = $context["users"]; } else { $_users_ = null; }
            if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
            $context["buyer"] = (($this->getAttribute($_users_, $this->getAttribute($_order_, "userId"), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_users_, $this->getAttribute($_order_, "userId"), array(), "array"), null)) : (null));
            // line 65
            echo "        ";
            $this->env->loadTemplate("TopxiaAdminBundle:Order:tr.html.twig")->display($context);
            // line 66
            echo "      ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 67
            echo "        <tr><td colspan=\"20\"><div class=\"empty\">暂无订单记录</div></td></tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "    </tbody>
  </table>

  <div class=\"paginator\">
    ";
        // line 73
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "paginator", array(0 => $_paginator_), "method"), "html", null, true);
        echo " 
  </div>


";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Order:manage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 73,  165 => 69,  158 => 67,  145 => 66,  142 => 65,  137 => 64,  118 => 63,  95 => 44,  84 => 39,  81 => 38,  65 => 26,  55 => 20,  45 => 14,  41 => 12,  38 => 11,  29 => 3,  24 => 9,);
    }
}
