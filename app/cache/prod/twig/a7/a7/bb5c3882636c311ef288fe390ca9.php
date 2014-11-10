<?php

/* TopxiaAdminBundle:LiveCourse:index.html.twig */
class __TwigTemplate_a7a7bb5c3882636c311ef288fe390ca9 extends Twig_Template
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
        $context["menu"] = "live-course";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "直播管理 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "  <div class=\"page-header\">
    <h1>直播管理</h1>
  </div>

  ";
        // line 12
        $this->env->loadTemplate("TopxiaAdminBundle:LiveCourse:tab.html.twig")->display($context);
        // line 13
        echo "  <br>

  <table class=\"table table-striped table-hover\" id=\"course-table\">
    <thead>
    <tr>
      <th width=\"50%\">课时</th>
      <th>直播时间</th>
      <th>最大参与人数</th>
      <th><a href=\"";
        // line 21
        if (isset($context["status"])) { $_status_ = $context["status"]; } else { $_status_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_live_course", array("status" => $_status_)), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-refresh\"></span></a></th>
    </tr>
    </thead>
    <tbody>
      ";
        // line 25
        if (isset($context["lessons"])) { $_lessons_ = $context["lessons"]; } else { $_lessons_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_lessons_);
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
        foreach ($context['_seq'] as $context["_key"] => $context["lesson"]) {
            // line 26
            echo "        ";
            if (isset($context["courses"])) { $_courses_ = $context["courses"]; } else { $_courses_ = null; }
            if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
            $context["course"] = (($this->getAttribute($_courses_, $this->getAttribute($_lesson_, "courseId"), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_courses_, $this->getAttribute($_lesson_, "courseId"), array(), "array"), null)) : (null));
            // line 27
            echo "        ";
            $this->env->loadTemplate("TopxiaAdminBundle:LiveCourse:tr.html.twig")->display($context);
            // line 28
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
            // line 29
            echo "        <tr><td colspan=\"20\"><div class=\"empty\">暂无进行中的直播</div></td></tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lesson'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "    </tbody>
  </table>

  ";
        // line 34
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "paginator", array(0 => $_paginator_), "method"), "html", null, true);
        echo "

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:LiveCourse:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 34,  114 => 31,  107 => 29,  94 => 28,  91 => 27,  86 => 26,  67 => 25,  59 => 21,  49 => 13,  47 => 12,  41 => 8,  38 => 7,  31 => 3,  26 => 5,);
    }
}
