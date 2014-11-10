<?php

/* TopxiaWebBundle:Course:announcement-block.html.twig */
class __TwigTemplate_c1843f7397dbd4cfea0276d402b0966a extends Twig_Template
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
        if (isset($context["canManage"])) { $_canManage_ = $context["canManage"]; } else { $_canManage_ = null; }
        if (isset($context["announcements"])) { $_announcements_ = $context["announcements"]; } else { $_announcements_ = null; }
        if ($_canManage_) {
            // line 2
            echo "<div class=\"panel panel-default\">
\t<div class=\"panel-heading\">
\t\t<div class=\"pull-right\">
\t\t\t<a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
            // line 5
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_announcement_add", array("courseId" => $this->getAttribute($_course_, "id"))), "html", null, true);
            echo "\" class=\"btn btn-link btn-xs\"><span class=\"glyphicon glyphicon-plus\"></span> 添加公告</a>
\t\t</div>
\t\t<h3 class=\"panel-title\">课程公告</h3>
\t</div>
\t<div class=\"panel-body\">
\t\t<ul class=\"media-list announcement-list\">
\t\t\t";
            // line 11
            if (isset($context["announcements"])) { $_announcements_ = $context["announcements"]; } else { $_announcements_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_announcements_);
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["announcement"]) {
                // line 12
                echo "\t\t\t\t<li class=\"media\">
\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t";
                // line 15
                if (isset($context["canTake"])) { $_canTake_ = $context["canTake"]; } else { $_canTake_ = null; }
                if ($_canTake_) {
                    // line 16
                    echo "\t\t\t\t\t\t\t\t<a id=\"course-buy-btn\" href=\"#modal\" data-toggle=\"modal\" data-url=\"";
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    if (isset($context["announcement"])) { $_announcement_ = $context["announcement"]; } else { $_announcement_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_announcement_show", array("courseId" => $this->getAttribute($_course_, "id"), "id" => $this->getAttribute($_announcement_, "id"))), "html", null, true);
                    echo "\" >";
                    if (isset($context["announcement"])) { $_announcement_ = $context["announcement"]; } else { $_announcement_ = null; }
                    echo _twig_default_filter($this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($_announcement_, "content"), 40), "<span class=\"text-warning\">(请点击查看)</span>");
                    echo "</a>
\t\t\t\t\t\t\t";
                } else {
                    // line 18
                    echo "\t\t\t\t\t\t\t\t<a id=\"course-buy-btn\" href=\"#modal\" data-toggle=\"modal\" data-url=\"";
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_buy", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
                    echo "\" >";
                    if (isset($context["announcement"])) { $_announcement_ = $context["announcement"]; } else { $_announcement_ = null; }
                    echo _twig_default_filter($this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($_announcement_, "content"), 40), "<span class=\"text-warning\">(请点击查看)</span>");
                    echo "</a>
\t\t\t\t\t\t\t";
                }
                // line 20
                echo "\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t\t\t<span class=\"pull-right text-muted text-sm\">";
                // line 22
                if (isset($context["announcement"])) { $_announcement_ = $context["announcement"]; } else { $_announcement_ = null; }
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_announcement_, "createdTime"), "Y-m-d H:i"), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t<a class=\"text-muted text-sm mrm action\" href=\"javascript:;\" data-target=\"#modal\"  data-toggle=\"modal\" data-url=\"";
                // line 23
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                if (isset($context["announcement"])) { $_announcement_ = $context["announcement"]; } else { $_announcement_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_announcement_update", array("courseId" => $this->getAttribute($_course_, "id"), "id" => $this->getAttribute($_announcement_, "id"))), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-pencil\"></span> 修改</a>
\t\t\t\t\t\t\t\t<a class=\"text-muted text-sm action\" href=\"#\" data-role=\"delete\" data-url=\"";
                // line 24
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                if (isset($context["announcement"])) { $_announcement_ = $context["announcement"]; } else { $_announcement_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_announcement_delete", array("courseId" => $this->getAttribute($_course_, "id"), "id" => $this->getAttribute($_announcement_, "id"))), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-trash\"></span> 删除</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 28
                echo "<div class=\"empty\">暂无课程公告</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['announcement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "\t\t</ul>
\t</div>
</div>\t

";
        } elseif ($_announcements_) {
            // line 35
            echo "<div class=\"panel panel-default\">
\t<div class=\"panel-heading\">
\t\t<h3 class=\"panel-title\">课程公告</h3>
\t</div>

\t<div class=\"panel-body\">
\t\t<ul class=\"media-list announcement-list\">
\t\t\t";
            // line 42
            if (isset($context["announcements"])) { $_announcements_ = $context["announcements"]; } else { $_announcements_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_announcements_);
            foreach ($context['_seq'] as $context["_key"] => $context["announcement"]) {
                // line 43
                echo "\t\t\t\t<li class=\"media\">
\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t";
                // line 46
                if (isset($context["canTake"])) { $_canTake_ = $context["canTake"]; } else { $_canTake_ = null; }
                if ($_canTake_) {
                    // line 47
                    echo "\t\t\t\t\t\t\t\t<a id=\"course-buy-btn\" href=\"#modal\" data-toggle=\"modal\" data-url=\"";
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    if (isset($context["announcement"])) { $_announcement_ = $context["announcement"]; } else { $_announcement_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_announcement_show", array("courseId" => $this->getAttribute($_course_, "id"), "id" => $this->getAttribute($_announcement_, "id"))), "html", null, true);
                    echo "\" >";
                    if (isset($context["announcement"])) { $_announcement_ = $context["announcement"]; } else { $_announcement_ = null; }
                    echo _twig_default_filter($this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($_announcement_, "content"), 40), "<span class=\"text-warning\">(请点击查看)</span>");
                    echo "</a>
\t\t\t\t\t\t\t";
                } else {
                    // line 49
                    echo "\t\t\t\t\t\t\t\t<a id=\"course-buy-btn\" href=\"#modal\" data-toggle=\"modal\" data-url=\"";
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_buy", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
                    echo "\" >";
                    if (isset($context["announcement"])) { $_announcement_ = $context["announcement"]; } else { $_announcement_ = null; }
                    echo _twig_default_filter($this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($_announcement_, "content"), 40), "<span class=\"text-warning\">(请点击查看)</span>");
                    echo "</a>
\t\t\t\t\t\t\t";
                }
                // line 51
                echo "\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['announcement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "\t\t</ul>
\t</div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:announcement-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 55,  157 => 51,  133 => 46,  128 => 43,  123 => 42,  107 => 30,  82 => 23,  77 => 22,  44 => 12,  38 => 11,  93 => 24,  90 => 23,  74 => 19,  62 => 16,  59 => 15,  56 => 14,  39 => 11,  53 => 5,  32 => 8,  25 => 5,  23 => 2,  20 => 1,  355 => 134,  352 => 133,  345 => 128,  337 => 124,  334 => 123,  330 => 122,  327 => 121,  324 => 120,  318 => 116,  314 => 114,  310 => 112,  306 => 110,  302 => 108,  298 => 106,  295 => 105,  291 => 103,  288 => 102,  283 => 99,  279 => 97,  272 => 94,  269 => 93,  266 => 92,  258 => 88,  253 => 87,  247 => 83,  240 => 80,  237 => 79,  234 => 78,  231 => 77,  226 => 74,  217 => 70,  213 => 69,  210 => 68,  200 => 66,  193 => 64,  189 => 63,  186 => 62,  179 => 59,  174 => 58,  169 => 57,  162 => 54,  153 => 47,  147 => 49,  141 => 44,  136 => 47,  130 => 41,  125 => 40,  122 => 39,  119 => 38,  114 => 35,  111 => 34,  97 => 32,  92 => 31,  87 => 22,  84 => 21,  81 => 28,  76 => 25,  65 => 20,  61 => 19,  57 => 17,  50 => 14,  42 => 13,  35 => 9,  30 => 9,  21 => 2,  19 => 1,  113 => 38,  110 => 37,  105 => 26,  100 => 28,  88 => 24,  83 => 28,  78 => 27,  73 => 20,  71 => 18,  64 => 19,  54 => 13,  49 => 15,  31 => 7,  29 => 2,  69 => 22,  66 => 20,  63 => 18,  58 => 16,  55 => 15,  52 => 16,  46 => 9,  43 => 12,  40 => 8,  37 => 3,  34 => 6,  28 => 5,  26 => 3,);
    }
}
