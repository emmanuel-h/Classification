<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_798fdbd6100888d4f5b278617b14ec4c3b716e12566a834bdc38d77b47504367 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6c51f945f071ff6a24c807e4edeb93a18789fa52bfff455a2da03bdc9b7124a2 = $this->env->getExtension("native_profiler");
        $__internal_6c51f945f071ff6a24c807e4edeb93a18789fa52bfff455a2da03bdc9b7124a2->enter($__internal_6c51f945f071ff6a24c807e4edeb93a18789fa52bfff455a2da03bdc9b7124a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_6c51f945f071ff6a24c807e4edeb93a18789fa52bfff455a2da03bdc9b7124a2->leave($__internal_6c51f945f071ff6a24c807e4edeb93a18789fa52bfff455a2da03bdc9b7124a2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
