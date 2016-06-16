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
        $__internal_fd390dc79d22e1d14e304b6fd3d96cf60130c0bc4900c8ddda163d8dc848840c = $this->env->getExtension("native_profiler");
        $__internal_fd390dc79d22e1d14e304b6fd3d96cf60130c0bc4900c8ddda163d8dc848840c->enter($__internal_fd390dc79d22e1d14e304b6fd3d96cf60130c0bc4900c8ddda163d8dc848840c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_fd390dc79d22e1d14e304b6fd3d96cf60130c0bc4900c8ddda163d8dc848840c->leave($__internal_fd390dc79d22e1d14e304b6fd3d96cf60130c0bc4900c8ddda163d8dc848840c_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_0b87ac598a6f938bd5625b2c9b4d77cc32c34eca7e38536fe39518385ca5717f = $this->env->getExtension("native_profiler");
        $__internal_0b87ac598a6f938bd5625b2c9b4d77cc32c34eca7e38536fe39518385ca5717f->enter($__internal_0b87ac598a6f938bd5625b2c9b4d77cc32c34eca7e38536fe39518385ca5717f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_0b87ac598a6f938bd5625b2c9b4d77cc32c34eca7e38536fe39518385ca5717f->leave($__internal_0b87ac598a6f938bd5625b2c9b4d77cc32c34eca7e38536fe39518385ca5717f_prof);

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
