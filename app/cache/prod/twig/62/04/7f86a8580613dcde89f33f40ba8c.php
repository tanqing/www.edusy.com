<?php

/* TopxiaAdminBundle:Article:article-modal.html.twig */
class __TwigTemplate_62047f86a8580613dcde89f33f40ba8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaAdminBundle:Content:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle:Content:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["modal_size"] = "xlarge";
        // line 5
        $context["menu"] = "article";
        // line 11
        $context["script_controller"] = "article/article-modal";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        // line 8
        echo "\t资讯管理>>";
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        if (((array_key_exists("article", $context)) ? (_twig_default_filter($_article_, null)) : (null))) {
            echo "编辑";
        } else {
            echo "添加";
        }
        echo "资讯 - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 13
    public function block_main($context, array $blocks = array())
    {
        // line 14
        echo "
<style>
  #article-form .popover {
  \tmax-width: 400px;
  \twidth: 400px;
  }\t

</style>

";
        // line 23
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        $context["article"] = ((array_key_exists("article", $context)) ? (_twig_default_filter($_article_, null)) : (null));
        // line 24
        echo "
<div class=\"page-header clearfix\">
 \t<h1 class=\"pull-left\">";
        // line 26
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        if (((array_key_exists("article", $context)) ? (_twig_default_filter($_article_, null)) : (null))) {
            echo "编辑";
        } else {
            echo "添加";
        }
        echo "资讯</h1>
</div>

<form class=\"two-col-form\" id=\"article-form\" method=\"post\" enctype=\"multipart/form-data\"
\t";
        // line 30
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        if ($_article_) {
            // line 31
            echo "\t\taction=\"";
            if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_article_edit", array("id" => $this->getAttribute($_article_, "id"))), "html", null, true);
            echo "\"
\t";
        } else {
            // line 33
            echo "\t\taction=\"";
            echo $this->env->getExtension('routing')->getPath("admin_article_create");
            echo "\"
\t";
        }
        // line 35
        echo "\t>
\t<div class=\"row\">
\t\t<div class=\"col-md-8\">
\t\t\t<div class=\"form-group\">
\t\t\t  <label for=\"article-title-field\" class=\"control-label\">资讯标题</label>
\t\t\t  <div class=\"controls\">
\t\t\t  \t<input class=\"form-control\" id=\"article-title-field\" type=\"text\" name=\"title\" value=\"";
        // line 41
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($_article_, "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_article_, "title"), "")) : ("")), "html", null, true);
        echo "\">
\t\t\t  </div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"form-group\">
\t\t\t  <label for=\"categoryId\" class=\"control-label\">所属栏目</label>
\t\t\t   <div class=\"controls\">
\t\t\t\t  <select class=\"form-control\" id=\"categoryId\" type=\"text\" name=\"categoryId\" tabindex=\"2\">
\t\t\t\t\t  ";
        // line 49
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        if ($_article_) {
        } else {
            echo "<option value=\"\">-选择所属栏目-</option>";
        }
        // line 50
        echo "\t\t\t\t\t\t";
        if (isset($context["categoryTree"])) { $_categoryTree_ = $context["categoryTree"]; } else { $_categoryTree_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_categoryTree_);
        foreach ($context['_seq'] as $context["_key"] => $context["tree"]) {
            // line 51
            echo "\t\t\t\t\t\t\t<option value=";
            if (isset($context["tree"])) { $_tree_ = $context["tree"]; } else { $_tree_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_tree_, "id"), "html", null, true);
            echo " ";
            if (isset($context["tree"])) { $_tree_ = $context["tree"]; } else { $_tree_ = null; }
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            if (($this->getAttribute($_tree_, "id") == $this->getAttribute($_category_, "id"))) {
                echo "selected";
            }
            echo ">";
            if (isset($context["tree"])) { $_tree_ = $context["tree"]; } else { $_tree_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (($this->getAttribute($_tree_, "depth") - 1) * 2)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                echo "&nbsp;&nbsp;&nbsp;&nbsp;";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "└─ ";
            if (isset($context["tree"])) { $_tree_ = $context["tree"]; } else { $_tree_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_tree_, "name"), "html", null, true);
            echo "</option>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tree'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "\t\t      </select>
\t\t\t   </div>
\t\t\t</div>

\t\t\t<div class=\"form-group\">
\t      <label for=\"article-tagIds\"　class=\"control-label\">TAG标签</label>
\t\t\t  <div class=\"controls\">
\t\t\t\t  \t<input type=\"form-control\" id=\"article-tags\" name=\"tags\" required=\"required\" class=\"width-full select2-offscreen\" tabindex=\"-1\" value=\"";
        // line 60
        if (isset($context["tagNames"])) { $_tagNames_ = $context["tagNames"]; } else { $_tagNames_ = null; }
        echo twig_escape_filter($this->env, twig_join_filter(((array_key_exists("tagNames", $context)) ? (_twig_default_filter($_tagNames_, array())) : (array())), ","), "html", null, true);
        echo "\" data-match-url=\"";
        echo $this->env->getExtension('routing')->getPath("tag_match");
        echo "\">
\t\t\t\t  \t<div class=\"help-block\" style=\"display:none;\"></div>
\t\t\t  </div>
\t\t\t</div>

\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"richeditor-body-field\" class=\"control-label\">正文</label>
\t\t\t\t<div class=\"controls\">
\t\t\t\t\t<textarea class=\"form-control\" id=\"richeditor-body-field\" rows=\"16\" name=\"body\">";
        // line 68
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($_article_, "body", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_article_, "body"), "")) : ("")), "html", null, true);
        echo "</textarea>
