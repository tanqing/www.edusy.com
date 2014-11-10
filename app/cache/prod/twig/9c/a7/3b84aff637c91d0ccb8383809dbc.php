<?php

/* TopxiaAdminBundle:User:edit-modal.html.twig */
class __TwigTemplate_9ca73b84aff637c91d0ccb8383809dbc extends Twig_Template
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
        echo "编辑用户信息";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "
<form id=\"user-edit-form\" class=\"form-horizontal\" method=\"post\" action=\"";
        // line 8
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_user_edit", array("id" => $this->getAttribute($_user_, "id"))), "html", null, true);
        echo "\">

  <div class=\"row form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"truename\">姓名</label>
    </div>
    <div class=\"col-md-7 controls\">
      <input type=\"text\" id=\"truename\" name=\"truename\" class=\"form-control\" value=\"";
        // line 15
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_profile_, "truename"), "html", null, true);
        echo "\" >
    </div>
  </div>

  <div class=\"row form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"gender\">性别</label>
    </div>
    <div class=\"col-md-7 controls radios\">
      <div id=\"gender\">
        <input type=\"radio\" id=\"gender_0\" name=\"gender\" value=\"male\"
        ";
        // line 26
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        if (($this->getAttribute($_profile_, "gender") == "male")) {
            echo " checked=\"checked\" ";
        }
        echo ">
        <label for=\"gender_0\">男</label>

        <input type=\"radio\" id=\"gender_1\" name=\"gender\" value=\"female\"
        ";
        // line 30
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        if (($this->getAttribute($_profile_, "gender") == "female")) {
            echo " checked=\"checked\" ";
        }
        echo ">
        <label for=\"gender_1\">女</label>
      </div>

    </div>
  </div>

    <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\"> 
        <label for=\"idcard\">身份证号</label>
      </div>
      <div class=\"col-md-7 controls\">
        <input type=\"text\" id=\"idcard\" name=\"idcard\" class=\"form-control\" value=\"";
        // line 42
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_profile_, "idcard"), "html", null, true);
        echo "\">
     </div>
    </div>

    <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\"> 
        <label for=\"mobile\">手机号码</label>
      </div>
      <div class=\"col-md-7 controls\">
        <input type=\"text\" id=\"mobile\" name=\"mobile\" class=\"form-control\" value=\"";
        // line 51
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_profile_, "mobile"), "html", null, true);
        echo "\">
     </div>
    </div>

    <div class=\"row form-group\">
        <div class=\"col-md-2 control-label\"> 
          <label for=\"company\">公司</label>
        </div>
        <div class=\"col-md-7 controls\">
          <input type=\"text\" id=\"company\" name=\"company\" class=\"form-control\" value=\"";
        // line 60
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_profile_, "company"), "html", null, true);
        echo "\">
       </div>
    </div>
    
    <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\"> 
        <label for=\"job\">职业</label>
      </div>
      <div class=\"col-md-7 controls\">
        <input type=\"text\" id=\"job\" name=\"job\" class=\"form-control\" value=\"";
        // line 69
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_profile_, "job"), "html", null, true);
        echo "\">
     </div>
    </div>

    <p></p>
    <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\"> 
        <label for=\"title\">头衔</label>
      </div>
      <div class=\"col-md-7 controls\">
        <input type=\"text\" id=\"title\" name=\"title\" class=\"form-control\" value=\"";
        // line 79
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_profile_, "title"), "html", null, true);
        echo "\">
     </div>
    </div>
    <p></p>
    <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\"> 
        <label for=\"signature\">个人签名</label>
      </div>
      <div class=\"col-md-7 controls\">
        <input type=\"text\" id=\"signature\" name=\"signature\" class=\"form-control\" value=\"";
        // line 88
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_profile_, "signature"), "html", null, true);
        echo "\">
     </div>
    </div>
    <p></p>
    <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\"> 
        <label for=\"about\">自我介绍</label>
      </div>
      <div class=\"col-md-7 controls\">
        <textarea id=\"about\" name=\"about\">";
        // line 97
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_profile_, "about"), "html", null, true);
        echo "</textarea>
      </div>
    </div>
    <p></p>
    <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\"> 
        <label for=\"site\">个人主页</label>
      </div>
      <div class=\"col-md-7 controls\">
        <input type=\"text\" id=\"site\" name=\"site\" class=\"form-control\" value=\"";
        // line 106
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_profile_, "site"), "html", null, true);
        echo "\">
     </div>
    </div>
    <p></p>
  <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\"> 
        <label for=\"weibo\">微博</label>
      </div>
      <div class=\"col-md-7 controls\">
        <input type=\"text\" id=\"weibo\" name=\"weibo\" class=\"form-control\" value=\"";
        // line 115
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_profile_, "weibo"), "html", null, true);
        echo "\">
     </div>
    </div>
    <p></p>
    <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\"> 
        <label for=\"qq\">QQ</label>
      </div>
      <div class=\"col-md-7 controls\">
        <input type=\"text\" id=\"qq\" name=\"qq\" class=\"form-control\" value=\"";
        // line 124
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_profile_, "qq"), "html", null, true);
        echo "\">
     </div>
    </div>
    <p></p>
    <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\"> 
        <label for=\"weixin\">微信</label>
      </div>
      <div class=\"col-md-7 controls\">
        <input type=\"text\" id=\"weixin\" name=\"weixin\" class=\"form-control\" value=\"";
        // line 133
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_profile_, "weixin"), "html", null, true);
        echo "\">
     </div>
    </div> 

    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->renderCsrfToken("site"), "html", null, true);
        echo "\">           

