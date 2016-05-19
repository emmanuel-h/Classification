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
        $__internal_33c0c0937feff6171031d2d6ac2341083d75dd654fdcc5ab598ba8a3f6635dea = $this->env->getExtension("native_profiler");
        $__internal_33c0c0937feff6171031d2d6ac2341083d75dd654fdcc5ab598ba8a3f6635dea->enter($__internal_33c0c0937feff6171031d2d6ac2341083d75dd654fdcc5ab598ba8a3f6635dea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33c0c0937feff6171031d2d6ac2341083d75dd654fdcc5ab598ba8a3f6635dea->leave($__internal_33c0c0937feff6171031d2d6ac2341083d75dd654fdcc5ab598ba8a3f6635dea_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0beda2db79f6b256602080edd32535b991ba819db68788faee338e184e7574a9 = $this->env->getExtension("native_profiler");
        $__internal_0beda2db79f6b256602080edd32535b991ba819db68788faee338e184e7574a9->enter($__internal_0beda2db79f6b256602080edd32535b991ba819db68788faee338e184e7574a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0beda2db79f6b256602080edd32535b991ba819db68788faee338e184e7574a9->leave($__internal_0beda2db79f6b256602080edd32535b991ba819db68788faee338e184e7574a9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ed0021310a1beac9417daa48f62217de4d8154cb93b334b00041a59bd922cabf = $this->env->getExtension("native_profiler");
        $__internal_ed0021310a1beac9417daa48f62217de4d8154cb93b334b00041a59bd922cabf->enter($__internal_ed0021310a1beac9417daa48f62217de4d8154cb93b334b00041a59bd922cabf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ed0021310a1beac9417daa48f62217de4d8154cb93b334b00041a59bd922cabf->leave($__internal_ed0021310a1beac9417daa48f62217de4d8154cb93b334b00041a59bd922cabf_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a4a963f6597c83841dcf2166416a29c43a9d0b26ae1c2e0d0a3dc402075fc95 = $this->env->getExtension("native_profiler");
        $__internal_0a4a963f6597c83841dcf2166416a29c43a9d0b26ae1c2e0d0a3dc402075fc95->enter($__internal_0a4a963f6597c83841dcf2166416a29c43a9d0b26ae1c2e0d0a3dc402075fc95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_0a4a963f6597c83841dcf2166416a29c43a9d0b26ae1c2e0d0a3dc402075fc95->leave($__internal_0a4a963f6597c83841dcf2166416a29c43a9d0b26ae1c2e0d0a3dc402075fc95_prof);

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
