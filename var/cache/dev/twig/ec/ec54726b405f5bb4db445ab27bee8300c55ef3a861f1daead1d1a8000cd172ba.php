<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_33a011551c9083572528bc26f258174748d0eec5174a9d3a0c99d456b65f1b57 extends Twig_Template
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
        $__internal_7c3471297b3661728d741279d42fe44124597e46f063a066a0346bbb2d77c140 = $this->env->getExtension("native_profiler");
        $__internal_7c3471297b3661728d741279d42fe44124597e46f063a066a0346bbb2d77c140->enter($__internal_7c3471297b3661728d741279d42fe44124597e46f063a066a0346bbb2d77c140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_7c3471297b3661728d741279d42fe44124597e46f063a066a0346bbb2d77c140->leave($__internal_7c3471297b3661728d741279d42fe44124597e46f063a066a0346bbb2d77c140_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
