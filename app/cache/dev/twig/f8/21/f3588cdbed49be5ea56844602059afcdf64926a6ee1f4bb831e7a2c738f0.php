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
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
        foreach ($context['_seq'] as $context["_key"] => $context["aliment"]) {
            // line 11
            echo "                <tr>
                    <td><a href=\"\">";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aliment"]) ? $context["aliment"] : $this->getContext($context, "aliment")), "nom"), "html", null, true);
            echo "</a></td>
                    <td><a href=\"\">";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aliment"]) ? $context["aliment"] : $this->getContext($context, "aliment")), "description"), "html", null, true);
            echo "</a></td>
                    <td><a href=\"\">";
            // line 14
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["aliment"]) ? $context["aliment"] : $this->getContext($context, "aliment")), "date"), "d-m-Y"), "html", null, true);
            echo "</a></td>
                </tr> 
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aliment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
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
        return array (  54 => 16,  45 => 14,  41 => 13,  37 => 12,  34 => 11,  30 => 10,  19 => 1,);
    }
}
