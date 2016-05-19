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
        $__internal_5efd54f24875d425b056638383e0cc48f0c31712c9070271be069f13a6d9558d = $this->env->getExtension("native_profiler");
        $__internal_5efd54f24875d425b056638383e0cc48f0c31712c9070271be069f13a6d9558d->enter($__internal_5efd54f24875d425b056638383e0cc48f0c31712c9070271be069f13a6d9558d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Platform:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5efd54f24875d425b056638383e0cc48f0c31712c9070271be069f13a6d9558d->leave($__internal_5efd54f24875d425b056638383e0cc48f0c31712c9070271be069f13a6d9558d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_45aefa9ae2b43143c2ffc3d868730a907f9f5533322982195455cf930dbd87b7 = $this->env->getExtension("native_profiler");
        $__internal_45aefa9ae2b43143c2ffc3d868730a907f9f5533322982195455cf930dbd87b7->enter($__internal_45aefa9ae2b43143c2ffc3d868730a907f9f5533322982195455cf930dbd87b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index";
        
        $__internal_45aefa9ae2b43143c2ffc3d868730a907f9f5533322982195455cf930dbd87b7->leave($__internal_45aefa9ae2b43143c2ffc3d868730a907f9f5533322982195455cf930dbd87b7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_71637728f744b32a2c8569d8964f545c853666c0a981b24d4874451de4e44da8 = $this->env->getExtension("native_profiler");
        $__internal_71637728f744b32a2c8569d8964f545c853666c0a981b24d4874451de4e44da8->enter($__internal_71637728f744b32a2c8569d8964f545c853666c0a981b24d4874451de4e44da8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<p>
\t\tBienvenue sur l'outil d'aide à la classification de tesson
\t</p>
";
        
        $__internal_71637728f744b32a2c8569d8964f545c853666c0a981b24d4874451de4e44da8->leave($__internal_71637728f744b32a2c8569d8964f545c853666c0a981b24d4874451de4e44da8_prof);

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
