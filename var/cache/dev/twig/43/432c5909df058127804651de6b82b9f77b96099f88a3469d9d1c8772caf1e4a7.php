<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_2ae5c23e9da1e8cec5effb9030fab81d0ef8938727ce105287bf3caf4cce9abb extends Twig_Template
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
        $__internal_b6944c9d1636b7f35c01e94d847a7779f19dfcac4f07b8bd40d9f4df2768d12f = $this->env->getExtension("native_profiler");
        $__internal_b6944c9d1636b7f35c01e94d847a7779f19dfcac4f07b8bd40d9f4df2768d12f->enter($__internal_b6944c9d1636b7f35c01e94d847a7779f19dfcac4f07b8bd40d9f4df2768d12f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_b6944c9d1636b7f35c01e94d847a7779f19dfcac4f07b8bd40d9f4df2768d12f->leave($__internal_b6944c9d1636b7f35c01e94d847a7779f19dfcac4f07b8bd40d9f4df2768d12f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
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
