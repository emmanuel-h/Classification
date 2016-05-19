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
        $__internal_7ca7d0defd71f0f719c5c7fa7d34d1f069c3e46b4c2db8f024facb6eec405416 = $this->env->getExtension("native_profiler");
        $__internal_7ca7d0defd71f0f719c5c7fa7d34d1f069c3e46b4c2db8f024facb6eec405416->enter($__internal_7ca7d0defd71f0f719c5c7fa7d34d1f069c3e46b4c2db8f024facb6eec405416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ca7d0defd71f0f719c5c7fa7d34d1f069c3e46b4c2db8f024facb6eec405416->leave($__internal_7ca7d0defd71f0f719c5c7fa7d34d1f069c3e46b4c2db8f024facb6eec405416_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c22788d5944a454cf9dac406005768fe2e501254531dccfdababe2841ac23663 = $this->env->getExtension("native_profiler");
        $__internal_c22788d5944a454cf9dac406005768fe2e501254531dccfdababe2841ac23663->enter($__internal_c22788d5944a454cf9dac406005768fe2e501254531dccfdababe2841ac23663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c22788d5944a454cf9dac406005768fe2e501254531dccfdababe2841ac23663->leave($__internal_c22788d5944a454cf9dac406005768fe2e501254531dccfdababe2841ac23663_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b0fea08718a62960b412de2486371c46661728c3a8de542064273be23f3aa20a = $this->env->getExtension("native_profiler");
        $__internal_b0fea08718a62960b412de2486371c46661728c3a8de542064273be23f3aa20a->enter($__internal_b0fea08718a62960b412de2486371c46661728c3a8de542064273be23f3aa20a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b0fea08718a62960b412de2486371c46661728c3a8de542064273be23f3aa20a->leave($__internal_b0fea08718a62960b412de2486371c46661728c3a8de542064273be23f3aa20a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f93efe8ecb1b398d27b274bcb484acbca70eee4ff9f9315e8666fc379a6c164a = $this->env->getExtension("native_profiler");
        $__internal_f93efe8ecb1b398d27b274bcb484acbca70eee4ff9f9315e8666fc379a6c164a->enter($__internal_f93efe8ecb1b398d27b274bcb484acbca70eee4ff9f9315e8666fc379a6c164a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_f93efe8ecb1b398d27b274bcb484acbca70eee4ff9f9315e8666fc379a6c164a->leave($__internal_f93efe8ecb1b398d27b274bcb484acbca70eee4ff9f9315e8666fc379a6c164a_prof);

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
