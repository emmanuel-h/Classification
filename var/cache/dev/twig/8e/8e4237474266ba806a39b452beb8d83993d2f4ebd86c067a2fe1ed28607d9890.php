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
        $__internal_efbe9f8cb061b7d83a079d6c8796de73d5195613790929d881e62e9048a837ba = $this->env->getExtension("native_profiler");
        $__internal_efbe9f8cb061b7d83a079d6c8796de73d5195613790929d881e62e9048a837ba->enter($__internal_efbe9f8cb061b7d83a079d6c8796de73d5195613790929d881e62e9048a837ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_efbe9f8cb061b7d83a079d6c8796de73d5195613790929d881e62e9048a837ba->leave($__internal_efbe9f8cb061b7d83a079d6c8796de73d5195613790929d881e62e9048a837ba_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_fcfb819e35b03f5e55bcbc657c8dd90aff363d4f0e0e701ca74297dbed96a07b = $this->env->getExtension("native_profiler");
        $__internal_fcfb819e35b03f5e55bcbc657c8dd90aff363d4f0e0e701ca74297dbed96a07b->enter($__internal_fcfb819e35b03f5e55bcbc657c8dd90aff363d4f0e0e701ca74297dbed96a07b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_fcfb819e35b03f5e55bcbc657c8dd90aff363d4f0e0e701ca74297dbed96a07b->leave($__internal_fcfb819e35b03f5e55bcbc657c8dd90aff363d4f0e0e701ca74297dbed96a07b_prof);

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
