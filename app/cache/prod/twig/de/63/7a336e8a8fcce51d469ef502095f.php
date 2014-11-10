<?php

/* TopxiaAdminBundle:Tag:list-tr.html.twig */
class __TwigTemplate_de637a336e8a8fcce51d469ef502095f extends Twig_Template
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
        echo "<tr id=\"tag-tr-";
        if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_tag_, "id"), "html", null, true);
        echo "\">
  <td>";
        // line 2
        if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_tag_, "id"), "html", null, true);
        echo "</td>
  <td>";
        // line 3
        if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_tag_, "name"), "html", null, true);
        echo "</td>
  <td>";
        // line 4
        if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_tag_, "createdTime"), "Y-m-d H:i"), "html", null, true);
        echo "</td>
  <td>
    <button class=\"btn btn-default btn-sm\" data-url=\"";
        // line 6
        if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_tag_update", array("id" => $this->getAttribute($_tag_, "id"))), "html", null, true);
        echo "\" data-toggle=\"modal\" data-target=\"#modal\">编辑</button>
  </td>
</tr>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Tag:list-tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 6,  35 => 4,  30 => 3,  25 => 2,  19 => 1,  114 => 33,  108 => 29,  104 => 27,  101 => 26,  87 => 25,  84 => 24,  65 => 23,  62 => 22,  47 => 10,  43 => 8,  40 => 7,  33 => 3,  28 => 6,  26 => 5,);
    }
}
