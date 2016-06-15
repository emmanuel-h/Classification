<?php

/* @LIFOClassif/Admin/admin.html.twig */
class __TwigTemplate_d5af64ea1984604139cde1ff434949c89cbea94e6c5aed7f649ce2cf8cbf04c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layoutAdmin.html.twig", "@LIFOClassif/Admin/admin.html.twig", 1);
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
        $__internal_61b406264281ada5d5ec618cd65e5948e92ac87f0bfc512e3f268aa006f09538 = $this->env->getExtension("native_profiler");
        $__internal_61b406264281ada5d5ec618cd65e5948e92ac87f0bfc512e3f268aa006f09538->enter($__internal_61b406264281ada5d5ec618cd65e5948e92ac87f0bfc512e3f268aa006f09538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Admin/admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61b406264281ada5d5ec618cd65e5948e92ac87f0bfc512e3f268aa006f09538->leave($__internal_61b406264281ada5d5ec618cd65e5948e92ac87f0bfc512e3f268aa006f09538_prof);

    }

    // line 3
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_e4adddd1a9fd49dbca2f1a95405a9dcb6d242da127e57e00b10b13715edb4fea = $this->env->getExtension("native_profiler");
        $__internal_e4adddd1a9fd49dbca2f1a95405a9dcb6d242da127e57e00b10b13715edb4fea->enter($__internal_e4adddd1a9fd49dbca2f1a95405a9dcb6d242da127e57e00b10b13715edb4fea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 4
        echo "


";
        
        $__internal_e4adddd1a9fd49dbca2f1a95405a9dcb6d242da127e57e00b10b13715edb4fea->leave($__internal_e4adddd1a9fd49dbca2f1a95405a9dcb6d242da127e57e00b10b13715edb4fea_prof);

    }

    public function getTemplateName()
    {
        return "@LIFOClassif/Admin/admin.html.twig";
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
