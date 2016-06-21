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
        $__internal_b821e1684e579c52305531266b3b5ce7942905c0ed2fd80d02044f9de3c9e6a4 = $this->env->getExtension("native_profiler");
        $__internal_b821e1684e579c52305531266b3b5ce7942905c0ed2fd80d02044f9de3c9e6a4->enter($__internal_b821e1684e579c52305531266b3b5ce7942905c0ed2fd80d02044f9de3c9e6a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_b821e1684e579c52305531266b3b5ce7942905c0ed2fd80d02044f9de3c9e6a4->leave($__internal_b821e1684e579c52305531266b3b5ce7942905c0ed2fd80d02044f9de3c9e6a4_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_dcd5707ae260e96a46f9fd2d61bfb218385c1adc36e29d92b88dee3c69ab0e66 = $this->env->getExtension("native_profiler");
        $__internal_dcd5707ae260e96a46f9fd2d61bfb218385c1adc36e29d92b88dee3c69ab0e66->enter($__internal_dcd5707ae260e96a46f9fd2d61bfb218385c1adc36e29d92b88dee3c69ab0e66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_dcd5707ae260e96a46f9fd2d61bfb218385c1adc36e29d92b88dee3c69ab0e66->leave($__internal_dcd5707ae260e96a46f9fd2d61bfb218385c1adc36e29d92b88dee3c69ab0e66_prof);

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
