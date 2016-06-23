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
        $__internal_836c9209e1429285d15d66c8f6ec6f7cd548da320a1534cfff5a925e2098a46a = $this->env->getExtension("native_profiler");
        $__internal_836c9209e1429285d15d66c8f6ec6f7cd548da320a1534cfff5a925e2098a46a->enter($__internal_836c9209e1429285d15d66c8f6ec6f7cd548da320a1534cfff5a925e2098a46a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Admin/admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_836c9209e1429285d15d66c8f6ec6f7cd548da320a1534cfff5a925e2098a46a->leave($__internal_836c9209e1429285d15d66c8f6ec6f7cd548da320a1534cfff5a925e2098a46a_prof);

    }

    // line 3
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_4e17d18d1b7845c098945eeda23db92590b334789bc378add67a4d7702ef6f9f = $this->env->getExtension("native_profiler");
        $__internal_4e17d18d1b7845c098945eeda23db92590b334789bc378add67a4d7702ef6f9f->enter($__internal_4e17d18d1b7845c098945eeda23db92590b334789bc378add67a4d7702ef6f9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 4
        echo "


";
        
        $__internal_4e17d18d1b7845c098945eeda23db92590b334789bc378add67a4d7702ef6f9f->leave($__internal_4e17d18d1b7845c098945eeda23db92590b334789bc378add67a4d7702ef6f9f_prof);

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
