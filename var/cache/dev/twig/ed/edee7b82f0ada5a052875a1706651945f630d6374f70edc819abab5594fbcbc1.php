<?php

/* LIFOClassifBundle:Platform:tessonpdf.html.twig */
class __TwigTemplate_2fe6680fccd1a2dfb8c918ccd152202c7cf81c454df3cdee8bb73e545462046c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_42f66ac4012455e3384d5b8e08221c6793a984d7e6df76c51034531508795c04 = $this->env->getExtension("native_profiler");
        $__internal_42f66ac4012455e3384d5b8e08221c6793a984d7e6df76c51034531508795c04->enter($__internal_42f66ac4012455e3384d5b8e08221c6793a984d7e6df76c51034531508795c04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Platform:tessonpdf.html.twig"));

        // line 1
        echo "
<style>
table, th, td {
    border: 1px solid rgb(220,220,220);
    border-collapse: collapse;
}
th, td {
    padding: 5px;
}
td {
    width: 50%;
    text-align: center;
}

th {
    height: 20px;
    text-align: center;
    background-color: rgb(255,250,205);
    border-bottom: 2px solid rgb(220,220,220);
}
</style>

<page>
\t<br /><br/>
\t<table>
\t\t<tr><th colspan=\"2\"><b>Description du tesson</b></th></tr>
\t\t\t<tr><td>Identifiant</td><td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "id", array()), "html", null, true);
        echo "</td></tr>
\t\t\t<tr><td>Année de découverte</td><td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "anneeDecouverte", array()), "html", null, true);
        echo "</td></tr>
\t\t\t<tr><td>Developpé</td><td>";
        // line 29
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : null), "developpe", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : null), "developpe", array()), "Aucun")) : ("Aucun")), "html", null, true);
        echo "</td></tr>
\t\t\t<tr><td>Lot / Individu</td><td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "lotIndividu", array()), "html", null, true);
        echo "</td></tr>
\t\t\t<tr><td>Numéro de tombe</td><td>";
        // line 31
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : null), "numTombe", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : null), "numTombe", array()), "Aucun")) : ("Aucun")), "html", null, true);
        echo "</td></tr>
\t\t\t<tr><td>Fait</td><td>";
        // line 32
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : null), "fait", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : null), "fait", array()), "Aucun")) : ("Aucun")), "html", null, true);
        echo "</td></tr>
\t\t\t<tr><td>Commentaire</td><td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "commentaire", array()), "html", null, true);
        echo "</td></tr>
\t\t\t<tr><td>Date d'enregistrement</td><td>";
        // line 34
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "dateEnregistrement", array()), "Y-m-d"), "html", null, true);
        echo "</td></tr>
\t</table>
\t
\t<br />
\t<br />
\t
\t<table>
\t\t<tr><th colspan=\"2\"><b>Dimensions</b></th></tr>
\t\t\t<tr><td>Caractère moyen</td><td>
\t\t\t";
        // line 43
        if ((((($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "largeur", array()) != 0) && ($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "longueur", array()) != 0)) && ($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "nombreMotifsVerticaux", array()) != 0)) && ($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "nombreMotifsHorizontaux", array()) != 0))) {
            // line 44
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "longueur", array()) + $this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "largeur", array())) / ($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "nombreMotifsVerticaux", array()) + $this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "nombreMotifsHorizontaux", array()))), "html", null, true);
            echo "
\t\t\t";
        } else {
            // line 46
            echo "\t\t\t\t0
\t\t\t";
        }
        // line 47
        echo "</td></tr>
\t\t\t<tr><td>Largeur</td><td>";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "ordreLargeur", array()), "html", null, true);
        echo "&nbsp;";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "largeur", array()), "html", null, true);
        echo "</td></tr>
\t\t\t<tr><td>Longueur</td><td>";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "ordreLongueur", array()), "html", null, true);
        echo "&nbsp;";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "longueur", array()), "html", null, true);
        echo "</td></tr>
\t\t\t<tr><td>Nombre de motifs verticaux</td><td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "ordreMotifsVerticaux", array()), "html", null, true);
        echo "&nbsp;";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "nombreMotifsVerticaux", array()), "html", null, true);
        echo "</td></tr>
\t\t\t<tr><td>Nombre de motifs horizontaux</td><td>";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "ordreMotifsHorizontaux", array()), "html", null, true);
        echo "&nbsp;";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "nombreMotifsHorizontaux", array()), "html", null, true);
        echo "</td></tr>
\t</table>
\t
\t<br />
\t<br />
\t
\t<table>
\t\t<tr><th colspan=\"2\"><b>Localisation</b></th></tr>
\t\t\t<tr><td>Code INSEE</td><td>";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "site", array()), "codeINSEE", array()), "html", null, true);
        echo "</td></tr>
\t\t\t<tr><td>Numéro de site</td><td>";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "site", array()), "numSiteCommune", array()), "html", null, true);
        echo "</td></tr>
\t\t\t<tr><td>Zone</td><td>";
        // line 61
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : null), "zone", array(), "any", false, true), "numero", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : null), "zone", array(), "any", false, true), "numero", array()), "Aucune")) : ("Aucune")), "html", null, true);
        echo "</td></tr>
