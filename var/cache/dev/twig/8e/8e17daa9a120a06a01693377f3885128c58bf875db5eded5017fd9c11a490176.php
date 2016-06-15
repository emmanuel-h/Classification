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
        $__internal_015cab9e176b77c5c533458134b797640080724b46b4f576d6c1ccadef69281b = $this->env->getExtension("native_profiler");
        $__internal_015cab9e176b77c5c533458134b797640080724b46b4f576d6c1ccadef69281b->enter($__internal_015cab9e176b77c5c533458134b797640080724b46b4f576d6c1ccadef69281b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Platform/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_015cab9e176b77c5c533458134b797640080724b46b4f576d6c1ccadef69281b->leave($__internal_015cab9e176b77c5c533458134b797640080724b46b4f576d6c1ccadef69281b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5ac9487a4add3f6d9b0135147a28ac797713f5f1b0e626e8195785394fbada10 = $this->env->getExtension("native_profiler");
        $__internal_5ac9487a4add3f6d9b0135147a28ac797713f5f1b0e626e8195785394fbada10->enter($__internal_5ac9487a4add3f6d9b0135147a28ac797713f5f1b0e626e8195785394fbada10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index";
        
        $__internal_5ac9487a4add3f6d9b0135147a28ac797713f5f1b0e626e8195785394fbada10->leave($__internal_5ac9487a4add3f6d9b0135147a28ac797713f5f1b0e626e8195785394fbada10_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_66693f241f36be2fa3100cd935e975bac33855992a77005311ef8b947967586c = $this->env->getExtension("native_profiler");
        $__internal_66693f241f36be2fa3100cd935e975bac33855992a77005311ef8b947967586c->enter($__internal_66693f241f36be2fa3100cd935e975bac33855992a77005311ef8b947967586c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<p>
\t\tBienvenue sur l'outil d'aide à la classification de tesson
\t</p>
";
        
        $__internal_66693f241f36be2fa3100cd935e975bac33855992a77005311ef8b947967586c->leave($__internal_66693f241f36be2fa3100cd935e975bac33855992a77005311ef8b947967586c_prof);

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
