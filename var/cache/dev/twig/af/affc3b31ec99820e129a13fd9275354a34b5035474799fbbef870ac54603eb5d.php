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
        $__internal_ad8a56529dec9884b59fea001b352d06d4e002409db0a5acf6a5f721c548313a = $this->env->getExtension("native_profiler");
        $__internal_ad8a56529dec9884b59fea001b352d06d4e002409db0a5acf6a5f721c548313a->enter($__internal_ad8a56529dec9884b59fea001b352d06d4e002409db0a5acf6a5f721c548313a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad8a56529dec9884b59fea001b352d06d4e002409db0a5acf6a5f721c548313a->leave($__internal_ad8a56529dec9884b59fea001b352d06d4e002409db0a5acf6a5f721c548313a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a62e5970fa37ed29dec505d127c697453a783331a9adb794c565216509090f05 = $this->env->getExtension("native_profiler");
        $__internal_a62e5970fa37ed29dec505d127c697453a783331a9adb794c565216509090f05->enter($__internal_a62e5970fa37ed29dec505d127c697453a783331a9adb794c565216509090f05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a62e5970fa37ed29dec505d127c697453a783331a9adb794c565216509090f05->leave($__internal_a62e5970fa37ed29dec505d127c697453a783331a9adb794c565216509090f05_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_272a7ac67a8897cec7e1de11683e54313dc5f4ed93498b39f40ac0e57938000a = $this->env->getExtension("native_profiler");
        $__internal_272a7ac67a8897cec7e1de11683e54313dc5f4ed93498b39f40ac0e57938000a->enter($__internal_272a7ac67a8897cec7e1de11683e54313dc5f4ed93498b39f40ac0e57938000a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_272a7ac67a8897cec7e1de11683e54313dc5f4ed93498b39f40ac0e57938000a->leave($__internal_272a7ac67a8897cec7e1de11683e54313dc5f4ed93498b39f40ac0e57938000a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_605de664027540044e4ddd964e1162ebf27d328c5a508d45d7a1fe9dce5f3cbb = $this->env->getExtension("native_profiler");
        $__internal_605de664027540044e4ddd964e1162ebf27d328c5a508d45d7a1fe9dce5f3cbb->enter($__internal_605de664027540044e4ddd964e1162ebf27d328c5a508d45d7a1fe9dce5f3cbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_605de664027540044e4ddd964e1162ebf27d328c5a508d45d7a1fe9dce5f3cbb->leave($__internal_605de664027540044e4ddd964e1162ebf27d328c5a508d45d7a1fe9dce5f3cbb_prof);

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
