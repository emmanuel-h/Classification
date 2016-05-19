<?php

/* @LIFOClassif/Platform/admin.html.twig */
class __TwigTemplate_e72dbf8f8347393ed38ee2e1ed6bc42dc7eff28829fe907e5bf38e7e0d61af49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layout.html.twig", "@LIFOClassif/Platform/admin.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'LIFOClassif_body' => array($this, 'block_LIFOClassif_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LIFOClassifBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0aceccb71ca351519242375de884942cadb005491a44b90aeb95cc174eca188a = $this->env->getExtension("native_profiler");
        $__internal_0aceccb71ca351519242375de884942cadb005491a44b90aeb95cc174eca188a->enter($__internal_0aceccb71ca351519242375de884942cadb005491a44b90aeb95cc174eca188a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Platform/admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0aceccb71ca351519242375de884942cadb005491a44b90aeb95cc174eca188a->leave($__internal_0aceccb71ca351519242375de884942cadb005491a44b90aeb95cc174eca188a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d260ca56ca92d12ee72041dfef47043058293099e446f28074cefe8a8cdfc3b5 = $this->env->getExtension("native_profiler");
        $__internal_d260ca56ca92d12ee72041dfef47043058293099e446f28074cefe8a8cdfc3b5->enter($__internal_d260ca56ca92d12ee72041dfef47043058293099e446f28074cefe8a8cdfc3b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Administration";
        
        $__internal_d260ca56ca92d12ee72041dfef47043058293099e446f28074cefe8a8cdfc3b5->leave($__internal_d260ca56ca92d12ee72041dfef47043058293099e446f28074cefe8a8cdfc3b5_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_232013908c78777b450f8f199e9c42f4d504dca3b3bbc27c46b3b8c9c838b562 = $this->env->getExtension("native_profiler");
        $__internal_232013908c78777b450f8f199e9c42f4d504dca3b3bbc27c46b3b8c9c838b562->enter($__internal_232013908c78777b450f8f199e9c42f4d504dca3b3bbc27c46b3b8c9c838b562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "
<div class=\"well\">
<p>
<fieldset>
<legend>Suppression</legend>
";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSuppression"]) ? $context["formSuppression"] : $this->getContext($context, "formSuppression")), 'form');
        echo "
</fieldset>
</p>
<p>
<fieldset>
<legend>Ajout d'un décor</legend>
";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formAjoutDecor"]) ? $context["formAjoutDecor"] : $this->getContext($context, "formAjoutDecor")), 'form');
        echo "
</fieldset>
<fieldset>
<legend>Ajout d'un type de décor</legend>
";
        // line 21
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formAjoutTypeDecor"]) ? $context["formAjoutTypeDecor"] : $this->getContext($context, "formAjoutTypeDecor")), 'form');
        echo "
</fieldset>
</p>
</div>

";
        
        $__internal_232013908c78777b450f8f199e9c42f4d504dca3b3bbc27c46b3b8c9c838b562->leave($__internal_232013908c78777b450f8f199e9c42f4d504dca3b3bbc27c46b3b8c9c838b562_prof);

    }

    public function getTemplateName()
    {
        return "@LIFOClassif/Platform/admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 21,  70 => 17,  61 => 11,  54 => 6,  48 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "LIFOClassifBundle::layout.html.twig" %}*/
/* */
/* {% block title %}{{ parent() }} - Administration{% endblock %}*/
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
/* <p>*/
/* <fieldset>*/
/* <legend>Ajout d'un décor</legend>*/
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
