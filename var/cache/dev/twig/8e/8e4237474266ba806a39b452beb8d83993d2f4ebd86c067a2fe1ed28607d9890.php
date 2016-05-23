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
        $__internal_e6006193a2701cfec7fb9f5a002e3b57c382316eaf0af33ebe8a40ffd822dfbf = $this->env->getExtension("native_profiler");
        $__internal_e6006193a2701cfec7fb9f5a002e3b57c382316eaf0af33ebe8a40ffd822dfbf->enter($__internal_e6006193a2701cfec7fb9f5a002e3b57c382316eaf0af33ebe8a40ffd822dfbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_e6006193a2701cfec7fb9f5a002e3b57c382316eaf0af33ebe8a40ffd822dfbf->leave($__internal_e6006193a2701cfec7fb9f5a002e3b57c382316eaf0af33ebe8a40ffd822dfbf_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_8d52baccf7196d2e1654a5ec3df52cb84ff57c41dee4223e9cc55e2af60faba0 = $this->env->getExtension("native_profiler");
        $__internal_8d52baccf7196d2e1654a5ec3df52cb84ff57c41dee4223e9cc55e2af60faba0->enter($__internal_8d52baccf7196d2e1654a5ec3df52cb84ff57c41dee4223e9cc55e2af60faba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_8d52baccf7196d2e1654a5ec3df52cb84ff57c41dee4223e9cc55e2af60faba0->leave($__internal_8d52baccf7196d2e1654a5ec3df52cb84ff57c41dee4223e9cc55e2af60faba0_prof);

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
