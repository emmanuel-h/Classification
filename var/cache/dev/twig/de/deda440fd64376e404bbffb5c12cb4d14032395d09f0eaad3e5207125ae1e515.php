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
        $__internal_c8f1f03412916f766f0e705c49cf83a285c2cd1f58c2d4eaf16126da54a66a8a = $this->env->getExtension("native_profiler");
        $__internal_c8f1f03412916f766f0e705c49cf83a285c2cd1f58c2d4eaf16126da54a66a8a->enter($__internal_c8f1f03412916f766f0e705c49cf83a285c2cd1f58c2d4eaf16126da54a66a8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle::layoutGeneral.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8f1f03412916f766f0e705c49cf83a285c2cd1f58c2d4eaf16126da54a66a8a->leave($__internal_c8f1f03412916f766f0e705c49cf83a285c2cd1f58c2d4eaf16126da54a66a8a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b4799fdd080486b392d04aa02e2660708dd6c2a0c490d8a277759018003c9583 = $this->env->getExtension("native_profiler");
        $__internal_b4799fdd080486b392d04aa02e2660708dd6c2a0c490d8a277759018003c9583->enter($__internal_b4799fdd080486b392d04aa02e2660708dd6c2a0c490d8a277759018003c9583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    \t";
        // line 5
        $this->displayBlock('LIFOClassif_body', $context, $blocks);
        // line 7
        echo "    \t
    ";
        
        $__internal_b4799fdd080486b392d04aa02e2660708dd6c2a0c490d8a277759018003c9583->leave($__internal_b4799fdd080486b392d04aa02e2660708dd6c2a0c490d8a277759018003c9583_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_df7636d7bf0d1f5284088ed2bd90cbd58f12918f536c31b8a8c1fae4cc3ac8b9 = $this->env->getExtension("native_profiler");
        $__internal_df7636d7bf0d1f5284088ed2bd90cbd58f12918f536c31b8a8c1fae4cc3ac8b9->enter($__internal_df7636d7bf0d1f5284088ed2bd90cbd58f12918f536c31b8a8c1fae4cc3ac8b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "    \t";
        
        $__internal_df7636d7bf0d1f5284088ed2bd90cbd58f12918f536c31b8a8c1fae4cc3ac8b9->leave($__internal_df7636d7bf0d1f5284088ed2bd90cbd58f12918f536c31b8a8c1fae4cc3ac8b9_prof);

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
