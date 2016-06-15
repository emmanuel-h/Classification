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
        $__internal_b44a64af32ef94ee30affc80488c7a121f4d581c6d7616a2f309d9be90264dde = $this->env->getExtension("native_profiler");
        $__internal_b44a64af32ef94ee30affc80488c7a121f4d581c6d7616a2f309d9be90264dde->enter($__internal_b44a64af32ef94ee30affc80488c7a121f4d581c6d7616a2f309d9be90264dde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LIFOClassifBundle::layoutAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b44a64af32ef94ee30affc80488c7a121f4d581c6d7616a2f309d9be90264dde->leave($__internal_b44a64af32ef94ee30affc80488c7a121f4d581c6d7616a2f309d9be90264dde_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b0d81e488da3280f485cee6f924885a264725570983e3b32689323296a6e4a32 = $this->env->getExtension("native_profiler");
        $__internal_b0d81e488da3280f485cee6f924885a264725570983e3b32689323296a6e4a32->enter($__internal_b0d81e488da3280f485cee6f924885a264725570983e3b32689323296a6e4a32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    \t";
        // line 5
        $this->displayBlock('LIFOClassif_body', $context, $blocks);
        // line 7
        echo "    \t
    ";
        
        $__internal_b0d81e488da3280f485cee6f924885a264725570983e3b32689323296a6e4a32->leave($__internal_b0d81e488da3280f485cee6f924885a264725570983e3b32689323296a6e4a32_prof);

    }

    // line 5
    public function block_LIFOClassif_body($context, array $blocks = array())
    {
        $__internal_cab1e72213eeb5fa1c48e0aeacf4eb8b67275c3da1030267350839e0525beeb7 = $this->env->getExtension("native_profiler");
        $__internal_cab1e72213eeb5fa1c48e0aeacf4eb8b67275c3da1030267350839e0525beeb7->enter($__internal_cab1e72213eeb5fa1c48e0aeacf4eb8b67275c3da1030267350839e0525beeb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "LIFOClassif_body"));

        // line 6
        echo "    \t";
        
        $__internal_cab1e72213eeb5fa1c48e0aeacf4eb8b67275c3da1030267350839e0525beeb7->leave($__internal_cab1e72213eeb5fa1c48e0aeacf4eb8b67275c3da1030267350839e0525beeb7_prof);

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
