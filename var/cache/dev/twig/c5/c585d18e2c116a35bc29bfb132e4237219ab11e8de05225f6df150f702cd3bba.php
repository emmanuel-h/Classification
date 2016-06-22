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
        $__internal_6b12d42c70f44d72a2aae24c09ba426f5e390f3df223684dbee5999ea4113d0a = $this->env->getExtension("native_profiler");
        $__internal_6b12d42c70f44d72a2aae24c09ba426f5e390f3df223684dbee5999ea4113d0a->enter($__internal_6b12d42c70f44d72a2aae24c09ba426f5e390f3df223684dbee5999ea4113d0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b12d42c70f44d72a2aae24c09ba426f5e390f3df223684dbee5999ea4113d0a->leave($__internal_6b12d42c70f44d72a2aae24c09ba426f5e390f3df223684dbee5999ea4113d0a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ab0b78f3cea2c8c9499f9a06b1e4c332268862688bc38fa975bfcba2f9199d8c = $this->env->getExtension("native_profiler");
        $__internal_ab0b78f3cea2c8c9499f9a06b1e4c332268862688bc38fa975bfcba2f9199d8c->enter($__internal_ab0b78f3cea2c8c9499f9a06b1e4c332268862688bc38fa975bfcba2f9199d8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ab0b78f3cea2c8c9499f9a06b1e4c332268862688bc38fa975bfcba2f9199d8c->leave($__internal_ab0b78f3cea2c8c9499f9a06b1e4c332268862688bc38fa975bfcba2f9199d8c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_907a097f337ca0ecdf53990a87fdfbd52033a3f7e81321997878c06f2c6d4349 = $this->env->getExtension("native_profiler");
        $__internal_907a097f337ca0ecdf53990a87fdfbd52033a3f7e81321997878c06f2c6d4349->enter($__internal_907a097f337ca0ecdf53990a87fdfbd52033a3f7e81321997878c06f2c6d4349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_907a097f337ca0ecdf53990a87fdfbd52033a3f7e81321997878c06f2c6d4349->leave($__internal_907a097f337ca0ecdf53990a87fdfbd52033a3f7e81321997878c06f2c6d4349_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_512dbfebe88aa4ab6833de79a0dd1cb1e9012e72231b5e7eb3f95756661d2b25 = $this->env->getExtension("native_profiler");
        $__internal_512dbfebe88aa4ab6833de79a0dd1cb1e9012e72231b5e7eb3f95756661d2b25->enter($__internal_512dbfebe88aa4ab6833de79a0dd1cb1e9012e72231b5e7eb3f95756661d2b25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_512dbfebe88aa4ab6833de79a0dd1cb1e9012e72231b5e7eb3f95756661d2b25->leave($__internal_512dbfebe88aa4ab6833de79a0dd1cb1e9012e72231b5e7eb3f95756661d2b25_prof);

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
