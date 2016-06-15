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
        $__internal_9707f449b2d98f804afbff259a597415810dd2b97db55f3877e006cfa8015a9b = $this->env->getExtension("native_profiler");
        $__internal_9707f449b2d98f804afbff259a597415810dd2b97db55f3877e006cfa8015a9b->enter($__internal_9707f449b2d98f804afbff259a597415810dd2b97db55f3877e006cfa8015a9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_9707f449b2d98f804afbff259a597415810dd2b97db55f3877e006cfa8015a9b->leave($__internal_9707f449b2d98f804afbff259a597415810dd2b97db55f3877e006cfa8015a9b_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_0eef0edba73fc921a645953ad0df6fe5abb6c4bf04174191f0d735f5c1d9342a = $this->env->getExtension("native_profiler");
        $__internal_0eef0edba73fc921a645953ad0df6fe5abb6c4bf04174191f0d735f5c1d9342a->enter($__internal_0eef0edba73fc921a645953ad0df6fe5abb6c4bf04174191f0d735f5c1d9342a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_0eef0edba73fc921a645953ad0df6fe5abb6c4bf04174191f0d735f5c1d9342a->leave($__internal_0eef0edba73fc921a645953ad0df6fe5abb6c4bf04174191f0d735f5c1d9342a_prof);

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
