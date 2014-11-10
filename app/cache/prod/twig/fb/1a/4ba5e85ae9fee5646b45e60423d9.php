<?php

/* TopxiaWebBundle:Default:index.html.twig */
class __TwigTemplate_fb1a4ba5e85ae9fee5646b45e60423d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaWebBundle:Default:layout.html.twig");

        $this->blocks = array(
            'topbanner' => array($this, 'block_topbanner'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Default:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_topbanner($context, array $blocks = array())
    {
        // line 4
        echo "  ";
        $context["blocks"] = $this->env->getExtension('topxia_data_twig')->getData("Blocks", array("codes" => array(0 => "autumn:home_top_banner")));
        // line 5
        echo "  ";
        if (isset($context["blocks"])) { $_blocks_ = $context["blocks"]; } else { $_blocks_ = null; }
        if ($this->getAttribute($_blocks_, "autumn:home_top_banner", array(), "array")) {
            // line 6
            echo "    <div id=\"autumn-carousel\" class=\"carousel slide hidden-xs mbl\" data-ride=\"carousel\">
      <ol class=\"carousel-indicators\">
          <li data-target=\"#autumn-carousel\" data-slide-to=\"0\" class=\"active\"></li>
          <li data-target=\"#autumn-carousel\" data-slide-to=\"1\" class=\"\"></li>
          <li data-target=\"#autumn-carousel\" data-slide-to=\"2\" class=\"\"></li>
      </ol>
      <div class=\"carousel-inner\">";
            // line 12
            if (isset($context["blocks"])) { $_blocks_ = $context["blocks"]; } else { $_blocks_ = null; }
            echo $this->getAttribute($_blocks_, "autumn:home_top_banner", array(), "array");
            echo "</div>
      <a class=\"left carousel-control\" href=\"#autumn-carousel\" data-slide=\"prev\">
          <span class=\"glyphicon glyphicon-chevron-left\"></span>
      </a>
      <a class=\"right carousel-control\" href=\"#autumn-carousel\" data-slide=\"next\">
          <span class=\"glyphicon glyphicon-chevron-right\"></span>
      </a>
    </div>
  ";
        }
        // line 21
        echo "
";
    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        // line 25
        echo "  <div class=\"row\">
    <div class=\"col-md-8\">
      ";
        // line 28
        echo "      ";
        $context["recommendCourses"] = $this->env->getExtension('topxia_data_twig')->getData("RecommendCourses", array("count" => 3));
        // line 29
        echo "      ";
        if (isset($context["recommendCourses"])) { $_recommendCourses_ = $context["recommendCourses"]; } else { $_recommendCourses_ = null; }
        if ($_recommendCourses_) {
            // line 30
            echo "        <div class=\"panel panel-autumn panel-autumn-primary\">
          <div class=\"panel-heading panel-heading-important\">
            <h2 class=\"panel-title\">推荐课程 / <small>RecommendCourses</small></h2>
            <a class=\"pull-right more-autumn-primary\" href=\"";
            // line 33
            echo $this->env->getExtension('routing')->getPath("course_explore", array("sort" => "recommendedSeq"));
            echo "\">More&gt;</a>
          </div>
          <div class=\"panel-body\">
            <ul class=\"autumn-grids\">
              ";
            // line 37
            if (isset($context["recommendCourses"])) { $_recommendCourses_ = $context["recommendCourses"]; } else { $_recommendCourses_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_recommendCourses_);
            foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                // line 38
                echo "                ";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                if ($_course_) {
                    // line 39
                    echo "                  <li class=\"autumn-grid autumn-course-grid\">
                    <a href=\"";
                    // line 40
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
                    echo "\" class=\"course-picture\"><img src=\"";
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getDefaultPath("coursePicture", $this->getAttribute($_course_, "middlePicture"), "large"), "html", null, true);
                    echo "\">
                      ";
                    // line 41
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    if (($this->getAttribute($_course_, "serializeMode") == "serialize")) {
                        // line 42
                        echo "                        <span class=\"label label-success series-mode-label\">更新中</span>
                      ";
                    } elseif (($this->getAttribute($_course_, "serializeMode") == "finished")) {
                        // line 44
                        echo "                        <span class=\"label label-warning series-mode-label\">已完结</span>
                      ";
                    }
                    // line 46
                    echo "                    </a>
                    <h3 class=\"course-name\"><a href=\"";
                    // line 47
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
                    echo "\">";
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_course_, "title"), "html", null, true);
                    echo "</a></h3>
                    <div class=\"course-about\">";
                    // line 48
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($_course_, "about"), 60);
                    echo "</div>

                    <div class=\"course-metas\">
                      <span class=\"price\">";
                    // line 51
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    if (($this->getAttribute($_course_, "price") > 0)) {
                        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_course_, "price"), "html", null, true);
                        echo "元";
                    } else {
                        echo "免费";
                    }
                    echo "</span>
                      <span class=\"teachers\">
                         主讲：
                        ";
                    // line 54
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($_course_, "teachers"));
                    foreach ($context['_seq'] as $context["_key"] => $context["teacher"]) {
                        // line 55
                        echo "                         ";
                        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
                        if (isset($context["teacher"])) { $_teacher_ = $context["teacher"]; } else { $_teacher_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "user_link", array(0 => $_teacher_, 1 => "text-muted"), "method"), "html", null, true);
                        echo "
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teacher'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 57
                    echo "                      </span>
                    </div>
                  </li>
                ";
                }
                // line 61
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "            </ul>
          </div>
        </div>
      ";
        }
        // line 66
        echo "
      ";
        // line 68
        echo "      ";
        $context["latestCourses"] = $this->env->getExtension('topxia_data_twig')->getData("LatestCourses", array("count" => 6));
        // line 69
        echo "      ";
        if (isset($context["latestCourses"])) { $_latestCourses_ = $context["latestCourses"]; } else { $_latestCourses_ = null; }
        if ($_latestCourses_) {
            // line 70
            echo "        <div class=\"panel panel-autumn panel-autumn-default\">
          <div class=\"panel-heading panel-heading-important\">
            <h2 class=\"panel-title\">最新课程 / <small>LatestCourse</small></h2>
            <a class=\"pull-right more-autumn-default\" href=\"";
            // line 73
            echo $this->env->getExtension('routing')->getPath("course_explore");
            echo "\">More&gt;</a>
          </div>
          <div class=\"panel-body\">
            <ul class=\"autumn-grids\">
              ";
            // line 77
            if (isset($context["latestCourses"])) { $_latestCourses_ = $context["latestCourses"]; } else { $_latestCourses_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_latestCourses_);
            foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                // line 78
                echo "                ";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                if ($_course_) {
                    // line 79
                    echo "
                  <li class=\"autumn-grid autumn-course-grid\">
                    <a href=\"";
                    // line 81
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
                    echo "\" class=\"course-picture\"><img src=\"";
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getDefaultPath("coursePicture", $this->getAttribute($_course_, "largePicture"), "large"), "html", null, true);
                    echo "\">
                      ";
                    // line 82
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    if (($this->getAttribute($_course_, "status") == "draft")) {
                        // line 83
                        echo "                        <span class=\"label  label-warning course-status\">未发布</span>
                      ";
                    } elseif (($this->getAttribute($_course_, "status") == "closed")) {
                        // line 85
                        echo "                        <span class=\"label label-danger course-status\">已关闭</span>
                      ";
                    }
                    // line 86
                    echo " 

                      ";
                    // line 88
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    if (($this->getAttribute($_course_, "serializeMode") == "serialize")) {
                        // line 89
                        echo "                        <span class=\"label label-success series-mode-label\">更新中</span>
                      ";
                    } elseif (($this->getAttribute($_course_, "serializeMode") == "finished")) {
                        // line 91
                        echo "                        <span class=\"label label-warning series-mode-label\">已完结</span>
                      ";
                    }
                    // line 93
                    echo "
                      ";
                    // line 94
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    if (($this->getAttribute($_course_, "type") == "live")) {
                        // line 95
                        echo "                        ";
                        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                        $context["lesson"] = (($this->getAttribute($_course_, "lesson", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_course_, "lesson", array(), "array"), null)) : (null));
                        // line 96
                        echo "                        ";
                        if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
                        if ((($_lesson_ && (twig_date_format_filter($this->env, "now", "U") >= $this->getAttribute($_lesson_, "startTime"))) && (twig_date_format_filter($this->env, "now", "U") <= $this->getAttribute($_lesson_, "endTime")))) {
                            // line 97
                            echo "                          <span class=\"label label-warning series-mode-label\">正在直播中</span>
                        ";
                        } else {
                            // line 99
                            echo "                          <span class=\"label label-success series-mode-label\">直播</span>
                        ";
                        }
                        // line 101
                        echo "                      ";
                    }
                    // line 102
                    echo "                    </a>
                    <h3 class=\"course-name\"><a href=\"";
                    // line 103
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
                    echo "\">";
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_course_, "title"), "html", null, true);
                    echo "</a></h3>
                    <div class=\"course-about\">";
                    // line 104
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($_course_, "about"), 60);
                    echo "</div>
                    
                    <div class=\"course-metas\">
                      <span class=\"price\">";
                    // line 107
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    if (($this->getAttribute($_course_, "price") > 0)) {
                        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_course_, "price"), "html", null, true);
                        echo "元";
                    } else {
                        echo "免费";
                    }
                    echo "</span>
                      <span class=\"teachers\">
                         主讲：
                        ";
                    // line 110
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($_course_, "teachers"));
                    foreach ($context['_seq'] as $context["_key"] => $context["teacher"]) {
                        // line 111
                        echo "                         ";
                        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
                        if (isset($context["teacher"])) { $_teacher_ = $context["teacher"]; } else { $_teacher_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "user_link", array(0 => $_teacher_, 1 => "text-muted"), "method"), "html", null, true);
                        echo "
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teacher'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 113
                    echo "                      </span>
                    </div>
                  </li>
                ";
                }
                // line 117
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 118
            echo "            </ul>
          </div>
        </div>
      ";
        }
        // line 122
        echo "
      ";
        // line 123
        if ($this->env->getExtension('topxia_web_twig')->getSetting("course.live_course_enabled")) {
            // line 124
            echo "        ";
            if (isset($context["recentLiveCourses"])) { $_recentLiveCourses_ = $context["recentLiveCourses"]; } else { $_recentLiveCourses_ = null; }
            if ($_recentLiveCourses_) {
                // line 125
                echo "          <div class=\"panel panel-autumn panel-autumn-primary\">
            <div class=\"panel-heading panel-heading-important\">
              <h2 class=\"panel-title\">近期直播 / <small>LiveCourse</small></h2>
              ";
                // line 128
                if (isset($context["recentLiveCourses"])) { $_recentLiveCourses_ = $context["recentLiveCourses"]; } else { $_recentLiveCourses_ = null; }
                if ((twig_length_filter($this->env, $_recentLiveCourses_) >= 1)) {
                    // line 129
                    echo "                <a class=\"pull-right more-autumn-primary\" href=\"";
                    echo $this->env->getExtension('routing')->getPath("live_course_explore");
                    echo "\">More&gt;</a>
              ";
                }
                // line 131
                echo "            </div>
            <div class=\"panel-body\">
              <ul class=\"autumn-grids\">
                ";
                // line 134
                if (isset($context["recentLiveCourses"])) { $_recentLiveCourses_ = $context["recentLiveCourses"]; } else { $_recentLiveCourses_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($_recentLiveCourses_);
                foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                    // line 135
                    echo "                ";
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    $context["lesson"] = $this->getAttribute($_course_, "lesson");
                    // line 136
                    echo "
                  ";
                    // line 137
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    if ($_course_) {
                        // line 138
                        echo "                    <li class=\"autumn-grid autumn-course-grid\">
                      <a href=\"";
                        // line 139
                        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
                        echo "\" class=\"course-picture\"><img src=\"";
                        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getDefaultPath("coursePicture", $this->getAttribute($_course_, "largePicture"), ""), "html", null, true);
                        echo "\">
                        ";
                        // line 140
                        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                        if (($this->getAttribute($_course_, "status") == "draft")) {
                            // line 141
                            echo "                          <span class=\"label  label-warning course-status\">未发布</span>
                        ";
                        } elseif (($this->getAttribute($_course_, "status") == "closed")) {
                            // line 143
                            echo "                          <span class=\"label label-danger course-status\">已关闭</span>
                        ";
                        }
                        // line 144
                        echo " 

                        ";
                        // line 146
                        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                        if (($this->getAttribute($_course_, "serializeMode") == "serialize")) {
                            // line 147
                            echo "                          <span class=\"label label-success series-mode-label\">更新中</span>
                        ";
                        } elseif (($this->getAttribute($_course_, "serializeMode") == "finished")) {
                            // line 149
                            echo "                          <span class=\"label label-warning series-mode-label\">已完结</span>
                        ";
                        }
                        // line 151
                        echo "
                        ";
                        // line 152
                        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                        if (($this->getAttribute($_course_, "type") == "live")) {
                            // line 153
                            echo "                          ";
                            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                            $context["lesson"] = (($this->getAttribute($_course_, "lesson", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_course_, "lesson", array(), "array"), null)) : (null));
                            // line 154
                            echo "                          ";
                            if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
                            if ((($_lesson_ && (twig_date_format_filter($this->env, "now", "U") >= $this->getAttribute($_lesson_, "startTime"))) && (twig_date_format_filter($this->env, "now", "U") <= $this->getAttribute($_lesson_, "endTime")))) {
                                // line 155
                                echo "                            <span class=\"label label-warning series-mode-label\">正在直播中</span>
                          ";
                            } else {
                                // line 157
                                echo "                            <span class=\"label label-success series-mode-label\">直播</span>
                          ";
                            }
                            // line 159
                            echo "                        ";
                        }
                        // line 160
                        echo "                      </a>
                      <h3 class=\"course-name\"><a href=\"";
                        // line 161
                        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
                        echo "\">";
                        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_course_, "title"), "html", null, true);
                        echo "</a></h3>
                      <div class=\"live-course-lesson\">
                        <span class=\"live-time mrm\">";
                        // line 163
                        if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_lesson_, "startTime"), "n月j日 H:i"), "html", null, true);
                        echo " ~ ";
                        if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_lesson_, "endTime"), "H:i"), "html", null, true);
                        echo "</span>
                        <p class=\"text-warning mrs\">";
                        // line 164
                        if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_lesson_, "title"), "html", null, true);
                        echo "</p>
                      </div>

                      <div class=\"course-metas\">
                        <span class=\"price\">";
                        // line 168
                        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                        if (($this->getAttribute($_course_, "price") > 0)) {
                            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($_course_, "price"), "html", null, true);
                            echo "元";
                        } else {
                            echo "免费";
                        }
                        echo "</span>
                        <span class=\"teachers\">
                           主讲：
                          ";
                        // line 171
                        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_course_, "teachers"));
                        foreach ($context['_seq'] as $context["_key"] => $context["teacher"]) {
                            // line 172
                            echo "                           ";
                            if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
                            if (isset($context["teacher"])) { $_teacher_ = $context["teacher"]; } else { $_teacher_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "user_link", array(0 => $_teacher_, 1 => "text-muted"), "method"), "html", null, true);
                            echo "
                          ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teacher'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 174
                        echo "                        </span>
                      </div>
                    </li>
                  ";
                    } else {
                        // line 178
                        echo "                    <div class=\"empty\">无推荐课程，请在后台课程管理设置。</div>
                  ";
                    }
                    // line 180
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 181
                echo "              </ul>


            </div>
          </div>
        ";
            }
            // line 187
            echo "      ";
        }
        // line 188
        echo "
      ";
        // line 190
        echo "
      ";
        // line 191
        $context["articles"] = $this->env->getExtension('topxia_data_twig')->getData("LatestArticles", array("count" => 4));
        // line 192
        echo "      ";
        if (isset($context["articles"])) { $_articles_ = $context["articles"]; } else { $_articles_ = null; }
        if ($_articles_) {
            // line 193
            echo "        <div class=\"panel panel-autumn panel-autumn-default\">
          <div class=\"panel-heading panel-heading-important\">
            <h2 class=\"panel-title\">最新资讯 / <small>The latest infomation</small></h2>
            <a class=\"pull-right more-autumn-default\" href=\"";
            // line 196
            echo $this->env->getExtension('routing')->getPath("article_show");
            echo "\">More&gt;</a>
          </div>
          <div class=\"panel-body news\">
            <ul class=\"row\">
            ";
            // line 200
            if (isset($context["articles"])) { $_articles_ = $context["articles"]; } else { $_articles_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_articles_);
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 201
                echo "              ";
                if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                if ($_article_) {
                    // line 202
                    echo "                <li class=\"col-md-6\">
                  <em>";
                    // line 203
                    if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_article_, "updatedTime"), "m-d H:i"), "html", null, true);
                    echo " </em>
                  <a href=\"";
                    // line 204
                    if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_detail", array("id" => $this->getAttribute($_article_, "id"))), "html", null, true);
                    echo "\"> <span>[";
                    if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_article_, "category"), "name"), "html", null, true);
                    echo "]</span>";
                    if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_article_, "title"), "html", null, true);
                    echo " </a>
                </li>
              ";
                }
                // line 207
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 208
            echo "            </ul>
          </div>
        </div>
      ";
        }
        // line 212
        echo "

      ";
        // line 215
        echo "      ";
        $context["threads"] = $this->env->getExtension('topxia_data_twig')->getData("EliteCourseThreadsByType", array("count" => 4, "type" => "discussion"));
        // line 216
        echo "      ";
        if (isset($context["threads"])) { $_threads_ = $context["threads"]; } else { $_threads_ = null; }
        if ($_threads_) {
            // line 217
            echo "        <div class=\"panel panel-autumn panel-autumn-primary\">
          <div class=\"panel-heading panel-heading-important\">
            <h2 class=\"panel-title\">课程讨论 / <small>Recommended Copics</small></h2>
          </div>
          <div class=\"panel-body topic\">
            <ul class=\"row\">
              ";
            // line 223
            if (isset($context["threads"])) { $_threads_ = $context["threads"]; } else { $_threads_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_threads_);
            foreach ($context['_seq'] as $context["_key"] => $context["thread"]) {
                // line 224
                echo "                ";
                if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
                if ($_thread_) {
                    // line 225
                    echo "                  <li class=\"col-md-6\">
                    <div class=\"topic-item\">
                      <h4>
                        <a href=\"";
                    // line 228
                    if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_thread_show", array("courseId" => $this->getAttribute($_thread_, "courseId"), "id" => $this->getAttribute($_thread_, "id"))), "html", null, true);
                    echo "\">";
                    if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
                    echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($_thread_, "title"), 28);
                    echo "</a>
                      </h4>
                      <div class=\"topic-body\">
                        ";
                    // line 231
                    if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
                    $context["user"] = $this->getAttribute($_thread_, "user");
                    // line 232
                    echo "                        ";
                    if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
                    $context["latestPostUser"] = $this->getAttribute($_thread_, "latestPostUser");
                    // line 233
                    echo "                        <img src=\"";
                    if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getDefaultPath("avatar", $this->getAttribute($this->getAttribute($_thread_, "user"), "mediumAvatar"), ""), "html", null, true);
                    echo "\" class=\"pull-left\">
                        <h3>";
                    // line 234
                    if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_user_, "nickname"), "html", null, true);
                    echo "</h3>
                        <p><a href=\"";
                    // line 235
                    if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($this->getAttribute($_thread_, "course"), "id"))), "html", null, true);
                    echo "\">";
                    if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_thread_, "course"), "title"), "html", null, true);
                    echo "</a></p>
                      </div>

                      <p class=\"topic-bottom\">
                        <span>";
                    // line 239
                    if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
                    if (isset($context["latestPostUser"])) { $_latestPostUser_ = $context["latestPostUser"]; } else { $_latestPostUser_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "user_link", array(0 => $_latestPostUser_), "method"), "html", null, true);
                    echo "  </span>
            ";
                    // line 240
                    if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->smarttimeFilter($this->getAttribute($_thread_, "latestPostTime")), "html", null, true);
                    echo "回复
                        <span class=\"pull-right\">共 ";
                    // line 241
                    if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_thread_, "postNum"), "html", null, true);
                    echo " 个回复</span>
                      </p>
                    </div>
                  </li>
                ";
                }
                // line 246
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thread'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 247
            echo "            </ul>
          </div>
        </div>
      ";
        }
        // line 251
        echo "      
      ";
        // line 253
        echo "      ";
        $context["teachers"] = $this->env->getExtension('topxia_data_twig')->getData("RecommendTeachers", array("count" => "3"));
        // line 254
        echo "      ";
        if (isset($context["teachers"])) { $_teachers_ = $context["teachers"]; } else { $_teachers_ = null; }
        if ($_teachers_) {
            // line 255
            echo "        <div class=\"panel panel-autumn panel-autumn-default\">
          <div class=\"panel-heading panel-heading-important\">
            <h2 class=\"panel-title\">讲师团 / <small>Teachers</small></h2>
            <a class=\"pull-right more-autumn-default\" href=\"";
            // line 258
            echo $this->env->getExtension('routing')->getPath("teacher");
            echo "\">More&gt;</a>
          </div>
          <div class=\"panel-body teachers\">
            <ul class=\"row teacher-grids\">
              ";
            // line 262
            if (isset($context["teachers"])) { $_teachers_ = $context["teachers"]; } else { $_teachers_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_teachers_);
            foreach ($context['_seq'] as $context["_key"] => $context["teacher"]) {
                // line 263
                echo "                ";
                if (isset($context["teacher"])) { $_teacher_ = $context["teacher"]; } else { $_teacher_ = null; }
                if ($_teacher_) {
                    // line 264
                    echo "                  <li class=\"col-sm-6 col-md-4\">
                    <div class=\"teachers-item\">
                      <a href=\"";
                    // line 266
                    if (isset($context["teacher"])) { $_teacher_ = $context["teacher"]; } else { $_teacher_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($_teacher_, "id"))), "html", null, true);
                    echo "\">
                       <img class=\"img-circle\" src=\"";
                    // line 267
                    if (isset($context["teacher"])) { $_teacher_ = $context["teacher"]; } else { $_teacher_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getDefaultPath("avatar", $this->getAttribute($_teacher_, "mediumAvatar"), ""), "html", null, true);
                    echo "\">
                      </a>
                        <span>";
                    // line 269
                    if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
                    if (isset($context["teacher"])) { $_teacher_ = $context["teacher"]; } else { $_teacher_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "user_link", array(0 => $_teacher_), "method"), "html", null, true);
                    echo "</span>
                          <i> ";
                    // line 270
                    if (isset($context["teacher"])) { $_teacher_ = $context["teacher"]; } else { $_teacher_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_teacher_, "title"), "html", null, true);
                    echo "</i>
                          <p> ";
                    // line 271
                    if (isset($context["teacher"])) { $_teacher_ = $context["teacher"]; } else { $_teacher_ = null; }
                    echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($_teacher_, "about"), 50);
                    echo "</p>
                       </div>
                  </li>
                ";
                }
                // line 275
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teacher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 276
            echo "              </ul>
          </div>
        </div>
      ";
        }
        // line 280
        echo "
      ";
        // line 282
        echo "      ";
        if ($this->env->getExtension('topxia_web_twig')->getSetting("vip.enabled")) {
            // line 283
            echo "        ";
            $context["levels"] = $this->env->getExtension('topxia_data_twig')->getData("VipLevels", array("count" => 100));
            // line 284
            echo "        ";
            if (isset($context["levels"])) { $_levels_ = $context["levels"]; } else { $_levels_ = null; }
            if ($_levels_) {
                // line 285
                echo "          <div class=\"panel panel-autumn panel-autumn-primary\">
            <div class=\"panel-heading panel-heading-important\">
              <h2 class=\"panel-title\">会员专区 / <small>Member Of The Zone</small></h2>
            </div>
            <div class=\"panel-body vip\">
              <ul class=\"row vip-lists\">
                ";
                // line 291
                if (isset($context["levels"])) { $_levels_ = $context["levels"]; } else { $_levels_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($_levels_);
                foreach ($context['_seq'] as $context["_key"] => $context["level"]) {
                    // line 292
                    echo "                  ";
                    if (isset($context["level"])) { $_level_ = $context["level"]; } else { $_level_ = null; }
                    if ($_level_) {
                        // line 293
                        echo "                    <li class=\"col-sm-12\">
                      <div class=\"vip-item\">
                        <div class=\"row\">
                          <div class=\"col-sm-4 col-md-4\">
                            <a href=\"";
                        // line 297
                        if (isset($context["level"])) { $_level_ = $context["level"]; } else { $_level_ = null; }
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vip_course_explore", array("levelId" => $this->getAttribute($_level_, "id"))), "html", null, true);
                        echo "\">
                            <img class=\"img-responsive\" src=\"";
                        // line 298
                        if (isset($context["level"])) { $_level_ = $context["level"]; } else { $_level_ = null; }
                        echo twig_escape_filter($this->env, (($this->getAttribute($_level_, "picture", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_level_, "picture"), $this->env->getExtension('assets')->getAssetUrl("assets/img/default/vip-default.png"))) : ($this->env->getExtension('assets')->getAssetUrl("assets/img/default/vip-default.png"))), "html", null, true);
                        echo "\" alt=\"";
                        if (isset($context["level"])) { $_level_ = $context["level"]; } else { $_level_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_level_, "name"), "html", null, true);
                        echo "\">
                          </div>
                          </a>
                          <div class=\"col-sm-5 col-md-5\">
                            <h3>";
                        // line 302
                        if (isset($context["level"])) { $_level_ = $context["level"]; } else { $_level_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_level_, "name"), "html", null, true);
                        echo "</h3>
                            <p>";
                        // line 303
                        if (isset($context["level"])) { $_level_ = $context["level"]; } else { $_level_ = null; }
                        echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($_level_, "description"), 40);
                        echo "</p>
                          </div>
                          <div class=\"vip-price col-sm-3 col-md-3\">
                            <h4>¥&nbsp;";
                        // line 306
                        if (isset($context["level"])) { $_level_ = $context["level"]; } else { $_level_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_level_, "monthPrice"), "html", null, true);
                        echo "</h4>
                            <h4><a href=\"";
                        // line 307
                        echo $this->env->getExtension('routing')->getPath("vip_buy");
                        echo "\" class=\"btn btn-success\">立即购买</a></h4>
                          </div>
                        </div>
                      </div>
                    </li>
                  ";
                    }
                    // line 313
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['level'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 314
                echo "                </ul>
            </div>
          </div>
        ";
            }
            // line 318
            echo "      ";
        }
        // line 319
        echo "
      ";
        // line 321
        echo "      ";
        if ((($this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("group"), "group_show", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("group"), "group_show"), 1)) : (1))) {
            // line 322
            echo "        ";
            $context["groups"] = $this->env->getExtension('topxia_data_twig')->getData("HotGroup", array("count" => 15));
            // line 323
            echo "        ";
            if (isset($context["groups"])) { $_groups_ = $context["groups"]; } else { $_groups_ = null; }
            if ($_groups_) {
                // line 324
                echo "          <div class=\"panel panel-autumn panel-autumn-default hot-group\">
            <div class=\"panel-heading panel-heading-important\">
              <h2 class=\"panel-title\">最热小组</h2>
              <a href=\"";
                // line 327
                echo $this->env->getExtension('routing')->getPath("group_search_group");
                echo "\" class=\"pull-right\">更多&gt;</a></div>
            <div class=\"panel-body\">
               <ul class=\"list-unstyled\">
                ";
                // line 330
                if (isset($context["groups"])) { $_groups_ = $context["groups"]; } else { $_groups_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($_groups_);
                foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                    // line 331
                    echo "                  ";
                    if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                    if (($this->getAttribute($_group_, "status") == "open")) {
                        echo " 
                    <li class=\"col-md-6\"> 
                      <div class=\"panel\">
                         <div class=\"media\">
                            <a href=\"";
                        // line 335
                        if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $this->getAttribute($_group_, "id"))), "html", null, true);
                        echo "\" title=\"";
                        if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_group_, "title"), "html", null, true);
                        echo "\" class=\"pull-left\">
                              ";
                        // line 336
                        if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                        if ($this->getAttribute($_group_, "logo")) {
                            // line 337
                            echo "                              <img src=\"";
                            if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFilePath($this->getAttribute($_group_, "logo")), "html", null, true);
                            echo "\" alt=\"";
                            if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($_group_, "title"), "html", null, true);
                            echo "\">
                              ";
                        } else {
                            // line 339
                            echo "                              <img src=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/default/group.png"), "html", null, true);
                            echo "\" alt=\"";
                            if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($_group_, "title"), "html", null, true);
                            echo "\">
                              ";
                        }
                        // line 341
                        echo "                            </a>
                            <div class=\"media-body\">
                              <p><a  href=\"";
                        // line 343
                        if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $this->getAttribute($_group_, "id"))), "html", null, true);
                        echo "\" title=\"";
                        if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_group_, "title"), "html", null, true);
                        echo "\">";
                        if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                        echo $this->env->getExtension('topxia_web_twig')->subTextFilter($this->getAttribute($_group_, "title"), 10);
                        echo "</a></p>
                              <div class=\"text-muted text-normal\">
                                ";
                        // line 345
                        if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_group_, "memberNum"), "html", null, true);
                        echo "个成员&nbsp;
                                ";
                        // line 346
                        if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_group_, "threadNum"), "html", null, true);
                        echo "个话题
                              </div>
                            </div> 
                          </div>
                        </div>
                      </li>
                    ";
                    }
                    // line 353
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 354
                echo "              </ul>
            </div>
          </div>
        ";
            }
            // line 358
            echo "      ";
        }
        // line 359
        echo "
    </div>

    <div class=\"col-md-4\">
      ";
        // line 364
        echo "      ";
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if ($this->getAttribute($_app_, "user")) {
            // line 365
            echo "        ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Default:userlearning"));
            echo "
      ";
        }
        // line 367
        echo "      
      ";
        // line 369
        echo "      ";
        $context["tags"] = $this->env->getExtension('topxia_data_twig')->getData("Tags", array("count" => 5));
        // line 370
        echo "      ";
        if (isset($context["tags"])) { $_tags_ = $context["tags"]; } else { $_tags_ = null; }
        if ($_tags_) {
            // line 371
            echo "        <div class=\"panel panel-autumn panel-autumn-default\">
          <div class=\"panel-heading side-autumn-default\">
            <h2 class=\"panel-title\">热门标签 / <small>Hot Labels</small></h2>
          </div>
          <div class=\"panel-body\">
            <div class=\"tag-list\">
                ";
            // line 377
            if (isset($context["tags"])) { $_tags_ = $context["tags"]; } else { $_tags_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_tags_);
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 378
                echo "                  ";
                if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
                if ($_tag_) {
                    echo " 
                    <a href=\"";
                    // line 379
                    if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tag_show", array("name" => $this->getAttribute($_tag_, "name"))), "html", null, true);
                    echo "\"> ";
                    if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_tag_, "name"), "html", null, true);
                    echo "</a>
                  ";
                }
                // line 381
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 382
            echo "            </div>
          </div>
        </div>
      ";
        }
        // line 386
        echo "
      ";
        // line 388
        echo "      ";
        $context["coursesRank"] = $this->env->getExtension('topxia_data_twig')->getData("CourseRankByStudent", array("count" => 5));
        // line 389
        echo "      ";
        if (isset($context["coursesRank"])) { $_coursesRank_ = $context["coursesRank"]; } else { $_coursesRank_ = null; }
        if ($_coursesRank_) {
            // line 390
            echo "        <div class=\"panel panel-autumn panel-autumn-primary\">
          <div class=\"panel-heading side-autumn-primary\">
            <h2 class=\"panel-title\">课程排行榜 / <small>Top10</small></h2>
          </div>
          <div class=\"panel-body\">
            <ul class=\"media-list courses-rank\">
              ";
            // line 396
            if (isset($context["coursesRank"])) { $_coursesRank_ = $context["coursesRank"]; } else { $_coursesRank_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_coursesRank_);
            foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                // line 397
                echo "                ";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                if ($_course_) {
                    // line 398
                    echo "                  <li class=\"media\">
                    <a href=\"";
                    // line 399
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
                    echo "\">
                      <div class=\"course-item\">
                        <img src=\"";
                    // line 401
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getDefaultPath("coursePicture", $this->getAttribute($_course_, "largePicture"), "large"), "html", null, true);
                    echo "\"  class=\"img-responsive thumb pull-left\">
                        <div class=\"course-title\">";
                    // line 402
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_course_, "title"), "html", null, true);
                    echo "</div>
                      </div>
                    </a>
                  </li>
                ";
                }
                // line 407
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 408
            echo "            </ul>
          </div>
        </div>
      ";
        }
        // line 412
        echo "
      ";
        // line 414
        echo "      ";
        $context["learns"] = $this->env->getExtension('topxia_data_twig')->getData("PersonDynamic", array("count" => 5));
        // line 415
        echo "      ";
        if (isset($context["learns"])) { $_learns_ = $context["learns"]; } else { $_learns_ = null; }
        if ($_learns_) {
            // line 416
            echo "        <div class=\"panel panel-autumn panel-autumn-default status-side\">
          <div class=\"panel-heading side-autumn-default\">
            <h2 class=\"panel-title\">学员动态 / <small>Students Dynamic</small></h2>
          </div>
          <div class=\"panel-body\">
            <ul class=\"media-list\">
              ";
            // line 422
            if (isset($context["learns"])) { $_learns_ = $context["learns"]; } else { $_learns_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_learns_);
            foreach ($context['_seq'] as $context["_key"] => $context["learn"]) {
                // line 423
                echo "                ";
                if (isset($context["learn"])) { $_learn_ = $context["learn"]; } else { $_learn_ = null; }
                if (($this->getAttribute($_learn_, "type") == "finished_testpaper")) {
                    // line 424
                    echo "                <li class=\"media\">
                  <a class=\"pull-left\" href=\"";
                    // line 425
                    if (isset($context["learn"])) { $_learn_ = $context["learn"]; } else { $_learn_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($this->getAttribute($_learn_, "user"), "id"))), "html", null, true);
                    echo "\">
                    <img class=\"media-object\" src=\"";
                    // line 426
                    if (isset($context["learn"])) { $_learn_ = $context["learn"]; } else { $_learn_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getDefaultPath("avatar", $this->getAttribute($this->getAttribute($_learn_, "user"), "mediumAvatar"), ""), "html", null, true);
                    echo "\">
                  </a>
                  <div class=\"media-body\">
                    <a href=\"";
                    // line 429
                    if (isset($context["learn"])) { $_learn_ = $context["learn"]; } else { $_learn_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($this->getAttribute($_learn_, "user"), "id"))), "html", null, true);
                    echo "\">";
                    if (isset($context["learn"])) { $_learn_ = $context["learn"]; } else { $_learn_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_learn_, "user"), "nickname"), "html", null, true);
                    echo "</a>
                    完成了考试 ";
                    // line 430
                    if (isset($context["learn"])) { $_learn_ = $context["learn"]; } else { $_learn_ = null; }
                    echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($this->getAttribute($this->getAttribute($_learn_, "properties"), "testpaper"), "name"), 15);
                    echo "
                  </div>
                </li>
                ";
                } elseif (($this->getAttribute($_learn_, "type") == "become_student")) {
                    // line 434
                    echo "                <li class=\"media\">
                  <a class=\"pull-left\" href=\"";
                    // line 435
                    if (isset($context["learn"])) { $_learn_ = $context["learn"]; } else { $_learn_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($this->getAttribute($_learn_, "user"), "id"))), "html", null, true);
                    echo "\">
                    <img class=\"media-object\" src=\"";
                    // line 436
                    if (isset($context["learn"])) { $_learn_ = $context["learn"]; } else { $_learn_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getDefaultPath("avatar", $this->getAttribute($this->getAttribute($_learn_, "user"), "mediumAvatar"), ""), "html", null, true);
                    echo "\">
                  </a>
                  <div class=\"media-body\">
                    <a href=\"";
                    // line 439
                    if (isset($context["learn"])) { $_learn_ = $context["learn"]; } else { $_learn_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($this->getAttribute($_learn_, "user"), "id"))), "html", null, true);
                    echo "\">";
                    if (isset($context["learn"])) { $_learn_ = $context["learn"]; } else { $_learn_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_learn_, "user"), "nickname"), "html", null, true);
                    echo "</a>
                    加入了课程 ";
                    // line 440
                    if (isset($context["learn"])) { $_learn_ = $context["learn"]; } else { $_learn_ = null; }
                    echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($this->getAttribute($this->getAttribute($_learn_, "properties"), "course"), "title"), 15);
                    echo "
                  </div>
                </li>
                ";
                } elseif (($this->getAttribute($_learn_, "type") == "learned_lesson")) {
                    // line 444
                    echo "                <li class=\"media\">
                  <a class=\"pull-left\" href=\"";
                    // line 445
                    if (isset($context["learn"])) { $_learn_ = $context["learn"]; } else { $_learn_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($this->getAttribute($_learn_, "user"), "id"))), "html", null, true);
                    echo "\">
                    <img class=\"media-object\" src=\"";
                    // line 446
                    if (isset($context["learn"])) { $_learn_ = $context["learn"]; } else { $_learn_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getDefaultPath("avatar", $this->getAttribute($this->getAttribute($_learn_, "user"), "mediumAvatar"), ""), "html", null, true);
                    echo "\">
                  </a>
                  <div class=\"media-body\">
                    <a href=\"";
                    // line 449
                    if (isset($context["learn"])) { $_learn_ = $context["learn"]; } else { $_learn_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($this->getAttribute($_learn_, "user"), "id"))), "html", null, true);
                    echo "\">";
                    if (isset($context["learn"])) { $_learn_ = $context["learn"]; } else { $_learn_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_learn_, "user"), "nickname"), "html", null, true);
                    echo "</a>
                    完成了课时 ";
                    // line 450
                    if (isset($context["learn"])) { $_learn_ = $context["learn"]; } else { $_learn_ = null; }
                    echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($this->getAttribute($this->getAttribute($_learn_, "properties"), "lesson"), "title"), 15);
                    echo "
                  </div>
                </li>
                ";
                }
                // line 454
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['learn'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 455
            echo "            </ul>
          </div>
        </div>
      ";
        }
        // line 459
        echo "
      ";
        // line 461
        echo "      ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Default:latestReviewsBlock", array("number" => 5)));
        echo "

      ";
        // line 464
        echo "      ";
        if ((($this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("group"), "group_show", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("group"), "group_show"), 1)) : (1))) {
            // line 465
            echo "        ";
            $context["hotThreads"] = $this->env->getExtension('topxia_data_twig')->getData("HotThreads", array("count" => 11));
            // line 466
            echo "        ";
            if (isset($context["hotThreads"])) { $_hotThreads_ = $context["hotThreads"]; } else { $_hotThreads_ = null; }
            if ($_hotThreads_) {
                // line 467
                echo "          <div class=\"panel panel-autumn panel-autumn-default hot-threads\">
            <div class=\"panel-heading panel-heading-important\">
              <h2 class=\"panel-title\">最热话题</h2>
            </div>
            <div class=\"panel-body\">
              <ul class=\"text-list\">
                ";
                // line 473
                if (isset($context["hotThreads"])) { $_hotThreads_ = $context["hotThreads"]; } else { $_hotThreads_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($_hotThreads_);
                foreach ($context['_seq'] as $context["_key"] => $context["thread"]) {
                    // line 474
                    echo "                  ";
                    if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
                    if ($_thread_) {
                        // line 475
                        echo "                    <li style=\"border-bottom:none;background:url('";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/default/triangle.png"), "html", null, true);
                        echo "') no-repeat 0 3px;padding-left:8px;padding-top:0px;margin-bottom:8px;\"><a  href=\"";
                        if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_show", array("id" => $this->getAttribute($_thread_, "groupId"), "threadId" => $this->getAttribute($_thread_, "id"))), "html", null, true);
                        echo "\">";
                        if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
                        echo $this->env->getExtension('topxia_web_twig')->subTextFilter($this->getAttribute($_thread_, "title"), 15);
                        echo "</a></li>
                  ";
                    }
                    // line 477
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thread'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 478
                echo "              </ul>
            </div>
          </div>
        ";
            }
            // line 482
            echo "      ";
        }
        // line 483
        echo "
    </div>

  </div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1313 => 483,  1310 => 482,  1304 => 478,  1298 => 477,  1286 => 475,  1282 => 474,  1277 => 473,  1269 => 467,  1265 => 466,  1262 => 465,  1259 => 464,  1253 => 461,  1250 => 459,  1244 => 455,  1238 => 454,  1230 => 450,  1222 => 449,  1215 => 446,  1210 => 445,  1207 => 444,  1199 => 440,  1191 => 439,  1184 => 436,  1179 => 435,  1176 => 434,  1168 => 430,  1160 => 429,  1153 => 426,  1148 => 425,  1145 => 424,  1141 => 423,  1136 => 422,  1128 => 416,  1124 => 415,  1121 => 414,  1118 => 412,  1112 => 408,  1106 => 407,  1097 => 402,  1092 => 401,  1086 => 399,  1083 => 398,  1079 => 397,  1074 => 396,  1066 => 390,  1062 => 389,  1059 => 388,  1056 => 386,  1050 => 382,  1044 => 381,  1035 => 379,  1029 => 378,  1024 => 377,  1016 => 371,  1012 => 370,  1009 => 369,  1006 => 367,  1000 => 365,  996 => 364,  990 => 359,  987 => 358,  981 => 354,  975 => 353,  964 => 346,  959 => 345,  947 => 343,  943 => 341,  934 => 339,  924 => 337,  921 => 336,  913 => 335,  904 => 331,  899 => 330,  893 => 327,  888 => 324,  884 => 323,  881 => 322,  878 => 321,  875 => 319,  872 => 318,  866 => 314,  860 => 313,  851 => 307,  846 => 306,  839 => 303,  834 => 302,  823 => 298,  818 => 297,  812 => 293,  808 => 292,  803 => 291,  795 => 285,  791 => 284,  788 => 283,  785 => 282,  782 => 280,  776 => 276,  770 => 275,  762 => 271,  757 => 270,  751 => 269,  745 => 267,  740 => 266,  736 => 264,  732 => 263,  727 => 262,  720 => 258,  715 => 255,  711 => 254,  708 => 253,  705 => 251,  699 => 247,  693 => 246,  684 => 241,  679 => 240,  673 => 239,  662 => 235,  657 => 234,  651 => 233,  647 => 232,  644 => 231,  634 => 228,  629 => 225,  625 => 224,  620 => 223,  612 => 217,  608 => 216,  605 => 215,  601 => 212,  595 => 208,  589 => 207,  576 => 204,  571 => 203,  568 => 202,  564 => 201,  559 => 200,  552 => 196,  547 => 193,  543 => 192,  541 => 191,  538 => 190,  535 => 188,  532 => 187,  524 => 181,  518 => 180,  514 => 178,  508 => 174,  497 => 172,  492 => 171,  479 => 168,  471 => 164,  463 => 163,  454 => 161,  451 => 160,  448 => 159,  444 => 157,  440 => 155,  436 => 154,  432 => 153,  429 => 152,  426 => 151,  422 => 149,  418 => 147,  415 => 146,  411 => 144,  407 => 143,  403 => 141,  400 => 140,  392 => 139,  389 => 138,  386 => 137,  383 => 136,  379 => 135,  374 => 134,  369 => 131,  363 => 129,  360 => 128,  355 => 125,  351 => 124,  349 => 123,  346 => 122,  340 => 118,  334 => 117,  328 => 113,  317 => 111,  312 => 110,  299 => 107,  292 => 104,  284 => 103,  281 => 102,  278 => 101,  274 => 99,  270 => 97,  266 => 96,  262 => 95,  259 => 94,  256 => 93,  252 => 91,  248 => 89,  245 => 88,  241 => 86,  237 => 85,  233 => 83,  230 => 82,  222 => 81,  218 => 79,  214 => 78,  209 => 77,  202 => 73,  197 => 70,  193 => 69,  190 => 68,  187 => 66,  181 => 62,  175 => 61,  169 => 57,  158 => 55,  153 => 54,  140 => 51,  133 => 48,  125 => 47,  122 => 46,  118 => 44,  114 => 42,  111 => 41,  103 => 40,  100 => 39,  96 => 38,  91 => 37,  84 => 33,  79 => 30,  75 => 29,  72 => 28,  68 => 25,  65 => 24,  60 => 21,  47 => 12,  39 => 6,  35 => 5,  32 => 4,  29 => 3,);
    }
}
