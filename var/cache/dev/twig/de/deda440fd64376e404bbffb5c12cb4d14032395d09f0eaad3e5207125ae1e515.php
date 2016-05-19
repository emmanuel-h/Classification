<?php

/* LIFOClassifBundle::layoutGeneral.html.twig */
class __TwigTemplate_7c296ff27bac2f8634b383bbdde8b8f943df6c3fc60db69e581587a45f5f098d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "LIFOClassifBundle::layoutGeneral.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'LIFOClassif_body' => array($this, 'block_LIFOClassif_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f15d2c69d01959e18e5794549bbc8df12096dba1bf802361de4b3677ccf0da18 = $this->env->getExtension("native_profiler");
        $__internal_f15d2c69d01959e18e5794549bbc8df12096dba1bf802361de4b3677ccf0da18->enter($__internal_f15d2c69d01959e18e5794549bbc8df12096dba1bf802361de4b3677ccf0da18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle::layoutGeneral.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f15d2c69d01959e18e5794549bbc8df12096dba1bf802361de4b3677ccf0da18->leave($__internal_f15d2c69d01959e18e5794549bbc8df12096dba1bf802361de4b3677ccf0da18_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d855778c99d2315aeea216b4b89dc6a9f9ea4345d9cee79cdbcf6a5cb76df55 = $this->env->getExtension("native_profiler");
        $__internal_4d855778c99d2315aeea216b4b89dc6a9f9ea4345d9cee79cdbcf6a5cb76df55->enter($__internal_4d855778c99d2315aeea216b4b89dc6a9f9ea4345d9cee79cdbcf6a5cb76df55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    \t";
        // line 5
        $this->displayBlock('LIFOClassif_body', $context, $blocks);
        // line 7
        echo "    \t
    ";
        
        $__internal_4d855778c99d2315aeea216b4b89dc6a9f9ea4345d9cee79cdbcf6a5cb76df55->leave($__internal_4d855778c99d2315aeea216b4b89dc6a9f9ea4345d9cee79cdbcf6a5cb76df55_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_a7ebb894659e780edab62599a20d6aca5d27c4329147789de3b5321528441316 = $this->env->getExtension("native_profiler");
        $__internal_a7ebb894659e780edab62599a20d6aca5d27c4329147789de3b5321528441316->enter($__internal_a7ebb894659e780edab62599a20d6aca5d27c4329147789de3b5321528441316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "    \t";
        
        $__internal_a7ebb894659e780edab62599a20d6aca5d27c4329147789de3b5321528441316->leave($__internal_a7ebb894659e780edab62599a20d6aca5d27c4329147789de3b5321528441316_prof);

    }

    public function getTemplateName()
    {
        return "LIFOClassifBundle::layoutGeneral.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 6,  54 => 5,  46 => 7,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/*     {% block body %}*/
/*     */
/*     	{% block LIFOClassif_body %}*/
/*     	{% endblock %}*/
/*     	*/
/*     {% endblock %}*/
/* */
