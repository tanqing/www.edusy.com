<?php

/* TopxiaAdminBundle:Course:layout.html.twig */
class __TwigTemplate_16f5b7031d197a3d740bd472181f4076 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaAdminBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'sidebar' => array($this, 'block_sidebar'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["nav"] = "course";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "  <div class=\"col-md-2\">
    ";
        // line 7
        $this->displayBlock('sidebar', $context, $blocks);
        // line 37
        echo "  </div>
  <div class=\"col-md-10\">
      ";
        // line 39
        $this->displayBlock('main', $context, $blocks);
        // line 40
        echo "  </div>
";
    }

    // line 7
    public function block_sidebar($context, array $blocks = array())
    {
        // line 8
        echo "      <div class=\"list-group\">
        <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("admin_course");
        echo "\" class=\"list-group-item ";
        if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
        if (($_menu_ == "course")) {
            echo "active";
        }
        echo "\">课程管理</a>
        ";
        // line 10
        if ($this->env->getExtension('topxia_web_twig')->getSetting("course.live_course_enabled")) {
            // line 11
            echo "        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("admin_live_course", array("status" => "underway"));
            echo "\" class=\"list-group-item ";
            if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
            if (($_menu_ == "live-course")) {
                echo "active";
            }
            echo "\">直播管理</a>
        ";
        }
        // line 13
        echo "        <a href=\"";
        echo $this->env->getExtension('routing')->getPath("admin_course_recommend_list");
        echo "\" class=\"list-group-item ";
        if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
        if (($_menu_ == "course-recommend-list")) {
            echo "active";
        }
        echo "\">推荐课程列表</a>

        <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getUrl("admin_course_order_manage");
        echo "\" class=\"list-group-item ";
        if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
        if (($_menu_ == "order")) {
            echo "active";
        }
        echo "\">订单管理</a>

        <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getUrl("admin_order_refunds", array("status" => "created"));
        echo "\" class=\"list-group-item ";
        if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
        if (($_menu_ == "refunds")) {
            echo "active";
        }
        echo "\">退款管理</a>

        <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("admin_review");
        echo "\" class=\"list-group-item ";
        if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
        if (($_menu_ == "review")) {
            echo "active";
        }
        echo "\">评价管理</a>

        <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getUrl("admin_thread");
        echo "\" class=\"list-group-item ";
        if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
        if (($_menu_ == "thread")) {
            echo "active";
        }
        echo "\">讨论区管理</a>

        <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getUrl("admin_question", array("postStatus" => "unPosted"));
        echo "\" class=\"list-group-item ";
        if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
        if (($_menu_ == "question")) {
            echo "active";
        }
        echo "\">问答管理</a>

        <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getUrl("admin_note");
        echo "\" class=\"list-group-item ";
        if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
        if (($_menu_ == "note")) {
            echo "active";
        }
        echo "\" >笔记管理</a>

        <a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getUrl("admin_course_category");
        echo "\" class=\"list-group-item ";
        if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
        if (($_menu_ == "category")) {
            echo "active";
        }
        echo "\">分类管理</a>

        <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getUrl("admin_tag");
        echo "\" class=\"list-group-item ";
        if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
        if (($_menu_ == "tag")) {
            echo "active";
        }
        echo "\">标签管理</a>

        <a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getUrl("admin_course_disk");
        echo "\" class=\"list-group-item ";
        if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
        if (($_menu_ == "course-disk")) {
            echo "active";
        }
        echo "\" style=\"display:none;\">文件管理</a>

        <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("admin_course_data");
        echo "\" class=\"list-group-item ";
        if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
        if (($_menu_ == "course-data")) {
            echo "active";
        }
        echo "\">数据管理</a>

      </div>
    ";
    }

    // line 39
    public function block_main($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Course:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 39,  180 => 33,  170 => 31,  160 => 29,  150 => 27,  140 => 25,  130 => 23,  120 => 21,  110 => 19,  100 => 17,  90 => 15,  79 => 13,  68 => 11,  66 => 10,  57 => 9,  54 => 8,  51 => 7,  46 => 40,  44 => 39,  38 => 7,  35 => 6,  32 => 5,  27 => 3,  171 => 63,  166 => 60,  159 => 58,  146 => 57,  143 => 56,  138 => 55,  133 => 54,  114 => 53,  91 => 34,  84 => 31,  76 => 27,  67 => 22,  56 => 15,  50 => 13,  47 => 12,  43 => 10,  40 => 37,  33 => 3,  28 => 7,  26 => 5,);
    }
}
