<?php

/* TopxiaAdminBundle:Course:course-recommend-list.html.twig */
class __TwigTemplate_e77013fcc68438e1af1740affce58c71 extends Twig_Template
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
        $context["script_controller"] = "course/recommend-list";
        // line 7
        $context["menu"] = "course-recommend-list";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "课程推荐列表 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_main($context, array $blocks = array())
    {
        // line 10
        echo "  <div class=\"page-header\">
    <h1>课程推荐列表</h1>
  </div>

  <table class=\"table table-striped table-hover\" id=\"course-recommend-table\">
    <thead>
    <tr>
      <th>顺序号</th>
      <th width=\"50%\">课程名称</th>
      <th>创建者</th>
      <th>推荐时间</th>
      <th>操作</th>
    </tr>
    </thead>
    <tbody>
      ";
        // line 25
        if (isset($context["courses"])) { $_courses_ = $context["courses"]; } else { $_courses_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_courses_);
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
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 26
            echo "        ";
            if (isset($context["users"])) { $_users_ = $context["users"]; } else { $_users_ = null; }
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            $context["user"] = (($this->getAttribute($_users_, $this->getAttribute($_course_, "userId"), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_users_, $this->getAttribute($_course_, "userId"), array(), "array"), null)) : (null));
            // line 27
            echo "        ";
            if (isset($context["categories"])) { $_categories_ = $context["categories"]; } else { $_categories_ = null; }
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            $context["category"] = (($this->getAttribute($_categories_, $this->getAttribute($_course_, "categoryId"), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_categories_, $this->getAttribute($_course_, "categoryId"), array(), "array"), null)) : (null));
            // line 28
            echo "        ";
            $this->env->loadTemplate("TopxiaAdminBundle:Course:course-recommend-tr.html.twig")->display($context);
            // line 29
            echo "      ";
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
            // line 30
            echo "        <tr><td colspan=\"20\"><div class=\"empty\">暂无推荐课程</div></td></tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "    </tbody>
  </table>

  ";
        // line 35
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "paginator", array(0 => $_paginator_), "method"), "html", null, true);
        echo "

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Course:course-recommend-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 35,  112 => 32,  105 => 30,  92 => 29,  89 => 28,  84 => 27,  79 => 26,  60 => 25,  43 => 10,  40 => 9,  33 => 3,  28 => 7,  26 => 5,);
    }
}
