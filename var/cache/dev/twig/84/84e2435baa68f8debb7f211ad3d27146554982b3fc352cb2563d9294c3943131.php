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
        $__internal_a533d14309ed2845778549b1e306a3fbdb70e1900223432d25f96b1d4bbc9fcb = $this->env->getExtension("native_profiler");
        $__internal_a533d14309ed2845778549b1e306a3fbdb70e1900223432d25f96b1d4bbc9fcb->enter($__internal_a533d14309ed2845778549b1e306a3fbdb70e1900223432d25f96b1d4bbc9fcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Parametres/typeDecor.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a533d14309ed2845778549b1e306a3fbdb70e1900223432d25f96b1d4bbc9fcb->leave($__internal_a533d14309ed2845778549b1e306a3fbdb70e1900223432d25f96b1d4bbc9fcb_prof);

    }

    // line 2
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_e99150df47a8b9f52ec8bfaedab876f9656615de315ebeb7cedf10190338a409 = $this->env->getExtension("native_profiler");
        $__internal_e99150df47a8b9f52ec8bfaedab876f9656615de315ebeb7cedf10190338a409->enter($__internal_e99150df47a8b9f52ec8bfaedab876f9656615de315ebeb7cedf10190338a409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 3
        echo "
<div class=\"well\">
\t<p>
\t<fieldset>
\t\t<legend>Suppression</legend>
\t\t";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSuppression"]) ? $context["formSuppression"] : $this->getContext($context, "formSuppression")), 'form');
        echo "
\t</fieldset>
\t</p>
</div>

";
        
        $__internal_e99150df47a8b9f52ec8bfaedab876f9656615de315ebeb7cedf10190338a409->leave($__internal_e99150df47a8b9f52ec8bfaedab876f9656615de315ebeb7cedf10190338a409_prof);

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
        return array (  47 => 8,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "LIFOClassifBundle::layoutGeneral.html.twig" %}*/
/* {% block LIFOClassif_body %}*/
/* */
/* <div class="well">*/
/* 	<p>*/
/* 	<fieldset>*/
/* 		<legend>Suppression</legend>*/
/* 		{{ form(formSuppression) }}*/
/* 	</fieldset>*/
/* 	</p>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
