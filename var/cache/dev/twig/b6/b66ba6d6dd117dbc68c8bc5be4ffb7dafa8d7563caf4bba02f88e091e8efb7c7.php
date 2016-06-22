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
        $__internal_fb08a5b855cde67b7651fea3761932a4118b2ba2dad9f688a28ed207196caf1e = $this->env->getExtension("native_profiler");
        $__internal_fb08a5b855cde67b7651fea3761932a4118b2ba2dad9f688a28ed207196caf1e->enter($__internal_fb08a5b855cde67b7651fea3761932a4118b2ba2dad9f688a28ed207196caf1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Admin:admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb08a5b855cde67b7651fea3761932a4118b2ba2dad9f688a28ed207196caf1e->leave($__internal_fb08a5b855cde67b7651fea3761932a4118b2ba2dad9f688a28ed207196caf1e_prof);

    }

    // line 3
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_2189d6c0c5f1b6c28bdca4331b0a25a9e079562c53f2946d6072f9d68523c31f = $this->env->getExtension("native_profiler");
        $__internal_2189d6c0c5f1b6c28bdca4331b0a25a9e079562c53f2946d6072f9d68523c31f->enter($__internal_2189d6c0c5f1b6c28bdca4331b0a25a9e079562c53f2946d6072f9d68523c31f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 4
        echo "


";
        
        $__internal_2189d6c0c5f1b6c28bdca4331b0a25a9e079562c53f2946d6072f9d68523c31f->leave($__internal_2189d6c0c5f1b6c28bdca4331b0a25a9e079562c53f2946d6072f9d68523c31f_prof);

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
