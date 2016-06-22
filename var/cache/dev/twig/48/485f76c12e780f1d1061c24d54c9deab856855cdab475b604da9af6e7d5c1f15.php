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
        $__internal_53ce823c0c19d284d157fc561ac08d6e91a9b41434e0080b1a25cc60a179e892 = $this->env->getExtension("native_profiler");
        $__internal_53ce823c0c19d284d157fc561ac08d6e91a9b41434e0080b1a25cc60a179e892->enter($__internal_53ce823c0c19d284d157fc561ac08d6e91a9b41434e0080b1a25cc60a179e892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_53ce823c0c19d284d157fc561ac08d6e91a9b41434e0080b1a25cc60a179e892->leave($__internal_53ce823c0c19d284d157fc561ac08d6e91a9b41434e0080b1a25cc60a179e892_prof);

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
