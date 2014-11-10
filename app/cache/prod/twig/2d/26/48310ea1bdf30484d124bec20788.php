<?php

/* TopxiaAdminBundle:System:operation.layout.html.twig */
class __TwigTemplate_2d2648310ea1bdf30484d124bec20788 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaAdminBundle:System:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
            'maincontent' => array($this, 'block_maincontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle:System:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["menu"] = "operation";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "全局设置 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "<ul class=\"nav nav-tabs mbl\">

  <li class=\"";
        // line 10
        if (isset($context["submenu"])) { $_submenu_ = $context["submenu"]; } else { $_submenu_ = null; }
        if (($_submenu_ == "course_setting")) {
            echo "active";
        }
        echo "\">
    <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getUrl("admin_setting_course_setting");
        echo "\">课程设置
    </a>
  </li>

  <li class=\"";
        // line 15
        if (isset($context["submenu"])) { $_submenu_ = $context["submenu"]; } else { $_submenu_ = null; }
        if (($_submenu_ == "questions_setting")) {
            echo "active";
        }
        echo "\">
    <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getUrl("admin_setting_questions_setting");
        echo "\">题库设置
    </a>
  </li>

  <li class=\"";
        // line 20
        if (isset($context["submenu"])) { $_submenu_ = $context["submenu"]; } else { $_submenu_ = null; }
        if (($_submenu_ == "consult_setting")) {
            echo "active";
        }
        echo "\">
    <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getUrl("admin_setting_consult_setting");
        echo "\">客服设置
    </a>
  </li>

  <li class=\"";
        // line 25
        if (isset($context["submenu"])) { $_submenu_ = $context["submenu"]; } else { $_submenu_ = null; }
        if (($_submenu_ == "mailer")) {
            echo "active";
        }
        echo "\">
  \t<a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getUrl("admin_setting_mailer");
        echo "\">邮件服务器设置
  \t</a>
  </li>
  <li class=\"";
        // line 29
        if (isset($context["submenu"])) { $_submenu_ = $context["submenu"]; } else { $_submenu_ = null; }
        if (($_submenu_ == "theme")) {
            echo "active";
        }
        echo "\">
       <a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("admin_setting_theme");
        echo "\">主题设置</a>
  </li>

   <li class=\"";
        // line 33
        if (isset($context["submenu"])) { $_submenu_ = $context["submenu"]; } else { $_submenu_ = null; }
        if (($_submenu_ == "default")) {
            echo "active";
        }
        echo "\">
    <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getUrl("admin_setting_default");
        echo "\">系统默认设置
    </a>
  </li>
  <li class=\"";
        // line 37
        if (isset($context["submenu"])) { $_submenu_ = $context["submenu"]; } else { $_submenu_ = null; }
        if (($_submenu_ == "share")) {
            echo "active";
        }
        echo "\">
    <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getUrl("admin_setting_share");
        echo "\">分享设置
    </a>
  </li>
  <li class=\"";
        // line 41
        if (isset($context["submenu"])) { $_submenu_ = $context["submenu"]; } else { $_submenu_ = null; }
        if (($_submenu_ == "customer_service")) {
            echo "active";
        }
        echo "\" style=\"display:none;\">
    <a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getUrl("admin_customer_service");
        echo "\">在线客户服务
    </a>
  </li>

</ul>


  ";
        // line 49
        $this->displayBlock('maincontent', $context, $blocks);
    }

    public function block_maincontent($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:operation.layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 42,  140 => 41,  134 => 38,  127 => 37,  114 => 33,  101 => 29,  95 => 26,  88 => 25,  74 => 20,  67 => 16,  60 => 15,  53 => 11,  46 => 10,  42 => 8,  39 => 7,  32 => 3,  27 => 5,  763 => 329,  747 => 317,  742 => 316,  729 => 307,  717 => 297,  708 => 284,  694 => 274,  680 => 264,  666 => 254,  652 => 244,  639 => 235,  626 => 226,  613 => 217,  600 => 206,  597 => 205,  594 => 204,  578 => 201,  574 => 199,  568 => 198,  565 => 197,  527 => 161,  524 => 160,  518 => 159,  515 => 158,  509 => 157,  482 => 154,  478 => 152,  473 => 151,  467 => 150,  463 => 149,  446 => 146,  442 => 144,  438 => 143,  421 => 140,  417 => 138,  413 => 137,  396 => 134,  392 => 132,  388 => 131,  371 => 128,  367 => 126,  363 => 125,  346 => 122,  342 => 120,  338 => 119,  321 => 116,  317 => 114,  313 => 113,  296 => 110,  292 => 108,  288 => 107,  271 => 104,  267 => 102,  263 => 101,  246 => 98,  242 => 96,  238 => 95,  232 => 94,  229 => 93,  222 => 88,  216 => 87,  213 => 86,  207 => 85,  200 => 83,  195 => 82,  189 => 81,  185 => 80,  181 => 78,  177 => 77,  173 => 75,  169 => 74,  165 => 72,  161 => 71,  157 => 49,  153 => 68,  149 => 66,  145 => 65,  141 => 63,  137 => 62,  133 => 60,  129 => 59,  125 => 57,  121 => 34,  117 => 54,  113 => 53,  108 => 30,  100 => 48,  81 => 21,  75 => 30,  61 => 20,  47 => 10,  43 => 8,  40 => 7,  33 => 3,  28 => 6,  26 => 5,);
    }
}
