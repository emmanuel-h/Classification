<?php

/* LIFOClassifBundle:Platform:telechargement.html.twig */
class __TwigTemplate_8878c254b77a9310a6a062fde26388c2772d447a97503ea22367db4c7a665006 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layout.html.twig", "LIFOClassifBundle:Platform:telechargement.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LIFOClassifBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b0bcb3572144d5b11bbbe9514d8a56d2f545312dbc8f5662dc24354965fda6a4 = $this->env->getExtension("native_profiler");
        $__internal_b0bcb3572144d5b11bbbe9514d8a56d2f545312dbc8f5662dc24354965fda6a4->enter($__internal_b0bcb3572144d5b11bbbe9514d8a56d2f545312dbc8f5662dc24354965fda6a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Platform:telechargement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0bcb3572144d5b11bbbe9514d8a56d2f545312dbc8f5662dc24354965fda6a4->leave($__internal_b0bcb3572144d5b11bbbe9514d8a56d2f545312dbc8f5662dc24354965fda6a4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a6ca7a863e7bf7419661c80ec7477345d3c02ca581d98e36cbbb87ded65b0a1f = $this->env->getExtension("native_profiler");
        $__internal_a6ca7a863e7bf7419661c80ec7477345d3c02ca581d98e36cbbb87ded65b0a1f->enter($__internal_a6ca7a863e7bf7419661c80ec7477345d3c02ca581d98e36cbbb87ded65b0a1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Téléchargement";
        
        $__internal_a6ca7a863e7bf7419661c80ec7477345d3c02ca581d98e36cbbb87ded65b0a1f->leave($__internal_a6ca7a863e7bf7419661c80ec7477345d3c02ca581d98e36cbbb87ded65b0a1f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a896c554b61582d377e53e093a5e2831524a7cde27924a058ec9e2eb03c3c6c5 = $this->env->getExtension("native_profiler");
        $__internal_a896c554b61582d377e53e093a5e2831524a7cde27924a058ec9e2eb03c3c6c5->enter($__internal_a896c554b61582d377e53e093a5e2831524a7cde27924a058ec9e2eb03c3c6c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
\t<p>
\t\tPour télécharger une image
\t</p>
";
        
        $__internal_a896c554b61582d377e53e093a5e2831524a7cde27924a058ec9e2eb03c3c6c5->leave($__internal_a896c554b61582d377e53e093a5e2831524a7cde27924a058ec9e2eb03c3c6c5_prof);

    }

    public function getTemplateName()
    {
        return "LIFOClassifBundle:Platform:telechargement.html.twig";
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
/* {% extends "LIFOClassifBundle::layout.html.twig" %}*/
/* */
/* {% block title %}{{ parent() }} - Téléchargement{% endblock %}*/
/* */
/* {% block body %}*/
/* 	{{ parent() }}*/
/* 	<p>*/
/* 		Pour télécharger une image*/
/* 	</p>*/
/* {% endblock %}*/
