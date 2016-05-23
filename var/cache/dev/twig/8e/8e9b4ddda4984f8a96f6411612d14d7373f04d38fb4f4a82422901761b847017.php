<?php

/* @LIFOClassif/Platform/tesson.html.twig */
class __TwigTemplate_5463be7e231f3b60aea970dd7720349d055558f68c39c80db5cc1614f7d755f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layoutGeneral.html.twig", "@LIFOClassif/Platform/tesson.html.twig", 1);
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
        $__internal_7fa46ad5a5c09fef321f127150f5fd2660fe02aca2b34cc6a37b291969921bd3 = $this->env->getExtension("native_profiler");
        $__internal_7fa46ad5a5c09fef321f127150f5fd2660fe02aca2b34cc6a37b291969921bd3->enter($__internal_7fa46ad5a5c09fef321f127150f5fd2660fe02aca2b34cc6a37b291969921bd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Platform/tesson.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7fa46ad5a5c09fef321f127150f5fd2660fe02aca2b34cc6a37b291969921bd3->leave($__internal_7fa46ad5a5c09fef321f127150f5fd2660fe02aca2b34cc6a37b291969921bd3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_17499dafb1e0b9fa5f8dd71380a642fecff816e977b68d285b9c7c162323267a = $this->env->getExtension("native_profiler");
        $__internal_17499dafb1e0b9fa5f8dd71380a642fecff816e977b68d285b9c7c162323267a->enter($__internal_17499dafb1e0b9fa5f8dd71380a642fecff816e977b68d285b9c7c162323267a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Tesson";
        
        $__internal_17499dafb1e0b9fa5f8dd71380a642fecff816e977b68d285b9c7c162323267a->leave($__internal_17499dafb1e0b9fa5f8dd71380a642fecff816e977b68d285b9c7c162323267a_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_b0b37c2619af081bcf3b3d6aefe671c2c804073a6d11dca800f2df97824bad84 = $this->env->getExtension("native_profiler");
        $__internal_b0b37c2619af081bcf3b3d6aefe671c2c804073a6d11dca800f2df97824bad84->enter($__internal_b0b37c2619af081bcf3b3d6aefe671c2c804073a6d11dca800f2df97824bad84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

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
        
        $__internal_b0b37c2619af081bcf3b3d6aefe671c2c804073a6d11dca800f2df97824bad84->leave($__internal_b0b37c2619af081bcf3b3d6aefe671c2c804073a6d11dca800f2df97824bad84_prof);

    }

    public function getTemplateName()
    {
        return "@LIFOClassif/Platform/tesson.html.twig";
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
/* {% extends "LIFOClassifBundle::layoutGeneral.html.twig" %}*/
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
