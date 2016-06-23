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
        $__internal_879f9cc39beddcad62e148f9302bb7f1e10e04a0bd64249239e44f0db3964ed8 = $this->env->getExtension("native_profiler");
        $__internal_879f9cc39beddcad62e148f9302bb7f1e10e04a0bd64249239e44f0db3964ed8->enter($__internal_879f9cc39beddcad62e148f9302bb7f1e10e04a0bd64249239e44f0db3964ed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_879f9cc39beddcad62e148f9302bb7f1e10e04a0bd64249239e44f0db3964ed8->leave($__internal_879f9cc39beddcad62e148f9302bb7f1e10e04a0bd64249239e44f0db3964ed8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_638b7ed0696c7fc9a4e8b46dede2eb8780759d9cc1a1069aa0d019d8bef7a97b = $this->env->getExtension("native_profiler");
        $__internal_638b7ed0696c7fc9a4e8b46dede2eb8780759d9cc1a1069aa0d019d8bef7a97b->enter($__internal_638b7ed0696c7fc9a4e8b46dede2eb8780759d9cc1a1069aa0d019d8bef7a97b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_638b7ed0696c7fc9a4e8b46dede2eb8780759d9cc1a1069aa0d019d8bef7a97b->leave($__internal_638b7ed0696c7fc9a4e8b46dede2eb8780759d9cc1a1069aa0d019d8bef7a97b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c379f27c7a932c86e4389fd9fb7f9be67d33125e35ead765d07c94eb9f6ff79e = $this->env->getExtension("native_profiler");
        $__internal_c379f27c7a932c86e4389fd9fb7f9be67d33125e35ead765d07c94eb9f6ff79e->enter($__internal_c379f27c7a932c86e4389fd9fb7f9be67d33125e35ead765d07c94eb9f6ff79e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c379f27c7a932c86e4389fd9fb7f9be67d33125e35ead765d07c94eb9f6ff79e->leave($__internal_c379f27c7a932c86e4389fd9fb7f9be67d33125e35ead765d07c94eb9f6ff79e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_166ad89c5538b8877822e27ce38b34f5d40bdff42255e023ee4f412923c3d78a = $this->env->getExtension("native_profiler");
        $__internal_166ad89c5538b8877822e27ce38b34f5d40bdff42255e023ee4f412923c3d78a->enter($__internal_166ad89c5538b8877822e27ce38b34f5d40bdff42255e023ee4f412923c3d78a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_166ad89c5538b8877822e27ce38b34f5d40bdff42255e023ee4f412923c3d78a->leave($__internal_166ad89c5538b8877822e27ce38b34f5d40bdff42255e023ee4f412923c3d78a_prof);

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
