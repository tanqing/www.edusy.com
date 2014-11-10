<?php

/* TopxiaWebBundle::script_boot.html.twig */
class __TwigTemplate_c0422f46d02811a756db514050bb68a1 extends Twig_Template
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
        if (isset($context["consultDisplay"])) { $_consultDisplay_ = $context["consultDisplay"]; } else { $_consultDisplay_ = null; }
        if (isset($context["siteNav"])) { $_siteNav_ = $context["siteNav"]; } else { $_siteNav_ = null; }
        if (($this->env->getExtension('topxia_web_twig')->getSetting("consult.enabled", 0) && (((array_key_exists("consultDisplay", $context)) ? (_twig_default_filter($_consultDisplay_, false)) : (false)) || (((array_key_exists("siteNav", $context)) ? (_twig_default_filter($_siteNav_)) : ("")) == "/")))) {
            // line 2
            $context["consult"] = $this->env->getExtension('topxia_web_twig')->getSetting("consult");
            // line 3
            echo "  <div id=\"float-consult\" class=\"float-consult\">
    <div class=\"btn-group-vertical\">

      ";
            // line 6
            $context["break"] = 0;
            // line 7
            echo "      ";
            if (isset($context["consult"])) { $_consult_ = $context["consult"]; } else { $_consult_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_consult_, "qq"));
            foreach ($context['_seq'] as $context["_key"] => $context["qq"]) {
                if (isset($context["qq"])) { $_qq_ = $context["qq"]; } else { $_qq_ = null; }
                if (isset($context["break"])) { $_break_ = $context["break"]; } else { $_break_ = null; }
                if (((!twig_test_empty($this->getAttribute($_qq_, "name"))) && ($_break_ == 0))) {
                    // line 8
                    echo "        <span class=\"btn btn-";
                    if (isset($context["consult"])) { $_consult_ = $context["consult"]; } else { $_consult_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_consult_, "color"), "html", null, true);
                    echo " float-consult-qq-btn\" data-container=\".float-consult-qq-btn\" data-title=\"QQ客服\" data-content-element=\"#consult-qq-content\"><span class=\"icon icon-qq\"></span></span>
        ";
                    // line 9
                    $context["break"] = 1;
                    // line 10
                    echo "      ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qq'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "
      ";
            // line 12
            $context["break"] = 0;
            // line 13
            echo "      ";
            if (isset($context["consult"])) { $_consult_ = $context["consult"]; } else { $_consult_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_consult_, "qqgroup"));
            foreach ($context['_seq'] as $context["_key"] => $context["qqgroup"]) {
                if (isset($context["qqgroup"])) { $_qqgroup_ = $context["qqgroup"]; } else { $_qqgroup_ = null; }
                if (isset($context["break"])) { $_break_ = $context["break"]; } else { $_break_ = null; }
                if (((!twig_test_empty($this->getAttribute($_qqgroup_, "name"))) && ($_break_ == 0))) {
                    // line 14
                    echo "        <span class=\"btn btn-";
                    if (isset($context["consult"])) { $_consult_ = $context["consult"]; } else { $_consult_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_consult_, "color"), "html", null, true);
                    echo " float-consult-qqgroup-btn\" data-container=\".float-consult-qqgroup-btn\" data-title=\"QQ群\" data-content-element=\"#consult-qqgroup-content\"><span class=\"icon icon-qqgroup\"></span></span>
        ";
                    // line 15
                    $context["break"] = 1;
                    // line 16
                    echo "      ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qqgroup'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " 

      ";
            // line 18
            $context["break"] = 0;
            // line 19
            echo "      ";
            if (isset($context["consult"])) { $_consult_ = $context["consult"]; } else { $_consult_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_consult_, "phone"));
            foreach ($context['_seq'] as $context["_key"] => $context["phone"]) {
                if (isset($context["phone"])) { $_phone_ = $context["phone"]; } else { $_phone_ = null; }
                if (isset($context["break"])) { $_break_ = $context["break"]; } else { $_break_ = null; }
                if (((!twig_test_empty($this->getAttribute($_phone_, "name"))) && ($_break_ == 0))) {
                    echo " 
        <span class=\"btn btn-";
                    // line 20
                    if (isset($context["consult"])) { $_consult_ = $context["consult"]; } else { $_consult_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_consult_, "color"), "html", null, true);
                    echo " float-consult-phone-btn\" data-container=\".float-consult-phone-btn\" data-title=\"电话客服\" data-content-element=\"#consult-phone-content\"><span class=\"icon icon-phone\"></span></span>
        ";
                    // line 21
                    $context["break"] = 1;
                    // line 22
                    echo "      ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phone'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " 

      ";
            // line 24
            if (isset($context["consult"])) { $_consult_ = $context["consult"]; } else { $_consult_ = null; }
            if ((!twig_test_empty($this->getAttribute($_consult_, "webchatURI")))) {
                // line 25
                echo "        <span class=\"btn btn-";
                if (isset($context["consult"])) { $_consult_ = $context["consult"]; } else { $_consult_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_consult_, "color"), "html", null, true);
                echo " float-consult-weixin-btn\" data-container=\".float-consult-weixin-btn\" data-title=\"微信公众号\" data-content-element=\"#consult-weixin-content\"><span class=\"icon icon-weixin\"></span></span>
      ";
            }
            // line 27
            echo "      
      ";
            // line 28
            if (isset($context["consult"])) { $_consult_ = $context["consult"]; } else { $_consult_ = null; }
            if ((!twig_test_empty($this->getAttribute($_consult_, "email")))) {
                // line 29
                echo "        <span class=\"btn btn-";
                if (isset($context["consult"])) { $_consult_ = $context["consult"]; } else { $_consult_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_consult_, "color"), "html", null, true);
                echo " float-consult-email-btn\" data-container=\".float-consult-email-btn\" data-title=\"电子邮箱\" data-content-element=\"#consult-email-content\"><span class=\"icon icon-email\"></span></span>
      ";
            }
            // line 31
            echo "    </div>

    <div class=\"consult-contents\">
      <div id=\"consult-qq-content\">
        ";
            // line 35
            if (isset($context["consult"])) { $_consult_ = $context["consult"]; } else { $_consult_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_consult_, "qq"));
            foreach ($context['_seq'] as $context["_key"] => $context["qq"]) {
                if (isset($context["qq"])) { $_qq_ = $context["qq"]; } else { $_qq_ = null; }
                if ((!twig_test_empty($this->getAttribute($_qq_, "name")))) {
                    // line 36
                    echo "          <p>
            <a target=\"_blank\" href=\"http://wpa.qq.com/msgrd?v=3&uin=";
                    // line 37
                    if (isset($context["qq"])) { $_qq_ = $context["qq"]; } else { $_qq_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_qq_, "number"), "html", null, true);
                    echo "&site=qq&menu=yes\" >
              <img border=\"0\" src=\"http://wpa.qq.com/pa?p=2:";
                    // line 38
                    if (isset($context["qq"])) { $_qq_ = $context["qq"]; } else { $_qq_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_qq_, "number"), "html", null, true);
                    echo ":52\" alt=\"\" title=\"点击这里给我发消息\"/>
              ";
                    // line 39
                    if (isset($context["qq"])) { $_qq_ = $context["qq"]; } else { $_qq_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_qq_, "name"), "html", null, true);
                    echo "
            </a>
          </p>
        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qq'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "      </div>

      <div id=\"consult-qqgroup-content\">
        ";
            // line 46
            if (isset($context["consult"])) { $_consult_ = $context["consult"]; } else { $_consult_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_consult_, "qqgroup"));
            foreach ($context['_seq'] as $context["_key"] => $context["qqgroup"]) {
                if (isset($context["qqgroup"])) { $_qqgroup_ = $context["qqgroup"]; } else { $_qqgroup_ = null; }
                if ((!twig_test_empty($this->getAttribute($_qqgroup_, "name")))) {
                    // line 47
                    echo "          <p>
            <span class=\"icon icon-qqgroup text-muted\" style=\"font-size:14px;\"></span>
            ";
                    // line 49
                    if (isset($context["qqgroup"])) { $_qqgroup_ = $context["qqgroup"]; } else { $_qqgroup_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_qqgroup_, "name"), "html", null, true);
                    echo " 
            <br> <span class=\"text-info\" style=\"margin-left:20px;\">";
                    // line 50
                    if (isset($context["qqgroup"])) { $_qqgroup_ = $context["qqgroup"]; } else { $_qqgroup_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_qqgroup_, "number"), "html", null, true);
                    echo "</span>
          </p>
        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qqgroup'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "      </div>
      <div id=\"consult-phone-content\">
        <p>
          <strong>服务时间：</strong> ";
            // line 56
            if (isset($context["consult"])) { $_consult_ = $context["consult"]; } else { $_consult_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_consult_, "worktime"), "html", null, true);
            echo "
        </p>

        ";
            // line 59
            if (isset($context["consult"])) { $_consult_ = $context["consult"]; } else { $_consult_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_consult_, "phone"));
            foreach ($context['_seq'] as $context["_key"] => $context["phone"]) {
                if (isset($context["phone"])) { $_phone_ = $context["phone"]; } else { $_phone_ = null; }
                if ((!twig_test_empty($this->getAttribute($_phone_, "name")))) {
                    // line 60
                    echo "          <p>
            ";
                    // line 61
                    if (isset($context["phone"])) { $_phone_ = $context["phone"]; } else { $_phone_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_phone_, "name"), "html", null, true);
                    echo "： ";
                    if (isset($context["phone"])) { $_phone_ = $context["phone"]; } else { $_phone_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_phone_, "number"), "html", null, true);
                    echo "
          </p>
        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phone'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "      </div>

      
      <div id=\"consult-weixin-content\">
        <img src=\"";
            // line 68
            if (isset($context["consult"])) { $_consult_ = $context["consult"]; } else { $_consult_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($_consult_, "webchatURI")), "html", null, true);
            echo "\" class=\"qrcode center-block\">
      </div>

      <div id=\"consult-email-content\">
       <a href=\"mailto:";
            // line 72
            if (isset($context["consult"])) { $_consult_ = $context["consult"]; } else { $_consult_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_consult_, "email"), "html", null, true);
            echo "\">";
            if (isset($context["consult"])) { $_consult_ = $context["consult"]; } else { $_consult_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_consult_, "email"), "html", null, true);
            echo "</a>
      </div>

    </div>
  </div>
