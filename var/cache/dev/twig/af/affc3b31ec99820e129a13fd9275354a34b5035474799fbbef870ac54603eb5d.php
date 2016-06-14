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
        $__internal_d8576f21290196c6d106ebcf86eab1482fbee99e94caf8c64773584531219c5f = $this->env->getExtension("native_profiler");
        $__internal_d8576f21290196c6d106ebcf86eab1482fbee99e94caf8c64773584531219c5f->enter($__internal_d8576f21290196c6d106ebcf86eab1482fbee99e94caf8c64773584531219c5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8576f21290196c6d106ebcf86eab1482fbee99e94caf8c64773584531219c5f->leave($__internal_d8576f21290196c6d106ebcf86eab1482fbee99e94caf8c64773584531219c5f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_63b5e452a8fe475d403dfc1a64474e9fedfc0f2f90b9279f0ea32bb99d957cb3 = $this->env->getExtension("native_profiler");
        $__internal_63b5e452a8fe475d403dfc1a64474e9fedfc0f2f90b9279f0ea32bb99d957cb3->enter($__internal_63b5e452a8fe475d403dfc1a64474e9fedfc0f2f90b9279f0ea32bb99d957cb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_63b5e452a8fe475d403dfc1a64474e9fedfc0f2f90b9279f0ea32bb99d957cb3->leave($__internal_63b5e452a8fe475d403dfc1a64474e9fedfc0f2f90b9279f0ea32bb99d957cb3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0fe4196b4de1c0d17826f577abd4c14a74d1b7b01b28c74da096bce8cd05671e = $this->env->getExtension("native_profiler");
        $__internal_0fe4196b4de1c0d17826f577abd4c14a74d1b7b01b28c74da096bce8cd05671e->enter($__internal_0fe4196b4de1c0d17826f577abd4c14a74d1b7b01b28c74da096bce8cd05671e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0fe4196b4de1c0d17826f577abd4c14a74d1b7b01b28c74da096bce8cd05671e->leave($__internal_0fe4196b4de1c0d17826f577abd4c14a74d1b7b01b28c74da096bce8cd05671e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2735f7484f3482da8ed9576b893e5b406e648a93798a6c3c4d9dd680d3a7c231 = $this->env->getExtension("native_profiler");
        $__internal_2735f7484f3482da8ed9576b893e5b406e648a93798a6c3c4d9dd680d3a7c231->enter($__internal_2735f7484f3482da8ed9576b893e5b406e648a93798a6c3c4d9dd680d3a7c231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_2735f7484f3482da8ed9576b893e5b406e648a93798a6c3c4d9dd680d3a7c231->leave($__internal_2735f7484f3482da8ed9576b893e5b406e648a93798a6c3c4d9dd680d3a7c231_prof);

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
