<?php

/* TopxiaWebBundle:Course:show.html.twig */
class __TwigTemplate_a156789083672fe4ba49992c91a7061a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaWebBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
            'content' => array($this, 'block_content'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 13
        $context["script_controller"] = "course/show";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_course_, "title"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_keywords($context, array $blocks = array())
    {
        // line 6
        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
        if ($_category_) {
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_category_, "name"), "html", null, true);
        }
        // line 7
        echo "  ";
        if (isset($context["tags"])) { $_tags_ = $context["tags"]; } else { $_tags_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_tags_);
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_tag_, "name"), "html", null, true);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "  ";
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_course_, "title"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.name"), "html", null, true);
    }

    // line 10
    public function block_description($context, array $blocks = array())
    {
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($_course_, "about"), 150);
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        // line 16
        echo "
";
        // line 17
        if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
        if (($_member_ && $this->getAttribute($_member_, "locked"))) {
            // line 18
            echo "<div class=\"row\">
  <div class=\"col-md-12\">
    <div class=\"mtl alert alert-warning\">
      您的退款申请已提交，请等待管理员的处理，退款期间将不能学习课程。
      <button class=\"btn btn-warning btn-sm cancel-refund\" data-url=\"";
            // line 22
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_order_cancel_refund", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
            echo "\">取消退款，继续学习！</button>
    </div>
  </div>
</div>
";
        }
        // line 27
        echo "
";
        // line 28
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if (($this->getAttribute($_course_, "type") == "live")) {
            // line 29
            echo "
  ";
            // line 30
            $this->env->loadTemplate("TopxiaWebBundle:Course:live-course.html.twig")->display($context);
            // line 31
            echo "
";
        } else {
            // line 33
            echo "<div class=\"es-row-wrap container-gap course-cover\">

\t<div class=\"row row-5-7 course-cover-heading\">
\t\t<div class=\"col-sm-5 picture hidden-xs\">
\t\t\t";
            // line 37
            if (isset($context["freeLesson"])) { $_freeLesson_ = $context["freeLesson"]; } else { $_freeLesson_ = null; }
            if (((_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("course.picturePreview_enabled"), 0) > 0) && $_freeLesson_)) {
                // line 38
                echo "\t\t\t<a  href=\"#modal\" data-toggle=\"modal\" data-url=\"";
                if (isset($context["freeLesson"])) { $_freeLesson_ = $context["freeLesson"]; } else { $_freeLesson_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_lesson_preview", array("courseId" => $this->getAttribute($_freeLesson_, "courseId"), "lessonId" => $this->getAttribute($_freeLesson_, "id"))), "html", null, true);
                echo "\" ><img src=\"";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getDefaultPath("coursePicture", $this->getAttribute($_course_, "largePicture"), ""), "html", null, true);
                echo "\" class=\"img-responsive\" /></a>
\t\t\t";
            } else {
                // line 40
                echo "\t\t\t<img src=\"";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getDefaultPath("coursePicture", $this->getAttribute($_course_, "largePicture"), ""), "html", null, true);
                echo "\" class=\"img-responsive\" />
\t\t\t";
            }
            // line 42
            echo "\t\t</div>
\t\t<div class=\"col-sm-7 info\">
\t\t\t";
            // line 44
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 45
                echo "\t\t\t<div class=\"btn-group pull-right\">
\t\t\t\t<button class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\"> <i class=\"glyphicon glyphicon-cog\"></i>
\t\t\t\t</button>
\t\t\t\t<ul class=\"dropdown-menu pull-right\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
                // line 50
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
                echo "\">课程管理</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t";
            }
            // line 55
            echo "\t\t\t<h1 class=\"title\">";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_course_, "title"), "html", null, true);
            echo "</h1>
\t\t\t<div class=\"subtitle\">";
            // line 56
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_course_, "subtitle"), "html", null, true);
            echo "</div>
\t\t\t<div class=\"stats\">
\t\t\t\t<p>
\t\t\t\t\t价　格：
\t\t\t\t\t";
            // line 60
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if (($this->getAttribute($_course_, "price") > 0)) {
                // line 61
                echo "\t\t\t\t\t\t";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                if (($this->env->getExtension('topxia_web_twig')->getFreeLimitType($_course_) == "free_now")) {
                    // line 62
                    echo "\t\t\t\t\t\t\t<span class=\"money-num\">0.00</span>
\t\t\t\t\t\t\t<span class=\"money-text\">元</span>
\t\t\t\t\t\t\t<span class=\"text-muted\">(原价：<del>";
                    // line 64
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_course_, "price"), "html", null, true);
                    echo "</del> 元)</span>
