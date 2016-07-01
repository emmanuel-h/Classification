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
        $__internal_a1bd231451fe59cec98de31c3e9543bba333d5e04833ced2a59783db38972458 = $this->env->getExtension("native_profiler");
        $__internal_a1bd231451fe59cec98de31c3e9543bba333d5e04833ced2a59783db38972458->enter($__internal_a1bd231451fe59cec98de31c3e9543bba333d5e04833ced2a59783db38972458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_a1bd231451fe59cec98de31c3e9543bba333d5e04833ced2a59783db38972458->leave($__internal_a1bd231451fe59cec98de31c3e9543bba333d5e04833ced2a59783db38972458_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_4a160c6d7cf900eded764a0fbeda3d8339c344d636193162a044f01049fc4e04 = $this->env->getExtension("native_profiler");
        $__internal_4a160c6d7cf900eded764a0fbeda3d8339c344d636193162a044f01049fc4e04->enter($__internal_4a160c6d7cf900eded764a0fbeda3d8339c344d636193162a044f01049fc4e04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_4a160c6d7cf900eded764a0fbeda3d8339c344d636193162a044f01049fc4e04->leave($__internal_4a160c6d7cf900eded764a0fbeda3d8339c344d636193162a044f01049fc4e04_prof);

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
