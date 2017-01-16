<?php

/* ecoEcoleBundle:Eleve:index.html.twig */
class __TwigTemplate_86049b512b133467ddb5b9e0ed6d4824751c3ef8967d6330ab770318caadd8fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(2);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"container\">
        <div class=\"col-md-12\">
            <div class=\"page-header margin-none\">
                <h1 class=\"padding-none\"> list eleves</h1>

                <div class=\"table-responsive\">
                    <table class=\"table table-striped table-hover\">    
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Datenaissance</th>
                                <th>Genre</th>
                                <th>Adresse</th>
                                <th>Tel</th>
                                <th>Nomtuteur</th>
                                <th>Adressetuteur</th>
                                <th>Teltuteur</th>
                                <th>Emailtuteur</th>
                                <th>Professiontuteur</th>
                                <th>Cintuteur</th>
                                <th>image</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 33
            echo "                                <tr>
                                    <td><a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eleve_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                                    <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nom", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "prenom", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 37
            if ($this->getAttribute($context["entity"], "datenaissance", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "datenaissance", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                                    <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "genre", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "adresse", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "tel", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nomtuteur", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "adressetuteur", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "teltuteur", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "emailtuteur", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "professiontuteur", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "cintuteur", array()), "html", null, true);
            echo "</td>
                                    <td>
                                        <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eleve_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                                            <img src=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/eleves/" . $this->getAttribute($context["entity"], "path", array()))), "html", null, true);
            echo "\" alt=\"\"class=\"img-circle\">
                                        </a>
                                    </td>
                                    <td class=\"actions\">

                                        <a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eleve_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"
                                           class=\"btn btn-sm btn-info \">Show</a>

                                        <a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eleve_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"
                                           class=\"btn btn-sm btn-primary\" >Edit</a>

                                        <a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eleve_delete", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"
                                           class=\"btn btn-sm btn-danger\" >Delete</a>

                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "                        </tbody>
                    </table>

                    <ul>
                        <li>
                            <a href=\"";
        // line 71
        echo $this->env->getExtension('routing')->getPath("eleve_new");
        echo "\">
                                Create a new entry
                            </a>
                        </li>
                    </ul>
                ";
    }

    public function getTemplateName()
    {
        return "ecoEcoleBundle:Eleve:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 71,  170 => 66,  158 => 60,  152 => 57,  146 => 54,  138 => 49,  134 => 48,  129 => 46,  125 => 45,  121 => 44,  117 => 43,  113 => 42,  109 => 41,  105 => 40,  101 => 39,  97 => 38,  91 => 37,  87 => 36,  83 => 35,  77 => 34,  74 => 33,  70 => 32,  39 => 4,  36 => 3,  11 => 2,);
    }
}
