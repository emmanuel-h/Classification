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
        $__internal_5c8319ac4c332080e20678cca714a0b53e91ca69cdc5a96b43f3bac68f023c85 = $this->env->getExtension("native_profiler");
        $__internal_5c8319ac4c332080e20678cca714a0b53e91ca69cdc5a96b43f3bac68f023c85->enter($__internal_5c8319ac4c332080e20678cca714a0b53e91ca69cdc5a96b43f3bac68f023c85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Platform:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c8319ac4c332080e20678cca714a0b53e91ca69cdc5a96b43f3bac68f023c85->leave($__internal_5c8319ac4c332080e20678cca714a0b53e91ca69cdc5a96b43f3bac68f023c85_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3cb841bc4999e9fb8714c614c8b38fb306071f4d5ce827ed8ea6cfc3443eaeaa = $this->env->getExtension("native_profiler");
        $__internal_3cb841bc4999e9fb8714c614c8b38fb306071f4d5ce827ed8ea6cfc3443eaeaa->enter($__internal_3cb841bc4999e9fb8714c614c8b38fb306071f4d5ce827ed8ea6cfc3443eaeaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index";
        
        $__internal_3cb841bc4999e9fb8714c614c8b38fb306071f4d5ce827ed8ea6cfc3443eaeaa->leave($__internal_3cb841bc4999e9fb8714c614c8b38fb306071f4d5ce827ed8ea6cfc3443eaeaa_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_371458174c801a2a1c82aab3e46a3afe4b74f7babf2498c33a11d8a711e3f6d4 = $this->env->getExtension("native_profiler");
        $__internal_371458174c801a2a1c82aab3e46a3afe4b74f7babf2498c33a11d8a711e3f6d4->enter($__internal_371458174c801a2a1c82aab3e46a3afe4b74f7babf2498c33a11d8a711e3f6d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<p>
\t\tBienvenue sur l'outil d'aide à la classification de tesson
\t</p>
";
        
        $__internal_371458174c801a2a1c82aab3e46a3afe4b74f7babf2498c33a11d8a711e3f6d4->leave($__internal_371458174c801a2a1c82aab3e46a3afe4b74f7babf2498c33a11d8a711e3f6d4_prof);

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
