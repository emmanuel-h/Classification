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
        $__internal_424557dd4179bf8dae10585f634a5192e9b390852f91b2736045dbe20bd3fff0 = $this->env->getExtension("native_profiler");
        $__internal_424557dd4179bf8dae10585f634a5192e9b390852f91b2736045dbe20bd3fff0->enter($__internal_424557dd4179bf8dae10585f634a5192e9b390852f91b2736045dbe20bd3fff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_424557dd4179bf8dae10585f634a5192e9b390852f91b2736045dbe20bd3fff0->leave($__internal_424557dd4179bf8dae10585f634a5192e9b390852f91b2736045dbe20bd3fff0_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_037e2ff0fe74a0d456357bb91a966f025f9c5c5074e42921a7d38632da394ef7 = $this->env->getExtension("native_profiler");
        $__internal_037e2ff0fe74a0d456357bb91a966f025f9c5c5074e42921a7d38632da394ef7->enter($__internal_037e2ff0fe74a0d456357bb91a966f025f9c5c5074e42921a7d38632da394ef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_037e2ff0fe74a0d456357bb91a966f025f9c5c5074e42921a7d38632da394ef7->leave($__internal_037e2ff0fe74a0d456357bb91a966f025f9c5c5074e42921a7d38632da394ef7_prof);

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
