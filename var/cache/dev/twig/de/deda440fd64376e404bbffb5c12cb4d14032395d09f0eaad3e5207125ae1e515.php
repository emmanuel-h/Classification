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
        $__internal_b2fe5e9ec178b5562346ef16480e014a1e0e9346b244454739d58253db0df572 = $this->env->getExtension("native_profiler");
        $__internal_b2fe5e9ec178b5562346ef16480e014a1e0e9346b244454739d58253db0df572->enter($__internal_b2fe5e9ec178b5562346ef16480e014a1e0e9346b244454739d58253db0df572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle::layoutGeneral.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2fe5e9ec178b5562346ef16480e014a1e0e9346b244454739d58253db0df572->leave($__internal_b2fe5e9ec178b5562346ef16480e014a1e0e9346b244454739d58253db0df572_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_38e0fa96a0f1fdc148528e284ce2c4dd09969a85839eeda7d603f9cff8dcf51b = $this->env->getExtension("native_profiler");
        $__internal_38e0fa96a0f1fdc148528e284ce2c4dd09969a85839eeda7d603f9cff8dcf51b->enter($__internal_38e0fa96a0f1fdc148528e284ce2c4dd09969a85839eeda7d603f9cff8dcf51b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    \t";
        // line 5
        $this->displayBlock('LIFOClassif_body', $context, $blocks);
        // line 7
        echo "    \t
    ";
        
        $__internal_38e0fa96a0f1fdc148528e284ce2c4dd09969a85839eeda7d603f9cff8dcf51b->leave($__internal_38e0fa96a0f1fdc148528e284ce2c4dd09969a85839eeda7d603f9cff8dcf51b_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_c51ced43ed4d376e37351f0e96109b894b0a7b1a4153f5447437c2b39d80a9af = $this->env->getExtension("native_profiler");
        $__internal_c51ced43ed4d376e37351f0e96109b894b0a7b1a4153f5447437c2b39d80a9af->enter($__internal_c51ced43ed4d376e37351f0e96109b894b0a7b1a4153f5447437c2b39d80a9af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "    \t";
        
        $__internal_c51ced43ed4d376e37351f0e96109b894b0a7b1a4153f5447437c2b39d80a9af->leave($__internal_c51ced43ed4d376e37351f0e96109b894b0a7b1a4153f5447437c2b39d80a9af_prof);

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
