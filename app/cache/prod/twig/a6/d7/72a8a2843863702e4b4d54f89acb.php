<?php

/* TopxiaWebBundle:CourseThread:question-block.html.twig */
class __TwigTemplate_a6d772a8a2843863702e4b4d54f89acb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (isset($context["threads"])) { $_threads_ = $context["threads"]; } else { $_threads_ = null; }
        if ($_threads_) {
            // line 2
            echo "<div class=\"panel panel-default\">
  <div class=\"panel-heading\">
    <h3 class=\"panel-title\">最新问答</h3>
  </div>
  <div class=\"panel-body\">
  \t<ul class=\"text-list\">
  \t\t";
            // line 8
            if (isset($context["threads"])) { $_threads_ = $context["threads"]; } else { $_threads_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_threads_);
            foreach ($context['_seq'] as $context["_key"] => $context["thread"]) {
                // line 9
                echo "  \t\t<li>
        <a href=\"";
                // line 10
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_thread_show", array("courseId" => $this->getAttribute($_course_, "id"), "id" => $this->getAttribute($_thread_, "id"))), "html", null, true);
                echo "\">";
                if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_thread_, "title"), "html", null, true);
                echo "</a>
      </li>
  \t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thread'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "  \t</ul>
  </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseThread:question-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  166 => 55,  157 => 51,  133 => 46,  128 => 43,  123 => 42,  107 => 30,  82 => 23,  77 => 22,  44 => 12,  38 => 10,  93 => 24,  90 => 23,  74 => 19,  62 => 16,  59 => 15,  56 => 14,  39 => 11,  53 => 5,  32 => 8,  25 => 5,  23 => 2,  20 => 1,  355 => 134,  352 => 133,  345 => 128,  337 => 124,  334 => 123,  330 => 122,  327 => 121,  324 => 120,  318 => 116,  314 => 114,  310 => 112,  306 => 110,  302 => 108,  298 => 106,  295 => 105,  291 => 103,  288 => 102,  283 => 99,  279 => 97,  272 => 94,  269 => 93,  266 => 92,  258 => 88,  253 => 87,  247 => 83,  240 => 80,  237 => 79,  234 => 78,  231 => 77,  226 => 74,  217 => 70,  213 => 69,  210 => 68,  200 => 66,  193 => 64,  189 => 63,  186 => 62,  179 => 59,  174 => 58,  169 => 57,  162 => 54,  153 => 47,  147 => 49,  141 => 44,  136 => 47,  130 => 41,  125 => 40,  122 => 39,  119 => 38,  114 => 35,  111 => 34,  97 => 32,  92 => 31,  87 => 22,  84 => 21,  81 => 28,  76 => 25,  65 => 20,  61 => 19,  57 => 17,  50 => 14,  42 => 13,  35 => 9,  30 => 8,  21 => 2,  19 => 1,  113 => 38,  110 => 37,  105 => 26,  100 => 28,  88 => 24,  83 => 28,  78 => 27,  73 => 20,  71 => 18,  64 => 19,  54 => 13,  49 => 15,  31 => 7,  29 => 2,  69 => 22,  66 => 20,  63 => 18,  58 => 16,  55 => 15,  52 => 13,  46 => 9,  43 => 12,  40 => 8,  37 => 3,  34 => 6,  28 => 5,  26 => 3,);
    }
}
