<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_41ef1c36b560b019a2de44389b73879c7e5fd0e086a353db4cddc0c57adc34a0 extends Twig_Template
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
        $__internal_90561a990bbeedfc82ae14605b8d9449ae2a4c9fb30731676bd03fdd31e34079 = $this->env->getExtension("native_profiler");
        $__internal_90561a990bbeedfc82ae14605b8d9449ae2a4c9fb30731676bd03fdd31e34079->enter($__internal_90561a990bbeedfc82ae14605b8d9449ae2a4c9fb30731676bd03fdd31e34079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_90561a990bbeedfc82ae14605b8d9449ae2a4c9fb30731676bd03fdd31e34079->leave($__internal_90561a990bbeedfc82ae14605b8d9449ae2a4c9fb30731676bd03fdd31e34079_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
