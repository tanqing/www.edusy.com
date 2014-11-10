<?php

/* TwigBundle:Exception:layout.html.twig */
class __TwigTemplate_0a0dde39c01c26bbb8baba9252386fee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

<style>

body {
  background-color: #f9f9f9;
  font-size: 14px;
}

h1 {
\tfont-size: 20px;
\tfont-weight: bold;
\tmargin: 0 0 20px;
\tpadding: 0;
\tcolor: #444;
}

a {
\tcolor: #428bca;
\ttext-decoration: none;
}

a:hover {
\ttext-decoration: underline;
}

.container {
  width: 500px;
  margin: 60px auto;
  background: #fff;
  border: 1px solid #ddd;
}

.content {
\tpadding: 40px;
}

.message {
\tmargin-bottom: 20px;
\tcolor: #666;
\tline-height: 24px;
}

.actions a {
\tmargin-right: 20px;
}

</style>
</head>
<body>
\t";
        // line 55
        $this->displayBlock('body', $context, $blocks);
        // line 56
        echo "</body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.name", "EDUSOHO"), "html", null, true);
        echo " - ";
        if ($this->env->getExtension('topxia_web_twig')->getSetting("site.slogan")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.slogan"), "html", null, true);
            echo " -";
        }
        echo " Powered by EDUSOHO";
    }

    // line 55
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  101 => 55,  88 => 5,  82 => 56,  80 => 55,  27 => 5,  21 => 1,  63 => 16,  59 => 14,  55 => 12,  48 => 10,  45 => 9,  39 => 5,  36 => 4,  29 => 2,);
    }
}
