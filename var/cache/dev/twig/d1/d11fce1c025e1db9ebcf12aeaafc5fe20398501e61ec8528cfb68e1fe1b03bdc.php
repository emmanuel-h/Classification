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
        $__internal_b46920d117fd45b263cf5f76cde0e70cd30faa6437af7af90211a516b44cd857 = $this->env->getExtension("native_profiler");
        $__internal_b46920d117fd45b263cf5f76cde0e70cd30faa6437af7af90211a516b44cd857->enter($__internal_b46920d117fd45b263cf5f76cde0e70cd30faa6437af7af90211a516b44cd857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/Admin/admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b46920d117fd45b263cf5f76cde0e70cd30faa6437af7af90211a516b44cd857->leave($__internal_b46920d117fd45b263cf5f76cde0e70cd30faa6437af7af90211a516b44cd857_prof);

    }

    // line 3
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_827b1404a2b8fb4ff3c3305a8ac1738e30d756f4eab3fc35ccb7644f0995bbc3 = $this->env->getExtension("native_profiler");
        $__internal_827b1404a2b8fb4ff3c3305a8ac1738e30d756f4eab3fc35ccb7644f0995bbc3->enter($__internal_827b1404a2b8fb4ff3c3305a8ac1738e30d756f4eab3fc35ccb7644f0995bbc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 4
        echo "


";
        
        $__internal_827b1404a2b8fb4ff3c3305a8ac1738e30d756f4eab3fc35ccb7644f0995bbc3->leave($__internal_827b1404a2b8fb4ff3c3305a8ac1738e30d756f4eab3fc35ccb7644f0995bbc3_prof);

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
