<?php

/* @LIFOClassif/Platform/classification.html.twig */
class __TwigTemplate_d48983bfe3c4f8c570de11499660b9d824df3625695829ff0a1694ec91fbe8cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layout.html.twig", "@LIFOClassif/Platform/classification.html.twig", 1);
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
        $__internal_38258bad2447d2cc71c6f1378993c6ed0d2c9d3a13ab02d0558e44d702e85cbc = $this->env->getExtension("native_profiler");
        $__internal_38258bad2447d2cc71c6f1378993c6ed0d2c9d3a13ab02d0558e44d702e85cbc->enter($__internal_38258bad2447d2cc71c6f1378993c6ed0d2c9d3a13ab02d0558e44d702e85cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Platform/classification.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38258bad2447d2cc71c6f1378993c6ed0d2c9d3a13ab02d0558e44d702e85cbc->leave($__internal_38258bad2447d2cc71c6f1378993c6ed0d2c9d3a13ab02d0558e44d702e85cbc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6b8932d49113d2189c99e431ff7a573d717fb378d6f9ae5412a0fc12c098cd67 = $this->env->getExtension("native_profiler");
        $__internal_6b8932d49113d2189c99e431ff7a573d717fb378d6f9ae5412a0fc12c098cd67->enter($__internal_6b8932d49113d2189c99e431ff7a573d717fb378d6f9ae5412a0fc12c098cd67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Classification";
        
        $__internal_6b8932d49113d2189c99e431ff7a573d717fb378d6f9ae5412a0fc12c098cd67->leave($__internal_6b8932d49113d2189c99e431ff7a573d717fb378d6f9ae5412a0fc12c098cd67_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a58774247dbfacf77af9da6549eae1e9973ccd4119d2ea88001e76057d2509e = $this->env->getExtension("native_profiler");
        $__internal_8a58774247dbfacf77af9da6549eae1e9973ccd4119d2ea88001e76057d2509e->enter($__internal_8a58774247dbfacf77af9da6549eae1e9973ccd4119d2ea88001e76057d2509e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
\t<p>
\t\tPour classifier un tesson
\t</p>
";
        
        $__internal_8a58774247dbfacf77af9da6549eae1e9973ccd4119d2ea88001e76057d2509e->leave($__internal_8a58774247dbfacf77af9da6549eae1e9973ccd4119d2ea88001e76057d2509e_prof);

    }

    public function getTemplateName()
    {
        return "@LIFOClassif/Platform/classification.html.twig";
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
/* {% block title %}{{ parent() }} - Classification{% endblock %}*/
/* */
/* {% block body %}*/
/* 	{{ parent() }}*/
/* 	<p>*/
/* 		Pour classifier un tesson*/
/* 	</p>*/
/* {% endblock %}*/
