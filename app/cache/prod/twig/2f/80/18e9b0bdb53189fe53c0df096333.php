<?php

/* TopxiaWebBundle:CourseMaterial:index.html.twig */
class __TwigTemplate_2f8018e9b0bdb53189fe53c0df096333 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaWebBundle:Course:dashboard-layout.html.twig");

        $this->blocks = array(
            'dashboard_main' => array($this, 'block_dashboard_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Course:dashboard-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["script_controller"] = "course/common";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_dashboard_main($context, array $blocks = array())
    {
        // line 6
        echo "\t";
        $this->env->loadTemplate("TopxiaWebBundle:Course:dashboard-nav.html.twig")->display(array_merge($context, array("nav" => "material")));
        // line 7
        echo "
\t<ul class=\"media-list\">
\t";
        // line 9
        if (isset($context["materials"])) { $_materials_ = $context["materials"]; } else { $_materials_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_materials_);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["material"]) {
            // line 10
            echo "\t  ";
            if (isset($context["lessons"])) { $_lessons_ = $context["lessons"]; } else { $_lessons_ = null; }
            if (isset($context["material"])) { $_material_ = $context["material"]; } else { $_material_ = null; }
            $context["lesson"] = (($this->getAttribute($_lessons_, $this->getAttribute($_material_, "lessonId"), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_lessons_, $this->getAttribute($_material_, "lessonId"), array(), "array"), null)) : (null));
            // line 11
            echo "\t  <li class=\"media\">
\t  \t<div class=\"media-body\">
\t    \t<div class=\"mbs\">
\t    \t  ";
            // line 14
            if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
            if (($_lesson_ && ($this->getAttribute($_lesson_, "status") != "published"))) {
                // line 15
                echo "\t\t\t    ";
                if (isset($context["material"])) { $_material_ = $context["material"]; } else { $_material_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_material_, "title"), "html", null, true);
                echo " <span class=\"text-muted text-sm\">(课时未发布，不能下载该资料)</span>
\t\t\t  ";
            } else {
                // line 17
                echo "\t\t\t    ";
                if (isset($context["material"])) { $_material_ = $context["material"]; } else { $_material_ = null; }
                if ($this->getAttribute($_material_, "link")) {
                    // line 18
                    echo "            <a href=\"";
                    if (isset($context["material"])) { $_material_ = $context["material"]; } else { $_material_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_material_, "link"), "html", null, true);
                    echo "\" target=\"_blank\">";
                    if (isset($context["material"])) { $_material_ = $context["material"]; } else { $_material_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_material_, "title"), "html", null, true);
                    echo "</a>
            <span class=\"glyphicon glyphicon-new-window text-muted text-sm\" title=\"网络链接资料\"></span>
\t\t\t    ";
                } else {
                    // line 21
                    echo "\t\t\t\t    <a href=\"";
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    if (isset($context["material"])) { $_material_ = $context["material"]; } else { $_material_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_material_download", array("courseId" => $this->getAttribute($_course_, "id"), "materialId" => $this->getAttribute($_material_, "id"))), "html", null, true);
                    echo "\" target=\"_blank\">";
                    if (isset($context["material"])) { $_material_ = $context["material"]; } else { $_material_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_material_, "title"), "html", null, true);
                    echo "</a>
\t\t\t    ";
                }
                // line 23
                echo "\t\t\t  ";
            }
            // line 24
            echo "\t    \t</div>

\t    \t";
            // line 26
            if (isset($context["material"])) { $_material_ = $context["material"]; } else { $_material_ = null; }
            if (($this->getAttribute($_material_, "description") && (!$this->getAttribute($_material_, "link")))) {
                // line 27
                echo "\t\t\t    <div class=\"text-muted text-sm mbs\">
\t\t\t    \t";
                // line 28
                if (isset($context["material"])) { $_material_ = $context["material"]; } else { $_material_ = null; }
                echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($_material_, "description"), 100);
                echo " 
\t\t\t    </div>
\t\t\t\t";
            }
            // line 31
            echo "
\t    \t<div class=\"text-sm\">
\t    \t  ";
            // line 33
            if (isset($context["material"])) { $_material_ = $context["material"]; } else { $_material_ = null; }
            if (($this->getAttribute($_material_, "fileId") > 0)) {
                // line 34
                echo "\t\t    \t\t<span class=\"text-muted\">";
                if (isset($context["material"])) { $_material_ = $context["material"]; } else { $_material_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->fileSizeFilter($this->getAttribute($_material_, "fileSize")), "html", null, true);
                echo "</span>
\t\t    \t\t<span class=\"bullet\">•</span>
\t    \t\t";
            }
            // line 37
            echo "\t    \t\t";
            if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
            if ($_lesson_) {
                // line 38
                echo "\t    \t\t  <a class=\"link-muted\" href=\"";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_learn", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
                echo "#lesson/";
                if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_lesson_, "id"), "html", null, true);
                echo "\" title=\"";
                if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_lesson_, "title"), "html", null, true);
                echo "\">课时";
                if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_lesson_, "number"), "html", null, true);
                echo "</a>
\t\t    \t\t<span class=\"bullet\">•</span>
\t    \t\t";
            }
            // line 41
            echo "\t\t    \t<span class=\"text-muted\">上传于";
            if (isset($context["material"])) { $_material_ = $context["material"]; } else { $_material_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->smarttimeFilter($this->getAttribute($_material_, "createdTime")), "html", null, true);
            echo "</span>
\t    \t</div>
\t\t    
\t    </div>
\t  </li>
\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 47
            echo "\t  <li class=\"empty tac text-muted mvl\">课程暂无资料</li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['material'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "\t</ul>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseMaterial:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 49,  161 => 47,  148 => 41,  131 => 38,  127 => 37,  119 => 34,  116 => 33,  112 => 31,  105 => 28,  102 => 27,  99 => 26,  95 => 24,  92 => 23,  81 => 21,  70 => 18,  66 => 17,  59 => 15,  56 => 14,  51 => 11,  46 => 10,  40 => 9,  36 => 7,  33 => 6,  30 => 5,  25 => 3,);
    }
}
