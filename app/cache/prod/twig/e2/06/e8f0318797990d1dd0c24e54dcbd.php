<?php

/* TopxiaWebBundle::layout.html.twig */
class __TwigTemplate_e206e8f0318797990d1dd0c24e54dcbd extends Twig_Template
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
        // line 17
        echo "</title>
  <meta name=\"keywords\" content=\"";
        // line 18
        $this->displayBlock('keywords', $context, $blocks);
        echo "\" />
  <meta name=\"description\" content=\"";
        // line 19
        $this->displayBlock('description', $context, $blocks);
        echo "\" />
  <meta content=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->renderCsrfToken("site"), "html", null, true);
        echo "\" name=\"csrf-token\" />
  ";
        // line 21
        echo $this->env->getExtension('topxia_web_twig')->getSetting("login_bind.verify_code", "");
        echo "
  ";
        // line 22
        if ($this->env->getExtension('topxia_web_twig')->getSetting("site.favicon")) {
            // line 23
            echo "  <link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('topxia_web_twig')->getSetting("site.favicon")), "html", null, true);
            echo "\" rel=\"shortcut icon\" />
  ";
        }
        // line 25
        echo "  ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 36
        echo "  <!--[if lt IE 9]>
    <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/html5shiv.js"), "html", null, true);
        echo "\"></script>
  <![endif]-->

  <!--[if IE 8]>
    <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/respond.min.js"), "html", null, true);
        echo "\"></script>
  <![endif]-->

  ";
        // line 44
        $this->displayBlock('head_scripts', $context, $blocks);
        // line 45
        echo "
</head>
<body ";
        // line 47
        if (isset($context["bodyClass"])) { $_bodyClass_ = $context["bodyClass"]; } else { $_bodyClass_ = null; }
        if (((array_key_exists("bodyClass", $context)) ? (_twig_default_filter($_bodyClass_, "")) : (""))) {
            echo "class=\"";
            if (isset($context["bodyClass"])) { $_bodyClass_ = $context["bodyClass"]; } else { $_bodyClass_ = null; }
            echo twig_escape_filter($this->env, $_bodyClass_, "html", null, true);
            echo "\"";
        }
        echo ">

";
        // line 49
        $this->displayBlock('body', $context, $blocks);
        // line 147
        echo "
";
        // line 148
        $this->env->loadTemplate("TopxiaWebBundle::script_boot.html.twig")->display(array_merge($context, array("script_main" => $this->env->getExtension('assets')->getAssetUrl("bundles/topxiaweb/js/app.js"))));
        // line 149
        echo "

