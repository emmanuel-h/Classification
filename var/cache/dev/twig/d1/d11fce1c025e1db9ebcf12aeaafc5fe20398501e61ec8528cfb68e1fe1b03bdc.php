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
        $__internal_108f42672e89d6e2cc79e7ac067d88875890b36a874b1bceb8dc7230900adaac = $this->env->getExtension("native_profiler");
        $__internal_108f42672e89d6e2cc79e7ac067d88875890b36a874b1bceb8dc7230900adaac->enter($__internal_108f42672e89d6e2cc79e7ac067d88875890b36a874b1bceb8dc7230900adaac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Admin/admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_108f42672e89d6e2cc79e7ac067d88875890b36a874b1bceb8dc7230900adaac->leave($__internal_108f42672e89d6e2cc79e7ac067d88875890b36a874b1bceb8dc7230900adaac_prof);

    }

    // line 3
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_7c31338b2bbfc45de0d1b325f20514dbe9bee469ab2d2a5ac6eec8148047598c = $this->env->getExtension("native_profiler");
        $__internal_7c31338b2bbfc45de0d1b325f20514dbe9bee469ab2d2a5ac6eec8148047598c->enter($__internal_7c31338b2bbfc45de0d1b325f20514dbe9bee469ab2d2a5ac6eec8148047598c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 4
        echo "


";
        
        $__internal_7c31338b2bbfc45de0d1b325f20514dbe9bee469ab2d2a5ac6eec8148047598c->leave($__internal_7c31338b2bbfc45de0d1b325f20514dbe9bee469ab2d2a5ac6eec8148047598c_prof);

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
