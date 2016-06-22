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
        $__internal_d9440046dd96c182634e8f0c6324f12930619f3f144d37cf50958f15f670a7ba = $this->env->getExtension("native_profiler");
        $__internal_d9440046dd96c182634e8f0c6324f12930619f3f144d37cf50958f15f670a7ba->enter($__internal_d9440046dd96c182634e8f0c6324f12930619f3f144d37cf50958f15f670a7ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Platform/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9440046dd96c182634e8f0c6324f12930619f3f144d37cf50958f15f670a7ba->leave($__internal_d9440046dd96c182634e8f0c6324f12930619f3f144d37cf50958f15f670a7ba_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c8e629622571e71cd3174e205c3fde6e59df394bb51ae17de3f77c9ac4b765fb = $this->env->getExtension("native_profiler");
        $__internal_c8e629622571e71cd3174e205c3fde6e59df394bb51ae17de3f77c9ac4b765fb->enter($__internal_c8e629622571e71cd3174e205c3fde6e59df394bb51ae17de3f77c9ac4b765fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index";
        
        $__internal_c8e629622571e71cd3174e205c3fde6e59df394bb51ae17de3f77c9ac4b765fb->leave($__internal_c8e629622571e71cd3174e205c3fde6e59df394bb51ae17de3f77c9ac4b765fb_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3f0b1a2e11f2492f8ca9f4e320ba5134703a42785aea33eaab9da6055ec307b1 = $this->env->getExtension("native_profiler");
        $__internal_3f0b1a2e11f2492f8ca9f4e320ba5134703a42785aea33eaab9da6055ec307b1->enter($__internal_3f0b1a2e11f2492f8ca9f4e320ba5134703a42785aea33eaab9da6055ec307b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<p>
\t\tBienvenue sur l'outil d'aide à la classification de tesson
\t</p>
";
        
        $__internal_3f0b1a2e11f2492f8ca9f4e320ba5134703a42785aea33eaab9da6055ec307b1->leave($__internal_3f0b1a2e11f2492f8ca9f4e320ba5134703a42785aea33eaab9da6055ec307b1_prof);

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
