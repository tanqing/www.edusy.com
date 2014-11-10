<?php

/* TopxiaAdminBundle:CourseThread:index.html.twig */
class __TwigTemplate_de599684eba0488a03240f2366a48a6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaAdminBundle:Course:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle:Course:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["script_controller"] = "course/threads";
        // line 7
        $context["menu"] = "thread";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "讨论区管理 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_main($context, array $blocks = array())
    {
        // line 10
        echo "
<div class=\"page-header clearfix\">
  <h1 class=\"pull-left\">讨论区管理</h1>
</div>

<div class=\"well well-sm\">
  <form class=\"form-inline\">
    <div class=\"form-group\">
      <select class=\"form-control\" name=\"type\">
        ";
        // line 19
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getDict("threadType"), $this->getAttribute($this->getAttribute($_app_, "request"), "get", array(0 => "type"), "method"), "帖子类型");
        echo "
      </select>
    </div>
    
    <span class=\"divider\"></span>

    <div class=\"form-group\">
      <select class=\"form-control\" name=\"keywordType\">
        ";
        // line 27
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->selectOptions(array("title" => "标题", "content" => "内容", "courseId" => "课程编号"), $this->getAttribute($this->getAttribute($_app_, "request"), "get", array(0 => "keywordType"), "method"));
        echo "
      </select>
    </div>

    <div class=\"form-group\">
      <input class=\"form-control\" type=\"text\" placeholder=\"关键词\" name=\"keyword\" value=\"";
        // line 32
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "request"), "get", array(0 => "keyword"), "method"), "html", null, true);
        echo "\">
    </div>

    <div class=\"form-group\">
      <input class=\"form-control\" type=\"text\" placeholder=\"作者昵称\" name=\"author\" value=\"";
        // line 36
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "request"), "get", array(0 => "author"), "method"), "html", null, true);
        echo "\">
    </div>

    <button class=\"btn btn-primary\" type=\"submit\">搜索</button>
  </form>
