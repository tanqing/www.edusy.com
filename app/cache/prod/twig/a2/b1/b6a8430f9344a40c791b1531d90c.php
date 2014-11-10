<?php

/* TopxiaAdminBundle:User:user-table-tr.html.twig */
class __TwigTemplate_a2b1b6a8430f9344a40c791b1531d90c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["admin_macro"] = $this->env->loadTemplate("TopxiaAdminBundle::macro.html.twig");
        // line 2
        echo "<tr id=\"user-table-tr-";
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_user_, "id"), "html", null, true);
        echo "\">
  <td>
    <strong>";
        // line 4
        if (isset($context["admin_macro"])) { $_admin_macro_ = $context["admin_macro"]; } else { $_admin_macro_ = null; }
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo $_admin_macro_->getuser_link($_user_);
        echo "</strong>

    ";
        // line 6
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        if ($this->getAttribute($_user_, "locked")) {
            // line 7
            echo "      <label class=\"label label-danger\">禁</label>
    ";
        }
        // line 9
        echo "
    <br>
    <span class=\"text-muted text-sm\">
      ";
        // line 12
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_user_, "roles"));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 13
            echo "        ";
            if (isset($context["role"])) { $_role_ = $context["role"]; } else { $_role_ = null; }
            echo $this->env->getExtension('topxia_web_twig')->getDictText("userRole", $_role_);
            echo "
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    </span>
  </td>

  <td>
    ";
        // line 19
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_user_, "email"), "html", null, true);
        echo "
    <br>
    ";
        // line 21
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        if ($this->getAttribute($_user_, "emailVerified")) {
            // line 22
            echo "      <label class=\"label label-success\" title=\"该Email地址已验证\">已验证</label>
    ";
        }
        // line 24
        echo "  </td>

  <td>
    <span class=\"text-sm\">";
        // line 27
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_user_, "createdTime"), "Y-n-d H:i:s"), "html", null, true);
        echo "</span>
    <br>
    <span class=\"text-muted text-sm\">
    <a class=\"text-muted text-sm\" href=\"http://www.baidu.com/s?wd=";
        // line 30
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_user_, "createdIp"), "html", null, true);
        echo "\" target=\"_blank\">";
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_user_, "createdIp"), "html", null, true);
        echo "</a>
    ";
        // line 31
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getConvertIP($this->getAttribute($_user_, "createdIp")), "html", null, true);
        echo "
  </span>
    <span></span>
  </td>
  <td>
    <span class=\"text-sm\">
      ";
        // line 37
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        if (($this->getAttribute($_user_, "loginTime") == 0)) {
            // line 38
            echo "       --
      ";
        } else {
            // line 40
            echo "        ";
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_user_, "loginTime"), "Y-n-d H:i:s"), "html", null, true);
            echo "
      ";
        }
        // line 42
        echo "    </span>
    <br>
    <span class=\"text-muted text-sm\">
    <a class=\"text-muted text-sm\" href=\"http://www.baidu.com/s?wd=";
        // line 45
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_user_, "loginIp"), "html", null, true);
        echo "\" target=\"_blank\">";
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_user_, "loginIp"), "html", null, true);
        echo "</a>
    ";
        // line 46
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getConvertIP($this->getAttribute($_user_, "loginIp")), "html", null, true);
        echo "
  </span>
  </td>
  <td>
    <div class=\"btn-group\">
      <a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
        // line 51
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_show", array("id" => $this->getAttribute($_user_, "id"))), "html", null, true);
        echo "\" data-url=\"\" class=\"btn btn-default btn-sm\">查看</a>
      <a href=\"#\" type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
        <span class=\"caret\"></span>
      </a>
      <ul class=\"dropdown-menu\">
        <li><a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
        // line 56
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_edit", array("id" => $this->getAttribute($_user_, "id"))), "html", null, true);
        echo "\">编辑用户信息</a></li>
        <li><a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
        // line 57
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_roles", array("id" => $this->getAttribute($_user_, "id"))), "html", null, true);
        echo "\">设置用户组</a></li>

        ";
        // line 59
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 60
            echo "

        <li><a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
            // line 62
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_avatar", array("id" => $this->getAttribute($_user_, "id"))), "html", null, true);
            echo "\">修改用户头像</a></li>

        <li><a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
            // line 64
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_change_password", array("userId" => $this->getAttribute($_user_, "id"))), "html", null, true);
            echo "\">修改密码</a></li>

        ";
        }
        // line 67
        echo "
        <li><a class=\"send-passwordreset-email\" href=\"javascript:\" data-url=\"";
        // line 68
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_send_passwordreset_email", array("id" => $this->getAttribute($_user_, "id"))), "html", null, true);
        echo "\">发送密码重置邮件</a></li>

        <li><a class=\"send-emailverify-email\" href=\"javascript:\" data-url=\"";
        // line 70
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_send_emailverify_email", array("id" => $this->getAttribute($_user_, "id"))), "html", null, true);
        echo "\">发送Email验证邮件</a></li>

        ";
        // line 72
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        if ($this->getAttribute($_user_, "locked")) {
            // line 73
            echo "          <li><a class=\"unlock-user\" href=\"javascript:\" title=\"解禁用户";
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_user_, "nickname"), "html", null, true);
            echo "\" data-url=\"";
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_unlock", array("id" => $this->getAttribute($_user_, "id"))), "html", null, true);
            echo "\">解禁用户</a></li>
        ";
        } else {
            // line 75
            echo "          <li><a class=\"lock-user\" href=\"javascript:\" title=\"封禁用户";
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_user_, "nickname"), "html", null, true);
            echo "\" data-url=\"";
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_lock", array("id" => $this->getAttribute($_user_, "id"))), "html", null, true);
            echo "\">封禁用户</a></li>
        ";
        }
        // line 77
        echo "      </ul>
    </div>
  </td>
</tr>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:User:user-table-tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 77,  214 => 75,  204 => 73,  201 => 72,  195 => 70,  189 => 68,  186 => 67,  179 => 64,  173 => 62,  169 => 60,  167 => 59,  161 => 57,  156 => 56,  147 => 51,  130 => 45,  125 => 42,  118 => 40,  111 => 37,  101 => 31,  93 => 30,  86 => 27,  74 => 21,  62 => 15,  42 => 9,  38 => 7,  35 => 6,  21 => 2,  19 => 1,  141 => 31,  136 => 28,  124 => 23,  114 => 38,  104 => 19,  94 => 17,  84 => 15,  81 => 24,  70 => 12,  58 => 9,  55 => 8,  52 => 13,  47 => 12,  45 => 28,  41 => 26,  39 => 7,  36 => 6,  138 => 46,  134 => 51,  120 => 50,  116 => 49,  98 => 48,  77 => 22,  68 => 19,  56 => 18,  46 => 11,  43 => 10,  40 => 9,  33 => 5,  28 => 4,  26 => 5,);
    }
}
