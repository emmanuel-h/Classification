<?php

/* @LIFOClassif/Admin/ajout.html.twig */
class __TwigTemplate_c44044dfaf95f7ecb096c1d0ee456b6062343492b8d32080eb7ea9df697bb782 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layoutAdmin.html.twig", "@LIFOClassif/Admin/ajout.html.twig", 1);
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
        $__internal_538b66c9372cd60b612264747d35a21d6209687cca8b5c911cbd4760b379a281 = $this->env->getExtension("native_profiler");
        $__internal_538b66c9372cd60b612264747d35a21d6209687cca8b5c911cbd4760b379a281->enter($__internal_538b66c9372cd60b612264747d35a21d6209687cca8b5c911cbd4760b379a281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Admin/ajout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_538b66c9372cd60b612264747d35a21d6209687cca8b5c911cbd4760b379a281->leave($__internal_538b66c9372cd60b612264747d35a21d6209687cca8b5c911cbd4760b379a281_prof);

    }

    // line 3
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_ad36343e15ec0b09445f0b8fe02531b535d2c026350def8a56a27167b43bc160 = $this->env->getExtension("native_profiler");
        $__internal_ad36343e15ec0b09445f0b8fe02531b535d2c026350def8a56a27167b43bc160->enter($__internal_ad36343e15ec0b09445f0b8fe02531b535d2c026350def8a56a27167b43bc160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

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
        
        $__internal_ad36343e15ec0b09445f0b8fe02531b535d2c026350def8a56a27167b43bc160->leave($__internal_ad36343e15ec0b09445f0b8fe02531b535d2c026350def8a56a27167b43bc160_prof);

    }

    public function getTemplateName()
    {
        return "@LIFOClassif/Admin/ajout.html.twig";
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
