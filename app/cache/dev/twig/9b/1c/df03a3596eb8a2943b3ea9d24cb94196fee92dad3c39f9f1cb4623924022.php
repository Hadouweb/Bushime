<?php

/* KitaBushimeBundle:Tracker:formulaire.html.twig */
class __TwigTemplate_9b1cdf03a3596eb8a2943b3ea9d24cb94196fee92dad3c39f9f1cb4623924022 extends Twig_Template
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
        // line 2
        echo "
<h3>Formulaire d'article</h3>

    <div class=\"well\">
        <form action=\"\" method=\"post\" ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">

        ";
        // line 9
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "

        <div>
          ";
        // line 13
        echo "          ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nom"), 'label', array("label" => "Titre de l'article"));
        echo "

          ";
        // line 16
        echo "          ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nom"), 'errors');
        echo "

          ";
        // line 19
        echo "          ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nom"), 'widget');
        echo "
        </div>

        ";
        // line 23
        echo "        <div>
          ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "description"), 'label', array("label" => "Contenu de l'article"));
        echo "
          ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "description"), 'errors');
        echo "
          ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "description"), 'widget');
        echo "
        </div>

        ";
        // line 33
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "
            
        <br />
        <input class=\"btn btn-primary\" type=\"submit\" value=\"Envoyer\" />
            
        </form>
    </div>
    
</div>
";
    }

    public function getTemplateName()
    {
        return "KitaBushimeBundle:Tracker:formulaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 33,  67 => 26,  63 => 25,  59 => 24,  56 => 23,  49 => 19,  43 => 16,  37 => 13,  30 => 9,  25 => 6,  19 => 2,);
    }
}
