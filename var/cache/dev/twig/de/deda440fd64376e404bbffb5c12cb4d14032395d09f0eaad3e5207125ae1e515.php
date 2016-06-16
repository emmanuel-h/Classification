<?php

/* LIFOClassifBundle::layoutGeneral.html.twig */
class __TwigTemplate_7c296ff27bac2f8634b383bbdde8b8f943df6c3fc60db69e581587a45f5f098d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "LIFOClassifBundle::layoutGeneral.html.twig", 1);
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
        $__internal_b556b5a03e8de55fd27c466d41f0cd3d1faec733a15108cee37ec51dd8c6cd09 = $this->env->getExtension("native_profiler");
        $__internal_b556b5a03e8de55fd27c466d41f0cd3d1faec733a15108cee37ec51dd8c6cd09->enter($__internal_b556b5a03e8de55fd27c466d41f0cd3d1faec733a15108cee37ec51dd8c6cd09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle::layoutGeneral.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b556b5a03e8de55fd27c466d41f0cd3d1faec733a15108cee37ec51dd8c6cd09->leave($__internal_b556b5a03e8de55fd27c466d41f0cd3d1faec733a15108cee37ec51dd8c6cd09_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6a80148f78d6051fa38001b764eb2fae8f130b5b5dffb2f84beedd8f0503089c = $this->env->getExtension("native_profiler");
        $__internal_6a80148f78d6051fa38001b764eb2fae8f130b5b5dffb2f84beedd8f0503089c->enter($__internal_6a80148f78d6051fa38001b764eb2fae8f130b5b5dffb2f84beedd8f0503089c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    \t";
        // line 5
        $this->displayBlock('LIFOClassif_body', $context, $blocks);
        // line 7
        echo "    \t
    ";
        
        $__internal_6a80148f78d6051fa38001b764eb2fae8f130b5b5dffb2f84beedd8f0503089c->leave($__internal_6a80148f78d6051fa38001b764eb2fae8f130b5b5dffb2f84beedd8f0503089c_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_706be9d17575a73af5296dd67e449df9762fd84b3bb865d1d603664ca193ad57 = $this->env->getExtension("native_profiler");
        $__internal_706be9d17575a73af5296dd67e449df9762fd84b3bb865d1d603664ca193ad57->enter($__internal_706be9d17575a73af5296dd67e449df9762fd84b3bb865d1d603664ca193ad57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "    \t";
        
        $__internal_706be9d17575a73af5296dd67e449df9762fd84b3bb865d1d603664ca193ad57->leave($__internal_706be9d17575a73af5296dd67e449df9762fd84b3bb865d1d603664ca193ad57_prof);

    }

    public function getTemplateName()
    {
        return "LIFOClassifBundle::layoutGeneral.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 6,  54 => 5,  46 => 7,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/*     {% block body %}*/
/*     */
/*     	{% block LIFOClassif_body %}*/
/*     	{% endblock %}*/
/*     	*/
/*     {% endblock %}*/
/* */
