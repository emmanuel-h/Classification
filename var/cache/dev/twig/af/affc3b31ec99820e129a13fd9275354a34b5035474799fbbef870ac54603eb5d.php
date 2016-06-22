<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_c0360af296ec0b5dcbb3cf65ecb1d65bc583972ab0a687bc14a51d5fc911d3d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b418834e77ecabccdcc69426c5986dbb6d6c4549d109e7b3acdbdf4ec3af0cd9 = $this->env->getExtension("native_profiler");
        $__internal_b418834e77ecabccdcc69426c5986dbb6d6c4549d109e7b3acdbdf4ec3af0cd9->enter($__internal_b418834e77ecabccdcc69426c5986dbb6d6c4549d109e7b3acdbdf4ec3af0cd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b418834e77ecabccdcc69426c5986dbb6d6c4549d109e7b3acdbdf4ec3af0cd9->leave($__internal_b418834e77ecabccdcc69426c5986dbb6d6c4549d109e7b3acdbdf4ec3af0cd9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8d186f2f84fc90315d63a8443d91c9473be716fe9f19d199fb8f466a06dd0bac = $this->env->getExtension("native_profiler");
        $__internal_8d186f2f84fc90315d63a8443d91c9473be716fe9f19d199fb8f466a06dd0bac->enter($__internal_8d186f2f84fc90315d63a8443d91c9473be716fe9f19d199fb8f466a06dd0bac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8d186f2f84fc90315d63a8443d91c9473be716fe9f19d199fb8f466a06dd0bac->leave($__internal_8d186f2f84fc90315d63a8443d91c9473be716fe9f19d199fb8f466a06dd0bac_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_efe7d1c438f40ed3f57c61dc9cdc10dad883a3cb106d0905f0147b8f492ee356 = $this->env->getExtension("native_profiler");
        $__internal_efe7d1c438f40ed3f57c61dc9cdc10dad883a3cb106d0905f0147b8f492ee356->enter($__internal_efe7d1c438f40ed3f57c61dc9cdc10dad883a3cb106d0905f0147b8f492ee356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_efe7d1c438f40ed3f57c61dc9cdc10dad883a3cb106d0905f0147b8f492ee356->leave($__internal_efe7d1c438f40ed3f57c61dc9cdc10dad883a3cb106d0905f0147b8f492ee356_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1c316e46b41af08ee12f88c4c31497370ef22481cc8d1a276f5f316a55cf1126 = $this->env->getExtension("native_profiler");
        $__internal_1c316e46b41af08ee12f88c4c31497370ef22481cc8d1a276f5f316a55cf1126->enter($__internal_1c316e46b41af08ee12f88c4c31497370ef22481cc8d1a276f5f316a55cf1126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_1c316e46b41af08ee12f88c4c31497370ef22481cc8d1a276f5f316a55cf1126->leave($__internal_1c316e46b41af08ee12f88c4c31497370ef22481cc8d1a276f5f316a55cf1126_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
