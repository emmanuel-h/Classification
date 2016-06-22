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
        $__internal_2f0c44dc538896bbe95e054f740828c09a9b44b3908410a0dd991c1545e36fb0 = $this->env->getExtension("native_profiler");
        $__internal_2f0c44dc538896bbe95e054f740828c09a9b44b3908410a0dd991c1545e36fb0->enter($__internal_2f0c44dc538896bbe95e054f740828c09a9b44b3908410a0dd991c1545e36fb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_2f0c44dc538896bbe95e054f740828c09a9b44b3908410a0dd991c1545e36fb0->leave($__internal_2f0c44dc538896bbe95e054f740828c09a9b44b3908410a0dd991c1545e36fb0_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_db87e56e555fe6d1a088a7ced85393623dc9f036e3f1cde52d9f801fceb3e210 = $this->env->getExtension("native_profiler");
        $__internal_db87e56e555fe6d1a088a7ced85393623dc9f036e3f1cde52d9f801fceb3e210->enter($__internal_db87e56e555fe6d1a088a7ced85393623dc9f036e3f1cde52d9f801fceb3e210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_db87e56e555fe6d1a088a7ced85393623dc9f036e3f1cde52d9f801fceb3e210->leave($__internal_db87e56e555fe6d1a088a7ced85393623dc9f036e3f1cde52d9f801fceb3e210_prof);

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
