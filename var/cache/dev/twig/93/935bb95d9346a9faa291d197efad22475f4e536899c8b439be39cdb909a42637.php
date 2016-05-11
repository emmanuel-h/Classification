<?php

/* @LIFOClassif/Platform/recherche.html.twig */
class __TwigTemplate_197a2bc7dbeeae78a123c058f6ba898579a32e6e18909d6330a667da26ba2579 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layout.html.twig", "@LIFOClassif/Platform/recherche.html.twig", 1);
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
        $__internal_0959a0877809a09d3e103b50237b109f62c2545005ea544557f5e4a003c4e915 = $this->env->getExtension("native_profiler");
        $__internal_0959a0877809a09d3e103b50237b109f62c2545005ea544557f5e4a003c4e915->enter($__internal_0959a0877809a09d3e103b50237b109f62c2545005ea544557f5e4a003c4e915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Platform/recherche.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0959a0877809a09d3e103b50237b109f62c2545005ea544557f5e4a003c4e915->leave($__internal_0959a0877809a09d3e103b50237b109f62c2545005ea544557f5e4a003c4e915_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a85feb05d75cc46af48a97709fd4f3e2b80416dd103ec06ebf76065ab7e9885b = $this->env->getExtension("native_profiler");
        $__internal_a85feb05d75cc46af48a97709fd4f3e2b80416dd103ec06ebf76065ab7e9885b->enter($__internal_a85feb05d75cc46af48a97709fd4f3e2b80416dd103ec06ebf76065ab7e9885b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Recherche";
        
        $__internal_a85feb05d75cc46af48a97709fd4f3e2b80416dd103ec06ebf76065ab7e9885b->leave($__internal_a85feb05d75cc46af48a97709fd4f3e2b80416dd103ec06ebf76065ab7e9885b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1d8764cf6311409ba9ffbe8daee373d22e3b36b2c7bf102e62795d915d0c31b4 = $this->env->getExtension("native_profiler");
        $__internal_1d8764cf6311409ba9ffbe8daee373d22e3b36b2c7bf102e62795d915d0c31b4->enter($__internal_1d8764cf6311409ba9ffbe8daee373d22e3b36b2c7bf102e62795d915d0c31b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
\t<p>
\t\tPour rechercher un tesson suivant certains critères
\t</p>
";
        
        $__internal_1d8764cf6311409ba9ffbe8daee373d22e3b36b2c7bf102e62795d915d0c31b4->leave($__internal_1d8764cf6311409ba9ffbe8daee373d22e3b36b2c7bf102e62795d915d0c31b4_prof);

    }

    public function getTemplateName()
    {
        return "@LIFOClassif/Platform/recherche.html.twig";
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
/* {% block title %}{{ parent() }} - Recherche{% endblock %}*/
/* */
/* {% block body %}*/
/* 	{{ parent() }}*/
/* 	<p>*/
/* 		Pour rechercher un tesson suivant certains critères*/
/* 	</p>*/
/* {% endblock %}*/
