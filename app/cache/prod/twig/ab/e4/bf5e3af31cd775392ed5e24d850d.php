<?php

/* TopxiaWebBundle:Notification:item-default.html.twig */
class __TwigTemplate_abe4bf5e3af31cd775392ed5e24d850d extends Twig_Template
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
        echo "<li class=\"media\">
  <div class=\"pull-left\">
    <span class=\"glyphicon glyphicon-volume-down media-object\"></span>
  </div>
  <div class=\"media-body\">
    <div class=\"notification-body\">
      ";
        // line 7
        if (isset($context["notification"])) { $_notification_ = $context["notification"]; } else { $_notification_ = null; }
        echo $this->getAttribute($this->getAttribute($_notification_, "content"), "message");
        echo "
    </div>
    <div class=\"notification-footer\">
      ";
        // line 10
        if (isset($context["notification"])) { $_notification_ = $context["notification"]; } else { $_notification_ = null; }
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_notification_, "createdTime"), "Y-n-d H:i:s"), "html", null, true);
        echo "
    </div>
  </div>
</li>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Notification:item-default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 10,  27 => 7,  19 => 1,);
    }
}
