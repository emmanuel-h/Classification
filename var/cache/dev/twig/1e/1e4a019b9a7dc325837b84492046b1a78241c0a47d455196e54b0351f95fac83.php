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
        $__internal_7ec8ffea5d55a712a5f16abf8ea156e85affe1b3a5ec019a9563c131d7580d8e = $this->env->getExtension("native_profiler");
        $__internal_7ec8ffea5d55a712a5f16abf8ea156e85affe1b3a5ec019a9563c131d7580d8e->enter($__internal_7ec8ffea5d55a712a5f16abf8ea156e85affe1b3a5ec019a9563c131d7580d8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_7ec8ffea5d55a712a5f16abf8ea156e85affe1b3a5ec019a9563c131d7580d8e->leave($__internal_7ec8ffea5d55a712a5f16abf8ea156e85affe1b3a5ec019a9563c131d7580d8e_prof);

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
