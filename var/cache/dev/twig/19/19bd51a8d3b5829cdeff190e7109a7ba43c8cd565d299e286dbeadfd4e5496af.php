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
        $__internal_fe1fbb007e8db19ac6419d5310972d2ce869928ffe58653ad56c22071d638887 = $this->env->getExtension("native_profiler");
        $__internal_fe1fbb007e8db19ac6419d5310972d2ce869928ffe58653ad56c22071d638887->enter($__internal_fe1fbb007e8db19ac6419d5310972d2ce869928ffe58653ad56c22071d638887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Platform/telechargement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe1fbb007e8db19ac6419d5310972d2ce869928ffe58653ad56c22071d638887->leave($__internal_fe1fbb007e8db19ac6419d5310972d2ce869928ffe58653ad56c22071d638887_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9ab683810ada76822e6c459c80f2424524e44f8f8e8042beadae1a4996c89043 = $this->env->getExtension("native_profiler");
        $__internal_9ab683810ada76822e6c459c80f2424524e44f8f8e8042beadae1a4996c89043->enter($__internal_9ab683810ada76822e6c459c80f2424524e44f8f8e8042beadae1a4996c89043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Téléchargement";
        
        $__internal_9ab683810ada76822e6c459c80f2424524e44f8f8e8042beadae1a4996c89043->leave($__internal_9ab683810ada76822e6c459c80f2424524e44f8f8e8042beadae1a4996c89043_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c5e69891949a9c0052f1e22b6c3739ae3cb995047df502b7bb37ea007186c20 = $this->env->getExtension("native_profiler");
        $__internal_5c5e69891949a9c0052f1e22b6c3739ae3cb995047df502b7bb37ea007186c20->enter($__internal_5c5e69891949a9c0052f1e22b6c3739ae3cb995047df502b7bb37ea007186c20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
\t<p>
\t\tPour télécharger une image
\t</p>
";
        
        $__internal_5c5e69891949a9c0052f1e22b6c3739ae3cb995047df502b7bb37ea007186c20->leave($__internal_5c5e69891949a9c0052f1e22b6c3739ae3cb995047df502b7bb37ea007186c20_prof);

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
