<?php

/* TopxiaWebBundle:User:header-block.html.twig */
class __TwigTemplate_4db3ee2e4e942e4639467e5fb7785679 extends Twig_Template
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
        echo "<div class=\"es-row-wrap  container-gap userpage-header\">
  <div class=\"row\">
    <div class=\"col-md-12\">
      <img class=\"avatar\" src=\"";
        // line 4
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getDefaultPath("avatar", $this->getAttribute($_user_, "largeAvatar"), "large"), "html", null, true);
        echo "\">
      <div class=\"userpage-header-info\">
          <div class=\"actions\">
            ";
        // line 7
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        if (((!$this->getAttribute($_app_, "user")) || ($this->getAttribute($this->getAttribute($_app_, "user"), "id") != $this->getAttribute($_user_, "id")))) {
            // line 8
            echo "              <button class=\"btn btn-success unfollow-btn\" data-url=\"";
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_unfollow", array("id" => $this->getAttribute($_user_, "id"))), "html", null, true);
            echo "\" ";
            if (isset($context["isFollowed"])) { $_isFollowed_ = $context["isFollowed"]; } else { $_isFollowed_ = null; }
            if (($_isFollowed_ == false)) {
                echo " style=\"display:none;\"";
            }
            echo ">已关注</button>
              <button class=\"btn btn-primary follow-btn\" data-url=\"";
            // line 9
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_follow", array("id" => $this->getAttribute($_user_, "id"))), "html", null, true);
            echo "\" ";
            if (isset($context["isFollowed"])) { $_isFollowed_ = $context["isFollowed"]; } else { $_isFollowed_ = null; }
            if (($_isFollowed_ == true)) {
                echo " style=\"display:none;\"";
            }
            echo ">关注</button>
              <button class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
            // line 10
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("message_create", array("toId" => $this->getAttribute($_user_, "id"))), "html", null, true);
            echo "\">私信</button>
            ";
        }
        // line 12
        echo "          </div>
          <h1>";
        // line 13
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_user_, "nickname"), "html", null, true);
        echo " <small>";
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_user_, "title"), "html", null, true);
        echo "</small></h1>
          <div class=\"about\">";
        // line 14
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo $this->getAttribute($_user_, "about");
        echo "</div>
          <div class=\"links\">
            ";
        // line 16
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        if ($_user_) {
            // line 17
            echo "              ";
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            if ($this->getAttribute($_user_, "weibo")) {
                // line 18
                echo "                <a href=\"";
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_user_, "weibo"), "html", null, true);
                echo "\" target=\"_blank\" class=\"mrm\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/user/link-weibo.png"), "html", null, true);
                echo "\"> 微博</a>
              ";
            }
            // line 20
            echo "              ";
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            if ($this->getAttribute($_user_, "site")) {
                // line 21
                echo "                <a href=\"";
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_user_, "site"), "html", null, true);
                echo "\" target=\"_blank\" class=\"mrm\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/user/link-site.png"), "html", null, true);
                echo "\"> 网站</a>
              ";
            }
            // line 23
            echo "            ";
        }
        // line 24
        echo "          </div>
      </div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:User:header-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 24,  108 => 23,  99 => 21,  95 => 20,  86 => 18,  82 => 17,  79 => 16,  62 => 12,  56 => 10,  46 => 9,  35 => 8,  31 => 7,  24 => 4,  19 => 1,  128 => 25,  121 => 26,  119 => 25,  107 => 22,  97 => 21,  87 => 20,  76 => 19,  64 => 17,  61 => 16,  53 => 12,  50 => 11,  47 => 10,  37 => 3,  29 => 6,  27 => 5,  84 => 22,  81 => 21,  77 => 19,  73 => 14,  69 => 15,  65 => 13,  58 => 12,  52 => 11,  49 => 10,  45 => 8,  42 => 7,  32 => 8,  26 => 5,);
    }
}
