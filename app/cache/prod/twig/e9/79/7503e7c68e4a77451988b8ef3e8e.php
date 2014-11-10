<?php

/* TopxiaWebBundle:Course:latest-members-block.html.twig */
class __TwigTemplate_e9797503e7c68e4a77451988b8ef3e8e extends Twig_Template
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
        if (isset($context["students"])) { $_students_ = $context["students"]; } else { $_students_ = null; }
        if ($_students_) {
            // line 3
            echo "<div class=\"panel panel-default\">
\t<div class=\"panel-heading\">
\t\t<h3 class=\"panel-title\">最新学员</h3>
\t</div>
\t<div class=\"panel-body\">
\t\t<ul class=\"user-grids\">
\t\t";
            // line 9
            if (isset($context["students"])) { $_students_ = $context["students"]; } else { $_students_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_students_);
            foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
                // line 10
                echo "\t\t\t";
                if (isset($context["users"])) { $_users_ = $context["users"]; } else { $_users_ = null; }
                if (isset($context["student"])) { $_student_ = $context["student"]; } else { $_student_ = null; }
                $context["user"] = $this->getAttribute($_users_, $this->getAttribute($_student_, "userId"), array(), "array");
                // line 11
                echo "\t\t\t<li>
\t\t\t\t";
                // line 12
                if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                echo $_web_macro_->getuser_avatar($_user_);
                echo "
\t\t\t\t<p>";
                // line 13
                if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                echo $_web_macro_->getuser_link($_user_);
                echo "</p>
\t\t\t</li>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "\t\t</ul>
\t</div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:latest-members-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 13,  42 => 11,  37 => 10,  32 => 9,  45 => 12,  40 => 12,  36 => 10,  208 => 48,  204 => 46,  199 => 43,  185 => 42,  178 => 39,  164 => 36,  153 => 35,  139 => 32,  121 => 31,  110 => 22,  86 => 18,  75 => 17,  66 => 15,  61 => 14,  33 => 10,  30 => 9,  247 => 72,  226 => 61,  222 => 59,  206 => 52,  200 => 51,  193 => 49,  188 => 48,  177 => 46,  173 => 45,  170 => 44,  167 => 43,  152 => 38,  146 => 36,  142 => 34,  138 => 32,  134 => 30,  123 => 26,  116 => 24,  108 => 20,  105 => 19,  102 => 18,  99 => 17,  96 => 21,  91 => 15,  80 => 14,  70 => 16,  65 => 12,  62 => 16,  49 => 8,  39 => 6,  35 => 5,  31 => 9,  22 => 2,  19 => 1,  59 => 17,  54 => 4,  48 => 5,  44 => 4,  27 => 3,  24 => 3,  21 => 2,  950 => 259,  947 => 258,  944 => 257,  939 => 255,  936 => 254,  889 => 247,  887 => 246,  884 => 245,  881 => 244,  876 => 242,  873 => 241,  826 => 235,  816 => 232,  810 => 228,  805 => 227,  802 => 226,  799 => 225,  794 => 223,  791 => 222,  744 => 215,  734 => 212,  728 => 208,  723 => 207,  720 => 206,  717 => 205,  712 => 203,  709 => 202,  662 => 196,  658 => 194,  645 => 192,  640 => 191,  637 => 190,  633 => 189,  629 => 187,  622 => 185,  619 => 184,  616 => 183,  613 => 182,  608 => 180,  605 => 179,  557 => 288,  554 => 287,  548 => 283,  537 => 276,  531 => 274,  525 => 272,  519 => 270,  515 => 268,  508 => 266,  506 => 265,  503 => 264,  500 => 263,  497 => 253,  494 => 252,  490 => 250,  488 => 240,  485 => 239,  482 => 238,  479 => 221,  476 => 220,  473 => 219,  470 => 218,  467 => 201,  464 => 200,  461 => 199,  459 => 178,  448 => 171,  440 => 165,  434 => 161,  430 => 160,  424 => 156,  421 => 155,  403 => 141,  385 => 132,  372 => 128,  363 => 121,  360 => 120,  356 => 118,  346 => 116,  336 => 114,  327 => 112,  318 => 110,  314 => 109,  311 => 108,  297 => 106,  294 => 105,  291 => 104,  284 => 99,  280 => 98,  273 => 95,  270 => 94,  262 => 90,  258 => 88,  254 => 87,  246 => 83,  242 => 81,  239 => 69,  233 => 78,  228 => 77,  223 => 76,  218 => 57,  214 => 55,  210 => 69,  202 => 67,  196 => 65,  191 => 64,  187 => 62,  183 => 47,  180 => 60,  172 => 37,  166 => 55,  157 => 50,  150 => 45,  148 => 34,  144 => 33,  137 => 40,  127 => 28,  124 => 37,  118 => 33,  114 => 31,  112 => 22,  109 => 29,  106 => 28,  103 => 27,  94 => 22,  88 => 18,  85 => 17,  82 => 16,  79 => 15,  72 => 10,  64 => 8,  52 => 7,  46 => 6,  43 => 13,  34 => 3,  29 => 13,);
    }
}
