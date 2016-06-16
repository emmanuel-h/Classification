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
        $__internal_e71b9ad448ebe60dd31267f532dea25c3bec63230c40eafea92c6df1f84c603b = $this->env->getExtension("native_profiler");
        $__internal_e71b9ad448ebe60dd31267f532dea25c3bec63230c40eafea92c6df1f84c603b->enter($__internal_e71b9ad448ebe60dd31267f532dea25c3bec63230c40eafea92c6df1f84c603b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_e71b9ad448ebe60dd31267f532dea25c3bec63230c40eafea92c6df1f84c603b->leave($__internal_e71b9ad448ebe60dd31267f532dea25c3bec63230c40eafea92c6df1f84c603b_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_7d10fb4130fecf970dff9aee9525fcef901cb4139b6c27720e30ff234969d444 = $this->env->getExtension("native_profiler");
        $__internal_7d10fb4130fecf970dff9aee9525fcef901cb4139b6c27720e30ff234969d444->enter($__internal_7d10fb4130fecf970dff9aee9525fcef901cb4139b6c27720e30ff234969d444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_7d10fb4130fecf970dff9aee9525fcef901cb4139b6c27720e30ff234969d444->leave($__internal_7d10fb4130fecf970dff9aee9525fcef901cb4139b6c27720e30ff234969d444_prof);

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
