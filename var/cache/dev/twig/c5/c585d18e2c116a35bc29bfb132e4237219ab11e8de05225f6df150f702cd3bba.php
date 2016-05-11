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
        $__internal_b05652277304398a901f561001b9dd2704fb4ec13a49c3d17bcee3e5df15c811 = $this->env->getExtension("native_profiler");
        $__internal_b05652277304398a901f561001b9dd2704fb4ec13a49c3d17bcee3e5df15c811->enter($__internal_b05652277304398a901f561001b9dd2704fb4ec13a49c3d17bcee3e5df15c811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b05652277304398a901f561001b9dd2704fb4ec13a49c3d17bcee3e5df15c811->leave($__internal_b05652277304398a901f561001b9dd2704fb4ec13a49c3d17bcee3e5df15c811_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6a4973d2864dc1f8ba326f5a2f29d9444d94063b2425dee3f0179e38c3b205e0 = $this->env->getExtension("native_profiler");
        $__internal_6a4973d2864dc1f8ba326f5a2f29d9444d94063b2425dee3f0179e38c3b205e0->enter($__internal_6a4973d2864dc1f8ba326f5a2f29d9444d94063b2425dee3f0179e38c3b205e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6a4973d2864dc1f8ba326f5a2f29d9444d94063b2425dee3f0179e38c3b205e0->leave($__internal_6a4973d2864dc1f8ba326f5a2f29d9444d94063b2425dee3f0179e38c3b205e0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8ce4c76599a69a93819c7231ca41d72dcbde857dec8068767c4b7fc01dcf68d6 = $this->env->getExtension("native_profiler");
        $__internal_8ce4c76599a69a93819c7231ca41d72dcbde857dec8068767c4b7fc01dcf68d6->enter($__internal_8ce4c76599a69a93819c7231ca41d72dcbde857dec8068767c4b7fc01dcf68d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8ce4c76599a69a93819c7231ca41d72dcbde857dec8068767c4b7fc01dcf68d6->leave($__internal_8ce4c76599a69a93819c7231ca41d72dcbde857dec8068767c4b7fc01dcf68d6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_79712dfac559ed032f1e82373f73f20d42f0e342b034b250d43ad77c70f60b38 = $this->env->getExtension("native_profiler");
        $__internal_79712dfac559ed032f1e82373f73f20d42f0e342b034b250d43ad77c70f60b38->enter($__internal_79712dfac559ed032f1e82373f73f20d42f0e342b034b250d43ad77c70f60b38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_79712dfac559ed032f1e82373f73f20d42f0e342b034b250d43ad77c70f60b38->leave($__internal_79712dfac559ed032f1e82373f73f20d42f0e342b034b250d43ad77c70f60b38_prof);

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
