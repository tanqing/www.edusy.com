<?php

/* TopxiaAdminBundle:LoginRecord:table-tr.html.twig */
class __TwigTemplate_7c7a16a5940171e0bd98156e47599e2d extends Twig_Template
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
  </td>
  <td>
    ";
        // line 7
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_user_, "email"), "html", null, true);
        echo "
  </td>
  <td>
    <span class=\"text-sm\">";
        // line 10
        if (isset($context["logRecord"])) { $_logRecord_ = $context["logRecord"]; } else { $_logRecord_ = null; }
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_logRecord_, "createdTime"), "Y-n-d H:i:s"), "html", null, true);
        echo "</span>
    <br>
    <a class=\"text-muted text-sm\" href=\"http://www.baidu.com/s?wd=";
        // line 12
        if (isset($context["logRecord"])) { $_logRecord_ = $context["logRecord"]; } else { $_logRecord_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_logRecord_, "ip"), "html", null, true);
        echo "\" target=\"_blank\">";
        if (isset($context["logRecord"])) { $_logRecord_ = $context["logRecord"]; } else { $_logRecord_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_logRecord_, "ip"), "html", null, true);
        echo "</a>
  </td>
  <td>
    ";
        // line 15
        if (isset($context["logRecord"])) { $_logRecord_ = $context["logRecord"]; } else { $_logRecord_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_logRecord_, "location"), "html", null, true);
        echo "
  </td>
  <td>
    <a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
        // line 18
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_login_record_details", array("id" => $this->getAttribute($_user_, "id"))), "html", null, true);
        echo "\" data-url=\"\" class=\"btn btn-default btn-sm\">查看</a>
  </td>
</tr>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:LoginRecord:table-tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 18,  59 => 15,  49 => 12,  36 => 7,  21 => 2,  19 => 1,  146 => 55,  142 => 53,  128 => 52,  124 => 51,  119 => 50,  101 => 49,  77 => 29,  69 => 25,  61 => 21,  53 => 17,  43 => 10,  40 => 8,  33 => 3,  28 => 4,  26 => 5,);
    }
}
