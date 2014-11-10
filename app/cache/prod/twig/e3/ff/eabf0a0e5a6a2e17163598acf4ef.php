<?php

/* TopxiaWebBundle:CourseManage:layout.html.twig */
class __TwigTemplate_e3ffeabf0a0e5a6a2e17163598acf4ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaWebBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'side' => array($this, 'block_side'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "课程管理 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
  ";
        // line 7
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Course:header", array("course" => $_course_, "manage" => true)));
        echo "

<div class=\"row\">
  <div class=\"col-md-3\">
    ";
        // line 11
        $this->displayBlock('side', $context, $blocks);
        // line 64
        echo "  </div>
  <div class=\"col-md-9\">
    ";
        // line 66
        $this->displayBlock('main', $context, $blocks);
        // line 67
        echo "  </div>
</div>
";
    }

    // line 11
    public function block_side($context, array $blocks = array())
    {
        // line 12
        echo "      ";
        if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
        $context["side_nav"] = ((array_key_exists("side_nav", $context)) ? (_twig_default_filter($_side_nav_, null)) : (null));
        // line 13
        echo "      <div class=\"panel panel-default\">
        <div class=\"panel-body\">
          <div class=\"list-group-panel\">
            <div class=\"list-group-heading\">课程信息</div>
            <div class=\"list-group\">
              <a class=\"list-group-item ";
        // line 18
        if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
        if (($_side_nav_ == "base")) {
            echo "active";
        }
        echo "\" href=\"";
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_base", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
        echo "\">基本信息</a>
              <a class=\"list-group-item ";
        // line 19
        if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
        if (($_side_nav_ == "detail")) {
            echo "active";
        }
        echo "\" href=\"";
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_detail", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
        echo "\">详细信息</a>
              <a class=\"list-group-item ";
        // line 20
        if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
        if (($_side_nav_ == "picture")) {
            echo "active";
        }
        echo "\" href=\"";
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_picture", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
        echo "\">课程图片</a>
              <a class=\"list-group-item ";
        // line 21
        if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
        if (($_side_nav_ == "lesson")) {
            echo "active";
        }
        echo "\" href=\"";
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
        echo "\">课时管理</a>
              ";
        // line 22
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if (($this->getAttribute($_course_, "type") == "live")) {
            // line 23
            echo "              <a class=\"list-group-item ";
            if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
            if (($_side_nav_ == "replay")) {
                echo "active";
            }
            echo "\" href=\"";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("live_course_manage_replay", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
            echo "\">录播管理</a>
              ";
        }
        // line 25
        echo "              <a class=\"list-group-item ";
        if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
        if (($_side_nav_ == "files")) {
            echo "active";
        }
        echo "\" href=\"";
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_files", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
        echo "\">文件管理</a>
            </div>
          </div><!-- /list-group-block -->

          <div class=\"list-group-panel\">
            <div class=\"list-group-heading\">课程设置</div>
            <div class=\"list-group\">
              <a class=\"list-group-item ";
        // line 32
        if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
        if (($_side_nav_ == "price")) {
            echo "active";
        }
        echo "\" href=\"";
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_price", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
        echo "\">价格设置</a>
              <a class=\"list-group-item ";
        // line 33
        if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
        if (($_side_nav_ == "teachers")) {
            echo "active";
        }
        echo "\" href=\"";
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_teachers", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
        echo "\">教师设置</a>
              <a class=\"list-group-item ";
        // line 34
        if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
        if (($_side_nav_ == "students")) {
            echo "active";
        }
        echo "\" href=\"";
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_students", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
        echo "\">学员管理</a>
            </div>
          </div>
          ";
        // line 37
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if (($this->getAttribute($_course_, "type") == "normal")) {
            // line 38
            echo "          <div class=\"list-group-panel\">
            <div class=\"list-group-heading\">题库</div>
            <div class=\"list-group\">
              <a class=\"list-group-item ";
            // line 41
            if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
            if (($_side_nav_ == "question")) {
                echo "active";
            }
            echo "\" href=\"";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_question", array("courseId" => $this->getAttribute($_course_, "id"))), "html", null, true);
            echo "\">题目管理</a>

              ";
            // line 43
            if ($this->env->getExtension('topxia_web_twig')->getSetting("question_plus.enabled")) {
                // line 44
                echo "                <a class=\"list-group-item ";
                if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
                if (($_side_nav_ == "question_plumber")) {
                    echo "active";
                }
                echo "\" href=\"";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_question_plumber", array("courseId" => $this->getAttribute($_course_, "id"), "type" => "import")), "html", null, true);
                echo "\">题目导入/导出</a>
              ";
            }
            // line 46
            echo "
              <a class=\"list-group-item ";
            // line 47
            if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
            if (($_side_nav_ == "question_category")) {
                echo "active";
            }
            echo "\" href=\"";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_question_category", array("courseId" => $this->getAttribute($_course_, "id"))), "html", null, true);
            echo "\">题目类别管理</a>
              <a class=\"list-group-item ";
            // line 48
            if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
            if (($_side_nav_ == "testpaper")) {
                echo "active";
            }
            echo "\" href=\"";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_testpaper", array("courseId" => $this->getAttribute($_course_, "id"))), "html", null, true);
            echo "\">试卷管理</a>
              <a class=\"list-group-item ";
            // line 49
            if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
            if (($_side_nav_ == "testCheck")) {
                echo "active";
            }
            echo "\" href=\"";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_test_check", array("id" => $this->getAttribute($_course_, "id"), "status" => "reviewing")), "html", null, true);
            echo "\">试卷批阅</a>
            </div>
          </div>
          ";
        }
        // line 53
        echo "
          <div class=\"list-group-panel\">
            <div class=\"list-group-heading\">课程运营</div>
            <div class=\"list-group\">
              <a class=\"list-group-item ";
        // line 57
        if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
        if (($_side_nav_ == "course_manage_data")) {
            echo "active";
        }
        echo "\" href=\"";
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_data", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
        echo "\">课程学习数据</a>
            </div>
          </div>
        </div>

      </div>
    ";
    }

    // line 66
    public function block_main($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseManage:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 66,  259 => 57,  253 => 53,  240 => 49,  230 => 48,  220 => 47,  217 => 46,  205 => 44,  203 => 43,  187 => 38,  184 => 37,  172 => 34,  162 => 33,  152 => 32,  120 => 22,  110 => 21,  100 => 20,  90 => 19,  80 => 18,  73 => 13,  69 => 12,  66 => 11,  60 => 67,  58 => 66,  54 => 64,  52 => 11,  44 => 7,  41 => 6,  38 => 5,  31 => 3,  192 => 41,  178 => 95,  166 => 87,  154 => 79,  148 => 75,  140 => 71,  135 => 25,  132 => 67,  123 => 23,  117 => 58,  104 => 52,  98 => 48,  95 => 47,  86 => 42,  74 => 34,  62 => 26,  53 => 21,  45 => 15,  42 => 14,  35 => 3,  30 => 8,  28 => 6,  26 => 5,);
    }
}
