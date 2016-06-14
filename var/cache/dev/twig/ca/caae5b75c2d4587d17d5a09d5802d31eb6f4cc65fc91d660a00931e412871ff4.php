<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_1bf35820e624284076c4c5f8d75521477a93c416070e7eab2256c4766b5a9a38 extends Twig_Template
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
        $__internal_ef582e3b9c14875243c9c3d6eb603372b89752a3efb57a07cb0bf4e350f17a30 = $this->env->getExtension("native_profiler");
        $__internal_ef582e3b9c14875243c9c3d6eb603372b89752a3efb57a07cb0bf4e350f17a30->enter($__internal_ef582e3b9c14875243c9c3d6eb603372b89752a3efb57a07cb0bf4e350f17a30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_ef582e3b9c14875243c9c3d6eb603372b89752a3efb57a07cb0bf4e350f17a30->leave($__internal_ef582e3b9c14875243c9c3d6eb603372b89752a3efb57a07cb0bf4e350f17a30_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
