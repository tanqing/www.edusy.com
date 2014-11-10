<?php

/* TopxiaWebBundle::layout.html.twig */
class __TwigTemplate_d77dcd2c4d2be154360705c8e15afd39 extends Twig_Template
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
            'topbanner' => array($this, 'block_topbanner'),
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
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  <meta name=\"keywords\" content=\"";
        // line 12
        $this->displayBlock('keywords', $context, $blocks);
        echo "\" />
  <meta name=\"description\" content=\"";
        // line 13
        $this->displayBlock('description', $context, $blocks);
        echo "\" />
  <meta content=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->renderCsrfToken("site"), "html", null, true);
        echo "\" name=\"csrf-token\" />
  ";
        // line 15
        echo $this->env->getExtension('topxia_web_twig')->getSetting("login_bind.verify_code", "");
        echo "
  ";
        // line 16
        if ($this->env->getExtension('topxia_web_twig')->getSetting("site.favicon")) {
            // line 17
            echo "  <link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('topxia_web_twig')->getSetting("site.favicon")), "html", null, true);
            echo "\" rel=\"shortcut icon\" />
  ";
        }
        // line 19
        echo "  ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 30
        echo "  <!--[if lt IE 9]>
    <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/html5shiv.js"), "html", null, true);
        echo "\"></script>
  <![endif]-->

  <!--[if IE 8]>
    <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/respond.min.js"), "html", null, true);
        echo "\"></script>
  <![endif]-->

  ";
        // line 38
        $this->displayBlock('head_scripts', $context, $blocks);
        // line 39
        echo "
</head>
<body ";
        // line 41
        if (isset($context["bodyClass"])) { $_bodyClass_ = $context["bodyClass"]; } else { $_bodyClass_ = null; }
        if (((array_key_exists("bodyClass", $context)) ? (_twig_default_filter($_bodyClass_, "")) : (""))) {
            echo "class=\"";
            if (isset($context["bodyClass"])) { $_bodyClass_ = $context["bodyClass"]; } else { $_bodyClass_ = null; }
            echo twig_escape_filter($this->env, $_bodyClass_, "html", null, true);
            echo "\"";
        }
        echo ">

";
        // line 43
        $this->displayBlock('body', $context, $blocks);
        // line 146
        echo "
";
        // line 147
        $this->env->loadTemplate("TopxiaWebBundle::script_boot.html.twig")->display(array_merge($context, array("script_main" => $this->env->getExtension('assets')->getAssetUrl("bundles/topxiaweb/js/app.js"))));
        // line 148
        echo "</body>
