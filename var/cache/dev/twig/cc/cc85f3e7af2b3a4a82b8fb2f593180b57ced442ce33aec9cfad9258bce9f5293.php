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
        $__internal_8b10ea36dbead844c18a7bfec23c51388223f5aeb73ddebae386921473499c55 = $this->env->getExtension("native_profiler");
        $__internal_8b10ea36dbead844c18a7bfec23c51388223f5aeb73ddebae386921473499c55->enter($__internal_8b10ea36dbead844c18a7bfec23c51388223f5aeb73ddebae386921473499c55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Platform:afficherNumerisations.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b10ea36dbead844c18a7bfec23c51388223f5aeb73ddebae386921473499c55->leave($__internal_8b10ea36dbead844c18a7bfec23c51388223f5aeb73ddebae386921473499c55_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a8f7a781bcedaed7bc7008d04df28141df9a92502a5fbc6f8184bab940e45300 = $this->env->getExtension("native_profiler");
        $__internal_a8f7a781bcedaed7bc7008d04df28141df9a92502a5fbc6f8184bab940e45300->enter($__internal_a8f7a781bcedaed7bc7008d04df28141df9a92502a5fbc6f8184bab940e45300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Numérisations";
        
        $__internal_a8f7a781bcedaed7bc7008d04df28141df9a92502a5fbc6f8184bab940e45300->leave($__internal_a8f7a781bcedaed7bc7008d04df28141df9a92502a5fbc6f8184bab940e45300_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_01892ab904db3d333c162a6e7c4bbcb219dfa62451e5fa9ee1db9abfb8b35e37 = $this->env->getExtension("native_profiler");
        $__internal_01892ab904db3d333c162a6e7c4bbcb219dfa62451e5fa9ee1db9abfb8b35e37->enter($__internal_01892ab904db3d333c162a6e7c4bbcb219dfa62451e5fa9ee1db9abfb8b35e37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

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
  \t<legend>&nbsp;&nbsp;Décor</legend>
  \t<div class=\"form-group\">
  \t  <div class=\"col-sm-6\">
\t    <b>&nbsp;Type de numérisation&nbsp;&nbsp;</b>
        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typeNumerisation", array()), 'errors');
        echo "
   \t  </div>
 \t  <div class=\"col-sm-6\">
    \t";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typeNumerisation", array()), 'widget');
        echo "
      </div>
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
\t<thead align=\"middle\"><tr class=\"warning\"><td width=5%><b>ID tesson</b></td><td width=10%><b>Site</b><td width=10%><b>US</b></td><td width=10%><b>Numéro d'isolation</b></td></tr></thead>
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lifo_classif_tesson", array("id" => $this->getAttribute($context["tesson"], "t_id", array()))), "html", null, true);
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
\t\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tesson'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "</table>

<ul class=\"pagination\">
        
                            <li class=\"active\">
                <a href=\" ";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lifo_classif_numerisations", array("page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))), "html", null, true);
        echo "\">
                \t";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
        echo "
                </a>
            </li>
               <li>
                <a href=\" ";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lifo_classif_numerisations", array("page" => ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) + 1))), "html", null, true);
        echo "\">
                \t";
        // line 49
        echo twig_escape_filter($this->env, ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) + 1), "html", null, true);
        echo "
                </a>
            </li>
               <li>
                <a href=\" ";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lifo_classif_numerisations", array("page" => ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) + 2))), "html", null, true);
        echo "\">
                \t";
        // line 54
        echo twig_escape_filter($this->env, ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) + 2), "html", null, true);
        echo "
                </a>
            </li>
               <li>
                <a href=\" ";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lifo_classif_numerisations", array("page" => ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) + 3))), "html", null, true);
        echo "\">
                \t";
        // line 59
        echo twig_escape_filter($this->env, ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) + 3), "html", null, true);
        echo "
                </a>
            </li>
               <li>
                <a href=\" ";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lifo_classif_numerisations", array("page" => ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) + 4))), "html", null, true);
        echo "\">
                \t";
        // line 64
        echo twig_escape_filter($this->env, ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) + 4), "html", null, true);
        echo "
                </a>
            </li>
                    <li>
                <a href=\"/Classification/web/app_dev.php/classification/2?typeNumerisationChoisi=Aucune&amp;typeClassifChoisi=Aucune&amp;tessonsClasses=0\">
                    >
                </a>
            </li>
            <li>
                <a href=\"/Classification/web/app_dev.php/classification/137?typeNumerisationChoisi=Aucune&amp;typeClassifChoisi=Aucune&amp;tessonsClasses=0\">
                    >>
                </a>
            </li>
            </ul>


";
        
        $__internal_01892ab904db3d333c162a6e7c4bbcb219dfa62451e5fa9ee1db9abfb8b35e37->leave($__internal_01892ab904db3d333c162a6e7c4bbcb219dfa62451e5fa9ee1db9abfb8b35e37_prof);

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
        return array (  188 => 64,  184 => 63,  177 => 59,  173 => 58,  166 => 54,  162 => 53,  155 => 49,  151 => 48,  144 => 44,  140 => 43,  133 => 38,  124 => 35,  120 => 34,  114 => 33,  108 => 32,  105 => 31,  101 => 30,  92 => 24,  88 => 23,  84 => 22,  77 => 18,  71 => 15,  62 => 9,  58 => 8,  54 => 6,  48 => 5,  35 => 3,  11 => 1,);
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
/*   	<legend>&nbsp;&nbsp;Décor</legend>*/
/*   	<div class="form-group">*/
/*   	  <div class="col-sm-6">*/
/* 	    <b>&nbsp;Type de numérisation&nbsp;&nbsp;</b>*/
/*         {{ form_errors(form.typeNumerisation) }}*/
/*    	  </div>*/
/*  	  <div class="col-sm-6">*/
/*     	{{ form_widget(form.typeNumerisation) }}*/
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
/* 			<td><a href="{{ path('lifo_classif_tesson', {'id': tesson.t_id}) }}">{{ tesson.t_id }}</a></td>*/
/* 			<td>{{ tesson.site_codeINSEE|default('NO') }}&nbsp;{{ tesson.site_numSiteCommune|default('NO') }}</td>*/
/* 			<td>{{ tesson.u_s_nom|default('NO') }}</td>*/
/* 			<td>{{ tesson.t_numIsolation }}</td>*/
/* 		</tr>*/
/* 	{% endfor %}*/
/* </table>*/
/* */
/* <ul class="pagination">*/
/*         */
/*                             <li class="active">*/
/*                 <a href=" {{ path('lifo_classif_numerisations', {'page': page}) }}">*/
/*                 	{{ page }}*/
/*                 </a>*/
/*             </li>*/
/*                <li>*/
/*                 <a href=" {{ path('lifo_classif_numerisations', {'page': page+1}) }}">*/
/*                 	{{ page+1 }}*/
/*                 </a>*/
/*             </li>*/
/*                <li>*/
/*                 <a href=" {{ path('lifo_classif_numerisations', {'page': page+2}) }}">*/
/*                 	{{ page+2 }}*/
/*                 </a>*/
/*             </li>*/
/*                <li>*/
/*                 <a href=" {{ path('lifo_classif_numerisations', {'page': page+3}) }}">*/
/*                 	{{ page+3 }}*/
/*                 </a>*/
/*             </li>*/
/*                <li>*/
/*                 <a href=" {{ path('lifo_classif_numerisations', {'page': page+4}) }}">*/
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
/* */
/* */
/* {% endblock %}*/
