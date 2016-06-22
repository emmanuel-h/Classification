<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_bbe070b122350c825d5de7ba321ca713bb4b0c2c15974a1e17f6a1b2d2029e52 extends Twig_Template
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
        $__internal_814eea7edac536d2672500a9612eb5cde6dcec6a48297128604f1ff9bb50719e = $this->env->getExtension("native_profiler");
        $__internal_814eea7edac536d2672500a9612eb5cde6dcec6a48297128604f1ff9bb50719e->enter($__internal_814eea7edac536d2672500a9612eb5cde6dcec6a48297128604f1ff9bb50719e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_814eea7edac536d2672500a9612eb5cde6dcec6a48297128604f1ff9bb50719e->leave($__internal_814eea7edac536d2672500a9612eb5cde6dcec6a48297128604f1ff9bb50719e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
