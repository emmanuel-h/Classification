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
        $__internal_a9f1370fba03c0e79710f7e9a7ff220b27b98339dcccdf830cb3d2a18961247b = $this->env->getExtension("native_profiler");
        $__internal_a9f1370fba03c0e79710f7e9a7ff220b27b98339dcccdf830cb3d2a18961247b->enter($__internal_a9f1370fba03c0e79710f7e9a7ff220b27b98339dcccdf830cb3d2a18961247b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9f1370fba03c0e79710f7e9a7ff220b27b98339dcccdf830cb3d2a18961247b->leave($__internal_a9f1370fba03c0e79710f7e9a7ff220b27b98339dcccdf830cb3d2a18961247b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_21bff7fa99907a00ffce9afdd1b0327d6da3811f7f3fc00007dd50fd37244018 = $this->env->getExtension("native_profiler");
        $__internal_21bff7fa99907a00ffce9afdd1b0327d6da3811f7f3fc00007dd50fd37244018->enter($__internal_21bff7fa99907a00ffce9afdd1b0327d6da3811f7f3fc00007dd50fd37244018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_21bff7fa99907a00ffce9afdd1b0327d6da3811f7f3fc00007dd50fd37244018->leave($__internal_21bff7fa99907a00ffce9afdd1b0327d6da3811f7f3fc00007dd50fd37244018_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9f2842ab739e36d47d2c3dde434a68f2313cc413179ac0c330c5c5b3c230a58f = $this->env->getExtension("native_profiler");
        $__internal_9f2842ab739e36d47d2c3dde434a68f2313cc413179ac0c330c5c5b3c230a58f->enter($__internal_9f2842ab739e36d47d2c3dde434a68f2313cc413179ac0c330c5c5b3c230a58f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9f2842ab739e36d47d2c3dde434a68f2313cc413179ac0c330c5c5b3c230a58f->leave($__internal_9f2842ab739e36d47d2c3dde434a68f2313cc413179ac0c330c5c5b3c230a58f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4ab2b70fc9eb3f31c96be384318fd0e6485f497458b2b61ab3d8f40d5d0cc6e4 = $this->env->getExtension("native_profiler");
        $__internal_4ab2b70fc9eb3f31c96be384318fd0e6485f497458b2b61ab3d8f40d5d0cc6e4->enter($__internal_4ab2b70fc9eb3f31c96be384318fd0e6485f497458b2b61ab3d8f40d5d0cc6e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_4ab2b70fc9eb3f31c96be384318fd0e6485f497458b2b61ab3d8f40d5d0cc6e4->leave($__internal_4ab2b70fc9eb3f31c96be384318fd0e6485f497458b2b61ab3d8f40d5d0cc6e4_prof);

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
