<?php

/* TopxiaAdminBundle:System:logs.html.twig */
class __TwigTemplate_a33ce4f5b31e782551cfcfa6d0bf78a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaAdminBundle:System:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle:System:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["menu"] = "logs";
        // line 7
        $context["script_controller"] = "log/list";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "系统日志 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_main($context, array $blocks = array())
    {
        // line 10
        echo "
<div class=\"page-header\"><h1>系统日志</h1></div>

";
        // line 13
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "flash_messages", array(), "method"), "html", null, true);
        echo "

<form class=\"well well-sm form-inline\">

  <div class=\"form-group\">
    <select class=\"form-control\" name=\"level\">
        ";
        // line 19
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getDict("logLevel"), $this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request"), "query"), "get", array(0 => "level"), "method"), "--所有等级--");
        echo "
    </select>
  </div>

  <div class=\"form-group\">
    <input type=\"text\" id=\"startDateTime\" value=\"";
        // line 24
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request"), "query"), "get", array(0 => "startDateTime"), "method"), "html", null, true);
        echo "\" name=\"startDateTime\" class=\"form-control\" placeholder=\"起始时间\" style=\"width:150px;\">
  </div>

  <div class=\"form-group\">
    <input type=\"text\" id=\"endDateTime\" value=\"";
        // line 28
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request"), "query"), "get", array(0 => "endDateTime"), "method"), "html", null, true);
        echo "\" name=\"endDateTime\" class=\"form-control\" placeholder=\"结束时间\" style=\"width:150px;\">
  </div>

  <div class=\"form-group\">
    <input type=\"text\" id=\"module\" name=\"module\" value=\"";
        // line 32
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request"), "query"), "get", array(0 => "module"), "method"), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"模块名\" style=\"width:100px;\">
  </div>

  <div class=\"form-group\">
    <input type=\"text\" id=\"action\" name=\"action\" value=\"";
        // line 36
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request"), "query"), "get", array(0 => "action"), "method"), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"操作名\" style=\"width:100px;\">
  </div>

  <div class=\"form-group\">
    <input type=\"text\" id=\"nickname\" name=\"nickname\" value=\"";
        // line 40
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request"), "query"), "get", array(0 => "nickname"), "method"), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"用户昵称\" style=\"width:120px;\">
  </div>

  <button class=\"btn btn-primary\">搜索</button>

</form>

  <table class=\"table table-hover\" id=\"log-table\">
    <tr>
      <th width=\"15%\">用户</th>
      <th width=\"55%\">操作</th>
      <th width=\"10%\">日志等级</th>
      <th width=\"20%\">时间/IP</th>
    </tr>   
    ";
        // line 54
        if (isset($context["logs"])) { $_logs_ = $context["logs"]; } else { $_logs_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_logs_);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 55
            echo "      ";
            if (isset($context["users"])) { $_users_ = $context["users"]; } else { $_users_ = null; }
            if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
            $context["user"] = (($this->getAttribute($_users_, $this->getAttribute($_log_, "userId"), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_users_, $this->getAttribute($_log_, "userId"), array(), "array"), null)) : (null));
            // line 56
            echo "      <tr>
        <td>
          ";
            // line 58
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            if ($_user_) {
                // line 59
                echo "            ";
                if (isset($context["admin_macro"])) { $_admin_macro_ = $context["admin_macro"]; } else { $_admin_macro_ = null; }
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_admin_macro_, "user_link", array(0 => $_user_), "method"), "html", null, true);
                echo "
          ";
            } else {
                // line 61
                echo "            --
          ";
            }
            // line 63
            echo "        <td>
          <div style=\"word-break: break-all;word-wrap: break-word;\">
            ";
            // line 65
            if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_log_, "message"), "html", null, true);
            echo "
            ";
            // line 66
            if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
            if ($this->getAttribute($_log_, "data")) {
                // line 67
                echo "              <a href=\"javascript:;\" class=\"text-sm text-warning show-data\">查看数据</a>
              <a href=\"javascript:;\" class=\"text-sm text-warning hide-data\" style=\"display:none;\">隐藏数据</a>
              <div class=\"data\" style=\"display:none;\">";
                // line 69
                if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($_log_, "data")), "html", null, true);
                echo "</div>
            ";
            }
            // line 71
            echo "          </div>
          <span class=\"text-muted text-sm\">";
            // line 72
            if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_log_, "module"), "html", null, true);
            echo ".";
            if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_log_, "action"), "html", null, true);
            echo "</span>
        </td>
        <td>";
            // line 74
            if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
            echo $this->getAttribute($this->env->getExtension('topxia_web_twig')->getDict("logLevel:html"), $this->getAttribute($_log_, "level"), array(), "array");
            echo "</td>
        <td>
          <span class=\"\">";
            // line 76
            if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_log_, "createdTime"), "Y-m-d H:i:s"), "html", null, true);
            echo "</span>
          <br />
          <a  class=\"text-muted text-sm\" href=\"http://www.baidu.com/s?wd=";
            // line 78
            if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_log_, "ip"), "html", null, true);
            echo "\" target=\"_blank\">";
            if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_log_, "ip"), "html", null, true);
            echo "</a>
        </td>
      </tr>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 82
            echo "      <tr><td class=\"empty\" colspan=\"20\">无日志记录</tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "  </table>

  ";
        // line 86
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "paginator", array(0 => $_paginator_), "method"), "html", null, true);
        echo "

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 86,  213 => 84,  206 => 82,  193 => 78,  187 => 76,  181 => 74,  172 => 72,  169 => 71,  163 => 69,  159 => 67,  156 => 66,  151 => 65,  147 => 63,  143 => 61,  135 => 59,  132 => 58,  128 => 56,  123 => 55,  117 => 54,  99 => 40,  91 => 36,  83 => 32,  75 => 28,  67 => 24,  58 => 19,  48 => 13,  43 => 10,  40 => 9,  33 => 3,  28 => 7,  26 => 5,);
    }
}
