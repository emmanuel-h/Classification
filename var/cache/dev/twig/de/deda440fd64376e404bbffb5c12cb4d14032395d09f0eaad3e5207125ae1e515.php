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
        $__internal_6c3e76010e3703cf228fa8d29a236fa43d689f09b98f319865ad75f259a38a86 = $this->env->getExtension("native_profiler");
        $__internal_6c3e76010e3703cf228fa8d29a236fa43d689f09b98f319865ad75f259a38a86->enter($__internal_6c3e76010e3703cf228fa8d29a236fa43d689f09b98f319865ad75f259a38a86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle::layoutGeneral.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c3e76010e3703cf228fa8d29a236fa43d689f09b98f319865ad75f259a38a86->leave($__internal_6c3e76010e3703cf228fa8d29a236fa43d689f09b98f319865ad75f259a38a86_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6d1d054511428a4cef7e0419983b6105aa84d35df11906d76a389d9930040152 = $this->env->getExtension("native_profiler");
        $__internal_6d1d054511428a4cef7e0419983b6105aa84d35df11906d76a389d9930040152->enter($__internal_6d1d054511428a4cef7e0419983b6105aa84d35df11906d76a389d9930040152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    \t";
        // line 5
        $this->displayBlock('LIFOClassif_body', $context, $blocks);
        // line 7
        echo "    \t
    ";
        
        $__internal_6d1d054511428a4cef7e0419983b6105aa84d35df11906d76a389d9930040152->leave($__internal_6d1d054511428a4cef7e0419983b6105aa84d35df11906d76a389d9930040152_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_56029b1f85718736fbfb490bfc6d090451dc103a1402b0462ae4cf593d5281c8 = $this->env->getExtension("native_profiler");
        $__internal_56029b1f85718736fbfb490bfc6d090451dc103a1402b0462ae4cf593d5281c8->enter($__internal_56029b1f85718736fbfb490bfc6d090451dc103a1402b0462ae4cf593d5281c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "    \t";
        
        $__internal_56029b1f85718736fbfb490bfc6d090451dc103a1402b0462ae4cf593d5281c8->leave($__internal_56029b1f85718736fbfb490bfc6d090451dc103a1402b0462ae4cf593d5281c8_prof);

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
