<?php

/* TopxiaAdminBundle:System:user-fields.table.tr.html.twig */
class __TwigTemplate_3bf3622bd4d7a1048d978ec8c2aba99e extends Twig_Template
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
        if (isset($context["fields"])) { $_fields_ = $context["fields"]; } else { $_fields_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_fields_);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 2
            echo "\t\t<tr id=\"field-tr-";
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_field_, "id"), "html", null, true);
            echo "\">
\t\t <td>";
            // line 3
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_field_, "title"), "html", null, true);
            echo "</td>
\t\t <td>";
            // line 4
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_field_, "fieldName"), "html", null, true);
            echo "</td>
\t\t <td>";
            // line 5
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            if ($this->getAttribute($_field_, "enabled")) {
                echo "是";
            } else {
                echo "否";
            }
            echo "</td>
\t\t <td>";
            // line 6
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_field_, "seq"), "html", null, true);
            echo "</td>
\t\t <td>";
            // line 7
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_field_, "createdTime"), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
\t\t <td><a type=\"button\" class=\"btn btn-default btn-sm \" href=\"javascript:;\" data-url=\"";
            // line 8
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_user_fields_edit", array("id" => $this->getAttribute($_field_, "id"))), "html", null, true);
            echo "\" data-toggle=\"modal\"  data-target=\"#modal\">编辑</a>&nbsp;<a type=\"button\" class=\"btn btn-default btn-sm \" href=\"javascript:;\" data-url=\"";
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_user_fields_delete", array("id" => $this->getAttribute($_field_, "id"))), "html", null, true);
            echo "\" data-toggle=\"modal\"  data-target=\"#modal\">删除</a></td>
\t\t</tr>
\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 11
            echo "\t  <tr><td colspan=\"20\"><div class=\"empty\">暂无自定义字段</div></td></tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:user-fields.table.tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 11,  60 => 8,  55 => 7,  50 => 6,  41 => 5,  36 => 4,  31 => 3,  25 => 2,  19 => 1,  73 => 30,  71 => 29,  66 => 28,  61 => 25,  59 => 24,  43 => 10,  40 => 9,  33 => 3,  28 => 7,  26 => 5,);
    }
}
