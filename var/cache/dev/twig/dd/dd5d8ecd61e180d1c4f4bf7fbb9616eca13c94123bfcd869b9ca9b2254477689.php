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
        $__internal_b840c77282aea583705c93530c2fa51c1b7240518898722c4c2944f9d377ed2a = $this->env->getExtension("native_profiler");
        $__internal_b840c77282aea583705c93530c2fa51c1b7240518898722c4c2944f9d377ed2a->enter($__internal_b840c77282aea583705c93530c2fa51c1b7240518898722c4c2944f9d377ed2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_b840c77282aea583705c93530c2fa51c1b7240518898722c4c2944f9d377ed2a->leave($__internal_b840c77282aea583705c93530c2fa51c1b7240518898722c4c2944f9d377ed2a_prof);

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
