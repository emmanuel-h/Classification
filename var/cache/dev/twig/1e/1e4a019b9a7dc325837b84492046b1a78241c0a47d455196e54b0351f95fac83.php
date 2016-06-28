<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_a4ed6481a04f45fc3fca223888c39115b72141b21765f52a3b11d461122d7b3a extends Twig_Template
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
        $__internal_c5b9908e8e1fad2abf8c0c3c2a8d6743dd59f4795f203329a05d66d8b076b4d1 = $this->env->getExtension("native_profiler");
        $__internal_c5b9908e8e1fad2abf8c0c3c2a8d6743dd59f4795f203329a05d66d8b076b4d1->enter($__internal_c5b9908e8e1fad2abf8c0c3c2a8d6743dd59f4795f203329a05d66d8b076b4d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_c5b9908e8e1fad2abf8c0c3c2a8d6743dd59f4795f203329a05d66d8b076b4d1->leave($__internal_c5b9908e8e1fad2abf8c0c3c2a8d6743dd59f4795f203329a05d66d8b076b4d1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
