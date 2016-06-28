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
        $__internal_62636a0869d7d328d4e5dddf49e4858667bb71b9ad974985545f17c14eaee74b = $this->env->getExtension("native_profiler");
        $__internal_62636a0869d7d328d4e5dddf49e4858667bb71b9ad974985545f17c14eaee74b->enter($__internal_62636a0869d7d328d4e5dddf49e4858667bb71b9ad974985545f17c14eaee74b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle::layoutGeneral.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62636a0869d7d328d4e5dddf49e4858667bb71b9ad974985545f17c14eaee74b->leave($__internal_62636a0869d7d328d4e5dddf49e4858667bb71b9ad974985545f17c14eaee74b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1fd8946fb82e32a29643d2f094f09f85b74bba5dbe6cdd9da348d20489846168 = $this->env->getExtension("native_profiler");
        $__internal_1fd8946fb82e32a29643d2f094f09f85b74bba5dbe6cdd9da348d20489846168->enter($__internal_1fd8946fb82e32a29643d2f094f09f85b74bba5dbe6cdd9da348d20489846168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    \t";
        // line 5
        $this->displayBlock('LIFOClassif_body', $context, $blocks);
        // line 7
        echo "    \t
    ";
        
        $__internal_1fd8946fb82e32a29643d2f094f09f85b74bba5dbe6cdd9da348d20489846168->leave($__internal_1fd8946fb82e32a29643d2f094f09f85b74bba5dbe6cdd9da348d20489846168_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_3f02e0383bc58be86ec53944c10330b313fc738dd4b6c5687861f8018a3ea1d5 = $this->env->getExtension("native_profiler");
        $__internal_3f02e0383bc58be86ec53944c10330b313fc738dd4b6c5687861f8018a3ea1d5->enter($__internal_3f02e0383bc58be86ec53944c10330b313fc738dd4b6c5687861f8018a3ea1d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "    \t";
        
        $__internal_3f02e0383bc58be86ec53944c10330b313fc738dd4b6c5687861f8018a3ea1d5->leave($__internal_3f02e0383bc58be86ec53944c10330b313fc738dd4b6c5687861f8018a3ea1d5_prof);

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
