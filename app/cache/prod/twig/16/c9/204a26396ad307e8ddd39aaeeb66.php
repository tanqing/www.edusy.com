<?php

/* TopxiaWebBundle:Login:social-logins-block.html.twig */
class __TwigTemplate_16c9204a26396ad307e8ddd39aaeeb66 extends Twig_Template
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
        $context["settings"] = $this->env->getExtension('topxia_web_twig')->getSetting("login_bind", array());
        // line 2
        echo "
";
        // line 3
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if ((($this->getAttribute($_settings_, "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_settings_, "enabled"), false)) : (false))) {
            // line 4
            echo "\t<div class=\"social-logins\">
\t\t";
            // line 5
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            if ((($this->getAttribute($_settings_, "weibo_enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_settings_, "weibo_enabled"), false)) : (false))) {
                // line 6
                echo "\t\t  <a href=\"";
                if (isset($context["_target_path"])) { $__target_path_ = $context["_target_path"]; } else { $__target_path_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_bind", array("type" => "weibo", "_target_path" => ((array_key_exists("_target_path", $context)) ? (_twig_default_filter($__target_path_, "")) : ("")))), "html", null, true);
                echo "\" class=\"social-login-btn\"><i class=\"social-icon social-icon-weibo\"></i>微博帐号登录</a>
\t\t";
            }
            // line 8
            echo "
\t\t";
            // line 9
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            if ((($this->getAttribute($_settings_, "qq_enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_settings_, "qq_enabled"), false)) : (false))) {
                // line 10
                echo "\t\t  <a href=\"";
                if (isset($context["_target_path"])) { $__target_path_ = $context["_target_path"]; } else { $__target_path_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_bind", array("type" => "qq", "_target_path" => ((array_key_exists("_target_path", $context)) ? (_twig_default_filter($__target_path_, "")) : ("")))), "html", null, true);
                echo "\" class=\"social-login-btn\"><i class=\"social-icon social-icon-qq\"></i>QQ帐号登录</a>
\t\t";
            }
            // line 12
            echo "
\t\t";
            // line 13
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            if ((($this->getAttribute($_settings_, "renren_enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_settings_, "renren_enabled"), false)) : (false))) {
                // line 14
                echo "\t\t  <a href=\"";
                if (isset($context["_target_path"])) { $__target_path_ = $context["_target_path"]; } else { $__target_path_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_bind", array("type" => "renren", "_target_path" => ((array_key_exists("_target_path", $context)) ? (_twig_default_filter($__target_path_, "")) : ("")))), "html", null, true);
                echo "\" class=\"social-login-btn\"><i class=\"social-icon social-icon-renren\"></i>人人帐号登录</a>
\t\t";
            }
            // line 16
            echo "\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Login:social-logins-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 16,  59 => 14,  56 => 13,  46 => 10,  43 => 9,  33 => 6,  30 => 5,  24 => 3,  21 => 2,  124 => 17,  118 => 16,  114 => 14,  92 => 10,  87 => 9,  84 => 8,  81 => 7,  48 => 6,  35 => 5,  22 => 2,  19 => 1,  438 => 142,  433 => 125,  427 => 143,  425 => 142,  418 => 138,  403 => 136,  398 => 135,  396 => 134,  390 => 131,  383 => 126,  380 => 125,  374 => 122,  369 => 119,  365 => 118,  356 => 111,  349 => 109,  343 => 108,  338 => 107,  332 => 105,  329 => 104,  321 => 100,  314 => 97,  312 => 96,  307 => 94,  302 => 93,  296 => 91,  288 => 89,  284 => 87,  276 => 86,  270 => 83,  259 => 81,  253 => 78,  248 => 77,  239 => 72,  237 => 71,  232 => 70,  229 => 69,  222 => 66,  216 => 62,  208 => 60,  200 => 58,  198 => 57,  186 => 48,  183 => 47,  180 => 46,  175 => 41,  168 => 30,  163 => 28,  159 => 27,  155 => 26,  151 => 25,  146 => 24,  143 => 23,  138 => 17,  133 => 16,  119 => 12,  112 => 148,  110 => 12,  105 => 46,  94 => 44,  90 => 42,  88 => 41,  82 => 38,  75 => 34,  69 => 23,  63 => 21,  61 => 20,  53 => 12,  45 => 16,  42 => 15,  40 => 8,  29 => 2,  27 => 4,  122 => 13,  120 => 52,  113 => 49,  107 => 146,  100 => 42,  95 => 41,  72 => 33,  64 => 18,  57 => 19,  54 => 15,  49 => 17,  41 => 7,  38 => 6,  31 => 4,  26 => 4,);
    }
}
