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
        $__internal_df6c483d0a2c737cff3cd8e4dc6c7088be0a0cbb5e9893042961d6dc5a05a395 = $this->env->getExtension("native_profiler");
        $__internal_df6c483d0a2c737cff3cd8e4dc6c7088be0a0cbb5e9893042961d6dc5a05a395->enter($__internal_df6c483d0a2c737cff3cd8e4dc6c7088be0a0cbb5e9893042961d6dc5a05a395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_df6c483d0a2c737cff3cd8e4dc6c7088be0a0cbb5e9893042961d6dc5a05a395->leave($__internal_df6c483d0a2c737cff3cd8e4dc6c7088be0a0cbb5e9893042961d6dc5a05a395_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_bd3e6ab61f8ea441235df3b83c891567080012e977b2c07f0df3012e1d840ea0 = $this->env->getExtension("native_profiler");
        $__internal_bd3e6ab61f8ea441235df3b83c891567080012e977b2c07f0df3012e1d840ea0->enter($__internal_bd3e6ab61f8ea441235df3b83c891567080012e977b2c07f0df3012e1d840ea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_bd3e6ab61f8ea441235df3b83c891567080012e977b2c07f0df3012e1d840ea0->leave($__internal_bd3e6ab61f8ea441235df3b83c891567080012e977b2c07f0df3012e1d840ea0_prof);

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