\t\t\t\t</div>
\t\t\t</div>
\t\t
\t\t</div>
\t\t<div class=\"col-md-4\">

\t\t\t<div class=\"panel panel-default\">
\t\t\t\t<div class=\"panel-heading\">资讯属性</div>

\t\t\t\t<div class=\"panel-body\">
\t\t\t\t  <label class=\"checkbox-inline\">
\t\t\t\t\t\t<input type=\"checkbox\" name=\"sticky\" value=\"1\" ";
        // line 80
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        if ($this->env->getExtension('topxia_html_twig')->fieldValue($_article_, "sticky")) {
            echo " checked=\"checked\" ";
        }
        echo "> 置顶
\t\t\t\t\t</label>
\t\t\t\t\t<label class=\"checkbox-inline\">
\t\t\t\t\t\t<input type=\"checkbox\" name=\"featured\" value=\"1\" ";
        // line 83
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        if ($this->env->getExtension('topxia_html_twig')->fieldValue($_article_, "featured")) {
            echo " checked=\"checked\" ";
        }
        echo "> 头条  
\t\t\t\t\t</label>
\t\t\t\t\t<label class=\"checkbox-inline\">
\t\t\t\t\t\t<input type=\"checkbox\" name=\"promoted\" value=\"1\" ";
        // line 86
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        if ($this->env->getExtension('topxia_html_twig')->fieldValue($_article_, "promoted")) {
            echo " checked=\"checked\" ";
        }
        echo "> 推荐  
\t\t\t\t\t</label>
\t\t\t\t\t<a class=\"glyphicon glyphicon-question-sign text-muted pull-right\" id=\"article-property-tips\" data-toggle=\"tooltip\" data-placement=\"bottom\" href=\"javascript:\" title=\"\">
\t\t\t\t\t</a>
\t\t\t\t\t<div id=\"article-property-tips-html\" style=\"display:none;\">

\t\t\t\t\t\t<p>设为“<strong>置顶</strong>”后，该资讯将会显示在列表的最前面。</p>
\t\t\t\t\t\t<p>设为“<strong>头条</strong>”后，如果正文含有图片，则该资讯的第一张图片将显示在资讯首页的头条图片区，图片尺寸建议统一为：720*400。</p>
\t\t\t\t\t\t<p>设为“<strong>推荐</strong>”后，该资讯将会显示在页面右侧的推荐资讯中。</p>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"panel panel-default\">
\t\t\t\t<div class=\"panel-heading\">来源设置</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t  <div class=\"form-group\">
\t\t\t\t    <label for=\"article-source-field\">来源名称</label>
\t\t\t\t    <div class=\"controls\">
\t\t\t\t      <input class=\"form-control\" id=\"article-source-field\" type=\"text\" name=\"source\" value=\"";
        // line 106
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->fieldValue($_article_, "source");
        echo "\">
