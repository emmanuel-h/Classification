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
        $__internal_38da62203e9aad155a6cca0eb0c55fc967d67548c1117b973b486fcf4d262247 = $this->env->getExtension("native_profiler");
        $__internal_38da62203e9aad155a6cca0eb0c55fc967d67548c1117b973b486fcf4d262247->enter($__internal_38da62203e9aad155a6cca0eb0c55fc967d67548c1117b973b486fcf4d262247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle::layoutAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38da62203e9aad155a6cca0eb0c55fc967d67548c1117b973b486fcf4d262247->leave($__internal_38da62203e9aad155a6cca0eb0c55fc967d67548c1117b973b486fcf4d262247_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_019d26025c72ca71d60a8bffd6fe1473dcf509b8a51a1aff5c00cd57a82bba99 = $this->env->getExtension("native_profiler");
        $__internal_019d26025c72ca71d60a8bffd6fe1473dcf509b8a51a1aff5c00cd57a82bba99->enter($__internal_019d26025c72ca71d60a8bffd6fe1473dcf509b8a51a1aff5c00cd57a82bba99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    \t";
        // line 5
        $this->displayBlock('LIFOClassif_body', $context, $blocks);
        // line 7
        echo "    \t
    ";
        
        $__internal_019d26025c72ca71d60a8bffd6fe1473dcf509b8a51a1aff5c00cd57a82bba99->leave($__internal_019d26025c72ca71d60a8bffd6fe1473dcf509b8a51a1aff5c00cd57a82bba99_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_41ab9b6f23fc508da4e298e33b4ee29fb788a802b5353f2018ae9782c3aaf487 = $this->env->getExtension("native_profiler");
        $__internal_41ab9b6f23fc508da4e298e33b4ee29fb788a802b5353f2018ae9782c3aaf487->enter($__internal_41ab9b6f23fc508da4e298e33b4ee29fb788a802b5353f2018ae9782c3aaf487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "    \t";
        
        $__internal_41ab9b6f23fc508da4e298e33b4ee29fb788a802b5353f2018ae9782c3aaf487->leave($__internal_41ab9b6f23fc508da4e298e33b4ee29fb788a802b5353f2018ae9782c3aaf487_prof);

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
