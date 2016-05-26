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
        $__internal_8160aa7e392fa5a671ff637d192ddd0eb7c55d7ac610600312eda34fff2eb8ac = $this->env->getExtension("native_profiler");
        $__internal_8160aa7e392fa5a671ff637d192ddd0eb7c55d7ac610600312eda34fff2eb8ac->enter($__internal_8160aa7e392fa5a671ff637d192ddd0eb7c55d7ac610600312eda34fff2eb8ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_8160aa7e392fa5a671ff637d192ddd0eb7c55d7ac610600312eda34fff2eb8ac->leave($__internal_8160aa7e392fa5a671ff637d192ddd0eb7c55d7ac610600312eda34fff2eb8ac_prof);

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
