<?php

/* LIFOClassifBundle:Platform:tesson.html.twig */
class __TwigTemplate_15d248a09ffea0fb775fe3f599fcd38529064bdfc740d5528a4417b15b6c16ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layoutGeneral.html.twig", "LIFOClassifBundle:Platform:tesson.html.twig", 1);
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
        $__internal_79bad3593bd5b4bca5db62d8c08d350b36592f6763a840fc47d052e6f7a1678c = $this->env->getExtension("native_profiler");
        $__internal_79bad3593bd5b4bca5db62d8c08d350b36592f6763a840fc47d052e6f7a1678c->enter($__internal_79bad3593bd5b4bca5db62d8c08d350b36592f6763a840fc47d052e6f7a1678c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Platform:tesson.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79bad3593bd5b4bca5db62d8c08d350b36592f6763a840fc47d052e6f7a1678c->leave($__internal_79bad3593bd5b4bca5db62d8c08d350b36592f6763a840fc47d052e6f7a1678c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_76ec03f142e197c09ffa5fbd8448b336fb564fbbf5e2bfb19a89f17127a6140e = $this->env->getExtension("native_profiler");
        $__internal_76ec03f142e197c09ffa5fbd8448b336fb564fbbf5e2bfb19a89f17127a6140e->enter($__internal_76ec03f142e197c09ffa5fbd8448b336fb564fbbf5e2bfb19a89f17127a6140e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Tesson";
        
        $__internal_76ec03f142e197c09ffa5fbd8448b336fb564fbbf5e2bfb19a89f17127a6140e->leave($__internal_76ec03f142e197c09ffa5fbd8448b336fb564fbbf5e2bfb19a89f17127a6140e_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_425c758705d7c48fa61213ea0618371a637c9efe2e47e72f7779358548b7caa5 = $this->env->getExtension("native_profiler");
        $__internal_425c758705d7c48fa61213ea0618371a637c9efe2e47e72f7779358548b7caa5->enter($__internal_425c758705d7c48fa61213ea0618371a637c9efe2e47e72f7779358548b7caa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "
\t<a class=\"btn btn-primary\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lifo_classif_tesson_modifier", array("id" => $this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "id", array()))), "html", null, true);
        echo "\">Modifier</a>
\t<br /><br/>
\t<table class=\"table table-bordered table-striped table-hover\">
\t\t<thead><tr><td colspan = \"2\" class=\"warning\" align=\"center\"><b>Description du tesson</b></td></tr></thead>
\t\t<tbody>
\t\t\t<tr><td>Identifiant</td><td>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "id", array()), "html", null, true);
        echo "</td></tr>
\t\t\t<tr><td>Année de découverte</td><td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "anneeDecouverte", array()), "html", null, true);
        echo "</td></tr>
\t\t\t<tr><td>Developpé</td><td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "developpe", array()), "html", null, true);
        echo "</td></tr>
\t\t\t<tr><td>Lot / Individu</td><td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "lotIndividu", array()), "html", null, true);
        echo "</td></tr>
\t\t\t<tr><td>Numéro de tombe</td><td>";
        // line 16
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : null), "numTombe", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : null), "numTombe", array()), "Aucun")) : ("Aucun")), "html", null, true);
        echo "</td></tr>
\t\t\t<tr><td>Fait</td><td>";
        // line 17
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : null), "fait", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : null), "fait", array()), "Aucun")) : ("Aucun")), "html", null, true);
        echo "</td></tr>
\t\t\t<tr><td>Commentaire</td><td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "commentaire", array()), "html", null, true);
        echo "</td></tr>
\t\t\t<tr><td>Date d'enregistrement</td><td>";
        // line 19
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "dateEnregistrement", array()), "Y-m-d"), "html", null, true);
        echo "</td></tr>
\t\t</tbody>
\t</table>
\t
\t<br />
\t
\t<table class=\"table table-bordered table-striped table-hover\">
\t\t<thead><tr><td colspan = \"2\" class=\"warning\" align=\"center\"><b>Dimensions</b></td></tr></thead>
\t\t<tbody>
\t\t\t<tr><td>Largeur</td><td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "ordreLargeur", array()), "html", null, true);
        echo "&nbsp;";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "largeur", array()), "html", null, true);
        echo "</td></tr>
\t\t\t<tr><td>Longueur</td><td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "ordreLongueur", array()), "html", null, true);
        echo "&nbsp;";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "longueur", array()), "html", null, true);
        echo "</td></tr>
