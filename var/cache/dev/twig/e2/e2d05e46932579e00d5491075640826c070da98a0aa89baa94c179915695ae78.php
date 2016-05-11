<?php

/* LIFOClassifBundle:Platform:tesson.html.twig */
class __TwigTemplate_15d248a09ffea0fb775fe3f599fcd38529064bdfc740d5528a4417b15b6c16ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layout.html.twig", "LIFOClassifBundle:Platform:tesson.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LIFOClassifBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8d8fb2a8acc2b769b0ab0b303677dd5c250d75f9d31c2384d02beb2d5c97bb7b = $this->env->getExtension("native_profiler");
        $__internal_8d8fb2a8acc2b769b0ab0b303677dd5c250d75f9d31c2384d02beb2d5c97bb7b->enter($__internal_8d8fb2a8acc2b769b0ab0b303677dd5c250d75f9d31c2384d02beb2d5c97bb7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Platform:tesson.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d8fb2a8acc2b769b0ab0b303677dd5c250d75f9d31c2384d02beb2d5c97bb7b->leave($__internal_8d8fb2a8acc2b769b0ab0b303677dd5c250d75f9d31c2384d02beb2d5c97bb7b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_62ad305a08bc797ec8325b734e5c32d11f160fe13b14750d70bb372e4d0c752a = $this->env->getExtension("native_profiler");
        $__internal_62ad305a08bc797ec8325b734e5c32d11f160fe13b14750d70bb372e4d0c752a->enter($__internal_62ad305a08bc797ec8325b734e5c32d11f160fe13b14750d70bb372e4d0c752a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Tesson";
        
        $__internal_62ad305a08bc797ec8325b734e5c32d11f160fe13b14750d70bb372e4d0c752a->leave($__internal_62ad305a08bc797ec8325b734e5c32d11f160fe13b14750d70bb372e4d0c752a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_912960f10b719c84b942ea79c9766aad1c018ef76245ce80cb8d1491c0e57dc7 = $this->env->getExtension("native_profiler");
        $__internal_912960f10b719c84b942ea79c9766aad1c018ef76245ce80cb8d1491c0e57dc7->enter($__internal_912960f10b719c84b942ea79c9766aad1c018ef76245ce80cb8d1491c0e57dc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
\t<p>
\t\tPour travailler sur un tesson
\t</p>
";
        
        $__internal_912960f10b719c84b942ea79c9766aad1c018ef76245ce80cb8d1491c0e57dc7->leave($__internal_912960f10b719c84b942ea79c9766aad1c018ef76245ce80cb8d1491c0e57dc7_prof);

    }

    public function getTemplateName()
    {
        return "LIFOClassifBundle:Platform:tesson.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 6,  48 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "LIFOClassifBundle::layout.html.twig" %}*/
/* */
/* {% block title %}{{ parent() }} - Tesson{% endblock %}*/
/* */
/* {% block body %}*/
/* 	{{ parent() }}*/
/* 	<p>*/
/* 		Pour travailler sur un tesson*/
/* 	</p>*/
/* {% endblock %}*/
