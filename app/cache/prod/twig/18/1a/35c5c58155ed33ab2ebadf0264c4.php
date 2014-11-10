<?php

/* TopxiaWebBundle:Default:latest-reviews-block.html.twig */
class __TwigTemplate_181a35c5c58155ed33ab2ebadf0264c4 extends Twig_Template
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
        echo "<div class=\"panel panel-autumn panel-autumn-primary\">
  <div class=\"panel-heading side-autumn-primary\">
    <h2 class=\"panel-title\">学员评价 / <small>Student Evaluation</small></h2>
  </div>
  <div class=\"panel-body\">
    <ul class=\"media-list latest-review-list\">
      ";
        // line 7
        if (isset($context["reviews"])) { $_reviews_ = $context["reviews"]; } else { $_reviews_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_reviews_);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            // line 8
            echo "        ";
            if (isset($context["users"])) { $_users_ = $context["users"]; } else { $_users_ = null; }
            if (isset($context["review"])) { $_review_ = $context["review"]; } else { $_review_ = null; }
            $context["author"] = (($this->getAttribute($_users_, $this->getAttribute($_review_, "userId"), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_users_, $this->getAttribute($_review_, "userId"), array(), "array"), null)) : (null));
            // line 9
            echo "        ";
            if (isset($context["courses"])) { $_courses_ = $context["courses"]; } else { $_courses_ = null; }
            if (isset($context["review"])) { $_review_ = $context["review"]; } else { $_review_ = null; }
            $context["course"] = (($this->getAttribute($_courses_, $this->getAttribute($_review_, "courseId"), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_courses_, $this->getAttribute($_review_, "courseId"), array(), "array"), null)) : (null));
            // line 10
            echo "        ";
            if (isset($context["author"])) { $_author_ = $context["author"]; } else { $_author_ = null; }
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if (($_author_ && $_course_)) {
                // line 11
                echo "            <li class=\"media\">
              <a href=\"";
                // line 12
                if (isset($context["author"])) { $_author_ = $context["author"]; } else { $_author_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($_author_, "id"))), "html", null, true);
                echo "\" class=\"author-picture-link\">
                  <img class=\"author-picture\" src=\"";
                // line 13
                if (isset($context["author"])) { $_author_ = $context["author"]; } else { $_author_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getDefaultPath("avatar", $this->getAttribute($_author_, "smallAvatar"), ""), "html", null, true);
                echo "\">
              </a>
              <a href=\"";
                // line 15
                if (isset($context["author"])) { $_author_ = $context["author"]; } else { $_author_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($_author_, "id"))), "html", null, true);
                echo "\" class=\"author-nickname\">";
                if (isset($context["author"])) { $_author_ = $context["author"]; } else { $_author_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_author_, "nickname"), "html", null, true);
                echo "</a> <span class=\"text-muted\">说：</span> <br>
              <div class=\"review-content\">";
                // line 16
                if (isset($context["review"])) { $_review_ = $context["review"]; } else { $_review_ = null; }
                echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($_review_, "content"), 50);
                echo "</div>

                <div class=\"review-footer\">
                    <a href=\"";
                // line 19
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
                echo "\" class=\"course-title\"> 《 ";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_course_, "title"), "html", null, true);
                echo " 》</a>
                    <span class=\"divider\"></span>
                    <span class=\"stars-";
                // line 21
                if (isset($context["review"])) { $_review_ = $context["review"]; } else { $_review_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_review_, "rating"), "html", null, true);
                echo "\">&nbsp;</span>
                </div>

            </li>
        ";
            }
            // line 26
            echo "      ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 27
            echo "        <li class=\"empty\">还没有评价</li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "    </ul>
  </div>
