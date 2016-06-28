<?php

/* @LIFOClassif/Platform/afficherNumerisations.html.twig */
class __TwigTemplate_868de066f650fe35ea9a1deeb0f88335ee49e79c8d9735dd8a71db65bc96707b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layoutGeneral.html.twig", "@LIFOClassif/Platform/afficherNumerisations.html.twig", 1);
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
        $__internal_574353628fec54c97f522b366d703b7274b622ae0d7ed1b492a429e39f94a2be = $this->env->getExtension("native_profiler");
        $__internal_574353628fec54c97f522b366d703b7274b622ae0d7ed1b492a429e39f94a2be->enter($__internal_574353628fec54c97f522b366d703b7274b622ae0d7ed1b492a429e39f94a2be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Platform/afficherNumerisations.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_574353628fec54c97f522b366d703b7274b622ae0d7ed1b492a429e39f94a2be->leave($__internal_574353628fec54c97f522b366d703b7274b622ae0d7ed1b492a429e39f94a2be_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_09594f0cbeb694a5b44f9c40190f5bc30a06d0362827bc34346d3da43cdb6033 = $this->env->getExtension("native_profiler");
        $__internal_09594f0cbeb694a5b44f9c40190f5bc30a06d0362827bc34346d3da43cdb6033->enter($__internal_09594f0cbeb694a5b44f9c40190f5bc30a06d0362827bc34346d3da43cdb6033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Numérisations";
        
        $__internal_09594f0cbeb694a5b44f9c40190f5bc30a06d0362827bc34346d3da43cdb6033->leave($__internal_09594f0cbeb694a5b44f9c40190f5bc30a06d0362827bc34346d3da43cdb6033_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_e4d8574119b2728a104965d6f596de609f1bb97d1c39d3b3416dc716da502118 = $this->env->getExtension("native_profiler");
        $__internal_e4d8574119b2728a104965d6f596de609f1bb97d1c39d3b3416dc716da502118->enter($__internal_e4d8574119b2728a104965d6f596de609f1bb97d1c39d3b3416dc716da502118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "
<div class=\"well\">
  ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
  ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
  <fieldset>
  \t<legend>&nbsp;&nbsp;Type de numérisations</legend>
  \t<div class=\"form-group\">
      <div class=\"col-sm-5\">
      \t<b>Type de numérisation manquant à afficher :</b>
      </div>
  \t  <div class=\"col-sm-4\">
    \t";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typeNumerisation", array()), 'widget');
        echo "
        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typeNumerisation", array()), 'errors');
        echo "
   \t  </div>
    </div>
  </fieldset>
  ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "afficher", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
  ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
  ";
        // line 24
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>

<table class=\"table table-bordered table-striped table-hover\">
\t<thead align=\"middle\"><tr class=\"warning\"><td width=5%><b>ID tesson</b></td><td width=10%><b>Site</b><td width=10%><b>US</b></td><td width=10%><b>Numéro d'isolation</b></td><td width=10%><b>";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["typeNumerisation"]) ? $context["typeNumerisation"] : $this->getContext($context, "typeNumerisation")), "html", null, true);
        echo "</b></td></tr></thead>
\t<tbody>
\t ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tessons"]) ? $context["tessons"] : $this->getContext($context, "tessons")));
        foreach ($context['_seq'] as $context["_key"] => $context["tesson"]) {
            // line 31
            echo "\t\t<tr>
\t\t\t<td><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, ((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . $this->env->getExtension('routing')->getPath("lifo_classif_tesson", array("id" => $this->getAttribute($context["tesson"], "t_id", array())))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tesson"], "t_id", array()), "html", null, true);
            echo "</a></td>
\t\t\t<td>";
            // line 33
            echo twig_escape_filter($this->env, (($this->getAttribute($context["tesson"], "site_codeINSEE", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["tesson"], "site_codeINSEE", array()), "NO")) : ("NO")), "html", null, true);
            echo "&nbsp;";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["tesson"], "site_numSiteCommune", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["tesson"], "site_numSiteCommune", array()), "NO")) : ("NO")), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 34
            echo twig_escape_filter($this->env, (($this->getAttribute($context["tesson"], "u_s_nom", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["tesson"], "u_s_nom", array()), "NO")) : ("NO")), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["tesson"], "t_numIsolation", array()), "html", null, true);
            echo "</td>
