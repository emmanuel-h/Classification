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
        $__internal_05e717b14e75893787ad97cb2aeea8f1657341943201b260aaa069c533bb0281 = $this->env->getExtension("native_profiler");
        $__internal_05e717b14e75893787ad97cb2aeea8f1657341943201b260aaa069c533bb0281->enter($__internal_05e717b14e75893787ad97cb2aeea8f1657341943201b260aaa069c533bb0281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_05e717b14e75893787ad97cb2aeea8f1657341943201b260aaa069c533bb0281->leave($__internal_05e717b14e75893787ad97cb2aeea8f1657341943201b260aaa069c533bb0281_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_326c28a1fc1902b18561338edb674a9a193f01e036ed39d2995f340dae2a1523 = $this->env->getExtension("native_profiler");
        $__internal_326c28a1fc1902b18561338edb674a9a193f01e036ed39d2995f340dae2a1523->enter($__internal_326c28a1fc1902b18561338edb674a9a193f01e036ed39d2995f340dae2a1523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_326c28a1fc1902b18561338edb674a9a193f01e036ed39d2995f340dae2a1523->leave($__internal_326c28a1fc1902b18561338edb674a9a193f01e036ed39d2995f340dae2a1523_prof);

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