\t\t\t\t\t\t\t<span class=\"mll\">";
                    // line 65
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    $this->env->loadTemplate("TopxiaWebBundle:Course:countdown.html.twig")->display(array_merge($context, array("course" => $_course_)));
                    echo "</span>
\t\t\t\t\t\t";
                } else {
                    // line 67
                    echo "\t\t\t\t\t\t\t<span class=\"money-num\">";
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_course_, "price"), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t<span class=\"money-text\">元</span>
\t\t\t\t\t\t";
                }
                // line 69
                echo "  
\t\t\t\t\t";
            } else {
                // line 71
                echo "\t\t\t\t\t\t<span class=\"money-num\" style=\"font-size:16px;\">免费</span>
\t\t\t\t\t";
            }
            // line 73
            echo "\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t评　价：
\t\t\t\t\t<span class=\"stars-";
            // line 76
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($_course_, "rating")), "html", null, true);
            echo "\">&nbsp;</span>
\t\t\t\t\t<span class=\"rating-num\">";
            // line 77
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($_course_, "rating"), 1), "html", null, true);
            echo "分</span>
\t\t\t\t\t<a class=\"rating-user-num show-course-review-pane\" href=\"javascript:\">(";
            // line 78
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_course_, "ratingNum"), "html", null, true);
            echo "人评价)</a>
\t\t\t\t</p>
\t\t\t\t";
            // line 80
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if (($this->getAttribute($_course_, "showStudentNumType") == "opened")) {
                // line 81
                echo "\t\t\t\t<p>
\t\t\t\t\t学员数：
\t\t\t\t\t<span class=\"member-num\">";
                // line 83
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_course_, "studentNum"), "html", null, true);
                echo "</span>
\t\t\t\t\t<span class=\"member-text\">人</span>
\t\t\t\t</p>
\t\t\t\t";
            }
            // line 87
            echo "\t\t\t\t";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if (((!$this->getAttribute($_course_, "expiryDay")) == 0)) {
                // line 88
                echo "\t\t\t\t<p>
\t\t\t\t\t有效期：
\t\t\t\t\t<span class=\"member-num\">";
                // line 90
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_course_, "expiryDay"), "html", null, true);
                echo "</span>
\t\t\t\t\t<span class=\"member-text\">天</span>
\t\t\t\t</p>
\t\t\t\t";
            }
            // line 94
            echo "\t\t\t\t<p>
\t\t\t\t\t";
            // line 95
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if (($this->getAttribute($_course_, "status") == "closed")) {
                echo "  
\t\t\t\t\t\t状　态： <span class=\"label label-danger \">已关闭</span>
\t\t\t\t\t";
            } elseif (($this->getAttribute($_course_, "status") == "draft")) {
                // line 98
                echo "\t\t\t\t\t\t状　态： <span class=\"label label-warning \">未发布</span>
\t\t\t\t\t";
            }
            // line 99
            echo "          