\t\t\t<tr><td>US</td><td>";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "us", array()), "nom", array()), "html", null, true);
        echo "</td></tr>
\t\t\t<tr><td>Numéro d'isolation</td><td>";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "numIsolation", array()), "html", null, true);
        echo "</td></tr>
\t</table>
\t
\t<br />
\t<br />
\t
\t<table>
\t\t<tr><th colspan=\"2\"><b>Datation</b></th></tr>
\t\t\t<tr><td>Période</td><td>";
        // line 71
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : null), "periode", array(), "any", false, true), "numeroPeriode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : null), "periode", array(), "any", false, true), "numeroPeriode", array()), "Non renseigné")) : ("Non renseigné")), "html", null, true);
        echo "</td></tr>
\t\t\t<tr><td>Phase</td><td>";
        // line 72
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : null), "phase", array(), "any", false, true), "numeroPhase", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : null), "phase", array(), "any", false, true), "numeroPhase", array()), "Non renseigné")) : ("Non renseigné")), "html", null, true);
        echo "</td></tr>
\t\t\t<tr><td>Séquence</td><td>";
        // line 73
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : null), "sequence", array(), "any", false, true), "numeroSequence", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : null), "sequence", array(), "any", false, true), "numeroSequence", array()), "Non renseigné")) : ("Non renseigné")), "html", null, true);
        echo "</td></tr>
\t</table>
\t
\t<br />
\t<br />
\t
\t<table>
\t\t<tr><th colspan=\"2\"><b>Décor</b></th></tr>
\t\t\t<tr><td>Position</td><td>
\t\t\t";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "decor", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["position"]) {
            // line 83
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($context["position"], "position", array()), "html", null, true);
            echo "
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['position'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "\t\t\t</td></tr>
\t\t\t<tr><td>Type</td><td>
\t\t\t";
        // line 87
        if ( !twig_test_empty($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "typeDecor", array()))) {
            // line 88
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "typeDecor", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                // line 89
                echo "\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "nom", array()), "html", null, true);
                echo "
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "\t\t\t";
        } else {
            // line 92
            echo "\t\t\t\tNon renseigné
\t\t\t";
        }
        // line 94
        echo "\t\t\t</td></tr>
\t</table>

\t<br />
\t<br />
\t<br />
\t<br />
\t
\t<table>
\t\t\t<tr><th>Type de numérisation</th><th>Numérisation</th></tr>
\t\t\t";
        // line 104
        if ( !twig_test_empty($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "numerisation", array()))) {
            // line 105
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["tesson"]) ? $context["tesson"] : $this->getContext($context, "tesson")), "numerisation", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["numerisation"]) {
                // line 106
                echo "\t\t\t\t\t<tr><td>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["numerisation"], "typeNumerisation", array()), "nom", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td><img src=\"";
                // line 107
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["numerisation"], "webPath", array())), "html", null, true);
                echo "\" width=\"300\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["numerisation"], "alt", array()), "html", null, true);
                echo "\"/></td>
\t\t\t\t\t</tr>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['numerisation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "\t\t\t";
        } else {
            // line 111
            echo "\t\t\t<tr><td>Pas de numérisations trouvées pour ce tesson</td></tr>
\t\t\t";
        }
        // line 113
        echo "\t</table>
