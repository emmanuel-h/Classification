<?php

/* @LIFOClassif/Platform/classification.html.twig */
class __TwigTemplate_d48983bfe3c4f8c570de11499660b9d824df3625695829ff0a1694ec91fbe8cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layoutGeneral.html.twig", "@LIFOClassif/Platform/classification.html.twig", 1);
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
        $__internal_09cd3c622d7a000169ff33f9880ced994a503f1653454868b191c42d486a639b = $this->env->getExtension("native_profiler");
        $__internal_09cd3c622d7a000169ff33f9880ced994a503f1653454868b191c42d486a639b->enter($__internal_09cd3c622d7a000169ff33f9880ced994a503f1653454868b191c42d486a639b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Platform/classification.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09cd3c622d7a000169ff33f9880ced994a503f1653454868b191c42d486a639b->leave($__internal_09cd3c622d7a000169ff33f9880ced994a503f1653454868b191c42d486a639b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_efab027ec0bff90e002b2d33f8c5c2d3aa4de258df3ca98b262371e16311ece4 = $this->env->getExtension("native_profiler");
        $__internal_efab027ec0bff90e002b2d33f8c5c2d3aa4de258df3ca98b262371e16311ece4->enter($__internal_efab027ec0bff90e002b2d33f8c5c2d3aa4de258df3ca98b262371e16311ece4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Classification";
        
        $__internal_efab027ec0bff90e002b2d33f8c5c2d3aa4de258df3ca98b262371e16311ece4->leave($__internal_efab027ec0bff90e002b2d33f8c5c2d3aa4de258df3ca98b262371e16311ece4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9a14dfb80a0dbf1abe2289b06f371dc1a9b4dff1c5c4b7dcc11f2a66b8eb4b61 = $this->env->getExtension("native_profiler");
        $__internal_9a14dfb80a0dbf1abe2289b06f371dc1a9b4dff1c5c4b7dcc11f2a66b8eb4b61->enter($__internal_9a14dfb80a0dbf1abe2289b06f371dc1a9b4dff1c5c4b7dcc11f2a66b8eb4b61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
\t<p>
\t\tPour classifier un tesson
\t</p>
";
        
        $__internal_9a14dfb80a0dbf1abe2289b06f371dc1a9b4dff1c5c4b7dcc11f2a66b8eb4b61->leave($__internal_9a14dfb80a0dbf1abe2289b06f371dc1a9b4dff1c5c4b7dcc11f2a66b8eb4b61_prof);

    }

    public function getTemplateName()
    {
        return "@LIFOClassif/Platform/classification.html.twig";
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
/* {% block title %}{{ parent() }} - Classification{% endblock %}*/
/* */
/* {% block body %}*/
/* 	{{ parent() }}*/
/* 	<p>*/
/* 		Pour classifier un tesson*/
/* 	</p>*/
/* {% endblock %}*/
