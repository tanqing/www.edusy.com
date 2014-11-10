<?php

/* TopxiaWebBundle:CourseLesson:item-list.html.twig */
class __TwigTemplate_520f5b8ae8eec187d365a1d44723dcc5 extends Twig_Template
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
        if (isset($context["learnStatuses"])) { $_learnStatuses_ = $context["learnStatuses"]; } else { $_learnStatuses_ = null; }
        $context["learnStatuses"] = ((array_key_exists("learnStatuses", $context)) ? (_twig_default_filter($_learnStatuses_, array())) : (array()));
        // line 2
        if (isset($context["experience"])) { $_experience_ = $context["experience"]; } else { $_experience_ = null; }
        $context["experience"] = ((array_key_exists("experience", $context)) ? (_twig_default_filter($_experience_, false)) : (false));
        // line 3
        echo "<div class=\"course-item-list-wrap\">
\t";
        // line 4
        if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
        $context["class"] = ((array_key_exists("class", $context)) ? (_twig_default_filter($_class_, "")) : (""));
        // line 5
        echo "\t<ul class=\"course-item-list ";
        if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
        echo twig_escape_filter($this->env, $_class_, "html", null, true);
        echo " \" id=\"course-item-list\" >
\t\t";
        // line 6
        if (isset($context["items"])) { $_items_ = $context["items"]; } else { $_items_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_items_);
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
        foreach ($context['_seq'] as $context["id"] => $context["item"]) {
            // line 7
            echo "\t\t  ";
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            if (twig_in_filter("chapter", $_id_)) {
                // line 8
                echo "\t\t    ";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                if (($this->getAttribute($_item_, "type") == "unit")) {
                    // line 9
                    echo "\t\t\t\t  <li class=\"item chapter-item chapter-item-unit clearfix\">
\t\t\t\t  \t<span class=\"name\">第 ";
                    // line 10
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_item_, "number"), "html", null, true);
                    echo " 节</span>
\t\t\t\t  \t<span class=\"title\">";
                    // line 11
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_item_, "title"), "html", null, true);
                    echo "</span>
\t\t  \t  </li>
\t\t    ";
                } else {
                    // line 14
                    echo "\t\t\t\t  <li class=\"item chapter-item clearfix\">
\t\t\t\t  \t<span class=\"name\">第 ";
                    // line 15
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_item_, "number"), "html", null, true);
                    echo " 章</span>
\t\t\t\t  \t<span class=\"title\">";
                    // line 16
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_item_, "title"), "html", null, true);
                    echo "</span>
\t\t  \t  </li>
\t\t    ";
                }
                // line 19
                echo "\t\t  ";
            } elseif (twig_in_filter("lesson", $_id_)) {
                // line 20
                echo "\t    \t  ";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                $context["lessonUrl"] = (($this->env->getExtension('routing')->getPath("course_learn", array("id" => $this->getAttribute($_course_, "id"))) . "#lesson/") . $this->getAttribute($_item_, "id"));
                // line 21
                echo "\t\t    <li class=\"item lesson-item ";
                if (isset($context["learnStatuses"])) { $_learnStatuses_ = $context["learnStatuses"]; } else { $_learnStatuses_ = null; }
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                if ((($this->getAttribute($_learnStatuses_, $this->getAttribute($_item_, "id"), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_learnStatuses_, $this->getAttribute($_item_, "id"), array(), "array"), null)) : (null))) {
                    echo "lesson-item-";
                    if (isset($context["learnStatuses"])) { $_learnStatuses_ = $context["learnStatuses"]; } else { $_learnStatuses_ = null; }
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_learnStatuses_, $this->getAttribute($_item_, "id"), array(), "array"), "html", null, true);
                }
                echo " lesson-item-";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "id"), "html", null, true);
                echo " hover-item clearfix \" data-id=\"";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "id"), "html", null, true);
                echo "\" data-num=\"";
                if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_loop_, "index"), "html", null, true);
                echo "\">
\t\t    \t";
                // line 22
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                if (($this->getAttribute($_item_, "status") == "published")) {
                    echo "\t    \t
\t\t\t    \t";
                    // line 23
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    if (($this->getAttribute($_item_, "type") == "video")) {
                        // line 24
                        echo "\t\t\t\t    \t<span class=\"type\" title=\"视频时长";
                        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->durationFilter($this->getAttribute($_item_, "length")), "html", null, true);
                        echo "\">
\t\t\t\t    \t\t<span>";
                        // line 25
                        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->durationFilter($this->getAttribute($_item_, "length")), "html", null, true);
                        echo "</span>
