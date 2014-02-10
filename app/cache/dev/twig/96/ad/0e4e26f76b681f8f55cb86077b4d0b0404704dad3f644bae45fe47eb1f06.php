<?php

/* ::layout.html.twig */
class __TwigTemplate_96ad0e4e26f76b681f8f55cb86077b4d0b0404704dad3f644bae45fe47eb1f06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Tableau de bord Bushime</title>
    
    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "  </head>

  <body>

    <div id=\"wrapper\">

      <!-- Sidebar -->
      <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"index.html\">Tableau de bord</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
          <ul class=\"nav navbar-nav side-nav\">
            <li class=\"active\"><a href=\"index.html\"><i class=\"fa fa-dashboard\"></i> Dashboard</a></li>
            <li><a href=\"\"><i class=\"fa fa-bar-chart-o\"></i> Charts</a></li>
            <li><a href=\"\"><i class=\"fa fa-table\"></i> Tables</a></li>
            <li><a href=\"\"><i class=\"fa fa-edit\"></i> Forms</a></li>
            <li><a href=\"\"><i class=\"fa fa-font\"></i> Typography</a></li>
            <li><a href=\"\"><i class=\"fa fa-desktop\"></i> Bootstrap Elements</a></li>
            <li><a href=\"\"><i class=\"fa fa-wrench\"></i> Bootstrap Grid</a></li>
            <li><a href=\"\"><i class=\"fa fa-file\"></i> Blank Page</a></li>
            <li class=\"dropdown\">
              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-caret-square-o-down\"></i> Dropdown <b class=\"caret\"></b></a>
              <ul class=\"dropdown-menu\">
                <li><a href=\"#\">Dropdown Item</a></li>
                <li><a href=\"#\">Another Item</a></li>
                <li><a href=\"#\">Third Item</a></li>
                <li><a href=\"#\">Last Item</a></li>
              </ul>
            </li>
          </ul>


        </div><!-- /.navbar-collapse -->
      </nav>

    ";
        // line 62
        $this->displayBlock('body', $context, $blocks);
        // line 64
        echo "
    ";
        // line 65
        $this->displayBlock('javascripts', $context, $blocks);
        // line 77
        echo "
  </body>
</html>
";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/sb-admin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"http://cdn.oesmith.co.uk/morris-0.4.3.min.css\">
    ";
    }

    // line 62
    public function block_body($context, array $blocks = array())
    {
        // line 63
        echo "    ";
    }

    // line 65
    public function block_javascripts($context, array $blocks = array())
    {
        // line 66
        echo "    <!-- JavaScript -->
    <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.10.2.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>

    <!-- Page Specific Plugins -->
    <script src=\"http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js\"></script>
    <script src=\"http://cdn.oesmith.co.uk/morris-0.4.3.min.js\"></script>
    <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/morris/chart-data-morris.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/tablesorter/jquery.tablesorter.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/tablesorter/tables.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  149 => 75,  145 => 74,  141 => 73,  133 => 68,  129 => 67,  126 => 66,  123 => 65,  119 => 63,  116 => 62,  109 => 14,  105 => 13,  100 => 12,  97 => 11,  90 => 77,  88 => 65,  85 => 64,  83 => 62,  36 => 17,  34 => 11,  22 => 1,);
    }
}
