<?php

/* TopxiaAdminBundle:App:logs.html.twig */
class __TwigTemplate_384be9e14558c3f884825b3c7b092cb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaAdminBundle:App:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle:App:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["script_controller"] = "app/logs";
        // line 7
        $context["menu"] = "logs";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "应用更新日志 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_main($context, array $blocks = array())
    {
        // line 10
        echo "  <style>
    .table .popover {
      max-width: 400px;
    }
  </style>

  <div class=\"page-header\">
    <h1>应用更新日志</h1>
  </div>

  <table class=\"table table-striped table-hover\">
    <thead>
      <tr>
        <th>应用名称</th>
        <th>类型</th>
        <th>操作人</th>
        <th>状态</th>
      </tr>
    </thead>
    <tbody>
      ";
        // line 30
        if (isset($context["logs"])) { $_logs_ = $context["logs"]; } else { $_logs_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_logs_);
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 31
            echo "        <tr>
          <td>";
            // line 32
            if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_log_, "name"), "html", null, true);
            echo "</td>
          <td>
            ";
            // line 34
            if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
            if (($this->getAttribute($_log_, "type") == "install")) {
                // line 35
                echo "              安装
              <br> <small class=\"text-muted\">(";
                // line 36
                if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_log_, "toVersion"), "html", null, true);
                echo ")</small>
            ";
            } else {
                // line 38
                echo "              升级
              <br> <small class=\"text-muted\">版本： ";
                // line 39
                if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_log_, "fromVersion"), "html", null, true);
                echo " -&gt; ";
                if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_log_, "toVersion"), "html", null, true);
                echo "</small>
            ";
            }
            // line 41
            echo "          </td>
          <td>
            ";
            // line 43
            if (isset($context["admin_macro"])) { $_admin_macro_ = $context["admin_macro"]; } else { $_admin_macro_ = null; }
            if (isset($context["users"])) { $_users_ = $context["users"]; } else { $_users_ = null; }
            if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_admin_macro_, "user_link", array(0 => $this->getAttribute($_users_, $this->getAttribute($_log_, "userId"), array(), "array")), "method"), "html", null, true);
            echo "
            <br>
            <small class=\"text-muted\">";
            // line 45
            if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_log_, "createdTime"), "Y-m-d H:i:s"), "html", null, true);
            echo "</small>
          </td>
          <td>
            ";
            // line 48
            if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
            if (($this->getAttribute($_log_, "status") == "ROLLBACK")) {
                // line 49
                echo "              <strong class=\"text-danger\">需要回滚</strong>
            ";
            } elseif (($this->getAttribute($_log_, "status") == "ERROR")) {
                // line 51
                echo "              <strong class=\"text-warning\">更新失败</strong>
            ";
            } elseif (($this->getAttribute($_log_, "status") == "SUCCESS")) {
                // line 53
                echo "              <strong class=\"text-success\">更新成功</strong>
            ";
            } elseif (($this->getAttribute($_log_, "status") == "RECOVERED")) {
                // line 55
                echo "              <strong class=\"text-info\">已恢复</strong>
            ";
            }
            // line 57
            echo "            ";
            if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
            if ($this->getAttribute($_log_, "message")) {
                // line 58
                echo "              <a href=\"javascript:;\" class=\"btn btn-sm btn-info log-message-btn\" data-content=\"";
                if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_log_, "message"), "html", null, true);
                echo "\">详情</a>
            ";
            }
            // line 60
            echo "          </td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "    </tbody>
  </table>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:App:logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 63,  152 => 60,  145 => 58,  141 => 57,  137 => 55,  133 => 53,  129 => 51,  125 => 49,  122 => 48,  115 => 45,  107 => 43,  103 => 41,  94 => 39,  91 => 38,  85 => 36,  82 => 35,  79 => 34,  73 => 32,  70 => 31,  65 => 30,  43 => 10,  40 => 9,  33 => 3,  28 => 7,  26 => 5,);
    }
}
