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
        $__internal_00a6966879482aae5061afef30d08ae98c9063905b72bd36da5c123bc002faea = $this->env->getExtension("native_profiler");
        $__internal_00a6966879482aae5061afef30d08ae98c9063905b72bd36da5c123bc002faea->enter($__internal_00a6966879482aae5061afef30d08ae98c9063905b72bd36da5c123bc002faea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Platform:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00a6966879482aae5061afef30d08ae98c9063905b72bd36da5c123bc002faea->leave($__internal_00a6966879482aae5061afef30d08ae98c9063905b72bd36da5c123bc002faea_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fc07b2f1af5336419227b6be85f0ba56e78f5accbe80b29b42aba694f2dd71da = $this->env->getExtension("native_profiler");
        $__internal_fc07b2f1af5336419227b6be85f0ba56e78f5accbe80b29b42aba694f2dd71da->enter($__internal_fc07b2f1af5336419227b6be85f0ba56e78f5accbe80b29b42aba694f2dd71da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index";
        
        $__internal_fc07b2f1af5336419227b6be85f0ba56e78f5accbe80b29b42aba694f2dd71da->leave($__internal_fc07b2f1af5336419227b6be85f0ba56e78f5accbe80b29b42aba694f2dd71da_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_483065da021f65abec5f914593d3ff792d042e71a3032b4f734902ee95093bcf = $this->env->getExtension("native_profiler");
        $__internal_483065da021f65abec5f914593d3ff792d042e71a3032b4f734902ee95093bcf->enter($__internal_483065da021f65abec5f914593d3ff792d042e71a3032b4f734902ee95093bcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<p>
\t\tBienvenue sur l'outil d'aide à la classification de tesson
\t</p>
";
        
        $__internal_483065da021f65abec5f914593d3ff792d042e71a3032b4f734902ee95093bcf->leave($__internal_483065da021f65abec5f914593d3ff792d042e71a3032b4f734902ee95093bcf_prof);

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
