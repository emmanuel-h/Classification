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
        $__internal_74f5261999db7a7a98497d133301a9fd724902a27ed70cd3d479d5c13d588654 = $this->env->getExtension("native_profiler");
        $__internal_74f5261999db7a7a98497d133301a9fd724902a27ed70cd3d479d5c13d588654->enter($__internal_74f5261999db7a7a98497d133301a9fd724902a27ed70cd3d479d5c13d588654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Parametres:typeDecor.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74f5261999db7a7a98497d133301a9fd724902a27ed70cd3d479d5c13d588654->leave($__internal_74f5261999db7a7a98497d133301a9fd724902a27ed70cd3d479d5c13d588654_prof);

    }

    // line 2
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_cf28e44c73ef71e3758c4317dc690793a3fc1ed9d32f8ad30a29643d4d88c239 = $this->env->getExtension("native_profiler");
        $__internal_cf28e44c73ef71e3758c4317dc690793a3fc1ed9d32f8ad30a29643d4d88c239->enter($__internal_cf28e44c73ef71e3758c4317dc690793a3fc1ed9d32f8ad30a29643d4d88c239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 3
        echo "
<div class=\"well\">
\t<fieldset>
\t\t<legend>Ajout</legend>
\t\t\t";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formAjoutTypeDecor"]) ? $context["formAjoutTypeDecor"] : $this->getContext($context, "formAjoutTypeDecor")), 'form_start', array("name" => "formAjoutTypeDecor"));
        echo "
\t\t\t";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formAjoutTypeDecor"]) ? $context["formAjoutTypeDecor"] : $this->getContext($context, "formAjoutTypeDecor")), 'rest');
        echo "
\t\t\t";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formAjoutTypeDecor"]) ? $context["formAjoutTypeDecor"] : $this->getContext($context, "formAjoutTypeDecor")), 'form_end');
        echo "
\t</fieldset>
\t<fieldset>
\t\t<legend>Suppression</legend>
\t\t\t";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSuppressionTypeDecor"]) ? $context["formSuppressionTypeDecor"] : $this->getContext($context, "formSuppressionTypeDecor")), 'form_start', array("name" => "formSuppressionTypeDecor"));
        echo "
\t\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formSuppressionTypeDecor"]) ? $context["formSuppressionTypeDecor"] : $this->getContext($context, "formSuppressionTypeDecor")), 'rest');
        echo "
\t\t\t";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSuppressionTypeDecor"]) ? $context["formSuppressionTypeDecor"] : $this->getContext($context, "formSuppressionTypeDecor")), 'form_end');
        echo "
\t</fieldset>
</div>

";
        
        $__internal_cf28e44c73ef71e3758c4317dc690793a3fc1ed9d32f8ad30a29643d4d88c239->leave($__internal_cf28e44c73ef71e3758c4317dc690793a3fc1ed9d32f8ad30a29643d4d88c239_prof);

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
        return array (  69 => 15,  65 => 14,  61 => 13,  54 => 9,  50 => 8,  46 => 7,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "LIFOClassifBundle::layoutGeneral.html.twig" %}*/
/* {% block LIFOClassif_body %}*/
/* */
/* <div class="well">*/
/* 	<fieldset>*/
/* 		<legend>Ajout</legend>*/
/* 			{{ form_start(formAjoutTypeDecor, {'name':'formAjoutTypeDecor' })  }}*/
/* 			{{ form_rest(formAjoutTypeDecor) }}*/
/* 			{{ form_end(formAjoutTypeDecor) }}*/
/* 	</fieldset>*/
/* 	<fieldset>*/
/* 		<legend>Suppression</legend>*/
/* 			{{ form_start(formSuppressionTypeDecor, {'name':'formSuppressionTypeDecor' })  }}*/
/* 			{{ form_rest(formSuppressionTypeDecor) }}*/
/* 			{{ form_end(formSuppressionTypeDecor) }}*/
/* 	</fieldset>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
