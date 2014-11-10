<?php

/* TopxiaAdminBundle:System:user-fields.modal.html.twig */
class __TwigTemplate_c2c703706f0faa1f605179f2f441046f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"modal fade\" id=\"myModal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
        <h4 class=\"modal-title\">添加字段</h4>
      </div>
      <form method=\"post\" class=\"form-horizontal\" id=\"field-form\" action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getUrl("admin_user_fields_add");
        echo "\">
      <div class=\"modal-body\">
            
            <div class=\"form-group \"> 
             <label class=\"col-md-4 control-label\" for=
             \"field_title\">字段名称</label>
              <div class=\"col-md-6 controls\">
              <input type=\"text\"  name=\"field_title\" id=\"field_title\"  class=\"form-control\">
              </div>
            </div>

            <div class=\"form-group \"> 
             <label class=\"col-md-4 control-label\" for=\"field_type\">字段类型</label>
              <div class=\"col-md-6 controls\">
                  <select class=\"form-control\" name=\"field_type\" id=\"field_type\">
                    <option value=\"\" num=\"\">请选择</option>
                    <option value =\"varchar\" num=\"还可以添加";
        // line 24
        if (isset($context["varcharCount"])) { $_varcharCount_ = $context["varcharCount"]; } else { $_varcharCount_ = null; }
        echo twig_escape_filter($this->env, (10 - $_varcharCount_), "html", null, true);
        echo "个字段\" ";
        if (isset($context["varcharCount"])) { $_varcharCount_ = $context["varcharCount"]; } else { $_varcharCount_ = null; }
        if (($_varcharCount_ == 10)) {
            echo "disabled=\"disabled\"";
        }
        echo ">文本";
        if (isset($context["varcharCount"])) { $_varcharCount_ = $context["varcharCount"]; } else { $_varcharCount_ = null; }
        if (($_varcharCount_ == 10)) {
            echo "(已满10个)";
        }
        echo "</option>
                    <option value =\"text\" num=\"还可以添加";
        // line 25
        if (isset($context["textCount"])) { $_textCount_ = $context["textCount"]; } else { $_textCount_ = null; }
        echo twig_escape_filter($this->env, (10 - $_textCount_), "html", null, true);
        echo "个字段\" ";
        if (isset($context["textCount"])) { $_textCount_ = $context["textCount"]; } else { $_textCount_ = null; }
        if (($_textCount_ == 10)) {
            echo "disabled=\"disabled\"";
        }
        echo ">多行文本";
        if (isset($context["textCount"])) { $_textCount_ = $context["textCount"]; } else { $_textCount_ = null; }
        if (($_textCount_ == 10)) {
            echo "(已满10个)";
        }
        echo "</option>
                    <option value=\"int\" num=\"还可以添加";
        // line 26
        if (isset($context["intCount"])) { $_intCount_ = $context["intCount"]; } else { $_intCount_ = null; }
        echo twig_escape_filter($this->env, (5 - $_intCount_), "html", null, true);
        echo "个字段,最大值为9位整数\" ";
        if (isset($context["intCount"])) { $_intCount_ = $context["intCount"]; } else { $_intCount_ = null; }
        if (($_intCount_ == 5)) {
            echo "disabled=\"disabled\"";
        }
        echo ">整数";
        if (isset($context["intCount"])) { $_intCount_ = $context["intCount"]; } else { $_intCount_ = null; }
        if (($_intCount_ == 5)) {
            echo "(已满5个)";
        }
        echo "</option>
                    <option value=\"float\" num=\"还可以添加";
        // line 27
        if (isset($context["floatCount"])) { $_floatCount_ = $context["floatCount"]; } else { $_floatCount_ = null; }
        echo twig_escape_filter($this->env, (5 - $_floatCount_), "html", null, true);
        echo "个字段,保留到两位小数\" ";
        if (isset($context["floatCount"])) { $_floatCount_ = $context["floatCount"]; } else { $_floatCount_ = null; }
        if (($_floatCount_ == 5)) {
            echo "disabled=\"disabled\"";
        }
        echo ">小数";
        if (isset($context["floatCount"])) { $_floatCount_ = $context["floatCount"]; } else { $_floatCount_ = null; }
        if (($_floatCount_ == 5)) {
            echo "(已满5个)";
        }
        echo "</option>
                    <option value=\"date\" num=\"还可以添加";
        // line 28
        if (isset($context["dateCount"])) { $_dateCount_ = $context["dateCount"]; } else { $_dateCount_ = null; }
        echo twig_escape_filter($this->env, (5 - $_dateCount_), "html", null, true);
        echo "个字段\" ";
        if (isset($context["dateCount"])) { $_dateCount_ = $context["dateCount"]; } else { $_dateCount_ = null; }
        if (($_dateCount_ == 5)) {
            echo "disabled=\"disabled\"";
        }
        echo ">日期";
        if (isset($context["dateCount"])) { $_dateCount_ = $context["dateCount"]; } else { $_dateCount_ = null; }
        if (($_dateCount_ == 5)) {
            echo "(已满5个)";
        }
        echo "</option>
                  </select>
                  <div class=\"help-block\" id=\"type_num\" style=\"color:green;\" ></div>
              </div>
            </div> 

            <div class=\"form-group \"> 
             <label class=\"col-md-4 control-label\" for=\"field_seq\">显示序号</label>
              <div class=\"col-md-6 controls\">
              <input type=\"text\"  name=\"field_seq\" id=\"field_seq\" class=\"form-control\" value=\"1\">
              </div>
            </div>

            <div class=\"form-group \"> 
             <label class=\"col-md-4 control-label\">是否启用、显示</label>
             <div class=\"col-md-2\"><input type=\"checkbox\"  checked=checked name=\"field_enabled\" vaule=\"1\" style=\"height:18px;width:18px;\"></div>
            </div>
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->renderCsrfToken("site"), "html", null, true);
        echo "\">
       </div> 
      
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">取消</button>
        <button type=\"submit\" class=\"btn btn-primary\" id=\"add-btn\">保存</button>
      </div>
      </form>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:user-fields.modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 45,  107 => 28,  92 => 27,  77 => 26,  62 => 25,  47 => 24,  72 => 11,  60 => 8,  55 => 7,  50 => 6,  41 => 5,  36 => 4,  31 => 3,  25 => 2,  19 => 1,  73 => 30,  71 => 29,  66 => 28,  61 => 25,  59 => 24,  43 => 10,  40 => 9,  33 => 3,  28 => 8,  26 => 5,);
    }
}
