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
        $__internal_213cca6045d9a1eb418d4d7607b6d1454d9977b270acd50898295e17b7c65323 = $this->env->getExtension("native_profiler");
        $__internal_213cca6045d9a1eb418d4d7607b6d1454d9977b270acd50898295e17b7c65323->enter($__internal_213cca6045d9a1eb418d4d7607b6d1454d9977b270acd50898295e17b7c65323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_213cca6045d9a1eb418d4d7607b6d1454d9977b270acd50898295e17b7c65323->leave($__internal_213cca6045d9a1eb418d4d7607b6d1454d9977b270acd50898295e17b7c65323_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d834eff82d8be3b7dbbef4e58cff5d00d4df1c4137eba450e9617d389329cddd = $this->env->getExtension("native_profiler");
        $__internal_d834eff82d8be3b7dbbef4e58cff5d00d4df1c4137eba450e9617d389329cddd->enter($__internal_d834eff82d8be3b7dbbef4e58cff5d00d4df1c4137eba450e9617d389329cddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d834eff82d8be3b7dbbef4e58cff5d00d4df1c4137eba450e9617d389329cddd->leave($__internal_d834eff82d8be3b7dbbef4e58cff5d00d4df1c4137eba450e9617d389329cddd_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9e1146883cf3f120119e8ebd97f95b5a99af8c719f40487ecca79c44ff5f8cd7 = $this->env->getExtension("native_profiler");
        $__internal_9e1146883cf3f120119e8ebd97f95b5a99af8c719f40487ecca79c44ff5f8cd7->enter($__internal_9e1146883cf3f120119e8ebd97f95b5a99af8c719f40487ecca79c44ff5f8cd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9e1146883cf3f120119e8ebd97f95b5a99af8c719f40487ecca79c44ff5f8cd7->leave($__internal_9e1146883cf3f120119e8ebd97f95b5a99af8c719f40487ecca79c44ff5f8cd7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ed36cb87c87f21c8bb66f64123235382b58078cd144c88593d0120cbd02d9b63 = $this->env->getExtension("native_profiler");
        $__internal_ed36cb87c87f21c8bb66f64123235382b58078cd144c88593d0120cbd02d9b63->enter($__internal_ed36cb87c87f21c8bb66f64123235382b58078cd144c88593d0120cbd02d9b63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_ed36cb87c87f21c8bb66f64123235382b58078cd144c88593d0120cbd02d9b63->leave($__internal_ed36cb87c87f21c8bb66f64123235382b58078cd144c88593d0120cbd02d9b63_prof);

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
