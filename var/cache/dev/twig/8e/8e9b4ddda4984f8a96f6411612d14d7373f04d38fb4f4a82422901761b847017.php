<?php

/* @LIFOClassif/Platform/tesson.html.twig */
class __TwigTemplate_5463be7e231f3b60aea970dd7720349d055558f68c39c80db5cc1614f7d755f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layoutGeneral.html.twig", "@LIFOClassif/Platform/tesson.html.twig", 1);
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
        $__internal_d6c077960a6dfe9e86569f231aa2da186c48475e3cb831db2bc2304b1b39a010 = $this->env->getExtension("native_profiler");
        $__internal_d6c077960a6dfe9e86569f231aa2da186c48475e3cb831db2bc2304b1b39a010->enter($__internal_d6c077960a6dfe9e86569f231aa2da186c48475e3cb831db2bc2304b1b39a010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Platform/tesson.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6c077960a6dfe9e86569f231aa2da186c48475e3cb831db2bc2304b1b39a010->leave($__internal_d6c077960a6dfe9e86569f231aa2da186c48475e3cb831db2bc2304b1b39a010_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a331550113bbe6872f132ed1ea089383ad83321b088dde2f17a85938572ff066 = $this->env->getExtension("native_profiler");
        $__internal_a331550113bbe6872f132ed1ea089383ad83321b088dde2f17a85938572ff066->enter($__internal_a331550113bbe6872f132ed1ea089383ad83321b088dde2f17a85938572ff066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Tesson";
        
        $__internal_a331550113bbe6872f132ed1ea089383ad83321b088dde2f17a85938572ff066->leave($__internal_a331550113bbe6872f132ed1ea089383ad83321b088dde2f17a85938572ff066_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_da7fcb6063194628a435d34c9c9de27743f8c51a6e705e88cd1c3afbd946b727 = $this->env->getExtension("native_profiler");
        $__internal_da7fcb6063194628a435d34c9c9de27743f8c51a6e705e88cd1c3afbd946b727->enter($__internal_da7fcb6063194628a435d34c9c9de27743f8c51a6e705e88cd1c3afbd946b727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "
\t<a class=\"btn btn-primary\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lifo_classif_tesson_exporter", array("id" => $this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "id", array()))), "html", null, true);
        echo "\">Exporter</a>
\t<a class=\"btn btn-primary\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lifo_classif_tesson_modifier", array("id" => $this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "id", array()))), "html", null, true);
        echo "\">Modifier</a>
\t<br /><br/>
\t<table class=\"table table-bordered table-striped table-hover\">
\t\t<thead><tr><td colspan = \"2\" class=\"warning\" align=\"center\"><b>Description du tesson</b></td></tr></thead>
\t\t<tbody>
\t\t\t<tr><td>Identifiant</td><td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "id", array()), "html", null, true);
        echo "</td></tr>
\t\t\t<tr><td>Année de découverte</td><td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "anneeDecouverte", array()), "html", null, true);
        echo "</td></tr>
\t\t\t<tr><td>Developpé</td><td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "developpe", array()), "html", null, true);
        echo "</td></tr>
\t\t\t<tr><td>Lot / Individu</td><td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "lotIndividu", array()), "html", null, true);
        echo "</td></tr>
\t\t\t<tr><td>Numéro de tombe</td><td>";
        // line 17
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : null), "numTombe", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : null), "numTombe", array()), "Aucun")) : ("Aucun")), "html", null, true);
        echo "</td></tr>
\t\t\t<tr><td>Fait</td><td>";
        // line 18
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : null), "fait", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : null), "fait", array()), "Aucun")) : ("Aucun")), "html", null, true);
        echo "</td></tr>
\t\t\t<tr><td>Commentaire</td><td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "commentaire", array()), "html", null, true);
        echo "</td></tr>
\t\t\t<tr><td>Date d'enregistrement</td><td>";
        // line 20
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
\t\t\t<tr><td>Caractère moyen</td><td>
\t\t\t";
        // line 30
        if ((((($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "largeur", array()) != 0) && ($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "longueur", array()) != 0)) && ($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "nombreMotifsVerticaux", array()) != 0)) && ($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "nombreMotifsHorizontaux", array()) != 0))) {
            // line 31
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "longueur", array()) * $this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "largeur", array())) / ($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "nombreMotifsVerticaux", array()) * $this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "nombreMotifsHorizontaux", array()))), "html", null, true);
            echo "
\t\t\t";
        } else {
            // line 33
            echo "\t\t\t\t0
\t\t\t";
        }
        // line 34
        echo "</td>
\t\t\t<tr><td>Largeur</td><td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "ordreLargeur", array()), "html", null, true);
        echo "&nbsp;";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "largeur", array()), "html", null, true);
        echo "</td></tr>
\t\t\t<tr><td>Longueur</td><td>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "ordreLongueur", array()), "html", null, true);
        echo "&nbsp;";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "longueur", array()), "html", null, true);
        echo "</td></tr>
\t\t\t<tr><td>Nombre de motifs verticaux</td><td>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "ordreMotifsVerticaux", array()), "html", null, true);
        echo "&nbsp;";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "nombreMotifsVerticaux", array()), "html", null, true);
        echo "</td></tr>
\t\t\t<tr><td>Nombre de motifs horizontaux</td><td>";
        // line 38
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
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "site", array()), "codeINSEE", array()), "html", null, true);
        echo "</td></tr>
\t\t\t<tr><td>Numéro de site</td><td>";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "site", array()), "numSiteCommune", array()), "html", null, true);
        echo "</td></tr>
