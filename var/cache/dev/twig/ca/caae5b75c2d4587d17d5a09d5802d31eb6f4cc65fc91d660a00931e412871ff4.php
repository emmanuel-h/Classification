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
        $__internal_9f6f740c8e15c06510659dceea44ec080225fe181838f73539c2ecd01bce3655 = $this->env->getExtension("native_profiler");
        $__internal_9f6f740c8e15c06510659dceea44ec080225fe181838f73539c2ecd01bce3655->enter($__internal_9f6f740c8e15c06510659dceea44ec080225fe181838f73539c2ecd01bce3655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_9f6f740c8e15c06510659dceea44ec080225fe181838f73539c2ecd01bce3655->leave($__internal_9f6f740c8e15c06510659dceea44ec080225fe181838f73539c2ecd01bce3655_prof);

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
