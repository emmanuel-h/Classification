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
        $__internal_7e3e170253b7e1e943c177490da4cd0ce77e7c2c3a012ba4ff47cc7584ea178c = $this->env->getExtension("native_profiler");
        $__internal_7e3e170253b7e1e943c177490da4cd0ce77e7c2c3a012ba4ff47cc7584ea178c->enter($__internal_7e3e170253b7e1e943c177490da4cd0ce77e7c2c3a012ba4ff47cc7584ea178c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Platform:classification.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e3e170253b7e1e943c177490da4cd0ce77e7c2c3a012ba4ff47cc7584ea178c->leave($__internal_7e3e170253b7e1e943c177490da4cd0ce77e7c2c3a012ba4ff47cc7584ea178c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1e5363aa67aaa8a6bd05fef2879ec8513a2c12220bfeb9557cf17291e74cefaa = $this->env->getExtension("native_profiler");
        $__internal_1e5363aa67aaa8a6bd05fef2879ec8513a2c12220bfeb9557cf17291e74cefaa->enter($__internal_1e5363aa67aaa8a6bd05fef2879ec8513a2c12220bfeb9557cf17291e74cefaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Classification";
        
        $__internal_1e5363aa67aaa8a6bd05fef2879ec8513a2c12220bfeb9557cf17291e74cefaa->leave($__internal_1e5363aa67aaa8a6bd05fef2879ec8513a2c12220bfeb9557cf17291e74cefaa_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_b8f77d96b389fb6480e4dc72fd99c322b76d6b7b8923f02bb6eeb2701950591b = $this->env->getExtension("native_profiler");
        $__internal_b8f77d96b389fb6480e4dc72fd99c322b76d6b7b8923f02bb6eeb2701950591b->enter($__internal_b8f77d96b389fb6480e4dc72fd99c322b76d6b7b8923f02bb6eeb2701950591b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

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
\t<thead align=\"middle\"><tr class=\"warning\"><td width=5%><b>ID tesson</b></td><td width=10%><b>Proposition</b><td width=10% colspan=2><b>Classe</b></td><td width=10%><b>Numérisation</b></td></tr></thead>
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
                    echo "\t\t\t\t<td>
\t\t\t\t";
                    // line 51
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["tesson"], "propositionClasse", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["propClasse"]) {
                        // line 52
                        echo "\t\t\t\t\t\t";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["propClasse"], "classe", array()), "nomClasse", array()), "html", null, true);
                        echo "
\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['propClasse'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 54
                    echo "\t\t\t\t</td>
\t\t\t";
                } else {
                    // line 56
                    echo "\t\t\t\t<td>Aucune proposition de classe</td>
\t\t\t";
                }
                // line 58
                echo "\t\t\t";
                if ( !twig_test_empty($this->getAttribute($context["tesson"], "typageEn", array()))) {
                    // line 59
                    echo "\t\t\t\t<td>
\t\t\t\t";
                    // line 60
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["tesson"], "typageEn", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["typage"]) {
                        // line 61
                        echo "\t\t\t\t\t";
                        if ( !twig_test_empty($this->getAttribute($context["typage"], "classe", array()))) {
                            // line 62
                            echo "\t\t\t\t\t\t";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["typage"], "classe", array()), "nomClasse", array()), "html", null, true);
                            echo "
\t\t\t\t\t";
                        } else {
                            // line 64
                            echo "\t\t\t\t\t\tPas de classe
\t\t\t\t\t";
                        }
                        // line 66
                        echo "\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['typage'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 67
                    echo "\t\t\t\t</td>
\t\t\t";
                } else {
                    // line 69
                    echo "\t\t\t\t<td>Pas de classe</td>
\t\t\t";
                }
                // line 71
                echo "\t\t\t<td width=1%>
\t\t\t\t<a href=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lifo_classif_tesson", array("id" => $this->getAttribute($context["tesson"], "id", array()))), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tesson"], "id", array()), "html", null, true);
                echo "\" class=\"btn btn-xs btn-info\">+</a>
