<?php

/* ecoEcoleBundle:Default:SupprimerEleve.html.twig */
class __TwigTemplate_bc11149f826371517a3548ae23bed2352ef5247a4b70053ccc7178cece81f9d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'title' => array($this, 'block_title'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Gestion Eleves</h1>
    <a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("addeleve");
        echo "\">Add eleve</a>  
    <div class=\"panel panel-default\">
  <div class=\"panel-heading\">Ajouter eleve</div>
  <div class=\"panel-body\">
    <form action=\"\" method=\"post\">

        <table>
       
         <tr>
            <td>";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "nom", array()), 'label');
        echo "</td>
            <td>";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "nom", array()), 'errors');
        echo "</td>
            <td>";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "nom", array()), 'widget');
        echo "</td>
        </tr>
          <tr>
            <td>";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "prenom", array()), 'label');
        echo "</td>
            <td>";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "prenom", array()), 'errors');
        echo "</td>
            <td>";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "prenom", array()), 'widget');
        echo "</td>
        </tr>
          <tr>
            <td>";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "datenaissance", array()), 'label');
        echo "</td>
            <td>";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "datenaissance", array()), 'errors');
        echo "</td>
            <td>";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "datenaissance", array()), 'widget');
        echo "</td>
        </tr>
                  <tr>
            <td>";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "genre", array()), 'label');
        echo "</td>
            <td>";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "genre", array()), 'errors');
        echo "</td>
            <td>";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "genre", array()), 'widget');
        echo "</td>
        </tr>
                  <tr>
            <td>";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "adresse", array()), 'label');
        echo "</td>
            <td>";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "adresse", array()), 'errors');
        echo "</td>
            <td>";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "adresse", array()), 'widget');
        echo "</td>
        </tr>
                  <tr>
            <td>";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "tel", array()), 'label');
        echo "</td>
            <td>";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "tel", array()), 'errors');
        echo "</td>
            <td>";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "tel", array()), 'widget');
        echo "</td>
        </tr>
           <tr>
            <td>";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "nomtuteur", array()), 'label');
        echo "</td>
            <td>";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "nomtuteur", array()), 'errors');
        echo "</td>
            <td>";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "nomtuteur", array()), 'widget');
        echo "</td>
        </tr>
           <tr>
            <td>";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "adressetuteur", array()), 'label');
        echo "</td>
            <td>";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "adressetuteur", array()), 'errors');
        echo "</td>
            <td>";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "adressetuteur", array()), 'widget');
        echo "</td>
        </tr>
           <tr>
            <td>";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "emailtuteur", array()), 'label');
        echo "</td>
            <td>";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "emailtuteur", array()), 'errors');
        echo "</td>
            <td>";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "emailtuteur", array()), 'widget');
        echo "</td>
        </tr>
        <tr>
            <td>";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "professiontuteur", array()), 'label');
        echo "</td>
            <td>";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "professiontuteur", array()), 'errors');
        echo "</td>
            <td>";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "professiontuteur", array()), 'widget');
        echo "</td>
        </tr>
              
        <tr>
            <td>";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "cintuteur", array()), 'label');
        echo "</td>
            <td>";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "cintuteur", array()), 'errors');
        echo "</td>
            <td>";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "cintuteur", array()), 'widget');
        echo "</td>
        </tr>
              
               
    ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'widget');
        echo "
       
    <tr><td><input type=\"submit\" value=\"valider\"/></td></tr>
    
 </table>
    </form>
  </div></div></div>
     
   <!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\"/>
        <title>";
        // line 83
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 84
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 88
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" /> 
    </head>
    <body>

        ";
        // line 92
        $this->displayBlock('javascripts', $context, $blocks);
        // line 96
        echo "
    </body>
</html>
      <div class=\"container\">
        <div class=\"col-md-12\">
            <div class=\"page-header margin-none\">
                <h2 class=\"padding-none\">liste eleves</h2>
            </div>
            <div class=\"panel panel-primary\">
                <div class=\"panel-heading\">liste eleves</div>
                <div class=\"panel-body\">

                    <div class=\"table-responsive\">           
                        <table class=\"table table-striped table-hover\">
                            <thead>
                                <tr>
                                    <th>Id eleve</th><th>nom eleve</th>
                                    <th>prenom eleve</th></th><th>date naissance</th>
                                </th><th>genre</th></th><th>adresse</th><th>tel</th>
                            <th>nom tuteur</th><th>adresse tuteur</th><th>tel tuteur</th><th>email tuteur</th>
                            <th>profession tuteur</th><th>cin tuteur</th>
                    </thead>
                    <tbody>
                        ";
        // line 119
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["eleves"]) ? $context["eleves"] : $this->getContext($context, "eleves")));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 120
            echo "                            <tr>
                                <td>";
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "id", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 122
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "nom", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "prenom", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 124
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["e"], "datenaissance", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                                <td>";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "genre", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "adresse", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 127
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "tel", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 128
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "nomtuteur", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 129
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "adressetuteur", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 130
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "teltuteur", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "emailtuteur", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 132
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "professiontuteur", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 133
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "cintuteur", array()), "html", null, true);
            echo "</td>

                                <td class=\"actions\">
                                    <a href=\"";
            // line 136
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supp_eleve", array("id" => $this->getAttribute($context["e"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger btn-delete \">
                                        <span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span> supprimer</a>
                                    <a href=\"";
            // line 138
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modifeleve", array("id" => $this->getAttribute($context["e"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\">
                                        <span class=\"glyphicon glyphicon-edit\" aria-hidden=\"true\"> modifier</a>
                                </td>
                            </tr>        
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        echo "   
                    </tbody>
                </table>
            </div></div>
    </div>  
</div>
</div>
";
    }

    // line 83
    public function block_title($context, array $blocks = array())
    {
        echo "liste users";
    }

    // line 84
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 85
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/css/style.css"), "html", null, true);
        echo "\" />
        ";
    }

    // line 92
    public function block_javascripts($context, array $blocks = array())
    {
        // line 93
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/jquery-3.1.1.min"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/bootstrap.min"), "html", null, true);
        echo "\"></script> 
        ";
    }

    public function getTemplateName()
    {
        return "ecoEcoleBundle:Default:SupprimerEleve.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  375 => 94,  370 => 93,  367 => 92,  361 => 86,  356 => 85,  353 => 84,  347 => 83,  336 => 142,  325 => 138,  320 => 136,  314 => 133,  310 => 132,  306 => 131,  302 => 130,  298 => 129,  294 => 128,  290 => 127,  286 => 126,  282 => 125,  278 => 124,  274 => 123,  270 => 122,  266 => 121,  263 => 120,  259 => 119,  234 => 96,  232 => 92,  224 => 88,  222 => 84,  218 => 83,  203 => 71,  196 => 67,  192 => 66,  188 => 65,  181 => 61,  177 => 60,  173 => 59,  167 => 56,  163 => 55,  159 => 54,  153 => 51,  149 => 50,  145 => 49,  139 => 46,  135 => 45,  131 => 44,  125 => 41,  121 => 40,  117 => 39,  111 => 36,  107 => 35,  103 => 34,  97 => 31,  93 => 30,  89 => 29,  83 => 26,  79 => 25,  75 => 24,  69 => 21,  65 => 20,  61 => 19,  55 => 16,  51 => 15,  47 => 14,  35 => 5,  32 => 4,  26 => 3,  23 => 2,);
    }
}
