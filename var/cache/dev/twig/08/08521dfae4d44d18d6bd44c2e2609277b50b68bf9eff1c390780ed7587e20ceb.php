<?php

/* @LIFOClassif/layoutAdmin.html.twig */
class __TwigTemplate_738ca7cff67840c621883672b451ebea236f34427d0386e3a0096ddac1f6b228 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@LIFOClassif/layoutAdmin.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'LIFOClassif_body' => array($this, 'block_LIFOClassif_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2db8155df797e62027a37c5fd8e2351b66673ac143497c4256b1279444d55f4d = $this->env->getExtension("native_profiler");
        $__internal_2db8155df797e62027a37c5fd8e2351b66673ac143497c4256b1279444d55f4d->enter($__internal_2db8155df797e62027a37c5fd8e2351b66673ac143497c4256b1279444d55f4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/layoutAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2db8155df797e62027a37c5fd8e2351b66673ac143497c4256b1279444d55f4d->leave($__internal_2db8155df797e62027a37c5fd8e2351b66673ac143497c4256b1279444d55f4d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_33b12c12c97d070b5eb2e0dca068ee9503ce230f7412bd5978acd2f464240056 = $this->env->getExtension("native_profiler");
        $__internal_33b12c12c97d070b5eb2e0dca068ee9503ce230f7412bd5978acd2f464240056->enter($__internal_33b12c12c97d070b5eb2e0dca068ee9503ce230f7412bd5978acd2f464240056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    \t";
        // line 5
        $this->displayBlock('LIFOClassif_body', $context, $blocks);
        // line 7
        echo "    \t
    ";
        
        $__internal_33b12c12c97d070b5eb2e0dca068ee9503ce230f7412bd5978acd2f464240056->leave($__internal_33b12c12c97d070b5eb2e0dca068ee9503ce230f7412bd5978acd2f464240056_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_34429e2e2f3c4384b2d80ae23e9d78b46eda229a57c3c143b54dcfd222a71a58 = $this->env->getExtension("native_profiler");
        $__internal_34429e2e2f3c4384b2d80ae23e9d78b46eda229a57c3c143b54dcfd222a71a58->enter($__internal_34429e2e2f3c4384b2d80ae23e9d78b46eda229a57c3c143b54dcfd222a71a58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "    \t";
        
        $__internal_34429e2e2f3c4384b2d80ae23e9d78b46eda229a57c3c143b54dcfd222a71a58->leave($__internal_34429e2e2f3c4384b2d80ae23e9d78b46eda229a57c3c143b54dcfd222a71a58_prof);

    }

    public function getTemplateName()
    {
        return "@LIFOClassif/layoutAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 6,  54 => 5,  46 => 7,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/*     {% block body %}*/
/*     */
/*     	{% block LIFOClassif_body %}*/
/*     	{% endblock %}*/
/*     	*/
/*     {% endblock %}*/
/* */
