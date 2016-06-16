<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_eb8b2f4d2651fa7ba5d050bf33686d593c0aa1ffb26a3ef009c71baa16023659 extends Twig_Template
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
        $__internal_edc2a12fa388833f5771fdd2a216e4ef0db99bd6a7983b9a8b12af7df5ced93f = $this->env->getExtension("native_profiler");
        $__internal_edc2a12fa388833f5771fdd2a216e4ef0db99bd6a7983b9a8b12af7df5ced93f->enter($__internal_edc2a12fa388833f5771fdd2a216e4ef0db99bd6a7983b9a8b12af7df5ced93f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_edc2a12fa388833f5771fdd2a216e4ef0db99bd6a7983b9a8b12af7df5ced93f->leave($__internal_edc2a12fa388833f5771fdd2a216e4ef0db99bd6a7983b9a8b12af7df5ced93f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
