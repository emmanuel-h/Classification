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
        $__internal_abc07317aa5b2981ac902f16227281ce1196381fd3413545336fb2e1882caf5c = $this->env->getExtension("native_profiler");
        $__internal_abc07317aa5b2981ac902f16227281ce1196381fd3413545336fb2e1882caf5c->enter($__internal_abc07317aa5b2981ac902f16227281ce1196381fd3413545336fb2e1882caf5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_abc07317aa5b2981ac902f16227281ce1196381fd3413545336fb2e1882caf5c->leave($__internal_abc07317aa5b2981ac902f16227281ce1196381fd3413545336fb2e1882caf5c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6ba29edd07a9e369eb7c8df4cdd38a6b75aeca1efde4bc199d82736449a38ee5 = $this->env->getExtension("native_profiler");
        $__internal_6ba29edd07a9e369eb7c8df4cdd38a6b75aeca1efde4bc199d82736449a38ee5->enter($__internal_6ba29edd07a9e369eb7c8df4cdd38a6b75aeca1efde4bc199d82736449a38ee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6ba29edd07a9e369eb7c8df4cdd38a6b75aeca1efde4bc199d82736449a38ee5->leave($__internal_6ba29edd07a9e369eb7c8df4cdd38a6b75aeca1efde4bc199d82736449a38ee5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_04fa9718a26cf8d2d9b515afeba6b74d5afc4e1d3222e6eac7c4b199a4b45eac = $this->env->getExtension("native_profiler");
        $__internal_04fa9718a26cf8d2d9b515afeba6b74d5afc4e1d3222e6eac7c4b199a4b45eac->enter($__internal_04fa9718a26cf8d2d9b515afeba6b74d5afc4e1d3222e6eac7c4b199a4b45eac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_04fa9718a26cf8d2d9b515afeba6b74d5afc4e1d3222e6eac7c4b199a4b45eac->leave($__internal_04fa9718a26cf8d2d9b515afeba6b74d5afc4e1d3222e6eac7c4b199a4b45eac_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_fcae3e31ac624276bfc8b7c9afd38f031a508b0e5728a2839c8bdbfaf8ebdd72 = $this->env->getExtension("native_profiler");
        $__internal_fcae3e31ac624276bfc8b7c9afd38f031a508b0e5728a2839c8bdbfaf8ebdd72->enter($__internal_fcae3e31ac624276bfc8b7c9afd38f031a508b0e5728a2839c8bdbfaf8ebdd72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_fcae3e31ac624276bfc8b7c9afd38f031a508b0e5728a2839c8bdbfaf8ebdd72->leave($__internal_fcae3e31ac624276bfc8b7c9afd38f031a508b0e5728a2839c8bdbfaf8ebdd72_prof);

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
