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
        $__internal_af84331bef9896b58132a0b5bfebf83b8b07b3db4bee28600098f5991827d384 = $this->env->getExtension("native_profiler");
        $__internal_af84331bef9896b58132a0b5bfebf83b8b07b3db4bee28600098f5991827d384->enter($__internal_af84331bef9896b58132a0b5bfebf83b8b07b3db4bee28600098f5991827d384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LIFOClassif/layoutAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af84331bef9896b58132a0b5bfebf83b8b07b3db4bee28600098f5991827d384->leave($__internal_af84331bef9896b58132a0b5bfebf83b8b07b3db4bee28600098f5991827d384_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8938cbaaa79dd12df7742a590bc12ea1b7ac09fdf5fe656f02d5e8bc25d9930a = $this->env->getExtension("native_profiler");
        $__internal_8938cbaaa79dd12df7742a590bc12ea1b7ac09fdf5fe656f02d5e8bc25d9930a->enter($__internal_8938cbaaa79dd12df7742a590bc12ea1b7ac09fdf5fe656f02d5e8bc25d9930a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    \t";
        // line 5
        $this->displayBlock('LIFOClassif_body', $context, $blocks);
        // line 7
        echo "    \t
    ";
        
        $__internal_8938cbaaa79dd12df7742a590bc12ea1b7ac09fdf5fe656f02d5e8bc25d9930a->leave($__internal_8938cbaaa79dd12df7742a590bc12ea1b7ac09fdf5fe656f02d5e8bc25d9930a_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_8e419449a2f2373ed1580311b9743790200c416171eb3879d66c2c063dec699c = $this->env->getExtension("native_profiler");
        $__internal_8e419449a2f2373ed1580311b9743790200c416171eb3879d66c2c063dec699c->enter($__internal_8e419449a2f2373ed1580311b9743790200c416171eb3879d66c2c063dec699c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "    \t";
        
        $__internal_8e419449a2f2373ed1580311b9743790200c416171eb3879d66c2c063dec699c->leave($__internal_8e419449a2f2373ed1580311b9743790200c416171eb3879d66c2c063dec699c_prof);

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
