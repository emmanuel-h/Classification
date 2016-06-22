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
        $__internal_6aa30609ba4e6f53753a08dd87712cba52d6bf94b33e7377a1d1cbd316fbee44 = $this->env->getExtension("native_profiler");
        $__internal_6aa30609ba4e6f53753a08dd87712cba52d6bf94b33e7377a1d1cbd316fbee44->enter($__internal_6aa30609ba4e6f53753a08dd87712cba52d6bf94b33e7377a1d1cbd316fbee44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Platform/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6aa30609ba4e6f53753a08dd87712cba52d6bf94b33e7377a1d1cbd316fbee44->leave($__internal_6aa30609ba4e6f53753a08dd87712cba52d6bf94b33e7377a1d1cbd316fbee44_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6a8ff68acc7c4087c582200cca0b37b960cbd3c0d9c08fa530a8c63fc8800e2c = $this->env->getExtension("native_profiler");
        $__internal_6a8ff68acc7c4087c582200cca0b37b960cbd3c0d9c08fa530a8c63fc8800e2c->enter($__internal_6a8ff68acc7c4087c582200cca0b37b960cbd3c0d9c08fa530a8c63fc8800e2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index";
        
        $__internal_6a8ff68acc7c4087c582200cca0b37b960cbd3c0d9c08fa530a8c63fc8800e2c->leave($__internal_6a8ff68acc7c4087c582200cca0b37b960cbd3c0d9c08fa530a8c63fc8800e2c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d995ae19bf1b04ff69747aea94dc50f02e8a2268444e65dcd03c60652c1f9534 = $this->env->getExtension("native_profiler");
        $__internal_d995ae19bf1b04ff69747aea94dc50f02e8a2268444e65dcd03c60652c1f9534->enter($__internal_d995ae19bf1b04ff69747aea94dc50f02e8a2268444e65dcd03c60652c1f9534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<p>
\t\tBienvenue sur l'outil d'aide à la classification de tesson
\t</p>
";
        
        $__internal_d995ae19bf1b04ff69747aea94dc50f02e8a2268444e65dcd03c60652c1f9534->leave($__internal_d995ae19bf1b04ff69747aea94dc50f02e8a2268444e65dcd03c60652c1f9534_prof);

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
