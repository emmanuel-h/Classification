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
        $__internal_16ca0430b8714e671bfbb474af2524554bae4759abe89ea43868035d34b68119 = $this->env->getExtension("native_profiler");
        $__internal_16ca0430b8714e671bfbb474af2524554bae4759abe89ea43868035d34b68119->enter($__internal_16ca0430b8714e671bfbb474af2524554bae4759abe89ea43868035d34b68119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Admin/admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16ca0430b8714e671bfbb474af2524554bae4759abe89ea43868035d34b68119->leave($__internal_16ca0430b8714e671bfbb474af2524554bae4759abe89ea43868035d34b68119_prof);

    }

    // line 3
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_102a74083913d76118686294ec1edf712e014535e670c46e60f96d7df62b8c67 = $this->env->getExtension("native_profiler");
        $__internal_102a74083913d76118686294ec1edf712e014535e670c46e60f96d7df62b8c67->enter($__internal_102a74083913d76118686294ec1edf712e014535e670c46e60f96d7df62b8c67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 4
        echo "


";
        
        $__internal_102a74083913d76118686294ec1edf712e014535e670c46e60f96d7df62b8c67->leave($__internal_102a74083913d76118686294ec1edf712e014535e670c46e60f96d7df62b8c67_prof);

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
