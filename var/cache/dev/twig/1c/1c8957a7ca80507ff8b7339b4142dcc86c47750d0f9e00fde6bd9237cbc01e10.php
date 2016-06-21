<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_798fdbd6100888d4f5b278617b14ec4c3b716e12566a834bdc38d77b47504367 extends Twig_Template
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
        $__internal_b33d2cd52125d194b82010a7cf54c57413662f004db03e2b59bbc772a8048844 = $this->env->getExtension("native_profiler");
        $__internal_b33d2cd52125d194b82010a7cf54c57413662f004db03e2b59bbc772a8048844->enter($__internal_b33d2cd52125d194b82010a7cf54c57413662f004db03e2b59bbc772a8048844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_b33d2cd52125d194b82010a7cf54c57413662f004db03e2b59bbc772a8048844->leave($__internal_b33d2cd52125d194b82010a7cf54c57413662f004db03e2b59bbc772a8048844_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
