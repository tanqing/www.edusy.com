<?php

/* TopxiaAdminBundle:User:approving.html.twig */
class __TwigTemplate_76d9409ad80272b8c39c1a936e177b02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaAdminBundle:User:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle:User:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["menu"] = "approval";
        // line 7
        $context["submenu"] = "approving";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "用户认证审核 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_main($context, array $blocks = array())
    {
        // line 10
        echo "
";
        // line 11
        $this->env->loadTemplate("TopxiaAdminBundle:User:approval-header.html.twig")->display($context);
        // line 12
        echo "
";
        // line 13
        if (isset($context["users"])) { $_users_ = $context["users"]; } else { $_users_ = null; }
        if ($_users_) {
            // line 14
            echo "<table class=\"table table-striped\">
  <thead>
    <tr>
      <th>ID</th>
      <th>用户昵称</th>
      <th>真实姓名</th>
      <th>身份证号码</th>
      <th>邮件</th>
      <th>申请时间</th>
      <th>操作</th>
    </tr>
  </thead>
  <tbody>
  ";
            // line 27
            if (isset($context["users"])) { $_users_ = $context["users"]; } else { $_users_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_users_);
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 28
                echo "    <tr id=\"user-table-tr-";
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_user_, "id"), "html", null, true);
                echo "\">
        <td>";
                // line 29
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_user_, "id"), "html", null, true);
                echo "</td>
        <td><strong>";
                // line 30
                if (isset($context["admin_macro"])) { $_admin_macro_ = $context["admin_macro"]; } else { $_admin_macro_ = null; }
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_admin_macro_, "user_link", array(0 => $_user_), "method"), "html", null, true);
                echo "</strong></td>
        <td> ";
                // line 31
                if (isset($context["approvals"])) { $_approvals_ = $context["approvals"]; } else { $_approvals_ = null; }
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_approvals_, $this->getAttribute($_user_, "id"), array(), "array"), "truename"), "html", null, true);
                echo "</td>
        <td> ";
                // line 32
                if (isset($context["approvals"])) { $_approvals_ = $context["approvals"]; } else { $_approvals_ = null; }
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_approvals_, $this->getAttribute($_user_, "id"), array(), "array"), "idcard"), "html", null, true);
                echo "</td>
        <td>";
                // line 33
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_user_, "email"), "html", null, true);
                echo "</td>
        <td>";
                // line 34
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_user_, "approvalTime"), "Y-m-d H:i"), "html", null, true);
                echo "</td>
        <td>
         <a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
                // line 36
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_approval_approve", array("id" => $this->getAttribute($_user_, "id"))), "html", null, true);
                echo "\" class=\"btn btn-default btn-sm\">审核</a>
        </td>
    </tr>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "  </tbody>
</table>

";
            // line 43
            if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
            if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "paginator", array(0 => $_paginator_), "method"), "html", null, true);
            echo "
";
        } else {
            // line 45
            echo "  <div class=\"empty\">暂无需要审核中的实名认证用户</div>
";
        }
        // line 47
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:User:approving.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 47,  137 => 45,  130 => 43,  125 => 40,  114 => 36,  108 => 34,  103 => 33,  97 => 32,  91 => 31,  85 => 30,  80 => 29,  74 => 28,  69 => 27,  54 => 14,  51 => 13,  48 => 12,  46 => 11,  43 => 10,  40 => 9,  33 => 3,  28 => 7,  26 => 5,);
    }
}
