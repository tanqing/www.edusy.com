<?php

/* TopxiaWebBundle:Settings:profile.html.twig */
class __TwigTemplate_347c8aac31525bcc9c9daf0ad05efd1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaWebBundle:Settings:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Settings:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["script_controller"] = "settings/profile";
        // line 6
        $context["side_nav"] = "profile";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "基础信息 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        // line 9
        echo "
\t";
        // line 10
        $this->env->loadTemplate("TopxiaWebBundle:Settings:profile.html.twig", "65640890")->display(array_merge($context, array("class" => "panel-col")));
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Settings:profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 10,  43 => 9,  40 => 8,  33 => 3,  28 => 6,  26 => 5,);
    }
}


/* TopxiaWebBundle:Settings:profile.html.twig */
class __TwigTemplate_347c8aac31525bcc9c9daf0ad05efd1c_65640890 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaWebBundle:Bootstrap:panel.html.twig");

        $this->blocks = array(
            'heading' => array($this, 'block_heading'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Bootstrap:panel.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_heading($context, array $blocks = array())
    {
        echo "基础信息";
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "\t\t\t
\t\t\t";
        // line 14
        if (isset($context["fromCourse"])) { $_fromCourse_ = $context["fromCourse"]; } else { $_fromCourse_ = null; }
        if ($_fromCourse_) {
            // line 15
            echo "\t\t\t<div class=\"alert alert-info\">设置头衔、自我介绍并保存后，即可开始创建课程。</div>
\t\t\t";
        }
        // line 17
        echo "
\t\t\t<form id=\"user-profile-form\" class=\"form-horizontal\" method=\"post\">
\t\t\t\t";
        // line 19
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "flash_messages", array(), "method"), "html", null, true);
        echo "

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-md-2 control-label\" >昵称</label>
\t\t\t\t\t\t<div class=\"col-md-7 controls\">
\t\t\t\t\t\t<div class=\"control-text\">
\t\t\t\t\t\t\t";
        // line 25
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "user"), "nickname"), "html", null, true);
        echo " ";
        if ($this->env->getExtension('topxia_web_twig')->getSetting("user_partner.nickname_enabled")) {
            echo " <a href=\"";
            echo $this->env->getExtension('routing')->getPath("setting_nickname");
            echo "\">修改</a> ";
        }
        echo "</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t";
        // line 39
        echo "
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-md-2 control-label\" for=\"profile_truename\">姓名</label>
\t\t\t\t\t\t<div class=\"col-md-7 controls\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"profile_truename\" name=\"profile[truename]\" class=\"form-control\" data-widget-cid=\"widget-1\" data-explain=\"\" value=\"";
        // line 43
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($_profile_, "truename", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_profile_, "truename"), "")) : ("")), "html", null, true);
        echo "\">              
\t\t\t\t\t\t\t<div class=\"help-block\" style=\"display:none;\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"help-block approval\">
\t\t\t\t\t\t<label class=\"col-md-2 control-label\" ></label>
\t\t\t\t\t\t\t";
        // line 50
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if (($this->getAttribute($this->getAttribute($_app_, "user"), "approvalStatus") == "approving")) {
            // line 51
            echo "\t\t\t\t\t\t\t\t<p class=\"text-primary\" > 
\t\t\t\t\t\t\t\t\t正在实名认证中，管理员会尽快答复您。
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t";
        } elseif (($this->getAttribute($this->getAttribute($_app_, "user"), "approvalStatus") == "approved")) {
            // line 55
            echo "\t\t\t\t\t\t\t\t<p class=\"text-success\" >
\t\t\t\t\t\t\t\t\t恭喜您，已通过实名认证！
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t";
        } elseif (($this->getAttribute($this->getAttribute($_app_, "user"), "approvalStatus") == "unapprove")) {
            // line 59
            echo "\t\t\t\t\t\t\t\t<p class=\"text-warning\" > 
\t\t\t\t\t\t\t\t\t您尚未实名认证，<strong><a href=\"";
            // line 60
            echo $this->env->getExtension('routing')->getPath("setting_approval_submit");
            echo "\">点此认证</a>。
\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t";
        } elseif (($this->getAttribute($this->getAttribute($_app_, "user"), "approvalStatus") == "approve_fail")) {
            // line 64
            echo "\t\t\t\t\t\t\t\t <p class=\"text-danger\" > 
\t\t\t\t\t\t\t\t\t实名认证审核尚未通过，请参照通知中的信息，修改后重新<strong><a href=\"";
            // line 65
            echo $this->env->getExtension('routing')->getPath("setting_approval_submit");
            echo "\">认证。</a>
\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t </p>
\t\t\t\t\t\t\t";
        }
        // line 69
        echo "\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-md-2 control-label\">性别</label>
