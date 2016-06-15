<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_8b06ff4a78c762607e44a28b1bf5198d95efd48f7e0a29d7883b70e4da8c5723 extends Twig_Template
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
        $__internal_a5a465bd2d00fb411eccc1378ab7cc3d48c6af9f4ee7ee2c4b4dd0056ceb14a9 = $this->env->getExtension("native_profiler");
        $__internal_a5a465bd2d00fb411eccc1378ab7cc3d48c6af9f4ee7ee2c4b4dd0056ceb14a9->enter($__internal_a5a465bd2d00fb411eccc1378ab7cc3d48c6af9f4ee7ee2c4b4dd0056ceb14a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_a5a465bd2d00fb411eccc1378ab7cc3d48c6af9f4ee7ee2c4b4dd0056ceb14a9->leave($__internal_a5a465bd2d00fb411eccc1378ab7cc3d48c6af9f4ee7ee2c4b4dd0056ceb14a9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
