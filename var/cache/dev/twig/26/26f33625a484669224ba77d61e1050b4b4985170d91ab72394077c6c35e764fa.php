<?php

/* LIFOClassifBundle:Platform:afficherTessonsRecherche.html.twig */
class __TwigTemplate_e81d0f2d2b6e5aea532ac81fc21da347fa79732df351f4c697b12b8961124c4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layoutGeneral.html.twig", "LIFOClassifBundle:Platform:afficherTessonsRecherche.html.twig", 1);
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
        $__internal_615c8737f528d33c18bf0beb8af475390163a3a88ab12a5cdb736e279ce820c0 = $this->env->getExtension("native_profiler");
        $__internal_615c8737f528d33c18bf0beb8af475390163a3a88ab12a5cdb736e279ce820c0->enter($__internal_615c8737f528d33c18bf0beb8af475390163a3a88ab12a5cdb736e279ce820c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Platform:afficherTessonsRecherche.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_615c8737f528d33c18bf0beb8af475390163a3a88ab12a5cdb736e279ce820c0->leave($__internal_615c8737f528d33c18bf0beb8af475390163a3a88ab12a5cdb736e279ce820c0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bcbb8e4d3c5cb7ac2f6c51e54997eba12aa42498e44e00035b6f79855612a2e3 = $this->env->getExtension("native_profiler");
        $__internal_bcbb8e4d3c5cb7ac2f6c51e54997eba12aa42498e44e00035b6f79855612a2e3->enter($__internal_bcbb8e4d3c5cb7ac2f6c51e54997eba12aa42498e44e00035b6f79855612a2e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Résultats de la recherche";
        
        $__internal_bcbb8e4d3c5cb7ac2f6c51e54997eba12aa42498e44e00035b6f79855612a2e3->leave($__internal_bcbb8e4d3c5cb7ac2f6c51e54997eba12aa42498e44e00035b6f79855612a2e3_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_1b0936839af5f99a6e6ea6ab20466e90c39eaf92f6ee35387e7cb192963232aa = $this->env->getExtension("native_profiler");
        $__internal_1b0936839af5f99a6e6ea6ab20466e90c39eaf92f6ee35387e7cb192963232aa->enter($__internal_1b0936839af5f99a6e6ea6ab20466e90c39eaf92f6ee35387e7cb192963232aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

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
\t<thead align=\"middle\"><tr class=\"warning\"><td width=5%><b>ID tesson</b></td><td width=10%><b>Site</b><td width=10%><b>US</b></td><td width=10%><b>Numéro d'isolation</b></td><td width=10%><b>Numérisation</b></td></tr></thead>
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
            echo twig_escape_filter($this->env, ((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . $this->env->getExtension('routing')->getPath("lifo_classif_tesson", array("id" => $this->getAttribute($context["tesson"], "id", array())))), "html", null, true);
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
\t\t\t<td>
\t\t\t";
            // line 33
            if ( !twig_test_empty($this->getAttribute($context["tesson"], "numerisation", array()))) {
                // line 34
                echo "\t\t\t\t\t\t<a class=\"group\" title=\" ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["tesson"], "numerisation", array()), 0, array(), "array"), "alt", array()), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["tesson"], "numerisation", array()), 0, array(), "array"), "webPath", array())), "html", null, true);
                echo "\">
\t\t\t\t\t\t<img src=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["tesson"], "numerisation", array()), 0, array(), "array"), "webPath", array())), "html", null, true);
                echo "\" width=\"50\" height=\"50\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["tesson"], "numerisation", array()), 0, array(), "array"), "alt", array()), "html", null, true);
                echo "\"/>
\t\t\t\t\t\t</a>
\t\t\t";
            } else {
                // line 38
                echo "\t\t\t\tPas de numérisations trouvées pour ce tesson
\t\t\t";
            }
            // line 40
            echo "\t\t\t</td>
\t\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tesson'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "\t</tbody>
</table>

<script type=\"text/javascript\">
\$(document).ready(function() {
\t\$(\".group\").fancybox();
\t
});

function modifierClasse(sel){
\t\$.post(\"";
        // line 53
        echo twig_escape_filter($this->env, ((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . $this->env->getExtension('routing')->getPath("lifo_classif_classification_modifier")), "html", null, true);
        echo "\", {selID:sel.name, classe:sel.value});
};
</script>
";
        // line 56
        $this->loadTemplate("LIFOClassifBundle::pagination.html.twig", "LIFOClassifBundle:Platform:afficherTessonsRecherche.html.twig", 56)->display($context);
        // line 57
        echo "
";
        
        $__internal_1b0936839af5f99a6e6ea6ab20466e90c39eaf92f6ee35387e7cb192963232aa->leave($__internal_1b0936839af5f99a6e6ea6ab20466e90c39eaf92f6ee35387e7cb192963232aa_prof);

    }

    public function getTemplateName()
    {
        return "LIFOClassifBundle:Platform:afficherTessonsRecherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 57,  175 => 56,  169 => 53,  157 => 43,  149 => 40,  145 => 38,  137 => 35,  130 => 34,  128 => 33,  123 => 31,  119 => 30,  113 => 29,  107 => 28,  104 => 27,  100 => 26,  90 => 18,  87 => 17,  81 => 16,  73 => 14,  70 => 13,  65 => 12,  61 => 10,  59 => 9,  54 => 6,  48 => 5,  35 => 3,  11 => 1,);
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
/* 	<thead align="middle"><tr class="warning"><td width=5%><b>ID tesson</b></td><td width=10%><b>Site</b><td width=10%><b>US</b></td><td width=10%><b>Numéro d'isolation</b></td><td width=10%><b>Numérisation</b></td></tr></thead>*/
/* 	<tbody>*/
/* 	{% for tesson in tessons %}*/
/* 		<tr>*/
/* 			<td><a href="{{ base_url ~path('lifo_classif_tesson', {'id': tesson.id}) }}">{{ tesson.id }}</a></td>*/
/* 			<td>{{ tesson.site.codeINSEE}}&nbsp;{{ tesson.site.numSiteCommune }}</td>*/
/* 			<td>{{ tesson.us.nom }}</td>*/
/* 			<td>{{ tesson.numIsolation }}</td>*/
/* 			<td>*/
/* 			{% if tesson.numerisation is not empty %}*/
/* 						<a class="group" title=" {{ tesson.numerisation[0].alt }}" href="{{ asset(tesson.numerisation[0].webPath) }}">*/
/* 						<img src="{{ asset(tesson.numerisation[0].webPath) }}" width="50" height="50" alt="{{ tesson.numerisation[0].alt }}"/>*/
/* 						</a>*/
/* 			{% else %}*/
/* 				Pas de numérisations trouvées pour ce tesson*/
/* 			{% endif %}*/
/* 			</td>*/
/* 		</tr>*/
/* 	{% endfor %}*/
/* 	</tbody>*/
/* </table>*/
/* */
/* <script type="text/javascript">*/
/* $(document).ready(function() {*/
/* 	$(".group").fancybox();*/
/* 	*/
/* });*/
/* */
/* function modifierClasse(sel){*/
/* 	$.post("{{ base_url ~path('lifo_classif_classification_modifier') }}", {selID:sel.name, classe:sel.value});*/
/* };*/
/* </script>*/
/* {% include 'LIFOClassifBundle::pagination.html.twig' %}*/
/* */
/* {% endblock %}*/
