<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_a5ecdd802e9cbfe814a9789cf6a9d16d56e6e475a7db73def5541a4f2b5dd87a extends Twig_Template
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
        $__internal_7bb0ba5e3bd1c5de742b654263b9239ef8fb72b90ee19f43f5a860d7346df2ea = $this->env->getExtension("native_profiler");
        $__internal_7bb0ba5e3bd1c5de742b654263b9239ef8fb72b90ee19f43f5a860d7346df2ea->enter($__internal_7bb0ba5e3bd1c5de742b654263b9239ef8fb72b90ee19f43f5a860d7346df2ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_7bb0ba5e3bd1c5de742b654263b9239ef8fb72b90ee19f43f5a860d7346df2ea->leave($__internal_7bb0ba5e3bd1c5de742b654263b9239ef8fb72b90ee19f43f5a860d7346df2ea_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_b2a530188baf76e3657b3f83bdf5cb08debd3c24027b6cae5b43fac95e664163 = $this->env->getExtension("native_profiler");
        $__internal_b2a530188baf76e3657b3f83bdf5cb08debd3c24027b6cae5b43fac95e664163->enter($__internal_b2a530188baf76e3657b3f83bdf5cb08debd3c24027b6cae5b43fac95e664163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_b2a530188baf76e3657b3f83bdf5cb08debd3c24027b6cae5b43fac95e664163->leave($__internal_b2a530188baf76e3657b3f83bdf5cb08debd3c24027b6cae5b43fac95e664163_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
