<?php

/* TopxiaWebBundle:CourseMaterialManage:file-chooser.html.twig */
class __TwigTemplate_8559299aa6280a1c5994a0f11720c6a5 extends Twig_Template
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
        echo "<div class=\"file-chooser\">
  <div class=\"file-chooser-bar\" style=\"display:none;\">
    <span data-role=\"placeholder\"></span>
    <button class=\"btn btn-link btn-sm\" type=\"button\" data-role=\"trigger\"><i class=\"glyphicon glyphicon-edit\"></i> 编辑</button>
  </div>

  <div class=\"file-chooser-main\">
    <ul class=\"nav nav-pills nav-pills-mini mbs file-chooser-tabs\">
      <li><a class=\"file-chooser-uploader-tab\" href=\"#file-chooser-upload-pane\" data-toggle=\"tab\">上传文件</a></li>
      <li><a href=\"#file-chooser-browser-pane\" data-toggle=\"tab\">从文件库中选择</a></li>
      <li><a class=\"file-chooser-link-tab\" href=\"#file-chooser-link-pane\" data-toggle=\"tab\">网络链接</a></li>
    </ul>
    <div class=\"tab-content\">
      <div class=\"tab-pane\" id=\"file-chooser-upload-pane\">

        <div class=\"file-chooser-uploader\">
          <div class=\"file-chooser-uploader-label\">选择你要上传的文件：</div>
          <div class=\"file-chooser-uploader-control\">
            <button 
              id=\"file-chooser-uploader-btn\"
              type=\"button\"
              class=\"btn btn-default btn-sm\"
              data-role=\"uploader-btn\"
              data-upload-url=\"";
        // line 24
        if (isset($context["targetType"])) { $_targetType_ = $context["targetType"]; } else { $_targetType_ = null; }
        if (isset($context["targetId"])) { $_targetId_ = $context["targetId"]; } else { $_targetId_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_upload", array("targetType" => $_targetType_, "targetId" => $_targetId_)), "html", null, true);
        echo "\"
              data-params-url=\"";
        // line 25
        if (isset($context["targetType"])) { $_targetType_ = $context["targetType"]; } else { $_targetType_ = null; }
        if (isset($context["targetId"])) { $_targetId_ = $context["targetId"]; } else { $_targetId_ = null; }
        if (isset($context["storageSetting"])) { $_storageSetting_ = $context["storageSetting"]; } else { $_storageSetting_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_params", array("targetType" => $_targetType_, "targetId" => $_targetId_, "storage" => $this->getAttribute($_storageSetting_, "upload_mode"))), "html", null, true);
        echo "\"
              ";
        // line 26
        if (isset($context["storageSetting"])) { $_storageSetting_ = $context["storageSetting"]; } else { $_storageSetting_ = null; }
        if (($this->getAttribute($_storageSetting_, "upload_mode") == "cloud")) {
            // line 27
            echo "                data-callback=\"";
            if (isset($context["targetType"])) { $_targetType_ = $context["targetType"]; } else { $_targetType_ = null; }
            if (isset($context["targetId"])) { $_targetId_ = $context["targetId"]; } else { $_targetId_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_cloud_callback", array("targetType" => $_targetType_, "targetId" => $_targetId_)), "html", null, true);
            echo "\"
              ";
        }
        // line 29
        echo "              ";
        if (isset($context["uploadSettings"])) { $_uploadSettings_ = $context["uploadSettings"]; } else { $_uploadSettings_ = null; }
        if (((array_key_exists("uploadSettings", $context)) ? (_twig_default_filter($_uploadSettings_, null)) : (null))) {
            // line 30
            echo "                data-upload-settings=\"";
            if (isset($context["uploadSettings"])) { $_uploadSettings_ = $context["uploadSettings"]; } else { $_uploadSettings_ = null; }
            echo twig_escape_filter($this->env, twig_jsonencode_filter($_uploadSettings_), "html", null, true);
            echo "\"
              ";
        }
        // line 32
        echo "            >上传</button>
          </div>
          <div class=\"progress\" data-role=\"progress\" style=\"display:none;\">
            <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 0%;\"></div>
          </div>

          <div class=\"alert alert-info\">
            <ul>
              <li>支持常见文档、图片、音视频、压缩包文件格式。</li>
              ";
        // line 41
        if (isset($context["storageSetting"])) { $_storageSetting_ = $context["storageSetting"]; } else { $_storageSetting_ = null; }
        if (($this->getAttribute($_storageSetting_, "upload_mode") == "cloud")) {
            // line 42
            echo "                <li>文件将上传到<strong>云服务器</strong></li>
              ";
        } else {
            // line 44
            echo "                <li>文件将上传到<strong>网站服务器</strong>，如需使用云视频，请联系EduSoho官方购买。</li>
              ";
        }
        // line 46
        echo "            </ul>
          </div>

        </div>

      </div>
      <div class=\"tab-pane\" id=\"file-chooser-browser-pane\">
          <div id=\"file-browser\" data-role=\"file-browser\"
          data-url=\"";
        // line 54
        if (isset($context["targetType"])) { $_targetType_ = $context["targetType"]; } else { $_targetType_ = null; }
        if (isset($context["targetId"])) { $_targetId_ = $context["targetId"]; } else { $_targetId_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_browser", array("targetType" => $_targetType_, "targetId" => $_targetId_)), "html", null, true);
        echo "\" 
          data-empty=\"暂无文件，请先上传。\">
          </div>
      </div>
      <div class=\"tab-pane\" id=\"file-chooser-link-pane\">

        <div class=\"form-group\" style=\"margin-bottom:0px;\">
          <div class=\"col-md-12 controls\">
            <input type=\"text\" class=\"form-control\" name=\"link\" placeholder=\"资料链接地址\">
            <div class=\"help-block\"></div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseMaterialManage:file-chooser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 54,  97 => 44,  93 => 42,  90 => 41,  79 => 32,  72 => 30,  68 => 29,  57 => 26,  50 => 25,  44 => 24,  19 => 1,  132 => 41,  114 => 25,  112 => 24,  105 => 19,  101 => 46,  98 => 16,  95 => 15,  81 => 14,  78 => 13,  60 => 27,  53 => 11,  45 => 8,  42 => 7,  39 => 6,  33 => 5,  28 => 49,  26 => 3,);
    }
}
