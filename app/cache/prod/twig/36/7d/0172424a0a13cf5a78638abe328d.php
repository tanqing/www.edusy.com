<?php

/* TopxiaAdminBundle:Navigation:navigation-modal.html.twig */
class __TwigTemplate_367d0172424a0a13cf5a78638abe328d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::bootstrap-modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
        $context["block"] = ((array_key_exists("block", $context)) ? (_twig_default_filter($_block_, null)) : (null));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        // line 5
        if (isset($context["navigation"])) { $_navigation_ = $context["navigation"]; } else { $_navigation_ = null; }
        if ((($this->getAttribute($_navigation_, "id") == 0) && ($this->getAttribute($_navigation_, "type") == "top"))) {
            // line 6
            echo "新增顶部导航
";
        } elseif ((($this->getAttribute($_navigation_, "id") > 0) && ($this->getAttribute($_navigation_, "type") == "top"))) {
            // line 8
            echo "编辑顶部导航
";
        } elseif ((($this->getAttribute($_navigation_, "id") == 0) && ($this->getAttribute($_navigation_, "type") == "foot"))) {
            // line 10
            echo "新增底部导航
";
        } elseif ((($this->getAttribute($_navigation_, "id") > 0) && ($this->getAttribute($_navigation_, "type") == "foot"))) {
            // line 12
            echo "编辑底部导航
";
        }
        // line 14
        echo "
";
    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        // line 18
        echo "
  <form class=\"form-horizontal\" id=\"navigation-form\"
  ";
        // line 20
        if (isset($context["navigation"])) { $_navigation_ = $context["navigation"]; } else { $_navigation_ = null; }
        if (($this->getAttribute($_navigation_, "id") == 0)) {
            // line 21
            echo "    action=\"";
            echo $this->env->getExtension('routing')->getPath("admin_navigation_create");
            echo "\"
  ";
        } else {
            // line 23
            echo "    action=\"";
            if (isset($context["navigation"])) { $_navigation_ = $context["navigation"]; } else { $_navigation_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_navigation_update", array("id" => $this->getAttribute($_navigation_, "id"))), "html", null, true);
            echo "\" 
  ";
        }
        // line 25
        echo " method=\"post\">

  ";
        // line 27
        if (isset($context["parentNavigation"])) { $_parentNavigation_ = $context["parentNavigation"]; } else { $_parentNavigation_ = null; }
        if ($_parentNavigation_) {
            // line 28
            echo "  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\"><label>上级导航</label></div>
    <div class=\"col-md-8 controls\"> 
      ";
            // line 31
            if (isset($context["parentNavigation"])) { $_parentNavigation_ = $context["parentNavigation"]; } else { $_parentNavigation_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_parentNavigation_, "name"), "html", null, true);
            echo "
      <div class=\"help-block\">请注意：增加子导航后，对应的上级导航链接将不起作用。</div>
    </div>
  </div>
  ";
        }
        // line 36
        echo "

 <div class=\"row form-group\">
  <div class=\"col-md-3 control-label\"><label for=\"name\">名称</label></div>
  <div class=\"col-md-8 controls\"> 
    <input class=\"form-control\" type=\"text\" id=\"name\" value=\"";
        // line 41
        if (isset($context["navigation"])) { $_navigation_ = $context["navigation"]; } else { $_navigation_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_navigation_, "name"), "html", null, true);
        echo "\" name=\"name\"></div>
</div>
<p></p>

<div class=\"row form-group\">
  <div class=\"col-md-3 control-label\"><label for=\"url\">链接地址</label></div>
  <div class=\"col-md-8 controls\"> <input class=\"form-control\" type=\"text\" id=\"url\" value=\"";
        // line 47
        if (isset($context["navigation"])) { $_navigation_ = $context["navigation"]; } else { $_navigation_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_navigation_, "url"), "html", null, true);
        echo "\" name=\"url\" ></div>
</div>

<p></p>


<div class=\"row form-group\">
  <div class=\"col-md-3 control-label\"><label for=\"sequence\">显示顺序</label>
   <p class=\"help-block\">(从左至右排序,请填数字)</p>
 </div>
  <div class=\"col-md-8 controls\"> <input class=\"form-control\" type=\"text\" id=\"sequence\" value=\"";
        // line 57
        if (isset($context["navigation"])) { $_navigation_ = $context["navigation"]; } else { $_navigation_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_navigation_, "sequence"), "html", null, true);
        echo "\" name=\"sequence\" ></div>
