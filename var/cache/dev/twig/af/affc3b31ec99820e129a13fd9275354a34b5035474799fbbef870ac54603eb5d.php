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
        $__internal_faa53a4c454e09736a58dd5949f02b5fe64e22c17affd0e4a21b1f5b1fa9758e = $this->env->getExtension("native_profiler");
        $__internal_faa53a4c454e09736a58dd5949f02b5fe64e22c17affd0e4a21b1f5b1fa9758e->enter($__internal_faa53a4c454e09736a58dd5949f02b5fe64e22c17affd0e4a21b1f5b1fa9758e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_faa53a4c454e09736a58dd5949f02b5fe64e22c17affd0e4a21b1f5b1fa9758e->leave($__internal_faa53a4c454e09736a58dd5949f02b5fe64e22c17affd0e4a21b1f5b1fa9758e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f9525eeb39bf6b6a1297a80fcd009719b58720d75ae8870898a60ef3c6f289ce = $this->env->getExtension("native_profiler");
        $__internal_f9525eeb39bf6b6a1297a80fcd009719b58720d75ae8870898a60ef3c6f289ce->enter($__internal_f9525eeb39bf6b6a1297a80fcd009719b58720d75ae8870898a60ef3c6f289ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f9525eeb39bf6b6a1297a80fcd009719b58720d75ae8870898a60ef3c6f289ce->leave($__internal_f9525eeb39bf6b6a1297a80fcd009719b58720d75ae8870898a60ef3c6f289ce_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1d9c4d75e1af9f8a881f31b254431ba9dbdd34299ed1bb924e01dad097a64edc = $this->env->getExtension("native_profiler");
        $__internal_1d9c4d75e1af9f8a881f31b254431ba9dbdd34299ed1bb924e01dad097a64edc->enter($__internal_1d9c4d75e1af9f8a881f31b254431ba9dbdd34299ed1bb924e01dad097a64edc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1d9c4d75e1af9f8a881f31b254431ba9dbdd34299ed1bb924e01dad097a64edc->leave($__internal_1d9c4d75e1af9f8a881f31b254431ba9dbdd34299ed1bb924e01dad097a64edc_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d0921998a9a38b69516073348b5e9eda3f6dfc1cf6be9f08a962da1012e50845 = $this->env->getExtension("native_profiler");
        $__internal_d0921998a9a38b69516073348b5e9eda3f6dfc1cf6be9f08a962da1012e50845->enter($__internal_d0921998a9a38b69516073348b5e9eda3f6dfc1cf6be9f08a962da1012e50845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_d0921998a9a38b69516073348b5e9eda3f6dfc1cf6be9f08a962da1012e50845->leave($__internal_d0921998a9a38b69516073348b5e9eda3f6dfc1cf6be9f08a962da1012e50845_prof);

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