\t\t\t\t\t\t<div class=\"col-md-7 controls radios\">
\t\t\t\t\t\t\t<div id=\"profile_gender\">
\t\t\t\t\t\t\t\t<input type=\"radio\" id=\"profile_gender_0\" name=\"profile[gender]\" required=\"required\" value=\"male\" ";
        // line 75
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        if (($this->getAttribute($_profile_, "gender") == "male")) {
            echo "checked=\"checked\"";
        }
        echo ">
\t\t\t\t\t\t\t\t<label for=\"profile_gender_0\" class=\"required\">男</label>
\t\t\t\t\t\t\t\t<input type=\"radio\" id=\"profile_gender_1\" name=\"profile[gender]\" required=\"required\" value=\"female\" ";
        // line 77
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        if (($this->getAttribute($_profile_, "gender") == "female")) {
            echo "checked=\"checked\"";
        }
        echo ">
\t\t\t\t\t\t\t\t<label for=\"profile_gender_1\" class=\"required\">女</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-md-2 control-label\" for=\"profile_idcard\">身份证号</label>
\t\t\t\t\t\t<div class=\"col-md-7 controls radios\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"profile_idcard\" name=\"profile[idcard]\" class=\"form-control\" value=\"";
        // line 86
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($_profile_, "idcard", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_profile_, "idcard"), "")) : ("")), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<div class=\"help-block\" style=\"display:none;\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"profile_mobile\" class=\"col-md-2 control-label\">手机号码</label>
\t\t\t\t\t\t<div class=\"col-md-7 controls\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"profile_mobile\" name=\"profile[mobile]\" class=\"form-control\" data-widget-cid=\"widget-5\" data-explain=\"\" value=\"";
        // line 94
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($_profile_, "mobile", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_profile_, "mobile"), "")) : ("")), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<div class=\"help-block\" style=\"display:none;\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t";
        // line 114
        echo "
\t\t\t\t\t<div class=\"form-group form-forIam-group form-notStudent-group\">
\t\t\t\t\t\t<label class=\"col-md-2 control-label\">公司</label>
\t\t\t\t\t\t<div class=\"col-md-7 controls\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"profile_company\" name=\"profile[company]\" class=\"form-control\" value=\"";
        // line 118
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($_profile_, "company", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_profile_, "company"), "")) : ("")), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<div class=\"help-block\" style=\"display:none;\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group form-forIam-group form-notStudent-group\">
\t\t\t\t\t\t<label class=\"col-md-2 control-label\">职业</label>
\t\t\t\t\t\t<div class=\"col-md-7 controls\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"profile_job\" name=\"profile[job]\" class=\"form-control\" value=\"";
        // line 126
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($_profile_, "job", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_profile_, "job"), "")) : ("")), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<div class=\"help-block\" style=\"display:none;\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-md-2 control-label\">头衔</label>
\t\t\t\t\t\t<div class=\"col-md-7 controls\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"profile_title\" name=\"profile[title]\" class=\"form-control\" value=\"";
        // line 134
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($_profile_, "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_profile_, "title"), "")) : ("")), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<div class=\"help-block\" style=\"display:none;\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-md-2 control-label\">个人签名</label>
\t\t\t\t\t\t<div class=\"col-md-7 controls\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"profile_signature\" name=\"profile[signature]\" class=\"form-control\" value=\"";
        // line 142
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($_profile_, "signature", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_profile_, "signature"), "")) : ("")), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<div class=\"help-block\" style=\"display:none;\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-md-2 control-label\">自我介绍</label>
\t\t\t\t\t\t<div class=\"col-md-7 controls\">
\t\t\t\t\t\t\t<textarea name=\"profile[about]\" rows=\"10\" id=\"profile_about\" class=\"form-control\">";
        // line 150
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($_profile_, "about", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_profile_, "about"), "")) : ("")), "html", null, true);
        echo "</textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-md-2 control-label\">个人主页</label>
