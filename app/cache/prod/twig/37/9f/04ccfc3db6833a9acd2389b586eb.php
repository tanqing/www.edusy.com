<?php

/* TopxiaAdminBundle:Block:list-tr.html.twig */
class __TwigTemplate_379f04ccfc3db6833a9acd2389b586eb extends Twig_Template
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
        echo "<tr id=\"";
        if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_block_, "id"), "html", null, true);
        echo "\">
    <td>
        ";
        // line 4
        if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_block_, "title"), "html", null, true);
        echo "
        <br>
        <span class=\"text-muted text-sm\">编码：";
        // line 6
        if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_block_, "code"), "html", null, true);
        echo "</span>
    </td>
    <td>
        ";
        // line 9
        if (isset($context["admin_macro"])) { $_admin_macro_ = $context["admin_macro"]; } else { $_admin_macro_ = null; }
        if (isset($context["latestUpdateUser"])) { $_latestUpdateUser_ = $context["latestUpdateUser"]; } else { $_latestUpdateUser_ = null; }
        echo $_admin_macro_->getuser_link(((array_key_exists("latestUpdateUser", $context)) ? (_twig_default_filter($_latestUpdateUser_, null)) : (null)));
        echo "
        <br>
        <span class=\"text-muted text-sm\">";
        // line 11
        if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_block_, "updateTime"), "Y-n-d H:i:s"), "html", null, true);
        echo "</span>
    </td>
    <td>
        <button class=\"btn btn-sm btn-primary update-btn\" data-url=\"";
        // line 14
        if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_block_update", array("block" => $this->getAttribute($_block_, "id"))), "html", null, true);
        echo "\" data-toggle=\"modal\" data-target=\"#modal\">编辑内容</button>
        ";
        // line 15
        if ($this->env->getExtension('topxia_web_twig')->getSetting("developer.debug")) {
            // line 16
            echo "        <button class=\"btn btn-sm btn-default edit-btn\" data-url=\"";
            if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_block_edit", array("block" => $this->getAttribute($_block_, "id"))), "html", null, true);
            echo "\" data-toggle=\"modal\" data-target=\"#modal\" >设置</button>
        <button class=\"btn btn-sm btn-default delete-btn\" data-url=\"";
            // line 17
            if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_block_delete", array("id" => $this->getAttribute($_block_, "id"))), "html", null, true);
            echo "\" data-target=\"";
            if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_block_, "id"), "html", null, true);
            echo "\">删除</button>
        ";
        }
        // line 19
        echo "    </td>
</tr>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Block:list-tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 19,  62 => 16,  60 => 15,  55 => 14,  41 => 9,  34 => 6,  21 => 2,  19 => 1,  119 => 34,  114 => 31,  110 => 29,  107 => 28,  93 => 27,  90 => 26,  71 => 25,  68 => 17,  54 => 12,  48 => 11,  46 => 9,  43 => 8,  40 => 7,  33 => 3,  28 => 4,  26 => 5,);
    }
}
