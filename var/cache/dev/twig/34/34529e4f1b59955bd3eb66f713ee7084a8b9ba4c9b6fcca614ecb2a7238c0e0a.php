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
        $__internal_ea0c50bf55c0822524230ec121f7949e8025ff1923841b74950375ec63afe607 = $this->env->getExtension("native_profiler");
        $__internal_ea0c50bf55c0822524230ec121f7949e8025ff1923841b74950375ec63afe607->enter($__internal_ea0c50bf55c0822524230ec121f7949e8025ff1923841b74950375ec63afe607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_ea0c50bf55c0822524230ec121f7949e8025ff1923841b74950375ec63afe607->leave($__internal_ea0c50bf55c0822524230ec121f7949e8025ff1923841b74950375ec63afe607_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_45b17793185dae5cdc986ea57569132b6d96caab84286ee16acb5c0d5d63145f = $this->env->getExtension("native_profiler");
        $__internal_45b17793185dae5cdc986ea57569132b6d96caab84286ee16acb5c0d5d63145f->enter($__internal_45b17793185dae5cdc986ea57569132b6d96caab84286ee16acb5c0d5d63145f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_45b17793185dae5cdc986ea57569132b6d96caab84286ee16acb5c0d5d63145f->leave($__internal_45b17793185dae5cdc986ea57569132b6d96caab84286ee16acb5c0d5d63145f_prof);

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
