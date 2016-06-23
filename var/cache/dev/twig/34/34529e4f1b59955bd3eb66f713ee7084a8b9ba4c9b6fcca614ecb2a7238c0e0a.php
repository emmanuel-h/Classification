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
        $__internal_6398ff61bb9cfdd975cc7ea1e58caa406c19ba6e745a014cbc8bc06a34c83ec5 = $this->env->getExtension("native_profiler");
        $__internal_6398ff61bb9cfdd975cc7ea1e58caa406c19ba6e745a014cbc8bc06a34c83ec5->enter($__internal_6398ff61bb9cfdd975cc7ea1e58caa406c19ba6e745a014cbc8bc06a34c83ec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_6398ff61bb9cfdd975cc7ea1e58caa406c19ba6e745a014cbc8bc06a34c83ec5->leave($__internal_6398ff61bb9cfdd975cc7ea1e58caa406c19ba6e745a014cbc8bc06a34c83ec5_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_1ed1069b72c347764fb398eec1f590c1ff5ece2cae02fa2718141a0e7ddf18ac = $this->env->getExtension("native_profiler");
        $__internal_1ed1069b72c347764fb398eec1f590c1ff5ece2cae02fa2718141a0e7ddf18ac->enter($__internal_1ed1069b72c347764fb398eec1f590c1ff5ece2cae02fa2718141a0e7ddf18ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_1ed1069b72c347764fb398eec1f590c1ff5ece2cae02fa2718141a0e7ddf18ac->leave($__internal_1ed1069b72c347764fb398eec1f590c1ff5ece2cae02fa2718141a0e7ddf18ac_prof);

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
