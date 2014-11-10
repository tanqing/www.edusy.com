<?php

/* TopxiaAdminBundle:App:upgrades.html.twig */
class __TwigTemplate_8756c0a61374b6b5a412b6caf2ced2de extends Twig_Template
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
        $context["script_controller"] = "app/upgrades";
        // line 7
        $context["menu"] = "upgrades";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "检查应用更新 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_main($context, array $blocks = array())
    {
        // line 10
        echo "  <div class=\"page-header\">
    <h1>检查应用更新</h1>
  </div>
";
        // line 13
        if (isset($context["status"])) { $_status_ = $context["status"]; } else { $_status_ = null; }
        if (((array_key_exists("status", $context)) ? (_twig_default_filter($_status_, null)) : (null))) {
            // line 14
            echo "  <div class=\"alert alert-danger\">AccessKey或者SecretKey设置不正确，会影响到系统正常的运行，<a href=\"";
            echo $this->env->getExtension('routing')->getPath("admin_setting_cloud");
            echo "\">请修改设置。</a></div>
";
        } else {
            // line 16
            if (isset($context["apps"])) { $_apps_ = $context["apps"]; } else { $_apps_ = null; }
            if ($_apps_) {
                // line 17
                echo "  <table class=\"table table-striped table-hover\">
    <thead>
      <tr>
        <th width=\"60%\">应用描述</th>
        <th>更新版本</th>
        <th>操作</th>
      </tr>
    </thead>
    <tbody>
      ";
                // line 26
                if (isset($context["apps"])) { $_apps_ = $context["apps"]; } else { $_apps_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($_apps_);
                foreach ($context['_seq'] as $context["_key"] => $context["app"]) {
                    // line 27
                    echo "        <tr>
          <td>
            <div class=\"\"><a href=\"#\" class=\"\">";
                    // line 29
                    if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_app_, "name"), "html", null, true);
                    echo "</a> ";
                    if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                    if (isset($context["version"])) { $_version_ = $context["version"]; } else { $_version_ = null; }
                    if (($this->getAttribute($this->getAttribute($_app_, "package"), "edusohoMinVersion") > $_version_)) {
                        echo "<div class=\"text-danger\">需要主系统版本为";
                        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "package"), "edusohoMinVersion"), "html", null, true);
                        echo "以上才能更新</div>";
                    }
                    echo "</div>
            <div class=\"text-muted\">更新日志： ";
                    // line 30
                    if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                    echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($this->getAttribute($_app_, "package"), "description"), 80);
                    echo " <a href=\"javascript:;\" class=\"text-warning description-more\" data-content=\"";
                    if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "package"), "description"), "html", null, true);
                    echo "\">查看详情  &raquo; </a>
            </div>
            <div class=\"text-muted\"><small>开发者：";
                    // line 32
                    if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_app_, "developerName"), "html", null, true);
                    echo "</small></div>
          </td>

          <td>
            <strong class=\"text-success\">";
                    // line 36
                    if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "package"), "toVersion"), "html", null, true);
                    echo "</strong>
            <br>
            <small class=\"text-muted\">";
                    // line 38
                    if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "package"), "createdTime"), "Y-m-d"), "html", null, true);
                    echo "更新</small>
          </td>

          <td>
            <a href=\"#\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                    // line 42
                    if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_app_package_update_modal", array("id" => $this->getAttribute($this->getAttribute($_app_, "package"), "id"), "type" => "upgrade")), "html", null, true);
                    echo "\" class=\"btn btn-primary ";
                    if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                    if (isset($context["version"])) { $_version_ = $context["version"]; } else { $_version_ = null; }
                    if (($this->getAttribute($this->getAttribute($_app_, "package"), "edusohoMinVersion") > $_version_)) {
                        echo "disabled";
                    }
                    echo "\" data-keyboard=\"false\" data-backdrop=\"static\">更新</a>
          </td>
        </tr>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['app'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                echo "    </tbody>
  </table>
";
            } else {
                // line 49
                echo "当前已是最新版本!
";
            }
        }
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:App:upgrades.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 49,  142 => 46,  125 => 42,  117 => 38,  111 => 36,  103 => 32,  94 => 30,  80 => 29,  76 => 27,  71 => 26,  60 => 17,  57 => 16,  51 => 14,  48 => 13,  43 => 10,  40 => 9,  33 => 3,  28 => 7,  26 => 5,);
    }
}