</body>
</html>";
    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.name", "EDUSOHO"), "html", null, true);
        echo "
      ";
        // line 14
        if ($this->env->getExtension('topxia_web_twig')->getSetting("site.slogan")) {
            echo " - ";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.slogan"), "html", null, true);
            echo " ";
        }
        // line 15
        echo "      ";
        if ((!$this->env->getExtension('topxia_web_twig')->getSetting("copyright.owned"))) {
            echo " - Powered by EDUSOHO ";
        }
    }

    // line 18
    public function block_keywords($context, array $blocks = array())
    {
    }

    // line 19
    public function block_description($context, array $blocks = array())
    {
    }

    // line 25
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 26
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/gallery2/bootstrap/3.1.1/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/common.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/bootstrap-extends.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiaweb/css/web.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/default-b/css/default-b.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiaweb/css/member.css"), "html", null, true);
        echo "\" />
    <!--[if lt IE 8]>
      <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/oldie.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <![endif]-->
  ";
    }

    // line 44
    public function block_head_scripts($context, array $blocks = array())
    {
    }

    // line 49
    public function block_body($context, array $blocks = array())
    {
        // line 50
        echo "
  <div class=\"navbar navbar-inverse site-navbar\" id=\"site-navbar\"  data-counter-url=\"";
        // line 51
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
        // line 60
        if ($this->env->getExtension('topxia_web_twig')->getSetting("site.logo")) {
            // line 61
            echo "            <a class=\"navbar-brand-logo\" href=\"";
            echo $this->env->getExtension('routing')->getPath("homepage");
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('topxia_web_twig')->getSetting("site.logo")), "html", null, true);
            echo "\"></a>
          ";
        } else {
            // line 63
            echo "            <a class=\"navbar-brand\" href=\"";
            echo $this->env->getExtension('routing')->getPath("homepage");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.name", "EDUSOHO"), "html", null, true);
            echo "</a>
          ";
        }
        // line 65
        echo "        </div>
        <div class=\"navbar-collapse collapse\">
          ";
        // line 67
        if (isset($context["siteNav"])) { $_siteNav_ = $context["siteNav"]; } else { $_siteNav_ = null; }
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Default:topNavigation", array("siteNav" => ((array_key_exists("siteNav", $context)) ? (_twig_default_filter($_siteNav_, null)) : (null)))));
        echo "

          <ul class=\"nav navbar-nav navbar-right\">
            ";
        // line 70
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if ($this->getAttribute($_app_, "user")) {
            // line 71
            echo "              <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("my");
            echo "\"> 我的课程 </a></li>
              ";
            // line 72
            if ($this->env->getExtension('topxia_web_twig')->getSetting("mobile.enabled")) {
                // line 73
                echo "                <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("mobile");
                echo "\" class=\"mobile-badge-container\">
                  <span class=\"glyphicon glyphicon-phone\"></span>
                  <span class=\"badge\">v2</span>
                </a></li>
              ";
            }
            // line 78
            echo "              <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("search");
            echo "\"><span class=\"glyphicon glyphicon-search\"></span></a></li>
              <li><a href=\"";
            // line 79
            echo $this->env->getExtension('routing')->getPath("notification");
            echo "\" class=\"badge-container notification-badge-container\">
                <span class=\"glyphicon glyphicon-bullhorn hidden-lt-ie8\"></span>
                <span class=\"visible-lt-ie8\">通知</span>
                ";
            // line 82
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
            // line 84
            echo $this->env->getExtension('routing')->getPath("message");
            echo "\" class=\"badge-container message-badge-container\">
                <span class=\"glyphicon glyphicon-envelope hidden-lt-ie8\"></span>
                <span class=\"visible-lt-ie8\">私信</span>
                ";
            // line 87
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            if (($this->getAttribute($this->getAttribute($_app_, "user"), "newMessageNum") > 0)) {
                echo "<span class=\"badge\">";
                if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "user"), "newMessageNum"), "html", null, true);
                echo "</span>";
            }
            // line 88
            echo "                </a>
              </li>
              <li class=\"visible-lt-ie8\"><a href=\"";
            // line 90
            echo $this->env->getExtension('routing')->getPath("settings");
            echo "\">";
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "user"), "nickname"), "html", null, true);
            echo "</a></li>
              <li class=\"dropdown hidden-lt-ie8\">
                <a href=\"javascript:;\" class=\"dropdown-toggle\"  data-toggle=\"dropdown\">";
            // line 92
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "user"), "nickname"), "html", null, true);
            echo " <b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                  <li><a href=\"";
            // line 94
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($this->getAttribute($_app_, "user"), "id"))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-home\"></i> 我的主页</a></li>
                  <li><a href=\"";
            // line 95
            echo $this->env->getExtension('routing')->getPath("settings");
            echo "\"><i class=\"glyphicon glyphicon-cog\"></i> 帐号设置</a></li>
                  <li class=\"divider\"></li>
                  ";
            // line 97
            if ($this->env->getExtension('security')->isGranted("ROLE_BACKEND")) {
                // line 98
                echo "                    <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("admin");
                echo "\"><i class=\"glyphicon glyphicon-dashboard\"></i> 管理后台</a></li>
                    <li class=\"divider\"></li>
                  ";
            }
            // line 101
            echo "                  <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\"><i class=\"glyphicon glyphicon-off\"></i> 退出</a></li>
                </ul>
              </li>
            ";
        } else {
            // line 105
            echo "              ";
            if ($this->env->getExtension('topxia_web_twig')->getSetting("mobile.enabled")) {
                // line 106
                echo "                <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("mobile");
                echo "\"><span class=\"glyphicon glyphicon-phone\"></span> 手机版</a></li>
              ";
            }
            // line 108
            echo "              <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("search");
            echo "\"><span class=\"glyphicon glyphicon-search\"></span> 搜索</a></li>
              <li><a href=\"";
            // line 109
            if (isset($context["_target_path"])) { $__target_path_ = $context["_target_path"]; } else { $__target_path_ = null; }
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login", array("goto" => ((array_key_exists("_target_path", $context)) ? (_twig_default_filter($__target_path_, $this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request"), "server"), "get", array(0 => "REQUEST_URI"), "method"))) : ($this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request"), "server"), "get", array(0 => "REQUEST_URI"), "method"))))), "html", null, true);
            echo "\">登录</a></li>
              <li><a href=\"";
            // line 110
            if (isset($context["_target_path"])) { $__target_path_ = $context["_target_path"]; } else { $__target_path_ = null; }
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("register", array("goto" => ((array_key_exists("_target_path", $context)) ? (_twig_default_filter($__target_path_, $this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request"), "server"), "get", array(0 => "REQUEST_URI"), "method"))) : ($this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request"), "server"), "get", array(0 => "REQUEST_URI"), "method"))))), "html", null, true);
            echo "\">注册</a></li>
            ";
        }
        // line 112
        echo "          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </div>
  </div>

  <div id=\"content-container\" class=\"container\">
    ";
        // line 119
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if (isset($context["hideSetupHint"])) { $_hideSetupHint_ = $context["hideSetupHint"]; } else { $_hideSetupHint_ = null; }
        if ((($this->getAttribute($_app_, "user") && ($this->getAttribute($this->getAttribute($_app_, "user"), "setup") == 0)) && ((!array_key_exists("hideSetupHint", $context)) || ($_hideSetupHint_ != true)))) {
            // line 120
            echo "      <div class=\"alert alert-warning\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
        为了帐号的安全，以及更好的使用体验，请设置您的Email地址。
        <a href=\"";
            // line 123
            echo $this->env->getExtension('routing')->getPath("settings_setup");
            echo "\">现在就去设置</a>
      </div>
    ";
        }
        // line 126
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
        // line 127
        echo "  </div><!-- /container -->

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
        echo "
  <div id=\"login-modal\" class=\"modal\" data-url=\"";
        // line 144
        echo $this->env->getExtension('routing')->getPath("login_ajax");
        echo "\"></div>
  <div id=\"modal\" class=\"modal\"></div>
