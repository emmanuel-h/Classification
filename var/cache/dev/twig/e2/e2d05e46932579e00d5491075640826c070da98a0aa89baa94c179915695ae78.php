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
        $__internal_77dec75ebfc7542a10920386606238ecb3d31f63caf0c1928661231260e3e396 = $this->env->getExtension("native_profiler");
        $__internal_77dec75ebfc7542a10920386606238ecb3d31f63caf0c1928661231260e3e396->enter($__internal_77dec75ebfc7542a10920386606238ecb3d31f63caf0c1928661231260e3e396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Platform:tesson.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77dec75ebfc7542a10920386606238ecb3d31f63caf0c1928661231260e3e396->leave($__internal_77dec75ebfc7542a10920386606238ecb3d31f63caf0c1928661231260e3e396_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_27787b3c11f232e1a5b24dd5b6f03392851a37534cd48b7bcaa7f7cd22fe6620 = $this->env->getExtension("native_profiler");
        $__internal_27787b3c11f232e1a5b24dd5b6f03392851a37534cd48b7bcaa7f7cd22fe6620->enter($__internal_27787b3c11f232e1a5b24dd5b6f03392851a37534cd48b7bcaa7f7cd22fe6620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Tesson";
        
        $__internal_27787b3c11f232e1a5b24dd5b6f03392851a37534cd48b7bcaa7f7cd22fe6620->leave($__internal_27787b3c11f232e1a5b24dd5b6f03392851a37534cd48b7bcaa7f7cd22fe6620_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_fe04274ef7c0285c1b2a55c5088abd7d559fec4d49bdeba9ae6c7311ea881d6a = $this->env->getExtension("native_profiler");
        $__internal_fe04274ef7c0285c1b2a55c5088abd7d559fec4d49bdeba9ae6c7311ea881d6a->enter($__internal_fe04274ef7c0285c1b2a55c5088abd7d559fec4d49bdeba9ae6c7311ea881d6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "
\t<table class=\"table table-bordered table-striped table-hover\">
\t\t<thead><tr><td colspan = \"2\" class=\"warning\" align=\"center\"><b>Description du tesson</b></td></tr></thead>
\t\t<tbody>
\t\t\t<tr><td>Identifiant</td><td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "id", array()), "html", null, true);
        echo "</td></tr>
\t\t\t<tr><td>Année de découverte</td><td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "anneeDecouverte", array()), "html", null, true);
        echo "</td></tr>
\t\t\t<tr><td>Developpé</td><td>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "developpe", array()), "html", null, true);
        echo "</td></tr>
\t\t\t<tr><td>Lot / Individu</td><td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "lotIndividu", array()), "html", null, true);
        echo "</td></tr>
\t\t\t<tr><td>Numéro de tombe</td><td>";
        // line 14
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : null), "numTombe", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : null), "numTombe", array()), "Aucun")) : ("Aucun")), "html", null, true);
        echo "</td></tr>
\t\t\t<tr><td>Fait</td><td>";
        // line 15
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : null), "fait", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : null), "fait", array()), "Aucun")) : ("Aucun")), "html", null, true);
        echo "</td></tr>
\t\t\t<tr><td>Commentaire</td><td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "commentaire", array()), "html", null, true);
        echo "</td></tr>
\t\t\t<tr><td>Date d'enregistrement</td><td>";
        // line 17
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
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "ordreLargeur", array()), "html", null, true);
        echo "&nbsp;";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "largeur", array()), "html", null, true);
        echo "</td></tr>
\t\t\t<tr><td>Longueur</td><td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "ordreLongueur", array()), "html", null, true);
        echo "&nbsp;";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "longueur", array()), "html", null, true);
        echo "</td></tr>
\t\t\t<tr><td>Nombre de motifs verticaux</td><td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "ordreMotifsVerticaux", array()), "html", null, true);
        echo "&nbsp;";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "nombreMotifsVerticaux", array()), "html", null, true);
        echo "</td></tr>
\t\t\t<tr><td>Nombre de motifs horizontaux</td><td>";
        // line 29
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
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "site", array()), "codeINSEE", array()), "html", null, true);
        echo "</td></tr>
\t\t\t<tr><td>Numéro de Commune</td><td>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "site", array()), "numSiteCommune", array()), "html", null, true);
        echo "</td></tr>
\t\t\t<tr><td>Zone</td><td>";
        // line 40
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : null), "zone", array(), "any", false, true), "numero", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : null), "zone", array(), "any", false, true), "numero", array()), "Aucune")) : ("Aucune")), "html", null, true);
        echo "</td></tr>
\t\t\t<tr><td>US</td><td>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "us", array()), "nom", array()), "html", null, true);
        echo "</td></tr>
