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
        $__internal_0604d30cda2d82e6006a5d32a5416ba6c3a11b092ec54b5b23cc3f85f670fa0b = $this->env->getExtension("native_profiler");
        $__internal_0604d30cda2d82e6006a5d32a5416ba6c3a11b092ec54b5b23cc3f85f670fa0b->enter($__internal_0604d30cda2d82e6006a5d32a5416ba6c3a11b092ec54b5b23cc3f85f670fa0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Admin/admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0604d30cda2d82e6006a5d32a5416ba6c3a11b092ec54b5b23cc3f85f670fa0b->leave($__internal_0604d30cda2d82e6006a5d32a5416ba6c3a11b092ec54b5b23cc3f85f670fa0b_prof);

    }

    // line 3
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_1d69af825762b157e76c3b09aff8760472c0e96d8ac7185cc22cb25c54a7bd3c = $this->env->getExtension("native_profiler");
        $__internal_1d69af825762b157e76c3b09aff8760472c0e96d8ac7185cc22cb25c54a7bd3c->enter($__internal_1d69af825762b157e76c3b09aff8760472c0e96d8ac7185cc22cb25c54a7bd3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 4
        echo "


";
        
        $__internal_1d69af825762b157e76c3b09aff8760472c0e96d8ac7185cc22cb25c54a7bd3c->leave($__internal_1d69af825762b157e76c3b09aff8760472c0e96d8ac7185cc22cb25c54a7bd3c_prof);

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
