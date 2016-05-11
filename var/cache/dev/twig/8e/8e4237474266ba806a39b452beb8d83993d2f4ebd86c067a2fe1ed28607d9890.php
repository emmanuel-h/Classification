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
        $__internal_4bdab579886345a71d829751c4976efbbd669c93007b33ccd798b0ee17b724de = $this->env->getExtension("native_profiler");
        $__internal_4bdab579886345a71d829751c4976efbbd669c93007b33ccd798b0ee17b724de->enter($__internal_4bdab579886345a71d829751c4976efbbd669c93007b33ccd798b0ee17b724de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_4bdab579886345a71d829751c4976efbbd669c93007b33ccd798b0ee17b724de->leave($__internal_4bdab579886345a71d829751c4976efbbd669c93007b33ccd798b0ee17b724de_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_5ceae716caf75ff9eb0fc33a4f5d1b65ae5853ea2dc0e0594b527960ed5d2a3a = $this->env->getExtension("native_profiler");
        $__internal_5ceae716caf75ff9eb0fc33a4f5d1b65ae5853ea2dc0e0594b527960ed5d2a3a->enter($__internal_5ceae716caf75ff9eb0fc33a4f5d1b65ae5853ea2dc0e0594b527960ed5d2a3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_5ceae716caf75ff9eb0fc33a4f5d1b65ae5853ea2dc0e0594b527960ed5d2a3a->leave($__internal_5ceae716caf75ff9eb0fc33a4f5d1b65ae5853ea2dc0e0594b527960ed5d2a3a_prof);

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
