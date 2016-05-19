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
        $__internal_cf9f37c6ce4ae1a7b5ee104040f8f163798492358f2839f2dc1cd6e6424c3f76 = $this->env->getExtension("native_profiler");
        $__internal_cf9f37c6ce4ae1a7b5ee104040f8f163798492358f2839f2dc1cd6e6424c3f76->enter($__internal_cf9f37c6ce4ae1a7b5ee104040f8f163798492358f2839f2dc1cd6e6424c3f76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Platform/classification.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf9f37c6ce4ae1a7b5ee104040f8f163798492358f2839f2dc1cd6e6424c3f76->leave($__internal_cf9f37c6ce4ae1a7b5ee104040f8f163798492358f2839f2dc1cd6e6424c3f76_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_94e6ce7f5a4a00af57b9c14e12bb0f23a7994b66c9d131b2533218dcfb353478 = $this->env->getExtension("native_profiler");
        $__internal_94e6ce7f5a4a00af57b9c14e12bb0f23a7994b66c9d131b2533218dcfb353478->enter($__internal_94e6ce7f5a4a00af57b9c14e12bb0f23a7994b66c9d131b2533218dcfb353478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Classification";
        
        $__internal_94e6ce7f5a4a00af57b9c14e12bb0f23a7994b66c9d131b2533218dcfb353478->leave($__internal_94e6ce7f5a4a00af57b9c14e12bb0f23a7994b66c9d131b2533218dcfb353478_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2d9fb3952ad3ab609410424667e0cd89b755f9df0d675ddabe2c55b5f2479b27 = $this->env->getExtension("native_profiler");
        $__internal_2d9fb3952ad3ab609410424667e0cd89b755f9df0d675ddabe2c55b5f2479b27->enter($__internal_2d9fb3952ad3ab609410424667e0cd89b755f9df0d675ddabe2c55b5f2479b27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
\t<p>
\t\tPour classifier un tesson
\t</p>
";
        
        $__internal_2d9fb3952ad3ab609410424667e0cd89b755f9df0d675ddabe2c55b5f2479b27->leave($__internal_2d9fb3952ad3ab609410424667e0cd89b755f9df0d675ddabe2c55b5f2479b27_prof);

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
