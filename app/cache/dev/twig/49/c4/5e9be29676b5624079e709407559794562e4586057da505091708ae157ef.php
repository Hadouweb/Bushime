<?php

/* KitaBushimeBundle:Tracker:article.html.twig */
class __TwigTemplate_49c45e9be29676b5624079e709407559794562e4586057da505091708ae157ef extends Twig_Template
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
        $context["accueil"] = ((array_key_exists("accueil", $context)) ? (_twig_default_filter($this->getContext($context, "accueil"), false)) : (false));
        // line 2
        echo "
<h2>
  ";
        // line 4
        if ((!(null === $this->getAttribute($this->getContext($context, "article"), "image")))) {
            // line 5
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute($this->getContext($context, "article"), "image"), "url")), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "article"), "image"), "alt"), "html", null, true);
            echo "\" />
  ";
        }
        // line 7
        echo "
  ";
        // line 8
        if ($this->getContext($context, "accueil")) {
            // line 9
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("kitablog_voir", array("slug" => $this->getAttribute($this->getContext($context, "article"), "slug"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "titre"), "html", null, true);
            echo "</a>
  ";
        } else {
            // line 11
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "titre"), "html", null, true);
            echo "
  ";
        }
        // line 13
        echo "</h2>

<i>Le ";
        // line 15
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "date"), "d/m/Y"), "html", null, true);
        echo ", par ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "auteur"), "html", null, true);
        echo ".</i>

<div class=\"well\">
  ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "contenu"), "html", null, true);
        echo "
</div>

";
        // line 21
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "article"), "categories"), "count") > 0)) {
            // line 22
            echo "  <div class=\"well well-small\">
    <p><i>
      Catégories :
      ";
            // line 25
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "article"), "categories"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
                // line 26
                echo "        ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "categorie"), "nom"), "html", null, true);
                if ((!$this->getAttribute($this->getContext($context, "loop"), "last"))) {
                    echo ", ";
                }
                // line 27
                echo "      ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "    </i></p>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "KitaBushimeBundle:Tracker:article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 15,  53 => 26,  23 => 2,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 28,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 47,  102 => 27,  71 => 34,  67 => 32,  63 => 15,  59 => 14,  38 => 8,  94 => 28,  89 => 20,  85 => 46,  75 => 17,  68 => 14,  56 => 9,  87 => 50,  21 => 2,  26 => 6,  93 => 8,  88 => 6,  78 => 21,  46 => 7,  27 => 5,  44 => 12,  31 => 8,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 14,  24 => 4,  25 => 4,  19 => 1,  79 => 25,  72 => 21,  69 => 25,  47 => 13,  40 => 9,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 26,  83 => 25,  74 => 22,  66 => 18,  55 => 15,  52 => 17,  50 => 15,  43 => 10,  41 => 7,  35 => 7,  32 => 6,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 48,  116 => 28,  112 => 35,  109 => 34,  106 => 36,  103 => 32,  99 => 10,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 36,  64 => 17,  60 => 16,  57 => 27,  54 => 13,  51 => 14,  48 => 11,  45 => 17,  42 => 10,  39 => 9,  36 => 10,  33 => 6,  30 => 5,);
    }
}