</div>

  <div id=\"thread-table-container\">
    <table class=\"table table-striped table-hover\">
      <thead>
        <tr>
          <th width=\"5%\"><input type=\"checkbox\" data-role=\"batch-select\"></th>
          <th width=\"60%\">帖子</th>
          <th width=\"10%\">回复/查看</th>
          <th width=\"15%\">作者</th>
          <th width=\"10%\">操作</th>
        </tr>
      </thead>
      <body>
        ";
        // line 55
        if (isset($context["threads"])) { $_threads_ = $context["threads"]; } else { $_threads_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_threads_);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["thread"]) {
            // line 56
            echo "          ";
            if (isset($context["users"])) { $_users_ = $context["users"]; } else { $_users_ = null; }
            if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
            $context["author"] = (($this->getAttribute($_users_, $this->getAttribute($_thread_, "userId"), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_users_, $this->getAttribute($_thread_, "userId"), array(), "array"), null)) : (null));
            // line 57
            echo "          ";
            if (isset($context["courses"])) { $_courses_ = $context["courses"]; } else { $_courses_ = null; }
            if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
            $context["course"] = (($this->getAttribute($_courses_, $this->getAttribute($_thread_, "courseId"), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_courses_, $this->getAttribute($_thread_, "courseId"), array(), "array"), null)) : (null));
            // line 58
            echo "          ";
            if (isset($context["lessons"])) { $_lessons_ = $context["lessons"]; } else { $_lessons_ = null; }
            if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
            $context["lesson"] = (($this->getAttribute($_lessons_, $this->getAttribute($_thread_, "lessonId"), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_lessons_, $this->getAttribute($_thread_, "lessonId"), array(), "array"), null)) : (null));
            // line 59
            echo "          <tr data-role=\"item\">
            <td><input value=\"";
            // line 60
            if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_thread_, "id"), "html", null, true);
            echo "\" type=\"checkbox\" data-role=\"batch-item\"> </td>
            <td>
              ";
            // line 62
            if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
            if (($this->getAttribute($_thread_, "type") == "question")) {
                // line 63
                echo "                <span class=\"label label-info\">问</span>
              ";
            }
            // line 65
            echo "              <a href=\"";
            if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_thread_show", array("courseId" => $this->getAttribute($_thread_, "courseId"), "id" => $this->getAttribute($_thread_, "id"))), "html", null, true);
            echo "\" target=\"_blank\"><strong>";
            if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_thread_, "title"), "html", null, true);
            echo "</strong></a>

              <div class=\"short-long-text\">
                <div class=\"short-text text-sm text-muted\">";
            // line 68
            if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
            echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($_thread_, "content"), 60);
            echo " <span class=\"trigger\">(展开)</span></div>
                <div class=\"long-text\">";
            // line 69
            if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
            echo $this->getAttribute($_thread_, "content");
            echo " <span class=\"trigger\">(收起)</span></div>
              </div>
              
              <div class=\"text-sm mts\">
                ";
            // line 73
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if ($_course_) {
                // line 74
                echo "                  <a href=\"";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
                echo "\" class=\"text-success\" target=\"_blank\">";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_course_, "title"), "html", null, true);
                echo "</a>
                  ";
                // line 75
                if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
                if ($_lesson_) {
                    // line 76
                    echo "                    <span class=\"text-muted mhs\">&raquo;</span>
                    <a class=\"text-success\"  href=\"";
                    // line 77
                    if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_learn", array("id" => $this->getAttribute($_lesson_, "courseId"))), "html", null, true);
                    echo "#lesson/";
                    if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_lesson_, "id"), "html", null, true);
                    echo "\" target=\"_blank\">课时";
                    if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_lesson_, "number"), "html", null, true);
                    echo "：";
                    if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_lesson_, "title"), "html", null, true);
                    echo "</a>
                  ";
                }
                // line 79
                echo "                ";
            }
            // line 80
            echo "              </div>
            </td>
            <td><span class=\"text-sm\">";
            // line 82
            if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_thread_, "postNum"), "html", null, true);
            echo " / ";
            if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_thread_, "hitNum"), "html", null, true);
            echo "</span></td>
            <td>
              ";
            // line 84
            if (isset($context["admin_macro"])) { $_admin_macro_ = $context["admin_macro"]; } else { $_admin_macro_ = null; }
            if (isset($context["author"])) { $_author_ = $context["author"]; } else { $_author_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_admin_macro_, "user_link", array(0 => $_author_), "method"), "html", null, true);
            echo " <br />
              <span class=\"text-muted text-sm\">";
            // line 85
            if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_thread_, "createdTime"), "Y-n-d H:i:s"), "html", null, true);
            echo "</span>
            </td>
            <td><button class=\"btn btn-default btn-sm\" data-role=\"item-delete\" data-name=\"帖子\" data-url=\"";
            // line 87
            if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_thread_delete", array("id" => $this->getAttribute($_thread_, "id"))), "html", null, true);
            echo "\">删除</button></td>
          </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 90
            echo "          <tr><td colspan=\"20\"><div class=\"empty\">暂无帖子记录</div></td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thread'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "      </body>
    </table>

    <div class=\"mbm\">
        <label class=\"checkbox-inline\"><input type=\"checkbox\" data-role=\"batch-select\"> 全选</label>
        <button class=\"btn btn-default btn-sm mlm\" data-role=\"batch-delete\" data-name=\"帖子\" data-url=\"";
        // line 97
        echo $this->env->getExtension('routing')->getPath("admin_thread_batch_delete");
        echo "\">删除</button>
    </div>

  </div>
    
  ";
        // line 102
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "paginator", array(0 => $_paginator_), "method"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:CourseThread:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 102,  251 => 97,  244 => 92,  237 => 90,  228 => 87,  222 => 85,  216 => 84,  207 => 82,  203 => 80,  200 => 79,  185 => 77,  182 => 76,  179 => 75,  170 => 74,  167 => 73,  159 => 69,  154 => 68,  143 => 65,  139 => 63,  136 => 62,  130 => 60,  127 => 59,  122 => 58,  117 => 57,  112 => 56,  106 => 55,  83 => 36,  75 => 32,  66 => 27,  54 => 19,  43 => 10,  40 => 9,  33 => 3,  28 => 7,  26 => 5,);
    }
}
