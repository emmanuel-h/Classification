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
        $__internal_b684a02774233d0ea697495b0294544be82c93bf97a80bf2fa17aaf699d99e2a = $this->env->getExtension("native_profiler");
        $__internal_b684a02774233d0ea697495b0294544be82c93bf97a80bf2fa17aaf699d99e2a->enter($__internal_b684a02774233d0ea697495b0294544be82c93bf97a80bf2fa17aaf699d99e2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Platform:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b684a02774233d0ea697495b0294544be82c93bf97a80bf2fa17aaf699d99e2a->leave($__internal_b684a02774233d0ea697495b0294544be82c93bf97a80bf2fa17aaf699d99e2a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f1aa8d956fb443613f9feca0dd42fa767011ac9291c66f5d5629bdddb135d129 = $this->env->getExtension("native_profiler");
        $__internal_f1aa8d956fb443613f9feca0dd42fa767011ac9291c66f5d5629bdddb135d129->enter($__internal_f1aa8d956fb443613f9feca0dd42fa767011ac9291c66f5d5629bdddb135d129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index";
        
        $__internal_f1aa8d956fb443613f9feca0dd42fa767011ac9291c66f5d5629bdddb135d129->leave($__internal_f1aa8d956fb443613f9feca0dd42fa767011ac9291c66f5d5629bdddb135d129_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2411af716216454427db67b2d2ef11f510fffd4605f182b254814634895e7691 = $this->env->getExtension("native_profiler");
        $__internal_2411af716216454427db67b2d2ef11f510fffd4605f182b254814634895e7691->enter($__internal_2411af716216454427db67b2d2ef11f510fffd4605f182b254814634895e7691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<p>
\t\tBienvenue sur l'outil d'aide à la classification de tesson
\t</p>
";
        
        $__internal_2411af716216454427db67b2d2ef11f510fffd4605f182b254814634895e7691->leave($__internal_2411af716216454427db67b2d2ef11f510fffd4605f182b254814634895e7691_prof);

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
