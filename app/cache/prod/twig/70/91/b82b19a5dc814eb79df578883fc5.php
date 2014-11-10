<?php

/* TopxiaAdminBundle:Review:index.html.twig */
class __TwigTemplate_7091b82b19a5dc814eb79df578883fc5 extends Twig_Template
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
        $context["script_controller"] = "review/list";
        // line 7
        $context["menu"] = "review";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "课程评价管理 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_main($context, array $blocks = array())
    {
        // line 10
        echo "  <div class=\"page-header clearfix\">
    <h1>评价管理</h1>
  </div>

  <form id=\"review-search-form\" class=\"form-inline well well-sm\" action=\"\" method=\"get\" novalidate> 

    <div class=\"form-group\">
      <select class=\"form-control\" name=\"rating\">
        ";
        // line 18
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->selectOptions(array(1 => "1星", 2 => "2星", 3 => "3星", 4 => "4星", 5 => "5星"), $this->getAttribute($this->getAttribute($_app_, "request"), "get", array(0 => "rating"), "method"), "评分");
        echo "
      </select>
    </div>

    <div class=\"form-group\">
      <input class=\"form-control\" type=\"text\" placeholder=\"课程编号\" name=\"courseId\" value=\"";
        // line 23
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "request"), "get", array(0 => "courseId"), "method"), "html", null, true);
        echo "\">
    </div>

    <div class=\"form-group\">
      <input class=\"form-control\" type=\"text\" placeholder=\"作者\" name=\"author\" value=\"";
        // line 27
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "request"), "get", array(0 => "author"), "method"), "html", null, true);
        echo "\">
    </div>

    <div class=\"form-group\">
      <input class=\"form-control\" type=\"text\" placeholder=\"评价内容关键词\" name=\"content\" value=\"";
        // line 31
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "request"), "get", array(0 => "content"), "method"), "html", null, true);
        echo "\">
    </div>

    <button class=\"btn btn-primary\">搜索</button>
  </form>

  <div id=\"review-table-container\">
    <table class=\"table table-striped table-hover\" id=\"review-table\">
      <thead>
        <tr>
          <th width=\"4%\"><input type=\"checkbox\"  data-role=\"batch-select\"></th>
          <th width=\"60%\">评价内容</th>
          <th width=\"8\">评分</th>
          <th width=\"20%\">作者</th>
          <th width=\"8%\">操作</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 49
        if (isset($context["reviews"])) { $_reviews_ = $context["reviews"]; } else { $_reviews_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_reviews_);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            // line 50
            echo "          ";
            if (isset($context["users"])) { $_users_ = $context["users"]; } else { $_users_ = null; }
            if (isset($context["review"])) { $_review_ = $context["review"]; } else { $_review_ = null; }
            $context["author"] = (($this->getAttribute($_users_, $this->getAttribute($_review_, "userId"), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_users_, $this->getAttribute($_review_, "userId"), array(), "array"), null)) : (null));
            // line 51
            echo "          ";
            if (isset($context["courses"])) { $_courses_ = $context["courses"]; } else { $_courses_ = null; }
            if (isset($context["review"])) { $_review_ = $context["review"]; } else { $_review_ = null; }
            $context["course"] = (($this->getAttribute($_courses_, $this->getAttribute($_review_, "courseId"), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_courses_, $this->getAttribute($_review_, "courseId"), array(), "array"), null)) : (null));
            // line 52
            echo "          <tr id=\"review-table-tr-";
            if (isset($context["review"])) { $_review_ = $context["review"]; } else { $_review_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_review_, "id"), "html", null, true);
            echo "\" data-role=\"item\">
            <td><input type=\"checkbox\" value=\"";
            // line 53
            if (isset($context["review"])) { $_review_ = $context["review"]; } else { $_review_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_review_, "id"), "html", null, true);
            echo "\" data-role=\"batch-item\"></td>
            <td>
              <div class=\"short-long-text\">
                <div class=\"short-text\">
                  ";
            // line 57
            if (isset($context["review"])) { $_review_ = $context["review"]; } else { $_review_ = null; }
            echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($_review_, "content"), 60);
            echo " <span class=\"text-muted trigger\">(展开)</span>
                </div>
                <div class=\"long-text\">";
            // line 59
            if (isset($context["review"])) { $_review_ = $context["review"]; } else { $_review_ = null; }
            echo nl2br(twig_escape_filter($this->env, $this->getAttribute($_review_, "content"), "html", null, true));
            echo " <span class=\"text-muted trigger\">(收起)</span></div>
              </div>
              <div class=\"mts\">
                ";
            // line 62
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if ($_course_) {
                // line 63
                echo "                  <a class=\"text-success text-sm\" href=\"";
                if (isset($context["review"])) { $_review_ = $context["review"]; } else { $_review_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($_review_, "courseId"))), "html", null, true);
                echo "\" target=\"_blank\">";
                if (isset($context["courses"])) { $_courses_ = $context["courses"]; } else { $_courses_ = null; }
                if (isset($context["review"])) { $_review_ = $context["review"]; } else { $_review_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_courses_, $this->getAttribute($_review_, "courseId"), array(), "array"), "title"), "html", null, true);
                echo "</a>
                ";
            } else {
                // line 65
                echo "                  <span class=\"text-muted text-sm\">课程已删除</span>
                ";
            }
            // line 67
            echo "              </div>
            </td>
            <td>";
            // line 69
            if (isset($context["review"])) { $_review_ = $context["review"]; } else { $_review_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_review_, "rating"), "html", null, true);
            echo "星</td>
            <td>
              ";
            // line 71
            if (isset($context["admin_macro"])) { $_admin_macro_ = $context["admin_macro"]; } else { $_admin_macro_ = null; }
            if (isset($context["author"])) { $_author_ = $context["author"]; } else { $_author_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_admin_macro_, "user_link", array(0 => $_author_), "method"), "html", null, true);
            echo "<br>
              <span class=\"text-muted\">";
            // line 72
            if (isset($context["review"])) { $_review_ = $context["review"]; } else { $_review_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_review_, "createdTime"), "Y-n-d H:i"), "html", null, true);
            echo "</span>
            </td>
            <td>
              <button class=\"btn btn-default btn-sm\" data-role=\"item-delete\" data-name=\"评价\" data-url=\"";
            // line 75
            if (isset($context["review"])) { $_review_ = $context["review"]; } else { $_review_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_review_delete", array("id" => $this->getAttribute($_review_, "id"))), "html", null, true);
            echo "\">删除</button>
            </td>
          </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 79
            echo "          <tr><td colspan=\"20\"><div class=\"empty\">暂无评价记录</div></td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "      </tbody>
    </table>

    <div>
      <label class=\"checkbox-inline\"><input type=\"checkbox\" data-role=\"batch-select\"> 全选</label>
      <button class=\"btn btn-default btn-sm mlm\" data-url=\"";
        // line 86
        echo $this->env->getExtension('routing')->getPath("admin_review_batch_delete");
        echo "\" data-role=\"batch-delete\" data-name=\"评价\">删除</button>
    </div>
  </div>

  ";
        // line 90
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "paginator", array(0 => $_paginator_), "method"), "html", null, true);
        echo "

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Review:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 90,  208 => 86,  201 => 81,  194 => 79,  184 => 75,  177 => 72,  171 => 71,  165 => 69,  161 => 67,  157 => 65,  146 => 63,  143 => 62,  136 => 59,  130 => 57,  122 => 53,  116 => 52,  111 => 51,  106 => 50,  100 => 49,  78 => 31,  70 => 27,  62 => 23,  53 => 18,  43 => 10,  40 => 9,  33 => 3,  28 => 7,  26 => 5,);
    }
}
