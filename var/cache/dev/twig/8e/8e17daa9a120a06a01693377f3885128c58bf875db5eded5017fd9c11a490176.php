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
        $__internal_a058eec9e12860129da8cd1a265af63170a25f32f0e937dba461583cbb8475f2 = $this->env->getExtension("native_profiler");
        $__internal_a058eec9e12860129da8cd1a265af63170a25f32f0e937dba461583cbb8475f2->enter($__internal_a058eec9e12860129da8cd1a265af63170a25f32f0e937dba461583cbb8475f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Platform/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a058eec9e12860129da8cd1a265af63170a25f32f0e937dba461583cbb8475f2->leave($__internal_a058eec9e12860129da8cd1a265af63170a25f32f0e937dba461583cbb8475f2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d7159bcc91ffc3f87e00cb5d3a9b4630b36230411df4bbfdac6886562040f33e = $this->env->getExtension("native_profiler");
        $__internal_d7159bcc91ffc3f87e00cb5d3a9b4630b36230411df4bbfdac6886562040f33e->enter($__internal_d7159bcc91ffc3f87e00cb5d3a9b4630b36230411df4bbfdac6886562040f33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index";
        
        $__internal_d7159bcc91ffc3f87e00cb5d3a9b4630b36230411df4bbfdac6886562040f33e->leave($__internal_d7159bcc91ffc3f87e00cb5d3a9b4630b36230411df4bbfdac6886562040f33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_81e152af08474b2f6955c11ec9954a9f3348b9663876ba63200eca4f0fe43746 = $this->env->getExtension("native_profiler");
        $__internal_81e152af08474b2f6955c11ec9954a9f3348b9663876ba63200eca4f0fe43746->enter($__internal_81e152af08474b2f6955c11ec9954a9f3348b9663876ba63200eca4f0fe43746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<p>
\t\tBienvenue sur l'outil d'aide à la classification de tesson
\t</p>
";
        
        $__internal_81e152af08474b2f6955c11ec9954a9f3348b9663876ba63200eca4f0fe43746->leave($__internal_81e152af08474b2f6955c11ec9954a9f3348b9663876ba63200eca4f0fe43746_prof);

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
