<?php

/* TopxiaAdminBundle:Course:data.html.twig */
class __TwigTemplate_fcceeae876b8ea5d7c4d1f249aa01297 extends Twig_Template
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
        $context["menu"] = "course-data";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "课程数据 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "    <div class=\"page-header\">
    </div>
    <form id=\"message-search-form\" class=\"form-inline well well-sm\" action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("admin_course_data");
        echo "\" method=\"get\" novalidate>
      <div class=\"form-group\">
        <select class=\"form-control\" name=\"categoryId\">
          ";
        // line 13
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getCategoryChoices("course"), $this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request"), "query"), "get", array(0 => "categoryId"), "method"), "课程分类");
        echo "
        </select>
      </div>
      <div class=\"form-group\">
        <input class=\"form-control\" type=\"text\" placeholder=\"标题\" name=\"title\" value=\"";
        // line 17
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "request"), "get", array(0 => "title"), "method"), "html", null, true);
        echo "\">
      </div>
      <div class=\"form-group\">
        <input class=\"form-control\" type=\"text\" placeholder=\"创建者\" name=\"creator\" value=\"";
        // line 20
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "request"), "get", array(0 => "creator"), "method"), "html", null, true);
        echo "\">
      </div>
      <button class=\"btn btn-primary\">搜索</button>
    </form>
    <div class=\"table-responsive\">
        <table class=\"table table-bordered\" style=\"word-break:break-all;text-align:center;\">
          <tr class=\"active\">
            <td width=\"30%\">课程名</td>
            <td>课时数</td>
            <td>学员人数</td>
            <td>完成课程人数</td>
            <td>课程学习时长（分）</td>
            <td>课程收入（元）</td>
            <td>操作</td>
          </tr>
          
          ";
        // line 36
        if (isset($context["courses"])) { $_courses_ = $context["courses"]; } else { $_courses_ = null; }
        if ($_courses_) {
            // line 37
            echo "            ";
            if (isset($context["courses"])) { $_courses_ = $context["courses"]; } else { $_courses_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_courses_);
            foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                // line 38
                echo "            <tr>
            <td><a data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                // line 39
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_detail_data", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
                echo "\" href=\"javascript:\">";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_course_, "title"), "html", null, true);
                echo "</a></td>
            <td>";
                // line 40
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_course_, "lessonCount"), "html", null, true);
                echo "</td>
            <td>";
                // line 41
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_course_, "studentNum"), "html", null, true);
                echo "</td>
            <td>";
                // line 42
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_course_, "isLearnedNum"), "html", null, true);
                echo "</td>
            <td>";
                // line 43
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_course_, "learnTime"), "html", null, true);
                echo "</td>
            <td>";
                // line 44
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_course_, "income"), "html", null, true);
                echo "</td>
            <td><a href=\"";
                // line 45
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_course_lesson_data", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
                echo "\">查看课时数据</a></td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "          ";
        }
        // line 49
        echo "          
         
        </table>
     ";
        // line 52
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "paginator", array(0 => $_paginator_), "method"), "html", null, true);
        echo "
      </div>


";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Course:data.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 52,  144 => 49,  141 => 48,  131 => 45,  126 => 44,  121 => 43,  116 => 42,  111 => 41,  106 => 40,  98 => 39,  95 => 38,  89 => 37,  86 => 36,  66 => 20,  59 => 17,  51 => 13,  45 => 10,  41 => 8,  38 => 7,  31 => 3,  26 => 5,);
    }
}
