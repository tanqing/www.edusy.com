<?php

/* TopxiaAdminBundle:System:default-share-content.html.twig */
class __TwigTemplate_bfadefe7bf5f3a0dd7f48ec6538816cf extends Twig_Template
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
        echo "<form class=\"form-horizontal\" id=\"cloud-setting-form\" method=\"post\" novalidate>
  <div >
    <fieldset>
      <div class=\"form-group\">
        <div class=\"col-md-3 control-label\">
          <label for=\"article_share_content\">资讯分享内容</label>
        </div>
        <div class=\"controls col-md-8\">
          <textarea id=\"courseShareContent\" name=\"articleShareContent\" class=\"form-control\" rows=\"5\">";
        // line 9
        if (isset($context["defaultSetting"])) { $_defaultSetting_ = $context["defaultSetting"]; } else { $_defaultSetting_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_defaultSetting_, "articleShareContent"), "html", null, true);
        echo "</textarea>
          <div class=\"help-block\">
            ";
        // line 17
        echo "
            <div>变量说明：</div>
            <ul>
              <li>{{articletitle}} 为资讯标题</li>
              <li>{{sitename}} 为网校名称</li>
            </ul>
            ";
        echo "
          </div>
        </div>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-3 control-label\">
          <label for=\"course_share_content\">课程分享内容</label>
        </div>
        <div class=\"controls col-md-8\">
          <textarea id=\"courseShareContent\" name=\"courseShareContent\" class=\"form-control\" rows=\"5\">";
        // line 27
        if (isset($context["defaultSetting"])) { $_defaultSetting_ = $context["defaultSetting"]; } else { $_defaultSetting_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_defaultSetting_, "courseShareContent"), "html", null, true);
        echo "</textarea>
          <div class=\"help-block\">
            ";
        // line 34
        echo "
            <div>变量说明：</div>
            <ul>
              <li>{{course}} 为课程名称</li>
            </ul>
            ";
        echo "
          </div>
        </div>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-3 control-label\">
          <label for=\"course_share_content\">小组分享内容</label>
        </div>
        <div class=\"controls col-md-8\">
          <textarea id=\"groupShareContent\" name=\"groupShareContent\" class=\"form-control\" rows=\"5\">";
        // line 44
        if (isset($context["defaultSetting"])) { $_defaultSetting_ = $context["defaultSetting"]; } else { $_defaultSetting_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_defaultSetting_, "groupShareContent"), "html", null, true);
        echo "</textarea>
          <div class=\"help-block\">
            ";
        // line 52
        echo "
            <div>变量说明：</div>
            <ul>
              <li>{{groupname}} 为小组名称</li>
              <li>{{threadname}} 为话题名称</li>
            </ul>
            ";
        echo "
          </div>
        </div>
      </div>

    </fieldset>
  </div>
  <div class=\"form-group\">
    <div class=\"controls col-md-offset-3 col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">提交</button>
    </div>
  </div>
  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>
<div class=\"alert alert-info\">
  <p><strong>注：分享相关的数据统计需将百度分享代码嵌入到统计分析代码里</strong></p>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:default-share-content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 64,  84 => 52,  78 => 44,  60 => 34,  35 => 17,  29 => 9,  19 => 1,  54 => 27,  52 => 11,  44 => 7,  41 => 6,  38 => 5,  31 => 2,  26 => 3,);
    }
}
