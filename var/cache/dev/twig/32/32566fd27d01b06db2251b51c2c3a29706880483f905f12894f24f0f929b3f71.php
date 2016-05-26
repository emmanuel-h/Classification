<?php

/* @LIFOClassif/Platform/menu.html.twig */
class __TwigTemplate_57db78bf2bcd462aba790be9967fd57f8873865ca77b09ce0d3646b278f368ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_adc22afcf19dda0b0d3abd8c0d7207cb378e853403c91f7c9bae0db99b66e644 = $this->env->getExtension("native_profiler");
        $__internal_adc22afcf19dda0b0d3abd8c0d7207cb378e853403c91f7c9bae0db99b66e644->enter($__internal_adc22afcf19dda0b0d3abd8c0d7207cb378e853403c91f7c9bae0db99b66e644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Platform/menu.html.twig"));

        // line 1
        echo "<div class=\"list-group\">
\t";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeTessons"]) ? $context["listeTessons"] : $this->getContext($context, "listeTessons")));
        foreach ($context['_seq'] as $context["_key"] => $context["tesson"]) {
            echo " <a
\t\thref=\"";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lifo_classif_tesson", array("id" => $this->getAttribute($context["tesson"], "id", array()))), "html", null, true);
            echo "\"
\t\tclass=\"list-group-item\">
\t\t<h4 class=\"list-group-item-heading\">ID : ";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["tesson"], "id", array()), "html", null, true);
            echo " - Site :
\t\t\t";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tesson"], "site", array()), "codeINSEE", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tesson"], "site", array()), "numSiteCommune", array()), "html", null, true);
            echo "</h4>
\t\t<p class=\"list-group-item-text\">US : ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tesson"], "us", array()), "nom", array()), "html", null, true);
            echo " - num Isolation
\t\t\t: ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["tesson"], "numIsolation", array()), "html", null, true);
            echo "</p>
\t</a> ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tesson'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</div>";
        
        $__internal_adc22afcf19dda0b0d3abd8c0d7207cb378e853403c91f7c9bae0db99b66e644->leave($__internal_adc22afcf19dda0b0d3abd8c0d7207cb378e853403c91f7c9bae0db99b66e644_prof);

    }

    public function getTemplateName()
    {
        return "@LIFOClassif/Platform/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 10,  50 => 8,  46 => 7,  40 => 6,  36 => 5,  31 => 3,  25 => 2,  22 => 1,);
    }
}
/* <div class="list-group">*/
/* 	{% for tesson in listeTessons %} <a*/
/* 		href="{{ path('lifo_classif_tesson', {'id': tesson.id}) }}"*/
/* 		class="list-group-item">*/
/* 		<h4 class="list-group-item-heading">ID : {{ tesson.id }} - Site :*/
/* 			{{tesson.site.codeINSEE}} {{tesson.site.numSiteCommune}}</h4>*/
/* 		<p class="list-group-item-text">US : {{tesson.us.nom}} - num Isolation*/
/* 			: {{ tesson.numIsolation }}</p>*/
/* 	</a> {% endfor %}*/
/* </div>*/
