<?php

/* LIFOClassifBundle:Platform:tesson.html.twig */
class __TwigTemplate_15d248a09ffea0fb775fe3f599fcd38529064bdfc740d5528a4417b15b6c16ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layoutGeneral.html.twig", "LIFOClassifBundle:Platform:tesson.html.twig", 1);
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
        $__internal_d88edf9812e1fdba64e9d4137a4c564ae1abc0d3efae882d8f4fb976171d03c2 = $this->env->getExtension("native_profiler");
        $__internal_d88edf9812e1fdba64e9d4137a4c564ae1abc0d3efae882d8f4fb976171d03c2->enter($__internal_d88edf9812e1fdba64e9d4137a4c564ae1abc0d3efae882d8f4fb976171d03c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Platform:tesson.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d88edf9812e1fdba64e9d4137a4c564ae1abc0d3efae882d8f4fb976171d03c2->leave($__internal_d88edf9812e1fdba64e9d4137a4c564ae1abc0d3efae882d8f4fb976171d03c2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_71b2c7219de97d16d7904ef23667b15d60f3fec7c39f760c027f14dbe2353609 = $this->env->getExtension("native_profiler");
        $__internal_71b2c7219de97d16d7904ef23667b15d60f3fec7c39f760c027f14dbe2353609->enter($__internal_71b2c7219de97d16d7904ef23667b15d60f3fec7c39f760c027f14dbe2353609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Tesson";
        
        $__internal_71b2c7219de97d16d7904ef23667b15d60f3fec7c39f760c027f14dbe2353609->leave($__internal_71b2c7219de97d16d7904ef23667b15d60f3fec7c39f760c027f14dbe2353609_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_2446eec00d44dca06cf211085fd40cc921d600eed322bc605a9b60a99f1db5e6 = $this->env->getExtension("native_profiler");
        $__internal_2446eec00d44dca06cf211085fd40cc921d600eed322bc605a9b60a99f1db5e6->enter($__internal_2446eec00d44dca06cf211085fd40cc921d600eed322bc605a9b60a99f1db5e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

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
        
        $__internal_2446eec00d44dca06cf211085fd40cc921d600eed322bc605a9b60a99f1db5e6->leave($__internal_2446eec00d44dca06cf211085fd40cc921d600eed322bc605a9b60a99f1db5e6_prof);

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
