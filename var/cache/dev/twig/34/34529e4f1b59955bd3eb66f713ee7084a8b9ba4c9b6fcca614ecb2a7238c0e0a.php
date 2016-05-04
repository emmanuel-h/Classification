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
        $__internal_c7aa9d904ed4439b684709f02480cc34004599711cf4cef0add33a15e783e08f = $this->env->getExtension("native_profiler");
        $__internal_c7aa9d904ed4439b684709f02480cc34004599711cf4cef0add33a15e783e08f->enter($__internal_c7aa9d904ed4439b684709f02480cc34004599711cf4cef0add33a15e783e08f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_c7aa9d904ed4439b684709f02480cc34004599711cf4cef0add33a15e783e08f->leave($__internal_c7aa9d904ed4439b684709f02480cc34004599711cf4cef0add33a15e783e08f_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_7d741a26627d3908d87aa0dec8ba60797b701767c494f9cf3a0ea82ab2d0cfc1 = $this->env->getExtension("native_profiler");
        $__internal_7d741a26627d3908d87aa0dec8ba60797b701767c494f9cf3a0ea82ab2d0cfc1->enter($__internal_7d741a26627d3908d87aa0dec8ba60797b701767c494f9cf3a0ea82ab2d0cfc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_7d741a26627d3908d87aa0dec8ba60797b701767c494f9cf3a0ea82ab2d0cfc1->leave($__internal_7d741a26627d3908d87aa0dec8ba60797b701767c494f9cf3a0ea82ab2d0cfc1_prof);

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
