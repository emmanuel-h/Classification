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
        $__internal_a2fc184a9c540629e27c69fb56c1f86551120b476770c284c8cee0f4fd532573 = $this->env->getExtension("native_profiler");
        $__internal_a2fc184a9c540629e27c69fb56c1f86551120b476770c284c8cee0f4fd532573->enter($__internal_a2fc184a9c540629e27c69fb56c1f86551120b476770c284c8cee0f4fd532573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Admin/admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2fc184a9c540629e27c69fb56c1f86551120b476770c284c8cee0f4fd532573->leave($__internal_a2fc184a9c540629e27c69fb56c1f86551120b476770c284c8cee0f4fd532573_prof);

    }

    // line 3
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_a7d602fb368c441bdf4137d9b3d683f6a71797be5de9036024e81f7d40cf8705 = $this->env->getExtension("native_profiler");
        $__internal_a7d602fb368c441bdf4137d9b3d683f6a71797be5de9036024e81f7d40cf8705->enter($__internal_a7d602fb368c441bdf4137d9b3d683f6a71797be5de9036024e81f7d40cf8705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 4
        echo "


";
        
        $__internal_a7d602fb368c441bdf4137d9b3d683f6a71797be5de9036024e81f7d40cf8705->leave($__internal_a7d602fb368c441bdf4137d9b3d683f6a71797be5de9036024e81f7d40cf8705_prof);

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
