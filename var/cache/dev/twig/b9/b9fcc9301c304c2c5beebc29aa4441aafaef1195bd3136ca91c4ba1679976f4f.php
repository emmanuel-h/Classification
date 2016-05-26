<?php

/* LIFOClassifBundle::layoutAdmin.html.twig */
class __TwigTemplate_bc85a8408e10c2b4663222f7de80f72f7ddde689141173b4df11892d438f4dfb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "LIFOClassifBundle::layoutAdmin.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'LIFOClassif_body' => array($this, 'block_LIFOClassif_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cb8e859ac90b55b674c53197c0ab574b1c90831ac47251697bff25c6ac203f1f = $this->env->getExtension("native_profiler");
        $__internal_cb8e859ac90b55b674c53197c0ab574b1c90831ac47251697bff25c6ac203f1f->enter($__internal_cb8e859ac90b55b674c53197c0ab574b1c90831ac47251697bff25c6ac203f1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle::layoutAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb8e859ac90b55b674c53197c0ab574b1c90831ac47251697bff25c6ac203f1f->leave($__internal_cb8e859ac90b55b674c53197c0ab574b1c90831ac47251697bff25c6ac203f1f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6c4534c24e5ffddb4c6b6092294a9c71d0a6931ec4c410639fd16877a1f6b8d8 = $this->env->getExtension("native_profiler");
        $__internal_6c4534c24e5ffddb4c6b6092294a9c71d0a6931ec4c410639fd16877a1f6b8d8->enter($__internal_6c4534c24e5ffddb4c6b6092294a9c71d0a6931ec4c410639fd16877a1f6b8d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    \t";
        // line 5
        $this->displayBlock('LIFOClassif_body', $context, $blocks);
        // line 7
        echo "    \t
    ";
        
        $__internal_6c4534c24e5ffddb4c6b6092294a9c71d0a6931ec4c410639fd16877a1f6b8d8->leave($__internal_6c4534c24e5ffddb4c6b6092294a9c71d0a6931ec4c410639fd16877a1f6b8d8_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_ccb7323ed7b9a69535ac50ca3f5850d56b817c4738c223752555c505e91367f6 = $this->env->getExtension("native_profiler");
        $__internal_ccb7323ed7b9a69535ac50ca3f5850d56b817c4738c223752555c505e91367f6->enter($__internal_ccb7323ed7b9a69535ac50ca3f5850d56b817c4738c223752555c505e91367f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "    \t";
        
        $__internal_ccb7323ed7b9a69535ac50ca3f5850d56b817c4738c223752555c505e91367f6->leave($__internal_ccb7323ed7b9a69535ac50ca3f5850d56b817c4738c223752555c505e91367f6_prof);

    }

    public function getTemplateName()
    {
        return "LIFOClassifBundle::layoutAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 6,  54 => 5,  46 => 7,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/*     {% block body %}*/
/*     */
/*     	{% block LIFOClassif_body %}*/
/*     	{% endblock %}*/
/*     	*/
/*     {% endblock %}*/
/* */
