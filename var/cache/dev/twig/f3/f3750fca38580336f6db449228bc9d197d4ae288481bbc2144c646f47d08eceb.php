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
        $__internal_f2225cb894b29d79ba0db0ca00377f6331e6e1248cd69566b4e36658a91c448d = $this->env->getExtension("native_profiler");
        $__internal_f2225cb894b29d79ba0db0ca00377f6331e6e1248cd69566b4e36658a91c448d->enter($__internal_f2225cb894b29d79ba0db0ca00377f6331e6e1248cd69566b4e36658a91c448d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Platform:telechargement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2225cb894b29d79ba0db0ca00377f6331e6e1248cd69566b4e36658a91c448d->leave($__internal_f2225cb894b29d79ba0db0ca00377f6331e6e1248cd69566b4e36658a91c448d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_93df78b62f0cbfdc8a13608ed16664e4c751a2fed434a0cf4d6a9c5d0e1c7526 = $this->env->getExtension("native_profiler");
        $__internal_93df78b62f0cbfdc8a13608ed16664e4c751a2fed434a0cf4d6a9c5d0e1c7526->enter($__internal_93df78b62f0cbfdc8a13608ed16664e4c751a2fed434a0cf4d6a9c5d0e1c7526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Téléchargement";
        
        $__internal_93df78b62f0cbfdc8a13608ed16664e4c751a2fed434a0cf4d6a9c5d0e1c7526->leave($__internal_93df78b62f0cbfdc8a13608ed16664e4c751a2fed434a0cf4d6a9c5d0e1c7526_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b275feeb99c2ddbab2a7c2a203e031993cd387762a726b7d82e76cf4abd05851 = $this->env->getExtension("native_profiler");
        $__internal_b275feeb99c2ddbab2a7c2a203e031993cd387762a726b7d82e76cf4abd05851->enter($__internal_b275feeb99c2ddbab2a7c2a203e031993cd387762a726b7d82e76cf4abd05851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
\t<p>
\t\tPour télécharger une image
\t</p>
";
        
        $__internal_b275feeb99c2ddbab2a7c2a203e031993cd387762a726b7d82e76cf4abd05851->leave($__internal_b275feeb99c2ddbab2a7c2a203e031993cd387762a726b7d82e76cf4abd05851_prof);

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
