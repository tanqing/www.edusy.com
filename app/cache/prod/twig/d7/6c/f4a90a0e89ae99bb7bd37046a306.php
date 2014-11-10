<?php

/* TopxiaWebBundle:User:layout.html.twig */
class __TwigTemplate_d76cf4a90a0e89ae99bb7bd37046a306 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaWebBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["bodyClass"] = "userpage";
        // line 6
        if (isset($context["pageNav"])) { $_pageNav_ = $context["pageNav"]; } else { $_pageNav_ = null; }
        $context["pageNav"] = ((array_key_exists("pageNav", $context)) ? (_twig_default_filter($_pageNav_, null)) : (null));
        // line 8
        $context["script_controller"] = "user/user";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " ";
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_user_, "nickname"), "html", null, true);
        echo "的公共主页 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "
";
        // line 12
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:User:headerBlock", array("user" => $_user_)));
        echo "

<div class=\"es-row-wrap container-gap userpage-body\">
  <ul class=\"nav nav-pills userpage-nav clearfix\">
  \t";
        // line 16
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        if (twig_in_filter("ROLE_TEACHER", $this->getAttribute($_user_, "roles"))) {
            // line 17
            echo "\t    <li ";
            if (isset($context["pageNav"])) { $_pageNav_ = $context["pageNav"]; } else { $_pageNav_ = null; }
            if (($_pageNav_ == "teach")) {
                echo "class=\"active\"";
            }
            echo "><a href=\"";
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_teach", array("id" => $this->getAttribute($_user_, "id"))), "html", null, true);
            echo "\">在教课程</a></li>
    ";
        }
        // line 19
        echo "    <li ";
        if (isset($context["pageNav"])) { $_pageNav_ = $context["pageNav"]; } else { $_pageNav_ = null; }
        if (($_pageNav_ == "learn")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_learn", array("id" => $this->getAttribute($_user_, "id"))), "html", null, true);
        echo "\">在学课程</a></li>
    <li ";
        // line 20
        if (isset($context["pageNav"])) { $_pageNav_ = $context["pageNav"]; } else { $_pageNav_ = null; }
        if (($_pageNav_ == "favorited")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_favorited", array("id" => $this->getAttribute($_user_, "id"))), "html", null, true);
        echo "\">收藏的课程</a></li>
    <li ";
        // line 21
        if (isset($context["pageNav"])) { $_pageNav_ = $context["pageNav"]; } else { $_pageNav_ = null; }
        if (($_pageNav_ == "group")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_group", array("id" => $this->getAttribute($_user_, "id"))), "html", null, true);
        echo "\">加入的小组</a></li>
    <li ";
        // line 22
        if (isset($context["pageNav"])) { $_pageNav_ = $context["pageNav"]; } else { $_pageNav_ = null; }
        if (($_pageNav_ == "friend")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_following", array("id" => $this->getAttribute($_user_, "id"))), "html", null, true);
        echo "\">关注/粉丝</a></li>
  </ul>

  ";
        // line 25
        $this->displayBlock('main', $context, $blocks);
        // line 26
        echo "
</div>

";
    }

    // line 25
    public function block_main($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:User:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 25,  121 => 26,  119 => 25,  107 => 22,  97 => 21,  87 => 20,  76 => 19,  64 => 17,  61 => 16,  53 => 12,  50 => 11,  47 => 10,  37 => 3,  29 => 6,  27 => 5,  84 => 22,  81 => 21,  77 => 19,  73 => 17,  69 => 15,  65 => 14,  58 => 12,  52 => 11,  49 => 10,  45 => 8,  42 => 7,  32 => 8,  26 => 5,);
    }
}
