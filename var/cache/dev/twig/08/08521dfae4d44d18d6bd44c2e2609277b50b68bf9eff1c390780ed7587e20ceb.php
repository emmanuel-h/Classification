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
        $__internal_c323daba80e19977f6dd8022dcda259791a4d3134146a6dc214bc1e584bfb301 = $this->env->getExtension("native_profiler");
        $__internal_c323daba80e19977f6dd8022dcda259791a4d3134146a6dc214bc1e584bfb301->enter($__internal_c323daba80e19977f6dd8022dcda259791a4d3134146a6dc214bc1e584bfb301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/layoutAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c323daba80e19977f6dd8022dcda259791a4d3134146a6dc214bc1e584bfb301->leave($__internal_c323daba80e19977f6dd8022dcda259791a4d3134146a6dc214bc1e584bfb301_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_925ceba1869b23f41c8f0a4a2ed70eda93cadaef305da492dbe8dcac94b9def1 = $this->env->getExtension("native_profiler");
        $__internal_925ceba1869b23f41c8f0a4a2ed70eda93cadaef305da492dbe8dcac94b9def1->enter($__internal_925ceba1869b23f41c8f0a4a2ed70eda93cadaef305da492dbe8dcac94b9def1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    \t";
        // line 5
        $this->displayBlock('LIFOClassif_body', $context, $blocks);
        // line 7
        echo "    \t
    ";
        
        $__internal_925ceba1869b23f41c8f0a4a2ed70eda93cadaef305da492dbe8dcac94b9def1->leave($__internal_925ceba1869b23f41c8f0a4a2ed70eda93cadaef305da492dbe8dcac94b9def1_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_4a213cdca1db559d9f926acda57161e165731ba99d31572063ba94b5aa40570d = $this->env->getExtension("native_profiler");
        $__internal_4a213cdca1db559d9f926acda57161e165731ba99d31572063ba94b5aa40570d->enter($__internal_4a213cdca1db559d9f926acda57161e165731ba99d31572063ba94b5aa40570d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "    \t";
        
        $__internal_4a213cdca1db559d9f926acda57161e165731ba99d31572063ba94b5aa40570d->leave($__internal_4a213cdca1db559d9f926acda57161e165731ba99d31572063ba94b5aa40570d_prof);

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
