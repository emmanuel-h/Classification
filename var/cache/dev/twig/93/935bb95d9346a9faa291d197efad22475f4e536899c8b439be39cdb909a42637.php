<?php

/* @LIFOClassif/Platform/recherche.html.twig */
class __TwigTemplate_197a2bc7dbeeae78a123c058f6ba898579a32e6e18909d6330a667da26ba2579 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layout.html.twig", "@LIFOClassif/Platform/recherche.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'LIFOClassif_body' => array($this, 'block_LIFOClassif_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LIFOClassifBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_108b452418af637593991b61959d9fd6d18eb6106c1079ca8ba08d154357bb6a = $this->env->getExtension("native_profiler");
        $__internal_108b452418af637593991b61959d9fd6d18eb6106c1079ca8ba08d154357bb6a->enter($__internal_108b452418af637593991b61959d9fd6d18eb6106c1079ca8ba08d154357bb6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Platform/recherche.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_108b452418af637593991b61959d9fd6d18eb6106c1079ca8ba08d154357bb6a->leave($__internal_108b452418af637593991b61959d9fd6d18eb6106c1079ca8ba08d154357bb6a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7e8d110eb66213b352467c4b3eb4fdc4d408833f219712f55bf1cf877b0235c0 = $this->env->getExtension("native_profiler");
        $__internal_7e8d110eb66213b352467c4b3eb4fdc4d408833f219712f55bf1cf877b0235c0->enter($__internal_7e8d110eb66213b352467c4b3eb4fdc4d408833f219712f55bf1cf877b0235c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Recherche";
        
        $__internal_7e8d110eb66213b352467c4b3eb4fdc4d408833f219712f55bf1cf877b0235c0->leave($__internal_7e8d110eb66213b352467c4b3eb4fdc4d408833f219712f55bf1cf877b0235c0_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_007727a3ed502b9b4eeaa9a3833fdc5dc82890e9f7da1ca701ada937e5c789f1 = $this->env->getExtension("native_profiler");
        $__internal_007727a3ed502b9b4eeaa9a3833fdc5dc82890e9f7da1ca701ada937e5c789f1->enter($__internal_007727a3ed502b9b4eeaa9a3833fdc5dc82890e9f7da1ca701ada937e5c789f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "\t<p>
\t";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
\t</p>
";
        
        $__internal_007727a3ed502b9b4eeaa9a3833fdc5dc82890e9f7da1ca701ada937e5c789f1->leave($__internal_007727a3ed502b9b4eeaa9a3833fdc5dc82890e9f7da1ca701ada937e5c789f1_prof);

    }

    public function getTemplateName()
    {
        return "@LIFOClassif/Platform/recherche.html.twig";
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
/* {% extends "LIFOClassifBundle::layout.html.twig" %}*/
/* */
/* {% block title %}{{ parent() }} - Recherche{% endblock %}*/
/* */
/* {% block LIFOClassif_body %}*/
/* 	<p>*/
/* 	{{ form(form) }}*/
/* 	</p>*/
/* {% endblock %}*/
