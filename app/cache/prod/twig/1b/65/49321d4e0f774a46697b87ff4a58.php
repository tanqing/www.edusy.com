<?php

/* TopxiaAdminBundle:Content:content-modal.html.twig */
class __TwigTemplate_1b6549321d4e0f774a46697b87ff4a58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::bootstrap-modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["modal_class"] = "modal-lg";
        // line 178
        $context["hideFooter"] = true;
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_type_, "name"), "html", null, true);
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "
";
        // line 9
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        $context["content"] = ((array_key_exists("content", $context)) ? (_twig_default_filter($_content_, null)) : (null));
        // line 10
        echo "
<form class=\"two-col-form\" id=\"content-form\" method=\"post\" enctype=\"multipart/form-data\"
\t";
        // line 12
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        if ($_content_) {
            // line 13
            echo "\t\taction=\"";
            if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_content_edit", array("id" => $this->getAttribute($_content_, "id"))), "html", null, true);
            echo "\"
\t";
        } else {
            // line 15
            echo "\t\taction=\"";
            if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_content_create", array("type" => $this->getAttribute($_type_, "alias"))), "html", null, true);
            echo "\"
\t";
        }
        // line 17
        echo "\t>
\t<div class=\"row\">
\t\t<div class=\"col-md-8 two-col-main\">
\t\t\t";
        // line 20
        if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
        if (twig_in_filter("title", $this->getAttribute($_type_, "basicFields"))) {
            // line 21
            echo "\t\t\t\t<div class=\"form-group\">
\t\t\t\t  <label for=\"content-title-field\" class=\"control-label\">标题</label>
\t\t\t\t  <div class=\"controls\">
\t\t\t\t  \t<input class=\"form-control\" id=\"content-title-field\" type=\"text\" name=\"title\" value=\"";
            // line 24
            if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
            echo $this->env->getExtension('topxia_html_twig')->fieldValue($_content_, "title");
            echo "\">
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 28
        echo "
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"editor-field\" class=\"control-label\">编辑器类型</label>
\t\t\t\t<div class=\"controls radios\">
\t              \t<label><input type=\"radio\" name=\"editor\" value=\"richeditor\" 
\t              \t\t";
        // line 33
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        if (twig_test_empty($_content_)) {
            // line 34
            echo "\t              \t\t checked=\"checked\" 
\t              \t\t";
        } elseif (($this->getAttribute($_content_, "editor") == "richeditor")) {
            // line 36
            echo "\t              \t\t checked=\"checked\"
\t              \t\t";
        }
        // line 37
        echo ">
\t              \t\t可视化编辑器</label>
\t             \t<label><input type=\"radio\" name=\"editor\" value=\"none\"
\t             \t\t";
        // line 40
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        if (($_content_ && ($this->getAttribute($_content_, "editor") == "none"))) {
            echo " checked=\"checked\" ";
        }
        // line 41
        echo "\t             \t\t>HTML编辑器</label>
\t            </div>
\t        </div>

\t\t\t";
        // line 45
        if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
        if (twig_in_filter("body", $this->getAttribute($_type_, "basicFields"))) {
            // line 46
            echo "\t\t\t\t<label for=\"content-body-field\" class=\"control-label\">正文</label>

\t\t\t\t<div class=\"form-group\" 
\t\t\t\t";
            // line 49
            if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
            if (($_content_ && ($this->getAttribute($_content_, "editor") == "none"))) {
                // line 50
                echo "\t\t\t\t\tstyle=\"display:none\"
\t\t\t\t";
            }
            // line 52
            echo "\t\t\t\t>
\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t<textarea class=\"form-control\" id=\"richeditor-body-field\" rows=\"16\" name=\"richeditor-body\">";
            // line 54
            if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
            echo $this->env->getExtension('topxia_html_twig')->fieldValue($_content_, "body");
            echo "</textarea>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\" 
\t\t\t\t";
            // line 59
            if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
            if (twig_test_empty($_content_)) {
                // line 60
                echo "          \t\t style=\"display:none\" 
          \t\t";
            } elseif (($this->getAttribute($_content_, "editor") == "richeditor")) {
                // line 62
                echo "          \t\t style=\"display:none\"
          \t\t";
            }
            // line 63
            echo ">
\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t<textarea class=\"form-control\" id=\"noneeditor-body-field\" rows=\"16\" name=\"noneeditor-body\">";
            // line 65
            if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
            echo $this->env->getExtension('topxia_html_twig')->fieldValue($_content_, "body");
            echo "</textarea>
\t\t\t\t\t</div>
\t\t\t\t</div> 
\t\t\t";
        }
        // line 69
        echo "
\t\t\t";
        // line 70
        if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
        if ($this->getAttribute($_type_, "extendedFields")) {
            // line 71
            echo "\t\t\t  ";
            if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
            $template = $this->env->resolveTemplate((("TopxiaAdminBundle:Content:" . $this->getAttribute($_type_, "alias")) . "-extended-fields.html.twig"));
            $template->display($context);
            // line 72
            echo "\t\t\t";
        }
        // line 73
        echo "\t\t</div>
\t\t<div class=\"col-md-4 two-col-side\">
\t\t\t";
        // line 75
        if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
        if (twig_in_filter("alias", $this->getAttribute($_type_, "basicFields"))) {
            // line 76
            echo "\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t  <div class=\"panel-heading\">URL路径</div>
\t\t\t\t  <div class=\"panel-body\">
\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t  \t<div class=\"controls\">
\t\t\t\t\t\t\t  <input class=\"form-control\" type=\"text\" name=\"alias\" value=\"";
            // line 81
            if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
            echo $this->env->getExtension('topxia_html_twig')->fieldValue($_content_, "alias");
            echo "\" data-url=\"";
            if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_content_alias_check", array("that" => (($this->getAttribute($_content_, "alias", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_content_, "alias"), "")) : ("")))), "html", null, true);
            echo "\">
\t\t\t\t\t  \t</div>
\t\t\t\t\t  </div>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 87
        echo "
\t\t\t";
        // line 88
        if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
        if (twig_in_filter("categoryId", $this->getAttribute($_type_, "basicFields"))) {
            // line 89
            echo "\t\t\t\t<div class=\"panel\">
\t\t\t\t  <div class=\"panel-heading\">分类</div>
\t\t\t\t  <select name=\"categoryId\">
\t\t\t\t  \t";
            // line 92
            if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
            echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getCategoryChoices("default"), $this->env->getExtension('topxia_html_twig')->fieldValue($_content_, "categoryId"), "请选择分类");
            echo "
\t\t\t\t  </select>
\t\t\t\t</div>
\t\t\t";
        }
        // line 96
        echo "
\t\t\t";
        // line 97
        if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
        if (twig_in_filter("tagIds", $this->getAttribute($_type_, "basicFields"))) {
            // line 98
            echo "\t\t\t\t<div class=\"panel\">
\t\t\t\t  <div class=\"panel-heading\">标签</div>
\t\t\t\t  <div class=\"form-group\">
\t\t\t\t  \t<div class=\"controls\" style=\"width:100%;\">
\t\t\t\t\t\t  <input class=\"width-full\" id=\"content-tags-field\" type=\"text\" name=\"tags\" value=\"";
            // line 102
            if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->tagsJoinFilter($this->env->getExtension('topxia_html_twig')->fieldValue($_content_, "tagIds")), "html", null, true);
            echo "\">
\t\t\t\t  \t</div>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 107
        echo "
\t\t\t";
        // line 108
        if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
        if (twig_in_filter("template", $this->getAttribute($_type_, "basicFields"))) {
            // line 109
            echo "\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t  <div class=\"panel-heading\">模版</div>
\t\t\t\t  <div class=\"panel-body\">
\t\t\t\t\t  ";
            // line 112
            $context["templates"] = array("default" => "默认模版", "customize" => "自定义模版");
            // line 113
            echo "\t\t\t\t\t  ";
            $context["templates"] = array("default" => "默认模版");
            // line 114
            echo "\t\t\t\t\t  <select class=\"form-control\" name=\"template\">
\t\t\t\t\t  \t";
            // line 115
            if (isset($context["templates"])) { $_templates_ = $context["templates"]; } else { $_templates_ = null; }
            if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
            echo $this->env->getExtension('topxia_html_twig')->selectOptions($_templates_, $this->env->getExtension('topxia_html_twig')->fieldValue($_content_, "template"));
            echo "
\t\t\t\t\t  </select>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 120
        echo "
\t\t\t<input type=\"hidden\" name=\"publishedTime\" value=\"";
        // line 121
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->env->getExtension('topxia_html_twig')->fieldValue($_content_, "publishedTime", $this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request"), "server"), "get", array(0 => "REQUEST_TIME"), "method")), "Y-m-d H:i:s"), "html", null, true);
        echo "\">

\t\t\t";
        // line 161
        echo "\t\t\t

\t\t</div>
\t</div>
\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>

<script> app.load('content/content-modal') </script>

";
    }

    // line 172
    public function block_footer($context, array $blocks = array())
    {
        // line 173
        echo "
    <button type=\"button\" class=\"btn btn-link\" data-dismiss=\"modal\">取消</button>
    <button id=\"content-save-btn\" type=\"submit\" class=\"btn btn-primary\" data-toggle=\"form-submit\" data-target=\"#content-form\" data-loading-text=\"正在保存...\">保存</button>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Content:content-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  316 => 173,  313 => 172,  303 => 165,  297 => 161,  290 => 121,  287 => 120,  277 => 115,  274 => 114,  271 => 113,  269 => 112,  264 => 109,  261 => 108,  258 => 107,  249 => 102,  243 => 98,  240 => 97,  237 => 96,  229 => 92,  224 => 89,  221 => 88,  218 => 87,  205 => 81,  198 => 76,  195 => 75,  191 => 73,  188 => 72,  183 => 71,  180 => 70,  177 => 69,  169 => 65,  165 => 63,  161 => 62,  157 => 60,  154 => 59,  145 => 54,  141 => 52,  137 => 50,  134 => 49,  129 => 46,  126 => 45,  120 => 41,  115 => 40,  110 => 37,  106 => 36,  102 => 34,  99 => 33,  92 => 28,  84 => 24,  79 => 21,  76 => 20,  71 => 17,  64 => 15,  57 => 13,  54 => 12,  50 => 10,  47 => 9,  44 => 8,  41 => 7,  34 => 6,  29 => 178,  27 => 3,);
    }
}
