<?php

/* @LIFOClassif/Platform/index.html.twig */
class __TwigTemplate_6c5727bd5ba52cac76d8756f50842e6d94474be7170dde15522885ae5d5c1fd2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layoutGeneral.html.twig", "@LIFOClassif/Platform/index.html.twig", 1);
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
        $__internal_beec714aefca06abf2421ea37c979d0ec08f0ed1a7e9c1d514406ece28782247 = $this->env->getExtension("native_profiler");
        $__internal_beec714aefca06abf2421ea37c979d0ec08f0ed1a7e9c1d514406ece28782247->enter($__internal_beec714aefca06abf2421ea37c979d0ec08f0ed1a7e9c1d514406ece28782247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Platform/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_beec714aefca06abf2421ea37c979d0ec08f0ed1a7e9c1d514406ece28782247->leave($__internal_beec714aefca06abf2421ea37c979d0ec08f0ed1a7e9c1d514406ece28782247_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_99fb182163ade563e6a1a904e1ea2d21d497975303bfb4a2467e71b442ca4d45 = $this->env->getExtension("native_profiler");
        $__internal_99fb182163ade563e6a1a904e1ea2d21d497975303bfb4a2467e71b442ca4d45->enter($__internal_99fb182163ade563e6a1a904e1ea2d21d497975303bfb4a2467e71b442ca4d45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index";
        
        $__internal_99fb182163ade563e6a1a904e1ea2d21d497975303bfb4a2467e71b442ca4d45->leave($__internal_99fb182163ade563e6a1a904e1ea2d21d497975303bfb4a2467e71b442ca4d45_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7627cc13165172b7670bb0d401febba6f64aa4e2a52ae94bc20f4fff61d9c205 = $this->env->getExtension("native_profiler");
        $__internal_7627cc13165172b7670bb0d401febba6f64aa4e2a52ae94bc20f4fff61d9c205->enter($__internal_7627cc13165172b7670bb0d401febba6f64aa4e2a52ae94bc20f4fff61d9c205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<p>
\t\tBienvenue sur l'outil d'aide à la classification de tesson
\t</p>
";
        
        $__internal_7627cc13165172b7670bb0d401febba6f64aa4e2a52ae94bc20f4fff61d9c205->leave($__internal_7627cc13165172b7670bb0d401febba6f64aa4e2a52ae94bc20f4fff61d9c205_prof);

    }

    public function getTemplateName()
    {
        return "@LIFOClassif/Platform/index.html.twig";
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
