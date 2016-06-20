<?php

/* @LIFOClassif/layoutGeneral.html.twig */
class __TwigTemplate_92ffdd026c92cb435e6b726c60ff8095ea19bec95e56589508b6bafa81643146 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@LIFOClassif/layoutGeneral.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'LIFOClassif_body' => array($this, 'block_LIFOClassif_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a0406b014b24df4cc0020a080ca0434590f7b4412a54a6790c984ce8f2d3c829 = $this->env->getExtension("native_profiler");
        $__internal_a0406b014b24df4cc0020a080ca0434590f7b4412a54a6790c984ce8f2d3c829->enter($__internal_a0406b014b24df4cc0020a080ca0434590f7b4412a54a6790c984ce8f2d3c829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/layoutGeneral.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0406b014b24df4cc0020a080ca0434590f7b4412a54a6790c984ce8f2d3c829->leave($__internal_a0406b014b24df4cc0020a080ca0434590f7b4412a54a6790c984ce8f2d3c829_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b1a0de9844fe4a2c94b9f6cef502bb40b381245a5ce65bf4f8b89ac0884482e0 = $this->env->getExtension("native_profiler");
        $__internal_b1a0de9844fe4a2c94b9f6cef502bb40b381245a5ce65bf4f8b89ac0884482e0->enter($__internal_b1a0de9844fe4a2c94b9f6cef502bb40b381245a5ce65bf4f8b89ac0884482e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    \t";
        // line 5
        $this->displayBlock('LIFOClassif_body', $context, $blocks);
        // line 7
        echo "    \t
    ";
        
        $__internal_b1a0de9844fe4a2c94b9f6cef502bb40b381245a5ce65bf4f8b89ac0884482e0->leave($__internal_b1a0de9844fe4a2c94b9f6cef502bb40b381245a5ce65bf4f8b89ac0884482e0_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_36d3ac4681cb32f1bf02444eb2dac52489546d8d296050e47ff84b1849cbfb8e = $this->env->getExtension("native_profiler");
        $__internal_36d3ac4681cb32f1bf02444eb2dac52489546d8d296050e47ff84b1849cbfb8e->enter($__internal_36d3ac4681cb32f1bf02444eb2dac52489546d8d296050e47ff84b1849cbfb8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "    \t";
        
        $__internal_36d3ac4681cb32f1bf02444eb2dac52489546d8d296050e47ff84b1849cbfb8e->leave($__internal_36d3ac4681cb32f1bf02444eb2dac52489546d8d296050e47ff84b1849cbfb8e_prof);

    }

    public function getTemplateName()
    {
        return "@LIFOClassif/layoutGeneral.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 6,  54 => 5,  46 => 7,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/*     {% block body %}*/
/*     */
/*     	{% block LIFOClassif_body %}*/
/*     	{% endblock %}*/
/*     	*/
/*     {% endblock %}*/
/* */
