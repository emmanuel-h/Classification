<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_4e2691f36aec702decc12117c27c1b29b27980c91cab4868bb4664fa253d059e extends Twig_Template
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
        $__internal_14ea11750eb041cc524ddf02d01c1c35eac7eb102c682d80b0348a2139ae8bb1 = $this->env->getExtension("native_profiler");
        $__internal_14ea11750eb041cc524ddf02d01c1c35eac7eb102c682d80b0348a2139ae8bb1->enter($__internal_14ea11750eb041cc524ddf02d01c1c35eac7eb102c682d80b0348a2139ae8bb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_14ea11750eb041cc524ddf02d01c1c35eac7eb102c682d80b0348a2139ae8bb1->leave($__internal_14ea11750eb041cc524ddf02d01c1c35eac7eb102c682d80b0348a2139ae8bb1_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_f134f8d588345a6f37e82a3d7ae7ce11ccd8b3a078949800b0cb4c653e69577f = $this->env->getExtension("native_profiler");
        $__internal_f134f8d588345a6f37e82a3d7ae7ce11ccd8b3a078949800b0cb4c653e69577f->enter($__internal_f134f8d588345a6f37e82a3d7ae7ce11ccd8b3a078949800b0cb4c653e69577f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_f134f8d588345a6f37e82a3d7ae7ce11ccd8b3a078949800b0cb4c653e69577f->leave($__internal_f134f8d588345a6f37e82a3d7ae7ce11ccd8b3a078949800b0cb4c653e69577f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
