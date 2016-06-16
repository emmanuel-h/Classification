<?php

/* LIFOClassifBundle:Admin:admin.html.twig */
class __TwigTemplate_e6e7e80d35d534d99af7cfec088464040a48c3337fe62a7c5ab4ea7f52a66de0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layoutAdmin.html.twig", "LIFOClassifBundle:Admin:admin.html.twig", 1);
        $this->blocks = array(
            'LIFOClassif_body' => array($this, 'block_LIFOClassif_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LIFOClassifBundle::layoutAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_61aaa5498d2e6306534ead24ed33a0f79886814f5215129365d3b3144baeb314 = $this->env->getExtension("native_profiler");
        $__internal_61aaa5498d2e6306534ead24ed33a0f79886814f5215129365d3b3144baeb314->enter($__internal_61aaa5498d2e6306534ead24ed33a0f79886814f5215129365d3b3144baeb314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Admin:admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61aaa5498d2e6306534ead24ed33a0f79886814f5215129365d3b3144baeb314->leave($__internal_61aaa5498d2e6306534ead24ed33a0f79886814f5215129365d3b3144baeb314_prof);

    }

    // line 3
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_c93468a0d67c87ae17a7ae071377d40ffb3e014ca837ef1a3e7c885d845d9be8 = $this->env->getExtension("native_profiler");
        $__internal_c93468a0d67c87ae17a7ae071377d40ffb3e014ca837ef1a3e7c885d845d9be8->enter($__internal_c93468a0d67c87ae17a7ae071377d40ffb3e014ca837ef1a3e7c885d845d9be8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 4
        echo "


";
        
        $__internal_c93468a0d67c87ae17a7ae071377d40ffb3e014ca837ef1a3e7c885d845d9be8->leave($__internal_c93468a0d67c87ae17a7ae071377d40ffb3e014ca837ef1a3e7c885d845d9be8_prof);

    }

    public function getTemplateName()
    {
        return "LIFOClassifBundle:Admin:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "LIFOClassifBundle::layoutAdmin.html.twig" %}*/
/* */
/* {% block LIFOClassif_body %}*/
/* */
/* */
/* */
/* {% endblock %}*/
