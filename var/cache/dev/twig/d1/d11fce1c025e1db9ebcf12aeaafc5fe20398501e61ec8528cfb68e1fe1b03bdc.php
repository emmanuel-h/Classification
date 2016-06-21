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
        $__internal_27de38ca1162575d94a654b19ce3e4d2984dbd8177c94b62f4d897f0048b7f21 = $this->env->getExtension("native_profiler");
        $__internal_27de38ca1162575d94a654b19ce3e4d2984dbd8177c94b62f4d897f0048b7f21->enter($__internal_27de38ca1162575d94a654b19ce3e4d2984dbd8177c94b62f4d897f0048b7f21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Admin/admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27de38ca1162575d94a654b19ce3e4d2984dbd8177c94b62f4d897f0048b7f21->leave($__internal_27de38ca1162575d94a654b19ce3e4d2984dbd8177c94b62f4d897f0048b7f21_prof);

    }

    // line 3
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_344d5bdec40f6523ac0957d71ca470284589c5b4b1f607962250117b80999875 = $this->env->getExtension("native_profiler");
        $__internal_344d5bdec40f6523ac0957d71ca470284589c5b4b1f607962250117b80999875->enter($__internal_344d5bdec40f6523ac0957d71ca470284589c5b4b1f607962250117b80999875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 4
        echo "


";
        
        $__internal_344d5bdec40f6523ac0957d71ca470284589c5b4b1f607962250117b80999875->leave($__internal_344d5bdec40f6523ac0957d71ca470284589c5b4b1f607962250117b80999875_prof);

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
