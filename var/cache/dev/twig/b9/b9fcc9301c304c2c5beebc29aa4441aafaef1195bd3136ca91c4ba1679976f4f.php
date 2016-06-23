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
        $__internal_6567e7d9bf8d4baea31a43e57e2e760a9b8bbb36334d91f299dd1f4f311e8cc7 = $this->env->getExtension("native_profiler");
        $__internal_6567e7d9bf8d4baea31a43e57e2e760a9b8bbb36334d91f299dd1f4f311e8cc7->enter($__internal_6567e7d9bf8d4baea31a43e57e2e760a9b8bbb36334d91f299dd1f4f311e8cc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle::layoutAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6567e7d9bf8d4baea31a43e57e2e760a9b8bbb36334d91f299dd1f4f311e8cc7->leave($__internal_6567e7d9bf8d4baea31a43e57e2e760a9b8bbb36334d91f299dd1f4f311e8cc7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_df80a5b3b3e77399f23f188113297b7f45cfe2de0e0e628ee8f02b5f54733a93 = $this->env->getExtension("native_profiler");
        $__internal_df80a5b3b3e77399f23f188113297b7f45cfe2de0e0e628ee8f02b5f54733a93->enter($__internal_df80a5b3b3e77399f23f188113297b7f45cfe2de0e0e628ee8f02b5f54733a93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    \t";
        // line 5
        $this->displayBlock('LIFOClassif_body', $context, $blocks);
        // line 7
        echo "    \t
    ";
        
        $__internal_df80a5b3b3e77399f23f188113297b7f45cfe2de0e0e628ee8f02b5f54733a93->leave($__internal_df80a5b3b3e77399f23f188113297b7f45cfe2de0e0e628ee8f02b5f54733a93_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_f6c3ea02bba88726728c9fe82983009367bebc5362769359239e834472186fd4 = $this->env->getExtension("native_profiler");
        $__internal_f6c3ea02bba88726728c9fe82983009367bebc5362769359239e834472186fd4->enter($__internal_f6c3ea02bba88726728c9fe82983009367bebc5362769359239e834472186fd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "    \t";
        
        $__internal_f6c3ea02bba88726728c9fe82983009367bebc5362769359239e834472186fd4->leave($__internal_f6c3ea02bba88726728c9fe82983009367bebc5362769359239e834472186fd4_prof);

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