\t</page>
";
        
        $__internal_42f66ac4012455e3384d5b8e08221c6793a984d7e6df76c51034531508795c04->leave($__internal_42f66ac4012455e3384d5b8e08221c6793a984d7e6df76c51034531508795c04_prof);

    }

    public function getTemplateName()
    {
        return "LIFOClassifBundle:Platform:tessonpdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 113,  261 => 111,  258 => 110,  247 => 107,  242 => 106,  237 => 105,  235 => 104,  223 => 94,  219 => 92,  216 => 91,  207 => 89,  202 => 88,  200 => 87,  196 => 85,  187 => 83,  183 => 82,  171 => 73,  167 => 72,  163 => 71,  152 => 63,  148 => 62,  144 => 61,  140 => 60,  136 => 59,  123 => 51,  117 => 50,  111 => 49,  105 => 48,  102 => 47,  98 => 46,  92 => 44,  90 => 43,  78 => 34,  74 => 33,  70 => 32,  66 => 31,  62 => 30,  58 => 29,  54 => 28,  50 => 27,  22 => 1,);
    }
}
/* */
/* <style>*/
/* table, th, td {*/
/*     border: 1px solid rgb(220,220,220);*/
/*     border-collapse: collapse;*/
/* }*/
/* th, td {*/
/*     padding: 5px;*/
/* }*/
/* td {*/
/*     width: 50%;*/
/*     text-align: center;*/
/* }*/
/* */
/* th {*/
/*     height: 20px;*/
/*     text-align: center;*/
/*     background-color: rgb(255,250,205);*/
/*     border-bottom: 2px solid rgb(220,220,220);*/
/* }*/
/* </style>*/
/* */
/* <page>*/
/* 	<br /><br/>*/
/* 	<table>*/
/* 		<tr><th colspan="2"><b>Description du tesson</b></th></tr>*/
/* 			<tr><td>Identifiant</td><td>{{tesson.id}}</td></tr>*/
/* 			<tr><td>Année de découverte</td><td>{{tesson.anneeDecouverte}}</td></tr>*/
/* 			<tr><td>Developpé</td><td>{{tesson.developpe|default('Aucun')}}</td></tr>*/
/* 			<tr><td>Lot / Individu</td><td>{{tesson.lotIndividu}}</td></tr>*/
/* 			<tr><td>Numéro de tombe</td><td>{{tesson.numTombe|default('Aucun')}}</td></tr>*/
/* 			<tr><td>Fait</td><td>{{tesson.fait|default('Aucun')}}</td></tr>*/
/* 			<tr><td>Commentaire</td><td>{{tesson.commentaire}}</td></tr>*/
/* 			<tr><td>Date d'enregistrement</td><td>{{tesson.dateEnregistrement|date('Y-m-d')}}</td></tr>*/
/* 	</table>*/
/* 	*/
/* 	<br />*/
/* 	<br />*/
/* 	*/
/* 	<table>*/
/* 		<tr><th colspan="2"><b>Dimensions</b></th></tr>*/
/* 			<tr><td>Caractère moyen</td><td>*/
/* 			{% if tesson.largeur != 0 and tesson.longueur != 0 and tesson.nombreMotifsVerticaux != 0 and tesson.nombreMotifsHorizontaux != 0 %}*/
/* 				{{ (tesson.longueur+tesson.largeur)/(tesson.nombreMotifsVerticaux + tesson.nombreMotifsHorizontaux) }}*/
/* 			{% else %}*/
/* 				0*/
/* 			{% endif %}</td></tr>*/
/* 			<tr><td>Largeur</td><td>{{tesson.ordreLargeur}}&nbsp;{{tesson.largeur}}</td></tr>*/
/* 			<tr><td>Longueur</td><td>{{tesson.ordreLongueur}}&nbsp;{{tesson.longueur}}</td></tr>*/
/* 			<tr><td>Nombre de motifs verticaux</td><td>{{tesson.ordreMotifsVerticaux}}&nbsp;{{tesson.nombreMotifsVerticaux}}</td></tr>*/
/* 			<tr><td>Nombre de motifs horizontaux</td><td>{{tesson.ordreMotifsHorizontaux}}&nbsp;{{tesson.nombreMotifsHorizontaux}}</td></tr>*/
/* 	</table>*/
/* 	*/
/* 	<br />*/
/* 	<br />*/
/* 	*/
/* 	<table>*/
/* 		<tr><th colspan="2"><b>Localisation</b></th></tr>*/
/* 			<tr><td>Code INSEE</td><td>{{tesson.site.codeINSEE}}</td></tr>*/
/* 			<tr><td>Numéro de site</td><td>{{tesson.site.numSiteCommune}}</td></tr>*/
/* 			<tr><td>Zone</td><td>{{tesson.zone.numero|default('Aucune')}}</td></tr>*/
/* 			<tr><td>US</td><td>{{tesson.us.nom}}</td></tr>*/
/* 			<tr><td>Numéro d'isolation</td><td>{{tesson.numIsolation}}</td></tr>*/
/* 	</table>*/
/* 	*/
/* 	<br />*/
/* 	<br />*/
/* 	*/
/* 	<table>*/
/* 		<tr><th colspan="2"><b>Datation</b></th></tr>*/
/* 			<tr><td>Période</td><td>{{tesson.periode.numeroPeriode|default('Non renseigné')}}</td></tr>*/
/* 			<tr><td>Phase</td><td>{{tesson.phase.numeroPhase|default('Non renseigné')}}</td></tr>*/
/* 			<tr><td>Séquence</td><td>{{tesson.sequence.numeroSequence|default('Non renseigné')}}</td></tr>*/
/* 	</table>*/
/* 	*/
/* 	<br />*/
/* 	<br />*/
/* 	*/
/* 	<table>*/
/* 		<tr><th colspan="2"><b>Décor</b></th></tr>*/
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
/* 	</table>*/
/* */
/* 	<br />*/
/* 	<br />*/
/* 	<br />*/
/* 	<br />*/
/* 	*/
/* 	<table>*/
/* 			<tr><th>Type de numérisation</th><th>Numérisation</th></tr>*/
/* 			{% if tesson.numerisation is not empty %}*/
/* 				{% for numerisation in tesson.numerisation %}*/
/* 					<tr><td>{{ numerisation.typeNumerisation.nom }}</td>*/
/* 						<td><img src="{{ asset(numerisation.webPath) }}" width="300" alt="{{ numerisation.alt }}"/></td>*/
/* 					</tr>*/
/* 				{% endfor %}*/
/* 			{% else %}*/
/* 			<tr><td>Pas de numérisations trouvées pour ce tesson</td></tr>*/
/* 			{% endif %}*/
/* 	</table>*/
/* 	</page>*/
/* */