";
        // line 139
        if (isset($context["fields"])) { $_fields_ = $context["fields"]; } else { $_fields_ = null; }
        if ($_fields_) {
            // line 140
            echo "          <hr>
          ";
            // line 141
            if (isset($context["fields"])) { $_fields_ = $context["fields"]; } else { $_fields_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_fields_);
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 142
                echo "          ";
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                if (($this->getAttribute($_field_, "type") == "text")) {
                    // line 143
                    echo "          <div class=\"form-group\">
            <label for=\"";
                    // line 144
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "fieldName"), "html", null, true);
                    echo "\" class=\"col-md-2 control-label\">";
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "title"), "html", null, true);
                    echo "</label>
            <div class=\"col-md-7 controls\">
              <textarea id=\"";
                    // line 146
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "fieldName"), "html", null, true);
                    echo "\" name=\"";
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "fieldName"), "html", null, true);
                    echo "\" class=\"";
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "type"), "html", null, true);
                    echo " form-control\" >";
                    if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, (($this->getAttribute($_profile_, $this->getAttribute($_field_, "fieldName"), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_profile_, $this->getAttribute($_field_, "fieldName"), array(), "array"), "")) : ("")), "html", null, true);
                    echo "</textarea>
              <div class=\"help-block\" style=\"display:none;\"></div>
            </div>
          </div>
          ";
                } elseif (($this->getAttribute($_field_, "type") == "int")) {
                    // line 151
                    echo "          <div class=\"form-group\">
            <label for=\"";
                    // line 152
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "fieldName"), "html", null, true);
                    echo "\" class=\"col-md-2 control-label\">";
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "title"), "html", null, true);
                    echo "</label>
            <div class=\"col-md-7 controls\">
              <input type=\"text\" id=\"";
                    // line 154
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "fieldName"), "html", null, true);
                    echo "\" placeholder=\"最大值为9位整数\" name=\"";
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "fieldName"), "html", null, true);
                    echo "\" class=\"";
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "type"), "html", null, true);
                    echo " form-control\"  value=\"";
                    if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, (($this->getAttribute($_profile_, $this->getAttribute($_field_, "fieldName"), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_profile_, $this->getAttribute($_field_, "fieldName"), array(), "array"), "")) : ("")), "html", null, true);
                    echo "\">
              <div class=\"help-block\" style=\"display:none;\"></div>
            </div>
          </div>
          ";
                } elseif (($this->getAttribute($_field_, "type") == "float")) {
                    // line 159
                    echo "          <div class=\"form-group\">
            <label for=\"";
                    // line 160
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "fieldName"), "html", null, true);
                    echo "\" class=\"col-md-2 control-label\">";
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "title"), "html", null, true);
                    echo "</label>
            <div class=\"col-md-7 controls\">
              <input type=\"text\" id=\"";
                    // line 162
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "fieldName"), "html", null, true);
                    echo "\" placeholder=\"保留到2位小数\" name=\"";
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "fieldName"), "html", null, true);
                    echo "\" class=\"";
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "type"), "html", null, true);
                    echo " form-control\" value=\"";
                    if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, (($this->getAttribute($_profile_, $this->getAttribute($_field_, "fieldName"), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_profile_, $this->getAttribute($_field_, "fieldName"), array(), "array"), "")) : ("")), "html", null, true);
                    echo "\">
              <div class=\"help-block\" style=\"display:none;\"></div>
            </div>
          </div>
          ";
                } elseif (($this->getAttribute($_field_, "type") == "date")) {
                    // line 167
                    echo "          <div class=\"form-group\">
            <label for=\"";
                    // line 168
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "fieldName"), "html", null, true);
                    echo "\" class=\"col-md-2 control-label\">";
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "title"), "html", null, true);
                    echo "</label>
            <div class=\"col-md-7 controls\">
              <input type=\"text\" id=\"";
                    // line 170
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "fieldName"), "html", null, true);
                    echo "\" name=\"";
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "fieldName"), "html", null, true);
                    echo "\" class=\"";
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "type"), "html", null, true);
                    echo " form-control\"   value=\"";
                    if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    if ($this->getAttribute($_profile_, $this->getAttribute($_field_, "fieldName"), array(), "array")) {
                        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
                        if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_profile_, $this->getAttribute($_field_, "fieldName"), array(), "array"), "html", null, true);
                    }
                    echo "\">
              <div class=\"help-block\" style=\"display:none;\"></div>
            </div>
          </div>
          ";
                } elseif (($this->getAttribute($_field_, "type") == "varchar")) {
                    // line 175
                    echo "          <div class=\"form-group\">
            <label for=\"";
                    // line 176
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "fieldName"), "html", null, true);
                    echo "\" class=\"col-md-2 control-label\">";
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "title"), "html", null, true);
                    echo "</label>
            <div class=\"col-md-7 controls\">
              <input type=\"text\" id=\"";
                    // line 178
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "fieldName"), "html", null, true);
                    echo "\" name=\"";
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "fieldName"), "html", null, true);
                    echo "\" class=\"form-control\"  value=\"";
                    if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, (($this->getAttribute($_profile_, $this->getAttribute($_field_, "fieldName"), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_profile_, $this->getAttribute($_field_, "fieldName"), array(), "array"), "")) : ("")), "html", null, true);
                    echo "\">
              <div class=\"help-block\" style=\"display:none;\"></div>
            </div>
          </div>
          ";
                }
                // line 183
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 184
            echo "          ";
        }
        // line 185
        echo "
