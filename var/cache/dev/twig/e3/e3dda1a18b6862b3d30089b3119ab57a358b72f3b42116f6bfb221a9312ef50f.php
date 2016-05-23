<?php

/* LIFOClassifBundle:Admin:suppression.html.twig */
class __TwigTemplate_da161fac41b670f02d4b07ecf5ca694c5f13b5495f95efe81b414f9d47315c04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layoutAdmin.html.twig", "LIFOClassifBundle:Admin:suppression.html.twig", 1);
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
        $__internal_74036b0fde46cc4a7ab8e23f7960bae817ced77f1aff35bf86823fd5877dab14 = $this->env->getExtension("native_profiler");
        $__internal_74036b0fde46cc4a7ab8e23f7960bae817ced77f1aff35bf86823fd5877dab14->enter($__internal_74036b0fde46cc4a7ab8e23f7960bae817ced77f1aff35bf86823fd5877dab14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Admin:suppression.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74036b0fde46cc4a7ab8e23f7960bae817ced77f1aff35bf86823fd5877dab14->leave($__internal_74036b0fde46cc4a7ab8e23f7960bae817ced77f1aff35bf86823fd5877dab14_prof);

    }

    // line 3
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_d3669d3cee9b20024652789282a18cc7ded20f1163dbe4c86852ce80fcea2631 = $this->env->getExtension("native_profiler");
        $__internal_d3669d3cee9b20024652789282a18cc7ded20f1163dbe4c86852ce80fcea2631->enter($__internal_d3669d3cee9b20024652789282a18cc7ded20f1163dbe4c86852ce80fcea2631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

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
        
        $__internal_d3669d3cee9b20024652789282a18cc7ded20f1163dbe4c86852ce80fcea2631->leave($__internal_d3669d3cee9b20024652789282a18cc7ded20f1163dbe4c86852ce80fcea2631_prof);

    }

    public function getTemplateName()
    {
        return "LIFOClassifBundle:Admin:suppression.html.twig";
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
