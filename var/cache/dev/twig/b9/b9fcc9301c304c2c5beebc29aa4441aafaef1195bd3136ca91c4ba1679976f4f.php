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
        $__internal_857adff5c47569522270ddf7e122ebd8abb18c26df5d9ea4515e24cac94799db = $this->env->getExtension("native_profiler");
        $__internal_857adff5c47569522270ddf7e122ebd8abb18c26df5d9ea4515e24cac94799db->enter($__internal_857adff5c47569522270ddf7e122ebd8abb18c26df5d9ea4515e24cac94799db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle::layoutAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_857adff5c47569522270ddf7e122ebd8abb18c26df5d9ea4515e24cac94799db->leave($__internal_857adff5c47569522270ddf7e122ebd8abb18c26df5d9ea4515e24cac94799db_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_67d6dc582dfb71b3c19cb13890273d86112cd6ee4b580a3e22ad1c30aff23dd2 = $this->env->getExtension("native_profiler");
        $__internal_67d6dc582dfb71b3c19cb13890273d86112cd6ee4b580a3e22ad1c30aff23dd2->enter($__internal_67d6dc582dfb71b3c19cb13890273d86112cd6ee4b580a3e22ad1c30aff23dd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_67d6dc582dfb71b3c19cb13890273d86112cd6ee4b580a3e22ad1c30aff23dd2->leave($__internal_67d6dc582dfb71b3c19cb13890273d86112cd6ee4b580a3e22ad1c30aff23dd2_prof);

    }

    // line 9
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_0e2fbb6e989ffa1664d0cdf25dffee85a8abb2f2a535c2d438288f28b1468836 = $this->env->getExtension("native_profiler");
        $__internal_0e2fbb6e989ffa1664d0cdf25dffee85a8abb2f2a535c2d438288f28b1468836->enter($__internal_0e2fbb6e989ffa1664d0cdf25dffee85a8abb2f2a535c2d438288f28b1468836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 10
        echo "    \t";
        
        $__internal_0e2fbb6e989ffa1664d0cdf25dffee85a8abb2f2a535c2d438288f28b1468836->leave($__internal_0e2fbb6e989ffa1664d0cdf25dffee85a8abb2f2a535c2d438288f28b1468836_prof);

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