";
        }
        // line 78
        echo "
<script>
  var app = {};
  app.debug = ";
        // line 81
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if ($this->getAttribute($_app_, "debug")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ";
  app.version = '";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetsVersion(), "html", null, true);
        echo "';
  app.httpHost = '";
        // line 83
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "request"), "getSchemeAndHttpHost", array(), "method"), "html", null, true);
        echo "';
  app.basePath = '";
        // line 84
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "request"), "getBasePath", array(), "method"), "html", null, true);
        echo "';
  app.theme = '";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting(_twig_default_filter("theme.uri", "default")), "html", null, true);
        echo "';
  app.themeGlobalScript = '";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getThemeGlobalScript(), "html", null, true);
        echo "';
  app.jsPaths = ";
        // line 87
        echo twig_jsonencode_filter($this->env->getExtension('topxia_web_twig')->getJsPaths());
        echo ";

  app.config = ";
        // line 89
        echo twig_jsonencode_filter(array("api" => array("weibo" => array("key" => $this->env->getExtension('topxia_web_twig')->getSetting("login_bind.weibo_key", "")), "qq" => array("key" => $this->env->getExtension('topxia_web_twig')->getSetting("login_bind.qq_key", "")), "douban" => array("key" => $this->env->getExtension('topxia_web_twig')->getSetting("login_bind.douban_key", "")), "renren" => array("key" => $this->env->getExtension('topxia_web_twig')->getSetting("login_bind.renren_key", ""))), "cloud" => array("video_player" => $this->env->getExtension('topxia_web_twig')->getParameter("cloud.video_player"), "video_player_watermark_plugin" => $this->env->getExtension('topxia_web_twig')->getParameter("cloud.video_player_watermark_plugin"), "video_player_fingerprint_plugin" => $this->env->getExtension('topxia_web_twig')->getParameter("cloud.video_player_fingerprint_plugin")), "editor_upload_path" => $this->env->getExtension('routing')->getPath("kindeditor_upload"), "loading_img_path" => $this->env->getExtension('assets')->getAssetUrl("assets/img/default/loading.gif")));
        // line 105
        echo ";

  app.arguments = {};
  ";
        // line 108
        if (array_key_exists("script_controller", $context)) {
            // line 109
            echo "    app.controller = '";
            if (isset($context["script_controller"])) { $_script_controller_ = $context["script_controller"]; } else { $_script_controller_ = null; }
            echo twig_escape_filter($this->env, $_script_controller_, "html", null, true);
            echo "';
  ";
        }
        // line 111
        echo "  ";
        if (array_key_exists("script_arguments", $context)) {
            // line 112
            echo "    app.arguments = ";
            if (isset($context["script_arguments"])) { $_script_arguments_ = $context["script_arguments"]; } else { $_script_arguments_ = null; }
            echo twig_jsonencode_filter($_script_arguments_);
            echo ";
  ";
        }
        // line 114
        echo "</script>