\t\t\t<tr><td>Nombre de motifs verticaux</td><td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "ordreMotifsVerticaux", array()), "html", null, true);
        echo "&nbsp;";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "nombreMotifsVerticaux", array()), "html", null, true);
        echo "</td></tr>
\t\t\t<tr><td>Nombre de motifs horizontaux</td><td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "ordreMotifsHorizontaux", array()), "html", null, true);
        echo "&nbsp;";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "nombreMotifsHorizontaux", array()), "html", null, true);
        echo "</td></tr>
\t\t</tbody>
\t</table>
\t
\t<br />
\t
\t<table class=\"table table-bordered table-striped table-hover\">
\t\t<thead><tr><td colspan = \"2\" class=\"warning\" align=\"center\"><b>Localisation</b></td></tr></thead>
\t\t<tbody>
\t\t\t<tr><td>Code INSEE</td><td>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "site", array()), "codeINSEE", array()), "html", null, true);
        echo "</td></tr>
\t\t\t<tr><td>Numéro de Commune</td><td>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "site", array()), "numSiteCommune", array()), "html", null, true);
        echo "</td></tr>
\t\t\t<tr><td>Zone</td><td>";
        // line 42
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : null), "zone", array(), "any", false, true), "numero", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : null), "zone", array(), "any", false, true), "numero", array()), "Aucune")) : ("Aucune")), "html", null, true);
        echo "</td></tr>
\t\t\t<tr><td>US</td><td>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "us", array()), "nom", array()), "html", null, true);
        echo "</td></tr>
\t\t\t<tr><td>Numéro d'isolation</td><td>";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "numIsolation", array()), "html", null, true);
        echo "</td></tr>
\t\t</tbody>
\t</table>
\t
\t<br />
\t
\t<table class=\"table table-bordered table-striped table-hover\">
\t\t<thead><tr><td colspan = \"2\" class=\"warning\" align=\"center\"><b>Datation</b></td></tr></thead>
\t\t<tbody>
\t\t\t<tr><td>Période</td><td>";
        // line 53
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : null), "periode", array(), "any", false, true), "numeroPeriode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : null), "periode", array(), "any", false, true), "numeroPeriode", array()), "Non renseigné")) : ("Non renseigné")), "html", null, true);
        echo "</td></tr>
\t\t\t<tr><td>Phase</td><td>";
        // line 54
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : null), "phase", array(), "any", false, true), "numeroPhase", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : null), "phase", array(), "any", false, true), "numeroPhase", array()), "Non renseigné")) : ("Non renseigné")), "html", null, true);
        echo "</td></tr>
\t\t\t<tr><td>Séquence</td><td>";
        // line 55
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : null), "sequence", array(), "any", false, true), "numeroSequence", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : null), "sequence", array(), "any", false, true), "numeroSequence", array()), "Non renseigné")) : ("Non renseigné")), "html", null, true);
        echo "</td></tr>
\t\t</tbody>
\t</table>
\t
\t<br />
\t
\t<table class=\"table table-bordered table-striped table-hover\">
\t\t<thead><tr><td colspan = \"2\" class=\"warning\" align=\"center\"><b>Décor</b></td></tr></thead>
\t\t<tbody>
\t\t\t<tr><td>Position</td><td>
\t\t\t";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "decor", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["position"]) {
            // line 66
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($context["position"], "position", array()), "html", null, true);
            echo "
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['position'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "\t\t\t</td></tr>
\t\t\t<tr><td>Type</td><td>
\t\t\t";
        // line 70
        if ( !twig_test_empty($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "typeDecor", array()))) {
            // line 71
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "typeDecor", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                // line 72
                echo "\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "nom", array()), "html", null, true);
                echo "
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "\t\t\t";
        } else {
            // line 75
            echo "\t\t\t\tNon renseigné
\t\t\t";
        }
        // line 77
        echo "\t\t\t</td></tr>
\t\t</tbody>
\t</table>

\t
\t<table class=\"table table-bordered table-striped table-hover\">
\t\t<thead><tr><td colspan = \"2\" class=\"warning\" align=\"center\"><b>Numérisations</b></td></tr></thead>
\t\t<tbody>
\t\t\t<tr><td>Type de numérisation</td><td>Numérisation</td></tr>
\t\t\t";
        // line 86
        if ( !twig_test_empty($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "numerisation", array()))) {
            // line 87
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "numerisation", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["numerisation"]) {
                // line 88
                echo "\t\t\t\t\t<tr><td>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["numerisation"], "typeNumerisation", array()), "nom", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td> <a class=\"group\" title=\" ";
                // line 89
                echo twig_escape_filter($this->env, $this->getAttribute($context["numerisation"], "alt", array()), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["numerisation"], "webPath", array())), "html", null, true);
                echo "\">
