<?php

/* LIFOClassifBundle:Platform:index.html.twig */
class __TwigTemplate_45469c73f234b31b6bec59b12ff8781d17bcdaf17f0e66c248db4e16b9295993 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layout.html.twig", "LIFOClassifBundle:Platform:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LIFOClassifBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a848ca54a337e1fb1bb793d9c5190daa3108324e496466021c03ad103826a2ac = $this->env->getExtension("native_profiler");
        $__internal_a848ca54a337e1fb1bb793d9c5190daa3108324e496466021c03ad103826a2ac->enter($__internal_a848ca54a337e1fb1bb793d9c5190daa3108324e496466021c03ad103826a2ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Platform:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a848ca54a337e1fb1bb793d9c5190daa3108324e496466021c03ad103826a2ac->leave($__internal_a848ca54a337e1fb1bb793d9c5190daa3108324e496466021c03ad103826a2ac_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_77439115d6b00e585ea4d22609434307b641e89cb878b2155ce8f983cfbe6225 = $this->env->getExtension("native_profiler");
        $__internal_77439115d6b00e585ea4d22609434307b641e89cb878b2155ce8f983cfbe6225->enter($__internal_77439115d6b00e585ea4d22609434307b641e89cb878b2155ce8f983cfbe6225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index";
        
        $__internal_77439115d6b00e585ea4d22609434307b641e89cb878b2155ce8f983cfbe6225->leave($__internal_77439115d6b00e585ea4d22609434307b641e89cb878b2155ce8f983cfbe6225_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_215b17d197e05d72afd29f54ea9b17d3a5898976ba7118b84f3de67e470faf30 = $this->env->getExtension("native_profiler");
        $__internal_215b17d197e05d72afd29f54ea9b17d3a5898976ba7118b84f3de67e470faf30->enter($__internal_215b17d197e05d72afd29f54ea9b17d3a5898976ba7118b84f3de67e470faf30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<p>
\t\tBienvenue sur l'outil d'aide à la classification de tesson
\t</p>
";
        
        $__internal_215b17d197e05d72afd29f54ea9b17d3a5898976ba7118b84f3de67e470faf30->leave($__internal_215b17d197e05d72afd29f54ea9b17d3a5898976ba7118b84f3de67e470faf30_prof);

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
/* {% extends "LIFOClassifBundle::layout.html.twig" %}*/
/* */
/* {% block title %}{{ parent() }} - Index{% endblock %}*/
/* */
/* {% block body %}*/
/* 	<p>*/
/* 		Bienvenue sur l'outil d'aide à la classification de tesson*/
/* 	</p>*/
/* {% endblock %}*/
