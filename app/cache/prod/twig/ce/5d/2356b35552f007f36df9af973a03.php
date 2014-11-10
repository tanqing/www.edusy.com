<?php

/* TopxiaWebBundle::layout.html.twig */
class __TwigTemplate_ce5d2356b35552f007f36df9af973a03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'head_scripts' => array($this, 'block_head_scripts'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["web_macro"] = $this->env->loadTemplate("TopxiaWebBundle::macro.html.twig");
        // line 2
        echo "<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"\"> <!--<![endif]-->
<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        // line 15
        echo "</title>
  <meta name=\"keywords\" content=\"";
        // line 16
        $this->displayBlock('keywords', $context, $blocks);
        echo "\" />
  <meta name=\"description\" content=\"";
        // line 17
        $this->displayBlock('description', $context, $blocks);
        echo "\" />
  <meta content=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->renderCsrfToken("site"), "html", null, true);
        echo "\" name=\"csrf-token\" />
  ";
        // line 19
        echo $this->env->getExtension('topxia_web_twig')->getSetting("login_bind.verify_code", "");
        echo "
  ";
        // line 20
        if ($this->env->getExtension('topxia_web_twig')->getSetting("site.favicon")) {
            // line 21
            echo "  <link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('topxia_web_twig')->getSetting("site.favicon")), "html", null, true);
            echo "\" rel=\"shortcut icon\" />
  ";
        }
        // line 23
        echo "  ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 33
        echo "  <!--[if lt IE 9]>
    <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/html5shiv.js"), "html", null, true);
        echo "\"></script>
  <![endif]-->

  <!--[if IE 8]>
    <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/respond.min.js"), "html", null, true);
        echo "\"></script>
  <![endif]-->

  ";
        // line 41
        $this->displayBlock('head_scripts', $context, $blocks);
        // line 42
        echo "
</head>
<body ";
        // line 44
        if (isset($context["bodyClass"])) { $_bodyClass_ = $context["bodyClass"]; } else { $_bodyClass_ = null; }
        if (((array_key_exists("bodyClass", $context)) ? (_twig_default_filter($_bodyClass_, "")) : (""))) {
            echo "class=\"";
            if (isset($context["bodyClass"])) { $_bodyClass_ = $context["bodyClass"]; } else { $_bodyClass_ = null; }
            echo twig_escape_filter($this->env, $_bodyClass_, "html", null, true);
            echo "\"";
        }
        echo ">

";
        // line 46
        $this->displayBlock('body', $context, $blocks);
        // line 146
        echo "
";
        // line 147
        $this->env->loadTemplate("TopxiaWebBundle::script_boot.html.twig")->display(array_merge($context, array("script_main" => $this->env->getExtension('assets')->getAssetUrl("bundles/topxiaweb/js/app.js"))));
        // line 148
        echo "

