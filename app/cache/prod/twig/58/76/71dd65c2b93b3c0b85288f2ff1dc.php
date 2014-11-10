<?php

/* TopxiaAdminBundle:Message:index.html.twig */
class __TwigTemplate_587671dd65c2b93b3c0b85288f2ff1dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaAdminBundle:User:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle:User:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["script_controller"] = "message/list";
        // line 7
        $context["menu"] = "message";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "私信管理 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_main($context, array $blocks = array())
    {
        // line 10
        echo "  <div class=\"page-header\">
    <h1>私信管理</h1>
  </div>
<div class=\"well well-sm\">
  <form id=\"message-search-form\" class=\"form-inline\" action=\"\" method=\"get\" novalidate> 

      <div class=\"form-group\">
          <input class=\"form-control\" type=\"text\" id=\"startDate\" name=\"startDate\" value=\"";
        // line 17
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request"), "query"), "get", array(0 => "startDate"), "method"), "html", null, true);
        echo "\" placeholder=\"起始时间\">
      </div>

      <div class=\"form-group\">
          <input class=\"form-control\" type=\"text\" id=\"endDate\" name=\"endDate\" value=\"";
        // line 21
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request"), "query"), "get", array(0 => "endDate"), "method"), "html", null, true);
        echo "\" placeholder=\"结束时间\">
      </div>
      <span></span>
      <div class=\"form-group\">
        <input type=\"text\" id=\"nickname\" name=\"nickname\" value=\"";
        // line 25
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request"), "query"), "get", array(0 => "nickname"), "method"), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"发信人昵称\">
      </div>

      <div class=\"form-group\">
        <input type=\"text\" id=\"content\" name=\"content\" value=\"";
        // line 29
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request"), "query"), "get", array(0 => "content"), "method"), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"私信内容关键词\">
      </div>

      <button class=\"btn btn-primary\">搜索</button>
  </form>
</div>

<div id=\"message-table-container\">

  <table class=\"table table-striped table-hover\" id=\"message-table\">
    <thead>
      <tr >
        <th width=\"10%\"> <input type=\"checkbox\"  data-role=\"batch-select\"> 发信人</th>
        <th width=\"10%\">收信人</th>
        <th width=\"45%\">内容</th>
        <th width=\"15%\">发送时间</th>
      </tr>
    </thead>
    <tbody>
      ";
        // line 48
        if (isset($context["messages"])) { $_messages_ = $context["messages"]; } else { $_messages_ = null; }
        if ($_messages_) {
            // line 49
            echo "        ";
            if (isset($context["messages"])) { $_messages_ = $context["messages"]; } else { $_messages_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_messages_);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 50
                echo "          <tr class=\"message-tr\" id=\"message-table-tr-";
                if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_message_, "id"), "html", null, true);
                echo "\">
            <td><input value=\"";
                // line 51
                if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_message_, "id"), "html", null, true);
                echo "\" type=\"checkbox\" data-role=\"batch-item\" >
             ";
                // line 52
                if (isset($context["admin_macro"])) { $_admin_macro_ = $context["admin_macro"]; } else { $_admin_macro_ = null; }
                if (isset($context["users"])) { $_users_ = $context["users"]; } else { $_users_ = null; }
                if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_admin_macro_, "user_link", array(0 => $this->getAttribute($_users_, $this->getAttribute($_message_, "fromId"), array(), "array")), "method"), "html", null, true);
                echo "
            </td>

            <td>";
                // line 55
                if (isset($context["admin_macro"])) { $_admin_macro_ = $context["admin_macro"]; } else { $_admin_macro_ = null; }
                if (isset($context["users"])) { $_users_ = $context["users"]; } else { $_users_ = null; }
                if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_admin_macro_, "user_link", array(0 => $this->getAttribute($_users_, $this->getAttribute($_message_, "toId"), array(), "array")), "method"), "html", null, true);
                echo " </td>
            <td>
                <div class=\"short-long-text\">
                  <div class=\"short-text text-sm text-muted\">";
                // line 58
                if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
                echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($_message_, "content"), 60);
                echo " <span class=\"trigger\">(展开)</span></div>
                  <div class=\"long-text\">";
                // line 59
                if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_message_, "content"), "html", null, true);
                echo " <span class=\"trigger\">(收起)</span></div>
                </div>
            </td>
            <td>";
                // line 62
                if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_message_, "createdTime"), "Y-n-d H:i"), "html", null, true);
                echo "</td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "      ";
        } else {
            // line 66
            echo "        <tr><td colspan=\"20\"><div class=\"empty\">暂无私信记录</div></td></tr>
      ";
        }
        // line 68
        echo "      
    </tbody>
  </table>
  <div>
    <label class=\"checkbox-inline\"><input type=\"checkbox\" data-role=\"batch-select\"> 全选</label>
    <button class=\"btn btn-default btn-sm mlm\" data-role=\"batch-delete\"  data-name=\"私信\" data-url=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("admin_message_delete_messages");
        echo "\">删除</button>
  </div>

</div>

  <div>
    ";
        // line 79
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "paginator", array(0 => $_paginator_), "method"), "html", null, true);
        echo "
  </div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Message:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 79,  173 => 73,  166 => 68,  162 => 66,  159 => 65,  149 => 62,  142 => 59,  137 => 58,  128 => 55,  119 => 52,  114 => 51,  108 => 50,  102 => 49,  99 => 48,  76 => 29,  68 => 25,  60 => 21,  52 => 17,  43 => 10,  40 => 9,  33 => 3,  28 => 7,  26 => 5,);
    }
}
