<?php

/* TopxiaWebBundle:Message:index.html.twig */
class __TwigTemplate_bc3c18e3ac4043de210989861101f1ff extends Twig_Template
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
        // line 4
        $context["script_controller"] = "message/conversation-list";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "私信 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "<div class=\"row row-8\">
  <div class=\"col-md-8 col-md-offset-2\">
    <div class=\"panel panel-default panel-page\">
      <div class=\"panel-heading\">
        <a class=\"btn btn-primary pull-right\" href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("message_send");
        echo "\">写私信</a>
        <h2>私信</h2>
      </div>

      <ul class=\"media-list conversation-list\">
        ";
        // line 16
        if (isset($context["conversations"])) { $_conversations_ = $context["conversations"]; } else { $_conversations_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_conversations_);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["conversation"]) {
            // line 17
            echo "          ";
            if (isset($context["users"])) { $_users_ = $context["users"]; } else { $_users_ = null; }
            if (isset($context["conversation"])) { $_conversation_ = $context["conversation"]; } else { $_conversation_ = null; }
            $context["fromUser"] = $this->getAttribute($_users_, $this->getAttribute($_conversation_, "fromId"), array(), "array");
            // line 18
            echo "          <li class=\"media\" data-url=\"";
            if (isset($context["conversation"])) { $_conversation_ = $context["conversation"]; } else { $_conversation_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("message_conversation_show", array("conversationId" => $this->getAttribute($_conversation_, "id"))), "html", null, true);
            echo "\">
            ";
            // line 19
            if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
            if (isset($context["fromUser"])) { $_fromUser_ = $context["fromUser"]; } else { $_fromUser_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "user_avatar", array(0 => $_fromUser_, 1 => "pull-left media-object"), "method"), "html", null, true);
            echo "
            <div class=\"media-body\">
              <h4 class=\"media-heading\">
                ";
            // line 22
            if (isset($context["conversation"])) { $_conversation_ = $context["conversation"]; } else { $_conversation_ = null; }
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            if (($this->getAttribute($_conversation_, "latestMessageUserId") == $this->getAttribute($this->getAttribute($_app_, "user"), "id"))) {
                // line 23
                echo "                  发给
                ";
            }
            // line 25
            echo "                ";
            if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
            if (isset($context["fromUser"])) { $_fromUser_ = $context["fromUser"]; } else { $_fromUser_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "user_link", array(0 => $_fromUser_), "method"), "html", null, true);
            echo ":
                ";
            // line 26
            if (isset($context["conversation"])) { $_conversation_ = $context["conversation"]; } else { $_conversation_ = null; }
            echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($_conversation_, "latestMessageContent"), 40);
            echo "

                ";
            // line 28
            if (isset($context["conversation"])) { $_conversation_ = $context["conversation"]; } else { $_conversation_ = null; }
            if (($this->getAttribute($_conversation_, "unreadNum") > 0)) {
                // line 29
                echo "                  <span class=\"text-warning\">(";
                if (isset($context["conversation"])) { $_conversation_ = $context["conversation"]; } else { $_conversation_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_conversation_, "unreadNum"), "html", null, true);
                echo "条未读)</span>
                ";
            }
            // line 31
            echo "              </h4>

              <div class=\"conversation-footer clearfix\">
                <span class=\"pull-left\">";
            // line 34
            if (isset($context["conversation"])) { $_conversation_ = $context["conversation"]; } else { $_conversation_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->smarttimeFilter($this->getAttribute($_conversation_, "latestMessageTime")), "html", null, true);
            echo "</span>
                <span class=\"pull-right\">共";
            // line 35
            if (isset($context["conversation"])) { $_conversation_ = $context["conversation"]; } else { $_conversation_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_conversation_, "messageNum"), "html", null, true);
            echo "条</span>
                <div class=\"actions pull-right\">
                  <a class=\"delete-conversation-btn text-muted\" href=\"javascript:\" data-url=\"";
            // line 37
            if (isset($context["conversation"])) { $_conversation_ = $context["conversation"]; } else { $_conversation_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("message_conversation_delete", array("conversationId" => $this->getAttribute($_conversation_, "id"))), "html", null, true);
            echo "\">删除</a>
                  <span class=\"text-muted mhm\">|</span> 
                </div>
              </div>
            </div>
          </li>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 44
            echo "          <li class=\"empty\">暂无私信</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['conversation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "      </ul>

      ";
        // line 48
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "paginator", array(0 => $_paginator_), "method"), "html", null, true);
        echo "

    </div><!-- /panel -->
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Message:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 48,  147 => 46,  140 => 44,  127 => 37,  121 => 35,  116 => 34,  111 => 31,  104 => 29,  101 => 28,  95 => 26,  88 => 25,  84 => 23,  80 => 22,  72 => 19,  66 => 18,  61 => 17,  55 => 16,  47 => 11,  41 => 7,  38 => 6,  31 => 3,  26 => 4,);
    }
}
