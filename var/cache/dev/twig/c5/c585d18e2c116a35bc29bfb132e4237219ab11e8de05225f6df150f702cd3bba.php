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
        $__internal_55289e4a1fec579a922d739eed32e3b2ed4f2f0426321e0c1f94961c5e418a85 = $this->env->getExtension("native_profiler");
        $__internal_55289e4a1fec579a922d739eed32e3b2ed4f2f0426321e0c1f94961c5e418a85->enter($__internal_55289e4a1fec579a922d739eed32e3b2ed4f2f0426321e0c1f94961c5e418a85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55289e4a1fec579a922d739eed32e3b2ed4f2f0426321e0c1f94961c5e418a85->leave($__internal_55289e4a1fec579a922d739eed32e3b2ed4f2f0426321e0c1f94961c5e418a85_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_15fe97a5727b62a240f048cce6b06e5b5bb64d29b18972dc52c298e93aaa4d48 = $this->env->getExtension("native_profiler");
        $__internal_15fe97a5727b62a240f048cce6b06e5b5bb64d29b18972dc52c298e93aaa4d48->enter($__internal_15fe97a5727b62a240f048cce6b06e5b5bb64d29b18972dc52c298e93aaa4d48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_15fe97a5727b62a240f048cce6b06e5b5bb64d29b18972dc52c298e93aaa4d48->leave($__internal_15fe97a5727b62a240f048cce6b06e5b5bb64d29b18972dc52c298e93aaa4d48_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_64784c50d1d0b3c5addbc7ae0dbf73ec6cdfe9ee2d0204dea9d997780cd6cbeb = $this->env->getExtension("native_profiler");
        $__internal_64784c50d1d0b3c5addbc7ae0dbf73ec6cdfe9ee2d0204dea9d997780cd6cbeb->enter($__internal_64784c50d1d0b3c5addbc7ae0dbf73ec6cdfe9ee2d0204dea9d997780cd6cbeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_64784c50d1d0b3c5addbc7ae0dbf73ec6cdfe9ee2d0204dea9d997780cd6cbeb->leave($__internal_64784c50d1d0b3c5addbc7ae0dbf73ec6cdfe9ee2d0204dea9d997780cd6cbeb_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_aeeb49d934b120fcbaa60df8869cbfe4c13a926dbcd9f0b130faa8185a83e46a = $this->env->getExtension("native_profiler");
        $__internal_aeeb49d934b120fcbaa60df8869cbfe4c13a926dbcd9f0b130faa8185a83e46a->enter($__internal_aeeb49d934b120fcbaa60df8869cbfe4c13a926dbcd9f0b130faa8185a83e46a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_aeeb49d934b120fcbaa60df8869cbfe4c13a926dbcd9f0b130faa8185a83e46a->leave($__internal_aeeb49d934b120fcbaa60df8869cbfe4c13a926dbcd9f0b130faa8185a83e46a_prof);

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
