<?php

/* LIFOClassifBundle:Platform:admin.html.twig */
class __TwigTemplate_d00e8cfbb7d8176720143bab1638307c0c77fcbe164a7434a464cdb060dd5c25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layoutAdmin.html.twig", "LIFOClassifBundle:Platform:admin.html.twig", 1);
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
        $__internal_2a4c2caa97b7f4f204c394dc2eee02d04e9227d6a504a63eaecbc31d5573ff4a = $this->env->getExtension("native_profiler");
        $__internal_2a4c2caa97b7f4f204c394dc2eee02d04e9227d6a504a63eaecbc31d5573ff4a->enter($__internal_2a4c2caa97b7f4f204c394dc2eee02d04e9227d6a504a63eaecbc31d5573ff4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Platform:admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a4c2caa97b7f4f204c394dc2eee02d04e9227d6a504a63eaecbc31d5573ff4a->leave($__internal_2a4c2caa97b7f4f204c394dc2eee02d04e9227d6a504a63eaecbc31d5573ff4a_prof);

    }

    // line 3
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_090df85d49acf498ae1f10a28a1c0f423527c184cd9f4f96293718264838f1e0 = $this->env->getExtension("native_profiler");
        $__internal_090df85d49acf498ae1f10a28a1c0f423527c184cd9f4f96293718264838f1e0->enter($__internal_090df85d49acf498ae1f10a28a1c0f423527c184cd9f4f96293718264838f1e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 4
        echo "
<div class=\"well\">
<p>
<fieldset>
<legend>Suppression</legend>
";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSuppression"]) ? $context["formSuppression"] : $this->getContext($context, "formSuppression")), 'form');
        echo "
</fieldset>
</p>
<p>
<fieldset>
<legend>Ajout d'un décor</legend>
";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formAjoutDecor"]) ? $context["formAjoutDecor"] : $this->getContext($context, "formAjoutDecor")), 'form');
        echo "
</fieldset>
<fieldset>
<legend>Ajout d'un type de décor</legend>
";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formAjoutTypeDecor"]) ? $context["formAjoutTypeDecor"] : $this->getContext($context, "formAjoutTypeDecor")), 'form');
        echo "
</fieldset>
</p>
</div>

";
        
        $__internal_090df85d49acf498ae1f10a28a1c0f423527c184cd9f4f96293718264838f1e0->leave($__internal_090df85d49acf498ae1f10a28a1c0f423527c184cd9f4f96293718264838f1e0_prof);

    }

    public function getTemplateName()
    {
        return "LIFOClassifBundle:Platform:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 19,  56 => 15,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "LIFOClassifBundle::layoutAdmin.html.twig" %}*/
/* */
/* {% block LIFOClassif_body %}*/
/* */
/* <div class="well">*/
/* <p>*/
/* <fieldset>*/
/* <legend>Suppression</legend>*/
/* {{ form(formSuppression) }}*/
/* </fieldset>*/
/* </p>*/
/* <p>*/
/* <fieldset>*/
/* <legend>Ajout d'un décor</legend>*/
/* {{ form(formAjoutDecor) }}*/
/* </fieldset>*/
/* <fieldset>*/
/* <legend>Ajout d'un type de décor</legend>*/
/* {{ form(formAjoutTypeDecor) }}*/
/* </fieldset>*/
/* </p>*/
/* </div>*/
/* */
/* {% endblock %}*/