";
    }

    // line 126
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
        return array (  449 => 142,  444 => 126,  434 => 143,  432 => 142,  410 => 136,  405 => 135,  403 => 134,  397 => 131,  391 => 127,  388 => 126,  382 => 123,  377 => 120,  373 => 119,  364 => 112,  357 => 110,  351 => 109,  346 => 108,  329 => 101,  322 => 98,  320 => 97,  315 => 95,  310 => 94,  304 => 92,  296 => 90,  292 => 88,  284 => 87,  278 => 84,  267 => 82,  261 => 79,  256 => 78,  247 => 73,  245 => 72,  237 => 70,  226 => 65,  210 => 61,  208 => 60,  196 => 51,  190 => 49,  185 => 44,  178 => 33,  173 => 31,  165 => 29,  161 => 28,  157 => 27,  152 => 26,  149 => 25,  144 => 19,  139 => 18,  126 => 14,  122 => 13,  112 => 149,  110 => 148,  107 => 147,  94 => 47,  90 => 45,  82 => 41,  75 => 37,  69 => 25,  63 => 23,  61 => 22,  57 => 21,  53 => 20,  49 => 19,  45 => 18,  42 => 17,  40 => 12,  27 => 1,  1253 => 474,  1249 => 472,  1240 => 468,  1237 => 467,  1233 => 465,  1229 => 463,  1225 => 461,  1221 => 460,  1218 => 459,  1215 => 458,  1211 => 456,  1207 => 455,  1203 => 453,  1200 => 452,  1197 => 451,  1189 => 447,  1186 => 446,  1179 => 441,  1176 => 440,  1173 => 439,  1170 => 438,  1167 => 437,  1164 => 436,  1157 => 433,  1152 => 432,  1147 => 431,  1144 => 430,  1140 => 429,  1135 => 428,  1132 => 427,  1129 => 426,  1123 => 422,  1116 => 417,  1109 => 414,  1102 => 412,  1099 => 411,  1095 => 409,  1088 => 406,  1084 => 404,  1081 => 403,  1077 => 401,  1073 => 399,  1066 => 397,  1063 => 396,  1057 => 392,  1054 => 391,  1047 => 388,  1039 => 387,  1036 => 386,  1032 => 385,  1028 => 384,  1025 => 383,  1022 => 382,  1019 => 381,  1014 => 380,  1011 => 379,  1008 => 378,  1004 => 376,  1000 => 374,  996 => 373,  992 => 372,  989 => 371,  986 => 370,  982 => 368,  978 => 366,  975 => 365,  972 => 364,  968 => 363,  964 => 361,  961 => 360,  956 => 359,  951 => 358,  948 => 357,  943 => 356,  940 => 355,  936 => 354,  932 => 353,  921 => 352,  914 => 347,  911 => 346,  908 => 345,  905 => 344,  896 => 337,  893 => 336,  887 => 332,  881 => 331,  869 => 329,  865 => 328,  860 => 327,  854 => 323,  850 => 322,  847 => 321,  844 => 320,  839 => 317,  836 => 316,  830 => 312,  822 => 309,  815 => 307,  808 => 305,  801 => 303,  798 => 302,  790 => 301,  783 => 298,  778 => 297,  775 => 296,  770 => 295,  762 => 289,  758 => 288,  755 => 287,  752 => 285,  740 => 280,  731 => 275,  726 => 274,  720 => 272,  717 => 271,  713 => 270,  708 => 269,  700 => 263,  696 => 262,  693 => 261,  690 => 259,  684 => 255,  678 => 254,  669 => 252,  663 => 251,  658 => 250,  650 => 244,  646 => 243,  644 => 242,  641 => 241,  638 => 240,  632 => 238,  628 => 237,  622 => 232,  619 => 231,  613 => 227,  607 => 226,  596 => 219,  591 => 218,  579 => 216,  575 => 214,  566 => 212,  556 => 210,  553 => 209,  545 => 208,  536 => 204,  531 => 203,  525 => 200,  522 => 199,  518 => 198,  515 => 197,  512 => 196,  509 => 194,  506 => 193,  500 => 189,  494 => 188,  485 => 182,  480 => 181,  473 => 178,  468 => 177,  457 => 173,  452 => 172,  446 => 168,  442 => 167,  437 => 144,  430 => 162,  425 => 138,  421 => 158,  418 => 157,  415 => 156,  412 => 154,  406 => 150,  400 => 149,  392 => 145,  387 => 144,  381 => 143,  374 => 140,  369 => 139,  365 => 137,  361 => 136,  356 => 135,  349 => 131,  344 => 128,  340 => 106,  337 => 105,  334 => 124,  328 => 120,  321 => 118,  312 => 114,  307 => 113,  301 => 112,  290 => 108,  285 => 107,  279 => 106,  275 => 105,  272 => 104,  262 => 101,  257 => 98,  253 => 97,  248 => 96,  240 => 71,  236 => 89,  233 => 88,  230 => 67,  224 => 82,  218 => 63,  205 => 78,  200 => 77,  197 => 76,  193 => 50,  188 => 74,  181 => 70,  176 => 67,  172 => 66,  169 => 30,  166 => 63,  163 => 62,  156 => 58,  150 => 55,  145 => 52,  141 => 51,  138 => 50,  135 => 49,  132 => 15,  125 => 43,  119 => 12,  115 => 38,  111 => 37,  108 => 36,  105 => 49,  98 => 30,  92 => 27,  88 => 44,  84 => 24,  81 => 23,  72 => 36,  59 => 15,  54 => 14,  50 => 12,  43 => 9,  39 => 7,  36 => 6,  32 => 4,  29 => 2,);
    }
}
