<?php

/* TopxiaWebBundle:Default:index.html.twig */
class __TwigTemplate_dd4f8e05bd5f40081bb4e068776ddc72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaWebBundle:Default:layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'contact' => array($this, 'block_contact'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Default:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "  <div class=\"es-row-wrap container-gap\">

    ";
        // line 6
        if (isset($context["blocks"])) { $_blocks_ = $context["blocks"]; } else { $_blocks_ = null; }
        if ($this->getAttribute($_blocks_, "home_top_banner")) {
            // line 7
            echo "      <div class=\"homepage-feature homepage-feature-slides\">
        <div class=\"cycle-pager\"></div>
        ";
            // line 9
            if (isset($context["blocks"])) { $_blocks_ = $context["blocks"]; } else { $_blocks_ = null; }
            echo $this->getAttribute($_blocks_, "home_top_banner");
            echo "
      </div>
    ";
        }
        // line 12
        echo "
    <ul class=\"homepage-category-nav\">
      ";
        // line 14
        if (isset($context["categories"])) { $_categories_ = $context["categories"]; } else { $_categories_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_categories_);
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 15
            echo "        <li><a href=\"";
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_explore", array("category" => (($this->getAttribute($_category_, "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_category_, "code"), $this->getAttribute($_category_, "id"))) : ($this->getAttribute($_category_, "id"))))), "html", null, true);
            echo "\">";
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_category_, "name"), "html", null, true);
            echo "</a></li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "        <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("course_explore");
        echo "\">更多</a></li>
    </ul>

    <div class=\"row row-9-3\">
      <div class=\"col-md-9\">
        ";
        // line 23
        echo "        ";
        $context["recommendCourses"] = $this->env->getExtension('topxia_data_twig')->getData("RecommendCourses", array("count" => 3));
        // line 24
        echo "        ";
        if (isset($context["recommendCourses"])) { $_recommendCourses_ = $context["recommendCourses"]; } else { $_recommendCourses_ = null; }
        if ($_recommendCourses_) {
            // line 25
            echo "          <div class=\"es-box\">
            <div class=\"es-box-heading\"><h2>推荐课程</h2>
              <a class=\"pull-right\" href=\"";
            // line 27
            echo $this->env->getExtension('routing')->getPath("course_explore", array("sort" => "recommendedSeq"));
            echo "\">更多&gt;</a>
            </div>
            <div class=\"es-box-body\">
              ";
            // line 30
            echo $this->getAttribute($this, "course_grids", array(0 => $this->env->getExtension('topxia_data_twig')->getData("RecommendCourses", array("count" => 3))), "method");
            echo "            
            </div>
          </div>
        ";
        }
        // line 34
        echo "
        ";
        // line 36
        echo "        ";
        $context["latestCourses"] = $this->env->getExtension('topxia_data_twig')->getData("LatestCourses", array("count" => 6));
        // line 37
        echo "        ";
        if (isset($context["latestCourses"])) { $_latestCourses_ = $context["latestCourses"]; } else { $_latestCourses_ = null; }
        if ($_latestCourses_) {
            // line 38
            echo "          <div class=\"es-box\">
            <div class=\"es-box-heading\"><h2>最新课程</h2>
              <a class=\"pull-right\" href=\"";
            // line 40
            echo $this->env->getExtension('routing')->getPath("course_explore");
            echo "\">更多&gt;</a>
            </div>
            <div class=\"es-box-body\">
              ";
            // line 43
            echo $this->getAttribute($this, "course_grids", array(0 => $this->env->getExtension('topxia_data_twig')->getData("LatestCourses", array("count" => 6))), "method");
            echo "            
            </div>
          </div>
        ";
        }
        // line 47
        echo "
        ";
        // line 49
        echo "        ";
        if ($this->env->getExtension('topxia_web_twig')->getSetting("course.live_course_enabled")) {
            // line 50
            echo "          ";
            $context["recentLiveCourses"] = $this->env->getExtension('topxia_data_twig')->getData("RecentLiveCourses", array("count" => 3));
            // line 51
            echo "          ";
            if (isset($context["recentLiveCourses"])) { $_recentLiveCourses_ = $context["recentLiveCourses"]; } else { $_recentLiveCourses_ = null; }
            if ($_recentLiveCourses_) {
                // line 52
                echo "            <div class=\"es-box\">
              <div class=\"es-box-heading\">
                <h2>最新直播</h2>
                <a class=\"pull-right\" href=\"";
                // line 55
                echo $this->env->getExtension('routing')->getPath("live_course_explore");
                echo "\">更多&gt;</a>
              </div>
              <div class=\"es-box-body\">
                ";
                // line 58
                echo $this->getAttribute($this, "course_grids", array(0 => $this->env->getExtension('topxia_data_twig')->getData("RecentLiveCourses", array("count" => 3))), "method");
                echo "
              </div>
            </div>
          ";
            }
            // line 62
            echo "        ";
        }
        // line 63
        echo "
        ";
        // line 65
        echo "        ";
        $context["articles"] = $this->env->getExtension('topxia_data_twig')->getData("LatestArticles", array("count" => 4));
        // line 66
        echo "        ";
        if (isset($context["articles"])) { $_articles_ = $context["articles"]; } else { $_articles_ = null; }
        if ($_articles_) {
            // line 67
            echo "          <div class=\"es-box news\">
            <div class=\"es-box-heading\">
              <h2>最新资讯</h2>
              <a class=\"pull-right\" href=\"";
            // line 70
            echo $this->env->getExtension('routing')->getPath("article_show");
            echo "\">更多&gt;</a>
            </div>
            <div class=\"es-box-body\">
              <ul class=\"row\">
              ";
            // line 74
            if (isset($context["articles"])) { $_articles_ = $context["articles"]; } else { $_articles_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_articles_);
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 75
                echo "                ";
                if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                if ($_article_) {
                    // line 76
                    echo "                  <li class=\"col-md-6\">
                    <em>";
                    // line 77
                    if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_article_, "updatedTime"), "m-d H:i"), "html", null, true);
                    echo " </em>
                    <a href=\"";
                    // line 78
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
                // line 81
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "              </ul>
            </div>
          </div>
        ";
        }
        // line 86
        echo "
        ";
        // line 88
        echo "        ";
        $context["threads"] = $this->env->getExtension('topxia_data_twig')->getData("EliteCourseThreadsByType", array("count" => 4, "type" => "discussion"));
        // line 89
        echo "        ";
        if (isset($context["threads"])) { $_threads_ = $context["threads"]; } else { $_threads_ = null; }
        if ($_threads_) {
            // line 90
            echo "          <div class=\"es-box topic\">
            <div class=\"es-box-heading\">
              <h2>课程讨论</h2>
            </div>
            <div class=\"es-box-body\">
              <ul class=\"row\">
                ";
            // line 96
            if (isset($context["threads"])) { $_threads_ = $context["threads"]; } else { $_threads_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_threads_);
            foreach ($context['_seq'] as $context["_key"] => $context["thread"]) {
                // line 97
                echo "                  ";
                if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
                if ($_thread_) {
                    // line 98
                    echo "                    <li class=\"col-md-6\">
                      <div class=\"topic-item\">
                        <h4>
                          <a href=\"";
                    // line 101
                    if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_thread_show", array("courseId" => $this->getAttribute($_thread_, "courseId"), "id" => $this->getAttribute($_thread_, "id"))), "html", null, true);
                    echo "\">";
                    if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
                    echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($_thread_, "title"), 28);
                    echo "</a>
                        </h4>
                        <div class=\"topic-body\">
                          ";
                    // line 104
                    if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
                    $context["user"] = $this->getAttribute($_thread_, "user");
                    // line 105
                    echo "                          ";
                    if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
                    $context["latestPostUser"] = $this->getAttribute($_thread_, "latestPostUser");
                    // line 106
                    echo "                          <img src=\"";
                    if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getDefaultPath("avatar", $this->getAttribute($this->getAttribute($_thread_, "user"), "mediumAvatar"), ""), "html", null, true);
                    echo "\" class=\"pull-left\">
                          <h3>";
                    // line 107
                    if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_user_, "nickname"), "html", null, true);
                    echo "</h3>
                          <p><a href=\"";
                    // line 108
                    if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($this->getAttribute($_thread_, "course"), "id"))), "html", null, true);
                    echo "\">";
                    if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_thread_, "course"), "title"), "html", null, true);
                    echo "</a></p>
                        </div>

                        <p class=\"topic-bottom\">
                          <span>";
                    // line 112
                    if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
                    if (isset($context["latestPostUser"])) { $_latestPostUser_ = $context["latestPostUser"]; } else { $_latestPostUser_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "user_link", array(0 => $_latestPostUser_), "method"), "html", null, true);
                    echo "  </span>
              ";
                    // line 113
                    if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->smarttimeFilter($this->getAttribute($_thread_, "latestPostTime")), "html", null, true);
                    echo "回复
                          <span class=\"pull-right\">共 ";
                    // line 114
                    if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_thread_, "postNum"), "html", null, true);
                    echo " 个回复</span>
                        </p>
                      </div>
                    </li>
                  ";
                }
                // line 118
                echo " 
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thread'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 120
            echo "              </ul>
            </div>
          </div>
        ";
        }
        // line 124
        echo "
        ";
        // line 126
        echo "        ";
        $context["teachers"] = $this->env->getExtension('topxia_data_twig')->getData("RecommendTeachers", array("count" => "3"));
        // line 127
        echo "        ";
        if (isset($context["teachers"])) { $_teachers_ = $context["teachers"]; } else { $_teachers_ = null; }
        if ($_teachers_) {
            // line 128
            echo "          <div class=\"es-box teachers\">
            <div class=\"es-box-heading\">
              <h2>讲师团</h2>
              <a class=\"pull-right\" href=\"";
            // line 131
            echo $this->env->getExtension('routing')->getPath("teacher");
            echo "\">更多&gt;</a>
            </div>
            <div class=\"es-box-body\">
              <ul class=\"row teacher-grids\">
                 ";
            // line 135
            if (isset($context["teachers"])) { $_teachers_ = $context["teachers"]; } else { $_teachers_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_teachers_);
            foreach ($context['_seq'] as $context["_key"] => $context["teacher"]) {
                // line 136
                echo "                  ";
                if (isset($context["teacher"])) { $_teacher_ = $context["teacher"]; } else { $_teacher_ = null; }
                if ($_teacher_) {
                    // line 137
                    echo "                    <li class=\"col-sm-6 col-md-4\">
                      <div class=\"teachers-item\">
                        <a href=\"";
                    // line 139
                    if (isset($context["teacher"])) { $_teacher_ = $context["teacher"]; } else { $_teacher_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($_teacher_, "id"))), "html", null, true);
                    echo "\">
                         <img class=\"img-circle\" src=\"";
                    // line 140
                    if (isset($context["teacher"])) { $_teacher_ = $context["teacher"]; } else { $_teacher_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getDefaultPath("avatar", $this->getAttribute($_teacher_, "mediumAvatar"), ""), "html", null, true);
                    echo "\">
                        </a>
                 
                          <span>";
                    // line 143
                    if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
                    if (isset($context["teacher"])) { $_teacher_ = $context["teacher"]; } else { $_teacher_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "user_link", array(0 => $_teacher_), "method"), "html", null, true);
                    echo "</span>
                            <i> ";
                    // line 144
                    if (isset($context["teacher"])) { $_teacher_ = $context["teacher"]; } else { $_teacher_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_teacher_, "title"), "html", null, true);
                    echo "</i>
                            <p> ";
                    // line 145
                    if (isset($context["teacher"])) { $_teacher_ = $context["teacher"]; } else { $_teacher_ = null; }
                    echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($_teacher_, "about"), 50);
                    echo "</p>
                         </div>
                    </li>
                  ";
                }
                // line 149
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teacher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 150
            echo "              </ul>
            </div>
          </div>
        ";
        }
        // line 154
        echo "
        ";
        // line 156
        echo "        ";
        if ($this->env->getExtension('topxia_web_twig')->getSetting("vip.enabled")) {
            // line 157
            echo "          ";
            $context["levels"] = $this->env->getExtension('topxia_data_twig')->getData("VipLevels", array("count" => 100));
            // line 158
            echo "          ";
            if (isset($context["levels"])) { $_levels_ = $context["levels"]; } else { $_levels_ = null; }
            if ($_levels_) {
                // line 159
                echo "            <div class=\"es-box vip\">
              <div class=\"es-box-heading\">
                <h2>会员专区</h2>
                <a class=\"pull-right\" href=\"";
                // line 162
                echo $this->env->getExtension('routing')->getPath("vip");
                echo "\">更多&gt;</a>
              </div>
              <div class=\"es-box-body\">
                <ul class=\"row vip-lists\">
                  ";
                // line 166
                if (isset($context["levels"])) { $_levels_ = $context["levels"]; } else { $_levels_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($_levels_);
                foreach ($context['_seq'] as $context["_key"] => $context["level"]) {
                    // line 167
                    echo "                    ";
                    if (isset($context["level"])) { $_level_ = $context["level"]; } else { $_level_ = null; }
                    if ($_level_) {
                        // line 168
                        echo "                      <li class=\"col-sm-12\">
                        <div class=\"vip-item\">
                          <div class=\"row\">
                            <div class=\"col-sm-4 col-md-4\">
                              <a href=\"";
                        // line 172
                        if (isset($context["level"])) { $_level_ = $context["level"]; } else { $_level_ = null; }
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vip_course_explore", array("levelId" => $this->getAttribute($_level_, "id"))), "html", null, true);
                        echo "\">
                              <img class=\"img-responsive\" src=\"";
                        // line 173
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
                        // line 177
                        if (isset($context["level"])) { $_level_ = $context["level"]; } else { $_level_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_level_, "name"), "html", null, true);
                        echo "</h3>
                              <p>";
                        // line 178
                        if (isset($context["level"])) { $_level_ = $context["level"]; } else { $_level_ = null; }
                        echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($_level_, "description"), 40);
                        echo "</p>
                            </div>
                            <div class=\"vip-price col-sm-3 col-md-3\">
                              <h4>¥&nbsp;";
                        // line 181
                        if (isset($context["level"])) { $_level_ = $context["level"]; } else { $_level_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_level_, "monthPrice"), "html", null, true);
                        echo "</h4>
                              <h4><a href=\"";
                        // line 182
                        echo $this->env->getExtension('routing')->getPath("vip_buy");
                        echo "\" class=\"btn btn-success\">立即购买</a></h4>
                            </div>
                          </div>
                        </div>      
                      </li>
                    ";
                    }
                    // line 188
                    echo "                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['level'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 189
                echo "                </ul>
              </div>
            </div>
          ";
            }
            // line 193
            echo "        ";
        }
        // line 194
        echo "
         ";
        // line 196
        echo "        ";
        if ((($this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("group"), "group_show", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("group"), "group_show"), 1)) : (1))) {
            // line 197
            echo "          ";
            $context["groups"] = $this->env->getExtension('topxia_data_twig')->getData("HotGroup", array("count" => 15));
            // line 198
            echo "          ";
            if (isset($context["groups"])) { $_groups_ = $context["groups"]; } else { $_groups_ = null; }
            if ($_groups_) {
                // line 199
                echo "            <div class=\"es-box hot-group\">
              <div class=\"es-box-heading\"><h2>最热小组</h2><a href=\"";
                // line 200
                echo $this->env->getExtension('routing')->getPath("group_search_group");
                echo "\" class=\"pull-right\">更多&gt;</a></div>
              <div class=\"es-box-body\">
                 <ul class=\"list-unstyled\">
                  ";
                // line 203
                if (isset($context["groups"])) { $_groups_ = $context["groups"]; } else { $_groups_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($_groups_);
                foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                    // line 204
                    echo "                    ";
                    if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                    if (($this->getAttribute($_group_, "status") == "open")) {
                        echo " 
                      <li class=\"col-md-4\"> 
                        <div class=\"panel\">
                           <div class=\"media\">
                              <a href=\"";
                        // line 208
                        if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $this->getAttribute($_group_, "id"))), "html", null, true);
                        echo "\" title=\"";
                        if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_group_, "title"), "html", null, true);
                        echo "\" class=\"pull-left\">
                                ";
                        // line 209
                        if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                        if ($this->getAttribute($_group_, "logo")) {
                            // line 210
                            echo "                                <img src=\"";
                            if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFilePath($this->getAttribute($_group_, "logo")), "html", null, true);
                            echo "\" alt=\"";
                            if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($_group_, "title"), "html", null, true);
                            echo "\">
                                ";
                        } else {
                            // line 212
                            echo "                                <img src=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/default/group.png"), "html", null, true);
                            echo "\" alt=\"";
                            if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($_group_, "title"), "html", null, true);
                            echo "\">
                                ";
                        }
                        // line 214
                        echo "                              </a>
                              <div class=\"media-body\">
                                <p><a  href=\"";
                        // line 216
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
                        // line 218
                        if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_group_, "memberNum"), "html", null, true);
                        echo "个成员&nbsp;
                                  ";
                        // line 219
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
                    // line 226
                    echo "                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 227
                echo "                </ul>
              </div>
            </div>
          ";
            }
            // line 231
            echo "        ";
        }
        // line 232
        echo "
      </div>

      <div class=\"col-md-3\">
        ";
        // line 237
        echo "        ";
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if ($this->getAttribute($_app_, "user")) {
            // line 238
            echo "          ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Default:userlearning"));
            echo "
        ";
        }
        // line 240
        echo "
        ";
        // line 241
        echo "    
        ";
        // line 242
        $context["tags"] = $this->env->getExtension('topxia_data_twig')->getData("Tags", array("count" => 5));
        // line 243
        echo "        ";
        if (isset($context["tags"])) { $_tags_ = $context["tags"]; } else { $_tags_ = null; }
        if ($_tags_) {
            // line 244
            echo "          <div class=\"es-box teachers\">
            <div class=\"es-box-heading\">
              <h2>热门标签</h2>
            </div>
            <div class=\"es-box-body\">
              <div class=\"tag-list\">
                ";
            // line 250
            if (isset($context["tags"])) { $_tags_ = $context["tags"]; } else { $_tags_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_tags_);
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 251
                echo "                  ";
                if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
                if ($_tag_) {
                    echo " 
                    <a href=\"";
                    // line 252
                    if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tag_show", array("name" => $this->getAttribute($_tag_, "name"))), "html", null, true);
                    echo "\"> ";
                    if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_tag_, "name"), "html", null, true);
                    echo "</a>
                  ";
                }
                // line 254
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 255
            echo "              </div>
            </div>
          </div>
        ";
        }
        // line 259
        echo "
        ";
        // line 261
        echo "        ";
        $context["coursesRank"] = $this->env->getExtension('topxia_data_twig')->getData("PopularCourses", array("count" => "5", "type" => "studentNum"));
        // line 262
        echo "        ";
        if (isset($context["coursesRank"])) { $_coursesRank_ = $context["coursesRank"]; } else { $_coursesRank_ = null; }
        if ($_coursesRank_) {
            // line 263
            echo "          <div class=\"es-box courses-rank\">
            <div class=\"es-box-heading\">
              <h2>课程排行</h2>
            </div>
            <div class=\"es-box-body\">
              <ul class=\"media-list\">
                ";
            // line 269
            if (isset($context["coursesRank"])) { $_coursesRank_ = $context["coursesRank"]; } else { $_coursesRank_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_coursesRank_);
            foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                // line 270
                echo "                  ";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                if ($_course_) {
                    // line 271
                    echo "                    <li class=\"media\">
                      <a href=\"";
                    // line 272
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
                    echo "\">
                        <div class=\"course-item\">
                          <img src=\"";
                    // line 274
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getDefaultPath("coursePicture", $this->getAttribute($_course_, "largePicture"), "large"), "html", null, true);
                    echo "\"  class=\"img-responsive thumb pull-left\">
                          <div class=\"course-title\">";
                    // line 275
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_course_, "title"), "html", null, true);
                    echo "</div>
                        </div>
                      </a>
                    </li>
                  ";
                }
                // line 280
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "        
              </ul>
            </div>
          </div>
        ";
        }
        // line 285
        echo "
        ";
        // line 287
        echo "        ";
        $context["learns"] = $this->env->getExtension('topxia_data_twig')->getData("PersonDynamic", array("count" => 5));
        // line 288
        echo "        ";
        if (isset($context["learns"])) { $_learns_ = $context["learns"]; } else { $_learns_ = null; }
        if ($_learns_) {
            // line 289
            echo "          <div class=\"es-box status-side\">
            <div class=\"es-box-heading\">
              <h2>学员动态</h2>
            </div>
            <div class=\"es-box-body\">
              <ul class=\"media-list\">
                ";
            // line 295
            if (isset($context["learns"])) { $_learns_ = $context["learns"]; } else { $_learns_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_learns_);
            foreach ($context['_seq'] as $context["_key"] => $context["learn"]) {
                // line 296
                echo "                  <li class=\"media\">
                    <a class=\"pull-left\" href=\"";
                // line 297
                if (isset($context["learn"])) { $_learn_ = $context["learn"]; } else { $_learn_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($this->getAttribute($_learn_, "user"), "id"))), "html", null, true);
                echo "\">
                      <img class=\"media-object\" src=\"";
                // line 298
                if (isset($context["learn"])) { $_learn_ = $context["learn"]; } else { $_learn_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getDefaultPath("avatar", $this->getAttribute($this->getAttribute($_learn_, "user"), "mediumAvatar"), ""), "html", null, true);
                echo "\">
                    </a>
                    <div class=\"media-body\">
                      <a href=\"";
                // line 301
                if (isset($context["learn"])) { $_learn_ = $context["learn"]; } else { $_learn_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($this->getAttribute($_learn_, "user"), "id"))), "html", null, true);
                echo "\">";
                if (isset($context["learn"])) { $_learn_ = $context["learn"]; } else { $_learn_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_learn_, "user"), "nickname"), "html", null, true);
                echo "</a>
                      ";
                // line 302
                if (isset($context["learn"])) { $_learn_ = $context["learn"]; } else { $_learn_ = null; }
                if (($this->getAttribute($_learn_, "type") == "finished_testpaper")) {
                    // line 303
                    echo "                      完成了考试 ";
                    if (isset($context["learn"])) { $_learn_ = $context["learn"]; } else { $_learn_ = null; }
                    echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($this->getAttribute($this->getAttribute($_learn_, "properties"), "testpaper"), "name"), 15);
                    echo "
                      ";
                } elseif (($this->getAttribute($_learn_, "type") == "become_student")) {
                    // line 305
                    echo "                      加入了课程 ";
                    if (isset($context["learn"])) { $_learn_ = $context["learn"]; } else { $_learn_ = null; }
                    echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($this->getAttribute($this->getAttribute($_learn_, "properties"), "course"), "title"), 15);
                    echo "
                      ";
                } elseif (($this->getAttribute($_learn_, "type") == "learned_lesson")) {
                    // line 307
                    echo "                      完成了课时 ";
                    if (isset($context["learn"])) { $_learn_ = $context["learn"]; } else { $_learn_ = null; }
                    echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($this->getAttribute($this->getAttribute($_learn_, "properties"), "lesson"), "title"), 15);
                    echo "
                      ";
                }
                // line 309
                echo "                    </div>
                  </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['learn'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 312
            echo "              </ul>
            </div>
          </div>
        ";
        }
        // line 316
        echo "
        ";
        // line 317
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Default:latestReviewsBlock", array("number" => 5)));
        echo "

        ";
        // line 320
        echo "        ";
        if ((($this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("group"), "group_show", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("group"), "group_show"), 1)) : (1))) {
            // line 321
            echo "          ";
            $context["hotThreads"] = $this->env->getExtension('topxia_data_twig')->getData("HotThreads", array("count" => 11));
            // line 322
            echo "          ";
            if (isset($context["hotThreads"])) { $_hotThreads_ = $context["hotThreads"]; } else { $_hotThreads_ = null; }
            if ($_hotThreads_) {
                // line 323
                echo "            <div class=\"es-box hot-threads\">
              <div class=\"es-box-heading\"><h2>最热话题</h2></div>
              <div class=\"es-box-body\">
                <ul class=\"text-list\">
                  ";
                // line 327
                if (isset($context["hotThreads"])) { $_hotThreads_ = $context["hotThreads"]; } else { $_hotThreads_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($_hotThreads_);
                foreach ($context['_seq'] as $context["_key"] => $context["thread"]) {
                    // line 328
                    echo "                    ";
                    if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
                    if ($_thread_) {
                        // line 329
                        echo "                      <li style=\"border-bottom:none;background:url('";
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
                    // line 331
                    echo "                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thread'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 332
                echo "                </ul>
              </div>
            </div>
          ";
            }
            // line 336
            echo "        ";
        }
        // line 337
        echo "
      </div>
    </div>
    
  </div>
";
    }

    // line 344
    public function block_contact($context, array $blocks = array())
    {
        // line 345
        if (isset($context["contact"])) { $_contact_ = $context["contact"]; } else { $_contact_ = null; }
        if ($_contact_) {
            // line 346
            if (isset($context["contact"])) { $_contact_ = $context["contact"]; } else { $_contact_ = null; }
            if (($this->getAttribute($_contact_, "enabled") == 1)) {
                // line 347
                if (isset($context["contact"])) { $_contact_ = $context["contact"]; } else { $_contact_ = null; }
                $this->env->loadTemplate("TopxiaWebBundle:ContactFloat:contact.html.twig")->display(array_merge($context, array("contact" => $_contact_)));
            }
        }
    }

    // line 352
    public function getcourse_grids($_courses = null)
    {
        $context = $this->env->mergeGlobals(array(
            "courses" => $_courses,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 353
            echo "  ";
            if (isset($context["mode"])) { $_mode_ = $context["mode"]; } else { $_mode_ = null; }
            $context["mode"] = ((array_key_exists("mode", $context)) ? (_twig_default_filter($_mode_, "default")) : ("default"));
            // line 354
            echo "  ";
            if (isset($context["courses"])) { $_courses_ = $context["courses"]; } else { $_courses_ = null; }
            if ($_courses_) {
                // line 355
                echo "  <ul class=\"course-grids\">
    ";
                // line 356
                if (isset($context["courses"])) { $_courses_ = $context["courses"]; } else { $_courses_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($_courses_);
                foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                    // line 357
                    echo "      <li class=\"course-grid\">
        <a href=\"";
                    // line 358
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
                    echo "\" class=\"grid-body\">
          <img src=\"";
                    // line 359
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getDefaultPath("coursePicture", $this->getAttribute($_course_, "largePicture"), "large"), "html", null, true);
                    echo "\"  class=\"img-responsive thumb\">
            ";
                    // line 360
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    if (($this->getAttribute($_course_, "status") == "draft")) {
                        // line 361
                        echo "              <span class=\"label  label-warning course-status\">未发布</span>
            ";
                    } elseif (($this->getAttribute($_course_, "status") == "closed")) {
                        // line 363
                        echo "              <span class=\"label label-danger course-status\">已关闭</span>
            ";
                    }
                    // line 364
                    echo " 
            ";
                    // line 365
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    if (($this->getAttribute($_course_, "serializeMode") == "serialize")) {
                        // line 366
                        echo "              <span class=\"label label-success series-mode-label\">更新中</span>
            ";
                    } elseif (($this->getAttribute($_course_, "serializeMode") == "finished")) {
                        // line 368
                        echo "              <span class=\"label label-warning series-mode-label\">已完结</span>
            ";
                    }
                    // line 370
                    echo "
            ";
                    // line 371
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    if (($this->getAttribute($_course_, "type") == "live")) {
                        // line 372
                        echo "              ";
                        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                        $context["lesson"] = (($this->getAttribute($_course_, "lesson", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_course_, "lesson", array(), "array"), null)) : (null));
                        // line 373
                        echo "              ";
                        if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
                        if ((($_lesson_ && (twig_date_format_filter($this->env, "now", "U") >= $this->getAttribute($_lesson_, "startTime"))) && (twig_date_format_filter($this->env, "now", "U") <= $this->getAttribute($_lesson_, "endTime")))) {
                            // line 374
                            echo "                <span class=\"label label-warning series-mode-label\">正在直播中</span>
              ";
                        } else {
                            // line 376
                            echo "                <span class=\"label label-success series-mode-label\">直播</span>
              ";
                        }
                        // line 378
                        echo "            ";
                    }
                    // line 379
                    echo "
          <span class=\"title\">";
                    // line 380
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_course_, "title"), "html", null, true);
                    echo "</span>
          ";
                    // line 381
                    if (isset($context["mode"])) { $_mode_ = $context["mode"]; } else { $_mode_ = null; }
                    if (twig_in_filter($_mode_, array(0 => "default", 1 => "teach"))) {
                        // line 382
                        echo "
            ";
                        // line 383
                        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                        if (($this->getAttribute($_course_, "type") == "live")) {
                            // line 384
                            echo "              ";
                            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                            $context["lesson"] = (($this->getAttribute($_course_, "lesson", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_course_, "lesson", array(), "array"), null)) : (null));
                            // line 385
                            echo "              ";
                            if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
                            if ($_lesson_) {
                                // line 386
                                echo "                <span class=\"live-course-lesson metas\">
                  <span class=\"text-success mrm\">";
                                // line 387
                                if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
                                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_lesson_, "startTime"), "n月j日 H:i"), "html", null, true);
                                echo " ~ ";
                                if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
                                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_lesson_, "endTime"), "H:i"), "html", null, true);
                                echo "</span>
                  <span class=\"text-muted mrm\">第";
                                // line 388
                                if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
                                echo twig_escape_filter($this->env, $this->getAttribute($_lesson_, "number"), "html", null, true);
                                echo "课时</span>
                </span>
              ";
                            }
                            // line 391
                            echo "            ";
                        }
                        // line 392
                        echo "
            <span class=\"metas clearfix\">
              <span class=\"price-col\">
                <span class=\"meta-label\">价格</span>
                ";
                        // line 396
                        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                        if (($this->getAttribute($_course_, "price") > 0)) {
                            // line 397
                            echo "                  <span class=\"price-num\">";
                            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($_course_, "price"), "html", null, true);
                            echo "元</span>
                ";
                        } else {
                            // line 399
                            echo "                  <span class=\"price-num\">免费</span>
                ";
                        }
                        // line 401
                        echo "              </span>

              ";
                        // line 403
                        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                        if (($this->getAttribute($_course_, "showStudentNumType") == "opened")) {
                            // line 404
                            echo "              <span class=\"student-col\">
                <span class=\"meta-label\">学生</span>
                <span class=\"student-num\">";
                            // line 406
                            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($_course_, "studentNum"), "html", null, true);
                            echo "人</span>
              </span>
              ";
                        }
                        // line 409
                        echo "
              <span class=\"review-col\">
                ";
                        // line 411
                        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                        if (($this->getAttribute($_course_, "ratingNum") > 0)) {
                            // line 412
                            echo "                  <span class=\"meta-label\"><strong>";
                            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($_course_, "ratingNum"), "html", null, true);
                            echo "</strong> 评价</span>
                  <span class=\"review-rating\">
                    <span class=\"stars-";
                            // line 414
                            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($_course_, "rating")), "html", null, true);
                            echo "\">&nbsp;</span>
                  </span>
                ";
                        } else {
                            // line 417
                            echo "                  <span class=\"meta-label\">无评价</span>
                  <span class=\"review-rating\">
                    <span class=\"stars-0\">&nbsp;</span>
                  </span>
                ";
                        }
                        // line 422
                        echo "              </span>

            </span>
          ";
                    }
                    // line 426
                    echo "
          ";
                    // line 427
                    if (isset($context["mode"])) { $_mode_ = $context["mode"]; } else { $_mode_ = null; }
                    if (twig_in_filter($_mode_, array(0 => "default"))) {
                        // line 428
                        echo "            ";
                        if (isset($context["users"])) { $_users_ = $context["users"]; } else { $_users_ = null; }
                        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                        $context["user"] = (($this->getAttribute($_users_, twig_first($this->env, $this->getAttribute($_course_, "teacherIds")), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_users_, twig_first($this->env, $this->getAttribute($_course_, "teacherIds")), array(), "array"), null)) : (null));
                        // line 429
                        echo "            ";
                        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                        if ($_user_) {
                            // line 430
                            echo "              <span class=\"teacher clearfix\">
                <img src=\"";
                            // line 431
                            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getDefaultPath("avatar", $this->getAttribute($_user_, "smallAvatar"), ""), "html", null, true);
                            echo "\" class=\"thumb\">
                <span class=\"nickname ellipsis\">";
                            // line 432
                            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($_user_, "nickname"), "html", null, true);
                            echo "</span>
                <span class=\"user-title ellipsis\">";
                            // line 433
                            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($_user_, "title"), "html", null, true);
                            echo "</span>
              </span>
            ";
                        }
                        // line 436
                        echo "          ";
                    }
                    // line 437
                    echo "
          ";
                    // line 438
                    if (isset($context["mode"])) { $_mode_ = $context["mode"]; } else { $_mode_ = null; }
                    if (twig_in_filter($_mode_, array(0 => "learn"))) {
                        // line 439
                        echo "            <div class=\"learn-status\">
              ";
                        // line 440
                        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                        if ($this->getAttribute($_course_, "memberIsLearned")) {
                            // line 441
                            echo "                <div class=\"progress\">
                  <div class=\"progress-bar progress-bar-success\" style=\"width: 100%;\"></div>
                </div>
                <div class=\"action\"><span class=\"btn btn-default btn-sm\">查看课程</span></div>
              ";
                        } else {
                            // line 446
                            echo "                <div class=\"progress\">
                  <div class=\"progress-bar progress-bar-success\" style=\"width: ";
                            // line 447
                            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->calculatePercent($this->getAttribute($_course_, "memberLearnedNum"), $this->getAttribute($_course_, "lessonNum")), "html", null, true);
                            echo ";\"></div>
                </div>
                <div class=\"action\"><span class=\"btn btn-primary btn-sm\">继续学习</span></div>
              ";
                        }
                        // line 451
                        echo "            </div>
            ";
                        // line 452
                        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                        if (($this->getAttribute($_course_, "status") == "draft")) {
                            // line 453
                            echo "              <span class=\"label  label-warning course-status\">未发布</span>
            ";
                        } elseif (($this->getAttribute($_course_, "status") == "closed")) {
                            // line 455
                            echo "              <span class=\"label label-danger course-status\">已关闭</span>
            ";
                        }
                        // line 456
                        echo "       
          ";
                    }
                    // line 458
                    echo "
          ";
                    // line 459
                    if (isset($context["mode"])) { $_mode_ = $context["mode"]; } else { $_mode_ = null; }
                    if (($_mode_ == "teach")) {
                        // line 460
                        echo "            ";
                        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                        if (($this->getAttribute($_course_, "status") == "published")) {
                            // line 461
                            echo "              <span class=\"label label-success course-status\">已发布</span>
            ";
                        } elseif (($this->getAttribute($_course_, "status") == "draft")) {
                            // line 463
                            echo "              <span class=\"label  label-warning course-status\">未发布</span>
            ";
                        } elseif (($this->getAttribute($_course_, "status") == "closed")) {
                            // line 465
                            echo "              <span class=\"label label-danger course-status\">已关闭</span>
            ";
                        }
                        // line 467
                        echo "          ";
                    }
                    // line 468
                    echo "
        </a>
      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 472
                echo "  </ul>
  ";
            } else {
                // line 474
                echo "    <div class=\"empty\">暂无课程。</div>
  ";
            }
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
        return array (  1253 => 474,  1249 => 472,  1240 => 468,  1237 => 467,  1233 => 465,  1229 => 463,  1225 => 461,  1221 => 460,  1218 => 459,  1215 => 458,  1211 => 456,  1207 => 455,  1203 => 453,  1200 => 452,  1197 => 451,  1189 => 447,  1186 => 446,  1179 => 441,  1176 => 440,  1173 => 439,  1170 => 438,  1167 => 437,  1164 => 436,  1157 => 433,  1152 => 432,  1147 => 431,  1144 => 430,  1140 => 429,  1135 => 428,  1132 => 427,  1129 => 426,  1123 => 422,  1116 => 417,  1109 => 414,  1102 => 412,  1099 => 411,  1095 => 409,  1088 => 406,  1084 => 404,  1081 => 403,  1077 => 401,  1073 => 399,  1066 => 397,  1063 => 396,  1057 => 392,  1054 => 391,  1047 => 388,  1039 => 387,  1036 => 386,  1032 => 385,  1028 => 384,  1025 => 383,  1022 => 382,  1019 => 381,  1014 => 380,  1011 => 379,  1008 => 378,  1004 => 376,  1000 => 374,  996 => 373,  992 => 372,  989 => 371,  986 => 370,  982 => 368,  978 => 366,  975 => 365,  972 => 364,  968 => 363,  964 => 361,  961 => 360,  956 => 359,  951 => 358,  948 => 357,  943 => 356,  940 => 355,  936 => 354,  932 => 353,  921 => 352,  914 => 347,  911 => 346,  908 => 345,  905 => 344,  896 => 337,  893 => 336,  887 => 332,  881 => 331,  869 => 329,  865 => 328,  860 => 327,  854 => 323,  850 => 322,  847 => 321,  844 => 320,  839 => 317,  836 => 316,  830 => 312,  822 => 309,  815 => 307,  808 => 305,  801 => 303,  798 => 302,  790 => 301,  783 => 298,  778 => 297,  775 => 296,  770 => 295,  762 => 289,  758 => 288,  755 => 287,  752 => 285,  740 => 280,  731 => 275,  726 => 274,  720 => 272,  717 => 271,  713 => 270,  708 => 269,  700 => 263,  696 => 262,  693 => 261,  690 => 259,  684 => 255,  678 => 254,  669 => 252,  663 => 251,  658 => 250,  650 => 244,  646 => 243,  644 => 242,  641 => 241,  638 => 240,  632 => 238,  628 => 237,  622 => 232,  619 => 231,  613 => 227,  607 => 226,  596 => 219,  591 => 218,  579 => 216,  575 => 214,  566 => 212,  556 => 210,  553 => 209,  545 => 208,  536 => 204,  531 => 203,  525 => 200,  522 => 199,  518 => 198,  515 => 197,  512 => 196,  509 => 194,  506 => 193,  500 => 189,  494 => 188,  485 => 182,  480 => 181,  473 => 178,  468 => 177,  457 => 173,  452 => 172,  446 => 168,  442 => 167,  437 => 166,  430 => 162,  425 => 159,  421 => 158,  418 => 157,  415 => 156,  412 => 154,  406 => 150,  400 => 149,  392 => 145,  387 => 144,  381 => 143,  374 => 140,  369 => 139,  365 => 137,  361 => 136,  356 => 135,  349 => 131,  344 => 128,  340 => 127,  337 => 126,  334 => 124,  328 => 120,  321 => 118,  312 => 114,  307 => 113,  301 => 112,  290 => 108,  285 => 107,  279 => 106,  275 => 105,  272 => 104,  262 => 101,  257 => 98,  253 => 97,  248 => 96,  240 => 90,  236 => 89,  233 => 88,  230 => 86,  224 => 82,  218 => 81,  205 => 78,  200 => 77,  197 => 76,  193 => 75,  188 => 74,  181 => 70,  176 => 67,  172 => 66,  169 => 65,  166 => 63,  163 => 62,  156 => 58,  150 => 55,  145 => 52,  141 => 51,  138 => 50,  135 => 49,  132 => 47,  125 => 43,  119 => 40,  115 => 38,  111 => 37,  108 => 36,  105 => 34,  98 => 30,  92 => 27,  88 => 25,  84 => 24,  81 => 23,  72 => 17,  59 => 15,  54 => 14,  50 => 12,  43 => 9,  39 => 7,  36 => 6,  32 => 4,  29 => 3,);
    }
}
