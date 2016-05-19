<?php

/* LIFOClassifBundle:Platform:admin.html.twig */
class __TwigTemplate_d00e8cfbb7d8176720143bab1638307c0c77fcbe164a7434a464cdb060dd5c25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layout.html.twig", "LIFOClassifBundle:Platform:admin.html.twig", 1);
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
        $__internal_9d0e4fbb19dabcacb920c837cb62651a59cf8d5161635665fe57b538aa51c922 = $this->env->getExtension("native_profiler");
        $__internal_9d0e4fbb19dabcacb920c837cb62651a59cf8d5161635665fe57b538aa51c922->enter($__internal_9d0e4fbb19dabcacb920c837cb62651a59cf8d5161635665fe57b538aa51c922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Platform:admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d0e4fbb19dabcacb920c837cb62651a59cf8d5161635665fe57b538aa51c922->leave($__internal_9d0e4fbb19dabcacb920c837cb62651a59cf8d5161635665fe57b538aa51c922_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_60ac0abe3e62054f511806a4ad7aff62ad89f6a270a4c364718e7f46b7ab5b78 = $this->env->getExtension("native_profiler");
        $__internal_60ac0abe3e62054f511806a4ad7aff62ad89f6a270a4c364718e7f46b7ab5b78->enter($__internal_60ac0abe3e62054f511806a4ad7aff62ad89f6a270a4c364718e7f46b7ab5b78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Administration";
        
        $__internal_60ac0abe3e62054f511806a4ad7aff62ad89f6a270a4c364718e7f46b7ab5b78->leave($__internal_60ac0abe3e62054f511806a4ad7aff62ad89f6a270a4c364718e7f46b7ab5b78_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_2856f2517fa759be9f30ccd886137438f6ce835a996003d95e93403acdc8f5ac = $this->env->getExtension("native_profiler");
        $__internal_2856f2517fa759be9f30ccd886137438f6ce835a996003d95e93403acdc8f5ac->enter($__internal_2856f2517fa759be9f30ccd886137438f6ce835a996003d95e93403acdc8f5ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

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
        
        $__internal_2856f2517fa759be9f30ccd886137438f6ce835a996003d95e93403acdc8f5ac->leave($__internal_2856f2517fa759be9f30ccd886137438f6ce835a996003d95e93403acdc8f5ac_prof);

    }

    public function getTemplateName()
    {
        return "LIFOClassifBundle:Platform:admin.html.twig";
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
