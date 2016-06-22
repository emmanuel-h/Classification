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
        $__internal_4234e23ee11589dbd668d8e00806746fcd2588d0fab0f8c89d5519aef1740eb5 = $this->env->getExtension("native_profiler");
        $__internal_4234e23ee11589dbd668d8e00806746fcd2588d0fab0f8c89d5519aef1740eb5->enter($__internal_4234e23ee11589dbd668d8e00806746fcd2588d0fab0f8c89d5519aef1740eb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4234e23ee11589dbd668d8e00806746fcd2588d0fab0f8c89d5519aef1740eb5->leave($__internal_4234e23ee11589dbd668d8e00806746fcd2588d0fab0f8c89d5519aef1740eb5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1a98eedf6c2c9735299690e51876bec96f37bfb11e973b6c3067adf4782d1603 = $this->env->getExtension("native_profiler");
        $__internal_1a98eedf6c2c9735299690e51876bec96f37bfb11e973b6c3067adf4782d1603->enter($__internal_1a98eedf6c2c9735299690e51876bec96f37bfb11e973b6c3067adf4782d1603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1a98eedf6c2c9735299690e51876bec96f37bfb11e973b6c3067adf4782d1603->leave($__internal_1a98eedf6c2c9735299690e51876bec96f37bfb11e973b6c3067adf4782d1603_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_753a2ca0e52a0a049250b35289946d49b1ed638159391ca2287683cdb9065e7f = $this->env->getExtension("native_profiler");
        $__internal_753a2ca0e52a0a049250b35289946d49b1ed638159391ca2287683cdb9065e7f->enter($__internal_753a2ca0e52a0a049250b35289946d49b1ed638159391ca2287683cdb9065e7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_753a2ca0e52a0a049250b35289946d49b1ed638159391ca2287683cdb9065e7f->leave($__internal_753a2ca0e52a0a049250b35289946d49b1ed638159391ca2287683cdb9065e7f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_79dfa8b7cf1716684ad0c9180b0d388729e20728d41993cb3eb8630223c30b52 = $this->env->getExtension("native_profiler");
        $__internal_79dfa8b7cf1716684ad0c9180b0d388729e20728d41993cb3eb8630223c30b52->enter($__internal_79dfa8b7cf1716684ad0c9180b0d388729e20728d41993cb3eb8630223c30b52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_79dfa8b7cf1716684ad0c9180b0d388729e20728d41993cb3eb8630223c30b52->leave($__internal_79dfa8b7cf1716684ad0c9180b0d388729e20728d41993cb3eb8630223c30b52_prof);

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
