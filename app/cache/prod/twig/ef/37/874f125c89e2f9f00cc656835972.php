<?php

/* TopxiaAdminBundle:Category:tbody.html.twig */
class __TwigTemplate_ef37874f125c89e2f9f00cc656835972 extends Twig_Template
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
        echo "<tbody>
  ";
        // line 2
        if (isset($context["categories"])) { $_categories_ = $context["categories"]; } else { $_categories_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_categories_);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 3
            echo "\t\t<tr id=\"category-tr-";
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_category_, "id"), "html", null, true);
            echo "\">
\t\t  <td>
\t\t    ";
            // line 5
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (($this->getAttribute($_category_, "depth") - 1) * 2)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                echo "&nbsp;&nbsp;&nbsp;&nbsp;";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "└─ ";
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_category_, "name"), "html", null, true);
            echo "
\t\t  </td>
\t\t  <td>";
            // line 7
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_category_, "code"), "html", null, true);
            echo "</td>
\t\t  <td>";
            // line 8
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_category_, "weight"), "html", null, true);
            echo "</td>
\t\t  <td>
\t\t    <a href=\"javascript:;\" class=\"btn btn-default btn-sm \" data-url=\"";
            // line 10
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_category_edit", array("id" => $this->getAttribute($_category_, "id"))), "html", null, true);
            echo "\" data-toggle=\"modal\" data-target=\"#modal\"><i class=\"glyphicon glyphicon-edit\"></i> 编辑</a>
\t\t    ";
            // line 11
            if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            if (($this->getAttribute($_group_, "depth") > $this->getAttribute($_category_, "depth"))) {
                // line 12
                echo "\t\t      <a href=\"javascript:;\" class=\"btn btn-default btn-sm\" data-url=\"";
                if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_category_create", array("parentId" => $this->getAttribute($_category_, "id"), "groupId" => $this->getAttribute($_group_, "id"))), "html", null, true);
                echo "\" data-toggle=\"modal\" data-target=\"#modal\"><i class=\"glyphicon glyphicon-plus\"></i> 添加子分类</a>
\t\t    ";
            }
            // line 14
            echo "
\t\t  </td>
\t\t</tr>
\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 18
            echo "\t  <tr><td colspan=\"20\"><div class=\"empty\">暂无分类记录</div></td></tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "</tbody>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Category:tbody.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 20,  87 => 18,  79 => 14,  71 => 12,  67 => 11,  62 => 10,  56 => 8,  51 => 7,  35 => 5,  28 => 3,  22 => 2,  19 => 1,  68 => 24,  66 => 23,  50 => 11,  45 => 10,  41 => 8,  38 => 7,  29 => 3,  24 => 5,);
    }
}
