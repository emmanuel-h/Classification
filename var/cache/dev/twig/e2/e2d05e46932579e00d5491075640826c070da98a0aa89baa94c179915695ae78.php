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
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LIFOClassifBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4995dc9de410e78c8634f903915fbb68ef55b703bc9fccb6a3fc4369615ad333 = $this->env->getExtension("native_profiler");
        $__internal_4995dc9de410e78c8634f903915fbb68ef55b703bc9fccb6a3fc4369615ad333->enter($__internal_4995dc9de410e78c8634f903915fbb68ef55b703bc9fccb6a3fc4369615ad333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Platform:tesson.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4995dc9de410e78c8634f903915fbb68ef55b703bc9fccb6a3fc4369615ad333->leave($__internal_4995dc9de410e78c8634f903915fbb68ef55b703bc9fccb6a3fc4369615ad333_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2ae21efb0e96a690b2d4a3b871cd6fffa2e1788df9912b4e08f96d9d43864d49 = $this->env->getExtension("native_profiler");
        $__internal_2ae21efb0e96a690b2d4a3b871cd6fffa2e1788df9912b4e08f96d9d43864d49->enter($__internal_2ae21efb0e96a690b2d4a3b871cd6fffa2e1788df9912b4e08f96d9d43864d49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Tesson";
        
        $__internal_2ae21efb0e96a690b2d4a3b871cd6fffa2e1788df9912b4e08f96d9d43864d49->leave($__internal_2ae21efb0e96a690b2d4a3b871cd6fffa2e1788df9912b4e08f96d9d43864d49_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_da613c2eafe899ea9c90c925d97e3553f50f8376e6f99bb9e20b09164170a0b0 = $this->env->getExtension("native_profiler");
        $__internal_da613c2eafe899ea9c90c925d97e3553f50f8376e6f99bb9e20b09164170a0b0->enter($__internal_da613c2eafe899ea9c90c925d97e3553f50f8376e6f99bb9e20b09164170a0b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeNumerisation"]) ? $context["listeNumerisation"] : $this->getContext($context, "listeNumerisation")));
        foreach ($context['_seq'] as $context["_key"] => $context["numerisation"]) {
            // line 8
            echo "\t<p>
\t";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["numerisation"], "typeNumerisation", array()), "nom", array()), "html", null, true);
            echo "
\t<img src=\"";
            // line 10
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
        
        $__internal_da613c2eafe899ea9c90c925d97e3553f50f8376e6f99bb9e20b09164170a0b0->leave($__internal_da613c2eafe899ea9c90c925d97e3553f50f8376e6f99bb9e20b09164170a0b0_prof);

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
        return array (  70 => 10,  66 => 9,  63 => 8,  59 => 7,  54 => 6,  48 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "LIFOClassifBundle::layout.html.twig" %}*/
/* */
/* {% block title %}{{ parent() }} - Tesson{% endblock %}*/
/* */
/* {% block body %}*/
/* 	{{ parent() }}*/
/* 	{% for numerisation in listeNumerisation %}*/
/* 	<p>*/
/* 	{{ numerisation.typeNumerisation.nom }}*/
/* 	<img src="{{ asset(numerisation.webPath) }}" alt="{{ numerisation.alt }}"/>*/
/* 	</p>*/
/* 	{% endfor %}*/
/* {% endblock %}*/
