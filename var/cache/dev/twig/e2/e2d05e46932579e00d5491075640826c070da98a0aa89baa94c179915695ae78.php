<?php

/* LIFOClassifBundle:Platform:tesson.html.twig */
class __TwigTemplate_15d248a09ffea0fb775fe3f599fcd38529064bdfc740d5528a4417b15b6c16ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layout.html.twig", "LIFOClassifBundle:Platform:tesson.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LIFOClassifBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3983183b334a824a9f09c07e363611c15198aba6a4b8cf6d8d9db94d74f21c8d = $this->env->getExtension("native_profiler");
        $__internal_3983183b334a824a9f09c07e363611c15198aba6a4b8cf6d8d9db94d74f21c8d->enter($__internal_3983183b334a824a9f09c07e363611c15198aba6a4b8cf6d8d9db94d74f21c8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Platform:tesson.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3983183b334a824a9f09c07e363611c15198aba6a4b8cf6d8d9db94d74f21c8d->leave($__internal_3983183b334a824a9f09c07e363611c15198aba6a4b8cf6d8d9db94d74f21c8d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ea0170ea11c1fd752c2af236b9ecff95215f6da1a2799f7c283657585c9bb16e = $this->env->getExtension("native_profiler");
        $__internal_ea0170ea11c1fd752c2af236b9ecff95215f6da1a2799f7c283657585c9bb16e->enter($__internal_ea0170ea11c1fd752c2af236b9ecff95215f6da1a2799f7c283657585c9bb16e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Tesson";
        
        $__internal_ea0170ea11c1fd752c2af236b9ecff95215f6da1a2799f7c283657585c9bb16e->leave($__internal_ea0170ea11c1fd752c2af236b9ecff95215f6da1a2799f7c283657585c9bb16e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e18d8071b8b7a7a08911a2c326e2ce04c34e1ea7a3be60efb8c85cd4d38b85c6 = $this->env->getExtension("native_profiler");
        $__internal_e18d8071b8b7a7a08911a2c326e2ce04c34e1ea7a3be60efb8c85cd4d38b85c6->enter($__internal_e18d8071b8b7a7a08911a2c326e2ce04c34e1ea7a3be60efb8c85cd4d38b85c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
\t<p>
\t\tPour travailler sur un tesson
\t</p>
";
        
        $__internal_e18d8071b8b7a7a08911a2c326e2ce04c34e1ea7a3be60efb8c85cd4d38b85c6->leave($__internal_e18d8071b8b7a7a08911a2c326e2ce04c34e1ea7a3be60efb8c85cd4d38b85c6_prof);

    }

    public function getTemplateName()
    {
        return "LIFOClassifBundle:Platform:tesson.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 6,  48 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "LIFOClassifBundle::layout.html.twig" %}*/
/* */
/* {% block title %}{{ parent() }} - Tesson{% endblock %}*/
/* */
/* {% block body %}*/
/* 	{{ parent() }}*/
/* 	<p>*/
/* 		Pour travailler sur un tesson*/
/* 	</p>*/
/* {% endblock %}*/
