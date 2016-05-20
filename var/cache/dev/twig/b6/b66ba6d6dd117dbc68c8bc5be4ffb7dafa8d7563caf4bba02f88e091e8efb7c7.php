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
        $__internal_61c6eeb0ff0883ff678440e4f58da2c6bdb6e8fc436d6489f3afbb4b166c42bf = $this->env->getExtension("native_profiler");
        $__internal_61c6eeb0ff0883ff678440e4f58da2c6bdb6e8fc436d6489f3afbb4b166c42bf->enter($__internal_61c6eeb0ff0883ff678440e4f58da2c6bdb6e8fc436d6489f3afbb4b166c42bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Admin:admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61c6eeb0ff0883ff678440e4f58da2c6bdb6e8fc436d6489f3afbb4b166c42bf->leave($__internal_61c6eeb0ff0883ff678440e4f58da2c6bdb6e8fc436d6489f3afbb4b166c42bf_prof);

    }

    // line 3
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_c29e11f5bd5990fe03678c207d7a8de53ba1085c6828cedfa24b5e1b93c9836a = $this->env->getExtension("native_profiler");
        $__internal_c29e11f5bd5990fe03678c207d7a8de53ba1085c6828cedfa24b5e1b93c9836a->enter($__internal_c29e11f5bd5990fe03678c207d7a8de53ba1085c6828cedfa24b5e1b93c9836a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 4
        echo "


";
        
        $__internal_c29e11f5bd5990fe03678c207d7a8de53ba1085c6828cedfa24b5e1b93c9836a->leave($__internal_c29e11f5bd5990fe03678c207d7a8de53ba1085c6828cedfa24b5e1b93c9836a_prof);

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