\t\t\t\t</p>
\t\t\t</div>
\t\t\t<div class=\"actions clearfix\">
\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t";
            // line 104
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if (($this->getAttribute($_course_, "status") != "published")) {
                // line 105
                echo "\t\t\t\t\t";
            } else {
                // line 106
                echo "\t\t\t\t\t\t<a class=\"btn btn-primary btn-fat\" id=\"course-buy-btn\" href=\"#modal\" data-toggle=\"modal\" data-url=\"";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_buy", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
                echo "\">";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                if ((($this->getAttribute($_course_, "price") > 0) && ((twig_date_converter($this->env, $this->getAttribute($_course_, "freeStartTime")) >= twig_date_converter($this->env)) || (twig_date_converter($this->env, $this->getAttribute($_course_, "freeEndTime")) < twig_date_converter($this->env))))) {
                    echo "购买课程";
                } else {
                    echo "加入学习";
                }
                echo "</a>

\t\t\t\t\t\t";
                // line 108
                if (isset($context["courseMemberLevel"])) { $_courseMemberLevel_ = $context["courseMemberLevel"]; } else { $_courseMemberLevel_ = null; }
                if ($_courseMemberLevel_) {
                    // line 109
                    echo "\t\t\t\t\t\t\t";
                    if (isset($context["checkMemberLevelResult"])) { $_checkMemberLevelResult_ = $context["checkMemberLevelResult"]; } else { $_checkMemberLevelResult_ = null; }
                    if (($_checkMemberLevelResult_ == "not_login")) {
                        // line 110
                        echo "\t\t\t\t\t\t\t\t<a href=\"";
                        echo $this->env->getExtension('routing')->getPath("login");
                        echo "\" class=\"btn btn-warning mll\">";
                        if (isset($context["courseMemberLevel"])) { $_courseMemberLevel_ = $context["courseMemberLevel"]; } else { $_courseMemberLevel_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_courseMemberLevel_, "name"), "html", null, true);
                        echo "，免费学</a>  
\t\t\t\t\t\t\t";
                    } elseif (twig_in_filter($_checkMemberLevelResult_, array(0 => "not_member", 1 => "member_expired"))) {
                        // line 112
                        echo "\t\t\t\t\t\t\t\t<a href=\"";
                        echo $this->env->getExtension('routing')->getPath("vip_buy");
                        echo "\" class=\"btn btn-warning mll\">";
                        if (isset($context["courseMemberLevel"])) { $_courseMemberLevel_ = $context["courseMemberLevel"]; } else { $_courseMemberLevel_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_courseMemberLevel_, "name"), "html", null, true);
                        echo "，免费学</a>  
\t\t\t\t\t\t\t";
                    } elseif (($_checkMemberLevelResult_ == "level_low")) {
                        // line 114
                        echo "\t\t\t\t\t\t\t\t<a href=\"";
                        if (isset($context["courseMemberLevel"])) { $_courseMemberLevel_ = $context["courseMemberLevel"]; } else { $_courseMemberLevel_ = null; }
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vip_upgrade", array("level" => $this->getAttribute($_courseMemberLevel_, "id"))), "html", null, true);
                        echo "\" class=\"btn btn-warning mll\">";
                        if (isset($context["courseMemberLevel"])) { $_courseMemberLevel_ = $context["courseMemberLevel"]; } else { $_courseMemberLevel_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_courseMemberLevel_, "name"), "html", null, true);
                        echo "，免费学</a>
\t\t\t\t\t\t\t";
                    } elseif (($_checkMemberLevelResult_ == "ok")) {
                        // line 116
                        echo "\t\t\t\t\t\t\t\t<a href=\"javascript:;\" data-url=\"";
                        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_become_use_member", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
                        echo "\" class=\"btn btn-warning mll become-use-member-btn\">";
                        if (isset($context["courseMemberLevel"])) { $_courseMemberLevel_ = $context["courseMemberLevel"]; } else { $_courseMemberLevel_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_courseMemberLevel_, "name"), "html", null, true);
                        echo "，免费学</a>
\t\t\t\t\t\t\t";
                    }
                    // line 118
                    echo "
\t\t\t\t\t\t";
                }
                // line 120
                echo "\t\t\t\t\t";
            }
            // line 121
            echo "\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"pull-right \">

\t\t\t\t\t<a class=\"btn btn-link\" href=\"#\" style=\"display:none;\"> <i class=\"glyphicon glyphicon-play-circle\"></i>
\t\t\t\t\t\t免费体验
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"btn btn-link \" id=\"favorite-btn\" href=\"javascript:\" data-url=\"";
            // line 128
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_favorite", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
            echo "\" ";
            if (isset($context["hasFavorited"])) { $_hasFavorited_ = $context["hasFavorited"]; } else { $_hasFavorited_ = null; }
            if ($_hasFavorited_) {
                echo "style=\"display:none;\"";
            }
            echo ">
\t\t\t\t\t\t<i class=\"glyphicon glyphicon-bookmark\"></i>
\t\t\t\t\t\t收藏课程
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"btn btn-link\" id=\"unfavorite-btn\" href=\"javascript:\" data-url=\"";
            // line 132
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_unfavorite", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
            echo "\" ";
            if (isset($context["hasFavorited"])) { $_hasFavorited_ = $context["hasFavorited"]; } else { $_hasFavorited_ = null; }
            if ((!$_hasFavorited_)) {
                echo "style=\"display:none;\"";
            }
            echo ">
\t\t\t\t\t\t<i class=\"glyphicon glyphicon-bookmark\"></i>
\t\t\t\t\t\t已收藏
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"btn btn-link\" href=\"#\" style=\"display:none;\">
\t\t\t\t\t\t<i class=\"glyphicon glyphicon-gift\"></i>
\t\t\t\t\t\t赠送
\t\t\t\t\t</a>

\t\t\t\t</div><div class=\"share pull-right clearfix\"  data-bdText=\"";
            // line 141
            if (isset($context["courseShareContent"])) { $_courseShareContent_ = $context["courseShareContent"]; } else { $_courseShareContent_ = null; }
            echo twig_escape_filter($this->env, $_courseShareContent_, "html", null, true);
            echo "\"></div>
