<?php

/* LIFOClassifBundle:Platform:admin.html.twig */
class __TwigTemplate_d00e8cfbb7d8176720143bab1638307c0c77fcbe164a7434a464cdb060dd5c25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layout.html.twig", "LIFOClassifBundle:Platform:admin.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'LIFOClassif_body' => array($this, 'block_LIFOClassif_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LIFOClassifBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_689394bcb10d825c36fe639ce4a69534b96adf162545179cfd48fe80800f50d0 = $this->env->getExtension("native_profiler");
        $__internal_689394bcb10d825c36fe639ce4a69534b96adf162545179cfd48fe80800f50d0->enter($__internal_689394bcb10d825c36fe639ce4a69534b96adf162545179cfd48fe80800f50d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Platform:admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_689394bcb10d825c36fe639ce4a69534b96adf162545179cfd48fe80800f50d0->leave($__internal_689394bcb10d825c36fe639ce4a69534b96adf162545179cfd48fe80800f50d0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_454f4472989cab5e5a24f60c0275c5ab981f3299f20ea3ad4d628cfd071bacc7 = $this->env->getExtension("native_profiler");
        $__internal_454f4472989cab5e5a24f60c0275c5ab981f3299f20ea3ad4d628cfd071bacc7->enter($__internal_454f4472989cab5e5a24f60c0275c5ab981f3299f20ea3ad4d628cfd071bacc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Upload";
        
        $__internal_454f4472989cab5e5a24f60c0275c5ab981f3299f20ea3ad4d628cfd071bacc7->leave($__internal_454f4472989cab5e5a24f60c0275c5ab981f3299f20ea3ad4d628cfd071bacc7_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_23b421df51c2f394991c9a3f2eba25700ff86860b34860f6d45a1488d996e291 = $this->env->getExtension("native_profiler");
        $__internal_23b421df51c2f394991c9a3f2eba25700ff86860b34860f6d45a1488d996e291->enter($__internal_23b421df51c2f394991c9a3f2eba25700ff86860b34860f6d45a1488d996e291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "
<h1> Administration </h1>

";
        
        $__internal_23b421df51c2f394991c9a3f2eba25700ff86860b34860f6d45a1488d996e291->leave($__internal_23b421df51c2f394991c9a3f2eba25700ff86860b34860f6d45a1488d996e291_prof);

    }

    public function getTemplateName()
    {
        return "LIFOClassifBundle:Platform:admin.html.twig";
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
/* {% block title %}{{ parent() }} - Upload{% endblock %}*/
/* */
/* {% block LIFOClassif_body %}*/
/* */
/* <h1> Administration </h1>*/
/* */
/* {% endblock %}*/
