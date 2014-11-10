<?php

/* TopxiaWebBundle:Bootstrap:panel.html.twig */
class __TwigTemplate_edae1fc2ff07c86d9d23514cd9918d21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'heading' => array($this, 'block_heading'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        $context["id"] = ((array_key_exists("id", $context)) ? (_twig_default_filter($_id_, null)) : (null));
        // line 2
        if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
        $context["class"] = ((array_key_exists("class", $context)) ? (_twig_default_filter($_class_, null)) : (null));
        // line 3
        echo "<div ";
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        if ($_id_) {
            echo "id=\"";
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo twig_escape_filter($this->env, $_id_, "html", null, true);
            echo "\" ";
        }
        echo "class=\"panel panel-default ";
        if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
        if ($_class_) {
            if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
            echo twig_escape_filter($this->env, $_class_, "html", null, true);
        }
        echo "\">
  <div class=\"panel-heading\">";
        // line 4
        $this->displayBlock('heading', $context, $blocks);
        echo "</div>
  <div class=\"panel-body\">";
        // line 5
        $this->displayBlock('body', $context, $blocks);
        echo "</div>
</div>";
    }

    // line 4
    public function block_heading($context, array $blocks = array())
    {
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Bootstrap:panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 5,  54 => 4,  48 => 5,  44 => 4,  27 => 3,  24 => 2,  21 => 1,  950 => 259,  947 => 258,  944 => 257,  939 => 255,  936 => 254,  889 => 247,  887 => 246,  884 => 245,  881 => 244,  876 => 242,  873 => 241,  826 => 235,  816 => 232,  810 => 228,  805 => 227,  802 => 226,  799 => 225,  794 => 223,  791 => 222,  744 => 215,  734 => 212,  728 => 208,  723 => 207,  720 => 206,  717 => 205,  712 => 203,  709 => 202,  662 => 196,  658 => 194,  645 => 192,  640 => 191,  637 => 190,  633 => 189,  629 => 187,  622 => 185,  619 => 184,  616 => 183,  613 => 182,  608 => 180,  605 => 179,  557 => 288,  554 => 287,  548 => 283,  537 => 276,  531 => 274,  525 => 272,  519 => 270,  515 => 268,  508 => 266,  506 => 265,  503 => 264,  500 => 263,  497 => 253,  494 => 252,  490 => 250,  488 => 240,  485 => 239,  482 => 238,  479 => 221,  476 => 220,  473 => 219,  470 => 218,  467 => 201,  464 => 200,  461 => 199,  459 => 178,  448 => 171,  440 => 165,  434 => 161,  430 => 160,  424 => 156,  421 => 155,  403 => 141,  385 => 132,  372 => 128,  363 => 121,  360 => 120,  356 => 118,  346 => 116,  336 => 114,  327 => 112,  318 => 110,  314 => 109,  311 => 108,  297 => 106,  294 => 105,  291 => 104,  284 => 99,  280 => 98,  273 => 95,  270 => 94,  262 => 90,  258 => 88,  254 => 87,  246 => 83,  242 => 81,  239 => 80,  233 => 78,  228 => 77,  223 => 76,  218 => 73,  214 => 71,  210 => 69,  202 => 67,  196 => 65,  191 => 64,  187 => 62,  183 => 61,  180 => 60,  172 => 56,  166 => 55,  157 => 50,  150 => 45,  148 => 44,  144 => 42,  137 => 40,  127 => 38,  124 => 37,  118 => 33,  114 => 31,  112 => 30,  109 => 29,  106 => 28,  103 => 27,  94 => 22,  88 => 18,  85 => 17,  82 => 16,  79 => 15,  72 => 10,  64 => 8,  52 => 7,  46 => 6,  43 => 5,  34 => 3,  29 => 13,);
    }
}
