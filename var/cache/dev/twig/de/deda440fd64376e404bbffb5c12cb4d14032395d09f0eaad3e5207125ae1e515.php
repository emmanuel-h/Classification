<?php

/* LIFOClassifBundle::layoutGeneral.html.twig */
class __TwigTemplate_7c296ff27bac2f8634b383bbdde8b8f943df6c3fc60db69e581587a45f5f098d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "LIFOClassifBundle::layoutGeneral.html.twig", 1);
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
        $__internal_9aaec6a1afee8c17151dec0f7547cc30b9fcf38f265936bda91962356e8db290 = $this->env->getExtension("native_profiler");
        $__internal_9aaec6a1afee8c17151dec0f7547cc30b9fcf38f265936bda91962356e8db290->enter($__internal_9aaec6a1afee8c17151dec0f7547cc30b9fcf38f265936bda91962356e8db290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle::layoutGeneral.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9aaec6a1afee8c17151dec0f7547cc30b9fcf38f265936bda91962356e8db290->leave($__internal_9aaec6a1afee8c17151dec0f7547cc30b9fcf38f265936bda91962356e8db290_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bbe03f82e8625136baaf1625c8179871adf3545bf8fd58b3f8035b27246ccfda = $this->env->getExtension("native_profiler");
        $__internal_bbe03f82e8625136baaf1625c8179871adf3545bf8fd58b3f8035b27246ccfda->enter($__internal_bbe03f82e8625136baaf1625c8179871adf3545bf8fd58b3f8035b27246ccfda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    \t";
        // line 5
        $this->displayBlock('LIFOClassif_body', $context, $blocks);
        // line 7
        echo "    \t
    ";
        
        $__internal_bbe03f82e8625136baaf1625c8179871adf3545bf8fd58b3f8035b27246ccfda->leave($__internal_bbe03f82e8625136baaf1625c8179871adf3545bf8fd58b3f8035b27246ccfda_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_b73554fb89377314fef988001dbca975f1888cdde4ce1ea9063b85de03720212 = $this->env->getExtension("native_profiler");
        $__internal_b73554fb89377314fef988001dbca975f1888cdde4ce1ea9063b85de03720212->enter($__internal_b73554fb89377314fef988001dbca975f1888cdde4ce1ea9063b85de03720212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "    \t";
        
        $__internal_b73554fb89377314fef988001dbca975f1888cdde4ce1ea9063b85de03720212->leave($__internal_b73554fb89377314fef988001dbca975f1888cdde4ce1ea9063b85de03720212_prof);

    }

    public function getTemplateName()
    {
        return "LIFOClassifBundle::layoutGeneral.html.twig";
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
