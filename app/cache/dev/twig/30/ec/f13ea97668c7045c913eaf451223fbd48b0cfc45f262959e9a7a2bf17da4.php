<?php

/* KitaBushimeBundle:Tracker:aliments.html.twig */
class __TwigTemplate_30ecf13ea97668c7045c913eaf451223fbd48b0cfc45f262959e9a7a2bf17da4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("KitaBushimeBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'kitabushime_body' => array($this, 'block_kitabushime_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "KitaBushimeBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    Ajouter un article - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_kitabushime_body($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"row\">  
    
    <div class=\"col-lg-4\">
        <div class=\"panel panel-primary\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\">Ajouter un aliment</h3>
            </div>
            <div class=\"panel-body\">
                ";
        // line 16
        $this->env->loadTemplate("KitaBushimeBundle:Tracker:formulaireAliments.html.twig")->display($context);
        // line 17
        echo "            </div>
        </div>
    </div>
    
    <div class=\"col-lg-4\">
        <div class=\"panel panel-primary\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\">Base de donnée</h3>
            </div>
            <div class=\"panel-body\">
                ";
        // line 27
        $this->env->loadTemplate("KitaBushimeBundle:Tracker:rapportAliments.html.twig")->display($context);
        // line 28
        echo "            </div>
        </div>
    </div>
    
    <div class=\"col-lg-4\">
        <div class=\"panel panel-primary\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\">Aujourd'hui</h3>
            </div>
            <div class=\"panel-body\">
                ";
        // line 38
        $this->env->loadTemplate("KitaBushimeBundle:Tracker:rapportAliments.html.twig")->display($context);
        // line 39
        echo "            </div>
        </div>
    </div>
    
</div>  
";
    }

    public function getTemplateName()
    {
        return "KitaBushimeBundle:Tracker:aliments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 39,  80 => 38,  68 => 28,  66 => 27,  54 => 17,  52 => 16,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
