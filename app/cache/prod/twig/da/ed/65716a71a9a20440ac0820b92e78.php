<?php

/* TopxiaWebBundle:My:layout.html.twig */
class __TwigTemplate_daed65716a71a9a20440ac0820b92e78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaWebBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
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
        echo "个人中心 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
";
        // line 7
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:My:avatarAlert"));
        echo "

<div class=\"row row-3-9\">
  <div class=\"col-md-3\">

    <div class=\"panel panel-default\">
      <div class=\"panel-body\">
        <div class=\"list-group-block\">

          ";
        // line 16
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if ($this->getAttribute($this->getAttribute($_app_, "user"), "isTeacher", array(), "method")) {
            // line 17
            echo "            <div class=\"list-group-panel\">
              <div class=\"list-group-heading\">我的教学</div>
              <ul class=\"list-group\">
               <a class=\"list-group-item
               ";
            // line 21
            if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
            if (($_side_nav_ == "my-teaching-courses")) {
                echo " active ";
            }
            echo "\" 
               href=\"";
            // line 22
            echo $this->env->getExtension('routing')->getPath("my_teaching_courses");
            echo "\">在教课程</a>
               <a class=\"list-group-item 
               ";
            // line 24
            if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
            if (($_side_nav_ == "my-teaching-questions")) {
                echo " active ";
            }
            echo "\" 
                href=\"";
            // line 25
            echo $this->env->getExtension('routing')->getPath("my_teaching_threads", array("type" => "question"));
            echo "\">学员问答</a>
               <a class=\"list-group-item ";
            // line 26
            if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
            if (($_side_nav_ == "my-teaching-discussions")) {
                echo " active ";
            }
            echo "\"
                href=\"";
            // line 27
            echo $this->env->getExtension('routing')->getPath("my_teaching_threads", array("type" => "discussion"));
            echo "\">学员话题</a>
               <a class=\"list-group-item ";
            // line 28
            if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
            if (($_side_nav_ == "my-teaching-check")) {
                echo " active ";
            }
            echo "\"
                href=\"";
            // line 29
            echo $this->env->getExtension('routing')->getPath("course_manage_list_teacher_test_reviewing");
            echo "\">我的批阅</a>
              </ul>
            </div>
          ";
        }
        // line 33
        echo "
          <div class=\"list-group-panel\">
            <div class=\"list-group-heading\">我的学习</div>
            <ul class=\"list-group\">
               <a class=\"list-group-item
               ";
        // line 38
        if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
        if (($_side_nav_ == "my-learning")) {
            echo " active ";
        }
        echo "\" 
               href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("my_courses_learning");
        echo "\">我的课程</a>
               ";
        // line 40
        if ($this->env->getExtension('topxia_web_twig')->getSetting("course.live_course_enabled")) {
            // line 41
            echo "               <a class=\"list-group-item
               ";
            // line 42
            if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
            if (($_side_nav_ == "my-learning-live")) {
                echo " active ";
            }
            echo "\" 
               href=\"";
            // line 43
            echo $this->env->getExtension('routing')->getPath("my_live_courses_learning");
            echo "\">我的直播课表</a>
               ";
        }
        // line 45
        echo "               <a class=\"list-group-item
               ";
        // line 46
        if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
        if (($_side_nav_ == "my-questions")) {
            echo " active ";
        }
        echo "\" 
              href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("my_questions");
        echo "\">我的问答</a>
               <a class=\"list-group-item
               ";
        // line 49
        if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
        if (($_side_nav_ == "my-discussions")) {
            echo " active ";
        }
        echo "\" 
              href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("my_discussions");
        echo "\">我的话题</a>
               <a class=\"list-group-item
               ";
        // line 52
        if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
        if (($_side_nav_ == "my-notes")) {
            echo " active ";
        }
        echo "\" 
                href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("my_notebooks");
        echo "\">我的笔记</a>
               <a class=\"list-group-item
               ";
        // line 55
        if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
        if (($_side_nav_ == "my-quiz")) {
            echo " active ";
        }
        echo "\" 
                href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("my_quiz");
        echo "\">我的考试</a>
               <a class=\"list-group-item
               ";
        // line 58
        if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
        if (($_side_nav_ == "my-group")) {
            echo " active ";
        }
        echo "\" 
               href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("group_member_center");
        echo "\">我的小组</a>
            </ul>
          </div>

          <div class=\"list-group-panel\">
            <div class=\"list-group-heading\">订单</div>
            <ul class=\"list-group\">
              <a class=\"list-group-item 
               ";
        // line 67
        if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
        if (($_side_nav_ == "my-orders")) {
            echo " active ";
        }
        echo " \" 
               href=\"";
        // line 68
        echo $this->env->getExtension('routing')->getPath("my_orders");
        echo "\">我的订单</a>
            </ul>
          </div>
          
        </div>
      </div>
    </div>

  </div>
  <div class=\"col-md-9\">";
        // line 77
        $this->displayBlock('main', $context, $blocks);
        echo "</div>
</div>

";
    }

    public function block_main($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:My:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 77,  223 => 68,  216 => 67,  205 => 59,  198 => 58,  193 => 56,  186 => 55,  181 => 53,  174 => 52,  169 => 50,  150 => 46,  147 => 45,  132 => 41,  126 => 39,  119 => 38,  112 => 33,  98 => 28,  87 => 26,  83 => 25,  76 => 24,  71 => 22,  64 => 21,  58 => 17,  55 => 16,  43 => 7,  40 => 6,  37 => 5,  30 => 3,  187 => 74,  182 => 71,  175 => 69,  162 => 49,  157 => 47,  152 => 60,  142 => 43,  135 => 42,  130 => 40,  125 => 49,  120 => 46,  116 => 44,  113 => 43,  105 => 29,  94 => 27,  89 => 37,  84 => 34,  78 => 33,  59 => 16,  53 => 14,  50 => 13,  46 => 12,  41 => 9,  38 => 7,  31 => 3,  26 => 5,);
    }
}
