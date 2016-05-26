<?php

/* LIFOClassifBundle:Parametres:typeDecor.html.twig */
class __TwigTemplate_ca265c78bd5b49edfdfb7c3d407a0ddc8e159f6ab8e83af039c6a3405b01b126 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layoutGeneral.html.twig", "LIFOClassifBundle:Parametres:typeDecor.html.twig", 1);
        $this->blocks = array(
            'LIFOClassif_body' => array($this, 'block_LIFOClassif_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LIFOClassifBundle::layoutGeneral.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ab12c9dad0acd91521cb0f48f4d3c59d2cdf01dc99eefe7b7fe1f2e4874cf6d7 = $this->env->getExtension("native_profiler");
        $__internal_ab12c9dad0acd91521cb0f48f4d3c59d2cdf01dc99eefe7b7fe1f2e4874cf6d7->enter($__internal_ab12c9dad0acd91521cb0f48f4d3c59d2cdf01dc99eefe7b7fe1f2e4874cf6d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Parametres:typeDecor.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab12c9dad0acd91521cb0f48f4d3c59d2cdf01dc99eefe7b7fe1f2e4874cf6d7->leave($__internal_ab12c9dad0acd91521cb0f48f4d3c59d2cdf01dc99eefe7b7fe1f2e4874cf6d7_prof);

    }

    // line 2
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_7e45c6f95f4c235e6c6ec191df4aefff647c004b63044e0714a4e957b0b06f37 = $this->env->getExtension("native_profiler");
        $__internal_7e45c6f95f4c235e6c6ec191df4aefff647c004b63044e0714a4e957b0b06f37->enter($__internal_7e45c6f95f4c235e6c6ec191df4aefff647c004b63044e0714a4e957b0b06f37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 3
        echo "
<div class=\"well\">
\t<p>
\t<fieldset>
\t\t<legend>Suppression</legend>
\t\t";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSuppression"]) ? $context["formSuppression"] : $this->getContext($context, "formSuppression")), 'form');
        echo "
\t</fieldset>
\t</p>
</div>

";
        
        $__internal_7e45c6f95f4c235e6c6ec191df4aefff647c004b63044e0714a4e957b0b06f37->leave($__internal_7e45c6f95f4c235e6c6ec191df4aefff647c004b63044e0714a4e957b0b06f37_prof);

    }

    public function getTemplateName()
    {
        return "LIFOClassifBundle:Parametres:typeDecor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "LIFOClassifBundle::layoutGeneral.html.twig" %}*/
/* {% block LIFOClassif_body %}*/
/* */
/* <div class="well">*/
/* 	<p>*/
/* 	<fieldset>*/
/* 		<legend>Suppression</legend>*/
/* 		{{ form(formSuppression) }}*/
/* 	</fieldset>*/
/* 	</p>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
