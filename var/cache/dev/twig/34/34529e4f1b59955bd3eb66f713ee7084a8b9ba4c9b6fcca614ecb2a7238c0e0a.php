<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_a5ecdd802e9cbfe814a9789cf6a9d16d56e6e475a7db73def5541a4f2b5dd87a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5fd481a6257b6b510a5ec34b5cb728b351559e9f5b421b2872228abf5eab7b37 = $this->env->getExtension("native_profiler");
        $__internal_5fd481a6257b6b510a5ec34b5cb728b351559e9f5b421b2872228abf5eab7b37->enter($__internal_5fd481a6257b6b510a5ec34b5cb728b351559e9f5b421b2872228abf5eab7b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_5fd481a6257b6b510a5ec34b5cb728b351559e9f5b421b2872228abf5eab7b37->leave($__internal_5fd481a6257b6b510a5ec34b5cb728b351559e9f5b421b2872228abf5eab7b37_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_693a5d945733dfd22974b2f1ed961c1c32cf90de4cfe85f8e16e3646e49087c8 = $this->env->getExtension("native_profiler");
        $__internal_693a5d945733dfd22974b2f1ed961c1c32cf90de4cfe85f8e16e3646e49087c8->enter($__internal_693a5d945733dfd22974b2f1ed961c1c32cf90de4cfe85f8e16e3646e49087c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_693a5d945733dfd22974b2f1ed961c1c32cf90de4cfe85f8e16e3646e49087c8->leave($__internal_693a5d945733dfd22974b2f1ed961c1c32cf90de4cfe85f8e16e3646e49087c8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