\t\t\t</div>

\t\t</div>
\t</div>

\t<div class=\"row row-8-4\">
\t\t<div class=\"col-md-8\">

\t\t\t<div class=\"course-nav-tabs\">
\t\t\t\t<ul class=\"nav mbl nav-pills\" id=\"course-nav-tabs\">
\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t<a href=\"#course-about-pane\" class=\"btn-index\" data-anchor=\"#course-about-pane\">课程介绍</a>
\t\t\t\t\t</li>
\t\t\t\t\t";
            // line 155
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if ($this->getAttribute($_course_, "goals")) {
                // line 156
                echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#course-goal-pane\" class=\"btn-index\" data-anchor=\"#course-goal-pane\">课程目标</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
            }
            // line 160
            echo "\t\t\t\t\t";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if ($this->getAttribute($_course_, "audiences")) {
                // line 161
                echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#course-audience-pane\" class=\"btn-index\" data-anchor=\"#course-audience-pane\">适合人群</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
            }
            // line 165
            echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#course-list-pane\" class=\"btn-index\" data-anchor=\"#course-list-pane\">课程列表</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#course-review-pane\" class=\"btn-index\" data-anchor=\"#course-review-pane\">
\t\t\t\t\t\t\t课程评价
\t\t\t\t\t\t\t<span class=\"badge\">";
            // line 171
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_course_, "ratingNum"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>


\t\t\t";
            // line 178
            $this->env->loadTemplate("TopxiaWebBundle:Course:show.html.twig", "1829325756")->display(array_merge($context, array("id" => "course-about-pane")));
            // line 199
            echo "
\t\t\t";
            // line 200
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if ($this->getAttribute($_course_, "goals")) {
                // line 201
                echo "\t\t\t\t";
                $this->env->loadTemplate("TopxiaWebBundle:Course:show.html.twig", "1067989260")->display(array_merge($context, array("id" => "course-goal-pane")));
                // line 218
                echo "\t\t\t";
            }
            // line 219
            echo "
\t\t\t";
            // line 220
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if ($this->getAttribute($_course_, "audiences")) {
                // line 221
                echo "\t\t\t\t";
                $this->env->loadTemplate("TopxiaWebBundle:Course:show.html.twig", "1063206830")->display(array_merge($context, array("id" => "course-audience-pane")));
                // line 238
                echo "\t\t\t";
            }
            // line 239
            echo "
\t\t\t";
            // line 240
            $this->env->loadTemplate("TopxiaWebBundle:Course:show.html.twig", "76289611")->display(array_merge($context, array("id" => "course-list-pane")));
            // line 250
            echo "

\t\t\t";
            // line 252
            if (isset($context["courseReviews"])) { $_courseReviews_ = $context["courseReviews"]; } else { $_courseReviews_ = null; }
            if ($_courseReviews_) {
                // line 253
                echo "\t\t\t";
                $this->env->loadTemplate("TopxiaWebBundle:Course:show.html.twig", "2081029")->display(array_merge($context, array("id" => "course-review-pane")));
                // line 263
                echo "\t\t\t";
            }
            // line 264
            echo "
\t\t\t";
            // line 265
            if (($this->env->getExtension('topxia_web_twig')->getSetting("course.relatedCourses") == 1)) {
                // line 266
                echo "\t\t\t\t";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Course:relatedCoursesBlock", array("course" => $_course_)));
                echo "
\t\t\t";
            }
            // line 268
            echo "\t\t</div>
\t\t<div class=\"col-md-4\">
\t\t\t";
            // line 270
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Course:teachersBlock", array("course" => $_course_)));
            echo "

\t\t\t";
            // line 272
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:CourseThread:latestBlock", array("course" => $_course_)));
            echo "

\t\t\t";
            // line 274
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Course:latestMembersBlock", array("course" => $_course_)));
            echo "

\t\t\t";
            // line 276
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:CourseAnnouncement:block", array("course" => $_course_)));
            echo "

\t\t</div>
\t</div>

</div>
";
        }
        // line 283
        echo "</div>

