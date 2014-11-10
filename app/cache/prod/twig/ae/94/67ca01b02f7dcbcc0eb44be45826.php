<?php

/* TopxiaWebBundle:Article:recommend-articles-block.html.twig */
class __TwigTemplate_ae9467ca01b02f7dcbcc0eb44be45826 extends Twig_Template
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
        if (isset($context["articles"])) { $_articles_ = $context["articles"]; } else { $_articles_ = null; }
        if ($_articles_) {
            // line 2
            echo "  <div class=\"panel panel-default sub-articles\">
    <div class=\"panel-heading\">
      <h3 class=\"panel-title\">推荐资讯</h3>
    </div>
    <div class=\"panel-body\">
      <ul class=\"media-list\">
        ";
            // line 8
            if (isset($context["articles"])) { $_articles_ = $context["articles"]; } else { $_articles_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_articles_);
            foreach ($context['_seq'] as $context["key"] => $context["article"]) {
                // line 9
                echo "          <li class=\"media\">
            <span class=\"rank_num\">";
                // line 10
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, ($_key_ + 1), "html", null, true);
                echo "</span>
            <div class=\"media-body\"><a href=\"";
                // line 11
                if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_detail", array("id" => $this->getAttribute($_article_, "id"))), "html", null, true);
                echo "\" title=\"";
                if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_article_, "title"), "html", null, true);
                echo "\">";
                if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($_article_, "title"), 19);
                echo "</a></div>
          </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "      </ul>
    </div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Article:recommend-articles-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 11,  69 => 18,  61 => 14,  26 => 6,  71 => 10,  65 => 16,  45 => 11,  40 => 10,  28 => 4,  25 => 3,  22 => 2,  19 => 1,  115 => 33,  110 => 29,  107 => 28,  98 => 21,  94 => 19,  91 => 18,  83 => 34,  81 => 33,  77 => 31,  75 => 28,  70 => 25,  68 => 18,  63 => 15,  60 => 14,  54 => 7,  49 => 7,  46 => 5,  37 => 9,  30 => 8,  209 => 56,  204 => 55,  201 => 54,  191 => 50,  187 => 48,  183 => 46,  172 => 42,  164 => 41,  161 => 40,  154 => 37,  148 => 36,  145 => 35,  139 => 33,  136 => 32,  130 => 31,  119 => 28,  114 => 27,  109 => 26,  104 => 23,  99 => 22,  96 => 21,  93 => 20,  90 => 19,  86 => 17,  64 => 15,  59 => 14,  53 => 12,  50 => 11,  47 => 10,  41 => 8,  38 => 10,  35 => 9,  32 => 8,  29 => 7,);
    }
}
