<?php

/* KitaBushimeBundle:Tracker:ajouterDiet.html.twig */
class __TwigTemplate_2c388993e05c877adda7d110eee6629a97ca5b18f6a6df95ce9d76dc794e6947 extends Twig_Template
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

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "    Ajouter un article - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_kitabushime_body($context, array $blocks = array())
    {
        // line 10
        echo "
    <h2>Ajouter un article</h2>
    
    ";
        // line 13
        $this->env->loadTemplate("KitaBushimeBundle:Tracker:formulaire.html.twig")->display($context);
        // line 14
        echo "    
    <p>
        Attention: cet article sera ajouté directement sur la page d'accueil après validation du formulaire.
    </p>

";
    }

    public function getTemplateName()
    {
        return "KitaBushimeBundle:Tracker:ajouterDiet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 14,  47 => 13,  42 => 10,  39 => 9,  32 => 6,  29 => 5,);
    }
}
