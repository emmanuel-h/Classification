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
        $__internal_c82876a27c00487bae8fd22dac76828ca5836d34a6c6953570b88ef66e6bad53 = $this->env->getExtension("native_profiler");
        $__internal_c82876a27c00487bae8fd22dac76828ca5836d34a6c6953570b88ef66e6bad53->enter($__internal_c82876a27c00487bae8fd22dac76828ca5836d34a6c6953570b88ef66e6bad53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_c82876a27c00487bae8fd22dac76828ca5836d34a6c6953570b88ef66e6bad53->leave($__internal_c82876a27c00487bae8fd22dac76828ca5836d34a6c6953570b88ef66e6bad53_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_216538fb30957738d4b0d10ded7d27cfca191c6effe14c4ca62776e82e7139a2 = $this->env->getExtension("native_profiler");
        $__internal_216538fb30957738d4b0d10ded7d27cfca191c6effe14c4ca62776e82e7139a2->enter($__internal_216538fb30957738d4b0d10ded7d27cfca191c6effe14c4ca62776e82e7139a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_216538fb30957738d4b0d10ded7d27cfca191c6effe14c4ca62776e82e7139a2->leave($__internal_216538fb30957738d4b0d10ded7d27cfca191c6effe14c4ca62776e82e7139a2_prof);

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