</body>
</html>";
    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.name", "EDUSOHO"), "html", null, true);
        if ($this->env->getExtension('topxia_web_twig')->getSetting("site.slogan")) {
            echo " - ";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.slogan"), "html", null, true);
        }
        if ((!$this->env->getExtension('topxia_web_twig')->getSetting("copyright.owned"))) {
            echo " - Powered by EDUSOHO";
        }
    }

    // line 16
    public function block_keywords($context, array $blocks = array())
    {
    }

    // line 17
    public function block_description($context, array $blocks = array())
    {
    }

    // line 23
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 24
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/gallery2/bootstrap/3.1.1/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/common.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/bootstrap-extends.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiaweb/css/web.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiaweb/css/member.css"), "html", null, true);
        echo "\" />
    <!--[if lt IE 8]>
      <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/oldie.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <![endif]-->
  ";
    }

    // line 41
    public function block_head_scripts($context, array $blocks = array())
    {
    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
        // line 47
        echo "
  <div class=\"navbar navbar-inverse site-navbar\" id=\"site-navbar\"  data-counter-url=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("user_remind_counter");
        echo "\">
    <div class=\"container\">
      <div class=\"container-gap\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          ";
        // line 57
        if ($this->env->getExtension('topxia_web_twig')->getSetting("site.logo")) {
            // line 58
            echo "            <a class=\"navbar-brand-logo\" href=\"";
            echo $this->env->getExtension('routing')->getPath("homepage");
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('topxia_web_twig')->getSetting("site.logo")), "html", null, true);
            echo "\"></a>
          ";
        } else {
            // line 60
            echo "            <a class=\"navbar-brand\" href=\"";
            echo $this->env->getExtension('routing')->getPath("homepage");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.name", "EDUSOHO"), "html", null, true);
            echo "</a>
          ";
        }
        // line 62
        echo "        </div>
        <div class=\"navbar-collapse collapse\">
          <ul class=\"nav navbar-nav\">
      </ul>
          ";
        // line 66
        if (isset($context["siteNav"])) { $_siteNav_ = $context["siteNav"]; } else { $_siteNav_ = null; }
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Default:topNavigation", array("siteNav" => ((array_key_exists("siteNav", $context)) ? (_twig_default_filter($_siteNav_, null)) : (null)))));
        echo "

          <ul class=\"nav navbar-nav navbar-right\">
            ";
        // line 69
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if ($this->getAttribute($_app_, "user")) {
            // line 70
            echo "              <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("my");
            echo "\"> 我的课程 </a></li>
              ";
            // line 71
            if ($this->env->getExtension('topxia_web_twig')->getSetting("mobile.enabled")) {
                // line 72
                echo "                <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("mobile");
                echo "\" class=\"mobile-badge-container\">
                  <span class=\"glyphicon glyphicon-phone\"></span>
                  <span class=\"badge\">v2</span>
                </a></li>
              ";
            }
            // line 77
            echo "              <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("search");
            echo "\"><span class=\"glyphicon glyphicon-search\"></span></a></li>
              <li><a href=\"";
            // line 78
            echo $this->env->getExtension('routing')->getPath("notification");
            echo "\" class=\"badge-container notification-badge-container\">
                <span class=\"glyphicon glyphicon-bullhorn hidden-lt-ie8\"></span>
                <span class=\"visible-lt-ie8\">通知</span>
                ";
            // line 81
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            if (($this->getAttribute($this->getAttribute($_app_, "user"), "newNotificationNum") > 0)) {
                echo "<span class=\"badge\">";
                if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "user"), "newNotificationNum"), "html", null, true);
                echo "</span>";
            }
            echo "</a></li>
              <li>
                <a href=\"";
            // line 83
            echo $this->env->getExtension('routing')->getPath("message");
            echo "\" class=\"badge-container message-badge-container\">
                <span class=\"glyphicon glyphicon-envelope hidden-lt-ie8\"></span>
                <span class=\"visible-lt-ie8\">私信</span>
                ";
            // line 86
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            if (($this->getAttribute($this->getAttribute($_app_, "user"), "newMessageNum") > 0)) {
                echo "<span class=\"badge\">";
                if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "user"), "newMessageNum"), "html", null, true);
                echo "</span>";
            }
            // line 87
            echo "                </a>
              </li>
              <li class=\"visible-lt-ie8\"><a href=\"";
            // line 89
            echo $this->env->getExtension('routing')->getPath("settings");
            echo "\">";
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "user"), "nickname"), "html", null, true);
            echo "</a></li>
              <li class=\"dropdown hidden-lt-ie8\">
                <a href=\"javascript:;\" class=\"dropdown-toggle\"  data-toggle=\"dropdown\">";
            // line 91
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "user"), "nickname"), "html", null, true);
            echo " <b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                  <li><a href=\"";
            // line 93
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($this->getAttribute($_app_, "user"), "id"))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-home\"></i> 我的主页</a></li>
                  <li><a href=\"";
            // line 94
            echo $this->env->getExtension('routing')->getPath("settings");
            echo "\"><i class=\"glyphicon glyphicon-cog\"></i> 帐号设置</a></li>
                  <li class=\"divider\"></li>
                  ";
            // line 96
            if ($this->env->getExtension('security')->isGranted("ROLE_BACKEND")) {
                // line 97
                echo "                    <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("admin");
                echo "\"><i class=\"glyphicon glyphicon-dashboard\"></i> 管理后台</a></li>
                    <li class=\"divider\"></li>
                  ";
            }
            // line 100
            echo "                  <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\"><i class=\"glyphicon glyphicon-off\"></i> 退出</a></li>
                </ul>
              </li>
            ";
        } else {
            // line 104
            echo "              ";
            if ($this->env->getExtension('topxia_web_twig')->getSetting("mobile.enabled")) {
                // line 105
                echo "                <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("mobile");
                echo "\"><span class=\"glyphicon glyphicon-phone\"></span> 手机版</a></li>
              ";
            }
            // line 107
            echo "              <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("search");
            echo "\"><span class=\"glyphicon glyphicon-search\"></span> 搜索</a></li>
              <li><a href=\"";
            // line 108
            if (isset($context["_target_path"])) { $__target_path_ = $context["_target_path"]; } else { $__target_path_ = null; }
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login", array("goto" => ((array_key_exists("_target_path", $context)) ? (_twig_default_filter($__target_path_, $this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request"), "server"), "get", array(0 => "REQUEST_URI"), "method"))) : ($this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request"), "server"), "get", array(0 => "REQUEST_URI"), "method"))))), "html", null, true);
            echo "\">登录</a></li>
              <li><a href=\"";
            // line 109
            if (isset($context["_target_path"])) { $__target_path_ = $context["_target_path"]; } else { $__target_path_ = null; }
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("register", array("goto" => ((array_key_exists("_target_path", $context)) ? (_twig_default_filter($__target_path_, $this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request"), "server"), "get", array(0 => "REQUEST_URI"), "method"))) : ($this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request"), "server"), "get", array(0 => "REQUEST_URI"), "method"))))), "html", null, true);
            echo "\">注册</a></li>
            ";
        }
        // line 111
        echo "          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </div>
  </div>

  <div id=\"content-container\" class=\"container\">
    ";
        // line 118
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if (isset($context["hideSetupHint"])) { $_hideSetupHint_ = $context["hideSetupHint"]; } else { $_hideSetupHint_ = null; }
        if ((($this->getAttribute($_app_, "user") && ($this->getAttribute($this->getAttribute($_app_, "user"), "setup") == 0)) && ((!array_key_exists("hideSetupHint", $context)) || ($_hideSetupHint_ != true)))) {
            // line 119
            echo "      <div class=\"alert alert-warning\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
        为了帐号的安全，以及更好的使用体验，请设置您的Email地址。
        <a href=\"";
            // line 122
            echo $this->env->getExtension('routing')->getPath("settings_setup");
            echo "\">现在就去设置</a>
      </div>
    ";
        }
        // line 125
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
        // line 126
        echo "    
  </div><!-- /container -->

  <div class=\"site-footer container clearfix\">

    ";
        // line 131
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Default:footNavigation"));
        echo "

    <div class=\"text-gray\" data-role=\"default-foot-bar\">
      ";
        // line 134
        $this->env->loadTemplate("TopxiaWebBundle::powered-by.html.twig")->display($context);
        // line 135
        echo "      ";
        echo $this->env->getExtension('topxia_web_twig')->getSetting("site.analytics");
        echo "
      <div class=\"pull-right\">";
        // line 136
        if ($this->env->getExtension('topxia_web_twig')->getSetting("site.copyright")) {
            echo "课程内容版权均归<a href=\"/\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.copyright"), "html", null, true);
            echo "</a>所有";
        }
        echo "&nbsp;";
        if ($this->env->getExtension('topxia_web_twig')->getSetting("site.icp")) {
            echo "<a href=\"http://www.miibeian.gov.cn/\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.icp"), "html", null, true);
            echo "</a>";
        }
        echo "</div>

      <div class=\"pull-right mhs\"><a href=\"";
        // line 138
        echo $this->env->getExtension('routing')->getPath("course_archive");
        echo "\">课程存档</a></div>
    </div>
  </div>

  ";
        // line 142
        $this->displayBlock('bottom', $context, $blocks);
        // line 143
        echo "  <div id=\"login-modal\" class=\"modal\" data-url=\"/login/ajax\"></div>
