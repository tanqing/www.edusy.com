<?php

/* TopxiaAdminBundle:Theme:index.html.twig */
class __TwigTemplate_2dbbe40ab4d7e5df35975381b353b3b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaAdminBundle:System:operation.layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'maincontent' => array($this, 'block_maincontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle:System:operation.layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["script_controller"] = "setting/theme";
        // line 7
        $context["submenu"] = "theme";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "主题设置 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_maincontent($context, array $blocks = array())
    {
        // line 10
        echo "
<div class=\"page-header\"><h1>主题设置</h1></div>

  <table class=\"table table-striped table-hover\" id=\"theme-table\">
    <thead>
    <tr>
      <th>名称</th>
      <th>主题版本</th>
      <th>作者</th>
      <th>操作</th>
    </tr>
    </thead>
    <tbody>
      ";
        // line 23
        if (isset($context["themes"])) { $_themes_ = $context["themes"]; } else { $_themes_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_themes_);
        foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
            // line 24
            echo "        <tr>
          <td>

            <div class=\"media\">
              <img class=\"media-object pull-left\" src=\"";
            // line 28
            if (isset($context["theme"])) { $_theme_ = $context["theme"]; } else { $_theme_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((("themes/" . $this->getAttribute($_theme_, "uri")) . "/") . $this->getAttribute($_theme_, "thumb"))), "html", null, true);
            echo "\" width=\"150\">
              <div class=\"media-body\">
                <h5 class=\"media-heading\">";
            // line 30
            if (isset($context["theme"])) { $_theme_ = $context["theme"]; } else { $_theme_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_theme_, "name"), "html", null, true);
            echo "</h5>
                ";
            // line 31
            if (isset($context["theme"])) { $_theme_ = $context["theme"]; } else { $_theme_ = null; }
            echo (($this->getAttribute($_theme_, "description", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_theme_, "description"), "")) : (""));
            echo "
                ";
            // line 32
            if (isset($context["theme"])) { $_theme_ = $context["theme"]; } else { $_theme_ = null; }
            if ((($this->getAttribute($_theme_, "setting", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_theme_, "setting"), null)) : (null))) {
                // line 33
                echo "                  <a href=\"../";
                if (isset($context["theme"])) { $_theme_ = $context["theme"]; } else { $_theme_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_theme_, "setting"), "html", null, true);
                echo "\">设置</a>
                ";
            }
            // line 35
            echo "              </div>
            </div>
          </td>
          <td>";
            // line 38
            if (isset($context["theme"])) { $_theme_ = $context["theme"]; } else { $_theme_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_theme_, "version"), "html", null, true);
            echo "</td>
          <td>";
            // line 39
            if (isset($context["theme"])) { $_theme_ = $context["theme"]; } else { $_theme_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_theme_, "author"), "html", null, true);
            echo "</td>
          <td>
            ";
            // line 41
            if (isset($context["currentTheme"])) { $_currentTheme_ = $context["currentTheme"]; } else { $_currentTheme_ = null; }
            if (isset($context["theme"])) { $_theme_ = $context["theme"]; } else { $_theme_ = null; }
            if (($this->getAttribute($_currentTheme_, "uri") == $this->getAttribute($_theme_, "uri"))) {
                // line 42
                echo "              <span class=\"text-success\">当前正在使用该主题</span>
            ";
            } else {
                // line 44
                echo "              <button class=\"btn btn-default btn-sm use-theme-btn\" data-url=\"";
                if (isset($context["theme"])) { $_theme_ = $context["theme"]; } else { $_theme_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_setting_theme_change", array("uri" => $this->getAttribute($_theme_, "uri"))), "html", null, true);
                echo "\">使用</button>
            ";
            }
            // line 46
            echo "          </td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "    </tbody>
  </table>


";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Theme:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 49,  126 => 46,  119 => 44,  115 => 42,  111 => 41,  105 => 39,  100 => 38,  95 => 35,  88 => 33,  85 => 32,  80 => 31,  75 => 30,  69 => 28,  63 => 24,  58 => 23,  43 => 10,  40 => 9,  33 => 3,  28 => 7,  26 => 5,);
    }
}
