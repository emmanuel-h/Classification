<?php

/* @LIFOClassif/Parametres/positionDecor.html.twig */
class __TwigTemplate_4ed6a72381f875d7e92d4ca634314a67d4230eec2e6c56679c10cd111eb80b6a extends Twig_Template
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
        $__internal_5b8758ac09afb614d5fa1e58252f1933c7d5d4e0ca677328f772cb00e46bb27f = $this->env->getExtension("native_profiler");
        $__internal_5b8758ac09afb614d5fa1e58252f1933c7d5d4e0ca677328f772cb00e46bb27f->enter($__internal_5b8758ac09afb614d5fa1e58252f1933c7d5d4e0ca677328f772cb00e46bb27f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Parametres/positionDecor.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b8758ac09afb614d5fa1e58252f1933c7d5d4e0ca677328f772cb00e46bb27f->leave($__internal_5b8758ac09afb614d5fa1e58252f1933c7d5d4e0ca677328f772cb00e46bb27f_prof);

    }

    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_74a16047e9799aba7659e6409f4b08d8c4b8f8541959cdfe07537666f30fad92 = $this->env->getExtension("native_profiler");
        $__internal_74a16047e9799aba7659e6409f4b08d8c4b8f8541959cdfe07537666f30fad92->enter($__internal_74a16047e9799aba7659e6409f4b08d8c4b8f8541959cdfe07537666f30fad92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 3
        echo "
<div class=\"well\">
\t<fieldset>
\t\t<legend>Ajout</legend>
\t\t\t";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formAjoutDecor"]) ? $context["formAjoutDecor"] : $this->getContext($context, "formAjoutDecor")), 'form_start', array("name" => "formAjoutDecor"));
        echo "
\t\t\t";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formAjoutDecor"]) ? $context["formAjoutDecor"] : $this->getContext($context, "formAjoutDecor")), 'rest');
        echo "
\t\t\t";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formAjoutDecor"]) ? $context["formAjoutDecor"] : $this->getContext($context, "formAjoutDecor")), 'form_end');
        echo "
\t</fieldset>
\t<fieldset>
\t\t<legend>Suppression</legend>
\t\t\t";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSuppressionDecor"]) ? $context["formSuppressionDecor"] : $this->getContext($context, "formSuppressionDecor")), 'form_start', array("name" => "formSuppressionDecor"));
        echo "
\t\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formSuppressionDecor"]) ? $context["formSuppressionDecor"] : $this->getContext($context, "formSuppressionDecor")), 'rest');
        echo "
\t\t\t";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSuppressionDecor"]) ? $context["formSuppressionDecor"] : $this->getContext($context, "formSuppressionDecor")), 'form_end');
        echo "
\t</fieldset>
</div>

";
        
        $__internal_74a16047e9799aba7659e6409f4b08d8c4b8f8541959cdfe07537666f30fad92->leave($__internal_74a16047e9799aba7659e6409f4b08d8c4b8f8541959cdfe07537666f30fad92_prof);

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
        return array (  68 => 15,  64 => 14,  60 => 13,  53 => 9,  49 => 8,  45 => 7,  39 => 3,  11 => 1,);
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