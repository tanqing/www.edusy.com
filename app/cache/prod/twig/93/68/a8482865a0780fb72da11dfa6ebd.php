<?php

/* TopxiaAdminBundle:OperationAnalysis:analysis-base-layout.html.twig */
class __TwigTemplate_9368a8482865a0780fb72da11dfa6ebd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaAdminBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'sidebar' => array($this, 'block_sidebar'),
            'analysisHead' => array($this, 'block_analysisHead'),
            'analysisBody' => array($this, 'block_analysisBody'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["panel"] = "dashboard";
        // line 3
        $context["nav"] = "system";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "  <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/gallery/morris/0.5.0/morris.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
<div class=\"row\">

    ";
        // line 8
        $this->displayBlock('sidebar', $context, $blocks);
        // line 10
        echo "
  <div class=\"col-md-12\">
  ";
        // line 12
        $this->displayBlock('analysisHead', $context, $blocks);
        // line 65
        $this->displayBlock('analysisBody', $context, $blocks);
        // line 67
        echo "</div>
</div>

";
    }

    // line 8
    public function block_sidebar($context, array $blocks = array())
    {
        // line 9
        echo "    ";
    }

    // line 12
    public function block_analysisHead($context, array $blocks = array())
    {
        // line 13
        echo "  <div class=\"col-md-12\">
";
        // line 14
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "flash_messages", array(), "method"), "html", null, true);
        echo "
  <div class=\"page-header\">
    <h1>数据统计</h1>
  </div>
  <form  class=\"well well-sm form-inline\" action=\"";
        // line 18
        if (isset($context["tab"])) { $_tab_ = $context["tab"]; } else { $_tab_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_operation_analysis_rount", array("tab" => $_tab_)), "html", null, true);
        echo "\" method=\"get\" id=\"operation-form\"  role=\"form\" >
          <div class=\"form-group\">
    <select class=\"form-control\" name=\"analysisDateType\">
        ";
        // line 21
        if (isset($context["dataInfo"])) { $_dataInfo_ = $context["dataInfo"]; } else { $_dataInfo_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getDict("analysisDateType"), $this->getAttribute($_dataInfo_, "analysisDateType"), "--选择数据类型--");
        echo "
    </select>
  </div>
        <div class=\"form-group\">
         <a  type=\"button\" class=\"btn btn-default\"  id=\"btn-month\" currentMonthStart=\"";
        // line 25
        if (isset($context["dataInfo"])) { $_dataInfo_ = $context["dataInfo"]; } else { $_dataInfo_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_dataInfo_, "currentMonthStart"), "html", null, true);
        echo "\" currentMonthEnd=\"";
        if (isset($context["dataInfo"])) { $_dataInfo_ = $context["dataInfo"]; } else { $_dataInfo_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_dataInfo_, "currentMonthEnd"), "html", null, true);
        echo "\">本月</a>
        </div>
        <div class=\"form-group\">
         <a type=\"button\"  class=\"btn btn-default \"  id=\"btn-lastMonth\" lastMonthStart=\"";
        // line 28
        if (isset($context["dataInfo"])) { $_dataInfo_ = $context["dataInfo"]; } else { $_dataInfo_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_dataInfo_, "lastMonthStart"), "html", null, true);
        echo "\" lastMonthEnd=\"";
        if (isset($context["dataInfo"])) { $_dataInfo_ = $context["dataInfo"]; } else { $_dataInfo_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_dataInfo_, "lastMonthEnd"), "html", null, true);
        echo "\">上月</a>
        </div>

        <div class=\"form-group\">
          <a type=\"button\"  class=\"btn btn-default \" id=\"btn-lastThreeMonths\" lastThreeMonthsStart=\"";
        // line 32
        if (isset($context["dataInfo"])) { $_dataInfo_ = $context["dataInfo"]; } else { $_dataInfo_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_dataInfo_, "lastThreeMonthsStart"), "html", null, true);
        echo "\" lastThreeMonthsEnd=\"";
        if (isset($context["dataInfo"])) { $_dataInfo_ = $context["dataInfo"]; } else { $_dataInfo_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_dataInfo_, "lastThreeMonthsEnd"), "html", null, true);
        echo "\">近三月</a>
        </div>

        <div class=\"form-group\">
          <label class=\"col-md-4\" style=\"padding-top:9px;\">起始日期</label>
            <div class=\"col-md-8 \">
            <input type=\"text\" class=\"form-control\" name=\"startTime\" value=\"";
        // line 38
        if (isset($context["dataInfo"])) { $_dataInfo_ = $context["dataInfo"]; } else { $_dataInfo_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_dataInfo_, "startTime"), "html", null, true);
        echo "\">
          </div>
        </div>

        <div class=\"form-group\">
          <label class=\"col-md-4\" style=\"padding-top:9px;\">截止日期</label>
             <div class=\"col-md-8 \">
            <input type=\"text\" class=\"form-control\"  name=\"endTime\" value=\"";
        // line 45
        if (isset($context["dataInfo"])) { $_dataInfo_ = $context["dataInfo"]; } else { $_dataInfo_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_dataInfo_, "endTime"), "html", null, true);
        echo "\">
            </div>
        </div>

        <button class=\"btn btn-primary pull-right\" id=\"btn-search\">查询</button>
      </form>

      ";
        // line 52
        if (isset($context["showHelpMessage"])) { $_showHelpMessage_ = $context["showHelpMessage"]; } else { $_showHelpMessage_ = null; }
        if ((((array_key_exists("showHelpMessage", $context)) ? (_twig_default_filter($_showHelpMessage_, null)) : (null)) == 1)) {
            // line 53
            echo "        <div class=\"help-block\">视频观看数，将从数据统计功能更新启用之日起开始记录</div>
      ";
        }
        // line 55
        echo "  </div>
  <div class=\"col-md-12\"><br>
  </div>
  <div class=\"col-md-12\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
        <li role=\"presentation\"";
        // line 60
        if (isset($context["tab"])) { $_tab_ = $context["tab"]; } else { $_tab_ = null; }
        if (($_tab_ == "trend")) {
            echo " class=\"active\"";
        }
        echo " ><a href=\"";
        if (isset($context["href"])) { $_href_ = $context["href"]; } else { $_href_ = null; }
        if (isset($context["dataInfo"])) { $_dataInfo_ = $context["dataInfo"]; } else { $_dataInfo_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($_href_, array("tab" => "trend", "startTime" => $this->getAttribute($_dataInfo_, "startTime"), "endTime" => $this->getAttribute($_dataInfo_, "endTime"), "analysisDateType" => $this->getAttribute($_dataInfo_, "analysisDateType"))), "html", null, true);
        echo "\">趋势</a></li>
        <li role=\"presentation\" ";
        // line 61
        if (isset($context["tab"])) { $_tab_ = $context["tab"]; } else { $_tab_ = null; }
        if (($_tab_ == "detail")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        if (isset($context["href"])) { $_href_ = $context["href"]; } else { $_href_ = null; }
        if (isset($context["dataInfo"])) { $_dataInfo_ = $context["dataInfo"]; } else { $_dataInfo_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($_href_, array("tab" => "detail", "startTime" => $this->getAttribute($_dataInfo_, "startTime"), "endTime" => $this->getAttribute($_dataInfo_, "endTime"), "analysisDateType" => $this->getAttribute($_dataInfo_, "analysisDateType"))), "html", null, true);
        echo "\">明细</a></li>
      </ul>
  </div>
";
    }

    // line 65
    public function block_analysisBody($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:OperationAnalysis:analysis-base-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 65,  179 => 61,  168 => 60,  161 => 55,  157 => 53,  154 => 52,  143 => 45,  132 => 38,  119 => 32,  108 => 28,  98 => 25,  90 => 21,  83 => 18,  75 => 14,  72 => 13,  69 => 12,  62 => 8,  53 => 65,  51 => 12,  47 => 10,  45 => 8,  38 => 5,  35 => 4,  30 => 3,  28 => 2,  71 => 16,  68 => 15,  65 => 9,  55 => 67,  46 => 9,  43 => 8,  40 => 7,  37 => 6,  34 => 5,  29 => 4,  27 => 3,  25 => 2,);
    }
}
