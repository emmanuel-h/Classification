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
        $__internal_3f13e3fc08ab3016c6848f7fedc7ac6fa87bd2b70b8c62dca41a4a6527c71647 = $this->env->getExtension("native_profiler");
        $__internal_3f13e3fc08ab3016c6848f7fedc7ac6fa87bd2b70b8c62dca41a4a6527c71647->enter($__internal_3f13e3fc08ab3016c6848f7fedc7ac6fa87bd2b70b8c62dca41a4a6527c71647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Platform/tesson.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f13e3fc08ab3016c6848f7fedc7ac6fa87bd2b70b8c62dca41a4a6527c71647->leave($__internal_3f13e3fc08ab3016c6848f7fedc7ac6fa87bd2b70b8c62dca41a4a6527c71647_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_23d586babfb658c8dc059b41f71f00307099180ad367c8028d2c74bfe98d77b9 = $this->env->getExtension("native_profiler");
        $__internal_23d586babfb658c8dc059b41f71f00307099180ad367c8028d2c74bfe98d77b9->enter($__internal_23d586babfb658c8dc059b41f71f00307099180ad367c8028d2c74bfe98d77b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Tesson";
        
        $__internal_23d586babfb658c8dc059b41f71f00307099180ad367c8028d2c74bfe98d77b9->leave($__internal_23d586babfb658c8dc059b41f71f00307099180ad367c8028d2c74bfe98d77b9_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_5af99e26477a5df43370c34c5b7e81479771471641ab21f3333d3981403f5555 = $this->env->getExtension("native_profiler");
        $__internal_5af99e26477a5df43370c34c5b7e81479771471641ab21f3333d3981403f5555->enter($__internal_5af99e26477a5df43370c34c5b7e81479771471641ab21f3333d3981403f5555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

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
        
        $__internal_5af99e26477a5df43370c34c5b7e81479771471641ab21f3333d3981403f5555->leave($__internal_5af99e26477a5df43370c34c5b7e81479771471641ab21f3333d3981403f5555_prof);

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
