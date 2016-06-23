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
        $__internal_540e5fd49f12e3cbb7e07025445bf8f8dba29fed4b2349933382d2bca2a557ce = $this->env->getExtension("native_profiler");
        $__internal_540e5fd49f12e3cbb7e07025445bf8f8dba29fed4b2349933382d2bca2a557ce->enter($__internal_540e5fd49f12e3cbb7e07025445bf8f8dba29fed4b2349933382d2bca2a557ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Platform/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_540e5fd49f12e3cbb7e07025445bf8f8dba29fed4b2349933382d2bca2a557ce->leave($__internal_540e5fd49f12e3cbb7e07025445bf8f8dba29fed4b2349933382d2bca2a557ce_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_93ce1de245001c0efd6df8b108562441a4efcd6c6838008d9e38bcb481ba8e20 = $this->env->getExtension("native_profiler");
        $__internal_93ce1de245001c0efd6df8b108562441a4efcd6c6838008d9e38bcb481ba8e20->enter($__internal_93ce1de245001c0efd6df8b108562441a4efcd6c6838008d9e38bcb481ba8e20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index";
        
        $__internal_93ce1de245001c0efd6df8b108562441a4efcd6c6838008d9e38bcb481ba8e20->leave($__internal_93ce1de245001c0efd6df8b108562441a4efcd6c6838008d9e38bcb481ba8e20_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e7a42b4e14c75f44cedbbf34ae80ce5af43944be82674020eddcbb702cc0959 = $this->env->getExtension("native_profiler");
        $__internal_4e7a42b4e14c75f44cedbbf34ae80ce5af43944be82674020eddcbb702cc0959->enter($__internal_4e7a42b4e14c75f44cedbbf34ae80ce5af43944be82674020eddcbb702cc0959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<p>
\t\tBienvenue sur l'outil d'aide à la classification de tesson
\t</p>
";
        
        $__internal_4e7a42b4e14c75f44cedbbf34ae80ce5af43944be82674020eddcbb702cc0959->leave($__internal_4e7a42b4e14c75f44cedbbf34ae80ce5af43944be82674020eddcbb702cc0959_prof);

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
