<?php

/* TopxiaAdminBundle:CloudSetting:key-license-info.html.twig */
class __TwigTemplate_d2719f82da47b6d866ac767103568b10 extends Twig_Template
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
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        if ((($this->getAttribute($_info_, "error", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_info_, "error"), null)) : (null))) {
            // line 2
            echo "
  <div class=\"form-group\">
    <div class=\"col-md-6 col-md-offset-3\">
      <div class=\"alert alert-danger key-error-alert\">
        授权码不正确，请重新设置！如您是商业用户，请联系EduSoho官方。
      </div>
    </div>
  </div>

";
        } else {
            // line 12
            echo "
  ";
            // line 13
            if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
            if ((!(($this->getAttribute($_info_, "licenseDomains", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_info_, "licenseDomains"), null)) : (null)))) {
                // line 14
                echo "
  <div class=\"form-group\">
    <label class=\"col-md-3 control-label\">授权域名</label>
    <div class=\"col-md-6\">
      <p class=\"form-control-static\">";
                // line 18
                if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request"), "server"), "get", array(0 => "HTTP_HOST"), "method"), "html", null, true);
                echo " <span class=\"text-warning\">(尚未授权)</span></p>
      <p class=\"help-block\">域名绑定后，才能在应用中心购买应用；域名一旦绑定后，就不可更改！</p>
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-6 col-md-offset-3\">
      <button type=\"button\" class=\"btn btn-sm btn-warning key-bind-btn\" data-url=\"";
                // line 25
                echo $this->env->getExtension('routing')->getPath("admin_setting_cloud_key_bind");
                echo "\" data-loading-text=\"正在绑定域名，请稍等...\">绑定授权域名</button>
    </div>
  </div>

  ";
            } else {
                // line 30
                echo "
    <div class=\"form-group\">
      <label class=\"col-md-3 control-label\">授权域名</label>
      <div class=\"col-md-6\">
        <p class=\"form-control-static text-success\">";
                // line 34
                if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_info_, "licenseDomains"), "html", null, true);
                echo " <span class=\"text-success\">(已绑定)</span></p>
        ";
                // line 35
                if (isset($context["currentHost"])) { $_currentHost_ = $context["currentHost"]; } else { $_currentHost_ = null; }
                if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
                if (!twig_in_filter($_currentHost_, twig_split_filter($this->getAttribute($_info_, "licenseDomains"), ";"))) {
                    // line 36
                    echo "          <div class=\"alert alert-danger\">
            当前域名";
                    // line 37
                    if (isset($context["currentHost"])) { $_currentHost_ = $context["currentHost"]; } else { $_currentHost_ = null; }
                    echo twig_escape_filter($this->env, $_currentHost_, "html", null, true);
                    echo " 与授权域名不符，将会影响EduSoho系统功能的使用；请使用授权域名访问此系统。
          </div>
        ";
                }
                // line 40
                echo "      </div>
    </div>

    <div class=\"form-group\">
      <label class=\"col-md-3 control-label\">套餐信息</label>
      <div class=\"col-md-6\">
        <p class=\"form-control-static\">";
                // line 46
                if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_info_, "levelName"), "html", null, true);
                echo "</p>
        ";
                // line 47
                if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
                if (((($this->getAttribute($_info_, "startDate", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_info_, "startDate"), null)) : (null)) && (($this->getAttribute($_info_, "endDate", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_info_, "endDate"), null)) : (null)))) {
                    // line 48
                    echo "          <p class=\"help-block\">服务期 ";
                    if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_info_, "startDate"), "html", null, true);
                    echo " 至 ";
                    if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_info_, "endDate"), "html", null, true);
                    echo "</p>
        ";
                }
                // line 50
                echo "      </div>
    </div>

    ";
                // line 53
                if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
                if ($this->getAttribute($_info_, "copyright")) {
                    // line 54
                    echo "      <div class=\"form-group\">
        <label class=\"col-md-3 control-label\">版权名称</label>
        <div class=\"col-md-6\">
          <input id=\"field-copyrightName\" class=\"form-control\" type=\"text\" name=\"copyrightName\" value=\"";
                    // line 57
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("copyright.name", ""), "html", null, true);
                    echo "\">
          <p class=\"help-block\">填写版权名称后，网站前台页面底部将会显示“Powered by 你的版权名称”，为空则不显示版权信息。</p>
        </div>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-6 col-md-offset-3\">
          <button class=\"btn btn-primary save-copyright-btn\" data-url=\"";
                    // line 64
                    echo $this->env->getExtension('routing')->getPath("admin_setting_cloud_key_copyright");
                    echo "\" data-loading-text=\"正在保存...\">保存版权名称</button>
        </div>
      </div>
    ";
                }
                // line 68
                echo "



  ";
            }
            // line 73
            echo "
";
        }
        // line 75
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:CloudSetting:key-license-info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 75,  153 => 73,  146 => 68,  139 => 64,  129 => 57,  124 => 54,  121 => 53,  116 => 50,  106 => 48,  103 => 47,  98 => 46,  90 => 40,  83 => 37,  80 => 36,  76 => 35,  71 => 34,  65 => 30,  57 => 25,  46 => 18,  40 => 14,  37 => 13,  34 => 12,  22 => 2,  19 => 1,);
    }
}
