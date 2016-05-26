<?php

/* LIFOClassifBundle:Parametres:positionDecor.html.twig */
class __TwigTemplate_cf209373ace62e421c9220f48e92f5ed5e11ffdbee64d914aea049a1939926fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layoutAdmin.html.twig", "LIFOClassifBundle:Parametres:positionDecor.html.twig", 1);
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
        $__internal_6f376c41219178fc9cf74d648bb88a00faf6765fd09925db1952f4a4bd19be23 = $this->env->getExtension("native_profiler");
        $__internal_6f376c41219178fc9cf74d648bb88a00faf6765fd09925db1952f4a4bd19be23->enter($__internal_6f376c41219178fc9cf74d648bb88a00faf6765fd09925db1952f4a4bd19be23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Parametres:positionDecor.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f376c41219178fc9cf74d648bb88a00faf6765fd09925db1952f4a4bd19be23->leave($__internal_6f376c41219178fc9cf74d648bb88a00faf6765fd09925db1952f4a4bd19be23_prof);

    }

    // line 3
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_cd6f576240f405a1d39cf6c00962b8de0ff513e01d3ccaad00d699533d26abd0 = $this->env->getExtension("native_profiler");
        $__internal_cd6f576240f405a1d39cf6c00962b8de0ff513e01d3ccaad00d699533d26abd0->enter($__internal_cd6f576240f405a1d39cf6c00962b8de0ff513e01d3ccaad00d699533d26abd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 4
        echo "
<div class=\"well\">
<p>
<fieldset>
<legend>Ajout d'une position de décor</legend>
";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formAjoutDecor"]) ? $context["formAjoutDecor"] : $this->getContext($context, "formAjoutDecor")), 'form');
        echo "
</fieldset>
<fieldset>
<legend>Ajout d'un type de décor</legend>
";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formAjoutTypeDecor"]) ? $context["formAjoutTypeDecor"] : $this->getContext($context, "formAjoutTypeDecor")), 'form');
        echo "
</fieldset>
</p>
</div>

";
        
        $__internal_cd6f576240f405a1d39cf6c00962b8de0ff513e01d3ccaad00d699533d26abd0->leave($__internal_cd6f576240f405a1d39cf6c00962b8de0ff513e01d3ccaad00d699533d26abd0_prof);

    }

    public function getTemplateName()
    {
        return "LIFOClassifBundle:Parametres:positionDecor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 13,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "LIFOClassifBundle::layoutAdmin.html.twig" %}*/
/* */
/* {% block LIFOClassif_body %}*/
/* */
/* <div class="well">*/
/* <p>*/
/* <fieldset>*/
/* <legend>Ajout d'une position de décor</legend>*/
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
