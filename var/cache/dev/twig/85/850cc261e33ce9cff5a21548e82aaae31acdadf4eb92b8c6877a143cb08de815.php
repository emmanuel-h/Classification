<?php

/* @LIFOClassif/layoutGeneral.html.twig */
class __TwigTemplate_92ffdd026c92cb435e6b726c60ff8095ea19bec95e56589508b6bafa81643146 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@LIFOClassif/layoutGeneral.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'LIFOClassif_body' => array($this, 'block_LIFOClassif_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a444f2c3472564d51baceadf466bbad663503da16c234a6490abacccbd9a03cc = $this->env->getExtension("native_profiler");
        $__internal_a444f2c3472564d51baceadf466bbad663503da16c234a6490abacccbd9a03cc->enter($__internal_a444f2c3472564d51baceadf466bbad663503da16c234a6490abacccbd9a03cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/layoutGeneral.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a444f2c3472564d51baceadf466bbad663503da16c234a6490abacccbd9a03cc->leave($__internal_a444f2c3472564d51baceadf466bbad663503da16c234a6490abacccbd9a03cc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1fbe8ba520c0d043d3fb5b89440b9a456af3db3c06589298744fd11e21841e45 = $this->env->getExtension("native_profiler");
        $__internal_1fbe8ba520c0d043d3fb5b89440b9a456af3db3c06589298744fd11e21841e45->enter($__internal_1fbe8ba520c0d043d3fb5b89440b9a456af3db3c06589298744fd11e21841e45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    \t";
        // line 5
        $this->displayBlock('LIFOClassif_body', $context, $blocks);
        // line 7
        echo "    \t
    ";
        
        $__internal_1fbe8ba520c0d043d3fb5b89440b9a456af3db3c06589298744fd11e21841e45->leave($__internal_1fbe8ba520c0d043d3fb5b89440b9a456af3db3c06589298744fd11e21841e45_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_3a477932a639c97ef8a912fcb52e58fd04cb343fb2da0e02a19ee4006ee8484d = $this->env->getExtension("native_profiler");
        $__internal_3a477932a639c97ef8a912fcb52e58fd04cb343fb2da0e02a19ee4006ee8484d->enter($__internal_3a477932a639c97ef8a912fcb52e58fd04cb343fb2da0e02a19ee4006ee8484d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "    \t";
        
        $__internal_3a477932a639c97ef8a912fcb52e58fd04cb343fb2da0e02a19ee4006ee8484d->leave($__internal_3a477932a639c97ef8a912fcb52e58fd04cb343fb2da0e02a19ee4006ee8484d_prof);

    }

    public function getTemplateName()
    {
        return "@LIFOClassif/layoutGeneral.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 6,  54 => 5,  46 => 7,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/*     {% block body %}*/
/*     */
/*     	{% block LIFOClassif_body %}*/
/*     	{% endblock %}*/
/*     	*/
/*     {% endblock %}*/
/* */
