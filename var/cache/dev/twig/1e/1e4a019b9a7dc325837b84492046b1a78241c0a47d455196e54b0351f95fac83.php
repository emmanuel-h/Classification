<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_a4ed6481a04f45fc3fca223888c39115b72141b21765f52a3b11d461122d7b3a extends Twig_Template
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
        $__internal_a2d95ddd13f6b30ebe0e13814142004ba4b2071f1e490a5ba754d24fe9039c32 = $this->env->getExtension("native_profiler");
        $__internal_a2d95ddd13f6b30ebe0e13814142004ba4b2071f1e490a5ba754d24fe9039c32->enter($__internal_a2d95ddd13f6b30ebe0e13814142004ba4b2071f1e490a5ba754d24fe9039c32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_a2d95ddd13f6b30ebe0e13814142004ba4b2071f1e490a5ba754d24fe9039c32->leave($__internal_a2d95ddd13f6b30ebe0e13814142004ba4b2071f1e490a5ba754d24fe9039c32_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
