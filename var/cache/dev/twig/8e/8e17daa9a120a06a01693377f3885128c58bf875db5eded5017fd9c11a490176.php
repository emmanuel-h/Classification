<?php

/* @LIFOClassif/Platform/index.html.twig */
class __TwigTemplate_6c5727bd5ba52cac76d8756f50842e6d94474be7170dde15522885ae5d5c1fd2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layoutGeneral.html.twig", "@LIFOClassif/Platform/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LIFOClassifBundle::layoutGeneral.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b87e00926b48062b8582ef743b9e49ccb9554ef26439664901a8e6cd90d45ef1 = $this->env->getExtension("native_profiler");
        $__internal_b87e00926b48062b8582ef743b9e49ccb9554ef26439664901a8e6cd90d45ef1->enter($__internal_b87e00926b48062b8582ef743b9e49ccb9554ef26439664901a8e6cd90d45ef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Platform/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b87e00926b48062b8582ef743b9e49ccb9554ef26439664901a8e6cd90d45ef1->leave($__internal_b87e00926b48062b8582ef743b9e49ccb9554ef26439664901a8e6cd90d45ef1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7c0f96888cdf20f89fdf2920c71a788bb67821143ec65ac75b09ec22a463b4bd = $this->env->getExtension("native_profiler");
        $__internal_7c0f96888cdf20f89fdf2920c71a788bb67821143ec65ac75b09ec22a463b4bd->enter($__internal_7c0f96888cdf20f89fdf2920c71a788bb67821143ec65ac75b09ec22a463b4bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index";
        
        $__internal_7c0f96888cdf20f89fdf2920c71a788bb67821143ec65ac75b09ec22a463b4bd->leave($__internal_7c0f96888cdf20f89fdf2920c71a788bb67821143ec65ac75b09ec22a463b4bd_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_443526adba8c1bf2e2d37256785aa2bcb5886b7a7d6b072cc071b4abc19ce1dc = $this->env->getExtension("native_profiler");
        $__internal_443526adba8c1bf2e2d37256785aa2bcb5886b7a7d6b072cc071b4abc19ce1dc->enter($__internal_443526adba8c1bf2e2d37256785aa2bcb5886b7a7d6b072cc071b4abc19ce1dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<p>
\t\tBienvenue sur l'outil d'aide à la classification de tesson
\t</p>
";
        
        $__internal_443526adba8c1bf2e2d37256785aa2bcb5886b7a7d6b072cc071b4abc19ce1dc->leave($__internal_443526adba8c1bf2e2d37256785aa2bcb5886b7a7d6b072cc071b4abc19ce1dc_prof);

    }

    public function getTemplateName()
    {
        return "@LIFOClassif/Platform/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 6,  48 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "LIFOClassifBundle::layoutGeneral.html.twig" %}*/
/* */
/* {% block title %}{{ parent() }} - Index{% endblock %}*/
/* */
/* {% block body %}*/
/* 	<p>*/
/* 		Bienvenue sur l'outil d'aide à la classification de tesson*/
/* 	</p>*/
/* {% endblock %}*/
