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
        $__internal_58a3761761a68ce6857c21559d385d4a190b47ecfef34b119ee6fd731547e94e = $this->env->getExtension("native_profiler");
        $__internal_58a3761761a68ce6857c21559d385d4a190b47ecfef34b119ee6fd731547e94e->enter($__internal_58a3761761a68ce6857c21559d385d4a190b47ecfef34b119ee6fd731547e94e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Platform/classification.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58a3761761a68ce6857c21559d385d4a190b47ecfef34b119ee6fd731547e94e->leave($__internal_58a3761761a68ce6857c21559d385d4a190b47ecfef34b119ee6fd731547e94e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_55a6eaaa2e10e33ecc5a66fdf2475b1acbbd7d136932af2da88d7f4662fcdbff = $this->env->getExtension("native_profiler");
        $__internal_55a6eaaa2e10e33ecc5a66fdf2475b1acbbd7d136932af2da88d7f4662fcdbff->enter($__internal_55a6eaaa2e10e33ecc5a66fdf2475b1acbbd7d136932af2da88d7f4662fcdbff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Classification";
        
        $__internal_55a6eaaa2e10e33ecc5a66fdf2475b1acbbd7d136932af2da88d7f4662fcdbff->leave($__internal_55a6eaaa2e10e33ecc5a66fdf2475b1acbbd7d136932af2da88d7f4662fcdbff_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_e23fe7bdc18f4c6bddd640615e0f63a4e01507d2bd5a65bb91c9d4180443c7f2 = $this->env->getExtension("native_profiler");
        $__internal_e23fe7bdc18f4c6bddd640615e0f63a4e01507d2bd5a65bb91c9d4180443c7f2->enter($__internal_e23fe7bdc18f4c6bddd640615e0f63a4e01507d2bd5a65bb91c9d4180443c7f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

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
  <div class=\"row\">
  \t<div class=\"col-sm-2\">
\t  ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formClassif"]) ? $context["formClassif"] : $this->getContext($context, "formClassif")), "afficher", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
\t  ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formClassif"]) ? $context["formClassif"] : $this->getContext($context, "formClassif")), 'rest');
        echo "
\t  </div>
\t  <div class=\"col-sm-10\">
\t      <div class=\"alert alert-info\" align=\"center\" id=\"parametresClassif\">
\t  \t\t<strong>Paramètres de recherche&nbsp;:&nbsp;</strong>Classification&nbsp;:&nbsp;";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["typeClassifChoisi"]) ? $context["typeClassifChoisi"] : $this->getContext($context, "typeClassifChoisi")), "html", null, true);
        echo ",&nbsp;Numérisation&nbsp;:&nbsp;";
        echo twig_escape_filter($this->env, (isset($context["typeNumerisation"]) ? $context["typeNumerisation"] : $this->getContext($context, "typeNumerisation")), "html", null, true);
        echo "
\t\t</div>
\t\t</div>
\t</div>
  ";
        // line 48
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formClassif"]) ? $context["formClassif"] : $this->getContext($context, "formClassif")), 'form_end');
        echo "
 </div>
 
 ";
        // line 52
        echo "
";
        // line 53
        $this->loadTemplate("LIFOClassifBundle::pagination.html.twig", "@LIFOClassif/Platform/classification.html.twig", 53)->display($context);
        // line 54
        echo "
";
        // line 55
        if ( !twig_test_empty((isset($context["tessons"]) ? $context["tessons"] : $this->getContext($context, "tessons")))) {
            // line 56
            echo "

\t<table class=\"table table-bordered table-striped table-hover\">
\t<thead align=\"middle\"><tr class=\"warning\"><td width=5%><b>ID tesson</b></td><td width=10%><b>Proposition</b><td width=10%><b>Classe</b></td><td width=10%><b>Numérisation</b></td></tr></thead>
\t<tbody>
\t
    ";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tessons"]) ? $context["tessons"] : $this->getContext($context, "tessons")));
            foreach ($context['_seq'] as $context["_key"] => $context["tesson"]) {
                // line 63
                echo "\t\t<tr>
\t\t\t<td><a href=\"";
                // line 64
                echo twig_escape_filter($this->env, ((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . $this->env->getExtension('routing')->getPath("lifo_classif_tesson", array("id" => $this->getAttribute($context["tesson"], "id", array())))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tesson"], "id", array()), "html", null, true);
                echo "</a></td>
\t\t\t";
                // line 65
                if ( !twig_test_empty($this->getAttribute($context["tesson"], "propositionClasse", array()))) {
                    // line 66
                    echo "\t\t\t\t<td>
\t\t\t\t";
                    // line 67
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["tesson"], "propositionClasse", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["propClasse"]) {
                        // line 68
                        echo "\t\t\t\t\t\t";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["propClasse"], "classe", array()), "nomClasse", array()), "html", null, true);
                        echo "
\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['propClasse'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 70
                    echo "\t\t\t\t</td>
\t\t\t";
                } else {
                    // line 72
                    echo "\t\t\t\t<td>Aucune proposition de classe</td>
\t\t\t";
                }
                // line 74
                echo "\t\t\t<td>
\t\t\t<select name=\"";
                // line 75
                echo twig_escape_filter($this->env, $this->getAttribute($context["tesson"], "id", array()), "html", null, true);
                echo "\" onchange='modifierClasse(this)' class=\"form-control\">
\t\t\t";
                // line 76
                $context["type"] = 0;
                // line 77
                echo "\t\t\t";
                if ( !twig_test_empty($this->getAttribute($context["tesson"], "typageEn", array()))) {
                    // line 78
                    echo "\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["tesson"], "typageEn", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["typage"]) {
                        // line 79
                        echo "\t\t\t\t\t";
                        if ( !twig_test_empty($this->getAttribute($context["typage"], "classe", array()))) {
                            // line 80
                            echo "\t\t\t\t\t\t";
                            $context["type"] = 1;
                            // line 81
                            echo " \t\t\t\t\t\t<option value=\"\">Pas de classe</option>
 \t\t\t\t\t";
                        } else {
                            // line 83
                            echo " \t\t\t\t\t\t<option value=\"\" selected>Pas de classe</option>
 \t\t\t\t\t";
                        }
                        // line 85
                        echo " \t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['typage'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 86
                    echo " \t\t\t";
                } else {
                    // line 87
                    echo " \t\t\t<option value=\"\" selected>Pas de classe</option>
 \t\t\t";
                }
                // line 89
                echo " \t\t\t";
                $context["typeClasseCourant"] = "";
                // line 90
                echo "\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["listeClasses"]) ? $context["listeClasses"] : $this->getContext($context, "listeClasses")));
                foreach ($context['_seq'] as $context["_key"] => $context["classe"]) {
                    // line 91
                    echo "\t\t\t\t";
                    if (((isset($context["typeClasseCourant"]) ? $context["typeClasseCourant"] : $this->getContext($context, "typeClasseCourant")) != $this->getAttribute($this->getAttribute($context["classe"], "typeClassification", array()), "nomType", array()))) {
                        // line 92
                        echo "  \t\t\t\t\t<optgroup label=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["classe"], "typeClassification", array()), "nomType", array()), "html", null, true);
                        echo "\">
\t\t\t\t";
                    }
                    // line 94
                    echo "\t\t\t\t";
                    $context["typeClasseCourant"] = $this->getAttribute($this->getAttribute($context["classe"], "typeClassification", array()), "nomType", array());
                    // line 95
                    echo "\t\t\t\t";
                    if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == 1)) {
                        // line 96
                        echo "\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["tesson"], "typageEn", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["typage"]) {
                            // line 97
                            echo "\t\t\t\t\t\t";
                            if (($this->getAttribute($context["classe"], "nomClasse", array()) == $this->getAttribute($this->getAttribute($context["typage"], "classe", array()), "nomClasse", array()))) {
                                // line 98
                                echo "\t\t\t\t\t\t\t<option value=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["classe"], "nomClasse", array()), "html", null, true);
                                echo "\" selected>";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["classe"], "nomClasse", array()), "html", null, true);
                                echo "</option>
\t\t\t\t\t\t";
                            } else {
                                // line 100
                                echo "\t\t\t\t\t\t\t<option value=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["classe"], "nomClasse", array()), "html", null, true);
                                echo "\">";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["classe"], "nomClasse", array()), "html", null, true);
                                echo "</option>
\t\t\t\t\t\t";
                            }
                            // line 102
                            echo "\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['typage'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 103
                        echo "\t\t\t\t";
                    } else {
                        // line 104
                        echo "\t\t\t\t\t<option value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["classe"], "nomClasse", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["classe"], "nomClasse", array()), "html", null, true);
                        echo "</option>
\t\t\t\t";
                    }
                    // line 106
                    echo "\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classe'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 107
                echo "\t\t\t\t</select>
