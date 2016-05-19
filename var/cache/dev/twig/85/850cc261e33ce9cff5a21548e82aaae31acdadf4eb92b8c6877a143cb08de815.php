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
        $__internal_eee52191c547b5cbd16a17fcd6a2eac48029050991f3817187b366927c954c4e = $this->env->getExtension("native_profiler");
        $__internal_eee52191c547b5cbd16a17fcd6a2eac48029050991f3817187b366927c954c4e->enter($__internal_eee52191c547b5cbd16a17fcd6a2eac48029050991f3817187b366927c954c4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/layoutGeneral.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eee52191c547b5cbd16a17fcd6a2eac48029050991f3817187b366927c954c4e->leave($__internal_eee52191c547b5cbd16a17fcd6a2eac48029050991f3817187b366927c954c4e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_499da58a4052e626f8baf735fec9ab7189c8b2d9bc8a4097a0d5a7125dc91fb5 = $this->env->getExtension("native_profiler");
        $__internal_499da58a4052e626f8baf735fec9ab7189c8b2d9bc8a4097a0d5a7125dc91fb5->enter($__internal_499da58a4052e626f8baf735fec9ab7189c8b2d9bc8a4097a0d5a7125dc91fb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    \t";
        // line 5
        $this->displayBlock('LIFOClassif_body', $context, $blocks);
        // line 7
        echo "    \t
    ";
        
        $__internal_499da58a4052e626f8baf735fec9ab7189c8b2d9bc8a4097a0d5a7125dc91fb5->leave($__internal_499da58a4052e626f8baf735fec9ab7189c8b2d9bc8a4097a0d5a7125dc91fb5_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_8fb623903c8385bf1d7ac2fedeb8963ec0e75293f16bc6b4103f2764460f96f8 = $this->env->getExtension("native_profiler");
        $__internal_8fb623903c8385bf1d7ac2fedeb8963ec0e75293f16bc6b4103f2764460f96f8->enter($__internal_8fb623903c8385bf1d7ac2fedeb8963ec0e75293f16bc6b4103f2764460f96f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "    \t";
        
        $__internal_8fb623903c8385bf1d7ac2fedeb8963ec0e75293f16bc6b4103f2764460f96f8->leave($__internal_8fb623903c8385bf1d7ac2fedeb8963ec0e75293f16bc6b4103f2764460f96f8_prof);

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
