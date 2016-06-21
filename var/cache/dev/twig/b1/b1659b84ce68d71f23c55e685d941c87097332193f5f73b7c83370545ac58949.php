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
        $__internal_b8d8faa32dbe5b27c6f62474ef1038a710213e4b3602a6664619367e1c557c89 = $this->env->getExtension("native_profiler");
        $__internal_b8d8faa32dbe5b27c6f62474ef1038a710213e4b3602a6664619367e1c557c89->enter($__internal_b8d8faa32dbe5b27c6f62474ef1038a710213e4b3602a6664619367e1c557c89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Platform:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8d8faa32dbe5b27c6f62474ef1038a710213e4b3602a6664619367e1c557c89->leave($__internal_b8d8faa32dbe5b27c6f62474ef1038a710213e4b3602a6664619367e1c557c89_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_20b4cfe63731c86bf33ae4d300c896a23a3612513355a83e3fb6771d22f12cd1 = $this->env->getExtension("native_profiler");
        $__internal_20b4cfe63731c86bf33ae4d300c896a23a3612513355a83e3fb6771d22f12cd1->enter($__internal_20b4cfe63731c86bf33ae4d300c896a23a3612513355a83e3fb6771d22f12cd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index";
        
        $__internal_20b4cfe63731c86bf33ae4d300c896a23a3612513355a83e3fb6771d22f12cd1->leave($__internal_20b4cfe63731c86bf33ae4d300c896a23a3612513355a83e3fb6771d22f12cd1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8f32d29d35dc7b7293fa635eead4f4520b6889284c5bea067229c9eb864f7940 = $this->env->getExtension("native_profiler");
        $__internal_8f32d29d35dc7b7293fa635eead4f4520b6889284c5bea067229c9eb864f7940->enter($__internal_8f32d29d35dc7b7293fa635eead4f4520b6889284c5bea067229c9eb864f7940_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<p>
\t\tBienvenue sur l'outil d'aide à la classification de tesson
\t</p>
";
        
        $__internal_8f32d29d35dc7b7293fa635eead4f4520b6889284c5bea067229c9eb864f7940->leave($__internal_8f32d29d35dc7b7293fa635eead4f4520b6889284c5bea067229c9eb864f7940_prof);

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
