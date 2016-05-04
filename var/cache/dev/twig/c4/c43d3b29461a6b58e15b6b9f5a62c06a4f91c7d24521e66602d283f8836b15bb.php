<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_2d44b4039f86361d6a0f8afb81a9e45d0a080eab7b12897f9aec2db640e0d8d2 extends Twig_Template
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
        $__internal_65c5b32108cfbbb0854034f6116a2e819466922b2303eee22fa752d992d9fa67 = $this->env->getExtension("native_profiler");
        $__internal_65c5b32108cfbbb0854034f6116a2e819466922b2303eee22fa752d992d9fa67->enter($__internal_65c5b32108cfbbb0854034f6116a2e819466922b2303eee22fa752d992d9fa67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_65c5b32108cfbbb0854034f6116a2e819466922b2303eee22fa752d992d9fa67->leave($__internal_65c5b32108cfbbb0854034f6116a2e819466922b2303eee22fa752d992d9fa67_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
