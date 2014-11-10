<?php

/* TopxiaWebBundle:Course:progress-block.html.twig */
class __TwigTemplate_f29d9ff563673cfdea438259ecf01fd9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"panel panel-default\">
  <div class=\"panel-heading\"><h3 class=\"panel-title\">学习进度</h3></div>
  <div class=\"panel-body\">
    <div class=\"progress\">
      <div class=\"progress-bar\" style=\"width: ";
        // line 5
        if (isset($context["progress"])) { $_progress_ = $context["progress"]; } else { $_progress_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_progress_, "percent"), "html", null, true);
        echo ";\"></div>
    </div>
    <div class=\"clearfix\">
      ";
        // line 8
        if (isset($context["progress"])) { $_progress_ = $context["progress"]; } else { $_progress_ = null; }
        if (($this->getAttribute($_progress_, "percent") == "100%")) {
            // line 9
            echo "        <button class=\"btn btn-default btn-sm disabled pull-right\">您已完成全部课时的学习</button>
      ";
        } else {
            // line 11
            echo "        ";
            if (isset($context["nextLearnLesson"])) { $_nextLearnLesson_ = $context["nextLearnLesson"]; } else { $_nextLearnLesson_ = null; }
            if ($_nextLearnLesson_) {
                // line 12
                echo "          <a class=\"btn btn-primary btn-sm pull-right\" id=\"next-learn-btn\" href=\"";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_learn", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
                echo "#lesson/";
                if (isset($context["nextLearnLesson"])) { $_nextLearnLesson_ = $context["nextLearnLesson"]; } else { $_nextLearnLesson_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_nextLearnLesson_, "id"), "html", null, true);
                echo "\" title=\"继续学习：";
                if (isset($context["nextLearnLesson"])) { $_nextLearnLesson_ = $context["nextLearnLesson"]; } else { $_nextLearnLesson_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_nextLearnLesson_, "title"), "html", null, true);
                echo "\">继续学习</a>
        ";
            }
            // line 14
            echo "      ";
        }
        // line 15
        echo "
      <span class=\"text-muted\">已学: <strong class=\"text-success\">";
        // line 16
        if (isset($context["progress"])) { $_progress_ = $context["progress"]; } else { $_progress_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_progress_, "number"), "html", null, true);
        echo "</strong> / <strong>";
        if (isset($context["progress"])) { $_progress_ = $context["progress"]; } else { $_progress_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_progress_, "total"), "html", null, true);
        echo "</strong></span>

      ";
        // line 18
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if (($this->getAttribute($_course_, "giveCredit") > 0)) {
            // line 19
            echo "        <span class=\"text-muted mlm\">获得学分：<strong class=\"text-success\">";
            if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_member_, "credit"), "html", null, true);
            echo "</strong> / <strong>";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_course_, "giveCredit"), "html", null, true);
            echo "</strong></span>
      ";
        }
        // line 21
        echo "
      ";
        // line 22
        if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
        if (((!(($this->getAttribute($_member_, "deadline", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_member_, "deadline"), 0)) : (0))) == 0)) {
            // line 23
            echo "        <br>
        <span class=\"text-muted\">有效期： <strong class=\"text-success\" title=\"从 ";
            // line 24
            if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_member_, "createdTime"), "Y-m-d H:i"), "html", null, true);
            echo " 到 ";
            if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_member_, "deadline"), "Y-m-d H:i"), "html", null, true);
            echo "\">还有";
            if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->remainTimeFilter($this->getAttribute($_member_, "deadline")), "html", null, true);
            echo "</strong></span>
      ";
        }
        // line 26
        echo "
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:progress-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 24,  90 => 23,  74 => 19,  62 => 16,  59 => 15,  56 => 14,  39 => 11,  53 => 5,  32 => 8,  25 => 5,  23 => 2,  20 => 1,  355 => 134,  352 => 133,  345 => 128,  337 => 124,  334 => 123,  330 => 122,  327 => 121,  324 => 120,  318 => 116,  314 => 114,  310 => 112,  306 => 110,  302 => 108,  298 => 106,  295 => 105,  291 => 103,  288 => 102,  283 => 99,  279 => 97,  272 => 94,  269 => 93,  266 => 92,  258 => 88,  253 => 87,  247 => 83,  240 => 80,  237 => 79,  234 => 78,  231 => 77,  226 => 74,  217 => 70,  213 => 69,  210 => 68,  200 => 66,  193 => 64,  189 => 63,  186 => 62,  179 => 59,  174 => 58,  169 => 57,  162 => 54,  153 => 47,  147 => 45,  141 => 44,  136 => 43,  130 => 41,  125 => 40,  122 => 39,  119 => 38,  114 => 35,  111 => 34,  97 => 32,  92 => 31,  87 => 22,  84 => 21,  81 => 28,  76 => 25,  65 => 20,  61 => 19,  57 => 17,  50 => 14,  42 => 13,  35 => 9,  30 => 9,  21 => 2,  19 => 1,  113 => 38,  110 => 37,  105 => 26,  100 => 19,  88 => 29,  83 => 28,  78 => 27,  73 => 24,  71 => 18,  64 => 19,  54 => 13,  49 => 10,  31 => 7,  29 => 2,  69 => 22,  66 => 20,  63 => 6,  58 => 16,  55 => 15,  52 => 14,  46 => 9,  43 => 12,  40 => 8,  37 => 3,  34 => 6,  28 => 4,  26 => 3,);
    }
}
