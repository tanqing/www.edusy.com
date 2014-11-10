<?php

/* TopxiaWebBundle::powered-by.html.twig */
class __TwigTemplate_dfd2b3a2d9b1d3b503f08b533fa8d6d6 extends Twig_Template
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
        if ($this->env->getExtension('topxia_web_twig')->getSetting("copyright.owned")) {
            // line 2
            echo "  ";
            if ($this->env->getExtension('topxia_web_twig')->getSetting("copyright.name")) {
                // line 3
                echo "    Powered by <a href=\"";
                echo $this->env->getExtension('routing')->getPath("homepage");
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("copyright.name"), "html", null, true);
                echo "</a>
  ";
            }
        } else {
            // line 6
            echo "  Powered by <a href=\"http://www.edusoho.com/\" target=\"_blank\">EduSoho v";
            echo twig_escape_filter($this->env, twig_constant("\\Topxia\\System::VERSION"), "html", null, true);
            echo "</a>
  ©2013-2014 <a href=\"http://www.howzhi.com/\" target=\"_blank\"> 好知网</a>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle::powered-by.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  66 => 16,  59 => 14,  56 => 13,  46 => 6,  43 => 9,  33 => 6,  30 => 5,  24 => 3,  21 => 2,  124 => 17,  118 => 16,  114 => 14,  92 => 10,  87 => 9,  84 => 8,  81 => 7,  48 => 6,  35 => 5,  22 => 2,  19 => 1,  438 => 142,  433 => 125,  427 => 143,  425 => 142,  418 => 138,  403 => 136,  398 => 135,  396 => 134,  390 => 131,  383 => 126,  380 => 125,  374 => 122,  369 => 119,  365 => 118,  356 => 111,  349 => 109,  343 => 108,  338 => 107,  332 => 105,  329 => 104,  321 => 100,  314 => 97,  312 => 96,  307 => 94,  302 => 93,  296 => 91,  288 => 89,  284 => 87,  276 => 86,  270 => 83,  259 => 81,  253 => 78,  248 => 77,  239 => 72,  237 => 71,  232 => 70,  229 => 69,  222 => 66,  216 => 62,  208 => 60,  200 => 58,  198 => 57,  186 => 48,  183 => 47,  180 => 46,  175 => 41,  168 => 30,  163 => 28,  159 => 27,  155 => 26,  151 => 25,  146 => 24,  143 => 23,  138 => 17,  133 => 16,  119 => 12,  112 => 148,  110 => 12,  105 => 46,  94 => 44,  90 => 42,  88 => 41,  82 => 38,  75 => 34,  69 => 23,  63 => 21,  61 => 20,  53 => 12,  45 => 16,  42 => 15,  40 => 8,  29 => 2,  27 => 3,  122 => 13,  120 => 52,  113 => 49,  107 => 146,  100 => 42,  95 => 41,  72 => 33,  64 => 18,  57 => 19,  54 => 15,  49 => 17,  41 => 7,  38 => 6,  31 => 4,  26 => 4,);
    }
}
