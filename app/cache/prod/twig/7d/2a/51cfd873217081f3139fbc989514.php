<?php

/* TopxiaWebBundle:CourseFileManage:tbody-tr.html.twig */
class __TwigTemplate_7d2a51cfd873217081f3139fbc989514 extends Twig_Template
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
        $context["web_macro"] = $this->env->loadTemplate("TopxiaWebBundle::macro.html.twig");
        // line 2
        $context["quality"] = "";
        // line 3
        echo "<tr id=\"upload-file-tr-";
        if (isset($context["uploadFile"])) { $_uploadFile_ = $context["uploadFile"]; } else { $_uploadFile_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_uploadFile_, "id"), "html", null, true);
        echo "\" data-role=\"item\" data-convertHash=\"";
        if (isset($context["uploadFile"])) { $_uploadFile_ = $context["uploadFile"]; } else { $_uploadFile_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_uploadFile_, "convertHash"), "html", null, true);
        echo "\">

  <td><input value=\"";
        // line 5
        if (isset($context["uploadFile"])) { $_uploadFile_ = $context["uploadFile"]; } else { $_uploadFile_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_uploadFile_, "id"), "html", null, true);
        echo "\" type=\"checkbox\" data-role=\"batch-item\" ></td>

  <td>
    ";
        // line 8
        if (isset($context["uploadFile"])) { $_uploadFile_ = $context["uploadFile"]; } else { $_uploadFile_ = null; }
        if (($this->getAttribute($_uploadFile_, "storage") == "cloud")) {
            // line 9
            echo "      <span class=\"glyphicon glyphicon-cloud text-muted\" title=\"云文件\"></span>
    ";
        }
        // line 11
        echo "
    ";
        // line 12
        if (isset($context["uploadFile"])) { $_uploadFile_ = $context["uploadFile"]; } else { $_uploadFile_ = null; }
        if (($this->getAttribute($_uploadFile_, "convertStatus") == "waiting")) {
            // line 13
            echo "      ";
            if (isset($context["uploadFile"])) { $_uploadFile_ = $context["uploadFile"]; } else { $_uploadFile_ = null; }
            echo $this->env->getExtension('topxia_web_twig')->subTextFilter($this->getAttribute($_uploadFile_, "filename"), 15);
            echo "<br><span class=\"text-warning text-sm\">正在文件格式转换</span>
      ";
            // line 14
            if (isset($context["now"])) { $_now_ = $context["now"]; } else { $_now_ = null; }
            if (isset($context["uploadFile"])) { $_uploadFile_ = $context["uploadFile"]; } else { $_uploadFile_ = null; }
            if ((($_now_ - $this->getAttribute($_uploadFile_, "updatedTime")) > 28800)) {
                // line 15
                echo "        <a href=\"javascript:;\" data-url=\"";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                if (isset($context["uploadFile"])) { $_uploadFile_ = $context["uploadFile"]; } else { $_uploadFile_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_file_convert", array("id" => $this->getAttribute($_course_, "id"), "fileId" => $this->getAttribute($_uploadFile_, "id"))), "html", null, true);
                echo "\" class=\"convert-file-btn text-danger\">重新转换</a>
      ";
            }
            // line 17
            echo "
    ";
        } elseif (($this->getAttribute($_uploadFile_, "convertStatus") == "doing")) {
            // line 19
            echo "      ";
            if (isset($context["uploadFile"])) { $_uploadFile_ = $context["uploadFile"]; } else { $_uploadFile_ = null; }
            echo $this->env->getExtension('topxia_web_twig')->subTextFilter($this->getAttribute($_uploadFile_, "filename"), 15);
            echo "<br><span class=\"text-info text-sm\">正在文件格式转换</span>
      ";
            // line 20
            if (isset($context["uploadFile"])) { $_uploadFile_ = $context["uploadFile"]; } else { $_uploadFile_ = null; }
            if (isset($context["now"])) { $_now_ = $context["now"]; } else { $_now_ = null; }
            if ((($this->getAttribute($_uploadFile_, "type") == "ppt") && (($_now_ - $this->getAttribute($_uploadFile_, "updatedTime")) > 1800))) {
                // line 21
                echo "        <a href=\"javascript:;\" data-url=\"";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                if (isset($context["uploadFile"])) { $_uploadFile_ = $context["uploadFile"]; } else { $_uploadFile_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_file_convert", array("id" => $this->getAttribute($_course_, "id"), "fileId" => $this->getAttribute($_uploadFile_, "id"))), "html", null, true);
                echo "\" class=\"convert-file-btn text-danger\">重新转换</a>
      ";
            }
            // line 23
            echo "    ";
        } elseif (($this->getAttribute($_uploadFile_, "convertStatus") == "error")) {
            // line 24
            echo "      ";
            if (isset($context["uploadFile"])) { $_uploadFile_ = $context["uploadFile"]; } else { $_uploadFile_ = null; }
            echo $this->env->getExtension('topxia_web_twig')->subTextFilter($this->getAttribute($_uploadFile_, "filename"), 15);
            echo "<br><span class=\"text-danger text-sm\">文件格式转换失败，<a href=\"javascript:;\" data-url=\"";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if (isset($context["uploadFile"])) { $_uploadFile_ = $context["uploadFile"]; } else { $_uploadFile_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_file_convert", array("id" => $this->getAttribute($_course_, "id"), "fileId" => $this->getAttribute($_uploadFile_, "id"))), "html", null, true);
            echo "\" class=\"convert-file-btn\">重新转换</a></span>
    ";
        } else {
            // line 26
            echo "      ";
            if (isset($context["uploadFile"])) { $_uploadFile_ = $context["uploadFile"]; } else { $_uploadFile_ = null; }
            if (twig_in_filter($this->getAttribute($_uploadFile_, "targetType"), array(0 => "courselesson", 1 => "coursematerial"))) {
                // line 27
                echo "        <a href=\"";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                if (isset($context["uploadFile"])) { $_uploadFile_ = $context["uploadFile"]; } else { $_uploadFile_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_file_show", array("id" => $this->getAttribute($_course_, "id"), "fileId" => $this->getAttribute($_uploadFile_, "id"))), "html", null, true);
                echo "\" target=\"_blank\">";
                if (isset($context["uploadFile"])) { $_uploadFile_ = $context["uploadFile"]; } else { $_uploadFile_ = null; }
                echo $this->env->getExtension('topxia_web_twig')->subTextFilter($this->getAttribute($_uploadFile_, "filename"), 15);
                echo "</a>
        ";
                // line 28
                if (isset($context["uploadFile"])) { $_uploadFile_ = $context["uploadFile"]; } else { $_uploadFile_ = null; }
                if (((($this->getAttribute($_uploadFile_, "type") == "ppt") && (!(($this->getAttribute($this->getAttribute($_uploadFile_, "metas2", array(), "any", false, true), "length", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_uploadFile_, "metas2", array(), "any", false, true), "length"), null)) : (null)))) && ($this->getAttribute($_uploadFile_, "targetType") == "courselesson"))) {
                    // line 29
                    echo "          <br><a href=\"javascript:;\" data-url=\"";
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    if (isset($context["uploadFile"])) { $_uploadFile_ = $context["uploadFile"]; } else { $_uploadFile_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_file_convert", array("id" => $this->getAttribute($_course_, "id"), "fileId" => $this->getAttribute($_uploadFile_, "id"))), "html", null, true);
                    echo "\" class=\"convert-file-btn text-danger\">重新转换</a>
        ";
                }
                // line 31
                echo "      ";
            } else {
                // line 32
                echo "        ";
                if (isset($context["uploadFile"])) { $_uploadFile_ = $context["uploadFile"]; } else { $_uploadFile_ = null; }
                echo $this->env->getExtension('topxia_web_twig')->subTextFilter($this->getAttribute($_uploadFile_, "filename"), 15);
                echo "
      ";
            }
            // line 34
            echo "    ";
        }
        // line 35
        echo "
    ";
        // line 36
        if (isset($context["uploadFile"])) { $_uploadFile_ = $context["uploadFile"]; } else { $_uploadFile_ = null; }
        if (($this->env->getExtension('topxia_web_twig')->getSetting("developer.debug") && (($this->getAttribute($this->getAttribute($_uploadFile_, "convertParams", array(), "any", false, true), "convertor", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_uploadFile_, "convertParams", array(), "any", false, true), "convertor"), null)) : (null)))) {
            // line 37
            echo "      <a href=\"javascript:;\" data-url=\"";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if (isset($context["uploadFile"])) { $_uploadFile_ = $context["uploadFile"]; } else { $_uploadFile_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_file_convert", array("id" => $this->getAttribute($_course_, "id"), "fileId" => $this->getAttribute($_uploadFile_, "id"))), "html", null, true);
            echo "\" class=\"convert-file-btn text-danger\">重新转换(调试模式)</a>
    ";
        }
        // line 39
        echo "    ";
        if (isset($context["uploadFile"])) { $_uploadFile_ = $context["uploadFile"]; } else { $_uploadFile_ = null; }
        if (($this->getAttribute($_uploadFile_, "useNum") == 0)) {
            // line 40
            echo "    <br>
    <span class=\"label label-danger tip\">未使用</span>
    ";
        }
        // line 43
        echo "
    ";
        // line 44
        if (isset($context["uploadFile"])) { $_uploadFile_ = $context["uploadFile"]; } else { $_uploadFile_ = null; }
        if ((($this->getAttribute($_uploadFile_, "type") == "video") && (($this->getAttribute($_uploadFile_, "metas2", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_uploadFile_, "metas2"), null)) : (null)))) {
            // line 45
            echo "      ";
            if (isset($context["uploadFile"])) { $_uploadFile_ = $context["uploadFile"]; } else { $_uploadFile_ = null; }
            if (($this->getAttribute($this->getAttribute($_uploadFile_, "convertParams"), "videoQuality") == "low")) {
                // line 46
                echo "      ";
                $context["quality"] = "流畅画质";
                // line 47
                echo "      ";
            } elseif (($this->getAttribute($this->getAttribute($_uploadFile_, "convertParams"), "videoQuality") == "normal")) {
                // line 48
                echo "      ";
                $context["quality"] = "标准画质";
                // line 49
                echo "      ";
            } elseif (($this->getAttribute($this->getAttribute($_uploadFile_, "convertParams"), "videoQuality") == "high")) {
                // line 50
                echo "      ";
                $context["quality"] = "精细画质";
                // line 51
                echo "      ";
            }
            // line 52
            echo "      ";
            if (isset($context["uploadFile"])) { $_uploadFile_ = $context["uploadFile"]; } else { $_uploadFile_ = null; }
            if ((($this->getAttribute($this->getAttribute($_uploadFile_, "metas2", array(), "any", false, true), "shd", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_uploadFile_, "metas2", array(), "any", false, true), "shd"), null)) : (null))) {
                // line 53
                echo "      ";
                if (isset($context["uploadFile"])) { $_uploadFile_ = $context["uploadFile"]; } else { $_uploadFile_ = null; }
                if (($this->getAttribute($_uploadFile_, "useNum") != 0)) {
                    echo "<br>";
                }
                // line 54
                echo "      <span class=\"label label-info  tip\" data-toggle=\"tooltip\" title=\"";
                if (isset($context["quality"])) { $_quality_ = $context["quality"]; } else { $_quality_ = null; }
                echo twig_escape_filter($this->env, $_quality_, "html", null, true);
                echo "\">超清</span>
      ";
            } elseif ((($this->getAttribute($this->getAttribute($_uploadFile_, "metas2", array(), "any", false, true), "hd", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_uploadFile_, "metas2", array(), "any", false, true), "hd"), null)) : (null))) {
                // line 56
                echo "      ";
                if (isset($context["uploadFile"])) { $_uploadFile_ = $context["uploadFile"]; } else { $_uploadFile_ = null; }
                if (($this->getAttribute($_uploadFile_, "useNum") != 0)) {
                    echo "<br>";
                }
                // line 57
                echo "      <span class=\"label label-info  tip\" data-toggle=\"tooltip\" title=\"";
                if (isset($context["quality"])) { $_quality_ = $context["quality"]; } else { $_quality_ = null; }
                echo twig_escape_filter($this->env, $_quality_, "html", null, true);
                echo "\">高清</span>
      ";
            } elseif ((($this->getAttribute($this->getAttribute($_uploadFile_, "metas2", array(), "any", false, true), "sd", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_uploadFile_, "metas2", array(), "any", false, true), "sd"), null)) : (null))) {
                // line 59
                echo "      ";
                if (isset($context["uploadFile"])) { $_uploadFile_ = $context["uploadFile"]; } else { $_uploadFile_ = null; }
                if (($this->getAttribute($_uploadFile_, "useNum") != 0)) {
                    echo "<br>";
                }
                // line 60
                echo "      <span class=\"label label-info  tip\" data-toggle=\"tooltip\" title=\"";
                if (isset($context["quality"])) { $_quality_ = $context["quality"]; } else { $_quality_ = null; }
                echo twig_escape_filter($this->env, $_quality_, "html", null, true);
                echo "\">标清</span>
      ";
            }
            // line 62
            echo "      
    ";
        }
        // line 64
        echo "  </td>
  <td> 
    ";
        // line 66
        if (isset($context["uploadFile"])) { $_uploadFile_ = $context["uploadFile"]; } else { $_uploadFile_ = null; }
        echo $this->env->getExtension('topxia_web_twig')->getDictText("fileType", $this->getAttribute($_uploadFile_, "type"));
        echo "
  </td>
  <td>";
        // line 68
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        if (isset($context["uploadFile"])) { $_uploadFile_ = $context["uploadFile"]; } else { $_uploadFile_ = null; }
        echo $_web_macro_->getbytesToSize($this->getAttribute($_uploadFile_, "size"));
        echo "</td>
  <td> 
    <span class=\"text-sm\">";
        // line 70
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        if (isset($context["users"])) { $_users_ = $context["users"]; } else { $_users_ = null; }
        if (isset($context["uploadFile"])) { $_uploadFile_ = $context["uploadFile"]; } else { $_uploadFile_ = null; }
        echo $_web_macro_->getuser_link((($this->getAttribute($_users_, $this->getAttribute($_uploadFile_, "updatedUserId"), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_users_, $this->getAttribute($_uploadFile_, "updatedUserId"), array(), "array"), null)) : (null)));
        echo "</span>
    <br>
    <span class=\"text-muted text-sm\">";
        // line 72
        if (isset($context["uploadFile"])) { $_uploadFile_ = $context["uploadFile"]; } else { $_uploadFile_ = null; }
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_uploadFile_, "updatedTime"), "Y-n-d H:i"), "html", null, true);
        echo "</span>
  </td>

