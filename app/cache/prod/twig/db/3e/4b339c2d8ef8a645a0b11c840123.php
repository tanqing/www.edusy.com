<?php

/* TopxiaWebBundle:Default:user-learning.html.twig */
class __TwigTemplate_db3e4b339c2d8ef8a645a0b11c840123 extends Twig_Template
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
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if ($_course_) {
            // line 2
            echo "<div class=\"panel panel-autumn panel-autumn-primary\">
  <div class=\"panel-heading side-autumn-primary\">
    <h2 class=\"panel-title\">在学课程 / <small>In The Course</small></h2>
  </div>
  <div class=\"panel-body\">
    <div class=\"user-learn clearfix\">
      <a href=\"";
            // line 8
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
            echo "\">
      <img src=\"";
            // line 9
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getDefaultPath("coursePicture", $this->getAttribute($_course_, "largePicture"), "large"), "html", null, true);
            echo "\"  class=\"img-responsive thumb pull-left\">
    </a>
    <p>《";
            // line 11
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_course_, "title"), "html", null, true);
            echo "》</p>
    ";
            // line 12
            if (isset($context["teachers"])) { $_teachers_ = $context["teachers"]; } else { $_teachers_ = null; }
            $context["teacher"] = twig_first($this->env, $_teachers_);
            // line 13
            echo "    <p class=\"teacher-name\">教师：";
            if (isset($context["teacher"])) { $_teacher_ = $context["teacher"]; } else { $_teacher_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_teacher_, "nickname"), "html", null, true);
            echo "</p>
    <div class=\"progress-block clearfix\">
      <div class=\"progress\" style=\"width:90%\">
        <span class=\"progress-bar\" style=\"width: ";
            // line 16
            if (isset($context["progress"])) { $_progress_ = $context["progress"]; } else { $_progress_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_progress_, "percent"), "html", null, true);
            echo ";\"></span>
      </div>  
      <div class=\"percentage clearfix\">完成";
            // line 18
            if (isset($context["progress"])) { $_progress_ = $context["progress"]; } else { $_progress_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_progress_, "percent"), "html", null, true);
            echo "</div>

      ";
            // line 20
            if (isset($context["nextLearnLesson"])) { $_nextLearnLesson_ = $context["nextLearnLesson"]; } else { $_nextLearnLesson_ = null; }
            if ($_nextLearnLesson_) {
                // line 21
                echo "        <div class=\"continue\">
          <a href=\"";
                // line 22
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_learn", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
                echo "#lesson/";
                if (isset($context["nextLearnLesson"])) { $_nextLearnLesson_ = $context["nextLearnLesson"]; } else { $_nextLearnLesson_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_nextLearnLesson_, "id"), "html", null, true);
                echo "\" title=\"继续学习：";
                if (isset($context["nextLearnLesson"])) { $_nextLearnLesson_ = $context["nextLearnLesson"]; } else { $_nextLearnLesson_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_nextLearnLesson_, "title"), "html", null, true);
                echo "\" class=\"btn btn-success pull-right\">继续学习</a>
        </div>
      ";
            }
            // line 25
            echo "    </div>
      
    </div>
    
  </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Default:user-learning.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 12,  22 => 2,  19 => 1,  452 => 141,  447 => 120,  442 => 110,  435 => 143,  430 => 141,  402 => 133,  393 => 128,  384 => 121,  381 => 120,  375 => 117,  370 => 114,  366 => 113,  362 => 111,  352 => 104,  345 => 102,  339 => 101,  325 => 97,  310 => 90,  308 => 89,  303 => 87,  298 => 86,  280 => 80,  272 => 79,  255 => 74,  249 => 71,  244 => 70,  235 => 65,  228 => 63,  225 => 62,  219 => 60,  215 => 58,  207 => 56,  199 => 54,  184 => 44,  176 => 38,  164 => 25,  160 => 24,  156 => 23,  152 => 22,  148 => 21,  143 => 20,  135 => 13,  130 => 12,  117 => 11,  112 => 148,  110 => 147,  107 => 146,  105 => 43,  94 => 41,  90 => 39,  88 => 25,  82 => 35,  69 => 20,  63 => 18,  61 => 16,  57 => 16,  53 => 14,  49 => 13,  45 => 12,  41 => 11,  30 => 8,  28 => 1,  1313 => 483,  1310 => 482,  1304 => 478,  1298 => 477,  1286 => 475,  1282 => 474,  1277 => 473,  1269 => 467,  1265 => 466,  1262 => 465,  1259 => 464,  1253 => 461,  1250 => 459,  1244 => 455,  1238 => 454,  1230 => 450,  1222 => 449,  1215 => 446,  1210 => 445,  1207 => 444,  1199 => 440,  1191 => 439,  1184 => 436,  1179 => 435,  1176 => 434,  1168 => 430,  1160 => 429,  1153 => 426,  1148 => 425,  1145 => 424,  1141 => 423,  1136 => 422,  1128 => 416,  1124 => 415,  1121 => 414,  1118 => 412,  1112 => 408,  1106 => 407,  1097 => 402,  1092 => 401,  1086 => 399,  1083 => 398,  1079 => 397,  1074 => 396,  1066 => 390,  1062 => 389,  1059 => 388,  1056 => 386,  1050 => 382,  1044 => 381,  1035 => 379,  1029 => 378,  1024 => 377,  1016 => 371,  1012 => 370,  1009 => 369,  1006 => 367,  1000 => 365,  996 => 364,  990 => 359,  987 => 358,  981 => 354,  975 => 353,  964 => 346,  959 => 345,  947 => 343,  943 => 341,  934 => 339,  924 => 337,  921 => 336,  913 => 335,  904 => 331,  899 => 330,  893 => 327,  888 => 324,  884 => 323,  881 => 322,  878 => 321,  875 => 319,  872 => 318,  866 => 314,  860 => 313,  851 => 307,  846 => 306,  839 => 303,  834 => 302,  823 => 298,  818 => 297,  812 => 293,  808 => 292,  803 => 291,  795 => 285,  791 => 284,  788 => 283,  785 => 282,  782 => 280,  776 => 276,  770 => 275,  762 => 271,  757 => 270,  751 => 269,  745 => 267,  740 => 266,  736 => 264,  732 => 263,  727 => 262,  720 => 258,  715 => 255,  711 => 254,  708 => 253,  705 => 251,  699 => 247,  693 => 246,  684 => 241,  679 => 240,  673 => 239,  662 => 235,  657 => 234,  651 => 233,  647 => 232,  644 => 231,  634 => 228,  629 => 225,  625 => 224,  620 => 223,  612 => 217,  608 => 216,  605 => 215,  601 => 212,  595 => 208,  589 => 207,  576 => 204,  571 => 203,  568 => 202,  564 => 201,  559 => 200,  552 => 196,  547 => 193,  543 => 192,  541 => 191,  538 => 190,  535 => 188,  532 => 187,  524 => 181,  518 => 180,  514 => 178,  508 => 174,  497 => 172,  492 => 171,  479 => 168,  471 => 164,  463 => 163,  454 => 161,  451 => 160,  448 => 159,  444 => 157,  440 => 155,  436 => 154,  432 => 142,  429 => 152,  426 => 151,  422 => 149,  418 => 147,  415 => 146,  411 => 135,  407 => 134,  403 => 141,  400 => 132,  392 => 139,  389 => 138,  386 => 137,  383 => 136,  379 => 135,  374 => 134,  369 => 131,  363 => 129,  360 => 110,  355 => 125,  351 => 124,  349 => 123,  346 => 122,  340 => 118,  334 => 100,  328 => 98,  317 => 93,  312 => 110,  299 => 107,  292 => 84,  284 => 82,  281 => 102,  278 => 101,  274 => 99,  270 => 97,  266 => 76,  262 => 95,  259 => 94,  256 => 93,  252 => 91,  248 => 89,  245 => 88,  241 => 86,  237 => 85,  233 => 64,  230 => 82,  222 => 81,  218 => 79,  214 => 78,  209 => 77,  202 => 73,  197 => 53,  193 => 69,  190 => 68,  187 => 66,  181 => 43,  175 => 61,  169 => 27,  158 => 55,  153 => 54,  140 => 19,  133 => 48,  125 => 47,  122 => 46,  118 => 44,  114 => 42,  111 => 41,  103 => 40,  100 => 39,  96 => 38,  91 => 37,  84 => 33,  79 => 30,  75 => 22,  72 => 21,  68 => 25,  65 => 24,  60 => 21,  47 => 12,  39 => 6,  35 => 9,  32 => 4,  29 => 3,);
    }
}
