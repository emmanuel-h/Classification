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
        $__internal_1503972f3942b7eef2fdd927e656893ffca5c59c710fee9e06dc9f5abb51e456 = $this->env->getExtension("native_profiler");
        $__internal_1503972f3942b7eef2fdd927e656893ffca5c59c710fee9e06dc9f5abb51e456->enter($__internal_1503972f3942b7eef2fdd927e656893ffca5c59c710fee9e06dc9f5abb51e456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Platform/afficherNumerisations.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1503972f3942b7eef2fdd927e656893ffca5c59c710fee9e06dc9f5abb51e456->leave($__internal_1503972f3942b7eef2fdd927e656893ffca5c59c710fee9e06dc9f5abb51e456_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2c23c539273330c91cae6ef9545ff543734854279f15a3f09c7a90d2d0be0a9f = $this->env->getExtension("native_profiler");
        $__internal_2c23c539273330c91cae6ef9545ff543734854279f15a3f09c7a90d2d0be0a9f->enter($__internal_2c23c539273330c91cae6ef9545ff543734854279f15a3f09c7a90d2d0be0a9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Numérisations";
        
        $__internal_2c23c539273330c91cae6ef9545ff543734854279f15a3f09c7a90d2d0be0a9f->leave($__internal_2c23c539273330c91cae6ef9545ff543734854279f15a3f09c7a90d2d0be0a9f_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_6d5bbc7f9a47ff92e049ab9a525ac8195f79d55699b3f93cba748d79097840b9 = $this->env->getExtension("native_profiler");
        $__internal_6d5bbc7f9a47ff92e049ab9a525ac8195f79d55699b3f93cba748d79097840b9->enter($__internal_6d5bbc7f9a47ff92e049ab9a525ac8195f79d55699b3f93cba748d79097840b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

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
  \t  <div class=\"col-sm-3\">
\t    <b>&nbsp;Type de numérisation&nbsp;&nbsp;</b>
        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typeNumerisation", array()), 'errors');
        echo "
   \t  </div>
 \t  <div class=\"col-sm-4\">
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
        echo twig_escape_filter($this->env, ((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . $this->env->getExtension('routing')->getPath("lifo_classif_numerisations", array("page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page"))))), "html", null, true);
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
        echo twig_escape_filter($this->env, ((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . $this->env->getExtension('routing')->getPath("lifo_classif_numerisations", array("page" => ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) + 1)))), "html", null, true);
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
        echo twig_escape_filter($this->env, ((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . $this->env->getExtension('routing')->getPath("lifo_classif_numerisations", array("page" => ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) + 2)))), "html", null, true);
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
        echo twig_escape_filter($this->env, ((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . $this->env->getExtension('routing')->getPath("lifo_classif_numerisations", array("page" => ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) + 3)))), "html", null, true);
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
        echo twig_escape_filter($this->env, ((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . $this->env->getExtension('routing')->getPath("lifo_classif_numerisations", array("page" => ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) + 4)))), "html", null, true);
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
        
        $__internal_6d5bbc7f9a47ff92e049ab9a525ac8195f79d55699b3f93cba748d79097840b9->leave($__internal_6d5bbc7f9a47ff92e049ab9a525ac8195f79d55699b3f93cba748d79097840b9_prof);

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
/*   	  <div class="col-sm-3">*/
/* 	    <b>&nbsp;Type de numérisation&nbsp;&nbsp;</b>*/
/*         {{ form_errors(form.typeNumerisation) }}*/
/*    	  </div>*/
/*  	  <div class="col-sm-4">*/
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
/* 			<td><a href="{{ base_url ~path('lifo_classif_tesson', {'id': tesson.t_id}) }}">{{ tesson.t_id }}</a></td>*/
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
/* */
/* */
/* {% endblock %}*/
