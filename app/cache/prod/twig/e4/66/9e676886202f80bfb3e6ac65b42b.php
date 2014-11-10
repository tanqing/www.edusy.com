<?php

/* TopxiaAdminBundle:CourseNote:index.html.twig */
class __TwigTemplate_e4669e676886202f80bfb3e6ac65b42b extends Twig_Template
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
        $context["menu"] = "note";
        // line 7
        $context["script_controller"] = "course/note";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "笔记管理 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_main($context, array $blocks = array())
    {
        // line 10
        echo "<div class=\"page-header clearfix\">
  <h1 class=\"pull-left\">笔记管理</h1>
</div>

<div class=\"well well-sm\">
  <form class=\"form-inline\">

    <div class=\"form-group\">
      <select class=\"form-control\" name=\"keywordType\">
        ";
        // line 19
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->selectOptions(array("content" => "内容", "courseId" => "课程编号"), $this->getAttribute($this->getAttribute($_app_, "request"), "get", array(0 => "keywordType"), "method"));
        echo "
      </select>
    </div>

    <div class=\"form-group\">
      <input class=\"form-control\" type=\"text\" name=\"keyword\" value=\"";
        // line 24
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "request"), "get", array(0 => "keyword"), "method"), "html", null, true);
        echo "\" placeholder=\"关键词\">
    </div>

    <span class=\"divider\"></span>

    <div class=\"form-group\">
      <input class=\"form-control\" type=\"text\" name=\"author\" value=\"";
        // line 30
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "request"), "get", array(0 => "author"), "method"), "html", null, true);
        echo "\" placeholder=\"作者昵称\">
    </div>

    <button class=\"btn btn-primary\" type=\"submit\">搜索</button>
  </form>
</div>

<div id=\"note-table-container\">

  <table class=\"table table-striped table-hover\" id=\"note-table\">

    <thead>
      <tr>
        <th width=\"3%\"><input type=\"checkbox\" data-role=\"batch-select\"></th>
        <th width=\"75%\">内容</th>
        <th width=\"15%\">作者</th>
        <th width=\"7%\">操作</th>
      </tr>
    </thead>

    <tbody>

      ";
        // line 52
        if (isset($context["notes"])) { $_notes_ = $context["notes"]; } else { $_notes_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_notes_);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["note"]) {
            // line 53
            echo "        ";
            if (isset($context["courses"])) { $_courses_ = $context["courses"]; } else { $_courses_ = null; }
            if (isset($context["note"])) { $_note_ = $context["note"]; } else { $_note_ = null; }
            $context["course"] = (($this->getAttribute($_courses_, $this->getAttribute($_note_, "courseId"), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_courses_, $this->getAttribute($_note_, "courseId"), array(), "array"), null)) : (null));
            // line 54
            echo "        ";
            if (isset($context["lessons"])) { $_lessons_ = $context["lessons"]; } else { $_lessons_ = null; }
            if (isset($context["note"])) { $_note_ = $context["note"]; } else { $_note_ = null; }
            $context["lesson"] = (($this->getAttribute($_lessons_, $this->getAttribute($_note_, "lessonId"), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_lessons_, $this->getAttribute($_note_, "lessonId"), array(), "array"), null)) : (null));
            // line 55
            echo "        <tr data-role=\"item\">
          <td><input value=\"";
            // line 56
            if (isset($context["note"])) { $_note_ = $context["note"]; } else { $_note_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_note_, "id"), "html", null, true);
            echo "\" type=\"checkbox\"  data-role=\"batch-item\" ></td>
          <td>
              <div class=\"short-long-text\">
                <div class=\"short-text\">";
            // line 59
            if (isset($context["note"])) { $_note_ = $context["note"]; } else { $_note_ = null; }
            echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($_note_, "content"), 100);
            echo " <span class=\"trigger\">(展开)</span></div>
                <div class=\"long-text\">";
            // line 60
            if (isset($context["note"])) { $_note_ = $context["note"]; } else { $_note_ = null; }
            echo $this->getAttribute($_note_, "content");
            echo " <span class=\"trigger\">(收起)</span></div>
              </div>

              <div class=\"text-sm mts\">
                ";
            // line 64
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if ($_course_) {
                // line 65
                echo "                  <a href=\"";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
                echo "\" class=\"text-success\" target=\"_blank\">";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_course_, "title"), "html", null, true);
                echo "</a>
                  ";
                // line 66
                if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
                if ($_lesson_) {
                    // line 67
                    echo "                    <span class=\"text-muted mhs\">&raquo;</span>
                    <a class=\"text-success\"  href=\"";
                    // line 68
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
                // line 71
                echo "                ";
            }
            // line 72
            echo "              </div>
          </td>
          <td>
            ";
            // line 75
            if (isset($context["admin_macro"])) { $_admin_macro_ = $context["admin_macro"]; } else { $_admin_macro_ = null; }
            if (isset($context["users"])) { $_users_ = $context["users"]; } else { $_users_ = null; }
            if (isset($context["note"])) { $_note_ = $context["note"]; } else { $_note_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_admin_macro_, "user_link", array(0 => $this->getAttribute($_users_, $this->getAttribute($_note_, "userId"), array(), "array")), "method"), "html", null, true);
            echo "
            <br>
            <span class=\"text-muted text-sm\">";
            // line 77
            if (isset($context["note"])) { $_note_ = $context["note"]; } else { $_note_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_note_, "createdTime"), "Y-n-d H:i"), "html", null, true);
            echo "</span>
          </td>
          <td>
            <button class=\"btn btn-default btn-sm\" data-role=\"item-delete\" data-name=\"笔记\" data-url=\"";
            // line 80
            if (isset($context["note"])) { $_note_ = $context["note"]; } else { $_note_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_note_delete", array("id" => $this->getAttribute($_note_, "id"))), "html", null, true);
            echo "\">删除</button>
          </td>
        </tr>
      ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 84
            echo "        <tr><td colspan=\"20\"><div class=\"empty\">暂无笔记记录</div></td></tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['note'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "    </tbody>
  </table>

  <div>
    <label class=\"checkbox-inline\"><input type=\"checkbox\" data-role=\"batch-select\"> 全选</label>
    <button class=\"btn btn-default btn-sm mlm\" data-role=\"batch-delete\"  data-name=\"笔记\" data-url=\"";
        // line 91
        echo $this->env->getExtension('routing')->getPath("admin_note_batch_delete");
        echo "\">删除</button>
  </div>

</div>

  <div>
    ";
        // line 97
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "paginator", array(0 => $_paginator_), "method"), "html", null, true);
        echo "
  </div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:CourseNote:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 97,  219 => 91,  212 => 86,  205 => 84,  195 => 80,  188 => 77,  180 => 75,  175 => 72,  172 => 71,  156 => 68,  153 => 67,  150 => 66,  141 => 65,  138 => 64,  130 => 60,  125 => 59,  118 => 56,  115 => 55,  110 => 54,  105 => 53,  99 => 52,  73 => 30,  63 => 24,  54 => 19,  43 => 10,  40 => 9,  33 => 3,  28 => 7,  26 => 5,);
    }
}
