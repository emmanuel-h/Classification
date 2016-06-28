<?php

/* LIFOClassifBundle:Platform:index.html.twig */
class __TwigTemplate_45469c73f234b31b6bec59b12ff8781d17bcdaf17f0e66c248db4e16b9295993 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layoutGeneral.html.twig", "LIFOClassifBundle:Platform:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LIFOClassifBundle::layoutGeneral.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3bb8def89e29ca3191cd2544312d8e7c3db01ed252904d7df6774825cb651440 = $this->env->getExtension("native_profiler");
        $__internal_3bb8def89e29ca3191cd2544312d8e7c3db01ed252904d7df6774825cb651440->enter($__internal_3bb8def89e29ca3191cd2544312d8e7c3db01ed252904d7df6774825cb651440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Platform:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3bb8def89e29ca3191cd2544312d8e7c3db01ed252904d7df6774825cb651440->leave($__internal_3bb8def89e29ca3191cd2544312d8e7c3db01ed252904d7df6774825cb651440_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2e803226516a3a4c9fc8cb4f64249dfb257d5ec08a60046126e78d9088607346 = $this->env->getExtension("native_profiler");
        $__internal_2e803226516a3a4c9fc8cb4f64249dfb257d5ec08a60046126e78d9088607346->enter($__internal_2e803226516a3a4c9fc8cb4f64249dfb257d5ec08a60046126e78d9088607346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index";
        
        $__internal_2e803226516a3a4c9fc8cb4f64249dfb257d5ec08a60046126e78d9088607346->leave($__internal_2e803226516a3a4c9fc8cb4f64249dfb257d5ec08a60046126e78d9088607346_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a2a6f7235fa609fd2fc206c1403c8dd7e19e50ceb3b2674b0fb7c64ac6904c2f = $this->env->getExtension("native_profiler");
        $__internal_a2a6f7235fa609fd2fc206c1403c8dd7e19e50ceb3b2674b0fb7c64ac6904c2f->enter($__internal_a2a6f7235fa609fd2fc206c1403c8dd7e19e50ceb3b2674b0fb7c64ac6904c2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<p>
\t\tBienvenue sur l'outil d'aide à la classification de tesson
\t</p>
";
        
        $__internal_a2a6f7235fa609fd2fc206c1403c8dd7e19e50ceb3b2674b0fb7c64ac6904c2f->leave($__internal_a2a6f7235fa609fd2fc206c1403c8dd7e19e50ceb3b2674b0fb7c64ac6904c2f_prof);

    }

    public function getTemplateName()
    {
        return "LIFOClassifBundle:Platform:index.html.twig";
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
/* {% extends "LIFOClassifBundle::layoutGeneral.html.twig" %}*/
/* */
/* {% block title %}{{ parent() }} - Index{% endblock %}*/
/* */
/* {% block body %}*/
/* 	<p>*/
/* 		Bienvenue sur l'outil d'aide à la classification de tesson*/
/* 	</p>*/
/* {% endblock %}*/
