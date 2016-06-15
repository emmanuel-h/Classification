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
        $__internal_fbe785ae0a102c152ac94221a3163f89c93553be21563c1ed557f07d4e30a844 = $this->env->getExtension("native_profiler");
        $__internal_fbe785ae0a102c152ac94221a3163f89c93553be21563c1ed557f07d4e30a844->enter($__internal_fbe785ae0a102c152ac94221a3163f89c93553be21563c1ed557f07d4e30a844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Admin:admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbe785ae0a102c152ac94221a3163f89c93553be21563c1ed557f07d4e30a844->leave($__internal_fbe785ae0a102c152ac94221a3163f89c93553be21563c1ed557f07d4e30a844_prof);

    }

    // line 3
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_0cba8b06e7ca68a2cd5becb1e698490be626c6a647caca4c1ebd8e2f860671c6 = $this->env->getExtension("native_profiler");
        $__internal_0cba8b06e7ca68a2cd5becb1e698490be626c6a647caca4c1ebd8e2f860671c6->enter($__internal_0cba8b06e7ca68a2cd5becb1e698490be626c6a647caca4c1ebd8e2f860671c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 4
        echo "


";
        
        $__internal_0cba8b06e7ca68a2cd5becb1e698490be626c6a647caca4c1ebd8e2f860671c6->leave($__internal_0cba8b06e7ca68a2cd5becb1e698490be626c6a647caca4c1ebd8e2f860671c6_prof);

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
