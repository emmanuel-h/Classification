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
        $__internal_45b064752b6d407e8e05f8ad1b05447fa2372aa25670db906b88d903e8279595 = $this->env->getExtension("native_profiler");
        $__internal_45b064752b6d407e8e05f8ad1b05447fa2372aa25670db906b88d903e8279595->enter($__internal_45b064752b6d407e8e05f8ad1b05447fa2372aa25670db906b88d903e8279595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/layoutGeneral.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45b064752b6d407e8e05f8ad1b05447fa2372aa25670db906b88d903e8279595->leave($__internal_45b064752b6d407e8e05f8ad1b05447fa2372aa25670db906b88d903e8279595_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_162c024685940010ec50a1233d2d3f2345332d3394a491fb8143bd1693141942 = $this->env->getExtension("native_profiler");
        $__internal_162c024685940010ec50a1233d2d3f2345332d3394a491fb8143bd1693141942->enter($__internal_162c024685940010ec50a1233d2d3f2345332d3394a491fb8143bd1693141942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    \t";
        // line 5
        $this->displayBlock('LIFOClassif_body', $context, $blocks);
        // line 7
        echo "    \t
    ";
        
        $__internal_162c024685940010ec50a1233d2d3f2345332d3394a491fb8143bd1693141942->leave($__internal_162c024685940010ec50a1233d2d3f2345332d3394a491fb8143bd1693141942_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_c6747f7f7667ce20dfe20b5763abcd0bca3a561e380ef277b4d55029ec097177 = $this->env->getExtension("native_profiler");
        $__internal_c6747f7f7667ce20dfe20b5763abcd0bca3a561e380ef277b4d55029ec097177->enter($__internal_c6747f7f7667ce20dfe20b5763abcd0bca3a561e380ef277b4d55029ec097177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "    \t";
        
        $__internal_c6747f7f7667ce20dfe20b5763abcd0bca3a561e380ef277b4d55029ec097177->leave($__internal_c6747f7f7667ce20dfe20b5763abcd0bca3a561e380ef277b4d55029ec097177_prof);

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
