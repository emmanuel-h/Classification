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
        $__internal_cc1765dfbc1035ab8a1e3c02d8ff4f609db826ee86dcb65978c3c023c48d38c0 = $this->env->getExtension("native_profiler");
        $__internal_cc1765dfbc1035ab8a1e3c02d8ff4f609db826ee86dcb65978c3c023c48d38c0->enter($__internal_cc1765dfbc1035ab8a1e3c02d8ff4f609db826ee86dcb65978c3c023c48d38c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_cc1765dfbc1035ab8a1e3c02d8ff4f609db826ee86dcb65978c3c023c48d38c0->leave($__internal_cc1765dfbc1035ab8a1e3c02d8ff4f609db826ee86dcb65978c3c023c48d38c0_prof);

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
