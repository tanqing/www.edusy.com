<?php

/* TopxiaAdminBundle:System:mobile.html.twig */
class __TwigTemplate_cfc72d0b0b5df6778f62026395664418 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaAdminBundle:System:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle:System:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["menu"] = "client";
        // line 6
        $context["script_controller"] = "setting/mobile";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "移动客户端设置 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_main($context, array $blocks = array())
    {
        // line 10
        echo "<style>
#mobile-logo-container img ,
#mobile-splash1-container img , 
#mobile-splash2-container img , 
#mobile-splash3-container img , 
#mobile-splash4-container img , 
#mobile-splash5-container img ,
#mobile-banner1-container img , 
#mobile-banner2-container img , 
#mobile-banner3-container img , 
#mobile-banner4-container img , 
#mobile-banner5-container img 
{max-width: 80%; margin-bottom: 10px;}

.course-grids {
  margin:0 -15px 0 0;
  padding:0;
  list-style: none;
}

.course-grid {
  display: inline-block;
  vertical-align: top;
  margin: 15px 15px 15px 0;
  border: 1px solid #e1e1e1;
  border-radius: 4px;
}

.course-grid .series-mode-label {
  position: absolute;
  top: 10px;
  right: 10px;
  font-size: 12px;
}

.course-grid .grid-body {
  position: relative;
  width: 170px;
  display: block;
  overflow: hidden;
  border-radius: 4px;
  color: #353535;
}

.grid-body a{
  text-decoration: none;
}

.course-grid .title {
  display: block;
  padding: 10px;
  min-height: 52px;
  color: #555;
  font-weight: bold;
}

.course-grid .add-course {
  font-size: 80px;
  height: 148px;
  text-align: center;
  padding-top: 30px;
}

</style>

<div class=\"page-header\"><h1>移动客户端设置</h1></div>

";
        // line 77
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "flash_messages", array(), "method"), "html", null, true);
        echo "