</html>";
    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.name", "EDUSOHO"), "html", null, true);
        echo " - ";
        if ($this->env->getExtension('topxia_web_twig')->getSetting("site.slogan")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.slogan"), "html", null, true);
            echo " -";
        }
        echo " Powered by EDUSOHO";
    }

    // line 12
    public function block_keywords($context, array $blocks = array())
    {
    }

    // line 13
    public function block_description($context, array $blocks = array())
    {
    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 20
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/gallery2/bootstrap/3.1.1/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/common.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/bootstrap-extends.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiaweb/css/web.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/autumn/css/autumn.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiaweb/css/member.css"), "html", null, true);
        echo "\" />
    <!--[if lt IE 8]>
      <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/oldie.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <![endif]-->
  ";
    }

    // line 38
    public function block_head_scripts($context, array $blocks = array())
    {
    }

    // line 43
    public function block_body($context, array $blocks = array())
    {
        // line 44
        echo "  <div class=\"navbar navbar-inverse site-navbar\" id=\"site-navbar\"  data-counter-url=\"";
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
        // line 53
        if ($this->env->getExtension('topxia_web_twig')->getSetting("site.logo")) {
            // line 54
            echo "            <a class=\"navbar-brand-logo\" href=\"";
            echo $this->env->getExtension('routing')->getPath("homepage");
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('topxia_web_twig')->getSetting("site.logo")), "html", null, true);
            echo "\"></a>
          ";
        } else {
            // line 56
            echo "            <a class=\"navbar-brand\" href=\"";
            echo $this->env->getExtension('routing')->getPath("homepage");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.name", "EDUSOHO"), "html", null, true);
            echo "</a>
          ";
        }
        // line 58
        echo "        </div>
        <div class=\"navbar-collapse collapse\">
          ";
        // line 60
        if (isset($context["siteNav"])) { $_siteNav_ = $context["siteNav"]; } else { $_siteNav_ = null; }
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Default:topNavigation", array("siteNav" => ((array_key_exists("siteNav", $context)) ? (_twig_default_filter($_siteNav_, null)) : (null)))));
        echo "
          <ul class=\"nav navbar-nav navbar-right\">      
            ";
        // line 62
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if ($this->getAttribute($_app_, "user")) {
            // line 63
            echo "              <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("my");
            echo "\"> 我的课程 </a></li>
              ";
            // line 64
            if ($this->env->getExtension('topxia_web_twig')->getSetting("mobile.enabled")) {
                // line 65
                echo "                <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("mobile");
                echo "\" class=\"mobile-badge-container\">
                  <span class=\"glyphicon glyphicon-phone\"></span>
                  <span class=\"badge\">v2</span>
                </a></li>
              ";
            }
            // line 70
            echo "              <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("search");
            echo "\"><span class=\"glyphicon glyphicon-search\"></span></a></li>
              <li><a href=\"";
            // line 71
            echo $this->env->getExtension('routing')->getPath("notification");
            echo "\" class=\"badge-container notification-badge-container\">
                <span class=\"glyphicon glyphicon-bullhorn hidden-lt-ie8\"></span>
                <span class=\"visible-lt-ie8\">通知</span>
                ";
            // line 74
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
            // line 76
            echo $this->env->getExtension('routing')->getPath("message");
            echo "\" class=\"badge-container message-badge-container\">
                <span class=\"glyphicon glyphicon-envelope hidden-lt-ie8\"></span>
                <span class=\"visible-lt-ie8\">私信</span>
                ";
            // line 79
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            if (($this->getAttribute($this->getAttribute($_app_, "user"), "newMessageNum") > 0)) {
                echo "<span class=\"badge\">";
                if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "user"), "newMessageNum"), "html", null, true);
                echo "</span>";
            }
            // line 80
            echo "                </a>
                </li>
              <li class=\"visible-lt-ie8\"><a href=\"";
            // line 82
            echo $this->env->getExtension('routing')->getPath("settings");
            echo "\">";
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "user"), "nickname"), "html", null, true);
            echo "</a></li>
              <li class=\"dropdown hidden-lt-ie8\">
                <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
            // line 84
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "user"), "nickname"), "html", null, true);
            echo " <b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                  <li><a href=\"";
            // line 86
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($this->getAttribute($_app_, "user"), "id"))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-home\"></i> 我的主页</a></li>
                  <li><a href=\"";
            // line 87
            echo $this->env->getExtension('routing')->getPath("settings");
            echo "\"><i class=\"glyphicon glyphicon-cog\"></i> 帐号设置</a></li>
                  <li class=\"divider\"></li>
                  ";
            // line 89
            if ($this->env->getExtension('security')->isGranted("ROLE_BACKEND")) {
                // line 90
                echo "                    <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("admin");
                echo "\"><i class=\"glyphicon glyphicon-dashboard\"></i> 管理后台</a></li>
                    <li class=\"divider\"></li>
                  ";
            }
            // line 93
            echo "                  <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\"><i class=\"glyphicon glyphicon-off\"></i> 退出</a></li>
                </ul>
              </li>
            ";
        } else {
            // line 97
            echo "              ";
            if ($this->env->getExtension('topxia_web_twig')->getSetting("mobile.enabled")) {
                // line 98
                echo "                <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("mobile");
                echo "\"><span class=\"glyphicon glyphicon-phone\"></span> 手机版</a></li>
              ";
            }
            // line 100
            echo "              <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("search");
            echo "\"><span class=\"glyphicon glyphicon-search\"></span> 搜索</a></li>
              <li><a href=\"";
            // line 101
            if (isset($context["_target_path"])) { $__target_path_ = $context["_target_path"]; } else { $__target_path_ = null; }
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login", array("goto" => ((array_key_exists("_target_path", $context)) ? (_twig_default_filter($__target_path_, $this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request"), "server"), "get", array(0 => "REQUEST_URI"), "method"))) : ($this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request"), "server"), "get", array(0 => "REQUEST_URI"), "method"))))), "html", null, true);
            echo "\">登录</a></li>
              <li><a href=\"";
            // line 102
            if (isset($context["_target_path"])) { $__target_path_ = $context["_target_path"]; } else { $__target_path_ = null; }
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("register", array("goto" => ((array_key_exists("_target_path", $context)) ? (_twig_default_filter($__target_path_, $this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request"), "server"), "get", array(0 => "REQUEST_URI"), "method"))) : ($this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request"), "server"), "get", array(0 => "REQUEST_URI"), "method"))))), "html", null, true);
            echo "\">注册</a></li>
            ";
        }
        // line 104
        echo "          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </div>
  </div>

  ";
        // line 110
        $this->displayBlock('topbanner', $context, $blocks);
        // line 111
        echo "
  <div id=\"content-container\" class=\"container\">
    ";
        // line 113
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if (isset($context["hideSetupHint"])) { $_hideSetupHint_ = $context["hideSetupHint"]; } else { $_hideSetupHint_ = null; }
        if ((($this->getAttribute($_app_, "user") && ($this->getAttribute($this->getAttribute($_app_, "user"), "setup") == 0)) && ((!array_key_exists("hideSetupHint", $context)) || ($_hideSetupHint_ != true)))) {
            // line 114
            echo "      <div class=\"alert alert-warning\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
        为了帐号的安全，以及更好的使用体验，请设置您的Email地址。
        <a href=\"";
            // line 117
            echo $this->env->getExtension('routing')->getPath("settings_setup");
            echo "\">现在就去设置</a>
      </div>
    ";
        }
        // line 120
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
        // line 121
        echo "  </div><!-- /container -->


  <div class=\"footer-autumn\">
    <div class=\"container\">

      <div class=\"footer-links\">
        ";
        // line 128
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Default:footNavigation"));
        echo "
      </div>

      <div class=\"footer-copyright\">
        ";
        // line 132
        $this->env->loadTemplate("TopxiaWebBundle::powered-by.html.twig")->display($context);
        // line 133
        echo "        ";
        echo $this->env->getExtension('topxia_web_twig')->getSetting("site.analytics");
        echo " 
        <a class=\"mlm\" href=\"";
        // line 134
        echo $this->env->getExtension('routing')->getPath("course_archive");
        echo "\">课程存档</a>
        <div class=\"mts\">";
        // line 135
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
      </div>

    </div>
  </div>

  ";
        // line 141
        $this->displayBlock('bottom', $context, $blocks);
        // line 142
        echo "
  <div id=\"login-modal\" class=\"modal\" data-url=\"";
        // line 143
        echo $this->env->getExtension('routing')->getPath("login_ajax");
        echo "\"></div>
  <div id=\"modal\" class=\"modal\"></div>