\t\t\t</td>
\t\t\t";
                // line 109
                if (((isset($context["typeNumerisation"]) ? $context["typeNumerisation"] : $this->getContext($context, "typeNumerisation")) != "Aucune")) {
                    // line 110
                    echo "\t\t\t\t";
                    if ( !twig_test_empty($this->getAttribute($context["tesson"], "numerisation", array()))) {
                        // line 111
                        echo "\t\t\t\t\t";
                        $context["break"] = false;
                        // line 112
                        echo "\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["tesson"], "numerisation", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["numerisation"]) {
                            if ( !(isset($context["break"]) ? $context["break"] : $this->getContext($context, "break"))) {
                                // line 113
                                echo "\t\t\t\t\t\t";
                                if (($this->getAttribute($this->getAttribute($context["numerisation"], "typeNumerisation", array()), "nom", array()) == (isset($context["typeNumerisation"]) ? $context["typeNumerisation"] : $this->getContext($context, "typeNumerisation")))) {
                                    // line 114
                                    echo "\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a class=\"group\" title=\" ";
                                    // line 115
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["numerisation"], "alt", array()), "html", null, true);
                                    echo "\" href=\"";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["numerisation"], "webPath", array())), "html", null, true);
                                    echo "\">
\t\t\t\t\t\t\t<img src=\"";
                                    // line 116
                                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["numerisation"], "webPath", array())), "html", null, true);
                                    echo "\" width=\"50\" height=\"50\" alt=\"";
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["numerisation"], "alt", array()), "html", null, true);
                                    echo "\"/>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t";
                                    // line 119
                                    $context["break"] = true;
                                    // line 120
                                    echo "\t\t\t\t\t\t";
                                }
                                // line 121
                                echo "\t\t\t\t\t";
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['numerisation'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 122
                        echo "\t\t\t\t";
                    } else {
                        // line 123
                        echo "\t\t\t\t\t<td>Pas de numérisations trouvées pour ce tesson</td>
\t\t\t\t";
                    }
                    // line 125
                    echo "\t\t\t";
                } else {
                    // line 126
                    echo "\t\t\t\t";
                    if ( !twig_test_empty($this->getAttribute($context["tesson"], "numerisation", array()))) {
                        // line 127
                        echo "\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a class=\"group\" title=\" ";
                        // line 128
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["tesson"], "numerisation", array()), 0, array(), "array"), "alt", array()), "html", null, true);
                        echo "\" href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["tesson"], "numerisation", array()), 0, array(), "array"), "webPath", array())), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t<img src=\"";
                        // line 129
                        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["tesson"], "numerisation", array()), 0, array(), "array"), "webPath", array())), "html", null, true);
                        echo "\" width=\"50\" height=\"50\" alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["tesson"], "numerisation", array()), 0, array(), "array"), "alt", array()), "html", null, true);
                        echo "\"/>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t";
                    } else {
                        // line 133
                        echo "\t\t\t\t\t<td>Pas de numérisations trouvées pour ce tesson</td>
\t\t\t\t";
                    }
                    // line 135
                    echo "\t\t\t";
                }
                // line 136
                echo "\t\t</tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tesson'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 138
            echo "\t</tbody>
