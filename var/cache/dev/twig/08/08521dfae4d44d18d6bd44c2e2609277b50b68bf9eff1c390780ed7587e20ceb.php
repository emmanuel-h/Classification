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
        $__internal_20d85378748e7a058ae558ddbf03d78e9957295b1616d170ad117035c9a9b570 = $this->env->getExtension("native_profiler");
        $__internal_20d85378748e7a058ae558ddbf03d78e9957295b1616d170ad117035c9a9b570->enter($__internal_20d85378748e7a058ae558ddbf03d78e9957295b1616d170ad117035c9a9b570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/layoutAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20d85378748e7a058ae558ddbf03d78e9957295b1616d170ad117035c9a9b570->leave($__internal_20d85378748e7a058ae558ddbf03d78e9957295b1616d170ad117035c9a9b570_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f22e1acf5680683a301f7f7586fddd995541c51f227f82a79377fd8514e53718 = $this->env->getExtension("native_profiler");
        $__internal_f22e1acf5680683a301f7f7586fddd995541c51f227f82a79377fd8514e53718->enter($__internal_f22e1acf5680683a301f7f7586fddd995541c51f227f82a79377fd8514e53718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    \t";
        // line 5
        $this->displayBlock('LIFOClassif_body', $context, $blocks);
        // line 7
        echo "    \t
    ";
        
        $__internal_f22e1acf5680683a301f7f7586fddd995541c51f227f82a79377fd8514e53718->leave($__internal_f22e1acf5680683a301f7f7586fddd995541c51f227f82a79377fd8514e53718_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_c4c411a9135e7dc23660cdfc38324f92709e5f91704b71f23cae3c8c5f3f560d = $this->env->getExtension("native_profiler");
        $__internal_c4c411a9135e7dc23660cdfc38324f92709e5f91704b71f23cae3c8c5f3f560d->enter($__internal_c4c411a9135e7dc23660cdfc38324f92709e5f91704b71f23cae3c8c5f3f560d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "    \t";
        
        $__internal_c4c411a9135e7dc23660cdfc38324f92709e5f91704b71f23cae3c8c5f3f560d->leave($__internal_c4c411a9135e7dc23660cdfc38324f92709e5f91704b71f23cae3c8c5f3f560d_prof);

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
