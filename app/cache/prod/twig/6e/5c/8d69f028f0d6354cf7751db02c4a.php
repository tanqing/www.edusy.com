<?php

/* TopxiaWebBundle:CourseQuestionManage:index.html.twig */
class __TwigTemplate_6e5c8d69f028f0d6354cf7751db02c4a extends Twig_Template
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
        // line 2
        $context["macro"] = $this->env->loadTemplate("TopxiaWebBundle::macro.html.twig");
        // line 6
        if (isset($context["parentQuestion"])) { $_parentQuestion_ = $context["parentQuestion"]; } else { $_parentQuestion_ = null; }
        $context["parentId"] = (($this->getAttribute($_parentQuestion_, "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_parentQuestion_, "id"), 0)) : (0));
        // line 8
        $context["side_nav"] = "question";
        // line 9
        $context["script_controller"] = "course-manage/list";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "题目管理 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 11
    public function block_main($context, array $blocks = array())
    {
        // line 12
        echo "
<div class=\"panel panel-default panel-col\">
  <div class=\"panel-heading\">
    <div class=\"pull-right\">
      <a href=\"";
        // line 16
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if (isset($context["parentId"])) { $_parentId_ = $context["parentId"]; } else { $_parentId_ = null; }
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_question_create", array("courseId" => $this->getAttribute($_course_, "id"), "type" => "choice", "parentId" => $_parentId_, "goto" => $this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request"), "server"), "get", array(0 => "REQUEST_URI"), "method"))), "html", null, true);
        echo "\" class=\"btn btn-info btn-sm\"><span class=\"glyphicon glyphicon-plus\"></span> 选择题</a>
      <a href=\"";
        // line 17
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if (isset($context["parentId"])) { $_parentId_ = $context["parentId"]; } else { $_parentId_ = null; }
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_question_create", array("courseId" => $this->getAttribute($_course_, "id"), "type" => "fill", "parentId" => $_parentId_, "goto" => $this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request"), "server"), "get", array(0 => "REQUEST_URI"), "method"))), "html", null, true);
        echo "\" class=\"btn btn-info btn-sm\"><span class=\"glyphicon glyphicon-plus\"></span> 填空题</a>
      <a href=\"";
        // line 18
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if (isset($context["parentId"])) { $_parentId_ = $context["parentId"]; } else { $_parentId_ = null; }
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_question_create", array("courseId" => $this->getAttribute($_course_, "id"), "type" => "determine", "parentId" => $_parentId_, "goto" => $this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request"), "server"), "get", array(0 => "REQUEST_URI"), "method"))), "html", null, true);
        echo "\" class=\"btn btn-info btn-sm\"><span class=\"glyphicon glyphicon-plus\"></span> 判断题</a>
      <a href=\"";
        // line 19
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if (isset($context["parentId"])) { $_parentId_ = $context["parentId"]; } else { $_parentId_ = null; }
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_question_create", array("courseId" => $this->getAttribute($_course_, "id"), "type" => "essay", "parentId" => $_parentId_, "goto" => $this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request"), "server"), "get", array(0 => "REQUEST_URI"), "method"))), "html", null, true);
        echo "\" class=\"btn btn-info btn-sm\"><span class=\"glyphicon glyphicon-plus\"></span> 问答题</a>
      ";
        // line 20
        if (isset($context["parentQuestion"])) { $_parentQuestion_ = $context["parentQuestion"]; } else { $_parentQuestion_ = null; }
        if ((!$_parentQuestion_)) {
            // line 21
            echo "        <a href=\"";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_question_create", array("courseId" => $this->getAttribute($_course_, "id"), "type" => "material")), "html", null, true);
            echo "\" class=\"btn btn-info btn-sm\"><span class=\"glyphicon glyphicon-plus\"></span> 材料题</a>
      ";
        }
        // line 23
        echo "    </div>
    题目管理
  </div>

  <div class=\"panel-body \" id=\"quiz-table-container\">

    ";
        // line 29
        if (isset($context["parentQuestion"])) { $_parentQuestion_ = $context["parentQuestion"]; } else { $_parentQuestion_ = null; }
        if ($_parentQuestion_) {
            // line 30
            echo "      <ol class=\"breadcrumb\">
        <li><a href=\"";
            // line 31
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_question", array("courseId" => $this->getAttribute($_course_, "id"))), "html", null, true);
            echo "\">题目管理</a></li>
        <li class=\"active\">材料题</li>
      </ol>
    ";
        }
        // line 35
        echo "
    ";
        // line 36
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "flash_messages", array(), "method"), "html", null, true);
        echo "

    ";
        // line 38
        if (isset($context["parentQuestion"])) { $_parentQuestion_ = $context["parentQuestion"]; } else { $_parentQuestion_ = null; }
        if ($_parentQuestion_) {
            // line 39
            echo "      <div class=\"row\">
        <div class=\"col-sm-12\">
          <div class=\"well well-sm short-long-text\">
            <div class=\"short-text\">";
            // line 42
            if (isset($context["parentQuestion"])) { $_parentQuestion_ = $context["parentQuestion"]; } else { $_parentQuestion_ = null; }
            echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($_parentQuestion_, "stem"), 100);
            echo " <span class=\"trigger\">(展开)</span></div>
            <div class=\"long-text\">";
            // line 43
            if (isset($context["parentQuestion"])) { $_parentQuestion_ = $context["parentQuestion"]; } else { $_parentQuestion_ = null; }
            echo $this->getAttribute($_parentQuestion_, "stem");
            echo " <span class=\"trigger\">(收起)</span></div>
          </div>
        </div>
      </div>
    ";
        }
        // line 48
        echo "
    ";
        // line 49
        if (isset($context["parentQuestion"])) { $_parentQuestion_ = $context["parentQuestion"]; } else { $_parentQuestion_ = null; }
        if ((!$_parentQuestion_)) {
            // line 50
            echo "      <form class=\"form-inline well well-sm\" action=\"\" method=\"get\" novalidate>
        <div class=\"form-group\">
          <select class=\"form-control\" name=\"type\">
            ";
            // line 53
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getDict("questionType"), $this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request"), "query"), "get", array(0 => "type"), "method"), "--按题型--");
            echo "
          </select>
        </div>
 
        <div class=\"form-group\">
          <select class=\"form-control\" name=\"target\" style=\"width:200px;\">
            ";
            // line 59
            if (isset($context["targetChoices"])) { $_targetChoices_ = $context["targetChoices"]; } else { $_targetChoices_ = null; }
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo $this->env->getExtension('topxia_html_twig')->selectOptions($_targetChoices_, $this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request"), "query"), "get", array(0 => "target"), "method"), "--按从属--");
            echo "
          </select>
        </div>

        <div class=\"form-group\">
          <input type=\"text\" id=\"keyword\" name=\"keyword\" class=\"form-control\" value=\"";
            // line 64
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request"), "query"), "get", array(0 => "keyword"), "method"), "html", null, true);
            echo "\" placeholder=\"关键词\">
        </div>

        <button class=\"btn btn-primary btn-sm\">搜索</button>

      </form>
    ";
        }
        // line 71
        echo "





    <table class=\"table table-striped table-hover\" id=\"quiz-table\">
      <thead>
      <tr>
        <th><input type=\"checkbox\"  autocomplete=\"off\"  data-role=\"batch-select\"></th>
        <th width=\"50%\">题干</th>
        <th>类型</th>
        <th>最后更新</th>
        <th>操作</th>
      </tr>
      </thead>
      <tbody>
        ";
        // line 88
        if (isset($context["questions"])) { $_questions_ = $context["questions"]; } else { $_questions_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_questions_);
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 89
            echo "          ";
            $this->env->loadTemplate("TopxiaWebBundle:CourseQuestionManage:question-tr.html.twig")->display($context);
            // line 90
            echo "        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 91
            echo "          <tr>
            <td colspan=\"20\"><div class=\"empty\">一道题都没有，请点击右上角按钮，按不同的题型录入题目</div></td>
          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "      </tbody>
    </table>
    <div>
      <label class=\"checkbox-inline\"><input type=\"checkbox\"  autocomplete=\"off\" data-role=\"batch-select\"> 全选</label>
      <button class=\"btn btn-default btn-sm mlm\" data-role=\"batch-delete\"  data-name=\"题目\" data-url=\"";
        // line 99
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_question_deletes", array("courseId" => $this->getAttribute($_course_, "id"))), "html", null, true);
        echo "\">删除</button>
      <span class=\"pull-right text-muted\">共";
        // line 100
        if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_paginator_, "getItemCount", array(), "method"), "html", null, true);
        echo "题</span>
    </div>
    ";
        // line 102
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "paginator", array(0 => $_paginator_), "method"), "html", null, true);
        echo "
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseQuestionManage:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 102,  261 => 100,  256 => 99,  250 => 95,  241 => 91,  228 => 90,  225 => 89,  206 => 88,  187 => 71,  176 => 64,  166 => 59,  156 => 53,  151 => 50,  148 => 49,  145 => 48,  136 => 43,  131 => 42,  126 => 39,  123 => 38,  117 => 36,  114 => 35,  106 => 31,  103 => 30,  100 => 29,  92 => 23,  85 => 21,  82 => 20,  75 => 19,  68 => 18,  61 => 17,  54 => 16,  48 => 12,  45 => 11,  38 => 4,  33 => 9,  31 => 8,  28 => 6,  26 => 2,);
    }
}
