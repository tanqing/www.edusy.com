<?php

/* TopxiaWebBundle:CourseFileManage:index.html.twig */
class __TwigTemplate_bfa3af7d9ce1fd1d1d99a5233db85721 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaWebBundle:CourseManage:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:CourseManage:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["side_nav"] = "files";
        // line 6
        $context["tab"] = "courseLesson";
        // line 7
        $context["script_controller"] = "course-manage-file/index";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "文件管理 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_main($context, array $blocks = array())
    {
        // line 10
        echo "
<div class=\"panel panel-default panel-col\">

  <div class=\"panel-heading\">

      ";
        // line 15
        if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
        if (($_type_ == "courselesson")) {
            echo "    
      <button class=\"btn btn-info btn-sm pull-right\"
      data-html5-url=\"";
            // line 17
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_batch_upload_course_files", array("id" => $this->getAttribute($_course_, "id"), "targetType" => "courselesson")), "html", null, true);
            echo "\"
      data-normal-url=\"";
            // line 18
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_upload_course_files", array("id" => $this->getAttribute($_course_, "id"), "targetType" => "courselesson")), "html", null, true);
            echo "\"
      data-storage=\"";
            // line 19
            if (isset($context["storageSetting"])) { $_storageSetting_ = $context["storageSetting"]; } else { $_storageSetting_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_storageSetting_, "upload_mode"), "html", null, true);
            echo "\"
      >
        <i class=\"glyphicon glyphicon-cloud-upload\"></i>上传课时文件
      </button>

      ";
        } elseif (($_type_ == "coursematerial")) {
            // line 25
            echo "      <button class=\"btn btn-info btn-sm pull-right\" 
        data-html5-url=\"";
            // line 26
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_batch_upload_course_files", array("id" => $this->getAttribute($_course_, "id"), "targetType" => "coursematerial")), "html", null, true);
            echo "\"
        data-normal-url=\"";
            // line 27
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_upload_course_files", array("id" => $this->getAttribute($_course_, "id"), "targetType" => "coursematerial")), "html", null, true);
            echo "\"
        data-storage=\"";
            // line 28
            if (isset($context["storageSetting"])) { $_storageSetting_ = $context["storageSetting"]; } else { $_storageSetting_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_storageSetting_, "upload_mode"), "html", null, true);
            echo "\"
        >
        <i class=\"glyphicon glyphicon-cloud-upload\"></i>上传备用资料文件
      </button>

      ";
        }
        // line 34
        echo "
    文件管理
  </div>


  <div class=\"panel-body\" id=\"file-manage-panel\"> 

    <ul class=\"nav nav-tabs mbm\">
      <li ";
        // line 42
        if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
        if (($_type_ == "courselesson")) {
            echo " class=\"active\" ";
        }
        echo ">
        <a href=\"";
        // line 43
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_files", array("id" => $this->getAttribute($_course_, "id"), "type" => "courselesson")), "html", null, true);
        echo "\">课时文件</a></li>
      <li ";
        // line 44
        if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
        if (($_type_ == "coursematerial")) {
            echo " class=\"active\" ";
        }
        echo "><a href=\"";
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_files", array("id" => $this->getAttribute($_course_, "id"), "type" => "coursematerial")), "html", null, true);
        echo "\">备用资料文件</a></li>
    </ul>

    <table class=\"table table-striped table-hover\" id=\"course-lesson-table\">
      <thead>
        <tr>
          <th width=\"5%\"><input type=\"checkbox\"  data-role=\"batch-select\"></th>
          <th>文件名</th>
          <th>类型</th>
          <th>大小</th>
          <th>最后更新</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 58
        if (isset($context["courseLessons"])) { $_courseLessons_ = $context["courseLessons"]; } else { $_courseLessons_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_courseLessons_);
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["uploadFile"]) {
            // line 59
            echo "          ";
            $this->env->loadTemplate("TopxiaWebBundle:CourseFileManage:tbody-tr.html.twig")->display($context);
            // line 60
            echo "        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 61
            echo "          <tr class=\"empty\"><td colspan=\"20\">无文件记录</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['uploadFile'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "      </tbody>
    </table>
    
    <label class=\"checkbox-inline mrm\"><input type=\"checkbox\" data-role=\"batch-select\"> 全选</label>
    

    <div class=\"btn-group\">
      <button class=\"btn btn-danger btn-sm\" data-role=\"batch-delete\" data-name=\"文件记录\" data-url=\"";
        // line 70
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if (isset($context["tab"])) { $_tab_ = $context["tab"]; } else { $_tab_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_upload_course_delete_files", array("id" => $this->getAttribute($_course_, "id"), "type" => $_tab_)), "html", null, true);
        echo "\">
        <i class=\"glyphicon glyphicon-trash\"></i>
      删除</button>

    </div>
    
    <div class=\"mbl\">
       ";
        // line 77
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "paginator", array(0 => $_paginator_), "method"), "html", null, true);
        echo "
    </div>

   ";
        // line 80
        if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
        if (($_type_ == "coursematerial")) {
            // line 81
            echo "
      <div class=\"alert alert-info\">
        <ul>
          <li>上传备用资料文件成功后，在添加课时资料时可直接选取。</li>
          <li><strong><a href=\"";
            // line 85
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_materials", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
            echo "\">课程资料区</a></strong>显示的是所有课时下的资料文件。</li>
        </ul>
      </div>
    ";
        }
        // line 89
        echo "    


  </div>

</div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseFileManage:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 89,  226 => 85,  220 => 81,  217 => 80,  209 => 77,  197 => 70,  188 => 63,  181 => 61,  168 => 60,  165 => 59,  146 => 58,  123 => 44,  118 => 43,  111 => 42,  101 => 34,  91 => 28,  86 => 27,  81 => 26,  78 => 25,  68 => 19,  63 => 18,  58 => 17,  52 => 15,  45 => 10,  42 => 9,  35 => 3,  30 => 7,  28 => 6,  26 => 5,);
    }
}
