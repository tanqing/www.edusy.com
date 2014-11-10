<?php

/* TopxiaAdminBundle:User:show-modal.html.twig */
class __TwigTemplate_3af43e538a99d529e10e4047a9bc9e68 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "个人详细信息";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
<table class=\"table table-striped table-condenseda table-bordered\">
  <tr>
    <th width=\"25%\">用户名</th>
    <td width=\"75%\">
      <a class=\"pull-right\" href=\"";
        // line 11
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($_user_, "id"))), "html", null, true);
        echo "\" target=\"_blank\">个人主页</a>
      ";
        // line 12
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_user_, "nickname"), "html", null, true);
        echo "
    </td>
  </tr>

  <tr>
    <th>Email</th>
    <td>";
        // line 18
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_user_, "email"), "html", null, true);
        echo "</td>
  </tr>

  <tr>
    <th>用户组</th>
    <td>
      ";
        // line 24
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_user_, "roles"));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 25
            echo "        ";
            if (isset($context["role"])) { $_role_ = $context["role"]; } else { $_role_ = null; }
            echo $this->env->getExtension('topxia_web_twig')->getDictText("userRole", $_role_);
            echo "
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "    </td>
  </tr>

  <tr>
    <th>注册时间/IP</th>
    <td>
      ";
        // line 33
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_user_, "createdTime"), "Y-n-d H:i:s"), "html", null, true);
        echo "
      /
      ";
        // line 35
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_user_, "createdIp"), "html", null, true);
        echo " ";
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getConvertIP($this->getAttribute($_user_, "createdIp")), "html", null, true);
        echo "
    </td>
  </tr>

  <tr>
    <th>最近登录时间/IP</th>
    <td> 
      ";
        // line 42
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        if (($this->getAttribute($_user_, "loginTime") == 0)) {
            // line 43
            echo "          --
      ";
        } else {
            // line 45
            echo "          ";
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_user_, "loginTime"), "Y-n-d H:i:s"), "html", null, true);
            echo "
      ";
        }
        // line 47
        echo "      ";
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        if ((!twig_test_empty((($this->getAttribute($_user_, "loginIp", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_user_, "loginIp"))) : (""))))) {
            // line 48
            echo "           / ";
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_user_, "loginIp"), "html", null, true);
            echo " ";
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getConvertIP($this->getAttribute($_user_, "loginIp")), "html", null, true);
            echo "
      ";
        }
        // line 50
        echo "     </td>
  </tr>

  <tr>
    <th>姓名</th>
    <td>
      ";
        // line 56
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        if ($this->getAttribute($_profile_, "truename")) {
            // line 57
            echo "        ";
            if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_profile_, "truename"), "html", null, true);
            echo "
      ";
        } else {
            // line 59
            echo "        暂无
      ";
        }
        // line 61
        echo "    </td>
  </tr>

  <tr>
    <th>性别</th>
    <td>
      ";
        // line 67
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        if ($this->getAttribute($_profile_, "gender")) {
            // line 68
            echo "        ";
            if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
            if (($this->getAttribute($_profile_, "gender") == "male")) {
                echo "男性";
            }
            // line 69
            echo "        ";
            if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
            if (($this->getAttribute($_profile_, "gender") == "female")) {
                echo "女性";
            }
            // line 70
            echo "        ";
            if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
            if (($this->getAttribute($_profile_, "gender") == "secret")) {
                echo "秘密";
            }
            // line 71
            echo "      ";
        } else {
            // line 72
            echo "        暂无
      ";
        }
        // line 74
        echo "    </td>
  </tr>

";
        // line 87
        echo " 
   <tr>
    <th>身份证号</th>
    <td>
      ";
        // line 91
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        if ($this->getAttribute($_profile_, "idcard")) {
            // line 92
            echo "        ";
            if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_profile_, "idcard"), "html", null, true);
            echo "
      ";
        } else {
            // line 94
            echo "        暂无
      ";
        }
        // line 96
        echo "    </td>
  </tr>

  <tr>
    <th>手机号码</th>
    <td>
      ";
        // line 102
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        if ($this->getAttribute($_profile_, "mobile")) {
            // line 103
            echo "        ";
            if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_profile_, "mobile"), "html", null, true);
            echo "
      ";
        } else {
            // line 105
            echo "        暂无
      ";
        }
        // line 107
        echo "    </td>
  </tr>

