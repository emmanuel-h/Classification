<?php

/* LIFOClassifBundle:Admin:allUser.html.twig */
class __TwigTemplate_5973c8f9ac8e4ee11b33d5ab74ee2aedf609256d73620f690a370437afe304b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layoutAdmin.html.twig", "LIFOClassifBundle:Admin:allUser.html.twig", 1);
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
        $__internal_f3038cf6d7f652692c16c1cbfa95f0435d357ec80544d585b6b004975f646f7e = $this->env->getExtension("native_profiler");
        $__internal_f3038cf6d7f652692c16c1cbfa95f0435d357ec80544d585b6b004975f646f7e->enter($__internal_f3038cf6d7f652692c16c1cbfa95f0435d357ec80544d585b6b004975f646f7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Admin:allUser.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3038cf6d7f652692c16c1cbfa95f0435d357ec80544d585b6b004975f646f7e->leave($__internal_f3038cf6d7f652692c16c1cbfa95f0435d357ec80544d585b6b004975f646f7e_prof);

    }

    // line 3
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_c9a2c7d8e148ddb70e37adba33286acb38679aa7b45ac0748661afb0de9d366d = $this->env->getExtension("native_profiler");
        $__internal_c9a2c7d8e148ddb70e37adba33286acb38679aa7b45ac0748661afb0de9d366d->enter($__internal_c9a2c7d8e148ddb70e37adba33286acb38679aa7b45ac0748661afb0de9d366d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 4
        echo "


";
        
        $__internal_c9a2c7d8e148ddb70e37adba33286acb38679aa7b45ac0748661afb0de9d366d->leave($__internal_c9a2c7d8e148ddb70e37adba33286acb38679aa7b45ac0748661afb0de9d366d_prof);

    }

    public function getTemplateName()
    {
        return "LIFOClassifBundle:Admin:allUser.html.twig";
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
