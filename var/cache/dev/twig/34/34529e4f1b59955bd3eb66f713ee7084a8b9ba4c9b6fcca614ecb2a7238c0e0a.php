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
        $__internal_21330ccb950706c15026ef3a19f84a488a91a575bd8812284841eb781a0b7405 = $this->env->getExtension("native_profiler");
        $__internal_21330ccb950706c15026ef3a19f84a488a91a575bd8812284841eb781a0b7405->enter($__internal_21330ccb950706c15026ef3a19f84a488a91a575bd8812284841eb781a0b7405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_21330ccb950706c15026ef3a19f84a488a91a575bd8812284841eb781a0b7405->leave($__internal_21330ccb950706c15026ef3a19f84a488a91a575bd8812284841eb781a0b7405_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_11c210adf13e020396e69dcacd15b8180f2815873bef579055d4120d852dce1f = $this->env->getExtension("native_profiler");
        $__internal_11c210adf13e020396e69dcacd15b8180f2815873bef579055d4120d852dce1f->enter($__internal_11c210adf13e020396e69dcacd15b8180f2815873bef579055d4120d852dce1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_11c210adf13e020396e69dcacd15b8180f2815873bef579055d4120d852dce1f->leave($__internal_11c210adf13e020396e69dcacd15b8180f2815873bef579055d4120d852dce1f_prof);

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