";
    }

    // line 110
    public function block_topbanner($context, array $blocks = array())
    {
    }

    // line 120
    public function block_content($context, array $blocks = array())
    {
    }

    // line 141
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
        return array (  452 => 141,  447 => 120,  442 => 110,  435 => 143,  430 => 141,  402 => 133,  393 => 128,  384 => 121,  381 => 120,  375 => 117,  370 => 114,  366 => 113,  362 => 111,  352 => 104,  345 => 102,  339 => 101,  325 => 97,  310 => 90,  308 => 89,  303 => 87,  298 => 86,  280 => 80,  272 => 79,  255 => 74,  249 => 71,  244 => 70,  235 => 65,  228 => 63,  225 => 62,  219 => 60,  215 => 58,  207 => 56,  199 => 54,  184 => 44,  176 => 38,  164 => 25,  160 => 24,  156 => 23,  152 => 22,  148 => 21,  143 => 20,  135 => 13,  130 => 12,  117 => 11,  112 => 148,  110 => 147,  107 => 146,  105 => 43,  94 => 41,  90 => 39,  88 => 38,  82 => 35,  69 => 19,  63 => 17,  61 => 16,  57 => 15,  53 => 14,  49 => 13,  45 => 12,  41 => 11,  30 => 2,  28 => 1,  1313 => 483,  1310 => 482,  1304 => 478,  1298 => 477,  1286 => 475,  1282 => 474,  1277 => 473,  1269 => 467,  1265 => 466,  1262 => 465,  1259 => 464,  1253 => 461,  1250 => 459,  1244 => 455,  1238 => 454,  1230 => 450,  1222 => 449,  1215 => 446,  1210 => 445,  1207 => 444,  1199 => 440,  1191 => 439,  1184 => 436,  1179 => 435,  1176 => 434,  1168 => 430,  1160 => 429,  1153 => 426,  1148 => 425,  1145 => 424,  1141 => 423,  1136 => 422,  1128 => 416,  1124 => 415,  1121 => 414,  1118 => 412,  1112 => 408,  1106 => 407,  1097 => 402,  1092 => 401,  1086 => 399,  1083 => 398,  1079 => 397,  1074 => 396,  1066 => 390,  1062 => 389,  1059 => 388,  1056 => 386,  1050 => 382,  1044 => 381,  1035 => 379,  1029 => 378,  1024 => 377,  1016 => 371,  1012 => 370,  1009 => 369,  1006 => 367,  1000 => 365,  996 => 364,  990 => 359,  987 => 358,  981 => 354,  975 => 353,  964 => 346,  959 => 345,  947 => 343,  943 => 341,  934 => 339,  924 => 337,  921 => 336,  913 => 335,  904 => 331,  899 => 330,  893 => 327,  888 => 324,  884 => 323,  881 => 322,  878 => 321,  875 => 319,  872 => 318,  866 => 314,  860 => 313,  851 => 307,  846 => 306,  839 => 303,  834 => 302,  823 => 298,  818 => 297,  812 => 293,  808 => 292,  803 => 291,  795 => 285,  791 => 284,  788 => 283,  785 => 282,  782 => 280,  776 => 276,  770 => 275,  762 => 271,  757 => 270,  751 => 269,  745 => 267,  740 => 266,  736 => 264,  732 => 263,  727 => 262,  720 => 258,  715 => 255,  711 => 254,  708 => 253,  705 => 251,  699 => 247,  693 => 246,  684 => 241,  679 => 240,  673 => 239,  662 => 235,  657 => 234,  651 => 233,  647 => 232,  644 => 231,  634 => 228,  629 => 225,  625 => 224,  620 => 223,  612 => 217,  608 => 216,  605 => 215,  601 => 212,  595 => 208,  589 => 207,  576 => 204,  571 => 203,  568 => 202,  564 => 201,  559 => 200,  552 => 196,  547 => 193,  543 => 192,  541 => 191,  538 => 190,  535 => 188,  532 => 187,  524 => 181,  518 => 180,  514 => 178,  508 => 174,  497 => 172,  492 => 171,  479 => 168,  471 => 164,  463 => 163,  454 => 161,  451 => 160,  448 => 159,  444 => 157,  440 => 155,  436 => 154,  432 => 142,  429 => 152,  426 => 151,  422 => 149,  418 => 147,  415 => 146,  411 => 135,  407 => 134,  403 => 141,  400 => 132,  392 => 139,  389 => 138,  386 => 137,  383 => 136,  379 => 135,  374 => 134,  369 => 131,  363 => 129,  360 => 110,  355 => 125,  351 => 124,  349 => 123,  346 => 122,  340 => 118,  334 => 100,  328 => 98,  317 => 93,  312 => 110,  299 => 107,  292 => 84,  284 => 82,  281 => 102,  278 => 101,  274 => 99,  270 => 97,  266 => 76,  262 => 95,  259 => 94,  256 => 93,  252 => 91,  248 => 89,  245 => 88,  241 => 86,  237 => 85,  233 => 64,  230 => 82,  222 => 81,  218 => 79,  214 => 78,  209 => 77,  202 => 73,  197 => 53,  193 => 69,  190 => 68,  187 => 66,  181 => 43,  175 => 61,  169 => 27,  158 => 55,  153 => 54,  140 => 19,  133 => 48,  125 => 47,  122 => 46,  118 => 44,  114 => 42,  111 => 41,  103 => 40,  100 => 39,  96 => 38,  91 => 37,  84 => 33,  79 => 30,  75 => 31,  72 => 30,  68 => 25,  65 => 24,  60 => 21,  47 => 12,  39 => 6,  35 => 5,  32 => 4,  29 => 3,);
    }
}
