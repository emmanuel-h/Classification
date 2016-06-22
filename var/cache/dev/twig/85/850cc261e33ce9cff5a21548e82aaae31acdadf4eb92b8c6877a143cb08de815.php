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
        $__internal_a123c7f9b0521f57d8108b248b898d100ccbabbdc22a83dbe8f70f08d09fd60d = $this->env->getExtension("native_profiler");
        $__internal_a123c7f9b0521f57d8108b248b898d100ccbabbdc22a83dbe8f70f08d09fd60d->enter($__internal_a123c7f9b0521f57d8108b248b898d100ccbabbdc22a83dbe8f70f08d09fd60d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/layoutGeneral.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a123c7f9b0521f57d8108b248b898d100ccbabbdc22a83dbe8f70f08d09fd60d->leave($__internal_a123c7f9b0521f57d8108b248b898d100ccbabbdc22a83dbe8f70f08d09fd60d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6a52a5df76f92782082b79f0f529912fb0d9724d22de054f5e7901fc5db16c97 = $this->env->getExtension("native_profiler");
        $__internal_6a52a5df76f92782082b79f0f529912fb0d9724d22de054f5e7901fc5db16c97->enter($__internal_6a52a5df76f92782082b79f0f529912fb0d9724d22de054f5e7901fc5db16c97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    \t";
        // line 5
        $this->displayBlock('LIFOClassif_body', $context, $blocks);
        // line 7
        echo "    \t
    ";
        
        $__internal_6a52a5df76f92782082b79f0f529912fb0d9724d22de054f5e7901fc5db16c97->leave($__internal_6a52a5df76f92782082b79f0f529912fb0d9724d22de054f5e7901fc5db16c97_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_fef5b56e4844b027ef54a1f74f23f55199105792ad6c97b40ffca45436c25192 = $this->env->getExtension("native_profiler");
        $__internal_fef5b56e4844b027ef54a1f74f23f55199105792ad6c97b40ffca45436c25192->enter($__internal_fef5b56e4844b027ef54a1f74f23f55199105792ad6c97b40ffca45436c25192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "    \t";
        
        $__internal_fef5b56e4844b027ef54a1f74f23f55199105792ad6c97b40ffca45436c25192->leave($__internal_fef5b56e4844b027ef54a1f74f23f55199105792ad6c97b40ffca45436c25192_prof);

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
