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
        $__internal_1cea83ffece546a36737c140a68b6554dd98458bcb91c3213980d6ad297f52e7 = $this->env->getExtension("native_profiler");
        $__internal_1cea83ffece546a36737c140a68b6554dd98458bcb91c3213980d6ad297f52e7->enter($__internal_1cea83ffece546a36737c140a68b6554dd98458bcb91c3213980d6ad297f52e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_1cea83ffece546a36737c140a68b6554dd98458bcb91c3213980d6ad297f52e7->leave($__internal_1cea83ffece546a36737c140a68b6554dd98458bcb91c3213980d6ad297f52e7_prof);

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
