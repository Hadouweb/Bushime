<?php

/* KitaBushimeBundle:Tracker:rapportAliments.html.twig */
class __TwigTemplate_f821f3588cdbed49be5ea56844602059afcdf64926a6ee1f4bb831e7a2c738f0 extends Twig_Template
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
        echo "<div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover tablesorter\">
        <thead>
            <tr>
                <th>Nom <i class=\"fa fa-sort\"></i></th>
                <th>Déscription <i class=\"fa fa-sort\"></i></th>
                <th>Date <i class=\"fa fa-sort\"></i></th>
            </tr>
        </thead>
            ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "data"));
        foreach ($context['_seq'] as $context["_key"] => $context["aliment"]) {
            // line 11
            echo "                <tr>
                    <td>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "aliment"), "nom"), "html", null, true);
            echo "</td>
                    <td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "aliment"), "description"), "html", null, true);
            echo "</td>
                    <td>";
            // line 14
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "aliment"), "date"), "d-m-Y"), "html", null, true);
            echo "</td>
                    <td><a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("kitabushime_modifieraliments", array("id" => $this->getAttribute($this->getContext($context, "aliment"), "id"))), "html", null, true);
            echo "\"><i class=\"fa fa-edit\"></i></a></td>
                    <td><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("kitabushime_supprimeraliments", array("id" => $this->getAttribute($this->getContext($context, "aliment"), "id"))), "html", null, true);
            echo "\"><i class=\"fa fa-trash-o\"></i></a></td>
                </tr> 
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aliment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "          
        </tbody>
    </table>
</div>

 ";
    }

    public function getTemplateName()
    {
        return "KitaBushimeBundle:Tracker:rapportAliments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 18,  53 => 16,  49 => 15,  45 => 14,  41 => 13,  37 => 12,  34 => 11,  30 => 10,  19 => 1,);
    }
}
