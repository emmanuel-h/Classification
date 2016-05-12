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
            'LIFOClassif_body' => array($this, 'block_LIFOClassif_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LIFOClassifBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f7a069c390e7129671acd4e3bc6cdbc2e14ec8909be22df1167d780489be0840 = $this->env->getExtension("native_profiler");
        $__internal_f7a069c390e7129671acd4e3bc6cdbc2e14ec8909be22df1167d780489be0840->enter($__internal_f7a069c390e7129671acd4e3bc6cdbc2e14ec8909be22df1167d780489be0840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Platform:recherche.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7a069c390e7129671acd4e3bc6cdbc2e14ec8909be22df1167d780489be0840->leave($__internal_f7a069c390e7129671acd4e3bc6cdbc2e14ec8909be22df1167d780489be0840_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3b970d125e53e1ba7ce646f738735a40a01e48a7c8c07efd338950361bdd388e = $this->env->getExtension("native_profiler");
        $__internal_3b970d125e53e1ba7ce646f738735a40a01e48a7c8c07efd338950361bdd388e->enter($__internal_3b970d125e53e1ba7ce646f738735a40a01e48a7c8c07efd338950361bdd388e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Recherche";
        
        $__internal_3b970d125e53e1ba7ce646f738735a40a01e48a7c8c07efd338950361bdd388e->leave($__internal_3b970d125e53e1ba7ce646f738735a40a01e48a7c8c07efd338950361bdd388e_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_ec1fa53aa2aed4ba73b9c75d2dbcf054bd966b8adb3e23667921b218072e054c = $this->env->getExtension("native_profiler");
        $__internal_ec1fa53aa2aed4ba73b9c75d2dbcf054bd966b8adb3e23667921b218072e054c->enter($__internal_ec1fa53aa2aed4ba73b9c75d2dbcf054bd966b8adb3e23667921b218072e054c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "\t<p>
\t";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
\t</p>
";
        
        $__internal_ec1fa53aa2aed4ba73b9c75d2dbcf054bd966b8adb3e23667921b218072e054c->leave($__internal_ec1fa53aa2aed4ba73b9c75d2dbcf054bd966b8adb3e23667921b218072e054c_prof);

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
        return array (  57 => 7,  54 => 6,  48 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "LIFOClassifBundle::layout.html.twig" %}*/
/* */
/* {% block title %}{{ parent() }} - Recherche{% endblock %}*/
/* */
/* {% block LIFOClassif_body %}*/
/* 	<p>*/
/* 	{{ form(form) }}*/
/* 	</p>*/
/* {% endblock %}*/
