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
        $__internal_04d7cbb87131856406cf43622fbd8342b3c8638d0bd81393140b522de2c8ab8b = $this->env->getExtension("native_profiler");
        $__internal_04d7cbb87131856406cf43622fbd8342b3c8638d0bd81393140b522de2c8ab8b->enter($__internal_04d7cbb87131856406cf43622fbd8342b3c8638d0bd81393140b522de2c8ab8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_04d7cbb87131856406cf43622fbd8342b3c8638d0bd81393140b522de2c8ab8b->leave($__internal_04d7cbb87131856406cf43622fbd8342b3c8638d0bd81393140b522de2c8ab8b_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_0627ba6a824c68cedc0087a6244086178260a5369de3102be1aba0778b8193a0 = $this->env->getExtension("native_profiler");
        $__internal_0627ba6a824c68cedc0087a6244086178260a5369de3102be1aba0778b8193a0->enter($__internal_0627ba6a824c68cedc0087a6244086178260a5369de3102be1aba0778b8193a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_0627ba6a824c68cedc0087a6244086178260a5369de3102be1aba0778b8193a0->leave($__internal_0627ba6a824c68cedc0087a6244086178260a5369de3102be1aba0778b8193a0_prof);

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
