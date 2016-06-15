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
        $__internal_1b00f92df0e028b931a0216cfa3f95816531844eb395545bbf3fdfca7a1641f1 = $this->env->getExtension("native_profiler");
        $__internal_1b00f92df0e028b931a0216cfa3f95816531844eb395545bbf3fdfca7a1641f1->enter($__internal_1b00f92df0e028b931a0216cfa3f95816531844eb395545bbf3fdfca7a1641f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b00f92df0e028b931a0216cfa3f95816531844eb395545bbf3fdfca7a1641f1->leave($__internal_1b00f92df0e028b931a0216cfa3f95816531844eb395545bbf3fdfca7a1641f1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ceb8d595a9a0fec861e4ae031cd6884c6cf33e624b241711713eb0f712e8c5c6 = $this->env->getExtension("native_profiler");
        $__internal_ceb8d595a9a0fec861e4ae031cd6884c6cf33e624b241711713eb0f712e8c5c6->enter($__internal_ceb8d595a9a0fec861e4ae031cd6884c6cf33e624b241711713eb0f712e8c5c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ceb8d595a9a0fec861e4ae031cd6884c6cf33e624b241711713eb0f712e8c5c6->leave($__internal_ceb8d595a9a0fec861e4ae031cd6884c6cf33e624b241711713eb0f712e8c5c6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bc286c21aef5de4ce086c234332cd6c04c8181764c138f1d43d425221d37313a = $this->env->getExtension("native_profiler");
        $__internal_bc286c21aef5de4ce086c234332cd6c04c8181764c138f1d43d425221d37313a->enter($__internal_bc286c21aef5de4ce086c234332cd6c04c8181764c138f1d43d425221d37313a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_bc286c21aef5de4ce086c234332cd6c04c8181764c138f1d43d425221d37313a->leave($__internal_bc286c21aef5de4ce086c234332cd6c04c8181764c138f1d43d425221d37313a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2528e660b0782647c31dc0e7125a6251d66d77d40c8437f22aa9741c5ecfc71c = $this->env->getExtension("native_profiler");
        $__internal_2528e660b0782647c31dc0e7125a6251d66d77d40c8437f22aa9741c5ecfc71c->enter($__internal_2528e660b0782647c31dc0e7125a6251d66d77d40c8437f22aa9741c5ecfc71c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_2528e660b0782647c31dc0e7125a6251d66d77d40c8437f22aa9741c5ecfc71c->leave($__internal_2528e660b0782647c31dc0e7125a6251d66d77d40c8437f22aa9741c5ecfc71c_prof);

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
