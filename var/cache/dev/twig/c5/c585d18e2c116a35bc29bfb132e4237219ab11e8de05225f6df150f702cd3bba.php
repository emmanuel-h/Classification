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
        $__internal_62005c2f74f90e88cc5542d5ca07b84ed9c7be2601d55c8abf073b5a2416b9dc = $this->env->getExtension("native_profiler");
        $__internal_62005c2f74f90e88cc5542d5ca07b84ed9c7be2601d55c8abf073b5a2416b9dc->enter($__internal_62005c2f74f90e88cc5542d5ca07b84ed9c7be2601d55c8abf073b5a2416b9dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62005c2f74f90e88cc5542d5ca07b84ed9c7be2601d55c8abf073b5a2416b9dc->leave($__internal_62005c2f74f90e88cc5542d5ca07b84ed9c7be2601d55c8abf073b5a2416b9dc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a21a8c8b21c9267adfe9299c3054f86e6cc02cf19bf2f14fa43b880f554367c9 = $this->env->getExtension("native_profiler");
        $__internal_a21a8c8b21c9267adfe9299c3054f86e6cc02cf19bf2f14fa43b880f554367c9->enter($__internal_a21a8c8b21c9267adfe9299c3054f86e6cc02cf19bf2f14fa43b880f554367c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a21a8c8b21c9267adfe9299c3054f86e6cc02cf19bf2f14fa43b880f554367c9->leave($__internal_a21a8c8b21c9267adfe9299c3054f86e6cc02cf19bf2f14fa43b880f554367c9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a618c1b096aff77821cd8bbbffe21a1e2ab5f835604835ef49d46f8f5f4cdb69 = $this->env->getExtension("native_profiler");
        $__internal_a618c1b096aff77821cd8bbbffe21a1e2ab5f835604835ef49d46f8f5f4cdb69->enter($__internal_a618c1b096aff77821cd8bbbffe21a1e2ab5f835604835ef49d46f8f5f4cdb69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a618c1b096aff77821cd8bbbffe21a1e2ab5f835604835ef49d46f8f5f4cdb69->leave($__internal_a618c1b096aff77821cd8bbbffe21a1e2ab5f835604835ef49d46f8f5f4cdb69_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f7907e78d0176525aa05859bab6223466c897e2f069baed1ca9597868ec62c2f = $this->env->getExtension("native_profiler");
        $__internal_f7907e78d0176525aa05859bab6223466c897e2f069baed1ca9597868ec62c2f->enter($__internal_f7907e78d0176525aa05859bab6223466c897e2f069baed1ca9597868ec62c2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_f7907e78d0176525aa05859bab6223466c897e2f069baed1ca9597868ec62c2f->leave($__internal_f7907e78d0176525aa05859bab6223466c897e2f069baed1ca9597868ec62c2f_prof);

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
