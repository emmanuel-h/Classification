<?php

/* @LIFOClassif/PanelAdmin/admin.html.twig */
class __TwigTemplate_2377f6a233d1c4a8db010d3c7f0b0d3c5b0a9ea5c4ee8bd71b3a44d358dad317 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("adminGeneral.html.twig", "@LIFOClassif/PanelAdmin/admin.html.twig", 1);
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
        $__internal_a91592c49cc1d1b49111c0d728242cfab199870518c2e6ac68e0f34d1fb04a1e = $this->env->getExtension("native_profiler");
        $__internal_a91592c49cc1d1b49111c0d728242cfab199870518c2e6ac68e0f34d1fb04a1e->enter($__internal_a91592c49cc1d1b49111c0d728242cfab199870518c2e6ac68e0f34d1fb04a1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/PanelAdmin/admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a91592c49cc1d1b49111c0d728242cfab199870518c2e6ac68e0f34d1fb04a1e->leave($__internal_a91592c49cc1d1b49111c0d728242cfab199870518c2e6ac68e0f34d1fb04a1e_prof);

    }

    // line 3
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_f0d62435e3e817d520f5d4c666876a60c32c5878a2904740f5900ecf14c7c088 = $this->env->getExtension("native_profiler");
        $__internal_f0d62435e3e817d520f5d4c666876a60c32c5878a2904740f5900ecf14c7c088->enter($__internal_f0d62435e3e817d520f5d4c666876a60c32c5878a2904740f5900ecf14c7c088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

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
        
        $__internal_f0d62435e3e817d520f5d4c666876a60c32c5878a2904740f5900ecf14c7c088->leave($__internal_f0d62435e3e817d520f5d4c666876a60c32c5878a2904740f5900ecf14c7c088_prof);

    }

    public function getTemplateName()
    {
        return "@LIFOClassif/PanelAdmin/admin.html.twig";
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