\t\t\t<td><input type=\"file\" id=\"tesson_numerisation_2_file\" name=\"tesson[numerisation][2][file]\"/></td>
\t\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tesson'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "</table>



";
        // line 43
        if (((isset($context["nbPages"]) ? $context["nbPages"] : $this->getContext($context, "nbPages")) > 0)) {
            // line 44
            echo "    <ul class=\"pagination\">
        ";
            // line 45
            if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) > 1)) {
                // line 46
                echo "            <li>
                <a href=\"";
                // line 47
                echo twig_escape_filter($this->env, ((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . $this->env->getExtension('routing')->getPath("lifo_classif_numerisations", array("page" => 1, "typeNumerisation" => (isset($context["typeNumerisation"]) ? $context["typeNumerisation"] : $this->getContext($context, "typeNumerisation"))))), "html", null, true);
                echo "\">
                    <<
                </a>
            </li>
            <li>
                <a href=\"";
                // line 52
                echo twig_escape_filter($this->env, ((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . $this->env->getExtension('routing')->getPath("lifo_classif_numerisations", array("page" => ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) - 1), "typeNumerisation" => (isset($context["typeNumerisation"]) ? $context["typeNumerisation"] : $this->getContext($context, "typeNumerisation"))))), "html", null, true);
                echo "\">
                    <
                </a>
            </li>
        ";
            }
            // line 57
            echo "
        ";
            // line 59
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(max(((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) - 4), 1), min(((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) + 4), (isset($context["nbPages"]) ? $context["nbPages"] : $this->getContext($context, "nbPages")))));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 60
                echo "            <li ";
                if (($context["p"] == (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))) {
                    echo "class=\"active\"";
                }
                echo ">
                <a href=\"";
                // line 61
                echo twig_escape_filter($this->env, ((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . $this->env->getExtension('routing')->getPath("lifo_classif_numerisations", array("page" => $context["p"], "typeNumerisation" => (isset($context["typeNumerisation"]) ? $context["typeNumerisation"] : $this->getContext($context, "typeNumerisation"))))), "html", null, true);
                echo "\">
                    ";
                // line 62
                echo twig_escape_filter($this->env, $context["p"], "html", null, true);
                echo "
                </a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "
        ";
            // line 67
            if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) < (isset($context["nbPages"]) ? $context["nbPages"] : $this->getContext($context, "nbPages")))) {
                // line 68
                echo "            <li>
                <a href=\"";
                // line 69
                echo twig_escape_filter($this->env, ((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . $this->env->getExtension('routing')->getPath("lifo_classif_numerisations", array("page" => ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) + 1), "typeNumerisation" => (isset($context["typeNumerisation"]) ? $context["typeNumerisation"] : $this->getContext($context, "typeNumerisation"))))), "html", null, true);
                echo "\">
                    >
                </a>
            </li>
            <li>
                <a href=\"";
                // line 74
                echo twig_escape_filter($this->env, ((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . $this->env->getExtension('routing')->getPath("lifo_classif_numerisations", array("page" => (isset($context["nbPages"]) ? $context["nbPages"] : $this->getContext($context, "nbPages")), "typeNumerisation" => (isset($context["typeNumerisation"]) ? $context["typeNumerisation"] : $this->getContext($context, "typeNumerisation"))))), "html", null, true);
                echo "\">
                    >>
                </a>
            </li>
        ";
            }
            // line 79
            echo "    </ul>
";
        }
        // line 81
        echo "
