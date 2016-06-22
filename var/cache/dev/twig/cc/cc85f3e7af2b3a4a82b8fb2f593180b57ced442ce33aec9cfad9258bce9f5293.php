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
        $__internal_a3cf1546872c9f0753341da1629dc6918bb49f502bcb0992abb18d20eee1028d = $this->env->getExtension("native_profiler");
        $__internal_a3cf1546872c9f0753341da1629dc6918bb49f502bcb0992abb18d20eee1028d->enter($__internal_a3cf1546872c9f0753341da1629dc6918bb49f502bcb0992abb18d20eee1028d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Platform:afficherNumerisations.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3cf1546872c9f0753341da1629dc6918bb49f502bcb0992abb18d20eee1028d->leave($__internal_a3cf1546872c9f0753341da1629dc6918bb49f502bcb0992abb18d20eee1028d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_793fedccc8783588e1a6743f050c8ff0815c9523888ec039eebc521ba897d5be = $this->env->getExtension("native_profiler");
        $__internal_793fedccc8783588e1a6743f050c8ff0815c9523888ec039eebc521ba897d5be->enter($__internal_793fedccc8783588e1a6743f050c8ff0815c9523888ec039eebc521ba897d5be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Numérisations";
        
        $__internal_793fedccc8783588e1a6743f050c8ff0815c9523888ec039eebc521ba897d5be->leave($__internal_793fedccc8783588e1a6743f050c8ff0815c9523888ec039eebc521ba897d5be_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_bc30d27fbf0291422af2967623fe340164341920e86565f379e33928c4080b2b = $this->env->getExtension("native_profiler");
        $__internal_bc30d27fbf0291422af2967623fe340164341920e86565f379e33928c4080b2b->enter($__internal_bc30d27fbf0291422af2967623fe340164341920e86565f379e33928c4080b2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

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
  \t  <div class=\"col-sm-4\">
    \t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typeNumerisation", array()), 'widget');
        echo "
        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typeNumerisation", array()), 'errors');
        echo "
   \t  </div>
      <div class=\"col-sm-8\">
        <div class=\"alert alert-info\" role=\"alert\">
\t\t  <strong>Actuellement : </strong>";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["typeNumerisation"]) ? $context["typeNumerisation"] : $this->getContext($context, "typeNumerisation")), "html", null, true);
        echo "
\t    </div>
      </div>
    </div>
  </fieldset>
  ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "afficher", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
  ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
  ";
        // line 26
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>

<table class=\"table table-bordered table-striped table-hover\">
\t<thead align=\"middle\"><tr class=\"warning\"><td width=5%><b>ID tesson</b></td><td width=10%><b>Site</b><td width=10%><b>US</b></td><td width=10%><b>Numéro d'isolation</b></td></tr></thead>
\t<tbody>
\t ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tessons"]) ? $context["tessons"] : $this->getContext($context, "tessons")));
        foreach ($context['_seq'] as $context["_key"] => $context["tesson"]) {
            // line 33
            echo "\t\t<tr>
\t\t\t<td><a href=\"";
            // line 34
            echo twig_escape_filter($this->env, ((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . $this->env->getExtension('routing')->getPath("lifo_classif_tesson", array("id" => $this->getAttribute($context["tesson"], "t_id", array())))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tesson"], "t_id", array()), "html", null, true);
            echo "</a></td>
\t\t\t<td>";
            // line 35
            echo twig_escape_filter($this->env, (($this->getAttribute($context["tesson"], "site_codeINSEE", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["tesson"], "site_codeINSEE", array()), "NO")) : ("NO")), "html", null, true);
            echo "&nbsp;";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["tesson"], "site_numSiteCommune", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["tesson"], "site_numSiteCommune", array()), "NO")) : ("NO")), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 36
            echo twig_escape_filter($this->env, (($this->getAttribute($context["tesson"], "u_s_nom", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["tesson"], "u_s_nom", array()), "NO")) : ("NO")), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["tesson"], "t_numIsolation", array()), "html", null, true);
            echo "</td>
\t\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tesson'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "</table>
<p> Nombre de pages : ";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["nbPages"]) ? $context["nbPages"] : $this->getContext($context, "nbPages")), "html", null, true);
        echo "</p>

";
        // line 83
        if (((isset($context["nbPages"]) ? $context["nbPages"] : $this->getContext($context, "nbPages")) > 0)) {
            // line 84
            echo "    <ul class=\"pagination\">
        ";
            // line 85
            if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) > 1)) {
                // line 86
                echo "            <li>
                <a href=\"";
                // line 87
                echo twig_escape_filter($this->env, ((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . $this->env->getExtension('routing')->getPath("lifo_classif_numerisations", array("page" => 1))), "html", null, true);
                echo "\">
                    <<
                </a>
            </li>
            <li>
                <a href=\"";
                // line 92
                echo twig_escape_filter($this->env, ((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . $this->env->getExtension('routing')->getPath("lifo_classif_numerisations", array("page" => ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) - 1)))), "html", null, true);
                echo "\">
                    <
                </a>
            </li>
        ";
            }
            // line 97
            echo "
        ";
            // line 99
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(max(((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) - 4), 1), min(((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) + 4), (isset($context["nbPages"]) ? $context["nbPages"] : $this->getContext($context, "nbPages")))));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 100
                echo "            <li ";
                if (($context["p"] == (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))) {
                    echo "class=\"active\"";
                }
                echo ">
                <a href=\"";
                // line 101
                echo twig_escape_filter($this->env, ((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . $this->env->getExtension('routing')->getPath("lifo_classif_numerisations", array("page" => $context["p"]))), "html", null, true);
                echo "\">
                    ";
                // line 102
                echo twig_escape_filter($this->env, $context["p"], "html", null, true);
                echo "
                </a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            echo "
        ";
            // line 107
            if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) < (isset($context["nbPages"]) ? $context["nbPages"] : $this->getContext($context, "nbPages")))) {
                // line 108
                echo "            <li>
                <a href=\"";
                // line 109
                echo twig_escape_filter($this->env, ((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . $this->env->getExtension('routing')->getPath("lifo_classif_numerisations", array("page" => ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) + 1)))), "html", null, true);
                echo "\">
                    >
                </a>
            </li>
            <li>
                <a href=\"";
                // line 114
                echo twig_escape_filter($this->env, ((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . $this->env->getExtension('routing')->getPath("lifo_classif_numerisations", array("page" => (isset($context["nbPages"]) ? $context["nbPages"] : $this->getContext($context, "nbPages"))))), "html", null, true);
                echo "\">
                    >>
                </a>
            </li>
        ";
            }
            // line 119
            echo "    </ul>
