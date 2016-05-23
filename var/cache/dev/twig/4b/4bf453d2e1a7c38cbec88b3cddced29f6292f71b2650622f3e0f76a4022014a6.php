<?php

/* @LIFOClassif/Admin/suppression.html.twig */
class __TwigTemplate_8b6a650de50db4c5290bb2cee0cf67ad4fe7ac5f54d4f30e50b7b55a4efc92f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layoutAdmin.html.twig", "@LIFOClassif/Admin/suppression.html.twig", 1);
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
        $__internal_db4396fe009eaf18f8a589c19cbb96b83e425d5fc57627c542c7d66e2c470c40 = $this->env->getExtension("native_profiler");
        $__internal_db4396fe009eaf18f8a589c19cbb96b83e425d5fc57627c542c7d66e2c470c40->enter($__internal_db4396fe009eaf18f8a589c19cbb96b83e425d5fc57627c542c7d66e2c470c40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Admin/suppression.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db4396fe009eaf18f8a589c19cbb96b83e425d5fc57627c542c7d66e2c470c40->leave($__internal_db4396fe009eaf18f8a589c19cbb96b83e425d5fc57627c542c7d66e2c470c40_prof);

    }

    // line 3
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_1208032cacc52683fb25ffa09f5aebba1983ebf5aae238f55cff3f7eb2727153 = $this->env->getExtension("native_profiler");
        $__internal_1208032cacc52683fb25ffa09f5aebba1983ebf5aae238f55cff3f7eb2727153->enter($__internal_1208032cacc52683fb25ffa09f5aebba1983ebf5aae238f55cff3f7eb2727153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

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
</div>

";
        
        $__internal_1208032cacc52683fb25ffa09f5aebba1983ebf5aae238f55cff3f7eb2727153->leave($__internal_1208032cacc52683fb25ffa09f5aebba1983ebf5aae238f55cff3f7eb2727153_prof);

    }

    public function getTemplateName()
    {
        return "@LIFOClassif/Admin/suppression.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "LIFOClassifBundle::layoutAdmin.html.twig" %}*/
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
/* </div>*/
/* */
/* {% endblock %}*/
