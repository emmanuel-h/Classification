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
        $__internal_0f797a80e9975a1d1c087c6306982abc4ea765a387d13ebd2ae7f376d63cb7dd = $this->env->getExtension("native_profiler");
        $__internal_0f797a80e9975a1d1c087c6306982abc4ea765a387d13ebd2ae7f376d63cb7dd->enter($__internal_0f797a80e9975a1d1c087c6306982abc4ea765a387d13ebd2ae7f376d63cb7dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Platform:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f797a80e9975a1d1c087c6306982abc4ea765a387d13ebd2ae7f376d63cb7dd->leave($__internal_0f797a80e9975a1d1c087c6306982abc4ea765a387d13ebd2ae7f376d63cb7dd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c33b22eb57165ef44da4d69747f7ed0ae5b7b03bd48bab6cb017b539b4672fb2 = $this->env->getExtension("native_profiler");
        $__internal_c33b22eb57165ef44da4d69747f7ed0ae5b7b03bd48bab6cb017b539b4672fb2->enter($__internal_c33b22eb57165ef44da4d69747f7ed0ae5b7b03bd48bab6cb017b539b4672fb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index";
        
        $__internal_c33b22eb57165ef44da4d69747f7ed0ae5b7b03bd48bab6cb017b539b4672fb2->leave($__internal_c33b22eb57165ef44da4d69747f7ed0ae5b7b03bd48bab6cb017b539b4672fb2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e829a6f4c898aa27fe92072ceeedb1ec33bc393a9e45e09ebbeac18f12079601 = $this->env->getExtension("native_profiler");
        $__internal_e829a6f4c898aa27fe92072ceeedb1ec33bc393a9e45e09ebbeac18f12079601->enter($__internal_e829a6f4c898aa27fe92072ceeedb1ec33bc393a9e45e09ebbeac18f12079601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<p>
\t\tBienvenue sur l'outil d'aide à la classification de tesson
\t</p>
";
        
        $__internal_e829a6f4c898aa27fe92072ceeedb1ec33bc393a9e45e09ebbeac18f12079601->leave($__internal_e829a6f4c898aa27fe92072ceeedb1ec33bc393a9e45e09ebbeac18f12079601_prof);

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
