<?php

/* LIFOClassifBundle:Platform:afficherNumerisations.html.twig */
class __TwigTemplate_643745c9378ed0628681b20999b7536f15e6e2958dd3f20fb6e11d83072c707d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layoutGeneral.html.twig", "LIFOClassifBundle:Platform:afficherNumerisations.html.twig", 1);
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
        $__internal_37f910dddf89c55f2a4d64793d8d8ebb461072f8839fa1935e973e0cc663e7cb = $this->env->getExtension("native_profiler");
        $__internal_37f910dddf89c55f2a4d64793d8d8ebb461072f8839fa1935e973e0cc663e7cb->enter($__internal_37f910dddf89c55f2a4d64793d8d8ebb461072f8839fa1935e973e0cc663e7cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Platform:afficherNumerisations.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37f910dddf89c55f2a4d64793d8d8ebb461072f8839fa1935e973e0cc663e7cb->leave($__internal_37f910dddf89c55f2a4d64793d8d8ebb461072f8839fa1935e973e0cc663e7cb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a774862c6a4ffbb6255c37dff022210046e073837615f18088b9c8e809b9017b = $this->env->getExtension("native_profiler");
        $__internal_a774862c6a4ffbb6255c37dff022210046e073837615f18088b9c8e809b9017b->enter($__internal_a774862c6a4ffbb6255c37dff022210046e073837615f18088b9c8e809b9017b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Numérisations";
        
        $__internal_a774862c6a4ffbb6255c37dff022210046e073837615f18088b9c8e809b9017b->leave($__internal_a774862c6a4ffbb6255c37dff022210046e073837615f18088b9c8e809b9017b_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_3dd7612f019e08213b50a8890e7e4d2d04db587cf9fd4d965ac0380aa987b7ba = $this->env->getExtension("native_profiler");
        $__internal_3dd7612f019e08213b50a8890e7e4d2d04db587cf9fd4d965ac0380aa987b7ba->enter($__internal_3dd7612f019e08213b50a8890e7e4d2d04db587cf9fd4d965ac0380aa987b7ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

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
        $this->loadTemplate("LIFOClassifBundle::pagination.html.twig", "LIFOClassifBundle:Platform:afficherNumerisations.html.twig", 22)->display($context);
        // line 23
        echo "
";
        
        $__internal_3dd7612f019e08213b50a8890e7e4d2d04db587cf9fd4d965ac0380aa987b7ba->leave($__internal_3dd7612f019e08213b50a8890e7e4d2d04db587cf9fd4d965ac0380aa987b7ba_prof);

    }

    public function getTemplateName()
    {
        return "LIFOClassifBundle:Platform:afficherNumerisations.html.twig";
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
