<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_7e71abdc435c633f7f5ccb024df2df192146c5430a740ab40b60861e9390ac50 extends Twig_Template
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
        $__internal_f4080ac38b6afe0d3eb264d62bee53a46c7208157b357784c0b0052a3c725c25 = $this->env->getExtension("native_profiler");
        $__internal_f4080ac38b6afe0d3eb264d62bee53a46c7208157b357784c0b0052a3c725c25->enter($__internal_f4080ac38b6afe0d3eb264d62bee53a46c7208157b357784c0b0052a3c725c25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_f4080ac38b6afe0d3eb264d62bee53a46c7208157b357784c0b0052a3c725c25->leave($__internal_f4080ac38b6afe0d3eb264d62bee53a46c7208157b357784c0b0052a3c725c25_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
