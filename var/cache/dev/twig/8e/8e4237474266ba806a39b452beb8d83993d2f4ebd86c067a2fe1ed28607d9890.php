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
        $__internal_f5f645dd49a4e4b31dd04ad1542772e0e401bfb421e1c8ef6e528b9b69163fad = $this->env->getExtension("native_profiler");
        $__internal_f5f645dd49a4e4b31dd04ad1542772e0e401bfb421e1c8ef6e528b9b69163fad->enter($__internal_f5f645dd49a4e4b31dd04ad1542772e0e401bfb421e1c8ef6e528b9b69163fad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f5f645dd49a4e4b31dd04ad1542772e0e401bfb421e1c8ef6e528b9b69163fad->leave($__internal_f5f645dd49a4e4b31dd04ad1542772e0e401bfb421e1c8ef6e528b9b69163fad_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c36d47a4d9e87971c7ad658b4f42df3d81a350f0309e621957e5ef735645ba23 = $this->env->getExtension("native_profiler");
        $__internal_c36d47a4d9e87971c7ad658b4f42df3d81a350f0309e621957e5ef735645ba23->enter($__internal_c36d47a4d9e87971c7ad658b4f42df3d81a350f0309e621957e5ef735645ba23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c36d47a4d9e87971c7ad658b4f42df3d81a350f0309e621957e5ef735645ba23->leave($__internal_c36d47a4d9e87971c7ad658b4f42df3d81a350f0309e621957e5ef735645ba23_prof);

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