\t\t\t\t    \t\t<span class=\"glyphicon glyphicon-play-circle\"></span>
\t\t\t\t    \t</span>
\t\t\t\t    ";
                    } elseif (($this->getAttribute($_item_, "type") == "audio")) {
                        // line 29
                        echo "\t\t\t\t      <span class=\"type\" title=\"音频时长";
                        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->durationFilter($this->getAttribute($_item_, "length")), "html", null, true);
                        echo "\">
\t\t\t\t    \t\t<span>";
                        // line 30
                        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->durationFilter($this->getAttribute($_item_, "length")), "html", null, true);
                        echo "</span>
\t\t\t\t    \t\t<span class=\"glyphicon glyphicon-volume-up\"></span>
\t\t\t\t      </span>
\t\t\t\t    ";
                    } elseif (($this->getAttribute($_item_, "type") == "text")) {
                        // line 34
                        echo "\t\t\t\t      <span class=\"type\">图文 <span class=\"glyphicon glyphicon-picture\"></span></span>
\t\t\t\t    ";
                    } elseif (($this->getAttribute($_item_, "type") == "testpaper")) {
                        // line 36
                        echo "\t\t\t\t      <span class=\"type\">试卷 <span class=\"glyphicon glyphicon-check\"></span></span>
\t\t\t\t    ";
                    } elseif (($this->getAttribute($_item_, "type") == "ppt")) {
                        // line 38
                        echo "\t\t\t\t      <span class=\"type\">PPT <span class=\"glyphicon glyphicon-picture\"></span></span>
\t\t\t\t    ";
                    } elseif (($this->getAttribute($_item_, "type") == "live")) {
                        // line 40
                        echo "\t\t\t\t       \t";
                        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                        if (isset($context["currentTime"])) { $_currentTime_ = $context["currentTime"]; } else { $_currentTime_ = null; }
                        if (($this->getAttribute($_item_, "startTime") > $_currentTime_)) {
                            // line 41
                            echo "\t\t\t\t\t\t\t<small class=\"type\">";
                            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_item_, "startTime"), "m月d日"), "html", null, true);
                            echo " 
\t\t\t\t\t\t\t\t";
                            // line 42
                            if (isset($context["weeks"])) { $_weeks_ = $context["weeks"]; } else { $_weeks_ = null; }
                            $context['_parent'] = (array) $context;
                            $context['_seq'] = twig_ensure_traversable($_weeks_);
                            foreach ($context['_seq'] as $context["key"] => $context["week"]) {
                                // line 43
                                echo "\t\t\t\t\t\t\t\t\t";
                                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                                if (($_key_ == twig_date_format_filter($this->env, $this->getAttribute($_item_, "startTime"), "w"))) {
                                    // line 44
                                    echo "\t\t\t\t\t\t\t\t\t\t星期";
                                    if (isset($context["week"])) { $_week_ = $context["week"]; } else { $_week_ = null; }
                                    echo twig_escape_filter($this->env, $_week_, "html", null, true);
                                    echo "
\t\t\t\t\t\t\t\t\t";
                                }
                                // line 46
                                echo "\t\t\t\t\t\t\t    ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['key'], $context['week'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 47
                            echo "\t\t\t\t\t\t\t\t";
                            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_item_, "startTime"), "H：i"), "html", null, true);
                            echo "
