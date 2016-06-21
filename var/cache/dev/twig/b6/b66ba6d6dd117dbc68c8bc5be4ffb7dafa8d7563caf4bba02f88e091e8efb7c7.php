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
        $__internal_1461d908e206dce8c151149b35a1c45ac48b836a1fedd19ead1a10842e28b9c8 = $this->env->getExtension("native_profiler");
        $__internal_1461d908e206dce8c151149b35a1c45ac48b836a1fedd19ead1a10842e28b9c8->enter($__internal_1461d908e206dce8c151149b35a1c45ac48b836a1fedd19ead1a10842e28b9c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle:Admin:admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1461d908e206dce8c151149b35a1c45ac48b836a1fedd19ead1a10842e28b9c8->leave($__internal_1461d908e206dce8c151149b35a1c45ac48b836a1fedd19ead1a10842e28b9c8_prof);

    }

    // line 3
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_788e4d36551dee3d24aecd59360d2888a05e220c3039951ccc6962ee5867b92f = $this->env->getExtension("native_profiler");
        $__internal_788e4d36551dee3d24aecd59360d2888a05e220c3039951ccc6962ee5867b92f->enter($__internal_788e4d36551dee3d24aecd59360d2888a05e220c3039951ccc6962ee5867b92f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 4
        echo "


";
        
        $__internal_788e4d36551dee3d24aecd59360d2888a05e220c3039951ccc6962ee5867b92f->leave($__internal_788e4d36551dee3d24aecd59360d2888a05e220c3039951ccc6962ee5867b92f_prof);

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
