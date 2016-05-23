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
        $__internal_402031d32b46c5bc11e6e642030325ce39370e5bab933de77ca4acc021856043 = $this->env->getExtension("native_profiler");
        $__internal_402031d32b46c5bc11e6e642030325ce39370e5bab933de77ca4acc021856043->enter($__internal_402031d32b46c5bc11e6e642030325ce39370e5bab933de77ca4acc021856043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/layoutAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_402031d32b46c5bc11e6e642030325ce39370e5bab933de77ca4acc021856043->leave($__internal_402031d32b46c5bc11e6e642030325ce39370e5bab933de77ca4acc021856043_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b1b75b1afcc2b6859207fee31e34e6b8b48da86d80d9b73888b47a93d885b94b = $this->env->getExtension("native_profiler");
        $__internal_b1b75b1afcc2b6859207fee31e34e6b8b48da86d80d9b73888b47a93d885b94b->enter($__internal_b1b75b1afcc2b6859207fee31e34e6b8b48da86d80d9b73888b47a93d885b94b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b1b75b1afcc2b6859207fee31e34e6b8b48da86d80d9b73888b47a93d885b94b->leave($__internal_b1b75b1afcc2b6859207fee31e34e6b8b48da86d80d9b73888b47a93d885b94b_prof);

    }

    // line 9
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_5c8342e2ecc5128e39118bbe38219693d9e86b8b9abf941724aaf53d4dcec9b6 = $this->env->getExtension("native_profiler");
        $__internal_5c8342e2ecc5128e39118bbe38219693d9e86b8b9abf941724aaf53d4dcec9b6->enter($__internal_5c8342e2ecc5128e39118bbe38219693d9e86b8b9abf941724aaf53d4dcec9b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 10
        echo "    \t";
        
        $__internal_5c8342e2ecc5128e39118bbe38219693d9e86b8b9abf941724aaf53d4dcec9b6->leave($__internal_5c8342e2ecc5128e39118bbe38219693d9e86b8b9abf941724aaf53d4dcec9b6_prof);

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
