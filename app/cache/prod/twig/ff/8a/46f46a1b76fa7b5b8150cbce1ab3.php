<?php

/* TopxiaAdminBundle:Article:setting.html.twig */
class __TwigTemplate_ff8a46f46a1b76fa7b5b8150cbce1ab3 extends Twig_Template
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
        // line 5
        $context["menu"] = "setting";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "资讯频道设置 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "
<div class=\"page-header clearfix\">
  <h1 class=\"pull-left\">资讯频道设置</h1>
</div>

";
        // line 13
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "flash_messages", array(), "method"), "html", null, true);
        echo "

  <form class=\"form-horizontal\" id=\"article-form\" method=\"post\">
    
    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"name\">频道名称</label>
      </div>
      <div class=\"col-md-8 controls\">
        <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\" value=\"";
        // line 22
        if (isset($context["articleSetting"])) { $_articleSetting_ = $context["articleSetting"]; } else { $_articleSetting_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_articleSetting_, "name"), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"pageNums\">列表每页资讯数</label> 
      </div>
      <div class=\"col-md-8 controls\">
        <input type=\"text\" id=\"pageNums\" name=\"pageNums\" class=\"form-control\" value=\"";
        // line 31
        if (isset($context["articleSetting"])) { $_articleSetting_ = $context["articleSetting"]; } else { $_articleSetting_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_articleSetting_, "pageNums"), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\"></div>
      <div class=\"controls col-md-8\">
        <button type=\"submit\" class=\"btn btn-primary\">提交</button>  
      </div>
    </div>

    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->renderCsrfToken("site"), "html", null, true);
        echo "\">
  </form>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Article:setting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 42,  74 => 31,  61 => 22,  48 => 13,  41 => 8,  38 => 7,  31 => 3,  26 => 5,);
    }
}
