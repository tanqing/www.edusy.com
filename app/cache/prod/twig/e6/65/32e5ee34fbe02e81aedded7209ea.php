<?php

/* TopxiaAdminBundle::macro.html.twig */
class __TwigTemplate_e66532e5ee34fbe02e81aedded7209ea extends Twig_Template
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
        // line 8
        echo "
";
    }

    // line 1
    public function getuser_link($_user = null, $_class = null)
    {
        $context = $this->env->mergeGlobals(array(
            "user" => $_user,
            "class" => $_class,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "  ";
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            if ($_user_) {
                // line 3
                echo "\t\t<a ";
                if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
                if ($_class_) {
                    echo "class=\"";
                    if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
                    echo twig_escape_filter($this->env, $_class_, "html", null, true);
                    echo "\"";
                }
                echo " href=\"javascript:;\" role=\"show-user\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_user_show", array("id" => $this->getAttribute($_user_, "id"))), "html", null, true);
                echo "\">";
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_user_, "nickname"), "html", null, true);
                echo "</a>
\t";
            } else {
                // line 5
                echo "\t  <span class=\"text-muted\">用户已删除</span>
\t";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 9
    public function getbytesToSize($_bytes = null)
    {
        $context = $this->env->mergeGlobals(array(
            "bytes" => $_bytes,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 10
            echo "\t";
            ob_start();
            // line 11
            echo "\t    
\t    ";
            // line 12
            $context["kilobyte"] = 1024;
            // line 13
            echo "\t    ";
            if (isset($context["kilobyte"])) { $_kilobyte_ = $context["kilobyte"]; } else { $_kilobyte_ = null; }
            $context["megabyte"] = ($_kilobyte_ * 1024);
            // line 14
            echo "\t    ";
            if (isset($context["megabyte"])) { $_megabyte_ = $context["megabyte"]; } else { $_megabyte_ = null; }
            $context["gigabyte"] = ($_megabyte_ * 1024);
            // line 15
            echo "\t    ";
            if (isset($context["gigabyte"])) { $_gigabyte_ = $context["gigabyte"]; } else { $_gigabyte_ = null; }
            $context["terabyte"] = ($_gigabyte_ * 1024);
            // line 16
            echo "
\t    ";
            // line 17
            if (isset($context["bytes"])) { $_bytes_ = $context["bytes"]; } else { $_bytes_ = null; }
            if (isset($context["kilobyte"])) { $_kilobyte_ = $context["kilobyte"]; } else { $_kilobyte_ = null; }
            if (isset($context["megabyte"])) { $_megabyte_ = $context["megabyte"]; } else { $_megabyte_ = null; }
            if (isset($context["gigabyte"])) { $_gigabyte_ = $context["gigabyte"]; } else { $_gigabyte_ = null; }
            if (isset($context["terabyte"])) { $_terabyte_ = $context["terabyte"]; } else { $_terabyte_ = null; }
            if (($_bytes_ < $_kilobyte_)) {
                // line 18
                echo "\t        ";
                if (isset($context["bytes"])) { $_bytes_ = $context["bytes"]; } else { $_bytes_ = null; }
                echo twig_escape_filter($this->env, ($_bytes_ . " B"), "html", null, true);
                echo "
\t    ";
            } elseif (($_bytes_ < $_megabyte_)) {
                // line 20
                echo "\t        ";
                if (isset($context["bytes"])) { $_bytes_ = $context["bytes"]; } else { $_bytes_ = null; }
                if (isset($context["kilobyte"])) { $_kilobyte_ = $context["kilobyte"]; } else { $_kilobyte_ = null; }
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, ($_bytes_ / $_kilobyte_), 2, ".") . " KB"), "html", null, true);
                echo "
\t    ";
            } elseif (($_bytes_ < $_gigabyte_)) {
                // line 22
                echo "\t        ";
                if (isset($context["bytes"])) { $_bytes_ = $context["bytes"]; } else { $_bytes_ = null; }
                if (isset($context["megabyte"])) { $_megabyte_ = $context["megabyte"]; } else { $_megabyte_ = null; }
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, ($_bytes_ / $_megabyte_), 2, ".") . " MB"), "html", null, true);
                echo "
\t    ";
            } elseif (($_bytes_ < $_terabyte_)) {
                // line 24
                echo "\t        ";
                if (isset($context["bytes"])) { $_bytes_ = $context["bytes"]; } else { $_bytes_ = null; }
                if (isset($context["gigabyte"])) { $_gigabyte_ = $context["gigabyte"]; } else { $_gigabyte_ = null; }
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, ($_bytes_ / $_gigabyte_), 2, ".") . " GB"), "html", null, true);
                echo "
\t    ";
            } else {
                // line 26
                echo "\t        ";
                if (isset($context["bytes"])) { $_bytes_ = $context["bytes"]; } else { $_bytes_ = null; }
                if (isset($context["terabyte"])) { $_terabyte_ = $context["terabyte"]; } else { $_terabyte_ = null; }
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, ($_bytes_ / $_terabyte_), 2, ".") . " TB"), "html", null, true);
                echo "
\t    ";
            }
            // line 28
            echo "
\t";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle::macro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 28,  143 => 26,  135 => 24,  102 => 16,  98 => 15,  88 => 12,  85 => 11,  82 => 10,  58 => 5,  36 => 2,  24 => 1,  329 => 63,  322 => 61,  318 => 59,  315 => 58,  312 => 57,  292 => 55,  286 => 54,  279 => 52,  275 => 50,  272 => 49,  269 => 48,  265 => 47,  254 => 46,  241 => 42,  233 => 40,  217 => 36,  209 => 34,  195 => 31,  192 => 30,  188 => 29,  184 => 28,  180 => 27,  178 => 26,  175 => 25,  161 => 23,  146 => 20,  133 => 18,  127 => 22,  121 => 16,  112 => 18,  99 => 11,  81 => 9,  77 => 8,  65 => 7,  30 => 1,  22 => 22,  19 => 8,  253 => 75,  248 => 71,  243 => 21,  234 => 13,  227 => 78,  225 => 38,  222 => 76,  220 => 75,  213 => 71,  202 => 32,  194 => 62,  190 => 61,  185 => 58,  174 => 56,  172 => 24,  169 => 54,  163 => 51,  156 => 50,  138 => 48,  129 => 47,  119 => 20,  105 => 17,  93 => 30,  90 => 13,  73 => 22,  67 => 20,  63 => 19,  59 => 18,  42 => 2,  25 => 45,  23 => 1,  87 => 28,  78 => 14,  69 => 13,  54 => 17,  46 => 14,  44 => 24,  38 => 12,  35 => 6,  32 => 5,  27 => 3,  147 => 49,  142 => 46,  125 => 42,  117 => 45,  111 => 36,  103 => 24,  94 => 14,  80 => 24,  76 => 23,  71 => 9,  60 => 12,  57 => 16,  51 => 3,  48 => 15,  43 => 10,  40 => 3,  33 => 3,  28 => 7,  26 => 5,);
    }
}
