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
        $__internal_d878f50ee52c91bfd1f0f9cc30fcda3c75276b285bf628f1c9f0032ab420264e = $this->env->getExtension("native_profiler");
        $__internal_d878f50ee52c91bfd1f0f9cc30fcda3c75276b285bf628f1c9f0032ab420264e->enter($__internal_d878f50ee52c91bfd1f0f9cc30fcda3c75276b285bf628f1c9f0032ab420264e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/layoutAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d878f50ee52c91bfd1f0f9cc30fcda3c75276b285bf628f1c9f0032ab420264e->leave($__internal_d878f50ee52c91bfd1f0f9cc30fcda3c75276b285bf628f1c9f0032ab420264e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e50ba9595ce52394c281eb22f880a27d642b16fc1227ed13efc90edd596a782 = $this->env->getExtension("native_profiler");
        $__internal_4e50ba9595ce52394c281eb22f880a27d642b16fc1227ed13efc90edd596a782->enter($__internal_4e50ba9595ce52394c281eb22f880a27d642b16fc1227ed13efc90edd596a782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    \t";
        // line 5
        $this->displayBlock('LIFOClassif_body', $context, $blocks);
        // line 7
        echo "    \t
    ";
        
        $__internal_4e50ba9595ce52394c281eb22f880a27d642b16fc1227ed13efc90edd596a782->leave($__internal_4e50ba9595ce52394c281eb22f880a27d642b16fc1227ed13efc90edd596a782_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_45fddcc1137334017ee24ef5c08fd46cbc1f0a5049de0106f01d257983e6ffd8 = $this->env->getExtension("native_profiler");
        $__internal_45fddcc1137334017ee24ef5c08fd46cbc1f0a5049de0106f01d257983e6ffd8->enter($__internal_45fddcc1137334017ee24ef5c08fd46cbc1f0a5049de0106f01d257983e6ffd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "    \t";
        
        $__internal_45fddcc1137334017ee24ef5c08fd46cbc1f0a5049de0106f01d257983e6ffd8->leave($__internal_45fddcc1137334017ee24ef5c08fd46cbc1f0a5049de0106f01d257983e6ffd8_prof);

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
