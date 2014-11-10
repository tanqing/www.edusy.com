<?php

/* TopxiaAdminBundle:System:consult-setting.html.twig */
class __TwigTemplate_94b57c0a05aea033400966fb067fb413 extends Twig_Template
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
        $context["submenu"] = "consult_setting";
        // line 7
        $context["script_controller"] = "setting/consult-setting";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "客服设置 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_maincontent($context, array $blocks = array())
    {
        // line 10
        echo "
<div class=\"page-header\"><h1>客服设置</h1></div>

";
        // line 13
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "flash_messages", array(), "method"), "html", null, true);
        echo "

<form class=\"form-horizontal\" method=\"post\" id=\"consult-setting-form\" novalidate>
  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\">
      <label >客服功能</label>
    </div>
    <div class=\"controls col-md-8 radios\">
      ";
        // line 21
        if (isset($context["consult"])) { $_consult_ = $context["consult"]; } else { $_consult_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->radios("enabled", array(1 => "开启", 0 => "关闭"), $this->getAttribute($_consult_, "enabled"));
        echo "
    </div>
  </div>
  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\">
      <label >浮动条颜色</label>
    </div>
    <div class=\"controls col-md-8 radios\">
";
        // line 30
        echo "  ";
        if (isset($context["consult"])) { $_consult_ = $context["consult"]; } else { $_consult_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->radios("color", array("default" => "<span class=\"btn btn-default btn-lg\" disabled></span>", "warning" => "<span class=\"btn btn-warning btn-lg\" disabled></span>", "danger" => "<span class=\"btn btn-danger btn-lg\" disabled></span>"), $this->getAttribute($_consult_, "color"));
        echo "
    </div>
  </div>
  <div data-role=\"template\" style=\"display:none\">
    <div class=\"row form-group has-feedback\">
      <div class=\"controls col-md-4 col-md-offset-3\">
        <input type=\"text\" name=\"\" class=\"form-control\" value=\"\" placeholder=\"\">
      </div>
      <div class=\"controls col-md-4\">
        <input type=\"text\" name=\"\" class=\"form-control\" value=\"\" placeholder=\"\">
        <button class=\"close delete-btn form-control-feedback\" data-role=\"item-delete\" type=\"button\" title=\"删除\">×</button></input>
      </div>
    </div>
  </div>
  <fieldset>
    <legend>QQ客服设置</legend>
    <div id=\"consult-qq\">
      ";
        // line 47
        if (isset($context["consult"])) { $_consult_ = $context["consult"]; } else { $_consult_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_consult_, "qq"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["qq"]) {
            // line 48
            echo "      <div class=\"row form-group has-feedback\">
        <div class=\"controls col-md-4 col-md-offset-3\">
          <input type=\"text\" name=\"qq[";
            // line 50
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_loop_, "index0"), "html", null, true);
            echo "][name]\" class=\"form-control\" value=\"";
            if (isset($context["qq"])) { $_qq_ = $context["qq"]; } else { $_qq_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_qq_, "name"), "html", null, true);
            echo "\" placeholder=\"QQ客服名称\">
        </div>
        <div class=\"controls col-md-4\">
          <input type=\"text\" name=\"qq[";
            // line 53
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_loop_, "index0"), "html", null, true);
            echo "][number]\" class=\"form-control\" value=\"";
            if (isset($context["qq"])) { $_qq_ = $context["qq"]; } else { $_qq_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_qq_, "number"), "html", null, true);
            echo "\" placeholder=\"QQ号\">
          ";
            // line 54
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            if (($this->getAttribute($_loop_, "index0") > 0)) {
                // line 55
                echo "          <button class=\"close delete-btn form-control-feedback\" data-role=\"item-delete\" type=\"button\" title=\"删除\">×</button>
          ";
            }
            // line 57
            echo "        </div>
      </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qq'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "    </div>
    <div class=\"row form-group\">
      <div class=\"controls col-md-4 col-md-offset-3\">
        <span class=\"btn-link\" data-role=\"item-add\" data-parentId='consult-qq' data-length='";
        // line 63
        if (isset($context["consult"])) { $_consult_ = $context["consult"]; } else { $_consult_ = null; }
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($_consult_, "qq")), "html", null, true);
        echo "'>新增</span>
      </div>
    </div>
  </fieldset>


  <fieldset>
    <legend>QQ群设置</legend>
    <div id=\"consult-qqgroup\">
      ";
        // line 72
        if (isset($context["consult"])) { $_consult_ = $context["consult"]; } else { $_consult_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_consult_, "qqgroup"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["qqgroup"]) {
            // line 73
            echo "      <div class=\"row form-group has-feedback\">
        <div class=\"controls col-md-4 col-md-offset-3\">
          <input type=\"text\" name=\"qqgroup[";
            // line 75
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_loop_, "index0"), "html", null, true);
            echo "][name]\" class=\"form-control\" value=\"";
            if (isset($context["qqgroup"])) { $_qqgroup_ = $context["qqgroup"]; } else { $_qqgroup_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_qqgroup_, "name"), "html", null, true);
            echo "\" placeholder=\"QQ群名称\">
        </div>
        <div class=\"controls col-md-4\">
          <input type=\"text\" name=\"qqgroup[";
            // line 78
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_loop_, "index0"), "html", null, true);
            echo "][number]\" class=\"form-control\" value=\"";
            if (isset($context["qqgroup"])) { $_qqgroup_ = $context["qqgroup"]; } else { $_qqgroup_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_qqgroup_, "number"), "html", null, true);
            echo "\" placeholder=\"QQ群号\">
          ";
            // line 79
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            if (($this->getAttribute($_loop_, "index0") > 0)) {
                // line 80
                echo "          <button class=\"close delete-btn form-control-feedback\" data-role=\"item-delete\" type=\"button\" title=\"删除\">×</button>
          ";
            }
            // line 82
            echo "        </div>
      </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qqgroup'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "    </div>
    <div class=\"row form-group\">
      <div class=\"controls col-md-4 col-md-offset-3\">
        <span class=\"btn-link\" data-role=\"item-add\" data-parentId='consult-qqgroup' data-length='";
        // line 88
        if (isset($context["consult"])) { $_consult_ = $context["consult"]; } else { $_consult_ = null; }
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($_consult_, "qqgroup")), "html", null, true);
        echo "'>新增</span>
      </div>
    </div>
  </fieldset>

  <fieldset>
    <legend>联系电话设置</legend>
    <div class=\"row form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"worktime\">工作时间</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"worktime\" name=\"worktime\" class=\"form-control\" value=\"";
        // line 100
        if (isset($context["consult"])) { $_consult_ = $context["consult"]; } else { $_consult_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_consult_, "worktime"), "html", null, true);
        echo "\">
      </div>
    </div>
    

    <div id=\"consult-phone\">
      ";
        // line 106
        if (isset($context["consult"])) { $_consult_ = $context["consult"]; } else { $_consult_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_consult_, "phone"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["phone"]) {
            // line 107
            echo "      <div class=\"row form-group has-feedback\">
        <div class=\"controls col-md-4 col-md-offset-3\">
          <input type=\"text\" name=\"phone[";
            // line 109
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_loop_, "index0"), "html", null, true);
            echo "][name]\" class=\"form-control\" value=\"";
            if (isset($context["phone"])) { $_phone_ = $context["phone"]; } else { $_phone_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_phone_, "name"), "html", null, true);
            echo "\" placeholder=\"联系人\">
        </div>
        <div class=\"controls col-md-4\">
          <input type=\"text\" name=\"phone[";
            // line 112
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_loop_, "index0"), "html", null, true);
            echo "][number]\" class=\"form-control\" value=\"";
            if (isset($context["phone"])) { $_phone_ = $context["phone"]; } else { $_phone_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_phone_, "number"), "html", null, true);
            echo "\" placeholder=\"联系电话\">
          ";
            // line 113
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            if (($this->getAttribute($_loop_, "index0") > 0)) {
                // line 114
                echo "          <button class=\"close delete-btn form-control-feedback\" data-role=\"item-delete\" type=\"button\" title=\"删除\">×</button>
          ";
            }
            // line 116
            echo "        </div>
      </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "    </div>
    <div class=\"row form-group\">
      <div class=\"controls col-md-4 col-md-offset-3\">
        <span class=\"btn-link\" data-role=\"item-add\" data-parentId='consult-phone' data-length='";
        // line 122
        if (isset($context["consult"])) { $_consult_ = $context["consult"]; } else { $_consult_ = null; }
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($_consult_, "phone")), "html", null, true);
        echo "'>新增</span>
      </div>
    </div>
  </fieldset>
  
  <fieldset>
    <legend>其他设置</legend>
    <div class=\"row form-group\">
      <div class=\"col-md-3 control-label\">
        <label>微信二维码</label>
      </div>
      <div class=\"col-md-8 controls\">
        <div id=\"consult-container\">";
        // line 134
        if (isset($context["consult"])) { $_consult_ = $context["consult"]; } else { $_consult_ = null; }
        if ($this->getAttribute($_consult_, "webchatURI")) {
            echo "<img src=\"";
            if (isset($context["consult"])) { $_consult_ = $context["consult"]; } else { $_consult_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($_consult_, "webchatURI")), "html", null, true);
            echo "\">";
        }
        echo "</div>
        <button class=\"btn btn-default btn-sm\" id=\"consult-upload\" type=\"button\" data-url=\"";
        // line 135
        echo $this->env->getExtension('routing')->getPath("admin_setting_consult_upload");
        echo "\">上传</button>
        <p class=\"help-block\">请上传png, gif, jpg格式的图片文件。</p>
        <input type=\"hidden\" name=\"webchatURI\" value=\"";
        // line 137
        if (isset($context["consult"])) { $_consult_ = $context["consult"]; } else { $_consult_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_consult_, "webchatURI"), "html", null, true);
        echo "\">
      </div>
    </div>
    

    <div class=\"row form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"email\">工作邮箱</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"email\" name=\"email\" class=\"form-control\" value=\"";
        // line 147
        if (isset($context["consult"])) { $_consult_ = $context["consult"]; } else { $_consult_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_consult_, "email"), "html", null, true);
        echo "\">
      </div>
    </div>
  </fieldset>

  

  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\"></div>
    <div class=\"controls col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">提交</button>
    </div>
  </div>

  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:consult-setting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  400 => 161,  382 => 147,  368 => 137,  363 => 135,  353 => 134,  337 => 122,  332 => 119,  316 => 116,  312 => 114,  309 => 113,  301 => 112,  291 => 109,  287 => 107,  269 => 106,  259 => 100,  243 => 88,  238 => 85,  222 => 82,  218 => 80,  215 => 79,  207 => 78,  197 => 75,  193 => 73,  175 => 72,  162 => 63,  157 => 60,  141 => 57,  137 => 55,  134 => 54,  126 => 53,  116 => 50,  112 => 48,  94 => 47,  72 => 30,  60 => 21,  48 => 13,  43 => 10,  40 => 9,  33 => 3,  28 => 7,  26 => 5,);
    }
}
