<?php

/* @LIFOClassif/Platform/tesson.html.twig */
class __TwigTemplate_5463be7e231f3b60aea970dd7720349d055558f68c39c80db5cc1614f7d755f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layout.html.twig", "@LIFOClassif/Platform/tesson.html.twig", 1);
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
        $__internal_7095393f87dbf7af30291efece92c20c906b91552f3b0a839621a070be72106a = $this->env->getExtension("native_profiler");
        $__internal_7095393f87dbf7af30291efece92c20c906b91552f3b0a839621a070be72106a->enter($__internal_7095393f87dbf7af30291efece92c20c906b91552f3b0a839621a070be72106a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Platform/tesson.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7095393f87dbf7af30291efece92c20c906b91552f3b0a839621a070be72106a->leave($__internal_7095393f87dbf7af30291efece92c20c906b91552f3b0a839621a070be72106a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_55494d4b3a18baf49e543d37b8ea24fe00694120fdbd425da65a4244eb441070 = $this->env->getExtension("native_profiler");
        $__internal_55494d4b3a18baf49e543d37b8ea24fe00694120fdbd425da65a4244eb441070->enter($__internal_55494d4b3a18baf49e543d37b8ea24fe00694120fdbd425da65a4244eb441070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Tesson";
        
        $__internal_55494d4b3a18baf49e543d37b8ea24fe00694120fdbd425da65a4244eb441070->leave($__internal_55494d4b3a18baf49e543d37b8ea24fe00694120fdbd425da65a4244eb441070_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_001e58783e9439c0f847309b18373dd8bf973adc0c6668b1d0aa478f925ebe99 = $this->env->getExtension("native_profiler");
        $__internal_001e58783e9439c0f847309b18373dd8bf973adc0c6668b1d0aa478f925ebe99->enter($__internal_001e58783e9439c0f847309b18373dd8bf973adc0c6668b1d0aa478f925ebe99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
\t<p>
\t\tPour travailler sur un tesson
\t</p>
";
        
        $__internal_001e58783e9439c0f847309b18373dd8bf973adc0c6668b1d0aa478f925ebe99->leave($__internal_001e58783e9439c0f847309b18373dd8bf973adc0c6668b1d0aa478f925ebe99_prof);

    }

    public function getTemplateName()
    {
        return "@LIFOClassif/Platform/tesson.html.twig";
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
