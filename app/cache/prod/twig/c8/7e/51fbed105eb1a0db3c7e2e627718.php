<?php

/* TopxiaWebBundle:Course:courses-block-list.html.twig */
class __TwigTemplate_c87e51fbed105eb1a0db3c7e2e627718 extends Twig_Template
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
        echo "<ul class=\"course-wide-list\">
  ";
        // line 2
        if (isset($context["courses"])) { $_courses_ = $context["courses"]; } else { $_courses_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_courses_);
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
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 3
            echo "  <li class=\"course-item clearfix\">
    <a class=\"course-picture-link\" href=\"";
            // line 4
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
            echo "\">
      <img class=\"course-picture\" src=\"";
            // line 5
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getDefaultPath("coursePicture", $this->getAttribute($_course_, "middlePicture"), "large"), "html", null, true);
            echo "\" alt=\"";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_course_, "title"), "html", null, true);
            echo "\">
    </a>
    <div class=\"course-body\">
      <h4 class=\"course-title\"><a href=\"";
            // line 8
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
            echo "\">";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_course_, "title"), "html", null, true);
            echo "</a>
      ";
            // line 9
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if (($this->getAttribute($_course_, "serializeMode") == "serialize")) {
                // line 10
                echo "        <span class=\"label label-success \">更新中</span>
      ";
            } elseif (($this->getAttribute($_course_, "serializeMode") == "finished")) {
                // line 12
                echo "        <span class=\"label label-warning \">已完结</span>
      ";
            }
            // line 14
            echo "      ";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if (($this->getAttribute($_course_, "type") == "live")) {
                // line 15
                echo "          ";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                $context["lesson"] = (($this->getAttribute($_course_, "lesson", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_course_, "lesson", array(), "array"), null)) : (null));
                // line 16
                echo "          ";
                if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
                if ((($_lesson_ && (twig_date_format_filter($this->env, "now", "U") >= $this->getAttribute($_lesson_, "startTime"))) && (twig_date_format_filter($this->env, "now", "U") <= $this->getAttribute($_lesson_, "endTime")))) {
                    // line 17
                    echo "            <span class=\"label label-warning series-mode-label\">正在直播中</span>
          ";
                } else {
                    // line 19
                    echo "            <span class=\"label label-success series-mode-label\">直播</span>
          ";
                }
                // line 21
                echo "      ";
            }
            // line 22
            echo "      </h4>

      ";
            // line 24
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if (($this->getAttribute($_course_, "type") == "live")) {
                // line 25
                echo "        ";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                $context["lesson"] = (($this->getAttribute($_course_, "lesson", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_course_, "lesson"), null)) : (null));
                // line 26
                echo "        ";
                if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
                if ($_lesson_) {
                    // line 27
                    echo "          <div class=\"live-course-lesson mbm\">
            <span class=\"text-success fsm mrm\">";
                    // line 28
                    if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_lesson_, "startTime"), "n月j日 H:i"), "html", null, true);
                    echo " ~ ";
                    if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_lesson_, "endTime"), "H:i"), "html", null, true);
                    echo "</span>
            <span class=\"text-muted fsm mrm\">第";
                    // line 29
                    if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_lesson_, "number"), "html", null, true);
                    echo "课时</span>
          </div>
        ";
                }
                // line 32
                echo "      ";
            } else {
                // line 33
                echo "        <div class=\"course-about ellipsis\">";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_course_, "subtitle"), "html", null, true);
                echo "</div>
      ";
            }
            // line 35
            echo "
      <div class=\"course-footer clearfix\">
        ";
            // line 37
            if (isset($context["users"])) { $_users_ = $context["users"]; } else { $_users_ = null; }
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            $context["teacher"] = (($this->getAttribute($_users_, twig_first($this->env, $this->getAttribute($_course_, "teacherIds")), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_users_, twig_first($this->env, $this->getAttribute($_course_, "teacherIds")), array(), "array"), null)) : (null));
            // line 38
            echo "        ";
            if (isset($context["teacher"])) { $_teacher_ = $context["teacher"]; } else { $_teacher_ = null; }
            if ($_teacher_) {
                // line 39
                echo "          <div class=\"teacher\">
            <a href=\"";
                // line 40
                if (isset($context["teacher"])) { $_teacher_ = $context["teacher"]; } else { $_teacher_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($_teacher_, "id"))), "html", null, true);
                echo "\"><img src=\"";
                if (isset($context["teacher"])) { $_teacher_ = $context["teacher"]; } else { $_teacher_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getDefaultPath("avatar", $this->getAttribute($_teacher_, "smallAvatar"), ""), "html", null, true);
                echo "\" class=\"teacher-avatar\"></a>
            <a class=\"teacher-nickname ellipsis\" href=\"";
                // line 41
                if (isset($context["teacher"])) { $_teacher_ = $context["teacher"]; } else { $_teacher_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($_teacher_, "id"))), "html", null, true);
                echo "\">";
                if (isset($context["teacher"])) { $_teacher_ = $context["teacher"]; } else { $_teacher_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_teacher_, "nickname"), "html", null, true);
                echo "</a>
            <span class=\"teacher-title ellipsis\">";
                // line 42
                if (isset($context["teacher"])) { $_teacher_ = $context["teacher"]; } else { $_teacher_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_teacher_, "title"), "html", null, true);
                echo "</span>
          </div>
        ";
            }
            // line 45
            echo "        <div class=\"course-metas\">
          <span class=\"stars-";
            // line 46
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($_course_, "rating")), "html", null, true);
            echo "\">&nbsp;</span>
          <span class=\"divider\"></span>
          ";
            // line 48
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if (($this->getAttribute($_course_, "showStudentNumType") == "opened")) {
                // line 49
                echo "          <span class=\"text-muted mrm mls\"><strong>";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_course_, "studentNum"), "html", null, true);
                echo "</strong>学员</span>
          ";
            }
            // line 51
            echo "          ";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if ((($this->getAttribute($_course_, "price") > 0) && ($this->env->getExtension('topxia_web_twig')->getFreeLimitType($_course_) == "free_now"))) {
                // line 52
                echo "            <span class=\"free-money-text\"><del>";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_course_, "price"), "html", null, true);
                echo "</del></span>
          ";
            }
            // line 54
            echo "          <span class=\"course-price\">
            ";
            // line 55
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if (($this->getAttribute($_course_, "price") > 0)) {
                // line 56
                echo "              ";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                if (($this->env->getExtension('topxia_web_twig')->getFreeLimitType($_course_) == "free_now")) {
                    // line 57
                    echo "                0.00 元
              ";
                } else {
                    // line 59
                    echo "                ";
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_course_, "price"), "html", null, true);
                    echo "元
              ";
                }
                // line 60
                echo "  
            ";
            } else {
                // line 61
                echo "免费";
            }
            // line 62
            echo "          </span>
          <div class=\"countdown-list\">
            ";
            // line 64
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            $this->env->loadTemplate("TopxiaWebBundle:Course:countdown.html.twig")->display(array_merge($context, array("course" => $_course_)));
            // line 65
            echo "          </div>
          ";
            // line 66
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if (($this->env->getExtension('topxia_web_twig')->getFreeLimitType($_course_) == "free_now")) {
                // line 67
                echo "           <span class=\"text-muted text-sm\">
            到期时间
            <span>";
                // line 69
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_course_, "freeEndTime"), "n"), "html", null, true);
                echo "</span>月
            <span>";
                // line 70
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_course_, "freeEndTime"), "d"), "html", null, true);
                echo "</span>日
            <span>";
                // line 71
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_course_, "freeEndTime"), "H"), "html", null, true);
                echo "</span>时
          </span>
           ";
            }
            // line 74
            echo "        </div>
      </div>
    </div>
  </li>
  ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:courses-block-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 79,  273 => 74,  266 => 71,  261 => 70,  256 => 69,  252 => 67,  249 => 66,  246 => 65,  243 => 64,  239 => 62,  236 => 61,  232 => 60,  225 => 59,  221 => 57,  217 => 56,  214 => 55,  211 => 54,  204 => 52,  200 => 51,  193 => 49,  190 => 48,  184 => 46,  181 => 45,  174 => 42,  166 => 41,  158 => 40,  155 => 39,  151 => 38,  147 => 37,  143 => 35,  136 => 33,  133 => 32,  126 => 29,  118 => 28,  115 => 27,  104 => 24,  100 => 22,  93 => 19,  89 => 17,  85 => 16,  66 => 9,  48 => 5,  43 => 4,  40 => 3,  22 => 2,  111 => 26,  108 => 23,  99 => 21,  95 => 20,  86 => 18,  82 => 17,  79 => 16,  62 => 12,  56 => 10,  46 => 9,  35 => 8,  31 => 7,  24 => 4,  19 => 1,  128 => 25,  121 => 26,  119 => 25,  107 => 25,  97 => 21,  87 => 20,  76 => 19,  64 => 17,  61 => 16,  53 => 12,  50 => 11,  47 => 10,  37 => 3,  29 => 6,  27 => 5,  84 => 22,  81 => 15,  77 => 14,  73 => 12,  69 => 10,  65 => 13,  58 => 8,  52 => 11,  49 => 10,  45 => 8,  42 => 7,  32 => 8,  26 => 5,);
    }
}
