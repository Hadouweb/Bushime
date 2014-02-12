<?php

/* KitaBushimeBundle::layout.html.twig */
class __TwigTemplate_7904213a97c0abb6177a128254e5ec5d93d2c91eea52a505c99f2161b646ce10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'kitabushime_body' => array($this, 'block_kitabushime_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "    Blog - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "    <div id=\"page-wrapper\">   
        ";
        // line 11
        $this->displayBlock('kitabushime_body', $context, $blocks);
        // line 13
        echo "    </div>
";
    }

    // line 11
    public function block_kitabushime_body($context, array $blocks = array())
    {
        // line 12
        echo "        ";
    }

    public function getTemplateName()
    {
        return "KitaBushimeBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 12,  53 => 11,  48 => 13,  46 => 11,  43 => 10,  40 => 9,  33 => 6,  30 => 5,  42 => 10,  39 => 9,  32 => 6,  29 => 5,);
    }
}
