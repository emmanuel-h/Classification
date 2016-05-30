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
        $__internal_179ea364fb5a3376ecab3650b3fab0594f0452f53c6bada51d0d88b8a3d10a0a = $this->env->getExtension("native_profiler");
        $__internal_179ea364fb5a3376ecab3650b3fab0594f0452f53c6bada51d0d88b8a3d10a0a->enter($__internal_179ea364fb5a3376ecab3650b3fab0594f0452f53c6bada51d0d88b8a3d10a0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Platform:classification.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_179ea364fb5a3376ecab3650b3fab0594f0452f53c6bada51d0d88b8a3d10a0a->leave($__internal_179ea364fb5a3376ecab3650b3fab0594f0452f53c6bada51d0d88b8a3d10a0a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b31d322cea68a8b396495030223905c97c475ad8137cf5d8d3251531d55e69e8 = $this->env->getExtension("native_profiler");
        $__internal_b31d322cea68a8b396495030223905c97c475ad8137cf5d8d3251531d55e69e8->enter($__internal_b31d322cea68a8b396495030223905c97c475ad8137cf5d8d3251531d55e69e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Classification";
        
        $__internal_b31d322cea68a8b396495030223905c97c475ad8137cf5d8d3251531d55e69e8->leave($__internal_b31d322cea68a8b396495030223905c97c475ad8137cf5d8d3251531d55e69e8_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_45c525af66453b35080e6f0aca99ea70accc1c29ecf19dc70da945dd62ff5fd7 = $this->env->getExtension("native_profiler");
        $__internal_45c525af66453b35080e6f0aca99ea70accc1c29ecf19dc70da945dd62ff5fd7->enter($__internal_45c525af66453b35080e6f0aca99ea70accc1c29ecf19dc70da945dd62ff5fd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "
<div class=\"well\">
  ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formClassif"]) ? $context["formClassif"] : $this->getContext($context, "formClassif")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

  ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formClassif"]) ? $context["formClassif"] : $this->getContext($context, "formClassif")), 'errors');
        echo "
  <div class=\"form-group\">
  \t<div class=\"row\">
\t    ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formClassif"]) ? $context["formClassif"] : $this->getContext($context, "formClassif")), "typeClassification", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Classification"));
        echo "
\t    ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formClassif"]) ? $context["formClassif"] : $this->getContext($context, "formClassif")), "typeClassification", array()), 'errors');
        echo "
\t    <div class=\"col-sm-4\">
\t      ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formClassif"]) ? $context["formClassif"] : $this->getContext($context, "formClassif")), "typeClassification", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t    </div>
\t    ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formClassif"]) ? $context["formClassif"] : $this->getContext($context, "formClassif")), "campagne", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Campagne"));
        echo "
\t    ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formClassif"]) ? $context["formClassif"] : $this->getContext($context, "formClassif")), "campagne", array()), 'errors');
        echo "
\t    <div class=\"col-sm-4\">
\t      ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formClassif"]) ? $context["formClassif"] : $this->getContext($context, "formClassif")), "campagne", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t    </div>
    </div>
  </div>
  <div class=\"form-group\">
    <div class=\"row\">
    ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formClassif"]) ? $context["formClassif"] : $this->getContext($context, "formClassif")), "typeNumerisation", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Numérisation"));
        echo "
    ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formClassif"]) ? $context["formClassif"] : $this->getContext($context, "formClassif")), "typeNumerisation", array()), 'errors');
        echo "
\t    <div class=\"col-sm-4\">
\t      ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formClassif"]) ? $context["formClassif"] : $this->getContext($context, "formClassif")), "typeNumerisation", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t    </div>
\t    <div class=\"col-sm-5\" align =\"right\">
\t      ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formClassif"]) ? $context["formClassif"] : $this->getContext($context, "formClassif")), "afficherTessonsClasses", array()), 'row');
        echo "
\t    </div>
    </div>
  </div>
  ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formClassif"]) ? $context["formClassif"] : $this->getContext($context, "formClassif")), "afficher", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
  ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formClassif"]) ? $context["formClassif"] : $this->getContext($context, "formClassif")), 'rest');
        echo "
  ";
        // line 39
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formClassif"]) ? $context["formClassif"] : $this->getContext($context, "formClassif")), 'form_end');
        echo "
 </div>
 
