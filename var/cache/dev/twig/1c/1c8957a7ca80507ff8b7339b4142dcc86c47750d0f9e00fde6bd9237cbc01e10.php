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
        $__internal_adae96cc4d2dc80a7867c130a0eb2e4b4ab81966dba280ba2b63aae3fef86ec1 = $this->env->getExtension("native_profiler");
        $__internal_adae96cc4d2dc80a7867c130a0eb2e4b4ab81966dba280ba2b63aae3fef86ec1->enter($__internal_adae96cc4d2dc80a7867c130a0eb2e4b4ab81966dba280ba2b63aae3fef86ec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_adae96cc4d2dc80a7867c130a0eb2e4b4ab81966dba280ba2b63aae3fef86ec1->leave($__internal_adae96cc4d2dc80a7867c130a0eb2e4b4ab81966dba280ba2b63aae3fef86ec1_prof);

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
