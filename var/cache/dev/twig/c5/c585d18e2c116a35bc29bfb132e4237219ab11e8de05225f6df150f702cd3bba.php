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
        $__internal_34c52e5302bc20f3b87fd8795c5018b017ab759a729eada2f8060e34372e3eb0 = $this->env->getExtension("native_profiler");
        $__internal_34c52e5302bc20f3b87fd8795c5018b017ab759a729eada2f8060e34372e3eb0->enter($__internal_34c52e5302bc20f3b87fd8795c5018b017ab759a729eada2f8060e34372e3eb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34c52e5302bc20f3b87fd8795c5018b017ab759a729eada2f8060e34372e3eb0->leave($__internal_34c52e5302bc20f3b87fd8795c5018b017ab759a729eada2f8060e34372e3eb0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_11f7aebbdfea6789a1a788ff2afec3b3242e99408a5c3aac54c3785d4dea3b8d = $this->env->getExtension("native_profiler");
        $__internal_11f7aebbdfea6789a1a788ff2afec3b3242e99408a5c3aac54c3785d4dea3b8d->enter($__internal_11f7aebbdfea6789a1a788ff2afec3b3242e99408a5c3aac54c3785d4dea3b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_11f7aebbdfea6789a1a788ff2afec3b3242e99408a5c3aac54c3785d4dea3b8d->leave($__internal_11f7aebbdfea6789a1a788ff2afec3b3242e99408a5c3aac54c3785d4dea3b8d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_537e29a602f917520c747996fc15a1931ba1f0f3d5613c716b2e46641b8ae363 = $this->env->getExtension("native_profiler");
        $__internal_537e29a602f917520c747996fc15a1931ba1f0f3d5613c716b2e46641b8ae363->enter($__internal_537e29a602f917520c747996fc15a1931ba1f0f3d5613c716b2e46641b8ae363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_537e29a602f917520c747996fc15a1931ba1f0f3d5613c716b2e46641b8ae363->leave($__internal_537e29a602f917520c747996fc15a1931ba1f0f3d5613c716b2e46641b8ae363_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6734c6262bfc00758a73b4171e6b4ef6f10dd3f842db98adb82b912fe522f990 = $this->env->getExtension("native_profiler");
        $__internal_6734c6262bfc00758a73b4171e6b4ef6f10dd3f842db98adb82b912fe522f990->enter($__internal_6734c6262bfc00758a73b4171e6b4ef6f10dd3f842db98adb82b912fe522f990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_6734c6262bfc00758a73b4171e6b4ef6f10dd3f842db98adb82b912fe522f990->leave($__internal_6734c6262bfc00758a73b4171e6b4ef6f10dd3f842db98adb82b912fe522f990_prof);

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
