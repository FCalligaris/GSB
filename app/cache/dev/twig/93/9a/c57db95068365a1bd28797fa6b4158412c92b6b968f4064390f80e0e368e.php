<?php

/* PgGsbFraisBundle:SuivieFrais:suivreFrais.html.twig */
class __TwigTemplate_939ac57db95068365a1bd28797fa6b4158412c92b6b968f4064390f80e0e368e extends Twig_Template
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
                <label for=\"lstUtilisateur\" accesskey=\"n\"> Utilisateur : </label>
                <select id=\"lstUtilisateur\" name =\"lstUtilisateur\">
                ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesVisiteurs"]) ? $context["lesVisiteurs"] : $this->getContext($context, "lesVisiteurs")));
        foreach ($context['_seq'] as $context["_key"] => $context["unVisiteur"]) {
            // line 14
            echo "                    <option value =";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["unVisiteur"]) ? $context["unVisiteur"] : $this->getContext($context, "unVisiteur")), "id"), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["unVisiteur"]) ? $context["unVisiteur"] : $this->getContext($context, "unVisiteur")), "nom"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["unVisiteur"]) ? $context["unVisiteur"] : $this->getContext($context, "unVisiteur")), "prenom"), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unVisiteur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
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
        return "PgGsbFraisBundle:SuivieFrais:suivreFrais.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 16,  47 => 14,  43 => 13,  31 => 3,  28 => 2,);
    }
}
