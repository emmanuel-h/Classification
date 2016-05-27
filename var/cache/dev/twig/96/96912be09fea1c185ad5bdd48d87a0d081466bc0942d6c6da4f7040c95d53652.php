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
        $__internal_b91166be58fb6e36048b8de101536cd5af27a0a61aad588b6f1aaf04c0de7d86 = $this->env->getExtension("native_profiler");
        $__internal_b91166be58fb6e36048b8de101536cd5af27a0a61aad588b6f1aaf04c0de7d86->enter($__internal_b91166be58fb6e36048b8de101536cd5af27a0a61aad588b6f1aaf04c0de7d86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Parametres:positionDecor.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b91166be58fb6e36048b8de101536cd5af27a0a61aad588b6f1aaf04c0de7d86->leave($__internal_b91166be58fb6e36048b8de101536cd5af27a0a61aad588b6f1aaf04c0de7d86_prof);

    }

    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_70cd93afcd97a37625dc794bd6df3832fd3a887d60b8b94c3082bd94ecae4a41 = $this->env->getExtension("native_profiler");
        $__internal_70cd93afcd97a37625dc794bd6df3832fd3a887d60b8b94c3082bd94ecae4a41->enter($__internal_70cd93afcd97a37625dc794bd6df3832fd3a887d60b8b94c3082bd94ecae4a41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 3
        echo "
<div class=\"well\">
\t<fieldset>
\t\t<legend>Ajout</legend>
\t\t";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formAjoutDecor"]) ? $context["formAjoutDecor"] : $this->getContext($context, "formAjoutDecor")), 'form');
        echo "
\t</fieldset>
\t<fieldset>
\t\t<legend>Suppression</legend>
\t\t";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSuppressionDecor"]) ? $context["formSuppressionDecor"] : $this->getContext($context, "formSuppressionDecor")), 'form');
        echo "
\t</fieldset>
</div>

";
        
        $__internal_70cd93afcd97a37625dc794bd6df3832fd3a887d60b8b94c3082bd94ecae4a41->leave($__internal_70cd93afcd97a37625dc794bd6df3832fd3a887d60b8b94c3082bd94ecae4a41_prof);

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
        return array (  52 => 11,  45 => 7,  39 => 3,  11 => 1,);
    }
}
/* {% extends "LIFOClassifBundle::layoutAdmin.html.twig" %} {% block*/
/* LIFOClassif_body %}*/
/* */
/* <div class="well">*/
/* 	<fieldset>*/
/* 		<legend>Ajout</legend>*/
/* 		{{ form(formAjoutDecor) }}*/
/* 	</fieldset>*/
/* 	<fieldset>*/
/* 		<legend>Suppression</legend>*/
/* 		{{ form(formSuppressionDecor) }}*/
/* 	</fieldset>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