<div id=\"modal\" class=\"modal\"></div>
";
    }

    // line 125
    public function block_content($context, array $blocks = array())
    {
    }

    // line 142
    public function block_bottom($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  438 => 142,  433 => 125,  427 => 143,  425 => 142,  418 => 138,  403 => 136,  398 => 135,  396 => 134,  390 => 131,  383 => 126,  380 => 125,  374 => 122,  369 => 119,  365 => 118,  356 => 111,  349 => 109,  343 => 108,  338 => 107,  332 => 105,  329 => 104,  321 => 100,  314 => 97,  312 => 96,  307 => 94,  302 => 93,  296 => 91,  288 => 89,  284 => 87,  276 => 86,  270 => 83,  259 => 81,  253 => 78,  248 => 77,  239 => 72,  237 => 71,  232 => 70,  229 => 69,  222 => 66,  216 => 62,  208 => 60,  200 => 58,  198 => 57,  186 => 48,  183 => 47,  180 => 46,  175 => 41,  168 => 30,  163 => 28,  159 => 27,  155 => 26,  151 => 25,  146 => 24,  143 => 23,  138 => 17,  133 => 16,  119 => 12,  112 => 148,  110 => 147,  105 => 46,  94 => 44,  90 => 42,  88 => 41,  82 => 38,  75 => 34,  69 => 23,  63 => 21,  61 => 20,  53 => 18,  45 => 16,  42 => 15,  40 => 12,  29 => 2,  27 => 1,  122 => 13,  120 => 52,  113 => 49,  107 => 146,  100 => 42,  95 => 41,  72 => 33,  64 => 18,  57 => 19,  54 => 15,  49 => 17,  41 => 7,  38 => 6,  31 => 3,  26 => 4,);
    }
}
