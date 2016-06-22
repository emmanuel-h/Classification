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
        $__internal_4eb2f8569b5487daed8553dbe9640ca9e1ffbd725a5fde3676e115098c785ad8 = $this->env->getExtension("native_profiler");
        $__internal_4eb2f8569b5487daed8553dbe9640ca9e1ffbd725a5fde3676e115098c785ad8->enter($__internal_4eb2f8569b5487daed8553dbe9640ca9e1ffbd725a5fde3676e115098c785ad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_4eb2f8569b5487daed8553dbe9640ca9e1ffbd725a5fde3676e115098c785ad8->leave($__internal_4eb2f8569b5487daed8553dbe9640ca9e1ffbd725a5fde3676e115098c785ad8_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_111188f0d86dc3871ad2e99186f377d504e33b9c52270f88a1f3aeb581fbcb02 = $this->env->getExtension("native_profiler");
        $__internal_111188f0d86dc3871ad2e99186f377d504e33b9c52270f88a1f3aeb581fbcb02->enter($__internal_111188f0d86dc3871ad2e99186f377d504e33b9c52270f88a1f3aeb581fbcb02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_111188f0d86dc3871ad2e99186f377d504e33b9c52270f88a1f3aeb581fbcb02->leave($__internal_111188f0d86dc3871ad2e99186f377d504e33b9c52270f88a1f3aeb581fbcb02_prof);

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
