<?php

/* TopxiaAdminBundle:System:course-setting.html.twig */
class __TwigTemplate_d671acd51c6abad86c098819b3088abb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaAdminBundle:System:operation.layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'maincontent' => array($this, 'block_maincontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle:System:operation.layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["submenu"] = "course_setting";
        // line 6
        $context["script_controller"] = "setting/course";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "课程设置 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_maincontent($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"page-header\"><h1>课程设置</h1></div>

";
        // line 10
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "flash_messages", array(), "method"), "html", null, true);
        echo "

<form class=\"form-horizontal\" method=\"post\" id=\"course-form\" novalidate>

  <fieldset>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >给新学员发送欢迎私信</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 20
        if (isset($context["courseSetting"])) { $_courseSetting_ = $context["courseSetting"]; } else { $_courseSetting_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->radios("welcome_message_enabled", array(1 => "开启", 0 => "关闭"), $this->getAttribute($_courseSetting_, "welcome_message_enabled"));
        echo "
      <p class=\"help-block\">开启后，新学员加入课程后，会收到教师的欢迎私信</p>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"welcome_message_body\">欢迎私信内容</label>
      </div>
      <div class=\"controls col-md-8\">
        <textarea id=\"welcome_message_body\" name=\"welcome_message_body\" class=\"form-control\" rows=\"5\">";
        // line 30
        if (isset($context["courseSetting"])) { $_courseSetting_ = $context["courseSetting"]; } else { $_courseSetting_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_courseSetting_, "welcome_message_body"), "html", null, true);
        echo "</textarea>
        <div class=\"help-block\">
          ";
        // line 38
        echo "
          <div>变量说明：</div>
          <ul>
            <li>{{nickname}} 为接收方用户昵称</li>
            <li>{{course}} 为课程名称</li>
          </ul>
          ";
        echo "
        </div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >购买课程时填写个人资料</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 48
        if (isset($context["courseSetting"])) { $_courseSetting_ = $context["courseSetting"]; } else { $_courseSetting_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->radios("buy_fill_userinfo", array(1 => "开启", 0 => "关闭"), $this->getAttribute($_courseSetting_, "buy_fill_userinfo"));
        echo "
      <p class=\"help-block\">开启后，学员购买课程时，需填写个人资料</p>
      </div>
      <div class=\"controls col-md-8 col-md-offset-3\"  id=\"show-list\">
        ";
        // line 52
        if (isset($context["courseSetting"])) { $_courseSetting_ = $context["courseSetting"]; } else { $_courseSetting_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_courseSetting_, "userinfoFields"));
        foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
            // line 53
            echo "            ";
            if (isset($context["sort"])) { $_sort_ = $context["sort"]; } else { $_sort_ = null; }
            if (($_sort_ == "truename")) {
                // line 54
                echo "            <button type=\"button\" class=\"btn btn-default btn-xs\">真实姓名</button>
            ";
            }
            // line 56
            echo "            ";
            if (isset($context["sort"])) { $_sort_ = $context["sort"]; } else { $_sort_ = null; }
            if (($_sort_ == "mobile")) {
                // line 57
                echo "            <button type=\"button\" class=\"btn btn-default btn-xs\">手机号码</button>
            ";
            }
            // line 59
            echo "            ";
            if (isset($context["sort"])) { $_sort_ = $context["sort"]; } else { $_sort_ = null; }
            if (($_sort_ == "qq")) {
                // line 60
                echo "            <button type=\"button\" class=\"btn btn-default btn-xs\">QQ</button>
            ";
            }
            // line 62
            echo "            ";
            if (isset($context["sort"])) { $_sort_ = $context["sort"]; } else { $_sort_ = null; }
            if (($_sort_ == "company")) {
                // line 63
                echo "            <button type=\"button\" class=\"btn btn-default btn-xs\">所在公司</button>
            ";
            }
            // line 65
            echo "            ";
            if (isset($context["sort"])) { $_sort_ = $context["sort"]; } else { $_sort_ = null; }
            if (($_sort_ == "idcard")) {
                // line 66
                echo "            <button type=\"button\" class=\"btn btn-default btn-xs\">身份证号码</button>
            ";
            }
            // line 68
            echo "             ";
            if (isset($context["sort"])) { $_sort_ = $context["sort"]; } else { $_sort_ = null; }
            if (($_sort_ == "gender")) {
                // line 69
                echo "            <button type=\"button\" class=\"btn btn-default btn-xs\">性别</button>
            ";
            }
            // line 71
            echo "             ";
            if (isset($context["sort"])) { $_sort_ = $context["sort"]; } else { $_sort_ = null; }
            if (($_sort_ == "job")) {
                // line 72
                echo "            <button type=\"button\" class=\"btn btn-default btn-xs\">职业</button>
            ";
            }
            // line 74
            echo "             ";
            if (isset($context["sort"])) { $_sort_ = $context["sort"]; } else { $_sort_ = null; }
            if (($_sort_ == "weibo")) {
                // line 75
                echo "            <button type=\"button\" class=\"btn btn-default btn-xs\">微博</button>
            ";
            }
            // line 77
            echo "             ";
            if (isset($context["sort"])) { $_sort_ = $context["sort"]; } else { $_sort_ = null; }
            if (($_sort_ == "weixin")) {
                // line 78
                echo "            <button type=\"button\" class=\"btn btn-default btn-xs\">微信</button>
            ";
            }
            // line 80
            echo "            ";
            if (isset($context["userFields"])) { $_userFields_ = $context["userFields"]; } else { $_userFields_ = null; }
            if ($_userFields_) {
                // line 81
                echo "                ";
                if (isset($context["userFields"])) { $_userFields_ = $context["userFields"]; } else { $_userFields_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($_userFields_);
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 82
                    echo "                      ";
                    if (isset($context["sort"])) { $_sort_ = $context["sort"]; } else { $_sort_ = null; }
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    if (($_sort_ == $this->getAttribute($_field_, "fieldName"))) {
                        // line 83
                        echo "                           <button type=\"button\" class=\"btn btn-default btn-xs\">";
                        if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_field_, "title"), "html", null, true);
                        echo "</button>
                     ";
                    }
                    // line 85
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 86
                echo "            ";
            }
            // line 87
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "        <div class=\"pull-right \"><a href=\"javascript:\" id=\"show-list-btn\">编辑 <span class=\"
  glyphicon glyphicon-chevron-down\"></span></a></div>
      </div>
      <div  class=\"controls col-md-8 col-md-offset-2\" id=\"buy-userinfo-list\">
            <div class=\"form-group\"><ul class=\"buy-userinfo-list sortable-list\" data-role=\"list\">
            ";
        // line 93
        if (isset($context["courseSetting"])) { $_courseSetting_ = $context["courseSetting"]; } else { $_courseSetting_ = null; }
        if ($this->getAttribute($_courseSetting_, "userinfoFieldNameArray")) {
            // line 94
            echo "            ";
            if (isset($context["courseSetting"])) { $_courseSetting_ = $context["courseSetting"]; } else { $_courseSetting_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_courseSetting_, "userinfoFieldNameArray"));
            foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
                // line 95
                echo "               ";
                if (isset($context["sort"])) { $_sort_ = $context["sort"]; } else { $_sort_ = null; }
                if (($_sort_ == "truename")) {
                    // line 96
                    echo "                <li class=\"list-group-item clearfix\" data-role=\"item\" >
                  <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
                  &nbsp;<input type=\"checkbox\" name=\"userinfoFields[]\" value=\"truename\"  ";
                    // line 98
                    if (isset($context["courseSetting"])) { $_courseSetting_ = $context["courseSetting"]; } else { $_courseSetting_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($_courseSetting_, "userinfoFields"));
                    foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
                        if (isset($context["sort"])) { $_sort_ = $context["sort"]; } else { $_sort_ = null; }
                        if (($_sort_ == "truename")) {
                            echo "checked=true";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "></input><input type=\"hidden\"  name=\"userinfoFieldNameArray[]\" value=\"truename\"></input> 真实姓名
                </li>
               ";
                }
                // line 101
                echo "               ";
                if (isset($context["sort"])) { $_sort_ = $context["sort"]; } else { $_sort_ = null; }
                if (($_sort_ == "mobile")) {
                    // line 102
                    echo "                  <li class=\"list-group-item clearfix\" data-role=\"item\" >
                    <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
                    &nbsp;<input type=\"checkbox\" name=\"userinfoFields[]\" value=\"mobile\" ";
                    // line 104
                    if (isset($context["courseSetting"])) { $_courseSetting_ = $context["courseSetting"]; } else { $_courseSetting_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($_courseSetting_, "userinfoFields"));
                    foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
                        if (isset($context["sort"])) { $_sort_ = $context["sort"]; } else { $_sort_ = null; }
                        if (($_sort_ == "mobile")) {
                            echo "checked=true";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "></input><input type=\"hidden\"  name=\"userinfoFieldNameArray[]\" value=\"mobile\"></input> 手机号码(带格式校检)
                  </li>
               ";
                }
                // line 107
                echo "               ";
                if (isset($context["sort"])) { $_sort_ = $context["sort"]; } else { $_sort_ = null; }
                if (($_sort_ == "qq")) {
                    // line 108
                    echo "                      <li class=\"list-group-item clearfix\" data-role=\"item\" >
                      <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
                      &nbsp;<input type=\"checkbox\"  ";
                    // line 110
                    if (isset($context["courseSetting"])) { $_courseSetting_ = $context["courseSetting"]; } else { $_courseSetting_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($_courseSetting_, "userinfoFields"));
                    foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
                        if (isset($context["sort"])) { $_sort_ = $context["sort"]; } else { $_sort_ = null; }
                        if (($_sort_ == "qq")) {
                            echo "checked=true";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "  name=\"userinfoFields[]\" value=\"qq\"></input><input type=\"hidden\"  name=\"userinfoFieldNameArray[]\" value=\"qq\"></input> QQ（带格式校验）
                    </li>
               ";
                }
                // line 113
                echo "               ";
                if (isset($context["sort"])) { $_sort_ = $context["sort"]; } else { $_sort_ = null; }
                if (($_sort_ == "company")) {
                    // line 114
                    echo "                    <li class=\"list-group-item clearfix\" data-role=\"item\" >
                      <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
                      &nbsp;<input type=\"checkbox\" ";
                    // line 116
                    if (isset($context["courseSetting"])) { $_courseSetting_ = $context["courseSetting"]; } else { $_courseSetting_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($_courseSetting_, "userinfoFields"));
                    foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
                        if (isset($context["sort"])) { $_sort_ = $context["sort"]; } else { $_sort_ = null; }
                        if (($_sort_ == "company")) {
                            echo "checked=true";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " name=\"userinfoFields[]\" value=\"company\"></input><input type=\"hidden\"  name=\"userinfoFieldNameArray[]\" value=\"company\"></input> 所在公司
                    </li>
               ";
                }
                // line 119
                echo "               ";
                if (isset($context["sort"])) { $_sort_ = $context["sort"]; } else { $_sort_ = null; }
                if (($_sort_ == "idcard")) {
                    // line 120
                    echo "                <li class=\"list-group-item clearfix\" data-role=\"item\" >
                  <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
                  &nbsp;<input type=\"checkbox\" ";
                    // line 122
                    if (isset($context["courseSetting"])) { $_courseSetting_ = $context["courseSetting"]; } else { $_courseSetting_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($_courseSetting_, "userinfoFields"));
                    foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
                        if (isset($context["sort"])) { $_sort_ = $context["sort"]; } else { $_sort_ = null; }
                        if (($_sort_ == "idcard")) {
                            echo "checked=true";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " name=\"userinfoFields[]\" value=\"idcard\"></input><input type=\"hidden\"  name=\"userinfoFieldNameArray[]\" value=\"idcard\"></input> 身份证号码(带格式校检)
                </li>
               ";
                }
                // line 125
                echo "               ";
                if (isset($context["sort"])) { $_sort_ = $context["sort"]; } else { $_sort_ = null; }
                if (($_sort_ == "gender")) {
                    // line 126
                    echo "                <li class=\"list-group-item clearfix\" data-role=\"item\" >
                  <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
                  &nbsp;<input type=\"checkbox\" ";
                    // line 128
                    if (isset($context["courseSetting"])) { $_courseSetting_ = $context["courseSetting"]; } else { $_courseSetting_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($_courseSetting_, "userinfoFields"));
                    foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
                        if (isset($context["sort"])) { $_sort_ = $context["sort"]; } else { $_sort_ = null; }
                        if (($_sort_ == "gender")) {
                            echo "checked=true";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " name=\"userinfoFields[]\" value=\"gender\"></input><input type=\"hidden\"  name=\"userinfoFieldNameArray[]\" value=\"gender\"></input> 性别
                </li>
               ";
                }
                // line 131
                echo "               ";
                if (isset($context["sort"])) { $_sort_ = $context["sort"]; } else { $_sort_ = null; }
                if (($_sort_ == "job")) {
                    // line 132
                    echo "                <li class=\"list-group-item clearfix\" data-role=\"item\" >
                  <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
                  &nbsp;<input type=\"checkbox\" ";
                    // line 134
                    if (isset($context["courseSetting"])) { $_courseSetting_ = $context["courseSetting"]; } else { $_courseSetting_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($_courseSetting_, "userinfoFields"));
                    foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
                        if (isset($context["sort"])) { $_sort_ = $context["sort"]; } else { $_sort_ = null; }
                        if (($_sort_ == "job")) {
                            echo "checked=true";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " name=\"userinfoFields[]\" value=\"job\"></input><input type=\"hidden\"  name=\"userinfoFieldNameArray[]\" value=\"job\"></input> 职业
                </li>
               ";
                }
                // line 137
                echo "               ";
                if (isset($context["sort"])) { $_sort_ = $context["sort"]; } else { $_sort_ = null; }
                if (($_sort_ == "weibo")) {
                    // line 138
                    echo "                <li class=\"list-group-item clearfix\" data-role=\"item\" >
                  <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
                  &nbsp;<input type=\"checkbox\" ";
                    // line 140
                    if (isset($context["courseSetting"])) { $_courseSetting_ = $context["courseSetting"]; } else { $_courseSetting_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($_courseSetting_, "userinfoFields"));
                    foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
                        if (isset($context["sort"])) { $_sort_ = $context["sort"]; } else { $_sort_ = null; }
                        if (($_sort_ == "weibo")) {
                            echo "checked=true";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " name=\"userinfoFields[]\" value=\"weibo\"></input><input type=\"hidden\"  name=\"userinfoFieldNameArray[]\" value=\"weibo\"></input> 微博
                </li>
               ";
                }
                // line 143
                echo "               ";
                if (isset($context["sort"])) { $_sort_ = $context["sort"]; } else { $_sort_ = null; }
                if (($_sort_ == "weixin")) {
                    // line 144
                    echo "                <li class=\"list-group-item clearfix\" data-role=\"item\" >
                  <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
                  &nbsp;<input type=\"checkbox\" ";
                    // line 146
                    if (isset($context["courseSetting"])) { $_courseSetting_ = $context["courseSetting"]; } else { $_courseSetting_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($_courseSetting_, "userinfoFields"));
                    foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
                        if (isset($context["sort"])) { $_sort_ = $context["sort"]; } else { $_sort_ = null; }
                        if (($_sort_ == "weixin")) {
                            echo "checked=true";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " name=\"userinfoFields[]\" value=\"weixin\"></input><input type=\"hidden\"  name=\"userinfoFieldNameArray[]\" value=\"weixin\"></input> 微信
                </li>
               ";
                }
                // line 149
                echo "               ";
                if (isset($context["userFields"])) { $_userFields_ = $context["userFields"]; } else { $_userFields_ = null; }
                if ($_userFields_) {
                    // line 150
                    echo "               ";
                    if (isset($context["userFields"])) { $_userFields_ = $context["userFields"]; } else { $_userFields_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($_userFields_);
                    foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                        // line 151
                        echo "                ";
                        if (isset($context["sort"])) { $_sort_ = $context["sort"]; } else { $_sort_ = null; }
                        if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                        if (($_sort_ == $this->getAttribute($_field_, "fieldName"))) {
                            // line 152
                            echo "                <li class=\"list-group-item clearfix\" data-role=\"item\" >
                  <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
                  &nbsp;<input type=\"checkbox\"  ";
                            // line 154
                            if (isset($context["courseSetting"])) { $_courseSetting_ = $context["courseSetting"]; } else { $_courseSetting_ = null; }
                            $context['_parent'] = (array) $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_courseSetting_, "userinfoFields"));
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
                            echo " name=\"userinfoFields[]\" value=\"";
                            if (isset($context["sort"])) { $_sort_ = $context["sort"]; } else { $_sort_ = null; }
                            echo twig_escape_filter($this->env, $_sort_, "html", null, true);
                            echo "\"></input><input type=\"hidden\"  name=\"userinfoFieldNameArray[]\" value=\"";
                            if (isset($context["sort"])) { $_sort_ = $context["sort"]; } else { $_sort_ = null; }
                            echo twig_escape_filter($this->env, $_sort_, "html", null, true);
                            echo "\"></input> ";
                            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($_field_, "title"), "html", null, true);
                            echo "
                </li>            
               ";
                        }
                        // line 157
                        echo "               ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 158
                    echo "               ";
                }
                // line 159
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 160
            echo "            ";
        } else {
            // line 161
            echo "            <li class=\"list-group-item clearfix\" data-role=\"item\" >
              <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
              &nbsp;<input type=\"checkbox\" name=\"userinfoFields[]\" value=\"truename\" ></input><input type=\"hidden\"  name=\"userinfoFieldNameArray[]\" value=\"truename\"></input> 真实姓名
            </li>
            <li class=\"list-group-item clearfix\" data-role=\"item\" >
              <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
              &nbsp;<input type=\"checkbox\" name=\"userinfoFields[]\" value=\"mobile\" ></input><input type=\"hidden\"  name=\"userinfoFieldNameArray[]\" value=\"mobile\"></input> 手机号码(带格式校检)
            </li>
              <li class=\"list-group-item clearfix\" data-role=\"item\" >
              <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
              &nbsp;<input type=\"checkbox\" name=\"userinfoFields[]\" value=\"qq\"></input><input type=\"hidden\"  name=\"userinfoFieldNameArray[]\" value=\"qq\"></input> QQ（带格式校验）
            </li>
            <li class=\"list-group-item clearfix\" data-role=\"item\" >
              <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
              &nbsp;<input type=\"checkbox\" name=\"userinfoFields[]\" value=\"company\"></input><input type=\"hidden\"  name=\"userinfoFieldNameArray[]\" value=\"company\"></input> 所在公司
            </li>
            <li class=\"list-group-item clearfix\" data-role=\"item\" >
              <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
              &nbsp;<input type=\"checkbox\" name=\"userinfoFields[]\" value=\"job\"></input><input type=\"hidden\"  name=\"userinfoFieldNameArray[]\" value=\"job\"></input> 职业
            </li>
            <li class=\"list-group-item clearfix\" data-role=\"item\" >
              <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
              &nbsp;<input type=\"checkbox\" name=\"userinfoFields[]\" value=\"gender\"></input><input type=\"hidden\"  name=\"userinfoFieldNameArray[]\" value=\"gender\"></input> 性别
            </li>
            <li class=\"list-group-item clearfix\" data-role=\"item\" >
              <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
              &nbsp;<input type=\"checkbox\" name=\"userinfoFields[]\" value=\"idcard\"></input><input type=\"hidden\"  name=\"userinfoFieldNameArray[]\" value=\"idcard\"></input> 身份证号码(带格式校检)
            </li>
              <li class=\"list-group-item clearfix\" data-role=\"item\" >
              <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
              &nbsp;<input type=\"checkbox\" name=\"userinfoFields[]\" value=\"weibo\"></input><input type=\"hidden\"  name=\"userinfoFieldNameArray[]\" value=\"weibo\"></input> 微博
            </li>
              <li class=\"list-group-item clearfix\" data-role=\"item\" >
              <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
              &nbsp;<input type=\"checkbox\" name=\"userinfoFields[]\" value=\"weixin\"></input><input type=\"hidden\"  name=\"userinfoFieldNameArray[]\" value=\"weixin\"></input> 微信
            </li>
            ";
            // line 197
            if (isset($context["userFields"])) { $_userFields_ = $context["userFields"]; } else { $_userFields_ = null; }
            if ($_userFields_) {
                // line 198
                echo "                ";
                if (isset($context["userFields"])) { $_userFields_ = $context["userFields"]; } else { $_userFields_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($_userFields_);
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 199
                    echo "                    <li class=\"list-group-item clearfix\" data-role=\"item\" >
                      <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
                      &nbsp;<input type=\"checkbox\" name=\"userinfoFields[]\" value=\"";
                    // line 201
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "fieldName"), "html", null, true);
                    echo "\"></input><input type=\"hidden\"  name=\"userinfoFieldNameArray[]\" value=\"";
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
                // line 204
                echo "            ";
            }
            // line 205
            echo "          ";
        }
        // line 206
        echo "            </ul><div style=\"text-align:center;\"><a href=\"javascript:\" id=\"hide-list-btn\">收起 <span class=\"
glyphicon glyphicon-chevron-up\"></span></a></div>
  </div></div>

    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >允许教师设置课程价格</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 217
        if (isset($context["courseSetting"])) { $_courseSetting_ = $context["courseSetting"]; } else { $_courseSetting_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->radios("teacher_modify_price", array(1 => "是", 0 => "否"), $this->getAttribute($_courseSetting_, "teacher_modify_price"));
        echo "
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >允许教师添加/移除学员</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 226
        if (isset($context["courseSetting"])) { $_courseSetting_ = $context["courseSetting"]; } else { $_courseSetting_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->radios("teacher_manage_student", array(1 => "是", 0 => "否"), $this->getAttribute($_courseSetting_, "teacher_manage_student"));
        echo "
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >允许教师导出学员资料</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 235
        if (isset($context["courseSetting"])) { $_courseSetting_ = $context["courseSetting"]; } else { $_courseSetting_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->radios("teacher_export_student", array(1 => "是", 0 => "否"), $this->getAttribute($_courseSetting_, "teacher_export_student"));
        echo "
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >允许学员下载课时的音视频</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 244
        if (isset($context["courseSetting"])) { $_courseSetting_ = $context["courseSetting"]; } else { $_courseSetting_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->radios("student_download_media", array(0 => "不允许", 1 => "允许"), $this->getAttribute($_courseSetting_, "student_download_media"));
        echo "
        <div class=\"help-block\">开启此项设置后，学员可在课时学习界面侧栏的\"资料\"面板中下载。</div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label>课程详情页显示相关课程</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 254
        if (isset($context["courseSetting"])) { $_courseSetting_ = $context["courseSetting"]; } else { $_courseSetting_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->radios("relatedCourses", array(1 => "开启", 0 => "关闭"), $this->getAttribute($_courseSetting_, "relatedCourses"));
        echo "
        <div class=\"help-block\">根据课程的标签，显示相关课程</div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label>免费课程允许未登录用户观看</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 264
        if (isset($context["courseSetting"])) { $_courseSetting_ = $context["courseSetting"]; } else { $_courseSetting_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->radios("allowAnonymousPreview", array(1 => "允许", 0 => "不允许"), $this->getAttribute($_courseSetting_, "allowAnonymousPreview"));
        echo "
        <div class=\"help-block\">如果允许此项设置,未登录用户（游客）可观看免费课程</div>
      </div>
    </div>

     <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label>图文课时防复制</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 274
        if (isset($context["courseSetting"])) { $_courseSetting_ = $context["courseSetting"]; } else { $_courseSetting_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->radios("copy_enabled", array(1 => "开启", 0 => "关闭"), $this->getAttribute($_courseSetting_, "copy_enabled"));
        echo "
        <div class=\"help-block\"></div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label>课程图片预览</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 284
        if (isset($context["courseSetting"])) { $_courseSetting_ = $context["courseSetting"]; } else { $_courseSetting_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->radios("picturePreview_enabled", array(1 => "开启", 0 => "关闭"), $this->getAttribute($_courseSetting_, "picturePreview_enabled"));
        echo "
        <div class=\"help-block\">如果允许此项设置,点击课程图片预览课程首个免费视频</div>
      </div>
    </div>

";
        // line 297
        echo "
  </fieldset>
  <fieldset>
    <legend id=\"live-course-set\">直播课程</legend>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >开启状态</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 307
        if (isset($context["courseSetting"])) { $_courseSetting_ = $context["courseSetting"]; } else { $_courseSetting_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->radios("live_course_enabled", array(1 => "开启", 0 => "关闭"), $this->getAttribute($_courseSetting_, "live_course_enabled"));
        echo "
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label>同时在线人数上限</label>
      </div>
      <div class=\"controls col-md-8\">
        <div class=\"mts text-muted\" >";
        // line 316
        if (isset($context["courseSetting"])) { $_courseSetting_ = $context["courseSetting"]; } else { $_courseSetting_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_courseSetting_, "live_student_capacity"), "html", null, true);
        echo "人</div>
        <input class=\"form-control\" name=\"live_student_capacity\" type=\"hidden\" data-value=\"";
        // line 317
        if (isset($context["courseSetting"])) { $_courseSetting_ = $context["courseSetting"]; } else { $_courseSetting_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_courseSetting_, "live_student_capacity"), "html", null, true);
        echo "\">
        <p class=\"help-block\"><a href=\"http://www.edusoho.com/services/liveroom\" target=\"_blank\">点击查看如何购买扩充在线人数</a></p>
      </div>
    </div>

  </fieldset>

  <div class=\"form-group\">
    <div class=\"controls col-md-offset-3 col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">提交</button>
    </div>
  </div>
  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 329
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:course-setting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  763 => 329,  747 => 317,  742 => 316,  729 => 307,  717 => 297,  708 => 284,  694 => 274,  680 => 264,  666 => 254,  652 => 244,  639 => 235,  626 => 226,  613 => 217,  600 => 206,  597 => 205,  594 => 204,  578 => 201,  574 => 199,  568 => 198,  565 => 197,  527 => 161,  524 => 160,  518 => 159,  515 => 158,  509 => 157,  482 => 154,  478 => 152,  473 => 151,  467 => 150,  463 => 149,  446 => 146,  442 => 144,  438 => 143,  421 => 140,  417 => 138,  413 => 137,  396 => 134,  392 => 132,  388 => 131,  371 => 128,  367 => 126,  363 => 125,  346 => 122,  342 => 120,  338 => 119,  321 => 116,  317 => 114,  313 => 113,  296 => 110,  292 => 108,  288 => 107,  271 => 104,  267 => 102,  263 => 101,  246 => 98,  242 => 96,  238 => 95,  232 => 94,  229 => 93,  222 => 88,  216 => 87,  213 => 86,  207 => 85,  200 => 83,  195 => 82,  189 => 81,  185 => 80,  181 => 78,  177 => 77,  173 => 75,  169 => 74,  165 => 72,  161 => 71,  157 => 69,  153 => 68,  149 => 66,  145 => 65,  141 => 63,  137 => 62,  133 => 60,  129 => 59,  125 => 57,  121 => 56,  117 => 54,  113 => 53,  108 => 52,  100 => 48,  81 => 38,  75 => 30,  61 => 20,  47 => 10,  43 => 8,  40 => 7,  33 => 3,  28 => 6,  26 => 5,);
    }
}
