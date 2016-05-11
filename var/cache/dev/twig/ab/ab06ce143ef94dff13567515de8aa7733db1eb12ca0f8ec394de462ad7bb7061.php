<?php

/* LIFOClassifBundle:Platform:recherche.html.twig */
class __TwigTemplate_d009ef91ff410b0ab263261e5f5c37facc0417e2776bb4574da2d003a98a0764 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layout.html.twig", "LIFOClassifBundle:Platform:recherche.html.twig", 1);
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
        $__internal_cde7a72146fb66cfeaf68ab1989f1e84fa48aa0c408037d7d35b08d3b341ad9b = $this->env->getExtension("native_profiler");
        $__internal_cde7a72146fb66cfeaf68ab1989f1e84fa48aa0c408037d7d35b08d3b341ad9b->enter($__internal_cde7a72146fb66cfeaf68ab1989f1e84fa48aa0c408037d7d35b08d3b341ad9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Platform:recherche.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cde7a72146fb66cfeaf68ab1989f1e84fa48aa0c408037d7d35b08d3b341ad9b->leave($__internal_cde7a72146fb66cfeaf68ab1989f1e84fa48aa0c408037d7d35b08d3b341ad9b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fcdc80cb35cd4a7632cdaee7a8e5998bf013f332cb6f40e2ccdf039dd89e6fc7 = $this->env->getExtension("native_profiler");
        $__internal_fcdc80cb35cd4a7632cdaee7a8e5998bf013f332cb6f40e2ccdf039dd89e6fc7->enter($__internal_fcdc80cb35cd4a7632cdaee7a8e5998bf013f332cb6f40e2ccdf039dd89e6fc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Recherche";
        
        $__internal_fcdc80cb35cd4a7632cdaee7a8e5998bf013f332cb6f40e2ccdf039dd89e6fc7->leave($__internal_fcdc80cb35cd4a7632cdaee7a8e5998bf013f332cb6f40e2ccdf039dd89e6fc7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3b7ad46caab7e47ddde74be8f41aef596e5221d294a011d986489391e6605caa = $this->env->getExtension("native_profiler");
        $__internal_3b7ad46caab7e47ddde74be8f41aef596e5221d294a011d986489391e6605caa->enter($__internal_3b7ad46caab7e47ddde74be8f41aef596e5221d294a011d986489391e6605caa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
\t<p>
\t\tPour rechercher un tesson suivant certains critères
\t</p>
";
        
        $__internal_3b7ad46caab7e47ddde74be8f41aef596e5221d294a011d986489391e6605caa->leave($__internal_3b7ad46caab7e47ddde74be8f41aef596e5221d294a011d986489391e6605caa_prof);

    }

    public function getTemplateName()
    {
        return "LIFOClassifBundle:Platform:recherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 6,  48 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "LIFOClassifBundle::layout.html.twig" %}*/
/* */
/* {% block title %}{{ parent() }} - Recherche{% endblock %}*/
/* */
/* {% block body %}*/
/* 	{{ parent() }}*/
/* 	<p>*/
/* 		Pour rechercher un tesson suivant certains critères*/
/* 	</p>*/
/* {% endblock %}*/
