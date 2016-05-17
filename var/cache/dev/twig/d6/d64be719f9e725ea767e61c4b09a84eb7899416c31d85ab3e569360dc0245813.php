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
        $__internal_9c977a17bc615f9a78adda6387e001214e8d8ce387209ad7b2f2dd0c4603f90c = $this->env->getExtension("native_profiler");
        $__internal_9c977a17bc615f9a78adda6387e001214e8d8ce387209ad7b2f2dd0c4603f90c->enter($__internal_9c977a17bc615f9a78adda6387e001214e8d8ce387209ad7b2f2dd0c4603f90c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Platform:admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c977a17bc615f9a78adda6387e001214e8d8ce387209ad7b2f2dd0c4603f90c->leave($__internal_9c977a17bc615f9a78adda6387e001214e8d8ce387209ad7b2f2dd0c4603f90c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8f9fa97e93db0be7612824e6c4fd252f1ea6bb4c36c4f4df11f04886195981bd = $this->env->getExtension("native_profiler");
        $__internal_8f9fa97e93db0be7612824e6c4fd252f1ea6bb4c36c4f4df11f04886195981bd->enter($__internal_8f9fa97e93db0be7612824e6c4fd252f1ea6bb4c36c4f4df11f04886195981bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Upload";
        
        $__internal_8f9fa97e93db0be7612824e6c4fd252f1ea6bb4c36c4f4df11f04886195981bd->leave($__internal_8f9fa97e93db0be7612824e6c4fd252f1ea6bb4c36c4f4df11f04886195981bd_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_a9afee4655b4263969a91c3e35c193ca332ba65a5c0babf49dfbd240f78bb38a = $this->env->getExtension("native_profiler");
        $__internal_a9afee4655b4263969a91c3e35c193ca332ba65a5c0babf49dfbd240f78bb38a->enter($__internal_a9afee4655b4263969a91c3e35c193ca332ba65a5c0babf49dfbd240f78bb38a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

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
        
        $__internal_a9afee4655b4263969a91c3e35c193ca332ba65a5c0babf49dfbd240f78bb38a->leave($__internal_a9afee4655b4263969a91c3e35c193ca332ba65a5c0babf49dfbd240f78bb38a_prof);

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
/* {% block title %}{{ parent() }} - Upload{% endblock %}*/
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