<form class=\"form-horizontal\" id=\"mobile-form\" method=\"post\">

  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
      <label >是否开启客户端</label>
    </div>
    <div class=\"controls col-md-8 radios\">
      ";
        // line 86
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->radios("enabled", array(1 => "开启", 0 => "关闭"), $this->getAttribute($_mobile_, "enabled"));
        echo "
      <div class=\"help-block\">开启后，网站首页顶部导航会出现客户端入口</div>
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"mobile_about\">网校简介</label>
    </div>
    <div class=\"controls col-md-8\">
      <textarea class=\"form-control\" id=\"mobile_about\" rows=\"10\" name=\"about\">";
        // line 96
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_mobile_, "about"), "html", null, true);
        echo "</textarea>
      <div class=\"help-block\">此简介将显示在移动客户端的\"关于网校\"</div>
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"logo\">网校LOGO</label>
    </div>
    <div class=\"col-md-8 controls\">
      <div id=\"mobile-logo-container\">";
        // line 106
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        if ($this->getAttribute($_mobile_, "logo")) {
            echo "<img src=\"";
            if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($_mobile_, "logo")), "html", null, true);
            echo "\">";
        }
        echo "</div>
      <button class=\"btn btn-default btn-sm\" id=\"mobile-logo-upload\" type=\"button\" data-url=\"";
        // line 107
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_upload", array("type" => "logo"));
        echo "\">上传</button>
      <button class=\"btn btn-default btn-sm\" id=\"mobile-logo-remove\" type=\"button\" data-url=\"";
        // line 108
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_remove", array("type" => "logo"));
        echo "\" ";
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        if ((!$this->getAttribute($_mobile_, "logo"))) {
            echo "style=\"display:none;\"";
        }
        echo ">删除</button>
      <p class=\"help-block\">请上传png, gif, jpg格式的图片文件。LOGO图片的高度建议不要超过50px。</p>
      <input type=\"hidden\" name=\"logo\" value=\"";
        // line 110
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_mobile_, "logo"), "html", null, true);
        echo "\">
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"logo\">公告</label>
    </div>
    <div class=\"col-md-8 controls\">
      <input type=\"text\" class=\"form-control\" name=\"notice\" value=\"";
        // line 119
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_mobile_, "notice"), "html", null, true);
        echo "\">
      <p class=\"help-block\">将会在手机端banner下面显示网校的公告，建议用简练概括的语言描述，字数在20字以下。</p>
    </div>
  </div>

  <fieldset>
    <legend>banner设置</legend>
    <div class=\"help-block\">客户端显示的轮播图。最多5张，建议图片大小为640*330，格式支持jpg、png。</div>
    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"banner1\">轮播图1</label>
      </div>
      <div class=\"col-md-8 controls\">
        <div id=\"mobile-banner1-container\">";
        // line 132
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        if ($this->getAttribute($_mobile_, "banner1")) {
            echo "<img src=\"";
            if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($_mobile_, "banner1")), "html", null, true);
            echo "\">";
        }
        echo "</div>

        <button class=\"btn btn-default btn-sm\" id=\"mobile-banner1-upload\" type=\"button\" data-url=\"";
        // line 134
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_upload", array("type" => "banner1"));
        echo "\">上传</button>
        <button class=\"btn btn-default btn-sm\" id=\"mobile-banner1-remove\" type=\"button\" data-url=\"";
        // line 135
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_remove", array("type" => "banner1"));
        echo "\" ";
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        if ((!$this->getAttribute($_mobile_, "banner1"))) {
            echo "style=\"display:none;\"";
        }
        echo ">删除</button>

        <p class=\"help-block\">请上传png, gif, jpg格式的图片文件。</p>

        <div class=\"banner-setting\" role=\"banner1-setting\" ";
        // line 139
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        if ((!$this->getAttribute($_mobile_, "banner1"))) {
            echo "style=\"display:none;\"";
        }
        echo ">
          <input type=\"radio\" role=\"bannerClick1\" name=\"bannerClick1\" ";
        // line 140
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        if ((!$this->getAttribute($_mobile_, "bannerClick1"))) {
            echo "checked=\"checked\"";
        }
        echo " value=\"0\"/>默认（无触发动作）
          <input type=\"radio\" role=\"bannerClick1\" name=\"bannerClick1\" value=\"1\" ";
        // line 141
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        if ($this->getAttribute($_mobile_, "bannerClick1")) {
            echo "checked=\"checked\"";
        }
        echo "/>跳转到连接地址
          <input type=\"text\" id=\"bannerUrl1\" name=\"bannerUrl1\" class=\"form-control\" value=\"";
        // line 142
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_mobile_, "bannerUrl1"), "html", null, true);
        echo "\" placeholder=\"请填写连接地址\" ";
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        if ((!$this->getAttribute($_mobile_, "bannerClick1"))) {
            echo "style=\"display:none\"";
        }
        echo "/>
        </div>

        
        <input type=\"hidden\" name=\"banner1\" value=\"";
        // line 146
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_mobile_, "banner1"), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"banner2\">轮播图2</label>
      </div>
      <div class=\"col-md-8 controls\">
        <div id=\"mobile-banner2-container\">";
        // line 155
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        if ($this->getAttribute($_mobile_, "banner2")) {
            echo "<img src=\"";
            if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($_mobile_, "banner2")), "html", null, true);
            echo "\">";
        }
        echo "</div>

        <button class=\"btn btn-default btn-sm\" id=\"mobile-banner2-upload\" type=\"button\" data-url=\"";
        // line 157
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_upload", array("type" => "banner2"));
        echo "\">上传</button>
        <button class=\"btn btn-default btn-sm\" id=\"mobile-banner2-remove\" type=\"button\" data-url=\"";
        // line 158
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_remove", array("type" => "banner2"));
        echo "\" ";
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        if ((!$this->getAttribute($_mobile_, "banner2"))) {
            echo "style=\"display:none;\"";
        }
        echo ">删除</button>

        <p class=\"help-block\">请上传png, gif, jpg格式的图片文件。</p>

        <div class=\"banner-setting\" role=\"banner2-setting\" ";
        // line 162
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        if ((!$this->getAttribute($_mobile_, "banner2"))) {
            echo "style=\"display:none;\"";
        }
        echo ">
          <input type=\"radio\" role=\"bannerClick2\" name=\"bannerClick2\" ";
        // line 163
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        if ((!$this->getAttribute($_mobile_, "bannerClick2"))) {
            echo "checked=\"checked\"";
        }
        echo " value=\"0\"/>默认（无触发动作）
          <input type=\"radio\" role=\"bannerClick2\" name=\"bannerClick2\" value=\"1\" ";
        // line 164
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        if ($this->getAttribute($_mobile_, "bannerClick2")) {
            echo "checked=\"checked\"";
        }
        echo "/>跳转到连接地址
          <input type=\"text\" id=\"bannerUrl2\" name=\"bannerUrl2\" class=\"form-control\" value=\"";
        // line 165
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_mobile_, "bannerUrl2"), "html", null, true);
        echo "\" placeholder=\"请填写连接地址\" ";
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        if ((!$this->getAttribute($_mobile_, "bannerClick2"))) {
            echo "style=\"display:none\"";
        }
        echo "/>
        </div>

        <input type=\"hidden\" name=\"banner2\" value=\"";
        // line 168
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_mobile_, "banner2"), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"banner3\">轮播图3</label>
      </div>
      <div class=\"col-md-8 controls\">
        <div id=\"mobile-banner3-container\">";
        // line 177
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        if ($this->getAttribute($_mobile_, "banner3")) {
            echo "<img src=\"";
            if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($_mobile_, "banner3")), "html", null, true);
            echo "\">";
        }
        echo "</div>

        <button class=\"btn btn-default btn-sm\" id=\"mobile-banner3-upload\" type=\"button\" data-url=\"";
        // line 179
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_upload", array("type" => "banner3"));
        echo "\">上传</button>
        <button class=\"btn btn-default btn-sm\" id=\"mobile-banner3-remove\" type=\"button\" data-url=\"";
        // line 180
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_remove", array("type" => "banner3"));
        echo "\" ";
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        if ((!$this->getAttribute($_mobile_, "banner3"))) {
            echo "style=\"display:none;\"";
        }
        echo ">删除</button>

        <p class=\"help-block\">请上传png, gif, jpg格式的图片文件。</p>

        <div class=\"banner-setting\" role=\"banner3-setting\" ";
        // line 184
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        if ((!$this->getAttribute($_mobile_, "banner3"))) {
            echo "style=\"display:none;\"";
        }
        echo ">
          <input type=\"radio\" role=\"bannerClick3\" name=\"bannerClick3\" ";
        // line 185
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        if ((!$this->getAttribute($_mobile_, "bannerClick3"))) {
            echo "checked=\"checked\"";
        }
        echo " value=\"0\"/>默认（无触发动作）
          <input type=\"radio\" role=\"bannerClick3\" name=\"bannerClick3\" value=\"1\" ";
        // line 186
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        if ($this->getAttribute($_mobile_, "bannerClick3")) {
            echo "checked=\"checked\"";
        }
        echo "/>跳转到连接地址
          <input type=\"text\" id=\"bannerUrl3\" name=\"bannerUrl3\" class=\"form-control\" value=\"";
        // line 187
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_mobile_, "bannerUrl3"), "html", null, true);
        echo "\" placeholder=\"请填写连接地址\" ";
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        if ((!$this->getAttribute($_mobile_, "bannerClick3"))) {
            echo "style=\"display:none\"";
        }
        echo "/>
        </div>

        <input type=\"hidden\" name=\"banner3\" value=\"";
        // line 190
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_mobile_, "banner3"), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"banner4\">轮播图4</label>
      </div>
      <div class=\"col-md-8 controls\">
        <div id=\"mobile-banner4-container\">";
        // line 199
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        if ($this->getAttribute($_mobile_, "banner4")) {
            echo "<img src=\"";
            if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($_mobile_, "banner4")), "html", null, true);
            echo "\">";
        }
        echo "</div>

        <button class=\"btn btn-default btn-sm\" id=\"mobile-banner4-upload\" type=\"button\" data-url=\"";
        // line 201
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_upload", array("type" => "banner4"));
        echo "\">上传</button>
        <button class=\"btn btn-default btn-sm\" id=\"mobile-banner4-remove\" type=\"button\" data-url=\"";
        // line 202
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_remove", array("type" => "banner4"));
        echo "\" ";
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        if ((!$this->getAttribute($_mobile_, "banner4"))) {
            echo "style=\"display:none;\"";
        }
        echo ">删除</button>

        <p class=\"help-block\">请上传png, gif, jpg格式的图片文件。</p>

        <div class=\"banner-setting\" role=\"banner4-setting\" ";
        // line 206
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        if ((!$this->getAttribute($_mobile_, "banner4"))) {
            echo "style=\"display:none;\"";
        }
        echo ">
          <input type=\"radio\" role=\"bannerClick4\" name=\"bannerClick4\" ";
        // line 207
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        if ((!$this->getAttribute($_mobile_, "bannerClick4"))) {
            echo "checked=\"checked\"";
        }
        echo " value=\"0\"/>默认（无触发动作）
          <input type=\"radio\" role=\"bannerClick4\" name=\"bannerClick4\" value=\"1\" ";
        // line 208
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        if ($this->getAttribute($_mobile_, "bannerClick4")) {
            echo "checked=\"checked\"";
        }
        echo "/>跳转到连接地址
          <input type=\"text\" id=\"bannerUrl4\" name=\"bannerUrl4\" class=\"form-control\" value=\"";
        // line 209
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_mobile_, "bannerUrl4"), "html", null, true);
        echo "\" placeholder=\"请填写连接地址\" ";
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        if ((!$this->getAttribute($_mobile_, "bannerClick4"))) {
            echo "style=\"display:none\"";
        }
        echo "/>
        </div>

        <input type=\"hidden\" name=\"banner4\" value=\"";
        // line 212
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_mobile_, "banner4"), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"banner5\">轮播图5</label>
      </div>
      <div class=\"col-md-8 controls\">
        <div id=\"mobile-banner5-container\">";
        // line 221
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        if ($this->getAttribute($_mobile_, "banner5")) {
            echo "<img src=\"";
            if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($_mobile_, "banner5")), "html", null, true);
            echo "\">";
        }
        echo "</div>

        <button class=\"btn btn-default btn-sm\" id=\"mobile-banner5-upload\" type=\"button\" data-url=\"";
        // line 223
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_upload", array("type" => "banner5"));
        echo "\">上传</button>
        <button class=\"btn btn-default btn-sm\" id=\"mobile-banner5-remove\" type=\"button\" data-url=\"";
        // line 224
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_remove", array("type" => "banner5"));
        echo "\" ";
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        if ((!$this->getAttribute($_mobile_, "banner5"))) {
            echo "style=\"display:none;\"";
        }
        echo ">删除</button>

        <p class=\"help-block\">请上传png, gif, jpg格式的图片文件。</p>

        <div class=\"banner-setting\" role=\"banner5-setting\" ";
        // line 228
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        if ((!$this->getAttribute($_mobile_, "banner5"))) {
            echo "style=\"display:none;\"";
        }
        echo ">
          <input type=\"radio\" role=\"bannerClick5\" name=\"bannerClick5\" ";
        // line 229
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        if ((!$this->getAttribute($_mobile_, "bannerClick5"))) {
            echo "checked=\"checked\"";
        }
        echo " value=\"0\"/>默认（无触发动作）
          <input type=\"radio\" role=\"bannerClick5\" name=\"bannerClick5\" value=\"1\" ";
        // line 230
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        if ($this->getAttribute($_mobile_, "bannerClick5")) {
            echo "checked=\"checked\"";
        }
        echo "/>跳转到连接地址
          <input type=\"text\" id=\"bannerUrl5\" name=\"bannerUrl5\" class=\"form-control\" value=\"";
        // line 231
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_mobile_, "bannerUrl5"), "html", null, true);
        echo "\" placeholder=\"请填写连接地址\" ";
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        if ((!$this->getAttribute($_mobile_, "bannerClick5"))) {
            echo "style=\"display:none\"";
        }
        echo "/>
        </div>

        <input type=\"hidden\" name=\"banner5\" value=\"";
        // line 234
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_mobile_, "banner5"), "html", null, true);
        echo "\">
      </div>
    </div>
    
  </fieldset>


  <fieldset>
  <legend>设置启动图</legend>
  <div class=\"help-block\">最多允许设置5张启动图(尺寸为640*960)，用户首次登录网校时会显示启动图。</div>
  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"splash1\">启动图1</label>
    </div>
    <div class=\"col-md-8 controls\">
      <div id=\"mobile-splash1-container\">";
        // line 249
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        if ($this->getAttribute($_mobile_, "splash1")) {
            echo "<img src=\"";
            if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($_mobile_, "splash1")), "html", null, true);
            echo "\">";
        }
        echo "</div>
      <button class=\"btn btn-default btn-sm\" id=\"mobile-splash1-upload\" type=\"button\" data-url=\"";
        // line 250
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_upload", array("type" => "splash1"));
        echo "\">上传</button>
      <button class=\"btn btn-default btn-sm\" id=\"mobile-splash1-remove\" type=\"button\" data-url=\"";
        // line 251
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_remove", array("type" => "splash1"));
        echo "\" ";
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        if ((!$this->getAttribute($_mobile_, "splash1"))) {
            echo "style=\"display:none;\"";
        }
        echo ">删除</button>
      <p class=\"help-block\">请上传png, gif, jpg格式的图片文件。</p>
      <input type=\"hidden\" name=\"splash1\" value=\"";
        // line 253
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_mobile_, "splash1"), "html", null, true);
        echo "\">
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"splash2\">启动图2</label>
    </div>
    <div class=\"col-md-8 controls\">
      <div id=\"mobile-splash2-container\">";
        // line 262
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        if ($this->getAttribute($_mobile_, "splash2")) {
            echo "<img src=\"";
            if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($_mobile_, "splash2")), "html", null, true);
            echo "\">";
        }
        echo "</div>
      <button class=\"btn btn-default btn-sm\" id=\"mobile-splash2-upload\" type=\"button\" data-url=\"";
        // line 263
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_upload", array("type" => "splash2"));
        echo "\">上传</button>
      <button class=\"btn btn-default btn-sm\" id=\"mobile-splash2-remove\" type=\"button\" data-url=\"";
        // line 264
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_remove", array("type" => "splash2"));
        echo "\" ";
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        if ((!$this->getAttribute($_mobile_, "splash2"))) {
            echo "style=\"display:none;\"";
        }
        echo ">删除</button>
      <p class=\"help-block\">请上传png, gif, jpg格式的图片文件。</p>
      <input type=\"hidden\" name=\"splash2\" value=\"";
        // line 266
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_mobile_, "splash2"), "html", null, true);
        echo "\">
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"splash3\">启动图3</label>
    </div>
    <div class=\"col-md-8 controls\">
      <div id=\"mobile-splash3-container\">";
        // line 275
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        if ($this->getAttribute($_mobile_, "splash3")) {
            echo "<img src=\"";
            if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($_mobile_, "splash3")), "html", null, true);
            echo "\">";
        }
        echo "</div>
      <button class=\"btn btn-default btn-sm\" id=\"mobile-splash3-upload\" type=\"button\" data-url=\"";
        // line 276
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_upload", array("type" => "splash3"));
        echo "\">上传</button>
      <button class=\"btn btn-default btn-sm\" id=\"mobile-splash3-remove\" type=\"button\" data-url=\"";
        // line 277
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_remove", array("type" => "splash3"));
        echo "\" ";
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        if ((!$this->getAttribute($_mobile_, "splash3"))) {
            echo "style=\"display:none;\"";
        }
        echo ">删除</button>
      <p class=\"help-block\">请上传png, gif, jpg格式的图片文件。</p>
      <input type=\"hidden\" name=\"splash3\" value=\"";
        // line 279
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_mobile_, "splash3"), "html", null, true);
        echo "\">
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"splash4\">启动图4</label>
    </div>
    <div class=\"col-md-8 controls\">
      <div id=\"mobile-splash4-container\">";
        // line 288
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        if ($this->getAttribute($_mobile_, "splash4")) {
            echo "<img src=\"";
            if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($_mobile_, "splash4")), "html", null, true);
            echo "\">";
        }
        echo "</div>
      <button class=\"btn btn-default btn-sm\" id=\"mobile-splash4-upload\" type=\"button\" data-url=\"";
        // line 289
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_upload", array("type" => "splash4"));
        echo "\">上传</button>
      <button class=\"btn btn-default btn-sm\" id=\"mobile-splash4-remove\" type=\"button\" data-url=\"";
        // line 290
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_remove", array("type" => "splash4"));
        echo "\" ";
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        if ((!$this->getAttribute($_mobile_, "splash4"))) {
            echo "style=\"display:none;\"";
        }
        echo ">删除</button>
      <p class=\"help-block\">请上传png, gif, jpg格式的图片文件。</p>
      <input type=\"hidden\" name=\"splash4\" value=\"";
        // line 292
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_mobile_, "splash4"), "html", null, true);
        echo "\">
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"splash5\">启动图5</label>
    </div>
    <div class=\"col-md-8 controls\">
      <div id=\"mobile-splash5-container\">";
        // line 301
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        if ($this->getAttribute($_mobile_, "splash5")) {
            echo "<img src=\"";
            if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($_mobile_, "splash5")), "html", null, true);
            echo "\">";
        }
        echo "</div>
      <button class=\"btn btn-default btn-sm\" id=\"mobile-splash5-upload\" type=\"button\" data-url=\"";
        // line 302
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_upload", array("type" => "splash5"));
        echo "\">上传</button>
      <button class=\"btn btn-default btn-sm\" id=\"mobile-splash5-remove\" type=\"button\" data-url=\"";
        // line 303
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_remove", array("type" => "splash5"));
        echo "\" ";
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        if ((!$this->getAttribute($_mobile_, "splash5"))) {
            echo "style=\"display:none;\"";
        }
        echo ">删除</button>
      <p class=\"help-block\">请上传png, gif, jpg格式的图片文件。</p>
      <input type=\"hidden\" name=\"splash5\" value=\"";
        // line 305
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_mobile_, "splash5"), "html", null, true);
        echo "\">
    </div>
  </div>

  </fieldset>


  <fieldset>
    <legend>每周精选课程</legend>
    <div class=\"help-block\">所选择的课程将会在客户端【每周精选】栏目中显示，最多选择三门。<br>
    客户端【每周精选】栏目中默认显示的是网站中学员数最多的课程，最多显示三门。
    </div>
    <div class=\"form-group\">
      <input type='hidden' name=\"courseIds\" value=\"";
        // line 318
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_mobile_, "courseIds"), "html", null, true);
        echo "\"/>
      <div class=\"col-md-12\" role=\"course-item-container\">
        <ul class=\"course-grids\">
          ";
        // line 321
        if (isset($context["courses"])) { $_courses_ = $context["courses"]; } else { $_courses_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(((array_key_exists("courses", $context)) ? (_twig_default_filter($_courses_, null)) : (null)));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 322
            echo "          ";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            $this->env->loadTemplate("TopxiaAdminBundle:Course:course-item.html.twig")->display(array_merge($context, array("course" => $_course_, "showDelBtn" => true)));
            // line 323
            echo "          ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 324
        echo "          <li class=\"course-grid related-course-grid\" role=\"add-course\" 
          style=\"cursor:pointer
          ";
        // line 326
        if (isset($context["courses"])) { $_courses_ = $context["courses"]; } else { $_courses_ = null; }
        if ((twig_length_filter($this->env, $_courses_) >= 3)) {
            // line 327
            echo "          ;display:none
          ";
        }
        // line 329
        echo "          \"
          data-backdrop=\"static\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
        // line 330
        echo $this->env->getExtension('routing')->getPath("admin_course_search");
        echo "\">
            <div class=\"add-course grid-body glyphicon glyphicon-plus\">
              
            </div>
          </li>
        </ul>
      </div>
    </div>
  </fieldset>

  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 340
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->renderCsrfToken("site"), "html", null, true);
        echo "\">
  
  <div class=\"row form-group\">
    <div class=\"controls col-md-offset-2 col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">提交</button>
    </div>
  </div>

