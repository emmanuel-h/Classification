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
        $__internal_2b8808a767f50e92d786b8011eee774113d70419489c3002a97ba2ca3925e722 = $this->env->getExtension("native_profiler");
        $__internal_2b8808a767f50e92d786b8011eee774113d70419489c3002a97ba2ca3925e722->enter($__internal_2b8808a767f50e92d786b8011eee774113d70419489c3002a97ba2ca3925e722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Admin:admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b8808a767f50e92d786b8011eee774113d70419489c3002a97ba2ca3925e722->leave($__internal_2b8808a767f50e92d786b8011eee774113d70419489c3002a97ba2ca3925e722_prof);

    }

    // line 3
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_feca08d34f1e4db584b6ccf0e60d80c0d57dbf0e0b37110092dff1fa1d6414d9 = $this->env->getExtension("native_profiler");
        $__internal_feca08d34f1e4db584b6ccf0e60d80c0d57dbf0e0b37110092dff1fa1d6414d9->enter($__internal_feca08d34f1e4db584b6ccf0e60d80c0d57dbf0e0b37110092dff1fa1d6414d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 4
        echo "


";
        
        $__internal_feca08d34f1e4db584b6ccf0e60d80c0d57dbf0e0b37110092dff1fa1d6414d9->leave($__internal_feca08d34f1e4db584b6ccf0e60d80c0d57dbf0e0b37110092dff1fa1d6414d9_prof);

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
