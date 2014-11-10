<?php

/* TopxiaWebBundle:CourseLesson:item-list-multi.html.twig */
class __TwigTemplate_aeb2a33a6499c0b76be3c917427e2047 extends Twig_Template
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
        echo "<div class=\"course-item-list-multi\">
";
        // line 2
        if (isset($context["groupedItems"])) { $_groupedItems_ = $context["groupedItems"]; } else { $_groupedItems_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_groupedItems_);
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 3
            echo "\t";
            if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
            if (($this->getAttribute($_group_, "type") == "chapter")) {
                // line 4
                echo "\t\t";
                if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                $context["chapter"] = $this->getAttribute($_group_, "data");
                // line 5
                echo "\t\t";
                if (isset($context["chapter"])) { $_chapter_ = $context["chapter"]; } else { $_chapter_ = null; }
                if (($this->getAttribute($_chapter_, "type") == "unit")) {
                    // line 6
                    echo "\t\t\t<h4>第 ";
                    if (isset($context["chapter"])) { $_chapter_ = $context["chapter"]; } else { $_chapter_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_chapter_, "number"), "html", null, true);
                    echo " 节： <strong>";
                    if (isset($context["chapter"])) { $_chapter_ = $context["chapter"]; } else { $_chapter_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_chapter_, "title"), "html", null, true);
                    echo "</strong></h4>
\t\t";
                } else {
                    // line 8
                    echo "\t\t\t<h3>第 ";
                    if (isset($context["chapter"])) { $_chapter_ = $context["chapter"]; } else { $_chapter_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_chapter_, "number"), "html", null, true);
                    echo " 章：　<strong>";
                    if (isset($context["chapter"])) { $_chapter_ = $context["chapter"]; } else { $_chapter_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_chapter_, "title"), "html", null, true);
                    echo "</strong></h3>
\t\t";
                }
                // line 10
                echo "\t";
            } else {
                // line 11
                echo "\t\t<ul class=\"row\">
\t\t\t";
                // line 12
                if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_group_, "data"));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 13
                    echo "\t\t\t\t<li class=\"";
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    if (($this->getAttribute($_item_, "type") == "live")) {
                        echo "col-md-6 live-item";
                    } else {
                        echo "col-md-4";
                    }
                    echo " clearfix item\">
\t\t\t\t\t<a class=\"item-object item-object-";
                    // line 14
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_item_, "type"), "html", null, true);
                    echo "\" href=\"#modal\" data-toggle=\"modal\" data-url=\"";
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_lesson_preview", array("courseId" => $this->getAttribute($_item_, "courseId"), "lessonId" => $this->getAttribute($_item_, "id"))), "html", null, true);
                    echo "\" title=\"";
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_item_, "title"), "html", null, true);
                    echo "\">
\t\t\t\t\t\t";
                    // line 15
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    if ($this->getAttribute($_item_, "free")) {
                        echo "<span class=\"item-free\"></span>";
                    }
                    // line 16
                    echo "\t\t\t\t\t\t<span class=\"item-icon\"></span>
\t\t\t\t\t\t";
                    // line 17
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    if (($this->getAttribute($_item_, "status") == "published")) {
                        // line 18
                        echo "\t\t\t\t\t\t\t<span class=\"item-length\">
\t\t\t\t\t\t\t\t";
                        // line 19
                        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                        if (($this->getAttribute($_item_, "type") == "text")) {
                            // line 20
                            echo "\t\t\t\t\t\t\t\t\t图文
\t\t\t\t\t\t\t\t";
                        } elseif (($this->getAttribute($_item_, "type") == "testpaper")) {
                            // line 22
                            echo "\t\t\t\t\t\t\t\t\t试卷
\t\t\t\t\t\t\t\t";
                        } elseif (($this->getAttribute($_item_, "type") == "live")) {
                            // line 24
                            echo "\t\t\t\t\t\t\t\t\t";
                            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->durationFilter($this->getAttribute($_item_, "length")), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t";
                        } elseif (($this->getAttribute($_item_, "type") == "ppt")) {
                            // line 26
                            echo "\t\t\t\t\t\t\t\t\tPPT
\t\t\t\t\t\t\t\t";
                        } else {
                            // line 28
                            echo "\t\t\t\t\t\t\t\t\t";
                            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->durationFilter($this->getAttribute($_item_, "length")), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t";
                        }
                        // line 30
                        echo "\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t";
                    } else {
                        // line 32
                        echo "\t\t\t\t\t\t\t<span class=\"item-length\">未发布</span>
\t\t\t\t\t\t";
                    }
                    // line 34
                    echo "\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"item-body\">
\t\t\t\t\t\t<div class=\"item-seq-name\">课时";
                    // line 36
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_item_, "number"), "html", null, true);
                    echo ":</div>
\t\t\t\t\t\t<div class=\"item-title\">
\t\t\t\t\t\t\t<a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
                    // line 38
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_lesson_preview", array("courseId" => $this->getAttribute($_item_, "courseId"), "lessonId" => $this->getAttribute($_item_, "id"))), "html", null, true);
                    echo "\" title=\"";
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_item_, "title"), "html", null, true);
                    echo "\">";
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_item_, "title"), "html", null, true);
                    echo "</a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"text-muted\" style=\"font-weight:normal;font-size:12px;color:#aaa;\">

