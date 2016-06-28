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
        $__internal_e505a5da8fb1e6e8fe8c78fa8e37c19c39b0e3e6176b4b56671e621b2f21ca58 = $this->env->getExtension("native_profiler");
        $__internal_e505a5da8fb1e6e8fe8c78fa8e37c19c39b0e3e6176b4b56671e621b2f21ca58->enter($__internal_e505a5da8fb1e6e8fe8c78fa8e37c19c39b0e3e6176b4b56671e621b2f21ca58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Platform/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e505a5da8fb1e6e8fe8c78fa8e37c19c39b0e3e6176b4b56671e621b2f21ca58->leave($__internal_e505a5da8fb1e6e8fe8c78fa8e37c19c39b0e3e6176b4b56671e621b2f21ca58_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_729a665905f440cfe150cd3c01d6c5f2b1d841d0f691532cf2e1f82b96a901b5 = $this->env->getExtension("native_profiler");
        $__internal_729a665905f440cfe150cd3c01d6c5f2b1d841d0f691532cf2e1f82b96a901b5->enter($__internal_729a665905f440cfe150cd3c01d6c5f2b1d841d0f691532cf2e1f82b96a901b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index";
        
        $__internal_729a665905f440cfe150cd3c01d6c5f2b1d841d0f691532cf2e1f82b96a901b5->leave($__internal_729a665905f440cfe150cd3c01d6c5f2b1d841d0f691532cf2e1f82b96a901b5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_76c26f22c92c603b058f8546732caf6c19014118c521a84468549da645c877c5 = $this->env->getExtension("native_profiler");
        $__internal_76c26f22c92c603b058f8546732caf6c19014118c521a84468549da645c877c5->enter($__internal_76c26f22c92c603b058f8546732caf6c19014118c521a84468549da645c877c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<p>
\t\tBienvenue sur l'outil d'aide à la classification de tesson
\t</p>
";
        
        $__internal_76c26f22c92c603b058f8546732caf6c19014118c521a84468549da645c877c5->leave($__internal_76c26f22c92c603b058f8546732caf6c19014118c521a84468549da645c877c5_prof);

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
