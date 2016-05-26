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
        $__internal_e57cdb3192f0452129c166e14d45bcc471e6d9e16b47bd4ece3ecc424a9f2769 = $this->env->getExtension("native_profiler");
        $__internal_e57cdb3192f0452129c166e14d45bcc471e6d9e16b47bd4ece3ecc424a9f2769->enter($__internal_e57cdb3192f0452129c166e14d45bcc471e6d9e16b47bd4ece3ecc424a9f2769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/layoutGeneral.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e57cdb3192f0452129c166e14d45bcc471e6d9e16b47bd4ece3ecc424a9f2769->leave($__internal_e57cdb3192f0452129c166e14d45bcc471e6d9e16b47bd4ece3ecc424a9f2769_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_261c99e88e92363109c5b25985b14fdcddd99595499b43d9ebbb734b2deec137 = $this->env->getExtension("native_profiler");
        $__internal_261c99e88e92363109c5b25985b14fdcddd99595499b43d9ebbb734b2deec137->enter($__internal_261c99e88e92363109c5b25985b14fdcddd99595499b43d9ebbb734b2deec137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    \t";
        // line 5
        $this->displayBlock('LIFOClassif_body', $context, $blocks);
        // line 7
        echo "    \t
    ";
        
        $__internal_261c99e88e92363109c5b25985b14fdcddd99595499b43d9ebbb734b2deec137->leave($__internal_261c99e88e92363109c5b25985b14fdcddd99595499b43d9ebbb734b2deec137_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_ff69071edd0a982fbedcee48893b70c94d002a800cb3b6f7cdeef61892f3de1b = $this->env->getExtension("native_profiler");
        $__internal_ff69071edd0a982fbedcee48893b70c94d002a800cb3b6f7cdeef61892f3de1b->enter($__internal_ff69071edd0a982fbedcee48893b70c94d002a800cb3b6f7cdeef61892f3de1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "    \t";
        
        $__internal_ff69071edd0a982fbedcee48893b70c94d002a800cb3b6f7cdeef61892f3de1b->leave($__internal_ff69071edd0a982fbedcee48893b70c94d002a800cb3b6f7cdeef61892f3de1b_prof);

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
