<?php

/* TopxiaWebBundle:CourseQuestionCategoryManage:index.html.twig */
class __TwigTemplate_03ba0160f446170a8a0fc371f72909a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaWebBundle:CourseManage:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:CourseManage:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["macro"] = $this->env->loadTemplate("TopxiaWebBundle::macro.html.twig");
        // line 6
        $context["side_nav"] = "question_category";
        // line 7
        $context["script_controller"] = "quiz-question/catgory";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "题目类别管理 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_main($context, array $blocks = array())
    {
        // line 10
        echo "
<div class=\"panel panel-default panel-col\">
  <div class=\"panel-heading\">题目类别管理
  <button class=\"btn btn-sm btn-info pull-right add-category\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
        // line 13
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_question_category_create", array("courseId" => $this->getAttribute($_course_, "id"))), "html", null, true);
        echo "\">添加类别</button>

  </div>
  <div class=\"panel-body\">
  <table class=\"table table-hover\" id=\"category-table\">
    <thead>
      <tr>
        <th width=\"70%\">名称</th>
        <th width=\"30%\">操作</th>
      </tr>
    </thead>
    <tbody data-sort-url=\"";
        // line 24
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_question_category_sort", array("courseId" => $this->getAttribute($_course_, "id"))), "html", null, true);
        echo "\" class=\"tbady-category\">
      ";
        // line 25
        if (isset($context["categories"])) { $_categories_ = $context["categories"]; } else { $_categories_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_categories_);
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
        foreach ($context['_seq'] as $context["id"] => $context["category"]) {
            // line 26
            echo "        ";
            $this->env->loadTemplate("TopxiaWebBundle:CourseQuestionCategoryManage:tr.html.twig")->display($context);
            // line 27
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
            // line 28
            echo "        <tr><td colspan=\"4\"><div class=\"empty\">暂无分类，请添加</div></td></tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    </tbody>
   </table>
      
  </div>
</div>





";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseQuestionCategoryManage:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 30,  105 => 28,  92 => 27,  89 => 26,  70 => 25,  65 => 24,  50 => 13,  45 => 10,  42 => 9,  35 => 4,  30 => 7,  28 => 6,  26 => 2,);
    }
}
