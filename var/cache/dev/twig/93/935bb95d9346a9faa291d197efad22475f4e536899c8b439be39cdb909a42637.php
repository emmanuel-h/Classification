<?php

/* @LIFOClassif/Platform/recherche.html.twig */
class __TwigTemplate_197a2bc7dbeeae78a123c058f6ba898579a32e6e18909d6330a667da26ba2579 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layoutGeneral.html.twig", "@LIFOClassif/Platform/recherche.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'LIFOClassif_body' => array($this, 'block_LIFOClassif_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LIFOClassifBundle::layoutGeneral.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_62c7cc6e18d15599a2fddbe9890135fe95c4a33db11b949f313e62f73cd751eb = $this->env->getExtension("native_profiler");
        $__internal_62c7cc6e18d15599a2fddbe9890135fe95c4a33db11b949f313e62f73cd751eb->enter($__internal_62c7cc6e18d15599a2fddbe9890135fe95c4a33db11b949f313e62f73cd751eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Platform/recherche.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62c7cc6e18d15599a2fddbe9890135fe95c4a33db11b949f313e62f73cd751eb->leave($__internal_62c7cc6e18d15599a2fddbe9890135fe95c4a33db11b949f313e62f73cd751eb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5742785a72c05cc8fbfd74e8206947742f075a51012d40aa424ee11c1d016ff0 = $this->env->getExtension("native_profiler");
        $__internal_5742785a72c05cc8fbfd74e8206947742f075a51012d40aa424ee11c1d016ff0->enter($__internal_5742785a72c05cc8fbfd74e8206947742f075a51012d40aa424ee11c1d016ff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Recherche";
        
        $__internal_5742785a72c05cc8fbfd74e8206947742f075a51012d40aa424ee11c1d016ff0->leave($__internal_5742785a72c05cc8fbfd74e8206947742f075a51012d40aa424ee11c1d016ff0_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_b9b65195ab36851c82a7eeaef67e4a2ac98eca5362b0e2efc3d6b2c9d41173da = $this->env->getExtension("native_profiler");
        $__internal_b9b65195ab36851c82a7eeaef67e4a2ac98eca5362b0e2efc3d6b2c9d41173da->enter($__internal_b9b65195ab36851c82a7eeaef67e4a2ac98eca5362b0e2efc3d6b2c9d41173da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "<div class=\"well\">
\t";
        // line 7
        if (((isset($context["messageImportant"]) ? $context["messageImportant"] : $this->getContext($context, "messageImportant")) != "")) {
            // line 8
            echo "      <div class=\"alert alert-warning\" role=\"alert\">
\t\t<strong>Attention ! </strong>";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["messageImportant"]) ? $context["messageImportant"] : $this->getContext($context, "messageImportant")), "html", null, true);
            echo "
\t</div>
\t";
        }
        // line 12
        echo "\t<p>
\t\t<fieldset>
\t\t\t<legend>Rechercher par identifiant</legend>
\t\t\t";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formRechercheID"]) ? $context["formRechercheID"] : $this->getContext($context, "formRechercheID")), 'form_start', array("name" => "formRechercheID"));
        echo "
\t\t\t";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formRechercheID"]) ? $context["formRechercheID"] : $this->getContext($context, "formRechercheID")), 'rest');
        echo "
\t\t\t";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formRechercheID"]) ? $context["formRechercheID"] : $this->getContext($context, "formRechercheID")), 'form_end');
        echo "
\t\t</fieldset>
\t</p>
\t<p>
\t\t<fieldset>
\t\t\t<legend> Rechercher par localisation </legend>
\t\t\t";
        // line 23
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formRechercheLocalisation"]) ? $context["formRechercheLocalisation"] : $this->getContext($context, "formRechercheLocalisation")), 'form_start', array("name" => "FormRechercheLocalisation"));
        echo "
\t\t\t";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formRechercheLocalisation"]) ? $context["formRechercheLocalisation"] : $this->getContext($context, "formRechercheLocalisation")), 'rest');
        echo "
\t\t\t";
        // line 25
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formRechercheLocalisation"]) ? $context["formRechercheLocalisation"] : $this->getContext($context, "formRechercheLocalisation")), 'form_end');
        echo "
\t\t</fieldset>
\t</p>
\t<p>
\t\t<fieldset>
\t\t\t<legend>Rechercher par particularités</legend>
\t\t</fieldset>
<div>
";
        
        $__internal_b9b65195ab36851c82a7eeaef67e4a2ac98eca5362b0e2efc3d6b2c9d41173da->leave($__internal_b9b65195ab36851c82a7eeaef67e4a2ac98eca5362b0e2efc3d6b2c9d41173da_prof);

    }

    public function getTemplateName()
    {
        return "@LIFOClassif/Platform/recherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 25,  94 => 24,  90 => 23,  81 => 17,  77 => 16,  73 => 15,  68 => 12,  62 => 9,  59 => 8,  57 => 7,  54 => 6,  48 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "LIFOClassifBundle::layoutGeneral.html.twig" %}*/
/* */
/* {% block title %}{{ parent() }} - Recherche{% endblock %}*/
/* */
/* {% block LIFOClassif_body %}*/
/* <div class="well">*/
/* 	{%  if messageImportant != "" %}*/
/*       <div class="alert alert-warning" role="alert">*/
/* 		<strong>Attention ! </strong>{{messageImportant}}*/
/* 	</div>*/
/* 	{% endif %}*/
/* 	<p>*/
/* 		<fieldset>*/
/* 			<legend>Rechercher par identifiant</legend>*/
/* 			{{ form_start(formRechercheID, {'name':'formRechercheID' })  }}*/
/* 			{{ form_rest(formRechercheID) }}*/
/* 			{{ form_end(formRechercheID) }}*/
/* 		</fieldset>*/
/* 	</p>*/
/* 	<p>*/
/* 		<fieldset>*/
/* 			<legend> Rechercher par localisation </legend>*/
/* 			{{ form_start(formRechercheLocalisation, {'name':'FormRechercheLocalisation' })  }}*/
/* 			{{ form_rest(formRechercheLocalisation) }}*/
/* 			{{ form_end(formRechercheLocalisation) }}*/
/* 		</fieldset>*/
/* 	</p>*/
/* 	<p>*/
/* 		<fieldset>*/
/* 			<legend>Rechercher par particularités</legend>*/
/* 		</fieldset>*/
/* <div>*/
/* {% endblock %}*/
