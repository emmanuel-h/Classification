<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_fb5086162c242ab2651a25323421b5790d5384bdb16d36e660f11fd4be9deb30 extends Twig_Template
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
        $__internal_a7798bfdfb8e584d5df84fafafff926f9845f1a78cfba85636ce372a0d97bd0e = $this->env->getExtension("native_profiler");
        $__internal_a7798bfdfb8e584d5df84fafafff926f9845f1a78cfba85636ce372a0d97bd0e->enter($__internal_a7798bfdfb8e584d5df84fafafff926f9845f1a78cfba85636ce372a0d97bd0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_a7798bfdfb8e584d5df84fafafff926f9845f1a78cfba85636ce372a0d97bd0e->leave($__internal_a7798bfdfb8e584d5df84fafafff926f9845f1a78cfba85636ce372a0d97bd0e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
