<?php

/* TopxiaWebBundle:Default:index.html.twig */
class __TwigTemplate_639bf9b48138cc57d08718173f21ab0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaWebBundle:Default:layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Default:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["bodyClass"] = "homepage";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
<div class=\"es-row-wrap container-gap\">

  ";
        // line 9
        if (isset($context["blocks"])) { $_blocks_ = $context["blocks"]; } else { $_blocks_ = null; }
        if ($this->getAttribute($_blocks_, "home_top_banner")) {
            // line 10
            echo "    <div class=\"homepage-feature homepage-feature-slides mbl\">
      <div class=\"cycle-pager\"></div>
      ";
            // line 12
            if (isset($context["blocks"])) { $_blocks_ = $context["blocks"]; } else { $_blocks_ = null; }
            echo $this->getAttribute($_blocks_, "home_top_banner");
            echo "
    </div>
  ";
        }
        // line 15
        echo "
  <div class=\"row row-9-3\">

    <div class=\"col-md-9\">
      ";
        // line 19
        if (isset($context["courses"])) { $_courses_ = $context["courses"]; } else { $_courses_ = null; }
        if ($_courses_) {
            // line 20
            echo "        <div class=\"es-box\">
          <div class=\"es-box-heading\">
            <h2>课程</h2>
            <a class=\"pull-right\" href=\"";
            // line 23
            echo $this->env->getExtension('routing')->getPath("course_explore");
            echo "\">更多&gt;</a>
          </div>
          <div class=\"es-box-body\">
              ";
            // line 26
            echo $this->getAttribute($this, "course_lists", array(0 => $this->env->getExtension('topxia_data_twig')->getData("LatestCourses", array("count" => 5))), "method");
            echo "
          </div>
        </div>
      ";
        }
        // line 29
        echo " 

      ";
        // line 31
        if ($this->env->getExtension('topxia_web_twig')->getSetting("course.live_course_enabled")) {
            // line 32
            echo "
        ";
            // line 33
            if (isset($context["recentLiveCourses"])) { $_recentLiveCourses_ = $context["recentLiveCourses"]; } else { $_recentLiveCourses_ = null; }
            if ($_recentLiveCourses_) {
                // line 34
                echo "          <div class=\"es-box\">
            <div class=\"es-box-heading\">
              <h2>最新直播</h2>
              ";
                // line 37
                if (isset($context["recentLiveCourses"])) { $_recentLiveCourses_ = $context["recentLiveCourses"]; } else { $_recentLiveCourses_ = null; }
                if ((twig_length_filter($this->env, $_recentLiveCourses_) >= 1)) {
                    // line 38
                    echo "                <a class=\"pull-right\" href=\"";
                    echo $this->env->getExtension('routing')->getPath("live_course_explore");
                    echo "\">更多&gt;</a>
              ";
                }
                // line 39
                echo " 
            </div>
            <div class=\"es-box-body\">
              ";
                // line 42
                if (isset($context["recentLiveCourses"])) { $_recentLiveCourses_ = $context["recentLiveCourses"]; } else { $_recentLiveCourses_ = null; }
                echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:LiveCourse:coursesBlock", array("courses" => $_recentLiveCourses_, "view" => "list")));
                echo "
            </div>
          </div>
        ";
            }
            // line 46
            echo "      
      ";
        }
        // line 48
        echo "
      ";
        // line 50
        echo "      ";
        $context["articles"] = $this->env->getExtension('topxia_data_twig')->getData("LatestArticles", array("count" => 4));
        // line 51
        echo "      ";
        if (isset($context["articles"])) { $_articles_ = $context["articles"]; } else { $_articles_ = null; }
        if ($_articles_) {
            // line 52
            echo "        <div class=\"es-box news\">
          <div class=\"es-box-heading\">
            <h2>最新资讯</h2>
            <a class=\"pull-right\" href=\"";
            // line 55
            echo $this->env->getExtension('routing')->getPath("article_show");
            echo "\">更多&gt;</a>
          </div>
          <div class=\"es-box-body\">
            <ul class=\"row\">
            ";
            // line 59
            if (isset($context["articles"])) { $_articles_ = $context["articles"]; } else { $_articles_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_articles_);
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 60
                echo "              ";
                if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                if ($_article_) {
                    // line 61
                    echo "                <li class=\"col-md-6\">
                  <em>";
                    // line 62
                    if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_article_, "updatedTime"), "m-d H:i"), "html", null, true);
                    echo " </em>
                  <a href=\"";
                    // line 63
                    if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_detail", array("id" => $this->getAttribute($_article_, "id"))), "html", null, true);
                    echo "\"> <span>[";
                    if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_article_, "category"), "name"), "html", null, true);
                    echo "]</span>";
                    if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_article_, "title"), "html", null, true);
                    echo " </a>
                </li>
              ";
                }
                // line 66
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "            </ul>
          </div>
        </div>
      ";
        }
        // line 71
        echo "
      ";
        // line 73
        echo "      ";
        if ($this->env->getExtension('topxia_web_twig')->getSetting("vip.enabled")) {
            // line 74
            echo "        ";
            $context["levels"] = $this->env->getExtension('topxia_data_twig')->getData("VipLevels", array("count" => 100));
            // line 75
            echo "        ";
            if (isset($context["levels"])) { $_levels_ = $context["levels"]; } else { $_levels_ = null; }
            if ($_levels_) {
                // line 76
                echo "          <div class=\"es-box vip\">
            <div class=\"es-box-heading\">
              <h2>会员专区</h2>
              <a class=\"pull-right\" href=\"";
                // line 79
                echo $this->env->getExtension('routing')->getPath("vip");
                echo "\">更多&gt;</a>
            </div>
            <div class=\"es-box-body\">
              <ul class=\"row vip-lists\">
                  ";
                // line 83
                if (isset($context["levels"])) { $_levels_ = $context["levels"]; } else { $_levels_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($_levels_);
                foreach ($context['_seq'] as $context["_key"] => $context["level"]) {
                    // line 84
                    echo "                    <li class=\"col-sm-12\">
                      <div class=\"vip-item\">
                        <div class=\"row\">
                          <div class=\"col-sm-4 col-md-4\">
                            <a href=\"";
                    // line 88
                    if (isset($context["level"])) { $_level_ = $context["level"]; } else { $_level_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vip_course_explore", array("levelId" => $this->getAttribute($_level_, "id"))), "html", null, true);
                    echo "\">
                            <img class=\"img-responsive\" src=\"";
                    // line 89
                    if (isset($context["level"])) { $_level_ = $context["level"]; } else { $_level_ = null; }
                    echo twig_escape_filter($this->env, (($this->getAttribute($_level_, "picture", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_level_, "picture"), $this->env->getExtension('assets')->getAssetUrl("assets/img/default/vip-default.png"))) : ($this->env->getExtension('assets')->getAssetUrl("assets/img/default/vip-default.png"))), "html", null, true);
                    echo "\" alt=\"";
                    if (isset($context["level"])) { $_level_ = $context["level"]; } else { $_level_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_level_, "name"), "html", null, true);
                    echo "\">
                          </div>
                          </a>
                          <div class=\"col-sm-5 col-md-5\">
                            <h3>";
                    // line 93
                    if (isset($context["level"])) { $_level_ = $context["level"]; } else { $_level_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_level_, "name"), "html", null, true);
                    echo "</h3>
                            <p>";
                    // line 94
                    if (isset($context["level"])) { $_level_ = $context["level"]; } else { $_level_ = null; }
                    echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($_level_, "description"), 40);
                    echo "</p>
                          </div>
                          <div class=\"vip-price col-sm-3 col-md-3\">
                            <h4>¥&nbsp;";
                    // line 97
                    if (isset($context["level"])) { $_level_ = $context["level"]; } else { $_level_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_level_, "monthPrice"), "html", null, true);
                    echo "</h4>
                            <h4><a href=\"";
                    // line 98
                    echo $this->env->getExtension('routing')->getPath("vip_buy");
                    echo "\" class=\"btn btn-success\">立即购买</a></h4>
                          </div>
                        </div>
                      </div>      
                    </li>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['level'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 104
                echo "              </ul>
            </div>
          </div>
        ";
            }
            // line 107
            echo "   
      ";
        }
        // line 109
        echo "
      ";
        // line 111
        echo "      ";
        if ((($this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("group"), "group_show", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("group"), "group_show"), 1)) : (1))) {
            // line 112
            echo "        ";
            $context["groups"] = $this->env->getExtension('topxia_data_twig')->getData("HotGroup", array("count" => 15));
            // line 113
            echo "        ";
            if (isset($context["groups"])) { $_groups_ = $context["groups"]; } else { $_groups_ = null; }
            if ($_groups_) {
                // line 114
                echo "          <div class=\"es-box hot-group\">
            <div class=\"es-box-heading\"><h2>最热小组</h2><a href=\"";
                // line 115
                echo $this->env->getExtension('routing')->getPath("group_search_group");
                echo "\" class=\"pull-right\">更多&gt;</a></div>
            <div class=\"es-box-body\">
               <ul class=\"list-unstyled\">
                ";
                // line 118
                if (isset($context["groups"])) { $_groups_ = $context["groups"]; } else { $_groups_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($_groups_);
                foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                    // line 119
                    echo "                  ";
                    if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                    if (($this->getAttribute($_group_, "status") == "open")) {
                        echo " 
                    <li class=\"col-md-4\"> 
                      <div class=\"panel\">
                         <div class=\"media\">
                            <a href=\"";
                        // line 123
                        if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $this->getAttribute($_group_, "id"))), "html", null, true);
                        echo "\" title=\"";
                        if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_group_, "title"), "html", null, true);
                        echo "\" class=\"pull-left\">
                              ";
                        // line 124
                        if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                        if ($this->getAttribute($_group_, "logo")) {
                            // line 125
                            echo "                              <img src=\"";
                            if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFilePath($this->getAttribute($_group_, "logo")), "html", null, true);
                            echo "\" alt=\"";
                            if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($_group_, "title"), "html", null, true);
                            echo "\">
                              ";
                        } else {
                            // line 127
                            echo "                              <img src=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/default/group.png"), "html", null, true);
                            echo "\" alt=\"";
                            if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($_group_, "title"), "html", null, true);
                            echo "\">
                              ";
                        }
                        // line 129
                        echo "                            </a>
                            <div class=\"media-body\">
                              <p><a  href=\"";
                        // line 131
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
                        // line 133
                        if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_group_, "memberNum"), "html", null, true);
                        echo "个成员&nbsp;
                                ";
                        // line 134
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
                    // line 141
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 142
                echo "              </ul>
            </div>
          </div>
        ";
            }
            // line 146
            echo "      ";
        }
        // line 147
        echo "    </div>

    <div class=\"col-md-3\">
      ";
        // line 150
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Default:promotedTeacherBlock"));
        echo "

      ";
        // line 153
        echo "      ";
        $context["learns"] = $this->env->getExtension('topxia_data_twig')->getData("PersonDynamic", array("count" => 5));
        // line 154
        echo "      ";
        if (isset($context["learns"])) { $_learns_ = $context["learns"]; } else { $_learns_ = null; }
        if ($_learns_) {
            // line 155
            echo "        <div class=\"es-box status-side\">
          <div class=\"es-box-heading\">
            <h2>学员动态</h2>
          </div>
            <div class=\"es-box-body\">
              <ul class=\"media-list\">
                ";
            // line 161
            if (isset($context["learns"])) { $_learns_ = $context["learns"]; } else { $_learns_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_learns_);
            foreach ($context['_seq'] as $context["_key"] => $context["learn"]) {
                // line 162
                echo "                  ";
                if (isset($context["learn"])) { $_learn_ = $context["learn"]; } else { $_learn_ = null; }
                if (($this->getAttribute($_learn_, "type") == "finished_testpaper")) {
                    // line 163
                    echo "                  <li class=\"media\">
                    <a class=\"pull-left\" href=\"";
                    // line 164
                    if (isset($context["learn"])) { $_learn_ = $context["learn"]; } else { $_learn_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($this->getAttribute($_learn_, "user"), "id"))), "html", null, true);
                    echo "\">
                      <img class=\"media-object\" src=\"";
                    // line 165
                    if (isset($context["learn"])) { $_learn_ = $context["learn"]; } else { $_learn_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getDefaultPath("avatar", $this->getAttribute($this->getAttribute($_learn_, "user"), "mediumAvatar"), ""), "html", null, true);
                    echo "\">
                    </a>
                    <div class=\"media-body\">
                      <a href=\"";
                    // line 168
                    if (isset($context["learn"])) { $_learn_ = $context["learn"]; } else { $_learn_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($this->getAttribute($_learn_, "user"), "id"))), "html", null, true);
                    echo "\">";
                    if (isset($context["learn"])) { $_learn_ = $context["learn"]; } else { $_learn_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_learn_, "user"), "nickname"), "html", null, true);
                    echo "</a>
                      完成了考试 ";
                    // line 169
                    if (isset($context["learn"])) { $_learn_ = $context["learn"]; } else { $_learn_ = null; }
                    echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($this->getAttribute($this->getAttribute($_learn_, "properties"), "testpaper"), "name"), 15);
                    echo "
                    </div>
                  </li>
                  ";
                } elseif (($this->getAttribute($_learn_, "type") == "become_student")) {
                    // line 173
                    echo "                  <li class=\"media\">
                    <a class=\"pull-left\" href=\"";
                    // line 174
                    if (isset($context["learn"])) { $_learn_ = $context["learn"]; } else { $_learn_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($this->getAttribute($_learn_, "user"), "id"))), "html", null, true);
                    echo "\">
                      <img class=\"media-object\" src=\"";
                    // line 175
                    if (isset($context["learn"])) { $_learn_ = $context["learn"]; } else { $_learn_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getDefaultPath("avatar", $this->getAttribute($this->getAttribute($_learn_, "user"), "mediumAvatar"), ""), "html", null, true);
                    echo "\">
                    </a>
                    <div class=\"media-body\">
                      <a href=\"";
                    // line 178
                    if (isset($context["learn"])) { $_learn_ = $context["learn"]; } else { $_learn_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($this->getAttribute($_learn_, "user"), "id"))), "html", null, true);
                    echo "\">";
                    if (isset($context["learn"])) { $_learn_ = $context["learn"]; } else { $_learn_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_learn_, "user"), "nickname"), "html", null, true);
                    echo "</a>
                      加入了课程 ";
                    // line 179
                    if (isset($context["learn"])) { $_learn_ = $context["learn"]; } else { $_learn_ = null; }
                    echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($this->getAttribute($this->getAttribute($_learn_, "properties"), "course"), "title"), 15);
                    echo "
                    </div>
                  </li>
                  ";
                } elseif (($this->getAttribute($_learn_, "type") == "learned_lesson")) {
                    // line 183
                    echo "                  <li class=\"media\">
                    <a class=\"pull-left\" href=\"";
                    // line 184
                    if (isset($context["learn"])) { $_learn_ = $context["learn"]; } else { $_learn_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($this->getAttribute($_learn_, "user"), "id"))), "html", null, true);
                    echo "\">
                      <img class=\"media-object\" src=\"";
                    // line 185
                    if (isset($context["learn"])) { $_learn_ = $context["learn"]; } else { $_learn_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getDefaultPath("avatar", $this->getAttribute($this->getAttribute($_learn_, "user"), "mediumAvatar"), ""), "html", null, true);
                    echo "\">
                    </a>
                    <div class=\"media-body\">
                      <a href=\"";
                    // line 188
                    if (isset($context["learn"])) { $_learn_ = $context["learn"]; } else { $_learn_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($this->getAttribute($_learn_, "user"), "id"))), "html", null, true);
                    echo "\">";
                    if (isset($context["learn"])) { $_learn_ = $context["learn"]; } else { $_learn_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_learn_, "user"), "nickname"), "html", null, true);
                    echo "</a>
                      完成了课时 ";
                    // line 189
                    if (isset($context["learn"])) { $_learn_ = $context["learn"]; } else { $_learn_ = null; }
                    echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($this->getAttribute($this->getAttribute($_learn_, "properties"), "lesson"), "title"), 15);
                    echo "
                    </div>
                  </li>
                  ";
                }
                // line 193
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['learn'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 194
            echo "              </ul>
            </div>
          </div>
        ";
        }
        // line 198
        echo "      
      ";
        // line 199
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Default:latestReviewsBlock", array("number" => 5)));
        echo "

      ";
        // line 202
        echo "      ";
        if ((($this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("group"), "group_show", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("group"), "group_show"), 1)) : (1))) {
            // line 203
            echo "        ";
            $context["hotThreads"] = $this->env->getExtension('topxia_data_twig')->getData("HotThreads", array("count" => 11));
            // line 204
            echo "        ";
            if (isset($context["hotThreads"])) { $_hotThreads_ = $context["hotThreads"]; } else { $_hotThreads_ = null; }
            if ($_hotThreads_) {
                // line 205
                echo "          <div class=\"es-box hot-threads\">
            <div class=\"es-box-heading\"><h2>最热话题</h2></div>
            <div class=\"es-box-body\">
              <ul class=\"text-list\">
                ";
                // line 209
                if (isset($context["hotThreads"])) { $_hotThreads_ = $context["hotThreads"]; } else { $_hotThreads_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($_hotThreads_);
                foreach ($context['_seq'] as $context["_key"] => $context["thread"]) {
                    // line 210
                    echo "                  ";
                    if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
                    if ($_thread_) {
                        // line 211
                        echo "                    <li style=\"border-bottom:none;background:url('";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/default/triangle.png"), "html", null, true);
                        echo "') no-repeat 0 3px;padding-left:8px;padding-top:0px;margin-bottom:8px;\"><a  href=\"";
                        if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_show", array("id" => $this->getAttribute($_thread_, "groupId"), "threadId" => $this->getAttribute($_thread_, "id"))), "html", null, true);
                        echo "\">";
                        if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
                        echo $this->env->getExtension('topxia_web_twig')->subTextFilter($this->getAttribute($_thread_, "title"), 15);
                        echo "</a></li>
                  ";
                    }
                    // line 213
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thread'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 214
                echo "              </ul>
            </div>
          </div>
        ";
            }
            // line 218
            echo "      ";
        }
        // line 219
        echo "
    </div>

  </div>

</div>
";
    }

    // line 227
    public function getcourse_lists($_courses = null)
    {
        $context = $this->env->mergeGlobals(array(
            "courses" => $_courses,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 228
            echo "  ";
            if (isset($context["mode"])) { $_mode_ = $context["mode"]; } else { $_mode_ = null; }
            $context["mode"] = ((array_key_exists("mode", $context)) ? (_twig_default_filter($_mode_, "default")) : ("default"));
            // line 229
            echo "  <ul class=\"course-wide-list\">
    ";
            // line 230
            if (isset($context["courses"])) { $_courses_ = $context["courses"]; } else { $_courses_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_courses_);
            foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                // line 231
                echo "    <li class=\"course-item clearfix\">
      <a class=\"course-picture-link\" href=\"";
                // line 232
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
                echo "\">
        <img class=\"course-picture\" src=\"";
                // line 233
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getDefaultPath("coursePicture", $this->getAttribute($_course_, "middlePicture"), "large"), "html", null, true);
                echo "\" alt=\"";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_course_, "title"), "html", null, true);
                echo "\">
      </a>
      <div class=\"course-body\">
        <h4 class=\"course-title\"><a href=\"";
                // line 236
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
                echo "\">";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_course_, "title"), "html", null, true);
                echo "</a>
        ";
                // line 237
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                if (($this->getAttribute($_course_, "serializeMode") == "serialize")) {
                    // line 238
                    echo "          <span class=\"label label-success \">更新中</span>
        ";
                } elseif (($this->getAttribute($_course_, "serializeMode") == "finished")) {
                    // line 240
                    echo "          <span class=\"label label-warning \">已完结</span>
        ";
                }
                // line 242
                echo "        ";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                if (($this->getAttribute($_course_, "type") == "live")) {
                    // line 243
                    echo "            ";
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    $context["lesson"] = (($this->getAttribute($_course_, "lesson", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_course_, "lesson", array(), "array"), null)) : (null));
                    // line 244
                    echo "            ";
                    if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
                    if ((($_lesson_ && (twig_date_format_filter($this->env, "now", "U") >= $this->getAttribute($_lesson_, "startTime"))) && (twig_date_format_filter($this->env, "now", "U") <= $this->getAttribute($_lesson_, "endTime")))) {
                        // line 245
                        echo "              <span class=\"label label-warning series-mode-label\">正在直播中</span>
            ";
                    } else {
                        // line 247
                        echo "              <span class=\"label label-success series-mode-label\">直播</span>
            ";
                    }
                    // line 249
                    echo "        ";
                }
                // line 250
                echo "        </h4>

        ";
                // line 252
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                if (($this->getAttribute($_course_, "type") == "live")) {
                    // line 253
                    echo "          ";
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    $context["lesson"] = (($this->getAttribute($_course_, "lesson", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_course_, "lesson"), null)) : (null));
                    // line 254
                    echo "          ";
                    if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
                    if ($_lesson_) {
                        // line 255
                        echo "            <div class=\"live-course-lesson mbm\">
              <span class=\"text-success fsm mrm\">";
                        // line 256
                        if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_lesson_, "startTime"), "n月j日 H:i"), "html", null, true);
                        echo " ~ ";
                        if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_lesson_, "endTime"), "H:i"), "html", null, true);
                        echo "</span>
              <span class=\"text-muted fsm mrm\">第";
                        // line 257
                        if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_lesson_, "number"), "html", null, true);
                        echo "课时</span>
            </div>
          ";
                    }
                    // line 260
                    echo "        ";
                } else {
                    // line 261
                    echo "          <div class=\"course-about ellipsis\">";
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_course_, "subtitle"), "html", null, true);
                    echo "</div>
        ";
                }
                // line 263
                echo "
        <div class=\"course-footer clearfix\">
          ";
                // line 265
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                $context["teacher"] = _twig_default_filter(twig_first($this->env, $this->getAttribute($_course_, "teachers")), null);
                // line 266
                echo "          ";
                if (isset($context["teacher"])) { $_teacher_ = $context["teacher"]; } else { $_teacher_ = null; }
                if ($_teacher_) {
                    // line 267
                    echo "            <div class=\"teacher\">
              <a href=\"";
                    // line 268
                    if (isset($context["teacher"])) { $_teacher_ = $context["teacher"]; } else { $_teacher_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($_teacher_, "id"))), "html", null, true);
                    echo "\"><img src=\"";
                    if (isset($context["teacher"])) { $_teacher_ = $context["teacher"]; } else { $_teacher_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getDefaultPath("avatar", $this->getAttribute($_teacher_, "smallAvatar"), ""), "html", null, true);
                    echo "\" class=\"teacher-avatar\"></a>
              <a class=\"teacher-nickname ellipsis\" href=\"";
                    // line 269
                    if (isset($context["teacher"])) { $_teacher_ = $context["teacher"]; } else { $_teacher_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($_teacher_, "id"))), "html", null, true);
                    echo "\">";
                    if (isset($context["teacher"])) { $_teacher_ = $context["teacher"]; } else { $_teacher_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_teacher_, "nickname"), "html", null, true);
                    echo "</a>
              <span class=\"teacher-title ellipsis\">";
                    // line 270
                    if (isset($context["teacher"])) { $_teacher_ = $context["teacher"]; } else { $_teacher_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_teacher_, "title"), "html", null, true);
                    echo "</span>
            </div>
          ";
                }
                // line 273
                echo "          <div class=\"course-metas\">
            <span class=\"stars-";
                // line 274
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($_course_, "rating")), "html", null, true);
                echo "\">&nbsp;</span>
            <span class=\"divider\"></span>
            ";
                // line 276
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                if (($this->getAttribute($_course_, "showStudentNumType") == "opened")) {
                    // line 277
                    echo "            <span class=\"text-muted mrm mls\"><strong>";
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_course_, "studentNum"), "html", null, true);
                    echo "</strong>学员</span>
            ";
                }
                // line 279
                echo "            <span class=\"course-price\">";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                if (($this->getAttribute($_course_, "price") > 0)) {
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_course_, "price"), "html", null, true);
                    echo "元";
                } else {
                    echo "免费";
                }
                echo "</span>
          </div>
        </div>
      </div>
    </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 285
            echo "  </ul>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  801 => 285,  781 => 279,  774 => 277,  771 => 276,  765 => 274,  762 => 273,  755 => 270,  747 => 269,  739 => 268,  736 => 267,  732 => 266,  729 => 265,  725 => 263,  718 => 261,  715 => 260,  708 => 257,  700 => 256,  697 => 255,  693 => 254,  689 => 253,  686 => 252,  682 => 250,  679 => 249,  675 => 247,  671 => 245,  667 => 244,  663 => 243,  659 => 242,  655 => 240,  651 => 238,  648 => 237,  640 => 236,  630 => 233,  625 => 232,  622 => 231,  617 => 230,  614 => 229,  610 => 228,  599 => 227,  589 => 219,  586 => 218,  580 => 214,  574 => 213,  562 => 211,  558 => 210,  553 => 209,  547 => 205,  543 => 204,  540 => 203,  537 => 202,  532 => 199,  529 => 198,  523 => 194,  517 => 193,  509 => 189,  501 => 188,  494 => 185,  489 => 184,  486 => 183,  478 => 179,  470 => 178,  463 => 175,  458 => 174,  455 => 173,  447 => 169,  439 => 168,  432 => 165,  427 => 164,  424 => 163,  420 => 162,  415 => 161,  407 => 155,  403 => 154,  400 => 153,  395 => 150,  390 => 147,  387 => 146,  381 => 142,  375 => 141,  364 => 134,  359 => 133,  347 => 131,  343 => 129,  334 => 127,  324 => 125,  321 => 124,  313 => 123,  304 => 119,  299 => 118,  293 => 115,  290 => 114,  286 => 113,  283 => 112,  280 => 111,  277 => 109,  273 => 107,  267 => 104,  255 => 98,  250 => 97,  243 => 94,  238 => 93,  227 => 89,  222 => 88,  216 => 84,  211 => 83,  204 => 79,  199 => 76,  195 => 75,  192 => 74,  189 => 73,  186 => 71,  180 => 67,  174 => 66,  161 => 63,  156 => 62,  153 => 61,  149 => 60,  144 => 59,  137 => 55,  132 => 52,  128 => 51,  125 => 50,  122 => 48,  118 => 46,  110 => 42,  105 => 39,  99 => 38,  96 => 37,  91 => 34,  88 => 33,  85 => 32,  83 => 31,  79 => 29,  72 => 26,  66 => 23,  61 => 20,  58 => 19,  52 => 15,  45 => 12,  41 => 10,  38 => 9,  33 => 6,  30 => 5,  25 => 2,);
    }
}