";
    }

    // line 287
    public function block_bottom($context, array $blocks = array())
    {
        // line 288
        echo "<div id=\"course-modal\" class=\"modal\"></div>
<div id=\"course-edit-modal\" class=\"modal\"></div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  557 => 288,  554 => 287,  548 => 283,  537 => 276,  531 => 274,  525 => 272,  519 => 270,  515 => 268,  508 => 266,  506 => 265,  503 => 264,  500 => 263,  497 => 253,  494 => 252,  490 => 250,  488 => 240,  485 => 239,  482 => 238,  479 => 221,  476 => 220,  473 => 219,  470 => 218,  467 => 201,  464 => 200,  461 => 199,  459 => 178,  448 => 171,  440 => 165,  434 => 161,  430 => 160,  424 => 156,  421 => 155,  403 => 141,  385 => 132,  372 => 128,  363 => 121,  360 => 120,  356 => 118,  346 => 116,  336 => 114,  327 => 112,  318 => 110,  314 => 109,  311 => 108,  297 => 106,  294 => 105,  291 => 104,  284 => 99,  280 => 98,  273 => 95,  270 => 94,  262 => 90,  258 => 88,  254 => 87,  246 => 83,  242 => 81,  239 => 80,  233 => 78,  228 => 77,  223 => 76,  218 => 73,  214 => 71,  210 => 69,  202 => 67,  196 => 65,  191 => 64,  187 => 62,  183 => 61,  180 => 60,  172 => 56,  166 => 55,  157 => 50,  150 => 45,  148 => 44,  144 => 42,  137 => 40,  127 => 38,  124 => 37,  118 => 33,  114 => 31,  112 => 30,  109 => 29,  106 => 28,  103 => 27,  94 => 22,  88 => 18,  85 => 17,  82 => 16,  79 => 15,  72 => 10,  64 => 8,  52 => 7,  46 => 6,  43 => 5,  34 => 3,  29 => 13,);
    }
}


/* TopxiaWebBundle:Course:show.html.twig */
class __TwigTemplate_a156789083672fe4ba49992c91a7061a_1829325756 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaWebBundle:Bootstrap:panel.html.twig");

        $this->blocks = array(
            'heading' => array($this, 'block_heading'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Bootstrap:panel.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 179
    public function block_heading($context, array $blocks = array())
    {
        // line 180
        echo "\t\t\t\t\t<h3 class=\"panel-title\">课程介绍</h3>
\t\t\t\t";
    }

    // line 182
    public function block_body($context, array $blocks = array())
    {
        // line 183
        echo "
\t\t\t\t\t";
        // line 184
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if ($this->getAttribute($_course_, "about")) {
            // line 185
            echo "\t\t\t\t\t\t";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo $this->getAttribute($_course_, "about");
            echo "
\t\t\t\t\t";
        } else {
            // line 187
            echo "\t\t\t\t\t\t<span class=\"text-muted\">还没有课程介绍...</span>
\t\t\t\t\t";
        }
        // line 189
        echo "\t\t\t\t\t";
        if (isset($context["tags"])) { $_tags_ = $context["tags"]; } else { $_tags_ = null; }
        if ($_tags_) {
            // line 190
            echo "\t\t\t\t\t\t<div class=\"mtm\">
\t\t\t\t\t\t<span class=\"text-muted\">标签：</span>";
            // line 191
            if (isset($context["tags"])) { $_tags_ = $context["tags"]; } else { $_tags_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_tags_);
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 192
                echo "\t\t\t\t\t\t<a href=\"";
                if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tag_show", array("name" => $this->getAttribute($_tag_, "name"))), "html", null, true);
                echo "\" class=\"mrs\">";
                if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_tag_, "name"), "html", null, true);
                echo "</a>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 194
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 196
        echo "
\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  662 => 196,  658 => 194,  645 => 192,  640 => 191,  637 => 190,  633 => 189,  629 => 187,  622 => 185,  619 => 184,  616 => 183,  613 => 182,  608 => 180,  605 => 179,  557 => 288,  554 => 287,  548 => 283,  537 => 276,  531 => 274,  525 => 272,  519 => 270,  515 => 268,  508 => 266,  506 => 265,  503 => 264,  500 => 263,  497 => 253,  494 => 252,  490 => 250,  488 => 240,  485 => 239,  482 => 238,  479 => 221,  476 => 220,  473 => 219,  470 => 218,  467 => 201,  464 => 200,  461 => 199,  459 => 178,  448 => 171,  440 => 165,  434 => 161,  430 => 160,  424 => 156,  421 => 155,  403 => 141,  385 => 132,  372 => 128,  363 => 121,  360 => 120,  356 => 118,  346 => 116,  336 => 114,  327 => 112,  318 => 110,  314 => 109,  311 => 108,  297 => 106,  294 => 105,  291 => 104,  284 => 99,  280 => 98,  273 => 95,  270 => 94,  262 => 90,  258 => 88,  254 => 87,  246 => 83,  242 => 81,  239 => 80,  233 => 78,  228 => 77,  223 => 76,  218 => 73,  214 => 71,  210 => 69,  202 => 67,  196 => 65,  191 => 64,  187 => 62,  183 => 61,  180 => 60,  172 => 56,  166 => 55,  157 => 50,  150 => 45,  148 => 44,  144 => 42,  137 => 40,  127 => 38,  124 => 37,  118 => 33,  114 => 31,  112 => 30,  109 => 29,  106 => 28,  103 => 27,  94 => 22,  88 => 18,  85 => 17,  82 => 16,  79 => 15,  72 => 10,  64 => 8,  52 => 7,  46 => 6,  43 => 5,  34 => 3,  29 => 13,);
    }
}


