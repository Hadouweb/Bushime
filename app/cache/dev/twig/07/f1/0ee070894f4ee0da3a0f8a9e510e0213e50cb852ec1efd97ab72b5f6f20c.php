<?php

/* KitaBushimeBundle:Tracker:formulaireAliments.html.twig */
class __TwigTemplate_07f10ee070894f4ee0da3a0f8a9e510e0213e50cb852ec1efd97ab72b5f6f20c extends Twig_Template
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
        echo "    <div class=\"well\">
        <form action=\"\" method=\"post\" ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">

        ";
        // line 5
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "

        <div>
          ";
        // line 9
        echo "          ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nom"), 'label', array("label" => "Nom du produit"));
        echo "

          ";
        // line 12
        echo "          ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nom"), 'errors');
        echo "

          ";
        // line 15
        echo "          ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nom"), 'widget');
        echo "
        </div>

        ";
        // line 19
        echo "        <div>
          ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "description"), 'label', array("label" => "Description du produit"));
        echo "
          ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "description"), 'errors');
        echo "
          ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "description"), 'widget');
        echo "
        </div>

        ";
        // line 29
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "
            
        <br />
        <input class=\"btn btn-primary\" type=\"submit\" value=\"Envoyer\" />
            
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "KitaBushimeBundle:Tracker:formulaireAliments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 29,  64 => 22,  60 => 21,  56 => 20,  53 => 19,  46 => 15,  40 => 12,  34 => 9,  27 => 5,  22 => 2,  19 => 1,);
    }
}