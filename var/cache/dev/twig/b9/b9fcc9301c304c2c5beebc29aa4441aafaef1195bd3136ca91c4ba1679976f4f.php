<?php

/* LIFOClassifBundle::layoutAdmin.html.twig */
class __TwigTemplate_bc85a8408e10c2b4663222f7de80f72f7ddde689141173b4df11892d438f4dfb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "LIFOClassifBundle::layoutAdmin.html.twig", 1);
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
        $__internal_b4ade7cd7111289ef1d825d6b403df6ff6d4fdf58bd4691576873710592674ea = $this->env->getExtension("native_profiler");
        $__internal_b4ade7cd7111289ef1d825d6b403df6ff6d4fdf58bd4691576873710592674ea->enter($__internal_b4ade7cd7111289ef1d825d6b403df6ff6d4fdf58bd4691576873710592674ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle::layoutAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4ade7cd7111289ef1d825d6b403df6ff6d4fdf58bd4691576873710592674ea->leave($__internal_b4ade7cd7111289ef1d825d6b403df6ff6d4fdf58bd4691576873710592674ea_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ec6efcb54c8be960abf8940d2d8471cbc5764c1b9b8e9bb0ebece3de2fbe9e0a = $this->env->getExtension("native_profiler");
        $__internal_ec6efcb54c8be960abf8940d2d8471cbc5764c1b9b8e9bb0ebece3de2fbe9e0a->enter($__internal_ec6efcb54c8be960abf8940d2d8471cbc5764c1b9b8e9bb0ebece3de2fbe9e0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ec6efcb54c8be960abf8940d2d8471cbc5764c1b9b8e9bb0ebece3de2fbe9e0a->leave($__internal_ec6efcb54c8be960abf8940d2d8471cbc5764c1b9b8e9bb0ebece3de2fbe9e0a_prof);

    }

    // line 9
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_6a5e209e5bed444a221e02e8e3ebf31d8d8c912b11da298a8b231939b1cd4d65 = $this->env->getExtension("native_profiler");
        $__internal_6a5e209e5bed444a221e02e8e3ebf31d8d8c912b11da298a8b231939b1cd4d65->enter($__internal_6a5e209e5bed444a221e02e8e3ebf31d8d8c912b11da298a8b231939b1cd4d65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 10
        echo "    \t";
        
        $__internal_6a5e209e5bed444a221e02e8e3ebf31d8d8c912b11da298a8b231939b1cd4d65->leave($__internal_6a5e209e5bed444a221e02e8e3ebf31d8d8c912b11da298a8b231939b1cd4d65_prof);

    }

    public function getTemplateName()
    {
        return "LIFOClassifBundle::layoutAdmin.html.twig";
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
