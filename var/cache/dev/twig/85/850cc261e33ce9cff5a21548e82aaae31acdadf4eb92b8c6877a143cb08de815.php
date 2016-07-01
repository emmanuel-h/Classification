<?php

/* @LIFOClassif/layoutGeneral.html.twig */
class __TwigTemplate_92ffdd026c92cb435e6b726c60ff8095ea19bec95e56589508b6bafa81643146 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@LIFOClassif/layoutGeneral.html.twig", 1);
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
        $__internal_ef208686f3fb6966ecc1bc98b28245d7216c54953e3e63a69c962a07829df4d6 = $this->env->getExtension("native_profiler");
        $__internal_ef208686f3fb6966ecc1bc98b28245d7216c54953e3e63a69c962a07829df4d6->enter($__internal_ef208686f3fb6966ecc1bc98b28245d7216c54953e3e63a69c962a07829df4d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/layoutGeneral.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef208686f3fb6966ecc1bc98b28245d7216c54953e3e63a69c962a07829df4d6->leave($__internal_ef208686f3fb6966ecc1bc98b28245d7216c54953e3e63a69c962a07829df4d6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b0bc367cf37ca6d13f5541b34d3589c46464ed0b2e384e8ee14c1b1141240343 = $this->env->getExtension("native_profiler");
        $__internal_b0bc367cf37ca6d13f5541b34d3589c46464ed0b2e384e8ee14c1b1141240343->enter($__internal_b0bc367cf37ca6d13f5541b34d3589c46464ed0b2e384e8ee14c1b1141240343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    \t";
        // line 5
        $this->displayBlock('LIFOClassif_body', $context, $blocks);
        // line 7
        echo "    \t
    ";
        
        $__internal_b0bc367cf37ca6d13f5541b34d3589c46464ed0b2e384e8ee14c1b1141240343->leave($__internal_b0bc367cf37ca6d13f5541b34d3589c46464ed0b2e384e8ee14c1b1141240343_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_c91a9da1c3a50c1459c494513e60af5cd07860f9d4bedad737526c8bab101ea8 = $this->env->getExtension("native_profiler");
        $__internal_c91a9da1c3a50c1459c494513e60af5cd07860f9d4bedad737526c8bab101ea8->enter($__internal_c91a9da1c3a50c1459c494513e60af5cd07860f9d4bedad737526c8bab101ea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "    \t";
        
        $__internal_c91a9da1c3a50c1459c494513e60af5cd07860f9d4bedad737526c8bab101ea8->leave($__internal_c91a9da1c3a50c1459c494513e60af5cd07860f9d4bedad737526c8bab101ea8_prof);

    }

    public function getTemplateName()
    {
        return "@LIFOClassif/layoutGeneral.html.twig";
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
