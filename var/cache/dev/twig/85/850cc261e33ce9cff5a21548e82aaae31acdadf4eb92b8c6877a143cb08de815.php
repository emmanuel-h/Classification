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
        $__internal_fdaa89d12f238554c8014761ac1e0f6511181dae02de4faab129008031ea7431 = $this->env->getExtension("native_profiler");
        $__internal_fdaa89d12f238554c8014761ac1e0f6511181dae02de4faab129008031ea7431->enter($__internal_fdaa89d12f238554c8014761ac1e0f6511181dae02de4faab129008031ea7431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/layoutGeneral.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fdaa89d12f238554c8014761ac1e0f6511181dae02de4faab129008031ea7431->leave($__internal_fdaa89d12f238554c8014761ac1e0f6511181dae02de4faab129008031ea7431_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f141c5bbdf5b05b6c7af137533066ee6965648a8c615ec76c50cecb4a29f96fe = $this->env->getExtension("native_profiler");
        $__internal_f141c5bbdf5b05b6c7af137533066ee6965648a8c615ec76c50cecb4a29f96fe->enter($__internal_f141c5bbdf5b05b6c7af137533066ee6965648a8c615ec76c50cecb4a29f96fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    \t";
        // line 5
        $this->displayBlock('LIFOClassif_body', $context, $blocks);
        // line 7
        echo "    \t
    ";
        
        $__internal_f141c5bbdf5b05b6c7af137533066ee6965648a8c615ec76c50cecb4a29f96fe->leave($__internal_f141c5bbdf5b05b6c7af137533066ee6965648a8c615ec76c50cecb4a29f96fe_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_21c3593ade3c4392ed641086602d1df17c1c764fa012d1ab60c724508965af66 = $this->env->getExtension("native_profiler");
        $__internal_21c3593ade3c4392ed641086602d1df17c1c764fa012d1ab60c724508965af66->enter($__internal_21c3593ade3c4392ed641086602d1df17c1c764fa012d1ab60c724508965af66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "    \t";
        
        $__internal_21c3593ade3c4392ed641086602d1df17c1c764fa012d1ab60c724508965af66->leave($__internal_21c3593ade3c4392ed641086602d1df17c1c764fa012d1ab60c724508965af66_prof);

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
