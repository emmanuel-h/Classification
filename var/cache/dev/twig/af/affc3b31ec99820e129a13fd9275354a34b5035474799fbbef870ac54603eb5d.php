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
        $__internal_46873fbe847df14d91654db57ef6304631b1bb08acf666064eb165e25e5cd025 = $this->env->getExtension("native_profiler");
        $__internal_46873fbe847df14d91654db57ef6304631b1bb08acf666064eb165e25e5cd025->enter($__internal_46873fbe847df14d91654db57ef6304631b1bb08acf666064eb165e25e5cd025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46873fbe847df14d91654db57ef6304631b1bb08acf666064eb165e25e5cd025->leave($__internal_46873fbe847df14d91654db57ef6304631b1bb08acf666064eb165e25e5cd025_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b56a4b78a38fc5e0253309080e0761dce028979298702737372ab09bcbb7b8d6 = $this->env->getExtension("native_profiler");
        $__internal_b56a4b78a38fc5e0253309080e0761dce028979298702737372ab09bcbb7b8d6->enter($__internal_b56a4b78a38fc5e0253309080e0761dce028979298702737372ab09bcbb7b8d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b56a4b78a38fc5e0253309080e0761dce028979298702737372ab09bcbb7b8d6->leave($__internal_b56a4b78a38fc5e0253309080e0761dce028979298702737372ab09bcbb7b8d6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_68ba6b30e42276da43cddc079232bb1bc036ea789275d8af782cc430e49ff8ee = $this->env->getExtension("native_profiler");
        $__internal_68ba6b30e42276da43cddc079232bb1bc036ea789275d8af782cc430e49ff8ee->enter($__internal_68ba6b30e42276da43cddc079232bb1bc036ea789275d8af782cc430e49ff8ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_68ba6b30e42276da43cddc079232bb1bc036ea789275d8af782cc430e49ff8ee->leave($__internal_68ba6b30e42276da43cddc079232bb1bc036ea789275d8af782cc430e49ff8ee_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_247fc71bd63e783ef75b79a05082cbe1e7eb0dc068705daf0c2d3cadde290f73 = $this->env->getExtension("native_profiler");
        $__internal_247fc71bd63e783ef75b79a05082cbe1e7eb0dc068705daf0c2d3cadde290f73->enter($__internal_247fc71bd63e783ef75b79a05082cbe1e7eb0dc068705daf0c2d3cadde290f73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_247fc71bd63e783ef75b79a05082cbe1e7eb0dc068705daf0c2d3cadde290f73->leave($__internal_247fc71bd63e783ef75b79a05082cbe1e7eb0dc068705daf0c2d3cadde290f73_prof);

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