</div>


<input type=\"hidden\" name=\"type\" value=\"";
        // line 61
        if (isset($context["navigation"])) { $_navigation_ = $context["navigation"]; } else { $_navigation_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_navigation_, "type"), "html", null, true);
        echo "\" >

<div class=\"row form-group\">
          <div class=\"col-md-3 control-label\"><label>新开窗口</label></div>
          <div class=\"col-md-8 controls radios\"> 
            <div id=\"isNewWin\">
              <input type=\"radio\" name=\"isNewWin\"  value=\"0\"
               ";
        // line 68
        if (isset($context["navigation"])) { $_navigation_ = $context["navigation"]; } else { $_navigation_ = null; }
        if (($this->getAttribute($_navigation_, "isNewWin") == 0)) {
            echo " checked=\"checked\" ";
        }
        echo ">
              <label >否</label>
              <input type=\"radio\" name=\"isNewWin\"  value=\"1\"
              ";
        // line 71
        if (isset($context["navigation"])) { $_navigation_ = $context["navigation"]; } else { $_navigation_ = null; }
        if (($this->getAttribute($_navigation_, "isNewWin") == 1)) {
            echo " checked=\"checked\" ";
        }
        echo ">
              <label >是</label>
            </div>
          </div>
</div>

<div class=\"row form-group\">
      <div class=\"col-md-3 control-label\">
        <label>状态</label>
      </div>
      <div class=\"col-md-8 controls radios\">
        <div id=\"isOpen\">
          <input type=\"radio\" name=\"isOpen\"  value=\"1\" 
          ";
        // line 84
        if (isset($context["navigation"])) { $_navigation_ = $context["navigation"]; } else { $_navigation_ = null; }
        if (($this->getAttribute($_navigation_, "isOpen") == 1)) {
            echo " checked=\"checked\" ";
        }
        echo ">
          <label>开启</label>
          <input type=\"radio\" name=\"isOpen\"  value=\"0\"
           ";
        // line 87
        if (isset($context["navigation"])) { $_navigation_ = $context["navigation"]; } else { $_navigation_ = null; }
        if (($this->getAttribute($_navigation_, "isOpen") == 0)) {
            echo " checked=\"checked\" ";
        }
        echo ">
          <label>关闭</label>
        </div>
      </div>
</div>
<input type=\"hidden\" name=\"parentId\" value=\"";
        // line 92
        if (isset($context["parentNavigation"])) { $_parentNavigation_ = $context["parentNavigation"]; } else { $_parentNavigation_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($_parentNavigation_, "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_parentNavigation_, "id"), 0)) : (0)), "html", null, true);
        echo "\">
<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->renderCsrfToken("site"), "html", null, true);
        echo "\">

  </form>

  <script type=\"text/javascript\">
  ";
        // line 98
        if (isset($context["navigation"])) { $_navigation_ = $context["navigation"]; } else { $_navigation_ = null; }
        if (($this->getAttribute($_navigation_, "id") == 0)) {
            // line 99
            echo "    app.load('navigation/create-modal')
  ";
        } else {
            // line 101
            echo "    app.load('navigation/edit-modal')
  ";
        }
        // line 103
        echo "  </script>
  
";
    }

    // line 107
    public function block_footer($context, array $blocks = array())
    {
        // line 108
        echo "  <button type=\"button\" class=\"btn btn-link\" data-dismiss=\"modal\">取消</button>
  <button id=\"navigation-save-btn\" data-submiting-text=\"正在提交\" type=\"submit\" class=\"btn btn-primary\" data-toggle=\"form-submit\" data-target=\"#navigation-form\">保存</button>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Navigation:navigation-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 108,  232 => 107,  226 => 103,  222 => 101,  218 => 99,  215 => 98,  207 => 93,  202 => 92,  191 => 87,  182 => 84,  163 => 71,  154 => 68,  143 => 61,  135 => 57,  121 => 47,  111 => 41,  104 => 36,  95 => 31,  90 => 28,  87 => 27,  83 => 25,  76 => 23,  70 => 21,  67 => 20,  63 => 18,  60 => 17,  55 => 14,  51 => 12,  47 => 10,  43 => 8,  39 => 6,  36 => 5,  33 => 4,  27 => 2,);
    }
}