/* TopxiaWebBundle:Course:show.html.twig */
class __TwigTemplate_a156789083672fe4ba49992c91a7061a_1067989260 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaWebBundle:Bootstrap:panel.html.twig");

        $this->blocks = array(
            'heading' => array($this, 'block_heading'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Bootstrap:panel.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 202
    public function block_heading($context, array $blocks = array())
    {
        // line 203
        echo "\t\t\t\t\t\t<h3 class=\"panel-title\">课程目标</h3>
\t\t\t\t\t";
    }

    // line 205
    public function block_body($context, array $blocks = array())
    {
        // line 206
        echo "\t\t\t\t\t\t<ul class=\"media-list\">
\t\t\t\t\t\t\t";
        // line 207
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_course_, "goals"));
        foreach ($context['_seq'] as $context["_key"] => $context["goal"]) {
            // line 208
            echo "\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-flag media-object\"></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"media-body\">";
            // line 212
            if (isset($context["goal"])) { $_goal_ = $context["goal"]; } else { $_goal_ = null; }
            echo twig_escape_filter($this->env, $_goal_, "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['goal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 215
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  744 => 215,  734 => 212,  728 => 208,  723 => 207,  720 => 206,  717 => 205,  712 => 203,  709 => 202,  662 => 196,  658 => 194,  645 => 192,  640 => 191,  637 => 190,  633 => 189,  629 => 187,  622 => 185,  619 => 184,  616 => 183,  613 => 182,  608 => 180,  605 => 179,  557 => 288,  554 => 287,  548 => 283,  537 => 276,  531 => 274,  525 => 272,  519 => 270,  515 => 268,  508 => 266,  506 => 265,  503 => 264,  500 => 263,  497 => 253,  494 => 252,  490 => 250,  488 => 240,  485 => 239,  482 => 238,  479 => 221,  476 => 220,  473 => 219,  470 => 218,  467 => 201,  464 => 200,  461 => 199,  459 => 178,  448 => 171,  440 => 165,  434 => 161,  430 => 160,  424 => 156,  421 => 155,  403 => 141,  385 => 132,  372 => 128,  363 => 121,  360 => 120,  356 => 118,  346 => 116,  336 => 114,  327 => 112,  318 => 110,  314 => 109,  311 => 108,  297 => 106,  294 => 105,  291 => 104,  284 => 99,  280 => 98,  273 => 95,  270 => 94,  262 => 90,  258 => 88,  254 => 87,  246 => 83,  242 => 81,  239 => 80,  233 => 78,  228 => 77,  223 => 76,  218 => 73,  214 => 71,  210 => 69,  202 => 67,  196 => 65,  191 => 64,  187 => 62,  183 => 61,  180 => 60,  172 => 56,  166 => 55,  157 => 50,  150 => 45,  148 => 44,  144 => 42,  137 => 40,  127 => 38,  124 => 37,  118 => 33,  114 => 31,  112 => 30,  109 => 29,  106 => 28,  103 => 27,  94 => 22,  88 => 18,  85 => 17,  82 => 16,  79 => 15,  72 => 10,  64 => 8,  52 => 7,  46 => 6,  43 => 5,  34 => 3,  29 => 13,);
    }
}


