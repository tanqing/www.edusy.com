<?php

/* TopxiaWebBundle:Teacher:index.html.twig */
class __TwigTemplate_b27ec402830c2a85ac50cc980134aadc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaWebBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 9
        $context["bodyClass"] = "teacherpage";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "师资介绍 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_keywords($context, array $blocks = array())
    {
        echo "师资介绍 ";
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.name"), "html", null, true);
    }

    // line 6
    public function block_description($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.name"), "html", null, true);
        echo "的师资介绍。";
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "
<div class=\"es-row-wrap container-gap\">
  <div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"page-header\"><h1>师资介绍</h1></div>
    </div>
  </div>

  <div class=\"row\">
    <div class=\"col-md-12\">

      <ul class=\"media-list\">
        ";
        // line 23
        if (isset($context["teachers"])) { $_teachers_ = $context["teachers"]; } else { $_teachers_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_teachers_);
        foreach ($context['_seq'] as $context["_key"] => $context["teacher"]) {
            // line 24
            echo "          ";
            if (isset($context["profiles"])) { $_profiles_ = $context["profiles"]; } else { $_profiles_ = null; }
            if (isset($context["teacher"])) { $_teacher_ = $context["teacher"]; } else { $_teacher_ = null; }
            $context["profile"] = $this->getAttribute($_profiles_, $this->getAttribute($_teacher_, "id"), array(), "array");
            // line 25
            echo "          <li class=\"media teacher\">
            <a class=\"pull-left\" href=\"";
            // line 26
            if (isset($context["teacher"])) { $_teacher_ = $context["teacher"]; } else { $_teacher_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($_teacher_, "id"))), "html", null, true);
            echo "\">
              <img class=\"media-object\" src=\"";
            // line 27
            if (isset($context["teacher"])) { $_teacher_ = $context["teacher"]; } else { $_teacher_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getDefaultPath("avatar", $this->getAttribute($_teacher_, "mediumAvatar"), ""), "html", null, true);
            echo "\">
            </a>
            <div class=\"media-body\">
              <button class=\"btn btn-default pull-right\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
            // line 30
            if (isset($context["teacher"])) { $_teacher_ = $context["teacher"]; } else { $_teacher_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("message_create", array("toId" => $this->getAttribute($_teacher_, "id"))), "html", null, true);
            echo "\">私信</button>

              <h4 class=\"media-heading\">
                <a href=\"";
            // line 33
            if (isset($context["teacher"])) { $_teacher_ = $context["teacher"]; } else { $_teacher_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($_teacher_, "id"))), "html", null, true);
            echo "\">";
            if (isset($context["teacher"])) { $_teacher_ = $context["teacher"]; } else { $_teacher_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_teacher_, "nickname"), "html", null, true);
            echo "</a>
              </h4>
              <div class=\"teacher-title\">
                ";
            // line 36
            if (isset($context["teacher"])) { $_teacher_ = $context["teacher"]; } else { $_teacher_ = null; }
            if ($this->getAttribute($_teacher_, "title")) {
                // line 37
                echo "                  ";
                if (isset($context["teacher"])) { $_teacher_ = $context["teacher"]; } else { $_teacher_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_teacher_, "title"), "html", null, true);
                echo "
                ";
            } else {
                // line 39
                echo "                  <span class=\"text-muted\">请设置头衔</span>
                ";
            }
            // line 41
            echo "              </div>
              <div class=\"teacher-about\">";
            // line 42
            if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
            echo $this->getAttribute($_profile_, "about");
            echo "</div>
            </div>
          </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teacher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "      </ul>
      ";
        // line 47
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "paginator", array(0 => $_paginator_), "method"), "html", null, true);
        echo "
      
    </div>
  </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Teacher:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 47,  141 => 46,  130 => 42,  127 => 41,  123 => 39,  116 => 37,  113 => 36,  103 => 33,  96 => 30,  89 => 27,  84 => 26,  81 => 25,  76 => 24,  71 => 23,  57 => 11,  54 => 10,  47 => 6,  40 => 5,  33 => 3,  28 => 9,);
    }
}
