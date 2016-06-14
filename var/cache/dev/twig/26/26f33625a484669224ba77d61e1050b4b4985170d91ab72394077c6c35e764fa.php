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
        $__internal_ffd6703ee305e6c7634641037ba84347d3ea8f9f4b756ee7eabf45fc33c459e4 = $this->env->getExtension("native_profiler");
        $__internal_ffd6703ee305e6c7634641037ba84347d3ea8f9f4b756ee7eabf45fc33c459e4->enter($__internal_ffd6703ee305e6c7634641037ba84347d3ea8f9f4b756ee7eabf45fc33c459e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Platform:afficherTessonsRecherche.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffd6703ee305e6c7634641037ba84347d3ea8f9f4b756ee7eabf45fc33c459e4->leave($__internal_ffd6703ee305e6c7634641037ba84347d3ea8f9f4b756ee7eabf45fc33c459e4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c57cb7dec5f28d511057ea77175e2b96fd1455540e0f167c71c185d22be106d4 = $this->env->getExtension("native_profiler");
        $__internal_c57cb7dec5f28d511057ea77175e2b96fd1455540e0f167c71c185d22be106d4->enter($__internal_c57cb7dec5f28d511057ea77175e2b96fd1455540e0f167c71c185d22be106d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Résultats de la recherche";
        
        $__internal_c57cb7dec5f28d511057ea77175e2b96fd1455540e0f167c71c185d22be106d4->leave($__internal_c57cb7dec5f28d511057ea77175e2b96fd1455540e0f167c71c185d22be106d4_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_238f71efabac9aaef4c908fbc73278924355bbb1cfd2088ea1e8698d8034c5a7 = $this->env->getExtension("native_profiler");
        $__internal_238f71efabac9aaef4c908fbc73278924355bbb1cfd2088ea1e8698d8034c5a7->enter($__internal_238f71efabac9aaef4c908fbc73278924355bbb1cfd2088ea1e8698d8034c5a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

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
                echo "\t\t";
                echo twig_escape_filter($this->env, $context["nom"], "html", null, true);
                echo "&nbsp;:&nbsp;";
                echo twig_escape_filter($this->env, $context["critere"], "html", null, true);
                echo "
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['nom'], $context['critere'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "\t";
        }
        // line 16
        echo "\t
\t
</div>


<table class=\"table table-bordered table-striped table-hover\">
\t<thead align=\"middle\"><tr class=\"warning\"><td width=5%><b>ID tesson</b></td><td width=10%><b>Site</b><td width=10%><b>US</b></td><td width=10%><b>Numéro d'isolation</b></td></tr></thead>
\t<tbody>
\t";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tessons"]) ? $context["tessons"] : $this->getContext($context, "tessons")));
        foreach ($context['_seq'] as $context["_key"] => $context["tesson"]) {
            // line 25
            echo "\t\t<tr>
\t\t\t<td><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lifo_classif_tesson", array("id" => $this->getAttribute($context["tesson"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tesson"], "id", array()), "html", null, true);
            echo "</a></td>
\t\t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tesson"], "site", array()), "codeINSEE", array()), "html", null, true);
            echo "&nbsp;";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tesson"], "site", array()), "numSiteCommune", array()), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tesson"], "us", array()), "nom", array()), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["tesson"], "numIsolation", array()), "html", null, true);
            echo "</td>
\t\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tesson'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "\t</tbody>
</table>

";
        // line 35
        $this->loadTemplate("LIFOClassifBundle::pagination.html.twig", "LIFOClassifBundle:Platform:afficherTessonsRecherche.html.twig", 35)->display($context);
        // line 36
        echo "
";
        
        $__internal_238f71efabac9aaef4c908fbc73278924355bbb1cfd2088ea1e8698d8034c5a7->leave($__internal_238f71efabac9aaef4c908fbc73278924355bbb1cfd2088ea1e8698d8034c5a7_prof);

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
        return array (  133 => 36,  131 => 35,  126 => 32,  117 => 29,  113 => 28,  107 => 27,  101 => 26,  98 => 25,  94 => 24,  84 => 16,  81 => 15,  70 => 13,  65 => 12,  61 => 10,  59 => 9,  54 => 6,  48 => 5,  35 => 3,  11 => 1,);
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
/* 		{{ nom }}&nbsp;:&nbsp;{{ critere }}*/
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
