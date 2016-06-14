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
        $__internal_1f721804ae67eba0f76c8018faabe5ce9e92beae38d723379a8bd0f9813ec1de = $this->env->getExtension("native_profiler");
        $__internal_1f721804ae67eba0f76c8018faabe5ce9e92beae38d723379a8bd0f9813ec1de->enter($__internal_1f721804ae67eba0f76c8018faabe5ce9e92beae38d723379a8bd0f9813ec1de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_1f721804ae67eba0f76c8018faabe5ce9e92beae38d723379a8bd0f9813ec1de->leave($__internal_1f721804ae67eba0f76c8018faabe5ce9e92beae38d723379a8bd0f9813ec1de_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_fb5a8c6ab8a915301587da1dd082795e641d5a11cbd39d183660d1b87eff16ca = $this->env->getExtension("native_profiler");
        $__internal_fb5a8c6ab8a915301587da1dd082795e641d5a11cbd39d183660d1b87eff16ca->enter($__internal_fb5a8c6ab8a915301587da1dd082795e641d5a11cbd39d183660d1b87eff16ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_fb5a8c6ab8a915301587da1dd082795e641d5a11cbd39d183660d1b87eff16ca->leave($__internal_fb5a8c6ab8a915301587da1dd082795e641d5a11cbd39d183660d1b87eff16ca_prof);

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
