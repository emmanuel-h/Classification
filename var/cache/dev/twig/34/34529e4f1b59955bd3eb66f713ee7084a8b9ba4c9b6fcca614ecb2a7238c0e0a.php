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
        $__internal_dc4adf39f4b44cfba7ff45b248d3aa08ed49eebd2724222e423bc87e078d12c2 = $this->env->getExtension("native_profiler");
        $__internal_dc4adf39f4b44cfba7ff45b248d3aa08ed49eebd2724222e423bc87e078d12c2->enter($__internal_dc4adf39f4b44cfba7ff45b248d3aa08ed49eebd2724222e423bc87e078d12c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_dc4adf39f4b44cfba7ff45b248d3aa08ed49eebd2724222e423bc87e078d12c2->leave($__internal_dc4adf39f4b44cfba7ff45b248d3aa08ed49eebd2724222e423bc87e078d12c2_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_5b91dd7096d154a7e50bef1d22e5123accf1eb06cc23ee7bb8e483a8d1efd624 = $this->env->getExtension("native_profiler");
        $__internal_5b91dd7096d154a7e50bef1d22e5123accf1eb06cc23ee7bb8e483a8d1efd624->enter($__internal_5b91dd7096d154a7e50bef1d22e5123accf1eb06cc23ee7bb8e483a8d1efd624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_5b91dd7096d154a7e50bef1d22e5123accf1eb06cc23ee7bb8e483a8d1efd624->leave($__internal_5b91dd7096d154a7e50bef1d22e5123accf1eb06cc23ee7bb8e483a8d1efd624_prof);

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
