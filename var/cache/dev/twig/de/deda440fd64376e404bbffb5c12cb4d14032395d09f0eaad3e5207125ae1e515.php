<?php

/* LIFOClassifBundle::layoutGeneral.html.twig */
class __TwigTemplate_7c296ff27bac2f8634b383bbdde8b8f943df6c3fc60db69e581587a45f5f098d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "LIFOClassifBundle::layoutGeneral.html.twig", 1);
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
        $__internal_a97a9990bd8d831dd908eb780d18e11bd7784b3d0591e8e1c6db50e106de2acd = $this->env->getExtension("native_profiler");
        $__internal_a97a9990bd8d831dd908eb780d18e11bd7784b3d0591e8e1c6db50e106de2acd->enter($__internal_a97a9990bd8d831dd908eb780d18e11bd7784b3d0591e8e1c6db50e106de2acd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle::layoutGeneral.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a97a9990bd8d831dd908eb780d18e11bd7784b3d0591e8e1c6db50e106de2acd->leave($__internal_a97a9990bd8d831dd908eb780d18e11bd7784b3d0591e8e1c6db50e106de2acd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bb804a7e3cdec5bb04cbf2e4649e784f141462df1ae8cabd0f3d262e5a1c34dc = $this->env->getExtension("native_profiler");
        $__internal_bb804a7e3cdec5bb04cbf2e4649e784f141462df1ae8cabd0f3d262e5a1c34dc->enter($__internal_bb804a7e3cdec5bb04cbf2e4649e784f141462df1ae8cabd0f3d262e5a1c34dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    \t";
        // line 5
        $this->displayBlock('LIFOClassif_body', $context, $blocks);
        // line 7
        echo "    \t
    ";
        
        $__internal_bb804a7e3cdec5bb04cbf2e4649e784f141462df1ae8cabd0f3d262e5a1c34dc->leave($__internal_bb804a7e3cdec5bb04cbf2e4649e784f141462df1ae8cabd0f3d262e5a1c34dc_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_2234d952671bd808751bb279d292f03efb0d2bc4be30a6f0265c69c459102c14 = $this->env->getExtension("native_profiler");
        $__internal_2234d952671bd808751bb279d292f03efb0d2bc4be30a6f0265c69c459102c14->enter($__internal_2234d952671bd808751bb279d292f03efb0d2bc4be30a6f0265c69c459102c14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "    \t";
        
        $__internal_2234d952671bd808751bb279d292f03efb0d2bc4be30a6f0265c69c459102c14->leave($__internal_2234d952671bd808751bb279d292f03efb0d2bc4be30a6f0265c69c459102c14_prof);

    }

    public function getTemplateName()
    {
        return "LIFOClassifBundle::layoutGeneral.html.twig";
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
