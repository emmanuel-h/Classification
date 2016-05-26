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
        $__internal_7fb9a271acc7a3081bf8b0197bb696e270f44651a11364f4b4cc4ae99e7c522b = $this->env->getExtension("native_profiler");
        $__internal_7fb9a271acc7a3081bf8b0197bb696e270f44651a11364f4b4cc4ae99e7c522b->enter($__internal_7fb9a271acc7a3081bf8b0197bb696e270f44651a11364f4b4cc4ae99e7c522b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_7fb9a271acc7a3081bf8b0197bb696e270f44651a11364f4b4cc4ae99e7c522b->leave($__internal_7fb9a271acc7a3081bf8b0197bb696e270f44651a11364f4b4cc4ae99e7c522b_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_7b07d6008726db0d6e484508d1e8f31d381b8577ff564c9400cb546c7610dbdc = $this->env->getExtension("native_profiler");
        $__internal_7b07d6008726db0d6e484508d1e8f31d381b8577ff564c9400cb546c7610dbdc->enter($__internal_7b07d6008726db0d6e484508d1e8f31d381b8577ff564c9400cb546c7610dbdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_7b07d6008726db0d6e484508d1e8f31d381b8577ff564c9400cb546c7610dbdc->leave($__internal_7b07d6008726db0d6e484508d1e8f31d381b8577ff564c9400cb546c7610dbdc_prof);

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
