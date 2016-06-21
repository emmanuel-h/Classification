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
        $__internal_6821aa27572c8605cfd2a1fe89f08e4ae46e1c7cff1e42c15919b715f639445e = $this->env->getExtension("native_profiler");
        $__internal_6821aa27572c8605cfd2a1fe89f08e4ae46e1c7cff1e42c15919b715f639445e->enter($__internal_6821aa27572c8605cfd2a1fe89f08e4ae46e1c7cff1e42c15919b715f639445e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6821aa27572c8605cfd2a1fe89f08e4ae46e1c7cff1e42c15919b715f639445e->leave($__internal_6821aa27572c8605cfd2a1fe89f08e4ae46e1c7cff1e42c15919b715f639445e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_51318344e19d63e4bfa73236a462ea22490a2044dc4680a09ba69b0ab0188fa4 = $this->env->getExtension("native_profiler");
        $__internal_51318344e19d63e4bfa73236a462ea22490a2044dc4680a09ba69b0ab0188fa4->enter($__internal_51318344e19d63e4bfa73236a462ea22490a2044dc4680a09ba69b0ab0188fa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_51318344e19d63e4bfa73236a462ea22490a2044dc4680a09ba69b0ab0188fa4->leave($__internal_51318344e19d63e4bfa73236a462ea22490a2044dc4680a09ba69b0ab0188fa4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_535d64da761ef15842acca17b5dca626202ee42e9f2182e4c6c588346462c54c = $this->env->getExtension("native_profiler");
        $__internal_535d64da761ef15842acca17b5dca626202ee42e9f2182e4c6c588346462c54c->enter($__internal_535d64da761ef15842acca17b5dca626202ee42e9f2182e4c6c588346462c54c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_535d64da761ef15842acca17b5dca626202ee42e9f2182e4c6c588346462c54c->leave($__internal_535d64da761ef15842acca17b5dca626202ee42e9f2182e4c6c588346462c54c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_93ab00c4d26946da68616ebbf14e5d82f65f8f90f6ade489f3a0bf0a5ed6e181 = $this->env->getExtension("native_profiler");
        $__internal_93ab00c4d26946da68616ebbf14e5d82f65f8f90f6ade489f3a0bf0a5ed6e181->enter($__internal_93ab00c4d26946da68616ebbf14e5d82f65f8f90f6ade489f3a0bf0a5ed6e181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_93ab00c4d26946da68616ebbf14e5d82f65f8f90f6ade489f3a0bf0a5ed6e181->leave($__internal_93ab00c4d26946da68616ebbf14e5d82f65f8f90f6ade489f3a0bf0a5ed6e181_prof);

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
