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
        $__internal_a7396b0622a3fae8ee8a36068c5a487f0e5658781f927cca59a8f0f64243a114 = $this->env->getExtension("native_profiler");
        $__internal_a7396b0622a3fae8ee8a36068c5a487f0e5658781f927cca59a8f0f64243a114->enter($__internal_a7396b0622a3fae8ee8a36068c5a487f0e5658781f927cca59a8f0f64243a114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7396b0622a3fae8ee8a36068c5a487f0e5658781f927cca59a8f0f64243a114->leave($__internal_a7396b0622a3fae8ee8a36068c5a487f0e5658781f927cca59a8f0f64243a114_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ad3d4df10a529fe5b3131e84dd61f2941453a208872ab7d8734d59ab5b3035b8 = $this->env->getExtension("native_profiler");
        $__internal_ad3d4df10a529fe5b3131e84dd61f2941453a208872ab7d8734d59ab5b3035b8->enter($__internal_ad3d4df10a529fe5b3131e84dd61f2941453a208872ab7d8734d59ab5b3035b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ad3d4df10a529fe5b3131e84dd61f2941453a208872ab7d8734d59ab5b3035b8->leave($__internal_ad3d4df10a529fe5b3131e84dd61f2941453a208872ab7d8734d59ab5b3035b8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4a06f74ca07242d7185dae9dc28bae81ca19c7243b50680542e5b34bbb9a678c = $this->env->getExtension("native_profiler");
        $__internal_4a06f74ca07242d7185dae9dc28bae81ca19c7243b50680542e5b34bbb9a678c->enter($__internal_4a06f74ca07242d7185dae9dc28bae81ca19c7243b50680542e5b34bbb9a678c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4a06f74ca07242d7185dae9dc28bae81ca19c7243b50680542e5b34bbb9a678c->leave($__internal_4a06f74ca07242d7185dae9dc28bae81ca19c7243b50680542e5b34bbb9a678c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_39384defcee589e5ba8a174e8b61521af7d1a483ca7f46f5a03a7a4b2a91f291 = $this->env->getExtension("native_profiler");
        $__internal_39384defcee589e5ba8a174e8b61521af7d1a483ca7f46f5a03a7a4b2a91f291->enter($__internal_39384defcee589e5ba8a174e8b61521af7d1a483ca7f46f5a03a7a4b2a91f291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_39384defcee589e5ba8a174e8b61521af7d1a483ca7f46f5a03a7a4b2a91f291->leave($__internal_39384defcee589e5ba8a174e8b61521af7d1a483ca7f46f5a03a7a4b2a91f291_prof);

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
