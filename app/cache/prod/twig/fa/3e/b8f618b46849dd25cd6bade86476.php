<?php

/* TopxiaWebBundle:Group:groups-ul.html.twig */
class __TwigTemplate_fa3eb8f618b46849dd25cd6bade86476 extends Twig_Template
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
        echo "<ul class=\"list-unstyled\">
  ";
        // line 2
        if (isset($context["groups"])) { $_groups_ = $context["groups"]; } else { $_groups_ = null; }
        if ($_groups_) {
            // line 3
            echo "
    ";
            // line 4
            if (isset($context["groups"])) { $_groups_ = $context["groups"]; } else { $_groups_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_groups_);
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 5
                echo "      ";
                if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                if (($this->getAttribute($_group_, "status") == "open")) {
                    echo " 
            <li class=\"col-md-";
                    // line 6
                    if (isset($context["colNum"])) { $_colNum_ = $context["colNum"]; } else { $_colNum_ = null; }
                    echo twig_escape_filter($this->env, ((array_key_exists("colNum", $context)) ? (_twig_default_filter($_colNum_, 4)) : (4)), "html", null, true);
                    echo "\"> 

                  <div class=\"panel\">
              
                        <div class=\"media\">
                            <a href=\"";
                    // line 11
                    if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $this->getAttribute($_group_, "id"))), "html", null, true);
                    echo "\" title=\"";
                    if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_group_, "title"), "html", null, true);
                    echo "\" class=\"pull-left\">
                              ";
                    // line 12
                    if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                    if ($this->getAttribute($_group_, "logo")) {
                        // line 13
                        echo "                              <img src=\"";
                        if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFilePath($this->getAttribute($_group_, "logo")), "html", null, true);
                        echo "\" alt=\"";
                        if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_group_, "title"), "html", null, true);
                        echo "\" style=\"width:58px;height:58px;\" >
                              ";
                    } else {
                        // line 15
                        echo "                              <img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/default/group.png"), "html", null, true);
                        echo "\" alt=\"";
                        if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_group_, "title"), "html", null, true);
                        echo "\"  style=\"width:58px;height:58px;\">
                              ";
                    }
                    // line 17
                    echo "                            </a>
                            <div class=\"media-body\">
                              <p style=\"margin:0 0 10px;\"><a  href=\"";
                    // line 19
                    if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $this->getAttribute($_group_, "id"))), "html", null, true);
                    echo "\" title=\"";
                    if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_group_, "title"), "html", null, true);
                    echo "\">";
                    if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                    echo $this->env->getExtension('topxia_web_twig')->subTextFilter($this->getAttribute($_group_, "title"), 10);
                    echo "</a></p>
                              <div class=\"text-muted text-normal\">
                                ";
                    // line 21
                    if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_group_, "memberNum"), "html", null, true);
                    echo "个成员&nbsp;
                                ";
                    // line 22
                    if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_group_, "threadNum"), "html", null, true);
                    echo "个话题
                              </div>
                            </div> 
                          </div>
                    </div>

              </li>
        ";
                }
                // line 30
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "
  ";
        } else {
            // line 33
            echo "        <div class=\"empty\">暂无小组信息！</div>
  ";
        }
        // line 35
        echo "      
</ul>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Group:groups-ul.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 35,  121 => 33,  117 => 31,  111 => 30,  99 => 22,  94 => 21,  82 => 19,  78 => 17,  39 => 6,  33 => 5,  28 => 4,  25 => 3,  22 => 2,  19 => 1,  77 => 29,  72 => 26,  69 => 15,  62 => 18,  59 => 13,  56 => 12,  51 => 11,  48 => 11,  44 => 8,  41 => 7,  31 => 3,  26 => 5,);
    }
}
