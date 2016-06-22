<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_389b59fe78980e7fca2e95fa28f92aa4e4c58ddef7de5889fd64361942d9cafb extends Twig_Template
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
        $__internal_67a4768abfa1e5150545e3890501c3fe70e1acd205a22be118c41e6ba64b9f26 = $this->env->getExtension("native_profiler");
        $__internal_67a4768abfa1e5150545e3890501c3fe70e1acd205a22be118c41e6ba64b9f26->enter($__internal_67a4768abfa1e5150545e3890501c3fe70e1acd205a22be118c41e6ba64b9f26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_67a4768abfa1e5150545e3890501c3fe70e1acd205a22be118c41e6ba64b9f26->leave($__internal_67a4768abfa1e5150545e3890501c3fe70e1acd205a22be118c41e6ba64b9f26_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
