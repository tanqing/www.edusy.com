<?php

/* TopxiaAdminBundle:System:auth.html.twig */
class __TwigTemplate_96082be7c969371aae8ad27d63d9fd01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaAdminBundle:System:user_set.layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'maincontent' => array($this, 'block_maincontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle:System:user_set.layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["submenu"] = "auth";
        // line 6
        $context["script_controller"] = "setting/auth";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "注册设置 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 8
    public function block_maincontent($context, array $blocks = array())
    {
        // line 9
        echo "
<div class=\"page-header\"><h1>注册设置</h1></div>

";
        // line 12
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "flash_messages", array(), "method"), "html", null, true);
        echo "

<form class=\"form-horizontal\" method=\"post\" novalidate>
  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label >新用户注册</label>
    </div>
    <div class=\"controls col-md-8 radios\">
      ";
        // line 20
        if (isset($context["auth"])) { $_auth_ = $context["auth"]; } else { $_auth_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->radios("register_mode", array("opened" => "开启", "closed" => "关闭"), $this->getAttribute($_auth_, "register_mode"));
        echo "
    </div>
  </div>

  <fieldset>
    <legend>新用户激活邮件设置</legend>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"email_activation_title\" >新用户激活邮件标题</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"email_activation_title\" name=\"email_activation_title\" class=\"form-control\" value=\"";
        // line 32
        if (isset($context["auth"])) { $_auth_ = $context["auth"]; } else { $_auth_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_auth_, "email_activation_title"), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"email_activation_body\">新用户激活邮件内容</label>
      </div>
      <div class=\"controls col-md-8\">
        <textarea id=\"email_activation_body\" name=\"email_activation_body\" class=\"form-control\" rows=\"5\">";
        // line 41
        if (isset($context["auth"])) { $_auth_ = $context["auth"]; } else { $_auth_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_auth_, "email_activation_body"), "html", null, true);
        echo "</textarea>
        <div class=\"help-block\">
          ";
        // line 51
        echo "
          <div>变量说明：</div>
          <ul>
            <li>{{nickname}} 为接收方用户昵称</li>
            <li>{{sitename}} 为网站名称</li>
            <li>{{siteurl}} 为网站的地址</li>
            <li>{{verifyurl}} 为邮箱验证地址</li>
          </ul>
          ";
        echo "
        </div>
      </div>
    </div>
  </fieldset>
  <fieldset>
    <legend>注册信息字段设置</legend>
      <div class=\"row\">
        <div class=\"col-md-3 control-label\">
          <label for=\"email_activation_body\">注册时需提供</label>
        </div>
        <div class=\"controls col-md-8 \"  id=\"show-list\">
        ";
        // line 63
        if (isset($context["auth"])) { $_auth_ = $context["auth"]; } else { $_auth_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_auth_, "registerSort"));
        foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
            // line 64
            echo "            ";
            if (isset($context["sort"])) { $_sort_ = $context["sort"]; } else { $_sort_ = null; }
            if (($_sort_ == "email")) {
                // line 65
                echo "            <button type=\"button\" class=\"btn btn-default btn-xs\">邮箱地址</button>
            ";
            }
            // line 67
            echo "            ";
            if (isset($context["sort"])) { $_sort_ = $context["sort"]; } else { $_sort_ = null; }
            if (($_sort_ == "nickname")) {
                // line 68
                echo "            <button type=\"button\" class=\"btn btn-default btn-xs\">昵称</button>
            ";
            }
            // line 70
            echo "            ";
            if (isset($context["sort"])) { $_sort_ = $context["sort"]; } else { $_sort_ = null; }
            if (($_sort_ == "password")) {
                // line 71
                echo "            <button type=\"button\" class=\"btn btn-default btn-xs\">密码</button>
            ";
            }
            // line 73
            echo "            ";
            if (isset($context["sort"])) { $_sort_ = $context["sort"]; } else { $_sort_ = null; }
            if (($_sort_ == "truename")) {
                // line 74
                echo "            <button type=\"button\" class=\"btn btn-default btn-xs\">姓名</button>
            ";
            }
            // line 76
            echo "            ";
            if (isset($context["sort"])) { $_sort_ = $context["sort"]; } else { $_sort_ = null; }
            if (($_sort_ == "idcard")) {
                // line 77
                echo "            <button type=\"button\" class=\"btn btn-default btn-xs\">身份证号码</button>
            ";
            }
            // line 79
            echo "             ";
            if (isset($context["sort"])) { $_sort_ = $context["sort"]; } else { $_sort_ = null; }
            if (($_sort_ == "mobile")) {
                // line 80
                echo "            <button type=\"button\" class=\"btn btn-default btn-xs\">手机号码</button>
            ";
            }
            // line 82
            echo "             ";
            if (isset($context["sort"])) { $_sort_ = $context["sort"]; } else { $_sort_ = null; }
            if (($_sort_ == "job")) {
                // line 83
                echo "            <button type=\"button\" class=\"btn btn-default btn-xs\">职业</button>
            ";
            }
            // line 85
            echo "             ";
            if (isset($context["sort"])) { $_sort_ = $context["sort"]; } else { $_sort_ = null; }
            if (($_sort_ == "gender")) {
                // line 86
                echo "            <button type=\"button\" class=\"btn btn-default btn-xs\">性别</button>
            ";
            }
            // line 88
            echo "             ";
            if (isset($context["sort"])) { $_sort_ = $context["sort"]; } else { $_sort_ = null; }
            if (($_sort_ == "company")) {
                // line 89
                echo "            <button type=\"button\" class=\"btn btn-default btn-xs\">公司</button>
            ";
            }
            // line 91
            echo "            ";
            if (isset($context["userFields"])) { $_userFields_ = $context["userFields"]; } else { $_userFields_ = null; }
            if ($_userFields_) {
                // line 92
                echo "                ";
                if (isset($context["userFields"])) { $_userFields_ = $context["userFields"]; } else { $_userFields_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($_userFields_);
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 93
                    echo "                      ";
                    if (isset($context["sort"])) { $_sort_ = $context["sort"]; } else { $_sort_ = null; }
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    if (($_sort_ == $this->getAttribute($_field_, "fieldName"))) {
                        // line 94
                        echo "                           <button type=\"button\" class=\"btn btn-default btn-xs\">";
                        if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_field_, "title"), "html", null, true);
                        echo "</button>
                     ";
                    }
                    // line 96
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 97
                echo "            ";
            }
            // line 98
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "        <div class=\"pull-right \"><a href=\"javascript:\" id=\"show-list-btn\">编辑 <span class=\"
  glyphicon glyphicon-chevron-down\"></span></a></div>
      </div>
        <div  class=\"controls col-md-8 \" id=\"show-register-list\">
          <div class=\"form-group \"><ul class=\"sortable-list\" data-role=\"list\">
          </div>
            <div class=\"form-group\"><ul class=\"register-list sortable-list\" data-role=\"list\">
            ";
        // line 106
        if (isset($context["auth"])) { $_auth_ = $context["auth"]; } else { $_auth_ = null; }
        if ($this->getAttribute($_auth_, "registerFieldNameArray")) {
            // line 107
            echo "            ";
            if (isset($context["auth"])) { $_auth_ = $context["auth"]; } else { $_auth_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_auth_, "registerFieldNameArray"));
            foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
                // line 108
                echo "               ";
                if (isset($context["sort"])) { $_sort_ = $context["sort"]; } else { $_sort_ = null; }
                if (($_sort_ == "email")) {
                    // line 109
                    echo "                <li class=\"list-group-item clearfix\" data-role=\"item\" >
                <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
                &nbsp;<input type=\"checkbox\" checked=true onclick=\"return false\" name=\"registerSort[]\" value=\"email\"></input><input type=\"hidden\"  name=\"registerFieldNameArray[]\" value=\"email\"></input> 邮箱地址<span class=\"text-muted\"> (系统必需，不可取消)</span>
                </li>
                
               ";
                }
                // line 115
                echo "               ";
                if (isset($context["sort"])) { $_sort_ = $context["sort"]; } else { $_sort_ = null; }
                if (($_sort_ == "nickname")) {
                    // line 116
                    echo "                <li class=\"list-group-item clearfix\" data-role=\"item\" >
                  <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
                  &nbsp;<input type=\"checkbox\" checked=true onclick=\"return false\" name=\"registerSort[]\" value=\"nickname\"></input><input type=\"hidden\"  name=\"registerFieldNameArray[]\" value=\"nickname\"></input> 昵称<span class=\"text-muted\"> (系统必需，不可取消)</span>
                </li>
               ";
                }
                // line 121
                echo "               ";
                if (isset($context["sort"])) { $_sort_ = $context["sort"]; } else { $_sort_ = null; }
                if (($_sort_ == "password")) {
                    // line 122
                    echo "                <li class=\"list-group-item clearfix\" data-role=\"item\" >
                  <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
                  &nbsp;<input type=\"checkbox\" checked=true onclick=\"return false\" name=\"registerSort[]\" value=\"password\"></input><input type=\"hidden\"  name=\"registerFieldNameArray[]\" value=\"password\"></input><input type=\"hidden\"  name=\"registerSort[]\" value=\"confirmPassword\"></input><input type=\"hidden\"  name=\"registerFieldNameArray[]\" value=\"confirmPassword\"></input> 密码<span class=\"text-muted\"> (系统必需，不可取消)</span>
                </li>
               ";
                }
                // line 127
                echo "               ";
                if (isset($context["sort"])) { $_sort_ = $context["sort"]; } else { $_sort_ = null; }
                if (($_sort_ == "truename")) {
                    // line 128
                    echo "                <li class=\"list-group-item clearfix\" data-role=\"item\" >
                  <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
                  &nbsp;<input type=\"checkbox\" ";
                    // line 130
                    if (isset($context["auth"])) { $_auth_ = $context["auth"]; } else { $_auth_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($_auth_, "registerSort"));
                    foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
                        if (isset($context["sort"])) { $_sort_ = $context["sort"]; } else { $_sort_ = null; }
                        if (($_sort_ == "truename")) {
                            echo "checked=true";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " name=\"registerSort[]\" value=\"truename\"></input><input type=\"hidden\"  name=\"registerFieldNameArray[]\" value=\"truename\"></input> 姓名
                </li>
               ";
                }
                // line 133
                echo "               ";
                if (isset($context["sort"])) { $_sort_ = $context["sort"]; } else { $_sort_ = null; }
                if (($_sort_ == "mobile")) {
                    // line 134
                    echo "                <li class=\"list-group-item clearfix\" data-role=\"item\" >
                  <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
                  &nbsp;<input type=\"checkbox\" ";
                    // line 136
                    if (isset($context["auth"])) { $_auth_ = $context["auth"]; } else { $_auth_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($_auth_, "registerSort"));
                    foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
                        if (isset($context["sort"])) { $_sort_ = $context["sort"]; } else { $_sort_ = null; }
                        if (($_sort_ == "mobile")) {
                            echo "checked=true";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " name=\"registerSort[]\" value=\"mobile\"></input><input type=\"hidden\"  name=\"registerFieldNameArray[]\" value=\"mobile\"></input> 手机号码<span class=\"text-muted\"> (带格式校检)</span>
                </li>
               ";
                }
                // line 139
                echo "               ";
                if (isset($context["sort"])) { $_sort_ = $context["sort"]; } else { $_sort_ = null; }
                if (($_sort_ == "idcard")) {
                    // line 140
                    echo "                <li class=\"list-group-item clearfix\" data-role=\"item\" >
                  <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
                  &nbsp;<input type=\"checkbox\" ";
                    // line 142
                    if (isset($context["auth"])) { $_auth_ = $context["auth"]; } else { $_auth_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($_auth_, "registerSort"));
                    foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
                        if (isset($context["sort"])) { $_sort_ = $context["sort"]; } else { $_sort_ = null; }
                        if (($_sort_ == "idcard")) {
                            echo "checked=true";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " name=\"registerSort[]\" value=\"idcard\"></input><input type=\"hidden\"  name=\"registerFieldNameArray[]\" value=\"idcard\"></input> 身份证号码<span class=\"text-muted\"> (带格式校检)</span>
                </li>
               ";
                }
                // line 145
                echo "               ";
                if (isset($context["sort"])) { $_sort_ = $context["sort"]; } else { $_sort_ = null; }
                if (($_sort_ == "gender")) {
                    // line 146
                    echo "                <li class=\"list-group-item clearfix\" data-role=\"item\" >
                  <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
                  &nbsp;<input type=\"checkbox\" ";
                    // line 148
                    if (isset($context["auth"])) { $_auth_ = $context["auth"]; } else { $_auth_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($_auth_, "registerSort"));
                    foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
                        if (isset($context["sort"])) { $_sort_ = $context["sort"]; } else { $_sort_ = null; }
                        if (($_sort_ == "gender")) {
                            echo "checked=true";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " name=\"registerSort[]\" value=\"gender\"></input><input type=\"hidden\"  name=\"registerFieldNameArray[]\" value=\"gender\"></input> 性别
                </li>
               ";
                }
                // line 151
                echo "               ";
                if (isset($context["sort"])) { $_sort_ = $context["sort"]; } else { $_sort_ = null; }
                if (($_sort_ == "job")) {
                    // line 152
                    echo "                <li class=\"list-group-item clearfix\" data-role=\"item\" >
                  <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
                  &nbsp;<input type=\"checkbox\" ";
                    // line 154
                    if (isset($context["auth"])) { $_auth_ = $context["auth"]; } else { $_auth_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($_auth_, "registerSort"));
                    foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
                        if (isset($context["sort"])) { $_sort_ = $context["sort"]; } else { $_sort_ = null; }
                        if (($_sort_ == "job")) {
                            echo "checked=true";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " name=\"registerSort[]\" value=\"job\"></input><input type=\"hidden\"  name=\"registerFieldNameArray[]\" value=\"job\"></input> 职业
                </li>
               ";
                }
                // line 157
                echo "               ";
                if (isset($context["sort"])) { $_sort_ = $context["sort"]; } else { $_sort_ = null; }
                if (($_sort_ == "company")) {
                    // line 158
                    echo "                <li class=\"list-group-item clearfix\" data-role=\"item\" >
                  <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
                  &nbsp;<input type=\"checkbox\"  ";
                    // line 160
                    if (isset($context["auth"])) { $_auth_ = $context["auth"]; } else { $_auth_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($_auth_, "registerSort"));
                    foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
                        if (isset($context["sort"])) { $_sort_ = $context["sort"]; } else { $_sort_ = null; }
                        if (($_sort_ == "company")) {
                            echo "checked=true";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " name=\"registerSort[]\" value=\"company\"></input><input type=\"hidden\"  name=\"registerFieldNameArray[]\" value=\"company\"></input> 公司
                </li>            
               ";
                }
                // line 163
                echo "               ";
                if (isset($context["userFields"])) { $_userFields_ = $context["userFields"]; } else { $_userFields_ = null; }
                if ($_userFields_) {
                    // line 164
                    echo "               ";
                    if (isset($context["userFields"])) { $_userFields_ = $context["userFields"]; } else { $_userFields_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($_userFields_);
                    foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                        // line 165
                        echo "                ";
                        if (isset($context["sort"])) { $_sort_ = $context["sort"]; } else { $_sort_ = null; }
                        if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                        if (($_sort_ == $this->getAttribute($_field_, "fieldName"))) {
                            // line 166
                            echo "                <li class=\"list-group-item clearfix\" data-role=\"item\" >
                  <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
                  &nbsp;<input type=\"checkbox\"  ";
                            // line 168
                            if (isset($context["auth"])) { $_auth_ = $context["auth"]; } else { $_auth_ = null; }
                            $context['_parent'] = (array) $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_auth_, "registerSort"));
                            foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
                                if (isset($context["sort"])) { $_sort_ = $context["sort"]; } else { $_sort_ = null; }
                                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                                if (($_sort_ == $this->getAttribute($_field_, "fieldName"))) {
                                    echo "checked=true";
                                }
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            echo " name=\"registerSort[]\" value=\"";
                            if (isset($context["sort"])) { $_sort_ = $context["sort"]; } else { $_sort_ = null; }
                            echo twig_escape_filter($this->env, $_sort_, "html", null, true);
                            echo "\"></input><input type=\"hidden\"  name=\"registerFieldNameArray[]\" value=\"";
                            if (isset($context["sort"])) { $_sort_ = $context["sort"]; } else { $_sort_ = null; }
                            echo twig_escape_filter($this->env, $_sort_, "html", null, true);
                            echo "\"></input> ";
                            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($_field_, "title"), "html", null, true);
                            echo "
                </li>            
               ";
                        }
                        // line 171
                        echo "               ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 172
                    echo "               ";
                }
                // line 173
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 174
            echo "            ";
        } else {
            // line 175
            echo "            <li class=\"list-group-item clearfix\" data-role=\"item\" >
              <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
              &nbsp;<input type=\"checkbox\" checked=true onclick=\"return false\" name=\"registerSort[]\" value=\"email\"></input><input type=\"hidden\"  name=\"registerFieldNameArray[]\" value=\"email\"></input> 邮箱地址<span class=\"text-muted\"> (系统必需，不可取消)</span>
            </li>
            <li class=\"list-group-item clearfix\" data-role=\"item\" >
              <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
              &nbsp;<input type=\"checkbox\" checked=true onclick=\"return false\" name=\"registerSort[]\" value=\"nickname\"></input><input type=\"hidden\"  name=\"registerFieldNameArray[]\" value=\"nickname\"></input> 昵称<span class=\"text-muted\"> (系统必需，不可取消)</span>
            </li>
            <li class=\"list-group-item clearfix\" data-role=\"item\" >
              <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
              &nbsp;<input type=\"checkbox\" checked=true onclick=\"return false\" name=\"registerSort[]\" value=\"password\"></input><input type=\"hidden\"  name=\"registerFieldNameArray[]\" value=\"password\"></input><input type=\"hidden\"  name=\"registerSort[]\" value=\"confirmPassword\"></input><input type=\"hidden\"  name=\"registerFieldNameArray[]\" value=\"confirmPassword\"></input> 密码<span class=\"text-muted\"> (系统必需，不可取消)</span>
            </li>
            <li class=\"list-group-item clearfix\" data-role=\"item\" >
              <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
              &nbsp;<input type=\"checkbox\" name=\"registerSort[]\" value=\"truename\"></input><input type=\"hidden\"  name=\"registerFieldNameArray[]\" value=\"truename\"></input> 姓名
            </li>
            <li class=\"list-group-item clearfix\" data-role=\"item\" >
              <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
              &nbsp;<input type=\"checkbox\" name=\"registerSort[]\" value=\"mobile\"></input><input type=\"hidden\"  name=\"registerFieldNameArray[]\" value=\"mobile\"></input> 手机号码<span class=\"text-muted\"> (带格式校检)</span>
            </li>
            <li class=\"list-group-item clearfix\" data-role=\"item\" >
              <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
              &nbsp;<input type=\"checkbox\" name=\"registerSort[]\" value=\"idcard\"></input><input type=\"hidden\"  name=\"registerFieldNameArray[]\" value=\"idcard\"></input> 身份证号码<span class=\"text-muted\"> (带格式校检)</span>
            </li>
            <li class=\"list-group-item clearfix\" data-role=\"item\" >
              <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
              &nbsp;<input type=\"checkbox\" name=\"registerSort[]\" value=\"gender\"></input><input type=\"hidden\"  name=\"registerFieldNameArray[]\" value=\"gender\"></input> 性别
            </li>
            <li class=\"list-group-item clearfix\" data-role=\"item\" >
              <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
              &nbsp;<input type=\"checkbox\" name=\"registerSort[]\" value=\"job\"></input><input type=\"hidden\"  name=\"registerFieldNameArray[]\" value=\"job\"></input> 职业
            </li>
            <li class=\"list-group-item clearfix\" data-role=\"item\" >
              <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
              &nbsp;<input type=\"checkbox\" name=\"registerSort[]\" value=\"company\"></input><input type=\"hidden\"  name=\"registerFieldNameArray[]\" value=\"company\"></input> 公司
            </li>
            ";
            // line 211
            if (isset($context["userFields"])) { $_userFields_ = $context["userFields"]; } else { $_userFields_ = null; }
            if ($_userFields_) {
                // line 212
                echo "                ";
                if (isset($context["userFields"])) { $_userFields_ = $context["userFields"]; } else { $_userFields_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($_userFields_);
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 213
                    echo "                    <li class=\"list-group-item clearfix\" data-role=\"item\" >
                      <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
                      &nbsp;<input type=\"checkbox\" name=\"registerSort[]\" value=\"";
                    // line 215
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "fieldName"), "html", null, true);
                    echo "\"></input><input type=\"hidden\"  name=\"registerFieldNameArray[]\" value=\"";
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "fieldName"), "html", null, true);
                    echo "\"></input> ";
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "title"), "html", null, true);
                    echo "
                    </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 218
                echo "            ";
            }
            // line 219
            echo "            ";
        }
        // line 220
        echo "            </ul>
            <span class=\"help-block pull-right\">可拖动调整先后次序.勾选后，在注册时就必须要填写该项目，将会增加注册难度，请谨慎使用</span>
          </div>
          <div style=\"text-align:center;\"><a href=\"javascript:\" id=\"hide-list-btn\">收起 <span class=\"
