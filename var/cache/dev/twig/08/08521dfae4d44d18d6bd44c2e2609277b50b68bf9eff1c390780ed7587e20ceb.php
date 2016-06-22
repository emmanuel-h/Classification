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
        $__internal_f799257357c3e08fd95cbcacebd92e9da2a7495af15c9456649e0f0d35834f6b = $this->env->getExtension("native_profiler");
        $__internal_f799257357c3e08fd95cbcacebd92e9da2a7495af15c9456649e0f0d35834f6b->enter($__internal_f799257357c3e08fd95cbcacebd92e9da2a7495af15c9456649e0f0d35834f6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/layoutAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f799257357c3e08fd95cbcacebd92e9da2a7495af15c9456649e0f0d35834f6b->leave($__internal_f799257357c3e08fd95cbcacebd92e9da2a7495af15c9456649e0f0d35834f6b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a0d04d72b9f4fc44ddf905488cf55ec98372c80ada4e62b14a64ee487f47064 = $this->env->getExtension("native_profiler");
        $__internal_8a0d04d72b9f4fc44ddf905488cf55ec98372c80ada4e62b14a64ee487f47064->enter($__internal_8a0d04d72b9f4fc44ddf905488cf55ec98372c80ada4e62b14a64ee487f47064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    \t";
        // line 5
        $this->displayBlock('LIFOClassif_body', $context, $blocks);
        // line 7
        echo "    \t
    ";
        
        $__internal_8a0d04d72b9f4fc44ddf905488cf55ec98372c80ada4e62b14a64ee487f47064->leave($__internal_8a0d04d72b9f4fc44ddf905488cf55ec98372c80ada4e62b14a64ee487f47064_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_b73230208f2b8096edeb98d26de15877fc2817a1f918f3e4f67e7a6578d8a431 = $this->env->getExtension("native_profiler");
        $__internal_b73230208f2b8096edeb98d26de15877fc2817a1f918f3e4f67e7a6578d8a431->enter($__internal_b73230208f2b8096edeb98d26de15877fc2817a1f918f3e4f67e7a6578d8a431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "    \t";
        
        $__internal_b73230208f2b8096edeb98d26de15877fc2817a1f918f3e4f67e7a6578d8a431->leave($__internal_b73230208f2b8096edeb98d26de15877fc2817a1f918f3e4f67e7a6578d8a431_prof);

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
