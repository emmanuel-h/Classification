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
        $__internal_8283e317daf19e7ed418ba523526e36c253f10dfc12f393c577bcd69a8afaf6f = $this->env->getExtension("native_profiler");
        $__internal_8283e317daf19e7ed418ba523526e36c253f10dfc12f393c577bcd69a8afaf6f->enter($__internal_8283e317daf19e7ed418ba523526e36c253f10dfc12f393c577bcd69a8afaf6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Platform:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8283e317daf19e7ed418ba523526e36c253f10dfc12f393c577bcd69a8afaf6f->leave($__internal_8283e317daf19e7ed418ba523526e36c253f10dfc12f393c577bcd69a8afaf6f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f516a5e9616ac6b903e86d37e8877e5cd5db6814a5ca949602184ffdeb1a9968 = $this->env->getExtension("native_profiler");
        $__internal_f516a5e9616ac6b903e86d37e8877e5cd5db6814a5ca949602184ffdeb1a9968->enter($__internal_f516a5e9616ac6b903e86d37e8877e5cd5db6814a5ca949602184ffdeb1a9968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index";
        
        $__internal_f516a5e9616ac6b903e86d37e8877e5cd5db6814a5ca949602184ffdeb1a9968->leave($__internal_f516a5e9616ac6b903e86d37e8877e5cd5db6814a5ca949602184ffdeb1a9968_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_31a7c6eae96e62e202b65742e08ee2f9e521c8d3edd0095fcb57b009772fe9b6 = $this->env->getExtension("native_profiler");
        $__internal_31a7c6eae96e62e202b65742e08ee2f9e521c8d3edd0095fcb57b009772fe9b6->enter($__internal_31a7c6eae96e62e202b65742e08ee2f9e521c8d3edd0095fcb57b009772fe9b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<p>
\t\tBienvenue sur l'outil d'aide à la classification de tesson
\t</p>
";
        
        $__internal_31a7c6eae96e62e202b65742e08ee2f9e521c8d3edd0095fcb57b009772fe9b6->leave($__internal_31a7c6eae96e62e202b65742e08ee2f9e521c8d3edd0095fcb57b009772fe9b6_prof);

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
