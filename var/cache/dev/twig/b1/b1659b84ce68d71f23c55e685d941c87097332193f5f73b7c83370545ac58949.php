<?php

/* LIFOClassifBundle:Platform:index.html.twig */
class __TwigTemplate_45469c73f234b31b6bec59b12ff8781d17bcdaf17f0e66c248db4e16b9295993 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layoutGeneral.html.twig", "LIFOClassifBundle:Platform:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LIFOClassifBundle::layoutGeneral.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_69f6eb4107bb060b0e5748973a77bfdbefadb218673797a9e0e023f18e642eaf = $this->env->getExtension("native_profiler");
        $__internal_69f6eb4107bb060b0e5748973a77bfdbefadb218673797a9e0e023f18e642eaf->enter($__internal_69f6eb4107bb060b0e5748973a77bfdbefadb218673797a9e0e023f18e642eaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Platform:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69f6eb4107bb060b0e5748973a77bfdbefadb218673797a9e0e023f18e642eaf->leave($__internal_69f6eb4107bb060b0e5748973a77bfdbefadb218673797a9e0e023f18e642eaf_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5a3a422e4d3e1762e1dad75100aceb1a93a43b86bf03f1f8d2a1f00949b479a4 = $this->env->getExtension("native_profiler");
        $__internal_5a3a422e4d3e1762e1dad75100aceb1a93a43b86bf03f1f8d2a1f00949b479a4->enter($__internal_5a3a422e4d3e1762e1dad75100aceb1a93a43b86bf03f1f8d2a1f00949b479a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index";
        
        $__internal_5a3a422e4d3e1762e1dad75100aceb1a93a43b86bf03f1f8d2a1f00949b479a4->leave($__internal_5a3a422e4d3e1762e1dad75100aceb1a93a43b86bf03f1f8d2a1f00949b479a4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_417da717cd116d8f7f90c4acd96b2cb12f5a7dcc544073028b2ddf40fb77c87f = $this->env->getExtension("native_profiler");
        $__internal_417da717cd116d8f7f90c4acd96b2cb12f5a7dcc544073028b2ddf40fb77c87f->enter($__internal_417da717cd116d8f7f90c4acd96b2cb12f5a7dcc544073028b2ddf40fb77c87f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<p>
\t\tBienvenue sur l'outil d'aide à la classification de tesson
\t</p>
";
        
        $__internal_417da717cd116d8f7f90c4acd96b2cb12f5a7dcc544073028b2ddf40fb77c87f->leave($__internal_417da717cd116d8f7f90c4acd96b2cb12f5a7dcc544073028b2ddf40fb77c87f_prof);

    }

    public function getTemplateName()
    {
        return "LIFOClassifBundle:Platform:index.html.twig";
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
/* {% extends "LIFOClassifBundle::layoutGeneral.html.twig" %}*/
/* */
/* {% block title %}{{ parent() }} - Index{% endblock %}*/
/* */
/* {% block body %}*/
/* 	<p>*/
/* 		Bienvenue sur l'outil d'aide à la classification de tesson*/
/* 	</p>*/
/* {% endblock %}*/
