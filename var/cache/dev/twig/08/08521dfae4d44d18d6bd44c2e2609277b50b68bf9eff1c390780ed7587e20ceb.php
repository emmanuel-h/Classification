<?php

/* @LIFOClassif/layoutAdmin.html.twig */
class __TwigTemplate_738ca7cff67840c621883672b451ebea236f34427d0386e3a0096ddac1f6b228 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@LIFOClassif/layoutAdmin.html.twig", 1);
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
        $__internal_53940d54ae899a016d819c0434723d69d55993594d8538767564bf4f5d7b7fbd = $this->env->getExtension("native_profiler");
        $__internal_53940d54ae899a016d819c0434723d69d55993594d8538767564bf4f5d7b7fbd->enter($__internal_53940d54ae899a016d819c0434723d69d55993594d8538767564bf4f5d7b7fbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/layoutAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53940d54ae899a016d819c0434723d69d55993594d8538767564bf4f5d7b7fbd->leave($__internal_53940d54ae899a016d819c0434723d69d55993594d8538767564bf4f5d7b7fbd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_280a559809d4c2660d0fb9a14d224ad7460854c3cbdd69ed374d946d206bb92d = $this->env->getExtension("native_profiler");
        $__internal_280a559809d4c2660d0fb9a14d224ad7460854c3cbdd69ed374d946d206bb92d->enter($__internal_280a559809d4c2660d0fb9a14d224ad7460854c3cbdd69ed374d946d206bb92d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    \t";
        // line 5
        $this->displayBlock('LIFOClassif_body', $context, $blocks);
        // line 7
        echo "    \t
    ";
        
        $__internal_280a559809d4c2660d0fb9a14d224ad7460854c3cbdd69ed374d946d206bb92d->leave($__internal_280a559809d4c2660d0fb9a14d224ad7460854c3cbdd69ed374d946d206bb92d_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_2a7fb02acd47e8e81b10a5a819861cdd42a2d0a29ce2da4b2071b6a7b040e420 = $this->env->getExtension("native_profiler");
        $__internal_2a7fb02acd47e8e81b10a5a819861cdd42a2d0a29ce2da4b2071b6a7b040e420->enter($__internal_2a7fb02acd47e8e81b10a5a819861cdd42a2d0a29ce2da4b2071b6a7b040e420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "    \t";
        
        $__internal_2a7fb02acd47e8e81b10a5a819861cdd42a2d0a29ce2da4b2071b6a7b040e420->leave($__internal_2a7fb02acd47e8e81b10a5a819861cdd42a2d0a29ce2da4b2071b6a7b040e420_prof);

    }

    public function getTemplateName()
    {
        return "@LIFOClassif/layoutAdmin.html.twig";
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
