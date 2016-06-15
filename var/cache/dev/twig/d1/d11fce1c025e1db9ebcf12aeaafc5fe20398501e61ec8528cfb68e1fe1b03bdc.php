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
        $__internal_3c694645da8bfc14686f9b96427309a08885d75454f8fa7b06b052f02bc8a5e1 = $this->env->getExtension("native_profiler");
        $__internal_3c694645da8bfc14686f9b96427309a08885d75454f8fa7b06b052f02bc8a5e1->enter($__internal_3c694645da8bfc14686f9b96427309a08885d75454f8fa7b06b052f02bc8a5e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Admin/admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c694645da8bfc14686f9b96427309a08885d75454f8fa7b06b052f02bc8a5e1->leave($__internal_3c694645da8bfc14686f9b96427309a08885d75454f8fa7b06b052f02bc8a5e1_prof);

    }

    // line 3
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_fc1f569e903e690dfc03a5c96dbef383325293314f0d7b9876f9c58f6f034ff5 = $this->env->getExtension("native_profiler");
        $__internal_fc1f569e903e690dfc03a5c96dbef383325293314f0d7b9876f9c58f6f034ff5->enter($__internal_fc1f569e903e690dfc03a5c96dbef383325293314f0d7b9876f9c58f6f034ff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 4
        echo "


";
        
        $__internal_fc1f569e903e690dfc03a5c96dbef383325293314f0d7b9876f9c58f6f034ff5->leave($__internal_fc1f569e903e690dfc03a5c96dbef383325293314f0d7b9876f9c58f6f034ff5_prof);

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
