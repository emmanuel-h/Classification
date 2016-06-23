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
        $__internal_b3fade6225b319e47be05e0283c0a326bd827ffe78d297c62c03aefd51c5d1fa = $this->env->getExtension("native_profiler");
        $__internal_b3fade6225b319e47be05e0283c0a326bd827ffe78d297c62c03aefd51c5d1fa->enter($__internal_b3fade6225b319e47be05e0283c0a326bd827ffe78d297c62c03aefd51c5d1fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_b3fade6225b319e47be05e0283c0a326bd827ffe78d297c62c03aefd51c5d1fa->leave($__internal_b3fade6225b319e47be05e0283c0a326bd827ffe78d297c62c03aefd51c5d1fa_prof);

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
