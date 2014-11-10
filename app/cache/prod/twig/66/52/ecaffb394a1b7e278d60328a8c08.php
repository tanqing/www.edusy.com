<?php

/* TopxiaWebBundle:Default:top-navigation.html.twig */
class __TwigTemplate_6652ecaffb394a1b7e278d60328a8c08 extends Twig_Template
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
        echo "<ul class=\"nav navbar-nav\">
\t";
        // line 2
        if (isset($context["navigations"])) { $_navigations_ = $context["navigations"]; } else { $_navigations_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_navigations_);
        foreach ($context['_seq'] as $context["_key"] => $context["nav"]) {
            // line 3
            echo "\t  ";
            if (isset($context["nav"])) { $_nav_ = $context["nav"]; } else { $_nav_ = null; }
            if ($this->getAttribute($_nav_, "isOpen")) {
                // line 4
                echo "    ";
                if (isset($context["nav"])) { $_nav_ = $context["nav"]; } else { $_nav_ = null; }
                $context["subNavs"] = (($this->getAttribute($_nav_, "children", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_nav_, "children"), array())) : (array()));
                // line 5
                echo "\t\t  <li class=\"";
                if (isset($context["subNavs"])) { $_subNavs_ = $context["subNavs"]; } else { $_subNavs_ = null; }
                if ($_subNavs_) {
                    echo "dropdown ";
                }
                if (isset($context["siteNav"])) { $_siteNav_ = $context["siteNav"]; } else { $_siteNav_ = null; }
                if (isset($context["nav"])) { $_nav_ = $context["nav"]; } else { $_nav_ = null; }
                if (($_siteNav_ && ($_siteNav_ == $this->getAttribute($_nav_, "url")))) {
                    echo "active ";
                }
                echo "\">
        <a href=\"";
                // line 6
                if (isset($context["nav"])) { $_nav_ = $context["nav"]; } else { $_nav_ = null; }
                if ($this->getAttribute($_nav_, "url")) {
                    if (isset($context["nav"])) { $_nav_ = $context["nav"]; } else { $_nav_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->navigationUrlFilter($this->getAttribute($_nav_, "url")), "html", null, true);
                } else {
                    echo "javascript:;";
                }
                echo "\" class=\"";
                if (isset($context["subNavs"])) { $_subNavs_ = $context["subNavs"]; } else { $_subNavs_ = null; }
                if ($_subNavs_) {
                    echo "dropdown-toggle ";
                }
                echo "\" ";
                if (isset($context["nav"])) { $_nav_ = $context["nav"]; } else { $_nav_ = null; }
                if ($this->getAttribute($_nav_, "isNewWin")) {
                    echo "target=\"_blank\"";
                }
                echo " ";
                if (isset($context["subNavs"])) { $_subNavs_ = $context["subNavs"]; } else { $_subNavs_ = null; }
                if ($_subNavs_) {
                    echo " data-toggle=\"dropdown\"";
                }
                echo ">";
                if (isset($context["nav"])) { $_nav_ = $context["nav"]; } else { $_nav_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_nav_, "name"), "html", null, true);
                echo " ";
                if (isset($context["subNavs"])) { $_subNavs_ = $context["subNavs"]; } else { $_subNavs_ = null; }
                if ($_subNavs_) {
                    echo "<b class=\"caret\"></b>";
                }
                echo "</a>
        ";
                // line 7
                if (isset($context["subNavs"])) { $_subNavs_ = $context["subNavs"]; } else { $_subNavs_ = null; }
                if ($_subNavs_) {
                    // line 8
                    echo "          <ul class=\"dropdown-menu\">
            ";
                    // line 9
                    if (isset($context["subNavs"])) { $_subNavs_ = $context["subNavs"]; } else { $_subNavs_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($_subNavs_);
                    foreach ($context['_seq'] as $context["_key"] => $context["subNav"]) {
                        // line 10
                        echo "              <li><a href=\"";
                        if (isset($context["subNav"])) { $_subNav_ = $context["subNav"]; } else { $_subNav_ = null; }
                        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->navigationUrlFilter($this->getAttribute($_subNav_, "url")), "html", null, true);
                        echo "\"  ";
                        if (isset($context["subNav"])) { $_subNav_ = $context["subNav"]; } else { $_subNav_ = null; }
                        if ($this->getAttribute($_subNav_, "isNewWin")) {
                            echo "target=\"_blank\"";
                        }
                        echo ">";
                        if (isset($context["subNav"])) { $_subNav_ = $context["subNav"]; } else { $_subNav_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_subNav_, "name"), "html", null, true);
                        echo "</a></li>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subNav'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 12
                    echo "          </ul>
        ";
                }
                // line 14
                echo "      </li>
\t\t";
            }
            // line 16
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nav'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Default:top-navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 17,  118 => 16,  114 => 14,  92 => 10,  87 => 9,  84 => 8,  81 => 7,  48 => 6,  35 => 5,  22 => 2,  19 => 1,  438 => 142,  433 => 125,  427 => 143,  425 => 142,  418 => 138,  403 => 136,  398 => 135,  396 => 134,  390 => 131,  383 => 126,  380 => 125,  374 => 122,  369 => 119,  365 => 118,  356 => 111,  349 => 109,  343 => 108,  338 => 107,  332 => 105,  329 => 104,  321 => 100,  314 => 97,  312 => 96,  307 => 94,  302 => 93,  296 => 91,  288 => 89,  284 => 87,  276 => 86,  270 => 83,  259 => 81,  253 => 78,  248 => 77,  239 => 72,  237 => 71,  232 => 70,  229 => 69,  222 => 66,  216 => 62,  208 => 60,  200 => 58,  198 => 57,  186 => 48,  183 => 47,  180 => 46,  175 => 41,  168 => 30,  163 => 28,  159 => 27,  155 => 26,  151 => 25,  146 => 24,  143 => 23,  138 => 17,  133 => 16,  119 => 12,  112 => 148,  110 => 12,  105 => 46,  94 => 44,  90 => 42,  88 => 41,  82 => 38,  75 => 34,  69 => 23,  63 => 21,  61 => 20,  53 => 18,  45 => 16,  42 => 15,  40 => 12,  29 => 2,  27 => 3,  122 => 13,  120 => 52,  113 => 49,  107 => 146,  100 => 42,  95 => 41,  72 => 33,  64 => 18,  57 => 19,  54 => 15,  49 => 17,  41 => 7,  38 => 6,  31 => 4,  26 => 4,);
    }
}
