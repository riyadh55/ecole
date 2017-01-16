<?php

/* ecoEcoleBundle:Default:ajouterMatiere.html.twig */
class __TwigTemplate_64d743019f2be184d616a42ac6be17195bb270ada5dc2efd3f6accee9a76d9b9 extends Twig_Template
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
        echo "    <h1>Gestion Matiere</h1>
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
        return "ecoEcoleBundle:Default:ajouterMatiere.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  30 => 5,  26 => 3,  20 => 2,);
    }
}
