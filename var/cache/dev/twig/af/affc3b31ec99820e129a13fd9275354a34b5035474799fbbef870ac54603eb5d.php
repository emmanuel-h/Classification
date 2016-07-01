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
        $__internal_61fd2c2a80bf90f0b1275d8439481cf1f12073b6ad4629b52ff18050c542d86a = $this->env->getExtension("native_profiler");
        $__internal_61fd2c2a80bf90f0b1275d8439481cf1f12073b6ad4629b52ff18050c542d86a->enter($__internal_61fd2c2a80bf90f0b1275d8439481cf1f12073b6ad4629b52ff18050c542d86a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61fd2c2a80bf90f0b1275d8439481cf1f12073b6ad4629b52ff18050c542d86a->leave($__internal_61fd2c2a80bf90f0b1275d8439481cf1f12073b6ad4629b52ff18050c542d86a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_013ef36352c4b18d2c94e6737580ef1df5a9f68fdf7fd1450c5444c63c99e2a5 = $this->env->getExtension("native_profiler");
        $__internal_013ef36352c4b18d2c94e6737580ef1df5a9f68fdf7fd1450c5444c63c99e2a5->enter($__internal_013ef36352c4b18d2c94e6737580ef1df5a9f68fdf7fd1450c5444c63c99e2a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_013ef36352c4b18d2c94e6737580ef1df5a9f68fdf7fd1450c5444c63c99e2a5->leave($__internal_013ef36352c4b18d2c94e6737580ef1df5a9f68fdf7fd1450c5444c63c99e2a5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6de0c78cd4e55b7984bff1407fb2460a8cf94568839cacb2448275236e59aaa2 = $this->env->getExtension("native_profiler");
        $__internal_6de0c78cd4e55b7984bff1407fb2460a8cf94568839cacb2448275236e59aaa2->enter($__internal_6de0c78cd4e55b7984bff1407fb2460a8cf94568839cacb2448275236e59aaa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6de0c78cd4e55b7984bff1407fb2460a8cf94568839cacb2448275236e59aaa2->leave($__internal_6de0c78cd4e55b7984bff1407fb2460a8cf94568839cacb2448275236e59aaa2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_08f2aea69d615a4258dab88648739b51b53788999152cd6c0ab0a75ec96a8aab = $this->env->getExtension("native_profiler");
        $__internal_08f2aea69d615a4258dab88648739b51b53788999152cd6c0ab0a75ec96a8aab->enter($__internal_08f2aea69d615a4258dab88648739b51b53788999152cd6c0ab0a75ec96a8aab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_08f2aea69d615a4258dab88648739b51b53788999152cd6c0ab0a75ec96a8aab->leave($__internal_08f2aea69d615a4258dab88648739b51b53788999152cd6c0ab0a75ec96a8aab_prof);

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
