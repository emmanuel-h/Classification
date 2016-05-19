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
        $__internal_143c5fcb3f5c7602da4ec78389a35071bb59a4d0226a057ea5614fc4eb7e7711 = $this->env->getExtension("native_profiler");
        $__internal_143c5fcb3f5c7602da4ec78389a35071bb59a4d0226a057ea5614fc4eb7e7711->enter($__internal_143c5fcb3f5c7602da4ec78389a35071bb59a4d0226a057ea5614fc4eb7e7711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Admin:admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_143c5fcb3f5c7602da4ec78389a35071bb59a4d0226a057ea5614fc4eb7e7711->leave($__internal_143c5fcb3f5c7602da4ec78389a35071bb59a4d0226a057ea5614fc4eb7e7711_prof);

    }

    // line 3
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_e3a47367d110c3e380ce67bc08121152bfa222de81bf390e0e56d91da05556ba = $this->env->getExtension("native_profiler");
        $__internal_e3a47367d110c3e380ce67bc08121152bfa222de81bf390e0e56d91da05556ba->enter($__internal_e3a47367d110c3e380ce67bc08121152bfa222de81bf390e0e56d91da05556ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 4
        echo "


";
        
        $__internal_e3a47367d110c3e380ce67bc08121152bfa222de81bf390e0e56d91da05556ba->leave($__internal_e3a47367d110c3e380ce67bc08121152bfa222de81bf390e0e56d91da05556ba_prof);

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
