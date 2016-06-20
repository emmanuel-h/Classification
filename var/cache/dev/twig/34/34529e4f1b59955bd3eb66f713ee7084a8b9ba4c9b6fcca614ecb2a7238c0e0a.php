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
        $__internal_a4fa38a74df07006a8415066d6438ae2017d08cc798dab3d896daabf9ac8e682 = $this->env->getExtension("native_profiler");
        $__internal_a4fa38a74df07006a8415066d6438ae2017d08cc798dab3d896daabf9ac8e682->enter($__internal_a4fa38a74df07006a8415066d6438ae2017d08cc798dab3d896daabf9ac8e682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_a4fa38a74df07006a8415066d6438ae2017d08cc798dab3d896daabf9ac8e682->leave($__internal_a4fa38a74df07006a8415066d6438ae2017d08cc798dab3d896daabf9ac8e682_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_1c7773bf324131f1043e23d1b6f630c15e04507d7d7781c7b1195e6ab5ea1918 = $this->env->getExtension("native_profiler");
        $__internal_1c7773bf324131f1043e23d1b6f630c15e04507d7d7781c7b1195e6ab5ea1918->enter($__internal_1c7773bf324131f1043e23d1b6f630c15e04507d7d7781c7b1195e6ab5ea1918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_1c7773bf324131f1043e23d1b6f630c15e04507d7d7781c7b1195e6ab5ea1918->leave($__internal_1c7773bf324131f1043e23d1b6f630c15e04507d7d7781c7b1195e6ab5ea1918_prof);

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
