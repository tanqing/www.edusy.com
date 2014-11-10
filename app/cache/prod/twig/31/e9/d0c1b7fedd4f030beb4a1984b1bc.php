<?php

/* TopxiaAdminBundle:App:center.html.twig */
class __TwigTemplate_31e9d0c1b7fedd4f030beb4a1984b1bc extends Twig_Template
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
        $context["menu"] = "center";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "应用中心 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "  <div class=\"page-header\">
    <h1>应用中心</h1>
  </div>
  ";
        // line 11
        if (isset($context["status"])) { $_status_ = $context["status"]; } else { $_status_ = null; }
        if ((((array_key_exists("status", $context)) ? (_twig_default_filter($_status_, null)) : (null)) == "error")) {
            // line 12
            echo "    <div class=\"alert alert-danger\">AccessKey或者SecretKey设置不正确，会影响到系统正常的运行，<a href=\"";
            echo $this->env->getExtension('routing')->getPath("admin_setting_cloud");
            echo "\">请修改设置。</a></div>
  ";
        } elseif ((((array_key_exists("status", $context)) ? (_twig_default_filter($_status_, null)) : (null)) == "unlink")) {
            // line 14
            echo "    <div class=\"alert alert-danger\">您的服务器无法连接到更新服务器，请检查网络连接状况。</div>
  ";
        } else {
            // line 16
            echo "  <table class=\"table table-striped table-hover\">
    <thead>
      <tr>
        <th>应用描述</th>
        <th>开发者</th>
        <th>操作</th>
      </tr>
    </thead>
    <tbody>
      ";
            // line 25
            if (isset($context["apps"])) { $_apps_ = $context["apps"]; } else { $_apps_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_apps_);
            foreach ($context['_seq'] as $context["_key"] => $context["app"]) {
                // line 26
                echo "        ";
                if (isset($context["installedApps"])) { $_installedApps_ = $context["installedApps"]; } else { $_installedApps_ = null; }
                if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                $context["installedApp"] = (($this->getAttribute($_installedApps_, $this->getAttribute($_app_, "code"), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_installedApps_, $this->getAttribute($_app_, "code"), array(), "array"), null)) : (null));
                // line 27
                echo "      <tr>
        <td>
          <div>
            <a target=\"_blank\" href=\"http://open.edusoho.com/app/";
                // line 30
                if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_app_, "code"), "html", null, true);
                echo "\"><strong class=\"text-primary\">";
                if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_app_, "name"), "html", null, true);
                echo "</strong></a>
             - 
            <span class=\"text-info\">";
                // line 32
                if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_app_, "latestVersion"), "html", null, true);
                echo "</span>
            ";
                // line 33
                if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                if ($this->getAttribute($_app_, "licensed")) {
                    // line 34
                    echo "              <span class=\"label label-warning\">商业版应用</span>
            ";
                }
                // line 36
                echo "          </div>
          <div class=\"\">";
                // line 37
                if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($_app_, "description"), 100);
                echo "</div>
          <div class=\"text-muted\"><small>最后更新： ";
                // line 38
                if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_app_, "latestTime"), "Y-m-d"), "html", null, true);
                echo "</small></div>
        </td>
        <td>
          ";
                // line 41
                if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_app_, "developerName"), "html", null, true);
                echo "
        </td>
        <td>
          ";
                // line 44
                if (isset($context["installedApp"])) { $_installedApp_ = $context["installedApp"]; } else { $_installedApp_ = null; }
                if ($_installedApp_) {
                    // line 45
                    echo "            <a href=\"javascript:;\" class=\"btn btn-default disabled\">已安装</a>
          ";
                } else {
                    // line 47
                    echo "            ";
                    if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                    if (($this->getAttribute($_app_, "userAccess") == "ok")) {
                        // line 48
                        echo "              <a href=\"#\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_app_package_update_modal", array("id" => $this->getAttribute($_app_, "latestPackageId"), "type" => "install")), "html", null, true);
                        echo "\" class=\"btn btn-primary\" data-keyboard=\"false\" data-backdrop=\"static\">安装</a>
            ";
                    } else {
                        // line 50
                        echo "              <a href=\"http://open.edusoho.com/app/";
                        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_app_, "code"), "html", null, true);
                        echo "\" class=\"btn btn-warning\" target=\"_blank\">购买</a>
            ";
                    }
                    // line 52
                    echo "          ";
                }
                // line 53
                echo "        </td>
      </tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['app'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "    </tbody>
  </table>
  ";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:App:center.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 56,  156 => 53,  153 => 52,  146 => 50,  139 => 48,  135 => 47,  131 => 45,  128 => 44,  121 => 41,  114 => 38,  109 => 37,  106 => 36,  102 => 34,  99 => 33,  94 => 32,  85 => 30,  80 => 27,  75 => 26,  70 => 25,  59 => 16,  55 => 14,  49 => 12,  46 => 11,  41 => 8,  38 => 7,  31 => 3,  26 => 5,);
    }
}
