<?php

/* @LIFOClassif/Platform/index.html.twig */
class __TwigTemplate_6c5727bd5ba52cac76d8756f50842e6d94474be7170dde15522885ae5d5c1fd2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layoutGeneral.html.twig", "@LIFOClassif/Platform/index.html.twig", 1);
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
        $__internal_79adc48dc222d335cf625b0208279e05df284f13bd5d3ebcc77b57441561ddb3 = $this->env->getExtension("native_profiler");
        $__internal_79adc48dc222d335cf625b0208279e05df284f13bd5d3ebcc77b57441561ddb3->enter($__internal_79adc48dc222d335cf625b0208279e05df284f13bd5d3ebcc77b57441561ddb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Platform/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79adc48dc222d335cf625b0208279e05df284f13bd5d3ebcc77b57441561ddb3->leave($__internal_79adc48dc222d335cf625b0208279e05df284f13bd5d3ebcc77b57441561ddb3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0fa77d32eb41c77b379eaaeb963ae3950e5fedfb1a524d2de6ac927d3b5f2f04 = $this->env->getExtension("native_profiler");
        $__internal_0fa77d32eb41c77b379eaaeb963ae3950e5fedfb1a524d2de6ac927d3b5f2f04->enter($__internal_0fa77d32eb41c77b379eaaeb963ae3950e5fedfb1a524d2de6ac927d3b5f2f04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index";
        
        $__internal_0fa77d32eb41c77b379eaaeb963ae3950e5fedfb1a524d2de6ac927d3b5f2f04->leave($__internal_0fa77d32eb41c77b379eaaeb963ae3950e5fedfb1a524d2de6ac927d3b5f2f04_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f44255827ae7fdada7728f6c701ce00898b803fc402356f20fbd6da0bbaa8fab = $this->env->getExtension("native_profiler");
        $__internal_f44255827ae7fdada7728f6c701ce00898b803fc402356f20fbd6da0bbaa8fab->enter($__internal_f44255827ae7fdada7728f6c701ce00898b803fc402356f20fbd6da0bbaa8fab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<p>
\t\tBienvenue sur l'outil d'aide à la classification de tesson
\t</p>
";
        
        $__internal_f44255827ae7fdada7728f6c701ce00898b803fc402356f20fbd6da0bbaa8fab->leave($__internal_f44255827ae7fdada7728f6c701ce00898b803fc402356f20fbd6da0bbaa8fab_prof);

    }

    public function getTemplateName()
    {
        return "@LIFOClassif/Platform/index.html.twig";
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
