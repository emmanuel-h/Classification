<?php

/* LIFOClassifBundle:Admin:admin.html.twig */
class __TwigTemplate_e6e7e80d35d534d99af7cfec088464040a48c3337fe62a7c5ab4ea7f52a66de0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layoutAdmin.html.twig", "LIFOClassifBundle:Admin:admin.html.twig", 1);
        $this->blocks = array(
            'LIFOClassif_body' => array($this, 'block_LIFOClassif_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LIFOClassifBundle::layoutAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ab5fc5c100cdfb003e836787d313b2038b24b2069d432f2ed1b410720f59ab25 = $this->env->getExtension("native_profiler");
        $__internal_ab5fc5c100cdfb003e836787d313b2038b24b2069d432f2ed1b410720f59ab25->enter($__internal_ab5fc5c100cdfb003e836787d313b2038b24b2069d432f2ed1b410720f59ab25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Admin:admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab5fc5c100cdfb003e836787d313b2038b24b2069d432f2ed1b410720f59ab25->leave($__internal_ab5fc5c100cdfb003e836787d313b2038b24b2069d432f2ed1b410720f59ab25_prof);

    }

    // line 3
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_a79d5343c9c0c868de05749152c8afdbe9d645431de81bf0258bebeccabe8383 = $this->env->getExtension("native_profiler");
        $__internal_a79d5343c9c0c868de05749152c8afdbe9d645431de81bf0258bebeccabe8383->enter($__internal_a79d5343c9c0c868de05749152c8afdbe9d645431de81bf0258bebeccabe8383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 4
        echo "


";
        
        $__internal_a79d5343c9c0c868de05749152c8afdbe9d645431de81bf0258bebeccabe8383->leave($__internal_a79d5343c9c0c868de05749152c8afdbe9d645431de81bf0258bebeccabe8383_prof);

    }

    public function getTemplateName()
    {
        return "LIFOClassifBundle:Admin:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "LIFOClassifBundle::layoutAdmin.html.twig" %}*/
/* */
/* {% block LIFOClassif_body %}*/
/* */
/* */
/* */
/* {% endblock %}*/
