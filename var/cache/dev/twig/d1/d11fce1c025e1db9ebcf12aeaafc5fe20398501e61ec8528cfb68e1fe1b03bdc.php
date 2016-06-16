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
        $__internal_dc2173722508936f5c02112ace578d831fef68f450ac1da45daa99e730bfcce4 = $this->env->getExtension("native_profiler");
        $__internal_dc2173722508936f5c02112ace578d831fef68f450ac1da45daa99e730bfcce4->enter($__internal_dc2173722508936f5c02112ace578d831fef68f450ac1da45daa99e730bfcce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Admin/admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc2173722508936f5c02112ace578d831fef68f450ac1da45daa99e730bfcce4->leave($__internal_dc2173722508936f5c02112ace578d831fef68f450ac1da45daa99e730bfcce4_prof);

    }

    // line 3
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_f04ef9fc90611378bcb6930d1c6865008ec10c0aca3fd90df2e1d30904ce1530 = $this->env->getExtension("native_profiler");
        $__internal_f04ef9fc90611378bcb6930d1c6865008ec10c0aca3fd90df2e1d30904ce1530->enter($__internal_f04ef9fc90611378bcb6930d1c6865008ec10c0aca3fd90df2e1d30904ce1530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 4
        echo "


";
        
        $__internal_f04ef9fc90611378bcb6930d1c6865008ec10c0aca3fd90df2e1d30904ce1530->leave($__internal_f04ef9fc90611378bcb6930d1c6865008ec10c0aca3fd90df2e1d30904ce1530_prof);

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
