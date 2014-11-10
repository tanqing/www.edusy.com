<?php

/* TopxiaAdminBundle:Teacher:tr.html.twig */
class __TwigTemplate_6888acd4c877a04398b550ac5c801ffb extends Twig_Template
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
        // line 5
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        if ($this->getAttribute($_user_, "locked")) {
            // line 6
            echo "      <label class=\"label label-danger\">禁</label>
    ";
        }
        // line 8
        echo "  </td>
  <td>
    ";
        // line 10
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        if ($this->getAttribute($_user_, "promoted")) {
            // line 11
            echo "      <span class=\"text-success\">是</span>
      <br>
      <span class=\"text-muted text-sm\">";
            // line 13
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_user_, "promotedTime"), "Y-n-d H:i"), "html", null, true);
            echo "</span>
    ";
        } else {
            // line 15
            echo "      <span class=\"text-muted\">否</span>
    ";
        }
        // line 17
        echo "  </td>
  <td>
    <span class=\"text-sm\">";
        // line 19
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        if ($this->getAttribute($_user_, "loginTime")) {
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_user_, "loginTime"), "Y-n-d H:i:s"), "html", null, true);
        } else {
            echo "--";
        }
        echo "</span>
    <br>
    <a class=\"text-muted text-sm\" href=\"http://www.baidu.com/s?wd=";
        // line 21
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_user_, "loginIp"), "html", null, true);
        echo "\" target=\"_blank\">";
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_user_, "loginIp"), "html", null, true);
        echo "</a>
  </td>
  <td>
    <div class=\"btn-group\">
      <a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
        // line 25
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_show", array("id" => $this->getAttribute($_user_, "id"))), "html", null, true);
        echo "\" data-url=\"\" class=\"btn btn-default btn-sm\">查看</a>
      <a href=\"#\" type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
        <span class=\"caret\"></span>
      </a>
      <ul class=\"dropdown-menu\">
        <li><a class=\"promote-user\" href=\"javascript:\" data-url=\"";
        // line 30
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_teacher_promote", array("id" => $this->getAttribute($_user_, "id"))), "html", null, true);
        echo "\">推荐教师</a></li>
        ";
        // line 31
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        if ($this->getAttribute($_user_, "promoted")) {
            // line 32
            echo "          <li><a class=\"promote-user\" href=\"javascript:\" data-url=\"";
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_teacher_promote_cancel", array("id" => $this->getAttribute($_user_, "id"))), "html", null, true);
            echo "\">取消推荐教师</a></li>
        ";
        }
        // line 34
        echo "      </ul>
    </div>
  </td>
</tr>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Teacher:tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 34,  105 => 32,  97 => 30,  88 => 25,  77 => 21,  66 => 19,  58 => 15,  52 => 13,  48 => 11,  45 => 10,  41 => 8,  37 => 6,  34 => 5,  21 => 2,  19 => 1,  110 => 32,  106 => 30,  102 => 31,  99 => 27,  85 => 26,  81 => 25,  62 => 17,  59 => 23,  43 => 9,  40 => 8,  33 => 3,  28 => 4,  26 => 5,);
    }
}