\t</table>
";
        } else {
            // line 141
            echo "    <div class=\"alert alert-danger\" role=\"alert\">
\t\t<p>Aucun tesson trouvé avec les paramètres actuels de recherche</p>
\t</div>
";
        }
        // line 145
        echo "
\t<script type=\"text/javascript\">
\t\$(document).ready(function() {
\t\t\$(\".group\").fancybox();
\t\t
\t});
\t
\tfunction modifierClasse(sel){
\t\t\$.post(\"";
        // line 153
        echo twig_escape_filter($this->env, ((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . $this->env->getExtension('routing')->getPath("lifo_classif_classification_modifier")), "html", null, true);
        echo "\", {selID:sel.name, classe:sel.value});
\t};
\t</script>

";
        
        $__internal_e23fe7bdc18f4c6bddd640615e0f63a4e01507d2bd5a65bb91c9d4180443c7f2->leave($__internal_e23fe7bdc18f4c6bddd640615e0f63a4e01507d2bd5a65bb91c9d4180443c7f2_prof);

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
        return array (  438 => 153,  428 => 145,  422 => 141,  417 => 138,  410 => 136,  407 => 135,  403 => 133,  394 => 129,  388 => 128,  385 => 127,  382 => 126,  379 => 125,  375 => 123,  372 => 122,  365 => 121,  362 => 120,  360 => 119,  352 => 116,  346 => 115,  343 => 114,  340 => 113,  334 => 112,  331 => 111,  328 => 110,  326 => 109,  322 => 107,  316 => 106,  308 => 104,  305 => 103,  299 => 102,  291 => 100,  283 => 98,  280 => 97,  275 => 96,  272 => 95,  269 => 94,  263 => 92,  260 => 91,  255 => 90,  252 => 89,  248 => 87,  245 => 86,  239 => 85,  235 => 83,  231 => 81,  228 => 80,  225 => 79,  220 => 78,  217 => 77,  215 => 76,  211 => 75,  208 => 74,  204 => 72,  200 => 70,  191 => 68,  187 => 67,  184 => 66,  182 => 65,  176 => 64,  173 => 63,  169 => 62,  161 => 56,  159 => 55,  156 => 54,  154 => 53,  151 => 52,  145 => 48,  136 => 44,  129 => 40,  125 => 39,  116 => 33,  110 => 30,  105 => 28,  101 => 27,  92 => 21,  87 => 19,  83 => 18,  78 => 16,  73 => 14,  69 => 13,  63 => 10,  58 => 8,  54 => 6,  48 => 5,  35 => 3,  11 => 1,);
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
/*   <div class="row">*/
/*   	<div class="col-sm-2">*/
/* 	  {{ form_widget(formClassif.afficher, {'attr': {'class': 'btn btn-primary'}}) }}*/
/* 	  {{ form_rest(formClassif) }}*/
/* 	  </div>*/
/* 	  <div class="col-sm-10">*/
/* 	      <div class="alert alert-info" align="center" id="parametresClassif">*/
/* 	  		<strong>Paramètres de recherche&nbsp;:&nbsp;</strong>Classification&nbsp;:&nbsp;{{ typeClassifChoisi }},&nbsp;Numérisation&nbsp;:&nbsp;{{ typeNumerisation }}*/
/* 		</div>*/
/* 		</div>*/
/* 	</div>*/
/*   {{ form_end(formClassif) }}*/
/*  </div>*/
/*  */
/*  {# La pagination est en haut pour éviter de scroll pour la voir #}*/
/* */
/* {% include 'LIFOClassifBundle::pagination.html.twig' %}*/
/* */
/* {% if tessons is not empty %}*/
/* */
/* */
/* 	<table class="table table-bordered table-striped table-hover">*/
/* 	<thead align="middle"><tr class="warning"><td width=5%><b>ID tesson</b></td><td width=10%><b>Proposition</b><td width=10%><b>Classe</b></td><td width=10%><b>Numérisation</b></td></tr></thead>*/
/* 	<tbody>*/
/* 	*/
/*     {% for tesson in tessons %}*/
/* 		<tr>*/
/* 			<td><a href="{{ base_url ~path('lifo_classif_tesson', {'id': tesson.id}) }}">{{ tesson.id }}</a></td>*/
/* 			{% if tesson.propositionClasse is not empty %}*/
/* 				<td>*/
/* 				{% for propClasse in tesson.propositionClasse %}*/
/* 						{{ propClasse.classe.nomClasse }}*/
/* 				{% endfor %}*/
/* 				</td>*/
/* 			{% else %}*/
/* 				<td>Aucune proposition de classe</td>*/
/* 			{% endif %}*/
/* 			<td>*/
/* 			<select name="{{ tesson.id }}" onchange='modifierClasse(this)' class="form-control">*/
/* 			{% set type = 0 %}*/
/* 			{%  if tesson.typageEn is not empty %}*/
/* 				{%  for typage in tesson.typageEn %}*/
/* 					{% if typage.classe is not empty %}*/
/* 						{% set type = 1 %}*/
/*  						<option value="">Pas de classe</option>*/
/*  					{% else %}*/
/*  						<option value="" selected>Pas de classe</option>*/
/*  					{% endif %}*/
/*  				{% endfor %}*/
/*  			{% else %}*/
/*  			<option value="" selected>Pas de classe</option>*/
/*  			{% endif %}*/
/*  			{% set typeClasseCourant = "" %}*/
/* 			{% for classe in listeClasses %}*/
/* 				{% if typeClasseCourant != classe.typeClassification.nomType %}*/
/*   					<optgroup label="{{ classe.typeClassification.nomType }}">*/
/* 				{% endif %}*/
/* 				{% set typeClasseCourant = classe.typeClassification.nomType %}*/
/* 				{% if type == 1 %}*/
/* 					{%  for typage in tesson.typageEn %}*/
/* 						{% if classe.nomClasse == typage.classe.nomClasse %}*/
/* 							<option value="{{ classe.nomClasse }}" selected>{{ classe.nomClasse }}</option>*/
/* 						{% else %}*/
/* 							<option value="{{ classe.nomClasse }}">{{ classe.nomClasse }}</option>*/
/* 						{% endif %}*/
/* 					{% endfor %}*/
/* 				{% else %}*/
/* 					<option value="{{ classe.nomClasse }}">{{ classe.nomClasse }}</option>*/
/* 				{% endif %}*/
/* 			{% endfor %}*/
/* 				</select>*/
/* 			</td>*/
/* 			{% if typeNumerisation != "Aucune" %}*/
/* 				{% if tesson.numerisation is not empty %}*/
/* 					{% set break = false %}*/
/* 					{% for numerisation in tesson.numerisation if not break %}*/
/* 						{% if numerisation.typeNumerisation.nom == typeNumerisation %}*/
/* 							<td>*/
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
/* 	<script type="text/javascript">*/
/* 	$(document).ready(function() {*/
/* 		$(".group").fancybox();*/
/* 		*/
/* 	});*/
/* 	*/
/* 	function modifierClasse(sel){*/
/* 		$.post("{{ base_url ~path('lifo_classif_classification_modifier') }}", {selID:sel.name, classe:sel.value});*/
/* 	};*/
/* 	</script>*/
/* */
/* {% endblock %}*/
/* */
