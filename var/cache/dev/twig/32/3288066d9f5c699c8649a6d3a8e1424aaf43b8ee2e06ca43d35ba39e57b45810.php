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
        $__internal_2525f1a550966e31e5ca1a81d1ada69c7b57344ff9e527ea18e0c88055d4bdda = $this->env->getExtension("native_profiler");
        $__internal_2525f1a550966e31e5ca1a81d1ada69c7b57344ff9e527ea18e0c88055d4bdda->enter($__internal_2525f1a550966e31e5ca1a81d1ada69c7b57344ff9e527ea18e0c88055d4bdda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2525f1a550966e31e5ca1a81d1ada69c7b57344ff9e527ea18e0c88055d4bdda->leave($__internal_2525f1a550966e31e5ca1a81d1ada69c7b57344ff9e527ea18e0c88055d4bdda_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b6d24e9696a3db50a44fafeeffc1c935b26ea6900da67552d186008dcb52777a = $this->env->getExtension("native_profiler");
        $__internal_b6d24e9696a3db50a44fafeeffc1c935b26ea6900da67552d186008dcb52777a->enter($__internal_b6d24e9696a3db50a44fafeeffc1c935b26ea6900da67552d186008dcb52777a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    \t";
        // line 5
        $this->displayBlock('LIFOClassif_body', $context, $blocks);
        // line 7
        echo "    \t
    ";
        
        $__internal_b6d24e9696a3db50a44fafeeffc1c935b26ea6900da67552d186008dcb52777a->leave($__internal_b6d24e9696a3db50a44fafeeffc1c935b26ea6900da67552d186008dcb52777a_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_10c6301e12a765d7167f903b349031a48535b254a32714e2370fefec8ca0eb85 = $this->env->getExtension("native_profiler");
        $__internal_10c6301e12a765d7167f903b349031a48535b254a32714e2370fefec8ca0eb85->enter($__internal_10c6301e12a765d7167f903b349031a48535b254a32714e2370fefec8ca0eb85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "    \t";
        
        $__internal_10c6301e12a765d7167f903b349031a48535b254a32714e2370fefec8ca0eb85->leave($__internal_10c6301e12a765d7167f903b349031a48535b254a32714e2370fefec8ca0eb85_prof);

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
