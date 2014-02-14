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
        echo "    </head>

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
                    <a class=\"navbar-brand\" href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("kitabushime_accueil");
        echo "\">Tableau de bord</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
                    <ul class=\"nav navbar-nav side-nav\">
                        <li class=\"active\"><a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("kitabushime_accueil");
        echo "\"><i class=\"fa fa-dashboard\"></i> Accueil</a></li>
                        <li><a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("kitabushime_aliments");
        echo "\"><i class=\"fa fa-coffee\"></i> Aliments</a></li>
                        <li class=\"dropdown\">             
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-level-up\"></i> Sports <b class=\"caret\"></b></a>
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
        // line 56
        $this->displayBlock('body', $context, $blocks);
        // line 58
        echo "
    ";
        // line 59
        $this->displayBlock('javascripts', $context, $blocks);
        // line 71
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

    // line 56
    public function block_body($context, array $blocks = array())
    {
        // line 57
        echo "    ";
    }

    // line 59
    public function block_javascripts($context, array $blocks = array())
    {
        // line 60
        echo "            <!-- JavaScript -->
            <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.10.2.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>

            <!-- Page Specific Plugins -->
            <script src=\"http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js\"></script>
            <script src=\"http://cdn.oesmith.co.uk/morris-0.4.3.min.js\"></script>
            <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/morris/chart-data-morris.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/tablesorter/jquery.tablesorter.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/tablesorter/tables.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 69,  148 => 68,  144 => 67,  136 => 62,  132 => 61,  129 => 60,  126 => 59,  122 => 57,  119 => 56,  112 => 14,  108 => 13,  103 => 12,  100 => 11,  93 => 71,  91 => 59,  88 => 58,  86 => 56,  67 => 40,  63 => 39,  36 => 17,  34 => 11,  22 => 1,  56 => 12,  53 => 11,  48 => 13,  46 => 11,  43 => 10,  40 => 9,  33 => 6,  30 => 5,  82 => 39,  80 => 38,  68 => 28,  66 => 27,  54 => 33,  52 => 16,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
