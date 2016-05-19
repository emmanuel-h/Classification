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
        $__internal_57397c78a4b543de05fdf2804c13a7df8c2b531cb97f57e6b0bad092bbba8d1f = $this->env->getExtension("native_profiler");
        $__internal_57397c78a4b543de05fdf2804c13a7df8c2b531cb97f57e6b0bad092bbba8d1f->enter($__internal_57397c78a4b543de05fdf2804c13a7df8c2b531cb97f57e6b0bad092bbba8d1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Admin/suppression.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57397c78a4b543de05fdf2804c13a7df8c2b531cb97f57e6b0bad092bbba8d1f->leave($__internal_57397c78a4b543de05fdf2804c13a7df8c2b531cb97f57e6b0bad092bbba8d1f_prof);

    }

    // line 3
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_ce714f6be18c8aa1713f83cc76ae86bc8d07edc953a9655389cf8e2989ecdb8a = $this->env->getExtension("native_profiler");
        $__internal_ce714f6be18c8aa1713f83cc76ae86bc8d07edc953a9655389cf8e2989ecdb8a->enter($__internal_ce714f6be18c8aa1713f83cc76ae86bc8d07edc953a9655389cf8e2989ecdb8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

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
        
        $__internal_ce714f6be18c8aa1713f83cc76ae86bc8d07edc953a9655389cf8e2989ecdb8a->leave($__internal_ce714f6be18c8aa1713f83cc76ae86bc8d07edc953a9655389cf8e2989ecdb8a_prof);

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
