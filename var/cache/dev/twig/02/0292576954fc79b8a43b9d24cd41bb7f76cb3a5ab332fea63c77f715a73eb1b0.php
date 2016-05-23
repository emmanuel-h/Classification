<?php

/* LIFOClassifBundle:Platform:classification.html.twig */
class __TwigTemplate_e5befdf423956516b061be7994071b32843bce52dbd1e18137e82d090398fab9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layoutGeneral.html.twig", "LIFOClassifBundle:Platform:classification.html.twig", 1);
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
        $__internal_26b7e191febced63bdd6516492f1abfc980697f281812961f1aac00fba52d510 = $this->env->getExtension("native_profiler");
        $__internal_26b7e191febced63bdd6516492f1abfc980697f281812961f1aac00fba52d510->enter($__internal_26b7e191febced63bdd6516492f1abfc980697f281812961f1aac00fba52d510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Platform:classification.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26b7e191febced63bdd6516492f1abfc980697f281812961f1aac00fba52d510->leave($__internal_26b7e191febced63bdd6516492f1abfc980697f281812961f1aac00fba52d510_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bcd32aae0ca792370a132c63fb09eb1b9fa90d63d312f643f14735fb5b73a09f = $this->env->getExtension("native_profiler");
        $__internal_bcd32aae0ca792370a132c63fb09eb1b9fa90d63d312f643f14735fb5b73a09f->enter($__internal_bcd32aae0ca792370a132c63fb09eb1b9fa90d63d312f643f14735fb5b73a09f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Classification";
        
        $__internal_bcd32aae0ca792370a132c63fb09eb1b9fa90d63d312f643f14735fb5b73a09f->leave($__internal_bcd32aae0ca792370a132c63fb09eb1b9fa90d63d312f643f14735fb5b73a09f_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_485b68294c362a0b7466dbc622261b5f4fb1374b4d2a63f3585b3b9a57ed8e8b = $this->env->getExtension("native_profiler");
        $__internal_485b68294c362a0b7466dbc622261b5f4fb1374b4d2a63f3585b3b9a57ed8e8b->enter($__internal_485b68294c362a0b7466dbc622261b5f4fb1374b4d2a63f3585b3b9a57ed8e8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

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
        $this->loadTemplate("LIFOClassifBundle::pagination.html.twig", "LIFOClassifBundle:Platform:classification.html.twig", 40)->display($context);
        // line 41
        echo "
";
        
        $__internal_485b68294c362a0b7466dbc622261b5f4fb1374b4d2a63f3585b3b9a57ed8e8b->leave($__internal_485b68294c362a0b7466dbc622261b5f4fb1374b4d2a63f3585b3b9a57ed8e8b_prof);

    }

    public function getTemplateName()
    {
        return "LIFOClassifBundle:Platform:classification.html.twig";
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
