<?php

/* TopxiaAdminBundle:User:approved.html.twig */
class __TwigTemplate_4ea070f9399525bf78f0d33489503f4c extends Twig_Template
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
        // line 6
        $context["script_controller"] = "user/approved";
        // line 8
        $context["submenu"] = "approved";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "用户认证审核 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 10
    public function block_main($context, array $blocks = array())
    {
        // line 11
        echo "
";
        // line 12
        $this->env->loadTemplate("TopxiaAdminBundle:User:approval-header.html.twig")->display($context);
        // line 13
        echo "
";
        // line 14
        if (isset($context["users"])) { $_users_ = $context["users"]; } else { $_users_ = null; }
        if ($_users_) {
            // line 15
            echo "<table id=\"user-table\" class=\"table table-striped\">
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
            // line 28
            if (isset($context["users"])) { $_users_ = $context["users"]; } else { $_users_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_users_);
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 29
                echo "    <tr id=\"user-table-tr-";
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_user_, "id"), "html", null, true);
                echo "\">
        <td>";
                // line 30
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_user_, "id"), "html", null, true);
                echo "</td>
        <td><strong>";
                // line 31
                if (isset($context["admin_macro"])) { $_admin_macro_ = $context["admin_macro"]; } else { $_admin_macro_ = null; }
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_admin_macro_, "user_link", array(0 => $_user_), "method"), "html", null, true);
                echo "</strong></td>
        <td>";
                // line 32
                if (isset($context["userProfiles"])) { $_userProfiles_ = $context["userProfiles"]; } else { $_userProfiles_ = null; }
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_userProfiles_, $this->getAttribute($_user_, "id"), array(), "array"), "truename"), "html", null, true);
                echo "</td>
        <td>";
                // line 33
                if (isset($context["userProfiles"])) { $_userProfiles_ = $context["userProfiles"]; } else { $_userProfiles_ = null; }
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_userProfiles_, $this->getAttribute($_user_, "id"), array(), "array"), "idcard"), "html", null, true);
                echo "</td>
        <td>";
                // line 34
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_user_, "email"), "html", null, true);
                echo "</td>
        <td>";
                // line 35
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_user_, "approvalTime"), "Y-m-d H:i"), "html", null, true);
                echo "</td>
        <td>
         <a data-url=\"";
                // line 37
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_approval_cancel", array("id" => $this->getAttribute($_user_, "id"))), "html", null, true);
                echo "\" class=\"btn btn-default btn-sm cancel-approval\">撤销</a>
        </td>
    </tr>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "  </tbody>
</table>

";
            // line 44
            if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
            if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "paginator", array(0 => $_paginator_), "method"), "html", null, true);
            echo "
";
        } else {
            // line 46
            echo "  <div class=\"empty\">暂无已经审核成功的实名认证用户</div>
";
        }
        // line 48
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:User:approved.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 48,  139 => 46,  132 => 44,  127 => 41,  116 => 37,  110 => 35,  105 => 34,  99 => 33,  93 => 32,  87 => 31,  82 => 30,  76 => 29,  71 => 28,  56 => 15,  53 => 14,  50 => 13,  48 => 12,  45 => 11,  42 => 10,  35 => 3,  30 => 8,  28 => 6,  26 => 5,);
    }
}
