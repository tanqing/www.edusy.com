<?php

/* TopxiaAdminBundle:App:installed.html.twig */
class __TwigTemplate_4d2d316be8d7fdd2946fa2501ac41e19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaAdminBundle:App:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle:App:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["script_controller"] = "app/installed";
        // line 7
        $context["menu"] = "installed";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "已安装应用 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_main($context, array $blocks = array())
    {
        // line 10
        echo "  <div class=\"page-header\">
    <h1>已安装应用</h1>
  </div>

  <table class=\"table table-striped table-hover\">
    <thead>
      <tr>
        <th>应用描述</th>
        <th>开发者</th>
        <th>操作</th>
      </tr>
    </thead>
    <tbody>
      ";
        // line 23
        if (isset($context["apps"])) { $_apps_ = $context["apps"]; } else { $_apps_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_apps_);
        foreach ($context['_seq'] as $context["_key"] => $context["app"]) {
            // line 24
            echo "      <tr>
        <td>
          <div>
            <a target=\"_blank\" href=\"http://open.edusoho.com/app/";
            // line 27
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_app_, "code"), "html", null, true);
            echo "\">
              <strong class=\"text-primary\">";
            // line 28
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_app_, "name"), "html", null, true);
            echo " - </strong><span class=\"text-info\">";
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_app_, "version"), "html", null, true);
            echo "</span>
            </a>

          </div>
          <div class=\"\">";
            // line 32
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($_app_, "description"), 100);
            echo "</div>
          <div class=\"text-muted\"><small>最后更新： ";
            // line 33
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_app_, "updatedTime"), "Y-m-d"), "html", null, true);
            echo "</small></div>
        </td>
        <td>
          ";
            // line 36
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_app_, "developerName"), "html", null, true);
            echo "
        </td>
        <td>
          ";
            // line 39
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            if ((twig_lower_filter($this->env, $this->getAttribute($_app_, "code")) == "vip")) {
                // line 40
                echo "            <a href=\"../vip/list\" class=\"btn btn-primary\">管理</a>
          ";
            } elseif ((twig_lower_filter($this->env, $this->getAttribute($_app_, "code")) == "coupon")) {
                // line 42
                echo "            <a href=\"../coupon\" class=\"btn btn-primary\">管理</a>
          ";
            } elseif ((twig_lower_filter($this->env, $this->getAttribute($_app_, "code")) == "questionplus")) {
                // line 44
                echo "            <a href=\"../question/plumber/setting\" class=\"btn btn-primary\">管理</a>
          ";
            } elseif ((twig_lower_filter($this->env, $this->getAttribute($_app_, "code")) != "main")) {
                // line 46
                echo "            <a href=\"../";
                if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($_app_, "code")), "html", null, true);
                echo "/index\" class=\"btn btn-primary\">管理</a>
          ";
            }
            // line 48
            echo "
          ";
            // line 49
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            if (($this->env->getExtension('topxia_web_twig')->getSetting("developer.debug") && (twig_lower_filter($this->env, $this->getAttribute($_app_, "code")) != "main"))) {
                // line 50
                echo "            <a href=\"javascript:;\" data-url=\"";
                if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_app_uninstall", array("code" => $this->getAttribute($_app_, "code"))), "html", null, true);
                echo "\" class=\"btn btn-danger uninstall-btn\">卸载</a>
          ";
            }
            // line 52
            echo "        </td>
      </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['app'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "    </tbody>
  </table>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:App:installed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 55,  138 => 52,  131 => 50,  128 => 49,  125 => 48,  118 => 46,  114 => 44,  110 => 42,  106 => 40,  103 => 39,  96 => 36,  89 => 33,  84 => 32,  73 => 28,  68 => 27,  63 => 24,  58 => 23,  43 => 10,  40 => 9,  33 => 3,  28 => 7,  26 => 5,);
    }
}
