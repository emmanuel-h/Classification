<?php

/* @LIFOClassif/layoutGeneral.html.twig */
class __TwigTemplate_92ffdd026c92cb435e6b726c60ff8095ea19bec95e56589508b6bafa81643146 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@LIFOClassif/layoutGeneral.html.twig", 1);
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
        $__internal_a387966c6d68674b0ba47817eb6a3664692eef4973879904eb3b5150c44d00b1 = $this->env->getExtension("native_profiler");
        $__internal_a387966c6d68674b0ba47817eb6a3664692eef4973879904eb3b5150c44d00b1->enter($__internal_a387966c6d68674b0ba47817eb6a3664692eef4973879904eb3b5150c44d00b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/layoutGeneral.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a387966c6d68674b0ba47817eb6a3664692eef4973879904eb3b5150c44d00b1->leave($__internal_a387966c6d68674b0ba47817eb6a3664692eef4973879904eb3b5150c44d00b1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_48134410e8c242ae8738565599af738bcf18291d15c3b853a0f16d20233fce2e = $this->env->getExtension("native_profiler");
        $__internal_48134410e8c242ae8738565599af738bcf18291d15c3b853a0f16d20233fce2e->enter($__internal_48134410e8c242ae8738565599af738bcf18291d15c3b853a0f16d20233fce2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    \t";
        // line 5
        $this->displayBlock('LIFOClassif_body', $context, $blocks);
        // line 7
        echo "    \t
    ";
        
        $__internal_48134410e8c242ae8738565599af738bcf18291d15c3b853a0f16d20233fce2e->leave($__internal_48134410e8c242ae8738565599af738bcf18291d15c3b853a0f16d20233fce2e_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_6f5aaba33783d332f57c5426f7572a26efdb1de1f948b463072d83080b331dc5 = $this->env->getExtension("native_profiler");
        $__internal_6f5aaba33783d332f57c5426f7572a26efdb1de1f948b463072d83080b331dc5->enter($__internal_6f5aaba33783d332f57c5426f7572a26efdb1de1f948b463072d83080b331dc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "    \t";
        
        $__internal_6f5aaba33783d332f57c5426f7572a26efdb1de1f948b463072d83080b331dc5->leave($__internal_6f5aaba33783d332f57c5426f7572a26efdb1de1f948b463072d83080b331dc5_prof);

    }

    public function getTemplateName()
    {
        return "@LIFOClassif/layoutGeneral.html.twig";
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
