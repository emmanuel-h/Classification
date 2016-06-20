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
        $__internal_973a498064035aa66eeb5ba5da783ed335ce81d07cbc36ea54c182f2ffb3cec7 = $this->env->getExtension("native_profiler");
        $__internal_973a498064035aa66eeb5ba5da783ed335ce81d07cbc36ea54c182f2ffb3cec7->enter($__internal_973a498064035aa66eeb5ba5da783ed335ce81d07cbc36ea54c182f2ffb3cec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_973a498064035aa66eeb5ba5da783ed335ce81d07cbc36ea54c182f2ffb3cec7->leave($__internal_973a498064035aa66eeb5ba5da783ed335ce81d07cbc36ea54c182f2ffb3cec7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_eaf846e41acc026b096869f704a62a0874da4d956ae3cf5e47a79e54bf19c10c = $this->env->getExtension("native_profiler");
        $__internal_eaf846e41acc026b096869f704a62a0874da4d956ae3cf5e47a79e54bf19c10c->enter($__internal_eaf846e41acc026b096869f704a62a0874da4d956ae3cf5e47a79e54bf19c10c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_eaf846e41acc026b096869f704a62a0874da4d956ae3cf5e47a79e54bf19c10c->leave($__internal_eaf846e41acc026b096869f704a62a0874da4d956ae3cf5e47a79e54bf19c10c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f9b7beb6264e5afde4d9ae914c5c91f5b2c49b24eca7c37fbbe40191ceb6ddd1 = $this->env->getExtension("native_profiler");
        $__internal_f9b7beb6264e5afde4d9ae914c5c91f5b2c49b24eca7c37fbbe40191ceb6ddd1->enter($__internal_f9b7beb6264e5afde4d9ae914c5c91f5b2c49b24eca7c37fbbe40191ceb6ddd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f9b7beb6264e5afde4d9ae914c5c91f5b2c49b24eca7c37fbbe40191ceb6ddd1->leave($__internal_f9b7beb6264e5afde4d9ae914c5c91f5b2c49b24eca7c37fbbe40191ceb6ddd1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8b05df391641effa7394ef3bf03ed85ce66218738a5437615688c8f61b502a40 = $this->env->getExtension("native_profiler");
        $__internal_8b05df391641effa7394ef3bf03ed85ce66218738a5437615688c8f61b502a40->enter($__internal_8b05df391641effa7394ef3bf03ed85ce66218738a5437615688c8f61b502a40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_8b05df391641effa7394ef3bf03ed85ce66218738a5437615688c8f61b502a40->leave($__internal_8b05df391641effa7394ef3bf03ed85ce66218738a5437615688c8f61b502a40_prof);

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
