<?php

/* TopxiaAdminBundle:CloudSetting:video.html.twig */
class __TwigTemplate_90a43d27185558e76998f3855d498ffd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaAdminBundle:CloudSetting:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'maincontent' => array($this, 'block_maincontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle:CloudSetting:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["submenu"] = "video";
        // line 6
        $context["script_controller"] = "setting/cloud";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "云视频设置 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 8
    public function block_maincontent($context, array $blocks = array())
    {
        // line 9
        echo "
<div class=\"page-header\"><h1>云视频设置</h1></div>

";
        // line 12
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "flash_messages", array(), "method"), "html", null, true);
        echo "

<form class=\"form-horizontal\" id=\"cloud-setting-form\" method=\"post\" novalidate>

  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\">
      <label >云视频</label>
    </div>
    <div class=\"controls col-md-8 radios\">

      ";
        // line 22
        if (isset($context["storageSetting"])) { $_storageSetting_ = $context["storageSetting"]; } else { $_storageSetting_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->radios("upload_mode", array("local" => "关闭", "cloud" => "开启"), $this->getAttribute($_storageSetting_, "upload_mode"));
        echo "

      <div class=\"help-block\">
        云视频，提供更快的视频播放速度，以及更低廉的网络流量价格。<br />
        <strong class=\"text-info\">如需使用云视频，请联系<a href=\"http://www.edusoho.com/services/cloudvideo\" target=\"_blank\">Edusoho官方</a></strong>。
      </div>

    </div>
  </div>


  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\">
      <label for=\"cloud_bucket\" >云视频Bucket</label>
    </div>
    <div class=\"controls col-md-8 radios\">
      <input type=\"text\" id=\"cloud_bucket\" class=\"form-control\" name=\"cloud_bucket\" value=\"";
        // line 38
        if (isset($context["storageSetting"])) { $_storageSetting_ = $context["storageSetting"]; } else { $_storageSetting_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_storageSetting_, "cloud_bucket"), "html", null, true);
        echo "\">
    </div>
  </div>

  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\">
      <label for=\"cloud_bucket\" >云视频转码类型</label>
    </div>
    <div class=\"controls col-md-8 radios\">
      <p>
        <span class=\"form-control-static text-info\">画质</span>
        ";
        // line 49
        if (isset($context["storageSetting"])) { $_storageSetting_ = $context["storageSetting"]; } else { $_storageSetting_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->radios("video_quality", array("low" => "流畅 <span class=\"text-muted\">(适合PPT讲解)</span>", "normal" => "标准 <span class=\"text-muted\">(适合屏幕录制、摄像头拍摄)</span>", "high" => "精细 <span class=\"text-muted\">(适合动态电影)</span>"), $this->getAttribute($_storageSetting_, "video_quality"));
        echo "
      </p>

      <p>
        <span class=\"form-control-static text-info\">音质</span>
        ";
        // line 54
        if (isset($context["storageSetting"])) { $_storageSetting_ = $context["storageSetting"]; } else { $_storageSetting_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->radios("video_audio_quality", array("low" => "流畅", "normal" => "标准", "high" => "高品"), $this->getAttribute($_storageSetting_, "video_audio_quality"));
        echo "
      </p>

    </div>
  </div>



  <hr>

  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\">
      <label>云视频水印</label>
    </div>
    <div class=\"controls col-md-8 radios \" data-content=\"123\">
      ";
        // line 70
        echo "
      <label>
        <input type=\"radio\" name=\"video_watermark\" value=\"0\" ";
        // line 72
        if (isset($context["storageSetting"])) { $_storageSetting_ = $context["storageSetting"]; } else { $_storageSetting_ = null; }
        if (($this->getAttribute($_storageSetting_, "video_watermark") == 0)) {
            echo "checked=\"checked\"";
        }
        echo "> 关闭
      </label>
      <label class=\"video-watermark-property-tips\" data-content=\"
      播放时水印将会覆盖在视频上，可随时更换；
      已经通过系统使用了内嵌水印的视频，将不会显示播放器水印。
      \">
        <input type=\"radio\" name=\"video_watermark\" value=\"1\" ";
        // line 78
        if (isset($context["storageSetting"])) { $_storageSetting_ = $context["storageSetting"]; } else { $_storageSetting_ = null; }
        if (($this->getAttribute($_storageSetting_, "video_watermark") == 1)) {
            echo "checked=\"checked\"";
        }
        echo "> 开启播放器水印
      </label>
      <label class=\"video-watermark-property-tips\" data-content=\"
      能够更好的保护视频版权；
      上传时将水印嵌入视频编码中，不可删改；
      未嵌入水印的视频在播放时将会显示播放器水印。
      \">
        <input type=\"radio\" name=\"video_watermark\" value=\"2\" ";
        // line 85
        if (isset($context["storageSetting"])) { $_storageSetting_ = $context["storageSetting"]; } else { $_storageSetting_ = null; }
        if (($this->getAttribute($_storageSetting_, "video_watermark") == 2)) {
            echo "checked=\"checked\"";
        }
        echo "> 开启内嵌水印
      </label>
    </div>
  </div>

  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\">
      <label>设置播放器水印图片</label>
    </div>
    <div class=\"controls col-md-8 radios\">

      <div id=\"cloud-video-watermark-container\">";
        // line 96
        if (isset($context["storageSetting"])) { $_storageSetting_ = $context["storageSetting"]; } else { $_storageSetting_ = null; }
        if ($this->getAttribute($_storageSetting_, "video_watermark_image")) {
            echo "<img src=\"";
            if (isset($context["storageSetting"])) { $_storageSetting_ = $context["storageSetting"]; } else { $_storageSetting_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFileUrl($this->getAttribute($_storageSetting_, "video_watermark_image")), "html", null, true);
            echo "\">";
        }
        echo "</div>
      <button class=\"btn btn-default\" id=\"cloud-video-watermark-upload\" type=\"button\" data-url=\"";
        // line 97
        echo $this->env->getExtension('routing')->getPath("admin_setting_cloud_video_watermark_upload");
        echo "\">上传</button>
      <button class=\"btn btn-default\" id=\"cloud-video-watermark-remove\" type=\"button\" data-url=\"";
        // line 98
        echo $this->env->getExtension('routing')->getPath("admin_setting_cloud_video_watermark_remove");
        echo "\" ";
        if (isset($context["storageSetting"])) { $_storageSetting_ = $context["storageSetting"]; } else { $_storageSetting_ = null; }
        if ((!$this->getAttribute($_storageSetting_, "video_watermark_image"))) {
            echo "style=\"display:none;\"";
        }
        echo ">删除</button>

      <div class=\"help-block\">支持png/gif/jpg格式图片，建议使用半透明的png图片。（推荐图片大小为150×50）</div>
      <input type=\"hidden\" name=\"video_watermark_image\" value=\"";
        // line 101
        if (isset($context["storageSetting"])) { $_storageSetting_ = $context["storageSetting"]; } else { $_storageSetting_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_storageSetting_, "video_watermark_image"), "html", null, true);
        echo "\">
    </div>
  </div>

  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\">
      <label>设置内嵌水印图片</label>
    </div>
    <div class=\"controls col-md-8 radios\">

      <div id=\"cloud-video-embed-watermark-container\">";
        // line 111
        if (isset($context["storageSetting"])) { $_storageSetting_ = $context["storageSetting"]; } else { $_storageSetting_ = null; }
        if ($this->getAttribute($_storageSetting_, "video_embed_watermark_image")) {
            echo "<img src=\"";
            if (isset($context["storageSetting"])) { $_storageSetting_ = $context["storageSetting"]; } else { $_storageSetting_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFileUrl($this->getAttribute($_storageSetting_, "video_embed_watermark_image")), "html", null, true);
            echo "\">";
        }
        echo "</div>
      <button class=\"btn btn-default\" id=\"cloud-video-embed-watermark-upload\" type=\"button\" data-url=\"";
        // line 112
        echo $this->env->getExtension('routing')->getPath("admin_setting_cloud_video_embed_watermark_upload");
        echo "\">上传</button>
      <button class=\"btn btn-default\" id=\"cloud-video-embed-watermark-remove\" type=\"button\" data-url=\"";
        // line 113
        echo $this->env->getExtension('routing')->getPath("admin_setting_cloud_video_embed_watermark_remove");
        echo "\" ";
        if (isset($context["storageSetting"])) { $_storageSetting_ = $context["storageSetting"]; } else { $_storageSetting_ = null; }
        if ((!$this->getAttribute($_storageSetting_, "video_embed_watermark_image"))) {
            echo "style=\"display:none;\"";
        }
        echo ">删除</button>

      <div class=\"help-block\">支持png/gif/jpg格式图片，建议使用半透明的png图片（推荐图片大小为270×90）。</div>
      <input type=\"hidden\" name=\"video_embed_watermark_image\" value=\"";
        // line 116
        if (isset($context["storageSetting"])) { $_storageSetting_ = $context["storageSetting"]; } else { $_storageSetting_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_storageSetting_, "video_embed_watermark_image"), "html", null, true);
        echo "\">
    </div>
  </div>

  <hr>

  <div class=\"row form-group\" >
    <div class=\"col-md-3 control-label\">
      <label>云视频指纹</label>
    </div>  
    <div class=\"controls col-md-8 radios\">
      ";
        // line 127
        if (isset($context["storageSetting"])) { $_storageSetting_ = $context["storageSetting"]; } else { $_storageSetting_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->radios("video_fingerprint", array("0" => "关闭", "1" => "开启"), $this->getAttribute($_storageSetting_, "video_fingerprint"));
        echo "
      <div class=\"help-block\">开启后，将在视频播放中随机时间、随机位置显示当前网站域名及学员的昵称。</div>
    </div>
  </div>
  ";
        // line 131
        if (isset($context["storageSetting"])) { $_storageSetting_ = $context["storageSetting"]; } else { $_storageSetting_ = null; }
        if (($this->getAttribute($_storageSetting_, "upload_mode") == "cloud")) {
            // line 132
            echo "
  <hr>

  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\" >
      <label>云视频片头</label>
    </div>

    <div class=\"controls col-md-8 radios\">
      ";
            // line 141
            if (isset($context["storageSetting"])) { $_storageSetting_ = $context["storageSetting"]; } else { $_storageSetting_ = null; }
            echo $this->env->getExtension('topxia_html_twig')->radios("video_header", array("0" => "关闭", "1" => "开启"), (($this->getAttribute($_storageSetting_, "video_header", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_storageSetting_, "video_header"), 0)) : (0)));
            echo "
    </div>
  </div>
  <div class=\"row form-group\" id=\"upload-panel\"
  data-params-url=\"";
            // line 145
            if (isset($context["storageSetting"])) { $_storageSetting_ = $context["storageSetting"]; } else { $_storageSetting_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_uploadfile_head_leader_params", array("storage" => $this->getAttribute($_storageSetting_, "upload_mode"))), "html", null, true);
            echo "\"
  data-hls-encrypted=\"1\"
  >
    <div class=\"col-md-3\" >
    </div>
    <div class=\"controls col-md-8\">


      <div class=\"file-chooser-bar\" 
        ";
            // line 154
            if (isset($context["storageSetting"])) { $_storageSetting_ = $context["storageSetting"]; } else { $_storageSetting_ = null; }
            if ((!(($this->getAttribute($_storageSetting_, "video_header", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_storageSetting_, "video_header"), null)) : (null)))) {
                // line 155
                echo "        style=\"display:none;\"
        ";
            }
            // line 157
            echo "        >
        <span data-role=\"placeholder\">";
            // line 158
            if (isset($context["headLeader"])) { $_headLeader_ = $context["headLeader"]; } else { $_headLeader_ = null; }
            echo twig_escape_filter($this->env, (($this->getAttribute($_headLeader_, "filename", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_headLeader_, "filename"), "")) : ("")), "html", null, true);
            echo "</span>
        <button class=\"btn btn-link btn-sm edit-btn\" type=\"button\"><i class=\"glyphicon glyphicon-edit\"></i> 编辑</button>
        ";
            // line 160
            if (isset($context["headLeader"])) { $_headLeader_ = $context["headLeader"]; } else { $_headLeader_ = null; }
            if (((($this->getAttribute($_headLeader_, "convertStatus", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_headLeader_, "convertStatus"), null)) : (null)) != "success")) {
                // line 161
                echo "        <div class=\"alert alert-warning\" data-role=\"waiting-tip\">
        正在转换视频格式，转换需要一定的时间，期间将不能播放该视频。<br />转换完成后将以站内消息通知您。
        </div>
        ";
            }
            // line 165
            echo "
      </div>

      <div class=\"file-chooser-main\" 
        ";
            // line 169
            if (isset($context["storageSetting"])) { $_storageSetting_ = $context["storageSetting"]; } else { $_storageSetting_ = null; }
            if ((($this->getAttribute($_storageSetting_, "video_header", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_storageSetting_, "video_header"), null)) : (null))) {
                // line 170
                echo "        style=\"display:none;\"
        ";
            }
            // line 172
            echo "      >
        <div class=\"file-chooser-uploader-control\">
          <span id=\"video-choose-uploader-btn\"
            data-role=\"uploader-btn\"
            data-filetypes=\"";
            // line 176
            if (isset($context["storageSetting"])) { $_storageSetting_ = $context["storageSetting"]; } else { $_storageSetting_ = null; }
            if (($this->getAttribute($_storageSetting_, "upload_mode") == "cloud")) {
                echo "*.mp4;*.avi;*.flv;*.wmv;*.mov";
            } else {
                echo "*.mp4";
            }
            echo "\"
            data-button-image=\"";
            // line 177
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/common/swfupload-btn.png"), "html", null, true);
            echo "\"
            data-callback=\"";
            // line 178
            if (isset($context["storageSetting"])) { $_storageSetting_ = $context["storageSetting"]; } else { $_storageSetting_ = null; }
            if (($this->getAttribute($_storageSetting_, "upload_mode") == "cloud")) {
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_cloud_callback", array("targetType" => "headLeader", "targetId" => 0)), "html", null, true);
            }
            echo "\" 
            data-progressbar=\"#video-chooser-progress\"
            data-storage-type=\"";
            // line 180
            if (isset($context["storageSetting"])) { $_storageSetting_ = $context["storageSetting"]; } else { $_storageSetting_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_storageSetting_, "upload_mode"), "html", null, true);
            echo "\"
            data-get-media-info=\"";
            // line 181
            echo $this->env->getExtension('routing')->getPath("uploadfile_cloud_get_media_info", array("type" => "video"));
            echo "\"
            >
            <a class=\"uploadBtn btn btn-default btn-lg\" >
              上传
            </a>
            </p>
            <div style=\"display:none\">
              <input data-role=\"fileSelected\" class=\"filePrew\" type=\"file\" />
            </div>
          </span>
        </div>
        <div class=\"progress\" id=\"video-chooser-progress\" style=\"display:none;\">
          <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%;\">
          </div>
        </div>

        <div class=\"alert alert-info\">
          <ul>
            <li>支持<strong>mp4, avi, flv, wmv, mov</strong>格式的视频文件上传，文件大小不能超过<strong>10 MB</strong>。</li>
            <li>支持<strong>断点续传</strong>（仅支持HTML5浏览器）。</li>
            <li>视频将上传到<strong>云视频服务器</strong>，上传后会对视频进行格式转换，转换过程需要一定的时间。</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  ";
        }
        // line 208
        echo "
  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\"></div>
    <div class=\"controls col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">提交</button>
    </div>
  </div>

  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:CloudSetting:video.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  403 => 216,  393 => 208,  363 => 181,  358 => 180,  350 => 178,  346 => 177,  337 => 176,  331 => 172,  327 => 170,  324 => 169,  318 => 165,  312 => 161,  309 => 160,  303 => 158,  300 => 157,  296 => 155,  293 => 154,  280 => 145,  272 => 141,  261 => 132,  258 => 131,  250 => 127,  235 => 116,  224 => 113,  220 => 112,  210 => 111,  196 => 101,  185 => 98,  181 => 97,  171 => 96,  154 => 85,  141 => 78,  129 => 72,  125 => 70,  106 => 54,  97 => 49,  82 => 38,  62 => 22,  48 => 12,  43 => 9,  40 => 8,  33 => 3,  28 => 6,  26 => 5,);
    }
}
