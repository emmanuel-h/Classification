<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_4fb56864da49a95b5ed101daa2e93b7e0b12f8e6f2bcf37ecb9ee0decdc6d3e2 extends Twig_Template
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
        $__internal_30e8970de1213309540f246434d615e37848c04c133520e151a16bc6faa2e495 = $this->env->getExtension("native_profiler");
        $__internal_30e8970de1213309540f246434d615e37848c04c133520e151a16bc6faa2e495->enter($__internal_30e8970de1213309540f246434d615e37848c04c133520e151a16bc6faa2e495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_30e8970de1213309540f246434d615e37848c04c133520e151a16bc6faa2e495->leave($__internal_30e8970de1213309540f246434d615e37848c04c133520e151a16bc6faa2e495_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
