<?php

/* TopxiaWebBundle:CourseLessonManage:media-choose.html.twig */
class __TwigTemplate_bacd73b09e1ede8645ddf6afb5bf0399 extends Twig_Template
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
        echo "<div id=\"media-choosers\">

  <div class=\"file-chooser\" id=\"video-chooser\" style=\"display:none;\"
    data-params-url=\"";
        // line 4
        if (isset($context["storageSetting"])) { $_storageSetting_ = $context["storageSetting"]; } else { $_storageSetting_ = null; }
        if (isset($context["targetType"])) { $_targetType_ = $context["targetType"]; } else { $_targetType_ = null; }
        if (isset($context["targetId"])) { $_targetId_ = $context["targetId"]; } else { $_targetId_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_params", array("storage" => $this->getAttribute($_storageSetting_, "upload_mode"), "targetType" => $_targetType_, "targetId" => $_targetId_)), "html", null, true);
        echo "\"
    data-hls-encrypted=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("developer.hls_encrypted", 1), "html", null, true);
        echo "\"
    data-targetType=\"";
        // line 6
        if (isset($context["targetType"])) { $_targetType_ = $context["targetType"]; } else { $_targetType_ = null; }
        echo twig_escape_filter($this->env, $_targetType_, "html", null, true);
        echo "\"
    data-targetId=\"";
        // line 7
        if (isset($context["targetId"])) { $_targetId_ = $context["targetId"]; } else { $_targetId_ = null; }
        echo twig_escape_filter($this->env, $_targetId_, "html", null, true);
        echo "\"
  >
    <div class=\"file-chooser-bar\" style=\"display:none;\">
      <span data-role=\"placeholder\"></span>
      <button class=\"btn btn-link btn-sm\" type=\"button\" data-role=\"trigger\"><i class=\"glyphicon glyphicon-edit\"></i> 编辑</button>
      <div class=\"alert alert-warning\" data-role=\"waiting-tip\" style=\"display:none;\">正在转换视频格式，转换需要一定的时间，期间将不能播放该视频。<br />转换完成后将以站内消息通知您。</div>
    </div>

    <div class=\"file-chooser-main\">
      <ul class=\"nav nav-pills nav-pills-mini mbs file-chooser-tabs\">
        <li class=\"active\"><a class=\"file-chooser-uploader-tab\" href=\"#video-chooser-upload-pane\" data-toggle=\"tab\">上传视频</a></li>
        <li><a href=\"#video-chooser-disk-pane\" data-toggle=\"tab\">从视频库中选择</a></li>
        <li><a href=\"#video-chooser-import-pane\" data-toggle=\"tab\">导入网络视频</a></li>
      </ul>
      <div class=\"tab-content\">
        <div class=\"tab-pane active\" id=\"video-chooser-upload-pane\">

          <div class=\"file-chooser-uploader\">




