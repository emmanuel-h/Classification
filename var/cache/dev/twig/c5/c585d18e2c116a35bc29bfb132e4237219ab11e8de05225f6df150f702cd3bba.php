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
        $__internal_b44e9786082b1fdc574c4b7dcc120f6505548a0a366e84c7636f92c7ccf6e931 = $this->env->getExtension("native_profiler");
        $__internal_b44e9786082b1fdc574c4b7dcc120f6505548a0a366e84c7636f92c7ccf6e931->enter($__internal_b44e9786082b1fdc574c4b7dcc120f6505548a0a366e84c7636f92c7ccf6e931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b44e9786082b1fdc574c4b7dcc120f6505548a0a366e84c7636f92c7ccf6e931->leave($__internal_b44e9786082b1fdc574c4b7dcc120f6505548a0a366e84c7636f92c7ccf6e931_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_865a14cd90f77d5b5b2a05abce0a14a0de1b37ef18b651c3c43038ae1aeccc42 = $this->env->getExtension("native_profiler");
        $__internal_865a14cd90f77d5b5b2a05abce0a14a0de1b37ef18b651c3c43038ae1aeccc42->enter($__internal_865a14cd90f77d5b5b2a05abce0a14a0de1b37ef18b651c3c43038ae1aeccc42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_865a14cd90f77d5b5b2a05abce0a14a0de1b37ef18b651c3c43038ae1aeccc42->leave($__internal_865a14cd90f77d5b5b2a05abce0a14a0de1b37ef18b651c3c43038ae1aeccc42_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3484961ad136f9911097edae687fbe54440803275672e060aeaa8832ac01fd1d = $this->env->getExtension("native_profiler");
        $__internal_3484961ad136f9911097edae687fbe54440803275672e060aeaa8832ac01fd1d->enter($__internal_3484961ad136f9911097edae687fbe54440803275672e060aeaa8832ac01fd1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3484961ad136f9911097edae687fbe54440803275672e060aeaa8832ac01fd1d->leave($__internal_3484961ad136f9911097edae687fbe54440803275672e060aeaa8832ac01fd1d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_07fb11c2ac3477ff0a27325a488f13c56c1bc3624d68aa123654a9402bba61d4 = $this->env->getExtension("native_profiler");
        $__internal_07fb11c2ac3477ff0a27325a488f13c56c1bc3624d68aa123654a9402bba61d4->enter($__internal_07fb11c2ac3477ff0a27325a488f13c56c1bc3624d68aa123654a9402bba61d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_07fb11c2ac3477ff0a27325a488f13c56c1bc3624d68aa123654a9402bba61d4->leave($__internal_07fb11c2ac3477ff0a27325a488f13c56c1bc3624d68aa123654a9402bba61d4_prof);

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
