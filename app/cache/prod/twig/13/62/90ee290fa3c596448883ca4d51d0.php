<?php

/* TopxiaWebBundle:Course:teachers-block.html.twig */
class __TwigTemplate_136290ee290fa3c596448883ca4d51d0 extends Twig_Template
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
        $context["web_macro"] = $this->env->loadTemplate("TopxiaWebBundle::macro.html.twig");
        // line 2
        echo "
<div class=\"panel panel-default\">
  <div class=\"panel-heading\">
    <h3 class=\"panel-title\">课程教师</h3>
  </div>
  <div class=\"panel-body\">

    ";
        // line 9
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if ($this->getAttribute($_course_, "teacherIds")) {
            // line 10
            echo "      <div class=\"teacher-carousel ";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if ((twig_length_filter($this->env, $this->getAttribute($_course_, "teacherIds")) == 1)) {
                echo "teacher-carousel-onlyone";
            }
            echo "\">
        <div class=\"carousel slide\" id=\"teacher-carousel\">
          <div class=\"carousel-inner\">
            ";
            // line 13
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_course_, "teacherIds"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["teacherId"]) {
                // line 14
                echo "              ";
                if (isset($context["users"])) { $_users_ = $context["users"]; } else { $_users_ = null; }
                if (isset($context["teacherId"])) { $_teacherId_ = $context["teacherId"]; } else { $_teacherId_ = null; }
                $context["user"] = $this->getAttribute($_users_, $_teacherId_, array(), "array");
                // line 15
                echo "              ";
                if (isset($context["profiles"])) { $_profiles_ = $context["profiles"]; } else { $_profiles_ = null; }
                if ($_profiles_) {
                    // line 16
                    echo "              ";
                    if (isset($context["profiles"])) { $_profiles_ = $context["profiles"]; } else { $_profiles_ = null; }
                    if (isset($context["teacherId"])) { $_teacherId_ = $context["teacherId"]; } else { $_teacherId_ = null; }
                    $context["profile"] = $this->getAttribute($_profiles_, $_teacherId_, array(), "array");
                    // line 17
                    echo "              <div class=\"item ";
                    if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                    if ($this->getAttribute($_loop_, "first")) {
                        echo "active";
                    }
                    echo "\" data-id=\"";
                    if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_user_, "id"), "html", null, true);
                    echo "\">
                <a href=\"";
                    // line 18
                    if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($_user_, "id"))), "html", null, true);
                    echo "\"><img src=\"";
                    if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getDefaultPath("avatar", $this->getAttribute($_user_, "largeAvatar"), "large"), "html", null, true);
                    echo "\" class=\"avatar\"></a>
              </div>
              ";
                }
                // line 21
                echo "            ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teacherId'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "          </div>
          <a class=\"left carousel-control\" href=\"#teacher-carousel\" data-slide=\"prev\">
            <span class=\"icon-prev\"></span>
          </a>
          <a class=\"right carousel-control\" href=\"#teacher-carousel\" data-slide=\"next\">
            <span class=\"icon-next\"></span>
          </a>
        </div>
        <div class=\"teacher-detail\" id=\"teacher-detail\">
            ";
            // line 31
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_course_, "teacherIds"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["teacherId"]) {
                // line 32
                echo "              ";
                if (isset($context["users"])) { $_users_ = $context["users"]; } else { $_users_ = null; }
                if (isset($context["teacherId"])) { $_teacherId_ = $context["teacherId"]; } else { $_teacherId_ = null; }
                $context["user"] = $this->getAttribute($_users_, $_teacherId_, array(), "array");
                // line 33
                echo "              ";
                if (isset($context["profiles"])) { $_profiles_ = $context["profiles"]; } else { $_profiles_ = null; }
                if ($_profiles_) {
                    // line 34
                    echo "              ";
                    if (isset($context["profiles"])) { $_profiles_ = $context["profiles"]; } else { $_profiles_ = null; }
                    if (isset($context["teacherId"])) { $_teacherId_ = $context["teacherId"]; } else { $_teacherId_ = null; }
                    $context["profile"] = $this->getAttribute($_profiles_, $_teacherId_, array(), "array");
                    // line 35
                    echo "            <div class=\"teacher-item teacher-item-";
                    if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_user_, "id"), "html", null, true);
                    echo " ";
                    if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                    if ($this->getAttribute($_loop_, "first")) {
                        echo "teacher-item-active";
                    }
                    echo "\">
              <div class=\"nickname\"><a href=\"";
                    // line 36
                    if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($_user_, "id"))), "html", null, true);
                    echo "\">";
                    if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_user_, "nickname"), "html", null, true);
                    echo "</a></div>
              <div class=\"title\">";
                    // line 37
                    if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_user_, "title"), "html", null, true);
                    echo "</div>
              <div class=\"divider\"></div>
              <div class=\"about\">";
                    // line 39
                    if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
                    echo $this->getAttribute($_profile_, "about");
                    echo "</div>
            </div>
            ";
                }
                // line 42
                echo "          ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teacherId'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "        </div>
      </div>
    ";
        } else {
            // line 46
            echo "      <div class=\"empty\">该课程尚未设置教师</div>
    ";
        }
        // line 48
        echo "
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:teachers-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 48,  204 => 46,  199 => 43,  185 => 42,  178 => 39,  164 => 36,  153 => 35,  139 => 32,  121 => 31,  110 => 22,  86 => 18,  75 => 17,  66 => 15,  61 => 14,  33 => 10,  30 => 9,  247 => 72,  226 => 61,  222 => 59,  206 => 52,  200 => 51,  193 => 49,  188 => 48,  177 => 46,  173 => 45,  170 => 44,  167 => 43,  152 => 38,  146 => 36,  142 => 34,  138 => 32,  134 => 30,  123 => 26,  116 => 24,  108 => 20,  105 => 19,  102 => 18,  99 => 17,  96 => 21,  91 => 15,  80 => 14,  70 => 16,  65 => 12,  62 => 11,  49 => 8,  39 => 6,  35 => 5,  31 => 4,  22 => 2,  19 => 1,  59 => 10,  54 => 4,  48 => 5,  44 => 4,  27 => 3,  24 => 2,  21 => 2,  950 => 259,  947 => 258,  944 => 257,  939 => 255,  936 => 254,  889 => 247,  887 => 246,  884 => 245,  881 => 244,  876 => 242,  873 => 241,  826 => 235,  816 => 232,  810 => 228,  805 => 227,  802 => 226,  799 => 225,  794 => 223,  791 => 222,  744 => 215,  734 => 212,  728 => 208,  723 => 207,  720 => 206,  717 => 205,  712 => 203,  709 => 202,  662 => 196,  658 => 194,  645 => 192,  640 => 191,  637 => 190,  633 => 189,  629 => 187,  622 => 185,  619 => 184,  616 => 183,  613 => 182,  608 => 180,  605 => 179,  557 => 288,  554 => 287,  548 => 283,  537 => 276,  531 => 274,  525 => 272,  519 => 270,  515 => 268,  508 => 266,  506 => 265,  503 => 264,  500 => 263,  497 => 253,  494 => 252,  490 => 250,  488 => 240,  485 => 239,  482 => 238,  479 => 221,  476 => 220,  473 => 219,  470 => 218,  467 => 201,  464 => 200,  461 => 199,  459 => 178,  448 => 171,  440 => 165,  434 => 161,  430 => 160,  424 => 156,  421 => 155,  403 => 141,  385 => 132,  372 => 128,  363 => 121,  360 => 120,  356 => 118,  346 => 116,  336 => 114,  327 => 112,  318 => 110,  314 => 109,  311 => 108,  297 => 106,  294 => 105,  291 => 104,  284 => 99,  280 => 98,  273 => 95,  270 => 94,  262 => 90,  258 => 88,  254 => 87,  246 => 83,  242 => 81,  239 => 69,  233 => 78,  228 => 77,  223 => 76,  218 => 57,  214 => 55,  210 => 69,  202 => 67,  196 => 65,  191 => 64,  187 => 62,  183 => 47,  180 => 60,  172 => 37,  166 => 55,  157 => 50,  150 => 45,  148 => 34,  144 => 33,  137 => 40,  127 => 28,  124 => 37,  118 => 33,  114 => 31,  112 => 22,  109 => 29,  106 => 28,  103 => 27,  94 => 22,  88 => 18,  85 => 17,  82 => 16,  79 => 15,  72 => 10,  64 => 8,  52 => 7,  46 => 6,  43 => 13,  34 => 3,  29 => 13,);
    }
}
