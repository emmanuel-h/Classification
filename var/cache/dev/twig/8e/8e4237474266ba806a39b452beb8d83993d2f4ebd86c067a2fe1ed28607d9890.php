<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_4e2691f36aec702decc12117c27c1b29b27980c91cab4868bb4664fa253d059e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_964ab1d2419e86d6b2c4f7e02b17c041500b03a04c51330ba61a5f9e3b26db48 = $this->env->getExtension("native_profiler");
        $__internal_964ab1d2419e86d6b2c4f7e02b17c041500b03a04c51330ba61a5f9e3b26db48->enter($__internal_964ab1d2419e86d6b2c4f7e02b17c041500b03a04c51330ba61a5f9e3b26db48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_964ab1d2419e86d6b2c4f7e02b17c041500b03a04c51330ba61a5f9e3b26db48->leave($__internal_964ab1d2419e86d6b2c4f7e02b17c041500b03a04c51330ba61a5f9e3b26db48_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_53f9f066f2d2589ee7f85a3efbe136432533295f1ab27a3d19043f6aff6527f1 = $this->env->getExtension("native_profiler");
        $__internal_53f9f066f2d2589ee7f85a3efbe136432533295f1ab27a3d19043f6aff6527f1->enter($__internal_53f9f066f2d2589ee7f85a3efbe136432533295f1ab27a3d19043f6aff6527f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_53f9f066f2d2589ee7f85a3efbe136432533295f1ab27a3d19043f6aff6527f1->leave($__internal_53f9f066f2d2589ee7f85a3efbe136432533295f1ab27a3d19043f6aff6527f1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
