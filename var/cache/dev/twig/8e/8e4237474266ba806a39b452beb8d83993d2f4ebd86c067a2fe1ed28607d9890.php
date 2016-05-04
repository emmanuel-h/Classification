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
        $__internal_7ddde000f135bbc84fabd6182cf488ec693ac33f827866da42d5de5dd9b71dd1 = $this->env->getExtension("native_profiler");
        $__internal_7ddde000f135bbc84fabd6182cf488ec693ac33f827866da42d5de5dd9b71dd1->enter($__internal_7ddde000f135bbc84fabd6182cf488ec693ac33f827866da42d5de5dd9b71dd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_7ddde000f135bbc84fabd6182cf488ec693ac33f827866da42d5de5dd9b71dd1->leave($__internal_7ddde000f135bbc84fabd6182cf488ec693ac33f827866da42d5de5dd9b71dd1_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c4a4af87f0db50985c68756d38ed7def1cca90eceb2607cf488879dca179b978 = $this->env->getExtension("native_profiler");
        $__internal_c4a4af87f0db50985c68756d38ed7def1cca90eceb2607cf488879dca179b978->enter($__internal_c4a4af87f0db50985c68756d38ed7def1cca90eceb2607cf488879dca179b978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c4a4af87f0db50985c68756d38ed7def1cca90eceb2607cf488879dca179b978->leave($__internal_c4a4af87f0db50985c68756d38ed7def1cca90eceb2607cf488879dca179b978_prof);

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
