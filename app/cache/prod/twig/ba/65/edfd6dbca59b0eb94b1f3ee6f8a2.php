<?php

/* TopxiaAdminBundle:LoginRecord:index.html.twig */
class __TwigTemplate_ba65edfd6dbca59b0eb94b1f3ee6f8a2 extends Twig_Template
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
        $context["menu"] = "login_record";
        // line 6
        $context["script_controller"] = "login-record/list";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "登录日志 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        // line 9
        echo "<div class=\"page-header\">
  <h1>登录日志</h1>
</div>

<div class=\"well well-sm\">
  <form id=\"login-record-search-form\" class=\"form-inline\" action=\"\" method=\"get\" novalidate> 

      <div class=\"form-group\">
          <input class=\"form-control\" type=\"text\" id=\"startDate\" name=\"startDateTime\" value=\"";
        // line 17
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request"), "query"), "get", array(0 => "startDateTime"), "method"), "html", null, true);
        echo "\" placeholder=\"起始时间\">
      </div>

      <div class=\"form-group\">
          <input class=\"form-control\" type=\"text\" id=\"endDate\" name=\"endDateTime\" value=\"";
        // line 21
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request"), "query"), "get", array(0 => "endDateTime"), "method"), "html", null, true);
        echo "\" placeholder=\"结束时间\">
      </div>
      <span></span>
      <div class=\"form-group\">
        <input type=\"text\" id=\"nickname\" name=\"nickname\" value=\"";
        // line 25
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request"), "query"), "get", array(0 => "nickname"), "method"), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"用户名\">
      </div>

      <div class=\"form-group\">
        <input type=\"text\" id=\"email\" name=\"email\" value=\"";
        // line 29
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request"), "query"), "get", array(0 => "email"), "method"), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"邮箱\">
      </div>

      <button class=\"btn btn-primary\">搜索</button>
  </form>
</div>



<table id=\"teacher-table\" class=\"table table-striped table-hover\" data-search-form=\"#user-search-form\">
  <thead>
    <tr>
      <th>用户名</th>
      <th>用户邮箱</th>
      <th>登录时间IP</th>
      <th>登录地点</th>
      <th width=\"8%\">查看记录</th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 49
        if (isset($context["logRecords"])) { $_logRecords_ = $context["logRecords"]; } else { $_logRecords_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_logRecords_);
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["logRecord"]) {
            // line 50
            echo "      ";
            if (isset($context["users"])) { $_users_ = $context["users"]; } else { $_users_ = null; }
            if (isset($context["logRecord"])) { $_logRecord_ = $context["logRecord"]; } else { $_logRecord_ = null; }
            $context["user"] = (($this->getAttribute($_users_, $this->getAttribute($_logRecord_, "userId"), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_users_, $this->getAttribute($_logRecord_, "userId"), array(), "array"), null)) : (null));
            // line 51
            echo "      ";
            if (isset($context["logRecord"])) { $_logRecord_ = $context["logRecord"]; } else { $_logRecord_ = null; }
            $this->env->loadTemplate("TopxiaAdminBundle:LoginRecord:table-tr.html.twig")->display(array_merge($context, array("logRecord" => $_logRecord_)));
            // line 52
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['logRecord'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "  </tbody>
</table>
 ";
        // line 55
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "paginator", array(0 => $_paginator_), "method"), "html", null, true);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:LoginRecord:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 55,  142 => 53,  128 => 52,  124 => 51,  119 => 50,  101 => 49,  77 => 29,  69 => 25,  61 => 21,  53 => 17,  43 => 9,  40 => 8,  33 => 3,  28 => 6,  26 => 5,);
    }
}
