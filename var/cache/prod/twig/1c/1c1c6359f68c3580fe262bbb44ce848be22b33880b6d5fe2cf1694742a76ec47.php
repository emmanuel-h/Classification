<?php

/* @LIFOClassif/Parametres/typeDecor.html.twig */
class __TwigTemplate_23c0ba285eda9ada13aa36c7014e187c958b2d990b12b27b1385fd30e1c158af extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        // line 3
        echo "
<div class=\"well\">
\t<fieldset>
\t\t<legend>Ajout</legend>
\t\t\t";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formAjoutTypeDecor"]) ? $context["formAjoutTypeDecor"] : null), 'form_start', array("name" => "formAjoutTypeDecor"));
        echo "
\t\t\t";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formAjoutTypeDecor"]) ? $context["formAjoutTypeDecor"] : null), 'rest');
        echo "
\t\t\t";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formAjoutTypeDecor"]) ? $context["formAjoutTypeDecor"] : null), 'form_end');
        echo "
\t</fieldset>
\t<fieldset>
\t\t<legend>Suppression</legend>
\t\t\t";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSuppressionTypeDecor"]) ? $context["formSuppressionTypeDecor"] : null), 'form_start', array("name" => "formSuppressionTypeDecor"));
        echo "
\t\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formSuppressionTypeDecor"]) ? $context["formSuppressionTypeDecor"] : null), 'rest');
        echo "
\t\t\t";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSuppressionTypeDecor"]) ? $context["formSuppressionTypeDecor"] : null), 'form_end');
        echo "
\t</fieldset>
</div>

";
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
        return array (  60 => 15,  56 => 14,  52 => 13,  45 => 9,  41 => 8,  37 => 7,  31 => 3,  28 => 2,  11 => 1,);
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
