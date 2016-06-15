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
        $__internal_977dc45e0a988fa81cb5c07b816e9bf1094f162d39c74681af18d6965a8b4cbd = $this->env->getExtension("native_profiler");
        $__internal_977dc45e0a988fa81cb5c07b816e9bf1094f162d39c74681af18d6965a8b4cbd->enter($__internal_977dc45e0a988fa81cb5c07b816e9bf1094f162d39c74681af18d6965a8b4cbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_977dc45e0a988fa81cb5c07b816e9bf1094f162d39c74681af18d6965a8b4cbd->leave($__internal_977dc45e0a988fa81cb5c07b816e9bf1094f162d39c74681af18d6965a8b4cbd_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_b13b7eb5cb61f2bf1baf8041b97345e50c3164e5c851cdab2ba43e1a082c0cd3 = $this->env->getExtension("native_profiler");
        $__internal_b13b7eb5cb61f2bf1baf8041b97345e50c3164e5c851cdab2ba43e1a082c0cd3->enter($__internal_b13b7eb5cb61f2bf1baf8041b97345e50c3164e5c851cdab2ba43e1a082c0cd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_b13b7eb5cb61f2bf1baf8041b97345e50c3164e5c851cdab2ba43e1a082c0cd3->leave($__internal_b13b7eb5cb61f2bf1baf8041b97345e50c3164e5c851cdab2ba43e1a082c0cd3_prof);

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
