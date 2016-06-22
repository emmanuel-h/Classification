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
        $__internal_c037b6278d2c5c5cdf609681507f5a532b60a9c21c0f27199782bd93e39170a2 = $this->env->getExtension("native_profiler");
        $__internal_c037b6278d2c5c5cdf609681507f5a532b60a9c21c0f27199782bd93e39170a2->enter($__internal_c037b6278d2c5c5cdf609681507f5a532b60a9c21c0f27199782bd93e39170a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/layoutGeneral.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c037b6278d2c5c5cdf609681507f5a532b60a9c21c0f27199782bd93e39170a2->leave($__internal_c037b6278d2c5c5cdf609681507f5a532b60a9c21c0f27199782bd93e39170a2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c925dc2f06b6720740cba30a0d3ea2457458781f87e58e423d2cd5521d26eeaf = $this->env->getExtension("native_profiler");
        $__internal_c925dc2f06b6720740cba30a0d3ea2457458781f87e58e423d2cd5521d26eeaf->enter($__internal_c925dc2f06b6720740cba30a0d3ea2457458781f87e58e423d2cd5521d26eeaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    \t";
        // line 5
        $this->displayBlock('LIFOClassif_body', $context, $blocks);
        // line 7
        echo "    \t
    ";
        
        $__internal_c925dc2f06b6720740cba30a0d3ea2457458781f87e58e423d2cd5521d26eeaf->leave($__internal_c925dc2f06b6720740cba30a0d3ea2457458781f87e58e423d2cd5521d26eeaf_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_485c4b5c69f20662f2326dbba6e1389cae7a9f2fb218fc00bd3692b9249fce84 = $this->env->getExtension("native_profiler");
        $__internal_485c4b5c69f20662f2326dbba6e1389cae7a9f2fb218fc00bd3692b9249fce84->enter($__internal_485c4b5c69f20662f2326dbba6e1389cae7a9f2fb218fc00bd3692b9249fce84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "    \t";
        
        $__internal_485c4b5c69f20662f2326dbba6e1389cae7a9f2fb218fc00bd3692b9249fce84->leave($__internal_485c4b5c69f20662f2326dbba6e1389cae7a9f2fb218fc00bd3692b9249fce84_prof);

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