";
        // line 29
        if (isset($context["storageSetting"])) { $_storageSetting_ = $context["storageSetting"]; } else { $_storageSetting_ = null; }
        if (($this->getAttribute($_storageSetting_, "upload_mode") == "cloud")) {
            // line 30
            echo "  <div class=\"video-quality-switcher\">
    <div>
      <label>视频转码类型：</label>
      <span class=\"quality-switcher-bar\">
        <span class=\"text-muted quality-switcher-name\"></span> <a href=\"javascript:;\" class=\"edit-btn text-info\"><span class=\"glyphicon glyphicon-cog\"></span> 设置</a>
      </span>
    </div>

    <div class=\"quality-switcher-control\">
      <div class=\"video-quality radios\">
        画质：
        ";
            // line 41
            if (isset($context["file"])) { $_file_ = $context["file"]; } else { $_file_ = null; }
            if (((array_key_exists("file", $context)) ? (_twig_default_filter($_file_, null)) : (null))) {
                // line 42
                echo "          ";
                if (isset($context["file"])) { $_file_ = $context["file"]; } else { $_file_ = null; }
                echo $this->env->getExtension('topxia_html_twig')->radios("video_quality", array("low" => "流畅 <span class=\"text-muted\">(适合PPT讲解)</span>", "normal" => "标准 <span class=\"text-muted\">(适合屏幕录制、摄像头拍摄)</span>", "high" => "精细 <span class=\"text-muted\">(适合动态电影)</span>"), (($this->getAttribute($this->getAttribute($_file_, "convertParams", array(), "any", false, true), "videoQuality", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_file_, "convertParams", array(), "any", false, true), "videoQuality"), "low")) : ("low")));
                echo "
        ";
            } else {
                // line 44
                echo "          ";
                if (isset($context["storageSetting"])) { $_storageSetting_ = $context["storageSetting"]; } else { $_storageSetting_ = null; }
                echo $this->env->getExtension('topxia_html_twig')->radios("video_quality", array("low" => "流畅 <span class=\"text-muted\">(适合PPT讲解)</span>", "normal" => "标准 <span class=\"text-muted\">(适合屏幕录制、摄像头拍摄)</span>", "high" => "精细 <span class=\"text-muted\">(适合动态电影)</span>"), (($this->getAttribute($_storageSetting_, "video_quality", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_storageSetting_, "video_quality"), "low")) : ("low")));
                echo "
        ";
            }
            // line 46
            echo "      </div>

      <div class=\"audio-quality radios\">
        音质：
        ";
            // line 50
            if (isset($context["file"])) { $_file_ = $context["file"]; } else { $_file_ = null; }
            if (((array_key_exists("file", $context)) ? (_twig_default_filter($_file_, null)) : (null))) {
                // line 51
                echo "          ";
                if (isset($context["file"])) { $_file_ = $context["file"]; } else { $_file_ = null; }
                echo $this->env->getExtension('topxia_html_twig')->radios("video_audio_quality", array("low" => "流畅", "normal" => "标准", "high" => "高品"), (($this->getAttribute($this->getAttribute($_file_, "convertParams", array(), "any", false, true), "audioQuality", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_file_, "convertParams", array(), "any", false, true), "audioQuality"), "low")) : ("low")));
                echo "
        ";
            } else {
                // line 53
                echo "          ";
                if (isset($context["storageSetting"])) { $_storageSetting_ = $context["storageSetting"]; } else { $_storageSetting_ = null; }
                echo $this->env->getExtension('topxia_html_twig')->radios("video_audio_quality", array("low" => "流畅", "normal" => "标准", "high" => "高品"), (($this->getAttribute($_storageSetting_, "video_audio_quality", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_storageSetting_, "video_audio_quality"), "low")) : ("low")));
                echo "
          ";
            }
            // line 55
            echo "      </div>

      <div class=\"quality-actions\">
        <a href=\"javascript:;\" class=\"btn btn-default btn-sm confrim-btn\">确定</a>
        <a href=\"javascript:;\" class=\"btn btn-link btn-sm cancel-btn\">取消</a>
      </div>
    </div>
  </div>
  ";
        }
        // line 64
        echo "















            <div class=\"file-chooser-uploader-label\">选择你要上传的视频文件：</div>
            <div class=\"file-chooser-uploader-control\">
              <span id=\"video-choose-uploader-btn\"
                data-role=\"uploader-btn\"
                data-filetypes=\"";
        // line 84
        if (isset($context["storageSetting"])) { $_storageSetting_ = $context["storageSetting"]; } else { $_storageSetting_ = null; }
        if (($this->getAttribute($_storageSetting_, "upload_mode") == "cloud")) {
            echo "*.mp4;*.avi;*.flv;*.wmv;*.mov";
        } else {
            echo "*.mp4";
        }
        echo "\"
                data-button-image=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/common/swfupload-btn.png"), "html", null, true);
        echo "\"
                data-callback=\"";
        // line 86
        if (isset($context["storageSetting"])) { $_storageSetting_ = $context["storageSetting"]; } else { $_storageSetting_ = null; }
        if (($this->getAttribute($_storageSetting_, "upload_mode") == "cloud")) {
            if (isset($context["targetType"])) { $_targetType_ = $context["targetType"]; } else { $_targetType_ = null; }
            if (isset($context["targetId"])) { $_targetId_ = $context["targetId"]; } else { $_targetId_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_cloud_callback", array("targetType" => $_targetType_, "targetId" => $_targetId_, "lazyConvert" => 1)), "html", null, true);
        }
        echo "\" 
                data-progressbar=\"#video-chooser-progress\"
                data-storage-type=\"";
        // line 88
        if (isset($context["storageSetting"])) { $_storageSetting_ = $context["storageSetting"]; } else { $_storageSetting_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_storageSetting_, "upload_mode"), "html", null, true);
        echo "\"
                data-get-media-info=\"";
        // line 89
        echo $this->env->getExtension('routing')->getPath("uploadfile_cloud_get_media_info", array("type" => "video"));
        echo "\"
                >
                <a class=\"uploadBtn btn btn-default btn-lg\">
                  上传
                </a>
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
                ";
        // line 106
        if (isset($context["storageSetting"])) { $_storageSetting_ = $context["storageSetting"]; } else { $_storageSetting_ = null; }
        if (($this->getAttribute($_storageSetting_, "upload_mode") == "cloud")) {
            // line 107
            echo "                  <li>支持<strong>mp4, avi, flv, wmv, mov</strong>格式的视频文件上传，文件大小不能超过<strong>1 GB</strong>。</li>
                  <li>支持<strong>断点续传</strong>（仅支持HTML5浏览器）。</li>
                  <li>视频将上传到<strong>云视频服务器</strong>，上传之后会对视频进行格式转换，转换过程需要一定的时间，在这个过程中视频将无法播放。</li>
                ";
        } else {
            // line 111
            echo "                  <li>支持<strong>mp4</strong>格式的视频文件上传，文件大小不能超过<strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getUploadMaxFilesize(), "html", null, true);
            echo " </strong>。MP4文件的视频编码格式，请使用AVC(H264)编码，否则浏览器无法播放。</li>
                  <li>视频将上传到<strong>网站服务器</strong>，如需使用云视频，请联系EduSoho官方购买。使用云视频，将获得更好的播放体验。</li>
                ";
        }
        // line 114
        echo "              </ul>
            </div>

          </div>

        </div>
        <div class=\"tab-pane\" id=\"video-chooser-disk-pane\">
            <div id=\"file-browser-video\" data-role=\"file-browser\"
            data-url=\"";
        // line 122
        if (isset($context["targetType"])) { $_targetType_ = $context["targetType"]; } else { $_targetType_ = null; }
        if (isset($context["targetId"])) { $_targetId_ = $context["targetId"]; } else { $_targetId_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_browser", array("targetType" => $_targetType_, "targetId" => $_targetId_, "type" => "video")), "html", null, true);
        echo "\" 
            data-empty=\"暂无视频文件，请先上传。\">
            </div>
        </div>
        <div class=\"tab-pane\" id=\"video-chooser-import-pane\">
          <div class=\"input-group\">
            <input class=\"form-control\" type=\"text\" placeholder=\"支持优酷、土豆、网易公开课的视频页面地址导入\" data-role=\"import-url\" >
            <span class=\"input-group-btn\">
              <button type=\"button\" class=\"btn btn-default\" data-role=\"import\" data-url=\"";
        // line 130
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_media_import", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
        echo "\" data-loading-text=\"正在导入，请稍等\">导入</button>
            </span>
          </div>
        </div>
      </div>
    </div>

  </div>


  <div class=\"file-chooser\" id=\"audio-chooser\" style=\"display:none;\"
      data-params-url=\"";
        // line 141
        if (isset($context["storageSetting"])) { $_storageSetting_ = $context["storageSetting"]; } else { $_storageSetting_ = null; }
        if (isset($context["targetType"])) { $_targetType_ = $context["targetType"]; } else { $_targetType_ = null; }
        if (isset($context["targetId"])) { $_targetId_ = $context["targetId"]; } else { $_targetId_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_params", array("storage" => $this->getAttribute($_storageSetting_, "upload_mode"), "targetType" => $_targetType_, "targetId" => $_targetId_)), "html", null, true);
        echo "\"
      data-targetType=\"";
        // line 142
        if (isset($context["targetType"])) { $_targetType_ = $context["targetType"]; } else { $_targetType_ = null; }
        echo twig_escape_filter($this->env, $_targetType_, "html", null, true);
        echo "\"
      data-targetId=\"";
        // line 143
        if (isset($context["targetId"])) { $_targetId_ = $context["targetId"]; } else { $_targetId_ = null; }
        echo twig_escape_filter($this->env, $_targetId_, "html", null, true);
        echo "\"
  >
    <div class=\"file-chooser-bar\"  style=\"display:none;\">
      <span data-role=\"placeholder\"></span>
      <button class=\"btn btn-link btn-sm\" type=\"button\" data-role=\"trigger\"><i class=\"glyphicon glyphicon-edit\"></i> 编辑</button>
    </div>

    <div class=\"file-chooser-main\">
      <ul class=\"nav nav-pills nav-pills-mini mbs file-chooser-tabs\">
        <li class=\"active\"><a class=\"file-chooser-uploader-tab\" href=\"#audio-chooser-upload-pane\" data-toggle=\"tab\">上传音频</a></li>
        <li><a href=\"#audio-chooser-disk-pane\" data-toggle=\"tab\">从音频库中选择</a></li>
      </ul>
      <div class=\"tab-content\">
        <div class=\"tab-pane active\" id=\"audio-chooser-upload-pane\">

          <div class=\"file-chooser-uploader\">
            <div class=\"file-chooser-uploader-label\">选择你要上传的音频文件：</div>
            <div class=\"file-chooser-uploader-control\">
              <span id=\"audio-choose-uploader-btn\" 
                data-role=\"uploader-btn\"
                data-button-image=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/common/swfupload-btn.png"), "html", null, true);
        echo "\"
                data-callback=\"";
        // line 164
        if (isset($context["storageSetting"])) { $_storageSetting_ = $context["storageSetting"]; } else { $_storageSetting_ = null; }
        if (($this->getAttribute($_storageSetting_, "upload_mode") == "cloud")) {
            if (isset($context["targetType"])) { $_targetType_ = $context["targetType"]; } else { $_targetType_ = null; }
            if (isset($context["targetId"])) { $_targetId_ = $context["targetId"]; } else { $_targetId_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_cloud_callback", array("targetType" => $_targetType_, "targetId" => $_targetId_)), "html", null, true);
        }
        echo "\" 
                data-progressbar=\"#audio-chooser-progress\"
                data-storage-type=\"";
        // line 166
        if (isset($context["storageSetting"])) { $_storageSetting_ = $context["storageSetting"]; } else { $_storageSetting_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_storageSetting_, "upload_mode"), "html", null, true);
        echo "\"
                data-get-media-info=\"";
        // line 167
        echo $this->env->getExtension('routing')->getPath("uploadfile_cloud_get_media_info", array("type" => "audio"));
        echo "\"
                >
                <a class=\"uploadBtn btn btn-default btn-lg\">
                  上传
                </a>
                <div style=\"display:none\">
                  <input data-role=\"fileSelected\" class=\"filePrew\" type=\"file\" />
                </div>
              </span>
            </div>
            <div class=\"progress\" id=\"audio-chooser-progress\" style=\"display:none;\">
              <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%;\">
              </div>
            </div>

            <div class=\"alert alert-info\">
              <ul>
                <li>支持<strong>mp3</strong>格式的音频文件上传，且文件大小不能超过<strong>
                ";
        // line 185
        if (isset($context["storageSetting"])) { $_storageSetting_ = $context["storageSetting"]; } else { $_storageSetting_ = null; }
        if (($this->getAttribute($_storageSetting_, "upload_mode") == "cloud")) {
            // line 186
            echo "                  500M
                ";
        } else {
            // line 188
            echo "                  ";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getUploadMaxFilesize(), "html", null, true);
            echo "
                ";
        }
        // line 190
        echo "                </strong>。</li>
                ";
        // line 191
        if (isset($context["storageSetting"])) { $_storageSetting_ = $context["storageSetting"]; } else { $_storageSetting_ = null; }
        if (($this->getAttribute($_storageSetting_, "upload_mode") == "cloud")) {
            // line 192
            echo "                  <li>支持<strong>断点续传</strong>（仅支持HTML5浏览器）。</li>
                  <li>音频将上传到<strong>云服务器</strong></li>
                ";
        } else {
            // line 195
            echo "                  <li>音频将上传到<strong>网站服务器</strong></li>
                ";
        }
        // line 197
        echo "              </ul>
            </div>
          </div>

        </div>
        <div class=\"tab-pane\" id=\"audio-chooser-disk-pane\">
          <div id=\"file-browser-audio\" data-role=\"file-browser\"
          data-url=\"";
        // line 204
        if (isset($context["targetType"])) { $_targetType_ = $context["targetType"]; } else { $_targetType_ = null; }
        if (isset($context["targetId"])) { $_targetId_ = $context["targetId"]; } else { $_targetId_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_browser", array("targetType" => $_targetType_, "targetId" => $_targetId_, "type" => "audio")), "html", null, true);
        echo "\" data-empty=\"暂无音频文件，请先上传。\"></div>
        </div>
      </div>
    </div>

  </div>




  <div class=\"file-chooser\" id=\"ppt-chooser\" style=\"display:none;\"
    data-params-url=\"";
        // line 215
        if (isset($context["storageSetting"])) { $_storageSetting_ = $context["storageSetting"]; } else { $_storageSetting_ = null; }
        if (isset($context["targetType"])) { $_targetType_ = $context["targetType"]; } else { $_targetType_ = null; }
        if (isset($context["targetId"])) { $_targetId_ = $context["targetId"]; } else { $_targetId_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_params", array("storage" => $this->getAttribute($_storageSetting_, "upload_mode"), "targetType" => $_targetType_, "targetId" => $_targetId_, "convertor" => "ppt")), "html", null, true);
        echo "\"
    data-targetType=\"";
        // line 216
        if (isset($context["targetType"])) { $_targetType_ = $context["targetType"]; } else { $_targetType_ = null; }
        echo twig_escape_filter($this->env, $_targetType_, "html", null, true);
        echo "\"
    data-targetId=\"";
        // line 217
        if (isset($context["targetId"])) { $_targetId_ = $context["targetId"]; } else { $_targetId_ = null; }
        echo twig_escape_filter($this->env, $_targetId_, "html", null, true);
        echo "\"
  >
    <div class=\"file-chooser-bar\"  style=\"display:none;\">
      <span data-role=\"placeholder\"></span>
      <button class=\"btn btn-link btn-sm\" type=\"button\" data-role=\"trigger\"><i class=\"glyphicon glyphicon-edit\"></i> 编辑</button>
    </div>

    <div class=\"file-chooser-main\">
      <ul class=\"nav nav-pills nav-pills-mini mbs file-chooser-tabs\">
        <li class=\"active\"><a class=\"file-chooser-uploader-tab\" href=\"#ppt-chooser-upload-pane\" data-toggle=\"tab\">上传PPT</a></li>
        <li><a href=\"#ppt-chooser-disk-pane\" data-toggle=\"tab\">从PPT库中选择</a></li>
      </ul>
      <div class=\"tab-content\">
        <div class=\"tab-pane active\" id=\"ppt-chooser-upload-pane\">

          <div class=\"file-chooser-uploader\">
            <div class=\"file-chooser-uploader-label\">选择你要上传的PPT文件：</div>
            <div class=\"file-chooser-uploader-control\">
              <span id=\"ppt-choose-uploader-btn\" 
                data-role=\"uploader-btn\"
                data-button-image=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/common/swfupload-btn.png"), "html", null, true);
        echo "\"
                data-callback=\"";
        // line 238
        if (isset($context["storageSetting"])) { $_storageSetting_ = $context["storageSetting"]; } else { $_storageSetting_ = null; }
        if (($this->getAttribute($_storageSetting_, "upload_mode") == "cloud")) {
            if (isset($context["targetType"])) { $_targetType_ = $context["targetType"]; } else { $_targetType_ = null; }
            if (isset($context["targetId"])) { $_targetId_ = $context["targetId"]; } else { $_targetId_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_cloud_callback", array("targetType" => $_targetType_, "targetId" => $_targetId_)), "html", null, true);
        }
        echo "\" 
                data-storage-type=\"";
        // line 239
        if (isset($context["storageSetting"])) { $_storageSetting_ = $context["storageSetting"]; } else { $_storageSetting_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_storageSetting_, "upload_mode"), "html", null, true);
        echo "\"
                data-progressbar=\"#ppt-chooser-progress\">
                <a class=\"uploadBtn btn btn-default btn-lg\">
                  上传
                </a>
                <div style=\"display:none\">
                  <input data-role=\"fileSelected\" class=\"filePrew\" type=\"file\" />
                </div>
              </span>
            </div>
            <div class=\"progress\" id=\"ppt-chooser-progress\" style=\"display:none;\">
              <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%;\">
              </div>
            </div>

            <div class=\"alert alert-info\">
              <ul>
                <li>支持<strong>ppt, pptx</strong>格式的PPT文件上传，且文件大小不能超过<strong>100 MB</strong>。</li>
                <li>PPT将上传到<strong>云服务器</strong></li>
              </ul>
            </div>
          </div>

        </div>
        <div class=\"tab-pane\" id=\"ppt-chooser-disk-pane\">
          <div id=\"file-browser-ppt\" data-role=\"file-browser\"
          data-url=\"";
        // line 265
        if (isset($context["targetType"])) { $_targetType_ = $context["targetType"]; } else { $_targetType_ = null; }
        if (isset($context["targetId"])) { $_targetId_ = $context["targetId"]; } else { $_targetId_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_browser", array("targetType" => $_targetType_, "targetId" => $_targetId_, "type" => "ppt")), "html", null, true);
        echo "\" data-empty=\"暂无PPT文件，请先上传。\"></div>
        </div>
      </div>
    </div>

  </div>





</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseLessonManage:media-choose.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  465 => 265,  435 => 239,  426 => 238,  422 => 237,  398 => 217,  393 => 216,  386 => 215,  370 => 204,  361 => 197,  357 => 195,  352 => 192,  349 => 191,  346 => 190,  340 => 188,  336 => 186,  333 => 185,  312 => 167,  307 => 166,  297 => 164,  269 => 143,  264 => 142,  257 => 141,  242 => 130,  229 => 122,  212 => 111,  206 => 107,  203 => 106,  183 => 89,  178 => 88,  168 => 86,  164 => 85,  155 => 84,  133 => 64,  122 => 55,  115 => 53,  105 => 50,  99 => 46,  92 => 44,  85 => 42,  82 => 41,  69 => 30,  66 => 29,  35 => 6,  31 => 5,  19 => 1,  70 => 10,  65 => 8,  60 => 6,  49 => 10,  46 => 9,  42 => 8,  24 => 4,  22 => 1,  293 => 163,  290 => 124,  287 => 123,  273 => 113,  270 => 112,  261 => 107,  256 => 104,  253 => 103,  244 => 98,  239 => 97,  219 => 114,  210 => 79,  208 => 78,  197 => 73,  189 => 69,  186 => 68,  176 => 62,  173 => 61,  157 => 49,  149 => 47,  136 => 40,  128 => 36,  117 => 31,  108 => 51,  98 => 22,  94 => 20,  87 => 18,  76 => 16,  73 => 15,  68 => 14,  58 => 13,  55 => 12,  52 => 11,  40 => 7,  37 => 6,  32 => 128,  29 => 4,  27 => 3,);
    }
}
