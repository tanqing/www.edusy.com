<?php

/* TopxiaAdminBundle:ArticleCategory:modal.html.twig */
class __TwigTemplate_168bb016b487af9a9bb9164ebd0dd64b extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
        if ($this->getAttribute($_category_, "id")) {
            echo "编辑栏目";
        } else {
            echo "添加栏目";
        }
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "\t<form id=\"category-form\" class=\"form-horizontal\" action=\"";
        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
        if ($this->getAttribute($_category_, "id")) {
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_article_category_edit", array("id" => $this->getAttribute($_category_, "id"))), "html", null, true);
        } else {
            echo $this->env->getExtension('routing')->getPath("admin_article_category_create");
        }
        echo "\" method=\"post\">
\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-md-2 control-label\" for=\"category-name-field\">栏目名称</label>
\t\t\t<div class=\"col-md-8 controls\">
\t\t\t\t<input class=\"form-control\" id=\"category-name-field\" type=\"text\" name=\"name\" value=\"";
        // line 11
        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_category_, "name"), "html", null, true);
        echo "\" tabindex=\"1\">
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-md-2 control-label\" for=\"category-code-field\">栏目编码</label>
\t\t\t<div class=\"col-md-8 controls\">
\t\t\t\t<input class=\"form-control\" id=\"category-code-field\" type=\"text\" name=\"code\" value=\"";
        // line 18
        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_category_, "code"), "html", null, true);
        echo "\" data-url=\"";
        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_article_category_checkcode", array("exclude" => $this->getAttribute($_category_, "code"))), "html", null, true);
        echo "\" tabindex=\"2\">
\t\t\t\t<div class=\"help-block\">生成列表、资讯时使用，例如news、bbs等</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-md-2 control-label\" for=\"category-parentId-field\">父栏目</label>
\t\t\t<div class=\"col-md-8 controls\">
\t\t\t\t<select class=\"form-control\" id=\"category-parentId-field\" type=\"text\" name=\"parentId\" tabindex=\"2\" data-url=\"";
        // line 26
        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_article_category_checkparentid", array("currentId" => $this->getAttribute($_category_, "id"))), "html", null, true);
        echo "\">
\t\t\t\t\t<option value=0>选择栏目</option>
\t\t\t\t\t";
        // line 28
        if (isset($context["categoryTree"])) { $_categoryTree_ = $context["categoryTree"]; } else { $_categoryTree_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_categoryTree_);
        foreach ($context['_seq'] as $context["_key"] => $context["tree"]) {
            // line 29
            echo "\t\t\t\t\t<option value=\"";
            if (isset($context["tree"])) { $_tree_ = $context["tree"]; } else { $_tree_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_tree_, "id"), "html", null, true);
            echo "\" ";
            if (isset($context["tree"])) { $_tree_ = $context["tree"]; } else { $_tree_ = null; }
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            if (($this->getAttribute($_tree_, "id") == $this->getAttribute($_category_, "parentId"))) {
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
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tree'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "\t\t\t\t</select>
\t\t\t</div>\t\t
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-md-2 control-label\" for=\"category-weight-field\">显示顺序号</label>
\t\t\t<div class=\"col-md-8 controls\">
\t\t\t\t<input class=\"form-control\" id=\"category-weight-field\" type=\"text\" name=\"weight\" value=\"";
        // line 38
        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_category_, "weight"), "html", null, true);
        echo "\" tabindex=\"3\">
\t\t\t\t<div class=\"help-block\">自然数，数字越小，位置越前</div>
\t\t\t</div>
\t\t</div>

\t\t<div style=\"display:none;\" class=\"form-group\">
\t\t\t<label class=\"col-md-2 control-label\" for=\"category-publishArticle-field\">允许发布资讯</label>
\t\t\t<div class=\"controls radios col-md-8\"><label>
\t\t\t\t\t<input  id=\"category-publishArticle-field\" type=\"radio\" name=\"publishArticle\" tabindex=\"0\" value=1 ";
        // line 46
        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
        if (($this->getAttribute($_category_, "publishArticle") == 1)) {
            echo "checked";
        }
        echo ">是</label>
