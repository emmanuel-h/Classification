<?php

/* LIFOClassifBundle:Admin:admin.html.twig */
class __TwigTemplate_e6e7e80d35d534d99af7cfec088464040a48c3337fe62a7c5ab4ea7f52a66de0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layoutAdmin.html.twig", "LIFOClassifBundle:Admin:admin.html.twig", 1);
        $this->blocks = array(
            'LIFOClassif_body' => array($this, 'block_LIFOClassif_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LIFOClassifBundle::layoutAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7c1289906c92aa4969e82f020fecd30e5d6a9a87ae8d89432a54ca0c39b1e856 = $this->env->getExtension("native_profiler");
        $__internal_7c1289906c92aa4969e82f020fecd30e5d6a9a87ae8d89432a54ca0c39b1e856->enter($__internal_7c1289906c92aa4969e82f020fecd30e5d6a9a87ae8d89432a54ca0c39b1e856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Admin:admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c1289906c92aa4969e82f020fecd30e5d6a9a87ae8d89432a54ca0c39b1e856->leave($__internal_7c1289906c92aa4969e82f020fecd30e5d6a9a87ae8d89432a54ca0c39b1e856_prof);

    }

    // line 3
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_4036f0f09eb7d304a6d62266b6818cefad49bdd46996aea62aea2973a537cd00 = $this->env->getExtension("native_profiler");
        $__internal_4036f0f09eb7d304a6d62266b6818cefad49bdd46996aea62aea2973a537cd00->enter($__internal_4036f0f09eb7d304a6d62266b6818cefad49bdd46996aea62aea2973a537cd00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 4
        echo "


";
        
        $__internal_4036f0f09eb7d304a6d62266b6818cefad49bdd46996aea62aea2973a537cd00->leave($__internal_4036f0f09eb7d304a6d62266b6818cefad49bdd46996aea62aea2973a537cd00_prof);

    }

    public function getTemplateName()
    {
        return "LIFOClassifBundle:Admin:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "LIFOClassifBundle::layoutAdmin.html.twig" %}*/
/* */
/* {% block LIFOClassif_body %}*/
/* */
/* */
/* */
/* {% endblock %}*/
