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
        $__internal_eb86ab104d1b1f1bac68cbd9e93e7ee1e9606dd6a8ad547083908c8755142494 = $this->env->getExtension("native_profiler");
        $__internal_eb86ab104d1b1f1bac68cbd9e93e7ee1e9606dd6a8ad547083908c8755142494->enter($__internal_eb86ab104d1b1f1bac68cbd9e93e7ee1e9606dd6a8ad547083908c8755142494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Admin:admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb86ab104d1b1f1bac68cbd9e93e7ee1e9606dd6a8ad547083908c8755142494->leave($__internal_eb86ab104d1b1f1bac68cbd9e93e7ee1e9606dd6a8ad547083908c8755142494_prof);

    }

    // line 3
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_19a5a639a685f66a9ea0c1569cc57f8f240d7ff794a92df400037e45f5d0fcc3 = $this->env->getExtension("native_profiler");
        $__internal_19a5a639a685f66a9ea0c1569cc57f8f240d7ff794a92df400037e45f5d0fcc3->enter($__internal_19a5a639a685f66a9ea0c1569cc57f8f240d7ff794a92df400037e45f5d0fcc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 4
        echo "


";
        
        $__internal_19a5a639a685f66a9ea0c1569cc57f8f240d7ff794a92df400037e45f5d0fcc3->leave($__internal_19a5a639a685f66a9ea0c1569cc57f8f240d7ff794a92df400037e45f5d0fcc3_prof);

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