</div>
";
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
        return array (  95 => 26,  86 => 21,  77 => 19,  70 => 16,  62 => 15,  56 => 13,  51 => 12,  48 => 11,  43 => 10,  38 => 9,  33 => 8,  27 => 7,  46 => 12,  22 => 2,  19 => 1,  452 => 141,  447 => 120,  442 => 110,  435 => 143,  430 => 141,  402 => 133,  393 => 128,  384 => 121,  381 => 120,  375 => 117,  370 => 114,  366 => 113,  362 => 111,  352 => 104,  345 => 102,  339 => 101,  325 => 97,  310 => 90,  308 => 89,  303 => 87,  298 => 86,  280 => 80,  272 => 79,  255 => 74,  249 => 71,  244 => 70,  235 => 65,  228 => 63,  225 => 62,  219 => 60,  215 => 58,  207 => 56,  199 => 54,  184 => 44,  176 => 38,  164 => 25,  160 => 24,  156 => 23,  152 => 22,  148 => 21,  143 => 20,  135 => 13,  130 => 12,  117 => 11,  112 => 148,  110 => 147,  107 => 29,  105 => 43,  94 => 41,  90 => 39,  88 => 25,  82 => 35,  69 => 20,  63 => 18,  61 => 16,  57 => 16,  53 => 14,  49 => 13,  45 => 12,  41 => 11,  30 => 8,  28 => 1,  1313 => 483,  1310 => 482,  1304 => 478,  1298 => 477,  1286 => 475,  1282 => 474,  1277 => 473,  1269 => 467,  1265 => 466,  1262 => 465,  1259 => 464,  1253 => 461,  1250 => 459,  1244 => 455,  1238 => 454,  1230 => 450,  1222 => 449,  1215 => 446,  1210 => 445,  1207 => 444,  1199 => 440,  1191 => 439,  1184 => 436,  1179 => 435,  1176 => 434,  1168 => 430,  1160 => 429,  1153 => 426,  1148 => 425,  1145 => 424,  1141 => 423,  1136 => 422,  1128 => 416,  1124 => 415,  1121 => 414,  1118 => 412,  1112 => 408,  1106 => 407,  1097 => 402,  1092 => 401,  1086 => 399,  1083 => 398,  1079 => 397,  1074 => 396,  1066 => 390,  1062 => 389,  1059 => 388,  1056 => 386,  1050 => 382,  1044 => 381,  1035 => 379,  1029 => 378,  1024 => 377,  1016 => 371,  1012 => 370,  1009 => 369,  1006 => 367,  1000 => 365,  996 => 364,  990 => 359,  987 => 358,  981 => 354,  975 => 353,  964 => 346,  959 => 345,  947 => 343,  943 => 341,  934 => 339,  924 => 337,  921 => 336,  913 => 335,  904 => 331,  899 => 330,  893 => 327,  888 => 324,  884 => 323,  881 => 322,  878 => 321,  875 => 319,  872 => 318,  866 => 314,  860 => 313,  851 => 307,  846 => 306,  839 => 303,  834 => 302,  823 => 298,  818 => 297,  812 => 293,  808 => 292,  803 => 291,  795 => 285,  791 => 284,  788 => 283,  785 => 282,  782 => 280,  776 => 276,  770 => 275,  762 => 271,  757 => 270,  751 => 269,  745 => 267,  740 => 266,  736 => 264,  732 => 263,  727 => 262,  720 => 258,  715 => 255,  711 => 254,  708 => 253,  705 => 251,  699 => 247,  693 => 246,  684 => 241,  679 => 240,  673 => 239,  662 => 235,  657 => 234,  651 => 233,  647 => 232,  644 => 231,  634 => 228,  629 => 225,  625 => 224,  620 => 223,  612 => 217,  608 => 216,  605 => 215,  601 => 212,  595 => 208,  589 => 207,  576 => 204,  571 => 203,  568 => 202,  564 => 201,  559 => 200,  552 => 196,  547 => 193,  543 => 192,  541 => 191,  538 => 190,  535 => 188,  532 => 187,  524 => 181,  518 => 180,  514 => 178,  508 => 174,  497 => 172,  492 => 171,  479 => 168,  471 => 164,  463 => 163,  454 => 161,  451 => 160,  448 => 159,  444 => 157,  440 => 155,  436 => 154,  432 => 142,  429 => 152,  426 => 151,  422 => 149,  418 => 147,  415 => 146,  411 => 135,  407 => 134,  403 => 141,  400 => 132,  392 => 139,  389 => 138,  386 => 137,  383 => 136,  379 => 135,  374 => 134,  369 => 131,  363 => 129,  360 => 110,  355 => 125,  351 => 124,  349 => 123,  346 => 122,  340 => 118,  334 => 100,  328 => 98,  317 => 93,  312 => 110,  299 => 107,  292 => 84,  284 => 82,  281 => 102,  278 => 101,  274 => 99,  270 => 97,  266 => 76,  262 => 95,  259 => 94,  256 => 93,  252 => 91,  248 => 89,  245 => 88,  241 => 86,  237 => 85,  233 => 64,  230 => 82,  222 => 81,  218 => 79,  214 => 78,  209 => 77,  202 => 73,  197 => 53,  193 => 69,  190 => 68,  187 => 66,  181 => 43,  175 => 61,  169 => 27,  158 => 55,  153 => 54,  140 => 19,  133 => 48,  125 => 47,  122 => 46,  118 => 44,  114 => 42,  111 => 41,  103 => 40,  100 => 27,  96 => 38,  91 => 37,  84 => 33,  79 => 30,  75 => 22,  72 => 21,  68 => 25,  65 => 24,  60 => 21,  47 => 12,  39 => 6,  35 => 9,  32 => 4,  29 => 3,);
    }
}
