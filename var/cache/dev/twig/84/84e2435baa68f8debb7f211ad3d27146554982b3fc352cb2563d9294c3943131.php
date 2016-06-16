<?php

/* @LIFOClassif/Parametres/typeDecor.html.twig */
class __TwigTemplate_cf754b65a9fcc386cc0b043f67d2001a45544832f884e718a843eaf06c23f5c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layoutGeneral.html.twig", "@LIFOClassif/Parametres/typeDecor.html.twig", 1);
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
        $__internal_53d8a51865c7c03f54c99d30b7c435749a37f4a7db4b82ed29508924a4694228 = $this->env->getExtension("native_profiler");
        $__internal_53d8a51865c7c03f54c99d30b7c435749a37f4a7db4b82ed29508924a4694228->enter($__internal_53d8a51865c7c03f54c99d30b7c435749a37f4a7db4b82ed29508924a4694228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Parametres/typeDecor.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53d8a51865c7c03f54c99d30b7c435749a37f4a7db4b82ed29508924a4694228->leave($__internal_53d8a51865c7c03f54c99d30b7c435749a37f4a7db4b82ed29508924a4694228_prof);

    }

    // line 2
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_5d738f54e7928d2e49527c91c180701aacfc8b38f85a5f8db6376230359aa628 = $this->env->getExtension("native_profiler");
        $__internal_5d738f54e7928d2e49527c91c180701aacfc8b38f85a5f8db6376230359aa628->enter($__internal_5d738f54e7928d2e49527c91c180701aacfc8b38f85a5f8db6376230359aa628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

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
        
        $__internal_5d738f54e7928d2e49527c91c180701aacfc8b38f85a5f8db6376230359aa628->leave($__internal_5d738f54e7928d2e49527c91c180701aacfc8b38f85a5f8db6376230359aa628_prof);

    }

    public function getTemplateName()
    {
        return "@LIFOClassif/Parametres/typeDecor.html.twig";
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