\t\t\t\t    </div>
\t\t\t\t  </div>

\t\t\t\t  <div class=\"form-group\">
\t\t\t      <label for=\"article-sourceUrl-field\">来源地址</label>
\t\t\t\t    <div class=\"controls\">
\t\t\t\t      <input class=\"form-control\" id=\"article-sourceUrl-field\" type=\"text\" name=\"sourceUrl\" value=\"";
        // line 113
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->fieldValue($_article_, "sourceUrl");
        echo "\">
\t\t\t\t    </div>
\t\t\t\t  </div>

\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"panel panel-default\">
\t\t\t\t<div class=\"panel-heading\">设置缩略图</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t<div id=\"article-thumb-container\">
\t\t\t\t\t  ";
        // line 124
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        if ((($this->getAttribute($_article_, "thumb", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_article_, "thumb"), null)) : (null))) {
            // line 125
            echo "\t\t\t\t\t\t  <img src='";
            if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFileUrl($this->getAttribute($_article_, "thumb")), "html", null, true);
            echo "'>
\t\t\t\t\t  ";
        }
        // line 127
        echo "\t\t\t\t   </div>
\t\t\t\t   <br>
\t\t\t\t\t<a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
        // line 129
        echo $this->env->getExtension('routing')->getPath("admin_article_show_upload");
        echo "\" class=\"btn btn-default\">上传</a>
\t\t\t\t\t<a id=\"article_thumb_remove\"  class=\"btn btn-default\" data-url=\"";
        // line 130
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_article_thumb_remove", array("id" => (($this->getAttribute($_article_, "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_article_, "id"), 0)) : (0)))), "html", null, true);
        echo "\" ";
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        if ((!(($this->getAttribute($_article_, "thumb", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_article_, "thumb"), null)) : (null)))) {
            echo "style=\"display:none;\" ";
        }
        echo ">删除</a>
\t\t\t\t\t<input type=\"hidden\" name=\"thumb\" value=\"";
        // line 131
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($_article_, "thumb", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_article_, "thumb"))) : ("")), "html", null, true);
        echo "\" id=\"article-thumb\">
\t\t\t\t\t<input type=\"hidden\" name=\"originalThumb\" value=\"";
        // line 132
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($_article_, "originalThumb", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_article_, "originalThumb"))) : ("")), "html", null, true);
        echo "\" id=\"article-originalThumb\">
\t\t\t\t\t<p class=\"help-block\">请上传png, gif, jpg格式的图片文件。</p>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"panel panel-default\">
\t\t\t\t<div class=\"panel-heading\">发布时间</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"publishedTime\" value=\" ";
        // line 142
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->env->getExtension('topxia_html_twig')->fieldValue($_article_, "publishedTime", $this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request"), "server"), "get", array(0 => "REQUEST_TIME"), "method")), "Y-m-d H:i:s"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<div class=\"help-block\">内容条目默认按发布时间的倒序显示</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->renderCsrfToken("site"), "html", null, true);
        echo "\">
\t    <button id=\"article-operate-save\" class=\"btn btn-primary\" data-toggle=\"form-submit\" data-loading-text=\"正在保存...\">确定</button>
\t\t\t<a class=\"btn btn-link\" href=\"";
        // line 155
        echo $this->env->getExtension('routing')->getPath("admin_article");
        echo "\">返回</a>
\t\t</div>\t\t

\t</div>

</form>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Article:article-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  339 => 155,  334 => 153,  318 => 142,  304 => 132,  299 => 131,  289 => 130,  285 => 129,  281 => 127,  274 => 125,  271 => 124,  256 => 113,  245 => 106,  219 => 86,  210 => 83,  201 => 80,  185 => 68,  171 => 60,  162 => 53,  133 => 51,  127 => 50,  121 => 49,  109 => 41,  101 => 35,  95 => 33,  88 => 31,  85 => 30,  73 => 26,  69 => 24,  66 => 23,  55 => 14,  52 => 13,  38 => 8,  35 => 7,  30 => 11,  28 => 5,  26 => 3,);
    }
}