";
        // line 131
        echo "
  <tr>
    <th>公司</th>
    <td>
      ";
        // line 135
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        if ($this->getAttribute($_profile_, "company")) {
            // line 136
            echo "        ";
            if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_profile_, "company"), "html", null, true);
            echo "
      ";
        } else {
            // line 138
            echo "        暂无
      ";
        }
        // line 140
        echo "    </td>
  </tr>

  <tr>
    <th>职业</th>
    <td>
      ";
        // line 146
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        if ($this->getAttribute($_profile_, "job")) {
            // line 147
            echo "        ";
            if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_profile_, "job"), "html", null, true);
            echo "
      ";
        } else {
            // line 149
            echo "        暂无
      ";
        }
        // line 151
        echo "    </td>
  </tr>


  <tr>
    <th>头衔</th>
    <td>
    ";
        // line 158
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        if ($this->getAttribute($_profile_, "title")) {
            // line 159
            echo "        ";
            if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_profile_, "title"), "html", null, true);
            echo "
      ";
        } else {
            // line 161
            echo "        暂无
      ";
        }
        // line 163
        echo "    </td>
  </tr>

  <tr>
    <th>个人签名</th>
    <td>
    ";
        // line 169
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        if ($this->getAttribute($_profile_, "signature")) {
            // line 170
            echo "        ";
            if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_profile_, "signature"), "html", null, true);
            echo "
      ";
        } else {
            // line 172
            echo "        暂无
      ";
        }
        // line 174
        echo "    </td>
  </tr>

  <tr>
    <th>自我介绍</th>
    <td>
    ";
        // line 180
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        if ($this->getAttribute($_profile_, "about")) {
            // line 181
            echo "        ";
            if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
            echo $this->getAttribute($_profile_, "about");
            echo "
      ";
        } else {
            // line 183
            echo "        暂无
      ";
        }
        // line 185
        echo "    </td>
  </tr>

  <tr>
    <th>个人网站</th>
    <td>
      ";
        // line 191
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        if ($this->getAttribute($_profile_, "site")) {
            // line 192
            echo "        ";
            if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_profile_, "site"), "html", null, true);
            echo "
      ";
        } else {
            // line 194
            echo "        暂无
      ";
        }
        // line 196
        echo "    </td>
  </tr>

  <tr>
    <th>微博</th>
    <td>
      ";
        // line 202
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        if ($this->getAttribute($_profile_, "weibo")) {
            // line 203
            echo "        ";
            if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_profile_, "weibo"), "html", null, true);
            echo "
      ";
        } else {
            // line 205
            echo "        暂无
      ";
        }
        // line 207
        echo "    </td>
  </tr>

  <tr>
    <th>微信</th>
    <td>
      ";
        // line 213
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        if ($this->getAttribute($_profile_, "weixin")) {
            // line 214
            echo "        ";
            if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_profile_, "weixin"), "html", null, true);
            echo "
      ";
        } else {
            // line 216
            echo "        暂无
      ";
        }
        // line 218
        echo "    </td>
  </tr>

  <tr>
    <th>QQ</th>
    <td>
      ";
        // line 224
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        if ($this->getAttribute($_profile_, "qq")) {
            // line 225
            echo "        ";
            if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_profile_, "qq"), "html", null, true);
            echo "
      ";
        } else {
            // line 227
            echo "        暂无
      ";
        }
        // line 229
        echo "    </td>
  </tr>

</table>
<hr>
<table class=\"table table-striped table-condenseda table-bordered\">
    ";
        // line 235
        if (isset($context["fields"])) { $_fields_ = $context["fields"]; } else { $_fields_ = null; }
        if ($_fields_) {
            // line 236
            echo "  ";
            if (isset($context["fields"])) { $_fields_ = $context["fields"]; } else { $_fields_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_fields_);
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 237
                echo "    <tr>
        <th width=\"25%\">";
                // line 238
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_field_, "title"), "html", null, true);
                echo "</th>
        <td>
          ";
                // line 240
                if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                if ($this->getAttribute($_profile_, $this->getAttribute($_field_, "fieldName"), array(), "array")) {
                    // line 241
                    echo "            ";
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    if (($this->getAttribute($_field_, "type") == "date")) {
                        // line 242
                        echo "            ";
                        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
                        if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_profile_, $this->getAttribute($_field_, "fieldName"), array(), "array"), "Y-m-d"), "html", null, true);
                        echo "
            ";
                    } else {
                        // line 244
                        echo "            ";
                        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
                        if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_profile_, $this->getAttribute($_field_, "fieldName"), array(), "array"), "html", null, true);
                        echo "
            ";
                    }
                    // line 246
                    echo "          ";
                } else {
                    // line 247
                    echo "            暂无
          ";
                }
                // line 249
                echo "        </td>
    </tr>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 252
            echo "  ";
        }
        // line 253
        echo "  </table>
";
    }

    // line 256
    public function block_footer($context, array $blocks = array())
    {
        // line 257
        echo "  <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">关闭</button>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:User:show-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  525 => 257,  522 => 256,  517 => 253,  514 => 252,  506 => 249,  502 => 247,  499 => 246,  491 => 244,  483 => 242,  479 => 241,  475 => 240,  469 => 238,  466 => 237,  460 => 236,  457 => 235,  449 => 229,  445 => 227,  438 => 225,  435 => 224,  427 => 218,  423 => 216,  416 => 214,  413 => 213,  405 => 207,  401 => 205,  394 => 203,  391 => 202,  383 => 196,  379 => 194,  372 => 192,  369 => 191,  361 => 185,  357 => 183,  350 => 181,  347 => 180,  339 => 174,  335 => 172,  328 => 170,  325 => 169,  317 => 163,  313 => 161,  306 => 159,  303 => 158,  294 => 151,  290 => 149,  283 => 147,  280 => 146,  272 => 140,  268 => 138,  261 => 136,  258 => 135,  252 => 131,  247 => 107,  243 => 105,  236 => 103,  233 => 102,  225 => 96,  221 => 94,  214 => 92,  211 => 91,  205 => 87,  200 => 74,  196 => 72,  193 => 71,  187 => 70,  181 => 69,  175 => 68,  172 => 67,  164 => 61,  160 => 59,  153 => 57,  150 => 56,  142 => 50,  132 => 48,  128 => 47,  121 => 45,  117 => 43,  114 => 42,  100 => 35,  94 => 33,  86 => 27,  76 => 25,  71 => 24,  61 => 18,  51 => 12,  46 => 11,  39 => 6,  36 => 5,  30 => 3,);
    }
}
