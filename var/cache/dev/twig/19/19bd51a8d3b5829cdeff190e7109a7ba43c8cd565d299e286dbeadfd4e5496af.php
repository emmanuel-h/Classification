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
        $__internal_6fd8089b671f2400c6c95246f2f5f5c121b82c32011876cab4051d73e4b68182 = $this->env->getExtension("native_profiler");
        $__internal_6fd8089b671f2400c6c95246f2f5f5c121b82c32011876cab4051d73e4b68182->enter($__internal_6fd8089b671f2400c6c95246f2f5f5c121b82c32011876cab4051d73e4b68182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Platform/telechargement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6fd8089b671f2400c6c95246f2f5f5c121b82c32011876cab4051d73e4b68182->leave($__internal_6fd8089b671f2400c6c95246f2f5f5c121b82c32011876cab4051d73e4b68182_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d3a96c2c817ed40ad3563cbb0f14ae360dc6bb44132173102abc812f9b8d4627 = $this->env->getExtension("native_profiler");
        $__internal_d3a96c2c817ed40ad3563cbb0f14ae360dc6bb44132173102abc812f9b8d4627->enter($__internal_d3a96c2c817ed40ad3563cbb0f14ae360dc6bb44132173102abc812f9b8d4627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Téléchargement";
        
        $__internal_d3a96c2c817ed40ad3563cbb0f14ae360dc6bb44132173102abc812f9b8d4627->leave($__internal_d3a96c2c817ed40ad3563cbb0f14ae360dc6bb44132173102abc812f9b8d4627_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b6030544a60d1ee478f5fe1a29b11015f6a9c781ded3bf3a0733b09b01ace37b = $this->env->getExtension("native_profiler");
        $__internal_b6030544a60d1ee478f5fe1a29b11015f6a9c781ded3bf3a0733b09b01ace37b->enter($__internal_b6030544a60d1ee478f5fe1a29b11015f6a9c781ded3bf3a0733b09b01ace37b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
\t<p>
\t\tPour télécharger une image
\t</p>
";
        
        $__internal_b6030544a60d1ee478f5fe1a29b11015f6a9c781ded3bf3a0733b09b01ace37b->leave($__internal_b6030544a60d1ee478f5fe1a29b11015f6a9c781ded3bf3a0733b09b01ace37b_prof);

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
