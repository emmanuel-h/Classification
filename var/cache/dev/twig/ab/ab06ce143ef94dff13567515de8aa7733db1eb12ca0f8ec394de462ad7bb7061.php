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
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LIFOClassifBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a0356d077da550450fb6bdbd1a9781b9e32c5f70206e28f9085cb4773376f90e = $this->env->getExtension("native_profiler");
        $__internal_a0356d077da550450fb6bdbd1a9781b9e32c5f70206e28f9085cb4773376f90e->enter($__internal_a0356d077da550450fb6bdbd1a9781b9e32c5f70206e28f9085cb4773376f90e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Platform:recherche.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0356d077da550450fb6bdbd1a9781b9e32c5f70206e28f9085cb4773376f90e->leave($__internal_a0356d077da550450fb6bdbd1a9781b9e32c5f70206e28f9085cb4773376f90e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_795c465c485545f60b16095729705dd5fc7449079cf2ca8d917b83089380271a = $this->env->getExtension("native_profiler");
        $__internal_795c465c485545f60b16095729705dd5fc7449079cf2ca8d917b83089380271a->enter($__internal_795c465c485545f60b16095729705dd5fc7449079cf2ca8d917b83089380271a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Recherche";
        
        $__internal_795c465c485545f60b16095729705dd5fc7449079cf2ca8d917b83089380271a->leave($__internal_795c465c485545f60b16095729705dd5fc7449079cf2ca8d917b83089380271a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2439b606256df7a879437638d57fa3e708ac7100e3f5ae43b2ca242fa1ca7450 = $this->env->getExtension("native_profiler");
        $__internal_2439b606256df7a879437638d57fa3e708ac7100e3f5ae43b2ca242fa1ca7450->enter($__internal_2439b606256df7a879437638d57fa3e708ac7100e3f5ae43b2ca242fa1ca7450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
\t<p>
\t\tPour rechercher un tesson suivant certains critères
\t</p>
";
        
        $__internal_2439b606256df7a879437638d57fa3e708ac7100e3f5ae43b2ca242fa1ca7450->leave($__internal_2439b606256df7a879437638d57fa3e708ac7100e3f5ae43b2ca242fa1ca7450_prof);

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
        return array (  54 => 6,  48 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "LIFOClassifBundle::layout.html.twig" %}*/
/* */
/* {% block title %}{{ parent() }} - Recherche{% endblock %}*/
/* */
/* {% block body %}*/
/* 	{{ parent() }}*/
/* 	<p>*/
/* 		Pour rechercher un tesson suivant certains critères*/
/* 	</p>*/
/* {% endblock %}*/
