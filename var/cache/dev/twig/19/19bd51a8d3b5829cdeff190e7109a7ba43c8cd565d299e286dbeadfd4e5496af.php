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
        $__internal_0c570b067a6af18d770fc0f00d993dd7f708074a6ac0dc6cd4e35be78495cf2e = $this->env->getExtension("native_profiler");
        $__internal_0c570b067a6af18d770fc0f00d993dd7f708074a6ac0dc6cd4e35be78495cf2e->enter($__internal_0c570b067a6af18d770fc0f00d993dd7f708074a6ac0dc6cd4e35be78495cf2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Platform/telechargement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c570b067a6af18d770fc0f00d993dd7f708074a6ac0dc6cd4e35be78495cf2e->leave($__internal_0c570b067a6af18d770fc0f00d993dd7f708074a6ac0dc6cd4e35be78495cf2e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_89dfec411fa45620a8df569d761c6487d37dae5f5c0d8466c4decdcf07c0a7ac = $this->env->getExtension("native_profiler");
        $__internal_89dfec411fa45620a8df569d761c6487d37dae5f5c0d8466c4decdcf07c0a7ac->enter($__internal_89dfec411fa45620a8df569d761c6487d37dae5f5c0d8466c4decdcf07c0a7ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Téléchargement";
        
        $__internal_89dfec411fa45620a8df569d761c6487d37dae5f5c0d8466c4decdcf07c0a7ac->leave($__internal_89dfec411fa45620a8df569d761c6487d37dae5f5c0d8466c4decdcf07c0a7ac_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_07e1b858603e4e184dc403e8d0dbed50fbeb382a65cca8d04f801dc03fed0a54 = $this->env->getExtension("native_profiler");
        $__internal_07e1b858603e4e184dc403e8d0dbed50fbeb382a65cca8d04f801dc03fed0a54->enter($__internal_07e1b858603e4e184dc403e8d0dbed50fbeb382a65cca8d04f801dc03fed0a54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
\t<p>
\t\tPour télécharger une image
\t</p>
";
        
        $__internal_07e1b858603e4e184dc403e8d0dbed50fbeb382a65cca8d04f801dc03fed0a54->leave($__internal_07e1b858603e4e184dc403e8d0dbed50fbeb382a65cca8d04f801dc03fed0a54_prof);

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
