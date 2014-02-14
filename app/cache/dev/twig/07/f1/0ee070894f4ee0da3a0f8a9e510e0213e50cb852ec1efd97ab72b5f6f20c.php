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
        return array (  70 => 29,  64 => 22,  60 => 21,  27 => 5,  19 => 1,  152 => 69,  148 => 68,  144 => 67,  136 => 62,  132 => 61,  129 => 60,  126 => 59,  122 => 57,  119 => 56,  112 => 14,  108 => 13,  103 => 12,  100 => 11,  93 => 71,  91 => 59,  88 => 58,  86 => 56,  67 => 40,  63 => 39,  36 => 17,  34 => 9,  22 => 2,  56 => 20,  53 => 19,  48 => 13,  46 => 15,  43 => 10,  40 => 12,  33 => 6,  30 => 5,  82 => 39,  80 => 38,  68 => 28,  66 => 27,  54 => 33,  52 => 16,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
