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
        $__internal_dc16ead07eb2a9f8bfdd364583ea50c433999373b33f34a264f5a328d77ee96b = $this->env->getExtension("native_profiler");
        $__internal_dc16ead07eb2a9f8bfdd364583ea50c433999373b33f34a264f5a328d77ee96b->enter($__internal_dc16ead07eb2a9f8bfdd364583ea50c433999373b33f34a264f5a328d77ee96b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Admin:admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc16ead07eb2a9f8bfdd364583ea50c433999373b33f34a264f5a328d77ee96b->leave($__internal_dc16ead07eb2a9f8bfdd364583ea50c433999373b33f34a264f5a328d77ee96b_prof);

    }

    // line 3
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_b2b17ca0d90296c141045c2f3b26a260150cc6a3cb03e8a27b7dc050a5711b89 = $this->env->getExtension("native_profiler");
        $__internal_b2b17ca0d90296c141045c2f3b26a260150cc6a3cb03e8a27b7dc050a5711b89->enter($__internal_b2b17ca0d90296c141045c2f3b26a260150cc6a3cb03e8a27b7dc050a5711b89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 4
        echo "


";
        
        $__internal_b2b17ca0d90296c141045c2f3b26a260150cc6a3cb03e8a27b7dc050a5711b89->leave($__internal_b2b17ca0d90296c141045c2f3b26a260150cc6a3cb03e8a27b7dc050a5711b89_prof);

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