/* TopxiaWebBundle:Course:show.html.twig */
class __TwigTemplate_a156789083672fe4ba49992c91a7061a_1063206830 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaWebBundle:Bootstrap:panel.html.twig");

        $this->blocks = array(
            'heading' => array($this, 'block_heading'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Bootstrap:panel.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 222
    public function block_heading($context, array $blocks = array())
    {
        // line 223
        echo "\t\t\t\t\t\t<h3 class=\"panel-title\">适合人群</h3>
\t\t\t\t\t";
    }

    // line 225
    public function block_body($context, array $blocks = array())
    {
        // line 226
        echo "\t\t\t\t\t\t<ul class=\"media-list\">
\t\t\t\t\t\t\t";
        // line 227
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_course_, "audiences"));
        foreach ($context['_seq'] as $context["_key"] => $context["audience"]) {
            // line 228
            echo "\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-user media-object\"></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"media-body\">";
            // line 232
            if (isset($context["audience"])) { $_audience_ = $context["audience"]; } else { $_audience_ = null; }
            echo twig_escape_filter($this->env, $_audience_, "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['audience'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 235
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  826 => 235,  816 => 232,  810 => 228,  805 => 227,  802 => 226,  799 => 225,  794 => 223,  791 => 222,  744 => 215,  734 => 212,  728 => 208,  723 => 207,  720 => 206,  717 => 205,  712 => 203,  709 => 202,  662 => 196,  658 => 194,  645 => 192,  640 => 191,  637 => 190,  633 => 189,  629 => 187,  622 => 185,  619 => 184,  616 => 183,  613 => 182,  608 => 180,  605 => 179,  557 => 288,  554 => 287,  548 => 283,  537 => 276,  531 => 274,  525 => 272,  519 => 270,  515 => 268,  508 => 266,  506 => 265,  503 => 264,  500 => 263,  497 => 253,  494 => 252,  490 => 250,  488 => 240,  485 => 239,  482 => 238,  479 => 221,  476 => 220,  473 => 219,  470 => 218,  467 => 201,  464 => 200,  461 => 199,  459 => 178,  448 => 171,  440 => 165,  434 => 161,  430 => 160,  424 => 156,  421 => 155,  403 => 141,  385 => 132,  372 => 128,  363 => 121,  360 => 120,  356 => 118,  346 => 116,  336 => 114,  327 => 112,  318 => 110,  314 => 109,  311 => 108,  297 => 106,  294 => 105,  291 => 104,  284 => 99,  280 => 98,  273 => 95,  270 => 94,  262 => 90,  258 => 88,  254 => 87,  246 => 83,  242 => 81,  239 => 80,  233 => 78,  228 => 77,  223 => 76,  218 => 73,  214 => 71,  210 => 69,  202 => 67,  196 => 65,  191 => 64,  187 => 62,  183 => 61,  180 => 60,  172 => 56,  166 => 55,  157 => 50,  150 => 45,  148 => 44,  144 => 42,  137 => 40,  127 => 38,  124 => 37,  118 => 33,  114 => 31,  112 => 30,  109 => 29,  106 => 28,  103 => 27,  94 => 22,  88 => 18,  85 => 17,  82 => 16,  79 => 15,  72 => 10,  64 => 8,  52 => 7,  46 => 6,  43 => 5,  34 => 3,  29 => 13,);
    }
}


/* TopxiaWebBundle:Course:show.html.twig */
class __TwigTemplate_a156789083672fe4ba49992c91a7061a_76289611 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaWebBundle:Bootstrap:panel.html.twig");

        $this->blocks = array(
            'heading' => array($this, 'block_heading'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Bootstrap:panel.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 241
    public function block_heading($context, array $blocks = array())
    {
        // line 242
        echo "\t\t\t\t\t<h3 class=\"panel-title\">课时列表</h3>
\t\t\t\t";
    }

    // line 244
    public function block_body($context, array $blocks = array())
    {
        // line 245
        echo "
\t\t\t\t\t";
        // line 246
        $this->env->loadTemplate("TopxiaWebBundle:CourseLesson:item-list-multi.html.twig")->display(array_merge($context, array("experience" => true)));
        // line 247
        echo "
\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  889 => 247,  887 => 246,  884 => 245,  881 => 244,  876 => 242,  873 => 241,  826 => 235,  816 => 232,  810 => 228,  805 => 227,  802 => 226,  799 => 225,  794 => 223,  791 => 222,  744 => 215,  734 => 212,  728 => 208,  723 => 207,  720 => 206,  717 => 205,  712 => 203,  709 => 202,  662 => 196,  658 => 194,  645 => 192,  640 => 191,  637 => 190,  633 => 189,  629 => 187,  622 => 185,  619 => 184,  616 => 183,  613 => 182,  608 => 180,  605 => 179,  557 => 288,  554 => 287,  548 => 283,  537 => 276,  531 => 274,  525 => 272,  519 => 270,  515 => 268,  508 => 266,  506 => 265,  503 => 264,  500 => 263,  497 => 253,  494 => 252,  490 => 250,  488 => 240,  485 => 239,  482 => 238,  479 => 221,  476 => 220,  473 => 219,  470 => 218,  467 => 201,  464 => 200,  461 => 199,  459 => 178,  448 => 171,  440 => 165,  434 => 161,  430 => 160,  424 => 156,  421 => 155,  403 => 141,  385 => 132,  372 => 128,  363 => 121,  360 => 120,  356 => 118,  346 => 116,  336 => 114,  327 => 112,  318 => 110,  314 => 109,  311 => 108,  297 => 106,  294 => 105,  291 => 104,  284 => 99,  280 => 98,  273 => 95,  270 => 94,  262 => 90,  258 => 88,  254 => 87,  246 => 83,  242 => 81,  239 => 80,  233 => 78,  228 => 77,  223 => 76,  218 => 73,  214 => 71,  210 => 69,  202 => 67,  196 => 65,  191 => 64,  187 => 62,  183 => 61,  180 => 60,  172 => 56,  166 => 55,  157 => 50,  150 => 45,  148 => 44,  144 => 42,  137 => 40,  127 => 38,  124 => 37,  118 => 33,  114 => 31,  112 => 30,  109 => 29,  106 => 28,  103 => 27,  94 => 22,  88 => 18,  85 => 17,  82 => 16,  79 => 15,  72 => 10,  64 => 8,  52 => 7,  46 => 6,  43 => 5,  34 => 3,  29 => 13,);
    }
}


