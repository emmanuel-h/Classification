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
        $__internal_58e8d80b937c787228e91e72101aaa115ea1894051ad55387b31d339bbfeba7b = $this->env->getExtension("native_profiler");
        $__internal_58e8d80b937c787228e91e72101aaa115ea1894051ad55387b31d339bbfeba7b->enter($__internal_58e8d80b937c787228e91e72101aaa115ea1894051ad55387b31d339bbfeba7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle::layoutGeneral.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58e8d80b937c787228e91e72101aaa115ea1894051ad55387b31d339bbfeba7b->leave($__internal_58e8d80b937c787228e91e72101aaa115ea1894051ad55387b31d339bbfeba7b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c451502a37c4885d54990455ff255e136d1c53dc6c7470d2ca451ebb535495b1 = $this->env->getExtension("native_profiler");
        $__internal_c451502a37c4885d54990455ff255e136d1c53dc6c7470d2ca451ebb535495b1->enter($__internal_c451502a37c4885d54990455ff255e136d1c53dc6c7470d2ca451ebb535495b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    \t";
        // line 5
        $this->displayBlock('LIFOClassif_body', $context, $blocks);
        // line 7
        echo "    \t
    ";
        
        $__internal_c451502a37c4885d54990455ff255e136d1c53dc6c7470d2ca451ebb535495b1->leave($__internal_c451502a37c4885d54990455ff255e136d1c53dc6c7470d2ca451ebb535495b1_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_bd6106fad61fbd9e00b1afc19a2eecdb424b866dfae9e0c3dbcf7238d89930e4 = $this->env->getExtension("native_profiler");
        $__internal_bd6106fad61fbd9e00b1afc19a2eecdb424b866dfae9e0c3dbcf7238d89930e4->enter($__internal_bd6106fad61fbd9e00b1afc19a2eecdb424b866dfae9e0c3dbcf7238d89930e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "    \t";
        
        $__internal_bd6106fad61fbd9e00b1afc19a2eecdb424b866dfae9e0c3dbcf7238d89930e4->leave($__internal_bd6106fad61fbd9e00b1afc19a2eecdb424b866dfae9e0c3dbcf7238d89930e4_prof);

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
