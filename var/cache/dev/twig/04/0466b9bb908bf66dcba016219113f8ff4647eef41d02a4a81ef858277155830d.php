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
        $__internal_c18b573d99b716fc863d3032e15007c0716a49d291d273b95e26faffd1e44297 = $this->env->getExtension("native_profiler");
        $__internal_c18b573d99b716fc863d3032e15007c0716a49d291d273b95e26faffd1e44297->enter($__internal_c18b573d99b716fc863d3032e15007c0716a49d291d273b95e26faffd1e44297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_c18b573d99b716fc863d3032e15007c0716a49d291d273b95e26faffd1e44297->leave($__internal_c18b573d99b716fc863d3032e15007c0716a49d291d273b95e26faffd1e44297_prof);

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
