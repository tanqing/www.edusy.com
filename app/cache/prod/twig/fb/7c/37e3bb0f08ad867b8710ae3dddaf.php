<?php

/* TopxiaWebBundle:Course:header.html.twig */
class __TwigTemplate_fb7c37e3bb0f08ad867b8710ae3dddaf extends Twig_Template
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
        $context["web_macro"] = $this->env->loadTemplate("TopxiaWebBundle::macro.html.twig");
        // line 2
        echo "


<div class=\"row row-12\">
  <div class=\"col-md-12\">
    <div class=\"panel panel-default  course-header\">
      <div class=\"panel-body clearfix\">
        <a href=\"";
        // line 9
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
        echo "\">
            <img class=\"picture\" src=\"";
        // line 10
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getDefaultPath("coursePicture", $this->getAttribute($_course_, "largePicture"), ""), "html", null, true);
        echo "\" />
        </a>

        <h1 class=\"title\"><a href=\"";
        // line 13
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
        echo "\">";
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_course_, "title"), "html", null, true);
        echo "</a> 
          ";
        // line 14
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if (($this->getAttribute($_course_, "status") == "closed")) {
            echo "  
            <span class=\"label label-danger \">已关闭</span>
          ";
        } elseif (($this->getAttribute($_course_, "status") == "draft")) {
            // line 17
            echo "            <span class=\"label label-warning \">未发布</span>
          ";
        } elseif (($this->getAttribute($_course_, "status") == "published")) {
            // line 19
            echo "            ";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if (($this->getAttribute($_course_, "serializeMode") == "serialize")) {
                // line 20
                echo "              <span class=\"label label-success \">更新中</span>
            ";
            } elseif (($this->getAttribute($_course_, "serializeMode") == "finished")) {
                // line 22
                echo "              <span class=\"label label-warning \">已完结</span>
            ";
            }
            // line 24
            echo "          ";
        }
        // line 25
        echo "        </h1>

        <div class=\"teachers\">
          ";
        // line 28
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if ((($this->getAttribute($_course_, "teacherIds", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_course_, "teacherIds"), null)) : (null))) {
            // line 29
            echo "            教师：
            ";
            // line 30
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_course_, "teacherIds"));
            foreach ($context['_seq'] as $context["_key"] => $context["id"]) {
                // line 31
                echo "              ";
                if (isset($context["users"])) { $_users_ = $context["users"]; } else { $_users_ = null; }
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                $context["user"] = $this->getAttribute($_users_, $_id_, array(), "array");
                // line 32
                echo "              <a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_teacher_info", array("courseId" => $this->getAttribute($_course_, "id"), "id" => $this->getAttribute($_user_, "id"))), "html", null, true);
                echo "\">";
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_user_, "nickname"), "html", null, true);
                echo "</a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['id'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "          ";
        }
        // line 35
        echo "        </div>

        <div class=\"toolbar hidden-xs hidden-lt-ie8\">
          ";
        // line 38
        if (isset($context["manage"])) { $_manage_ = $context["manage"]; } else { $_manage_ = null; }
        if ((!$_manage_)) {
            // line 39
            echo "          <div class=\"btn-group\">
            <a class=\"btn btn-default btn-sm\" data-toggle=\"modal\" data-url=\"";
            // line 40
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_review_create", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
            echo "\" data-role=\"tooltip\" title=\"评价\" data-placement=\"top\" href=\"#modal\">
              <i class=\"glyphicon glyphicon-thumbs-up\"></i> ";
            // line 41
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_course_, "ratingNum"), "html", null, true);
            echo "</a>

            ";
            // line 43
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
            if (isset($context["isAdmin"])) { $_isAdmin_ = $context["isAdmin"]; } else { $_isAdmin_ = null; }
            if (((($this->getAttribute($_course_, "showStudentNumType") == "opened") || ((($this->getAttribute($_member_, "role", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_member_, "role"), "student")) : ("student")) == "teacher")) || $_isAdmin_)) {
                // line 44
                echo "              <a class=\"btn btn-default btn-sm\" data-toggle=\"modal\" data-url=\"";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_members", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
                echo "\" data-role=\"tooltip\" title=\"查看学员的学习进度, 还可以发私信进行联系!\" data-placement=\"bottom\"
              href=\"#modal\"><i class=\"glyphicon glyphicon-user\"></i> ";
                // line 45
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_course_, "studentNum"), "html", null, true);
                echo "</a>
            ";
            }
            // line 47
            echo "
            <div class=\"btn-group\" data-role=\"tooltip\" title=\"分享到\" data-placement=\"left\" >
              <button class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
                <i class=\"glyphicon glyphicon-share\"></i>
              </button>
              <ul class=\"dropdown-menu pull-right shares-dropdown-menu js-social-shares\">
                
                <li><div class=\"share\" data-bdText=\"";
            // line 54
            if (isset($context["courseShareContent"])) { $_courseShareContent_ = $context["courseShareContent"]; } else { $_courseShareContent_ = null; }
            echo twig_escape_filter($this->env, $_courseShareContent_, "html", null, true);
            echo "\"></div></li>
              </ul>
              <div id=\"course-social-share-params\" 
                data-title=\"课程 《";
            // line 57
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_course_, "title"), "html", null, true);
            echo "》\"
                data-picture=\"";
            // line 58
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getDefaultPath("coursePicture", $this->getAttribute($_course_, "largePicture"), "large", true), "html", null, true);
            echo "\"
                data-url=\"";
            // line 59
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("course_show", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
            echo "\"
                ></div>
            </div>
            ";
            // line 62
            if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
            if (((($this->getAttribute($_member_, "role", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_member_, "role"), null)) : (null)) == "student")) {
                // line 63
                echo "                  ";
                if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
                if ($this->getAttribute($_member_, "orderId")) {
                    // line 64
                    echo "                   <a class=\"btn btn-default btn-sm \" title=\"退出学习\" type=\"button\" href=\"#modal\" data-toggle=\"modal\" data-url=\"";
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_order_refund", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
                    echo "\"><i class=\"glyphicon glyphicon-log-in\"></i></a>
                  ";
                } else {
                    // line 66
                    echo "                  <a class=\"btn btn-default btn-sm course-exit-btn\" id=\"exit-course-learning\" title=\"退出学习\" type=\"button\"  href=\"javascript:;\" data-url=\"";
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_exit", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
                    echo "\"  data-goto=\"";
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
                    echo "\"><i class=\"glyphicon glyphicon-log-in\"></i></a>
                    ";
                }
                // line 68
                echo "                ";
            }
            // line 69
            echo "            ";
            if (isset($context["canManage"])) { $_canManage_ = $context["canManage"]; } else { $_canManage_ = null; }
            if ($_canManage_) {
                // line 70
                echo "            <a class=\"btn btn-default btn-sm \" type=\"button\" href=\"";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
                echo "\"  title=\"课程管理\"  >
            <i class=\"glyphicon glyphicon-cog\"></i>
            </a>
            ";
            }
            // line 74
            echo "          </div>

          ";
        } else {
            // line 77
            echo "
            ";
            // line 78
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if (($this->getAttribute($_course_, "status") == "published")) {
                // line 79
                echo "              <div class=\"btn-group\">
                <a class=\"btn btn-default btn-sm\" href=\"";
                // line 80
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
                echo "\">返回课程主页</a>
              </div>
            ";
            }
            // line 83
            echo "
            <div class=\"btn-group\">
              <button class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">预览 <span class=\"caret\"></span></button>
              <ul class=\"dropdown-menu pull-right\">
                  <li><a href=\"";
            // line 87
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($_course_, "id"), "previewAs" => "member")), "html", null, true);
            echo "\" target=\"_blank\">作为 已购买用户</a></li>
                  <li><a href=\"";
            // line 88
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($_course_, "id"), "previewAs" => "guest")), "html", null, true);
            echo "\" target=\"_blank\">作为 未购买用户</a></li>
              </ul>
            </div>

            ";
            // line 92
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if (($this->getAttribute($_course_, "status") != "published")) {
                // line 93
                echo "              <div class=\"btn-group\">
                <button class=\"btn btn-success btn-sm course-publish-btn\" data-url=\"";
                // line 94
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_publish", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
                echo "\">发布课程</button>
              </div>
            ";
            }
            // line 97
            echo "
          ";
        }
        // line 99
        echo "        </div>
      </div>
    </div>
    ";
        // line 102
        if (isset($context["vipChecked"])) { $_vipChecked_ = $context["vipChecked"]; } else { $_vipChecked_ = null; }
        if ((((array_key_exists("vipChecked", $context)) ? (_twig_default_filter($_vipChecked_, "ok")) : ("ok")) != "ok")) {
            // line 103
            echo "      <div class=\"alert alert-danger alert-dismissable\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
        ";
            // line 105
            if (isset($context["vipChecked"])) { $_vipChecked_ = $context["vipChecked"]; } else { $_vipChecked_ = null; }
            if (($_vipChecked_ == "not_member")) {
                // line 106
                echo "          您已经不是会员，不能学习此课程！请重新开通会员，或购买课程！
        ";
            } elseif (($_vipChecked_ == "member_expired")) {
                // line 108
                echo "          您的会员已过期，不能学习此课程，请先续费。
        ";
            } elseif (($_vipChecked_ == "level_not_exist")) {
                // line 110
                echo "          会员等级已删除，不能学习此课程。
        ";
            } elseif (($_vipChecked_ == "level_low")) {
                // line 112
                echo "          会员等级不够，不能学习此课程。
        ";
            } elseif (($_vipChecked_ == "vip_closed")) {
                // line 114
                echo "          会员专区已关闭，您不能继续学课程。
        ";
            }
            // line 116
            echo "
      </div>

    ";
        }
        // line 120
        echo "
    ";
        // line 121
        if (isset($context["isNonExpired"])) { $_isNonExpired_ = $context["isNonExpired"]; } else { $_isNonExpired_ = null; }
        if ((!$_isNonExpired_)) {
            // line 122
            echo "      ";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if (($this->env->getExtension('topxia_web_twig')->getFreeLimitType($_course_) == "free_end")) {
                // line 123
                echo "        <div class=\"alert alert-danger alert-dismissable\">
          <a class=\"btn btn-primary\" href=\"";
                // line 124
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_rebuy", array("courseId" => $this->getAttribute($_course_, "id"))), "html", null, true);
                echo "\" style=\"float:right;margin-top: -6px;margin-right:-20px\" title=\"\">购买</a>
          您购买的课程限时免费活动已结束，无法继续学习课时、提问等。请重新购买该课程。
        </div>
      ";
            } else {
                // line 128
                echo "       <div class=\"alert alert-danger alert-dismissable\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
          您购买的课程已到期，无法学习课时、提问等。如有疑问，请联系老师。
      </div>
      ";
            }
            // line 133
            echo "    ";
        }
        // line 134
        echo "
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  355 => 134,  352 => 133,  345 => 128,  337 => 124,  334 => 123,  330 => 122,  327 => 121,  324 => 120,  318 => 116,  314 => 114,  310 => 112,  306 => 110,  302 => 108,  298 => 106,  295 => 105,  291 => 103,  288 => 102,  283 => 99,  279 => 97,  272 => 94,  269 => 93,  266 => 92,  258 => 88,  253 => 87,  247 => 83,  240 => 80,  237 => 79,  234 => 78,  231 => 77,  226 => 74,  217 => 70,  213 => 69,  210 => 68,  200 => 66,  193 => 64,  189 => 63,  186 => 62,  179 => 59,  174 => 58,  169 => 57,  162 => 54,  153 => 47,  147 => 45,  141 => 44,  136 => 43,  130 => 41,  125 => 40,  122 => 39,  119 => 38,  114 => 35,  111 => 34,  97 => 32,  92 => 31,  87 => 30,  84 => 29,  81 => 28,  76 => 25,  65 => 20,  61 => 19,  57 => 17,  50 => 14,  42 => 13,  35 => 10,  30 => 9,  21 => 2,  19 => 1,  113 => 38,  110 => 37,  105 => 23,  100 => 19,  88 => 29,  83 => 28,  78 => 27,  73 => 24,  71 => 23,  64 => 19,  54 => 13,  49 => 10,  31 => 7,  29 => 5,  69 => 22,  66 => 20,  63 => 19,  58 => 16,  55 => 15,  52 => 14,  46 => 9,  43 => 9,  40 => 8,  37 => 3,  34 => 6,  28 => 4,  26 => 3,);
    }
}
