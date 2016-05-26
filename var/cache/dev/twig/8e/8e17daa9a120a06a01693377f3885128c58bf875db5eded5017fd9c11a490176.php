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
        $__internal_abf02bb486013f9387626329a68e9ab614ebbb349fea75a4fe03ec961e07ec0b = $this->env->getExtension("native_profiler");
        $__internal_abf02bb486013f9387626329a68e9ab614ebbb349fea75a4fe03ec961e07ec0b->enter($__internal_abf02bb486013f9387626329a68e9ab614ebbb349fea75a4fe03ec961e07ec0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Platform/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_abf02bb486013f9387626329a68e9ab614ebbb349fea75a4fe03ec961e07ec0b->leave($__internal_abf02bb486013f9387626329a68e9ab614ebbb349fea75a4fe03ec961e07ec0b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_73ccb903de786198b3e2cfaba6cb7d3eeb3082166cc7deb2405c93222ae97d51 = $this->env->getExtension("native_profiler");
        $__internal_73ccb903de786198b3e2cfaba6cb7d3eeb3082166cc7deb2405c93222ae97d51->enter($__internal_73ccb903de786198b3e2cfaba6cb7d3eeb3082166cc7deb2405c93222ae97d51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index";
        
        $__internal_73ccb903de786198b3e2cfaba6cb7d3eeb3082166cc7deb2405c93222ae97d51->leave($__internal_73ccb903de786198b3e2cfaba6cb7d3eeb3082166cc7deb2405c93222ae97d51_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_39fbd74dfea1d116d938dbdd4d81c22b16cc49765b5e651b104dfd57d9214f72 = $this->env->getExtension("native_profiler");
        $__internal_39fbd74dfea1d116d938dbdd4d81c22b16cc49765b5e651b104dfd57d9214f72->enter($__internal_39fbd74dfea1d116d938dbdd4d81c22b16cc49765b5e651b104dfd57d9214f72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<p>
\t\tBienvenue sur l'outil d'aide à la classification de tesson
\t</p>
";
        
        $__internal_39fbd74dfea1d116d938dbdd4d81c22b16cc49765b5e651b104dfd57d9214f72->leave($__internal_39fbd74dfea1d116d938dbdd4d81c22b16cc49765b5e651b104dfd57d9214f72_prof);

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
