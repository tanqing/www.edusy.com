<?php

/* TopxiaAdminBundle:Content:content-tr.html.twig */
class __TwigTemplate_2685ee74e8258e6afd4c3768d83cc714 extends Twig_Template
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
        echo "<tr id=\"content-";
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_content_, "id"), "html", null, true);
        echo "\">
\t<td>
\t\t<a href=\"";
        // line 3
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((("content_" . $this->getAttribute($_content_, "type")) . "_show"), array("alias" => (($this->getAttribute($_content_, "alias", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_content_, "alias"), $this->getAttribute($_content_, "id"))) : ($this->getAttribute($_content_, "id"))))), "html", null, true);
        echo "\" target=\"_blank\">";
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_content_, "title"), "html", null, true);
        echo "</a><br />
\t\t";
        // line 4
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        if (($this->getAttribute($_content_, "type") == "page")) {
            // line 5
            echo "\t\t  <span class=\"text-muted text-sm\">地址：page/";
            if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
            echo twig_escape_filter($this->env, (($this->getAttribute($_content_, "alias", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_content_, "alias"), $this->getAttribute($_content_, "id"))) : ($this->getAttribute($_content_, "id"))), "html", null, true);
            echo "</span>
\t\t";
        }
        // line 7
        echo "\t\t";
        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
        if ($_category_) {
            // line 8
            echo "\t\t\t<span class=\"text-muted text-sm\">分类：";
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_category_, "name"), "html", null, true);
            echo "</span>
\t\t";
        }
        // line 10
        echo "\t</td>
\t<td>";
        // line 11
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        echo $this->env->getExtension('topxia_web_twig')->getDictText("contentType", $this->getAttribute($_content_, "type"));
        echo "</td>
\t<td>";
        // line 12
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        echo $this->env->getExtension('topxia_web_twig')->getDictText("contentStatus:html", $this->getAttribute($_content_, "status"));
        echo "</td>
\t<td>
\t\t";
        // line 14
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_content_, "publishedTime"), "Y-n-d H:i"), "html", null, true);
        echo "<br />
\t\t";
        // line 15
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_user_, "nickname"), "html", null, true);
        echo "
\t</td>
\t<td>
\t\t<div class=\"btn-group\">
\t\t  <a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
        // line 19
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_content_edit", array("id" => $this->getAttribute($_content_, "id"))), "html", null, true);
        echo "\" class=\"btn btn-default btn-sm\">编辑</a>
\t\t  <a href=\"#\" type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
\t\t    <span class=\"caret\"></span>
\t\t  </a>
\t\t  <ul class=\"dropdown-menu\">
\t\t  \t";
        // line 24
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        if (($this->getAttribute($_content_, "status") != "published")) {
            // line 25
            echo "\t\t\t    <li><a href=\"javascript:\" data-role=\"publish-item\" data-url=\"";
            if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_content_publish", array("id" => $this->getAttribute($_content_, "id"))), "html", null, true);
            echo "\">发布</a></li>
\t\t    ";
        }
        // line 27
        echo "\t\t    ";
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        if (($this->getAttribute($_content_, "status") != "trash")) {
            // line 28
            echo "\t\t\t    <li><a href=\"javascript:\" data-role=\"trash-item\" data-url=\"";
            if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_content_trash", array("id" => $this->getAttribute($_content_, "id"))), "html", null, true);
            echo "\">移至回收站</a></li>
\t\t    ";
        }
        // line 30
        echo "\t\t    ";
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        if (($this->getAttribute($_content_, "status") == "trash")) {
            // line 31
            echo "\t\t\t    <li><a href=\"javascript:\" data-role=\"delete-item\" data-url=\"";
            if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_content_delete", array("id" => $this->getAttribute($_content_, "id"))), "html", null, true);
            echo "\">永久删除</a></li>
\t\t\t  ";
        }
        // line 33
        echo "\t\t  </ul>
\t\t</div>
\t</td>
</tr>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Content:content-tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 33,  116 => 31,  112 => 30,  105 => 28,  101 => 27,  94 => 25,  91 => 24,  82 => 19,  74 => 15,  69 => 14,  63 => 12,  58 => 11,  55 => 10,  48 => 8,  44 => 7,  37 => 5,  34 => 4,  19 => 1,  169 => 56,  164 => 53,  160 => 51,  157 => 50,  143 => 49,  140 => 48,  135 => 47,  130 => 46,  111 => 45,  108 => 44,  89 => 29,  83 => 27,  75 => 23,  65 => 17,  57 => 16,  52 => 13,  49 => 12,  46 => 11,  43 => 10,  40 => 9,  33 => 3,  28 => 7,  26 => 3,);
    }
}
