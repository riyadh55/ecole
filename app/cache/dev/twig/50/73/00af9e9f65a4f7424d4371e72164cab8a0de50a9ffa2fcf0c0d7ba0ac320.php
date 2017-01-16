<?php

/* ecoEcoleBundle:Default:ajouterClasse.html.twig */
class __TwigTemplate_507300af9e9f65a4f7424d4371e72164cab8a0de50a9ffa2fcf0c0d7ba0ac320 extends Twig_Template
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
        echo "    <h1>Gestion Classe</h1>
    <form action=\"\" method=\"post\">
        ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'widget');
        echo "
        <input type=\"submit\">
    </form>
        ";
    }

    public function getTemplateName()
    {
        return "ecoEcoleBundle:Default:ajouterClasse.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  30 => 5,  26 => 3,  20 => 2,);
    }
}
