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
        $__internal_daf126a77a59d82a785304ec21fa06ed997ef01dea9316cba71ab3167ddccc59 = $this->env->getExtension("native_profiler");
        $__internal_daf126a77a59d82a785304ec21fa06ed997ef01dea9316cba71ab3167ddccc59->enter($__internal_daf126a77a59d82a785304ec21fa06ed997ef01dea9316cba71ab3167ddccc59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_daf126a77a59d82a785304ec21fa06ed997ef01dea9316cba71ab3167ddccc59->leave($__internal_daf126a77a59d82a785304ec21fa06ed997ef01dea9316cba71ab3167ddccc59_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5abc22894c28f840586464199dfb3c082264630cbcfc3dc0117d014521c830b2 = $this->env->getExtension("native_profiler");
        $__internal_5abc22894c28f840586464199dfb3c082264630cbcfc3dc0117d014521c830b2->enter($__internal_5abc22894c28f840586464199dfb3c082264630cbcfc3dc0117d014521c830b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5abc22894c28f840586464199dfb3c082264630cbcfc3dc0117d014521c830b2->leave($__internal_5abc22894c28f840586464199dfb3c082264630cbcfc3dc0117d014521c830b2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_841db9fdafca167a73761ba128d026529865df8da5daaf5207b1ca9354426b9c = $this->env->getExtension("native_profiler");
        $__internal_841db9fdafca167a73761ba128d026529865df8da5daaf5207b1ca9354426b9c->enter($__internal_841db9fdafca167a73761ba128d026529865df8da5daaf5207b1ca9354426b9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_841db9fdafca167a73761ba128d026529865df8da5daaf5207b1ca9354426b9c->leave($__internal_841db9fdafca167a73761ba128d026529865df8da5daaf5207b1ca9354426b9c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d085636c31d81b9250e5e044af3bb3c40587bfbfc4ae0a329074f6dbe81575e6 = $this->env->getExtension("native_profiler");
        $__internal_d085636c31d81b9250e5e044af3bb3c40587bfbfc4ae0a329074f6dbe81575e6->enter($__internal_d085636c31d81b9250e5e044af3bb3c40587bfbfc4ae0a329074f6dbe81575e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_d085636c31d81b9250e5e044af3bb3c40587bfbfc4ae0a329074f6dbe81575e6->leave($__internal_d085636c31d81b9250e5e044af3bb3c40587bfbfc4ae0a329074f6dbe81575e6_prof);

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
