<?php

/* TopxiaWebBundle:Default:latest-reviews-block.html.twig */
class __TwigTemplate_b6e29aefa1ca10f715f16e0f9353a568 extends Twig_Template
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
        if (isset($context["reviews"])) { $_reviews_ = $context["reviews"]; } else { $_reviews_ = null; }
        if ($_reviews_) {
            // line 2
            echo "\t<div class=\"es-box\">
\t\t<div class=\"es-box-heading\"><h2>学员评价</h2></div>
\t<ul class=\"media-list latest-review-list\">
\t\t";
            // line 5
            if (isset($context["reviews"])) { $_reviews_ = $context["reviews"]; } else { $_reviews_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_reviews_);
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 6
                echo "\t\t  ";
                if (isset($context["users"])) { $_users_ = $context["users"]; } else { $_users_ = null; }
                if (isset($context["review"])) { $_review_ = $context["review"]; } else { $_review_ = null; }
                $context["author"] = (($this->getAttribute($_users_, $this->getAttribute($_review_, "userId"), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_users_, $this->getAttribute($_review_, "userId"), array(), "array"), null)) : (null));
                // line 7
                echo "\t\t  ";
                if (isset($context["courses"])) { $_courses_ = $context["courses"]; } else { $_courses_ = null; }
                if (isset($context["review"])) { $_review_ = $context["review"]; } else { $_review_ = null; }
                $context["course"] = (($this->getAttribute($_courses_, $this->getAttribute($_review_, "courseId"), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_courses_, $this->getAttribute($_review_, "courseId"), array(), "array"), null)) : (null));
                // line 8
                echo "\t\t  ";
                if (isset($context["author"])) { $_author_ = $context["author"]; } else { $_author_ = null; }
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                if (($_author_ && $_course_)) {
                    // line 9
                    echo "\t\t\t  <li class=\"media\">
\t\t\t  \t<a href=\"";
                    // line 10
                    if (isset($context["author"])) { $_author_ = $context["author"]; } else { $_author_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($_author_, "id"))), "html", null, true);
                    echo "\" class=\"author-picture-link\">
\t\t\t\t  \t<img class=\"author-picture\" src=\"";
                    // line 11
                    if (isset($context["author"])) { $_author_ = $context["author"]; } else { $_author_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getDefaultPath("avatar", $this->getAttribute($_author_, "smallAvatar"), ""), "html", null, true);
                    echo "\">
\t\t\t  \t</a>
\t\t\t  \t<a href=\"";
                    // line 13
                    if (isset($context["author"])) { $_author_ = $context["author"]; } else { $_author_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($_author_, "id"))), "html", null, true);
                    echo "\" class=\"author-nickname\">";
                    if (isset($context["author"])) { $_author_ = $context["author"]; } else { $_author_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_author_, "nickname"), "html", null, true);
                    echo "</a> <span class=\"text-muted\">说：</span> <br>
\t\t\t  \t<div class=\"review-content\">";
                    // line 14
                    if (isset($context["review"])) { $_review_ = $context["review"]; } else { $_review_ = null; }
                    echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($_review_, "content"), 50);
                    echo "</div>

\t\t\t\t  <div class=\"review-footer\">
\t\t\t\t\t  <a href=\"";
                    // line 17
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
                    echo "\" class=\"course-title\"> 《 ";
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_course_, "title"), "html", null, true);
                    echo " 》</a>
\t\t\t\t\t  <span class=\"divider\"></span>
\t\t\t\t\t  <span class=\"stars-";
                    // line 19
                    if (isset($context["review"])) { $_review_ = $context["review"]; } else { $_review_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_review_, "rating"), "html", null, true);
                    echo "\">&nbsp;</span>
\t\t\t\t  </div>
\t\t\t  </li>
\t\t  ";
                }
                // line 23
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "\t</ul>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Default:latest-reviews-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 23,  76 => 17,  69 => 14,  55 => 11,  50 => 10,  47 => 9,  42 => 8,  37 => 7,  32 => 6,  27 => 5,  54 => 10,  49 => 9,  44 => 8,  36 => 7,  22 => 2,  19 => 1,  39 => 4,  28 => 6,  26 => 6,  801 => 285,  781 => 279,  774 => 277,  771 => 276,  765 => 274,  762 => 273,  755 => 270,  747 => 269,  739 => 268,  736 => 267,  732 => 266,  729 => 265,  725 => 263,  718 => 261,  715 => 260,  708 => 257,  700 => 256,  697 => 255,  693 => 254,  689 => 253,  686 => 252,  682 => 250,  679 => 249,  675 => 247,  671 => 245,  667 => 244,  663 => 243,  659 => 242,  655 => 240,  651 => 238,  648 => 237,  640 => 236,  630 => 233,  625 => 232,  622 => 231,  617 => 230,  614 => 229,  610 => 228,  599 => 227,  589 => 219,  586 => 218,  580 => 214,  574 => 213,  562 => 211,  558 => 210,  553 => 209,  547 => 205,  543 => 204,  540 => 203,  537 => 202,  532 => 199,  529 => 198,  523 => 194,  517 => 193,  509 => 189,  501 => 188,  494 => 185,  489 => 184,  486 => 183,  478 => 179,  470 => 178,  463 => 175,  458 => 174,  455 => 173,  447 => 169,  439 => 168,  432 => 165,  427 => 164,  424 => 163,  420 => 162,  415 => 161,  407 => 155,  403 => 154,  400 => 153,  395 => 150,  390 => 147,  387 => 146,  381 => 142,  375 => 141,  364 => 134,  359 => 133,  347 => 131,  343 => 129,  334 => 127,  324 => 125,  321 => 124,  313 => 123,  304 => 119,  299 => 118,  293 => 115,  290 => 114,  286 => 113,  283 => 112,  280 => 111,  277 => 109,  273 => 107,  267 => 104,  255 => 98,  250 => 97,  243 => 94,  238 => 93,  227 => 89,  222 => 88,  216 => 84,  211 => 83,  204 => 79,  199 => 76,  195 => 75,  192 => 74,  189 => 73,  186 => 71,  180 => 67,  174 => 66,  161 => 63,  156 => 62,  153 => 61,  149 => 60,  144 => 59,  137 => 55,  132 => 52,  128 => 51,  125 => 50,  122 => 48,  118 => 46,  110 => 42,  105 => 39,  99 => 24,  96 => 37,  91 => 34,  88 => 33,  85 => 19,  83 => 31,  79 => 29,  72 => 26,  66 => 23,  61 => 13,  58 => 19,  52 => 15,  45 => 12,  41 => 10,  38 => 9,  33 => 3,  30 => 5,  25 => 2,);
    }
}
