<?php

/* LIFOClassifBundle:Platform:menu.html.twig */
class __TwigTemplate_bd0e24f097e996eb14b3b88f15ca29055b7641630fdca56b60d032449bb28964 extends Twig_Template
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
        // line 1
        echo "<div class=\"list-group\">
\t";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeTessons"]) ? $context["listeTessons"] : null));
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
    }

    public function getTemplateName()
    {
        return "LIFOClassifBundle:Platform:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 10,  47 => 8,  43 => 7,  37 => 6,  33 => 5,  28 => 3,  22 => 2,  19 => 1,);
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
