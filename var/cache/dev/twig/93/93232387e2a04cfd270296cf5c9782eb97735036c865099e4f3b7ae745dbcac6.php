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
        $__internal_b385c678798fb46790d9f452310158ab2fabc158c7c54e826e669f354c893fe7 = $this->env->getExtension("native_profiler");
        $__internal_b385c678798fb46790d9f452310158ab2fabc158c7c54e826e669f354c893fe7->enter($__internal_b385c678798fb46790d9f452310158ab2fabc158c7c54e826e669f354c893fe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

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
        
        $__internal_b385c678798fb46790d9f452310158ab2fabc158c7c54e826e669f354c893fe7->leave($__internal_b385c678798fb46790d9f452310158ab2fabc158c7c54e826e669f354c893fe7_prof);

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
