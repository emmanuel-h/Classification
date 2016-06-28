<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_67cce9b36212582a222966abe82407419125e8d91d09bc8f10cbc822c2efa666 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_f5b048ffd329e9b457cce0aa76d7448e2a99abf0951af5db00deecbd0bc57ed9 = $this->env->getExtension("native_profiler");
        $__internal_f5b048ffd329e9b457cce0aa76d7448e2a99abf0951af5db00deecbd0bc57ed9->enter($__internal_f5b048ffd329e9b457cce0aa76d7448e2a99abf0951af5db00deecbd0bc57ed9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5b048ffd329e9b457cce0aa76d7448e2a99abf0951af5db00deecbd0bc57ed9->leave($__internal_f5b048ffd329e9b457cce0aa76d7448e2a99abf0951af5db00deecbd0bc57ed9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_129c52742eaabe29d90c73bcb89984538f16a881fdee7f1e6c32c60222939fa7 = $this->env->getExtension("native_profiler");
        $__internal_129c52742eaabe29d90c73bcb89984538f16a881fdee7f1e6c32c60222939fa7->enter($__internal_129c52742eaabe29d90c73bcb89984538f16a881fdee7f1e6c32c60222939fa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_129c52742eaabe29d90c73bcb89984538f16a881fdee7f1e6c32c60222939fa7->leave($__internal_129c52742eaabe29d90c73bcb89984538f16a881fdee7f1e6c32c60222939fa7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f58f8bd31f1af5997fbaee2769df33264733bc4ca74d4060e68f34e3ecec16ad = $this->env->getExtension("native_profiler");
        $__internal_f58f8bd31f1af5997fbaee2769df33264733bc4ca74d4060e68f34e3ecec16ad->enter($__internal_f58f8bd31f1af5997fbaee2769df33264733bc4ca74d4060e68f34e3ecec16ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f58f8bd31f1af5997fbaee2769df33264733bc4ca74d4060e68f34e3ecec16ad->leave($__internal_f58f8bd31f1af5997fbaee2769df33264733bc4ca74d4060e68f34e3ecec16ad_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e38a85e32ac377df4998d5b4828078172765660af7c8a75ec675b669fc8e868 = $this->env->getExtension("native_profiler");
        $__internal_1e38a85e32ac377df4998d5b4828078172765660af7c8a75ec675b669fc8e868->enter($__internal_1e38a85e32ac377df4998d5b4828078172765660af7c8a75ec675b669fc8e868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_1e38a85e32ac377df4998d5b4828078172765660af7c8a75ec675b669fc8e868->leave($__internal_1e38a85e32ac377df4998d5b4828078172765660af7c8a75ec675b669fc8e868_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
