<?php

/* @LIFOClassif/Platform/classification.html.twig */
class __TwigTemplate_d48983bfe3c4f8c570de11499660b9d824df3625695829ff0a1694ec91fbe8cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layoutGeneral.html.twig", "@LIFOClassif/Platform/classification.html.twig", 1);
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
        $__internal_284b27fc6bb70ae1cc4acec3d5a4e5837567a57807e18116b7c87bc608ee4ced = $this->env->getExtension("native_profiler");
        $__internal_284b27fc6bb70ae1cc4acec3d5a4e5837567a57807e18116b7c87bc608ee4ced->enter($__internal_284b27fc6bb70ae1cc4acec3d5a4e5837567a57807e18116b7c87bc608ee4ced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Platform/classification.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_284b27fc6bb70ae1cc4acec3d5a4e5837567a57807e18116b7c87bc608ee4ced->leave($__internal_284b27fc6bb70ae1cc4acec3d5a4e5837567a57807e18116b7c87bc608ee4ced_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dd050c4d8c08274343e833ecbba319542dc74a9fd00c4da5a3394f375899071f = $this->env->getExtension("native_profiler");
        $__internal_dd050c4d8c08274343e833ecbba319542dc74a9fd00c4da5a3394f375899071f->enter($__internal_dd050c4d8c08274343e833ecbba319542dc74a9fd00c4da5a3394f375899071f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Classification";
        
        $__internal_dd050c4d8c08274343e833ecbba319542dc74a9fd00c4da5a3394f375899071f->leave($__internal_dd050c4d8c08274343e833ecbba319542dc74a9fd00c4da5a3394f375899071f_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_d0d3d14421dcb02ebe642369623a97b11d22963295db782525c51776e312fedc = $this->env->getExtension("native_profiler");
        $__internal_d0d3d14421dcb02ebe642369623a97b11d22963295db782525c51776e312fedc->enter($__internal_d0d3d14421dcb02ebe642369623a97b11d22963295db782525c51776e312fedc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "
<br/>
<br/>
";
        // line 9
        if ( !twig_test_empty((isset($context["tessons"]) ? $context["tessons"] : $this->getContext($context, "tessons")))) {
            // line 10
            echo "\t<table class=\"table table-bordered table-striped table-hover\">
\t<thead><tr class=\"warning\" align=\"center\"><td width=5%></td><td width=10%><b>ID tesson</b></td><td width=10%><b>Classe</b></td><td width=10%><b>Type classification</b></td></tr></thead>
\t<tbody>
    ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tessons"]) ? $context["tessons"] : $this->getContext($context, "tessons")));
            foreach ($context['_seq'] as $context["_key"] => $context["tesson"]) {
                // line 14
                echo "\t\t<tr>
\t\t\t<td>
\t\t\t<a href=\"";
                // line 16
                echo $this->env->getExtension('routing')->getPath("lifo_classif_classification");
                echo "\">Classifier</a>
\t\t\t</td>
\t\t\t<td>";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($context["tesson"], "id", array()), "html", null, true);
                echo "</td>
\t\t\t";
                // line 19
                if ( !twig_test_empty($this->getAttribute($context["tesson"], "propositionClasse", array()))) {
                    // line 20
                    echo "\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["tesson"], "propositionClasse", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["propClasse"]) {
                        // line 21
                        echo "\t\t\t\t\t\t<td>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["propClasse"], "classe", array()), "nomClasse", array()), "html", null, true);
                        echo "</td>
\t\t\t\t\t\t";
                        // line 22
                        if ( !twig_test_empty($this->getAttribute($context["propClasse"], "essaiClassification", array()))) {
                            // line 23
                            echo "\t\t\t\t\t\t\t";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["propClasse"], "essaiClassification", array()));
                            foreach ($context['_seq'] as $context["_key"] => $context["essaiClassif"]) {
                                // line 24
                                echo "\t\t\t\t\t\t\t\t<td>";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["essaiClassif"], "typeClassification", array()), "nomType", array()), "html", null, true);
                                echo "
\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['essaiClassif'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 26
                            echo "\t\t\t\t\t\t";
                        } else {
                            // line 27
                            echo "\t\t\t\t\t\t\t<td>Aucun essai de classification</td>
\t\t\t\t\t\t";
                        }
                        // line 29
                        echo "\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['propClasse'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 30
                    echo "\t\t\t";
                } else {
                    // line 31
                    echo "\t\t\t\t<td>Aucune proposition de classe</td>
\t\t\t\t<td>Aucun essai de classification</td>
\t\t\t";
                }
                // line 34
                echo "\t\t</tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tesson'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "\t</tbody>
\t</table>
";
        } else {
            // line 39
            echo "    <p>Il n'y a aucun tesson sans classification.</p>
";
        }
        // line 41
        echo "
";
        // line 42
        $this->loadTemplate("LIFOClassifBundle::pagination.html.twig", "@LIFOClassif/Platform/classification.html.twig", 42)->display($context);
        // line 43
        echo "
";
        
        $__internal_d0d3d14421dcb02ebe642369623a97b11d22963295db782525c51776e312fedc->leave($__internal_d0d3d14421dcb02ebe642369623a97b11d22963295db782525c51776e312fedc_prof);

    }

    public function getTemplateName()
    {
        return "@LIFOClassif/Platform/classification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 43,  151 => 42,  148 => 41,  144 => 39,  139 => 36,  132 => 34,  127 => 31,  124 => 30,  118 => 29,  114 => 27,  111 => 26,  102 => 24,  97 => 23,  95 => 22,  90 => 21,  85 => 20,  83 => 19,  79 => 18,  74 => 16,  70 => 14,  66 => 13,  61 => 10,  59 => 9,  54 => 6,  48 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "LIFOClassifBundle::layoutGeneral.html.twig" %}*/
/* */
/* {% block title %}{{ parent() }} - Classification{% endblock %}*/
/* */
/* {% block LIFOClassif_body %}*/
/* */
/* <br/>*/
/* <br/>*/
/* {% if tessons is not empty %}*/
/* 	<table class="table table-bordered table-striped table-hover">*/
/* 	<thead><tr class="warning" align="center"><td width=5%></td><td width=10%><b>ID tesson</b></td><td width=10%><b>Classe</b></td><td width=10%><b>Type classification</b></td></tr></thead>*/
/* 	<tbody>*/
/*     {% for tesson in tessons %}*/
/* 		<tr>*/
/* 			<td>*/
/* 			<a href="{{ path('lifo_classif_classification') }}">Classifier</a>*/
/* 			</td>*/
/* 			<td>{{ tesson.id }}</td>*/
/* 			{% if tesson.propositionClasse is not empty %}*/
/* 				{% for propClasse in tesson.propositionClasse %}*/
/* 						<td>{{ propClasse.classe.nomClasse }}</td>*/
/* 						{% if propClasse.essaiClassification is not empty %}*/
/* 							{% for essaiClassif in propClasse.essaiClassification %}*/
/* 								<td>{{ essaiClassif.typeClassification.nomType }}*/
/* 							{% endfor %}*/
/* 						{% else %}*/
/* 							<td>Aucun essai de classification</td>*/
/* 						{% endif %}*/
/* 				{% endfor %}*/
/* 			{% else %}*/
/* 				<td>Aucune proposition de classe</td>*/
/* 				<td>Aucun essai de classification</td>*/
/* 			{% endif %}*/
/* 		</tr>*/
/*     {% endfor %}*/
/* 	</tbody>*/
/* 	</table>*/
/* {% else %}*/
/*     <p>Il n'y a aucun tesson sans classification.</p>*/
/* {% endif %}*/
/* */
/* {% include 'LIFOClassifBundle::pagination.html.twig' %}*/
/* */
/* {% endblock %}*/
