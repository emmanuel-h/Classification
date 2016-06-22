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
        $__internal_b083c7eeb1340052873246860f1150d6748ddf3b40a4dbee9e2ccdb552b0af49 = $this->env->getExtension("native_profiler");
        $__internal_b083c7eeb1340052873246860f1150d6748ddf3b40a4dbee9e2ccdb552b0af49->enter($__internal_b083c7eeb1340052873246860f1150d6748ddf3b40a4dbee9e2ccdb552b0af49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Admin/admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b083c7eeb1340052873246860f1150d6748ddf3b40a4dbee9e2ccdb552b0af49->leave($__internal_b083c7eeb1340052873246860f1150d6748ddf3b40a4dbee9e2ccdb552b0af49_prof);

    }

    // line 3
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_f9d4df73896f7c90d8d3c8d1fc781b349cde99a8f15df2ca24ec20da2f61702c = $this->env->getExtension("native_profiler");
        $__internal_f9d4df73896f7c90d8d3c8d1fc781b349cde99a8f15df2ca24ec20da2f61702c->enter($__internal_f9d4df73896f7c90d8d3c8d1fc781b349cde99a8f15df2ca24ec20da2f61702c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 4
        echo "


";
        
        $__internal_f9d4df73896f7c90d8d3c8d1fc781b349cde99a8f15df2ca24ec20da2f61702c->leave($__internal_f9d4df73896f7c90d8d3c8d1fc781b349cde99a8f15df2ca24ec20da2f61702c_prof);

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
