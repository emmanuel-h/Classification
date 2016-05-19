<?php

/* LIFOClassifBundle:Platform:recherche.html.twig */
class __TwigTemplate_d009ef91ff410b0ab263261e5f5c37facc0417e2776bb4574da2d003a98a0764 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layoutGeneral.html.twig", "LIFOClassifBundle:Platform:recherche.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'LIFOClassif_body' => array($this, 'block_LIFOClassif_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LIFOClassifBundle::layoutGeneral.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_16dbb14a22a0723d9119c0c59ca1fa7fe196cfddbf689fcdcf9d10d3ace58b1a = $this->env->getExtension("native_profiler");
        $__internal_16dbb14a22a0723d9119c0c59ca1fa7fe196cfddbf689fcdcf9d10d3ace58b1a->enter($__internal_16dbb14a22a0723d9119c0c59ca1fa7fe196cfddbf689fcdcf9d10d3ace58b1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Platform:recherche.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16dbb14a22a0723d9119c0c59ca1fa7fe196cfddbf689fcdcf9d10d3ace58b1a->leave($__internal_16dbb14a22a0723d9119c0c59ca1fa7fe196cfddbf689fcdcf9d10d3ace58b1a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b0b959cef41903f4df85960cb37fe5171524f2be0dc2ccbe634f667b892ffca2 = $this->env->getExtension("native_profiler");
        $__internal_b0b959cef41903f4df85960cb37fe5171524f2be0dc2ccbe634f667b892ffca2->enter($__internal_b0b959cef41903f4df85960cb37fe5171524f2be0dc2ccbe634f667b892ffca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Recherche";
        
        $__internal_b0b959cef41903f4df85960cb37fe5171524f2be0dc2ccbe634f667b892ffca2->leave($__internal_b0b959cef41903f4df85960cb37fe5171524f2be0dc2ccbe634f667b892ffca2_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_4c33617627ae534b5065ea8e9f41041b2b9caed1fadd01c71e7e9b4c1a319f7b = $this->env->getExtension("native_profiler");
        $__internal_4c33617627ae534b5065ea8e9f41041b2b9caed1fadd01c71e7e9b4c1a319f7b->enter($__internal_4c33617627ae534b5065ea8e9f41041b2b9caed1fadd01c71e7e9b4c1a319f7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "\t<p>
\t";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
\t</p>
";
        
        $__internal_4c33617627ae534b5065ea8e9f41041b2b9caed1fadd01c71e7e9b4c1a319f7b->leave($__internal_4c33617627ae534b5065ea8e9f41041b2b9caed1fadd01c71e7e9b4c1a319f7b_prof);

    }

    public function getTemplateName()
    {
        return "LIFOClassifBundle:Platform:recherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 7,  54 => 6,  48 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "LIFOClassifBundle::layoutGeneral.html.twig" %}*/
/* */
/* {% block title %}{{ parent() }} - Recherche{% endblock %}*/
/* */
/* {% block LIFOClassif_body %}*/
/* 	<p>*/
/* 	{{ form(form) }}*/
/* 	</p>*/
/* {% endblock %}*/