\t\t\t\t\t\t<div class=\"col-md-7 controls\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"profile_site\" name=\"profile[site]\" class=\"form-control\" data-widget-cid=\"widget-4\" data-explain=\"\" value=\"";
        // line 157
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($_profile_, "site", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_profile_, "site"), "")) : ("")), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<div class=\"help-block\" style=\"display:none;\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<div class=\"col-md-2 control-label\">
\t\t\t\t\t\t\t<label for=\"weibo\">微博</label> 
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-7 controls\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"weibo\" name=\"profile[weibo]\" class=\"form-control\" data-widget-cid=\"widget-3\" data-explain=\"\" value=\"";
        // line 167
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($_profile_, "weibo", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_profile_, "weibo"), "")) : ("")), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<div class=\"help-block\" style=\"display:none;\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-md-2 control-label\">微信</label>
\t\t\t\t\t\t<div class=\"col-md-7 controls\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"profile_weixin\" name=\"profile[weixin]\" class=\"form-control\" value=\"";
        // line 175
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($_profile_, "weixin", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_profile_, "weixin"), "")) : ("")), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<div class=\"help-block\" style=\"display:none;\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>       

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"profile_qq\" class=\"col-md-2 control-label\">QQ</label>
\t\t\t\t\t\t<div class=\"col-md-7 controls\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"profile_qq\" name=\"profile[qq]\" class=\"form-control\" data-widget-cid=\"widget-2\" data-explain=\"\" value=\"";
        // line 183
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($_profile_, "qq", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_profile_, "qq"), "")) : ("")), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<div class=\"help-block\" style=\"display:none;\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>



\t\t\t\t\t";
        // line 190
        if (isset($context["fields"])) { $_fields_ = $context["fields"]; } else { $_fields_ = null; }
        if ($_fields_) {
            // line 191
            echo "\t\t\t\t\t<hr>
\t\t\t\t\t";
            // line 192
            if (isset($context["fields"])) { $_fields_ = $context["fields"]; } else { $_fields_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_fields_);
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 193
                echo "\t\t\t\t\t";
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                if (($this->getAttribute($_field_, "type") == "text")) {
                    // line 194
                    echo "\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"";
                    // line 195
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "fieldName"), "html", null, true);
                    echo "\" class=\"col-md-2 control-label\">";
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "title"), "html", null, true);
                    echo "</label>
\t\t\t\t\t\t<div class=\"col-md-7 controls\">
\t\t\t\t\t\t\t<textarea id=\"";
                    // line 197
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "fieldName"), "html", null, true);
                    echo "\" name=\"profile[";
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "fieldName"), "html", null, true);
                    echo "]\" class=\"";
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "type"), "html", null, true);
                    echo " form-control\">";
                    if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, (($this->getAttribute($_profile_, $this->getAttribute($_field_, "fieldName"), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_profile_, $this->getAttribute($_field_, "fieldName"), array(), "array"), "")) : ("")), "html", null, true);
                    echo "</textarea>
\t\t\t\t\t\t\t<div class=\"help-block\" style=\"display:none;\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
                } elseif (($this->getAttribute($_field_, "type") == "int")) {
                    // line 202
                    echo "\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"";
                    // line 203
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "fieldName"), "html", null, true);
                    echo "\" class=\"col-md-2 control-label\">";
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "title"), "html", null, true);
                    echo "</label>
\t\t\t\t\t\t<div class=\"col-md-7 controls\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"";
                    // line 205
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "fieldName"), "html", null, true);
                    echo "\" placeholder=\"最大值为9位整数\" name=\"profile[";
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "fieldName"), "html", null, true);
                    echo "]\" class=\"";
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "type"), "html", null, true);
                    echo " form-control\"  value=\"";
                    if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, (($this->getAttribute($_profile_, $this->getAttribute($_field_, "fieldName"), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_profile_, $this->getAttribute($_field_, "fieldName"), array(), "array"), "")) : ("")), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t<div class=\"help-block\" style=\"display:none;\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
                } elseif (($this->getAttribute($_field_, "type") == "float")) {
                    // line 210
                    echo "\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"";
                    // line 211
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "fieldName"), "html", null, true);
                    echo "\" class=\"col-md-2 control-label\">";
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "title"), "html", null, true);
                    echo "</label>
