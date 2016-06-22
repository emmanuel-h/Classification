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
        $__internal_db8f63fc3c71cdd63733921bef44b3cec3a17afb41adc36816bf408ffe59e9dd = $this->env->getExtension("native_profiler");
        $__internal_db8f63fc3c71cdd63733921bef44b3cec3a17afb41adc36816bf408ffe59e9dd->enter($__internal_db8f63fc3c71cdd63733921bef44b3cec3a17afb41adc36816bf408ffe59e9dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle::layoutAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db8f63fc3c71cdd63733921bef44b3cec3a17afb41adc36816bf408ffe59e9dd->leave($__internal_db8f63fc3c71cdd63733921bef44b3cec3a17afb41adc36816bf408ffe59e9dd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_06ef8ea5e66ca8912d77624523744751c7a28db6d4d65bd6aa2555597430bcd8 = $this->env->getExtension("native_profiler");
        $__internal_06ef8ea5e66ca8912d77624523744751c7a28db6d4d65bd6aa2555597430bcd8->enter($__internal_06ef8ea5e66ca8912d77624523744751c7a28db6d4d65bd6aa2555597430bcd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    \t";
        // line 5
        $this->displayBlock('LIFOClassif_body', $context, $blocks);
        // line 7
        echo "    \t
    ";
        
        $__internal_06ef8ea5e66ca8912d77624523744751c7a28db6d4d65bd6aa2555597430bcd8->leave($__internal_06ef8ea5e66ca8912d77624523744751c7a28db6d4d65bd6aa2555597430bcd8_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_f6654946d54576875e2f46d694385e2ca807b455220c528d19e771521c5e9a0d = $this->env->getExtension("native_profiler");
        $__internal_f6654946d54576875e2f46d694385e2ca807b455220c528d19e771521c5e9a0d->enter($__internal_f6654946d54576875e2f46d694385e2ca807b455220c528d19e771521c5e9a0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "    \t";
        
        $__internal_f6654946d54576875e2f46d694385e2ca807b455220c528d19e771521c5e9a0d->leave($__internal_f6654946d54576875e2f46d694385e2ca807b455220c528d19e771521c5e9a0d_prof);

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
