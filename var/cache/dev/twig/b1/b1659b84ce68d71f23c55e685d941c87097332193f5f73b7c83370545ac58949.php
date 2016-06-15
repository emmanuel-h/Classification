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
        $__internal_d02737d6bdf154f7836a465e254856332b5a65b31f3c0fdddd94826a73c241c1 = $this->env->getExtension("native_profiler");
        $__internal_d02737d6bdf154f7836a465e254856332b5a65b31f3c0fdddd94826a73c241c1->enter($__internal_d02737d6bdf154f7836a465e254856332b5a65b31f3c0fdddd94826a73c241c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Platform:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d02737d6bdf154f7836a465e254856332b5a65b31f3c0fdddd94826a73c241c1->leave($__internal_d02737d6bdf154f7836a465e254856332b5a65b31f3c0fdddd94826a73c241c1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0448ef06aa689af9593fc3ad8a3ecf5a26053c616a86be5df327dccadf63136b = $this->env->getExtension("native_profiler");
        $__internal_0448ef06aa689af9593fc3ad8a3ecf5a26053c616a86be5df327dccadf63136b->enter($__internal_0448ef06aa689af9593fc3ad8a3ecf5a26053c616a86be5df327dccadf63136b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index";
        
        $__internal_0448ef06aa689af9593fc3ad8a3ecf5a26053c616a86be5df327dccadf63136b->leave($__internal_0448ef06aa689af9593fc3ad8a3ecf5a26053c616a86be5df327dccadf63136b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_fd6f5201bf7045190213fb9a72845b24f8e569f682541a8a9521071cdae7fa49 = $this->env->getExtension("native_profiler");
        $__internal_fd6f5201bf7045190213fb9a72845b24f8e569f682541a8a9521071cdae7fa49->enter($__internal_fd6f5201bf7045190213fb9a72845b24f8e569f682541a8a9521071cdae7fa49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<p>
\t\tBienvenue sur l'outil d'aide à la classification de tesson
\t</p>
";
        
        $__internal_fd6f5201bf7045190213fb9a72845b24f8e569f682541a8a9521071cdae7fa49->leave($__internal_fd6f5201bf7045190213fb9a72845b24f8e569f682541a8a9521071cdae7fa49_prof);

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
