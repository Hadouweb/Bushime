<?php

/* KitaBushimeBundle:Tracker:menu.html.twig */
class __TwigTemplate_3f2441e69665a5b201b408d8c7ab9530c266abb8b98fc9a15f717737a6e6daa8 extends Twig_Template
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
<h3>Les derniers articles</h3>

<ul class=\"nav nav-pills nav-stacked\">
    ";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste_articles"]) ? $context["liste_articles"] : $this->getContext($context, "liste_articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 7
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("kitablog_voir", array("slug" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "slug"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "titre"), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "</ul>

";
    }

    public function getTemplateName()
    {
        return "KitaBushimeBundle:Tracker:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 29,  58 => 15,  152 => 69,  148 => 68,  129 => 60,  126 => 59,  100 => 11,  34 => 9,  53 => 19,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 61,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 56,  102 => 27,  71 => 19,  67 => 40,  63 => 39,  59 => 14,  38 => 8,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 28,  56 => 20,  87 => 25,  21 => 2,  26 => 6,  93 => 71,  88 => 58,  78 => 21,  46 => 15,  27 => 5,  44 => 12,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 62,  121 => 46,  117 => 44,  105 => 40,  91 => 59,  62 => 23,  49 => 14,  24 => 4,  25 => 6,  19 => 2,  79 => 25,  72 => 21,  69 => 25,  47 => 13,  40 => 9,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 13,  101 => 32,  98 => 31,  96 => 26,  83 => 25,  74 => 22,  66 => 18,  55 => 15,  52 => 16,  50 => 10,  43 => 10,  41 => 7,  35 => 7,  32 => 6,  29 => 7,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 67,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 57,  116 => 28,  112 => 14,  109 => 34,  106 => 36,  103 => 12,  99 => 31,  95 => 28,  92 => 21,  86 => 56,  82 => 22,  80 => 19,  73 => 19,  64 => 22,  60 => 21,  57 => 11,  54 => 13,  51 => 14,  48 => 11,  45 => 17,  42 => 10,  39 => 9,  36 => 17,  33 => 6,  30 => 5,);
    }
}
