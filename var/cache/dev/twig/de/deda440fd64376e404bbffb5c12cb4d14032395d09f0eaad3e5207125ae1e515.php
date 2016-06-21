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
        $__internal_7964b28da76a4e7d05f88935bb49c368d840df7c87877a6a2dc86d96482fdfef = $this->env->getExtension("native_profiler");
        $__internal_7964b28da76a4e7d05f88935bb49c368d840df7c87877a6a2dc86d96482fdfef->enter($__internal_7964b28da76a4e7d05f88935bb49c368d840df7c87877a6a2dc86d96482fdfef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle::layoutGeneral.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7964b28da76a4e7d05f88935bb49c368d840df7c87877a6a2dc86d96482fdfef->leave($__internal_7964b28da76a4e7d05f88935bb49c368d840df7c87877a6a2dc86d96482fdfef_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_05e58dcca66005e8adbca60c8a9a1f1edb748329caa47a51fbd69f6de6a9a37f = $this->env->getExtension("native_profiler");
        $__internal_05e58dcca66005e8adbca60c8a9a1f1edb748329caa47a51fbd69f6de6a9a37f->enter($__internal_05e58dcca66005e8adbca60c8a9a1f1edb748329caa47a51fbd69f6de6a9a37f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    \t";
        // line 5
        $this->displayBlock('LIFOClassif_body', $context, $blocks);
        // line 7
        echo "    \t
    ";
        
        $__internal_05e58dcca66005e8adbca60c8a9a1f1edb748329caa47a51fbd69f6de6a9a37f->leave($__internal_05e58dcca66005e8adbca60c8a9a1f1edb748329caa47a51fbd69f6de6a9a37f_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_1ade3ce7089a07248bfef669b8547c4c982d4f5d0832cce39a245d55661d6bea = $this->env->getExtension("native_profiler");
        $__internal_1ade3ce7089a07248bfef669b8547c4c982d4f5d0832cce39a245d55661d6bea->enter($__internal_1ade3ce7089a07248bfef669b8547c4c982d4f5d0832cce39a245d55661d6bea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "    \t";
        
        $__internal_1ade3ce7089a07248bfef669b8547c4c982d4f5d0832cce39a245d55661d6bea->leave($__internal_1ade3ce7089a07248bfef669b8547c4c982d4f5d0832cce39a245d55661d6bea_prof);

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
