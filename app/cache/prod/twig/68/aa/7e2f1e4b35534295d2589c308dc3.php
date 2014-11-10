<?php

/* TopxiaWebBundle:CourseTestpaperManage:index.html.twig */
class __TwigTemplate_68aa7e2f1e4b35534295d2589c308dc3 extends Twig_Template
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
        $context["side_nav"] = "testpaper";
        // line 7
        if (isset($context["parentId"])) { $_parentId_ = $context["parentId"]; } else { $_parentId_ = null; }
        $context["parentId"] = ((array_key_exists("parentId", $context)) ? (_twig_default_filter($_parentId_, null)) : (null));
        // line 8
        $context["script_controller"] = "test-paper/index";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "试卷管理 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 10
    public function block_main($context, array $blocks = array())
    {
        // line 11
        echo "
<div class=\"panel panel-default panel-col\">
  <div class=\"panel-heading\">
    <a href=\"";
        // line 14
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_testpaper_create", array("courseId" => $this->getAttribute($_course_, "id"))), "html", null, true);
        echo "\" class=\"btn btn-info btn-sm pull-right mls\"><span class=\"glyphicon glyphicon-plus\"></span>创建试卷</a>
    试卷管理
  </div>

  <div class=\"panel-body \" id=\"quiz-table-container\">

  <table class=\"table table-striped table-hover\" id=\"quiz-table\">
  ";
        // line 21
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "flash_messages", array(), "method"), "html", null, true);
        echo "
    <thead>
    <tr>
        <th><input type=\"checkbox\"  autocomplete=\"off\"  data-role=\"batch-select\"></th>
        <th width=\"38%\">名称</th>
        <th>状态</th>
        <th>题目统计</th>
        <th>时间限制</th>
        <th>更新人/时间</th>
        <th>操作</th>
    </tr>
    </thead>
    <tbody>
      ";
        // line 34
        if (isset($context["testpapers"])) { $_testpapers_ = $context["testpapers"]; } else { $_testpapers_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_testpapers_);
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
        foreach ($context['_seq'] as $context["_key"] => $context["testpaper"]) {
            // line 35
            echo "        ";
            if (isset($context["users"])) { $_users_ = $context["users"]; } else { $_users_ = null; }
            if (isset($context["testpaper"])) { $_testpaper_ = $context["testpaper"]; } else { $_testpaper_ = null; }
            $context["user"] = $this->getAttribute($_users_, $this->getAttribute($_testpaper_, "updatedUserId"), array(), "array");
            // line 36
            echo "        ";
            $this->env->loadTemplate("TopxiaWebBundle:CourseTestpaperManage:tr.html.twig")->display($context);
            // line 37
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
            // line 38
            echo "        <tr><td colspan=\"20\"><div class=\"empty\">还没有试卷，请点击右上角按钮，<a href=\"";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_testpaper_create", array("courseId" => $this->getAttribute($_course_, "id"))), "html", null, true);
            echo "\">创建一个新试卷</a></div></td></tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['testpaper'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "    </tbody>
  </table>
  <div>
    <label class=\"checkbox-inline\"><input type=\"checkbox\"  autocomplete=\"off\" data-role=\"batch-select\"> 全选</label>
    <button class=\"btn btn-default btn-sm mlm\" data-role=\"batch-delete\"  data-name=\"试卷\" data-url=\"";
        // line 44
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_testpaper_deletes", array("courseId" => $this->getAttribute($_course_, "id"))), "html", null, true);
        echo "\">删除</button>
  </div>

  ";
        // line 47
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "paginator", array(0 => $_paginator_), "method"), "html", null, true);
        echo "

  <div class=\"text-muted mtl\">提示：只有已发布的试卷才能被添加到课程中去，试卷一旦发布后将不能修改。</div>


  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseTestpaperManage:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 47,  137 => 44,  131 => 40,  121 => 38,  108 => 37,  105 => 36,  100 => 35,  81 => 34,  64 => 21,  53 => 14,  48 => 11,  45 => 10,  38 => 4,  33 => 8,  30 => 7,  28 => 6,  26 => 2,);
    }
}
