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
        $__internal_af263db85eb0b57762f578948faddd093f08175b067f5794fd1a58c24da84a98 = $this->env->getExtension("native_profiler");
        $__internal_af263db85eb0b57762f578948faddd093f08175b067f5794fd1a58c24da84a98->enter($__internal_af263db85eb0b57762f578948faddd093f08175b067f5794fd1a58c24da84a98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_af263db85eb0b57762f578948faddd093f08175b067f5794fd1a58c24da84a98->leave($__internal_af263db85eb0b57762f578948faddd093f08175b067f5794fd1a58c24da84a98_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_7213e27ce13fbf83a4b2046ff1efa818e31bed628e03eec0fcb227ae450c3c9d = $this->env->getExtension("native_profiler");
        $__internal_7213e27ce13fbf83a4b2046ff1efa818e31bed628e03eec0fcb227ae450c3c9d->enter($__internal_7213e27ce13fbf83a4b2046ff1efa818e31bed628e03eec0fcb227ae450c3c9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_7213e27ce13fbf83a4b2046ff1efa818e31bed628e03eec0fcb227ae450c3c9d->leave($__internal_7213e27ce13fbf83a4b2046ff1efa818e31bed628e03eec0fcb227ae450c3c9d_prof);

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