";
        
        $__internal_e4d8574119b2728a104965d6f596de609f1bb97d1c39d3b3416dc716da502118->leave($__internal_e4d8574119b2728a104965d6f596de609f1bb97d1c39d3b3416dc716da502118_prof);

    }

    public function getTemplateName()
    {
        return "@LIFOClassif/Platform/afficherNumerisations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 81,  222 => 79,  214 => 74,  206 => 69,  203 => 68,  201 => 67,  198 => 66,  188 => 62,  184 => 61,  177 => 60,  172 => 59,  169 => 57,  161 => 52,  153 => 47,  150 => 46,  148 => 45,  145 => 44,  143 => 43,  137 => 39,  127 => 35,  123 => 34,  117 => 33,  111 => 32,  108 => 31,  104 => 30,  99 => 28,  92 => 24,  88 => 23,  84 => 22,  77 => 18,  73 => 17,  62 => 9,  58 => 8,  54 => 6,  48 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "LIFOClassifBundle::layoutGeneral.html.twig" %}*/
/* */
/* {% block title %}{{ parent() }} - Numérisations{% endblock %}*/
/* */
/* {% block LIFOClassif_body %}*/
/* */
/* <div class="well">*/
/*   {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}*/
/*   {{ form_errors(form) }}*/
/*   <fieldset>*/
/*   	<legend>&nbsp;&nbsp;Type de numérisations</legend>*/
/*   	<div class="form-group">*/
/*       <div class="col-sm-5">*/
/*       	<b>Type de numérisation manquant à afficher :</b>*/
/*       </div>*/
/*   	  <div class="col-sm-4">*/
/*     	{{ form_widget(form.typeNumerisation) }}*/
/*         {{ form_errors(form.typeNumerisation) }}*/
/*    	  </div>*/
/*     </div>*/
/*   </fieldset>*/
/*   {{ form_widget(form.afficher, {'attr': {'class': 'btn btn-primary'}}) }}*/
/*   {{ form_rest(form) }}*/
/*   {{ form_end(form) }}*/
/* </div>*/
/* */
/* <table class="table table-bordered table-striped table-hover">*/
/* 	<thead align="middle"><tr class="warning"><td width=5%><b>ID tesson</b></td><td width=10%><b>Site</b><td width=10%><b>US</b></td><td width=10%><b>Numéro d'isolation</b></td><td width=10%><b>{{ typeNumerisation }}</b></td></tr></thead>*/
/* 	<tbody>*/
/* 	 {% for tesson in tessons %}*/
/* 		<tr>*/
/* 			<td><a href="{{ base_url ~path('lifo_classif_tesson', {'id': tesson.t_id}) }}">{{ tesson.t_id }}</a></td>*/
/* 			<td>{{ tesson.site_codeINSEE|default('NO') }}&nbsp;{{ tesson.site_numSiteCommune|default('NO') }}</td>*/
/* 			<td>{{ tesson.u_s_nom|default('NO') }}</td>*/
/* 			<td>{{ tesson.t_numIsolation }}</td>*/
/* 			<td><input type="file" id="tesson_numerisation_2_file" name="tesson[numerisation][2][file]"/></td>*/
/* 		</tr>*/
/* 	{% endfor %}*/
/* </table>*/
/* */
/* */
/* */
/* {% if nbPages > 0 %}*/
/*     <ul class="pagination">*/
/*         {% if page > 1 %}*/
/*             <li>*/
/*                 <a href="{{ base_url ~path('lifo_classif_numerisations', {'page': 1, 'typeNumerisation': typeNumerisation}) }}">*/
/*                     <<*/
/*                 </a>*/
/*             </li>*/
/*             <li>*/
/*                 <a href="{{ base_url ~path('lifo_classif_numerisations', {'page': page-1, 'typeNumerisation': typeNumerisation}) }}">*/
/*                     <*/
/*                 </a>*/
/*             </li>*/
/*         {% endif %}*/
/* */
/*         {# Affichage de toutes les pages entre p-4 et p+4 sauf si < 1 ou > nbPages #}*/
/*         {% for p in range(max(page-4, 1), min(page+4, nbPages)) %}*/
/*             <li {% if p == page %}class="active"{% endif %}>*/
/*                 <a href="{{ base_url ~path('lifo_classif_numerisations', {'page': p, 'typeNumerisation': typeNumerisation}) }}">*/
/*                     {{ p }}*/
/*                 </a>*/
/*             </li>*/
/*         {% endfor %}*/
/* */
/*         {% if page < nbPages %}*/
/*             <li>*/
/*                 <a href="{{ base_url ~path('lifo_classif_numerisations', {'page': page+1, 'typeNumerisation': typeNumerisation}) }}">*/
/*                     >*/
/*                 </a>*/
/*             </li>*/
/*             <li>*/
/*                 <a href="{{ base_url ~path('lifo_classif_numerisations', {'page': nbPages, 'typeNumerisation': typeNumerisation}) }}">*/
/*                     >>*/
/*                 </a>*/
/*             </li>*/
/*         {% endif %}*/
/*     </ul>*/
/* {% endif %}*/
/* */
/* {% endblock %}*/
