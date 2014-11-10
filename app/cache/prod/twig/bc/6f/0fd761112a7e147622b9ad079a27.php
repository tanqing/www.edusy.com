<?php

/* TopxiaWebBundle:CourseManage:price.html.twig */
class __TwigTemplate_bc6f0fd761112a7e147622b9ad079a27 extends Twig_Template
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
        $context["side_nav"] = "price";
        // line 6
        $context["script_controller"] = "course-manage/price";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "价格设置 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "
<div class=\"panel panel-default panel-col\">
\t<div class=\"panel-heading\">价格设置
\t</div>
\t<div class=\"panel-body\">
\t\t";
        // line 13
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "flash_messages", array(), "method"), "html", null, true);
        echo "

\t\t";
        // line 15
        if (isset($context["canModifyPrice"])) { $_canModifyPrice_ = $context["canModifyPrice"]; } else { $_canModifyPrice_ = null; }
        if ($_canModifyPrice_) {
            // line 16
            echo "\t\t
\t\t\t<form class=\"form-horizontal\" id=\"price-form\" method=\"post\" action=\"";
            // line 17
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_price", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
            echo "\">

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"col-md-2 control-label\">
\t\t\t\t\t\t<label for=\"price\">价格</label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8 controls\">
\t\t\t\t\t\t<input type=\"text\" id=\"price\" name=\"price\" class=\"form-control\" value=\"";
            // line 24
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_course_, "price"), "html", null, true);
            echo "\">
\t\t\t\t\t\t<div class=\"help-block\" style=\"display:none;\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t";
            // line 29
            if ($this->env->getExtension('topxia_web_twig')->isFeatureEnabled("free_limit")) {
                // line 30
                echo "\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"col-md-2 control-label\">
\t\t\t\t\t\t<label for=\"freeStartTime\">限免开始时间</label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8 controls\">
\t\t\t\t\t\t<input type=\"text\" id=\"freeStartTime\" name=\"freeStartTime\" class=\"form-control\" value=\"";
                // line 35
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->dataformatFilter((($this->getAttribute($_course_, "freeStartTime", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_course_, "freeStartTime"))) : ("")), "Y-m-d H:i"), "html", null, true);
                echo "\">
\t\t\t\t\t\t<div class=\"help-block\" style=\"display:none;\" id=\"start-help-block\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"col-md-2 control-label\">
\t\t\t\t\t\t<label for=\"freeEndTime\">限免结束时间</label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8 controls\">
\t\t\t\t\t\t<input type=\"text\" id=\"freeEndTime\" name=\"freeEndTime\" class=\"form-control\" value=\"";
                // line 45
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->dataformatFilter((($this->getAttribute($_course_, "freeEndTime", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_course_, "freeEndTime"))) : ("")), "Y-m-d H:i"), "html", null, true);
                echo "\">
\t\t\t\t\t\t<div class=\"help-block\" style=\"display:none;\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 50
            echo "
\t\t\t\t";
            // line 51
            if ($this->env->getExtension('topxia_web_twig')->getSetting("vip.enabled")) {
                // line 52
                echo "
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"col-md-2 control-label\">
\t\t\t\t\t\t<label for=\"price\">会员课程设置</label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8 controls\">
\t\t\t\t\t  <select name=\"vipLevelId\" class=\"form-control width-input width-input-large\">
\t\t\t\t\t  \t";
                // line 59
                if (isset($context["levels"])) { $_levels_ = $context["levels"]; } else { $_levels_ = null; }
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo $this->env->getExtension('topxia_html_twig')->selectOptions($_levels_, $this->getAttribute($_course_, "vipLevelId"), "无");
                echo "
\t\t\t\t\t  </select>
\t\t\t\t\t\t<div class=\"help-block\">设置会员课程后，该会员及更高等级会员，可免费学习。</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 65
            echo "

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"col-md-offset-2 col-md-8 controls\">
\t\t\t\t\t\t<button class=\"btn btn-fat btn-primary\" id=\"price-save-btn\" type=\"submit\">保存</button>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->renderCsrfToken("site"), "html", null, true);
            echo "\">

\t\t\t</form>
\t\t";
        } else {
            // line 77
            echo "\t\t  <div class=\"alert alert-danger\">抱歉，您无权设置课程价格，如有需要请联系网站管理员！</div>
\t\t";
        }
        // line 79
        echo "\t</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseManage:price.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 79,  156 => 77,  149 => 73,  139 => 65,  128 => 59,  119 => 52,  117 => 51,  114 => 50,  105 => 45,  91 => 35,  84 => 30,  82 => 29,  73 => 24,  62 => 17,  59 => 16,  56 => 15,  50 => 13,  43 => 8,  40 => 7,  33 => 3,  28 => 6,  26 => 5,);
    }
}
