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
        $__internal_d1d49099ab65c6f536fa687c8d758ca8ffeb2d9a50e810ac872950622bcdc68e = $this->env->getExtension("native_profiler");
        $__internal_d1d49099ab65c6f536fa687c8d758ca8ffeb2d9a50e810ac872950622bcdc68e->enter($__internal_d1d49099ab65c6f536fa687c8d758ca8ffeb2d9a50e810ac872950622bcdc68e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1d49099ab65c6f536fa687c8d758ca8ffeb2d9a50e810ac872950622bcdc68e->leave($__internal_d1d49099ab65c6f536fa687c8d758ca8ffeb2d9a50e810ac872950622bcdc68e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_93b837ad344726aa1bb455a94567da465a801cee62bd1b0e11289c2d367831e8 = $this->env->getExtension("native_profiler");
        $__internal_93b837ad344726aa1bb455a94567da465a801cee62bd1b0e11289c2d367831e8->enter($__internal_93b837ad344726aa1bb455a94567da465a801cee62bd1b0e11289c2d367831e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_93b837ad344726aa1bb455a94567da465a801cee62bd1b0e11289c2d367831e8->leave($__internal_93b837ad344726aa1bb455a94567da465a801cee62bd1b0e11289c2d367831e8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fdd12af9e8a4207d94d84ef32a0bcfabec2549e0ed115b7918ec02fe1e21d1ee = $this->env->getExtension("native_profiler");
        $__internal_fdd12af9e8a4207d94d84ef32a0bcfabec2549e0ed115b7918ec02fe1e21d1ee->enter($__internal_fdd12af9e8a4207d94d84ef32a0bcfabec2549e0ed115b7918ec02fe1e21d1ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fdd12af9e8a4207d94d84ef32a0bcfabec2549e0ed115b7918ec02fe1e21d1ee->leave($__internal_fdd12af9e8a4207d94d84ef32a0bcfabec2549e0ed115b7918ec02fe1e21d1ee_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_273162e1ce2890d07db9ff26e534f395f53f8f54b1af9abe2bd07161a292ce37 = $this->env->getExtension("native_profiler");
        $__internal_273162e1ce2890d07db9ff26e534f395f53f8f54b1af9abe2bd07161a292ce37->enter($__internal_273162e1ce2890d07db9ff26e534f395f53f8f54b1af9abe2bd07161a292ce37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_273162e1ce2890d07db9ff26e534f395f53f8f54b1af9abe2bd07161a292ce37->leave($__internal_273162e1ce2890d07db9ff26e534f395f53f8f54b1af9abe2bd07161a292ce37_prof);

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
