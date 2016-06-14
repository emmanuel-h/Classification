<?php

/* @LIFOClassif/Parametres/positionDecor.html.twig */
class __TwigTemplate_b3534b3c324951b0f1a359ded0d13fbc04a8580fec348772e79bd30b1fdbdbfb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layoutAdmin.html.twig", "@LIFOClassif/Parametres/positionDecor.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        // line 3
        echo "
<div class=\"well\">
\t<fieldset>
\t\t<legend>Ajout</legend>
\t\t\t";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formAjoutDecor"]) ? $context["formAjoutDecor"] : null), 'form_start', array("name" => "formAjoutDecor"));
        echo "
\t\t\t";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formAjoutDecor"]) ? $context["formAjoutDecor"] : null), 'rest');
        echo "
\t\t\t";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formAjoutDecor"]) ? $context["formAjoutDecor"] : null), 'form_end');
        echo "
\t</fieldset>
\t<fieldset>
\t\t<legend>Suppression</legend>
\t\t\t";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSuppressionDecor"]) ? $context["formSuppressionDecor"] : null), 'form_start', array("name" => "formSuppressionDecor"));
        echo "
\t\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formSuppressionDecor"]) ? $context["formSuppressionDecor"] : null), 'rest');
        echo "
\t\t\t";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSuppressionDecor"]) ? $context["formSuppressionDecor"] : null), 'form_end');
        echo "
\t</fieldset>
</div>

";
    }

    public function getTemplateName()
    {
        return "@LIFOClassif/Parametres/positionDecor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 15,  55 => 14,  51 => 13,  44 => 9,  40 => 8,  36 => 7,  30 => 3,  11 => 1,);
    }
}
/* {% extends "LIFOClassifBundle::layoutAdmin.html.twig" %} {% block*/
/* LIFOClassif_body %}*/
/* */
/* <div class="well">*/
/* 	<fieldset>*/
/* 		<legend>Ajout</legend>*/
/* 			{{ form_start(formAjoutDecor, {'name':'formAjoutDecor' })  }}*/
/* 			{{ form_rest(formAjoutDecor) }}*/
/* 			{{ form_end(formAjoutDecor) }}*/
/* 	</fieldset>*/
/* 	<fieldset>*/
/* 		<legend>Suppression</legend>*/
/* 			{{ form_start(formSuppressionDecor, {'name':'formSuppressionDecor' })  }}*/
/* 			{{ form_rest(formSuppressionDecor) }}*/
/* 			{{ form_end(formSuppressionDecor) }}*/
/* 	</fieldset>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
