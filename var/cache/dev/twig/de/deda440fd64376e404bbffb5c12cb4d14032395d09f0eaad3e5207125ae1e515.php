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
        $__internal_b436c4ca61f562761100c4c1c695d8586f35e664bb9a2138bb791ba4d8168393 = $this->env->getExtension("native_profiler");
        $__internal_b436c4ca61f562761100c4c1c695d8586f35e664bb9a2138bb791ba4d8168393->enter($__internal_b436c4ca61f562761100c4c1c695d8586f35e664bb9a2138bb791ba4d8168393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle::layoutGeneral.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b436c4ca61f562761100c4c1c695d8586f35e664bb9a2138bb791ba4d8168393->leave($__internal_b436c4ca61f562761100c4c1c695d8586f35e664bb9a2138bb791ba4d8168393_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_89d44af9d0f79acaefd85b924955c0207a97afb82719d01112e6ae232dfff573 = $this->env->getExtension("native_profiler");
        $__internal_89d44af9d0f79acaefd85b924955c0207a97afb82719d01112e6ae232dfff573->enter($__internal_89d44af9d0f79acaefd85b924955c0207a97afb82719d01112e6ae232dfff573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    \t";
        // line 5
        $this->displayBlock('LIFOClassif_body', $context, $blocks);
        // line 7
        echo "    \t
    ";
        
        $__internal_89d44af9d0f79acaefd85b924955c0207a97afb82719d01112e6ae232dfff573->leave($__internal_89d44af9d0f79acaefd85b924955c0207a97afb82719d01112e6ae232dfff573_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_1b11024f42992e437ccf67664ddd23e282270108350e7e2a748c5f369d988737 = $this->env->getExtension("native_profiler");
        $__internal_1b11024f42992e437ccf67664ddd23e282270108350e7e2a748c5f369d988737->enter($__internal_1b11024f42992e437ccf67664ddd23e282270108350e7e2a748c5f369d988737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "    \t";
        
        $__internal_1b11024f42992e437ccf67664ddd23e282270108350e7e2a748c5f369d988737->leave($__internal_1b11024f42992e437ccf67664ddd23e282270108350e7e2a748c5f369d988737_prof);

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
