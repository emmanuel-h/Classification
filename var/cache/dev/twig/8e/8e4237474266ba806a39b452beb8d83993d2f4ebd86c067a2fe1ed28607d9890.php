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
        $__internal_d6202c53f4cd535603f4812d20f87121d08b7cd91273e9016020f6226a144bbe = $this->env->getExtension("native_profiler");
        $__internal_d6202c53f4cd535603f4812d20f87121d08b7cd91273e9016020f6226a144bbe->enter($__internal_d6202c53f4cd535603f4812d20f87121d08b7cd91273e9016020f6226a144bbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d6202c53f4cd535603f4812d20f87121d08b7cd91273e9016020f6226a144bbe->leave($__internal_d6202c53f4cd535603f4812d20f87121d08b7cd91273e9016020f6226a144bbe_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_4322da22d997a2d85933987bc00423c097d067c93ea367b925c62978f4efb3cf = $this->env->getExtension("native_profiler");
        $__internal_4322da22d997a2d85933987bc00423c097d067c93ea367b925c62978f4efb3cf->enter($__internal_4322da22d997a2d85933987bc00423c097d067c93ea367b925c62978f4efb3cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_4322da22d997a2d85933987bc00423c097d067c93ea367b925c62978f4efb3cf->leave($__internal_4322da22d997a2d85933987bc00423c097d067c93ea367b925c62978f4efb3cf_prof);

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
