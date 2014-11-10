<?php

/* TopxiaAdminBundle:Default:system.status.html.twig */
class __TwigTemplate_791534126f97ee6a708fd13d8e183b28 extends Twig_Template
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
        echo "<table class=\"table table-condensed table-bordered table-striped table-hover\" >
  ";
        // line 2
        $context["status"] = 0;
        // line 3
        echo "  ";
        if (isset($context["error"])) { $_error_ = $context["error"]; } else { $_error_ = null; }
        if (($_error_ != "error")) {
            // line 4
            echo "    ";
            if (isset($context["mainAppUpgrade"])) { $_mainAppUpgrade_ = $context["mainAppUpgrade"]; } else { $_mainAppUpgrade_ = null; }
            if ($_mainAppUpgrade_) {
                // line 5
                echo "      ";
                $context["status"] = 1;
                // line 6
                echo "      <tr>
        <td>主系统</td>
        <td>
          <a class=\"btn btn-xs btn-info pull-right\" href=\"";
                // line 9
                echo $this->env->getExtension('routing')->getPath("admin_app_upgrades");
                echo "\">立即更新</a>
          <span class=\"glyphicon glyphicon-info-sign text-info\"></span>
          最新版本:";
                // line 11
                if (isset($context["mainAppUpgrade"])) { $_mainAppUpgrade_ = $context["mainAppUpgrade"]; } else { $_mainAppUpgrade_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_mainAppUpgrade_, "package"), "toVersion"), "html", null, true);
                echo "
          当前版本: ";
                // line 12
                echo twig_escape_filter($this->env, twig_constant("Topxia\\System::VERSION"), "html", null, true);
                echo "
        </td>
      </tr>
    ";
            } else {
                // line 16
                echo "      <tr>
        <td>主系统</td>
        <td>
          <span class=\"glyphicon glyphicon-ok-sign text-success\"></span>
          已是最新版本 ";
                // line 20
                echo twig_escape_filter($this->env, twig_constant("Topxia\\System::VERSION"), "html", null, true);
                echo "
        </td>
      </tr>
    ";
            }
            // line 24
            echo "
  ";
        }
        // line 26
        echo "
      ";
        // line 27
        if (isset($context["error"])) { $_error_ = $context["error"]; } else { $_error_ = null; }
        if (($_error_ == "error")) {
            // line 28
            echo "        <tr><td>主系统</td><td rowspan=\"4\"><div class=\"empty\"><span  style=\"color:#cc0000;float:left;text-align:left;\">云平台参数设置不正确，会影响到系统正常的运行，<a href=\"";
            echo $this->env->getExtension('routing')->getPath("admin_setting_cloud");
            echo "\">请修改设置。</a></sapn></div></td></tr>
        <tr><td>应用更新</td></tr>

        <tr ><td>新应用</td></tr>

        <tr><td>云视频</td></tr>

      ";
        } else {
            // line 36
            echo "        <tr><td>应用更新</td><td>";
            if (isset($context["app_count"])) { $_app_count_ = $context["app_count"]; } else { $_app_count_ = null; }
            if ($_app_count_) {
                // line 37
                echo "          ";
                if (isset($context["status"])) { $_status_ = $context["status"]; } else { $_status_ = null; }
                if (isset($context["app_count"])) { $_app_count_ = $context["app_count"]; } else { $_app_count_ = null; }
                if (((((array_key_exists("status", $context)) ? (_twig_default_filter($_status_, 0)) : (0)) == 1) && ($_app_count_ == 1))) {
                    // line 38
                    echo "          <span class=\"glyphicon glyphicon-ok-sign text-success\"></span> 所有应用都已是最新版本
          ";
                } else {
                    // line 39
                    echo "<span class=\"glyphicon glyphicon-info-sign text-info\"></span> 还有 <span class=\"badge\" style=\"background-color:#cc0000;\">
          ";
                    // line 40
                    if (isset($context["status"])) { $_status_ = $context["status"]; } else { $_status_ = null; }
                    if ((((array_key_exists("status", $context)) ? (_twig_default_filter($_status_, 0)) : (0)) == 1)) {
                        if (isset($context["app_count"])) { $_app_count_ = $context["app_count"]; } else { $_app_count_ = null; }
                        echo twig_escape_filter($this->env, ($_app_count_ - 1), "html", null, true);
                    } else {
                        // line 41
                        echo "          ";
                        if (isset($context["app_count"])) { $_app_count_ = $context["app_count"]; } else { $_app_count_ = null; }
                        echo twig_escape_filter($this->env, $_app_count_, "html", null, true);
                        echo "
          ";
                    }
                    // line 42
                    echo "</span> 个应用没有更新 <a class=\"btn btn-xs btn-info pull-right\" href=\"";
                    echo $this->env->getExtension('routing')->getPath("admin_app_upgrades");
                    echo "\">立即更新</a>
          ";
                }
                // line 44
                echo "          ";
            } else {
                echo "<span class=\"glyphicon glyphicon-ok-sign text-success\"></span> 所有应用都已是最新版本
      ";
            }
            // line 45
            echo "</td></tr>

        <tr><td>新应用</td><td>";
            // line 47
            if (isset($context["unInstallAppCount"])) { $_unInstallAppCount_ = $context["unInstallAppCount"]; } else { $_unInstallAppCount_ = null; }
            if (($_unInstallAppCount_ > 0)) {
                echo "<span class=\"glyphicon glyphicon-info-sign text-info\"></span> 还有 <span class=\"badge\">";
                if (isset($context["unInstallAppCount"])) { $_unInstallAppCount_ = $context["unInstallAppCount"]; } else { $_unInstallAppCount_ = null; }
                echo twig_escape_filter($this->env, $_unInstallAppCount_, "html", null, true);
                echo "</span> 个应用没有安装<a class=\"pull-right\" href=\"";
                echo $this->env->getExtension('routing')->getPath("admin_app_center");
                echo "\">查看</a>";
            } else {
                echo "<span class=\"glyphicon glyphicon-ok-sign text-success\"></span> 已安装了全部应用
      ";
            }
            // line 48
            echo "</td></tr>

        <tr><td>云视频</td><td>";
            // line 50
            if (($this->env->getExtension('topxia_web_twig')->getSetting("storage.cloud_bucket") != "")) {
                echo "<span class=\"glyphicon glyphicon-ok-sign text-success\"></span> 已开通";
                if (($this->env->getExtension('topxia_web_twig')->getSetting("storage.upload_mode") != "cloud")) {
                    echo "(尚未启用)<a class=\"pull-right\" href=\"";
                    echo $this->env->getExtension('routing')->getPath("admin_setting_cloud");
                    echo "\">查看</a>";
                }
            } else {
                echo "<span class=\"glyphicon glyphicon-info-sign text-info\"></span> 还未开通<a class=\"pull-right\" href=\"";
                echo $this->env->getExtension('routing')->getPath("admin_setting_cloud");
                echo "\">查看</a>
      ";
            }
            // line 51
            echo "</td></tr>
      ";
        }
        // line 53
        echo "        <tr><td>直播</td><td>";
        if (($this->env->getExtension('topxia_web_twig')->getSetting("course.live_student_capacity", 0) > 0)) {
            echo "<span class=\"glyphicon glyphicon-ok-sign text-success\"></span> 已开通";
            if (($this->env->getExtension('topxia_web_twig')->getSetting("course.live_course_enabled") == 0)) {
                echo "(尚未启用)<a class=\"pull-right\" href=\"";
                echo $this->env->getExtension('routing')->getPath("admin_setting_course_setting");
                echo "#live-course-set\">查看</a>";
            }
        } else {
            echo "<span class=\"glyphicon glyphicon-info-sign text-info\"></span> 还未开通<a class=\"pull-right\" href=\"";
            echo $this->env->getExtension('routing')->getPath("admin_setting_course_setting");
            echo "#live-course-set\">查看</a>
      ";
        }
        // line 54
        echo "</td></tr>

        <tr><td>移动客户端</td><td>";
        // line 56
        if ((($this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("mobile"), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("mobile"), "enabled"), null)) : (null))) {
            echo "<span class=\"glyphicon glyphicon-ok-sign text-success\"></span> 已启用";
        } else {
            echo "<span class=\"glyphicon glyphicon-info-sign text-info\"></span> 还未启用<a class=\"pull-right\" href=\"";
            echo $this->env->getExtension('routing')->getPath("admin_setting_mobile");
            echo "\">查看</a>
      ";
        }
        // line 57
        echo "</td></tr>

</table>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Default:system.status.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 57,  191 => 56,  187 => 54,  172 => 53,  168 => 51,  154 => 50,  150 => 48,  137 => 47,  133 => 45,  127 => 44,  121 => 42,  114 => 41,  108 => 40,  105 => 39,  101 => 38,  96 => 37,  92 => 36,  80 => 28,  77 => 27,  74 => 26,  70 => 24,  63 => 20,  57 => 16,  50 => 12,  45 => 11,  40 => 9,  35 => 6,  32 => 5,  28 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
