<?php

/* @LIFOClassif/Platform/upload.html.twig */
class __TwigTemplate_4c3aa0a302672e3696da7497f6ccdf6c090c7c8242d508a96b671890edb717a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layout.html.twig", "@LIFOClassif/Platform/upload.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LIFOClassifBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_94eb58634a9a12c3343c4b1e010b9b8007a42dae9326f2b3e96d095a5e9393ca = $this->env->getExtension("native_profiler");
        $__internal_94eb58634a9a12c3343c4b1e010b9b8007a42dae9326f2b3e96d095a5e9393ca->enter($__internal_94eb58634a9a12c3343c4b1e010b9b8007a42dae9326f2b3e96d095a5e9393ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Platform/upload.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94eb58634a9a12c3343c4b1e010b9b8007a42dae9326f2b3e96d095a5e9393ca->leave($__internal_94eb58634a9a12c3343c4b1e010b9b8007a42dae9326f2b3e96d095a5e9393ca_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1f3a0e492900d35e8c55f789f599a506655bf9e666fb24bacbd8dfa58e91d602 = $this->env->getExtension("native_profiler");
        $__internal_1f3a0e492900d35e8c55f789f599a506655bf9e666fb24bacbd8dfa58e91d602->enter($__internal_1f3a0e492900d35e8c55f789f599a506655bf9e666fb24bacbd8dfa58e91d602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Upload";
        
        $__internal_1f3a0e492900d35e8c55f789f599a506655bf9e666fb24bacbd8dfa58e91d602->leave($__internal_1f3a0e492900d35e8c55f789f599a506655bf9e666fb24bacbd8dfa58e91d602_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_52b1bdc10dedbae39e47ac8b8e0ab6ad544c329145588e0607f5f490eb92f3fd = $this->env->getExtension("native_profiler");
        $__internal_52b1bdc10dedbae39e47ac8b8e0ab6ad544c329145588e0607f5f490eb92f3fd->enter($__internal_52b1bdc10dedbae39e47ac8b8e0ab6ad544c329145588e0607f5f490eb92f3fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
\t
\t<h3>Upload d'un tesson</h3>
\t
\t";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

";
        
        $__internal_52b1bdc10dedbae39e47ac8b8e0ab6ad544c329145588e0607f5f490eb92f3fd->leave($__internal_52b1bdc10dedbae39e47ac8b8e0ab6ad544c329145588e0607f5f490eb92f3fd_prof);

    }

    public function getTemplateName()
    {
        return "@LIFOClassif/Platform/upload.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 10,  54 => 6,  48 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "LIFOClassifBundle::layout.html.twig" %}*/
/* */
/* {% block title %}{{ parent() }} - Upload{% endblock %}*/
/* */
/* {% block body %}*/
/* 	{{ parent() }}*/
/* 	*/
/* 	<h3>Upload d'un tesson</h3>*/
/* 	*/
/* 	{{ form(form) }}*/
/* */
/* {% endblock %}*/
