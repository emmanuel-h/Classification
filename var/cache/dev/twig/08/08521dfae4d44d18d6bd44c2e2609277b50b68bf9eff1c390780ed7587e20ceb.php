<?php

/* @LIFOClassif/layoutAdmin.html.twig */
class __TwigTemplate_738ca7cff67840c621883672b451ebea236f34427d0386e3a0096ddac1f6b228 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@LIFOClassif/layoutAdmin.html.twig", 1);
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
        $__internal_dd5c27d74740acb9ffa2fa0dbb90564b68e3a5e1acd54ceb2f52b033d7811b33 = $this->env->getExtension("native_profiler");
        $__internal_dd5c27d74740acb9ffa2fa0dbb90564b68e3a5e1acd54ceb2f52b033d7811b33->enter($__internal_dd5c27d74740acb9ffa2fa0dbb90564b68e3a5e1acd54ceb2f52b033d7811b33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/layoutAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd5c27d74740acb9ffa2fa0dbb90564b68e3a5e1acd54ceb2f52b033d7811b33->leave($__internal_dd5c27d74740acb9ffa2fa0dbb90564b68e3a5e1acd54ceb2f52b033d7811b33_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b56fde4a64f52fbb0ea04820de261cf62b664ff5d2e762167680defd2890ea1b = $this->env->getExtension("native_profiler");
        $__internal_b56fde4a64f52fbb0ea04820de261cf62b664ff5d2e762167680defd2890ea1b->enter($__internal_b56fde4a64f52fbb0ea04820de261cf62b664ff5d2e762167680defd2890ea1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    \t";
        // line 5
        $this->displayBlock('LIFOClassif_body', $context, $blocks);
        // line 7
        echo "    \t
    ";
        
        $__internal_b56fde4a64f52fbb0ea04820de261cf62b664ff5d2e762167680defd2890ea1b->leave($__internal_b56fde4a64f52fbb0ea04820de261cf62b664ff5d2e762167680defd2890ea1b_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_20a84ee28c1fa4cc098f7187cc7e184f2dcb90aa6eab2a1cf0db4f98ba56bb81 = $this->env->getExtension("native_profiler");
        $__internal_20a84ee28c1fa4cc098f7187cc7e184f2dcb90aa6eab2a1cf0db4f98ba56bb81->enter($__internal_20a84ee28c1fa4cc098f7187cc7e184f2dcb90aa6eab2a1cf0db4f98ba56bb81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "    \t";
        
        $__internal_20a84ee28c1fa4cc098f7187cc7e184f2dcb90aa6eab2a1cf0db4f98ba56bb81->leave($__internal_20a84ee28c1fa4cc098f7187cc7e184f2dcb90aa6eab2a1cf0db4f98ba56bb81_prof);

    }

    public function getTemplateName()
    {
        return "@LIFOClassif/layoutAdmin.html.twig";
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
