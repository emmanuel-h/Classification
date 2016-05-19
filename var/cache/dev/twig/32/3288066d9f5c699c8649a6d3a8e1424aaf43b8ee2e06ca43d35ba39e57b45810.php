<?php

/* @LIFOClassif/layout.html.twig */
class __TwigTemplate_f2cae39490c58d5fd618d95e7e40c21f88214b6549a76c3f5253e5bad9cf5d51 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@LIFOClassif/layout.html.twig", 1);
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
        $__internal_26a7c31e091b2bea34e81e0fd3a22f1f05599f382d704d3cfce43140561412d1 = $this->env->getExtension("native_profiler");
        $__internal_26a7c31e091b2bea34e81e0fd3a22f1f05599f382d704d3cfce43140561412d1->enter($__internal_26a7c31e091b2bea34e81e0fd3a22f1f05599f382d704d3cfce43140561412d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26a7c31e091b2bea34e81e0fd3a22f1f05599f382d704d3cfce43140561412d1->leave($__internal_26a7c31e091b2bea34e81e0fd3a22f1f05599f382d704d3cfce43140561412d1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b027f2aea6e43f30cd48597976224c9b64d3f964a623e7e7dfbad2a8b5fef247 = $this->env->getExtension("native_profiler");
        $__internal_b027f2aea6e43f30cd48597976224c9b64d3f964a623e7e7dfbad2a8b5fef247->enter($__internal_b027f2aea6e43f30cd48597976224c9b64d3f964a623e7e7dfbad2a8b5fef247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    \t";
        // line 5
        $this->displayBlock('LIFOClassif_body', $context, $blocks);
        // line 7
        echo "    \t
    ";
        
        $__internal_b027f2aea6e43f30cd48597976224c9b64d3f964a623e7e7dfbad2a8b5fef247->leave($__internal_b027f2aea6e43f30cd48597976224c9b64d3f964a623e7e7dfbad2a8b5fef247_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_e1f0a7b1c155a45c90111de1315b7ab1df5792571fbfd88accfdbfc52d5a693a = $this->env->getExtension("native_profiler");
        $__internal_e1f0a7b1c155a45c90111de1315b7ab1df5792571fbfd88accfdbfc52d5a693a->enter($__internal_e1f0a7b1c155a45c90111de1315b7ab1df5792571fbfd88accfdbfc52d5a693a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "    \t";
        
        $__internal_e1f0a7b1c155a45c90111de1315b7ab1df5792571fbfd88accfdbfc52d5a693a->leave($__internal_e1f0a7b1c155a45c90111de1315b7ab1df5792571fbfd88accfdbfc52d5a693a_prof);

    }

    public function getTemplateName()
    {
        return "@LIFOClassif/layout.html.twig";
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
