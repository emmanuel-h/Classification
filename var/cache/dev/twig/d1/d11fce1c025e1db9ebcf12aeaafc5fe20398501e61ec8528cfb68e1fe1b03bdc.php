<?php

/* @LIFOClassif/Admin/admin.html.twig */
class __TwigTemplate_d5af64ea1984604139cde1ff434949c89cbea94e6c5aed7f649ce2cf8cbf04c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layoutAdmin.html.twig", "@LIFOClassif/Admin/admin.html.twig", 1);
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
        $__internal_a54cb667c0de104001213788ffac0bfc3fe5893b6014240db69cd462be00fdc0 = $this->env->getExtension("native_profiler");
        $__internal_a54cb667c0de104001213788ffac0bfc3fe5893b6014240db69cd462be00fdc0->enter($__internal_a54cb667c0de104001213788ffac0bfc3fe5893b6014240db69cd462be00fdc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Admin/admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a54cb667c0de104001213788ffac0bfc3fe5893b6014240db69cd462be00fdc0->leave($__internal_a54cb667c0de104001213788ffac0bfc3fe5893b6014240db69cd462be00fdc0_prof);

    }

    // line 3
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_8a703b39360a43ae50132d18d77310f7771d851c3321f62f03d80a74e5471cf5 = $this->env->getExtension("native_profiler");
        $__internal_8a703b39360a43ae50132d18d77310f7771d851c3321f62f03d80a74e5471cf5->enter($__internal_8a703b39360a43ae50132d18d77310f7771d851c3321f62f03d80a74e5471cf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 4
        echo "


";
        
        $__internal_8a703b39360a43ae50132d18d77310f7771d851c3321f62f03d80a74e5471cf5->leave($__internal_8a703b39360a43ae50132d18d77310f7771d851c3321f62f03d80a74e5471cf5_prof);

    }

    public function getTemplateName()
    {
        return "@LIFOClassif/Admin/admin.html.twig";
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
