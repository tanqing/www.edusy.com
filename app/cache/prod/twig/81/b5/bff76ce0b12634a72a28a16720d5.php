<?php

/* TopxiaAdminBundle:Group:thread.html.twig */
class __TwigTemplate_81b5bff76ce0b12634a72a28a16720d5 extends Twig_Template
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
        $context["menu"] = "thread";
        // line 4
        $context["script_controller"] = "group/thread";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "话题管理";
    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        // line 6
        echo "
  <div class=\"page-header\">
    <h1>话题管理</h1>
  </div>

  <form  class=\"form-inline well well-sm\" action=\"\" method=\"get\" novalidate>

    <div class=\"form-group\">
      <select class=\"form-control\" name=\"status\">
        ";
        // line 15
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getDict("groupstatus"), $this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request"), "query"), "get", array(0 => "status"), "method"), "话题状态");
        echo "
      </select>
    </div>

    <div class=\"form-group\">
      <input class=\"form-control\" type=\"text\" placeholder=\"所属小组\" name=\"groupName\" value=\"";
        // line 20
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "request"), "get", array(0 => "groupName"), "method"), "html", null, true);
        echo "\">
    </div>

    <div class=\"form-group\">
      <input class=\"form-control\" type=\"text\" placeholder=\"话题名称关键词\" name=\"title\" value=\"";
        // line 24
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "request"), "get", array(0 => "title"), "method"), "html", null, true);
        echo "\">
    </div>

    <div class=\"form-group\">
      <input class=\"form-control\" type=\"text\" placeholder=\"创建者\" name=\"userName\" value=\"";
        // line 28
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "request"), "get", array(0 => "userName"), "method"), "html", null, true);
        echo "\">
    </div>
    
    <button class=\"btn btn-primary\">搜索</button>
  </form>
  ";
        // line 33
        if (isset($context["threadinfo"])) { $_threadinfo_ = $context["threadinfo"]; } else { $_threadinfo_ = null; }
        if ($_threadinfo_) {
            // line 34
            echo "  <form method=\"post\" id=\"thread-form\">

      <table class=\"table table-striped table-hover\" id=\"thread-table\">

        <thead>
        <tr>
          <th width=\"7%\"><input type=\"checkbox\"  data-role=\"batch-select\"/> 编号</th>
          <th width=\"43%\">名称</th>
          <th>创建者</th>
          <th>所属小组</th>
          <th>回复数</th>
          <th>状态</th>
          <th>操作</th>
        </tr>
        </thead>

        <tbody>
          ";
            // line 51
            if (isset($context["threadinfo"])) { $_threadinfo_ = $context["threadinfo"]; } else { $_threadinfo_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_threadinfo_);
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
            foreach ($context['_seq'] as $context["_key"] => $context["thread"]) {
                echo "  
          ";
                // line 52
                if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
                $this->env->loadTemplate("TopxiaAdminBundle:Group:thread-table-tr.html.twig")->display(array_merge($context, array("thread" => $_thread_)));
                // line 53
                echo "        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thread'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "        </tbody>

        <tr>  

          <td><label class=\"checkbox-inline\"><input type=\"checkbox\" data-role=\"batch-select\"> 全选</label>
          </td> 

          <td>   
           <input type=\"hidden\" id=\"batchDeleteThread\" value=\"";
            // line 62
            echo $this->env->getExtension('routing')->getPath("admin_groupThread_batch_delete");
            echo "\">
           
           <button id=\"deleteThread\" data-submiting-text=\"正在删除\" type=\"button\" class=\"btn btn-default btn-sm\"
           >删除话题</button>
 
          </td>

        </tr>

       </table>

       <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->renderCsrfToken("site"), "html", null, true);
            echo "\">

   </form>
   ";
        } else {
            // line 77
            echo "      <div class=\"empty\">暂无话题！</div>
   ";
        }
        // line 79
        echo "   <div class=\"pull-right\">
 ";
        // line 80
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "paginator", array(0 => $_paginator_), "method"), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Group:thread.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 80,  181 => 79,  177 => 77,  170 => 73,  156 => 62,  146 => 54,  132 => 53,  129 => 52,  109 => 51,  90 => 34,  87 => 33,  78 => 28,  70 => 24,  62 => 20,  53 => 15,  42 => 6,  39 => 5,  33 => 3,  28 => 4,  26 => 2,);
    }
}
