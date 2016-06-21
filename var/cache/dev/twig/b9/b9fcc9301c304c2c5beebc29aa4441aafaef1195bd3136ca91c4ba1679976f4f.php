<?php

/* LIFOClassifBundle::layoutAdmin.html.twig */
class __TwigTemplate_bc85a8408e10c2b4663222f7de80f72f7ddde689141173b4df11892d438f4dfb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "LIFOClassifBundle::layoutAdmin.html.twig", 1);
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
        $__internal_a3b0d9acea364845b31836b9215bca8bb6c67d0a02e63b4621ba212ebf1646a1 = $this->env->getExtension("native_profiler");
        $__internal_a3b0d9acea364845b31836b9215bca8bb6c67d0a02e63b4621ba212ebf1646a1->enter($__internal_a3b0d9acea364845b31836b9215bca8bb6c67d0a02e63b4621ba212ebf1646a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle::layoutAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3b0d9acea364845b31836b9215bca8bb6c67d0a02e63b4621ba212ebf1646a1->leave($__internal_a3b0d9acea364845b31836b9215bca8bb6c67d0a02e63b4621ba212ebf1646a1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_62dd5044eee4c72c2a759213d5976d4f1c12adfe2f5268aa134bb8c8588326a9 = $this->env->getExtension("native_profiler");
        $__internal_62dd5044eee4c72c2a759213d5976d4f1c12adfe2f5268aa134bb8c8588326a9->enter($__internal_62dd5044eee4c72c2a759213d5976d4f1c12adfe2f5268aa134bb8c8588326a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    \t";
        // line 5
        $this->displayBlock('LIFOClassif_body', $context, $blocks);
        // line 7
        echo "    \t
    ";
        
        $__internal_62dd5044eee4c72c2a759213d5976d4f1c12adfe2f5268aa134bb8c8588326a9->leave($__internal_62dd5044eee4c72c2a759213d5976d4f1c12adfe2f5268aa134bb8c8588326a9_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_8c450af3a1de4bf3c99b53d08e19e0bf5894d1734615d1677fd895a7b8d3c78a = $this->env->getExtension("native_profiler");
        $__internal_8c450af3a1de4bf3c99b53d08e19e0bf5894d1734615d1677fd895a7b8d3c78a->enter($__internal_8c450af3a1de4bf3c99b53d08e19e0bf5894d1734615d1677fd895a7b8d3c78a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "    \t";
        
        $__internal_8c450af3a1de4bf3c99b53d08e19e0bf5894d1734615d1677fd895a7b8d3c78a->leave($__internal_8c450af3a1de4bf3c99b53d08e19e0bf5894d1734615d1677fd895a7b8d3c78a_prof);

    }

    public function getTemplateName()
    {
        return "LIFOClassifBundle::layoutAdmin.html.twig";
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
