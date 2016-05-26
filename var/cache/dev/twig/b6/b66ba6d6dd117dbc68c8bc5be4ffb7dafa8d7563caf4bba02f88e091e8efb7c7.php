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
        $__internal_e0815d8859519ee267b704e554ff333b4263e8405704d3b58864817a4fa3bf79 = $this->env->getExtension("native_profiler");
        $__internal_e0815d8859519ee267b704e554ff333b4263e8405704d3b58864817a4fa3bf79->enter($__internal_e0815d8859519ee267b704e554ff333b4263e8405704d3b58864817a4fa3bf79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Admin:admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0815d8859519ee267b704e554ff333b4263e8405704d3b58864817a4fa3bf79->leave($__internal_e0815d8859519ee267b704e554ff333b4263e8405704d3b58864817a4fa3bf79_prof);

    }

    // line 3
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_6df7d01b0f9cf9a80f426579826dfcfd716139c39105b26babe32f774116d571 = $this->env->getExtension("native_profiler");
        $__internal_6df7d01b0f9cf9a80f426579826dfcfd716139c39105b26babe32f774116d571->enter($__internal_6df7d01b0f9cf9a80f426579826dfcfd716139c39105b26babe32f774116d571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 4
        echo "


";
        
        $__internal_6df7d01b0f9cf9a80f426579826dfcfd716139c39105b26babe32f774116d571->leave($__internal_6df7d01b0f9cf9a80f426579826dfcfd716139c39105b26babe32f774116d571_prof);

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