";
        // line 42
        if ( !twig_test_empty((isset($context["tessons"]) ? $context["tessons"] : $this->getContext($context, "tessons")))) {
            // line 43
            echo "\t<table class=\"table table-bordered table-striped table-hover\">
\t<thead align=\"middle\"><tr class=\"warning\"><td width=5%><b>ID tesson</b></td><td width=10%><b>Proposition</b><td width=10%><b>Classe</b></td><td width=10%><b>Numérisation</b></td></tr></thead>
\t<tbody>
    ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tessons"]) ? $context["tessons"] : $this->getContext($context, "tessons")));
            foreach ($context['_seq'] as $context["_key"] => $context["tesson"]) {
                // line 47
                echo "\t\t<tr>
\t\t\t<td><a href=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lifo_classif_tesson", array("id" => $this->getAttribute($context["tesson"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tesson"], "id", array()), "html", null, true);
                echo "</a></td>
\t\t\t";
                // line 49
                if ( !twig_test_empty($this->getAttribute($context["tesson"], "propositionClasse", array()))) {
                    // line 50
                    echo "\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["tesson"], "propositionClasse", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["propClasse"]) {
                        // line 51
                        echo "\t\t\t\t\t\t<td>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["propClasse"], "classe", array()), "nomClasse", array()), "html", null, true);
                        echo "</td>
\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['propClasse'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 53
                    echo "\t\t\t";
                } else {
                    // line 54
                    echo "\t\t\t\t<td>Aucune proposition de classe</td>
\t\t\t";
                }
                // line 56
                echo "\t\t\t";
                if ( !twig_test_empty($this->getAttribute($context["tesson"], "typageEn", array()))) {
                    // line 57
                    echo "\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["tesson"], "typageEn", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["typage"]) {
                        // line 58
                        echo "\t\t\t\t\t";
                        if ( !twig_test_empty($this->getAttribute($context["typage"], "classe", array()))) {
                            // line 59
                            echo "\t\t\t\t\t\t<td>";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["typage"], "classe", array()), "nomClasse", array()), "html", null, true);
                            echo " </td>
\t\t\t\t\t";
                        } else {
                            // line 61
                            echo "\t\t\t\t\t\t<td>Pas de classe</td>
\t\t\t\t\t";
                        }
                        // line 63
                        echo "\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['typage'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 64
                    echo "\t\t\t";
                } else {
                    // line 65
                    echo "\t\t\t\t<td>Pas de classe</td>
\t\t\t";
                }
                // line 67
                echo "\t\t\t";
                if (((isset($context["typeNumerisation"]) ? $context["typeNumerisation"] : $this->getContext($context, "typeNumerisation")) != "Aucune")) {
                    // line 68
                    echo "\t\t\t\t";
                    if ( !twig_test_empty($this->getAttribute($context["tesson"], "numerisation", array()))) {
                        // line 69
                        echo "\t\t\t\t\t";
                        $context["break"] = false;
                        // line 70
                        echo "\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["tesson"], "numerisation", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["numerisation"]) {
                            if ( !(isset($context["break"]) ? $context["break"] : $this->getContext($context, "break"))) {
                                // line 71
                                echo "\t\t\t\t\t\t";
                                if (($this->getAttribute($this->getAttribute($context["numerisation"], "typeNumerisation", array()), "nom", array()) == (isset($context["typeNumerisation"]) ? $context["typeNumerisation"] : $this->getContext($context, "typeNumerisation")))) {
                                    // line 72
                                    echo "\t\t\t\t\t\t\t<a class=\"group\" title=\" ";
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["numerisation"], "alt", array()), "html", null, true);
                                    echo "\" href=\"";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["numerisation"], "webPath", array())), "html", null, true);
                                    echo "\">
