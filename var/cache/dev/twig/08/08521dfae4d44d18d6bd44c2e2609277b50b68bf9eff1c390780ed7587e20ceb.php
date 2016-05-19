<?php

/* @LIFOClassif/layoutAdmin.html.twig */
class __TwigTemplate_738ca7cff67840c621883672b451ebea236f34427d0386e3a0096ddac1f6b228 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@LIFOClassif/layoutAdmin.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'LIFOClassif_body' => array($this, 'block_LIFOClassif_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d1206b411599219e0add6d087da8e247589e0b27e14bad8932916757e0ff763d = $this->env->getExtension("native_profiler");
        $__internal_d1206b411599219e0add6d087da8e247589e0b27e14bad8932916757e0ff763d->enter($__internal_d1206b411599219e0add6d087da8e247589e0b27e14bad8932916757e0ff763d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/layoutAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1206b411599219e0add6d087da8e247589e0b27e14bad8932916757e0ff763d->leave($__internal_d1206b411599219e0add6d087da8e247589e0b27e14bad8932916757e0ff763d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ca26a290538dac42dfc9edc5f2617397f98ae90a5038c1af1a7922b4b7a81aeb = $this->env->getExtension("native_profiler");
        $__internal_ca26a290538dac42dfc9edc5f2617397f98ae90a5038c1af1a7922b4b7a81aeb->enter($__internal_ca26a290538dac42dfc9edc5f2617397f98ae90a5038c1af1a7922b4b7a81aeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t
     <p>
     <a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("lifo_classif_admin_suppression");
        echo "\">Suppression</a>
     <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("lifo_classif_admin_ajout");
        echo "\">Ajout</a>
     <a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("lifo_classif_admin_utilisateur");
        echo "\">Utilisateur</a>
    \t";
        // line 9
        $this->displayBlock('LIFOClassif_body', $context, $blocks);
        // line 11
        echo "    \t
    ";
        
        $__internal_ca26a290538dac42dfc9edc5f2617397f98ae90a5038c1af1a7922b4b7a81aeb->leave($__internal_ca26a290538dac42dfc9edc5f2617397f98ae90a5038c1af1a7922b4b7a81aeb_prof);

    }

    // line 9
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_8ebd7c59b4e38189b8411464afd31ca42c68fd7f81a5f01548ae3ee3e19b1abd = $this->env->getExtension("native_profiler");
        $__internal_8ebd7c59b4e38189b8411464afd31ca42c68fd7f81a5f01548ae3ee3e19b1abd->enter($__internal_8ebd7c59b4e38189b8411464afd31ca42c68fd7f81a5f01548ae3ee3e19b1abd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 10
        echo "    \t";
        
        $__internal_8ebd7c59b4e38189b8411464afd31ca42c68fd7f81a5f01548ae3ee3e19b1abd->leave($__internal_8ebd7c59b4e38189b8411464afd31ca42c68fd7f81a5f01548ae3ee3e19b1abd_prof);

    }

    public function getTemplateName()
    {
        return "@LIFOClassif/layoutAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 10,  67 => 9,  59 => 11,  57 => 9,  53 => 8,  49 => 7,  45 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/*     {% block body %}*/
/* 	*/
/*      <p>*/
/*      <a href="{{ path('lifo_classif_admin_suppression') }}">Suppression</a>*/
/*      <a href="{{ path('lifo_classif_admin_ajout') }}">Ajout</a>*/
/*      <a href="{{ path('lifo_classif_admin_utilisateur') }}">Utilisateur</a>*/
/*     	{% block LIFOClassif_body %}*/
/*     	{% endblock %}*/
/*     	*/
/*     {% endblock %}*/
/* */
