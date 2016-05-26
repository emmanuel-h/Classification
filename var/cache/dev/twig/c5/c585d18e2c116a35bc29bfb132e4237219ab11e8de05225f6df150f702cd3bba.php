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
        $__internal_c6513ec450912801c55d6fc04538c15649ec016a76fab0c391daa067520ac6d2 = $this->env->getExtension("native_profiler");
        $__internal_c6513ec450912801c55d6fc04538c15649ec016a76fab0c391daa067520ac6d2->enter($__internal_c6513ec450912801c55d6fc04538c15649ec016a76fab0c391daa067520ac6d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6513ec450912801c55d6fc04538c15649ec016a76fab0c391daa067520ac6d2->leave($__internal_c6513ec450912801c55d6fc04538c15649ec016a76fab0c391daa067520ac6d2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2b12e7c0a25d094710b5fcd43eb2f76b1d81e3f713031e11a33fa8f54f49309e = $this->env->getExtension("native_profiler");
        $__internal_2b12e7c0a25d094710b5fcd43eb2f76b1d81e3f713031e11a33fa8f54f49309e->enter($__internal_2b12e7c0a25d094710b5fcd43eb2f76b1d81e3f713031e11a33fa8f54f49309e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2b12e7c0a25d094710b5fcd43eb2f76b1d81e3f713031e11a33fa8f54f49309e->leave($__internal_2b12e7c0a25d094710b5fcd43eb2f76b1d81e3f713031e11a33fa8f54f49309e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b1f989783dc95d2c10a230e156831c24f4a61d31105b34cab16bbeac9d7f7ad7 = $this->env->getExtension("native_profiler");
        $__internal_b1f989783dc95d2c10a230e156831c24f4a61d31105b34cab16bbeac9d7f7ad7->enter($__internal_b1f989783dc95d2c10a230e156831c24f4a61d31105b34cab16bbeac9d7f7ad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b1f989783dc95d2c10a230e156831c24f4a61d31105b34cab16bbeac9d7f7ad7->leave($__internal_b1f989783dc95d2c10a230e156831c24f4a61d31105b34cab16bbeac9d7f7ad7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5f837622bea10ed84dd928e0b0d2333a823b8e53df2b0d9ebaf59138a72d2733 = $this->env->getExtension("native_profiler");
        $__internal_5f837622bea10ed84dd928e0b0d2333a823b8e53df2b0d9ebaf59138a72d2733->enter($__internal_5f837622bea10ed84dd928e0b0d2333a823b8e53df2b0d9ebaf59138a72d2733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_5f837622bea10ed84dd928e0b0d2333a823b8e53df2b0d9ebaf59138a72d2733->leave($__internal_5f837622bea10ed84dd928e0b0d2333a823b8e53df2b0d9ebaf59138a72d2733_prof);

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
