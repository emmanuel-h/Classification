<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_2661cbd8384476cead25028c21bb52bbf34c0c6953cc897fcb0b68199017d288 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_26bcf1843f6bafde69f183f35b0b49cdd9d88b50251806661ee2ab28474a354f = $this->env->getExtension("native_profiler");
        $__internal_26bcf1843f6bafde69f183f35b0b49cdd9d88b50251806661ee2ab28474a354f->enter($__internal_26bcf1843f6bafde69f183f35b0b49cdd9d88b50251806661ee2ab28474a354f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_26bcf1843f6bafde69f183f35b0b49cdd9d88b50251806661ee2ab28474a354f->leave($__internal_26bcf1843f6bafde69f183f35b0b49cdd9d88b50251806661ee2ab28474a354f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
