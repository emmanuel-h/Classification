<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_c5006b6587d77f7f17ef7379dff7b2798a9834011df15cdf471e9d5af20ce004 extends Twig_Template
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
        $__internal_830ad1b50a6690275875eb75aa89c99c034ddad1ec76d35def03b0362525992c = $this->env->getExtension("native_profiler");
        $__internal_830ad1b50a6690275875eb75aa89c99c034ddad1ec76d35def03b0362525992c->enter($__internal_830ad1b50a6690275875eb75aa89c99c034ddad1ec76d35def03b0362525992c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_830ad1b50a6690275875eb75aa89c99c034ddad1ec76d35def03b0362525992c->leave($__internal_830ad1b50a6690275875eb75aa89c99c034ddad1ec76d35def03b0362525992c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
