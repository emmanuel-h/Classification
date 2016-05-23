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
        $__internal_d3a8194384bfb793108036ce577c1d947677d86fb549e6c0e73012fff1356c0a = $this->env->getExtension("native_profiler");
        $__internal_d3a8194384bfb793108036ce577c1d947677d86fb549e6c0e73012fff1356c0a->enter($__internal_d3a8194384bfb793108036ce577c1d947677d86fb549e6c0e73012fff1356c0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Admin/ajout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3a8194384bfb793108036ce577c1d947677d86fb549e6c0e73012fff1356c0a->leave($__internal_d3a8194384bfb793108036ce577c1d947677d86fb549e6c0e73012fff1356c0a_prof);

    }

    // line 3
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_1b10b09b8ba1ba1c2fe6833e059ff88a08f5146e77e81aa0e81c378bc0b65584 = $this->env->getExtension("native_profiler");
        $__internal_1b10b09b8ba1ba1c2fe6833e059ff88a08f5146e77e81aa0e81c378bc0b65584->enter($__internal_1b10b09b8ba1ba1c2fe6833e059ff88a08f5146e77e81aa0e81c378bc0b65584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

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
        
        $__internal_1b10b09b8ba1ba1c2fe6833e059ff88a08f5146e77e81aa0e81c378bc0b65584->leave($__internal_1b10b09b8ba1ba1c2fe6833e059ff88a08f5146e77e81aa0e81c378bc0b65584_prof);

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
