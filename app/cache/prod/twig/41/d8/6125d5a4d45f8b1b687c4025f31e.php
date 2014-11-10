<?php

/* TopxiaWebBundle:Course:info.html.twig */
class __TwigTemplate_41d86125d5a4d45f8b1b687c4025f31e extends Twig_Template
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
        $context["script_controller"] = "course/dashboard";
        // line 4
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        $context["script_arguments"] = array("course_uri" => $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($_course_, "id"))));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_dashboard_main($context, array $blocks = array())
    {
        // line 7
        echo "  ";
        $this->env->loadTemplate("TopxiaWebBundle:Course:dashboard-nav.html.twig")->display(array_merge($context, array("nav" => "info")));
        // line 8
        echo "
  <dl class=\"course-infos\" style=\"width:100%\">
    <dt>简介</dt>
    <dd >";
        // line 11
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo $this->getAttribute($_course_, "about");
        echo "</dd>

    ";
        // line 13
        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
        if ($_category_) {
            // line 14
            echo "    <dt>分类</dt>
    <dd>
      <a href=\"";
            // line 16
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_explore", array("category" => (($this->getAttribute($_category_, "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_category_, "code"), $this->getAttribute($_category_, "id"))) : ($this->getAttribute($_category_, "id"))))), "html", null, true);
            echo "\" target=\"_blank\">";
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_category_, "name"), "html", null, true);
            echo "</a>
    </dd>
    ";
        }
        // line 19
        echo "
    ";
        // line 20
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if ($this->getAttribute($_course_, "tags")) {
            // line 21
            echo "      <dt>标签</dt>
      <dd>
        <ul class=\"list-inline\">
          ";
            // line 24
            if (isset($context["tags"])) { $_tags_ = $context["tags"]; } else { $_tags_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_tags_);
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 25
                echo "            <li><a href=\"";
                if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tag_show", array("name" => $this->getAttribute($_tag_, "name"))), "html", null, true);
                echo "\">";
                if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_tag_, "name"), "html", null, true);
                echo "</a></li>
          ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 27
                echo "            <li>暂无标签</li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "        </ul>
      </dd>
    ";
        }
        // line 32
        echo "
    ";
        // line 33
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if ($this->getAttribute($_course_, "goals")) {
            // line 34
            echo "      <dt>课程目标</dt>
      <dd>
        <ul>
          ";
            // line 37
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_course_, "goals"));
            foreach ($context['_seq'] as $context["_key"] => $context["goal"]) {
                // line 38
                echo "            <li>";
                if (isset($context["goal"])) { $_goal_ = $context["goal"]; } else { $_goal_ = null; }
                echo twig_escape_filter($this->env, $_goal_, "html", null, true);
                echo "</li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['goal'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "        </ul>
      </dd>
    ";
        }
        // line 43
        echo "
    ";
        // line 44
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if ($this->getAttribute($_course_, "audiences")) {
            // line 45
            echo "      <dt>适合人群</dt>
      <dd>
        <ul>
          ";
            // line 48
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_course_, "audiences"));
            foreach ($context['_seq'] as $context["_key"] => $context["audience"]) {
                // line 49
                echo "            <li>";
                if (isset($context["audience"])) { $_audience_ = $context["audience"]; } else { $_audience_ = null; }
                echo twig_escape_filter($this->env, $_audience_, "html", null, true);
                echo "</li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['audience'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "        </ul>
      </dd>
    ";
        }
        // line 54
        echo "  </dl>



";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 54,  165 => 51,  155 => 49,  150 => 48,  145 => 45,  142 => 44,  139 => 43,  134 => 40,  124 => 38,  119 => 37,  114 => 34,  111 => 33,  108 => 32,  103 => 29,  96 => 27,  84 => 25,  78 => 24,  73 => 21,  70 => 20,  67 => 19,  57 => 16,  53 => 14,  50 => 13,  44 => 11,  39 => 8,  36 => 7,  33 => 6,  27 => 4,  25 => 3,);
    }
}
