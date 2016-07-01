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
        $__internal_daff257c0e8fe974ea5a07393dd23a70c20f8835a89b927e6c9ca846a578fdc9 = $this->env->getExtension("native_profiler");
        $__internal_daff257c0e8fe974ea5a07393dd23a70c20f8835a89b927e6c9ca846a578fdc9->enter($__internal_daff257c0e8fe974ea5a07393dd23a70c20f8835a89b927e6c9ca846a578fdc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Platform/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_daff257c0e8fe974ea5a07393dd23a70c20f8835a89b927e6c9ca846a578fdc9->leave($__internal_daff257c0e8fe974ea5a07393dd23a70c20f8835a89b927e6c9ca846a578fdc9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6ce70485375cc7344f19a828548582af103c1821a4ceb64377f21df51e03c093 = $this->env->getExtension("native_profiler");
        $__internal_6ce70485375cc7344f19a828548582af103c1821a4ceb64377f21df51e03c093->enter($__internal_6ce70485375cc7344f19a828548582af103c1821a4ceb64377f21df51e03c093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index";
        
        $__internal_6ce70485375cc7344f19a828548582af103c1821a4ceb64377f21df51e03c093->leave($__internal_6ce70485375cc7344f19a828548582af103c1821a4ceb64377f21df51e03c093_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3a28ac5689f57cab96bd50cc7f1003eaa347f6e233f1f63f4f7953c1474c5dfb = $this->env->getExtension("native_profiler");
        $__internal_3a28ac5689f57cab96bd50cc7f1003eaa347f6e233f1f63f4f7953c1474c5dfb->enter($__internal_3a28ac5689f57cab96bd50cc7f1003eaa347f6e233f1f63f4f7953c1474c5dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<p>
\t\tBienvenue sur l'outil d'aide à la classification de tesson
\t</p>
";
        
        $__internal_3a28ac5689f57cab96bd50cc7f1003eaa347f6e233f1f63f4f7953c1474c5dfb->leave($__internal_3a28ac5689f57cab96bd50cc7f1003eaa347f6e233f1f63f4f7953c1474c5dfb_prof);

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
