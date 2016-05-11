<?php

/* @LIFOClassif/Platform/telechargement.html.twig */
class __TwigTemplate_579c39c5f29609dec7659d7c732d715fc6342c9c64be58b6f264b61b7fbb30ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layout.html.twig", "@LIFOClassif/Platform/telechargement.html.twig", 1);
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
        $__internal_a7eb52ca799b631bc8c53b302029aab78f232fa340566df208a4f72898bc48b4 = $this->env->getExtension("native_profiler");
        $__internal_a7eb52ca799b631bc8c53b302029aab78f232fa340566df208a4f72898bc48b4->enter($__internal_a7eb52ca799b631bc8c53b302029aab78f232fa340566df208a4f72898bc48b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Platform/telechargement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7eb52ca799b631bc8c53b302029aab78f232fa340566df208a4f72898bc48b4->leave($__internal_a7eb52ca799b631bc8c53b302029aab78f232fa340566df208a4f72898bc48b4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1c1beed048e60dc5aa9278e654d69e1f098f44b99738f9c584cc22e2502cfff8 = $this->env->getExtension("native_profiler");
        $__internal_1c1beed048e60dc5aa9278e654d69e1f098f44b99738f9c584cc22e2502cfff8->enter($__internal_1c1beed048e60dc5aa9278e654d69e1f098f44b99738f9c584cc22e2502cfff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Téléchargement";
        
        $__internal_1c1beed048e60dc5aa9278e654d69e1f098f44b99738f9c584cc22e2502cfff8->leave($__internal_1c1beed048e60dc5aa9278e654d69e1f098f44b99738f9c584cc22e2502cfff8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_30fd7a9e2905c09c925f0058bffdb70eaeec1d3f220d201eb78cbc67585591b0 = $this->env->getExtension("native_profiler");
        $__internal_30fd7a9e2905c09c925f0058bffdb70eaeec1d3f220d201eb78cbc67585591b0->enter($__internal_30fd7a9e2905c09c925f0058bffdb70eaeec1d3f220d201eb78cbc67585591b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
\t<p>
\t\tPour télécharger une image
\t</p>
";
        
        $__internal_30fd7a9e2905c09c925f0058bffdb70eaeec1d3f220d201eb78cbc67585591b0->leave($__internal_30fd7a9e2905c09c925f0058bffdb70eaeec1d3f220d201eb78cbc67585591b0_prof);

    }

    public function getTemplateName()
    {
        return "@LIFOClassif/Platform/telechargement.html.twig";
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
