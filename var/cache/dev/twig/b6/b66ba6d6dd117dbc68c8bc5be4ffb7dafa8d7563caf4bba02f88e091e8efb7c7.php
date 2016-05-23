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
        $__internal_4d2a1d219bf1de6286e4f1165fbd8ddce06d512e57a787d74787da3c14b38be2 = $this->env->getExtension("native_profiler");
        $__internal_4d2a1d219bf1de6286e4f1165fbd8ddce06d512e57a787d74787da3c14b38be2->enter($__internal_4d2a1d219bf1de6286e4f1165fbd8ddce06d512e57a787d74787da3c14b38be2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Admin:admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d2a1d219bf1de6286e4f1165fbd8ddce06d512e57a787d74787da3c14b38be2->leave($__internal_4d2a1d219bf1de6286e4f1165fbd8ddce06d512e57a787d74787da3c14b38be2_prof);

    }

    // line 3
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_2bf90f8bf3cfd84f79d69a762a316d56b965ab3df8aa05fd9c68fed72c3f45a4 = $this->env->getExtension("native_profiler");
        $__internal_2bf90f8bf3cfd84f79d69a762a316d56b965ab3df8aa05fd9c68fed72c3f45a4->enter($__internal_2bf90f8bf3cfd84f79d69a762a316d56b965ab3df8aa05fd9c68fed72c3f45a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 4
        echo "


";
        
        $__internal_2bf90f8bf3cfd84f79d69a762a316d56b965ab3df8aa05fd9c68fed72c3f45a4->leave($__internal_2bf90f8bf3cfd84f79d69a762a316d56b965ab3df8aa05fd9c68fed72c3f45a4_prof);

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
