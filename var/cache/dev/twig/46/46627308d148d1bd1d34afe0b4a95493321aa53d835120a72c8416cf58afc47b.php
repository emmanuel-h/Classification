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
        $__internal_7760f001aa5249120b9a7c332d72cce5eaca63122bba986514fd3d3bf9287892 = $this->env->getExtension("native_profiler");
        $__internal_7760f001aa5249120b9a7c332d72cce5eaca63122bba986514fd3d3bf9287892->enter($__internal_7760f001aa5249120b9a7c332d72cce5eaca63122bba986514fd3d3bf9287892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_7760f001aa5249120b9a7c332d72cce5eaca63122bba986514fd3d3bf9287892->leave($__internal_7760f001aa5249120b9a7c332d72cce5eaca63122bba986514fd3d3bf9287892_prof);

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
