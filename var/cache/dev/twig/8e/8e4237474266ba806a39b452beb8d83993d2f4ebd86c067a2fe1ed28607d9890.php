<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_4e2691f36aec702decc12117c27c1b29b27980c91cab4868bb4664fa253d059e extends Twig_Template
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
        $__internal_fc50606058ea9557d31b6cb00f40dafe24822ddff4168ba2f8376d3b1c7f2407 = $this->env->getExtension("native_profiler");
        $__internal_fc50606058ea9557d31b6cb00f40dafe24822ddff4168ba2f8376d3b1c7f2407->enter($__internal_fc50606058ea9557d31b6cb00f40dafe24822ddff4168ba2f8376d3b1c7f2407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_fc50606058ea9557d31b6cb00f40dafe24822ddff4168ba2f8376d3b1c7f2407->leave($__internal_fc50606058ea9557d31b6cb00f40dafe24822ddff4168ba2f8376d3b1c7f2407_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_ab28455fddfc85622cace0fb1077a4442131e88013dfc4a3a5aff5875471f771 = $this->env->getExtension("native_profiler");
        $__internal_ab28455fddfc85622cace0fb1077a4442131e88013dfc4a3a5aff5875471f771->enter($__internal_ab28455fddfc85622cace0fb1077a4442131e88013dfc4a3a5aff5875471f771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_ab28455fddfc85622cace0fb1077a4442131e88013dfc4a3a5aff5875471f771->leave($__internal_ab28455fddfc85622cace0fb1077a4442131e88013dfc4a3a5aff5875471f771_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
