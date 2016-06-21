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
        $__internal_393142aafafc18770e2c6b203c818b798fd38d0b5275b9267e24482809dbed95 = $this->env->getExtension("native_profiler");
        $__internal_393142aafafc18770e2c6b203c818b798fd38d0b5275b9267e24482809dbed95->enter($__internal_393142aafafc18770e2c6b203c818b798fd38d0b5275b9267e24482809dbed95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/layoutAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_393142aafafc18770e2c6b203c818b798fd38d0b5275b9267e24482809dbed95->leave($__internal_393142aafafc18770e2c6b203c818b798fd38d0b5275b9267e24482809dbed95_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2714522cf8a44c48f4513cd863ae96abe0bb9196106f49e645e8e13681474d50 = $this->env->getExtension("native_profiler");
        $__internal_2714522cf8a44c48f4513cd863ae96abe0bb9196106f49e645e8e13681474d50->enter($__internal_2714522cf8a44c48f4513cd863ae96abe0bb9196106f49e645e8e13681474d50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    \t";
        // line 5
        $this->displayBlock('LIFOClassif_body', $context, $blocks);
        // line 7
        echo "    \t
    ";
        
        $__internal_2714522cf8a44c48f4513cd863ae96abe0bb9196106f49e645e8e13681474d50->leave($__internal_2714522cf8a44c48f4513cd863ae96abe0bb9196106f49e645e8e13681474d50_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_53837c6a68002c0b42c7a8604915b393a691f302d7d81751e0ac354fd2f17844 = $this->env->getExtension("native_profiler");
        $__internal_53837c6a68002c0b42c7a8604915b393a691f302d7d81751e0ac354fd2f17844->enter($__internal_53837c6a68002c0b42c7a8604915b393a691f302d7d81751e0ac354fd2f17844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "    \t";
        
        $__internal_53837c6a68002c0b42c7a8604915b393a691f302d7d81751e0ac354fd2f17844->leave($__internal_53837c6a68002c0b42c7a8604915b393a691f302d7d81751e0ac354fd2f17844_prof);

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
