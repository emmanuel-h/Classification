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
        $__internal_28bff25efaa6f191efaf0ac34b48c023164d344fe45b1d5ad39cd356a5d0ac79 = $this->env->getExtension("native_profiler");
        $__internal_28bff25efaa6f191efaf0ac34b48c023164d344fe45b1d5ad39cd356a5d0ac79->enter($__internal_28bff25efaa6f191efaf0ac34b48c023164d344fe45b1d5ad39cd356a5d0ac79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/layoutGeneral.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28bff25efaa6f191efaf0ac34b48c023164d344fe45b1d5ad39cd356a5d0ac79->leave($__internal_28bff25efaa6f191efaf0ac34b48c023164d344fe45b1d5ad39cd356a5d0ac79_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c3067633a5c9e63addf7ed6069a7fe344093b23df6ba7b40f474bf2603f0fce9 = $this->env->getExtension("native_profiler");
        $__internal_c3067633a5c9e63addf7ed6069a7fe344093b23df6ba7b40f474bf2603f0fce9->enter($__internal_c3067633a5c9e63addf7ed6069a7fe344093b23df6ba7b40f474bf2603f0fce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    \t";
        // line 5
        $this->displayBlock('LIFOClassif_body', $context, $blocks);
        // line 7
        echo "    \t
    ";
        
        $__internal_c3067633a5c9e63addf7ed6069a7fe344093b23df6ba7b40f474bf2603f0fce9->leave($__internal_c3067633a5c9e63addf7ed6069a7fe344093b23df6ba7b40f474bf2603f0fce9_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_c22e8990363cfef91869fd0df47b153b9d70e3e2c8141d3813080167cdd6d001 = $this->env->getExtension("native_profiler");
        $__internal_c22e8990363cfef91869fd0df47b153b9d70e3e2c8141d3813080167cdd6d001->enter($__internal_c22e8990363cfef91869fd0df47b153b9d70e3e2c8141d3813080167cdd6d001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "    \t";
        
        $__internal_c22e8990363cfef91869fd0df47b153b9d70e3e2c8141d3813080167cdd6d001->leave($__internal_c22e8990363cfef91869fd0df47b153b9d70e3e2c8141d3813080167cdd6d001_prof);

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
