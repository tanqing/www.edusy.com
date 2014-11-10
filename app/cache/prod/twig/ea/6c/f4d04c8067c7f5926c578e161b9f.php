<?php

/* TopxiaWebBundle:Default:layout.html.twig */
class __TwigTemplate_ea6cf4d04c8067c7f5926c578e161b9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaWebBundle::layout.html.twig");

        $this->blocks = array(
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 6
        $context["bodyClass"] = "homepage";
        // line 7
        $context["script_controller"] = "index";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_keywords($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.seo_keywords"), "html", null, true);
    }

    // line 4
    public function block_description($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.seo_description"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Default:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 4,  28 => 7,  26 => 6,  801 => 285,  781 => 279,  774 => 277,  771 => 276,  765 => 274,  762 => 273,  755 => 270,  747 => 269,  739 => 268,  736 => 267,  732 => 266,  729 => 265,  725 => 263,  718 => 261,  715 => 260,  708 => 257,  700 => 256,  697 => 255,  693 => 254,  689 => 253,  686 => 252,  682 => 250,  679 => 249,  675 => 247,  671 => 245,  667 => 244,  663 => 243,  659 => 242,  655 => 240,  651 => 238,  648 => 237,  640 => 236,  630 => 233,  625 => 232,  622 => 231,  617 => 230,  614 => 229,  610 => 228,  599 => 227,  589 => 219,  586 => 218,  580 => 214,  574 => 213,  562 => 211,  558 => 210,  553 => 209,  547 => 205,  543 => 204,  540 => 203,  537 => 202,  532 => 199,  529 => 198,  523 => 194,  517 => 193,  509 => 189,  501 => 188,  494 => 185,  489 => 184,  486 => 183,  478 => 179,  470 => 178,  463 => 175,  458 => 174,  455 => 173,  447 => 169,  439 => 168,  432 => 165,  427 => 164,  424 => 163,  420 => 162,  415 => 161,  407 => 155,  403 => 154,  400 => 153,  395 => 150,  390 => 147,  387 => 146,  381 => 142,  375 => 141,  364 => 134,  359 => 133,  347 => 131,  343 => 129,  334 => 127,  324 => 125,  321 => 124,  313 => 123,  304 => 119,  299 => 118,  293 => 115,  290 => 114,  286 => 113,  283 => 112,  280 => 111,  277 => 109,  273 => 107,  267 => 104,  255 => 98,  250 => 97,  243 => 94,  238 => 93,  227 => 89,  222 => 88,  216 => 84,  211 => 83,  204 => 79,  199 => 76,  195 => 75,  192 => 74,  189 => 73,  186 => 71,  180 => 67,  174 => 66,  161 => 63,  156 => 62,  153 => 61,  149 => 60,  144 => 59,  137 => 55,  132 => 52,  128 => 51,  125 => 50,  122 => 48,  118 => 46,  110 => 42,  105 => 39,  99 => 38,  96 => 37,  91 => 34,  88 => 33,  85 => 32,  83 => 31,  79 => 29,  72 => 26,  66 => 23,  61 => 20,  58 => 19,  52 => 15,  45 => 12,  41 => 10,  38 => 9,  33 => 3,  30 => 5,  25 => 2,);
    }
}
