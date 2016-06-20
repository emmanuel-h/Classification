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
        $__internal_d2c866c8f4029637a1caf26adc73f0003c8f2a9f89979c3e15ec80c7da87f5c9 = $this->env->getExtension("native_profiler");
        $__internal_d2c866c8f4029637a1caf26adc73f0003c8f2a9f89979c3e15ec80c7da87f5c9->enter($__internal_d2c866c8f4029637a1caf26adc73f0003c8f2a9f89979c3e15ec80c7da87f5c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle::layoutAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2c866c8f4029637a1caf26adc73f0003c8f2a9f89979c3e15ec80c7da87f5c9->leave($__internal_d2c866c8f4029637a1caf26adc73f0003c8f2a9f89979c3e15ec80c7da87f5c9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dca9140b8f12cac298b186058a0a998e383dd30bb08721f28369665dff571551 = $this->env->getExtension("native_profiler");
        $__internal_dca9140b8f12cac298b186058a0a998e383dd30bb08721f28369665dff571551->enter($__internal_dca9140b8f12cac298b186058a0a998e383dd30bb08721f28369665dff571551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    \t";
        // line 5
        $this->displayBlock('LIFOClassif_body', $context, $blocks);
        // line 7
        echo "    \t
    ";
        
        $__internal_dca9140b8f12cac298b186058a0a998e383dd30bb08721f28369665dff571551->leave($__internal_dca9140b8f12cac298b186058a0a998e383dd30bb08721f28369665dff571551_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_4ece462dede5015f4c9d922618c024d53ec8b24d053ddd2eb11466e55fe88789 = $this->env->getExtension("native_profiler");
        $__internal_4ece462dede5015f4c9d922618c024d53ec8b24d053ddd2eb11466e55fe88789->enter($__internal_4ece462dede5015f4c9d922618c024d53ec8b24d053ddd2eb11466e55fe88789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "    \t";
        
        $__internal_4ece462dede5015f4c9d922618c024d53ec8b24d053ddd2eb11466e55fe88789->leave($__internal_4ece462dede5015f4c9d922618c024d53ec8b24d053ddd2eb11466e55fe88789_prof);

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
