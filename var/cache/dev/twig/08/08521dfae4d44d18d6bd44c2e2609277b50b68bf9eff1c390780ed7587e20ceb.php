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
        $__internal_6d99b385fbd38e96d3c1f7256eb0a23284fdab929a0914a41ce1cb3740e9cbcc = $this->env->getExtension("native_profiler");
        $__internal_6d99b385fbd38e96d3c1f7256eb0a23284fdab929a0914a41ce1cb3740e9cbcc->enter($__internal_6d99b385fbd38e96d3c1f7256eb0a23284fdab929a0914a41ce1cb3740e9cbcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/layoutAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d99b385fbd38e96d3c1f7256eb0a23284fdab929a0914a41ce1cb3740e9cbcc->leave($__internal_6d99b385fbd38e96d3c1f7256eb0a23284fdab929a0914a41ce1cb3740e9cbcc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1f8574bd2a6a636860fc035e86c04b84c83c698c281f7e177d42bb83b281d1ad = $this->env->getExtension("native_profiler");
        $__internal_1f8574bd2a6a636860fc035e86c04b84c83c698c281f7e177d42bb83b281d1ad->enter($__internal_1f8574bd2a6a636860fc035e86c04b84c83c698c281f7e177d42bb83b281d1ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    \t";
        // line 5
        $this->displayBlock('LIFOClassif_body', $context, $blocks);
        // line 7
        echo "    \t
    ";
        
        $__internal_1f8574bd2a6a636860fc035e86c04b84c83c698c281f7e177d42bb83b281d1ad->leave($__internal_1f8574bd2a6a636860fc035e86c04b84c83c698c281f7e177d42bb83b281d1ad_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_f4fe4e08d6265be783de9bc4c647f2f6bdc3f4af6cd210dc60e2fa38fc6abcbf = $this->env->getExtension("native_profiler");
        $__internal_f4fe4e08d6265be783de9bc4c647f2f6bdc3f4af6cd210dc60e2fa38fc6abcbf->enter($__internal_f4fe4e08d6265be783de9bc4c647f2f6bdc3f4af6cd210dc60e2fa38fc6abcbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "    \t";
        
        $__internal_f4fe4e08d6265be783de9bc4c647f2f6bdc3f4af6cd210dc60e2fa38fc6abcbf->leave($__internal_f4fe4e08d6265be783de9bc4c647f2f6bdc3f4af6cd210dc60e2fa38fc6abcbf_prof);

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
