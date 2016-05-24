<?php

/* LIFOClassifBundle:Admin:ajout.html.twig */
class __TwigTemplate_25cd4408d60cf68b43facb0c7a88edbde98337a84ff971dc3efc2b5af823c5b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layoutAdmin.html.twig", "LIFOClassifBundle:Admin:ajout.html.twig", 1);
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
        $__internal_6e939a124c290f89178bf040a6df82611a538ecacf604e51a1789657d746ae97 = $this->env->getExtension("native_profiler");
        $__internal_6e939a124c290f89178bf040a6df82611a538ecacf604e51a1789657d746ae97->enter($__internal_6e939a124c290f89178bf040a6df82611a538ecacf604e51a1789657d746ae97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Admin:ajout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e939a124c290f89178bf040a6df82611a538ecacf604e51a1789657d746ae97->leave($__internal_6e939a124c290f89178bf040a6df82611a538ecacf604e51a1789657d746ae97_prof);

    }

    // line 3
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_ad82f62aca5def814f485c0aca47285eda63da3fd063c32ba1cdf8b99598535d = $this->env->getExtension("native_profiler");
        $__internal_ad82f62aca5def814f485c0aca47285eda63da3fd063c32ba1cdf8b99598535d->enter($__internal_ad82f62aca5def814f485c0aca47285eda63da3fd063c32ba1cdf8b99598535d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 4
        echo "
<div class=\"well\">
<p>
<fieldset>
<legend>Ajout d'une position de décor</legend>
";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formAjoutDecor"]) ? $context["formAjoutDecor"] : $this->getContext($context, "formAjoutDecor")), 'form');
        echo "
</fieldset>
<fieldset>
<legend>Ajout d'un type de décor</legend>
";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formAjoutTypeDecor"]) ? $context["formAjoutTypeDecor"] : $this->getContext($context, "formAjoutTypeDecor")), 'form');
        echo "
</fieldset>
</p>
</div>

";
        
        $__internal_ad82f62aca5def814f485c0aca47285eda63da3fd063c32ba1cdf8b99598535d->leave($__internal_ad82f62aca5def814f485c0aca47285eda63da3fd063c32ba1cdf8b99598535d_prof);

    }

    public function getTemplateName()
    {
        return "LIFOClassifBundle:Admin:ajout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 13,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "LIFOClassifBundle::layoutAdmin.html.twig" %}*/
/* */
/* {% block LIFOClassif_body %}*/
/* */
/* <div class="well">*/
/* <p>*/
/* <fieldset>*/
/* <legend>Ajout d'une position de décor</legend>*/
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
