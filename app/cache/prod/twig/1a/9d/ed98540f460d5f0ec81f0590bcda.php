<?php

/* TopxiaAdminBundle:ArticleCategory:tbody.html.twig */
class __TwigTemplate_1a9ded98540f460d5f0ec81f0590bcda extends Twig_Template
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
  \t";
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
            echo "└─  <a href=\"";
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_category", array("categoryCode" => $this->getAttribute($_category_, "code"))), "html", null, true);
            echo "\">
\t\t    \t";
            // line 6
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_category_, "name"), "html", null, true);
            echo "
\t\t\t</a>
\t\t  </td>
\t\t  <td>";
            // line 9
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_category_, "code"), "html", null, true);
            echo "</td>
\t\t  <td>";
            // line 10
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_category_, "weight"), "html", null, true);
            echo "</td>
\t\t  <td>
\t\t    <a href=\"javascript:;\" class=\"btn btn-default btn-sm\" data-url=\"";
            // line 12
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_article_category_edit", array("id" => $this->getAttribute($_category_, "id"))), "html", null, true);
            echo "\" data-toggle=\"modal\" data-target=\"#modal\"><i class=\"glyphicon glyphicon-edit\"></i> 编辑</a>
\t\t  \t";
            // line 13
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            if (($this->getAttribute($_category_, "depth") < 5)) {
                // line 14
                echo "\t      \t<a href=\"javascript:;\" class=\"btn btn-default btn-sm\" data-url=\"";
                if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_article_category_create", array("parentId" => $this->getAttribute($_category_, "id"))), "html", null, true);
                echo "\" data-toggle=\"modal\" data-target=\"#modal\"><i class=\"glyphicon glyphicon-plus\"></i> 添加子栏目</a>
\t      \t";
            }
            // line 16
            echo "\t\t  </td>
\t\t</tr>
\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 19
            echo "\t  \t<tr><td colspan=\"20\"><div class=\"empty\">暂无分类记录</div></td></tr>
  \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "</tbody>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:ArticleCategory:tbody.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 21,  90 => 19,  83 => 16,  76 => 14,  73 => 13,  68 => 12,  62 => 10,  57 => 9,  50 => 6,  35 => 5,  28 => 3,  22 => 2,  19 => 1,  63 => 24,  61 => 23,  45 => 10,  41 => 8,  38 => 7,  31 => 3,  26 => 5,);
    }
}
