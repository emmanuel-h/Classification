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
        $__internal_1d639ad260ab17e7b582a055d80919fa0fabb9f1e6c96b46f352d86869bdab1e = $this->env->getExtension("native_profiler");
        $__internal_1d639ad260ab17e7b582a055d80919fa0fabb9f1e6c96b46f352d86869bdab1e->enter($__internal_1d639ad260ab17e7b582a055d80919fa0fabb9f1e6c96b46f352d86869bdab1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Platform:classification.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d639ad260ab17e7b582a055d80919fa0fabb9f1e6c96b46f352d86869bdab1e->leave($__internal_1d639ad260ab17e7b582a055d80919fa0fabb9f1e6c96b46f352d86869bdab1e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_97315da0af5be10b5a1c1de95859440f8dc5eeda86f9253059c0814443d1b31d = $this->env->getExtension("native_profiler");
        $__internal_97315da0af5be10b5a1c1de95859440f8dc5eeda86f9253059c0814443d1b31d->enter($__internal_97315da0af5be10b5a1c1de95859440f8dc5eeda86f9253059c0814443d1b31d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Classification";
        
        $__internal_97315da0af5be10b5a1c1de95859440f8dc5eeda86f9253059c0814443d1b31d->leave($__internal_97315da0af5be10b5a1c1de95859440f8dc5eeda86f9253059c0814443d1b31d_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_4b422cfc013d89e8cfbce60b941b64d9d6dcf7f33bc86a5293492770e5897e3d = $this->env->getExtension("native_profiler");
        $__internal_4b422cfc013d89e8cfbce60b941b64d9d6dcf7f33bc86a5293492770e5897e3d->enter($__internal_4b422cfc013d89e8cfbce60b941b64d9d6dcf7f33bc86a5293492770e5897e3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

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
        $this->loadTemplate("LIFOClassifBundle::pagination.html.twig", "LIFOClassifBundle:Platform:classification.html.twig", 42)->display($context);
        // line 43
        echo "
";
        
        $__internal_4b422cfc013d89e8cfbce60b941b64d9d6dcf7f33bc86a5293492770e5897e3d->leave($__internal_4b422cfc013d89e8cfbce60b941b64d9d6dcf7f33bc86a5293492770e5897e3d_prof);

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
