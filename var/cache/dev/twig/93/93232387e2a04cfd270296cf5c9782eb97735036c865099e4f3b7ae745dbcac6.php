<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_d05668eb05ffe1f2d9e765ea88be0b103410269aa1ddbc4973ad62938bc58c8e extends Twig_Template
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
        $__internal_fdd1339fa2a853aaf84f994b718e8d4f6816c515068fea8e94256768d90a1e23 = $this->env->getExtension("native_profiler");
        $__internal_fdd1339fa2a853aaf84f994b718e8d4f6816c515068fea8e94256768d90a1e23->enter($__internal_fdd1339fa2a853aaf84f994b718e8d4f6816c515068fea8e94256768d90a1e23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_fdd1339fa2a853aaf84f994b718e8d4f6816c515068fea8e94256768d90a1e23->leave($__internal_fdd1339fa2a853aaf84f994b718e8d4f6816c515068fea8e94256768d90a1e23_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