\t\t\t</td>
\t\t\t";
                // line 74
                if (((isset($context["typeNumerisation"]) ? $context["typeNumerisation"] : $this->getContext($context, "typeNumerisation")) != "Aucune")) {
                    // line 75
                    echo "\t\t\t\t";
                    if ( !twig_test_empty($this->getAttribute($context["tesson"], "numerisation", array()))) {
                        // line 76
                        echo "\t\t\t\t\t";
                        $context["break"] = false;
                        // line 77
                        echo "\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["tesson"], "numerisation", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["numerisation"]) {
                            if ( !(isset($context["break"]) ? $context["break"] : $this->getContext($context, "break"))) {
                                // line 78
                                echo "\t\t\t\t\t\t";
                                if (($this->getAttribute($this->getAttribute($context["numerisation"], "typeNumerisation", array()), "nom", array()) == (isset($context["typeNumerisation"]) ? $context["typeNumerisation"] : $this->getContext($context, "typeNumerisation")))) {
                                    // line 79
                                    echo "\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a class=\"group\" title=\" ";
                                    // line 80
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["numerisation"], "alt", array()), "html", null, true);
                                    echo "\" href=\"";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["numerisation"], "webPath", array())), "html", null, true);
                                    echo "\">
\t\t\t\t\t\t\t<img src=\"";
                                    // line 81
                                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["numerisation"], "webPath", array())), "html", null, true);
                                    echo "\" width=\"50\" height=\"50\" alt=\"";
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["numerisation"], "alt", array()), "html", null, true);
                                    echo "\"/>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t";
                                    // line 84
                                    $context["break"] = true;
                                    // line 85
                                    echo "\t\t\t\t\t\t";
                                }
                                // line 86
                                echo "\t\t\t\t\t";
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['numerisation'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 87
                        echo "\t\t\t\t";
                    } else {
                        // line 88
                        echo "\t\t\t\t\t<td>Pas de numérisations trouvées pour ce tesson</td>
\t\t\t\t";
                    }
                    // line 90
                    echo "\t\t\t";
                } else {
                    // line 91
                    echo "\t\t\t\t";
                    if ( !twig_test_empty($this->getAttribute($context["tesson"], "numerisation", array()))) {
                        // line 92
                        echo "\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a class=\"group\" title=\" ";
                        // line 93
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["tesson"], "numerisation", array()), 0, array(), "array"), "alt", array()), "html", null, true);
                        echo "\" href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["tesson"], "numerisation", array()), 0, array(), "array"), "webPath", array())), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t<img src=\"";
                        // line 94
                        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["tesson"], "numerisation", array()), 0, array(), "array"), "webPath", array())), "html", null, true);
                        echo "\" width=\"50\" height=\"50\" alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["tesson"], "numerisation", array()), 0, array(), "array"), "alt", array()), "html", null, true);
                        echo "\"/>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t";
                    } else {
                        // line 98
                        echo "\t\t\t\t\t<td>Pas de numérisations trouvées pour ce tesson</td>
\t\t\t\t";
                    }
                    // line 100
                    echo "\t\t\t";
                }
                // line 101
                echo "\t\t</tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tesson'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo "\t</tbody>
\t</table>
";
        } else {
            // line 106
            echo "    <div class=\"alert alert-danger\" role=\"alert\">
\t\t<p>Aucun tesson trouvé avec les paramètres actuels de recherche</p>
\t</div>
";
        }
        // line 110
        echo "
