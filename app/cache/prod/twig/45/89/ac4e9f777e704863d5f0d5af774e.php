<?php

/* TopxiaWebBundle:CourseQuestionManage:question-form-layout.html.twig */
class __TwigTemplate_4589ac4e9f777e704863d5f0d5af774e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaWebBundle:CourseManage:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
            'question_extra_fields' => array($this, 'block_question_extra_fields'),
            'question_buttons' => array($this, 'block_question_buttons'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:CourseManage:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["side_nav"] = "question";
        // line 6
        $context["script_controller"] = "quiz-question/create";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        if (isset($context["question"])) { $_question_ = $context["question"]; } else { $_question_ = null; }
        if ($this->getAttribute($_question_, "id")) {
            echo "编辑";
        } else {
            echo "添加";
        }
        echo "题目 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        // line 9
        echo "
";
        // line 10
        if (isset($context["parentQuestion"])) { $_parentQuestion_ = $context["parentQuestion"]; } else { $_parentQuestion_ = null; }
        $context["parentQuestion"] = ((array_key_exists("parentQuestion", $context)) ? (_twig_default_filter($_parentQuestion_, null)) : (null));
        // line 11
        echo "
<div class=\"panel panel-default panel-col\">
  <div class=\"panel-heading clearfix\">
    题目管理
  </div>
  <div class=\"panel-body\">

    <ol class=\"breadcrumb\">
      <li><a href=\"";
        // line 19
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_question", array("courseId" => $this->getAttribute($_course_, "id"))), "html", null, true);
        echo "\">题目管理</a></li>
      ";
        // line 20
        if (isset($context["parentQuestion"])) { $_parentQuestion_ = $context["parentQuestion"]; } else { $_parentQuestion_ = null; }
        if ($_parentQuestion_) {
            // line 21
            echo "        <li><a href=\"";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if (isset($context["parentQuestion"])) { $_parentQuestion_ = $context["parentQuestion"]; } else { $_parentQuestion_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_question", array("courseId" => $this->getAttribute($_course_, "id"), "parentId" => $this->getAttribute($_parentQuestion_, "id"))), "html", null, true);
            echo "\">";
            if (isset($context["parentQuestion"])) { $_parentQuestion_ = $context["parentQuestion"]; } else { $_parentQuestion_ = null; }
            echo $this->env->getExtension('topxia_web_twig')->getDictText("questionType", $this->getAttribute($_parentQuestion_, "type"));
            echo "</a></li>
      ";
        }
        // line 23
        echo "      <li class=\"active\">";
        if (isset($context["question"])) { $_question_ = $context["question"]; } else { $_question_ = null; }
        if ($this->getAttribute($_question_, "id")) {
            echo "编辑";
        } else {
            echo "添加";
        }
        echo "题目</li>
    </ol>
    
    <div id=\"question-creator-widget\"
      data-upload-url=\"";
        // line 27
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if (isset($context["question"])) { $_question_ = $context["question"]; } else { $_question_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_question_upload", array("courseId" => $this->getAttribute($_course_, "id"), "type" => $this->getAttribute($_question_, "type"))), "html", null, true);
        echo "\"
      data-media-upload-params-url=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_params", array("targetType" => "question", "targetId" => 0)), "html", null, true);
        echo "\"
      data-media-upload-callback-url=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_cloud_callback", array("targetType" => "question", "targetId" => 0)), "html", null, true);
        echo "\"

      >
      <form id=\"question-create-form\" data-role=\"question-form\" class=\"form-horizontal quiz-question\" method=\"post\" 
          action=\"";
        // line 33
        if (isset($context["question"])) { $_question_ = $context["question"]; } else { $_question_ = null; }
        if ($this->getAttribute($_question_, "id")) {
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if (isset($context["question"])) { $_question_ = $context["question"]; } else { $_question_ = null; }
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_question_update", array("courseId" => $this->getAttribute($_course_, "id"), "id" => $this->getAttribute($_question_, "id"), "goto" => $this->getAttribute($this->getAttribute($_app_, "request"), "get", array(0 => "goto"), "method"))), "html", null, true);
        } else {
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if (isset($context["question"])) { $_question_ = $context["question"]; } else { $_question_ = null; }
            if (isset($context["parentQuestion"])) { $_parentQuestion_ = $context["parentQuestion"]; } else { $_parentQuestion_ = null; }
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_question_create", array("courseId" => $this->getAttribute($_course_, "id"), "type" => $this->getAttribute($_question_, "type"), "parentId" => (($this->getAttribute($_parentQuestion_, "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_parentQuestion_, "id"), 0)) : (0)), "goto" => $this->getAttribute($this->getAttribute($_app_, "request"), "get", array(0 => "goto"), "method"))), "html", null, true);
        }
        echo "\"
          >
        ";
        // line 35
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "flash_messages", array(), "method"), "html", null, true);
        echo "

        ";
        // line 37
        if (isset($context["parentQuestion"])) { $_parentQuestion_ = $context["parentQuestion"]; } else { $_parentQuestion_ = null; }
        if ((!$_parentQuestion_)) {
            // line 38
            echo "        <div class=\"form-group\">
          <div class=\"col-md-2 control-label\"><label>从属</label></div>
          <div class=\"col-md-8 controls\">
            <select class=\"form-control width-input width-input-large\" name=\"target\" data-role=\"target\">
              ";
            // line 42
            if (isset($context["targetsChoices"])) { $_targetsChoices_ = $context["targetsChoices"]; } else { $_targetsChoices_ = null; }
            if (isset($context["question"])) { $_question_ = $context["question"]; } else { $_question_ = null; }
            echo $this->env->getExtension('topxia_html_twig')->selectOptions($_targetsChoices_, (($this->getAttribute($_question_, "target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_question_, "target"), null)) : (null)));
            echo "
            </select>
            <div class=\"help-block\">可以针对本课程或者某个课时出题</div>
          </div>
        </div>
        ";
        }
        // line 48
        echo "
        <div class=\"form-group\">
          <div class=\"col-md-2 control-label\"><label>难度</label></div>
          <div class=\"col-md-8 controls radios\">
            ";
        // line 52
        if (isset($context["question"])) { $_question_ = $context["question"]; } else { $_question_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->radios("difficulty", array("simple" => "简单", "normal" => "一般", "difficulty" => "困难"), (($this->getAttribute($_question_, "difficulty", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_question_, "difficulty"), "normal")) : ("normal")));
        echo "
          </div>          
        </div>

        <div class=\"form-group\">
          <div class=\"col-md-2 control-label\"><label for=\"question-stem-field\">";
        // line 57
        if (isset($context["question_stem_label"])) { $_question_stem_label_ = $context["question_stem_label"]; } else { $_question_stem_label_ = null; }
        echo twig_escape_filter($this->env, ((array_key_exists("question_stem_label", $context)) ? (_twig_default_filter($_question_stem_label_, "题干")) : ("题干")), "html", null, true);
        echo "</label></div>
          <div class=\"col-md-8 controls\">
            <textarea class=\"form-control\" id=\"question-stem-field\" name=\"stem\" style=\"height:180px;\">";
        // line 59
        if (isset($context["question"])) { $_question_ = $context["question"]; } else { $_question_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($_question_, "stem", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_question_, "stem"), "")) : ("")), "html", null, true);
        echo "</textarea>
            ";
        // line 60
        if (isset($context["question_stem_help"])) { $_question_stem_help_ = $context["question_stem_help"]; } else { $_question_stem_help_ = null; }
        $context["question_stem_help"] = ((array_key_exists("question_stem_help", $context)) ? (_twig_default_filter($_question_stem_help_, "")) : (""));
        // line 61
        echo "            ";
        if (isset($context["question_stem_help"])) { $_question_stem_help_ = $context["question_stem_help"]; } else { $_question_stem_help_ = null; }
        if ($_question_stem_help_) {
            echo "<div class=\"help-block\">";
            if (isset($context["question_stem_help"])) { $_question_stem_help_ = $context["question_stem_help"]; } else { $_question_stem_help_ = null; }
            echo $_question_stem_help_;
            echo "</div>";
        }
        // line 62
        echo "          </div>
          <div class=\"col-md-2\" style=\"padding-left:0;\">
            <div id=\"question-stem-uploader\" class=\"btn btn-sm btn-default webuploader-container\" type=\"button\" data-target=\"#question-stem-field\"><i class=\"glyphicon glyphicon-picture\"></i></div>
            ";
        // line 65
        if (isset($context["enabledAudioQuestion"])) { $_enabledAudioQuestion_ = $context["enabledAudioQuestion"]; } else { $_enabledAudioQuestion_ = null; }
        if (((array_key_exists("enabledAudioQuestion", $context)) ? (_twig_default_filter($_enabledAudioQuestion_, null)) : (null))) {
            // line 66
            echo "              <div id=\"question-stem-audio-uploader\" class=\"btn btn-sm btn-default webuploader-container\" type=\"button\" data-target=\"#question-stem-field\"><i class=\"glyphicon glyphicon-volume-up\"></i></div>
            ";
        }
        // line 68
        echo "          </div>
        </div>

        ";
        // line 71
        $this->displayBlock('question_extra_fields', $context, $blocks);
        // line 72
        echo "
        <div class=\"form-group\">
          <div class=\"col-md-8 col-md-offset-2 controls \">
              <a data-toggle=\"collapse\" data-role=\"advanced-collapse\" data-target=\"#advanced-collapse\" class=\"text-success collapsed\">&raquo; 显示/隐藏 高级选项 ...</a>
          </div>
        </div>
        
        <div id=\"advanced-collapse\" class=\"advanced-collapse collapse\">
          <div class=\"form-group\">
            <div class=\"col-md-2 control-label\"><label for=\"question-analysis-field\">解析</label></div>
            <div class=\"col-md-8 controls\">
                <textarea class=\"form-control\" id=\"question-analysis-field\" name=\"analysis\">";
        // line 83
        if (isset($context["question"])) { $_question_ = $context["question"]; } else { $_question_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($_question_, "analysis", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_question_, "analysis"), "")) : ("")), "html", null, true);
        echo "</textarea>
            </div>
            <div class=\"col-md-2\" style=\"padding-left:0;\">
              <div id=\"question-analysis-uploader\" class=\"btn btn-sm btn-default  webuploader-container\" data-role=\"analysis-uploader\" data-target=\"#question-analysis-field\"><i class=\"glyphicon glyphicon-picture\"></i></div>
            </div>
          </div>

          <div class=\"form-group\">
            <div class=\"col-md-2 control-label\"><label for=\"question-score-field\">分值</label></div>
            <div class=\"col-md-4 controls\">
              <input class=\"form-control\" value=\"";
        // line 93
        if (isset($context["question"])) { $_question_ = $context["question"]; } else { $_question_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($_question_, "score", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_question_, "score"), 2)) : (2)), "html", null, true);
        echo "\" type=\"text\" id=\"question-score-field\" name=\"score\" />
            </div>
          </div>

          <div class=\"form-group\">
            <div class=\"col-md-2 control-label\"><label for=\"categoryId\">类别</label></div>
            <div class=\"col-md-8 controls\">
                <select class=\"form-control width-input width-input-large\" name=\"categoryId\" data-role=\"category\">
                  ";
        // line 101
        if (isset($context["categoryChoices"])) { $_categoryChoices_ = $context["categoryChoices"]; } else { $_categoryChoices_ = null; }
        if (isset($context["question"])) { $_question_ = $context["question"]; } else { $_question_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->selectOptions($_categoryChoices_, (($this->getAttribute($_question_, "categoryId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_question_, "categoryId"), 0)) : (0)), "请选择类别");
        echo "
                </select>
            </div>
          </div>

        </div>

        <div class=\"form-group\">
          <div class=\"col-md-8 col-md-offset-2 controls\">
            ";
        // line 110
        $this->displayBlock('question_buttons', $context, $blocks);
        // line 116
        echo "            <a href=\"";
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if (isset($context["parentQuestion"])) { $_parentQuestion_ = $context["parentQuestion"]; } else { $_parentQuestion_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_question", array("courseId" => $this->getAttribute($_course_, "id"), "parentId" => (($this->getAttribute($_parentQuestion_, "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_parentQuestion_, "id"), 0)) : (0)))), "html", null, true);
        echo "\" class=\"btn btn-link\">返回</a>
          </div>
        </div>

        <input type=\"hidden\" name=\"submission\">
        <input type=\"hidden\" name=\"type\" value=\"";
        // line 121
        if (isset($context["question"])) { $_question_ = $context["question"]; } else { $_question_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_question_, "type"), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"parentId\" value=\"";
        // line 122
        if (isset($context["parentQuestion"])) { $_parentQuestion_ = $context["parentQuestion"]; } else { $_parentQuestion_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($_parentQuestion_, "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_parentQuestion_, "id"), 0)) : (0)), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->renderCsrfToken("site"), "html", null, true);
        echo "\">

      </form>

    </div>
    
  </div>
</div>


";
    }

    // line 71
    public function block_question_extra_fields($context, array $blocks = array())
    {
    }

    // line 110
    public function block_question_buttons($context, array $blocks = array())
    {
        // line 111
        echo "              ";
        if (isset($context["question"])) { $_question_ = $context["question"]; } else { $_question_ = null; }
        if ((!$this->getAttribute($_question_, "id"))) {
            // line 112
            echo "                <button type=\"submit\" data-role=\"submit\" class=\"btn btn-primary submit-btn\" data-submission=\"continue\">保存并继续添加</button>
              ";
        }
        // line 114
        echo "              <button type=\"submit\" data-role=\"submit\" class=\"btn btn-primary submit-btn\" data-submission=\"submit\">保存</button>
            ";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseQuestionManage:question-form-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  323 => 114,  319 => 112,  315 => 111,  312 => 110,  307 => 71,  292 => 123,  287 => 122,  282 => 121,  271 => 116,  269 => 110,  255 => 101,  243 => 93,  229 => 83,  216 => 72,  214 => 71,  209 => 68,  205 => 66,  202 => 65,  197 => 62,  188 => 61,  185 => 60,  180 => 59,  174 => 57,  165 => 52,  159 => 48,  148 => 42,  142 => 38,  139 => 37,  133 => 35,  116 => 33,  109 => 29,  105 => 28,  99 => 27,  86 => 23,  75 => 21,  72 => 20,  57 => 11,  54 => 10,  51 => 9,  48 => 8,  35 => 3,  30 => 6,  70 => 42,  67 => 19,  61 => 21,  55 => 20,  52 => 19,  44 => 15,  31 => 4,  28 => 5,);
    }
}
