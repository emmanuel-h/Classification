<?php

/* @LIFOClassif/Platform/afficherNumerisations.html.twig */
class __TwigTemplate_868de066f650fe35ea9a1deeb0f88335ee49e79c8d9735dd8a71db65bc96707b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layoutGeneral.html.twig", "@LIFOClassif/Platform/afficherNumerisations.html.twig", 1);
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
        $__internal_f04fe15f60938eae615fc6f01957b0d7a4fd76785a9b4b57fdcaa555d1fbbc04 = $this->env->getExtension("native_profiler");
        $__internal_f04fe15f60938eae615fc6f01957b0d7a4fd76785a9b4b57fdcaa555d1fbbc04->enter($__internal_f04fe15f60938eae615fc6f01957b0d7a4fd76785a9b4b57fdcaa555d1fbbc04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Platform/afficherNumerisations.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f04fe15f60938eae615fc6f01957b0d7a4fd76785a9b4b57fdcaa555d1fbbc04->leave($__internal_f04fe15f60938eae615fc6f01957b0d7a4fd76785a9b4b57fdcaa555d1fbbc04_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7b377469596f4735ff56994b35a2cdc23421ece4ee6c34aa83184b61e9b7c46d = $this->env->getExtension("native_profiler");
        $__internal_7b377469596f4735ff56994b35a2cdc23421ece4ee6c34aa83184b61e9b7c46d->enter($__internal_7b377469596f4735ff56994b35a2cdc23421ece4ee6c34aa83184b61e9b7c46d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Numérisations";
        
        $__internal_7b377469596f4735ff56994b35a2cdc23421ece4ee6c34aa83184b61e9b7c46d->leave($__internal_7b377469596f4735ff56994b35a2cdc23421ece4ee6c34aa83184b61e9b7c46d_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_f28fd515ca4aad359b7e7bf9935670899faa1b6449823ae88a1e5c7abfeabc9b = $this->env->getExtension("native_profiler");
        $__internal_f28fd515ca4aad359b7e7bf9935670899faa1b6449823ae88a1e5c7abfeabc9b->enter($__internal_f28fd515ca4aad359b7e7bf9935670899faa1b6449823ae88a1e5c7abfeabc9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "

<table class=\"table table-bordered table-striped table-hover\">
\t<thead align=\"middle\"><tr class=\"warning\"><td width=5%><b>ID tesson</b></td><td width=10%><b>Site</b><td width=10%><b>US</b></td><td width=10%><b>Numéro d'isolation</b></td></tr></thead>
\t<tbody>
\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tessons"]) ? $context["tessons"] : $this->getContext($context, "tessons")));
        foreach ($context['_seq'] as $context["_key"] => $context["tesson"]) {
            // line 12
            echo "\t\t<tr>
\t\t\t<td><a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lifo_classif_tesson", array("id" => $this->getAttribute($context["tesson"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tesson"], "id", array()), "html", null, true);
            echo "</a></td>
\t\t\t<td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tesson"], "site", array()), "codeINSEE", array()), "html", null, true);
            echo "&nbsp;";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tesson"], "site", array()), "numSiteCommune", array()), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tesson"], "us", array()), "nom", array()), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["tesson"], "numIsolation", array()), "html", null, true);
            echo "</td>
\t\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tesson'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "\t</tbody>
</table>

";
        // line 22
        $this->loadTemplate("LIFOClassifBundle::pagination.html.twig", "@LIFOClassif/Platform/afficherNumerisations.html.twig", 22)->display($context);
        // line 23
        echo "
";
        
        $__internal_f28fd515ca4aad359b7e7bf9935670899faa1b6449823ae88a1e5c7abfeabc9b->leave($__internal_f28fd515ca4aad359b7e7bf9935670899faa1b6449823ae88a1e5c7abfeabc9b_prof);

    }

    public function getTemplateName()
    {
        return "@LIFOClassif/Platform/afficherNumerisations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 23,  98 => 22,  93 => 19,  84 => 16,  80 => 15,  74 => 14,  68 => 13,  65 => 12,  61 => 11,  54 => 6,  48 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "LIFOClassifBundle::layoutGeneral.html.twig" %}*/
/* */
/* {% block title %}{{ parent() }} - Numérisations{% endblock %}*/
/* */
/* {% block LIFOClassif_body %}*/
/* */
/* */
/* <table class="table table-bordered table-striped table-hover">*/
/* 	<thead align="middle"><tr class="warning"><td width=5%><b>ID tesson</b></td><td width=10%><b>Site</b><td width=10%><b>US</b></td><td width=10%><b>Numéro d'isolation</b></td></tr></thead>*/
/* 	<tbody>*/
/* 	{% for tesson in tessons %}*/
/* 		<tr>*/
/* 			<td><a href="{{ path('lifo_classif_tesson', {'id': tesson.id}) }}">{{ tesson.id }}</a></td>*/
/* 			<td>{{ tesson.site.codeINSEE}}&nbsp;{{ tesson.site.numSiteCommune }}</td>*/
/* 			<td>{{ tesson.us.nom }}</td>*/
/* 			<td>{{ tesson.numIsolation }}</td>*/
/* 		</tr>*/
/* 	{% endfor %}*/
/* 	</tbody>*/
/* </table>*/
/* */
/* {% include 'LIFOClassifBundle::pagination.html.twig' %}*/
/* */
/* {% endblock %}*/
