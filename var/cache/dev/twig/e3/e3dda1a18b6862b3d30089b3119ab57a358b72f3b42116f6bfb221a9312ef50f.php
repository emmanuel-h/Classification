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
        $__internal_9e6bd277afe23caa831ccd510ad8ea6a4c5d5a62f0d313a2d3ab0b02cd20d16c = $this->env->getExtension("native_profiler");
        $__internal_9e6bd277afe23caa831ccd510ad8ea6a4c5d5a62f0d313a2d3ab0b02cd20d16c->enter($__internal_9e6bd277afe23caa831ccd510ad8ea6a4c5d5a62f0d313a2d3ab0b02cd20d16c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Admin:suppression.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e6bd277afe23caa831ccd510ad8ea6a4c5d5a62f0d313a2d3ab0b02cd20d16c->leave($__internal_9e6bd277afe23caa831ccd510ad8ea6a4c5d5a62f0d313a2d3ab0b02cd20d16c_prof);

    }

    // line 3
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_843de6f14975ad9ecc6f20920500d4c245d69b8667e1473ffecb8b93668288ee = $this->env->getExtension("native_profiler");
        $__internal_843de6f14975ad9ecc6f20920500d4c245d69b8667e1473ffecb8b93668288ee->enter($__internal_843de6f14975ad9ecc6f20920500d4c245d69b8667e1473ffecb8b93668288ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

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
        
        $__internal_843de6f14975ad9ecc6f20920500d4c245d69b8667e1473ffecb8b93668288ee->leave($__internal_843de6f14975ad9ecc6f20920500d4c245d69b8667e1473ffecb8b93668288ee_prof);

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