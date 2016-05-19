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
        $__internal_6a572309ff67e46c96cf1da1577458d2be00d96c654adf6dbaae9c231285de59 = $this->env->getExtension("native_profiler");
        $__internal_6a572309ff67e46c96cf1da1577458d2be00d96c654adf6dbaae9c231285de59->enter($__internal_6a572309ff67e46c96cf1da1577458d2be00d96c654adf6dbaae9c231285de59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_6a572309ff67e46c96cf1da1577458d2be00d96c654adf6dbaae9c231285de59->leave($__internal_6a572309ff67e46c96cf1da1577458d2be00d96c654adf6dbaae9c231285de59_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c6c9af6d9007745a87755dcf6676424e9e58b6d20d6e16726de281b23ffa3879 = $this->env->getExtension("native_profiler");
        $__internal_c6c9af6d9007745a87755dcf6676424e9e58b6d20d6e16726de281b23ffa3879->enter($__internal_c6c9af6d9007745a87755dcf6676424e9e58b6d20d6e16726de281b23ffa3879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c6c9af6d9007745a87755dcf6676424e9e58b6d20d6e16726de281b23ffa3879->leave($__internal_c6c9af6d9007745a87755dcf6676424e9e58b6d20d6e16726de281b23ffa3879_prof);

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