glyphicon glyphicon-chevron-up\"></span></a></div>
        </div>
    </div>
  </fieldset>
  <fieldset>
    <legend>欢迎信息设置</legend>

    <div class=\"form-group\" style=\"display:none;\">
      <div class=\"col-md-3 control-label\">
        <label>发送欢迎信息</label>
      </div>
      <div class=\"controls col-md-8 checkboxs\">
        ";
        // line 236
        if (isset($context["auth"])) { $_auth_ = $context["auth"]; } else { $_auth_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->checkboxs("welcome_methods", array("message" => "站内私信", "email" => "电子邮件"), $this->getAttribute($_auth_, "welcome_methods"));
        echo "
        <div class=\"help-block\">新用户邮件激活开启时，电子邮件的发送欢迎信息方式无效。</div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"welcome_title\">发送欢迎信息</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 246
        if (isset($context["auth"])) { $_auth_ = $context["auth"]; } else { $_auth_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->radios("welcome_enabled", array("opened" => "开启", "closed" => "关闭"), $this->getAttribute($_auth_, "welcome_enabled"));
        echo "
        <div class=\"help-block\">欢迎信以站内私信的方式，发送给新用户。</div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"welcome_sender\">欢迎信息发送方</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"welcome_sender\" name=\"welcome_sender\" class=\"form-control\" value=\"";
        // line 256
        if (isset($context["auth"])) { $_auth_ = $context["auth"]; } else { $_auth_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_auth_, "welcome_sender"), "html", null, true);
        echo "\">
        <div class=\"help-block\">通常为这个网站的管理员，请输入用户昵称。</div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"welcome_title\">欢迎信息标题</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"welcome_title\" name=\"welcome_title\" class=\"form-control\" value=\"";
        // line 266
        if (isset($context["auth"])) { $_auth_ = $context["auth"]; } else { $_auth_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_auth_, "welcome_title"), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"welcome_body\">欢迎信息内容</label>
      </div>
      <div class=\"controls col-md-8\">
        <textarea id=\"welcome_body\" name=\"welcome_body\" class=\"form-control\" rows=\"5\">";
        // line 275
        if (isset($context["auth"])) { $_auth_ = $context["auth"]; } else { $_auth_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_auth_, "welcome_body"), "html", null, true);
        echo "</textarea>
        <div class=\"help-block\">
          ";
        // line 285
        echo "
          <div>注意： 私信长度不能超过1000个字符</div>
          <div>变量说明：</div>
          <ul>
            <li>{{nickname}} 为接收方用户昵称</li>
            <li>{{sitename}} 为网站名称</li>
            <li>{{siteurl}} 为网站的地址</li>
          </ul>
          ";
        echo "
        </div>
      </div>
    </div>
  </fieldset>

  <fieldset>
    <legend>服务条款设置</legend>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"user_terms\">是否开启服务条款</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 298
        if (isset($context["auth"])) { $_auth_ = $context["auth"]; } else { $_auth_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->radios("user_terms", array("opened" => "开启", "closed" => "关闭"), $this->getAttribute($_auth_, "user_terms"));
        echo "
        <div class=\"help-block\">开启后用户注册时必须同意条款才能注册</div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"user_terms_body\">条款内容</label>
      </div>
      <div class=\"controls col-md-8\">
        <textarea class=\"form-control\" id=\"user_terms_body\" rows=\"16\" name=\"user_terms_body\">";
        // line 308
        if (isset($context["auth"])) { $_auth_ = $context["auth"]; } else { $_auth_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_auth_, "user_terms_body"), "html", null, true);
        echo "</textarea>
      </div>
    </div>

  </fieldset>

  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\"></div>
    <div class=\"controls col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">提交</button>  
    </div>
  </div>
  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 320
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:auth.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  704 => 320,  688 => 308,  674 => 298,  650 => 285,  644 => 275,  631 => 266,  617 => 256,  603 => 246,  589 => 236,  571 => 220,  568 => 219,  565 => 218,  549 => 215,  545 => 213,  539 => 212,  536 => 211,  498 => 175,  495 => 174,  489 => 173,  486 => 172,  480 => 171,  453 => 168,  449 => 166,  444 => 165,  438 => 164,  434 => 163,  417 => 160,  413 => 158,  409 => 157,  392 => 154,  388 => 152,  384 => 151,  367 => 148,  363 => 146,  359 => 145,  342 => 142,  338 => 140,  334 => 139,  317 => 136,  313 => 134,  309 => 133,  292 => 130,  288 => 128,  284 => 127,  277 => 122,  273 => 121,  266 => 116,  262 => 115,  254 => 109,  250 => 108,  244 => 107,  241 => 106,  232 => 99,  226 => 98,  223 => 97,  217 => 96,  210 => 94,  205 => 93,  199 => 92,  195 => 91,  191 => 89,  187 => 88,  183 => 86,  179 => 85,  175 => 83,  171 => 82,  167 => 80,  163 => 79,  159 => 77,  155 => 76,  151 => 74,  147 => 73,  143 => 71,  139 => 70,  135 => 68,  131 => 67,  127 => 65,  123 => 64,  118 => 63,  95 => 51,  89 => 41,  76 => 32,  60 => 20,  48 => 12,  43 => 9,  40 => 8,  33 => 3,  28 => 6,  26 => 5,);
    }
}
