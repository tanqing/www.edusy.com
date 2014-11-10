<?php

/* TopxiaAdminBundle:Block:block-update-modal.html.twig */
class __TwigTemplate_4d4284ffb38f6069e78998a5824997cd extends Twig_Template
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
        // line 6
        $context["modal_class"] = "modal-lg";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "编辑内容";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "

<h5>编辑区名称：";
        // line 11
        if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_block_, "title"), "html", null, true);
        echo "</h5>

<form id=\"block-form\"  ";
        // line 13
        if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
        if (($this->getAttribute($_block_, "mode") == "template")) {
            echo "class=\"form-horizontal\" ";
        }
        echo " action=\"";
        if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_block_update", array("block" => $this->getAttribute($_block_, "id"))), "html", null, true);
        echo "\" method=\"post\">
  ";
        // line 14
        if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
        if (($this->getAttribute($_block_, "mode") == "html")) {
            // line 15
            echo "  <div class=\"form-group\">
      <div class=\"controls\">
        <textarea class=\"form-control\" id=\"blockContent\" rows=\"10\" name=\"content\" data-role=\"editor-field\" style=\"z-index:1000;\">";
            // line 17
            if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_block_, "content"), "html", null, true);
            echo "</textarea>
      </div>
  </div>
  ";
        } else {
            // line 21
            echo "    ";
            if (isset($context["templateItems"])) { $_templateItems_ = $context["templateItems"]; } else { $_templateItems_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_templateItems_);
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 22
                echo "      ";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                $context["join"] = twig_join_filter(array(0 => $this->getAttribute($_item_, "title"), 1 => $this->getAttribute($_item_, "type")), ":");
                // line 23
                echo "      ";
                if (isset($context["templateData"])) { $_templateData_ = $context["templateData"]; } else { $_templateData_ = null; }
                if (isset($context["join"])) { $_join_ = $context["join"]; } else { $_join_ = null; }
                $context["template"] = (($this->getAttribute($_templateData_, $_join_, array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_templateData_, $_join_, array(), "array"), null)) : (null));
                // line 24
                echo "      ";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                if ((($this->getAttribute($_item_, "type") == "a") || ($this->getAttribute($_item_, "type") == "text"))) {
                    // line 25
                    echo "        <div class=\"form-group\">
          <div class=\"col-md-2 control-label\"><label for=\"";
                    // line 26
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_item_, "title"), "html", null, true);
                    echo ":";
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_item_, "type"), "html", null, true);
                    echo "\">";
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_item_, "title"), "html", null, true);
                    echo "</label></div>
          <div class=\"col-md-8 controls\"> 
          <input class=\"form-control\" type=\"text\" id=\"";
                    // line 28
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_item_, "title"), "html", null, true);
                    echo ":";
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_item_, "type"), "html", null, true);
                    echo "\" value=\"";
                    if (isset($context["template"])) { $_template_ = $context["template"]; } else { $_template_ = null; }
                    echo twig_escape_filter($this->env, $_template_, "html", null, true);
                    echo "\" name=\"";
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_item_, "title"), "html", null, true);
                    echo ":";
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_item_, "type"), "html", null, true);
                    echo "\"></div>
        </div>
      ";
                } else {
                    // line 31
                    echo "        <div class=\"form-group\">
          <div class=\"col-md-2 control-label\"><label for=\"";
                    // line 32
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_item_, "title"), "html", null, true);
                    echo ":";
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_item_, "type"), "html", null, true);
                    echo "\">";
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_item_, "title"), "html", null, true);
                    echo "</label></div>
          <div class=\"col-md-8 controls\">
            <button class=\"btn btn-default btn-sm upload-img\" id=\"";
                    // line 34
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_item_, "title"), "html", null, true);
                    echo ":";
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_item_, "type"), "html", null, true);
                    echo "\" type=\"button\" data-url=\"";
                    echo $this->env->getExtension('routing')->getPath("file_upload", array("group" => "default"));
                    echo "\" data-name=\"";
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_item_, "title"), "html", null, true);
                    echo ":";
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_item_, "type"), "html", null, true);
                    echo "\" >上传</button>       
            <button class=\"btn btn-default btn-sm upload-img-del\" type=\"button\"  data-name=\"";
                    // line 35
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_item_, "title"), "html", null, true);
                    echo ":";
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_item_, "type"), "html", null, true);
                    echo "\" ";
                    if (isset($context["template"])) { $_template_ = $context["template"]; } else { $_template_ = null; }
                    if ((!$_template_)) {
                        echo "style=\"display:none;\"";
                    }
                    echo ">删除</button>
            <input type=\"hidden\" name=\"";
                    // line 36
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_item_, "title"), "html", null, true);
                    echo ":";
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_item_, "type"), "html", null, true);
                    echo "\" value=\"";
                    if (isset($context["template"])) { $_template_ = $context["template"]; } else { $_template_ = null; }
                    echo twig_escape_filter($this->env, $_template_, "html", null, true);
                    echo "\">
            <a href=\"";
                    // line 37
                    if (isset($context["template"])) { $_template_ = $context["template"]; } else { $_template_ = null; }
                    echo twig_escape_filter($this->env, $_template_, "html", null, true);
                    echo "\" target=\"_blank\" ";
                    if (isset($context["template"])) { $_template_ = $context["template"]; } else { $_template_ = null; }
                    if ((!$_template_)) {
                        echo "style=\"display:none;\"";
                    }
                    echo ">";
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_item_, "title"), "html", null, true);
                    echo "</a>
          </div>
        </div>
      ";
                }
                // line 41
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "  ";
        }
        // line 43
        echo "  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>