\t\t\t<tr><td>Zone</td><td>";
        // line 49
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : null), "zone", array(), "any", false, true), "numero", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : null), "zone", array(), "any", false, true), "numero", array()), "Aucune")) : ("Aucune")), "html", null, true);
        echo "</td></tr>
\t\t\t<tr><td>US</td><td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "us", array()), "nom", array()), "html", null, true);
        echo "</td></tr>
\t\t\t<tr><td>Numéro d'isolation</td><td>";
        // line 51
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
        // line 60
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : null), "periode", array(), "any", false, true), "numeroPeriode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : null), "periode", array(), "any", false, true), "numeroPeriode", array()), "Non renseigné")) : ("Non renseigné")), "html", null, true);
        echo "</td></tr>
\t\t\t<tr><td>Phase</td><td>";
        // line 61
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : null), "phase", array(), "any", false, true), "numeroPhase", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : null), "phase", array(), "any", false, true), "numeroPhase", array()), "Non renseigné")) : ("Non renseigné")), "html", null, true);
        echo "</td></tr>
\t\t\t<tr><td>Séquence</td><td>";
        // line 62
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
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "decor", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["position"]) {
            // line 73
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($context["position"], "position", array()), "html", null, true);
            echo "
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['position'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "\t\t\t</td></tr>
\t\t\t<tr><td>Type</td><td>
\t\t\t";
        // line 77
        if ( !twig_test_empty($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "typeDecor", array()))) {
            // line 78
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "typeDecor", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                // line 79
                echo "\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "nom", array()), "html", null, true);
                echo "
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "\t\t\t";
        } else {
            // line 82
            echo "\t\t\t\tNon renseigné
\t\t\t";
        }
        // line 84
        echo "\t\t\t</td></tr>
\t\t</tbody>
\t</table>

\t
\t<table class=\"table table-bordered table-striped table-hover\">
\t\t<thead><tr><td colspan = \"2\" class=\"warning\" align=\"center\"><b>Numérisations</b></td></tr></thead>
\t\t<tbody>
\t\t\t<tr><td>Type de numérisation</td><td>Numérisation</td></tr>
\t\t\t";
        // line 93
        if ( !twig_test_empty($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "numerisation", array()))) {
            // line 94
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "numerisation", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["numerisation"]) {
                // line 95
                echo "\t\t\t\t\t<tr><td>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["numerisation"], "typeNumerisation", array()), "nom", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td> <a class=\"group\" title=\" ";
                // line 96
                echo twig_escape_filter($this->env, $this->getAttribute($context["numerisation"], "alt", array()), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["numerisation"], "webPath", array())), "html", null, true);
                echo "\">
\t\t\t\t\t\t<img src=\"";
                // line 97
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["numerisation"], "webPath", array())), "html", null, true);
                echo "\" width=\"400\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["numerisation"], "alt", array()), "html", null, true);
                echo "\"/>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t
\t\t\t\t\t\t<a href=\"";
                // line 100
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lifo_classif_telechargement_numerisation", array("id" => $this->getAttribute($context["numerisation"], "id", array()))), "html", null, true);
                echo "\">Télécharger l'image</a></td>
\t\t\t\t\t</tr>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['numerisation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo "\t\t\t";
        } else {
            // line 104
            echo "\t\t\t<tr><td colspan=\"2\" align=\"center\">Pas de numérisations trouvées pour ce tesson</td></tr>
\t\t\t";
        }
        // line 106
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
        
        $__internal_da7fcb6063194628a435d34c9c9de27743f8c51a6e705e88cd1c3afbd946b727->leave($__internal_da7fcb6063194628a435d34c9c9de27743f8c51a6e705e88cd1c3afbd946b727_prof);

    }

    public function getTemplateName()
    {
        return "@LIFOClassif/Platform/tesson.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 106,  295 => 104,  292 => 103,  283 => 100,  275 => 97,  269 => 96,  264 => 95,  259 => 94,  257 => 93,  246 => 84,  242 => 82,  239 => 81,  230 => 79,  225 => 78,  223 => 77,  219 => 75,  210 => 73,  206 => 72,  193 => 62,  189 => 61,  185 => 60,  173 => 51,  169 => 50,  165 => 49,  161 => 48,  157 => 47,  143 => 38,  137 => 37,  131 => 36,  125 => 35,  122 => 34,  118 => 33,  112 => 31,  110 => 30,  97 => 20,  93 => 19,  89 => 18,  85 => 17,  81 => 16,  77 => 15,  73 => 14,  69 => 13,  61 => 8,  57 => 7,  54 => 6,  48 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "LIFOClassifBundle::layoutGeneral.html.twig" %}*/
/* */
/* {% block title %}{{ parent() }} - Tesson{% endblock %}*/
/* */
/* {% block LIFOClassif_body %}*/
/* */
/* 	<a class="btn btn-primary" href="{{ path('lifo_classif_tesson_exporter', {'id': tesson.id}) }}">Exporter</a>*/
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
/* 			<tr><td>Caractère moyen</td><td>*/
/* 			{% if tesson.largeur != 0 and tesson.longueur != 0 and tesson.nombreMotifsVerticaux != 0 and tesson.nombreMotifsHorizontaux != 0 %}*/
/* 				{{ (tesson.longueur*tesson.largeur)/(tesson.nombreMotifsVerticaux*tesson.nombreMotifsHorizontaux) }}*/
/* 			{% else %}*/
/* 				0*/
/* 			{% endif %}</td>*/
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
/* 			<tr><td>Numéro de site</td><td>{{tesson.site.numSiteCommune}}</td></tr>*/
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
