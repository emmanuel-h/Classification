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
        $__internal_bd6141bfb8150cde82d3428363eba4cab0254a845554c2053c35bc6354acd5f1 = $this->env->getExtension("native_profiler");
        $__internal_bd6141bfb8150cde82d3428363eba4cab0254a845554c2053c35bc6354acd5f1->enter($__internal_bd6141bfb8150cde82d3428363eba4cab0254a845554c2053c35bc6354acd5f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_bd6141bfb8150cde82d3428363eba4cab0254a845554c2053c35bc6354acd5f1->leave($__internal_bd6141bfb8150cde82d3428363eba4cab0254a845554c2053c35bc6354acd5f1_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_39f364d57492d3ca815e943ee5a340d7a39df9f819c4593d029a19c8467cf576 = $this->env->getExtension("native_profiler");
        $__internal_39f364d57492d3ca815e943ee5a340d7a39df9f819c4593d029a19c8467cf576->enter($__internal_39f364d57492d3ca815e943ee5a340d7a39df9f819c4593d029a19c8467cf576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_39f364d57492d3ca815e943ee5a340d7a39df9f819c4593d029a19c8467cf576->leave($__internal_39f364d57492d3ca815e943ee5a340d7a39df9f819c4593d029a19c8467cf576_prof);

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
