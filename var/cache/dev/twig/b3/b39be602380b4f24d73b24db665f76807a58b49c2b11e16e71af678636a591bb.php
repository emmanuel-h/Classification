<?php

/* @LIFOClassif/Platform/afficherTessonsRecherche.html.twig */
class __TwigTemplate_c69c96b729851006be728e591ca3a23fe43d1408bed52871620990a3ee4eb230 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layoutGeneral.html.twig", "@LIFOClassif/Platform/afficherTessonsRecherche.html.twig", 1);
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
        $__internal_4651b5ce419837aa18249128c97361ccb9bd54428f716d0e33b5f96ca6e8c362 = $this->env->getExtension("native_profiler");
        $__internal_4651b5ce419837aa18249128c97361ccb9bd54428f716d0e33b5f96ca6e8c362->enter($__internal_4651b5ce419837aa18249128c97361ccb9bd54428f716d0e33b5f96ca6e8c362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Platform/afficherTessonsRecherche.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4651b5ce419837aa18249128c97361ccb9bd54428f716d0e33b5f96ca6e8c362->leave($__internal_4651b5ce419837aa18249128c97361ccb9bd54428f716d0e33b5f96ca6e8c362_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0f9f87dd8a65c190a7d0f61807faf688bce6baa32dbd4e26d276ba70cac894dd = $this->env->getExtension("native_profiler");
        $__internal_0f9f87dd8a65c190a7d0f61807faf688bce6baa32dbd4e26d276ba70cac894dd->enter($__internal_0f9f87dd8a65c190a7d0f61807faf688bce6baa32dbd4e26d276ba70cac894dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Résultats de la recherche";
        
        $__internal_0f9f87dd8a65c190a7d0f61807faf688bce6baa32dbd4e26d276ba70cac894dd->leave($__internal_0f9f87dd8a65c190a7d0f61807faf688bce6baa32dbd4e26d276ba70cac894dd_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_702906b2a786f1775f51c295a8187bd4703fcaa0c7973b0f2e47e059f2cce95c = $this->env->getExtension("native_profiler");
        $__internal_702906b2a786f1775f51c295a8187bd4703fcaa0c7973b0f2e47e059f2cce95c->enter($__internal_702906b2a786f1775f51c295a8187bd4703fcaa0c7973b0f2e47e059f2cce95c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "
 <div class=\"alert alert-info\" align=\"center\" id=\"parametresClassif\">
\t<strong>Paramètres de recherche&nbsp;:&nbsp;</strong>
\t";
        // line 9
        if (twig_test_empty((isset($context["criteres"]) ? $context["criteres"] : $this->getContext($context, "criteres")))) {
            // line 10
            echo "\t\tAucun
\t";
        } else {
            // line 12
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["criteres"]) ? $context["criteres"] : $this->getContext($context, "criteres")));
            foreach ($context['_seq'] as $context["nom"] => $context["critere"]) {
                // line 13
                echo "\t\t\t";
                if ( !twig_test_empty($context["critere"])) {
                    // line 14
                    echo "\t\t\t\t-&nbsp";
                    echo twig_escape_filter($this->env, $context["nom"], "html", null, true);
                    echo "&nbsp;:&nbsp;";
                    echo twig_escape_filter($this->env, $context["critere"], "html", null, true);
                    echo "
\t\t\t";
                }
                // line 16
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['nom'], $context['critere'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "\t";
        }
        // line 18
        echo "\t
\t
</div>


<table class=\"table table-bordered table-striped table-hover\">
\t<thead align=\"middle\"><tr class=\"warning\"><td width=5%><b>ID tesson</b></td><td width=10%><b>Site</b><td width=10%><b>US</b></td><td width=10%><b>Numéro d'isolation</b></td></tr></thead>
\t<tbody>
\t";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tessons"]) ? $context["tessons"] : $this->getContext($context, "tessons")));
        foreach ($context['_seq'] as $context["_key"] => $context["tesson"]) {
            // line 27
            echo "\t\t<tr>
\t\t\t<td><a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lifo_classif_tesson", array("id" => $this->getAttribute($context["tesson"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tesson"], "id", array()), "html", null, true);
            echo "</a></td>
\t\t\t<td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tesson"], "site", array()), "codeINSEE", array()), "html", null, true);
            echo "&nbsp;";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tesson"], "site", array()), "numSiteCommune", array()), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tesson"], "us", array()), "nom", array()), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["tesson"], "numIsolation", array()), "html", null, true);
            echo "</td>
\t\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tesson'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "\t</tbody>
</table>

";
        // line 37
        $this->loadTemplate("LIFOClassifBundle::pagination.html.twig", "@LIFOClassif/Platform/afficherTessonsRecherche.html.twig", 37)->display($context);
        // line 38
        echo "
";
        
        $__internal_702906b2a786f1775f51c295a8187bd4703fcaa0c7973b0f2e47e059f2cce95c->leave($__internal_702906b2a786f1775f51c295a8187bd4703fcaa0c7973b0f2e47e059f2cce95c_prof);

    }

    public function getTemplateName()
    {
        return "@LIFOClassif/Platform/afficherTessonsRecherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 38,  137 => 37,  132 => 34,  123 => 31,  119 => 30,  113 => 29,  107 => 28,  104 => 27,  100 => 26,  90 => 18,  87 => 17,  81 => 16,  73 => 14,  70 => 13,  65 => 12,  61 => 10,  59 => 9,  54 => 6,  48 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "LIFOClassifBundle::layoutGeneral.html.twig" %}*/
/* */
/* {% block title %}{{ parent() }} - Résultats de la recherche{% endblock %}*/
/* */
/* {% block LIFOClassif_body %}*/
/* */
/*  <div class="alert alert-info" align="center" id="parametresClassif">*/
/* 	<strong>Paramètres de recherche&nbsp;:&nbsp;</strong>*/
/* 	{% if criteres is empty %}*/
/* 		Aucun*/
/* 	{% else %}*/
/* 		{% for nom, critere in criteres %}*/
/* 			{% if critere is not empty %}*/
/* 				-&nbsp{{ nom }}&nbsp;:&nbsp;{{ critere }}*/
/* 			{% endif %}*/
/* 		{% endfor %}*/
/* 	{% endif %}*/
/* 	*/
/* 	*/
/* </div>*/
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
