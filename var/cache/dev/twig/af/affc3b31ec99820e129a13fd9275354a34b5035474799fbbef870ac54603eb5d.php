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
        $__internal_083c536f8dd49d6680dab95fa13e253dfac4ed07c6463066673deb010a13900f = $this->env->getExtension("native_profiler");
        $__internal_083c536f8dd49d6680dab95fa13e253dfac4ed07c6463066673deb010a13900f->enter($__internal_083c536f8dd49d6680dab95fa13e253dfac4ed07c6463066673deb010a13900f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_083c536f8dd49d6680dab95fa13e253dfac4ed07c6463066673deb010a13900f->leave($__internal_083c536f8dd49d6680dab95fa13e253dfac4ed07c6463066673deb010a13900f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_85d5c21d8a8e70811c2db5b8667cbc52fa72c538824fec266a677a703c1af447 = $this->env->getExtension("native_profiler");
        $__internal_85d5c21d8a8e70811c2db5b8667cbc52fa72c538824fec266a677a703c1af447->enter($__internal_85d5c21d8a8e70811c2db5b8667cbc52fa72c538824fec266a677a703c1af447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_85d5c21d8a8e70811c2db5b8667cbc52fa72c538824fec266a677a703c1af447->leave($__internal_85d5c21d8a8e70811c2db5b8667cbc52fa72c538824fec266a677a703c1af447_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a24c49c978a248ffd4c0a10024a24e467847015ec0f017c4e32ceb0b0ef801ee = $this->env->getExtension("native_profiler");
        $__internal_a24c49c978a248ffd4c0a10024a24e467847015ec0f017c4e32ceb0b0ef801ee->enter($__internal_a24c49c978a248ffd4c0a10024a24e467847015ec0f017c4e32ceb0b0ef801ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a24c49c978a248ffd4c0a10024a24e467847015ec0f017c4e32ceb0b0ef801ee->leave($__internal_a24c49c978a248ffd4c0a10024a24e467847015ec0f017c4e32ceb0b0ef801ee_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a3a275f0ef185a401e27380f7464553ff5c65fa7ee3154160a539102dc1c9fe = $this->env->getExtension("native_profiler");
        $__internal_8a3a275f0ef185a401e27380f7464553ff5c65fa7ee3154160a539102dc1c9fe->enter($__internal_8a3a275f0ef185a401e27380f7464553ff5c65fa7ee3154160a539102dc1c9fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_8a3a275f0ef185a401e27380f7464553ff5c65fa7ee3154160a539102dc1c9fe->leave($__internal_8a3a275f0ef185a401e27380f7464553ff5c65fa7ee3154160a539102dc1c9fe_prof);

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
