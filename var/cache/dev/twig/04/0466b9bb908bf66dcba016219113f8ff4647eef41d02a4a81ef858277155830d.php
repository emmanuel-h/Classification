<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_24dc132a980430cb59d1faa4f3d60cfaac85b1876384db16d5121ca7ff319027 extends Twig_Template
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
        $__internal_fefed36f989f3281144129bceb880f19437b7f17a8f7ca6e708278d2452b2c5e = $this->env->getExtension("native_profiler");
        $__internal_fefed36f989f3281144129bceb880f19437b7f17a8f7ca6e708278d2452b2c5e->enter($__internal_fefed36f989f3281144129bceb880f19437b7f17a8f7ca6e708278d2452b2c5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_fefed36f989f3281144129bceb880f19437b7f17a8f7ca6e708278d2452b2c5e->leave($__internal_fefed36f989f3281144129bceb880f19437b7f17a8f7ca6e708278d2452b2c5e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