";
        // line 111
        if (($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "nbPages", array()) > 0)) {
            // line 112
            echo "    <ul class=\"pagination\">
        ";
            // line 113
            if (($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()) > 1)) {
                // line 114
                echo "            <li>
                <a href=\"";
                // line 115
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "nomRoute", array()), twig_array_merge($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "paramsRoute", array()), array("page" => 1, "typeClassifChoisi" => (isset($context["typeClassifChoisi"]) ? $context["typeClassifChoisi"] : $this->getContext($context, "typeClassifChoisi")), "typeNumerisationChoisi" => (isset($context["typeNumerisation"]) ? $context["typeNumerisation"] : $this->getContext($context, "typeNumerisation")), "tessonsClasses" => (isset($context["tessonsClasses"]) ? $context["tessonsClasses"] : $this->getContext($context, "tessonsClasses"))))), "html", null, true);
                echo "\">
                    <<
                </a>
            </li>
            <li>
                <a href=\"";
                // line 120
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "nomRoute", array()), twig_array_merge($this->getAttribute(                // line 121
(isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "paramsRoute", array()), array("page" => ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()) - 1), "typeClassifChoisi" => (isset($context["typeClassifChoisi"]) ? $context["typeClassifChoisi"] : $this->getContext($context, "typeClassifChoisi")), "typeNumerisationChoisi" => (isset($context["typeNumerisation"]) ? $context["typeNumerisation"] : $this->getContext($context, "typeNumerisation")), "tessonsClasses" => (isset($context["tessonsClasses"]) ? $context["tessonsClasses"] : $this->getContext($context, "tessonsClasses"))))), "html", null, true);
                echo "\">
                    <
                </a>
            </li>
        ";
            }
            // line 126
            echo "
        ";
            // line 128
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(max(($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()) - 4), 1), min(($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()) + 4), $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "nbPages", array()))));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 129
                echo "            <li ";
                if (($context["p"] == $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()))) {
                    echo "class=\"active\"";
                }
                echo ">
                <a href=\"";
                // line 130
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "nomRoute", array()), twig_array_merge($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "paramsRoute", array()), array("page" => $context["p"], "typeClassifChoisi" => (isset($context["typeClassifChoisi"]) ? $context["typeClassifChoisi"] : $this->getContext($context, "typeClassifChoisi")), "typeNumerisationChoisi" => (isset($context["typeNumerisation"]) ? $context["typeNumerisation"] : $this->getContext($context, "typeNumerisation")), "tessonsClasses" => (isset($context["tessonsClasses"]) ? $context["tessonsClasses"] : $this->getContext($context, "tessonsClasses"))))), "html", null, true);
                echo "\">
                    ";
                // line 131
                echo twig_escape_filter($this->env, $context["p"], "html", null, true);
                echo "
                </a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 135
            echo "
        ";
            // line 136
            if (($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()) < $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "nbPages", array()))) {
                // line 137
                echo "            <li>
                <a href=\"";
                // line 138
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "nomRoute", array()), twig_array_merge($this->getAttribute(                // line 139
(isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "paramsRoute", array()), array("page" => ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()) + 1), "typeClassifChoisi" => (isset($context["typeClassifChoisi"]) ? $context["typeClassifChoisi"] : $this->getContext($context, "typeClassifChoisi")), "typeNumerisationChoisi" => (isset($context["typeNumerisation"]) ? $context["typeNumerisation"] : $this->getContext($context, "typeNumerisation")), "tessonsClasses" => (isset($context["tessonsClasses"]) ? $context["tessonsClasses"] : $this->getContext($context, "tessonsClasses"))))), "html", null, true);
                echo "\">
                    >
                </a>
            </li>
            <li>
                <a href=\"";
                // line 144
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "nomRoute", array()), twig_array_merge($this->getAttribute(                // line 145
(isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "paramsRoute", array()), array("page" => $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "nbPages", array())))), "html", null, true);
                echo "\">
                    >>
                </a>
            </li>
        ";
            }
            // line 150
            echo "    </ul>
";
        }
        // line 152
        echo "
