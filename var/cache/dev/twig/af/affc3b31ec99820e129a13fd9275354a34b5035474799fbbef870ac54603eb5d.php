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
        $__internal_6052f5e96630b9eadddc6e3bb6d89c8f369a8b446c52f020cb7d646e6259a841 = $this->env->getExtension("native_profiler");
        $__internal_6052f5e96630b9eadddc6e3bb6d89c8f369a8b446c52f020cb7d646e6259a841->enter($__internal_6052f5e96630b9eadddc6e3bb6d89c8f369a8b446c52f020cb7d646e6259a841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6052f5e96630b9eadddc6e3bb6d89c8f369a8b446c52f020cb7d646e6259a841->leave($__internal_6052f5e96630b9eadddc6e3bb6d89c8f369a8b446c52f020cb7d646e6259a841_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_981e208674c10a87689634e5079a62f2fce1408a6c76a3377ad7630e5d223175 = $this->env->getExtension("native_profiler");
        $__internal_981e208674c10a87689634e5079a62f2fce1408a6c76a3377ad7630e5d223175->enter($__internal_981e208674c10a87689634e5079a62f2fce1408a6c76a3377ad7630e5d223175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_981e208674c10a87689634e5079a62f2fce1408a6c76a3377ad7630e5d223175->leave($__internal_981e208674c10a87689634e5079a62f2fce1408a6c76a3377ad7630e5d223175_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0e76df02b3530e13fb6fe1b972762c591c8e5979639d3bf911e17c9a34bfb5ea = $this->env->getExtension("native_profiler");
        $__internal_0e76df02b3530e13fb6fe1b972762c591c8e5979639d3bf911e17c9a34bfb5ea->enter($__internal_0e76df02b3530e13fb6fe1b972762c591c8e5979639d3bf911e17c9a34bfb5ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0e76df02b3530e13fb6fe1b972762c591c8e5979639d3bf911e17c9a34bfb5ea->leave($__internal_0e76df02b3530e13fb6fe1b972762c591c8e5979639d3bf911e17c9a34bfb5ea_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a8c04a65e39552a5920af49dd7fabecb00097e736226dbfbc94d65ba58d8854 = $this->env->getExtension("native_profiler");
        $__internal_8a8c04a65e39552a5920af49dd7fabecb00097e736226dbfbc94d65ba58d8854->enter($__internal_8a8c04a65e39552a5920af49dd7fabecb00097e736226dbfbc94d65ba58d8854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_8a8c04a65e39552a5920af49dd7fabecb00097e736226dbfbc94d65ba58d8854->leave($__internal_8a8c04a65e39552a5920af49dd7fabecb00097e736226dbfbc94d65ba58d8854_prof);

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
