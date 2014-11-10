<?php

/* TopxiaAdminBundle:Tag:tag-modal.html.twig */
class __TwigTemplate_05621c7272b5cd9bdefcbb690923b39b extends Twig_Template
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
        // line 2
        if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
        $context["tag"] = ((array_key_exists("tag", $context)) ? (_twig_default_filter($_tag_, null)) : (null));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        // line 5
        if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
        if ($this->getAttribute($_tag_, "id")) {
            echo "编辑";
        } else {
            echo "新增";
        }
        echo "标签
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "  <form class=\"form-horizontal\" id=\"tag-form\" action=\"";
        if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
        if ($this->getAttribute($_tag_, "id")) {
            if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_tag_update", array("id" => $this->getAttribute($_tag_, "id"))), "html", null, true);
        } else {
            echo $this->env->getExtension('routing')->getPath("admin_tag_create");
        }
        echo "\" method=\"post\">
    <div class=\"form-group\">
      <label class=\"col-md-3 control-label\" for=\"tag-name-field\">标签名称</label>
      <div class=\"col-md-6 controls\">
        <input class=\"form-control\" id=\"tag-name-field\" type=\"text\" name=\"name\" value=\"";
        // line 12
        if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_tag_, "name"), "html", null, true);
        echo "\" data-url=\"";
        if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_tag_checkname", array("exclude" => $this->getAttribute($_tag_, "name"))), "html", null, true);
        echo "\">
      </div>
    </div>
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->renderCsrfToken("site"), "html", null, true);
        echo "\">
  </form>
  <script type=\"text/javascript\">app.load('tag/save-modal')</script>
";
    }

    // line 20
    public function block_footer($context, array $blocks = array())
    {
        // line 21
        echo "  ";
        if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
        if ($this->getAttribute($_tag_, "id")) {
            // line 22
            echo "    <button class=\"btn btn-default pull-left delete-tag\" data-url=\"";
            if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_tag_delete", array("id" => $this->getAttribute($_tag_, "id"))), "html", null, true);
            echo "\" data-target=\"";
            if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_tag_, "id"), "html", null, true);
            echo "\" data-tag-id=\"";
            if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_tag_, "id"), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-trash\"></i> 删除</button>
  ";
        }
        // line 24
        echo "
  <button type=\"button\" class=\"btn btn-link\" data-dismiss=\"modal\">取消</button>
  <button id=\"tag-create-btn\" data-submiting-text=\"正在提交\" type=\"submit\" class=\"btn btn-primary\" data-toggle=\"form-submit\" data-target=\"#tag-form\">保存</button>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Tag:tag-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 24,  89 => 22,  85 => 21,  82 => 20,  74 => 15,  64 => 12,  50 => 8,  47 => 7,  36 => 5,  33 => 4,  27 => 2,);
    }
}
