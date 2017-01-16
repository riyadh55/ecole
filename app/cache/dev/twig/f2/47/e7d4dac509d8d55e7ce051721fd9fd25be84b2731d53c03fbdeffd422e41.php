<?php

/* ecoEcoleBundle:Modereglement:new.html.twig */
class __TwigTemplate_f247e7d4dac509d8d55e7ce051721fd9fd25be84b2731d53c03fbdeffd422e41 extends Twig_Template
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
        echo "<h1>Modereglement creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("modereglement");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "ecoEcoleBundle:Modereglement:new.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  41 => 10,  34 => 6,  30 => 4,  24 => 3,  20 => 1,);
    }
}