\t\t\t\t<label>
\t\t\t\t\t<input  id=\"category-publishArticle-field\" type=\"radio\" name=\"publishArticle\" tabindex=\"0\" value=0 ";
        // line 48
        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
        if (($this->getAttribute($_category_, "publishArticle") != 1)) {
            echo "checked";
        }
        echo ">否
\t\t\t\t</label>\t
\t\t\t\t
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-md-2 control-label\" for=\"category-seoTitle-field\">SEO标题</label>
\t\t\t<div class=\"col-md-8 controls\">
\t\t\t\t<input class=\"form-control\" id=\"category-seoTitle-field\" type=\"text\" name=\"seoTitle\" value=\"";
        // line 57
        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_category_, "seoTitle"), "html", null, true);
        echo "\" tabindex=\"4\">
\t\t\t\t<div class=\"help-block\"></div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-md-2 control-label\" for=\"category-seoKeyword-field\">SEO关键字</label>
\t\t\t<div class=\"col-md-8 controls\">
\t\t\t\t<input class=\"form-control\" id=\"category-seoKeyword-field\" type=\"text\" name=\"seoKeyword\" value=\"";
        // line 65
        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_category_, "seoKeyword"), "html", null, true);
        echo "\" tabindex=\"4\">
\t\t\t\t<div class=\"help-block\"></div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-md-2 control-label\" for=\"category-seoDesc-field\">SEO描述</label>
\t\t\t<div class=\"col-md-8 controls\">
\t\t\t\t<input class=\"form-control\" id=\"category-seoDesc-field\" type=\"text\" name=\"seoDesc\" value=\"";
        // line 73
        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_category_, "seoDesc"), "html", null, true);
        echo "\" tabindex=\"4\">
\t\t\t\t<div class=\"help-block\"></div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-md-2 control-label\" for=\"category-published-field\">启用</label>
\t\t\t<div class=\"controls radios col-md-8\">
\t\t\t\t<label><input id=\"category-published-field\" type=\"radio\" name=\"published\" tabindex=\"0\" value=1 ";
        // line 81
        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
        if (($this->getAttribute($_category_, "published") == 1)) {
            echo "checked";
        }
        echo ">是</label>
\t\t\t\t<label><input id=\"category-published-field\" type=\"radio\" name=\"published\" tabindex=\"0\" value=0 ";
        // line 82
        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
        if (($this->getAttribute($_category_, "published") != 1)) {
            echo "checked";
        }
        echo ">否</label>
\t\t\t\t<div class=\"help-block\">建议等栏目内容整理编辑完毕后再启用</div>
\t\t\t</div>
\t\t</div>
\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->renderCsrfToken("site"), "html", null, true);
        echo "\">
\t</form>
\t
\t<script type=\"text/javascript\"> app.load('article/category/save-modal') </script>
";
    }

    // line 92
    public function block_footer($context, array $blocks = array())
    {
        // line 93
        echo "\t";
        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
        if ($this->getAttribute($_category_, "id")) {
            // line 94
            echo "\t\t<button type=\"button\" class=\"btn btn-default pull-left delete-category\" data-url=\"";
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_article_category_delete", array("id" => $this->getAttribute($_category_, "id"))), "html", null, true);
            echo "\" tabindex=\"5\"><i class=\"glyphicon glyphicon-trash\"></i> 删除</button>
\t";
        } else {
            // line 96
            echo "
\t";
        }
        // line 98
        echo "  \t<button type=\"button\" class=\"btn btn-link\" data-dismiss=\"modal\" tabindex=\"6\">取消</button>
\t<button id=\"category-save-btn\" data-submiting-text=\"正在提交\" type=\"submit\" class=\"btn btn-primary\" data-toggle=\"form-submit\" data-target=\"#category-form\" tabindex=\"4\">保存</button>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:ArticleCategory:modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 98,  246 => 96,  239 => 94,  235 => 93,  232 => 92,  223 => 86,  213 => 82,  206 => 81,  194 => 73,  182 => 65,  170 => 57,  155 => 48,  147 => 46,  135 => 38,  126 => 31,  97 => 29,  92 => 28,  86 => 26,  71 => 18,  60 => 11,  46 => 7,  43 => 6,  32 => 4,  27 => 3,);
    }
}
