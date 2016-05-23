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
        $__internal_e6173c75ff81cc90b834febc1dd65e6b66587e19bb44a7fab5e9348eabac155e = $this->env->getExtension("native_profiler");
        $__internal_e6173c75ff81cc90b834febc1dd65e6b66587e19bb44a7fab5e9348eabac155e->enter($__internal_e6173c75ff81cc90b834febc1dd65e6b66587e19bb44a7fab5e9348eabac155e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle::layoutAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6173c75ff81cc90b834febc1dd65e6b66587e19bb44a7fab5e9348eabac155e->leave($__internal_e6173c75ff81cc90b834febc1dd65e6b66587e19bb44a7fab5e9348eabac155e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_054308e48a6e4064cdf30180e9785df4ab27993c8175cd81bae7db99e508c0a6 = $this->env->getExtension("native_profiler");
        $__internal_054308e48a6e4064cdf30180e9785df4ab27993c8175cd81bae7db99e508c0a6->enter($__internal_054308e48a6e4064cdf30180e9785df4ab27993c8175cd81bae7db99e508c0a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t
     <p>
     <a class=\"btn btn-default\" href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("lifo_classif_admin_suppression");
        echo "\">Suppression</a>
     <a class=\"btn btn-default\" href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("lifo_classif_admin_ajout");
        echo "\">Ajout</a>
     <a class=\"btn btn-default\" href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("lifo_classif_admin_utilisateur");
        echo "\">Utilisateur</a>
    \t";
        // line 9
        $this->displayBlock('LIFOClassif_body', $context, $blocks);
        // line 11
        echo "    \t
    ";
        
        $__internal_054308e48a6e4064cdf30180e9785df4ab27993c8175cd81bae7db99e508c0a6->leave($__internal_054308e48a6e4064cdf30180e9785df4ab27993c8175cd81bae7db99e508c0a6_prof);

    }

    // line 9
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_689bc6dbb435560250634c57838ee1ceb719f0fec4868e260c6eef8121779bd2 = $this->env->getExtension("native_profiler");
        $__internal_689bc6dbb435560250634c57838ee1ceb719f0fec4868e260c6eef8121779bd2->enter($__internal_689bc6dbb435560250634c57838ee1ceb719f0fec4868e260c6eef8121779bd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 10
        echo "    \t";
        
        $__internal_689bc6dbb435560250634c57838ee1ceb719f0fec4868e260c6eef8121779bd2->leave($__internal_689bc6dbb435560250634c57838ee1ceb719f0fec4868e260c6eef8121779bd2_prof);

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
/*      <a class="btn btn-default" href="{{ path('lifo_classif_admin_suppression') }}">Suppression</a>*/
/*      <a class="btn btn-default" href="{{ path('lifo_classif_admin_ajout') }}">Ajout</a>*/
/*      <a class="btn btn-default" href="{{ path('lifo_classif_admin_utilisateur') }}">Utilisateur</a>*/
/*     	{% block LIFOClassif_body %}*/
/*     	{% endblock %}*/
/*     	*/
/*     {% endblock %}*/
/* */