</form>
";
    }

    // line 189
    public function block_footer($context, array $blocks = array())
    {
        // line 190
        echo "  <button id=\"edit-user-btn\" data-submiting-text=\"正在提交\" type=\"submit\" class=\"btn btn-primary pull-right\" data-toggle=\"form-submit\" data-target=\"#user-edit-form\">保存</button>
  <button type=\"button\" class=\"btn btn-link pull-right\" data-dismiss=\"modal\">取消</button>
  <script>app.load('user/edit-modal')</script>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:User:edit-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  431 => 190,  428 => 189,  422 => 185,  419 => 184,  413 => 183,  397 => 178,  388 => 176,  385 => 175,  362 => 170,  353 => 168,  350 => 167,  331 => 162,  322 => 160,  319 => 159,  300 => 154,  291 => 152,  288 => 151,  269 => 146,  260 => 144,  257 => 143,  253 => 142,  248 => 141,  245 => 140,  242 => 139,  237 => 137,  229 => 133,  216 => 124,  203 => 115,  190 => 106,  177 => 97,  164 => 88,  151 => 79,  137 => 69,  124 => 60,  111 => 51,  98 => 42,  80 => 30,  70 => 26,  55 => 15,  44 => 8,  41 => 7,  38 => 6,  32 => 5,  27 => 3,);
    }
}
