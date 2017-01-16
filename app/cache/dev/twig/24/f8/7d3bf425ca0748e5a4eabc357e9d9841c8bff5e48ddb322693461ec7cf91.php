<?php

/* ecoEcoleBundle:Classe:new.html.twig */
class __TwigTemplate_24f87d3bf425ca0748e5a4eabc357e9d9841c8bff5e48ddb322693461ec7cf91 extends Twig_Template
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
        // line 1
        echo "

";
        // line 3
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Classe creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("classe");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "ecoEcoleBundle:Classe:new.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  41 => 10,  34 => 6,  30 => 4,  24 => 3,  20 => 1,);
    }
}