</form>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:mobile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  838 => 340,  825 => 330,  822 => 329,  818 => 327,  815 => 326,  811 => 324,  797 => 323,  793 => 322,  775 => 321,  768 => 318,  751 => 305,  741 => 303,  737 => 302,  727 => 301,  714 => 292,  704 => 290,  700 => 289,  690 => 288,  677 => 279,  667 => 277,  663 => 276,  653 => 275,  640 => 266,  630 => 264,  626 => 263,  616 => 262,  603 => 253,  593 => 251,  589 => 250,  579 => 249,  560 => 234,  548 => 231,  541 => 230,  534 => 229,  527 => 228,  515 => 224,  511 => 223,  500 => 221,  487 => 212,  475 => 209,  468 => 208,  461 => 207,  454 => 206,  442 => 202,  438 => 201,  427 => 199,  414 => 190,  402 => 187,  395 => 186,  388 => 185,  381 => 184,  369 => 180,  365 => 179,  354 => 177,  341 => 168,  329 => 165,  322 => 164,  315 => 163,  308 => 162,  296 => 158,  292 => 157,  281 => 155,  268 => 146,  255 => 142,  248 => 141,  241 => 140,  234 => 139,  222 => 135,  218 => 134,  207 => 132,  190 => 119,  177 => 110,  167 => 108,  163 => 107,  153 => 106,  139 => 96,  125 => 86,  112 => 77,  43 => 10,  40 => 9,  33 => 3,  28 => 6,  26 => 5,);
    }
}
