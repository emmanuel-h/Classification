<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_d7358281a2777e28e03769a1f57d0fa1e8572bd66f7755df15bf6a6e1145fa3c extends Twig_Template
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
        $__internal_b573820e0ed947ad99f80bebd87eb4d6d54cc18f602533c9032968de5a445aea = $this->env->getExtension("native_profiler");
        $__internal_b573820e0ed947ad99f80bebd87eb4d6d54cc18f602533c9032968de5a445aea->enter($__internal_b573820e0ed947ad99f80bebd87eb4d6d54cc18f602533c9032968de5a445aea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_b573820e0ed947ad99f80bebd87eb4d6d54cc18f602533c9032968de5a445aea->leave($__internal_b573820e0ed947ad99f80bebd87eb4d6d54cc18f602533c9032968de5a445aea_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
