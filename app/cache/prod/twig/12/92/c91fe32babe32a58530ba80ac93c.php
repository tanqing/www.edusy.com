<?php

/* TopxiaAdminBundle:Group:index.html.twig */
class __TwigTemplate_1292c91fe32babe32a58530ba80ac93c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaAdminBundle:Group:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle:Group:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["menu"] = "group";
        // line 4
        $context["script_controller"] = "group/group";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "小组管理";
    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        // line 6
        echo "  <div class=\"page-header\">
    <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getUrl("group_add");
        echo "\" class=\"btn btn-info btn-sm pull-right\" target=\"_blank\">创建小组</a>
    <h1>小组管理</h1>
  </div>

  <form id=\"message-search-form\" class=\"form-inline well well-sm\" action=\"\" method=\"get\" novalidate>

    <div class=\"form-group\">

      <select class=\"form-control\" name=\"status\">
        ";
        // line 16
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getDict("groupstatus"), $this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request"), "query"), "get", array(0 => "status"), "method"), "小组状态");
        echo "
      </select>

    </div>

    <div class=\"form-group\">
      <input class=\"form-control\" type=\"text\" placeholder=\"小组名\" name=\"title\" value=\"";
        // line 22
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "request"), "get", array(0 => "title"), "method"), "html", null, true);
        echo "\">
    </div>

    <div class=\"form-group\">
      <input class=\"form-control\" type=\"text\" placeholder=\"组长\" name=\"ownerName\" value=\"";
        // line 26
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "request"), "get", array(0 => "ownerName"), "method"), "html", null, true);
        echo "\">
    </div>

    <button class=\"btn btn-primary\">搜索</button>

  </form>
  ";
        // line 32
        if (isset($context["groupinfo"])) { $_groupinfo_ = $context["groupinfo"]; } else { $_groupinfo_ = null; }
        if ($_groupinfo_) {
            // line 33
            echo "  <table class=\"table table-striped table-hover\" id=\"group-table\">
    <thead>
    <tr>
      <th>编号</th>
      <th width=\"20%\">名称</th>
      <th>组长</th>
      <th>成员数</th>
      <th>话题数</th>
      <th>回复数</th>
      <th>状态</th>
      <th>操作</th>
    </tr>
    </thead>
    <tbody>

   ";
            // line 48
            if (isset($context["groupinfo"])) { $_groupinfo_ = $context["groupinfo"]; } else { $_groupinfo_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_groupinfo_);
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
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 49
                echo "
      ";
                // line 50
                if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                $this->env->loadTemplate("TopxiaAdminBundle:Group:table-tr.html.twig")->display(array_merge($context, array("group" => $_group_)));
                // line 51
                echo "
   ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "
    </tbody>

  </table>
  ";
        } else {
            // line 58
            echo "    <div class=\"empty\">暂无小组信息!</div>
  ";
        }
        // line 60
        echo "  <div class=\"pull-right\">
 ";
        // line 61
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "paginator", array(0 => $_paginator_), "method"), "html", null, true);
        echo "
</div><div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
        <h4 class=\"modal-title\" id=\"myModalLabel\">请输入用户昵称</h4>
      </div>          
      <form  class=\"form-horizontal\" method=\"post\" id=\"transfer-group-form\" >
        <div class=\"modal-body\">
              <div class=\"form-group\">
                <label class=\"col-xs-2 control-label\" for=\"user_nickname\">转移给</label>
                <div class=\"col-xs-7 controls\">
                  <input type=\"text\"  id=\"username\" name=\"user[nickname]\" class=\"form-control\"
                  data-url=\"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("group_thread_check_user");
        echo "\" data-display=\"用户昵称\"  placeholder=\"请输入用户昵称\">
                  <div class=\"help-block\" style=\"display:none;\"></div>
                </div>
                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->renderCsrfToken("site"), "html", null, true);
        echo "\">
              </div>
        </div>
        <div class=\"modal-footer\">
              <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">关闭</button>
              <button type=\"submit\" class=\"btn btn-primary\" >确认转移小组</button>
        </div>   
      </form>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Group:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 78,  177 => 75,  158 => 61,  155 => 60,  151 => 58,  144 => 53,  129 => 51,  126 => 50,  123 => 49,  105 => 48,  88 => 33,  85 => 32,  75 => 26,  67 => 22,  57 => 16,  45 => 7,  42 => 6,  39 => 5,  33 => 3,  28 => 4,  26 => 2,);
    }
}
