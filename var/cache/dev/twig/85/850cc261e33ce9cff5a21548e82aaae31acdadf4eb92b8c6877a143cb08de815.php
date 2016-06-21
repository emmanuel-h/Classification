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
        $__internal_4ce68ab1615381de9716e8a89d8b512a1bde264d3b6e7817bfbe8de821344f7d = $this->env->getExtension("native_profiler");
        $__internal_4ce68ab1615381de9716e8a89d8b512a1bde264d3b6e7817bfbe8de821344f7d->enter($__internal_4ce68ab1615381de9716e8a89d8b512a1bde264d3b6e7817bfbe8de821344f7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/layoutGeneral.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ce68ab1615381de9716e8a89d8b512a1bde264d3b6e7817bfbe8de821344f7d->leave($__internal_4ce68ab1615381de9716e8a89d8b512a1bde264d3b6e7817bfbe8de821344f7d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f8195d6354619c0ed572ece19e7376913007f21823de44df40decf43265e53c2 = $this->env->getExtension("native_profiler");
        $__internal_f8195d6354619c0ed572ece19e7376913007f21823de44df40decf43265e53c2->enter($__internal_f8195d6354619c0ed572ece19e7376913007f21823de44df40decf43265e53c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    \t";
        // line 5
        $this->displayBlock('LIFOClassif_body', $context, $blocks);
        // line 7
        echo "    \t
    ";
        
        $__internal_f8195d6354619c0ed572ece19e7376913007f21823de44df40decf43265e53c2->leave($__internal_f8195d6354619c0ed572ece19e7376913007f21823de44df40decf43265e53c2_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_9333050989ca9e7dd7ef49942b9cb88c27adb93d3030b2cee4a8ce01ca250ca7 = $this->env->getExtension("native_profiler");
        $__internal_9333050989ca9e7dd7ef49942b9cb88c27adb93d3030b2cee4a8ce01ca250ca7->enter($__internal_9333050989ca9e7dd7ef49942b9cb88c27adb93d3030b2cee4a8ce01ca250ca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "    \t";
        
        $__internal_9333050989ca9e7dd7ef49942b9cb88c27adb93d3030b2cee4a8ce01ca250ca7->leave($__internal_9333050989ca9e7dd7ef49942b9cb88c27adb93d3030b2cee4a8ce01ca250ca7_prof);

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
