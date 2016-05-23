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
        $__internal_88cb8545d268482c6efb1e568fe38b4a6c23db6058b73b3697be923a840ca6a6 = $this->env->getExtension("native_profiler");
        $__internal_88cb8545d268482c6efb1e568fe38b4a6c23db6058b73b3697be923a840ca6a6->enter($__internal_88cb8545d268482c6efb1e568fe38b4a6c23db6058b73b3697be923a840ca6a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Admin:suppression.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88cb8545d268482c6efb1e568fe38b4a6c23db6058b73b3697be923a840ca6a6->leave($__internal_88cb8545d268482c6efb1e568fe38b4a6c23db6058b73b3697be923a840ca6a6_prof);

    }

    // line 3
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_e728841e94c850cd208833444847e99e587381b885d081355f81974c348e777b = $this->env->getExtension("native_profiler");
        $__internal_e728841e94c850cd208833444847e99e587381b885d081355f81974c348e777b->enter($__internal_e728841e94c850cd208833444847e99e587381b885d081355f81974c348e777b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

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
        
        $__internal_e728841e94c850cd208833444847e99e587381b885d081355f81974c348e777b->leave($__internal_e728841e94c850cd208833444847e99e587381b885d081355f81974c348e777b_prof);

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
