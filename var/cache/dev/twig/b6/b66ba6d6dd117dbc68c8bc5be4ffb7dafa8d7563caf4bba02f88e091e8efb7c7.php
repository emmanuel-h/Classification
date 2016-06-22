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
        $__internal_8f8d80dc70203018f5721a3b348158e38649974a6ae84a326eb36af0312bc01d = $this->env->getExtension("native_profiler");
        $__internal_8f8d80dc70203018f5721a3b348158e38649974a6ae84a326eb36af0312bc01d->enter($__internal_8f8d80dc70203018f5721a3b348158e38649974a6ae84a326eb36af0312bc01d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Admin:admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f8d80dc70203018f5721a3b348158e38649974a6ae84a326eb36af0312bc01d->leave($__internal_8f8d80dc70203018f5721a3b348158e38649974a6ae84a326eb36af0312bc01d_prof);

    }

    // line 3
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_c6b2bbd71dba68410b29884bdf6788eb206c46dcab81ae10ddc2191ff439f6a5 = $this->env->getExtension("native_profiler");
        $__internal_c6b2bbd71dba68410b29884bdf6788eb206c46dcab81ae10ddc2191ff439f6a5->enter($__internal_c6b2bbd71dba68410b29884bdf6788eb206c46dcab81ae10ddc2191ff439f6a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 4
        echo "


";
        
        $__internal_c6b2bbd71dba68410b29884bdf6788eb206c46dcab81ae10ddc2191ff439f6a5->leave($__internal_c6b2bbd71dba68410b29884bdf6788eb206c46dcab81ae10ddc2191ff439f6a5_prof);

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
