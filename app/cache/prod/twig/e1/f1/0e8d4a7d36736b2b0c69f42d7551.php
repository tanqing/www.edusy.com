<?php

/* TopxiaWebBundle:CourseStudentManage:index.html.twig */
class __TwigTemplate_e1f10e8d4a7d36736b2b0c69f42d7551 extends Twig_Template
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
        $context["side_nav"] = "students";
        // line 6
        $context["script_controller"] = "course-manage/students";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "学员管理 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        // line 9
        echo "
<div class=\"panel panel-default panel-col\">
  <div class=\"panel-heading\">学员管理
    ";
        // line 12
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if (($this->getAttribute($this->getAttribute($_app_, "user"), "isAdmin", array(), "method") || $this->env->getExtension('topxia_web_twig')->getSetting("course.teacher_export_student", false))) {
            // line 13
            echo "      <a class=\"btn btn-info btn-sm pull-right mhs\" href=\"";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_student_export_csv", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-export\"></i> 导出学员</a>
    ";
        }
        // line 15
        echo "    ";
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if (isset($context["isTeacherAuthManageStudent"])) { $_isTeacherAuthManageStudent_ = $context["isTeacherAuthManageStudent"]; } else { $_isTeacherAuthManageStudent_ = null; }
        if (($this->getAttribute($this->getAttribute($_app_, "user"), "isAdmin", array(), "method") || ($_isTeacherAuthManageStudent_ == 1))) {
            // line 16
            echo "      <button class=\"btn btn-info btn-sm pull-right mhs\" id=\"student-add-btn\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_student_create", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-plus\"></i> 添加学员</button>
    ";
        }
        // line 18
        echo "
  </div>
  
  <div class=\"panel-body\">  
      <form class=\"form-inline well well-sm \" action=\"\" method=\"get\" novalidate>

        <div class=\"form-group\">
          <input class=\"form-control \" type=\"text\" placeholder=\"请输入用户名\" name=\"nickName\" value=\"";
        // line 25
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "request"), "get", array(0 => "nickName"), "method"), "html", null, true);
        echo "\">

          <button class=\"btn btn-primary\">搜索</button>
        </div>
        <div class=\"clearfix\"></div>
        

    </form>
    <table class=\"table table-striped\" id=\"course-student-list\">
      <thead>
        <tr>
          <th width=\"40%\">学员</th>
          <th width=\"30%\">学习进度</th>
          <th width=\"30%\">操作</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 42
        if (isset($context["students"])) { $_students_ = $context["students"]; } else { $_students_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_students_);
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
        foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
            // line 43
            echo "          ";
            if (isset($context["users"])) { $_users_ = $context["users"]; } else { $_users_ = null; }
            if (isset($context["student"])) { $_student_ = $context["student"]; } else { $_student_ = null; }
            $context["user"] = $this->getAttribute($_users_, $this->getAttribute($_student_, "userId"), array(), "array");
            // line 44
            echo "          ";
            if (isset($context["progresses"])) { $_progresses_ = $context["progresses"]; } else { $_progresses_ = null; }
            if (isset($context["student"])) { $_student_ = $context["student"]; } else { $_student_ = null; }
            $context["progress"] = $this->getAttribute($_progresses_, $this->getAttribute($_student_, "userId"), array(), "array");
            // line 45
            echo "          ";
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            if (isset($context["followingIds"])) { $_followingIds_ = $context["followingIds"]; } else { $_followingIds_ = null; }
            $context["isFollowing"] = twig_in_filter($this->getAttribute($_user_, "id"), $_followingIds_);
            // line 46
            echo "          ";
            $this->env->loadTemplate("TopxiaWebBundle:CourseStudentManage:tr.html.twig")->display($context);
            // line 47
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
            // line 48
            echo "          <tr class=\"empty\"><td colspan=\"20\">无学员记录</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "      </tbody>
    </table>

    ";
        // line 53
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
        return "TopxiaWebBundle:CourseStudentManage:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 53,  157 => 50,  150 => 48,  137 => 47,  134 => 46,  129 => 45,  124 => 44,  119 => 43,  100 => 42,  79 => 25,  70 => 18,  63 => 16,  58 => 15,  51 => 13,  48 => 12,  43 => 9,  40 => 8,  33 => 3,  28 => 6,  26 => 5,);
    }
}
