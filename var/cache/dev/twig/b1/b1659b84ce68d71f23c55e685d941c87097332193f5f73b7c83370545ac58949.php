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
        $__internal_dc626cb05dc709e938fa5bcb41235585d71893f71e4726de7b5dd2520db23f35 = $this->env->getExtension("native_profiler");
        $__internal_dc626cb05dc709e938fa5bcb41235585d71893f71e4726de7b5dd2520db23f35->enter($__internal_dc626cb05dc709e938fa5bcb41235585d71893f71e4726de7b5dd2520db23f35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Platform:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc626cb05dc709e938fa5bcb41235585d71893f71e4726de7b5dd2520db23f35->leave($__internal_dc626cb05dc709e938fa5bcb41235585d71893f71e4726de7b5dd2520db23f35_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_964ac295be897ac30227b391185b077e494db613017ba467403b2182b544f420 = $this->env->getExtension("native_profiler");
        $__internal_964ac295be897ac30227b391185b077e494db613017ba467403b2182b544f420->enter($__internal_964ac295be897ac30227b391185b077e494db613017ba467403b2182b544f420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index";
        
        $__internal_964ac295be897ac30227b391185b077e494db613017ba467403b2182b544f420->leave($__internal_964ac295be897ac30227b391185b077e494db613017ba467403b2182b544f420_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2ee951459ad578d2ba56a8a2f7ea28dffd5ddc13f775e53bac82fb6d30085258 = $this->env->getExtension("native_profiler");
        $__internal_2ee951459ad578d2ba56a8a2f7ea28dffd5ddc13f775e53bac82fb6d30085258->enter($__internal_2ee951459ad578d2ba56a8a2f7ea28dffd5ddc13f775e53bac82fb6d30085258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<p>
\t\tBienvenue sur l'outil d'aide à la classification de tesson
\t</p>
";
        
        $__internal_2ee951459ad578d2ba56a8a2f7ea28dffd5ddc13f775e53bac82fb6d30085258->leave($__internal_2ee951459ad578d2ba56a8a2f7ea28dffd5ddc13f775e53bac82fb6d30085258_prof);

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
