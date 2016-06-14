<?php

/* LIFOClassifBundle:Admin:utilisateurRechercher.html.twig */
class __TwigTemplate_4b8304847d92efd0c472d3f95d125d36a1042b969463dce651e4cb95762fc0e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layoutAdmin.html.twig", "LIFOClassifBundle:Admin:utilisateurRechercher.html.twig", 1);
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
        $__internal_152562f2855e6d3d3099b00c7017161810f08ecbfaf463e1e9b274062c90b303 = $this->env->getExtension("native_profiler");
        $__internal_152562f2855e6d3d3099b00c7017161810f08ecbfaf463e1e9b274062c90b303->enter($__internal_152562f2855e6d3d3099b00c7017161810f08ecbfaf463e1e9b274062c90b303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Admin:utilisateurRechercher.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_152562f2855e6d3d3099b00c7017161810f08ecbfaf463e1e9b274062c90b303->leave($__internal_152562f2855e6d3d3099b00c7017161810f08ecbfaf463e1e9b274062c90b303_prof);

    }

    // line 3
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_360b32d1074f93a2c24049cd5155f46676a257d529effd88bf4b5e2297fc75af = $this->env->getExtension("native_profiler");
        $__internal_360b32d1074f93a2c24049cd5155f46676a257d529effd88bf4b5e2297fc75af->enter($__internal_360b32d1074f93a2c24049cd5155f46676a257d529effd88bf4b5e2297fc75af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

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
        
        $__internal_360b32d1074f93a2c24049cd5155f46676a257d529effd88bf4b5e2297fc75af->leave($__internal_360b32d1074f93a2c24049cd5155f46676a257d529effd88bf4b5e2297fc75af_prof);

    }

    public function getTemplateName()
    {
        return "LIFOClassifBundle:Admin:utilisateurRechercher.html.twig";
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
