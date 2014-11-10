<?php

/* TopxiaWebBundle::macro.html.twig */
class __TwigTemplate_76c52839ccd1eba73627d4e98aaabe93 extends Twig_Template
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
        // line 14
        echo "
";
        // line 22
        echo "
";
        // line 45
        echo "
";
    }

    // line 1
    public function getuser_avatar($_user = null, $_class = null)
    {
        $context = $this->env->mergeGlobals(array(
            "user" => $_user,
            "class" => $_class,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "<a class=\"user-link user-avatar-link ";
            if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
            echo twig_escape_filter($this->env, $_class_, "html", null, true);
            echo "\" href=\"";
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($_user_, "id"))), "html", null, true);
            echo "\">
    <img src=\"";
            // line 3
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getDefaultPath("avatar", $this->getAttribute($_user_, "smallAvatar"), ""), "html", null, true);
            echo "\">
  </a>";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 7
    public function getuser_link($_user = null, $_class = null)
    {
        $context = $this->env->mergeGlobals(array(
            "user" => $_user,
            "class" => $_class,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 8
            echo "  ";
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            if ($_user_) {
                // line 9
                echo "    <a ";
                if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
                if ($_class_) {
                    echo "class=\"";
                    if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
                    echo twig_escape_filter($this->env, $_class_, "html", null, true);
                    echo "\"";
                }
                echo " href=\"";
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($_user_, "id"))), "html", null, true);
                echo "\">";
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_user_, "nickname"), "html", null, true);
                echo "</a>
  ";
            } else {
                // line 11
                echo "    <span class=\"text-muted\">用户已删除</span>
  ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 15
    public function getflash_messages()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 16
            echo "  ";
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($_app_, "session"), "flashbag"), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["flashMessages"]) {
                // line 17
                echo "    ";
                if (isset($context["flashMessages"])) { $_flashMessages_ = $context["flashMessages"]; } else { $_flashMessages_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($_flashMessages_);
                foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                    // line 18
                    echo "      <div class=\"alert alert-";
                    if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
                    echo twig_escape_filter($this->env, $_type_, "html", null, true);
                    echo "\">";
                    if (isset($context["flashMessage"])) { $_flashMessage_ = $context["flashMessage"]; } else { $_flashMessage_ = null; }
                    echo $_flashMessage_;
                    echo "</div>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 20
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['flashMessages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 23
    public function getbytesToSize($_bytes = null)
    {
        $context = $this->env->mergeGlobals(array(
            "bytes" => $_bytes,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 24
            echo "  ";
            ob_start();
            // line 25
            echo "      
      ";
            // line 26
            $context["kilobyte"] = 1024;
            // line 27
            echo "      ";
            if (isset($context["kilobyte"])) { $_kilobyte_ = $context["kilobyte"]; } else { $_kilobyte_ = null; }
            $context["megabyte"] = ($_kilobyte_ * 1024);
            // line 28
            echo "      ";
            if (isset($context["megabyte"])) { $_megabyte_ = $context["megabyte"]; } else { $_megabyte_ = null; }
            $context["gigabyte"] = ($_megabyte_ * 1024);
            // line 29
            echo "      ";
            if (isset($context["gigabyte"])) { $_gigabyte_ = $context["gigabyte"]; } else { $_gigabyte_ = null; }
            $context["terabyte"] = ($_gigabyte_ * 1024);
            // line 30
            echo "
      ";
            // line 31
            if (isset($context["bytes"])) { $_bytes_ = $context["bytes"]; } else { $_bytes_ = null; }
            if (isset($context["kilobyte"])) { $_kilobyte_ = $context["kilobyte"]; } else { $_kilobyte_ = null; }
            if (isset($context["megabyte"])) { $_megabyte_ = $context["megabyte"]; } else { $_megabyte_ = null; }
            if (isset($context["gigabyte"])) { $_gigabyte_ = $context["gigabyte"]; } else { $_gigabyte_ = null; }
            if (isset($context["terabyte"])) { $_terabyte_ = $context["terabyte"]; } else { $_terabyte_ = null; }
            if (($_bytes_ < $_kilobyte_)) {
                // line 32
                echo "          ";
                if (isset($context["bytes"])) { $_bytes_ = $context["bytes"]; } else { $_bytes_ = null; }
                echo twig_escape_filter($this->env, ($_bytes_ . " B"), "html", null, true);
                echo "
      ";
            } elseif (($_bytes_ < $_megabyte_)) {
                // line 34
                echo "          ";
                if (isset($context["bytes"])) { $_bytes_ = $context["bytes"]; } else { $_bytes_ = null; }
                if (isset($context["kilobyte"])) { $_kilobyte_ = $context["kilobyte"]; } else { $_kilobyte_ = null; }
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, ($_bytes_ / $_kilobyte_), 2, ".") . " KB"), "html", null, true);
                echo "
      ";
            } elseif (($_bytes_ < $_gigabyte_)) {
                // line 36
                echo "          ";
                if (isset($context["bytes"])) { $_bytes_ = $context["bytes"]; } else { $_bytes_ = null; }
                if (isset($context["megabyte"])) { $_megabyte_ = $context["megabyte"]; } else { $_megabyte_ = null; }
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, ($_bytes_ / $_megabyte_), 2, ".") . " MB"), "html", null, true);
                echo "
      ";
            } elseif (($_bytes_ < $_terabyte_)) {
                // line 38
                echo "          ";
                if (isset($context["bytes"])) { $_bytes_ = $context["bytes"]; } else { $_bytes_ = null; }
                if (isset($context["gigabyte"])) { $_gigabyte_ = $context["gigabyte"]; } else { $_gigabyte_ = null; }
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, ($_bytes_ / $_gigabyte_), 2, ".") . " GB"), "html", null, true);
                echo "
      ";
            } else {
                // line 40
                echo "          ";
                if (isset($context["bytes"])) { $_bytes_ = $context["bytes"]; } else { $_bytes_ = null; }
                if (isset($context["terabyte"])) { $_terabyte_ = $context["terabyte"]; } else { $_terabyte_ = null; }
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, ($_bytes_ / $_terabyte_), 2, ".") . " TB"), "html", null, true);
                echo "
      ";
            }
            // line 42
            echo "
  ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 46
    public function getpaginator($_paginator = null)
    {
        $context = $this->env->mergeGlobals(array(
            "paginator" => $_paginator,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 47
            echo "  ";
            if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
            if (($this->getAttribute($_paginator_, "lastPage") > 1)) {
                // line 48
                echo "    <ul  class=\"pagination\">
      ";
                // line 49
                if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
                if (($this->getAttribute($_paginator_, "currentPage") == $this->getAttribute($_paginator_, "firstPage"))) {
                    // line 50
                    echo "        <li class=\"disabled\"><span>上一页</span></li>
      ";
                } else {
                    // line 52
                    echo "        <li><a  href=\"";
                    if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_paginator_, "getPageUrl", array(0 => $this->getAttribute($_paginator_, "previousPage")), "method"), "html", null, true);
                    echo "\">上一页</a></li>
      ";
                }
                // line 54
                echo "      ";
                if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_paginator_, "pages"));
                foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                    // line 55
                    echo "        <li ";
                    if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                    if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
                    if (($_page_ == $this->getAttribute($_paginator_, "currentPage"))) {
                        echo "class=\"active\"";
                    }
                    echo "><a href=\"";
                    if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
                    if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_paginator_, "getPageUrl", array(0 => $_page_), "method"), "html", null, true);
                    echo "\">";
                    if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                    echo twig_escape_filter($this->env, $_page_, "html", null, true);
                    echo "</a></li>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 57
                echo "
      ";
                // line 58
                if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
                if (($this->getAttribute($_paginator_, "currentPage") == $this->getAttribute($_paginator_, "lastPage"))) {
                    // line 59
                    echo "        <li class=\"disabled\"><span>下一页</span></li>
      ";
                } else {
                    // line 61
                    echo "        <li><a  href=\"";
                    if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_paginator_, "getPageUrl", array(0 => $this->getAttribute($_paginator_, "nextPage")), "method"), "html", null, true);
                    echo "\">下一页</a></li>
      ";
                }
                // line 63
                echo "    </ul>
  ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle::macro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  329 => 63,  322 => 61,  318 => 59,  315 => 58,  312 => 57,  292 => 55,  286 => 54,  279 => 52,  275 => 50,  272 => 49,  269 => 48,  265 => 47,  254 => 46,  241 => 42,  233 => 40,  217 => 36,  209 => 34,  195 => 31,  192 => 30,  188 => 29,  184 => 28,  180 => 27,  178 => 26,  175 => 25,  161 => 23,  146 => 20,  133 => 18,  127 => 17,  121 => 16,  112 => 15,  99 => 11,  81 => 9,  77 => 8,  65 => 7,  30 => 1,  22 => 22,  19 => 14,  253 => 75,  248 => 71,  243 => 21,  234 => 13,  227 => 78,  225 => 38,  222 => 76,  220 => 75,  213 => 71,  202 => 32,  194 => 62,  190 => 61,  185 => 58,  174 => 56,  172 => 24,  169 => 54,  163 => 51,  156 => 50,  138 => 48,  129 => 47,  119 => 46,  105 => 40,  93 => 30,  90 => 29,  73 => 22,  67 => 20,  63 => 19,  59 => 18,  42 => 2,  25 => 45,  23 => 1,  87 => 28,  78 => 14,  69 => 13,  54 => 17,  46 => 14,  44 => 24,  38 => 12,  35 => 6,  32 => 5,  27 => 3,  147 => 49,  142 => 46,  125 => 42,  117 => 45,  111 => 36,  103 => 24,  94 => 30,  80 => 24,  76 => 23,  71 => 21,  60 => 12,  57 => 16,  51 => 3,  48 => 15,  43 => 10,  40 => 22,  33 => 3,  28 => 7,  26 => 5,);
    }
}