\t\t\t\t\t\t<img src=\"";
                // line 90
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["numerisation"], "webPath", array())), "html", null, true);
                echo "\" width=\"400\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["numerisation"], "alt", array()), "html", null, true);
                echo "\"/>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t
\t\t\t\t\t\t<a href=\"";
                // line 93
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lifo_classif_telechargement_numerisation", array("id" => $this->getAttribute($context["numerisation"], "id", array()))), "html", null, true);
                echo "\">Télécharger l'image</a></td>
\t\t\t\t\t</tr>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['numerisation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo "\t\t\t";
        } else {
            // line 97
            echo "\t\t\t<tr><td colspan=\"2\" align=\"center\">Pas de numérisations trouvées pour ce tesson</td></tr>
\t\t\t";
        }
        // line 99
        echo "\t\t</tbody>
\t</table>
\t
\t<script type=\"text/javascript\">
\t\$(document).ready(function() {
\t\t\$(\".group\").fancybox();
\t\t
\t});
\t</script>
";
        
        $__internal_425c758705d7c48fa61213ea0618371a637c9efe2e47e72f7779358548b7caa5->leave($__internal_425c758705d7c48fa61213ea0618371a637c9efe2e47e72f7779358548b7caa5_prof);

    }

    public function getTemplateName()
    {
        return "LIFOClassifBundle:Platform:tesson.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 99,  275 => 97,  272 => 96,  263 => 93,  255 => 90,  249 => 89,  244 => 88,  239 => 87,  237 => 86,  226 => 77,  222 => 75,  219 => 74,  210 => 72,  205 => 71,  203 => 70,  199 => 68,  190 => 66,  186 => 65,  173 => 55,  169 => 54,  165 => 53,  153 => 44,  149 => 43,  145 => 42,  141 => 41,  137 => 40,  123 => 31,  117 => 30,  111 => 29,  105 => 28,  93 => 19,  89 => 18,  85 => 17,  81 => 16,  77 => 15,  73 => 14,  69 => 13,  65 => 12,  57 => 7,  54 => 6,  48 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "LIFOClassifBundle::layoutGeneral.html.twig" %}*/
/* */
/* {% block title %}{{ parent() }} - Tesson{% endblock %}*/
/* */
/* {% block LIFOClassif_body %}*/
/* */
/* 	<a class="btn btn-primary" href="{{ path('lifo_classif_tesson_modifier', {'id': tesson.id}) }}">Modifier</a>*/
/* 	<br /><br/>*/
/* 	<table class="table table-bordered table-striped table-hover">*/
/* 		<thead><tr><td colspan = "2" class="warning" align="center"><b>Description du tesson</b></td></tr></thead>*/
/* 		<tbody>*/
/* 			<tr><td>Identifiant</td><td>{{tesson.id}}</td></tr>*/
/* 			<tr><td>Année de découverte</td><td>{{tesson.anneeDecouverte}}</td></tr>*/
/* 			<tr><td>Developpé</td><td>{{tesson.developpe}}</td></tr>*/
/* 			<tr><td>Lot / Individu</td><td>{{tesson.lotIndividu}}</td></tr>*/
/* 			<tr><td>Numéro de tombe</td><td>{{tesson.numTombe|default('Aucun')}}</td></tr>*/
/* 			<tr><td>Fait</td><td>{{tesson.fait|default('Aucun')}}</td></tr>*/
/* 			<tr><td>Commentaire</td><td>{{tesson.commentaire}}</td></tr>*/
/* 			<tr><td>Date d'enregistrement</td><td>{{tesson.dateEnregistrement|date('Y-m-d')}}</td></tr>*/
/* 		</tbody>*/
/* 	</table>*/
/* 	*/
/* 	<br />*/
/* 	*/
/* 	<table class="table table-bordered table-striped table-hover">*/
/* 		<thead><tr><td colspan = "2" class="warning" align="center"><b>Dimensions</b></td></tr></thead>*/
/* 		<tbody>*/
/* 			<tr><td>Largeur</td><td>{{tesson.ordreLargeur}}&nbsp;{{tesson.largeur}}</td></tr>*/
/* 			<tr><td>Longueur</td><td>{{tesson.ordreLongueur}}&nbsp;{{tesson.longueur}}</td></tr>*/
/* 			<tr><td>Nombre de motifs verticaux</td><td>{{tesson.ordreMotifsVerticaux}}&nbsp;{{tesson.nombreMotifsVerticaux}}</td></tr>*/
/* 			<tr><td>Nombre de motifs horizontaux</td><td>{{tesson.ordreMotifsHorizontaux}}&nbsp;{{tesson.nombreMotifsHorizontaux}}</td></tr>*/
/* 		</tbody>*/
/* 	</table>*/
/* 	*/
/* 	<br />*/
/* 	*/
/* 	<table class="table table-bordered table-striped table-hover">*/
/* 		<thead><tr><td colspan = "2" class="warning" align="center"><b>Localisation</b></td></tr></thead>*/
/* 		<tbody>*/
/* 			<tr><td>Code INSEE</td><td>{{tesson.site.codeINSEE}}</td></tr>*/
/* 			<tr><td>Numéro de Commune</td><td>{{tesson.site.numSiteCommune}}</td></tr>*/
/* 			<tr><td>Zone</td><td>{{tesson.zone.numero|default('Aucune')}}</td></tr>*/
/* 			<tr><td>US</td><td>{{tesson.us.nom}}</td></tr>*/
/* 			<tr><td>Numéro d'isolation</td><td>{{tesson.numIsolation}}</td></tr>*/
/* 		</tbody>*/
/* 	</table>*/
/* 	*/
/* 	<br />*/
/* 	*/
/* 	<table class="table table-bordered table-striped table-hover">*/
/* 		<thead><tr><td colspan = "2" class="warning" align="center"><b>Datation</b></td></tr></thead>*/
/* 		<tbody>*/
/* 			<tr><td>Période</td><td>{{tesson.periode.numeroPeriode|default('Non renseigné')}}</td></tr>*/
/* 			<tr><td>Phase</td><td>{{tesson.phase.numeroPhase|default('Non renseigné')}}</td></tr>*/
/* 			<tr><td>Séquence</td><td>{{tesson.sequence.numeroSequence|default('Non renseigné')}}</td></tr>*/
/* 		</tbody>*/
/* 	</table>*/
/* 	*/
/* 	<br />*/
/* 	*/
/* 	<table class="table table-bordered table-striped table-hover">*/
/* 		<thead><tr><td colspan = "2" class="warning" align="center"><b>Décor</b></td></tr></thead>*/
/* 		<tbody>*/
/* 			<tr><td>Position</td><td>*/
/* 			{% for position in tesson.decor %}*/
/* 				{{position.position}}*/
/* 			{% endfor %}*/
/* 			</td></tr>*/
/* 			<tr><td>Type</td><td>*/
/* 			{% if tesson.typeDecor is not empty %}*/
/* 				{% for type in tesson.typeDecor %}*/
/* 					{{type.nom}}*/
/* 				{% endfor %}*/
/* 			{% else %}*/
/* 				Non renseigné*/
/* 			{% endif %}*/
/* 			</td></tr>*/
/* 		</tbody>*/
/* 	</table>*/
/* */
/* 	*/
/* 	<table class="table table-bordered table-striped table-hover">*/
/* 		<thead><tr><td colspan = "2" class="warning" align="center"><b>Numérisations</b></td></tr></thead>*/
/* 		<tbody>*/
/* 			<tr><td>Type de numérisation</td><td>Numérisation</td></tr>*/
/* 			{% if tesson.numerisation is not empty %}*/
/* 				{% for numerisation in tesson.numerisation %}*/
/* 					<tr><td>{{ numerisation.typeNumerisation.nom }}</td>*/
/* 						<td> <a class="group" title=" {{ numerisation.alt }}" href="{{ asset(numerisation.webPath) }}">*/
/* 						<img src="{{ asset(numerisation.webPath) }}" width="400" alt="{{ numerisation.alt }}"/>*/
/* 						</a>*/
/* 						*/
/* 						<a href="{{ path('lifo_classif_telechargement_numerisation', {'id': numerisation.id}) }}">Télécharger l'image</a></td>*/
/* 					</tr>*/
/* 				{% endfor %}*/
/* 			{% else %}*/
/* 			<tr><td colspan="2" align="center">Pas de numérisations trouvées pour ce tesson</td></tr>*/
/* 			{% endif %}*/
/* 		</tbody>*/
/* 	</table>*/
/* 	*/
/* 	<script type="text/javascript">*/
/* 	$(document).ready(function() {*/
/* 		$(".group").fancybox();*/
/* 		*/
/* 	});*/
/* 	</script>*/
/* {% endblock %}*/
/* */
