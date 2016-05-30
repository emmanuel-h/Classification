<?php

/* LIFOClassifBundle::layoutGeneral.html.twig */
class __TwigTemplate_7c296ff27bac2f8634b383bbdde8b8f943df6c3fc60db69e581587a45f5f098d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "LIFOClassifBundle::layoutGeneral.html.twig", 1);
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
        $__internal_b39d4c458ff7468b3ea7753ebcc223e061d22162760d30f87c26b20f373f6e53 = $this->env->getExtension("native_profiler");
        $__internal_b39d4c458ff7468b3ea7753ebcc223e061d22162760d30f87c26b20f373f6e53->enter($__internal_b39d4c458ff7468b3ea7753ebcc223e061d22162760d30f87c26b20f373f6e53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle::layoutGeneral.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b39d4c458ff7468b3ea7753ebcc223e061d22162760d30f87c26b20f373f6e53->leave($__internal_b39d4c458ff7468b3ea7753ebcc223e061d22162760d30f87c26b20f373f6e53_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ad26445b2f5f1c6e97aabad4c10c7a2c79a8c7e806b9885399549fc8dd12c1dd = $this->env->getExtension("native_profiler");
        $__internal_ad26445b2f5f1c6e97aabad4c10c7a2c79a8c7e806b9885399549fc8dd12c1dd->enter($__internal_ad26445b2f5f1c6e97aabad4c10c7a2c79a8c7e806b9885399549fc8dd12c1dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    \t";
        // line 5
        $this->displayBlock('LIFOClassif_body', $context, $blocks);
        // line 7
        echo "    \t
    ";
        
        $__internal_ad26445b2f5f1c6e97aabad4c10c7a2c79a8c7e806b9885399549fc8dd12c1dd->leave($__internal_ad26445b2f5f1c6e97aabad4c10c7a2c79a8c7e806b9885399549fc8dd12c1dd_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_4dac1e4a984271f50eb9d652f91bb34b148c6d796d4a8d69215a80bb112e9230 = $this->env->getExtension("native_profiler");
        $__internal_4dac1e4a984271f50eb9d652f91bb34b148c6d796d4a8d69215a80bb112e9230->enter($__internal_4dac1e4a984271f50eb9d652f91bb34b148c6d796d4a8d69215a80bb112e9230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "    \t";
        
        $__internal_4dac1e4a984271f50eb9d652f91bb34b148c6d796d4a8d69215a80bb112e9230->leave($__internal_4dac1e4a984271f50eb9d652f91bb34b148c6d796d4a8d69215a80bb112e9230_prof);

    }

    public function getTemplateName()
    {
        return "LIFOClassifBundle::layoutGeneral.html.twig";
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
