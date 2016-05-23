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
        $__internal_b8bd939e7154d6720cf28834e9b2502c338dad3c81dcc720d99a4d9f2dfb3731 = $this->env->getExtension("native_profiler");
        $__internal_b8bd939e7154d6720cf28834e9b2502c338dad3c81dcc720d99a4d9f2dfb3731->enter($__internal_b8bd939e7154d6720cf28834e9b2502c338dad3c81dcc720d99a4d9f2dfb3731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Platform/classification.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8bd939e7154d6720cf28834e9b2502c338dad3c81dcc720d99a4d9f2dfb3731->leave($__internal_b8bd939e7154d6720cf28834e9b2502c338dad3c81dcc720d99a4d9f2dfb3731_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5b2109645746e883392e334d9c6a5194847ef673914707cab2b9e09be95717a3 = $this->env->getExtension("native_profiler");
        $__internal_5b2109645746e883392e334d9c6a5194847ef673914707cab2b9e09be95717a3->enter($__internal_5b2109645746e883392e334d9c6a5194847ef673914707cab2b9e09be95717a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Classification";
        
        $__internal_5b2109645746e883392e334d9c6a5194847ef673914707cab2b9e09be95717a3->leave($__internal_5b2109645746e883392e334d9c6a5194847ef673914707cab2b9e09be95717a3_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_c1908ae1940c61e7164a4e934ee7b9c0951edeb156c3708109585756e0ce96dc = $this->env->getExtension("native_profiler");
        $__internal_c1908ae1940c61e7164a4e934ee7b9c0951edeb156c3708109585756e0ce96dc->enter($__internal_c1908ae1940c61e7164a4e934ee7b9c0951edeb156c3708109585756e0ce96dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "
<br/>
<br/>
";
        // line 9
        if ( !twig_test_empty((isset($context["tessons"]) ? $context["tessons"] : $this->getContext($context, "tessons")))) {
            // line 10
            echo "\t<TABLE border=1>
\t<tr><td width=5%></td><td width=10%>ID tesson</td><td width=10%>Classe</td><td width=10%>Type classification</td></tr>
    ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tessons"]) ? $context["tessons"] : $this->getContext($context, "tessons")));
            foreach ($context['_seq'] as $context["_key"] => $context["tesson"]) {
                // line 13
                echo "\t\t<tr>
\t\t\t<td>
\t\t\t<a href=\"";
                // line 15
                echo $this->env->getExtension('routing')->getPath("lifo_classif_classification");
                echo "\">Classifier</a>
\t\t\t</td>
\t\t\t<td>";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["tesson"], "id", array()), "html", null, true);
                echo "</td>
\t\t\t";
                // line 18
                if ( !twig_test_empty($this->getAttribute($context["tesson"], "propositionClasse", array()))) {
                    // line 19
                    echo "\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["tesson"], "propositionClasse", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["propClasse"]) {
                        // line 20
                        echo "\t\t\t\t\t\t<td>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["propClasse"], "classe", array()), "nomClasse", array()), "html", null, true);
                        echo "</td>
\t\t\t\t\t\t";
                        // line 21
                        if ( !twig_test_empty($this->getAttribute($context["propClasse"], "essaiClassification", array()))) {
                            // line 22
                            echo "\t\t\t\t\t\t\t";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["propClasse"], "essaiClassification", array()));
                            foreach ($context['_seq'] as $context["_key"] => $context["essaiClassif"]) {
                                // line 23
                                echo "\t\t\t\t\t\t\t\t<td>";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["essaiClassif"], "typeClassification", array()), "nomType", array()), "html", null, true);
                                echo "
\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['essaiClassif'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 25
                            echo "\t\t\t\t\t\t";
                        } else {
                            // line 26
                            echo "\t\t\t\t\t\t\t<td>Aucun essai de classification</td>
\t\t\t\t\t\t";
                        }
                        // line 28
                        echo "\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['propClasse'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 29
                    echo "\t\t\t";
                } else {
                    // line 30
                    echo "\t\t\t\t<td>Aucune proposition de classe</td>
\t\t\t\t<td>Aucun essai de classification</td>
\t\t\t";
                }
                // line 33
                echo "\t\t</tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tesson'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "\t</table>
";
        } else {
            // line 37
            echo "    <p>Il n'y a aucun tesson sans classification.</p>
";
        }
        // line 39
        echo "
";
        // line 40
        $this->loadTemplate("LIFOClassifBundle::pagination.html.twig", "@LIFOClassif/Platform/classification.html.twig", 40)->display($context);
        // line 41
        echo "
";
        
        $__internal_c1908ae1940c61e7164a4e934ee7b9c0951edeb156c3708109585756e0ce96dc->leave($__internal_c1908ae1940c61e7164a4e934ee7b9c0951edeb156c3708109585756e0ce96dc_prof);

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
        return array (  151 => 41,  149 => 40,  146 => 39,  142 => 37,  138 => 35,  131 => 33,  126 => 30,  123 => 29,  117 => 28,  113 => 26,  110 => 25,  101 => 23,  96 => 22,  94 => 21,  89 => 20,  84 => 19,  82 => 18,  78 => 17,  73 => 15,  69 => 13,  65 => 12,  61 => 10,  59 => 9,  54 => 6,  48 => 5,  35 => 3,  11 => 1,);
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
/* 	<TABLE border=1>*/
/* 	<tr><td width=5%></td><td width=10%>ID tesson</td><td width=10%>Classe</td><td width=10%>Type classification</td></tr>*/
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
/* 	</table>*/
/* {% else %}*/
/*     <p>Il n'y a aucun tesson sans classification.</p>*/
/* {% endif %}*/
/* */
/* {% include 'LIFOClassifBundle::pagination.html.twig' %}*/
/* */
/* {% endblock %}*/
