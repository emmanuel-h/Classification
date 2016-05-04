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
        $__internal_e53c43a11e8f1b30b375c51ef41dbcac27a8b22b42bd36b80c01fce9cc7b32ef = $this->env->getExtension("native_profiler");
        $__internal_e53c43a11e8f1b30b375c51ef41dbcac27a8b22b42bd36b80c01fce9cc7b32ef->enter($__internal_e53c43a11e8f1b30b375c51ef41dbcac27a8b22b42bd36b80c01fce9cc7b32ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Platform/classification.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e53c43a11e8f1b30b375c51ef41dbcac27a8b22b42bd36b80c01fce9cc7b32ef->leave($__internal_e53c43a11e8f1b30b375c51ef41dbcac27a8b22b42bd36b80c01fce9cc7b32ef_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_57ff7bbe3c40943021f972e5d81fa77cf355a01951b2d9b5d2657cb3ee315bdf = $this->env->getExtension("native_profiler");
        $__internal_57ff7bbe3c40943021f972e5d81fa77cf355a01951b2d9b5d2657cb3ee315bdf->enter($__internal_57ff7bbe3c40943021f972e5d81fa77cf355a01951b2d9b5d2657cb3ee315bdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Classification";
        
        $__internal_57ff7bbe3c40943021f972e5d81fa77cf355a01951b2d9b5d2657cb3ee315bdf->leave($__internal_57ff7bbe3c40943021f972e5d81fa77cf355a01951b2d9b5d2657cb3ee315bdf_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_fb49010f2ae292e679e79ecc011eb1f44e2978e9c2143caadbcd45eb86613d47 = $this->env->getExtension("native_profiler");
        $__internal_fb49010f2ae292e679e79ecc011eb1f44e2978e9c2143caadbcd45eb86613d47->enter($__internal_fb49010f2ae292e679e79ecc011eb1f44e2978e9c2143caadbcd45eb86613d47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
\t<p>
\t\tPour classifier un tesson
\t</p>
";
        
        $__internal_fb49010f2ae292e679e79ecc011eb1f44e2978e9c2143caadbcd45eb86613d47->leave($__internal_fb49010f2ae292e679e79ecc011eb1f44e2978e9c2143caadbcd45eb86613d47_prof);

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
