<?php

/* TopxiaWebBundle:CourseQuestionManage:question-form-choice.html.twig */
class __TwigTemplate_942a253fea6b621f3e2151fd70ea7733 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaWebBundle:CourseQuestionManage:question-form-layout.html.twig");

        $this->blocks = array(
            'question_extra_fields' => array($this, 'block_question_extra_fields'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:CourseQuestionManage:question-form-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_question_extra_fields($context, array $blocks = array())
    {
        // line 4
        echo "
  <div data-role=\"choices\"></div>
  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\"></div>
    <div class=\"col-md-8 controls\">
       <button class=\"btn btn-success btn-sm pull-right\" data-role=\"add-choice\" type=\"button\">新增选项</button>
    </div>
  </div>
  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\"><label>不定项选择题</label></div>
      <div class=\"col-md-8 controls radios\">
        ";
        // line 15
        if (isset($context["question"])) { $_question_ = $context["question"]; } else { $_question_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->radios("uncertain", array("0" => "否", "1" => "是"), ((((($this->getAttribute($_question_, "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_question_, "type"), "choice")) : ("choice")) == "uncertain_choice")) ? (1) : (0)));
        echo "
      </div>
  </div>

  ";
        // line 19
        if (isset($context["question"])) { $_question_ = $context["question"]; } else { $_question_ = null; }
        if ((($this->getAttribute($this->getAttribute($_question_, "metas", array(), "any", false, true), "choices", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_question_, "metas", array(), "any", false, true), "choices"), null)) : (null))) {
            // line 20
            echo "    <script type=\"text/plain\" data-role=\"choices-data\">";
            if (isset($context["question"])) { $_question_ = $context["question"]; } else { $_question_ = null; }
            echo twig_jsonencode_filter($this->getAttribute($this->getAttribute($_question_, "metas"), "choices"));
            echo "</script>
    <script type=\"text/plain\" data-role=\"answers-data\">";
            // line 21
            if (isset($context["question"])) { $_question_ = $context["question"]; } else { $_question_ = null; }
            echo twig_jsonencode_filter($this->getAttribute($_question_, "answer"));
            echo "</script>
  ";
        }
        // line 23
        echo "  <script type=\"text/x-handlebars-template\" data-role=\"choice-template\">
    ";
        // line 42
        echo "
      <div class=\"form-group\" data-role=\"choice\">
        <div class=\"col-sm-2 control-label\"><label class=\"choice-label\" for=\"item-input-{{ id }}\">选项{{ code }}</label></div>
        <div class=\"col-sm-8 controls\">
          <div class=\" input-group\">
            <input class=\"form-control item-input col-md-8\" id=\"item-input-{{ id }}\" name=\"choices[]\" type=\"text\" value=\"{{ content }}\" data-display=\"选项内容\">
            <span class=\"input-group-addon choice-answer\">
              <label><input type=\"checkbox\" class=\"answer-checkbox\" {{#if isAnswer }}checked=\"checked\"{{/if}}> 正确答案</label>
            </span>
          </div>
        </div>
        <div class=\"col-sm-2\" style=\"padding-left:0;\">
          <div id=\"item-upload-{{ id }}\" class=\"btn btn-default btn-sm webuploader-container\" data-target=\"#item-input-{{ id }}\"><i class=\"glyphicon glyphicon-picture\"></i></div>
          <div id=\"item-audio-upload-{{ id }}\" class=\"btn btn-sm btn-default item-audio-upload webuploader-container hide\" data-target=\"#item-input-{{ id }}\"><i class=\"glyphicon glyphicon-volume-up\"></i></div>

          <a class=\"btn btn-default btn-sm delete-choice mlm\" data-role=\"delete-choice\" href=\"javascript:void(null)\"><i class=\"glyphicon glyphicon-trash\"></i></a>
        </div>
      </div>
    ";
        echo "
  </script>



";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseQuestionManage:question-form-choice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 42,  67 => 23,  61 => 21,  55 => 20,  52 => 19,  44 => 15,  31 => 4,  28 => 3,);
    }
}