\t\t\t\t\t\t\t<img src=\"";
                                    // line 73
                                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["numerisation"], "webPath", array())), "html", null, true);
                                    echo "\" width=\"50\" height=\"50\" alt=\"";
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["numerisation"], "alt", array()), "html", null, true);
                                    echo "\"/>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t";
                                    // line 76
                                    $context["break"] = true;
                                    // line 77
                                    echo "\t\t\t\t\t\t";
                                }
                                // line 78
                                echo "\t\t\t\t\t";
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['numerisation'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 79
                        echo "\t\t\t\t";
                    } else {
                        // line 80
                        echo "\t\t\t\t\t<td>Pas de numérisations trouvées pour ce tesson</td>
\t\t\t\t";
                    }
                    // line 82
                    echo "\t\t\t";
                } else {
                    // line 83
                    echo "\t\t\t\t";
                    if ( !twig_test_empty($this->getAttribute($context["tesson"], "numerisation", array()))) {
                        // line 84
                        echo "\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a class=\"group\" title=\" ";
                        // line 85
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["tesson"], "numerisation", array()), 0, array(), "array"), "alt", array()), "html", null, true);
                        echo "\" href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["tesson"], "numerisation", array()), 0, array(), "array"), "webPath", array())), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t<img src=\"";
                        // line 86
                        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["tesson"], "numerisation", array()), 0, array(), "array"), "webPath", array())), "html", null, true);
                        echo "\" width=\"50\" height=\"50\" alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["tesson"], "numerisation", array()), 0, array(), "array"), "alt", array()), "html", null, true);
                        echo "\"/>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t";
                    } else {
                        // line 90
                        echo "\t\t\t\t\t<td>Pas de numérisations trouvées pour ce tesson</td>
\t\t\t\t";
                    }
                    // line 92
                    echo "\t\t\t";
                }
                // line 93
                echo "\t\t</tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tesson'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo "\t</tbody>
\t</table>
";
        } else {
            // line 98
            echo "    <div class=\"alert alert-danger\" role=\"alert\">
\t\t<p>Aucun tesson trouvé avec les paramètres actuels de recherche</p>
\t</div>
";
        }
        // line 102
        echo "
";
        // line 103
        $this->loadTemplate("LIFOClassifBundle::pagination.html.twig", "LIFOClassifBundle:Platform:classification.html.twig", 103)->display($context);
        // line 104
        echo "
