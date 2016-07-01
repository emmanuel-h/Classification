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
        $__internal_a58419fcea23cf97190ba588e5297dd224f8ea013364d6527e8adcc595bfff05 = $this->env->getExtension("native_profiler");
        $__internal_a58419fcea23cf97190ba588e5297dd224f8ea013364d6527e8adcc595bfff05->enter($__internal_a58419fcea23cf97190ba588e5297dd224f8ea013364d6527e8adcc595bfff05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Admin:admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a58419fcea23cf97190ba588e5297dd224f8ea013364d6527e8adcc595bfff05->leave($__internal_a58419fcea23cf97190ba588e5297dd224f8ea013364d6527e8adcc595bfff05_prof);

    }

    // line 3
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_9998c5a51bdc4290c9d8d9f601531769961a5ebc9efc999426b9fea4e57c9253 = $this->env->getExtension("native_profiler");
        $__internal_9998c5a51bdc4290c9d8d9f601531769961a5ebc9efc999426b9fea4e57c9253->enter($__internal_9998c5a51bdc4290c9d8d9f601531769961a5ebc9efc999426b9fea4e57c9253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 4
        echo "


";
        
        $__internal_9998c5a51bdc4290c9d8d9f601531769961a5ebc9efc999426b9fea4e57c9253->leave($__internal_9998c5a51bdc4290c9d8d9f601531769961a5ebc9efc999426b9fea4e57c9253_prof);

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
