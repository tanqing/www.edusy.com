<?php

/* TopxiaAdminBundle:Default:cloud-notice.html.twig */
class __TwigTemplate_b5de44bdd96ae73ffa89a06ee207104b extends Twig_Template
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
        $context["admin_macro"] = $this->env->loadTemplate("TopxiaAdminBundle::macro.html.twig");
        // line 2
        echo "  ";
        if (isset($context["notices"])) { $_notices_ = $context["notices"]; } else { $_notices_ = null; }
        if ($_notices_) {
            // line 3
            echo "  <div class=\"col-md-12\">
    <div class=\"main-system-alert\">
      <h2> 站长公告</h2>
        <ul class=\"alert-list\">
        ";
            // line 7
            if (isset($context["notices"])) { $_notices_ = $context["notices"]; } else { $_notices_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_notices_);
            foreach ($context['_seq'] as $context["_key"] => $context["notice"]) {
                // line 8
                echo "          <li class=\"glyphicon glyphicon-bell\" style=\"color:#fed032;font-size:16px;\"><a href=\"";
                if (isset($context["notice"])) { $_notice_ = $context["notice"]; } else { $_notice_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_notice_, "detailUrl"), "html", null, true);
                echo "\" style=\"margin-left:22px;\" target=\"_blank\">";
                if (isset($context["notice"])) { $_notice_ = $context["notice"]; } else { $_notice_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_notice_, "content"), "html", null, true);
                echo "<span>";
                if (isset($context["notice"])) { $_notice_ = $context["notice"]; } else { $_notice_ = null; }
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_notice_, "createdTime"), "Y-m-d H:i:s"), "html", null, true);
                echo "</span></a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "        </ul>
    </div>
  </div>
  ";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Default:cloud-notice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 10,  36 => 8,  31 => 7,  21 => 2,  19 => 1,  154 => 91,  147 => 87,  143 => 85,  136 => 81,  129 => 77,  113 => 65,  109 => 64,  96 => 54,  91 => 51,  79 => 32,  72 => 30,  60 => 21,  49 => 15,  44 => 12,  42 => 11,  35 => 6,  32 => 5,  27 => 4,  25 => 3,);
    }
}
