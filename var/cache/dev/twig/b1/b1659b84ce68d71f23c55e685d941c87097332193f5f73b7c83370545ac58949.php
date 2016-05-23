<?php

/* LIFOClassifBundle:Platform:index.html.twig */
class __TwigTemplate_45469c73f234b31b6bec59b12ff8781d17bcdaf17f0e66c248db4e16b9295993 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layoutGeneral.html.twig", "LIFOClassifBundle:Platform:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LIFOClassifBundle::layoutGeneral.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c449aa9eaa532c5b4086f2932d11b3315949e4a1b79224f0393e916a67f14604 = $this->env->getExtension("native_profiler");
        $__internal_c449aa9eaa532c5b4086f2932d11b3315949e4a1b79224f0393e916a67f14604->enter($__internal_c449aa9eaa532c5b4086f2932d11b3315949e4a1b79224f0393e916a67f14604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Platform:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c449aa9eaa532c5b4086f2932d11b3315949e4a1b79224f0393e916a67f14604->leave($__internal_c449aa9eaa532c5b4086f2932d11b3315949e4a1b79224f0393e916a67f14604_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_383269e8031624def6e8f816465955ffed288bd03abcd7b22a7558c220decb2d = $this->env->getExtension("native_profiler");
        $__internal_383269e8031624def6e8f816465955ffed288bd03abcd7b22a7558c220decb2d->enter($__internal_383269e8031624def6e8f816465955ffed288bd03abcd7b22a7558c220decb2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index";
        
        $__internal_383269e8031624def6e8f816465955ffed288bd03abcd7b22a7558c220decb2d->leave($__internal_383269e8031624def6e8f816465955ffed288bd03abcd7b22a7558c220decb2d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_887ef8f5f552a7ae33a5cef705cf90ed34e4915d8e08c9b68611bafd7caca86c = $this->env->getExtension("native_profiler");
        $__internal_887ef8f5f552a7ae33a5cef705cf90ed34e4915d8e08c9b68611bafd7caca86c->enter($__internal_887ef8f5f552a7ae33a5cef705cf90ed34e4915d8e08c9b68611bafd7caca86c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<p>
\t\tBienvenue sur l'outil d'aide à la classification de tesson
\t</p>
";
        
        $__internal_887ef8f5f552a7ae33a5cef705cf90ed34e4915d8e08c9b68611bafd7caca86c->leave($__internal_887ef8f5f552a7ae33a5cef705cf90ed34e4915d8e08c9b68611bafd7caca86c_prof);

    }

    public function getTemplateName()
    {
        return "LIFOClassifBundle:Platform:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 6,  48 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "LIFOClassifBundle::layoutGeneral.html.twig" %}*/
/* */
/* {% block title %}{{ parent() }} - Index{% endblock %}*/
/* */
/* {% block body %}*/
/* 	<p>*/
/* 		Bienvenue sur l'outil d'aide à la classification de tesson*/
/* 	</p>*/
/* {% endblock %}*/
