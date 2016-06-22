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
        $__internal_969907ac42c53335ffd33b61e0d6293ad05db6b77e423432f4f076012014e0d5 = $this->env->getExtension("native_profiler");
        $__internal_969907ac42c53335ffd33b61e0d6293ad05db6b77e423432f4f076012014e0d5->enter($__internal_969907ac42c53335ffd33b61e0d6293ad05db6b77e423432f4f076012014e0d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/layoutGeneral.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_969907ac42c53335ffd33b61e0d6293ad05db6b77e423432f4f076012014e0d5->leave($__internal_969907ac42c53335ffd33b61e0d6293ad05db6b77e423432f4f076012014e0d5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c7df1f0ee5424b67d4cf9c9c7d2ed239ab459c66e97e663056b8dacd7c0074bc = $this->env->getExtension("native_profiler");
        $__internal_c7df1f0ee5424b67d4cf9c9c7d2ed239ab459c66e97e663056b8dacd7c0074bc->enter($__internal_c7df1f0ee5424b67d4cf9c9c7d2ed239ab459c66e97e663056b8dacd7c0074bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    \t";
        // line 5
        $this->displayBlock('LIFOClassif_body', $context, $blocks);
        // line 7
        echo "    \t
    ";
        
        $__internal_c7df1f0ee5424b67d4cf9c9c7d2ed239ab459c66e97e663056b8dacd7c0074bc->leave($__internal_c7df1f0ee5424b67d4cf9c9c7d2ed239ab459c66e97e663056b8dacd7c0074bc_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_c0e3ec247c5509a2370bc32a0c1b19b6d9ccd4c77bf93aa0dfbd00a64a7a5bd6 = $this->env->getExtension("native_profiler");
        $__internal_c0e3ec247c5509a2370bc32a0c1b19b6d9ccd4c77bf93aa0dfbd00a64a7a5bd6->enter($__internal_c0e3ec247c5509a2370bc32a0c1b19b6d9ccd4c77bf93aa0dfbd00a64a7a5bd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "    \t";
        
        $__internal_c0e3ec247c5509a2370bc32a0c1b19b6d9ccd4c77bf93aa0dfbd00a64a7a5bd6->leave($__internal_c0e3ec247c5509a2370bc32a0c1b19b6d9ccd4c77bf93aa0dfbd00a64a7a5bd6_prof);

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