\t<script type=\"text/javascript\">
\t\$(document).ready(function() {
\t\t\$(\".group\").fancybox();
\t\t
\t});
\t</script>

";
        
        $__internal_45c525af66453b35080e6f0aca99ea70accc1c29ecf19dc70da945dd62ff5fd7->leave($__internal_45c525af66453b35080e6f0aca99ea70accc1c29ecf19dc70da945dd62ff5fd7_prof);

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
        return array (  320 => 104,  318 => 103,  315 => 102,  309 => 98,  304 => 95,  297 => 93,  294 => 92,  290 => 90,  281 => 86,  275 => 85,  272 => 84,  269 => 83,  266 => 82,  262 => 80,  259 => 79,  252 => 78,  249 => 77,  247 => 76,  239 => 73,  232 => 72,  229 => 71,  223 => 70,  220 => 69,  217 => 68,  214 => 67,  210 => 65,  207 => 64,  201 => 63,  197 => 61,  191 => 59,  188 => 58,  183 => 57,  180 => 56,  176 => 54,  173 => 53,  164 => 51,  159 => 50,  157 => 49,  151 => 48,  148 => 47,  144 => 46,  139 => 43,  137 => 42,  131 => 39,  127 => 38,  123 => 37,  116 => 33,  110 => 30,  105 => 28,  101 => 27,  92 => 21,  87 => 19,  83 => 18,  78 => 16,  73 => 14,  69 => 13,  63 => 10,  58 => 8,  54 => 6,  48 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "LIFOClassifBundle::layoutGeneral.html.twig" %}*/
/* */
/* {% block title %}{{ parent() }} - Classification{% endblock %}*/
/* */
/* {% block LIFOClassif_body %}*/
/* */
/* <div class="well">*/
/*   {{ form_start(formClassif, {'attr': {'class': 'form-horizontal'}}) }}*/
/* */
/*   {{ form_errors(formClassif) }}*/
/*   <div class="form-group">*/
/*   	<div class="row">*/
/* 	    {{ form_label(formClassif.typeClassification, "Classification", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}*/
/* 	    {{ form_errors(formClassif.typeClassification) }}*/
/* 	    <div class="col-sm-4">*/
/* 	      {{ form_widget(formClassif.typeClassification, {'attr': {'class': 'form-control'}}) }}*/
/* 	    </div>*/
/* 	    {{ form_label(formClassif.campagne, "Campagne", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}*/
/* 	    {{ form_errors(formClassif.campagne) }}*/
/* 	    <div class="col-sm-4">*/
/* 	      {{ form_widget(formClassif.campagne, {'attr': {'class': 'form-control'}}) }}*/
/* 	    </div>*/
/*     </div>*/
/*   </div>*/
/*   <div class="form-group">*/
/*     <div class="row">*/
/*     {{ form_label(formClassif.typeNumerisation, "Numérisation", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/*     {{ form_errors(formClassif.typeNumerisation) }}*/
/* 	    <div class="col-sm-4">*/
/* 	      {{ form_widget(formClassif.typeNumerisation, {'attr': {'class': 'form-control'}}) }}*/
/* 	    </div>*/
/* 	    <div class="col-sm-5" align ="right">*/
/* 	      {{ form_row(formClassif.afficherTessonsClasses) }}*/
/* 	    </div>*/
/*     </div>*/
/*   </div>*/
/*   {{ form_widget(formClassif.afficher, {'attr': {'class': 'btn btn-primary'}}) }}*/
/*   {{ form_rest(formClassif) }}*/
/*   {{ form_end(formClassif) }}*/
/*  </div>*/
/*  */
/* {% if tessons is not empty %}*/
/* 	<table class="table table-bordered table-striped table-hover">*/
/* 	<thead align="middle"><tr class="warning"><td width=5%><b>ID tesson</b></td><td width=10%><b>Proposition</b><td width=10%><b>Classe</b></td><td width=10%><b>Numérisation</b></td></tr></thead>*/
/* 	<tbody>*/
/*     {% for tesson in tessons %}*/
/* 		<tr>*/
/* 			<td><a href="{{ path('lifo_classif_tesson', {'id': tesson.id}) }}">{{ tesson.id }}</a></td>*/
/* 			{% if tesson.propositionClasse is not empty %}*/
/* 				{% for propClasse in tesson.propositionClasse %}*/
/* 						<td>{{ propClasse.classe.nomClasse }}</td>*/
/* 				{% endfor %}*/
/* 			{% else %}*/
/* 				<td>Aucune proposition de classe</td>*/
/* 			{% endif %}*/
/* 			{%  if tesson.typageEn is not empty %}*/
/* 				{%  for typage in tesson.typageEn %}*/
/* 					{% if typage.classe is not empty %}*/
/* 						<td>{{ typage.classe.nomClasse }} </td>*/
/* 					{% else %}*/
/* 						<td>Pas de classe</td>*/
/* 					{% endif %}*/
/* 				{%  endfor %}*/
/* 			{% else %}*/
/* 				<td>Pas de classe</td>*/
/* 			{% endif %}*/
/* 			{% if typeNumerisation != "Aucune" %}*/
/* 				{% if tesson.numerisation is not empty %}*/
/* 					{% set break = false %}*/
/* 					{% for numerisation in tesson.numerisation if not break %}*/
/* 						{% if numerisation.typeNumerisation.nom == typeNumerisation %}*/
/* 							<a class="group" title=" {{ numerisation.alt }}" href="{{ asset(numerisation.webPath) }}">*/
/* 							<img src="{{ asset(numerisation.webPath) }}" width="50" height="50" alt="{{ numerisation.alt }}"/>*/
/* 							</a>*/
/* 							</td>*/
/* 							{% set break = true %}*/
/* 						{% endif %}*/
/* 					{% endfor %}*/
/* 				{% else %}*/
/* 					<td>Pas de numérisations trouvées pour ce tesson</td>*/
/* 				{% endif %}*/
/* 			{% else %}*/
/* 				{% if tesson.numerisation is not empty %}*/
/* 							<td>*/
/* 							<a class="group" title=" {{ tesson.numerisation[0].alt }}" href="{{ asset(tesson.numerisation[0].webPath) }}">*/
/* 							<img src="{{ asset(tesson.numerisation[0].webPath) }}" width="50" height="50" alt="{{ tesson.numerisation[0].alt }}"/>*/
/* 							</a>*/
/* 							</td>*/
/* 				{% else %}*/
/* 					<td>Pas de numérisations trouvées pour ce tesson</td>*/
/* 				{% endif %}*/
/* 			{% endif %}*/
/* 		</tr>*/
/*     {% endfor %}*/
/* 	</tbody>*/
/* 	</table>*/
/* {% else %}*/
/*     <div class="alert alert-danger" role="alert">*/
/* 		<p>Aucun tesson trouvé avec les paramètres actuels de recherche</p>*/
/* 	</div>*/
/* {% endif %}*/
/* */
/* {% include 'LIFOClassifBundle::pagination.html.twig' %}*/
/* */
/* 	<script type="text/javascript">*/
/* 	$(document).ready(function() {*/
/* 		$(".group").fancybox();*/
/* 		*/
/* 	});*/
/* 	</script>*/
/* */
/* {% endblock %}*/
