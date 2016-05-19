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
        $__internal_4441369fdb66e670ddfe83c6628716ef57dbac134d3b04b89a7c19bb2979b9d0 = $this->env->getExtension("native_profiler");
        $__internal_4441369fdb66e670ddfe83c6628716ef57dbac134d3b04b89a7c19bb2979b9d0->enter($__internal_4441369fdb66e670ddfe83c6628716ef57dbac134d3b04b89a7c19bb2979b9d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Platform/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4441369fdb66e670ddfe83c6628716ef57dbac134d3b04b89a7c19bb2979b9d0->leave($__internal_4441369fdb66e670ddfe83c6628716ef57dbac134d3b04b89a7c19bb2979b9d0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_48ddd49eb797a8bdcab8b11e750b03df493e4c62fe42b7d48c422d401f7fa5c9 = $this->env->getExtension("native_profiler");
        $__internal_48ddd49eb797a8bdcab8b11e750b03df493e4c62fe42b7d48c422d401f7fa5c9->enter($__internal_48ddd49eb797a8bdcab8b11e750b03df493e4c62fe42b7d48c422d401f7fa5c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index";
        
        $__internal_48ddd49eb797a8bdcab8b11e750b03df493e4c62fe42b7d48c422d401f7fa5c9->leave($__internal_48ddd49eb797a8bdcab8b11e750b03df493e4c62fe42b7d48c422d401f7fa5c9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_bc94361bb0f53043a8833e63ed5e8e38035dc1af66dec7894875088f2ec85d53 = $this->env->getExtension("native_profiler");
        $__internal_bc94361bb0f53043a8833e63ed5e8e38035dc1af66dec7894875088f2ec85d53->enter($__internal_bc94361bb0f53043a8833e63ed5e8e38035dc1af66dec7894875088f2ec85d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<p>
\t\tBienvenue sur l'outil d'aide à la classification de tesson
\t</p>
";
        
        $__internal_bc94361bb0f53043a8833e63ed5e8e38035dc1af66dec7894875088f2ec85d53->leave($__internal_bc94361bb0f53043a8833e63ed5e8e38035dc1af66dec7894875088f2ec85d53_prof);

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
