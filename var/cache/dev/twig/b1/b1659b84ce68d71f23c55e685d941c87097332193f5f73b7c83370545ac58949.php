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
        $__internal_57ab7972ec00432b3663884eba842a68cccbc80230dbe050cdc3b84baf2137fb = $this->env->getExtension("native_profiler");
        $__internal_57ab7972ec00432b3663884eba842a68cccbc80230dbe050cdc3b84baf2137fb->enter($__internal_57ab7972ec00432b3663884eba842a68cccbc80230dbe050cdc3b84baf2137fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Platform:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57ab7972ec00432b3663884eba842a68cccbc80230dbe050cdc3b84baf2137fb->leave($__internal_57ab7972ec00432b3663884eba842a68cccbc80230dbe050cdc3b84baf2137fb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_777baa07aae9c54da2d55469b8028ffb8bd2077bd08fedff20185ff94a8aafb5 = $this->env->getExtension("native_profiler");
        $__internal_777baa07aae9c54da2d55469b8028ffb8bd2077bd08fedff20185ff94a8aafb5->enter($__internal_777baa07aae9c54da2d55469b8028ffb8bd2077bd08fedff20185ff94a8aafb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index";
        
        $__internal_777baa07aae9c54da2d55469b8028ffb8bd2077bd08fedff20185ff94a8aafb5->leave($__internal_777baa07aae9c54da2d55469b8028ffb8bd2077bd08fedff20185ff94a8aafb5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2030a752524150051aff5bcdd0235403c92d28546281d7451412c4dfd0a49e03 = $this->env->getExtension("native_profiler");
        $__internal_2030a752524150051aff5bcdd0235403c92d28546281d7451412c4dfd0a49e03->enter($__internal_2030a752524150051aff5bcdd0235403c92d28546281d7451412c4dfd0a49e03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<p>
\t\tBienvenue sur l'outil d'aide à la classification de tesson
\t</p>
";
        
        $__internal_2030a752524150051aff5bcdd0235403c92d28546281d7451412c4dfd0a49e03->leave($__internal_2030a752524150051aff5bcdd0235403c92d28546281d7451412c4dfd0a49e03_prof);

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
