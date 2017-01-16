<?php

/* ecoEcoleBundle:Default:ModifierProfesseur.html.twig */
class __TwigTemplate_b36af7098936ce60d2dfb72d8c3ed304468e959aecebda2754bee2fd6bd2de19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "    <h1>Gestion Professeur</h1>
    <a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("addproff");
        echo "\">Add professor</a>
    <form action=\"\" method=\"post\">
        ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'widget');
        echo "
        <input type=\"submit\">
    </form>
        <hr>
        <h3>liste des Professeurs</h3>
         <table border=\"1\">
        <thread>
            <th>Id professeur</th><th>nom professeur</th><th>prenom professeur</th>
            <th>date naissance</th><th>genre</th><th>specialité</th><th>taux horaire</th>
        </thread>
        ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["professeurs"]) ? $context["professeurs"] : $this->getContext($context, "professeurs")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 17
            echo "            <tr>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "prenom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["p"], "datenaissance", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "genre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "specialite", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "tauxHoraire", array()), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supp_proff", array("id" => $this->getAttribute($context["p"], "id", array()))), "html", null, true);
            echo "\">supprimer</a></td>
                <td><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modifproff", array("id" => $this->getAttribute($context["p"], "id", array()))), "html", null, true);
            echo "\">modifier</a></td>
            </tr>        
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "   
    </table>
        ";
    }

    public function getTemplateName()
    {
        return "ecoEcoleBundle:Default:ModifierProfesseur.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  95 => 28,  86 => 26,  82 => 25,  78 => 24,  74 => 23,  70 => 22,  66 => 21,  62 => 20,  58 => 19,  54 => 18,  51 => 17,  47 => 16,  34 => 6,  29 => 4,  26 => 3,  20 => 2,);
    }
}
