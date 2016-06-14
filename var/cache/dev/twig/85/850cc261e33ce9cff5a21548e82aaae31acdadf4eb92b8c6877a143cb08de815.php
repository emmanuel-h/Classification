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
        $__internal_d98e3827df7a1d448f0e6e822957410b1045181dea6b1f977f7e5ca2d540e6c0 = $this->env->getExtension("native_profiler");
        $__internal_d98e3827df7a1d448f0e6e822957410b1045181dea6b1f977f7e5ca2d540e6c0->enter($__internal_d98e3827df7a1d448f0e6e822957410b1045181dea6b1f977f7e5ca2d540e6c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/layoutGeneral.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d98e3827df7a1d448f0e6e822957410b1045181dea6b1f977f7e5ca2d540e6c0->leave($__internal_d98e3827df7a1d448f0e6e822957410b1045181dea6b1f977f7e5ca2d540e6c0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e3c566b81a9a6dc16607a08ca9998a157132383dbd11eaff62f003734114aaa4 = $this->env->getExtension("native_profiler");
        $__internal_e3c566b81a9a6dc16607a08ca9998a157132383dbd11eaff62f003734114aaa4->enter($__internal_e3c566b81a9a6dc16607a08ca9998a157132383dbd11eaff62f003734114aaa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    \t";
        // line 5
        $this->displayBlock('LIFOClassif_body', $context, $blocks);
        // line 7
        echo "    \t
    ";
        
        $__internal_e3c566b81a9a6dc16607a08ca9998a157132383dbd11eaff62f003734114aaa4->leave($__internal_e3c566b81a9a6dc16607a08ca9998a157132383dbd11eaff62f003734114aaa4_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_608f3f13343100df06d2acc8fe3efd2814d02219a6b0e7a796ae5583b23ff108 = $this->env->getExtension("native_profiler");
        $__internal_608f3f13343100df06d2acc8fe3efd2814d02219a6b0e7a796ae5583b23ff108->enter($__internal_608f3f13343100df06d2acc8fe3efd2814d02219a6b0e7a796ae5583b23ff108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "    \t";
        
        $__internal_608f3f13343100df06d2acc8fe3efd2814d02219a6b0e7a796ae5583b23ff108->leave($__internal_608f3f13343100df06d2acc8fe3efd2814d02219a6b0e7a796ae5583b23ff108_prof);

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
