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
        $__internal_766467c66adcb4cf3e7f4903043dbdf94fc95a9b004d62935fbaf30b10a5e266 = $this->env->getExtension("native_profiler");
        $__internal_766467c66adcb4cf3e7f4903043dbdf94fc95a9b004d62935fbaf30b10a5e266->enter($__internal_766467c66adcb4cf3e7f4903043dbdf94fc95a9b004d62935fbaf30b10a5e266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Admin/admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_766467c66adcb4cf3e7f4903043dbdf94fc95a9b004d62935fbaf30b10a5e266->leave($__internal_766467c66adcb4cf3e7f4903043dbdf94fc95a9b004d62935fbaf30b10a5e266_prof);

    }

    // line 3
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_4e47601fbd1bcaf4169f80fdee38d52d2eb270838902188560147377cdc3ce5a = $this->env->getExtension("native_profiler");
        $__internal_4e47601fbd1bcaf4169f80fdee38d52d2eb270838902188560147377cdc3ce5a->enter($__internal_4e47601fbd1bcaf4169f80fdee38d52d2eb270838902188560147377cdc3ce5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 4
        echo "


";
        
        $__internal_4e47601fbd1bcaf4169f80fdee38d52d2eb270838902188560147377cdc3ce5a->leave($__internal_4e47601fbd1bcaf4169f80fdee38d52d2eb270838902188560147377cdc3ce5a_prof);

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
