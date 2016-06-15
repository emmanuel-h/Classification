<?php

/* @LIFOClassif/Platform/index.html.twig */
class __TwigTemplate_6c5727bd5ba52cac76d8756f50842e6d94474be7170dde15522885ae5d5c1fd2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layoutGeneral.html.twig", "@LIFOClassif/Platform/index.html.twig", 1);
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
        $__internal_92541f6b7eeaad2c9f03e2ee71494e55dc1985d3a1382c5cdb89858069792589 = $this->env->getExtension("native_profiler");
        $__internal_92541f6b7eeaad2c9f03e2ee71494e55dc1985d3a1382c5cdb89858069792589->enter($__internal_92541f6b7eeaad2c9f03e2ee71494e55dc1985d3a1382c5cdb89858069792589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Platform/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92541f6b7eeaad2c9f03e2ee71494e55dc1985d3a1382c5cdb89858069792589->leave($__internal_92541f6b7eeaad2c9f03e2ee71494e55dc1985d3a1382c5cdb89858069792589_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c53b1db381bea28d0a3fcae94524ea617950c7532a68181f2ecf114baae4280c = $this->env->getExtension("native_profiler");
        $__internal_c53b1db381bea28d0a3fcae94524ea617950c7532a68181f2ecf114baae4280c->enter($__internal_c53b1db381bea28d0a3fcae94524ea617950c7532a68181f2ecf114baae4280c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index";
        
        $__internal_c53b1db381bea28d0a3fcae94524ea617950c7532a68181f2ecf114baae4280c->leave($__internal_c53b1db381bea28d0a3fcae94524ea617950c7532a68181f2ecf114baae4280c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9d463088c4db10766b67fde99c82b4b707dc209458eb2a8b48355b8663b462a8 = $this->env->getExtension("native_profiler");
        $__internal_9d463088c4db10766b67fde99c82b4b707dc209458eb2a8b48355b8663b462a8->enter($__internal_9d463088c4db10766b67fde99c82b4b707dc209458eb2a8b48355b8663b462a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<p>
\t\tBienvenue sur l'outil d'aide à la classification de tesson
\t</p>
";
        
        $__internal_9d463088c4db10766b67fde99c82b4b707dc209458eb2a8b48355b8663b462a8->leave($__internal_9d463088c4db10766b67fde99c82b4b707dc209458eb2a8b48355b8663b462a8_prof);

    }

    public function getTemplateName()
    {
        return "@LIFOClassif/Platform/index.html.twig";
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