/* TopxiaWebBundle:Course:show.html.twig */
class __TwigTemplate_a156789083672fe4ba49992c91a7061a_2081029 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaWebBundle:Bootstrap:panel.html.twig");

        $this->blocks = array(
            'heading' => array($this, 'block_heading'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Bootstrap:panel.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 254
    public function block_heading($context, array $blocks = array())
    {
        // line 255
        echo "\t\t\t\t\t<h3 class=\"panel-title\">课程评价</h3>
\t\t\t\t";
    }

    // line 257
    public function block_body($context, array $blocks = array())
    {
        // line 258
        echo "
\t\t\t\t\t<div id=\"course-review-pane-show\" data-url=\"";
        // line 259
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if (isset($context["previewAs"])) { $_previewAs_ = $context["previewAs"]; } else { $_previewAs_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_review_list", array("id" => $this->getAttribute($_course_, "id"), "previewAs" => $_previewAs_)), "html", null, true);
        echo "\">正在载入课程评价数据...</div>

\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  950 => 259,  947 => 258,  944 => 257,  939 => 255,  936 => 254,  889 => 247,  887 => 246,  884 => 245,  881 => 244,  876 => 242,  873 => 241,  826 => 235,  816 => 232,  810 => 228,  805 => 227,  802 => 226,  799 => 225,  794 => 223,  791 => 222,  744 => 215,  734 => 212,  728 => 208,  723 => 207,  720 => 206,  717 => 205,  712 => 203,  709 => 202,  662 => 196,  658 => 194,  645 => 192,  640 => 191,  637 => 190,  633 => 189,  629 => 187,  622 => 185,  619 => 184,  616 => 183,  613 => 182,  608 => 180,  605 => 179,  557 => 288,  554 => 287,  548 => 283,  537 => 276,  531 => 274,  525 => 272,  519 => 270,  515 => 268,  508 => 266,  506 => 265,  503 => 264,  500 => 263,  497 => 253,  494 => 252,  490 => 250,  488 => 240,  485 => 239,  482 => 238,  479 => 221,  476 => 220,  473 => 219,  470 => 218,  467 => 201,  464 => 200,  461 => 199,  459 => 178,  448 => 171,  440 => 165,  434 => 161,  430 => 160,  424 => 156,  421 => 155,  403 => 141,  385 => 132,  372 => 128,  363 => 121,  360 => 120,  356 => 118,  346 => 116,  336 => 114,  327 => 112,  318 => 110,  314 => 109,  311 => 108,  297 => 106,  294 => 105,  291 => 104,  284 => 99,  280 => 98,  273 => 95,  270 => 94,  262 => 90,  258 => 88,  254 => 87,  246 => 83,  242 => 81,  239 => 80,  233 => 78,  228 => 77,  223 => 76,  218 => 73,  214 => 71,  210 => 69,  202 => 67,  196 => 65,  191 => 64,  187 => 62,  183 => 61,  180 => 60,  172 => 56,  166 => 55,  157 => 50,  150 => 45,  148 => 44,  144 => 42,  137 => 40,  127 => 38,  124 => 37,  118 => 33,  114 => 31,  112 => 30,  109 => 29,  106 => 28,  103 => 27,  94 => 22,  88 => 18,  85 => 17,  82 => 16,  79 => 15,  72 => 10,  64 => 8,  52 => 7,  46 => 6,  43 => 5,  34 => 3,  29 => 13,);
    }
}
