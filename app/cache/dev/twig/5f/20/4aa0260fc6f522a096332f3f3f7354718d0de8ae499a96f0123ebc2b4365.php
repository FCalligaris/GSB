<?php

/* PgGsbFraisBundle:SuivreFrais:SuivreFrais.html.twig */
class __TwigTemplate_5f204aa0260fc6f522a096332f3f3f7354718d0de8ae499a96f0123ebc2b4365 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("PgGsbFraisBundle::accueilCompta.html.twig");

        $this->blocks = array(
            'section' => array($this, 'block_section'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PgGsbFraisBundle::accueilCompta.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_section($context, array $blocks = array())
    {
        // line 3
        echo "<h1>Suivi des frais des utilisateurs </h1>

<div id=\"contenu\">
    <h2> Mes fiches à traiter </h2>
    <h3> Mois à sélectionner : </h3>
    <form method =\"POST\">
        <div class=\"corpsForm\">
            <p>
                <label for=\"lstMois\" accesskey=\"n\"> Mois : </label>
                <select id=\"lstMois\" name =\"lstMois\">
                ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesmois"]) ? $context["lesmois"] : $this->getContext($context, "lesmois")));
        foreach ($context['_seq'] as $context["_key"] => $context["unMois"]) {
            // line 14
            echo "                    ";
            $context["mois"] = $this->getAttribute((isset($context["unMois"]) ? $context["unMois"] : $this->getContext($context, "unMois")), "mois");
            // line 15
            echo "                    ";
            $context["numAnnee"] = $this->getAttribute((isset($context["unMois"]) ? $context["unMois"] : $this->getContext($context, "unMois")), "numAnnee");
            // line 16
            echo "                    ";
            $context["numMois"] = $this->getAttribute((isset($context["unMois"]) ? $context["unMois"] : $this->getContext($context, "unMois")), "numMois");
            // line 17
            echo "             ";
            if (((isset($context["mois"]) ? $context["mois"] : $this->getContext($context, "mois")) == (isset($context["lemois"]) ? $context["lemois"] : $this->getContext($context, "lemois")))) {
                echo " 
                    <option selected value =\"";
                // line 18
                echo twig_escape_filter($this->env, (isset($context["mois"]) ? $context["mois"] : $this->getContext($context, "mois")), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, (isset($context["numMois"]) ? $context["numMois"] : $this->getContext($context, "numMois")), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, (isset($context["numAnnee"]) ? $context["numAnnee"] : $this->getContext($context, "numAnnee")), "html", null, true);
                echo "  </option>
                    ";
            } else {
                // line 20
                echo "                    <option value =\"";
                echo twig_escape_filter($this->env, (isset($context["mois"]) ? $context["mois"] : $this->getContext($context, "mois")), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, (isset($context["numMois"]) ? $context["numMois"] : $this->getContext($context, "numMois")), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, (isset($context["numAnnee"]) ? $context["numAnnee"] : $this->getContext($context, "numAnnee")), "html", null, true);
                echo "  </option>
                     ";
            }
            // line 22
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unMois'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "                </select>
            </p>
        </div>

        <div class=\"piedForm\">
            </p>
            <input id = \"ok\" class=\"btn btn-success btn-large\" type=\"submit\" value=\"Valider\" name=\"valider\" size = \"20\">
            <input id = \"annuler\" class=\"btn btn-danger btn-large\" type=\"reset\" value=\"Annuler\" name=\"annuler\" size = \"20\"> 
            </p>
        </div>  
    </form> 

";
    }

    public function getTemplateName()
    {
        return "PgGsbFraisBundle:SuivreFrais:SuivreFrais.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 23,  80 => 22,  70 => 20,  61 => 18,  56 => 17,  53 => 16,  50 => 15,  47 => 14,  43 => 13,  31 => 3,  28 => 2,);
    }
}