";
        }
        // line 121
        echo "
";
        
        $__internal_bc30d27fbf0291422af2967623fe340164341920e86565f379e33928c4080b2b->leave($__internal_bc30d27fbf0291422af2967623fe340164341920e86565f379e33928c4080b2b_prof);

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
        return array (  229 => 121,  225 => 119,  217 => 114,  209 => 109,  206 => 108,  204 => 107,  201 => 106,  191 => 102,  187 => 101,  180 => 100,  175 => 99,  172 => 97,  164 => 92,  156 => 87,  153 => 86,  151 => 85,  148 => 84,  146 => 83,  141 => 41,  138 => 40,  129 => 37,  125 => 36,  119 => 35,  113 => 34,  110 => 33,  106 => 32,  97 => 26,  93 => 25,  89 => 24,  81 => 19,  74 => 15,  70 => 14,  62 => 9,  58 => 8,  54 => 6,  48 => 5,  35 => 3,  11 => 1,);
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
/*   	  <div class="col-sm-4">*/
/*     	{{ form_widget(form.typeNumerisation) }}*/
/*         {{ form_errors(form.typeNumerisation) }}*/
/*    	  </div>*/
/*       <div class="col-sm-8">*/
/*         <div class="alert alert-info" role="alert">*/
/* 		  <strong>Actuellement : </strong>{{ typeNumerisation }}*/
/* 	    </div>*/
/*       </div>*/
/*     </div>*/
/*   </fieldset>*/
/*   {{ form_widget(form.afficher, {'attr': {'class': 'btn btn-primary'}}) }}*/
/*   {{ form_rest(form) }}*/
/*   {{ form_end(form) }}*/
/* </div>*/
/* */
/* <table class="table table-bordered table-striped table-hover">*/
/* 	<thead align="middle"><tr class="warning"><td width=5%><b>ID tesson</b></td><td width=10%><b>Site</b><td width=10%><b>US</b></td><td width=10%><b>Numéro d'isolation</b></td></tr></thead>*/
/* 	<tbody>*/
/* 	 {% for tesson in tessons %}*/
/* 		<tr>*/
/* 			<td><a href="{{ base_url ~path('lifo_classif_tesson', {'id': tesson.t_id}) }}">{{ tesson.t_id }}</a></td>*/
/* 			<td>{{ tesson.site_codeINSEE|default('NO') }}&nbsp;{{ tesson.site_numSiteCommune|default('NO') }}</td>*/
/* 			<td>{{ tesson.u_s_nom|default('NO') }}</td>*/
/* 			<td>{{ tesson.t_numIsolation }}</td>*/
/* 		</tr>*/
/* 	{% endfor %}*/
/* </table>*/
/* <p> Nombre de pages : {{ nbPages }}</p>*/
/* */
/* {#*/
/* <ul class="pagination">*/
/*         */
/*                             <li class="active">*/
/*                 <a href=" {{ base_url ~path('lifo_classif_numerisations', {'page': page}) }}">*/
/*                 	{{ page }}*/
/*                 </a>*/
/*             </li>*/
/*                <li>*/
/*                 <a href=" {{ base_url ~path('lifo_classif_numerisations', {'page': page+1}) }}">*/
/*                 	{{ page+1 }}*/
/*                 </a>*/
/*             </li>*/
/*                <li>*/
/*                 <a href=" {{ base_url ~path('lifo_classif_numerisations', {'page': page+2}) }}">*/
/*                 	{{ page+2 }}*/
/*                 </a>*/
/*             </li>*/
/*                <li>*/
/*                 <a href=" {{ base_url ~path('lifo_classif_numerisations', {'page': page+3}) }}">*/
/*                 	{{ page+3 }}*/
/*                 </a>*/
/*             </li>*/
/*                <li>*/
/*                 <a href=" {{ base_url ~path('lifo_classif_numerisations', {'page': page+4}) }}">*/
/*                 	{{ page+4 }}*/
/*                 </a>*/
/*             </li>*/
/*                     <li>*/
/*                 <a href="/Classification/web/app_dev.php/classification/2?typeNumerisationChoisi=Aucune&amp;typeClassifChoisi=Aucune&amp;tessonsClasses=0">*/
/*                     >*/
/*                 </a>*/
/*             </li>*/
/*             <li>*/
/*                 <a href="/Classification/web/app_dev.php/classification/137?typeNumerisationChoisi=Aucune&amp;typeClassifChoisi=Aucune&amp;tessonsClasses=0">*/
/*                     >>*/
/*                 </a>*/
/*             </li>*/
/*             </ul>*/
/* #}*/
/* {% if nbPages > 0 %}*/
/*     <ul class="pagination">*/
/*         {% if page > 1 %}*/
/*             <li>*/
/*                 <a href="{{ base_url ~path('lifo_classif_numerisations', {'page': 1}) }}">*/
/*                     <<*/
/*                 </a>*/
/*             </li>*/
/*             <li>*/
/*                 <a href="{{ base_url ~path('lifo_classif_numerisations', {'page': page-1}) }}">*/
/*                     <*/
/*                 </a>*/
/*             </li>*/
/*         {% endif %}*/
/* */
/*         {# Affichage de toutes les pages entre p-4 et p+4 sauf si < 1 ou > nbPages #}*/
/*         {% for p in range(max(page-4, 1), min(page+4, nbPages)) %}*/
/*             <li {% if p == page %}class="active"{% endif %}>*/
/*                 <a href="{{ base_url ~path('lifo_classif_numerisations', {'page': p}) }}">*/
/*                     {{ p }}*/
/*                 </a>*/
/*             </li>*/
/*         {% endfor %}*/
/* */
/*         {% if page < nbPages %}*/
/*             <li>*/
/*                 <a href="{{ base_url ~path('lifo_classif_numerisations', {'page': page+1}) }}">*/
/*                     >*/
/*                 </a>*/
/*             </li>*/
/*             <li>*/
/*                 <a href="{{ base_url ~path('lifo_classif_numerisations', {'page': nbPages}) }}">*/
/*                     >>*/
/*                 </a>*/
/*             </li>*/
/*         {% endif %}*/
/*     </ul>*/
/* {% endif %}*/
/* */
/* {% endblock %}*/
