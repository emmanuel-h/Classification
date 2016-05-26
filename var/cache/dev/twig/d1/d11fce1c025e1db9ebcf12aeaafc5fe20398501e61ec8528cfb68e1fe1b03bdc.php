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
        $__internal_26cab8c8f84698b2d0e0d8692c83cab12122bbabc00fd5bd832662bbe23c24d9 = $this->env->getExtension("native_profiler");
        $__internal_26cab8c8f84698b2d0e0d8692c83cab12122bbabc00fd5bd832662bbe23c24d9->enter($__internal_26cab8c8f84698b2d0e0d8692c83cab12122bbabc00fd5bd832662bbe23c24d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Admin/admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26cab8c8f84698b2d0e0d8692c83cab12122bbabc00fd5bd832662bbe23c24d9->leave($__internal_26cab8c8f84698b2d0e0d8692c83cab12122bbabc00fd5bd832662bbe23c24d9_prof);

    }

    // line 3
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_263fef2e841db3bc317d4ddfe29d37727b36adce0fbb2d3ecbd90ca4f87c638f = $this->env->getExtension("native_profiler");
        $__internal_263fef2e841db3bc317d4ddfe29d37727b36adce0fbb2d3ecbd90ca4f87c638f->enter($__internal_263fef2e841db3bc317d4ddfe29d37727b36adce0fbb2d3ecbd90ca4f87c638f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 4
        echo "


";
        
        $__internal_263fef2e841db3bc317d4ddfe29d37727b36adce0fbb2d3ecbd90ca4f87c638f->leave($__internal_263fef2e841db3bc317d4ddfe29d37727b36adce0fbb2d3ecbd90ca4f87c638f_prof);

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
