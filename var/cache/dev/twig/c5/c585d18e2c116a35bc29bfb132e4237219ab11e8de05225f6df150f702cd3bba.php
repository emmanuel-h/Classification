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
        $__internal_bc784996d0f01d1f0a27bb0cd7438d6bfbfc3b248f404c21981d4c362e8e8a0d = $this->env->getExtension("native_profiler");
        $__internal_bc784996d0f01d1f0a27bb0cd7438d6bfbfc3b248f404c21981d4c362e8e8a0d->enter($__internal_bc784996d0f01d1f0a27bb0cd7438d6bfbfc3b248f404c21981d4c362e8e8a0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc784996d0f01d1f0a27bb0cd7438d6bfbfc3b248f404c21981d4c362e8e8a0d->leave($__internal_bc784996d0f01d1f0a27bb0cd7438d6bfbfc3b248f404c21981d4c362e8e8a0d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d37052c623105f39bc78e982a85bf9b8f03997c2d94d49a18bc860e1685dfefe = $this->env->getExtension("native_profiler");
        $__internal_d37052c623105f39bc78e982a85bf9b8f03997c2d94d49a18bc860e1685dfefe->enter($__internal_d37052c623105f39bc78e982a85bf9b8f03997c2d94d49a18bc860e1685dfefe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d37052c623105f39bc78e982a85bf9b8f03997c2d94d49a18bc860e1685dfefe->leave($__internal_d37052c623105f39bc78e982a85bf9b8f03997c2d94d49a18bc860e1685dfefe_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_44c97d65ed7be144ea69d812c2e076321e0eb09d71e779722a04e0d0dec87f69 = $this->env->getExtension("native_profiler");
        $__internal_44c97d65ed7be144ea69d812c2e076321e0eb09d71e779722a04e0d0dec87f69->enter($__internal_44c97d65ed7be144ea69d812c2e076321e0eb09d71e779722a04e0d0dec87f69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_44c97d65ed7be144ea69d812c2e076321e0eb09d71e779722a04e0d0dec87f69->leave($__internal_44c97d65ed7be144ea69d812c2e076321e0eb09d71e779722a04e0d0dec87f69_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f46ca85234c772d720db3a41756e29cfcb58a8974d876df34c3bb98b4eb9a5f9 = $this->env->getExtension("native_profiler");
        $__internal_f46ca85234c772d720db3a41756e29cfcb58a8974d876df34c3bb98b4eb9a5f9->enter($__internal_f46ca85234c772d720db3a41756e29cfcb58a8974d876df34c3bb98b4eb9a5f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_f46ca85234c772d720db3a41756e29cfcb58a8974d876df34c3bb98b4eb9a5f9->leave($__internal_f46ca85234c772d720db3a41756e29cfcb58a8974d876df34c3bb98b4eb9a5f9_prof);

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
