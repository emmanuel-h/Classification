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
        $__internal_f3422ebf4ae0c077738fca47d833229048b53d7507fec9b6c27581c6d3c84fc7 = $this->env->getExtension("native_profiler");
        $__internal_f3422ebf4ae0c077738fca47d833229048b53d7507fec9b6c27581c6d3c84fc7->enter($__internal_f3422ebf4ae0c077738fca47d833229048b53d7507fec9b6c27581c6d3c84fc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f3422ebf4ae0c077738fca47d833229048b53d7507fec9b6c27581c6d3c84fc7->leave($__internal_f3422ebf4ae0c077738fca47d833229048b53d7507fec9b6c27581c6d3c84fc7_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_cf971f8b1e85a0c00ed1e2f94e98c67b5a3360c1b8c0f9fef2b1ed6935157176 = $this->env->getExtension("native_profiler");
        $__internal_cf971f8b1e85a0c00ed1e2f94e98c67b5a3360c1b8c0f9fef2b1ed6935157176->enter($__internal_cf971f8b1e85a0c00ed1e2f94e98c67b5a3360c1b8c0f9fef2b1ed6935157176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_cf971f8b1e85a0c00ed1e2f94e98c67b5a3360c1b8c0f9fef2b1ed6935157176->leave($__internal_cf971f8b1e85a0c00ed1e2f94e98c67b5a3360c1b8c0f9fef2b1ed6935157176_prof);

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