\t\t\t\t\t\t<div class=\"col-md-7 controls\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"";
                    // line 213
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "fieldName"), "html", null, true);
                    echo "\" placeholder=\"保留到2位小数\" name=\"profile[";
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "fieldName"), "html", null, true);
                    echo "]\" class=\"";
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "type"), "html", null, true);
                    echo " form-control\"  value=\"";
                    if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, (($this->getAttribute($_profile_, $this->getAttribute($_field_, "fieldName"), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_profile_, $this->getAttribute($_field_, "fieldName"), array(), "array"), "")) : ("")), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t<div class=\"help-block\" style=\"display:none;\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
                } elseif (($this->getAttribute($_field_, "type") == "date")) {
                    // line 218
                    echo "\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"";
                    // line 219
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "fieldName"), "html", null, true);
                    echo "\" class=\"col-md-2 control-label\">";
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "title"), "html", null, true);
                    echo "</label>
\t\t\t\t\t\t<div class=\"col-md-7 controls\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"";
                    // line 221
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "fieldName"), "html", null, true);
                    echo "\" name=\"profile[";
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "fieldName"), "html", null, true);
                    echo "]\" class=\"";
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "type"), "html", null, true);
                    echo " form-control\" value=\"";
                    if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    if ($this->getAttribute($_profile_, $this->getAttribute($_field_, "fieldName"), array(), "array")) {
                        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
                        if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_profile_, $this->getAttribute($_field_, "fieldName"), array(), "array"), "html", null, true);
                    }
                    echo "\">
\t\t\t\t\t\t\t<div class=\"help-block\" style=\"display:none;\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
                } elseif (($this->getAttribute($_field_, "type") == "varchar")) {
                    // line 226
                    echo "\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"";
                    // line 227
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "fieldName"), "html", null, true);
                    echo "\" class=\"col-md-2 control-label\">";
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "title"), "html", null, true);
                    echo "</label>
\t\t\t\t\t\t<div class=\"col-md-7 controls\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"";
                    // line 229
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "fieldName"), "html", null, true);
                    echo "\" name=\"profile[";
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "fieldName"), "html", null, true);
                    echo "]\" class=\"form-control\" value=\"";
                    if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, (($this->getAttribute($_profile_, $this->getAttribute($_field_, "fieldName"), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_profile_, $this->getAttribute($_field_, "fieldName"), array(), "array"), "")) : ("")), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t<div class=\"help-block\" style=\"display:none;\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 234
                echo "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 235
            echo "\t\t\t\t\t";
        }
        // line 236
        echo "
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-7 col-md-offset-2\">
\t\t\t\t\t\t\t<button id=\"profile-save-btn\" data-submiting-text=\"正在保存\" type=\"submit\" class=\"btn btn-primary\">保存</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->renderCsrfToken("site"), "html", null, true);
        echo "\">
\t\t\t</form>

\t\t";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Settings:profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  546 => 243,  537 => 236,  534 => 235,  528 => 234,  512 => 229,  503 => 227,  500 => 226,  477 => 221,  468 => 219,  465 => 218,  446 => 213,  437 => 211,  434 => 210,  415 => 205,  406 => 203,  403 => 202,  384 => 197,  375 => 195,  372 => 194,  368 => 193,  363 => 192,  360 => 191,  357 => 190,  346 => 183,  334 => 175,  322 => 167,  308 => 157,  297 => 150,  285 => 142,  273 => 134,  261 => 126,  249 => 118,  243 => 114,  234 => 94,  222 => 86,  207 => 77,  199 => 75,  191 => 69,  184 => 65,  181 => 64,  174 => 60,  171 => 59,  165 => 55,  159 => 51,  156 => 50,  145 => 43,  139 => 39,  125 => 25,  115 => 19,  111 => 17,  107 => 15,  104 => 14,  101 => 13,  98 => 12,  92 => 11,  46 => 10,  43 => 9,  40 => 8,  33 => 3,  28 => 6,  26 => 5,);
    }
}