\t\t\t<tr><td>Numéro d'isolation</td><td>";
        // line 42
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
        // line 51
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : null), "periode", array(), "any", false, true), "numeroPeriode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : null), "periode", array(), "any", false, true), "numeroPeriode", array()), "Non renseigné")) : ("Non renseigné")), "html", null, true);
        echo "</td></tr>
\t\t\t<tr><td>Phase</td><td>";
        // line 52
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : null), "phase", array(), "any", false, true), "numeroPhase", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : null), "phase", array(), "any", false, true), "numeroPhase", array()), "Non renseigné")) : ("Non renseigné")), "html", null, true);
        echo "</td></tr>
\t\t\t<tr><td>Séquence</td><td>";
        // line 53
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
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "decor", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["position"]) {
            // line 64
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($context["position"], "position", array()), "html", null, true);
            echo "
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['position'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "\t\t\t</td></tr>
\t\t\t<tr><td>Type</td><td>
\t\t\t";
        // line 68
        if ( !twig_test_empty($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "typeDecor", array()))) {
            // line 69
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "typeDecor", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                // line 70
                echo "\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "nom", array()), "html", null, true);
                echo "
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "\t\t\t";
        } else {
            // line 73
            echo "\t\t\t\tNon renseigné
\t\t\t";
        }
        // line 75
        echo "\t\t\t</td></tr>
\t\t</tbody>
\t</table>

\t
\t<table class=\"table table-bordered table-striped table-hover\">
\t\t<thead><tr><td colspan = \"2\" class=\"warning\" align=\"center\"><b>Numérisations</b></td></tr></thead>
\t\t<tbody>
\t\t\t<tr><td>Type de Numérisation</td><td>Numérisation</td></tr>
\t\t\t";
        // line 84
        if ( !twig_test_empty($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "numerisation", array()))) {
            // line 85
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "numerisation", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["numerisation"]) {
                // line 86
                echo "\t\t\t\t\t<tr><td>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["numerisation"], "typeNumerisation", array()), "nom", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td><img src=\"";
                // line 87
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["numerisation"], "webPath", array())), "html", null, true);
                echo "\" width=\"400\" height=\"300\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["numerisation"], "alt", array()), "html", null, true);
                echo "\"/></td>
\t\t\t\t\t</tr>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['numerisation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo "\t\t\t";
        } else {
            // line 91
            echo "\t\t\t<tr><td colspan=\"2\" align=\"center\">Pas de numérisations trouvées pour ce tesson</td></tr>
\t\t\t";
        }
        // line 93
        echo "\t\t</tbody>
\t</table>
\t\t\t\t
";
        
        $__internal_fe04274ef7c0285c1b2a55c5088abd7d559fec4d49bdeba9ae6c7311ea881d6a->leave($__internal_fe04274ef7c0285c1b2a55c5088abd7d559fec4d49bdeba9ae6c7311ea881d6a_prof);

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
        return array (  262 => 93,  258 => 91,  255 => 90,  244 => 87,  239 => 86,  234 => 85,  232 => 84,  221 => 75,  217 => 73,  214 => 72,  205 => 70,  200 => 69,  198 => 68,  194 => 66,  185 => 64,  181 => 63,  168 => 53,  164 => 52,  160 => 51,  148 => 42,  144 => 41,  140 => 40,  136 => 39,  132 => 38,  118 => 29,  112 => 28,  106 => 27,  100 => 26,  88 => 17,  84 => 16,  80 => 15,  76 => 14,  72 => 13,  68 => 12,  64 => 11,  60 => 10,  54 => 6,  48 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "LIFOClassifBundle::layoutGeneral.html.twig" %}*/
/* */
/* {% block title %}{{ parent() }} - Tesson{% endblock %}*/
/* */
/* {% block LIFOClassif_body %}*/
/* */
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
/* 			<tr><td>Type de Numérisation</td><td>Numérisation</td></tr>*/
/* 			{% if tesson.numerisation is not empty %}*/
/* 				{% for numerisation in tesson.numerisation %}*/
/* 					<tr><td>{{ numerisation.typeNumerisation.nom }}</td>*/
/* 						<td><img src="{{ asset(numerisation.webPath) }}" width="400" height="300" alt="{{ numerisation.alt }}"/></td>*/
/* 					</tr>*/
/* 				{% endfor %}*/
/* 			{% else %}*/
/* 			<tr><td colspan="2" align="center">Pas de numérisations trouvées pour ce tesson</td></tr>*/
/* 			{% endif %}*/
/* 		</tbody>*/
/* 	</table>*/
/* 				*/
/* {% endblock %}*/
