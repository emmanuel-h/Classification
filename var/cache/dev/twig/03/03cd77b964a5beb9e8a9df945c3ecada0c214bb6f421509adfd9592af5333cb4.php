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
        $__internal_8b2481855ba04d5d5bd87f8ef8649edf5eff96ef39d437003d558410152b5b6c = $this->env->getExtension("native_profiler");
        $__internal_8b2481855ba04d5d5bd87f8ef8649edf5eff96ef39d437003d558410152b5b6c->enter($__internal_8b2481855ba04d5d5bd87f8ef8649edf5eff96ef39d437003d558410152b5b6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_8b2481855ba04d5d5bd87f8ef8649edf5eff96ef39d437003d558410152b5b6c->leave($__internal_8b2481855ba04d5d5bd87f8ef8649edf5eff96ef39d437003d558410152b5b6c_prof);

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
