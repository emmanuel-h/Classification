<?php

/* @LIFOClassif/Admin/allUser.html.twig */
class __TwigTemplate_427992a60deab48d8dbdd41e54cd4cac79194d110551dffab8cc5afc152b1c65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LIFOClassifBundle::layoutAdmin.html.twig", "@LIFOClassif/Admin/allUser.html.twig", 1);
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
        $__internal_16fa4df5e6c8ac79511e98d08f4a159a578ecc4a6d4d495124d6c580fcadd9a7 = $this->env->getExtension("native_profiler");
        $__internal_16fa4df5e6c8ac79511e98d08f4a159a578ecc4a6d4d495124d6c580fcadd9a7->enter($__internal_16fa4df5e6c8ac79511e98d08f4a159a578ecc4a6d4d495124d6c580fcadd9a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Admin/allUser.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16fa4df5e6c8ac79511e98d08f4a159a578ecc4a6d4d495124d6c580fcadd9a7->leave($__internal_16fa4df5e6c8ac79511e98d08f4a159a578ecc4a6d4d495124d6c580fcadd9a7_prof);

    }

    // line 3
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_cab40a98b861a3c935bfbb52d201906b8e6cbf5cafb0f59566390cbd6de94f6e = $this->env->getExtension("native_profiler");
        $__internal_cab40a98b861a3c935bfbb52d201906b8e6cbf5cafb0f59566390cbd6de94f6e->enter($__internal_cab40a98b861a3c935bfbb52d201906b8e6cbf5cafb0f59566390cbd6de94f6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 4
        echo "


";
        
        $__internal_cab40a98b861a3c935bfbb52d201906b8e6cbf5cafb0f59566390cbd6de94f6e->leave($__internal_cab40a98b861a3c935bfbb52d201906b8e6cbf5cafb0f59566390cbd6de94f6e_prof);

    }

    public function getTemplateName()
    {
        return "@LIFOClassif/Admin/allUser.html.twig";
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
