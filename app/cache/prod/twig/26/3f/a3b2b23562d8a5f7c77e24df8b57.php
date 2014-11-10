<?php

/* TopxiaAdminBundle:Group:set.html.twig */
class __TwigTemplate_263fa3b2b23562d8a5f7c77e24df8b57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaAdminBundle:Group:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle:Group:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["menu"] = "set";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "小组设置";
    }

    // line 4
    public function block_main($context, array $blocks = array())
    {
        // line 5
        echo "      ";
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "flash_messages", array(), "method"), "html", null, true);
        echo "

            <div class=\"page-header clearfix\">
              <h1 class=\"pull-left\">小组设置</h1>
            </div>
            <form class=\"form-horizontal\" method=\"post\" id=\"member-zone-form\" novalidate>
           
            <div class=\"row form-group\">
              <div class=\"col-md-2 control-label\">
                <label >首页显示小组信息</label>
              </div>
              <div class=\"controls col-md-7 radios\">
                ";
        // line 17
        echo $this->env->getExtension('topxia_html_twig')->radios("group_show", array(1 => "显示", 0 => "不显示"), (($this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("group"), "group_show", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("group"), "group_show"), 1)) : (1)));
        echo "
                <div class=\"help-block\">此功能开关只针对默认主题、默认主题B、清秋主题。</div>
              </div>
            </div>

           <div class=\"row form-group\">
              <div class=\"col-md-2 control-label\">
                <label >最热话题的时间范围</label>
              </div>
              <div class=\"controls col-md-7 radios\">
                ";
        // line 27
        echo $this->env->getExtension('topxia_html_twig')->radios("threadTime_range", array("1" => "天", "7" => "周", "30" => "月"), (($this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("group"), "threadTime_range", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("group"), "threadTime_range"), "7")) : ("7")));
        echo "
                <div class=\"help-block\"></div>
              </div>
            </div>

            <div class=\"row form-group\">
              <div class=\"col-md-2 control-label\"></div>
              <div class=\"controls col-md-8\">
                <button type=\"submit\" class=\"btn btn-primary\">提交</button>  
              </div>
            </div>

            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->renderCsrfToken("site"), "html", null, true);
        echo "\">
          </form>
      ";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Group:set.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 39,  70 => 27,  57 => 17,  40 => 5,  37 => 4,  31 => 3,  26 => 2,);
    }
}
