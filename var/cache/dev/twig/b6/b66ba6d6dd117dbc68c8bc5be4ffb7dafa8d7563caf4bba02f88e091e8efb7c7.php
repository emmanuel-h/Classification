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
        $__internal_38a5b7863f7675bbf5e42b6f77cb0c44f329b0829c407a50c9ab5832fabd52d8 = $this->env->getExtension("native_profiler");
        $__internal_38a5b7863f7675bbf5e42b6f77cb0c44f329b0829c407a50c9ab5832fabd52d8->enter($__internal_38a5b7863f7675bbf5e42b6f77cb0c44f329b0829c407a50c9ab5832fabd52d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Admin:admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38a5b7863f7675bbf5e42b6f77cb0c44f329b0829c407a50c9ab5832fabd52d8->leave($__internal_38a5b7863f7675bbf5e42b6f77cb0c44f329b0829c407a50c9ab5832fabd52d8_prof);

    }

    // line 3
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_d1d83a9ae4314ad8ef23a21b1b34f5b972cb8b8e609faf217facc629ffba82ac = $this->env->getExtension("native_profiler");
        $__internal_d1d83a9ae4314ad8ef23a21b1b34f5b972cb8b8e609faf217facc629ffba82ac->enter($__internal_d1d83a9ae4314ad8ef23a21b1b34f5b972cb8b8e609faf217facc629ffba82ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 4
        echo "


";
        
        $__internal_d1d83a9ae4314ad8ef23a21b1b34f5b972cb8b8e609faf217facc629ffba82ac->leave($__internal_d1d83a9ae4314ad8ef23a21b1b34f5b972cb8b8e609faf217facc629ffba82ac_prof);

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
