<?php

/* TopxiaAdminBundle:Category:modal.html.twig */
class __TwigTemplate_d7d26e57d4358f44690eda845f88007c extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
        if ($this->getAttribute($_category_, "id")) {
            echo "编辑分类";
        } else {
            echo "添加分类";
        }
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<div id=\"category-creater-widget\" data-upload-url=\"";
        echo $this->env->getExtension('routing')->getPath("admin_category_upload");
        echo "\">

\t<form id=\"category-form\" class=\"form-horizontal\" action=\"";
        // line 8
        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
        if ($this->getAttribute($_category_, "id")) {
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_category_edit", array("id" => $this->getAttribute($_category_, "id"))), "html", null, true);
        } else {
            echo $this->env->getExtension('routing')->getPath("admin_category_create");
        }
        echo "\" method=\"post\">
\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-md-2 control-label\" for=\"category-name-field\">名称</label>
\t\t\t<div class=\"col-md-8 controls\">
\t\t\t\t<input class=\"form-control\" id=\"category-name-field\" type=\"text\" name=\"name\" value=\"";
        // line 12
        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_category_, "name"), "html", null, true);
        echo "\" tabindex=\"1\">
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-md-2 control-label\" for=\"category-weight-field\">显示序号</label>
\t\t\t<div class=\"col-md-8 controls\">
\t\t\t\t<input class=\"form-control\" id=\"category-weight-field\" type=\"text\" name=\"weight\" value=\"";
        // line 19
        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_category_, "weight"), "html", null, true);
        echo "\" tabindex=\"2\">
\t\t\t\t<div class=\"help-block\">显示序号需为整数，分类按序号的顺序从小到大排序。</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-md-2 control-label\" for=\"category-code-field\">编码</label>
\t\t\t<div class=\"col-md-8 controls\">
\t\t\t\t<input class=\"form-control\" id=\"category-code-field\" type=\"text\" name=\"code\" value=\"";
        // line 27
        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_category_, "code"), "html", null, true);
        echo "\" data-url=\"";
        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_category_checkcode", array("exclude" => $this->getAttribute($_category_, "code"))), "html", null, true);
        echo "\" tabindex=\"3\">
\t\t\t\t<div class=\"help-block\">必填，建议使用分类名称的英文单词或缩写作为编码。</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-md-2 control-label\" for=\"category-description-field\">分类描述</label>
\t\t\t<div class=\"col-md-8 controls\">
\t\t\t\t<textarea class=\"form-control\" id=\"category-description-field\" style=\"height:100px;\" name=\"description\">";
        // line 35
        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_category_, "description"), "html", null, true);
        echo "</textarea>
\t\t\t\t<div class=\"help-block\">非必填</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group\" style=\"display:none;\">
\t\t\t<label class=\"col-md-2 control-label\" for=\"category-code-field\">图标</label>
\t\t\t<div class=\"col-md-8 controls\">
\t\t\t\t<div id=\"category-icon-field\">
\t\t\t\t\t";
        // line 44
        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
        if ($this->getAttribute($_category_, "icon")) {
            // line 45
            echo "\t\t\t\t\t\t<img class=\"mbm\" src=\"";
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_category_, "icon"), "html", null, true);
            echo "\">
\t\t\t\t\t";
        }
        // line 47
        echo "\t\t\t\t</div>
\t\t\t\t<input type=\"hidden\" name=\"icon\" value=\"";
        // line 48
        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_category_, "icon"), "html", null, true);
        echo "\">
\t\t\t\t<button id=\"category-icon-uploader\" class=\"btn btn-sm btn-default webuploader-container\" type=\"button\" data-target=\"#category-icon-field\"><i class=\"glyphicon glyphicon-picture\"></i></button>
\t\t\t\t<button ";
        // line 50
        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
        if ((!$this->getAttribute($_category_, "icon"))) {
            echo "style=\"display:none;\"";
        }
        echo " id=\"category-icon-delete\" class=\"btn btn-sm btn-default webuploader-container\" type=\"button\"><i class=\"glyphicon glyphicon-trash\"></i></button>
\t\t\t\t<div class=\"help-block\">允许上传的图标文件格式为jpg, jpeg, gif, png</div>
\t\t\t</div>
\t\t</div>

\t\t<input type=\"hidden\" name=\"groupId\" value=\"";
        // line 55
        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_category_, "groupId"), "html", null, true);
        echo "\">
\t\t<input type=\"hidden\" name=\"parentId\" value=\"";
        // line 56
        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_category_, "parentId"), "html", null, true);
        echo "\">
\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->renderCsrfToken("site"), "html", null, true);
        echo "\">
\t</form>
</div>
<script type=\"text/javascript\"> app.load('category/save-modal') </script>
";
    }

    // line 63
    public function block_footer($context, array $blocks = array())
    {
        // line 64
        echo "\t";
        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
        if ($this->getAttribute($_category_, "id")) {
            // line 65
            echo "\t\t<button type=\"button\" class=\"btn btn-default pull-left delete-category\" data-url=\"";
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_category_delete", array("id" => $this->getAttribute($_category_, "id"))), "html", null, true);
            echo "\" tabindex=\"5\"><i class=\"glyphicon glyphicon-trash\"></i> 删除</button>
\t";
        } else {
            // line 67
            echo "
\t";
        }
        // line 69
        echo "  \t<button type=\"button\" class=\"btn btn-link\" data-dismiss=\"modal\" tabindex=\"6\">取消</button>
\t<button id=\"category-create-btn\" data-submiting-text=\"正在提交\" type=\"submit\" class=\"btn btn-primary\" data-toggle=\"form-submit\" data-target=\"#category-form\" tabindex=\"4\">保存</button>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Category:modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 69,  177 => 67,  170 => 65,  166 => 64,  163 => 63,  154 => 57,  149 => 56,  144 => 55,  133 => 50,  127 => 48,  124 => 47,  117 => 45,  114 => 44,  101 => 35,  86 => 27,  74 => 19,  63 => 12,  50 => 8,  44 => 6,  41 => 5,  30 => 3,);
    }
}