\t\t\t\t\t\t\t</small>
\t\t\t\t\t\t";
                        } elseif ((($this->getAttribute($_item_, "startTime") <= $_currentTime_) && ($this->getAttribute($_item_, "endTime") >= $_currentTime_))) {
                            // line 50
                            echo "\t\t\t\t\t\t\t<small class=\"type\">正在直播中</small>
\t\t\t\t\t\t";
                        } elseif (($this->getAttribute($_item_, "endTime") < $_currentTime_)) {
                            // line 52
                            echo "
\t\t\t\t\t\t\t<small class=\"type\" >
\t\t\t\t\t    \t\t";
                            // line 54
                            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                            if (($this->getAttribute($_item_, "replayStatus") == "generated")) {
                                // line 55
                                echo "\t\t\t\t\t    \t\t<span class=\"type\">回放</span>
\t\t\t\t\t    \t\t<span class=\"glyphicon 
\t\t\t\t\t    \t\tglyphicon-play-circle\"></span>
\t\t\t\t\t    \t\t";
                            } else {
                                // line 59
                                echo "\t\t\t\t\t    \t\t<span class=\"type\">直播结束</span>
\t\t\t\t\t    \t\t";
                            }
                            // line 61
                            echo "\t\t\t\t\t    \t</small>
\t\t\t\t\t\t\t
\t\t\t\t\t\t";
                        }
                        // line 64
                        echo "\t\t\t\t    ";
                    }
                    // line 65
                    echo "\t\t\t    ";
                } else {
                    // line 66
                    echo "\t\t\t      \t<span class=\"status\">未发布</span>
\t\t\t    ";
                }
                // line 68
                echo "
\t\t    \t<span class=\"name \">课时";
                // line 69
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "number"), "html", null, true);
                echo "</span>
\t\t    \t<span class=\"pie \">&nbsp;</span>
\t\t    \t<a class=\" title\" href=\"";
                // line 71
                if (isset($context["lessonUrl"])) { $_lessonUrl_ = $context["lessonUrl"]; } else { $_lessonUrl_ = null; }
                echo twig_escape_filter($this->env, $_lessonUrl_, "html", null, true);
                echo "\" title=\"";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "title"), "html", null, true);
                echo "\" data-id=\"";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "id"), "html", null, true);
                echo "\" data-experience=\"";
                if (isset($context["experience"])) { $_experience_ = $context["experience"]; } else { $_experience_ = null; }
                echo twig_escape_filter($this->env, $_experience_, "html", null, true);
                echo "\" style=\"white-space:nowrap; overflow:hidden; text-overflow: ellipsis;\">
\t\t\t    \t\t";
                // line 72
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "title"), "html", null, true);
                echo "
\t\t\t\t    ";
                // line 73
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                if (($this->getAttribute($_item_, "materialNum") > 0)) {
                    // line 74
                    echo "\t\t\t\t      <span class=\"glyphicon  glyphicon-download\" title=\"资料\"></span>
\t\t\t\t    ";
                }
                // line 76
                echo "
\t\t\t\t    ";
                // line 77
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                if (($this->getAttribute($_item_, "giveCredit") > 0)) {
                    // line 78
                    echo "\t\t\t\t      <small class=\"text-muted\">(";
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_item_, "giveCredit"), "html", null, true);
                    echo "学分)</small>
\t\t\t\t    ";
                }
                // line 80
                echo "
\t\t\t\t    ";
                // line 81
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                if (($this->getAttribute($_item_, "requireCredit") > 0)) {
                    // line 82
                    echo "\t\t\t\t      <small class=\"text-muted\">(需";
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_item_, "requireCredit"), "html", null, true);
                    echo "学分)</small>
\t\t\t\t    ";
                }
                // line 84
                echo "
\t\t    \t</a>
\t\t    \t<button class=\"btn btn-success btn-mini action\">开始学习</button>
\t\t    </li>
\t\t  ";
            }
            // line 89
            echo "\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "\t</ul>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseLesson:item-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  330 => 90,  316 => 89,  309 => 84,  302 => 82,  299 => 81,  296 => 80,  289 => 78,  286 => 77,  283 => 76,  279 => 74,  276 => 73,  271 => 72,  257 => 71,  251 => 69,  248 => 68,  244 => 66,  241 => 65,  238 => 64,  233 => 61,  229 => 59,  223 => 55,  220 => 54,  216 => 52,  212 => 50,  204 => 47,  198 => 46,  191 => 44,  186 => 43,  181 => 42,  175 => 41,  170 => 40,  166 => 38,  162 => 36,  158 => 34,  150 => 30,  144 => 29,  136 => 25,  130 => 24,  127 => 23,  122 => 22,  101 => 21,  96 => 20,  93 => 19,  86 => 16,  81 => 15,  78 => 14,  71 => 11,  66 => 10,  63 => 9,  59 => 8,  55 => 7,  37 => 6,  31 => 5,  28 => 4,  25 => 3,  22 => 2,  19 => 1,);
    }
}
