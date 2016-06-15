<?php

/* @LIFOClassif/layoutAdmin.html.twig */
class __TwigTemplate_738ca7cff67840c621883672b451ebea236f34427d0386e3a0096ddac1f6b228 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@LIFOClassif/layoutAdmin.html.twig", 1);
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
        $__internal_6d2aa19aeea8df5fa2dc4fcea516871f423244fb9953a05a68fc1b8e20204982 = $this->env->getExtension("native_profiler");
        $__internal_6d2aa19aeea8df5fa2dc4fcea516871f423244fb9953a05a68fc1b8e20204982->enter($__internal_6d2aa19aeea8df5fa2dc4fcea516871f423244fb9953a05a68fc1b8e20204982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/layoutAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d2aa19aeea8df5fa2dc4fcea516871f423244fb9953a05a68fc1b8e20204982->leave($__internal_6d2aa19aeea8df5fa2dc4fcea516871f423244fb9953a05a68fc1b8e20204982_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1f53e419362ee0e191a9d0a4506f5aa342e834a3ee566594197058b3598063a1 = $this->env->getExtension("native_profiler");
        $__internal_1f53e419362ee0e191a9d0a4506f5aa342e834a3ee566594197058b3598063a1->enter($__internal_1f53e419362ee0e191a9d0a4506f5aa342e834a3ee566594197058b3598063a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    \t";
        // line 5
        $this->displayBlock('LIFOClassif_body', $context, $blocks);
        // line 7
        echo "    \t
    ";
        
        $__internal_1f53e419362ee0e191a9d0a4506f5aa342e834a3ee566594197058b3598063a1->leave($__internal_1f53e419362ee0e191a9d0a4506f5aa342e834a3ee566594197058b3598063a1_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_b8c3450a77d66b744c623e3caab309d1f7d99f7771da323520a27bae4a707e54 = $this->env->getExtension("native_profiler");
        $__internal_b8c3450a77d66b744c623e3caab309d1f7d99f7771da323520a27bae4a707e54->enter($__internal_b8c3450a77d66b744c623e3caab309d1f7d99f7771da323520a27bae4a707e54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "    \t";
        
        $__internal_b8c3450a77d66b744c623e3caab309d1f7d99f7771da323520a27bae4a707e54->leave($__internal_b8c3450a77d66b744c623e3caab309d1f7d99f7771da323520a27bae4a707e54_prof);

    }

    public function getTemplateName()
    {
        return "@LIFOClassif/layoutAdmin.html.twig";
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
