<?php

/* LIFOClassifBundle:Platform:recherche.html.twig */
class __TwigTemplate_d009ef91ff410b0ab263261e5f5c37facc0417e2776bb4574da2d003a98a0764 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layout.html.twig", "LIFOClassifBundle:Platform:recherche.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'LIFOClassif_body' => array($this, 'block_LIFOClassif_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LIFOClassifBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9f76dc1bba8150c16deddfb5e587bfca8de77534374e2de32b4c30de51a4ef90 = $this->env->getExtension("native_profiler");
        $__internal_9f76dc1bba8150c16deddfb5e587bfca8de77534374e2de32b4c30de51a4ef90->enter($__internal_9f76dc1bba8150c16deddfb5e587bfca8de77534374e2de32b4c30de51a4ef90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Platform:recherche.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f76dc1bba8150c16deddfb5e587bfca8de77534374e2de32b4c30de51a4ef90->leave($__internal_9f76dc1bba8150c16deddfb5e587bfca8de77534374e2de32b4c30de51a4ef90_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f4ca2cbdebfd4691efd05f4829ebd59ac887c761a97186b78b115d09306e087d = $this->env->getExtension("native_profiler");
        $__internal_f4ca2cbdebfd4691efd05f4829ebd59ac887c761a97186b78b115d09306e087d->enter($__internal_f4ca2cbdebfd4691efd05f4829ebd59ac887c761a97186b78b115d09306e087d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Recherche";
        
        $__internal_f4ca2cbdebfd4691efd05f4829ebd59ac887c761a97186b78b115d09306e087d->leave($__internal_f4ca2cbdebfd4691efd05f4829ebd59ac887c761a97186b78b115d09306e087d_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_ae8357c62a368892eb45bf654296d176ad59648ace2a23b667f5bd903047d42b = $this->env->getExtension("native_profiler");
        $__internal_ae8357c62a368892eb45bf654296d176ad59648ace2a23b667f5bd903047d42b->enter($__internal_ae8357c62a368892eb45bf654296d176ad59648ace2a23b667f5bd903047d42b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "\t<p>
\t";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
\t</p>
";
        
        $__internal_ae8357c62a368892eb45bf654296d176ad59648ace2a23b667f5bd903047d42b->leave($__internal_ae8357c62a368892eb45bf654296d176ad59648ace2a23b667f5bd903047d42b_prof);

    }

    public function getTemplateName()
    {
        return "LIFOClassifBundle:Platform:recherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 7,  54 => 6,  48 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "LIFOClassifBundle::layout.html.twig" %}*/
/* */
/* {% block title %}{{ parent() }} - Recherche{% endblock %}*/
/* */
/* {% block LIFOClassif_body %}*/
/* 	<p>*/
/* 	{{ form(form) }}*/
/* 	</p>*/
/* {% endblock %}*/
