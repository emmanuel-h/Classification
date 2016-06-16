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
        $__internal_72db21af89597b03d0c0d0dcf7747c13b8acdfa765d36b3ac65fc40969b3af0d = $this->env->getExtension("native_profiler");
        $__internal_72db21af89597b03d0c0d0dcf7747c13b8acdfa765d36b3ac65fc40969b3af0d->enter($__internal_72db21af89597b03d0c0d0dcf7747c13b8acdfa765d36b3ac65fc40969b3af0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Admin/admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72db21af89597b03d0c0d0dcf7747c13b8acdfa765d36b3ac65fc40969b3af0d->leave($__internal_72db21af89597b03d0c0d0dcf7747c13b8acdfa765d36b3ac65fc40969b3af0d_prof);

    }

    // line 3
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_ec82f78db825f473a967b44d8a0353cbff34e62790592528aca3ef5feb2dff2d = $this->env->getExtension("native_profiler");
        $__internal_ec82f78db825f473a967b44d8a0353cbff34e62790592528aca3ef5feb2dff2d->enter($__internal_ec82f78db825f473a967b44d8a0353cbff34e62790592528aca3ef5feb2dff2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 4
        echo "


";
        
        $__internal_ec82f78db825f473a967b44d8a0353cbff34e62790592528aca3ef5feb2dff2d->leave($__internal_ec82f78db825f473a967b44d8a0353cbff34e62790592528aca3ef5feb2dff2d_prof);

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
