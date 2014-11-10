<?php

/* TopxiaWebBundle:CourseMaterialManage:material-modal.html.twig */
class __TwigTemplate_8eab3ddddbc44b01558858dfd5c85d45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::bootstrap-modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["modal_class"] = "modal-lg";
        // line 49
        $context["hide_footer"] = true;
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "添加资料";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "
<form id=\"course-material-form\" class=\"form-horizontal\" action=\"";
        // line 8
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_material_upload", array("courseId" => $this->getAttribute($_course_, "id"), "lessonId" => $this->getAttribute($_lesson_, "id"))), "html", null, true);
        echo "\" enctype=\"multipart/form-data\" method=\"post\">
  <div class=\"form-group\">
    <div class=\"col-md-10 col-md-offset-1  controls\">
      <ul class=\"list-group\" id=\"material-list\" ";
        // line 11
        if (isset($context["materials"])) { $_materials_ = $context["materials"]; } else { $_materials_ = null; }
        if ((!$_materials_)) {
            echo "style=\"display:none;\"";
        }
        echo ">
        ";
        // line 12
        if (isset($context["materials"])) { $_materials_ = $context["materials"]; } else { $_materials_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_materials_);
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
        foreach ($context['_seq'] as $context["_key"] => $context["material"]) {
            // line 13
            echo "          ";
            $this->env->loadTemplate("TopxiaWebBundle:CourseMaterialManage:list-item.html.twig")->display($context);
            // line 14
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['material'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "      </ul>
      ";
        // line 16
        if (isset($context["materials"])) { $_materials_ = $context["materials"]; } else { $_materials_ = null; }
        if ((!$_materials_)) {
            // line 17
            echo "        <span class=\"control-text text-warning\">暂无资料，请上传。</span>
      ";
        }
        // line 19
        echo "    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-10 col-md-offset-1 controls\" id=\"material-file-chooser\">
      ";
        // line 24
        $this->env->loadTemplate("TopxiaWebBundle:CourseMaterialManage:file-chooser.html.twig")->display($context);
        // line 25
        echo "      <input type=\"hidden\" name=\"fileId\">
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-10 col-md-offset-1 controls\">
      <textarea class=\"form-control\" name=\"description\" rows=\"2\" placeholder=\"填写资料简介 (可选)\"></textarea>
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-10 col-md-offset-1 controls\">
      <button class=\"btn btn-primary\" id=\"material-upload-btn\" type=\"submit\">添加</button>
    </div>
  </div>

  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->renderCsrfToken("site"), "html", null, true);
        echo "\">

</form>

<script>app.load('course-manage/material-modal')</script>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseMaterialManage:material-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 41,  114 => 25,  112 => 24,  105 => 19,  101 => 17,  98 => 16,  95 => 15,  81 => 14,  78 => 13,  60 => 12,  53 => 11,  45 => 8,  42 => 7,  39 => 6,  33 => 5,  28 => 49,  26 => 3,);
    }
}
