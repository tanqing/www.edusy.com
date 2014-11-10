<?php

/* TopxiaWebBundle:CourseManage:picture-crop.html.twig */
class __TwigTemplate_a7271f192e692cb6ee00d3e9c60b7fe2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaWebBundle:CourseManage:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:CourseManage:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["side_nav"] = "picture";
        // line 6
        $context["script_controller"] = "course-manage/picture-crop";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "课程图片 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "
<div class=\"panel panel-default panel-col\">
  <div class=\"panel-heading\">
    课程图片
  </div>

  <div class=\"panel-body\">
    <form id=\"course-picture-crop-form\" method=\"post\" enctype=\"multipart/form-data\">
      ";
        // line 16
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "flash_messages", array(), "method"), "html", null, true);
        echo "

      <div class=\"form-group clearfix\">
        <div class=\"col-md-offset-2 col-md-8 controls\">
          <img src=\"";
        // line 20
        if (isset($context["pictureUrl"])) { $_pictureUrl_ = $context["pictureUrl"]; } else { $_pictureUrl_ = null; }
        echo twig_escape_filter($this->env, $_pictureUrl_, "html", null, true);
        echo "\" id=\"course-picture-crop\" width=\"";
        if (isset($context["scaledSize"])) { $_scaledSize_ = $context["scaledSize"]; } else { $_scaledSize_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_scaledSize_, "width"), "html", null, true);
        echo "\" height=\"";
        if (isset($context["scaledSize"])) { $_scaledSize_ = $context["scaledSize"]; } else { $_scaledSize_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_scaledSize_, "height"), "html", null, true);
        echo "\" data-natural-width=\"";
        if (isset($context["naturalSize"])) { $_naturalSize_ = $context["naturalSize"]; } else { $_naturalSize_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_naturalSize_, "width"), "html", null, true);
        echo "\" data-natural-height=\"";
        if (isset($context["naturalSize"])) { $_naturalSize_ = $context["naturalSize"]; } else { $_naturalSize_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_naturalSize_, "height"), "html", null, true);
        echo "\" />
          <div class=\"help-block\">提示：请选择图片裁剪区域。</div>
        </div>
      </div>

      <div class=\"form-group clearfix\">
        <div class=\"col-md-offset-2 col-md-8 controls\">
          <input type=\"hidden\" name=\"x\">
          <input type=\"hidden\" name=\"y\">
          <input type=\"hidden\" name=\"width\">
          <input type=\"hidden\" name=\"height\">
          <button class=\"btn btn-fat btn-primary\" id=\"upload-picture-btn\" type=\"submit\">保存</button>
          <a href=\"javascript:;\" class=\"go-back btn btn-link\">重新选择图片</a>
        </div>
      </div>

      <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->renderCsrfToken("site"), "html", null, true);
        echo "\">
      
    </form>

  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseManage:picture-crop.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 36,  61 => 20,  53 => 16,  43 => 8,  40 => 7,  33 => 3,  28 => 6,  26 => 5,);
    }
}
