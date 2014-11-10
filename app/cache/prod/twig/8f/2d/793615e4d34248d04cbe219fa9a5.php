<?php

/* TopxiaAdminBundle:Article:article-tr.html.twig */
class __TwigTemplate_8f2d793615e4d34248d04cbe219fa9a5 extends Twig_Template
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
        echo "<tr id=\"article-";
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_article_, "id"), "html", null, true);
        echo "\">
\t<td><input value=\"";
        // line 2
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_article_, "id"), "html", null, true);
        echo "\" type=\"checkbox\" data-role=\"batch-item\" > ";
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_article_, "id"), "html", null, true);
        echo "</td>
\t<td>
\t\t\t<span class=\"text-muted\"><a href=\"";
        // line 4
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_detail", array("id" => $this->getAttribute($_article_, "id"))), "html", null, true);
        echo "\" target=\"_blank\">";
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($_article_, "title"), 0, 22), "html", null, true);
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        if ((twig_length_filter($this->env, $this->getAttribute($_article_, "title")) > 22)) {
            echo "...";
        }
        echo "</a></span>
\t</td>
\t<td>
\t";
        // line 7
        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
        if ($_category_) {
            // line 8
            echo "\t\t<span class=\"text-muted\"><a href=\"";
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_category", array("categoryCode" => $this->getAttribute($_category_, "code"))), "html", null, true);
            echo "\" target=\"_blank\">";
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_category_, "name"), "html", null, true);
            echo "</a></span>
\t\t";
        } else {
            // line 10
            echo "\t\t<span class=\"text-muted\">未分类</span>
\t";
        }
        // line 12
        echo "\t</td>
\t<td>";
        // line 13
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_article_, "updatedTime"), "Y-n-d H:i"), "html", null, true);
        echo "</td>
\t<td>
\t<a href=\"javascript:;\" class=\"featured-label\" data-set-url=\"";
        // line 15
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_article_set_property", array("id" => $this->getAttribute($_article_, "id"), "property" => "featured")), "html", null, true);
        echo "\" data-cancel-url=\"";
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_article_cancel_property", array("id" => $this->getAttribute($_article_, "id"), "property" => "featured")), "html", null, true);
        echo "\">";
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        if (($this->getAttribute($_article_, "featured") == 1)) {
            echo "<span class=\"label label-success\">";
        } else {
            echo "<span class=\"label label-default\">";
        }
        echo "头</span></a>

\t<a href=\"javascript:;\" class=\"promoted-label\" data-set-url=\"";
        // line 17
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_article_set_property", array("id" => $this->getAttribute($_article_, "id"), "property" => "promoted")), "html", null, true);
        echo "\" data-cancel-url=\"";
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_article_cancel_property", array("id" => $this->getAttribute($_article_, "id"), "property" => "promoted")), "html", null, true);
        echo "\">";
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        if (($this->getAttribute($_article_, "promoted") == 1)) {
            echo "<span class=\"label label-success\">";
        } else {
            echo "<span class=\"label label-default\">";
        }
        echo "荐</span></a>

\t<a href=\"javascript:;\" class=\"sticky-label\" data-set-url=\"";
        // line 19
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_article_set_property", array("id" => $this->getAttribute($_article_, "id"), "property" => "sticky")), "html", null, true);
        echo "\" data-cancel-url=\"";
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_article_cancel_property", array("id" => $this->getAttribute($_article_, "id"), "property" => "sticky")), "html", null, true);
        echo "\">";
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        if (($this->getAttribute($_article_, "sticky") == 1)) {
            echo "<span class=\"label label-success\">";
        } else {
            echo "<span class=\"label label-default\">";
        }
        echo "顶</span></a>
\t</td>

\t<td>";
        // line 22
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        echo $this->env->getExtension('topxia_web_twig')->getDictText("articleStatus:html", $this->getAttribute($_article_, "status"));
        echo "</td>

\t<td>
\t\t<div class=\"btn-group\">
\t\t  <a  href=\"";
        // line 26
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_article_edit", array("id" => $this->getAttribute($_article_, "id"))), "html", null, true);
        echo "\" class=\"btn btn-default btn-sm\" >编辑</a>
\t\t  <a href=\"#\" type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
\t\t    <span class=\"caret\"></span>
\t\t  </a>
\t\t  <ul class=\"dropdown-menu\">
\t\t  \t";
        // line 31
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        if (($this->getAttribute($_article_, "status") != "published")) {
            // line 32
            echo "\t\t\t    <li><a href=\"javascript:\" data-role=\"publish-item\" data-url=\"";
            if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_article_publish", array("id" => $this->getAttribute($_article_, "id"))), "html", null, true);
            echo "\">发布</a></li>
\t\t    ";
        }
        // line 34
        echo "\t     \t";
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        if (($this->getAttribute($_article_, "status") == "published")) {
            // line 35
            echo "\t\t\t    <li><a href=\"javascript:\" data-role=\"unpublish-item\" data-url=\"";
            if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_article_unpublish", array("id" => $this->getAttribute($_article_, "id"))), "html", null, true);
            echo "\">未发布</a></li>
\t\t    ";
        }
        // line 37
        echo "\t\t    ";
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        if (($this->getAttribute($_article_, "status") != "trash")) {
            // line 38
            echo "\t\t\t    <li><a href=\"javascript:\" data-role=\"trash-item\" data-url=\"";
            if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_article_trash", array("id" => $this->getAttribute($_article_, "id"))), "html", null, true);
            echo "\">移至回收站</a></li>
\t\t    ";
        }
        // line 40
        echo "\t\t    ";
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        if (($this->getAttribute($_article_, "status") == "trash")) {
            // line 41
            echo "\t\t\t    <li><a href=\"javascript:\" data-role=\"delete-item\" data-url=\"";
            if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_article_delete", array("id" => $this->getAttribute($_article_, "id"))), "html", null, true);
            echo "\">永久删除</a></li>
\t\t\t  ";
        }
        // line 43
        echo "\t\t  </ul>
\t\t</div>
\t</td>
</tr>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Article:article-tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 43,  176 => 41,  172 => 40,  165 => 38,  161 => 37,  154 => 35,  150 => 34,  143 => 32,  140 => 31,  131 => 26,  123 => 22,  106 => 19,  90 => 17,  74 => 15,  68 => 13,  65 => 12,  61 => 10,  51 => 8,  48 => 7,  34 => 4,  25 => 2,  19 => 1,);
    }
}
