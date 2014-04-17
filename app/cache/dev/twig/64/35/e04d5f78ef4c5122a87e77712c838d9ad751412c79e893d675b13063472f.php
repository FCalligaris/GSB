<?php

/* PgGsbFraisBundle:ListeFrais:listefraishorsforfait.html.twig */
class __TwigTemplate_6435e04d5f78ef4c5122a87e77712c838d9ad751412c79e893d675b13063472f extends Twig_Template
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
        echo "<table class=\"listeLegere\">
    <caption>Descriptif des éléments hors forfait - ";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["nbjustificatifs"]) ? $context["nbjustificatifs"] : $this->getContext($context, "nbjustificatifs")), "html", null, true);
        echo " - justificatifs reçus </caption>
    <tr>
        <th class =\"date\">Date</th>
        <th class =\"libelle\">Libellé</th>
        <th class =\"montant\">Montant</th>
    </tr> 
          ";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesfraishorsforfait"]) ? $context["lesfraishorsforfait"] : $this->getContext($context, "lesfraishorsforfait")));
        foreach ($context['_seq'] as $context["_key"] => $context["unfrais"]) {
            // line 9
            echo "                ";
            $context["date"] = $this->getAttribute((isset($context["unfrais"]) ? $context["unfrais"] : $this->getContext($context, "unfrais")), "date");
            // line 10
            echo "                ";
            $context["libelle"] = $this->getAttribute((isset($context["unfrais"]) ? $context["unfrais"] : $this->getContext($context, "unfrais")), "libelle");
            // line 11
            echo "                ";
            $context["montant"] = $this->getAttribute((isset($context["unfrais"]) ? $context["unfrais"] : $this->getContext($context, "unfrais")), "montant");
            // line 12
            echo "                <tr>
                    <td> ";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "html", null, true);
            echo "</td>
                    <td> ";
            // line 14
            echo twig_escape_filter($this->env, (isset($context["libelle"]) ? $context["libelle"] : $this->getContext($context, "libelle")), "html", null, true);
            echo "</td>
                    <td> ";
            // line 15
            echo twig_escape_filter($this->env, (isset($context["montant"]) ? $context["montant"] : $this->getContext($context, "montant")), "html", null, true);
            echo "</td>
                </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unfrais'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "</table>
";
    }

    public function getTemplateName()
    {
        return "PgGsbFraisBundle:ListeFrais:listefraishorsforfait.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 18,  51 => 14,  47 => 13,  44 => 12,  41 => 11,  38 => 10,  35 => 9,  85 => 22,  79 => 21,  69 => 19,  60 => 17,  55 => 15,  52 => 15,  49 => 14,  46 => 13,  42 => 12,  31 => 8,  28 => 2,  32 => 7,  29 => 6,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
