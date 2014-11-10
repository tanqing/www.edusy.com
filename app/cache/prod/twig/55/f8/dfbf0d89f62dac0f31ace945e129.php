<?php

/* TopxiaAdminBundle:CourseOrder:refunds.html.twig */
class __TwigTemplate_55f8dfbf0d89f62dac0f31ace945e129 extends Twig_Template
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
        $context["script_controller"] = "order/refunds";
        // line 7
        $context["menu"] = "refunds";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "退款管理 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_main($context, array $blocks = array())
    {
        // line 10
        echo "
  <div class=\"page-header clearfix\">
    <h1>退款管理</h1>
  </div>

  <form id=\"user-search-form\" class=\"form-inline well well-sm\" action=\"\" method=\"get\" novalidate>
    <div class=\"form-group\">
      <select class=\"form-control\" name=\"status\">
        ";
        // line 18
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getDict("refundStatus"), $this->getAttribute($this->getAttribute($_app_, "request"), "get", array(0 => "status"), "method"), "退款状态");
        echo "
      </select>
    </div>

    <div class=\"form-group\">
      <input class=\"form-control\" type=\"text\" name=\"nickname\" value=\"";
        // line 23
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "request"), "get", array(0 => "nickname"), "method"), "html", null, true);
        echo "\" placeholder=\"退款人昵称\">
    </div>

    <div class=\"form-group\">
      <input class=\"form-control\" type=\"text\" name=\"courseId\" value=\"";
        // line 27
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "request"), "get", array(0 => "courseId"), "method"), "html", null, true);
        echo "\" placeholder=\"课程编号\">
    </div>

    <div class=\"form-group\">
      <input class=\"form-control\" type=\"text\" name=\"orderSn\" value=\"";
        // line 31
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "request"), "get", array(0 => "orderSn"), "method"), "html", null, true);
        echo "\" placeholder=\"订单号\">
    </div>

    <button class=\"btn btn-primary\">搜索</button>

  </form>

  <table class=\"table table-striped table-hover\" id=\"refunds-table\">
    <thead>
      <tr>
        <th width=\"50%\">退款订单</th>
        <th>订单成交金额</th>
        <th>退款人</th>
        <th>退款状态</th>
        <th>操作</th>
      </tr>
    </thead>
    <tbody>
      ";
        // line 49
        if (isset($context["refunds"])) { $_refunds_ = $context["refunds"]; } else { $_refunds_ = null; }
        if ($_refunds_) {
            // line 50
            echo "        ";
            if (isset($context["refunds"])) { $_refunds_ = $context["refunds"]; } else { $_refunds_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_refunds_);
            foreach ($context['_seq'] as $context["_key"] => $context["refund"]) {
                // line 51
                echo "          ";
                if (isset($context["orders"])) { $_orders_ = $context["orders"]; } else { $_orders_ = null; }
                if (isset($context["refund"])) { $_refund_ = $context["refund"]; } else { $_refund_ = null; }
                $context["order"] = $this->getAttribute($_orders_, $this->getAttribute($_refund_, "orderId"), array(), "array");
                // line 52
                echo "          ";
                if (isset($context["users"])) { $_users_ = $context["users"]; } else { $_users_ = null; }
                if (isset($context["refund"])) { $_refund_ = $context["refund"]; } else { $_refund_ = null; }
                $context["user"] = $this->getAttribute($_users_, $this->getAttribute($_refund_, "userId"), array(), "array");
                // line 53
                echo "          <tr>
            <td>
              ";
                // line 55
                if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
                if (($this->getAttribute($_order_, "targetType") == "course")) {
                    // line 56
                    echo "                <a href=\"";
                    if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($_order_, "targetId"))), "html", null, true);
                    echo "\" target=\"_blank\">";
                    if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_order_, "title"), "html", null, true);
                    echo "</a>
              ";
                } else {
                    // line 58
                    echo "                ";
                    if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_order_, "title"), "html", null, true);
                    echo "
              ";
                }
                // line 60
                echo "              <div class=\"text-muted text-sm\">订单号：";
                if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_order_, "sn"), "html", null, true);
                echo " | 成交时间：";
                if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_order_, "createdTime"), "Y-n-d H:i"), "html", null, true);
                echo "</div>
              <div class=\"text-muted text-sm\">退款理由：";
                // line 61
                if (isset($context["refund"])) { $_refund_ = $context["refund"]; } else { $_refund_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_refund_, "reasonNote"), "html", null, true);
                echo " | 退款时间：";
                if (isset($context["refund"])) { $_refund_ = $context["refund"]; } else { $_refund_ = null; }
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_refund_, "createdTime"), "Y-n-d H:i"), "html", null, true);
                echo "</div>
            </td>
            <td>";
                // line 63
                if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_order_, "amount"), "html", null, true);
                echo "元</td>
            <td>
              ";
                // line 65
                if (isset($context["admin_macro"])) { $_admin_macro_ = $context["admin_macro"]; } else { $_admin_macro_ = null; }
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_admin_macro_, "user_link", array(0 => $_user_), "method"), "html", null, true);
                echo "
            </td>
            <td>
              ";
                // line 68
                if (isset($context["refund"])) { $_refund_ = $context["refund"]; } else { $_refund_ = null; }
                echo $this->env->getExtension('topxia_web_twig')->getDictText("refundStatus:html", $this->getAttribute($_refund_, "status"));
                echo "
              ";
                // line 69
                if (isset($context["refund"])) { $_refund_ = $context["refund"]; } else { $_refund_ = null; }
                if (($this->getAttribute($_refund_, "status") == "success")) {
                    // line 70
                    echo "                <div class=\"text-sm text-muted\">实退";
                    if (isset($context["refund"])) { $_refund_ = $context["refund"]; } else { $_refund_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_refund_, "actualAmount"), "html", null, true);
                    echo "元</div>
              ";
                }
                // line 72
                echo "            </td>
            <td>
              ";
                // line 74
                if (isset($context["refund"])) { $_refund_ = $context["refund"]; } else { $_refund_ = null; }
                if (($this->getAttribute($_refund_, "status") == "created")) {
                    // line 75
                    echo "                <button class=\"btn btn-sm btn-primary confirm-refund\" type=\"button\" data-target=\"#modal\" data-toggle=\"modal\" data-url=\"";
                    if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_order_audit_refund", array("id" => $this->getAttribute($_order_, "id"))), "html", null, true);
                    echo "\">审核</button>
                <button class=\"btn btn-sm btn-default cancel-refund\" type=\"button\" data-url=\"";
                    // line 76
                    if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_order_cancel_refund", array("id" => $this->getAttribute($_order_, "id"))), "html", null, true);
                    echo "\">取消</button>
              ";
                }
                // line 78
                echo "            </td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['refund'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "      ";
        } else {
            // line 82
            echo "        <tr><td colspan=\"20\"><div class=\"empty\">暂无退款记录</div></td></tr>
      ";
        }
        // line 84
        echo "    </tbody>
  </table>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:CourseOrder:refunds.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 84,  220 => 82,  217 => 81,  209 => 78,  203 => 76,  197 => 75,  194 => 74,  190 => 72,  183 => 70,  180 => 69,  175 => 68,  167 => 65,  161 => 63,  152 => 61,  143 => 60,  136 => 58,  126 => 56,  123 => 55,  119 => 53,  114 => 52,  109 => 51,  103 => 50,  100 => 49,  78 => 31,  70 => 27,  62 => 23,  53 => 18,  43 => 10,  40 => 9,  33 => 3,  28 => 7,  26 => 5,);
    }
}
