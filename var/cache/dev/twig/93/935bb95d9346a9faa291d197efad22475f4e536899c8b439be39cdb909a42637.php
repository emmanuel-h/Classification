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
        $__internal_5678308678a5d06605bf973dbaa3cdd1694ffbeb4aa5789f4803a1ec02c33588 = $this->env->getExtension("native_profiler");
        $__internal_5678308678a5d06605bf973dbaa3cdd1694ffbeb4aa5789f4803a1ec02c33588->enter($__internal_5678308678a5d06605bf973dbaa3cdd1694ffbeb4aa5789f4803a1ec02c33588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Platform/recherche.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5678308678a5d06605bf973dbaa3cdd1694ffbeb4aa5789f4803a1ec02c33588->leave($__internal_5678308678a5d06605bf973dbaa3cdd1694ffbeb4aa5789f4803a1ec02c33588_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2990e7b01a76add610ce7d0776b9ca2f3b7fd12332ff0fe6984e297e4be2137d = $this->env->getExtension("native_profiler");
        $__internal_2990e7b01a76add610ce7d0776b9ca2f3b7fd12332ff0fe6984e297e4be2137d->enter($__internal_2990e7b01a76add610ce7d0776b9ca2f3b7fd12332ff0fe6984e297e4be2137d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Recherche";
        
        $__internal_2990e7b01a76add610ce7d0776b9ca2f3b7fd12332ff0fe6984e297e4be2137d->leave($__internal_2990e7b01a76add610ce7d0776b9ca2f3b7fd12332ff0fe6984e297e4be2137d_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_c2584c10754e7011ec7ad786f63251947f56ee0c822b324c3c1e633db56b0f02 = $this->env->getExtension("native_profiler");
        $__internal_c2584c10754e7011ec7ad786f63251947f56ee0c822b324c3c1e633db56b0f02->enter($__internal_c2584c10754e7011ec7ad786f63251947f56ee0c822b324c3c1e633db56b0f02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

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
        
        $__internal_c2584c10754e7011ec7ad786f63251947f56ee0c822b324c3c1e633db56b0f02->leave($__internal_c2584c10754e7011ec7ad786f63251947f56ee0c822b324c3c1e633db56b0f02_prof);

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
