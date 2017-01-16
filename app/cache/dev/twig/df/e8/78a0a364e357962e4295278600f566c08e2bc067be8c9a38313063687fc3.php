<?php

/* menu.html.twig */
class __TwigTemplate_dfe878a0a364e357962e4295278600f566c08e2bc067be8c9a38313063687fc3 extends Twig_Template
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
        echo "
<nav class=\"navbar navbar-default\">
  <div class=\"container-fluid\">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" 
              data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      <a class=\"navbar-brand\" href=\"#\">Assignments</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
      <ul class=\"nav navbar-nav\">
        <li class=\"active\"><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("eleve_create");
        echo "\">Eleves <span class=\"sr-only\">(current)</span></a></li>
        <li><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("professeur_create");
        echo "\">Professeurs</a></li>
        <li><a href=\"#\">Reglement Etudiant</a></li>
         <li><a href=\"#\">Reglement Professeur</a></li>
        <li><a href=\"#\">Notes</a></li>
        
      </ul>
      <form class=\"navbar-form navbar-left\">
        <div class=\"form-group\">
          <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
        </div>
        <button type=\"submit\" class=\"btn btn-default\">Submit</button>
      </form>
      
      <ul class=\"nav navbar-nav navbar-right\">
          
        <li><a href=\"#\"> inscription</a></li>
          
      
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>";
    }

    public function getTemplateName()
    {
        return "menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 19,  38 => 18,  19 => 1,);
    }
}
