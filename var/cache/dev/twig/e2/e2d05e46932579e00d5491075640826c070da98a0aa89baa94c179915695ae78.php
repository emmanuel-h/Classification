<?php

/* LIFOClassifBundle:Platform:tesson.html.twig */
class __TwigTemplate_15d248a09ffea0fb775fe3f599fcd38529064bdfc740d5528a4417b15b6c16ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layout.html.twig", "LIFOClassifBundle:Platform:tesson.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'LIFOClassif_body' => array($this, 'block_LIFOClassif_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LIFOClassifBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_adc4931d5726973e8bedbf3332252f7fa86d3bd4d598a182807c1143bd921a90 = $this->env->getExtension("native_profiler");
        $__internal_adc4931d5726973e8bedbf3332252f7fa86d3bd4d598a182807c1143bd921a90->enter($__internal_adc4931d5726973e8bedbf3332252f7fa86d3bd4d598a182807c1143bd921a90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Platform:tesson.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_adc4931d5726973e8bedbf3332252f7fa86d3bd4d598a182807c1143bd921a90->leave($__internal_adc4931d5726973e8bedbf3332252f7fa86d3bd4d598a182807c1143bd921a90_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2a154dd71c5c338a857fdbfcc7a551f04dfa24845ce52fbb54c502dd0fc4ff72 = $this->env->getExtension("native_profiler");
        $__internal_2a154dd71c5c338a857fdbfcc7a551f04dfa24845ce52fbb54c502dd0fc4ff72->enter($__internal_2a154dd71c5c338a857fdbfcc7a551f04dfa24845ce52fbb54c502dd0fc4ff72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Tesson";
        
        $__internal_2a154dd71c5c338a857fdbfcc7a551f04dfa24845ce52fbb54c502dd0fc4ff72->leave($__internal_2a154dd71c5c338a857fdbfcc7a551f04dfa24845ce52fbb54c502dd0fc4ff72_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_5cb491fc0937c615cf67651c1d81bb9dbbc4899a6eae7d602c94bfbd287a609f = $this->env->getExtension("native_profiler");
        $__internal_5cb491fc0937c615cf67651c1d81bb9dbbc4899a6eae7d602c94bfbd287a609f->enter($__internal_5cb491fc0937c615cf67651c1d81bb9dbbc4899a6eae7d602c94bfbd287a609f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeNumerisation"]) ? $context["listeNumerisation"] : $this->getContext($context, "listeNumerisation")));
        foreach ($context['_seq'] as $context["_key"] => $context["numerisation"]) {
            // line 7
            echo "\t<p>
\t";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["numerisation"], "typeNumerisation", array()), "nom", array()), "html", null, true);
            echo "
\t<img src=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["numerisation"], "webPath", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["numerisation"], "alt", array()), "html", null, true);
            echo "\"/>
\t</p>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['numerisation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5cb491fc0937c615cf67651c1d81bb9dbbc4899a6eae7d602c94bfbd287a609f->leave($__internal_5cb491fc0937c615cf67651c1d81bb9dbbc4899a6eae7d602c94bfbd287a609f_prof);

    }

    public function getTemplateName()
    {
        return "LIFOClassifBundle:Platform:tesson.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 9,  62 => 8,  59 => 7,  54 => 6,  48 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "LIFOClassifBundle::layout.html.twig" %}*/
/* */
/* {% block title %}{{ parent() }} - Tesson{% endblock %}*/
/* */
/* {% block LIFOClassif_body %}*/
/* 	{% for numerisation in listeNumerisation %}*/
/* 	<p>*/
/* 	{{ numerisation.typeNumerisation.nom }}*/
/* 	<img src="{{ asset(numerisation.webPath) }}" alt="{{ numerisation.alt }}"/>*/
/* 	</p>*/
/* 	{% endfor %}*/
/* {% endblock %}*/
