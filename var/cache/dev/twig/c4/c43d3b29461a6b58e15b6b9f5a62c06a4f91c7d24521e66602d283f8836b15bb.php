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
        $__internal_90286193362248f943e08dde33250cdc7b2605ec080281a9cc912d0179e766f0 = $this->env->getExtension("native_profiler");
        $__internal_90286193362248f943e08dde33250cdc7b2605ec080281a9cc912d0179e766f0->enter($__internal_90286193362248f943e08dde33250cdc7b2605ec080281a9cc912d0179e766f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_90286193362248f943e08dde33250cdc7b2605ec080281a9cc912d0179e766f0->leave($__internal_90286193362248f943e08dde33250cdc7b2605ec080281a9cc912d0179e766f0_prof);

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
