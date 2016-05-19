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
        $__internal_7f8db1d99febd06f1e3cbf77f812cfdb5ccffd49403e8040defd44d4d2487694 = $this->env->getExtension("native_profiler");
        $__internal_7f8db1d99febd06f1e3cbf77f812cfdb5ccffd49403e8040defd44d4d2487694->enter($__internal_7f8db1d99febd06f1e3cbf77f812cfdb5ccffd49403e8040defd44d4d2487694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Platform:tesson.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f8db1d99febd06f1e3cbf77f812cfdb5ccffd49403e8040defd44d4d2487694->leave($__internal_7f8db1d99febd06f1e3cbf77f812cfdb5ccffd49403e8040defd44d4d2487694_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3b34fa1df77e5adfcf8dd4c40f727089020a416d038c251e316260b7ab19f9de = $this->env->getExtension("native_profiler");
        $__internal_3b34fa1df77e5adfcf8dd4c40f727089020a416d038c251e316260b7ab19f9de->enter($__internal_3b34fa1df77e5adfcf8dd4c40f727089020a416d038c251e316260b7ab19f9de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Tesson";
        
        $__internal_3b34fa1df77e5adfcf8dd4c40f727089020a416d038c251e316260b7ab19f9de->leave($__internal_3b34fa1df77e5adfcf8dd4c40f727089020a416d038c251e316260b7ab19f9de_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_d84485c1aa96c8c6cd7e23b1560f8067bc93029a41edf1105beaeab5a4ceef93 = $this->env->getExtension("native_profiler");
        $__internal_d84485c1aa96c8c6cd7e23b1560f8067bc93029a41edf1105beaeab5a4ceef93->enter($__internal_d84485c1aa96c8c6cd7e23b1560f8067bc93029a41edf1105beaeab5a4ceef93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

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
        
        $__internal_d84485c1aa96c8c6cd7e23b1560f8067bc93029a41edf1105beaeab5a4ceef93->leave($__internal_d84485c1aa96c8c6cd7e23b1560f8067bc93029a41edf1105beaeab5a4ceef93_prof);

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
