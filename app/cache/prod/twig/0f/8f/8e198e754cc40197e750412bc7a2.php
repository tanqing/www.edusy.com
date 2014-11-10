<?php

/* TopxiaWebBundle:Course:create.html.twig */
class __TwigTemplate_0f8f8e198e754cc40197e750412bc7a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaWebBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["script_controller"] = "course/create";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "创建";
        if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
        if (($_type_ == "normal")) {
            echo "课程";
        } else {
            echo "直播课程";
        }
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"row\">
  <div class=\"col-md-offset-2 col-md-8\">
    <div class=\"panel panel-default panel-page\">
      <div class=\"panel-heading\"><h2>创建";
        // line 11
        if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
        if (($_type_ == "normal")) {
            echo "课程";
        } else {
            echo "直播课程";
        }
        echo "</h2></div>

      ";
        // line 13
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if (isset($context["userProfile"])) { $_userProfile_ = $context["userProfile"]; } else { $_userProfile_ = null; }
        if ((((!$this->getAttribute($this->getAttribute($_app_, "user"), "largeAvatar")) || (!$this->getAttribute($this->getAttribute($_app_, "user"), "title"))) || (!$this->getAttribute($_userProfile_, "about")))) {
            // line 14
            echo "        <div class=\"alert alert-info\">
          <h5><strong>请先完成以下设置，才能创建课程：</strong></h5>
          <ol>
            <li>设置头像。
              ";
            // line 18
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            if ($this->getAttribute($this->getAttribute($_app_, "user"), "largeAvatar")) {
                // line 19
                echo "                <span class=\"text-success\"><span class=\"glyphicon glyphicon-ok-circle\"></span> 已完成</span> </li>
              ";
            } else {
                // line 21
                echo "                <span class=\"text-danger\"><span class=\"glyphicon glyphicon-remove-circle\"></span> 未完成</span>，<a href=\"";
                echo $this->env->getExtension('routing')->getPath("settings_avatar", array("fromCourse" => true));
                echo "\" class=\"alert-link\">去设置</a>
              ";
            }
            // line 23
            echo "            <li>设置头衔 、自我介绍。
              ";
            // line 24
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            if (isset($context["userProfile"])) { $_userProfile_ = $context["userProfile"]; } else { $_userProfile_ = null; }
            if (($this->getAttribute($this->getAttribute($_app_, "user"), "title") && $this->getAttribute($_userProfile_, "about"))) {
                // line 25
                echo "                <span class=\"text-success\"><span class=\"glyphicon glyphicon-ok-circle\"></span> 已完成</span> </li>
              ";
            } else {
                // line 27
                echo "                <span class=\"text-danger\"><span class=\"glyphicon glyphicon-remove-circle\"></span> 未完成</span>，<a href=\"";
                echo $this->env->getExtension('routing')->getPath("settings", array("fromCourse" => true));
                echo "\" class=\"alert-link\">去设置</a>
              ";
            }
            // line 29
            echo "            </li>
          </ol>
        </div>
      ";
        } else {
            // line 33
            echo "        <form id=\"course-create-form\" class=\"form-horizontal\" method=\"post\">

          ";
            // line 35
            if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "flash_messages", array(), "method"), "html", null, true);
            echo "

          <div class=\"form-group\">
            <div class=\"col-md-2 control-label\"><label for=\"course_title\" class=\"required\">标题</label></div>
            <div class=\"col-md-8 controls\">
              <input type=\"text\" id=\"course_title\" name=\"title\" required=\"required\" class=\"form-control\" data-widget-cid=\"widget-1\" data-explain=\"\">
              <div class=\"help-block\" style=\"display:none;\"></div>
            </div>
          </div>

          <div class=\"form-group\">
            <div class=\"col-md-offset-2 col-md-8 controls\">
              <input id=\"course-create-btn\" data-submiting-text=\"正在创建\" class=\"btn btn-fat btn-primary\" type=\"submit\" value=\"创建\">
            </div>
          </div>

          ";
            // line 51
            if ((!$this->env->getExtension('topxia_web_twig')->getSetting("copyright.owned"))) {
                // line 52
                echo "          <div class=\"form-group\">
            <div class=\"col-md-offset-2 col-md-8 controls\">
              <p class=\"mtl\"><a href=\"http://www.qiqiuyu.com/course/22\" class=\"text-muted\" target=\"_blank\">如何创建课程？</a></p>
            </div>
          </div>
          ";
            }
            // line 58
            echo "
          <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->renderCsrfToken("site"), "html", null, true);
            echo "\">
          <input type=\"hidden\" name=\"type\" value=\"";
            // line 60
            if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
            echo twig_escape_filter($this->env, $_type_, "html", null, true);
            echo "\">

        </form>

      ";
        }
        // line 65
        echo "    </div>

  </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 65,  150 => 60,  146 => 59,  143 => 58,  135 => 52,  133 => 51,  113 => 35,  109 => 33,  103 => 29,  97 => 27,  93 => 25,  89 => 24,  86 => 23,  80 => 21,  76 => 19,  73 => 18,  67 => 14,  63 => 13,  53 => 11,  48 => 8,  45 => 7,  31 => 3,  26 => 5,);
    }
}
