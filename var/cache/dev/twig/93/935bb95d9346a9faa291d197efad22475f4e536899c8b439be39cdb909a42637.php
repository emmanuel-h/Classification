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
        $__internal_f468a1aac262cc0ae18dde9e2528103f07d8b148aa34fc9face2a3241ad33abc = $this->env->getExtension("native_profiler");
        $__internal_f468a1aac262cc0ae18dde9e2528103f07d8b148aa34fc9face2a3241ad33abc->enter($__internal_f468a1aac262cc0ae18dde9e2528103f07d8b148aa34fc9face2a3241ad33abc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Platform/recherche.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f468a1aac262cc0ae18dde9e2528103f07d8b148aa34fc9face2a3241ad33abc->leave($__internal_f468a1aac262cc0ae18dde9e2528103f07d8b148aa34fc9face2a3241ad33abc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5987fa848b8a9e956a62acdacc3400223c4006e7b58b710c4c9253d35f207457 = $this->env->getExtension("native_profiler");
        $__internal_5987fa848b8a9e956a62acdacc3400223c4006e7b58b710c4c9253d35f207457->enter($__internal_5987fa848b8a9e956a62acdacc3400223c4006e7b58b710c4c9253d35f207457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Recherche";
        
        $__internal_5987fa848b8a9e956a62acdacc3400223c4006e7b58b710c4c9253d35f207457->leave($__internal_5987fa848b8a9e956a62acdacc3400223c4006e7b58b710c4c9253d35f207457_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_c906f2671f65c3bfd1aded4e2572bbab43d5fa5f05d51aee6e105f93bb08b38d = $this->env->getExtension("native_profiler");
        $__internal_c906f2671f65c3bfd1aded4e2572bbab43d5fa5f05d51aee6e105f93bb08b38d->enter($__internal_c906f2671f65c3bfd1aded4e2572bbab43d5fa5f05d51aee6e105f93bb08b38d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

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
\t\t\t";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formRechercheParticularites"]) ? $context["formRechercheParticularites"] : $this->getContext($context, "formRechercheParticularites")), 'form_start', array("name" => "FormRechercheParticularites"));
        echo "
\t\t\t";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formRechercheParticularites"]) ? $context["formRechercheParticularites"] : $this->getContext($context, "formRechercheParticularites")), 'rest');
        echo "
\t\t\t";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formRechercheParticularites"]) ? $context["formRechercheParticularites"] : $this->getContext($context, "formRechercheParticularites")), 'form_end');
        echo "
\t\t</fieldset>
<div>
";
        
        $__internal_c906f2671f65c3bfd1aded4e2572bbab43d5fa5f05d51aee6e105f93bb08b38d->leave($__internal_c906f2671f65c3bfd1aded4e2572bbab43d5fa5f05d51aee6e105f93bb08b38d_prof);

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
        return array (  115 => 33,  111 => 32,  107 => 31,  98 => 25,  94 => 24,  90 => 23,  81 => 17,  77 => 16,  73 => 15,  68 => 12,  62 => 9,  59 => 8,  57 => 7,  54 => 6,  48 => 5,  35 => 3,  11 => 1,);
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
/* 			{{ form_start(formRechercheParticularites, {'name':'FormRechercheParticularites' })  }}*/
/* 			{{ form_rest(formRechercheParticularites) }}*/
/* 			{{ form_end(formRechercheParticularites) }}*/
/* 		</fieldset>*/
/* <div>*/
/* {% endblock %}*/
