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
        $__internal_9a76bfe48d556906f9666b8686538f178655ae817b841de342d20c02f49b6d0e = $this->env->getExtension("native_profiler");
        $__internal_9a76bfe48d556906f9666b8686538f178655ae817b841de342d20c02f49b6d0e->enter($__internal_9a76bfe48d556906f9666b8686538f178655ae817b841de342d20c02f49b6d0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/layoutAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a76bfe48d556906f9666b8686538f178655ae817b841de342d20c02f49b6d0e->leave($__internal_9a76bfe48d556906f9666b8686538f178655ae817b841de342d20c02f49b6d0e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a4f8d9b656e550f796db8e556d771c10c6449699fc7e2ef984d39290a87e54d4 = $this->env->getExtension("native_profiler");
        $__internal_a4f8d9b656e550f796db8e556d771c10c6449699fc7e2ef984d39290a87e54d4->enter($__internal_a4f8d9b656e550f796db8e556d771c10c6449699fc7e2ef984d39290a87e54d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    \t";
        // line 5
        $this->displayBlock('LIFOClassif_body', $context, $blocks);
        // line 7
        echo "    \t
    ";
        
        $__internal_a4f8d9b656e550f796db8e556d771c10c6449699fc7e2ef984d39290a87e54d4->leave($__internal_a4f8d9b656e550f796db8e556d771c10c6449699fc7e2ef984d39290a87e54d4_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_a81f7d8d25e80ecf850d793107a504a4316d9fc7ce5e2da51c7271752d4be2d2 = $this->env->getExtension("native_profiler");
        $__internal_a81f7d8d25e80ecf850d793107a504a4316d9fc7ce5e2da51c7271752d4be2d2->enter($__internal_a81f7d8d25e80ecf850d793107a504a4316d9fc7ce5e2da51c7271752d4be2d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "    \t";
        
        $__internal_a81f7d8d25e80ecf850d793107a504a4316d9fc7ce5e2da51c7271752d4be2d2->leave($__internal_a81f7d8d25e80ecf850d793107a504a4316d9fc7ce5e2da51c7271752d4be2d2_prof);

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
