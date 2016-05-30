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
        $__internal_0068e8302dd28f1c3412bfef6275d944b1e4ea7f25683de5aa492ffed54801e7 = $this->env->getExtension("native_profiler");
        $__internal_0068e8302dd28f1c3412bfef6275d944b1e4ea7f25683de5aa492ffed54801e7->enter($__internal_0068e8302dd28f1c3412bfef6275d944b1e4ea7f25683de5aa492ffed54801e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle::layoutGeneral.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0068e8302dd28f1c3412bfef6275d944b1e4ea7f25683de5aa492ffed54801e7->leave($__internal_0068e8302dd28f1c3412bfef6275d944b1e4ea7f25683de5aa492ffed54801e7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9391ec246a85a86e006617bbb87f310eae3ff3bcfc2f74c1cab85712eca86eb9 = $this->env->getExtension("native_profiler");
        $__internal_9391ec246a85a86e006617bbb87f310eae3ff3bcfc2f74c1cab85712eca86eb9->enter($__internal_9391ec246a85a86e006617bbb87f310eae3ff3bcfc2f74c1cab85712eca86eb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    \t";
        // line 5
        $this->displayBlock('LIFOClassif_body', $context, $blocks);
        // line 7
        echo "    \t
    ";
        
        $__internal_9391ec246a85a86e006617bbb87f310eae3ff3bcfc2f74c1cab85712eca86eb9->leave($__internal_9391ec246a85a86e006617bbb87f310eae3ff3bcfc2f74c1cab85712eca86eb9_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_1d20b4f9ebfcac3a09588cc90afad5ef19ea40035490a781f9d6e006104fc5c5 = $this->env->getExtension("native_profiler");
        $__internal_1d20b4f9ebfcac3a09588cc90afad5ef19ea40035490a781f9d6e006104fc5c5->enter($__internal_1d20b4f9ebfcac3a09588cc90afad5ef19ea40035490a781f9d6e006104fc5c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "    \t";
        
        $__internal_1d20b4f9ebfcac3a09588cc90afad5ef19ea40035490a781f9d6e006104fc5c5->leave($__internal_1d20b4f9ebfcac3a09588cc90afad5ef19ea40035490a781f9d6e006104fc5c5_prof);

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
