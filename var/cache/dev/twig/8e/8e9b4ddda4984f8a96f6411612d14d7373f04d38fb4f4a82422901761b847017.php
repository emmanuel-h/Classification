<?php

/* @LIFOClassif/Platform/tesson.html.twig */
class __TwigTemplate_5463be7e231f3b60aea970dd7720349d055558f68c39c80db5cc1614f7d755f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layout.html.twig", "@LIFOClassif/Platform/tesson.html.twig", 1);
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
        $__internal_ca48031ac2afe87aea864bc970d6455d94c997fa7e78e769653662a560ba8af3 = $this->env->getExtension("native_profiler");
        $__internal_ca48031ac2afe87aea864bc970d6455d94c997fa7e78e769653662a560ba8af3->enter($__internal_ca48031ac2afe87aea864bc970d6455d94c997fa7e78e769653662a560ba8af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Platform/tesson.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca48031ac2afe87aea864bc970d6455d94c997fa7e78e769653662a560ba8af3->leave($__internal_ca48031ac2afe87aea864bc970d6455d94c997fa7e78e769653662a560ba8af3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_92d0ec0a3b120432293f4b6674c30132395a32473288e9f10524cc3fbd64fd2b = $this->env->getExtension("native_profiler");
        $__internal_92d0ec0a3b120432293f4b6674c30132395a32473288e9f10524cc3fbd64fd2b->enter($__internal_92d0ec0a3b120432293f4b6674c30132395a32473288e9f10524cc3fbd64fd2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Tesson";
        
        $__internal_92d0ec0a3b120432293f4b6674c30132395a32473288e9f10524cc3fbd64fd2b->leave($__internal_92d0ec0a3b120432293f4b6674c30132395a32473288e9f10524cc3fbd64fd2b_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_3e10a6660e45ed3a5d4805a4b1650b63e77549c310fbbfb1964e34ce2ea53ce5 = $this->env->getExtension("native_profiler");
        $__internal_3e10a6660e45ed3a5d4805a4b1650b63e77549c310fbbfb1964e34ce2ea53ce5->enter($__internal_3e10a6660e45ed3a5d4805a4b1650b63e77549c310fbbfb1964e34ce2ea53ce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

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
        
        $__internal_3e10a6660e45ed3a5d4805a4b1650b63e77549c310fbbfb1964e34ce2ea53ce5->leave($__internal_3e10a6660e45ed3a5d4805a4b1650b63e77549c310fbbfb1964e34ce2ea53ce5_prof);

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
