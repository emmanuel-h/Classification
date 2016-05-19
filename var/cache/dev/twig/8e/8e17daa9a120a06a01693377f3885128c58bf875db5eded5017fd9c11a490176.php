<?php

/* @LIFOClassif/Platform/index.html.twig */
class __TwigTemplate_6c5727bd5ba52cac76d8756f50842e6d94474be7170dde15522885ae5d5c1fd2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layout.html.twig", "@LIFOClassif/Platform/index.html.twig", 1);
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
        $__internal_bc0cf655dcba02096f22fa85b255b3298955fab3dddbbfef72121fbd209de05c = $this->env->getExtension("native_profiler");
        $__internal_bc0cf655dcba02096f22fa85b255b3298955fab3dddbbfef72121fbd209de05c->enter($__internal_bc0cf655dcba02096f22fa85b255b3298955fab3dddbbfef72121fbd209de05c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Platform/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc0cf655dcba02096f22fa85b255b3298955fab3dddbbfef72121fbd209de05c->leave($__internal_bc0cf655dcba02096f22fa85b255b3298955fab3dddbbfef72121fbd209de05c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0214fc95b48ebfccb51d2241bf89af95c25e13367048fe5b83e65959d114d9c5 = $this->env->getExtension("native_profiler");
        $__internal_0214fc95b48ebfccb51d2241bf89af95c25e13367048fe5b83e65959d114d9c5->enter($__internal_0214fc95b48ebfccb51d2241bf89af95c25e13367048fe5b83e65959d114d9c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index";
        
        $__internal_0214fc95b48ebfccb51d2241bf89af95c25e13367048fe5b83e65959d114d9c5->leave($__internal_0214fc95b48ebfccb51d2241bf89af95c25e13367048fe5b83e65959d114d9c5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_11c63bd4eb3640cb25e411e14503d2da5e80ab3ab3abb9ac6162d030cbd23846 = $this->env->getExtension("native_profiler");
        $__internal_11c63bd4eb3640cb25e411e14503d2da5e80ab3ab3abb9ac6162d030cbd23846->enter($__internal_11c63bd4eb3640cb25e411e14503d2da5e80ab3ab3abb9ac6162d030cbd23846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<p>
\t\tBienvenue sur l'outil d'aide à la classification de tesson
\t</p>
";
        
        $__internal_11c63bd4eb3640cb25e411e14503d2da5e80ab3ab3abb9ac6162d030cbd23846->leave($__internal_11c63bd4eb3640cb25e411e14503d2da5e80ab3ab3abb9ac6162d030cbd23846_prof);

    }

    public function getTemplateName()
    {
        return "@LIFOClassif/Platform/index.html.twig";
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
/* {% block title %}{{ parent() }} - Index{% endblock %}*/
/* */
/* {% block body %}*/
/* 	<p>*/
/* 		Bienvenue sur l'outil d'aide à la classification de tesson*/
/* 	</p>*/
/* {% endblock %}*/
