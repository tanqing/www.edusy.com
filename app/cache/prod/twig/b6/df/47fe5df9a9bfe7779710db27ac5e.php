<?php

/* TopxiaAdminBundle:Course:tr.html.twig */
class __TwigTemplate_b6df47fe5df9a9bfe7779710db27ac5e extends Twig_Template
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
        $context["admin_macro"] = $this->env->loadTemplate("TopxiaAdminBundle::macro.html.twig");
        // line 2
        echo "<tr id=\"course-tr-";
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_course_, "id"), "html", null, true);
        echo "\">
  <td>";
        // line 3
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_course_, "id"), "html", null, true);
        echo "</td>
  <td>
    <a href=\"";
        // line 5
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
        echo "\" target=\"_blank\"><strong>";
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_course_, "title"), "html", null, true);
        echo "</strong></a>";
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if (($this->getAttribute($_course_, "type") == "live")) {
            echo "<span class=\"label label-success live-label mls\">直播</span>";
        }
        // line 6
        echo "    <br>
    <span class=\"text-muted text-sm\">分类：";
        // line 7
        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($_category_, "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_category_, "name"), "--")) : ("--")), "html", null, true);
        echo "</span>
    ";
        // line 8
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if ($this->getAttribute($_course_, "recommended")) {
            // line 9
            echo "      <span class=\"label label-default\">荐:";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_course_, "recommendedTime"), "Y-m-d"), "html", null, true);
            echo " / 序号:";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_course_, "recommendedSeq"), "html", null, true);
            echo "</span>
    ";
        }
        // line 11
        echo "  </td>
  <td>";
        // line 12
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if (($this->getAttribute($_course_, "serializeMode") == "none")) {
            echo "<span class=\"text-info\">非连载课程</span>";
        } elseif (($this->getAttribute($_course_, "serializeMode") == "serialize")) {
            echo "<span class=\"text-success\">连载中</span>";
        } elseif (($this->getAttribute($_course_, "serializeMode") == "finished")) {
            echo "<span class=\"text-danger\">已完结</span>";
        }
        echo "</td>
  <td>";
        // line 13
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_course_, "studentNum"), "html", null, true);
        echo "</td>
  <td><span class=\"money-text\">";
        // line 14
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_course_, "income"), "html", null, true);
        echo "</span></td>
  <td>";
        // line 15
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo $this->env->getExtension('topxia_web_twig')->getDictText("courseStatus:html", $this->getAttribute($_course_, "status"));
        echo "</td>
  <td>
    ";
        // line 17
        if (isset($context["admin_macro"])) { $_admin_macro_ = $context["admin_macro"]; } else { $_admin_macro_ = null; }
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo $_admin_macro_->getuser_link($_user_);
        echo "
    <br>
    <span class=\"text-muted text-sm\">";
        // line 19
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_course_, "createdTime"), "Y-n-d H:i"), "html", null, true);
        echo "</span>
  </td>
  <td>
    <div class=\"btn-group\">
      <a class=\"btn btn-default btn-sm\" href=\"";
        // line 23
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
        echo "\" target=\"_blank\">管理</a>

      <a href=\"#\" type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
        <span class=\"caret\"></span>
      </a>
      <ul class=\"dropdown-menu pull-right\">

        <li><a class=\"recommend-course\" href=\"#modal\" data-toggle=\"modal\" data-url=\"";
        // line 30
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_course_recommend", array("id" => $this->getAttribute($_course_, "id"), "ref" => "courseList")), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-hand-up\"></span> 推荐课程</a></li>

        ";
        // line 32
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if ($this->getAttribute($_course_, "recommended")) {
            // line 33
            echo "          <li><a class=\"cancel-recommend-course\" href=\"javascript:\" data-url=\"";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_course_cancel_recommend", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-hand-right\"></span> 取消推荐</a></li>
        ";
        }
        // line 35
        echo "
        <li><a href=\"";
        // line 36
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($_course_, "id"), "previewAs" => "guest")), "html", null, true);
        echo "\" target=\"_blank\"><span class=\"glyphicon glyphicon-eye-open\"></span> 预览：作为未购买用户</a></li>
        <li><a href=\"";
        // line 37
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($_course_, "id"), "previewAs" => "member")), "html", null, true);
        echo "\" target=\"_blank\"><span class=\"glyphicon glyphicon-eye-open\"></span> 预览：作为已购买用户</a></li>

        <li class=\"divider\"></li>

        ";
        // line 41
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if (($this->getAttribute($_course_, "status") == "published")) {
            // line 42
            echo "          <li><a class=\"close-course\" href=\"javascript:\" data-url=\"";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_course_close", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-ban-circle\"></span> 关闭课程</a></li>
        ";
        }
        // line 44
        echo "
        ";
        // line 45
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if (($this->getAttribute($_course_, "status") != "published")) {
            // line 46
            echo "          <li><a class=\"publish-course\" href=\"javascript:\" data-url=\"";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_course_publish", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-ok-circle\"></span> 发布课程</a></li>
        ";
        }
        // line 48
        echo "
        <li class=\"divider\"></li>

        <li><a class=\"delete-course\" href=\"javascript:\" data-url=\"";
        // line 51
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_course_delete", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-trash\"></span> 删除课程</a></li>
      </ul>
    </div>
  </td>
</tr>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Course:tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 51,  176 => 48,  169 => 46,  163 => 44,  156 => 42,  153 => 41,  145 => 37,  137 => 35,  127 => 32,  121 => 30,  102 => 19,  95 => 17,  89 => 15,  65 => 11,  55 => 9,  52 => 8,  21 => 2,  19 => 1,  193 => 39,  180 => 33,  170 => 31,  160 => 29,  150 => 27,  140 => 36,  130 => 33,  120 => 21,  110 => 23,  100 => 17,  90 => 15,  79 => 13,  68 => 12,  66 => 10,  57 => 9,  54 => 8,  51 => 7,  46 => 40,  44 => 6,  38 => 7,  35 => 6,  32 => 5,  27 => 3,  171 => 63,  166 => 45,  159 => 58,  146 => 57,  143 => 56,  138 => 55,  133 => 54,  114 => 53,  91 => 34,  84 => 14,  76 => 27,  67 => 22,  56 => 15,  50 => 13,  47 => 7,  43 => 10,  40 => 37,  33 => 5,  28 => 7,  26 => 5,);
    }
}
