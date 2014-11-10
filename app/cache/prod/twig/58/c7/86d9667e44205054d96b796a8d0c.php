<?php

/* TopxiaWebBundle:CourseThread:index.html.twig */
class __TwigTemplate_58c786d9667e44205054d96b796a8d0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaWebBundle:Course:dashboard-layout.html.twig");

        $this->blocks = array(
            'dashboard_main' => array($this, 'block_dashboard_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Course:dashboard-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["script_controller"] = "course/common";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_dashboard_main($context, array $blocks = array())
    {
        // line 6
        echo "
";
        // line 7
        $this->env->loadTemplate("TopxiaWebBundle:Course:dashboard-nav.html.twig")->display(array_merge($context, array("nav" => "thread")));
        // line 8
        echo "
  <div class=\"pull-right\">
    <a class=\"btn btn-sm btn-info\" href=\"";
        // line 10
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_thread_create", array("id" => $this->getAttribute($_course_, "id"), "type" => "discussion")), "html", null, true);
        echo "\">发话题</a>
    <a class=\"btn btn-sm btn-info\" href=\"";
        // line 11
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_thread_create", array("id" => $this->getAttribute($_course_, "id"), "type" => "question")), "html", null, true);
        echo "\">提问题</a> 
  </div>

  <div class=\"thread-filters clearfix\">
    <ul class=\"nav nav-pills nav-mini pull-left\">
      <li";
        // line 16
        if (isset($context["filters"])) { $_filters_ = $context["filters"]; } else { $_filters_ = null; }
        if (($this->getAttribute($_filters_, "type") == "all")) {
            echo " class=\"active\"";
        }
        echo "><a class=\"js-nav\" data-target=\"#thread-pane\" href=\"";
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if (isset($context["filters"])) { $_filters_ = $context["filters"]; } else { $_filters_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_threads", twig_array_merge(twig_array_merge(array("id" => $this->getAttribute($_course_, "id")), $_filters_), array("type" => "all"))), "html", null, true);
        echo "\">全部</a></li>
      <li";
        // line 17
        if (isset($context["filters"])) { $_filters_ = $context["filters"]; } else { $_filters_ = null; }
        if (($this->getAttribute($_filters_, "type") == "question")) {
            echo " class=\"active\"";
        }
        echo "><a class=\"js-nav\" data-target=\"#thread-pane\" href=\"";
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if (isset($context["filters"])) { $_filters_ = $context["filters"]; } else { $_filters_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_threads", twig_array_merge(twig_array_merge(array("id" => $this->getAttribute($_course_, "id")), $_filters_), array("type" => "question"))), "html", null, true);
        echo "\">问答</a></li>
      <li";
        // line 18
        if (isset($context["filters"])) { $_filters_ = $context["filters"]; } else { $_filters_ = null; }
        if (($this->getAttribute($_filters_, "type") == "elite")) {
            echo " class=\"active\"";
        }
        echo "><a class=\"js-nav\" data-target=\"#thread-pane\" href=\"";
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if (isset($context["filters"])) { $_filters_ = $context["filters"]; } else { $_filters_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_threads", twig_array_merge(twig_array_merge(array("id" => $this->getAttribute($_course_, "id")), $_filters_), array("type" => "elite"))), "html", null, true);
        echo "\">精华</a></li>

      <li><span class=\"mhm text-muted\">|</span></li>

      <li class=\"dropdown\">
        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
          <span class=\"text-muted\">排序：</span>
          ";
        // line 25
        if (isset($context["filters"])) { $_filters_ = $context["filters"]; } else { $_filters_ = null; }
        if (($this->getAttribute($_filters_, "sort") == "posted")) {
            // line 26
            echo "            最后回复
          ";
        } elseif (($this->getAttribute($_filters_, "sort") == "created")) {
            // line 27
            echo " 
            最新发帖
          ";
        }
        // line 30
        echo "          <span class=\"caret\"></span>
        </a>
        <ul class=\"dropdown-menu\">
          <li class=\"";
        // line 33
        if (isset($context["filters"])) { $_filters_ = $context["filters"]; } else { $_filters_ = null; }
        if (($this->getAttribute($_filters_, "sort") == "posted")) {
            echo "active";
        }
        echo "\"><a class=\"js-nav\" href=\"";
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if (isset($context["filters"])) { $_filters_ = $context["filters"]; } else { $_filters_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_threads", twig_array_merge(twig_array_merge(array("id" => $this->getAttribute($_course_, "id")), $_filters_), array("sort" => "posted"))), "html", null, true);
        echo "\">最后回复</a></li>
          <li class=\"";
        // line 34
        if (isset($context["filters"])) { $_filters_ = $context["filters"]; } else { $_filters_ = null; }
        if (($this->getAttribute($_filters_, "sort") == "created")) {
            echo "active";
        }
        echo "\"><a class=\"js-nav\" href=\"";
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if (isset($context["filters"])) { $_filters_ = $context["filters"]; } else { $_filters_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_threads", twig_array_merge(twig_array_merge(array("id" => $this->getAttribute($_course_, "id")), $_filters_), array("sort" => "created"))), "html", null, true);
        echo "\">最新发帖</a></li>
        </ul>
      </li>


    </ul>


  </div>

  <ul class=\"media-list\">
    ";
        // line 45
        if (isset($context["threads"])) { $_threads_ = $context["threads"]; } else { $_threads_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_threads_);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["thread"]) {
            // line 46
            echo "      ";
            if (isset($context["users"])) { $_users_ = $context["users"]; } else { $_users_ = null; }
            if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
            $context["author"] = $this->getAttribute($_users_, $this->getAttribute($_thread_, "userId"), array(), "array");
            // line 47
            echo "      <li class=\"media\">
        ";
            // line 48
            if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
            if (isset($context["author"])) { $_author_ = $context["author"]; } else { $_author_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "user_avatar", array(0 => $_author_, 1 => "pull-left media-object media-object-small"), "method"), "html", null, true);
            echo "
          <div class=\"media-body\">
            ";
            // line 50
            if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
            if (($this->getAttribute($_thread_, "postNum") > 0)) {
                // line 51
                echo "              <span class=\"badge pull-right\" style=\"margin-top:15px;\">";
                if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_thread_, "postNum"), "html", null, true);
                echo "</span>
            ";
            }
            // line 53
            echo "            <div class=\"mbm\">
              ";
            // line 54
            if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
            if ($this->getAttribute($_thread_, "isStick")) {
                // line 55
                echo "                <span class=\"label label-danger\" title=\"置顶帖\">置顶</span>
              ";
            }
            // line 57
            echo "              ";
            if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
            if (($this->getAttribute($_thread_, "type") == "question")) {
                // line 58
                echo "                <span class=\"label label-info\" title=\"问答帖\">问</span>
              ";
            }
            // line 60
            echo "              <a class=\"js-nav\" href=\"";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_thread_show", array("courseId" => $this->getAttribute($_course_, "id"), "id" => $this->getAttribute($_thread_, "id"))), "html", null, true);
            echo "\"><strong>";
            if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_thread_, "title"), "html", null, true);
            echo "</strong></a>

              ";
            // line 62
            if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
            if ($this->getAttribute($_thread_, "isElite")) {
                // line 63
                echo "                <span class=\"label label-warning\" title=\"精华帖\">精</span>
              ";
            }
            // line 65
            echo "
            </div>
            
            <div class=\"text-muted text-normal\">
              by ";
            // line 69
            if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
            if (isset($context["author"])) { $_author_ = $context["author"]; } else { $_author_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "user_link", array(0 => $_author_, 1 => "link-muted"), "method"), "html", null, true);
            echo "

              ";
            // line 71
            if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
            if (($this->getAttribute($_thread_, "postNum") > 0)) {
                // line 72
                echo "                ";
                if (isset($context["users"])) { $_users_ = $context["users"]; } else { $_users_ = null; }
                if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
                $context["poster"] = $this->getAttribute($_users_, $this->getAttribute($_thread_, "latestPostUserId"), array(), "array");
                // line 73
                echo "                <span class=\"bullet\">•</span>
                <span>最后回复 ";
                // line 74
                if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
                if (isset($context["poster"])) { $_poster_ = $context["poster"]; } else { $_poster_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "user_link", array(0 => $_poster_, 1 => "link-muted"), "method"), "html", null, true);
                echo "</span>
              ";
            }
            // line 76
            echo "              <span class=\"bullet\">•</span>
              <span>";
            // line 77
            if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->smarttimeFilter($this->getAttribute($_thread_, "latestPostTime")), "html", null, true);
            echo "</span>
              <span class=\"bullet\">•</span>
              <span>";
            // line 79
            if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_thread_, "hitNum"), "html", null, true);
            echo "浏览</span>
              ";
            // line 80
            if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
            if (isset($context["lessons"])) { $_lessons_ = $context["lessons"]; } else { $_lessons_ = null; }
            $context["lesson"] = ((($this->getAttribute($_thread_, "lessonId") > 0)) ? ((($this->getAttribute($_lessons_, $this->getAttribute($_thread_, "lessonId"), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_lessons_, $this->getAttribute($_thread_, "lessonId"), array(), "array"), null)) : (null))) : (null));
            // line 81
            echo "              ";
            if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
            if ($_lesson_) {
                // line 82
                echo "                <span class=\"bullet\">•</span>
                <a class=\"link-muted\" href=\"";
                // line 83
                if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_learn", array("id" => $this->getAttribute($_thread_, "courseId"))), "html", null, true);
                echo "#lesson/";
                if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_thread_, "lessonId"), "html", null, true);
                echo "\" title=\"";
                if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_lesson_, "title"), "html", null, true);
                echo "\">课时";
                if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_lesson_, "number"), "html", null, true);
                echo "</a>
              ";
            }
            // line 85
            echo "
            </div>
          </div>
      </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 90
            echo "      <li class=\"mvl tac text-muted\">课程暂无话题</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thread'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "  </ul>

  ";
        // line 94
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "paginator", array(0 => $_paginator_), "method"), "html", null, true);
        echo "



";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseThread:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  302 => 94,  298 => 92,  291 => 90,  282 => 85,  267 => 83,  264 => 82,  260 => 81,  256 => 80,  251 => 79,  245 => 77,  242 => 76,  235 => 74,  232 => 73,  227 => 72,  224 => 71,  217 => 69,  211 => 65,  207 => 63,  204 => 62,  193 => 60,  189 => 58,  185 => 57,  181 => 55,  178 => 54,  175 => 53,  168 => 51,  165 => 50,  158 => 48,  155 => 47,  150 => 46,  144 => 45,  123 => 34,  112 => 33,  107 => 30,  102 => 27,  98 => 26,  95 => 25,  78 => 18,  67 => 17,  56 => 16,  47 => 11,  42 => 10,  38 => 8,  36 => 7,  33 => 6,  30 => 5,  25 => 3,);
    }
}