<script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/seajs/seajs/2.2.1/sea.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/seajs/seajs-style/1.0.2/seajs-style.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/seajs-global-config.js"), "html", null, true);
        echo "\"></script>
<script>
  seajs.use(\"";
        // line 119
        if (isset($context["script_main"])) { $_script_main_ = $context["script_main"]; } else { $_script_main_ = null; }
        echo twig_escape_filter($this->env, $_script_main_, "html", null, true);
        echo "\")
</script>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle::script_boot.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  357 => 119,  352 => 117,  348 => 116,  344 => 115,  341 => 114,  334 => 112,  331 => 111,  324 => 109,  317 => 105,  310 => 87,  306 => 86,  302 => 85,  297 => 84,  288 => 82,  274 => 78,  261 => 72,  247 => 64,  230 => 60,  223 => 59,  216 => 56,  211 => 53,  200 => 50,  191 => 47,  179 => 43,  167 => 39,  162 => 38,  157 => 37,  154 => 36,  141 => 31,  134 => 29,  131 => 28,  128 => 27,  118 => 24,  108 => 22,  106 => 21,  101 => 20,  70 => 14,  61 => 13,  56 => 11,  49 => 10,  47 => 9,  41 => 8,  151 => 28,  143 => 26,  135 => 24,  102 => 16,  98 => 15,  88 => 18,  85 => 11,  82 => 10,  58 => 5,  36 => 2,  24 => 1,  329 => 63,  322 => 108,  318 => 59,  315 => 89,  312 => 57,  292 => 83,  286 => 54,  279 => 81,  275 => 50,  272 => 49,  269 => 48,  265 => 47,  254 => 46,  241 => 42,  233 => 61,  217 => 36,  209 => 34,  195 => 49,  192 => 30,  188 => 29,  184 => 46,  180 => 27,  178 => 26,  175 => 25,  161 => 23,  146 => 20,  133 => 18,  127 => 22,  121 => 25,  112 => 18,  99 => 11,  81 => 9,  77 => 8,  65 => 7,  30 => 6,  22 => 22,  19 => 1,  253 => 68,  248 => 71,  243 => 21,  234 => 13,  227 => 78,  225 => 38,  222 => 76,  220 => 75,  213 => 71,  202 => 32,  194 => 62,  190 => 61,  185 => 58,  174 => 56,  172 => 24,  169 => 54,  163 => 51,  156 => 50,  138 => 48,  129 => 47,  119 => 20,  105 => 17,  93 => 30,  90 => 19,  73 => 22,  67 => 20,  63 => 19,  59 => 12,  42 => 2,  25 => 3,  23 => 2,  87 => 28,  78 => 16,  69 => 13,  54 => 17,  46 => 14,  44 => 24,  38 => 12,  35 => 6,  32 => 7,  27 => 3,  147 => 35,  142 => 46,  125 => 42,  117 => 45,  111 => 36,  103 => 24,  94 => 14,  80 => 24,  76 => 15,  71 => 9,  60 => 12,  57 => 16,  51 => 3,  48 => 15,  43 => 10,  40 => 3,  33 => 3,  28 => 7,  26 => 5,);
    }
}
