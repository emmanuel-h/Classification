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
        $__internal_a9a3d0d61bb367d95dfac402ff3fabcba5bd60938fc7a1e47ffeaf7b8ee10fdc = $this->env->getExtension("native_profiler");
        $__internal_a9a3d0d61bb367d95dfac402ff3fabcba5bd60938fc7a1e47ffeaf7b8ee10fdc->enter($__internal_a9a3d0d61bb367d95dfac402ff3fabcba5bd60938fc7a1e47ffeaf7b8ee10fdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle::layoutGeneral.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9a3d0d61bb367d95dfac402ff3fabcba5bd60938fc7a1e47ffeaf7b8ee10fdc->leave($__internal_a9a3d0d61bb367d95dfac402ff3fabcba5bd60938fc7a1e47ffeaf7b8ee10fdc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd6670ee8caf09dc1b85510429de9b9f79cd7e83f322be069f06fc03ddaa710e = $this->env->getExtension("native_profiler");
        $__internal_cd6670ee8caf09dc1b85510429de9b9f79cd7e83f322be069f06fc03ddaa710e->enter($__internal_cd6670ee8caf09dc1b85510429de9b9f79cd7e83f322be069f06fc03ddaa710e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    \t";
        // line 5
        $this->displayBlock('LIFOClassif_body', $context, $blocks);
        // line 7
        echo "    \t
    ";
        
        $__internal_cd6670ee8caf09dc1b85510429de9b9f79cd7e83f322be069f06fc03ddaa710e->leave($__internal_cd6670ee8caf09dc1b85510429de9b9f79cd7e83f322be069f06fc03ddaa710e_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_9904ec627666882795357a182f6f8c2fccc703bf35cffbe88c07326774a2fecc = $this->env->getExtension("native_profiler");
        $__internal_9904ec627666882795357a182f6f8c2fccc703bf35cffbe88c07326774a2fecc->enter($__internal_9904ec627666882795357a182f6f8c2fccc703bf35cffbe88c07326774a2fecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "    \t";
        
        $__internal_9904ec627666882795357a182f6f8c2fccc703bf35cffbe88c07326774a2fecc->leave($__internal_9904ec627666882795357a182f6f8c2fccc703bf35cffbe88c07326774a2fecc_prof);

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