\t<script type=\"text/javascript\">
\t\$(document).ready(function() {
\t\t\$(\".group\").fancybox();
\t\t
\t});
\t</script>

";
        
        $__internal_b8f77d96b389fb6480e4dc72fd99c322b76d6b7b8923f02bb6eeb2701950591b->leave($__internal_b8f77d96b389fb6480e4dc72fd99c322b76d6b7b8923f02bb6eeb2701950591b_prof);

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
        return array (  421 => 152,  417 => 150,  409 => 145,  408 => 144,  400 => 139,  399 => 138,  396 => 137,  394 => 136,  391 => 135,  381 => 131,  377 => 130,  370 => 129,  365 => 128,  362 => 126,  354 => 121,  353 => 120,  345 => 115,  342 => 114,  340 => 113,  337 => 112,  335 => 111,  332 => 110,  326 => 106,  321 => 103,  314 => 101,  311 => 100,  307 => 98,  298 => 94,  292 => 93,  289 => 92,  286 => 91,  283 => 90,  279 => 88,  276 => 87,  269 => 86,  266 => 85,  264 => 84,  256 => 81,  250 => 80,  247 => 79,  244 => 78,  238 => 77,  235 => 76,  232 => 75,  230 => 74,  223 => 72,  220 => 71,  216 => 69,  212 => 67,  206 => 66,  202 => 64,  196 => 62,  193 => 61,  189 => 60,  186 => 59,  183 => 58,  179 => 56,  175 => 54,  166 => 52,  162 => 51,  159 => 50,  157 => 49,  151 => 48,  148 => 47,  144 => 46,  139 => 43,  137 => 42,  131 => 39,  127 => 38,  123 => 37,  116 => 33,  110 => 30,  105 => 28,  101 => 27,  92 => 21,  87 => 19,  83 => 18,  78 => 16,  73 => 14,  69 => 13,  63 => 10,  58 => 8,  54 => 6,  48 => 5,  35 => 3,  11 => 1,);
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
/* 	<thead align="middle"><tr class="warning"><td width=5%><b>ID tesson</b></td><td width=10%><b>Proposition</b><td width=10% colspan=2><b>Classe</b></td><td width=10%><b>Numérisation</b></td></tr></thead>*/
/* 	<tbody>*/
/*     {% for tesson in tessons %}*/
/* 		<tr>*/
/* 			<td><a href="{{ path('lifo_classif_tesson', {'id': tesson.id}) }}">{{ tesson.id }}</a></td>*/
/* 			{% if tesson.propositionClasse is not empty %}*/
/* 				<td>*/
/* 				{% for propClasse in tesson.propositionClasse %}*/
/* 						{{ propClasse.classe.nomClasse }}*/
/* 				{% endfor %}*/
/* 				</td>*/
/* 			{% else %}*/
/* 				<td>Aucune proposition de classe</td>*/
/* 			{% endif %}*/
/* 			{%  if tesson.typageEn is not empty %}*/
/* 				<td>*/
/* 				{%  for typage in tesson.typageEn %}*/
/* 					{% if typage.classe is not empty %}*/
/* 						{{ typage.classe.nomClasse }}*/
/* 					{% else %}*/
/* 						Pas de classe*/
/* 					{% endif %}*/
/* 				{%  endfor %}*/
/* 				</td>*/
/* 			{% else %}*/
/* 				<td>Pas de classe</td>*/
/* 			{% endif %}*/
/* 			<td width=1%>*/
/* 				<a href="{{ path('lifo_classif_tesson', {'id': tesson.id}) }}" id="{{ tesson.id }}" class="btn btn-xs btn-info">+</a>*/
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
/* {% if pagination.nbPages > 0 %}*/
/*     <ul class="pagination">*/
/*         {% if pagination.page > 1 %}*/
/*             <li>*/
/*                 <a href="{{ path(pagination.nomRoute, pagination.paramsRoute|merge({'page': 1, 'typeClassifChoisi': typeClassifChoisi, 'typeNumerisationChoisi': typeNumerisation, 'tessonsClasses': tessonsClasses})) }}">*/
/*                     <<*/
/*                 </a>*/
/*             </li>*/
/*             <li>*/
/*                 <a href="{{ path(pagination.nomRoute,*/
/*                 pagination.paramsRoute|merge({'page': pagination.page-1, 'typeClassifChoisi': typeClassifChoisi, 'typeNumerisationChoisi': typeNumerisation, 'tessonsClasses': tessonsClasses})) }}">*/
/*                     <*/
/*                 </a>*/
/*             </li>*/
/*         {% endif %}*/
/* */
/*         {# Affichage de toutes les pages entre p-4 et p+4 sauf si < 1 ou > nbPages #}*/
/*         {% for p in range(max(pagination.page-4, 1), min(pagination.page+4, pagination.nbPages)) %}*/
/*             <li {% if p == pagination.page %}class="active"{% endif %}>*/
/*                 <a href="{{ path(pagination.nomRoute, pagination.paramsRoute|merge({'page': p, 'typeClassifChoisi': typeClassifChoisi, 'typeNumerisationChoisi': typeNumerisation, 'tessonsClasses': tessonsClasses})) }}">*/
/*                     {{ p }}*/
/*                 </a>*/
/*             </li>*/
/*         {% endfor %}*/
/* */
/*         {% if pagination.page < pagination.nbPages %}*/
/*             <li>*/
/*                 <a href="{{ path(pagination.nomRoute,*/
/*                 pagination.paramsRoute|merge({'page': pagination.page+1, 'typeClassifChoisi': typeClassifChoisi, 'typeNumerisationChoisi': typeNumerisation, 'tessonsClasses': tessonsClasses})) }}">*/
/*                     >*/
/*                 </a>*/
/*             </li>*/
/*             <li>*/
/*                 <a href="{{ path(pagination.nomRoute,*/
/*                 pagination.paramsRoute|merge({'page': pagination.nbPages})) }}">*/
/*                     >>*/
/*                 </a>*/
/*             </li>*/
/*         {% endif %}*/
/*     </ul>*/
/* {% endif %}*/
/* */
/* 	<script type="text/javascript">*/
/* 	$(document).ready(function() {*/
/* 		$(".group").fancybox();*/
/* 		*/
/* 	});*/
/* 	</script>*/
/* */
/* {% endblock %}*/
