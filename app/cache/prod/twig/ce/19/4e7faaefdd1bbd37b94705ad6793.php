<?php

/* TopxiaWebBundle:Default:user-learning.html.twig */
class __TwigTemplate_ce194e7faaefdd1bbd37b94705ad6793 extends Twig_Template
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
            echo "  <div class=\"es-box\">
    <div class=\"es-box-heading\">
      <h2>在学课程</h2>
    </div>
    <div class=\"es-box-body user-learn clearfix\">
      <a href=\"";
            // line 7
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
            echo "\">
        <img src=\"";
            // line 8
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getDefaultPath("coursePicture", $this->getAttribute($_course_, "largePicture"), "large"), "html", null, true);
            echo "\"  class=\"img-responsive thumb pull-left\">
      </a>
      <p>《";
            // line 10
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_course_, "title"), "html", null, true);
            echo "》</p>
      ";
            // line 11
            if (isset($context["teachers"])) { $_teachers_ = $context["teachers"]; } else { $_teachers_ = null; }
            $context["teacher"] = twig_first($this->env, $_teachers_);
            // line 12
            echo "      <p class=\"teacher-name\">教师：";
            if (isset($context["teacher"])) { $_teacher_ = $context["teacher"]; } else { $_teacher_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_teacher_, "nickname"), "html", null, true);
            echo "</p>
      <div class=\"progress-block clearfix\">
        <div class=\"progress\" style=\"width:90%\">
          <span class=\"progress-bar\" style=\"width: ";
            // line 15
            if (isset($context["progress"])) { $_progress_ = $context["progress"]; } else { $_progress_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_progress_, "percent"), "html", null, true);
            echo ";\"></span>
        </div>  
        <div class=\"percentage clearfix\">完成";
            // line 17
            if (isset($context["progress"])) { $_progress_ = $context["progress"]; } else { $_progress_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_progress_, "percent"), "html", null, true);
            echo "</div>

        ";
            // line 19
            if (isset($context["nextLearnLesson"])) { $_nextLearnLesson_ = $context["nextLearnLesson"]; } else { $_nextLearnLesson_ = null; }
            if ($_nextLearnLesson_) {
                // line 20
                echo "          <div class=\"continue\">
            <a href=\"";
                // line 21
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
            // line 24
            echo "      </div>
    </div>
  </div>
";
        }
        // line 28
        echo "        ";
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
        return array (  93 => 28,  87 => 24,  74 => 21,  71 => 20,  68 => 19,  62 => 17,  56 => 15,  48 => 12,  34 => 8,  22 => 2,  19 => 1,  449 => 142,  444 => 126,  434 => 143,  432 => 142,  410 => 136,  405 => 135,  403 => 134,  397 => 131,  391 => 127,  388 => 126,  382 => 123,  377 => 120,  373 => 119,  364 => 112,  357 => 110,  351 => 109,  346 => 108,  329 => 101,  322 => 98,  320 => 97,  315 => 95,  310 => 94,  304 => 92,  296 => 90,  292 => 88,  284 => 87,  278 => 84,  267 => 82,  261 => 79,  256 => 78,  247 => 73,  245 => 72,  237 => 70,  226 => 65,  210 => 61,  208 => 60,  196 => 51,  190 => 49,  185 => 44,  178 => 33,  173 => 31,  165 => 29,  161 => 28,  157 => 27,  152 => 26,  149 => 25,  144 => 19,  139 => 18,  126 => 14,  122 => 13,  112 => 149,  110 => 148,  107 => 147,  94 => 47,  90 => 45,  82 => 41,  75 => 37,  69 => 25,  63 => 23,  61 => 22,  57 => 21,  53 => 20,  49 => 19,  45 => 11,  42 => 17,  40 => 10,  27 => 1,  1253 => 474,  1249 => 472,  1240 => 468,  1237 => 467,  1233 => 465,  1229 => 463,  1225 => 461,  1221 => 460,  1218 => 459,  1215 => 458,  1211 => 456,  1207 => 455,  1203 => 453,  1200 => 452,  1197 => 451,  1189 => 447,  1186 => 446,  1179 => 441,  1176 => 440,  1173 => 439,  1170 => 438,  1167 => 437,  1164 => 436,  1157 => 433,  1152 => 432,  1147 => 431,  1144 => 430,  1140 => 429,  1135 => 428,  1132 => 427,  1129 => 426,  1123 => 422,  1116 => 417,  1109 => 414,  1102 => 412,  1099 => 411,  1095 => 409,  1088 => 406,  1084 => 404,  1081 => 403,  1077 => 401,  1073 => 399,  1066 => 397,  1063 => 396,  1057 => 392,  1054 => 391,  1047 => 388,  1039 => 387,  1036 => 386,  1032 => 385,  1028 => 384,  1025 => 383,  1022 => 382,  1019 => 381,  1014 => 380,  1011 => 379,  1008 => 378,  1004 => 376,  1000 => 374,  996 => 373,  992 => 372,  989 => 371,  986 => 370,  982 => 368,  978 => 366,  975 => 365,  972 => 364,  968 => 363,  964 => 361,  961 => 360,  956 => 359,  951 => 358,  948 => 357,  943 => 356,  940 => 355,  936 => 354,  932 => 353,  921 => 352,  914 => 347,  911 => 346,  908 => 345,  905 => 344,  896 => 337,  893 => 336,  887 => 332,  881 => 331,  869 => 329,  865 => 328,  860 => 327,  854 => 323,  850 => 322,  847 => 321,  844 => 320,  839 => 317,  836 => 316,  830 => 312,  822 => 309,  815 => 307,  808 => 305,  801 => 303,  798 => 302,  790 => 301,  783 => 298,  778 => 297,  775 => 296,  770 => 295,  762 => 289,  758 => 288,  755 => 287,  752 => 285,  740 => 280,  731 => 275,  726 => 274,  720 => 272,  717 => 271,  713 => 270,  708 => 269,  700 => 263,  696 => 262,  693 => 261,  690 => 259,  684 => 255,  678 => 254,  669 => 252,  663 => 251,  658 => 250,  650 => 244,  646 => 243,  644 => 242,  641 => 241,  638 => 240,  632 => 238,  628 => 237,  622 => 232,  619 => 231,  613 => 227,  607 => 226,  596 => 219,  591 => 218,  579 => 216,  575 => 214,  566 => 212,  556 => 210,  553 => 209,  545 => 208,  536 => 204,  531 => 203,  525 => 200,  522 => 199,  518 => 198,  515 => 197,  512 => 196,  509 => 194,  506 => 193,  500 => 189,  494 => 188,  485 => 182,  480 => 181,  473 => 178,  468 => 177,  457 => 173,  452 => 172,  446 => 168,  442 => 167,  437 => 144,  430 => 162,  425 => 138,  421 => 158,  418 => 157,  415 => 156,  412 => 154,  406 => 150,  400 => 149,  392 => 145,  387 => 144,  381 => 143,  374 => 140,  369 => 139,  365 => 137,  361 => 136,  356 => 135,  349 => 131,  344 => 128,  340 => 106,  337 => 105,  334 => 124,  328 => 120,  321 => 118,  312 => 114,  307 => 113,  301 => 112,  290 => 108,  285 => 107,  279 => 106,  275 => 105,  272 => 104,  262 => 101,  257 => 98,  253 => 97,  248 => 96,  240 => 71,  236 => 89,  233 => 88,  230 => 67,  224 => 82,  218 => 63,  205 => 78,  200 => 77,  197 => 76,  193 => 50,  188 => 74,  181 => 70,  176 => 67,  172 => 66,  169 => 30,  166 => 63,  163 => 62,  156 => 58,  150 => 55,  145 => 52,  141 => 51,  138 => 50,  135 => 49,  132 => 15,  125 => 43,  119 => 12,  115 => 38,  111 => 37,  108 => 36,  105 => 49,  98 => 30,  92 => 27,  88 => 44,  84 => 24,  81 => 23,  72 => 36,  59 => 15,  54 => 14,  50 => 12,  43 => 9,  39 => 7,  36 => 6,  32 => 4,  29 => 7,);
    }
}
