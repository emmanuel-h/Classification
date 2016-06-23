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
        $__internal_75e38ae4a8a6247ed2fa98be44f8c1565e4d7a21f94c588188a9e1ff04a4808f = $this->env->getExtension("native_profiler");
        $__internal_75e38ae4a8a6247ed2fa98be44f8c1565e4d7a21f94c588188a9e1ff04a4808f->enter($__internal_75e38ae4a8a6247ed2fa98be44f8c1565e4d7a21f94c588188a9e1ff04a4808f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Admin:admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75e38ae4a8a6247ed2fa98be44f8c1565e4d7a21f94c588188a9e1ff04a4808f->leave($__internal_75e38ae4a8a6247ed2fa98be44f8c1565e4d7a21f94c588188a9e1ff04a4808f_prof);

    }

    // line 3
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_4430d2394f72d971e87ce6995d7a28b7257e6bf7e1c507182b0a21c45af8e909 = $this->env->getExtension("native_profiler");
        $__internal_4430d2394f72d971e87ce6995d7a28b7257e6bf7e1c507182b0a21c45af8e909->enter($__internal_4430d2394f72d971e87ce6995d7a28b7257e6bf7e1c507182b0a21c45af8e909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 4
        echo "


";
        
        $__internal_4430d2394f72d971e87ce6995d7a28b7257e6bf7e1c507182b0a21c45af8e909->leave($__internal_4430d2394f72d971e87ce6995d7a28b7257e6bf7e1c507182b0a21c45af8e909_prof);

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
