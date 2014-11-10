<?php

/* TopxiaAdminBundle:System:questions-setting.html.twig */
class __TwigTemplate_89a51662bd96a020fa2a7154098c3ad9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaAdminBundle:System:operation.layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'maincontent' => array($this, 'block_maincontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle:System:operation.layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["submenu"] = "questions_setting";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "题库设置 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_maincontent($context, array $blocks = array())
    {
        // line 8
        echo "\t<div class=\"page-header\"><h1>考试设置</h1></div>

";
        // line 10
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "flash_messages", array(), "method"), "html", null, true);
        echo "

<form class=\"form-horizontal\" method=\"post\" id=\"course-form\" novalidate>

<fieldset>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label>交卷后答案以及解析的显示</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 20
        echo $this->env->getExtension('topxia_html_twig')->radios("testpaper_answers_show_mode", array("hide" => "不显示", "reviewed" => "全部批阅完成后一起显示", "submitted" => "客观题自动批阅完后先显示答案解析"), $this->env->getExtension('topxia_web_twig')->getSetting("questions.testpaper_answers_show_mode", "submitted"));
        echo "
      </div>
    </div>
</fieldset>

  <div class=\"form-group\">
    <div class=\"controls col-md-offset-3 col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">提交</button>
    </div>
  </div>
  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->renderCsrfToken("site"), "html", null, true);
        echo "\">

</form>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:questions-setting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 30,  59 => 20,  45 => 10,  41 => 8,  38 => 7,  31 => 3,  26 => 5,);
    }
}
