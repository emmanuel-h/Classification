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
        $__internal_1c7010c9027af0a8d28a6a5026848eac85a3a5074ef05f8dd09b7449d004e158 = $this->env->getExtension("native_profiler");
        $__internal_1c7010c9027af0a8d28a6a5026848eac85a3a5074ef05f8dd09b7449d004e158->enter($__internal_1c7010c9027af0a8d28a6a5026848eac85a3a5074ef05f8dd09b7449d004e158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c7010c9027af0a8d28a6a5026848eac85a3a5074ef05f8dd09b7449d004e158->leave($__internal_1c7010c9027af0a8d28a6a5026848eac85a3a5074ef05f8dd09b7449d004e158_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4c98a283c82dba54f763bc6e5778210ca4119f89f25572b3cff2bd0780283bed = $this->env->getExtension("native_profiler");
        $__internal_4c98a283c82dba54f763bc6e5778210ca4119f89f25572b3cff2bd0780283bed->enter($__internal_4c98a283c82dba54f763bc6e5778210ca4119f89f25572b3cff2bd0780283bed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4c98a283c82dba54f763bc6e5778210ca4119f89f25572b3cff2bd0780283bed->leave($__internal_4c98a283c82dba54f763bc6e5778210ca4119f89f25572b3cff2bd0780283bed_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_83fe4c92f42e9ff2e72bdbd7bf254978475ecb5e35356c4d5e3101d314a39d99 = $this->env->getExtension("native_profiler");
        $__internal_83fe4c92f42e9ff2e72bdbd7bf254978475ecb5e35356c4d5e3101d314a39d99->enter($__internal_83fe4c92f42e9ff2e72bdbd7bf254978475ecb5e35356c4d5e3101d314a39d99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_83fe4c92f42e9ff2e72bdbd7bf254978475ecb5e35356c4d5e3101d314a39d99->leave($__internal_83fe4c92f42e9ff2e72bdbd7bf254978475ecb5e35356c4d5e3101d314a39d99_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2fcf492ffe0417482cafa453cd7b522f83a41b2e762d69e59544450ff1b9ff87 = $this->env->getExtension("native_profiler");
        $__internal_2fcf492ffe0417482cafa453cd7b522f83a41b2e762d69e59544450ff1b9ff87->enter($__internal_2fcf492ffe0417482cafa453cd7b522f83a41b2e762d69e59544450ff1b9ff87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_2fcf492ffe0417482cafa453cd7b522f83a41b2e762d69e59544450ff1b9ff87->leave($__internal_2fcf492ffe0417482cafa453cd7b522f83a41b2e762d69e59544450ff1b9ff87_prof);

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
