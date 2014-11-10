<?php

/* TopxiaAdminBundle:CourseQuestion:index.html.twig */
class __TwigTemplate_4b4fa2621902a03e51fdfad6990f4a7d extends Twig_Template
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
        $context["script_controller"] = "course/questions";
        // line 7
        $context["menu"] = "question";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "问答管理 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_main($context, array $blocks = array())
    {
        // line 10
        echo "
<div class=\"page-header clearfix\">
  <h1 class=\"pull-left\">问答管理</h1>
</div>

";
        // line 15
        $this->env->loadTemplate("TopxiaAdminBundle:CourseQuestion:tab.html.twig")->display($context);
        // line 16
        echo "<br>

  <div class=\"well well-sm\">
    <form class=\"form-inline\">

      <div class=\"form-group\">
        <select class=\"form-control\" name=\"keywordType\">
          ";
        // line 23
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->selectOptions(array("title" => "标题", "content" => "内容", "courseId" => "课程编号"), $this->getAttribute($this->getAttribute($_app_, "request"), "get", array(0 => "keywordType"), "method"));
        echo "
        </select>
      </div>

      <div class=\"form-group\">
        <input class=\"form-control\" type=\"text\" placeholder=\"关键词\" name=\"keyword\" value=\"";
        // line 28
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "request"), "get", array(0 => "keyword"), "method"), "html", null, true);
        echo "\">
      </div>
      
      <span class=\"divider\"></span>

      <div class=\"form-group\">
        <input class=\"form-control\" type=\"text\" placeholder=\"作者昵称\" name=\"author\" value=\"";
        // line 34
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "request"), "get", array(0 => "author"), "method"), "html", null, true);
        echo "\">
      </div>


      <button class=\"btn btn-primary\" type=\"submit\">搜索</button>
    </form>
  </div>

  <div id=\"question-table-container\">
    <table id=\"question-table\" class=\"table table-striped table-hover\">
      <thead>
        <tr>
          <th width=\"5%\"><input type=\"checkbox\" data-role=\"batch-select\"></th>
          <th width=\"50%\">问答</th>
          ";
        // line 48
        if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
        if (($_type_ == "unPosted")) {
            // line 49
            echo "            <th width=\"10%\">查看</th>
          ";
        } elseif (($_type_ == "all")) {
            // line 51
            echo "            <th width=\"10%\">回复/查看</th>
          ";
        }
        // line 53
        echo "          <th width=\"10%\">作者</th>
          <th width=\"10%\">创建时间</th>
          <th width=\"15%\">操作</th>
        </tr>
      </thead>
      <tbody class=\"tbody\">
        ";
        // line 59
        if (isset($context["questions"])) { $_questions_ = $context["questions"]; } else { $_questions_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_questions_);
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 60
            echo "        
          ";
            // line 61
            if (isset($context["users"])) { $_users_ = $context["users"]; } else { $_users_ = null; }
            if (isset($context["question"])) { $_question_ = $context["question"]; } else { $_question_ = null; }
            $context["author"] = (($this->getAttribute($_users_, $this->getAttribute($_question_, "userId"), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_users_, $this->getAttribute($_question_, "userId"), array(), "array"), null)) : (null));
            // line 62
            echo "          ";
            if (isset($context["courses"])) { $_courses_ = $context["courses"]; } else { $_courses_ = null; }
            if (isset($context["question"])) { $_question_ = $context["question"]; } else { $_question_ = null; }
            $context["course"] = (($this->getAttribute($_courses_, $this->getAttribute($_question_, "courseId"), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_courses_, $this->getAttribute($_question_, "courseId"), array(), "array"), null)) : (null));
            // line 63
            echo "          ";
            if (isset($context["lessons"])) { $_lessons_ = $context["lessons"]; } else { $_lessons_ = null; }
            if (isset($context["question"])) { $_question_ = $context["question"]; } else { $_question_ = null; }
            $context["lesson"] = (($this->getAttribute($_lessons_, $this->getAttribute($_question_, "lessonId"), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_lessons_, $this->getAttribute($_question_, "lessonId"), array(), "array"), null)) : (null));
            // line 64
            echo "          <tr data-role=\"item\">
            <td><input value=\"";
            // line 65
            if (isset($context["question"])) { $_question_ = $context["question"]; } else { $_question_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_question_, "id"), "html", null, true);
            echo "\" type=\"checkbox\" data-role=\"batch-item\"> </td>
            <td>
              <a href=\"";
            // line 67
            if (isset($context["question"])) { $_question_ = $context["question"]; } else { $_question_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_thread_show", array("courseId" => $this->getAttribute($_question_, "courseId"), "id" => $this->getAttribute($_question_, "id"))), "html", null, true);
            echo "\" target=\"_blank\"><strong>";
            if (isset($context["question"])) { $_question_ = $context["question"]; } else { $_question_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_question_, "title"), "html", null, true);
            echo "</strong></a>

              <div class=\"short-long-text\">
                <div class=\"short-text text-sm text-muted\">";
            // line 70
            if (isset($context["question"])) { $_question_ = $context["question"]; } else { $_question_ = null; }
            echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($_question_, "content"), 60);
            echo " <span class=\"trigger\">(展开)</span></div>
                <div class=\"long-text\">";
            // line 71
            if (isset($context["question"])) { $_question_ = $context["question"]; } else { $_question_ = null; }
            echo $this->getAttribute($_question_, "content");
            echo " <span class=\"trigger\">(收起)</span></div>
              </div>
              
              <div class=\"text-sm mts\">
                ";
            // line 75
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if ($_course_) {
                // line 76
                echo "                  <a href=\"";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
                echo "\" class=\"text-success\" target=\"_blank\">";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_course_, "title"), "html", null, true);
                echo "</a>
                  ";
                // line 77
                if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
                if ($_lesson_) {
                    // line 78
                    echo "                    <span class=\"text-muted mhs\">&raquo;</span>
                    <a class=\"text-success\"  href=\"";
                    // line 79
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
                // line 81
                echo "                ";
            }
            // line 82
            echo "              </div>
            </td>
            <td>
            <span class=\"text-sm\">
              ";
            // line 86
            if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
            if (($_type_ == "unPosted")) {
                // line 87
                echo "               ";
                if (isset($context["question"])) { $_question_ = $context["question"]; } else { $_question_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_question_, "hitNum"), "html", null, true);
                echo "
               ";
            } elseif (($_type_ == "all")) {
                // line 89
                echo "              ";
                if (isset($context["question"])) { $_question_ = $context["question"]; } else { $_question_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_question_, "postNum"), "html", null, true);
                echo " / ";
                if (isset($context["question"])) { $_question_ = $context["question"]; } else { $_question_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_question_, "hitNum"), "html", null, true);
                echo "
                ";
            }
            // line 91
            echo "            </span>
            </td>
            <td>
              ";
            // line 94
            if (isset($context["admin_macro"])) { $_admin_macro_ = $context["admin_macro"]; } else { $_admin_macro_ = null; }
            if (isset($context["author"])) { $_author_ = $context["author"]; } else { $_author_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_admin_macro_, "user_link", array(0 => $_author_), "method"), "html", null, true);
            echo " <br />
            </td>
            <td>
              ";
            // line 97
            if (isset($context["question"])) { $_question_ = $context["question"]; } else { $_question_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_question_, "createdTime"), "Y-n-d H:i:s"), "html", null, true);
            echo "
            </td>
            <td>
            ";
            // line 100
            $this->env->loadTemplate("TopxiaAdminBundle:CourseQuestion:td-operations.html.twig")->display($context);
            // line 101
            echo "            </td>
          </tr>
        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 104
            echo "          <tr><td colspan=\"20\"><div class=\"empty\">暂无问答记录</div></td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "      </tbody>
    </table>

    <div class=\"mbm\">
        <label class=\"checkbox-inline\"><input type=\"checkbox\" data-role=\"batch-select\"> 全选</label>
        <button class=\"btn btn-default btn-sm mlm\" data-role=\"batch-delete\" data-name=\"问答\" data-url=\"";
        // line 111
        echo $this->env->getExtension('routing')->getPath("admin_thread_batch_delete");
        echo "\">删除</button>
    </div>
  </div>
    
  ";
        // line 115
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "paginator", array(0 => $_paginator_), "method"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:CourseQuestion:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  305 => 115,  298 => 111,  291 => 106,  284 => 104,  269 => 101,  267 => 100,  260 => 97,  252 => 94,  247 => 91,  237 => 89,  230 => 87,  227 => 86,  221 => 82,  218 => 81,  203 => 79,  200 => 78,  197 => 77,  188 => 76,  185 => 75,  177 => 71,  172 => 70,  162 => 67,  156 => 65,  153 => 64,  148 => 63,  143 => 62,  139 => 61,  136 => 60,  117 => 59,  109 => 53,  105 => 51,  101 => 49,  98 => 48,  80 => 34,  70 => 28,  61 => 23,  52 => 16,  50 => 15,  43 => 10,  40 => 9,  33 => 3,  28 => 7,  26 => 5,);
    }
}
