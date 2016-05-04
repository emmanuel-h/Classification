<?php

/* @LIFOClassif/Platform/recherche.html.twig */
class __TwigTemplate_197a2bc7dbeeae78a123c058f6ba898579a32e6e18909d6330a667da26ba2579 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layout.html.twig", "@LIFOClassif/Platform/recherche.html.twig", 1);
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
        $__internal_7d25c85e2cdaf49ccc5a39a91e7c872d4bddc86b8615519e9d32dcd0e2813ff7 = $this->env->getExtension("native_profiler");
        $__internal_7d25c85e2cdaf49ccc5a39a91e7c872d4bddc86b8615519e9d32dcd0e2813ff7->enter($__internal_7d25c85e2cdaf49ccc5a39a91e7c872d4bddc86b8615519e9d32dcd0e2813ff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Platform/recherche.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d25c85e2cdaf49ccc5a39a91e7c872d4bddc86b8615519e9d32dcd0e2813ff7->leave($__internal_7d25c85e2cdaf49ccc5a39a91e7c872d4bddc86b8615519e9d32dcd0e2813ff7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7f8b666046e5f3c7a6b4f5aed58af8805db7cb51458070d84a45dc991cf19f6f = $this->env->getExtension("native_profiler");
        $__internal_7f8b666046e5f3c7a6b4f5aed58af8805db7cb51458070d84a45dc991cf19f6f->enter($__internal_7f8b666046e5f3c7a6b4f5aed58af8805db7cb51458070d84a45dc991cf19f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Recherche";
        
        $__internal_7f8b666046e5f3c7a6b4f5aed58af8805db7cb51458070d84a45dc991cf19f6f->leave($__internal_7f8b666046e5f3c7a6b4f5aed58af8805db7cb51458070d84a45dc991cf19f6f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a7966d77961ff54a7815a127cf10d5964313e728bb37ce1b8d47168ca488970b = $this->env->getExtension("native_profiler");
        $__internal_a7966d77961ff54a7815a127cf10d5964313e728bb37ce1b8d47168ca488970b->enter($__internal_a7966d77961ff54a7815a127cf10d5964313e728bb37ce1b8d47168ca488970b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
\t<p>
\t\tPour rechercher un tesson suivant certains critères
\t</p>
";
        
        $__internal_a7966d77961ff54a7815a127cf10d5964313e728bb37ce1b8d47168ca488970b->leave($__internal_a7966d77961ff54a7815a127cf10d5964313e728bb37ce1b8d47168ca488970b_prof);

    }

    public function getTemplateName()
    {
        return "@LIFOClassif/Platform/recherche.html.twig";
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
