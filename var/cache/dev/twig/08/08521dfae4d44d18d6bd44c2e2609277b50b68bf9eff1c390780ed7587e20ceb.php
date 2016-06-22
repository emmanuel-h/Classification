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
        $__internal_ee85b35d57e08a4afb0572871bf016e5063ba9d68a18a3196c2e5da07cd164df = $this->env->getExtension("native_profiler");
        $__internal_ee85b35d57e08a4afb0572871bf016e5063ba9d68a18a3196c2e5da07cd164df->enter($__internal_ee85b35d57e08a4afb0572871bf016e5063ba9d68a18a3196c2e5da07cd164df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/layoutAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee85b35d57e08a4afb0572871bf016e5063ba9d68a18a3196c2e5da07cd164df->leave($__internal_ee85b35d57e08a4afb0572871bf016e5063ba9d68a18a3196c2e5da07cd164df_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_113a0bb7e3914566d6e641a40689b421edbf9b7a0e09ed4c760b6a3797a9bd79 = $this->env->getExtension("native_profiler");
        $__internal_113a0bb7e3914566d6e641a40689b421edbf9b7a0e09ed4c760b6a3797a9bd79->enter($__internal_113a0bb7e3914566d6e641a40689b421edbf9b7a0e09ed4c760b6a3797a9bd79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    \t";
        // line 5
        $this->displayBlock('LIFOClassif_body', $context, $blocks);
        // line 7
        echo "    \t
    ";
        
        $__internal_113a0bb7e3914566d6e641a40689b421edbf9b7a0e09ed4c760b6a3797a9bd79->leave($__internal_113a0bb7e3914566d6e641a40689b421edbf9b7a0e09ed4c760b6a3797a9bd79_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_6072764e72e4f22d5e878103b1945c11fcffcbfbf2ceb02bb686e18e7a9dd2bd = $this->env->getExtension("native_profiler");
        $__internal_6072764e72e4f22d5e878103b1945c11fcffcbfbf2ceb02bb686e18e7a9dd2bd->enter($__internal_6072764e72e4f22d5e878103b1945c11fcffcbfbf2ceb02bb686e18e7a9dd2bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "    \t";
        
        $__internal_6072764e72e4f22d5e878103b1945c11fcffcbfbf2ceb02bb686e18e7a9dd2bd->leave($__internal_6072764e72e4f22d5e878103b1945c11fcffcbfbf2ceb02bb686e18e7a9dd2bd_prof);

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
