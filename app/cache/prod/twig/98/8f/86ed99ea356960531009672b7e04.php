<?php

/* TopxiaAdminBundle:Navigation:tbody.html.twig */
class __TwigTemplate_988f86ed99ea356960531009672b7e04 extends Twig_Template
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
        if (isset($context["navigations"])) { $_navigations_ = $context["navigations"]; } else { $_navigations_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_navigations_);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["navigation"]) {
            // line 3
            echo "\t\t<tr id=\"navigations-tr-";
            if (isset($context["navigation"])) { $_navigation_ = $context["navigation"]; } else { $_navigation_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_navigation_, "id"), "html", null, true);
            echo "\">
\t\t  <td>
        ";
            // line 5
            if (isset($context["navigation"])) { $_navigation_ = $context["navigation"]; } else { $_navigation_ = null; }
            if (($this->getAttribute($_navigation_, "parentId") > 0)) {
                echo " &nbsp;&nbsp;&nbsp;&nbsp; └─";
            }
            // line 6
            echo "        <a href=\"";
            if (isset($context["navigation"])) { $_navigation_ = $context["navigation"]; } else { $_navigation_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->navigationUrlFilter($this->getAttribute($_navigation_, "url")), "html", null, true);
            echo "\" target=\"_blank\"> ";
            if (isset($context["navigation"])) { $_navigation_ = $context["navigation"]; } else { $_navigation_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_navigation_, "name"), "html", null, true);
            echo " </a>
      </td>
\t\t  <td>
\t\t\t\t";
            // line 9
            if (isset($context["navigation"])) { $_navigation_ = $context["navigation"]; } else { $_navigation_ = null; }
            if (($this->getAttribute($_navigation_, "isNewWin") == 0)) {
                echo "否";
            } else {
                echo "是";
            }
            // line 10
            echo "  \t\t</td>
\t\t  <td>";
            // line 11
            if (isset($context["navigation"])) { $_navigation_ = $context["navigation"]; } else { $_navigation_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_navigation_, "sequence"), "html", null, true);
            echo "</td>
\t\t  <td>
        ";
            // line 13
            if (isset($context["navigation"])) { $_navigation_ = $context["navigation"]; } else { $_navigation_ = null; }
            if (($this->getAttribute($_navigation_, "isOpen") == 1)) {
                echo "开启";
            } else {
                echo "关闭";
            }
            // line 14
            echo "  \t\t</td>
\t\t  <td>
        ";
            // line 16
            if (isset($context["navigation"])) { $_navigation_ = $context["navigation"]; } else { $_navigation_ = null; }
            if ((($this->getAttribute($_navigation_, "type") == "top") && ($this->getAttribute($_navigation_, "parentId") == 0))) {
                // line 17
                echo "\t        <button class=\"btn btn-sm btn-default edit-btn\" data-url=\"";
                if (isset($context["navigation"])) { $_navigation_ = $context["navigation"]; } else { $_navigation_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_navigation_create", array("type" => $this->getAttribute($_navigation_, "type"), "parentId" => $this->getAttribute($_navigation_, "id"))), "html", null, true);
                echo "\" data-toggle=\"modal\" data-target=\"#modal\">添加二级导航</button>
        ";
            }
            // line 19
            echo "          <button class=\"btn btn-sm btn-default edit-btn\" data-url=\"";
            if (isset($context["navigation"])) { $_navigation_ = $context["navigation"]; } else { $_navigation_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_navigation_update", array("id" => $this->getAttribute($_navigation_, "id"))), "html", null, true);
            echo "\" data-toggle=\"modal\" data-target=\"#modal\">编辑</button>
\t        <button class=\"btn btn-sm btn-default delete-btn\" data-url=\"";
            // line 20
            if (isset($context["navigation"])) { $_navigation_ = $context["navigation"]; } else { $_navigation_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_navigation_delete", array("id" => $this->getAttribute($_navigation_, "id"))), "html", null, true);
            echo "\" data-target=\"";
            if (isset($context["navigation"])) { $_navigation_ = $context["navigation"]; } else { $_navigation_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_navigation_, "id"), "html", null, true);
            echo "\">删除</button>
\t\t   </td>
\t\t </tr>
\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 24
            echo "\t  <tr><td colspan=\"20\"><div class=\"empty\">暂无导航记录</div></td></tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navigation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "
</tbody>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Navigation:tbody.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 26,  107 => 24,  88 => 19,  81 => 17,  78 => 16,  74 => 14,  61 => 11,  22 => 2,  19 => 1,  144 => 30,  135 => 23,  126 => 22,  117 => 21,  108 => 20,  94 => 20,  85 => 13,  76 => 12,  58 => 10,  54 => 8,  51 => 9,  46 => 31,  40 => 6,  38 => 7,  32 => 5,  27 => 3,  104 => 37,  102 => 36,  86 => 22,  67 => 13,  62 => 19,  48 => 13,  44 => 30,  41 => 10,  35 => 5,  30 => 8,  28 => 3,  26 => 4,);
    }
}
