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
        $__internal_dcb5340d45d4d0137d3282a6107fb47358f6c0696410966f1dbb0068c6f1cc31 = $this->env->getExtension("native_profiler");
        $__internal_dcb5340d45d4d0137d3282a6107fb47358f6c0696410966f1dbb0068c6f1cc31->enter($__internal_dcb5340d45d4d0137d3282a6107fb47358f6c0696410966f1dbb0068c6f1cc31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_dcb5340d45d4d0137d3282a6107fb47358f6c0696410966f1dbb0068c6f1cc31->leave($__internal_dcb5340d45d4d0137d3282a6107fb47358f6c0696410966f1dbb0068c6f1cc31_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_542cbd48455182fbc8f1430360278509da13168bdd4360a2e3050ddb0bc4528f = $this->env->getExtension("native_profiler");
        $__internal_542cbd48455182fbc8f1430360278509da13168bdd4360a2e3050ddb0bc4528f->enter($__internal_542cbd48455182fbc8f1430360278509da13168bdd4360a2e3050ddb0bc4528f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_542cbd48455182fbc8f1430360278509da13168bdd4360a2e3050ddb0bc4528f->leave($__internal_542cbd48455182fbc8f1430360278509da13168bdd4360a2e3050ddb0bc4528f_prof);

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
