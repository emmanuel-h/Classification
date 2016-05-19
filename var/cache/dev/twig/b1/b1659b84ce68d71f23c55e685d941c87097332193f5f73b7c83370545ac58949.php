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
        $__internal_5906d5cb94f3780b69053c02979b8c6d0d2d290d499eb0b8d6133d0e60f72a3e = $this->env->getExtension("native_profiler");
        $__internal_5906d5cb94f3780b69053c02979b8c6d0d2d290d499eb0b8d6133d0e60f72a3e->enter($__internal_5906d5cb94f3780b69053c02979b8c6d0d2d290d499eb0b8d6133d0e60f72a3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Platform:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5906d5cb94f3780b69053c02979b8c6d0d2d290d499eb0b8d6133d0e60f72a3e->leave($__internal_5906d5cb94f3780b69053c02979b8c6d0d2d290d499eb0b8d6133d0e60f72a3e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_45ff5877b210312f3e72c851ac0a2ddea88d56d5e51c87a04ca098d79ca32bd0 = $this->env->getExtension("native_profiler");
        $__internal_45ff5877b210312f3e72c851ac0a2ddea88d56d5e51c87a04ca098d79ca32bd0->enter($__internal_45ff5877b210312f3e72c851ac0a2ddea88d56d5e51c87a04ca098d79ca32bd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index";
        
        $__internal_45ff5877b210312f3e72c851ac0a2ddea88d56d5e51c87a04ca098d79ca32bd0->leave($__internal_45ff5877b210312f3e72c851ac0a2ddea88d56d5e51c87a04ca098d79ca32bd0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e1331bc46574276e2427f0d96173a6a07ad839faef8e88375fb786e78b01bae4 = $this->env->getExtension("native_profiler");
        $__internal_e1331bc46574276e2427f0d96173a6a07ad839faef8e88375fb786e78b01bae4->enter($__internal_e1331bc46574276e2427f0d96173a6a07ad839faef8e88375fb786e78b01bae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<p>
\t\tBienvenue sur l'outil d'aide à la classification de tesson
\t</p>
";
        
        $__internal_e1331bc46574276e2427f0d96173a6a07ad839faef8e88375fb786e78b01bae4->leave($__internal_e1331bc46574276e2427f0d96173a6a07ad839faef8e88375fb786e78b01bae4_prof);

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
