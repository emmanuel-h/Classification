<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_c4faa6b3e97ccf3b8130da39d956f220cd676b8d0e67bdb78b9db3343cec1cad extends Twig_Template
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
        $__internal_a10ca59e6f64f9a177791dd0a8456ff3f25a756b3e52aef59cd30325c89dd258 = $this->env->getExtension("native_profiler");
        $__internal_a10ca59e6f64f9a177791dd0a8456ff3f25a756b3e52aef59cd30325c89dd258->enter($__internal_a10ca59e6f64f9a177791dd0a8456ff3f25a756b3e52aef59cd30325c89dd258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_a10ca59e6f64f9a177791dd0a8456ff3f25a756b3e52aef59cd30325c89dd258->leave($__internal_a10ca59e6f64f9a177791dd0a8456ff3f25a756b3e52aef59cd30325c89dd258_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
