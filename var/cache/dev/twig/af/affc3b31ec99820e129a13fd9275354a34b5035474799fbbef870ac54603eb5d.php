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
        $__internal_36730177f940a01473174a1eac89a3a7407f9ecdb70e712960f5ce6509686b16 = $this->env->getExtension("native_profiler");
        $__internal_36730177f940a01473174a1eac89a3a7407f9ecdb70e712960f5ce6509686b16->enter($__internal_36730177f940a01473174a1eac89a3a7407f9ecdb70e712960f5ce6509686b16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36730177f940a01473174a1eac89a3a7407f9ecdb70e712960f5ce6509686b16->leave($__internal_36730177f940a01473174a1eac89a3a7407f9ecdb70e712960f5ce6509686b16_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2ca523013f07e70ceacbcd410d4731c9bfe8f95b24132c203e118d40c3a90ca0 = $this->env->getExtension("native_profiler");
        $__internal_2ca523013f07e70ceacbcd410d4731c9bfe8f95b24132c203e118d40c3a90ca0->enter($__internal_2ca523013f07e70ceacbcd410d4731c9bfe8f95b24132c203e118d40c3a90ca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2ca523013f07e70ceacbcd410d4731c9bfe8f95b24132c203e118d40c3a90ca0->leave($__internal_2ca523013f07e70ceacbcd410d4731c9bfe8f95b24132c203e118d40c3a90ca0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_46bf37356c34960777427e66d1e58b2864f8a4b81d0ee8faefbbb5fe719ca48e = $this->env->getExtension("native_profiler");
        $__internal_46bf37356c34960777427e66d1e58b2864f8a4b81d0ee8faefbbb5fe719ca48e->enter($__internal_46bf37356c34960777427e66d1e58b2864f8a4b81d0ee8faefbbb5fe719ca48e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_46bf37356c34960777427e66d1e58b2864f8a4b81d0ee8faefbbb5fe719ca48e->leave($__internal_46bf37356c34960777427e66d1e58b2864f8a4b81d0ee8faefbbb5fe719ca48e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a4c8888f5996acff9f60c715aa8b05f1eaa94a61364a77d5db549d52524db896 = $this->env->getExtension("native_profiler");
        $__internal_a4c8888f5996acff9f60c715aa8b05f1eaa94a61364a77d5db549d52524db896->enter($__internal_a4c8888f5996acff9f60c715aa8b05f1eaa94a61364a77d5db549d52524db896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_a4c8888f5996acff9f60c715aa8b05f1eaa94a61364a77d5db549d52524db896->leave($__internal_a4c8888f5996acff9f60c715aa8b05f1eaa94a61364a77d5db549d52524db896_prof);

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