";
        // line 45
        if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
        if (($this->getAttribute($_block_, "mode") == "html")) {
            // line 46
            echo "<form id=\"block-image-upload-form\" action=\"";
            echo $this->env->getExtension('routing')->getPath("file_upload", array("group" => "default"));
            echo "\" method=\"post\" enctype=\"multipart/form-data\">
  <input class=\"btn btn-default btn-sm\" type=\"file\" name=\"file\" value=\"上传\" style=\"display:inline-block;\">
  <button class=\"btn btn-default btn-sm\">上传图片</button>
  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->renderCsrfToken("site"), "html", null, true);
            echo "\">
</form>
";
        }
        // line 52
        echo "
<div class=\"mbm mtl\"><strong>编辑帮助</strong></div>
<div class=\"text-info\">";
        // line 54
        if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute($_block_, "tips"), "html", null, true));
        echo "</div>

<div class=\"mbm mtl\"><strong>变更记录</strong></div>
  <table id=\"block-history-table\" class=\"table table-striped table-condensed\">
    <tbody>
      ";
        // line 59
        if (isset($context["blockHistorys"])) { $_blockHistorys_ = $context["blockHistorys"]; } else { $_blockHistorys_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_blockHistorys_);
        foreach ($context['_seq'] as $context["_key"] => $context["blockHistory"]) {
            // line 60
            echo "      ";
            if (isset($context["blockHistory"])) { $_blockHistory_ = $context["blockHistory"]; } else { $_blockHistory_ = null; }
            $context["templateData"] = $this->getAttribute($_blockHistory_, "templateData");
            // line 61
            echo "        <tr id=\"";
            if (isset($context["blockHistory"])) { $_blockHistory_ = $context["blockHistory"]; } else { $_blockHistory_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_blockHistory_, "id"), "html", null, true);
            echo "\">
          <td>";
            // line 62
            if (isset($context["blockHistory"])) { $_blockHistory_ = $context["blockHistory"]; } else { $_blockHistory_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_blockHistory_, "createdTime"), "Y-n-d H:i:s"), "html", null, true);
            echo "</td>
          <td>";
            // line 63
            if (isset($context["historyUsers"])) { $_historyUsers_ = $context["historyUsers"]; } else { $_historyUsers_ = null; }
            if (isset($context["blockHistory"])) { $_blockHistory_ = $context["blockHistory"]; } else { $_blockHistory_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_historyUsers_, $this->getAttribute($_blockHistory_, "userId"), array(), "array"), "nickname"), "html", null, true);
            echo "</td>
          <td>
            <a class=\"btn btn-xs btn-default edit-btn\" 
            href=\"";
            // line 66
            if (isset($context["blockHistory"])) { $_blockHistory_ = $context["blockHistory"]; } else { $_blockHistory_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_blockhistory_preview", array("id" => $this->getAttribute($_blockHistory_, "id"))), "html", null, true);
            echo "\" target=\"_blank\"> 预览 </a>
          </td>
          ";
            // line 68
            if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
            if (($this->getAttribute($_block_, "mode") == "template")) {
                // line 69
                echo "          <td>
            <button class=\"btn-recover-template btn btn-xs btn-default edit-btn\">恢复此内容</button>
            <div class=\"data-role-content\" style=\"display:none\">";
                // line 71
                if (isset($context["templateData"])) { $_templateData_ = $context["templateData"]; } else { $_templateData_ = null; }
                echo twig_escape_filter($this->env, twig_jsonencode_filter($_templateData_), "html", null, true);
                echo "</div>
          </td>
          ";
            } else {
                // line 74
                echo "          <td>
            <button class=\"btn-recover-content btn btn-xs btn-default edit-btn\">恢复此内容</button>
            <div class=\"data-role-content\" style=\"display:none\"> ";
                // line 76
                if (isset($context["blockHistory"])) { $_blockHistory_ = $context["blockHistory"]; } else { $_blockHistory_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_blockHistory_, "content"), "html", null, true);
                echo " </div>
          </td>
          ";
            }
            // line 79
            echo "        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blockHistory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "    </tbody>
  </table>
   ";
        // line 83
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "paginator", array(0 => $_paginator_), "method"), "html", null, true);
        echo " 
";
    }

    // line 86
    public function block_footer($context, array $blocks = array())
    {
        // line 87
        echo "  <button type=\"button\" class=\"btn btn-link\" data-dismiss=\"modal\">取消</button>
  <button id=\"block-update-btn\" data-submiting-text=\"正在提交\" type=\"submit\" class=\"btn btn-primary\" data-toggle=\"form-submit\" data-target=\"#block-form\">保存</button>
  <script type=\"text/javascript\">app.load('block/update')</script>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Block:block-update-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  328 => 87,  325 => 86,  317 => 83,  313 => 81,  306 => 79,  299 => 76,  295 => 74,  288 => 71,  284 => 69,  281 => 68,  275 => 66,  267 => 63,  262 => 62,  256 => 61,  252 => 60,  247 => 59,  238 => 54,  234 => 52,  228 => 49,  221 => 46,  218 => 45,  212 => 43,  209 => 42,  203 => 41,  187 => 37,  176 => 36,  163 => 35,  147 => 34,  135 => 32,  132 => 31,  113 => 28,  101 => 26,  98 => 25,  94 => 24,  89 => 23,  85 => 22,  79 => 21,  71 => 17,  67 => 15,  64 => 14,  54 => 13,  48 => 11,  44 => 9,  41 => 8,  35 => 4,  30 => 6,  27 => 2,);
    }
}
