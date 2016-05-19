<?php

/* LIFOClassifBundle:PanelAdmin:admin.html.twig */
class __TwigTemplate_e11ad0f2c56e790231efc2927ec4096cad18a9d36faa1c9bbb7e618ddb43f9d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("adminGeneral.html.twig", "LIFOClassifBundle:PanelAdmin:admin.html.twig", 1);
        $this->blocks = array(
            'LIFOClassif_body' => array($this, 'block_LIFOClassif_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "adminGeneral.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c0e424bcc2e0cfdf58a1e92927e917c99eaa53fdd6800fc4ac808d1e0d118671 = $this->env->getExtension("native_profiler");
        $__internal_c0e424bcc2e0cfdf58a1e92927e917c99eaa53fdd6800fc4ac808d1e0d118671->enter($__internal_c0e424bcc2e0cfdf58a1e92927e917c99eaa53fdd6800fc4ac808d1e0d118671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:PanelAdmin:admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0e424bcc2e0cfdf58a1e92927e917c99eaa53fdd6800fc4ac808d1e0d118671->leave($__internal_c0e424bcc2e0cfdf58a1e92927e917c99eaa53fdd6800fc4ac808d1e0d118671_prof);

    }

    // line 3
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_d710f4014de84dcc02e72ca4db7cf45b7906ec0d95f766de6aec5c95c8461406 = $this->env->getExtension("native_profiler");
        $__internal_d710f4014de84dcc02e72ca4db7cf45b7906ec0d95f766de6aec5c95c8461406->enter($__internal_d710f4014de84dcc02e72ca4db7cf45b7906ec0d95f766de6aec5c95c8461406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

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
        
        $__internal_d710f4014de84dcc02e72ca4db7cf45b7906ec0d95f766de6aec5c95c8461406->leave($__internal_d710f4014de84dcc02e72ca4db7cf45b7906ec0d95f766de6aec5c95c8461406_prof);

    }

    public function getTemplateName()
    {
        return "LIFOClassifBundle:PanelAdmin:admin.html.twig";
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
/* {% extends "adminGeneral.html.twig" %}*/
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
