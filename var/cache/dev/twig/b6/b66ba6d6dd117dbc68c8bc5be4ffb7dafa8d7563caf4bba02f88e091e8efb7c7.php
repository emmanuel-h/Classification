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
        $__internal_aff822a8a0193d59dfb1217726fa294afb53811ee9e4d948c12c8016dc73f008 = $this->env->getExtension("native_profiler");
        $__internal_aff822a8a0193d59dfb1217726fa294afb53811ee9e4d948c12c8016dc73f008->enter($__internal_aff822a8a0193d59dfb1217726fa294afb53811ee9e4d948c12c8016dc73f008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Admin:admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aff822a8a0193d59dfb1217726fa294afb53811ee9e4d948c12c8016dc73f008->leave($__internal_aff822a8a0193d59dfb1217726fa294afb53811ee9e4d948c12c8016dc73f008_prof);

    }

    // line 3
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_f58c3380210412c6453a9a6ad3176f4c416de5b184094fbb0e0e50d2a3f09b11 = $this->env->getExtension("native_profiler");
        $__internal_f58c3380210412c6453a9a6ad3176f4c416de5b184094fbb0e0e50d2a3f09b11->enter($__internal_f58c3380210412c6453a9a6ad3176f4c416de5b184094fbb0e0e50d2a3f09b11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 4
        echo "


";
        
        $__internal_f58c3380210412c6453a9a6ad3176f4c416de5b184094fbb0e0e50d2a3f09b11->leave($__internal_f58c3380210412c6453a9a6ad3176f4c416de5b184094fbb0e0e50d2a3f09b11_prof);

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
