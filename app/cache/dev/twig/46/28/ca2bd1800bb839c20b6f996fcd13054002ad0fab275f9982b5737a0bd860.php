<?php

/* ecoEcoleBundle:Default:ajouterEleve.html.twig */
class __TwigTemplate_4628ca2bd1800bb839c20b6f996fcd13054002ad0fab275f9982b5737a0bd860 extends Twig_Template
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
        // line 1
        echo "

";
        // line 3
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Gestion Eleves</h1>
    <div class=\"panel panel-default\">
  <div class=\"panel-heading\">Ajouter eleve</div>
  <div class=\"panel-body\">
    <form action=\"\" method=\"post\">

        <table>
       
         <tr>
            <td>";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "nom", array()), 'label');
        echo "</td>
            <td>";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "nom", array()), 'errors');
        echo "</td>
            <td>";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "nom", array()), 'widget');
        echo "</td>
        </tr>
          <tr>
            <td>";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "prenom", array()), 'label');
        echo "</td>
            <td>";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "prenom", array()), 'errors');
        echo "</td>
            <td>";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "prenom", array()), 'widget');
        echo "</td>
        </tr>
          <tr>
            <td>";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "datenaissance", array()), 'label');
        echo "</td>
            <td>";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "datenaissance", array()), 'errors');
        echo "</td>
            <td>";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "datenaissance", array()), 'widget');
        echo "</td>
        </tr>
                  <tr>
            <td>";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "genre", array()), 'label');
        echo "</td>
            <td>";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "genre", array()), 'errors');
        echo "</td>
            <td>";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "genre", array()), 'widget');
        echo "</td>
        </tr>
                  <tr>
            <td>";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "adresse", array()), 'label');
        echo "</td>
            <td>";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "adresse", array()), 'errors');
        echo "</td>
            <td>";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "adresse", array()), 'widget');
        echo "</td>
        </tr>
                  <tr>
            <td>";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "tel", array()), 'label');
        echo "</td>
            <td>";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "tel", array()), 'errors');
        echo "</td>
            <td>";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "tel", array()), 'widget');
        echo "</td>
        </tr>
           <tr>
            <td>";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "nomtuteur", array()), 'label');
        echo "</td>
            <td>";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "nomtuteur", array()), 'errors');
        echo "</td>
            <td>";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "nomtuteur", array()), 'widget');
        echo "</td>
        </tr>
           <tr>
            <td>";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "adressetuteur", array()), 'label');
        echo "</td>
            <td>";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "adressetuteur", array()), 'errors');
        echo "</td>
            <td>";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "adressetuteur", array()), 'widget');
        echo "</td>
        </tr>
           <tr>
            <td>";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "emailtuteur", array()), 'label');
        echo "</td>
            <td>";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "emailtuteur", array()), 'errors');
        echo "</td>
            <td>";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "emailtuteur", array()), 'widget');
        echo "</td>
        </tr>
        <tr>
            <td>";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "professiontuteur", array()), 'label');
        echo "</td>
            <td>";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "professiontuteur", array()), 'errors');
        echo "</td>
            <td>";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "professiontuteur", array()), 'widget');
        echo "</td>
        </tr>
              
        <tr>
            <td>";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "cintuteur", array()), 'label');
        echo "</td>
            <td>";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "cintuteur", array()), 'errors');
        echo "</td>
            <td>";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "cintuteur", array()), 'widget');
        echo "</td>
        </tr>
              
               
    ";
        // line 70
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
        // line 82
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 83
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 87
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" /> 
    </head>
    <body>

        ";
        // line 91
        $this->displayBlock('javascripts', $context, $blocks);
        // line 95
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
        // line 118
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["eleves"]) ? $context["eleves"] : $this->getContext($context, "eleves")));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 119
            echo "                            <tr>
                                <td>";
            // line 120
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "id", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "nom", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 122
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "prenom", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 123
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["e"], "datenaissance", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                                <td>";
            // line 124
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "genre", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "adresse", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "tel", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 127
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "nomtuteur", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 128
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "adressetuteur", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 129
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "teltuteur", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 130
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "emailtuteur", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "professiontuteur", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 132
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "cintuteur", array()), "html", null, true);
            echo "</td>

                                <td class=\"actions\">
                                    <a href=\"";
            // line 135
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supp_eleve", array("id" => $this->getAttribute($context["e"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger btn-delete \">
                                        <span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span> supprimer</a>
                                    <a href=\"";
            // line 137
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
        // line 141
        echo "   
                    </tbody>
                </table>
            </div></div>
    </div>  
</div>
</div>
";
    }

    // line 82
    public function block_title($context, array $blocks = array())
    {
        echo "liste users";
    }

    // line 83
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 84
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/css/style.css"), "html", null, true);
        echo "\" />
        ";
    }

    // line 91
    public function block_javascripts($context, array $blocks = array())
    {
        // line 92
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/jquery-3.1.1.min"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/bootstrap.min"), "html", null, true);
        echo "\"></script> 
        ";
    }

    public function getTemplateName()
    {
        return "ecoEcoleBundle:Default:ajouterEleve.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  372 => 93,  367 => 92,  364 => 91,  358 => 85,  353 => 84,  350 => 83,  344 => 82,  333 => 141,  322 => 137,  317 => 135,  311 => 132,  307 => 131,  303 => 130,  299 => 129,  295 => 128,  291 => 127,  287 => 126,  283 => 125,  279 => 124,  275 => 123,  271 => 122,  267 => 121,  263 => 120,  260 => 119,  256 => 118,  231 => 95,  229 => 91,  221 => 87,  219 => 83,  215 => 82,  200 => 70,  193 => 66,  189 => 65,  185 => 64,  178 => 60,  174 => 59,  170 => 58,  164 => 55,  160 => 54,  156 => 53,  150 => 50,  146 => 49,  142 => 48,  136 => 45,  132 => 44,  128 => 43,  122 => 40,  118 => 39,  114 => 38,  108 => 35,  104 => 34,  100 => 33,  94 => 30,  90 => 29,  86 => 28,  80 => 25,  76 => 24,  72 => 23,  66 => 20,  62 => 19,  58 => 18,  52 => 15,  48 => 14,  44 => 13,  33 => 4,  27 => 3,  23 => 1,);
    }
}
