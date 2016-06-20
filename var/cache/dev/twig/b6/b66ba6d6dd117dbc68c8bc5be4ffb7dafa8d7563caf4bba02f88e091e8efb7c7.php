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
        $__internal_7f302507e497cbe8bf89324839d39b9949fa915623e4cc3aaea674609af2743c = $this->env->getExtension("native_profiler");
        $__internal_7f302507e497cbe8bf89324839d39b9949fa915623e4cc3aaea674609af2743c->enter($__internal_7f302507e497cbe8bf89324839d39b9949fa915623e4cc3aaea674609af2743c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Admin:admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f302507e497cbe8bf89324839d39b9949fa915623e4cc3aaea674609af2743c->leave($__internal_7f302507e497cbe8bf89324839d39b9949fa915623e4cc3aaea674609af2743c_prof);

    }

    // line 3
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_5b7bec3b79f369955d900bfa2569fbc195e1ad8d1dbd6f7f3ff982d5d20676a9 = $this->env->getExtension("native_profiler");
        $__internal_5b7bec3b79f369955d900bfa2569fbc195e1ad8d1dbd6f7f3ff982d5d20676a9->enter($__internal_5b7bec3b79f369955d900bfa2569fbc195e1ad8d1dbd6f7f3ff982d5d20676a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 4
        echo "


";
        
        $__internal_5b7bec3b79f369955d900bfa2569fbc195e1ad8d1dbd6f7f3ff982d5d20676a9->leave($__internal_5b7bec3b79f369955d900bfa2569fbc195e1ad8d1dbd6f7f3ff982d5d20676a9_prof);

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
