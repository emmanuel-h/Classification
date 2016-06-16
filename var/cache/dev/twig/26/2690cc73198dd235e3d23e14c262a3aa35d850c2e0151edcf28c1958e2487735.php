<?php

/* @LIFOClassif/Admin/utilisateurRechercher.html.twig */
class __TwigTemplate_436ab21d8f6af235bd9e1d383dafcbd07141399d599f2485bbfaeb40c921b8cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layoutAdmin.html.twig", "@LIFOClassif/Admin/utilisateurRechercher.html.twig", 1);
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
        $__internal_686bda2f9386a7aca0ffba8941f32e72a9074d54327dd00430080fbda35d614b = $this->env->getExtension("native_profiler");
        $__internal_686bda2f9386a7aca0ffba8941f32e72a9074d54327dd00430080fbda35d614b->enter($__internal_686bda2f9386a7aca0ffba8941f32e72a9074d54327dd00430080fbda35d614b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Admin/utilisateurRechercher.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_686bda2f9386a7aca0ffba8941f32e72a9074d54327dd00430080fbda35d614b->leave($__internal_686bda2f9386a7aca0ffba8941f32e72a9074d54327dd00430080fbda35d614b_prof);

    }

    // line 3
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_e5c2f239b7a4ceb488dd787e80b7e409749f53e5f278068cde94166dd9292c96 = $this->env->getExtension("native_profiler");
        $__internal_e5c2f239b7a4ceb488dd787e80b7e409749f53e5f278068cde94166dd9292c96->enter($__internal_e5c2f239b7a4ceb488dd787e80b7e409749f53e5f278068cde94166dd9292c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 4
        echo "
<div class=\"well\">
\t<p>
\t\t";
        // line 7
        if (((isset($context["messageImportant"]) ? $context["messageImportant"] : $this->getContext($context, "messageImportant")) != "")) {
            // line 8
            echo "\t\t<div class=\"alert alert-warning\" role=\"alert\">
\t\t\t<strong>Attention ! </strong>";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["messageImportant"]) ? $context["messageImportant"] : $this->getContext($context, "messageImportant")), "html", null, true);
            echo "
\t\t</div>
\t\t";
        }
        // line 12
        echo "\t\t<fieldset>
\t\t\t<legend>Trouver un utilisateur</legend>
\t\t\t";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSearchUser"]) ? $context["formSearchUser"] : $this->getContext($context, "formSearchUser")), 'form');
        echo "
\t\t</fieldset>
\t</p>
</div>

";
        
        $__internal_e5c2f239b7a4ceb488dd787e80b7e409749f53e5f278068cde94166dd9292c96->leave($__internal_e5c2f239b7a4ceb488dd787e80b7e409749f53e5f278068cde94166dd9292c96_prof);

    }

    public function getTemplateName()
    {
        return "@LIFOClassif/Admin/utilisateurRechercher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 14,  56 => 12,  50 => 9,  47 => 8,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "LIFOClassifBundle::layoutAdmin.html.twig" %}*/
/* */
/* {% block LIFOClassif_body %}*/
/* */
/* <div class="well">*/
/* 	<p>*/
/* 		{%  if messageImportant != "" %}*/
/* 		<div class="alert alert-warning" role="alert">*/
/* 			<strong>Attention ! </strong>{{messageImportant}}*/
/* 		</div>*/
/* 		{%  endif %}*/
/* 		<fieldset>*/
/* 			<legend>Trouver un utilisateur</legend>*/
/* 			{{ form(formSearchUser) }}*/
/* 		</fieldset>*/
/* 	</p>*/
/* </div>*/
/* */
/* {% endblock %}*/
