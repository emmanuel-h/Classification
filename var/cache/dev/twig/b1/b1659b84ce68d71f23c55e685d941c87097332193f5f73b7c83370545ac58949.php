<?php

/* LIFOClassifBundle:Platform:index.html.twig */
class __TwigTemplate_45469c73f234b31b6bec59b12ff8781d17bcdaf17f0e66c248db4e16b9295993 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layoutGeneral.html.twig", "LIFOClassifBundle:Platform:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LIFOClassifBundle::layoutGeneral.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_63c2c9c03a6ae1506efc0701e71266b48bb092f8adcda991793dcd62c28b69fa = $this->env->getExtension("native_profiler");
        $__internal_63c2c9c03a6ae1506efc0701e71266b48bb092f8adcda991793dcd62c28b69fa->enter($__internal_63c2c9c03a6ae1506efc0701e71266b48bb092f8adcda991793dcd62c28b69fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Platform:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63c2c9c03a6ae1506efc0701e71266b48bb092f8adcda991793dcd62c28b69fa->leave($__internal_63c2c9c03a6ae1506efc0701e71266b48bb092f8adcda991793dcd62c28b69fa_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7cfe875053ea07e7803c57afd57c45e978e2f5fd3216da3a55f3f6ae487c96fd = $this->env->getExtension("native_profiler");
        $__internal_7cfe875053ea07e7803c57afd57c45e978e2f5fd3216da3a55f3f6ae487c96fd->enter($__internal_7cfe875053ea07e7803c57afd57c45e978e2f5fd3216da3a55f3f6ae487c96fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index";
        
        $__internal_7cfe875053ea07e7803c57afd57c45e978e2f5fd3216da3a55f3f6ae487c96fd->leave($__internal_7cfe875053ea07e7803c57afd57c45e978e2f5fd3216da3a55f3f6ae487c96fd_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2492d14c4ffeda605d115c6aaaf7d1499659a17b6d52a2af762fc82eba9fda49 = $this->env->getExtension("native_profiler");
        $__internal_2492d14c4ffeda605d115c6aaaf7d1499659a17b6d52a2af762fc82eba9fda49->enter($__internal_2492d14c4ffeda605d115c6aaaf7d1499659a17b6d52a2af762fc82eba9fda49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<p>
\t\tBienvenue sur l'outil d'aide à la classification de tesson
\t</p>
";
        
        $__internal_2492d14c4ffeda605d115c6aaaf7d1499659a17b6d52a2af762fc82eba9fda49->leave($__internal_2492d14c4ffeda605d115c6aaaf7d1499659a17b6d52a2af762fc82eba9fda49_prof);

    }

    public function getTemplateName()
    {
        return "LIFOClassifBundle:Platform:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 6,  48 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "LIFOClassifBundle::layoutGeneral.html.twig" %}*/
/* */
/* {% block title %}{{ parent() }} - Index{% endblock %}*/
/* */
/* {% block body %}*/
/* 	<p>*/
/* 		Bienvenue sur l'outil d'aide à la classification de tesson*/
/* 	</p>*/
/* {% endblock %}*/
