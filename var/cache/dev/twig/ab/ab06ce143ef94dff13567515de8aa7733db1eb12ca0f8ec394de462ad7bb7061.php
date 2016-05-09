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
        $__internal_680818448bbb582983e0d7d7fa662c4776dd183011c99bac7de8a36b6b3c8c17 = $this->env->getExtension("native_profiler");
        $__internal_680818448bbb582983e0d7d7fa662c4776dd183011c99bac7de8a36b6b3c8c17->enter($__internal_680818448bbb582983e0d7d7fa662c4776dd183011c99bac7de8a36b6b3c8c17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Platform:recherche.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_680818448bbb582983e0d7d7fa662c4776dd183011c99bac7de8a36b6b3c8c17->leave($__internal_680818448bbb582983e0d7d7fa662c4776dd183011c99bac7de8a36b6b3c8c17_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ff2a7dacfcfb33a4992574f95d28e0f681cd788794a0fdc8934f811138278305 = $this->env->getExtension("native_profiler");
        $__internal_ff2a7dacfcfb33a4992574f95d28e0f681cd788794a0fdc8934f811138278305->enter($__internal_ff2a7dacfcfb33a4992574f95d28e0f681cd788794a0fdc8934f811138278305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Recherche";
        
        $__internal_ff2a7dacfcfb33a4992574f95d28e0f681cd788794a0fdc8934f811138278305->leave($__internal_ff2a7dacfcfb33a4992574f95d28e0f681cd788794a0fdc8934f811138278305_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_863cbccacdc5267ba8a3737e658f213b27b731122f1f48e1c47890aa119b0d87 = $this->env->getExtension("native_profiler");
        $__internal_863cbccacdc5267ba8a3737e658f213b27b731122f1f48e1c47890aa119b0d87->enter($__internal_863cbccacdc5267ba8a3737e658f213b27b731122f1f48e1c47890aa119b0d87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
\t<p>
\t\tPour rechercher un tesson suivant certains critères
\t</p>
";
        
        $__internal_863cbccacdc5267ba8a3737e658f213b27b731122f1f48e1c47890aa119b0d87->leave($__internal_863cbccacdc5267ba8a3737e658f213b27b731122f1f48e1c47890aa119b0d87_prof);

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