\t\t\t\t\t\t\t\t";
                    // line 43
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    if (($this->getAttribute($_item_, "type") == "live")) {
                        // line 44
                        echo "
\t\t\t\t\t\t\t\t\t";
                        // line 45
                        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                        if (isset($context["currentTime"])) { $_currentTime_ = $context["currentTime"]; } else { $_currentTime_ = null; }
                        if (($this->getAttribute($_item_, "startTime") > $_currentTime_)) {
                            // line 46
                            echo "\t\t\t\t\t\t\t\t\t\t<span>";
                            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_item_, "startTime"), "m月d日"), "html", null, true);
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t";
                            // line 47
                            if (isset($context["weeks"])) { $_weeks_ = $context["weeks"]; } else { $_weeks_ = null; }
                            $context['_parent'] = (array) $context;
                            $context['_seq'] = twig_ensure_traversable($_weeks_);
                            foreach ($context['_seq'] as $context["key"] => $context["week"]) {
                                // line 48
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                                if (($_key_ == twig_date_format_filter($this->env, $this->getAttribute($_item_, "startTime"), "w"))) {
                                    // line 49
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t星期";
                                    if (isset($context["week"])) { $_week_ = $context["week"]; } else { $_week_ = null; }
                                    echo twig_escape_filter($this->env, $_week_, "html", null, true);
                                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 51
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['key'], $context['week'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 52
                            echo "\t\t\t\t\t\t\t\t\t\t\t";
                            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_item_, "startTime"), "H：i"), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t";
                        } elseif ((($this->getAttribute($_item_, "startTime") <= $_currentTime_) && ($this->getAttribute($_item_, "endTime") >= $_currentTime_))) {
                            // line 55
                            echo "\t\t\t\t\t\t\t\t\t\t<span class=\"text-warning\">正在直播中</span>
\t\t\t\t\t\t\t\t\t";
                        } elseif (($this->getAttribute($_item_, "endTime") < $_currentTime_)) {
                            // line 57
                            echo "\t\t\t\t\t\t\t\t\t\t<span>直播结束</span>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 59
                        echo "
\t\t\t\t\t\t\t\t";
                    }
                    // line 61
                    echo "
\t\t\t\t\t\t\t</div>



\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 69
                echo "\t\t</ul>
\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseLesson:item-list-multi.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 72,  226 => 61,  222 => 59,  206 => 52,  200 => 51,  193 => 49,  188 => 48,  177 => 46,  173 => 45,  170 => 44,  167 => 43,  152 => 38,  146 => 36,  142 => 34,  138 => 32,  134 => 30,  123 => 26,  116 => 24,  108 => 20,  105 => 19,  102 => 18,  99 => 17,  96 => 16,  91 => 15,  80 => 14,  70 => 13,  65 => 12,  62 => 11,  49 => 8,  39 => 6,  35 => 5,  31 => 4,  22 => 2,  19 => 1,  59 => 10,  54 => 4,  48 => 5,  44 => 4,  27 => 3,  24 => 2,  21 => 1,  950 => 259,  947 => 258,  944 => 257,  939 => 255,  936 => 254,  889 => 247,  887 => 246,  884 => 245,  881 => 244,  876 => 242,  873 => 241,  826 => 235,  816 => 232,  810 => 228,  805 => 227,  802 => 226,  799 => 225,  794 => 223,  791 => 222,  744 => 215,  734 => 212,  728 => 208,  723 => 207,  720 => 206,  717 => 205,  712 => 203,  709 => 202,  662 => 196,  658 => 194,  645 => 192,  640 => 191,  637 => 190,  633 => 189,  629 => 187,  622 => 185,  619 => 184,  616 => 183,  613 => 182,  608 => 180,  605 => 179,  557 => 288,  554 => 287,  548 => 283,  537 => 276,  531 => 274,  525 => 272,  519 => 270,  515 => 268,  508 => 266,  506 => 265,  503 => 264,  500 => 263,  497 => 253,  494 => 252,  490 => 250,  488 => 240,  485 => 239,  482 => 238,  479 => 221,  476 => 220,  473 => 219,  470 => 218,  467 => 201,  464 => 200,  461 => 199,  459 => 178,  448 => 171,  440 => 165,  434 => 161,  430 => 160,  424 => 156,  421 => 155,  403 => 141,  385 => 132,  372 => 128,  363 => 121,  360 => 120,  356 => 118,  346 => 116,  336 => 114,  327 => 112,  318 => 110,  314 => 109,  311 => 108,  297 => 106,  294 => 105,  291 => 104,  284 => 99,  280 => 98,  273 => 95,  270 => 94,  262 => 90,  258 => 88,  254 => 87,  246 => 83,  242 => 81,  239 => 69,  233 => 78,  228 => 77,  223 => 76,  218 => 57,  214 => 55,  210 => 69,  202 => 67,  196 => 65,  191 => 64,  187 => 62,  183 => 47,  180 => 60,  172 => 56,  166 => 55,  157 => 50,  150 => 45,  148 => 44,  144 => 42,  137 => 40,  127 => 28,  124 => 37,  118 => 33,  114 => 31,  112 => 22,  109 => 29,  106 => 28,  103 => 27,  94 => 22,  88 => 18,  85 => 17,  82 => 16,  79 => 15,  72 => 10,  64 => 8,  52 => 7,  46 => 6,  43 => 5,  34 => 3,  29 => 13,);
    }
}
