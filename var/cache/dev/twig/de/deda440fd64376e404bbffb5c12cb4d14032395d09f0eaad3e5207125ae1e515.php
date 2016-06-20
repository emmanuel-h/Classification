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
        $__internal_ab80cf2f63e72c42bf00603bc9b0212d52a30b6d132171699e011cbf0d0356f1 = $this->env->getExtension("native_profiler");
        $__internal_ab80cf2f63e72c42bf00603bc9b0212d52a30b6d132171699e011cbf0d0356f1->enter($__internal_ab80cf2f63e72c42bf00603bc9b0212d52a30b6d132171699e011cbf0d0356f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle::layoutGeneral.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab80cf2f63e72c42bf00603bc9b0212d52a30b6d132171699e011cbf0d0356f1->leave($__internal_ab80cf2f63e72c42bf00603bc9b0212d52a30b6d132171699e011cbf0d0356f1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c17db021b76b505518ca07b3cb34dc2f1c2fcfc6c05391b582df750270c48277 = $this->env->getExtension("native_profiler");
        $__internal_c17db021b76b505518ca07b3cb34dc2f1c2fcfc6c05391b582df750270c48277->enter($__internal_c17db021b76b505518ca07b3cb34dc2f1c2fcfc6c05391b582df750270c48277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    \t";
        // line 5
        $this->displayBlock('LIFOClassif_body', $context, $blocks);
        // line 7
        echo "    \t
    ";
        
        $__internal_c17db021b76b505518ca07b3cb34dc2f1c2fcfc6c05391b582df750270c48277->leave($__internal_c17db021b76b505518ca07b3cb34dc2f1c2fcfc6c05391b582df750270c48277_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_d180183c0a7818ac5582a86395e041e1df4549bcbef3d1f580ce7709af0f72a7 = $this->env->getExtension("native_profiler");
        $__internal_d180183c0a7818ac5582a86395e041e1df4549bcbef3d1f580ce7709af0f72a7->enter($__internal_d180183c0a7818ac5582a86395e041e1df4549bcbef3d1f580ce7709af0f72a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "    \t";
        
        $__internal_d180183c0a7818ac5582a86395e041e1df4549bcbef3d1f580ce7709af0f72a7->leave($__internal_d180183c0a7818ac5582a86395e041e1df4549bcbef3d1f580ce7709af0f72a7_prof);

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