</tr>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseFileManage:tbody-tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 72,  260 => 70,  253 => 68,  247 => 66,  243 => 64,  239 => 62,  232 => 60,  219 => 57,  213 => 56,  206 => 54,  200 => 53,  196 => 52,  193 => 51,  190 => 50,  187 => 49,  184 => 48,  178 => 46,  174 => 45,  171 => 44,  163 => 40,  159 => 39,  151 => 37,  148 => 36,  145 => 35,  142 => 34,  135 => 32,  132 => 31,  124 => 29,  121 => 28,  107 => 26,  96 => 24,  93 => 23,  85 => 21,  75 => 19,  71 => 17,  59 => 14,  53 => 13,  50 => 12,  47 => 11,  43 => 9,  40 => 8,  33 => 5,  23 => 3,  21 => 2,  19 => 1,  234 => 89,  226 => 59,  220 => 81,  217 => 80,  209 => 77,  197 => 70,  188 => 63,  181 => 47,  168 => 43,  165 => 59,  146 => 58,  123 => 44,  118 => 43,  111 => 27,  101 => 34,  91 => 28,  86 => 27,  81 => 20,  78 => 25,  68 => 19,  63 => 15,  58 => 17,  52 => 15,  45 => 10,  42 => 9,  35 => 3,  30 => 7,  28 => 6,  26 => 5,);
    }
}
