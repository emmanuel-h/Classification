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
        $__internal_22508d875380260937a6a5368caa773399163292fb63322695b72f72e7d88f6d = $this->env->getExtension("native_profiler");
        $__internal_22508d875380260937a6a5368caa773399163292fb63322695b72f72e7d88f6d->enter($__internal_22508d875380260937a6a5368caa773399163292fb63322695b72f72e7d88f6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_22508d875380260937a6a5368caa773399163292fb63322695b72f72e7d88f6d->leave($__internal_22508d875380260937a6a5368caa773399163292fb63322695b72f72e7d88f6d_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_9d91751a2ec8f609bdd771e0ef2d2cbbefce4077d18cc6dd8ca3426209f9ae23 = $this->env->getExtension("native_profiler");
        $__internal_9d91751a2ec8f609bdd771e0ef2d2cbbefce4077d18cc6dd8ca3426209f9ae23->enter($__internal_9d91751a2ec8f609bdd771e0ef2d2cbbefce4077d18cc6dd8ca3426209f9ae23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_9d91751a2ec8f609bdd771e0ef2d2cbbefce4077d18cc6dd8ca3426209f9ae23->leave($__internal_9d91751a2ec8f609bdd771e0ef2d2cbbefce4077d18cc6dd8ca3426209f9ae23_prof);

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
