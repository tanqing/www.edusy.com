<?php

/* TopxiaAdminBundle:User:user-approve-modal.html.twig */
class __TwigTemplate_90b6adfd3a3afcedd580fbec7f2ede1c extends Twig_Template
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
        // line 3
        $context["modalSize"] = "large";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "用户认证审核";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "
<form id=\"approve-form\" class=\"form-horizontal\" method=\"post\" action=\"";
        // line 8
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_approval_approve", array("id" => $this->getAttribute($_user_, "id"))), "html", null, true);
        echo "\">

  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\">
      <label for=\"nickname\">用户名</label>
    </div>
    <div style=\"margin-top: 7px;\">
    ";
        // line 15
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_user_, "nickname"), "html", null, true);
        echo "
    </div>
  </div>

   <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\">
      <label for=\"truename\">真实姓名</label>
    </div>
    <div style=\"margin-top: 7px;\">
      ";
        // line 24
        if (isset($context["userApprovalInfo"])) { $_userApprovalInfo_ = $context["userApprovalInfo"]; } else { $_userApprovalInfo_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_userApprovalInfo_, "truename"), "html", null, true);
        echo "
    </div>
  </div>

  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\">
      <label for=\"idcard\">身份证号码</label>
    </div>
    <div style=\"margin-top: 7px;\">
      ";
        // line 33
        if (isset($context["userApprovalInfo"])) { $_userApprovalInfo_ = $context["userApprovalInfo"]; } else { $_userApprovalInfo_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_userApprovalInfo_, "idcard"), "html", null, true);
        echo "
    </div>
  </div>

  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\">
      <label for=\"faceImg\">身份证正面照</label>
    </div>
    <div>
     <a href=\"";
        // line 42
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("show_idcard", array("userId" => $this->getAttribute($_user_, "id"), "type" => "face")), "html", null, true);
        echo "\" target=\"_blank\">
     <img src=\"";
        // line 43
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("show_idcard", array("userId" => $this->getAttribute($_user_, "id"), "type" => "face")), "html", null, true);
        echo "\" width=\"400\" />
     </a>
    </div>
  </div>

    <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\">
      <label for=\"faceImg\">身份证反面照</label>
    </div>
    <div>
     <a href=\"";
        // line 53
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("show_idcard", array("userId" => $this->getAttribute($_user_, "id"), "type" => "back")), "html", null, true);
        echo "\" target=\"_blank\">
          <img src=\"";
        // line 54
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("show_idcard", array("userId" => $this->getAttribute($_user_, "id"), "type" => "back")), "html", null, true);
        echo "\" width=\"400\" />
      </a>
    </div>
  </div>
    <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\">
      <label for=\"note\">备注</label>
    </div>
    <div class=\"col-md-8\">
    <textarea id=\"note\" name=\"note\" class=\"form-control\" rows=\"3\"></textarea>
    </div>
  </div>

  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->renderCsrfToken("site"), "html", null, true);
        echo "\">
  <input id=\"form_status\" type=\"hidden\" name=\"form_status\" >
</form>
";
    }

    // line 72
    public function block_footer($context, array $blocks = array())
    {
        // line 73
        echo "<div class=\"pull-right\">

  <button type=\"button\" class=\"btn btn-link\" data-dismiss=\"modal\">取消</button>
  <button type=\"submit\" class=\"btn btn-danger user-approve-btn\" data-toggle=\"form-submit\" data-status='fail' data-target=\"#approve-form\">审核失败</button>
  <button type=\"submit\" class=\"btn btn-success user-approve-btn\" data-toggle=\"form-submit\" data-status='success' data-target=\"#approve-form\">审核成功</button>


  <script>app.load('user/approve')</script>
    
</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:User:user-approve-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 73,  143 => 72,  135 => 67,  118 => 54,  113 => 53,  99 => 43,  94 => 42,  81 => 33,  68 => 24,  55 => 15,  44 => 8,  41 => 7,  38 => 6,  32 => 5,  27 => 3,);
    }
}
