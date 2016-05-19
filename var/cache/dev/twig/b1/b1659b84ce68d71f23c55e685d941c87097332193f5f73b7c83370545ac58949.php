<?php

/* LIFOClassifBundle:Platform:index.html.twig */
class __TwigTemplate_45469c73f234b31b6bec59b12ff8781d17bcdaf17f0e66c248db4e16b9295993 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layout.html.twig", "LIFOClassifBundle:Platform:index.html.twig", 1);
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
        $__internal_fb6213bfee3e601540d76f3ea5b302d05c15054198f69c1df7ec247461dd95ed = $this->env->getExtension("native_profiler");
        $__internal_fb6213bfee3e601540d76f3ea5b302d05c15054198f69c1df7ec247461dd95ed->enter($__internal_fb6213bfee3e601540d76f3ea5b302d05c15054198f69c1df7ec247461dd95ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Platform:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb6213bfee3e601540d76f3ea5b302d05c15054198f69c1df7ec247461dd95ed->leave($__internal_fb6213bfee3e601540d76f3ea5b302d05c15054198f69c1df7ec247461dd95ed_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ab63f1892288166afcbbd3ba22447a0be989d5ec02c1b537f1d53432703f95e1 = $this->env->getExtension("native_profiler");
        $__internal_ab63f1892288166afcbbd3ba22447a0be989d5ec02c1b537f1d53432703f95e1->enter($__internal_ab63f1892288166afcbbd3ba22447a0be989d5ec02c1b537f1d53432703f95e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index";
        
        $__internal_ab63f1892288166afcbbd3ba22447a0be989d5ec02c1b537f1d53432703f95e1->leave($__internal_ab63f1892288166afcbbd3ba22447a0be989d5ec02c1b537f1d53432703f95e1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6a0746a9b809ebea3810c7bae686301f5f20b8d87994b0eb7cfa92abeb296e50 = $this->env->getExtension("native_profiler");
        $__internal_6a0746a9b809ebea3810c7bae686301f5f20b8d87994b0eb7cfa92abeb296e50->enter($__internal_6a0746a9b809ebea3810c7bae686301f5f20b8d87994b0eb7cfa92abeb296e50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<p>
\t\tBienvenue sur l'outil d'aide à la classification de tesson
\t</p>
";
        
        $__internal_6a0746a9b809ebea3810c7bae686301f5f20b8d87994b0eb7cfa92abeb296e50->leave($__internal_6a0746a9b809ebea3810c7bae686301f5f20b8d87994b0eb7cfa92abeb296e50_prof);

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
/* {% extends "LIFOClassifBundle::layout.html.twig" %}*/
/* */
/* {% block title %}{{ parent() }} - Index{% endblock %}*/
/* */
/* {% block body %}*/
/* 	<p>*/
/* 		Bienvenue sur l'outil d'aide à la classification de tesson*/
/* 	</p>*/
/* {% endblock %}*/
