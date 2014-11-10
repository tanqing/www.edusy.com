<?php

/* TopxiaWebBundle:My:avatar-alert.html.twig */
class __TwigTemplate_26ae06f4d2f3eedd30a75db90ac010d8 extends Twig_Template
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
        if (isset($context["avatarAlert"])) { $_avatarAlert_ = $context["avatarAlert"]; } else { $_avatarAlert_ = null; }
        if ($_avatarAlert_) {
            // line 2
            echo "
 <div class=\"alert alert-warning alert-dismissable\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
    <strong>您还没有头像</strong>。拥有一个独有的头像，老师和同学们能更容易关注到你哦～～ <a href=\"";
            // line 5
            echo $this->env->getExtension('routing')->getPath("settings_avatar");
            echo "\" class=\"alert-link\" target=\"_blank\">点击设置</a>
 </div>

";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:My:avatar-alert.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 5,  22 => 2,  19 => 1,  235 => 77,  223 => 68,  216 => 67,  205 => 59,  198 => 58,  193 => 56,  186 => 55,  181 => 53,  174 => 52,  169 => 50,  150 => 46,  147 => 45,  132 => 41,  126 => 39,  119 => 38,  112 => 33,  98 => 28,  87 => 26,  83 => 25,  76 => 24,  71 => 22,  64 => 21,  58 => 17,  55 => 16,  43 => 7,  40 => 6,  37 => 5,  30 => 3,  187 => 74,  182 => 71,  175 => 69,  162 => 49,  157 => 47,  152 => 60,  142 => 43,  135 => 42,  130 => 40,  125 => 49,  120 => 46,  116 => 44,  113 => 43,  105 => 29,  94 => 27,  89 => 37,  84 => 34,  78 => 33,  59 => 16,  53 => 14,  50 => 13,  46 => 12,  41 => 9,  38 => 7,  31 => 3,  26 => 5,);
    }
}
