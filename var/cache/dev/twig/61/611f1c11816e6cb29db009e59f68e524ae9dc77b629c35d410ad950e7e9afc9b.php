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
        $__internal_d1360b891360f08d2c9ae2c955ce2d01a329b5c0c365c92d4f09215a644f120f = $this->env->getExtension("native_profiler");
        $__internal_d1360b891360f08d2c9ae2c955ce2d01a329b5c0c365c92d4f09215a644f120f->enter($__internal_d1360b891360f08d2c9ae2c955ce2d01a329b5c0c365c92d4f09215a644f120f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Parametres:typeDecor.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1360b891360f08d2c9ae2c955ce2d01a329b5c0c365c92d4f09215a644f120f->leave($__internal_d1360b891360f08d2c9ae2c955ce2d01a329b5c0c365c92d4f09215a644f120f_prof);

    }

    // line 2
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_37ce1709d3f9c310e5d3de3ab525de1a290bc1cf0bf6bc6b1400baaaafac7e6c = $this->env->getExtension("native_profiler");
        $__internal_37ce1709d3f9c310e5d3de3ab525de1a290bc1cf0bf6bc6b1400baaaafac7e6c->enter($__internal_37ce1709d3f9c310e5d3de3ab525de1a290bc1cf0bf6bc6b1400baaaafac7e6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 3
        echo "
<div class=\"well\">
\t<fieldset>
\t\t<legend>Ajout</legend>
\t\t";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formAjoutTypeDecor"]) ? $context["formAjoutTypeDecor"] : $this->getContext($context, "formAjoutTypeDecor")), 'form');
        echo "
\t</fieldset>
\t<fieldset>
\t\t<legend>Suppression</legend>
\t\t";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSuppressionTypeDecor"]) ? $context["formSuppressionTypeDecor"] : $this->getContext($context, "formSuppressionTypeDecor")), 'form');
        echo "
\t</fieldset>
</div>

";
        
        $__internal_37ce1709d3f9c310e5d3de3ab525de1a290bc1cf0bf6bc6b1400baaaafac7e6c->leave($__internal_37ce1709d3f9c310e5d3de3ab525de1a290bc1cf0bf6bc6b1400baaaafac7e6c_prof);

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
        return array (  53 => 11,  46 => 7,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "LIFOClassifBundle::layoutGeneral.html.twig" %}*/
/* {% block LIFOClassif_body %}*/
/* */
/* <div class="well">*/
/* 	<fieldset>*/
/* 		<legend>Ajout</legend>*/
/* 		{{ form(formAjoutTypeDecor) }}*/
/* 	</fieldset>*/
/* 	<fieldset>*/
/* 		<legend>Suppression</legend>*/
/* 		{{ form(formSuppressionTypeDecor) }}*/
/* 	</fieldset>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
